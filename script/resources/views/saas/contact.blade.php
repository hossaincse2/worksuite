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
                    <div id="hs_cos_wrapper_widget_1599736587176"
                         class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                         data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="hero-tertiary">
                            <div class="row contact-form">
                                <div class="column small-12 medium-12 large-12">
                                    <div class="">
                                        <h1>Contact us</h1>
                                        @if(!is_null($frontDetail->contact_html))
                                            <p class="h5">
                                           {!! $frontDetail->contact_html !!}
                                           </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

{{--                        <link rel="stylesheet" type="text/css" href="css/hero.css">--}}
                        </section>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="padding: 8px;">
                            <div class="contact-info">
                                <div class="mobile-device"><span class="fa fa-home fa-fw style" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla892, sans-serif;"></span><span class="heading-info">Address</span>
                                    <div class="address-content">{{ $frontDetail->address }}</div>
                                </div>

                                <div class="mobile-device"><span class="fa fa-envelope fa-fw style" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla892, sans-serif;"></span><span class="heading-info">Email</span>
                                    <div class="address-content">{{ $frontDetail->email }}</div>
                                </div>
                                                                    <div class="mobile-device"><span class="fa fa-phone fa-fw style" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla892, sans-serif;"></span><span class="heading-info">Phone</span>
                                        <div class="address-content">{{ $frontDetail->phone }}</div>
                                    </div>
                                                            </div>

                        </div>
                    </div>
{{--                    <div id="hs_cos_wrapper_widget_1599737373010"--}}
{{--                         class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""--}}
{{--                         data-hs-cos-general-type="widget" data-hs-cos-type="module">--}}
{{--                        <section class="form-section">--}}
{{--                            <div class="row">--}}
{{--                                <div class="column form flex-container flex-dir-column align-center-middle">--}}
{{--                                    <span id="hs_cos_wrapper_widget_1599737373010_"--}}
{{--                                          class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_form" style=""--}}
{{--                                          data-hs-cos-general-type="widget" data-hs-cos-type="form">--}}
{{--                                        <h3 id="hs_cos_wrapper_form_417396500_title" class="hs_cos_wrapper form-title"--}}
{{--                                            data-hs-cos-general-type="widget_field" data-hs-cos-type="text"></h3>--}}

{{--                                        <div id="hs_form_target_form_417396500"></div>--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    </div>--}}
                    <section class="form-section">
                            <div class="row contact-form">
                    <form method="POST" action="#" accept-charset="UTF-8"
                          id="contactUs">
{{--                        <input name="_token" type="hidden"--}}
{{--                                                value="HC62j9xJD645GUylPs2yw6n1AfHrAZ9r8mAnfdFR">--}}
                        @csrf()
                    <div class="row">
                        <div class="alert col-md-12 text-center" id="alert"></div>
                    </div>
                    <div class="row" id="contactUsBox">
                        <div class="form-group mb-4 col-lg-6 col-12">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" id="name">
                        </div>
                        <div class="form-group mb-4 col-lg-6 col-12">
                            <input type="email" class="form-control" placeholder="Your Email" name="email" id="email">
                        </div>
                        <div class="form-group mb-4 col-12">
                            <textarea rows="6" name="message" class="form-control br-10" placeholder="Message"
                                      id="message"></textarea>
                        </div>

                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                        <div class="col-12" style="margin-top: 12px;">
                            <button type="button" class="btn-lg button button--primary mt-1" id="contact-submit"
                                    style="font-family: Nunito, Bangla572, sans-serif;">
                                Submit Enquiry
                            </button>
                        </div>
                    </div>
                    </form>
                     </div>
                   </section>

{{--                    <div id="hs_cos_wrapper_widget_1599742989589"--}}
{{--                         class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""--}}
{{--                         data-hs-cos-general-type="widget" data-hs-cos-type="module">--}}
{{--                        <section class="icon-text-section bg-grey1">--}}
{{--                            <div class="row small-row">--}}
{{--                                <div class="column flex-container flex-dir-column align-center-middle text-center">--}}
{{--                                    <h2 class="h3">Locations</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row small-row small-up-1 medium-up-2 large-up-3 justify-center">--}}
{{--                                <div class="item-wrap column flex-container flex-dir-column justify-top align-center text-center">--}}
{{--                                    <img src="img/pin-icon.svg" alt="pin-icon" />--}}
{{--                                    <p class="h4">United Kingdom</p>--}}
{{--                                    <p>{{ $frontDetail->address }}</p>--}}
{{--                                    <p>--}}
{{--                                        <a href="https://www.google.com/maps/place/Mews/@51.4763948,-0.1236168,12z/data=!4m8!1m2!2m1!1sMews+uk!3m4!1s0x487604ba07279627:0xea838c431eab386a!8m2!3d51.5033268!4d-0.1012135"--}}
{{--                                           target="_blank">--}}
{{--                                            View in Google Maps--}}
{{--                                        </a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    </div>--}}
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
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        $('#contact-submit').click(function () {
{{--        @if($global->google_recaptcha_status =="v2")--}}
{{--                if (grecaptcha.getResponse().length == 0){--}}
{{--                    alert('Please click the reCAPTCHA checkbox');--}}
{{--                    return false;--}}
{{--                }--}}
{{--        @endif--}}
         $.ajax({
                url: '{{route('front.contact-us')}}',
                container: '#contactUs',
                type: "POST",
                data: $('#contactUs').serialize(),
                messagePosition: "inline",
                success: function (response) {
                    if (response.status === 'success') {
                        $('#alert').html("<div class='alert alert-success'>"+response.message+"</div>");
                        $('#alert').show();
                        $('#contactUsBox').remove();
                    }else{
                        $('#alert').html("<div class='alert alert-error'>"+response.message+"</div>");
                        $('#alert').show();
                    }
                }
            })
        });
    </script>
    @if($global->google_recaptcha_status  && $global->google_captcha_version=="v3")
        <script src="https://www.google.com/recaptcha/api.js?render={{ $global->google_recaptcha_key }}"></script>
        <script>
            {{--setTimeout(function () {--}}
            {{--    grecaptcha.ready(function () {--}}
            {{--        grecaptcha.execute('{{ $global->google_recaptcha_key }}', {action: 'submit'}).then(function (token) {--}}
            {{--            document.getElementById("recaptcha_token").value = token;--}}
            {{--        });--}}
            {{--    });--}}

            {{--}, 3000);--}}
            // e.preventDefault();
            // /function onClick(e) {
                // e.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ $global->google_recaptcha_key }}', {action: 'submit'}).then(function(token) {
                        document.getElementById("recaptcha_token").value = token;
                    });
                });
           // / }

        </script>
    @else
        <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
        <script type="text/javascript">
            // var ReCaptchaCallbackV3 = function() {
            //     grecaptcha.ready(function() {
            //         grecaptcha.execute("site_key").then(function(token) {
            //             console.log("v3 Token: " + token);
            //         });
            //     });
            // };
            grecaptcha.ready(function() {
                grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
                    document.getElementById("recaptcha_token").value = token;
                });
            });
        </script>
    @endif
@endpush
