@extends('web-views.layouts.app')

@push('css')
@endpush

@section('content')
    <section id="business-home" class="business-home-main-block">
        <div class="business-img">
            <img src="{{ asset('public/website/images/logo/wishlist-banner.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="overlay-bg"></div>
        <div class="container-xl">
            <div class="business-dtl">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="bredcrumb-dtl">
                            <h1 class="wishlist-home-heading text-white">Wishlist</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="search-block" class="search-main-block search-block-no-result text-center">
        <div class="container-xl">
            @if(!empty($wishes))
                <div class="row">
                    @foreach ($wishes as $wish)
                        <div class="col-lg-3 col-md-6" id="{{ $wish->hasProduct->slug }}">
                            <div class="view-block">
                                <div class="view-img">
                                    <a href="{{ route('course.single', $wish->hasProduct->slug) }}">
                                        <img src="{{ asset('public/admin/images/courses') }}/{{ $wish->hasProduct->thumbnail }}" class="img-fluid" alt="course">
                                    </a>
                                </div>
                                <div class="view-user-img">
                                    <a href="{{ route('user.profile', $wish->hasProduct->hasInstructor->slug) }}" title="">
                                        @if($wish->hasProduct->hasUserProfile)
                                            <img src="{{ asset('public/users') }}/{{ $wish->hasProduct->hasUserProfile->profile_image }}" width="50px"  class="img-fluid user-img-one" alt="">
                                        @else
                                            <img src="{{ asset('public/default.png') }}" width="50px"  class="img-fluid user-img-one" alt="">
                                        @endif
                                    </a>
                                </div>
                                <div class="view-dtl">
                                    <div class="view-heading">
                                        <a href="{{ route('course.single', $wish->hasProduct->slug) }}">{{ $wish->hasProduct->title }}</a>
                                    </div>
                                    <div class="user-name">
                                        <h6>By <span><a href="{{ route('user.profile', $wish->hasProduct->hasInstructor->slug) }}">{{ $wish->hasProduct->hasInstructor->name }}</a></span></h6>
                                    </div>
                                    <div class="rating">
                                        <ul> 
                                            <li>
                                                <div class="pull-left">
                                                No Rating
                                                </div>
                                            </li>

                                            <li class="reviews">
                                            (0 Reviews)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="view-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="count-user">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span> 0</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="rate text-right">
                                                    <ul>
                                                        @if($wish->hasProduct->is_paid)
                                                            <li><a><b>${{ number_format($wish->hasProduct->price, 2) }}</b></a></li>
                                                            @if($wish->hasProduct->discount != NULL)
                                                                <li><a><b><strike>${{ number_format($wish->hasProduct->retail_price, 2) }}</strike></b></a></li>
                                                            @endif
                                                        @else
                                                            <li>FREE</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-wishlist">
                                <div class="protip-wishlist">
                                    <ul>
                                        <li class="protip-wish-btn">   
                                            <div class="cart-btn">
                                                <a href="{{ route('add.to.cart', $wish->hasProduct->slug) }}" class="btn btn-primary wishlist-cart" title="Add To Cart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart rgt-10"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="protip-wish-btn-two">
                                            <div class="wishlist-btn txt-rgt">
                                                <button type="submit" class="btn btn-primary trash-icon remove-wish-list-btn" data-url="{{ route('user.wishlist.destroy') }}" data-product-slug="{{ $wish->hasProduct->slug }}" title="Remove From Wishlist">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash rgt-10">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-result-img btm-20">
                    <img src="{{ asset('public/website/images/logo/wishlist-empty-box.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="no-result-courses btm-10">Empty Wishlist</div>
                <div class="recommendation-btn text-white text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary" title="search"><b>Browse</b></a>
                </div> 
            @endif
        </div>
    </section>

    <section id="learning-courses" class="learning-courses-main-block">
        <div class="container-xl">
            <div class="row"></div>
        </div>
    </section>
@endsection