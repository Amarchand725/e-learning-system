<section id="testimonial" class="testimonial-main-block">
    <div class="container-xl">
        <h4>Home Testimonial</h4>
        <div id="testimonial-slider" class="testimonial-slider-main-block owl-carousel">
            <div class="item testimonial-block text-center">
                @foreach (reviews() as $review)
                    <div class="testimonial-block-one">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="testimonial-img">
                                    @if($review->hasUser->hasUserProfile->profile_image)
                                        <img src="{{ asset('public/admin/images/profiles') }}/{{ $review->hasUser->hasUserProfile->profile_image }}" width="50px"  class="img-fluid owl-lazy" alt="">
                                    @else
                                        <img src="{{ asset('public/default.png') }}" width="50px"  class="img-fluid owl-lazy" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                <div class="testimonial-name">
                                    <h5 class="testimonial-heading">{{ $review->hasUser->name }}</h5>
                                    <p class="testimonial-para"></p>
                                </div>
                                <div class="testimonial-rating">
                                    <?php
                                    for($j=1; $j<=5; $j++){
                                    ?>
                                        @if($j<=$review->rate)
                                            <i class='fa fa-star' style='color:orange'></i>
                                        @else
                                            <i class='fa fa-star'></i>
                                        @endif
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <p>{!! $review->review !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
