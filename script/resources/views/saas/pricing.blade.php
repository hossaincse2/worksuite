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
                                        <h2 class="h1">Less effort, more revenue, happier guests</h2>
                                        <p>Remarkable hospitality suited to your business needs.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1600858191674" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="pricing-section bg-grey1">
                            <div class="pricing-switches">
                                <div class="row small-row">
                                    <div class="column pricing-btn-wrapper flex-container justify-center" id="type-switch-wrapper">
                                        <div class="toggle">
                                            <input id="type-switch" type="checkbox" data-btn-type="pricingType" />
                                            <label for="type-switch">
                                                <div class="toggle__switch" data-checked="Rooms" data-unchecked="Beds"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="column pricing-btn-wrapper flex-container justify-end" id="bill-switch-wrapper">
                                        <div class="toggle">
                                            <input id="billing-switch" type="checkbox" data-btn-type="billingType" />
                                            <label for="billing-switch">
                                                <div class="toggle__switch switch_reverse" data-checked="Annually" data-unchecked="Monthly"></div>
                                            </label>
                                        </div>
                                        <p id="discount-notice-wrap"><span id="discount-notice">(Save 10%)</span></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="packages-section bg-grey1">
                            <div class="row small-row small-up-1 medium-up-2 large-up-4 align-start align-stretch">
                                <div id="currency-wrapper" class="button button--secondary">
                                    <select name="currency" id="select-currency" data-btn-type="currency">
                                        <option value="" disabled selected>Change currency (€)</option>
                                        <option value="euros">€ EUR</option>
                                        <option value="usd">$ USD</option>
                                        <option value="pounds">£ GBP</option>
                                        <option value="aud">$ AUD</option>
                                    </select>
                                </div>

                                <div class="column flex-container flex-dir-column price-type starter">
                                    <div class="price-details flex-container flex-dir-column">
                                        <h3 class="h4 price-title text-center">Starter</h3>
                                        <p class="package-desc text-center">For smaller, independent properties that need the core functionality to run a successful business</p>
                                        <div class="price-wrapper text-center">
                                            <p class="h3 price" id="package-one-price-value">€7.01</p>
                                            <p class="price-full" id="package-one-full">€7.79</p>
                                            <p class="price-description">
                                                <strong>Per <span class="space" data-space="bed">room</span> / per month <a href="#smallprint-anchor">*</a></strong>
                                            </p>
                                            <p>Billed <span class="bill-time" data-time="Monthly">annually</span> <span class="bill-cent">(10% discount)</span></p>
                                            <p>
                                                <small>Minimum package is <span class="min-price" data-euros="€150" data-pounds="£150" data-usd="$200" data-aud="A$250">€150</span>/month</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="price-info flex-container flex-dir-column">
                                        <a href="#" class="button button--secondary price-cta" id="price-cta-1">Book demo</a>
                                        <p><strong>Get started with Starter:</strong></p>
                                        <ul class="price-feat-list">
                                            <li class="price-feat-list-item">Front-office operations</li>

                                            <li class="price-feat-list-item">Housekeeping module</li>

                                            <li class="price-feat-list-item">Hosted booking engine</li>

                                            <li class="price-feat-list-item">Guest messaging</li>

                                            <li class="price-feat-list-item">Online check-in/check-out</li>

                                            <li class="price-feat-list-item">Payments module</li>

                                            <li class="price-feat-list-item">Financial reporting</li>

                                            <li class="price-feat-list-item">Rate management (15 rates)</li>

                                            <li class="price-feat-list-item">Standard action log (1 month)</li>

                                            <li class="price-feat-list-item">5 integrations</li>

                                            <li class="price-feat-list-item">1 outlet</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="column flex-container flex-dir-column price-type pro primary bg-white">
                                    <p class="text-primary text-center" id="label">Popular</p>

                                    <div class="price-details flex-container flex-dir-column">
                                        <h3 class="h4 price-title text-center">Pro</h3>
                                        <p class="package-desc text-center">For properties that want to improve day-to-day operations with automation and multiple integrations</p>
                                        <div class="price-wrapper text-center">
                                            <p class="h3 price" id="package-two-price-value">€12.14</p>
                                            <p class="price-full" id="package-two-full">€13.49</p>
                                            <p class="price-description">
                                                <strong>Per <span class="space" data-space="bed">room</span> / per month <a href="#smallprint-anchor">*</a></strong>
                                            </p>
                                            <p>Billed <span class="bill-time" data-time="Monthly">annually</span> <span class="bill-cent">(10% discount)</span></p>
                                            <p>
                                                <small>Minimum package is <span class="min-price" data-euros="€350" data-pounds="£350" data-usd="$400" data-aud="A$500">€350</span>/month</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="price-info flex-container flex-dir-column">
                                        <a href="#" class="button button--primary price-cta" id="price-cta-2">Book demo</a>
                                        <p><strong>Do even more with Pro:</strong></p>
                                        <ul class="price-feat-list">
                                            <li class="price-feat-list-item">Group reservations</li>

                                            <li class="price-feat-list-item">Company rates/vouchers</li>

                                            <li class="price-feat-list-item">Embedded booking engine</li>

                                            <li class="price-feat-list-item">Check-in/check-out kiosk app</li>

                                            <li class="price-feat-list-item">Operations reporting</li>

                                            <li class="price-feat-list-item">Customer statistics</li>

                                            <li class="price-feat-list-item">Scheduled data export</li>

                                            <li class="price-feat-list-item">More public rates (30 rates)</li>

                                            <li class="price-feat-list-item">Pro action log (3 months)</li>

                                            <li class="price-feat-list-item">10 integrations</li>

                                            <li class="price-feat-list-item">3 outlets</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="column flex-container flex-dir-column price-type enterprise">
                                    <div class="price-details flex-container flex-dir-column">
                                        <h3 class="h4 price-title text-center">Enterprise</h3>
                                        <p class="package-desc text-center">For tech-savvy properties and chains that require enterprise level business intelligence and customization</p>
                                        <div class="price-wrapper text-center">
                                            <p class="h3 price" id="package-three-price-value">€15.29</p>
                                            <p class="price-full" id="package-three-full">€16.99</p>
                                            <p class="price-description">
                                                <strong>Per <span class="space" data-space="bed">room</span> / per month <a href="#smallprint-anchor">*</a></strong>
                                            </p>
                                            <p>Billed <span class="bill-time" data-time="Monthly">annually</span> <span class="bill-cent">(10% discount)</span></p>
                                            <p>
                                                <small>Minimum package is <span class="min-price" data-euros="€500" data-pounds="£500" data-usd="$600" data-aud="A$700">€500</span>/month</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="price-info flex-container flex-dir-column">
                                        <a href="#" class="button button--secondary price-cta" id="price-cta-3">Book demo</a>
                                        <p><strong>Scale-up with Enterprise:</strong></p>
                                        <ul class="price-feat-list">
                                            <li class="price-feat-list-item">Detailed analytics dashboards</li>

                                            <li class="price-feat-list-item">API access and support</li>

                                            <li class="price-feat-list-item">Space allocation optimization</li>

                                            <li class="price-feat-list-item">Internal messaging module</li>

                                            <li class="price-feat-list-item">Multi-property booking engine</li>

                                            <li class="price-feat-list-item">Multi-property reservations</li>

                                            <li class="price-feat-list-item">Unlimited rates (up to 80)</li>

                                            <li class="price-feat-list-item">Unlimited action log</li>

                                            <li class="price-feat-list-item">Unlimited integrations</li>

                                            <li class="price-feat-list-item">Unlimited outlets</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="column flex-container flex-dir-column price-type custom">
                                    <div class="price-details flex-container flex-dir-column">
                                        <h3 class="h4 price-title text-center">Custom</h3>
                                        <p class="package-desc text-center">For hotel groups with multiple properties that require a tailored package to suit their business needs</p>
                                        <div class="price-wrapper text-center">
                                            <p class="h4 price" id="package-four-price-value">Let's talk</p>
                                            <p class="price-full" id="package-four-full"></p>
                                            <p class="price-description"><strong>Price on application</strong></p>
                                            <p>Billed <span class="bill-time" data-time="Monthly">annually</span></p>
                                        </div>
                                    </div>
                                    <div class="price-info flex-container flex-dir-column">
                                        <a href="#" class="button button--secondary price-cta" id="price-cta-4">Contact sales</a>
                                        <p><strong>Build a tailored package:</strong></p>
                                        <ul class="price-feat-list">
                                            <li class="price-feat-list-item">Choose from Starter, Pro or Enterprise</li>

                                            <li class="price-feat-list-item">Volume based pricing</li>

                                            <li class="price-feat-list-item">Dedicated account management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span id="smallprint-anchor"></span>
                            <div class="row small-row mt-60">
                                <div class="column flex-container flex-dir-column align-center-middle text-center">
                                    <h3 class="h4">
                                        <a href="#table" class="flex-container align-center">
                                            Compare all features
                                            <img src="img/arrow-primary.svg" />
                                        </a>
                                    </h3>
                                    <small id="smallprint">*For the prices of training and consultations, one-time implementation packages apply. Please contact us for a price quote.</small>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="hs_cos_wrapper_widget_1600950370162" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                        <section class="complex-table-section" id="table">
                            <div class="row small-row">
                                <div class="column">
                                    <div class="complex-table">
                                        <div class="table-title-wrap">
                                            <div class="flex-container justify-between" id="title-container">
                                                <div class="table-cell table-col-1 table-title">
                                                    <span class="h5 mb-0 flex-container flex-dir-column align-center-middle">
                                                        <a class="flex-container align-center" href="#type-switch">
                                                            Summary
                                                            <img class="mb-0" src="img/arrow-primary.svg" />
                                                        </a>

                                                        <span> </span>
                                                    </span>
                                                </div>

                                                <div class="flex-container" id="title-items">
                                                    <div class="table-cell table-col-2 table-title">
                                                        <div class="flex-container align-center-middle flex-dir-column">
                                                            <span class="h5 flex-container flex-dir-column align-center-middle">
                                                                Starter

                                                                <span> </span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="table-cell table-col-3 table-title">
                                                        <div class="flex-container align-center-middle flex-dir-column">
                                                            <span class="h5 flex-container flex-dir-column align-center-middle">
                                                                Pro

                                                                <span> </span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="table-cell table-col-4 table-title">
                                                        <div class="flex-container align-center-middle flex-dir-column">
                                                            <span class="h5 flex-container flex-dir-column align-center-middle">
                                                                Enterprise

                                                                <span> </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="table-body-wrap">
                                            <div class="table-feature" id="first-feat">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Mews Guest Journey</h4>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Booking Engine</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Commission-free Booking Engine</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Multi-property Booking Engine</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Customization</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Localization</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Third-party booking</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Mews default URL</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Hosted on your own website</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Promotional codes</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Online Guest Services</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Online check-in</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Online check-out</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Messaging</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Profile management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Apple wallet integration</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Mews Kiosk</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Guest check-in</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Guest check-out</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Passport scanner</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Integrated Terminals</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">Mandatory use</p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">Mandatory use</p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Customization</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Key cutter integration</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Mews Operations</h4>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Reservation management</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">One-click space optimization</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Timeline assignment strategies</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Multi-property reservation screen</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Rooming list</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Group billing</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Rate management</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Public rates included</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">15</p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">30</p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">Max (80)</p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Private rates</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Promotional codes</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Housekeeping</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Task management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Real-time status updates</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Assignee workload overview</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Employee messaging</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Batch housekeeping assignee attachment</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Front-office operations</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Profile management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Centralized messaging</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">User privileges management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Automated payment reminders</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Custom links</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Reporting</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Action log</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">1 month retention</p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">3 month retention</p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">Unlimited retention</p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Schedule report exports</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Schedule report delivery</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">Manual</p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">+ Email</p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">+ Webhook + FTP</p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Activity report</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Check-out report (batch check-out)</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Calendar events</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Outlet revenue reporting</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">1</p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">3</p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right">Max</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Mews Payments</h4>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Integrated payment gateway</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">One-click payments</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Payment requests</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Integrated Terminals</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Virtual cards detection</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Central reconciliations</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Tokenization</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Payment reports</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Alternative payment methods</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0">Add-on</p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0">Add-on</p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0">Add-on</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Mews Marketplace</h4>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Connections included</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0">5</p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0">10</p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0">Unlimited</p>
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Outlets</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Integrations</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">OTAs/Channel managers</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Central Reservation Systems</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Mews Business Intelligence</h4>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Mews Analytics</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0">Add-on</p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0">Add-on</p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Customer statistics</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Financial reporting</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Foreign police reports</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Fiscalization reports</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Mews Open API</h4>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Booking engine API</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Channel Manager API</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature parent-wrap">
                                                    <div class="table-row parent">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Connector API</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Accounting</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Customer management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Event management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Housekeeping</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Point of sale</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0">Revenue management</p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Custom integrations</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/line-icon.svg" alt="line-icon" class="line" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Support</h4>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Email support</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Knowledge Base</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Mews University</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Emergency phone support</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <img src="img/tick-icon.svg" alt="tick-icon" class="tick" />
                                                        </div>
                                                    </div>

                                                    <div class="feature-children">
                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>

                                                        <div class="table-row child">
                                                            <div class="table-cell table-col-1 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0"></p>
                                                            </div>
                                                            <div class="table-cell table-col-2 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-3 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                            <div class="table-cell table-col-4 table-body-cell" data-collapsed="true">
                                                                <p class="mb-0 text-right"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-feature">
                                                <div div class="feat-title">
                                                    <h4 class="h5 mb-0">Premium support</h4>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">24/7 live chat</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">24/7 dedicated support hotline</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">Prioritized responses on tickets</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">On demand emergency support</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sub-feature">
                                                    <div class="table-row">
                                                        <div class="table-cell table-col-1 table-body-cell">
                                                            <p class="mb-0">API integration advice</p>
                                                        </div>
                                                        <div class="table-cell table-col-2 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-3 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                        <div class="table-cell table-col-4 table-body-cell">
                                                            <p class="mb-0"><span class="table-currency">€</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small-row mt-60">
                                <div class="column flex-container flex-dir-column align-center-middle text-center">
                                    <h3 class="h4">
                                        <a href="#type-switch" class="flex-container align-center">
                                            Summary
                                            <img src="img/arrow-primary.svg" />
                                        </a>
                                    </h3>
                                </div>
                            </div>

                    </div>
                </span>
    </main>
 

@endsection
@push('footer-script')
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
@endpush
