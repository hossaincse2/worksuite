<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ __(isset($seoDetail) ? $seoDetail->seo_title : $pageTitle) }} | {{ ucwords($setting->company_name)}}</title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="{{ isset($seoDetail) ? $seoDetail->seo_description : '' }}">
    <meta name="author" content="{{ isset($seoDetail) ? $seoDetail->seo_author : '' }}">
    <meta name="keywords" content="{{ isset($seoDetail) ? $seoDetail->seo_keywords : '' }}">

    <meta property="og:title" content="{{ isset($seoDetail) ? $seoDetail->seo_title : '' }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="{{$setting->company_name}}" />
    <meta property="og:description" content="{{ isset($seoDetail) ? $seoDetail->seo_description : '' }}">
    <meta property="og:image" content="{{ $seoDetail->og_image_url }}" />

    <link rel="icon" type="image/png" sizes="16x16" href="{{ $setting->favicon_url }}">
    {{--<link rel="manifest" href="{{ asset('favicon/manifest.json') }}">--}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ $setting->favicon_url }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('saas/css/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_45892087927__navigation_new.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_33242552601_Hero_primary.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_33334490405_Logo_section.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_46107009897_Multi-preview_block.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_46219240077_Solutions_link_block_new.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_46437005576_Testimonial_carousel.min.css') }}" />

    <link rel="stylesheet" href="{{asset('saas/css/module_45892087927__navigation_new.min.css')}}" />
    <link rel="stylesheet" href="{{asset('saas/css/module_33254481444_Hero_tertiary.min.css')}}" />
    <link rel="stylesheet" href="{{asset('saas/css/module_35270417163_Package_comparison.min.css')}}" />
    <link rel="stylesheet" href="{{asset('saas/css/module_35308497389_Comparison_table_complex.min.css')}}" />
    <link rel="stylesheet" href="{{asset('saas/css/module_33451252249_Benefits_and_features.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('saas/css/module_33247277592_Hero_secondary.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_34793991899_Icon_text_row.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_33339471181_Testimonial_secondary.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_34959009542_Locations.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('saas/css/module_33300649247_Image_CTA.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/module_35841017099_Cookie_management_centre.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('saas/css/custom.css') }}" />

    <script src="https://www.google.com/recaptcha/api.js"></script>
    @foreach ($frontWidgets as $item)
        {!! $item->widget_code !!}

    @endforeach

    @stack('head-script')
    <style>

        {!! $frontDetail->custom_css_theme_two !!}
        {{--:root {--}}
        {{--    --main-color: {{ $frontDetail->primary_color }};--}}
        {{--    --main-home-background: {{ $frontDetail->light_color }};--}}
        {{--}--}}

        {{--.section-hero .banner {--}}
        {{--    background: url("{{ $setting->login_background_url }}") center center/cover no-repeat !important;--}}
        {{--}--}}
        {{--.breadcrumb-section::after {--}}
        {{--    background: url("{{ $setting->login_background_url }}") center center/cover no-repeat !important;--}}
        {{--}--}}
        {{--.help-block {--}}
        {{--    color: #8a1f11 !important;--}}
        {{--}--}}
        {{--.js-cookie-consent{--}}
        {{--    position: fixed;--}}
        {{--    bottom: 0;--}}
        {{--    z-index: 1000;--}}
        {{--    width: 100%;--}}
        {{--}--}}
    </style>

    @foreach ($frontWidgets as $item)
        {!! $item->widget_code !!}

    @endforeach

    @stack('head-script')
</head>

<body id="home" class="hs-content-id-33247836173 hs-site-page page">
<div id="body-wrap">
<!-- Topbar -->
@include('sections.saas.saas_header')
<!-- END Topbar -->

<!-- Header -->
@yield('header-section')
<!-- END Header -->

    @if(\Illuminate\Support\Facades\Route::currentRouteName() != 'front.home' && \Illuminate\Support\Facades\Route::currentRouteName() != 'front.get-email-verification')
{{--        <section class="breadcrumb-section">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 text-center">--}}
{{--                        <h2 class="text-uppercase mb-4">{{ ucfirst($pageTitle) }}</h2>--}}
{{--                        <ul class="breadcrumb mb-0 justify-content-center">--}}
{{--                            <li class="breadcrumb-item"><a href="#"> @lang('app.menu.home')</a></li>--}}
{{--                            <li class="breadcrumb-item active">{{ ucfirst($pageTitle) }}</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
@endif
@yield('content')
{{--    <div class="review-container">--}}
{{--        <div class="slideshow-container">--}}

{{--            <div class="mySlides fade">--}}
{{--                <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">--}}
{{--                <div class="text">--}}
{{--                    <h2>Complete applicatie Nieuwe apps voor<br> en vilige terugkeer naar de werlplek</h2>--}}
{{--                    <h3> - Marcel Lewis</h3>--}}
{{--                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="mySlides fade">--}}
{{--                <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">--}}
{{--                <div class="text">--}}
{{--                    <h2>Lorem ipsum dolor sit detudzdae amet<br>.Aenean amet socada commodo sit.</h2>--}}
{{--                    <h3> - Marcel Lewis</h3>--}}
{{--                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="mySlides fade">--}}
{{--                <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">--}}
{{--                <div class="text">--}}
{{--                    <h2>Super geweldig software, wij kunnen<br> ons hele bedrijf ermee runnen</h2>--}}
{{--                    <h3> - Bert</h3>--}}
{{--                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="dots" style="text-align:center">--}}
{{--                <span class="dot" onclick="currentSlide(1)"></span>--}}
{{--                <span class="dot" onclick="currentSlide(2)"></span>--}}
{{--                <span class="dot" onclick="currentSlide(3)"></span>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

<!-- Cta -->
{{--@include('saas.section.cta')--}}
<!-- End Cta -->

    <!-- Footer -->

@include('sections.saas.saas_footer')
<!-- END Footer -->

</div>

<!-- Scripts -->
<script src="{{ asset('saas/js/project.js') }}"></script>
<script src="{{ asset('saas/js/module_45892087927__navigation_new.min.js') }}"></script>
<script src="{{ asset('saas/js/module_33254481444_Hero_tertiary.min.js') }}"></script>
<script src="{{ asset('saas/js/module_35270417163_Package_comparison.min.js') }}"></script>
<script src="{{ asset('saas/js/pricing.min.js') }}"></script>
<script src="{{ asset('saas/js/module_35308497389_Comparison_table_complex.min.js') }}"></script>
<script src="{{ asset('saas/js/module_33242552601_Hero_primary.min.js') }}"></script>
<script src="{{ asset('saas/js/module_46107009897_Multi-preview_block.min.js') }}"></script>
<script src="{{ asset('saas/js/module_46437005576_Testimonial_carousel.min.js') }}"></script>
<script src="{{ asset('saas/js/module_33300649247_Image_CTA.min.js') }}"></script>

<script src="{{ asset('saas/js/v2.js') }}"></script>

<script type="text/javascript" id="hs-script-loader" async defer src="{{ asset('saas/js/5255565.js') }}"></script>

<script defer src="{{ asset('saas/js/index.js') }}"></script>

<!-- start scripts.js -->
<script src="{{ asset('saas/js/scripts.min.js') }}"></script>
<!-- End scripts.js -->

<script src="https://kit.fontawesome.com/7749c9f08a.js"></script>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

@stack('footer-script')
</body>

</html>