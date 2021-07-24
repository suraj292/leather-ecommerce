<div class="main-panel">
    <div class="content-wrapper"  x-data="{ isOpen: false }">
        <div class="page-header">
            <h3 class="page-title"> Category </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Product</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product_category')}}">Category</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sub_category')}}">Sub Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            @if(session()->has('product_deleted'))
                            <div class="col-12 alert-danger mb-3">
                                <p class="m-2">{{ session('product_deleted') }}</p>
                            </div>
                            @endif
                            <div class="col-md-6 col-sm-12 col-lg-2">
                                <h4 class="card-title">Products</h4>
                            </div>
                        </div>

                        <div class="m-3 justify-content-center">
                            <label> Product Category : </label>
                            <select class="custom-select w-100 ml-3" wire:model.lazy="selectedCategory">
                                <option selected>Select product Sub Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->product_category}}</option>
                                @endforeach
                            </select>
                        </div>


                            <div class="m-3 justify-content-center">
                                <label> Product Sub Category : </label>
                                <select class="custom-select w-100 ml-3" wire:model.lazy="selectedSubCategory">
                                    <option selected>Select product Category</option>
                                    @if(!is_null($subCategories))
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{$subCategory->id}}">{{$subCategory->sub_category}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>


                        @if(!is_null($selectedSubCategory))
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary btn-fw w-75" @click="isOpen = !isOpen">+ Add Product</button>
                            </div>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>image</th>
                                    <th>title</th>
                                    <th>price</th>
                                    <th>Edit / Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            @if($product->product_color_img != null)
                                                <img src="{{ url('storage/product/'.explode(',', $product->product_color_img->images)[0]) }}" alt="thumbnail">
                                            @else
                                                <img src="{{ asset('assets\images\test\empty.jpg') }}" alt="thumbnail">
                                            @endif
                                        </td>
                                        <td class="text-success text-uppercase"> {{$product->details->title}} </td>
                                        <td> {{$product->details->price}} </td>
                                        <td>
                                            <button type="button" class="btn btn-inverse-info btn-icon" wire:click="getEditProduct({{$product->id}})">
                                                <i class="mdi mdi-tooltip-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" wire:click="deleteProduct({{$product->id}})">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>

            {{--    for editing product detail and color, Images    --}}
            @if(!is_null($editProductId))
            <livewire:admin.component.edit-product :editProductId="$editProductId" />
            @endif

            {{--  1. Create new product (details Only)  --}}
            @if(is_null($productId))
                @include('partial.admin.create_product_detail')
            @endif

            {{--  2. Add Color name and Image of new Product Detail  --}}
            @if(!is_null($productId))
            <livewire:admin.component.product-color-img  :productId="$productId"/>
            @endif

        </div>

    </div>
</div>
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@endsection
