<footer class="footer">
    <div>
        <div class="row small-row">
            <div class="column large-1 footer-submenu-wrapper">
            </div>
            <div class="column large-10 medium-10 small-12 footer-submenu-wrapper">
                <div class="footer-submenu">
                    <h3 class="h6 submenu-title">
                        Product
                    </h3>
                    <ul class="submenu-list">
                        @foreach($footerSettings as $key=>$val)
                            @if($val->type=='footer_section_1')
                                <a href="@if(!is_null($val->external_link)) {{ $val->external_link }} @else {{ route('front.page', $val->slug) }} @endif"><li>{{$val->name}}</li></a>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="footer-submenu">
                    <h3 class="h6 submenu-title">
                        Resources
                    </h3>
                    <ul class="submenu-list">
                        @foreach($footerSettings as $key=>$val)
                            @if($val->type=='footer_section_2')
                                <a href="@if(!is_null($val->external_link)) {{ $val->external_link }} @else {{ route('front.page', $val->slug) }} @endif"><li>{{$val->name}}</li></a>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="footer-submenu">
                    <h3 class="h6 submenu-title">
                        Company
                    </h3>
                    <ul class="submenu-list">
                        @foreach($footerSettings as $key=>$val)
                            @if($val->type=='footer_section_3')
                                <a href="@if(!is_null($val->external_link)) {{ $val->external_link }} @else {{ route('front.page', $val->slug) }} @endif"><li>{{$val->name}}</li></a>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="footer-submenu">
                    <h3 class="h6 submenu-title">
                        Legal
                    </h3>
                    <ul class="submenu-list">
                        @foreach($footerSettings as $key=>$val)
                            @if($val->type=='footer_section_4')
                                <a href="@if(!is_null($val->external_link)) {{ $val->external_link }} @else {{ route('front.page', $val->slug) }} @endif"><li>{{$val->name}}</li></a>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="column large-1 footer-submenu-wrapper">
            </div>
        </div>
    </div>

    <div class="row small-row">
        <div class="column large-1">
        </div>

{{--        <div class="column large-10 medium-10 small-12">--}}
{{--            <div class="footer-btn text-right">--}}
{{--                <a href="#">Contact opnemen met de klantenservice</a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="column large-1">
        </div>
    </div>

    <div class="row small-row no-p">
        <div class="column large-1">
        </div>

        <div class="column large-10 medium-10 small-12">
            <div class="text-center">
                <ul class="language-list">
                    @foreach($languages as $lang)
                        <a href="#"><li>{{$lang->language_name}}</li></a>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="column large-1">
        </div>
    </div>

    <div>
        <div id="copyright-border"></div>
        <div class="row flex-container justify-between align-middle">
            <div class="column large-1 footer-submenu-wrapper">
            </div>
            <div class="column large-10 small-12  footer-submenu-wrapper border f-img">
                <p class="text-right float-right">{{ $trFrontDetail->footer_copyright_text ?? "" }}</p>

                {{--                <img src="{{$setting->logo_front_url}}" alt="home" id="footer-logo-white" width="100" height="13" />--}}
            </div>
            <div class="column large-1 footer-submenu-wrapper">

            </div>
            <div class="column">

            </div>
        </div>
    </div>


</footer>