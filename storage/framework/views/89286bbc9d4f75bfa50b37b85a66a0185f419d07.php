<script>
    $('#become-instructor-form').on('submit',function(e){
        e.preventDefault();
        var url = $(this).attr('data-action');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success:function(response){
                $('#myModalinstructor').modal('hide');
                if(response.code==200){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'You have sent request to become instructor successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong try again.',
                    })
                }
            },
            error: function(response) {
                if(response.responseJSON.errors.first_name){
                    $('#error-first_name').text(response.responseJSON.errors.first_name);
                }else{
                    $('#error-first_name').text('');
                }
                if(response.responseJSON.errors.last_name){
                    $('#error-last_name').text(response.responseJSON.errors.last_name);
                }else{
                    $('#error-last_name').text('');
                }
                if(response.responseJSON.errors.email){
                    $('#error-email').text(response.responseJSON.errors.email);
                }else{
                    $('#error-email').text('');
                }
                if(response.responseJSON.errors.mobile){
                    $('#error-mobile').text(response.responseJSON.errors.mobile);
                }else{
                    $('#error-mobile').text('');
                }
                if(response.responseJSON.errors.details){
                    $('#error-details').text(response.responseJSON.errors.details);
                }else{
                    $('#error-details').text('');
                }
                if(response.responseJSON.errors.resume){
                    $('#error-resume').text(response.responseJSON.errors.resume);
                }else{
                    $('#error-resume').text('');
                }
                if(response.responseJSON.errors.profile_image){
                    $('#error-profile_image').text(response.responseJSON.errors.profile_image);
                }else{
                    $('#error-profile_image').text('');
                }
            },
        });
    });

    $('.numberonly').keypress(function (e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
    });

    imgInput.onchange = evt => {
        const [file] = imgInput.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }

    feather.replace()

    $(document).ready(function() {
        $('#list').click(function(event){
            event.preventDefault();
            $('#posts .item').addClass('col-lg-12');
            $('#posts .course-bought-block-one').addClass('col-lg-3');
            $('#posts .course-bought-block-one').removeClass('col-md-12');
            $('#posts .course-bought-block-one img').removeClass('grid-img');
            $('#posts .course-bought-block-one .img-wishlist').addClass('img-wishlist-btm');
            // $('#posts .course-bought-block-one .img-wishlist').removeClass('d-block');
            $('#posts .course-bought-block-one .view-user-img .user-img-one').addClass('d-none');
            $('#posts .course-bought-block-one .view-user-img .user-img-one').removeClass('d-block');
            $('#posts .categories-popularity-dtl-block').addClass('col-lg-7');
            $('#posts .categories-popularity-dtl-block').removeClass('col-md-12');
            $('#posts .categories-popularity-dtl-block').removeClass('mb-3');
            $('#posts .course-rate-block').addClass('col-lg-2');
            $('#posts .course-rate-block').removeClass('col-lg-12');
            $('#posts .rate').removeClass('text-left');
            $('#posts .rate').addClass('text-right');
            $('#grid').removeClass('active');
            $('#list').addClass('active');
        });

        $('#grid').click(function(event){
            event.preventDefault();
            $('#posts .item').removeClass('col-lg-12');
            $('#posts .item').addClass('col-lg-6');
            $('#posts .course-bought-block-one').removeClass('col-lg-3');
            $('#posts .course-bought-block-one').addClass('col-md-12');
            $('#posts .course-bought-block-one img').addClass('grid-img');
            // $('#posts .course-bought-block-one .img-wishlist').addClass('d-block');
            $('#posts .course-bought-block-one .img-wishlist').removeClass('img-wishlist-btm');
            $('#posts .course-bought-block-one .view-user-img .user-img-one').removeClass('d-none');
            $('#posts .course-bought-block-one .view-user-img .user-img-one').addClass('d-block');
            $('#posts .categories-popularity-dtl-block').removeClass('col-lg-7');
            $('#posts .categories-popularity-dtl-block').addClass('col-md-12');
            $('#posts .categories-popularity-dtl-block').addClass('mb-3');
            $('#posts .course-rate-block').removeClass('col-lg-2');
            $('#posts .course-rate-block').addClass('col-lg-12');
            $('#posts .rate').addClass('text-left');
            $('#posts .rate').removeClass('text-right');
            // $('#posts .img-wishlist').addClass('text-left');
            // $('#posts .img-wishlist').removeClass('text-right');
            $('#list').removeClass('active');
            $('#grid').addClass('active');
        });
    });

    $(document).ready(function () {
        // Custom function which toggles between sticky class (is-sticky)
        var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
            var stickyHeight = sticky.outerHeight();
            var stickyTop = stickyWrapper.offset().top;
            if (scrollElement.scrollTop() >= stickyTop) {
                stickyWrapper.height(stickyHeight);
                sticky.addClass("is-sticky");
            }
            else {
                sticky.removeClass("is-sticky");
                stickyWrapper.height('auto');
            }
        };

        // Find all data-toggle="sticky-onscroll" elements
        $('[data-toggle="sticky-onscroll"]').each(function () {
            var sticky = $(this);
            var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
            sticky.before(stickyWrapper);
            sticky.addClass('sticky');

            // Scroll & resize events
            $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                stickyToggle(sticky, stickyWrapper, $(this));
            });

            // On page load
            stickyToggle(sticky, stickyWrapper, $(window));
        });
    });

    $(function(){
        "use strict";

        $('.lazy').lazy({

            effect: "fadeIn",
            effectTime: 1000,
            scrollDirection: 'both',
            threshold: 0
        });
    });
</script>

<script src="https://www.facebook.com/" async></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31923653-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-31923653-1');

    $('.prime-cat').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('.sub-cate').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('.child-cate').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('#myButton').venomButton({
        phone: '911234567890',
        popupMessage: 'hiii',
        message: "",
        showPopup: true,
        position: "left",
        linkButton: false,
        showOnIE: false,
        headerTitle: 'welcome',
        headerColor: '#000000',
        backgroundColor: '#25d366',
        zIndex: 999999999999,
        buttonImage: '<img src="https://eclass.mediacity.co.in/demo/public/images/icons/whatsapp.svg" />',
        size:'60px',
    });

    (function ($) {
        "use strict";
        $(function () {
            $("#home-tab").trigger("click");
        });
    })(jQuery);
    function showtab(id) {
        $.ajax({
            type: 'GET',
            // url:'https://eclass.mediacity.co.in/demo/public/tabcontent/' + id,
            dataType: 'json',
            success: function (data) {
                $('.btn_more').html(data.btn_view);
                $('#tabShow').html(data.tabview);
            }
        });
    }
</script>

<script src="<?php echo e(asset('public/website/js/colorbox-script.js')); ?>"></script>

<script>
    "use Strict";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        $('.compare').on('click', function (e) {
            var id = $(this).data('id');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'compare/dataput',
                data: {
                    id: id
                },
                success: function (data) {}
            });
        });
    });

    $(document).ready(function(){
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#elearningVideo").attr('src');
        
        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#video_modal").on('hide.bs.modal', function(){
            $("#elearningVideo").attr('src', '');
        });
        
        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#video_modal").on('show.bs.modal', function(){
            $("#elearningVideo").attr('src', url);
        });
    });
</script><?php /**PATH C:\xampp\htdocs\e-class\resources\views/web-views/layouts/custome_js.blade.php ENDPATH**/ ?>