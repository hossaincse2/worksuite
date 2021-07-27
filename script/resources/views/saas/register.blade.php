@extends('layouts.sass-app')
@section('content')
    <main class="main">

                        <div id="hs_cos_wrapper_widget_1600182930457"
                             class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                             data-hs-cos-general-type="widget" data-hs-cos-type="module">
                             @if($registrationStatus->registration_open == 1)
                        <section class="hero-secondary bg-grey1">
                            <div class="row">
                                <div class="column small-12 medium-12 large-6">
                                    <div class="hero-content">
                                        <div class="hero-description">
                            {!! Form::open(['id'=>'register', 'method'=>'POST']) !!}
                                        <div class="row">
                                            <div id="alert" class="col-lg-12 col-12">
                                                <h3 class="signup-heading">@lang('app.signup')</h3>
                                            </div>
                                            <div class="col-12" id="form-box">
                                                <div class="form-group mb-4">
                                                    <label for="company_name">{{ __('modules.client.companyName') }}</label>
                                                    <input type="text" name="company_name" id="company_name"
                                                           placeholder="{{ __('modules.client.companyName') }}" class="form-control">
                                                </div>
                                                @if(module_enabled('Subdomain'))
                                                    <div class="form-group">
                                                    <label for="company_name clearfix">{{ __('app.subdomain') }}</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="subdomain" name="sub_domain"
                                                               id="sub_domain">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">.{{ get_domain() }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="form-group mb-4">
                                                    <label for="email">{{ __('app.yourEmailAddress') }}</label>
                                                    <input type="email" name="email" id="email" placeholder="{{ __('app.yourEmailAddress') }}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="password">{{__('modules.client.password')}}</label>
                                                    <input type="password" class="form-control " id="password" name="password"
                                                           placeholder="{{__('modules.client.password')}}">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="password_confirmation">{{__('app.confirmPassword')}}</label>
                                                    <input type="password" class="form-control" id="password_confirmation"
                                                           name="password_confirmation" placeholder="{{__('app.confirmPassword')}}">
                                                </div>
                                                @if($global->google_recaptcha_status  && $global->google_captcha_version=="v2")
                                                    <div class="form-group mb-4">
                                                        <div class="g-recaptcha" data-sitekey="{{ $global->google_recaptcha_key }}"></div>
                                                    </div>
                                                @endif
                                                <input type='hidden' name='recaptcha_token' id='recaptcha_token'>
                                                <button type="button" class="btn-lg button button--primary mt-2" id="save-form">
                                                    @lang('app.signup')
                                                </button>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="image-wrapper bg-grey1">
                                <div class="image-container">
                                    <img src="{{asset('saas/img/Partners-Hero.jpg?width=1660&amp;height=1352&amp;name=Partners-Hero.jpg')}}"
                                         id="hero-bg-image" alt="Mews Partners" width="1660" height="1352"
                                         sizes="(max-width: 1660px) 100vw, 1660px"/>
                                </div>
                            </div>
                             @else
                                <div class="login-box mt-5 shadow bg-white form-section">
                                    <p class="mb-0 text-center">
                                        {{$signUpMessage->message}}
                                    </p>
                                </div>
                            @endif
                        </section>
                    </div>
                    </div>


    </main>
@endsection
<!-- Scripts -->
<script src="{{ asset('saas1/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('saas1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('saas1/js/main.js') }}"></script>
<script src="{{ asset('front/plugin/froiden-helper/helper.js') }}"></script>
<!-- Global Required JS -->
@push('footer-script')
        <script>
            $('#save-form').click(function () {


                $.ajax({
                    url: '{{route('front.signup.store')}}',
                    container: '.form-section',
                    type: "POST",
                    data: $('#register').serialize(),
                    messagePosition: "inline",
                    success: function (response) {
                        if (response.status == 'success') {
                            $('#form-box').remove();
                        } else if (response.status == 'fail') {
                            @if($global->google_recaptcha_status)
                            grecaptcha.reset();
                            @endif

                        }
                    }
                })
            });
        </script>
@endpush
