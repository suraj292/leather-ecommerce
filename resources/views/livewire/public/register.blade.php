<div>
    <div class="hidden-hight-div"></div>
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>create account</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home /</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <div class="theme-card">

                        <form class="theme-form" wire:submit.prevent="register">
                            <div class="form-row row">
                                <div class="col-md-12">
                                    <label for="fname">Full Name <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" id="fname" placeholder="Full Name" wire:model.debounce.500ms="register.fullName">
{{--                                    @error('register.fname') <p class="text-danger" style="margin-top: -20px;">{{ $message }}</p> @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label for="lname">Last Name</label>--}}
{{--                                    <input type="text" class="form-control" id="lname" placeholder="Last Name" wire:model.debounce.500ms="register.lname">--}}
                                    @error('register.fullName') <p class="text-danger" style="margin-top: -20px;">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">email <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" wire:model.debounce.500ms="register.email">
                                    @error('register.email') <p class="text-danger" style="margin-top: -20px;">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Mobile <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" wire:model.debounce.500ms="register.mobile">
                                    @error('register.mobile') <p class="text-danger" style="margin-top: -20px;">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="password">Password <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" id="password" placeholder="Password" wire:model.debounce.500ms="register.password">
                                    @error('register.password') <p class="text-danger" style="margin-top: -20px;">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm_password">Confirm Password <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" placeholder="Confirm Password" wire:model.debounce.500ms="register.confirmPassword">
                                    @error('register.confirmPassword') <p class="text-danger" style="margin-top: -20px;">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-solid w-auto">create Account</button>
                        </form>

                        <br>
                        <div class="hr-sect"> Or Sign in with </div>

                        <div class="container">
                            <div class="row text-center">

                                <div class="col-md-4">
                                    <a class="btn btn-social btn-lg btn-google rounded m-3">
                                        <i class="fa fa-google"></i>
                                        Google
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a class="btn btn-social btn-lg btn-facebook rounded m-3">
                                        <i class="fa fa-facebook"></i>
                                        Facebook
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a class="btn btn-social btn-lg btn-twitter rounded m-3">
                                        <i class="fa fa-twitter"></i>
                                        Twitter
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
{{--        @else--}}
{{--            <section class="register-page section-b-space">--}}
{{--                <div class="container">--}}
{{--                    <p class="alert-success h5 p-2 rounded">{{session('verifyEmail')}}</p>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        @endif--}}
</div>
@section('style')
    {{--    <link href="{{ asset('assets/css/docs.css') }}" rel="stylesheet" >--}}
    {{--<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/bootstrap-social.css') }}" rel="stylesheet" >
@endsection
