<div class="col-12">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if(session()->has('product_detail_updated'))
                <p class="alert-success p-2">{{ session('product_detail_updated') }}</p>
                @endif
                <h4 class="card-title">Product Details</h4>
                <form class="forms-sample" wire:submit.prevent="editProductDetails">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Product Title" wire:model.lazy="editProductTitle">
                            @error('editProductTitle') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Dimension</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Product Dimension" wire:model.lazy="editProductDimension">
                            @error('editProductDimension') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Product description" wire:model.lazy="editProductDescription">
                            @error('editProductDescription') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Care Instruction</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Care Instruction" wire:model.lazy="editProductCareInstruction">
                            @error('editProductCareInstruction') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Product Price" wire:model.lazy="editProductPrice">
                            @error('editProductPrice') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Offer Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Product Price" wire:model.lazy="editProductOfferPrice">
                            @error('editProductOfferPrice') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="col-4">
                            <div class="form-check col-sm-9 mx-auto">
                                <input type="checkbox" class="form-check-input" wire:model.lazy="editProductReturn">
                                <label class="form-check-label"> Return </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check col-sm-9 mx-auto">
                                <input type="checkbox" class="form-check-input" wire:model.lazy="editProductSale">
                                <label class="form-check-label"> Sale </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check col-sm-9 mx-auto">
                                <input type="checkbox" class="form-check-input" wire:model.lazy="editProductDiscount">
                                <label class="form-check-label"> Discount </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
{{--                    <button class="btn btn-light" @click="isOpen = !isOpen">Cancel</button>--}}
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product Colors</h4>
                <form class="forms-sample">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Color</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product->product_all_img as $color)
                            <tr>
                                <td>
                                    <div style="width: 40px; height: 40px; background-color: {{ $color->product_color }}; border-radius: 6px;"></div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-inverse-info btn-icon" wire:click="getProductColorId({{$color->id}})">
                                        <i class="mdi mdi-tooltip-edit"></i>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-inverse-danger btn-icon" wire:click="deleteColorImg({{ $color->id }})">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <button class="btn btn-gradient-success" wire:click.prevent="addColor">+ Add Color</button>
                </form>
            </div>
        </div>
    </div>

    @if(!is_null($addNewColor))
        <livewire:admin.component.product-color-img :productId="$addNewColor"/>
    @endif

    @include('partial.admin.edit_product_images')

</div>
