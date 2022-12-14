@extends('web-views.layouts.app')

@push('css')
<style>
    .wrapQtyBtn {
        display: block;
        float: none;
        margin-top: 5px;
    }
    .qtyField {
        display: inline-block;
        padding-left: 2px;
    }

    .qtyField .label {
        float: left;
        line-height: 30px;
        padding-right: 5px;
    }
    .qtyField span {
        display: inline-block;
        padding: 0;
        border: 0;
    }

    .qtyField .qtyBtn, .qtyField .qty {
        font-size: 11px;
        width: 25px;
        height: 30px;
        display: inline-block;
        padding: 3px;
    }

    .qtyField a .fa {
        font-size: 11px;
    }

    .anm-plus-r:before {
        content: "\eafb";
    }
    .check-btn{
        padding: 10px 10px;
        background: #e64426;
        color: white;
        font-size: 12px;
    }
    .shopping-btn{
        padding: 10px 10px;
        background: #fbb03b;
        color: white;
        font-size: 12px;
    }
</style>
@endpush

@section('content')
    <section id="cart-block" class="cart-main-block">
        <div class="container-xl">
            <div class="cart-items btm-30">
                <h4 class="cart-heading">
                    @if(session('cart'))
                        {{ count(session('cart')) }}
                        Courses in Cart
                    @else
                        0
                        Courses in Cart
                    @endif
                </h4>
                @if(!session('cart'))
                    <div class="cart-no-result">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="no-result-courses btm-10">cart empty</div>
                        <div class="recommendation-btn text-white text-center">
                            <a href="{{ route('home') }}" class="btn btn-primary" title="Keep Shopping"><b>Keep Shopping</b></a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            @php

                            $total = 0;
                            $original_total = 0;
                            @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php
                                        $sub_total = 0;
                                        $sub_total += $details['price'] * $details['quantity'];

                                        if(!empty($details['retail_price'])){
                                            $total += $sub_total;
                                            $original_total += $details['retail_price'] * $details['quantity'];
                                        }else{
                                            $total += $sub_total;
                                            $original_total += $sub_total;
                                        }
                                    @endphp
                                    <div class="cart-add-block">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-6 col-5">
                                                <div class="cart-img">
                                                    @if($details['product_type']=='course')
                                                        <a href="{{ route('course.single', $details['slug']) }}">
                                                            <img src="{{ asset('public/admin/images/courses') }}/{{ $details['image'] }}" class="bg_img img-fluid" alt="Thumbnail">
                                                        </a>
                                                    @else
                                                        <a href="{{ route('bundle.single', $details['slug']) }}">
                                                            <img src="{{ asset('public/admin/bundle/banners') }}/{{ $details['image'] }}" class="bg_img img-fluid" alt="Thumbnail">
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-2 col-12">
                                                <div class="cart-course-detail">
                                                    <p>
                                                        @if($details['product_type']=='course')
                                                            <a href="{{ route('course.single', $details['slug']) }}">{{ $details['name'] }}</a>
                                                        @else
                                                            <a href="{{ route('bundle.single', $details['slug']) }}">{{ $details['name'] }}</a>
                                                        @endif
                                                    </div>
                                                </p>
                                            </div>

                                            <div class="col-lg-2 col-sm-6 col-6">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField" data-id="{{ $details['slug'] }}">
                                                        <a class="qtyBtn minus update-cart" href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="{{ $details['quantity'] }}" class="product-form__input qty">
                                                        <a class="qtyBtn plus update-cart" href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-6">
                                                <div class="row float-right">
                                                    <div class="col-lg-10 col-10">
                                                        <div class="cart-course-amount">
                                                            <ul>
                                                                <li><a><b>${{ number_format($details['price'], 2) }}</b></a></li>
                                                                @if($details['retail_price'])
                                                                    <li><a><b><strike>${{ number_format($details['retail_price'], 2) }}</strike></b></a></li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-2"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-6">
                                                <div class="row float-right">
                                                    <div class="col-lg-10 col-10">
                                                        <div class="cart-course-amount">
                                                            <ul>
                                                                <li><a><b>${{ number_format($sub_total, 2) }}</b></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="cart-total">
                                <div class="cart-price-detail">
                                    <h4 class="cart-heading">Cart Details:</h4>
                                    <ul>
                                        <li>Total Price<span class="categories-count">$ {{ number_format($original_total, 2) }}</span></li>
                                        @php $offer_discount = $original_total-$total; @endphp
                                        @if($offer_discount > 0)
                                            <li>Offer Discount<span class="categories-count">&nbsp;$ {{ number_format($offer_discount, 2) }}</span></li>
                                        @else
                                            <li>Coupon Discount
                                                <span class="categories-count"><a href="#" data-toggle="modal" data-target="#myModalCoupon" title="report">ApplyCoupon</a></span>
                                            </li>
                                        @endif
                                        @php $percentage = 0 @endphp
                                        @if(isset($offer_discount) && $offer_discount > 0)
                                            @php
                                                $percentage = $offer_discount/$total*100;
                                            @endphp
                                        @endif
                                        <li>Discount Percent<span class="categories-count">{{ round($percentage) }}% off</span></li>
                                        <hr>
                                        <li class="cart-total-two"><b>Grand Total:<span class="categories-count">$ {{ number_format($total, 2) }}</span></b></li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="coupon-apply">
                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <a href="{{ route('home') }}" class="shopping-btn">Continue Shopping</a>
                                        </div>
                                        <div class="col-lg-4 col-12 ml-3">
                                            <a href="{{ route('checkout') }}" class="check-btn">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
@push('js')
<script type="text/javascript">
    function qnt_incre(){
		$(".qtyBtn").on("click", function() {
		  var qtyField = $(this).parent(".qtyField"),
			 oldValue = $(qtyField).find(".qty").val(),
			  newVal = 1;

		  if ($(this).is(".plus")) {
			newVal = parseInt(oldValue) + 1;
		  } else if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		  }
		  $(qtyField).find(".qty").val(newVal);
		});
	}
	qnt_incre();

    $(".update-cart").on('click',function (e) {
        e.preventDefault();
         var ele = $(this);
        $.ajax({
            url: '{{ route("update.cart") }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents(".qtyField").attr("data-id"),
                quantity: ele.parents(".qtyField").find(".qty").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route("remove.from.cart") }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: $(this).attr("data-id")
                    },
                    success: function (response) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        window.location.reload();
                    }
                });
            }
        })
    });

</script>
@endpush

