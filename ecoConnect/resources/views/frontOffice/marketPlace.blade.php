@extends('frontOffice.menu')
@section('marketPlace')
        <!-- main content -->
        <div class="main-content bg-white">
            <div class="middle-sidebar-bottom">
                <div class="container pe-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-wrapper bg-greylight overflow-hidden rounded-3">
                                        <div class="banner-slider owl-carousel owl-theme dot-style2 owl-nav-link link-style3 overflow-hidden">
                                             <div class="owl-items style1 d-flex align-items-center bg-lightblue" >
                                                <div class="row">
                                                    <div class="col-lg-6 p-lg-5 ps-5 pe-5 pt-4" style="padding-right: 20px !important;">
                                                        <div class="card w-100 border-0 ps-lg-5 ps-0 bg-transparent bg-transparent-card">
                                                            <h4 class="font-xssss text-danger ls-3 fw-700 ms-0 mt-4 mb-3">TRENDING</h4>
                                                            <h2 class="fw-300 display2-size display2-md-size lh-2 text-grey-900">New Arrival Buds <br> <b class="fw-700">Collection</b></h2>
                                                            <p class="fw-500 text-grey-500 lh-26 font-xssss pe-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra.</p>
                                                            <a href="#" class="fw-700 text-white rounded-xl bg-primary-gradiant font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">Shop Now</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6"><img  src="{{ Vite::asset('resources/assetsFront/images/pl-22.png') }}" alt="image" class="img-fluid p-md-5 p-4"></div>
                                                </div>
                                            </div>
                                            <div class="owl-items style1 d-flex align-items-center bg-cyan" >
                                                <div class="row">
                                                    <div class="col-lg-6 p-lg-5 ps-5 pe-5 pt-4" style="padding-right: 20px !important;">
                                                        <div class="card w-100 border-0 ps-lg-5 ps-0 bg-transparent bg-transparent-card">
                                                            <h4 class="font-xssss text-white ls-3 fw-700 ms-0 mt-4 mb-3">TRENDING</h4>
                                                            <h2 class="fw-300 display2-size display2-md-size lh-2 text-white">New Arrival Buds <br> <b class="fw-700">Collection</b></h2>
                                                            <p class="fw-500 text-grey-100 lh-26 font-xssss pe-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra.</p>
                                                            <a href="#" class="fw-700 text-grey-900 rounded-xl bg-white font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">Shop Now</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6"><img  src="{{ Vite::asset('resources/assetsFront/images/pl-23.png') }}" alt="image" class="img-fluid p-md-5 p-4"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs mt-1">
                                    <ul class="nav nav-tabs h55 d-flex product-info-tab border-0 ps-4"
                                        id="pills-tab" role="tablist">
                                        <li class="active list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                                href="#navtabs1" data-toggle="tab">Liste des produits</a></li>
                                        <li class="list-inline-item me-5"><a
                                                class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                                href="#navtabs2" data-toggle="tab">Mes produits</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img src="{{ Vite::asset('resources/assetsFront/images/pp-9.png') }}"  alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Textured Sleeveless Camisole</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-10.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Adjustable Shoulder Straps</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-13.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Neck Strappy Camisole</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img src="{{ Vite::asset('resources/assetsFront/images/pp-14.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Scoop-Neck Strappy</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-8.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Butler Stool Ladder</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img   src="{{ Vite::asset('resources/assetsFront/images/pp-22.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Butler Stool Ladder</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-23.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Butler Stool Ladder</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-8.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Butler Stool Ladder</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-9.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Textured Sleeveless Camisole</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img  src="{{ Vite::asset('resources/assetsFront/images/pp-10.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Adjustable Shoulder Straps</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img src="{{ Vite::asset('resources/assetsFront/images/pp-11.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Neck Strappy Camisole</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card w-100 border-0 mt-4">
                                        <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                            <a href="single-product.html"><img src="{{ Vite::asset('resources/assetsFront/images/pp-4.png') }}" alt="product-image" class="w-100 mt-0 mb-0 p-5 mt-4 mb-4"></a>
                                        </div>
                                        <div class="card-body w-100 p-0 text-center">
                                            <div class="star w-100 d-block text-left mt-0 text-center">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}"  alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star.png') }}" alt="star" class="w15">
                                                <img src="{{ Vite::asset('resources/assetsFront/images/star-disable.png') }}" alt="star" class="w15 me-1 me-2">
                                            </div>
                                            <h2 class="mt-1 mb-1"><a href="single-product.html" class="text-black fw-700 font-xsss lh-26">Scoop-Neck Strappy</a></h2>
                                            <h6 class="font-xsss fw-600 text-grey-500 ls-2">$449</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load More</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- main content -->
         @endsection
