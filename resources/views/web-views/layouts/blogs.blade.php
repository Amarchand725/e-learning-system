<section id="student" class="student-main-block">
    <div class="container-xl">
        <h4 class="student-heading">Recent Blogs</h4>
        <div id="blog-post-slider" class="student-view-slider-main-block owl-carousel">
            @foreach (latestBlogs() as $blog)
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image  protip "
                        data-pt-placement="outside" data-pt-interactive="false"
                        data-pt-title="#prime-next-item-description-block-{{ $blog->id }}">
                        <div class="view-block">
                            <div class="view-img">
                                <a href="#">
                                    @if($blog->extension=='jpg' || $blog->extension=='png' || $blog->extension=='jpeg')
                                        <img data-src="{{ asset('public/admin/images/blogs') }}/{{ $blog->attachment }}" alt="blog" class="img-fluid owl-lazy">
                                    @else
                                        <img style="border-radius: 50%;" src="{{ asset('public/default.png') }}" width="50  px" height="50px" alt="">
                                    @endif
                                </a>
                            </div>
                            <div class="view-user-img">
                                <a href="" title="">
                                    @if($blog->hasCreatedBy->hasUserProfile)
                                        <img src="{{ asset('public/users') }}/{{ $blog->hasCreatedBy->hasUserProfile->profile_image }}" width="50px"  class="img-fluid user-img-one" alt="">
                                    @else
                                        <img src="{{ asset('public/default.png') }}" width="50px"  class="img-fluid user-img-one" alt="">
                                    @endif
                                </a>
                            </div>
                            <div class="tooltip">
                                <div class="tooltip-icon">
                                    <i data-feather="share-2"></i>
                                </div>
                                <span class="tooltiptext">
                                    <div class="instructor-home-social-icon">
                                        <ul>
                                            <li><a href="https://facebook.com/"><i data-feather="facebook"></i></a></li>
                                            <li><a href="#"><i data-feather="twitter"></i></a></li>
                                            <li><a href="https://www.youtube.com/watch?v=2cbvZf1jIJM"><i data-feather="youtube"></i></a></li>
                                            <li><a href="https://www.youtube.com/watch?v=ImtZ5yENzgE"><i data-feather="linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </span>
                            </div>
                            <div class="view-dtl">
                                <div class="view-heading">
                                    <a href="">
                                        {{ $blog->title }}
                                    </a>
                                </div>
                                <div class="user-name">
                                    <h6>By <span><a href="#">{{ $blog->hasCreatedBy->roles->first()->name }}</a></span></h6>
                                </div>
                                <div class="view-footer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="view-date">
                                                <a href="#">
                                                    <i data-feather="calendar"></i>
                                                    {{ date('d-m-Y', strtotime($blog->created_at)) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="view-time">
                                                <a href="#">
                                                    <i data-feather="clock"></i>
                                                    {{ date('H:i:s A', strtotime($blog->created_at)) }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="prime-next-item-description-block-{{ $blog->id }}" class="prime-description-block">
                        <div class="prime-description-under-block">
                            <div class="prime-description-under-block">
                                <h5 class="description-heading">{{ $blog->title }}</h5>
                                <div class="row btm-20">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="view-date">
                                            <a href="#"><i data-feather="calendar"></i> {{ date('d-m-Y', strtotime($blog->created_at)) }}</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="view-time">
                                            <a href="#"><i data-feather="clock"></i> 12{{ date('H:is A', strtotime($blog->created_at)) }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-des">
                                    <p style="text-align: justify !important">{!! $blog->description !!}</p>
                                </div>
                                <div class="des-btn-block">
                                    <div class="row">
                                        <div class="col-lg-12">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
