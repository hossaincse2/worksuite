<header class="header">
    <div class="nav-wrap">
        <nav class="nav-main-wrap">
            <div class="row column">
                <div class="nav-main">
                    <a class="logo" href="{{ route('front.home') }}">
                        <img class="logo-default"  src="{{ $setting->logo_front_url }}" alt="home"  style="max-height:35px"/>
                    </a>
{{--                    <div class="nav-menu" id="center-menu">--}}
{{--                        <ul class="">--}}
{{--                            <li role="menuitem" class="is-dropdown-submenu-parent" aria-haspopup="true" aria-label="Products">--}}
{{--                                <a href="" class="main-nav-link nav-swipe-link" id="nav-Products">Products</a>--}}
{{--                            </li>--}}

{{--                            <li role="menuitem" class="is-dropdown-submenu-parent" aria-haspopup="true" aria-label="Solutions">--}}
{{--                                <a href="" class="main-nav-link nav-swipe-link" id="nav-Solutions">Solutions</a>--}}
{{--                            </li>--}}

{{--                            <li role="menuitem">--}}
{{--                                <a href="#" class="main-nav-link nav-track" id="nav-customerStories">Customers</a>--}}
{{--                            </li>--}}

{{--                            <li role="menuitem">--}}
{{--                                <a href="#" class="main-nav-link nav-track" id="nav-Pricing">Pricing</a>--}}
{{--                            </li>--}}

{{--                            <li role="menuitem" class="is-dropdown-submenu-parent" aria-haspopup="true" aria-label="Resources">--}}
{{--                                <a href="" class="main-nav-link nav-swipe-link" id="nav-Resources">Resources</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                    <div class="nav-menu" id="center-menu">
                        <ul class="">
{{--                            <li role="menuitem" class="is-dropdown-submenu-parent" aria-haspopup="true"--}}
{{--                                aria-label="Products">--}}
{{--                                <a href="{{ route('front.home') }}" class="main-nav-link nav-swipe-link" id="#" >{{ $frontMenu->home }}</a>--}}
{{--                            </li>--}}
                            <li role="menuitem">
                                <a href="{{ route('front.home') }}" class="main-nav-link nav-track" id="#" >{{ $frontMenu->home }}</a>
                            </li>

                            <li role="menuitem">
                                <a href="{{ route('front.feature') }}" class="main-nav-link nav-track" id="#" >{{ $frontMenu->feature }}</a>
                            </li>

                            <li role="menuitem">
                                <a href="{{ route('front.pricing') }}" class="main-nav-link nav-track" id="nav-customerStories">{{ $frontMenu->price }}</a>
                            </li>
                            <li role="menuitem">
                                <a href="{{ route('front.contact') }}" class="main-nav-link nav-track" id="nav-Pricing" >{{ $frontMenu->contact }}</a>
                            </li>
                            <li role="menuitem">
                                <a href="{{ route('front.contact') }}" class="main-nav-link nav-track" id="nav-Pricing" >{{ $frontMenu->get_start}}</a>
                            </li>
                            <li role="menuitem">
                                <a href="{{ route('front.contact') }}" class="main-nav-link nav-track" id="nav-Pricing" >{{ $frontMenu->contact_submit }}</a>
                            </li>
                            <li role="menuitem">
                                <a href="{{ route('login') }}" class="main-nav-link nav-track" id="nav-Pricing" >{{ $frontMenu->login}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-menu" id="icon-menu">
                        <ul>
{{--                            @dd($settings->activeLanguages)--}}
                            <li role="menuitem" class="is-dropdown-submenu-parent">
                                @php
                                  $def_flag_img="saas/img/".$locale.".svg"
                                @endphp
                                <a class="main-nav-link nav-swipe-link" id="languages">
                                    <img class="lang-flag" src="{{asset($def_flag_img)}}" height="19" width="32" /></a>
                            </li>
                            <li role="menuitem">
                                <a class="main-nav-link nav-swipe-link" id="search"><img src="{{asset('saas/img/search_icon.svg')}}" alt="Website search icon" width="24" height="24" /></a>
                            </li>
                            <li role="menuitem">
                                <a href="#" class="main-nav-link" id="login" target="_blank">Log in</a>
                            </li>
                        </ul>

                        <a href="#" id="main-nav-btn" class="button button--primary show-for-large main-nav-link nav-track">Book a demo</a>
                    </div>
                    <div id="mobileNav">
                        <a href="#" id="main-nav-btn" class="button button--primary hide-for-large main-nav-link nav-track">Book a demo</a>
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <div id="mob-menu">
                                <a href="/en/" id="mob-home-link"><img src="img/arrow-black.svg" alt="Back to Home arrow" width="25" height="23" />Home</a>
                                <div id="mob-menu-wrapper">
                                    <div class="nav-submenu-item">
                                        <p class="h6 main-nav-link submenu-title p-large">Products</p>

                                        <ul class="mob-nav submenu-list">
                                            <div class="mob-info">
                                                <p class="mb-0"><strong>Mews Hospitality Cloud</strong></p>
                                                <p class="mb-30">Make your property remarkable with an ecosystem of hospitality solutions that maximize revenue and enhance the guest experience</p>
                                                <a class="button button--secondary nav-track" id="nav--btn" href="#">See all products</a>
                                            </div>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-Operations" href="#">
                                                <img
                                                        srcset="img/Operations.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="Operations"
                                                        loading="lazy"
                                                        height="400"
                                                        width="400"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Mews Operations</strong></p>
                                                    <p class="mb-0">The control centre for front office and back office staff with smart automation</p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-GuestJourney" href="#">
                                                <img
                                                        srcset="img/Guest_Journey.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="Guest Journey"
                                                        loading="lazy"
                                                        height="400"
                                                        width="400"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Mews Guest Journey</strong></p>
                                                    <p class="mb-0">A connected guest experience that’s memorable as well as modern</p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-Payments" href="#">
                                                <img
                                                        srcset="img/Payments.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="Payments"
                                                        loading="lazy"
                                                        height="400"
                                                        width="400"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Mews Payments</strong></p>
                                                    <p class="mb-0">Make every payment fast, secure and automatic</p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-BI" href="#">
                                                <img
                                                        srcset="img/Business_Intelligence.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="Business Intelligence"
                                                        loading="lazy"
                                                        height="400"
                                                        width="400"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Mews Business Intelligence</strong></p>
                                                    <p class="mb-0">Tools for better understanding your business</p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-Marketplace" href="#">
                                                <img
                                                        srcset="img/Marketplace.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="Marketplace"
                                                        loading="lazy"
                                                        height="400"
                                                        width="400"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Mews Marketplace</strong></p>
                                                    <p class="mb-0">Hospitality’s biggest marketplace of apps and integrations</p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-API" href="#">
                                                <img
                                                        srcset="img/Open_API.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="Open API"
                                                        loading="lazy"
                                                        height="400"
                                                        width="400"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Mews Open API</strong></p>
                                                    <p class="mb-0">The power to easily connect your tech to Mews</p>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>

                                    <div class="nav-submenu-item">
                                        <p class="h6 main-nav-link submenu-title p-large">Solutions</p>

                                        <ul class="mob-nav submenu-list">
                                            <div class="mob-info">
                                                <p class="mb-0"><strong>The right solution for your business</strong></p>
                                                <p class="mb-0">One size does not fit all. Mews has a comprehensive platform designed for your specific business needs. Choose a solution to find out more</p>
                                            </div>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-Groups" href="#">
                                                <img
                                                        srcset="img/property-icon2.svg 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="property-icon2"
                                                        loading="lazy"
                                                        height="50"
                                                        width="50"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Group hotels and hostels</strong></p>
                                                    <p class="mb-0">Technology that matches the ambition of your group. Mews is a PMS with serious scale and endless opportunities for innovation</p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container" id="nav-mob-Independents" href="#">
                                                <img
                                                        srcset="img/space-status-icon2.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="space-status-icon2"
                                                        loading="lazy"
                                                        height="50"
                                                        width="50"
                                                />
                                                <div class="flex-container flex-dir-column" style="margin-top: 5px;">
                                                    <p class="mb-0"><strong>Independent hotels and hostels</strong></p>
                                                    <p class="mb-0">Your uniqueness is your competitive advantage. Create an efficient and dynamic operation so you can focus on your guests</p>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>

                                    <div class="nav-submenu-item">
                                        <a href="#" class="main-nav-link nav-track" id="nav-customerStories">Customers</a>
                                    </div>

                                    <div class="nav-submenu-item">
                                        <a href="#" class="main-nav-link nav-track" id="nav-Pricing">Pricing</a>
                                    </div>

                                    <div class="nav-submenu-item">
                                        <p class="h6 main-nav-link submenu-title p-large">Resources</p>

                                        <ul class="mob-nav submenu-list">
                                            <div class="mob-info">
                                                <p class="mb-0"><strong>Hospitality events, insights and inspiration</strong></p>
                                                <p class="mb-0">Everything from industry trends and hotelier interviews to product releases and events. Explore your hospitality hub</p>
                                            </div>

                                            <a class="nav-img-link nav-track flex-container align-center" id="nav-mob-Webinars" href="#">
                                                <img
                                                        srcset="img/video-icon.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="video-icon"
                                                        loading="lazy"
                                                        height="26"
                                                        width="25"
                                                />
                                                <div class="flex-container flex-dir-column">
                                                    <p class="mb-0"><strong>Mews Webinars</strong></p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container align-center" id="nav-mob-Podcasts" href="#">
                                                <img
                                                        srcset="img/speech-icon.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="speech-icon"
                                                        loading="lazy"
                                                        height="26"
                                                        width="25"
                                                />
                                                <div class="flex-container flex-dir-column">
                                                    <p class="mb-0"><strong>Mews Podcasts</strong></p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container align-center" id="nav-mob-Events" href="#">
                                                <img
                                                        srcset="imgtwo-people-icon.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="two-people-icon"
                                                        loading="lazy"
                                                        height="26"
                                                        width="25"
                                                />
                                                <div class="flex-container flex-dir-column">
                                                    <p class="mb-0"><strong>Mews Events</strong></p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container align-center" id="nav-mob-Blog" href="#">
                                                <img
                                                        srcset="img/world-icon2.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="world-icon2"
                                                        loading="lazy"
                                                        height="26"
                                                        width="25"
                                                />
                                                <div class="flex-container flex-dir-column">
                                                    <p class="mb-0"><strong>Mews Blog</strong></p>
                                                </div>
                                            </a>

                                            <a class="nav-img-link nav-track flex-container align-center" id="nav-mob-Developers" href="#">
                                                <img
                                                        srcset="img/interaction-icon.svg 613w, img/pixel.webp 1w"
                                                        sizes="(min-width: 1024px) 1px, (max-width: 1023px) 613px"
                                                        src="img/pixel.webp"
                                                        alt="interaction-icon"
                                                        loading="lazy"
                                                        height="26"
                                                        width="25"
                                                />
                                                <div class="flex-container flex-dir-column">
                                                    <p class="mb-0"><strong>Developer resources</strong></p>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>

                                    <div class="nav-submenu-item">
                                        <p class="h6 main-nav-link submenu-title p-large"><img class="lang-flag mr-20" src="img/en.svg" />English</p>
                                        <ul class="mob-nav submenu-list">
                                            <a class="lang-option nav-img-link flex-container lang-option nav-track" id="nav-mob-DE" href="/de/">
                                                <img class="lang-flag" src="img/de.svg" alt="Deutsch flag" height="27" width="45" />
                                                Deutsch
                                            </a>

                                            <a class="lang-option nav-img-link flex-container lang-option nav-track" id="nav-mob-ES" href="/es/">
                                                <img class="lang-flag" src="img/es.svg" alt="Español flag" height="27" width="45" />
                                                Español
                                            </a>

                                            <a class="lang-option nav-img-link flex-container lang-option nav-track" id="nav-mob-FR" href="/fr/">
                                                <img class="lang-flag" src="img/fr.svg" alt="Français flag" height="27" width="45" />
                                                Français
                                            </a>

                                            <a class="lang-option nav-img-link flex-container lang-option nav-track" id="nav-mob-NL" href="/nl/">
                                                <img class="lang-flag" src="img/nl.svg" alt="Nederlands flag" height="27" width="45" />
                                                Nederlands
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="main-nav-link mb-20" id="login" target="_blank">Log in</a>
                                <a href="#" id="mob-menu-btn" class="button button--primary main-nav-link nav-track mb-30">Book a demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </nav>
        <div class="menu-slide flex-container flex-dir-column" data-name="search">
            <form class="search-form" name="search-form" id="search-form-nav" onsubmit="return false;">
                <input type="search" class="search-input" id="search-nav-input" name="q" aria-label="Search the site" placeholder="Search the site" />
                <button class="hide search-submit" type="submit" name="submit" value="Submit"></button>
            </form>
            <p class="searchText opaque">Searching...</p>
        </div>
        <div class="menu-slide" id="nav-languages" data-name="languages">
            <ul class="lang-menu">
                @foreach($languages as $lang)
                    <li>
                        @php
                            $flag_img="saas/img/".$lang->language_code.".svg";
                        @endphp
                        <a class="lang-option nav-track" id="nav-language-{{$lang->language_code}}" href="/{{$lang->language_code}}/">
                            <img class="lang-flag" src="{{asset($flag_img)}}" alt="" height="23" width="38" />
                            {{$lang->language_name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="menu-slide" data-name="nav-Products">
            <div class="slide-wrapper">
                <div></div>
                <div class="slide-section info-section">
                    <p class="text-primary"><strong>Products</strong></p>
                    <p class="h4">Mews Hospitality Cloud</p>
                    <p>Make your property remarkable with an ecosystem of hospitality solutions that maximize revenue and enhance the guest experience</p>
                    <a class="button button--secondary nav-track" href="#" id="nav--btn">See all products</a>
                </div>

                <div class="slide-section submenu">
                    <p class="text-primary"><strong>Capabilities</strong></p>
                    <div class="submenu-wrap flex-container">
                        <a class="submenu-item nav-track flex-container" href="#" id="nav-Operations">
                            <img src="{{asset('saas/img/Operations.svg')}}" alt="Mews Operations navigation image" height="400" width="400" />
                            <div>
                                <p class="mb-0"><strong>Mews Operations</strong></p>
                                <p class="mb-0">The control centre for front office and back office staff with smart automation</p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track flex-container" href="#" id="nav-GuestJourney">
                            <img src="{{asset('saas/img/Guest_Journey.svg')}}" alt="Mews Guest Journey navigation image" height="400" width="400" />
                            <div>
                                <p class="mb-0"><strong>Mews Guest Journey</strong></p>
                                <p class="mb-0">A connected guest experience that’s memorable as well as modern</p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track flex-container" href="#" id="nav-Payments">
                            <img src="{{asset('saas/img/Payments.svg')}}" alt="Mews Payments navigation image" height="400" width="400" />
                            <div>
                                <p class="mb-0"><strong>Mews Payments</strong></p>
                                <p class="mb-0">Make every payment fast, secure and automatic</p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track flex-container" href="#" id="nav-BI">
                            <img src="{{asset('saas/img/Business_Intelligence.svg')}}" alt="Mews Business Intelligence navigation image" height="400" width="400" />
                            <div>
                                <p class="mb-0"><strong>Mews Business Intelligence</strong></p>
                                <p class="mb-0">Tools for better understanding your business</p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track flex-container" href="#" id="nav-Marketplace">
                            <img src="{{asset('saas/img/Marketplace.svg')}}" alt="Mews Marketplace navigation image" height="400" width="400" />
                            <div>
                                <p class="mb-0"><strong>Mews Marketplace</strong></p>
                                <p class="mb-0">Hospitality’s biggest marketplace of apps and integrations</p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track flex-container" href="#" id="nav-API">
                            <img src="{{asset('saas/img/Open_API.svg')}}" alt="Mews Open API navigation image" height="400" width="400" />
                            <div>
                                <p class="mb-0"><strong>Mews Open API</strong></p>
                                <p class="mb-0">The power to easily connect your tech to Mews</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div style="background-color: #ebeef266;"></div>
            </div>
        </div>

        <div class="menu-slide" data-name="nav-Solutions">
            <div class="slide-wrapper multi-slide">
                <div></div>
                <div class="slide-section info-section">
                    <p class="text-primary"><strong>Solutions</strong></p>
                    <p class="h4">The right solution for your business</p>
                    <p>One size does not fit all. Mews has a comprehensive platform designed for your specific business needs. Choose a solution to find out more</p>
                </div>

                <div class="slide-section submenu col-flow bg-blue_grey-2">
                    <p class="text-primary"><strong>By property type</strong></p>
                    <div class="submenu-wrap flex-container">
                        <a class="submenu-item nav-track full-width flex-container" href="#" id="nav-Groups">
                            <img src="{{asset('saas/img/property-icon2.svg')}}" alt="Group hotels and hostels navigation image" height="50" width="50" />
                            <div>
                                <p class="mb-0"><strong>Group hotels and hostels</strong></p>
                                <p class="mb-0">Technology that matches the ambition of your group. Mews is a PMS with serious scale and endless opportunities for innovation</p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track full-width flex-container" href="#" id="nav-Independents">
                            <img src="{{asset('saas/img/space-status-icon2.svg')}}" alt="Independent hotels and hostels navigation image" height="50" width="50" />
                            <div>
                                <p class="mb-0"><strong>Independent hotels and hostels</strong></p>
                                <p class="mb-0">Your uniqueness is your competitive advantage. Create an efficient and dynamic operation so you can focus on your guests</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="slide-section submenu col-flow bg-blue_grey-2">
                    <p class="text-primary"><strong>Case studies</strong></p>
                    <div class="submenu-wrap flex-container">
                        <a class="submenu-item nav-track second-menu-item full-width flex-container" href="#" id="nav-CHotels-study">
                            <img
                                    src="{{asset('saas/img/CHotels-CustomerHero-830x676.jpg?width=125&amp;height=85&amp;name=CHotels-CustomerHero-830x676.jpg')}}"
                                    alt="C-Hotels choose modern, flexible hospitality system navigation image"
                                    height="85"
                                    width="125"
                                    sizes="(max-width: 125px) 100vw, 125px"
                            />
                            <div>
                                <p class="mb-0 caption text-primary">Group</p>
                                <p class="mb-0"><strong>C-Hotels choose modern, flexible hospitality system</strong></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track second-menu-item full-width flex-container" href="#" id="nav-Rodamon-study">
                            <img
                                    src="{{asset('saas/img/Rodamon_Hostels_400x263.jpg?width=125&amp;height=85&amp;name=Rodamon%20Hostels_400x263.jpg')}}"
                                    alt="Rodamón Hostels make guests and staff happier with Mews navigation image"
                                    height="85"
                                    width="125"
                                    sizes="(max-width: 125px) 100vw, 125px"
                            />
                            <div>
                                <p class="mb-0 caption text-primary">Group</p>
                                <p class="mb-0"><strong>Rodamón Hostels make guests and staff happier with Mews</strong></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track second-menu-item full-width flex-container" href="#" id="nav-EMA-study">
                            <img
                                    src="{{asset('saas/img/Imps-Page_EMA-House.jpg?width=125&amp;height=85&amp;name=Imps-Page_EMA-House.jpg')}}"
                                    alt="EMA House make huge time savings with Mews navigation image"
                                    height="85"
                                    width="125"
                                    sizes="(max-width: 125px) 100vw, 125px"
                            />
                            <div>
                                <p class="mb-0 caption text-primary">Independent</p>
                                <p class="mb-0"><strong>EMA House make huge time savings with Mews</strong></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="bg-blue_grey-2"></div>
            </div>
        </div>

        <div class="menu-slide" data-name="nav-Resources">
            <div class="slide-wrapper multi-slide">
                <div></div>
                <div class="slide-section info-section">
                    <p class="text-primary"><strong>Resources</strong></p>
                    <p class="h4">Hospitality events, insights and inspiration</p>
                    <p>Everything from industry trends and hotelier interviews to product releases and events. Explore your hospitality hub</p>
                </div>

                <div class="slide-section submenu col-flow bg-blue_grey-2">
                    <p class="text-primary"><strong>Explore</strong></p>
                    <div class="submenu-wrap flex-container">
                        <a class="submenu-item nav-track full-width flex-container align-center" href="#" id="nav-Webinars">
                            <img src="{{asset('saas/img/video-icon.svg')}}" alt="Mews Webinars navigation image" height="26" width="25" />
                            <div>
                                <p class="mb-0"><strong>Mews Webinars</strong></p>
                                <p class="mb-0"></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track full-width flex-container align-center" href="#" id="nav-Podcasts">
                            <img src="{{asset('saas/img/speech-icon.svg')}}" alt="Mews Podcasts navigation image" height="26" width="25" />
                            <div>
                                <p class="mb-0"><strong>Mews Podcasts</strong></p>
                                <p class="mb-0"></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track full-width flex-container align-center" href="#" id="nav-Events">
                            <img src="{{asset('saas/img/two-people-icon.svg')}}" alt="Mews Events navigation image" height="26" width="25" />
                            <div>
                                <p class="mb-0"><strong>Mews Events</strong></p>
                                <p class="mb-0"></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track full-width flex-container align-center" href="#" id="nav-Blog">
                            <img src="{{asset('saas/img/world-icon2.svg')}}" alt="Mews Blog navigation image" height="26" width="25" />
                            <div>
                                <p class="mb-0"><strong>Mews Blog</strong></p>
                                <p class="mb-0"></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track full-width flex-container align-center" href="#" id="nav-Developers">
                            <img src="{{asset('saas/img/interaction-icon.svg')}}" alt="Developer resources navigation image" height="26" width="25" />
                            <div>
                                <p class="mb-0"><strong>Developer resources</strong></p>
                                <p class="mb-0"></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="slide-section submenu col-flow bg-blue_grey-2">
                    <p class="text-primary"><strong>Most popular</strong></p>
                    <div class="submenu-wrap flex-container">
                        <a class="submenu-item second-menu-item full-width flex-container" href="#">
                            <img
                                    src="{{asset('saas/img/Our_Vision_1203x791_Latest Post.png?width=125&amp;height=85&amp;name=Our%20Vision_1203x791%20-%20Latest%20Post.png')}}"
                                    alt="Our vision to reimagine the future of guest experiences navigation image"
                                    height="85"
                                    width="125"
                                    sizes="(max-width: 125px) 100vw, 125px"
                            />
                            <div>
                                <p class="mb-0 caption text-primary">Blog</p>
                                <p class="mb-0"><strong>Our vision to reimagine the future of guest experiences</strong></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track second-menu-item full-width flex-container" href="#" id="nav-EvolutionOfHospitality">
                            <img
                                    src="{{asset('saas/img/FOH_Evolution_Thumbnail-600x395_v2@2x.png?width=125&amp;height=85&amp;name=FOH_Evolution_Thumbnail%20-%20600x395_v2@2x.png')}}"
                                    alt="The Evolution of Hospitality navigation image"
                                    height="85"
                                    width="125"
                                    sizes="(max-width: 125px) 100vw, 125px"
                            />
                            <div>
                                <p class="mb-0 caption text-primary">Webinar</p>
                                <p class="mb-0"><strong>The Evolution of Hospitality</strong></p>
                            </div>
                        </a>

                        <a class="submenu-item nav-track second-menu-item full-width flex-container" href="#" id="nav-Metrics">
                            <img
                                    src="{{asset('saas/img/MtM_Email_Hero_v2.jpg?width=125&amp;height=85&amp;name=MtM_Email_Hero_v2.jpg')}}"
                                    alt="Discover the definitive hospitality metrics that you should be tracking navigation image"
                                    height="85"
                                    width="125"
                                    sizes="(max-width: 125px) 100vw, 125px"
                            />
                            <div>
                                <p class="mb-0 caption text-primary">Research</p>
                                <p class="mb-0"><strong>Discover the definitive hospitality metrics that you should be tracking</strong></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="bg-blue_grey-2"></div>
            </div>
        </div>
    </div>
</header>