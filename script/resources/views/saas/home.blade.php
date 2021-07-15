@extends('layouts.sass-app')

@section('content')
    <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒`‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Features
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->

{{--    @include('saas.section.header')--}}

{{--    @include('cookieConsent::index')--}}

{{--    @include('saas.section.client')--}}

{{--    @include('saas.section.feature')--}}

{{--    @include('saas.section.testimonial')--}}

    <main class="main">
                <span
                        id="hs_cos_wrapper_module_140190329510711990"
                        class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container"
                        style=""
                        data-hs-cos-general-type="widget_container"
                        data-hs-cos-type="widget_container"
                >
                    <div id="hs_cos_wrapper_widget_1596552488889" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="hero-primary bg-blue_grey-2">
                            <div class="row">
                                <div class="column small-12 medium-12 large-5">
                                    <div class="hero-content">
                                        <h1 class="supertitle dot">{{ $trFrontDetail->header_title ?: $defaultTrFrontDetail->header_title }}</h1>
                                        <h2 class="h1">{{ $trFrontDetail->header_title ?: $defaultTrFrontDetail->header_title }}</h2>
                                        <div class="hero-description">
                                            <div class="p-large">
                                                <p>
                                                    {!! $trFrontDetail->header_description ?: $defaultTrFrontDetail->header_description !!}
                                                </p>
                                            </div>

                                            <a href="#" class="button button--primary">
                                                Book a demo
                                            </a>
                                        </div>
                                        <div class="three-crosses">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-wrapper">
                                <div class="image-container">
                                    <picture id="hero-bg-image">
                                        <source srcset="{{$trFrontDetail->image_url}}" media="(min-width: 1300px)" />
                                        <img src="{{$trFrontDetail->image_url}}" alt="Homepage-Hero_1245x1014_v1-min" />
                                    </picture>
                                </div>
                            </div>
                            <link rel="stylesheet" type="text/css" href="{{asset('saas/css/hero.css')}}">
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1596719451716" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="logo-section">
                            <div class="row small-row">
                                <div class="column large-12">
                                    <p class="p-large text-center mb-30">Powering over 2,000 of the world's best hospitality brands. <a href="/en/customers" rel="noopener">See our customers.</a></p>
                                </div>
                            </div>
                            <div class="row small-up-2 medium-up-3 large-up-6" id="logo-row">
                                @foreach($frontClients as $client)
                                    @php
                                        $client_img="user-uploads/front/client/".$client->image."?width=240&amp;height=240&amp;name=".$client->image
                                    @endphp
                                    <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset($client_img)}}" alt="{{$client->title}}" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1620656342563" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="preview-section bg-blue_grey-2">
                            <div class="row small-row">
                                <div class="column large-6 medium-12 small-12 flex-container flex-dir-column">
                                    <p class="supertitle dot">Product</p>
                                    <h2 class="h3">{{$trFrontDetail->feature_title}}</h2>
                                    <p class="mb-60">{{ $trFrontDetail->feature_description }}</p>
                                    <ul class="preview-list mb-30 flex-container flex-dir-column">
                                         @foreach($featureWithImages as $key => $value)
                                            <li class="flex-container preview-list-item {{($loop->first)?'active':''}}"  data-index="{{$key}}">
                                            <img src="{{($value->icon)?$value->icon:asset('saas/img/Guest_Journey.svg')}}" alt="{{$value->title}}" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>{{$value->title}}</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>{!! $value->description !!}</p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                          </li>
                                        @endforeach
                                    </ul>
                                    <a class="button button--secondary align-self-start" href="#">Explore the product</a>
                                </div>
                            </div>
                            <div class="preview-image-container bg-blue_grey-3">
                                <div class="flex-container flex-dir-column align-center-middle" id="preview-image-wrap">
                                    @foreach($featureWithImages as $key => $value)
                                        <picture class="preview-image {{($loop->first)?'active':''}}" data-index="{{$key}}">
                                        <source srcset="{{$value->image_url}}"/>
                                        <img src="{{$value->image_url}}" alt="{{$value->title}} render" loading="lazy" />
                                    </picture>
                                    @endforeach
                                    <ol class="preview-dots">
                                        @foreach($featureWithImages as $key => $value)
                                            <li class="preview-dot {{($loop->first)?'active':''}}" data-index={{$key}}></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1620655550240" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="solutions-link">
                            <div class="row small-row">
                                <div class="column large-1 medium-12 small-12" id="title-wrap">
                                    <p class="supertitle dot">Solutions</p>
                                    <h2 class="h4" id="title">
                                        {{$trFrontDetail->favourite_apps_title}}<br />
                                    </h2>
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
                                            <div class="three-crosses">
                                                <span></span>

                                                <span></span>

                                                <span></span>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>


                    <!-- new-section -->
                    <div id="hs_cos_wrapper_widget_1620655550240" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="customer-success pt-0">

                            <div class="row small-row">
                                <div class="column large-1 medium-12 small-12">

                                </div>
                                <div class="column large-6 medium-12 small-12" id="success-head">
                                    <h2>Five Star</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br> eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                                </div>

                                <div class="column large-5 medium-12 small-12 flex-container" id="solutions-main">
                                </div>

                              </div>
                            @foreach($featureWithIcons->chunk(4) as $feature_icon)
                                <div class="row small-row">
                                        <div class="column large-1 medium-12 small-12">
                                        </div>
                                            <div class="column large-11 medium-12 small-12 flex-container"
                                                 id="success-main">
                                                @foreach($feature_icon as $icon)
                                                    <div class="col-md-3">
                                                         <a class="success-tile" href="#">
                                            <div class="s-text">
                                            <i class="{{$icon->icon}}"></i>
                                            <h4>{{$icon->title}}</h4>
                                            <p>{{$icon->description}}</p>
                                            </div>
                                            </a>
                                            </div>
                                                @endforeach
                                        </div>
                               </div>
                             @endforeach
                        </section>
                    </div>


                    <div id="hs_cos_wrapper_widget_1620657524146" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="testimonial-carousel bg-blue_grey-2">
                            <div class="row small-row">
                                <div class="column flex-container align-start">
                                    <h2 class="h3">Hospitality. Made better.</h2>
                                    <div class="flex-container align-center" id="carousel-count">
                                        <p class="mb-0" id="carousel-num-wrap"><span id="carousel-num">01</span> / 04</p>
                                        <span class="carousel-arrow flex-container align-center-middle" id="carousel-left"><img src="{{asset('saas/img/chevron-coral.svg')}}" alt="Left arrow" /></span>
                                        <span class="carousel-arrow flex-container align-center-middle" id="carousel-right"><img src="{{asset('saas/img/chevron-coral.svg')}}" alt="Right arrow" /></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row small-row" id="carousel-row">
                                <div class="column large-10 medium-10 small-10 carousel-item flex-container active" data-index="1">
                                    <a href="#" target="_blank">
                                        <img
                                                loading="lazy"
                                                src="{{asset('saas/img/The_Dylan-min.jpg?width=650&amp;height=434&amp;name=The%20Dylan-min.jpg')}}"
                                                alt="The Dylan-min"
                                                width="650"
                                                height="434"
                                                srcset="
                                                {{asset('saas/img/The_Dylan-min.jpg?width=325&amp;height=217&amp;name=The%20Dylan-min.jpg')}}    325w,
                                                {{asset('img/The_Dylan-min.jpg?width=650&amp;height=434&amp;name=The%20Dylan-min.jpg')}}    650w,
                                                {{asset('img/The_Dylan-min.jpg?width=975&amp;height=651&amp;name=The%20Dylan-min.jpg')}}    975w,
                                                {{asset('img/The_Dylan-min.jpg?width=1300&amp;height=868&amp;name=The%20Dylan-min.jpg')}}  1300w,
                                                {{asset('img/The_Dylan-min.jpg?width=1625&amp;height=1085&amp;name=The%20Dylan-min.jpg')}} 1625w,
                                                {{asset('img/The_Dylan-min.jpg?width=1950&amp;height=1302&amp;name=The%20Dylan-min.jpg')}} 1950w
                                            "
                                                sizes="(max-width: 650px) 100vw, 650px"
                                        />
                                    </a>
                                    <div class="flex-container flex-dir-column">
                                        <p class="h5">
                                            "It's really important to change the mindset in hospitality and to let the old systems go. In the long run, you will gain more than you will lose in terms of revenue, guest experience and
                                            processes."
                                        </p>
                                        <p>
                                            <strong>
                                                Carol Domacassé<br />
                                                Reservations Manager, The Dylan Amsterdam
                                            </strong>
                                        </p>

                                        <a class="button button--secondary align-self-start" href="#" target="_blank">Read more</a>
                                    </div>
                                </div>

                                <div class="column large-10 medium-10 small-10 carousel-item flex-container" data-index="2">
                                    <a href="#" target="_blank">
                                        <img loading="lazy" src="{{asset('saas/img/Machefert-min.jpg?width=650&amp;height=434&amp;name=Machefert-min.jpg')}}" alt="Machefert-min" width="650" height="434" sizes="(max-width: 650px) 100vw, 650px" />
                                    </a>
                                    <div class="flex-container flex-dir-column">
                                        <p class="h5">
                                            "Mews has saved us a lot of time and transformed the way we work on a number of levels. It's agile, connected, and open to innovation, so I can only highly recommend switching to this pms."
                                        </p>
                                        <p>
                                            <strong>
                                                Kevin Machefert<br />
                                                Deputy CEO, Machefert Group
                                            </strong>
                                        </p>

                                        <a class="button button--secondary align-self-start" href="#" target="_blank">
                                            Read more
                                        </a>
                                    </div>
                                </div>

                                <div class="column large-10 medium-10 small-10 carousel-item flex-container" data-index="3">
                                    <a href="#" target="_blank">
                                        <img
                                                loading="lazy"
                                                src="{{asset('saas/img/The_Opera_Hotel-min.jpg?width=650&amp;height=434&amp;name=The%20Opera%20Hotel-min.jpg')}}"
                                                alt="The Opera Hotel-min"
                                                width="650"
                                                height="434"
                                                sizes="(max-width: 650px) 100vw, 650px"
                                        />
                                    </a>
                                    <div class="flex-container flex-dir-column">
                                        <p class="h5">
                                            "Now we're walking around with our heads up and our tablets and we give our guests a personal experience. We greet them with positive energy, sit together and check them in with the iPad."
                                        </p>
                                        <p>
                                            <strong>
                                                Michael Böhler<br />
                                                General Manager, The Opera Hotel
                                            </strong>
                                        </p>

                                        <a class="button button--secondary align-self-start" href="#" target="_blank">Read more</a>
                                    </div>
                                </div>

                                <div class="column large-10 medium-10 small-10 carousel-item flex-container" data-index="4">
                                    <a href="#" target="_blank">
                                        <img loading="lazy" src="{{asset('saas/img/Jo_joe-min.jpg?width=650&amp;height=434&amp;name=Jo%26Joe-min.jpg')}}" alt="Jo&amp;Joe-min" width="650" height="434" sizes="(max-width: 650px) 100vw, 650px" />
                                    </a>
                                    <div class="flex-container flex-dir-column">
                                        <p class="h5">
                                            "Mews is more than just a tech company; it's a mindset, and in the hotel industry this is a key value. The first time I met Mews, I realised they were perfect to build our brand and to work
                                            together."
                                        </p>
                                        <p>
                                            <strong>
                                                Valentin Babilliot<br />
                                                Head of Digital &amp; Distribution, JO&amp;JOE
                                            </strong>
                                        </p>

                                        <a class="button button--secondary align-self-start" href="#" target="_blank">Read more</a>
                                    </div>
                                </div>

                                <div class="column large-3 medium-2 small-2"></div>
                            </div>


                </span>
    </main>





@endsection
@push('footer-script')
{{--    <script>--}}
{{--        var maxHeight = -1;--}}
{{--        $(document).ready(function() {--}}


{{--            var promise1 = new Promise(function (resolve, reject) {--}}

{{--                $('.planNameHead').each(function () {--}}
{{--                    maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();--}}
{{--                });--}}
{{--                resolve(maxHeight);--}}
{{--            }).then(function (maxHeight) {--}}
{{--                // console.log(maxHeight);--}}
{{--                $('.planNameHead').each(function () {--}}
{{--                    $(this).height(Math.round(maxHeight));--}}
{{--                });--}}
{{--                $('.planNameTitle').each(function () {--}}
{{--                    $(this).height(Math.round(maxHeight - 28));--}}
{{--                });--}}

{{--            });--}}
{{--        });--}}
{{--        function planShow(type){--}}
{{--            if(type == 'monthly'){--}}
{{--                $('#monthlyPlan').show();--}}
{{--                $('#annualPlan').hide();--}}
{{--            }--}}
{{--            else{--}}
{{--                $('#monthlyPlan').hide();--}}
{{--                $('#annualPlan').show();--}}
{{--            }--}}
{{--        }--}}
{{--    </script>--}}

@endpush
