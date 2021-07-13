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
                                        <h1 class="supertitle dot">Property management system</h1>
                                        <h2 class="h1">The hospitality system of the future</h2>
                                        <div class="hero-description">
                                            <div class="p-large">
                                                <p>
                                                    Mews is designed to simplify and automate all operations for modern hoteliers and their guests. From the booking engine to check-out, from front desk to revenue management, every process
                                                    is easier, faster and more connected.
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
                                        <source srcset="{{asset('saas/img/Homepage-Hero_1245x1014_v1-min.jpg')}}" media="(min-width: 1300px)" />
                                        <img src="{{asset('saas/img/Homepage-Hero_810x660_v1-min.jpg')}}" alt="Homepage-Hero_1245x1014_v1-min" />
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
                                <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset('saas/img/C-Hotels.png?width=240&amp;height=240&amp;name=C-Hotels.png')}}" alt="C-Hotels" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>

                                <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset('saas/img/Autocamp_.png?width=240&amp;height=240&amp;name=Autocamp_.png')}}" alt="Autocamp logo" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>

                                <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset('saas/img/Tsogo_Sun.png?width=240&amp;height=240&amp;name=Tsogo%20Sun.png')}}" alt="Tsogo Sun logo" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>

                                <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset('saas/img/The_Student_Hotel.png?width=240&amp;height=240&amp;name=The%20Student%20Hotel.png')}}" alt="The Student Hotel" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>

                                <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset('saas/img/Your_Apartment.png?width=240&amp;height=240&amp;name=Your%20Apartment.png')}}" alt="Your Apartment" width="240" height="240" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>

                                <div class="column flex-container align-center-middle logo-wrap">
                                    <img src="{{asset('saas/img/The_Dylan.png?width=240&amp;height=240&amp;name=The%20Dylan_.png')}}'" alt="The Dylan logo" width="240" height="240" data-us-logo="img/The_Dylan.png" sizes="(max-width: 240px) 100vw, 240px" />
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1620656342563" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="preview-section bg-blue_grey-2">
                            <div class="row small-row">
                                <div class="column large-6 medium-12 small-12 flex-container flex-dir-column">
                                    <p class="supertitle dot">Product</p>
                                    <h2 class="h3">Mews Hospitality Cloud</h2>
                                    <p class="mb-60">Make your property remarkable with an ecosystem of hospitality solutions that maximize revenue and enhance the guest experience.</p>

                                    <ul class="preview-list mb-30 flex-container flex-dir-column">
                                        <li class="flex-container preview-list-item active" data-index="1">
                                            <img src="{{asset('saas/img/Operations.svg')}}" alt="Operations" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>Mews Operations</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>The control centre for front office and back office staff, with a powerful system that uses smart automation to boost efficiency, grow revenue, and improve the guest experience.</p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex-container preview-list-item" data-index="2">
                                            <img src="{{asset('saas/img/Guest_Journey.svg')}}" alt="Guest Journey" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>Mews Guest Journey</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>
                                                        Put guests in control of their stay, from the Mews Booking Engine through to Self Service Kiosks and our Virtual Concierge, and provide an experience that’s memorable as well as
                                                        modern.
                                                    </p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex-container preview-list-item" data-index="3">
                                            <img src="{{asset('saas/img/Payments.svg')}}" alt="Payments" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>Mews Payments</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>A fully integrated payment system, with secure, instant payments at any part of the guest journey. Cut manual errors and transform conversations from transactional to meaningful.</p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex-container preview-list-item" data-index="4">
                                            <img src="{{asset('saas/img/Business_Intelligence.svg')}}" alt="Business Intelligence" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>Mews Business Intelligence</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>Visual dashboards with powerful, customizable reporting to present your property and guest data. Understand how you’re performing and where to improve.</p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex-container preview-list-item" data-index="5">
                                            <img src="{{asset('saas/img/Marketplace.svg')}}" alt="Marketplace" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>Mews Marketplace</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>Our cloud pms software integrates with hundreds of specialist hotel tech solutions that can help elevate your property.</p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex-container preview-list-item" data-index="6">
                                            <img src="{{asset('saas/img/Open_API@2x8.png')}}" alt="Open API" height="400" width="400" />
                                            <div class="flex-container flex-dir-column">
                                                <p class="preview-title"><strong>Mews Open API</strong></p>
                                                <div class="preview-info flex-container flex-dir-column">
                                                    <p>Limitless connectivity and customization to integrate any bespoke or third-party software solutions that your property needs.</p>
                                                    <a class="content-link" href="#">Learn more</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <a class="button button--secondary align-self-start" href="#">Explore the product</a>
                                </div>
                            </div>
                            <div class="preview-image-container bg-blue_grey-3">
                                <div class="flex-container flex-dir-column align-center-middle" id="preview-image-wrap">
                                    <picture class="preview-image active" data-index="1">
                                        <source
                                                srcset="
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/mews-operations.png,
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/Operations@2x-8.png 2x
                                            "
                                        />
                                        <img src="{{asset('saas/img/mews-operations.png')}}" alt="Mews operations render" loading="lazy" />
                                    </picture>

                                    <picture class="preview-image" data-index="2">
                                        <source
                                                srcset="
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/mews-guest-journey%20.png,
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/Guest%20Journey@2x-8.png  2x
                                            "
                                        />
                                        <img src="{{asset('saas/img/mews-guest-journey.png')}}" alt="Guest journey render" loading="lazy" />
                                    </picture>

                                    <picture class="preview-image" data-index="3">
                                        <source
                                                srcset="
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/mews-payments.png,
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/Payments@2x-8.png 2x
                                            "
                                        />
                                        <img src="{{asset('saas/img/mews-payments.png')}}" alt="Mews payments render" loading="lazy" />
                                    </picture>

                                    <picture class="preview-image" data-index="4">
                                        <source
                                                srcset="
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/mews-analytics.png,
                                                https://f.hubspotusercontent10.net/hubfs/5255565/_Project_Phoenix/images/Product%20renders/Analytics@2x-8.png 2x
                                            "
                                        />
                                        <img src="{{asset('saas/img/mews-analytics.png')}}" alt="Analytics render" loading="lazy" />
                                    </picture>

                                    <picture class="preview-image" data-index="5">
                                        <source srcset="img/mews-analytics.png, img/mews-analytics.png 2x" />
                                        <img src="{{asset('saas/img/mews-marketplace.png')}}" alt="Mews marketplace render" loading="lazy" />
                                    </picture>

                                    <picture class="preview-image" data-index="6">
                                        <source srcset="img/Open_API@2x8.png, img/Open_API@2x8.png 2x" />
                                        <img src="{{asset('saas/img/Open_API@2x8.png')}}" alt="API render" loading="lazy" />
                                    </picture>

                                    <ol class="preview-dots">
                                        <li class="preview-dot active" data-index="1"></li>

                                        <li class="preview-dot" data-index="2"></li>

                                        <li class="preview-dot" data-index="3"></li>

                                        <li class="preview-dot" data-index="4"></li>

                                        <li class="preview-dot" data-index="5"></li>

                                        <li class="preview-dot" data-index="6"></li>
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
                                        Rethink experiences,<br />
                                        delight customers.
                                    </h2>
                                </div>
                                <div class="column large-11 medium-12 small-12 flex-container" id="solutions-main">
                                    <a class="solutions-tile" href="#">
                                        <div class="solutions-img-wrapper">
                                            <img
                                                    loading="lazy"
                                                    src="{{asset('saas/img/Groups@1.5x.jpg?width=981&amp;height=1146&amp;name=Groups@1.5x.jpg')}}"
                                                    alt="Groups@1.5x"
                                                    width="981"
                                                    height="1146"
                                                    srcset="
                                                    img/Groups@1.5x.jpg?width=491&amp;height=573&amp;name=Groups@1.5x.jpg    491w,
                                                    img/Groups@1.5x.jpg?width=981&amp;height=1146&amp;name=Groups@1.5x.jpg   981w,
                                                    img/Groups@1.5x.jpg?width=1472&amp;height=1719&amp;name=Groups@1.5x.jpg 1472w,
                                                    img/Groups@1.5x.jpg?width=1962&amp;height=2292&amp;name=Groups@1.5x.jpg 1962w,
                                                    img/Groups@1.5x.jpg?width=2453&amp;height=2865&amp;name=Groups@1.5x.jpg 2453w,
                                                    img/Groups@1.5x.jpg?width=2943&amp;height=3438&amp;name=Groups@1.5x.jpg 2943w
                                                "
                                                    sizes="(max-width: 981px) 100vw, 981px"
                                            />
                                            <div class="solutions-info flex-container flex-dir-column">
                                                <div class="solutions-title flex-container">
                                                    <h3 class="h4">Groups</h3>
                                                </div>
                                                <p class="mb-30">
                                                    Give your hotel group an unfair advantage. Mews offers a highly scalable and secure platform, fast onboarding, intuitive UI, integrated payments and endless opportunities for innovation.
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

                                    <a class="solutions-tile" href="#">
                                        <div class="solutions-img-wrapper">
                                            <img
                                                    loading="lazy"
                                                    src="{{asset('saas/img/Independents@1.5x.jpg?width=981&amp;height=1146&amp;name=Independents@1.5x.jpg')}}"
                                                    alt="Independents@1.5x"
                                                    width="981"
                                                    height="1146"
                                                    srcset="
                                                    img/Independents@1.5x.jpg?width=491&amp;height=573&amp;name=Independents@1.5x.jpg    491w,
                                                    img/Independents@1.5x.jpg?width=981&amp;height=1146&amp;name=Independents@1.5x.jpg   981w,
                                                    img/Independents@1.5x.jpg?width=1472&amp;height=1719&amp;name=Independents@1.5x.jpg 1472w,
                                                    img/Independents@1.5x.jpg?width=1962&amp;height=2292&amp;name=Independents@1.5x.jpg 1962w,
                                                    img/Independents@1.5x.jpg?width=2453&amp;height=2865&amp;name=Independents@1.5x.jpg 2453w,
                                                    img/Independents@1.5x.jpg?width=2943&amp;height=3438&amp;name=Independents@1.5x.jpg 2943w
                                                "
                                                    sizes="(max-width: 981px) 100vw, 981px"
                                            />
                                            <div class="solutions-info flex-container flex-dir-column">
                                                <div class="solutions-title flex-container">
                                                    <h3 class="h4">Independents</h3>
                                                </div>
                                                <p class="mb-30">You’re one of a kind. Mews will help you to create a highly efficient hotel operation that maximizes every resource, elevates experience, and delights your guests.</p>

                                                <p class="content-link">Learn more</p>
                                            </div>
                                            <div class="three-crosses">
                                                <span></span>

                                                <span></span>

                                                <span></span>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="solutions-tile" href="#">
                                        <div class="solutions-img-wrapper">
                                            <img
                                                    loading="lazy"
                                                    src="{{asset('saas/img/Independents@1.5x.jpg?width=981&amp;height=1146&amp;name=Independents@1.5x.jpg')}}"
                                                    alt="Independents@1.5x"
                                                    width="981"
                                                    height="1146"
                                                    srcset="
                                                    img/Independents@1.5x.jpg?width=491&amp;height=573&amp;name=Independents@1.5x.jpg    491w,
                                                    img/Independents@1.5x.jpg?width=981&amp;height=1146&amp;name=Independents@1.5x.jpg   981w,
                                                    img/Independents@1.5x.jpg?width=1472&amp;height=1719&amp;name=Independents@1.5x.jpg 1472w,
                                                    img/Independents@1.5x.jpg?width=1962&amp;height=2292&amp;name=Independents@1.5x.jpg 1962w,
                                                    img/Independents@1.5x.jpg?width=2453&amp;height=2865&amp;name=Independents@1.5x.jpg 2453w,
                                                    img/Independents@1.5x.jpg?width=2943&amp;height=3438&amp;name=Independents@1.5x.jpg 2943w
                                                "
                                                    sizes="(max-width: 981px) 100vw, 981px"
                                            />
                                            <div class="solutions-info flex-container flex-dir-column">
                                                <div class="solutions-title flex-container">
                                                    <h3 class="h4">Independents</h3>
                                                </div>
                                                <p class="mb-30">You’re one of a kind. Mews will help you to create a highly efficient hotel operation that maximizes every resource, elevates experience, and delights your guests.</p>

                                                <p class="content-link">Learn more</p>
                                            </div>
                                            <div class="three-crosses">
                                                <span></span>

                                                <span></span>

                                                <span></span>
                                            </div>
                                        </div>
                                    </a>

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
                                    <h2>Five-star Customer Success</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br> eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                                </div>

                                <div class="column large-5 medium-12 small-12 flex-container" id="solutions-main">
                                </div>

                            </div>

                            <div class="row small-row">
                                <div class="column large-1 medium-12 small-12">

                                </div>
                                <div class="column large-11 medium-12 small-12 flex-container" id="success-main">
                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-cogs"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>

                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-university"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>

                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-user-check"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>

                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-shield-alt"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>



                                </div>
                            </div>

                            <div class="row small-row">
                                <div class="column large-1 medium-12 small-12">

                                </div>
                                <div class="column large-11 medium-12 small-12 flex-container" id="success-main">
                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-cogs"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>

                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-university"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>

                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-user-check"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>

                                    <a class="success-tile" href="#">
                                        <div class="s-text">
                                            <i class="fas fa-shield-alt"></i>
                                            <h4>On-boarding propertise</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                                        </div>
                                    </a>



                                </div>
                            </div>

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


    <div class="review-container">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">
                <div class="text">
                    <h2>Complete applicatie Nieuwe apps voor<br> en vilige terugkeer naar de werlplek</h2>
                    <h3> - Marcel Lewis</h3>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">
                <div class="text">
                    <h2>Lorem ipsum dolor sit detudzdae amet<br>.Aenean amet socada commodo sit.</h2>
                    <h3> - Marcel Lewis</h3>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="{{asset('saas/img/CTAblock-50@0.5x.jpg')}}" style="width:100%">
                <div class="text">
                    <h2>Super geweldig software, wij kunnen<br> ons hele bedrijf ermee runnen</h2>
                    <h3> - Bert</h3>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                </div>
            </div>


            <div class="dots" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>

    </div>


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
