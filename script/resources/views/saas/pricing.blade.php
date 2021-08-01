@extends('layouts.sass-app')

@push('head-script')
    @if(count($packages) > 0)
    <style>
        .package-column {
            max-width: {{ 100/count($packages) }}%;
            flex: 0 0 {{ 100/count($packages) }}%
        }
        .hero-content{
            height: 300px;
        }
    </style>
    @endif
@endpush

@section('content')
    <main class="main">
                <span
                        id="hs_cos_wrapper_module_140190329510711990"
                        class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container"
                        style=""
                        data-hs-cos-general-type="widget_container"
                        data-hs-cos-type="widget_container"
                >
                    <div id="hs_cos_wrapper_widget_1600856748704" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="hero-tertiary bg-grey1">
                            <div class="row">
                                <div class="column small-12 medium-12 large-12">
                                    <div class="hero-content text-center flex-container flex-dir-column align-center">
                                        <h1 class="p">Pricing</h1>
                                        <h2 class="h1">{{ $trFrontDetail->price_title ?: $defaultTrFrontDetail->price_title }}</h2>
                                        <p>{{ $trFrontDetail->price_description ?: $defaultTrFrontDetail->price_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1600858191674" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
{{--                        <section class="pricing-section bg-grey1">--}}
{{--                            <div class="pricing-switches">--}}
{{--                                <div class="row small-row">--}}
{{--                                    <div class="column pricing-btn-wrapper flex-container justify-center" id="type-switch-wrapper">--}}
{{--                                        <div class="toggle">--}}
{{--                                            <input id="type-switch" type="checkbox" data-btn-type="pricingType" />--}}
{{--                                            <label for="type-switch">--}}
{{--                                                <div class="toggle__switch" data-checked="Rooms" data-unchecked="Beds"></div>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="column pricing-btn-wrapper flex-container justify-end" id="bill-switch-wrapper">--}}
{{--                                        <div class="toggle">--}}
{{--                                            <input id="billing-switch" type="checkbox" data-btn-type="billingType" />--}}
{{--                                            <label for="billing-switch">--}}
{{--                                                <div class="toggle__switch switch_reverse" data-checked="Annually" data-unchecked="Monthly"></div>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <p id="discount-notice-wrap"><span id="discount-notice">(Save 10%)</span></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
                        <section class="packages-section bg-grey1">
                            <div class="row small-row small-up-1 medium-up-12 large-up-12 align-start align-stretch">
{{--                                <div id="currency-wrapper" class="button button--secondary">--}}
{{--                                    <select name="currency" id="select-currency" data-btn-type="currency">--}}
{{--                                        <option value="" disabled selected>Change currency (€)</option>--}}
{{--                                        <option value="euros">€ EUR</option>--}}
{{--                                        <option value="usd">$ USD</option>--}}
{{--                                        <option value="pounds">£ GBP</option>--}}
{{--                                        <option value="aud">$ AUD</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                @foreach ($packages as $key => $item)
                                    @if($item->is_free==true)
                                    <div class="column flex-container flex-dir-column price-type {{$item->name}}">
                                    <div class="price-details row medium-up-10 large-up-10">
{{--                                        @if($key==1)--}}
{{--                                            @dd($item)--}}
{{--                                        @endif--}}
                                        <h3 class="h4 price-title text-left">{{$item->name}}</h3>
                                        <p class="package-desc text-left">{{$item->description}}</p>
                                        <div class="price-info">
                                        <p><strong>Get started with {{$item->name}}:</strong></p>
                                        @php
                                            $packageModules = (array)json_decode($item->module_in_package);
                                            $count = 0;
                                        @endphp
                                            @foreach($packageFeatures as $packageFeature)
                                                @if($count%6 == 0)
                                                    <ul class="price-feat-list">
                                                  @endif
                                                             @if(in_array($packageFeature, $activeModule))
                                                                @if(in_array($packageFeature, $packageModules))
                                                                    <li>{{$packageFeature}}
                                                                @else
                                                                    <li>{{$packageFeature}}
                                                                        @endif&nbsp;
                                                                </li>
                                                                @endif
                                                      @php $count++; @endphp
                                                    @if($count%6 == 0)
                                                        </ul>
                                                    @endif

                                                   @endforeach

                                    </div>
                                        <div class="price-wrapper text-center">
                                            @if($item->is_free==0)
                                                <p class="h3" id="package-one-price-value">{{$item->monthly_price}}</p>
                                                <p class="price-full" id="package-one-full">{{$item->monthly_price}}</p>
                                                <strong>per month <a href="">{{$item->monthly_price}}</a></strong></p>
                                                <p>Billed <span class="bill-time" data-time="Monthly">annually</span> <span class="bill-cent">{{$item->annual_price}}</span></p>
                                            @else
                                                <p class="h3 price" id="package-one-price-value">{{$global->currency->currency_symbol}}{{$item->monthly_price}}</p>
                                                <p class="price-full" id="package-one-full">{{$global->currency->currency_symbol }}{{$item->monthly_price}}</p>
                                                <p class="price-description">
                                                <strong>per month <a href="#smallprint-anchor">{{$item->monthly_price}}</a></strong></p>
                                                <p>Billed <span class="bill-time" data-time="Monthly">annually</span> <span class="bill-cent">{{$global->currency->currency_symbol}}{{$item->annual_price}}</span></p>
                                            @endif
{{--                                            <p>--}}
{{--                                                <small>Minimum package is <span class="min-price" data-euros="€150" data-pounds="£150" data-usd="$200" data-aud="A$250">€150</span>/month</small>--}}
{{--                                            </p>--}}
                                            <a href="{{ route('front.signup.index') }}"  class="button button--secondary price-cta" id="price-cta-1">Book demo</a>
                                        </div>
                                    </div>

                                </div>
                                 @continue
                                    @else
                                        @break
                                @endif

                                @endforeach
                            </div>
                            <span id="smallprint-anchor"></span>
{{--                            <div class="row small-row mt-60">--}}
{{--                                <div class="column flex-container flex-dir-column align-center-middle text-center">--}}
{{--                                    <h3 class="h4">--}}
{{--                                        <a href="#table" class="flex-container align-center">--}}
{{--                                            Compare all features--}}
{{--                                            <img src="img/arrow-primary.svg" />--}}
{{--                                        </a>--}}
{{--                                    </h3>--}}
{{--                                    <small id="smallprint">*For the prices of training and consultations, one-time implementation packages apply. Please contact us for a price quote.</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1600950370162" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="complex-table-section" id="table">
                            <div class="row small-row">
                                <div class="column">
                                    <div class="complex-table">
                                        <div class="table-title-wrap">
                                            <div class="flex-container justify-between" id="title-container">
{{--                                                <div class="table-cell table-col-1 table-title">--}}
{{--                                                    <span class="h5 mb-0 flex-container flex-dir-column align-center-middle">--}}
{{--                                                        <a class="flex-container align-center" href="#type-switch">--}}
{{--                                                            FAQ--}}
{{--                                                            <img class="mb-0" src="img/arrow-primary.svg" />--}}
{{--                                                        </a>--}}

{{--                                                        <span> </span>--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}

{{--                                                <div class="flex-container" id="title-items">--}}
{{--                                                    <div class="table-cell table-col-2 table-title">--}}
{{--                                                        <div class="flex-container align-center-middle flex-dir-column">--}}
{{--                                                            <span class="h5 flex-container flex-dir-column align-center-middle">--}}
{{--                                                                Starter--}}

{{--                                                                <span> </span>--}}
{{--                                                            </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="table-cell table-col-3 table-title">--}}
{{--                                                        <div class="flex-container align-center-middle flex-dir-column">--}}
{{--                                                            <span class="h5 flex-container flex-dir-column align-center-middle">--}}
{{--                                                                Pro--}}

{{--                                                                <span> </span>--}}
{{--                                                            </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="table-cell table-col-4 table-title">--}}
{{--                                                        <div class="flex-container align-center-middle flex-dir-column">--}}
{{--                                                            <span class="h5 flex-container flex-dir-column align-center-middle">--}}
{{--                                                                Enterprise--}}

{{--                                                                <span> </span>--}}
{{--                                                            </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <div id="table-body-wrap">
                                            <div class="table-feature" id="first-feat">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">FAQ(Frequently Asked Questions)</h4>
                                                </div>
                                                @foreach($frontFaqs as $key=>$val)
                                                    <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">{{$val->question}}</p>
                                                        </div>

                                                    </div>

                                                         <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-2">{!!html_entity_decode($val->answer)!!}</p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1620655550240" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="solutions-link">
                            <div class="row small-row">
                                <div class="column large-12 medium-12 small-12" id="title-wrap">
                                    <h2 style="font-size: 30px;margin-bottom: 0px;">{{ $trFrontDetail->favourite_apps_title}} </h2><br />
                                    <p class="mb-60">{{ $trFrontDetail->favourite_apps_detail }}</p>
                                </div>
                                <div class="column large-11 medium-12 small-12 flex-container" id="solutions-main">
                                    @foreach($featureWithApps as $key=>$value)
                                        <a class="solutions-tile" href="#">
                                        <div class="solutions-img-wrapper">
                                            <img
                                                    loading="lazy"
                                                    src="{{$value->image_url}}"
                                                    alt="{{$value->title}}"
                                                    width="981"
                                                    height="1146"
                                                    srcset="
                                                    {{$value->image_url}}?width=491&amp;height=573&amp;name=Groups@1.5x.jpg    491w,
                                                    {{$value->image_url}}?width=981&amp;height=1146&amp;name=Groups@1.5x.jpg   981w,
                                                    {{$value->image_url}}?width=1472&amp;height=1719&amp;name=Groups@1.5x.jpg 1472w,
                                                    {{$value->image_url}}?width=1962&amp;height=2292&amp;name=Groups@1.5x.jpg 1962w,
                                                    {{$value->image_url}}?width=2453&amp;height=2865&amp;name=Groups@1.5x.jpg 2453w,
                                                    {{$value->image_url}}?width=2943&amp;height=3438&amp;name=Groups@1.5x.jpg 2943w"
                                                    sizes="(max-width: 981px) 100vw, 981px"
                                            />
                                            <div class="solutions-info flex-container flex-dir-column">
                                                <div class="solutions-title flex-container">
                                                    <h3 class="h4">{{$value->title}}</h3>
                                                </div>
                                                <p class="mb-30">
                                                    {!! $value->description !!}
                                                </p>

                                                <p class="content-link">Learn more</p>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                     <div id="hs_cos_wrapper_widget_1596719451716" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="logo-section">
                             <div class="row small-row">
                                <div class="column large-12">
                                    <h2>{{$trFrontDetail->client_title}}</h2>
                                    <p>{{$trFrontDetail->client_detail}}</p>
                                </div>
                            </div>
                            <div class="row small-up-2 medium-up-3 large-up-6" id="logo-row">
                                @foreach($frontClients as $client)
                                    @php
                                        $client_img="user-uploads/front/client/".$client->image."?width=240&amp;height=240&amp;name=".$client->image
                                    @endphp
                                    <div class="column align-center-middle ">
{{--                                         <h5 class="text-center">{{$client->title}}</h5>--}}
                                    <img src="{{asset($client_img)}}" alt="{{$client->title}}" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1620657524146" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="testimonial-carousel bg-blue_grey-2 cta-block">
                            <div class="row small-row">
                                 <div class="float-left cta-heding">
                                    <h3 class="h3">{{$trFrontDetail->cta_title}}</h3>
                                    <p class="h5">
                                           {{$trFrontDetail->cta_detail}}
                                        </p>
                                    </div>
                                   <a class="button button--secondary align-self-end float-right" href="#" target="_blank">Get Started</a>

                            </div>
                        </section>
    </div>
                    <div class="review-container">
          <div class="slideshow-container">
            @foreach($testimonials as $key=>$val)
                  <div class="mySlides fade">
                    <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">
                    <div class="text">
                        <h2>{{$val->comment}}</h2>
                        <h3> - {{$val->name}}</h3>
                        @php
                            $rating=$val->rating;
                        @endphp
                        <p>
                            @for ($i = 1; $i <= $rating; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </p>
                    </div>
                </div>
              @endforeach
            <div class="dots" style="text-align:center">
                @foreach($testimonials as $key=>$val)
                    <span class="dot" onclick="currentSlide({{$key}})"></span>
                @endforeach
            </div>
        </div>
    </div>
                </span>
    </main>
@endsection
@push('footer-script')
{{--    <script>--}}
{{--        var slideIndex = 1;--}}
{{--        showSlides(slideIndex);--}}

{{--        function plusSlides(n) {--}}
{{--            showSlides(slideIndex += n);--}}
{{--        }--}}

{{--        function currentSlide(n) {--}}
{{--            showSlides(slideIndex = n);--}}
{{--        }--}}

{{--        function showSlides(n) {--}}
{{--            var i;--}}
{{--            var slides = document.getElementsByClassName("mySlides");--}}
{{--            var dots = document.getElementsByClassName("dot");--}}
{{--            if (n > slides.length) {slideIndex = 1}--}}
{{--            if (n < 1) {slideIndex = slides.length}--}}
{{--            for (i = 0; i < slides.length; i++) {--}}
{{--                slides[i].style.display = "none";--}}
{{--            }--}}
{{--            for (i = 0; i < dots.length; i++) {--}}
{{--                dots[i].className = dots[i].className.replace(" active", "");--}}
{{--            }--}}
{{--            slides[slideIndex-1].style.display = "block";--}}
{{--            dots[slideIndex-1].className += " active";--}}
{{--        }--}}
{{--    </script>--}}
@endpush
