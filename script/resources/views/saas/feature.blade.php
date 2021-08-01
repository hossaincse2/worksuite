@extends('layouts.sass-app')
@section('content')
    <main class="main">
                <span
                        id="hs_cos_wrapper_module_140190329510711990"
                        class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container"
                        style=""
                        data-hs-cos-general-type="widget_container"
                        data-hs-cos-type="widget_container"
                >
                    <div id="hs_cos_wrapper_widget_1600182930457" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="hero-secondary bg-grey1">
                            <div class="row">
                                <div class="column small-12 medium-12 large-6">
                                    <div class="hero-content">
                                        <h1 class="h2">{{$benefit_section_one->title}}</h1>
                                        <div class="hero-description">
                                            <div class="p-large">
                                               {!! $benefit_section_one->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="image-wrapper bg-grey1">
                                <div class="image-container">
                                    <img src="{{asset('saas/img/Partners-Hero.jpg?width=1660&amp;height=1352&amp;name=Partners-Hero.jpg')}}" id="hero-bg-image" alt="Mews Partners" width="1660" height="1352" sizes="(max-width: 1660px) 100vw, 1660px" />
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1600183250126" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="features-benefits bg-white">

                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1600183372411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                         <section class="icon-text-section bg-white">
{{--                            <div class="row small-row">--}}
{{--                                <div class="column flex-container flex-dir-column align-center-middle text-center">--}}
{{--                                    <h2 class="h3"></h2>--}}
{{--                                    <h5></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            @foreach($benefit_section_one->features->chunk(3) as $feature_item)
                                 <div class="row small-row small-up-1 medium-up-2 large-up-3 justify-center">
                                    @foreach($feature_item as $item)
                                         {{--                                        @dd($item->icon)--}}
                                         <div class="item-wrap column flex-container flex-dir-column justify-top align-center text-center">
                                    <img class="white-icon_1" src="{{asset('saas/img/wide_audience.svg')}}" alt="wide_audience" />
                                    <p class="h4">{{$item->title}}</p>
                                    <p>
                                        <span data-contrast="auto" xml:lang="EN-GB" lang="EN-GB"><span>{!! html_entity_decode($item->description) !!}</span></span>
                                    </p>
                                  </div>
                                     @endforeach

                            </div>
                             @endforeach
                        </section>
                    </div>
                    @foreach($feature_benefits as $key=>$item)
                       @if($item->id==1)
                           @continue
                       @endif
                        <div id="hs_cos_wrapper_widget_1600183372411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                         <section class="icon-text-section {{($loop->iteration%2==0)?'bg-black':'bg-white'}}">
                            <div class="row small-row">
                                <div class="column flex-container flex-dir-column align-center-middle text-center">
                                    <h2 class="h3">{{$item->title}}</h2>
                                    <h5>{!! $item->description !!}</h5>
                                </div>
                            </div>
                            @foreach($item->features->chunk(3) as $feature_item)
                                 <div class="row small-row small-up-1 medium-up-2 large-up-3 justify-center">
                                    @foreach($feature_item as $item)
                                         <div class="item-wrap column flex-container flex-dir-column justify-top align-center text-center">
                                    <img class="white-icon_2" src="{{asset('saas/img/wide_audience.svg')}}" alt="wide_audience" />
                                    <p class="h4">{{$item->title}}</p>
                                    <p>
                                        <span data-contrast="auto" xml:lang="EN-GB" lang="EN-GB"><span>{!! html_entity_decode($item->description) !!}</span></span>
                                    </p>
                                  </div>
                                     @endforeach

                            </div>
                             @endforeach
                        </section>
                    </div>
                    @endforeach

{{--                    <div id="hs_cos_wrapper_widget_1600183372411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">--}}
{{--                         <section class="icon-text-section bg-black">--}}
{{--                            <div class="row small-row">--}}
{{--                                <div class="column flex-container flex-dir-column align-center-middle text-center">--}}
{{--                                    <h2 class="h3">{{$benefit_section_two->title}}</h2>--}}
{{--                                    <h5>{!! $benefit_section_two->description !!}</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @foreach($benefit_section_two->features->chunk(3) as $feature_item)--}}
{{--                                 <div class="row small-row small-up-1 medium-up-2 large-up-3 justify-center">--}}
{{--                                    @foreach($feature_item as $item)--}}
{{--                                         <div class="item-wrap column flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <img class="white-icon_2" src="{{asset('saas/img/wide_audience.svg')}}" alt="wide_audience" />--}}
{{--                                    <p class="h4">{{$item->title}}</p>--}}
{{--                                    <p>--}}
{{--                                        <span data-contrast="auto" xml:lang="EN-GB" lang="EN-GB"><span>{!! html_entity_decode($item->description) !!}</span></span>--}}
{{--                                    </p>--}}
{{--                                  </div>--}}
{{--                                     @endforeach--}}

{{--                            </div>--}}
{{--                             @endforeach--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                    <div id="hs_cos_wrapper_widget_1600183372411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">--}}
{{--                         <section class="icon-text-section bg-white">--}}
{{--                            <div class="row small-row">--}}
{{--                                <div class="column flex-container flex-dir-column align-center-middle text-center">--}}
{{--                                    <h2 class="h3">{{$benefit_section_three->title}}</h2>--}}
{{--                                    <h5>{!! $benefit_section_three->description !!}</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @foreach($benefit_section_three->features->chunk(3) as $feature_item)--}}
{{--                                 <div class="row small-row small-up-1 medium-up-2 large-up-3 justify-center">--}}
{{--                                    @foreach($feature_item as $item)--}}
{{--                                         --}}{{--                                        @dd($item->icon)--}}
{{--                                         <div class="item-wrap column flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <img class="white-icon_3" src="{{asset('saas/img/wide_audience.svg')}}" alt="wide_audience" />--}}
{{--                                    <p class="h4">{{$item->title}}</p>--}}
{{--                                    <p>--}}
{{--                                        <span data-contrast="auto" xml:lang="EN-GB" lang="EN-GB"><span>{!! html_entity_decode($item->description) !!}</span></span>--}}
{{--                                    </p>--}}
{{--                                  </div>--}}
{{--                                     @endforeach--}}

{{--                            </div>--}}
{{--                             @endforeach--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                    <div id="hs_cos_wrapper_widget_1600183765340" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">--}}
{{--                        <section class="testimonial-secondary bg-grey1">--}}
{{--                            <div class="row small-row">--}}
{{--                                <div class="column small-12 medium-6 large-6 testimonial-img-wrap">--}}
{{--                                    <p class="caption"><strong>Partner story</strong></p>--}}

{{--                                    <img loading="lazy" src="{{asset('saas/img/pic-test-2.png?width=1074&amp;height=1119&amp;name=pic-test-2.png')}}" alt="HotelRoom" width="1074" height="1119" sizes="(max-width: 1074px) 100vw, 1074px" />--}}
{{--                                </div>--}}
{{--                                <div class="column small-12 medium-6 large-5 large-offset-1 flex-container flex-dir-column">--}}
{{--                                    <p class="h4">--}}
{{--                                        "At Pace we saw early that Mews was headed for industry leadership and we invested deeply in our partnership with them. Transformation happens through ecosystems and we are proud to be sharing the--}}
{{--                                        stage with Mews."--}}
{{--                                    </p>--}}
{{--                                    <p class="h5 quote-name mb-0">--}}
{{--                                        Jens Munch<br />--}}
{{--                                        CEO, Pace--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                    <div id="hs_cos_wrapper_widget_1600184637785" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">--}}
{{--                        <section class="locations-section">--}}
{{--                            <div class="row small-row">--}}
{{--                                <div class="column flex-container align-center-middle">--}}
{{--                                    <h3 class="h2 text-center">Our offices</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row small-row small-up-1 medium-up-2 large-up-2 justify-center">--}}
{{--                                <div class="column location-wrap flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <a href="https://g.page/mews-london?share" target="_blank"><img src="{{asset('saas/img/Partners-LondonMap-1.jpg')}}" alt="Partners-LondonMap-1" /></a>--}}
{{--                                    <p class="h5">London</p>--}}
{{--                                    <p>--}}
{{--                                        <span>47-51 Great Suffolk Street<br /></span>--}}
{{--                                        <span>--}}
{{--                                            London <br />--}}
{{--                                            SE1 0BS<br />--}}
{{--                                            United Kingdom--}}
{{--                                        </span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="column location-wrap flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <a href="https://goo.gl/maps/Y4FTnAg8YX4Dcump9" target="_blank"><img src="{{asset('saas/img/Partners-PragueMap.jpg')}}" alt="Partners-PragueMap" /></a>--}}
{{--                                    <p class="h5">Prague</p>--}}
{{--                                    <p>--}}
{{--                                        <span>--}}
{{--                                            Náměstí I. P. Pavlova 5&nbsp;<br />--}}
{{--                                            120 00 Vinohrady<br />--}}
{{--                                            Prague<br />--}}
{{--                                            Czech Republic--}}
{{--                                        </span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="column location-wrap flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <a href="https://g.page/mews-amsterdam?share" target="_blank"><img src="{{asset('saas/img/Partners-AmsterdamMap.jpg')}}" alt="Partners-AmsterdamMap" /></a>--}}
{{--                                    <p class="h5">Amsterdam</p>--}}
{{--                                    <p>--}}
{{--                                        <span>--}}
{{--                                            ScaleHub building<br />--}}
{{--                                            Wibautstraat 137D<br />--}}
{{--                                            1097DN Amsterdam<br />--}}
{{--                                            The Netherlands--}}
{{--                                        </span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="column location-wrap flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <a href="https://goo.gl/maps/MmgTpcfPBiUwQzoc9" target="_blank"><img src="{{asset('saas/img/Partners-NewYorkMap.jpg')}}" alt="Partners-NewYorkMap" /></a>--}}
{{--                                    <p class="h5">New York</p>--}}
{{--                                    <p>--}}
{{--                                        <span>--}}
{{--                                            41 East 11th Street<br />--}}
{{--                                            New York<br />--}}
{{--                                            NY 10003<br />--}}
{{--                                            United States--}}
{{--                                        </span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="column location-wrap flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <a href="https://www.google.com/maps/place/Legeweg+157o,+8020+Oostkamp,+Belgium/@51.172127,3.2442442,16.5z/data=!4m5!3m4!1s0x47c3507cec9806ed:0x6907a150d0a65462!8m2!3d51.1724875!4d3.2477159">--}}
{{--                                        <img src="{{asset('saas/img/Partners-BrugesMap.png')}}" alt="Partners-BrugesMap" />--}}
{{--                                    </a>--}}
{{--                                    <p class="h5">Bruges</p>--}}
{{--                                    <p>--}}
{{--                                        <span>Legeweg 157-O</span><br />--}}
{{--                                        <span>8020 Oostkamp</span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    </div>--}}

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
<div id="hs_cos_wrapper_widget_1620655550240" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="customer-success pt-0">

                            <div class="row small-row">
                                <div class="column large-1 medium-12 small-12">

                                </div>
                                <div class="column large-6 medium-12 small-12" id="success-head">
                                    <h2>{{$trFrontDetail->icon_title}}</h2>
                                    <p>{{$trFrontDetail->icon_description}}</p>
                                </div>

                                <div class="column large-5 medium-12 small-12 flex-container" id="solutions-main">
                                </div>

                              </div>
                            @foreach($featureWithIcons->chunk(4) as $feature_icon)
                                <div class="row small-row">
                                       <div class="column large-12 medium-12 small-12 flex-container"
                                            id="success-main">
                                                @foreach($feature_icon as $icon)
                                               <div class="col-md-3">
                                                         <a class="success-tile" href="#">
                                            <div class="s-text">
                                            <i class="{{$icon->icon}}"></i>
                                            <h4>{{$icon->title}}</h4>
                                            <p>{!! $icon->description !!}</p>
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
