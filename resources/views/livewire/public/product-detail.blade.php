<div>
    <div class="hidden-hight-div"></div>
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">collection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section style="background-image: url(https://preppywallpapers.com/wp-content/uploads/2019/01/header2.jpg);">
        <div class="collection-wrapper">
            <div class="container pt-5"  style="background-color: white;">
                <div class="row col-md-12 mx-auto">
                    <style>
                        #gallery_01 img{border:2px solid white;}

                        /*Change the colour*/
                        .active img{border:2px solid #333 !important;}
                    </style>
                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <img id="zoom_01"
                                 src="{{ asset('storage/product/small/'.$images[0]) }}"
                                 data-zoom-image="{{ asset('storage/product/large/'.$images[0]) }}"
                                 class="img-fluid blur-up lazyload">
                        </div>
                        <div class="col-lg-12 row mx-auto" id="thumb-image" style="margin-top: 10px;">
                            @foreach($images as $image)
                                <div class="col-2">
                                    <a type="button"
                                       data-image="{{ asset('storage/product/small/'.$image) }}"
                                       data-zoom-image="{{ asset('storage/product/large/'.$image) }}">
                                        <img src="{{ asset('storage/product/small/'.$image) }}" width="60px"/>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <script>
                        $('#zoom_01').elevateZoom({
                            gallery: 'thumb-image',
                            galleryActiveClass: 'active',
                            imageCrossfade: true,

                            zoomType: "lens",
                            cursor: "crosshair",
                            lensSize: 200,
                        });
                    </script>

                    <div class="col-lg-7 accordion-body mx-auto">
                        <div class="product-right product-description-box">
                            <h2>{{ $product->title }}</h2>
                            <h4>
                                @if($product->offer_price)
                                    &#x20b9; {{$product->offer_price}}
                                    <del style="color: orangered;">&#x20b9; {{$product->price}}</del>
                                @else
                                    &#x20b9; {{$product->price}}
                                @endif
                            </h4>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Available Colors
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body" wire:ignore>
                                            <ul>
                                                @foreach( $color as $index => $color )
                                                <li role="button" wire:click="getProductColor({{ $index }})">
                                                    <img src="{{ asset('storage/color_image/'.$color->getColor->color_image ) }}" alt="color" width="40px" class="rounded">
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed p-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            PRODUCT DESCRIPTION
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $product->description }}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed p-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            DIMENSION
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $product->dimension }}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed p-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            CARE INSTRUCTIONS
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $product->care_instruction }}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed p-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                            SPECIFICATIONS
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="bullet-line-list">list one</li>
                                                <li>list two</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="qty-box mt-3">
                                <div class="row col-12">
                                    <div class="col-2">
                                        <span class="fs-6">Quantity:</span>
                                    </div>
                                    <div class="col-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn" wire:click="decrement">
                                                    <i class="ti-angle-left"></i>
                                                </button>
                                            </span>
                                                <input type="text" class="form-control" wire:model="quantity">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn" wire:click="increment">
                                                    <i class="ti-angle-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-buttons mt-3">
                                <a id="cartEffect" class="add-to-cart btn btn-solid hover-solid btn-animation" wire:click="addToCart({{ $product->product_id }})">add to cart</a>
                                <a href="#" class="btn btn-solid">buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts / Reviews or comment -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <!--<li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>Details</a>
                            <div class="material-border"></div>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review" role="tab" aria-selected="false">
                                <i class="icofont icofont-contacts"></i>
                                Write Review
                            </a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form class="theme-form">
                                <div class="form-row row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ms-3">
                                                <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                               required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <input type="text" class="form-control" id="review"
                                               placeholder="Enter your Review Subjects" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <textarea class="form-control" placeholder="Wrire Your Testimonial Here"
                                                  id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Submit YOur
                                            Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->


    <!-- product section start / related product -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row search-product">
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{ asset('assets/images/pro3/33.jpg') }}"
                                                 class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="#"><img src="{{ asset('assets/images/pro3/34.jpg') }}"
                                                 class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-target="#addtocart" title="Add to cart">
                                    <i class="ti-shopping-cart"></i>
                                </button>
                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                                    <i class="ti-search" aria-hidden="true"></i></a>
                                <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->
</div>
@section('style')
<script src="{{ asset('assets/js/jquery.elevatezoom2.js') }}"></script>
{{-- also remove zoom.js --}}
{{--<script src="{{ asset('assets/js/zoom-image.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/main2.js') }}"></script>--}}
@endsection
