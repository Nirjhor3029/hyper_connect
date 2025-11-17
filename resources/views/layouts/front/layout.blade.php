<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('layouts.front._partials.head')

    @stack('styles')
</head>

<body data-rsssl=1
    class="home page-template-default page page-id-63 elementor-default elementor-kit-8 elementor-page elementor-page-63">


    @include('layouts.front._partials.duotone_image_filters')

    <div id="preloader"></div>


    @include('layouts.front._partials.all_modals')


    <div id="page" class="site">
        @include('layouts.front._partials.mega_menu.for_Institutions')
        @include('layouts.front._partials.mega_menu.for_recruiters')
        @include('layouts.front._partials.mega_menu.company')



        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        @include('layouts.front._partials.mobile-menu')


        @include('layouts.front._partials.header')



        <button class="backToTopBtn">
            <svg width="28" height="36" viewBox="0 0 57 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M54.443 44.6266L28.551 18.7346L2.65908 44.6266" stroke="white" stroke-width="4"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M54.443 27.8919L28.551 2L2.65908 27.8919" stroke="white" stroke-width="4"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <div id="content" class="site-content">

            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    @yield('main-content')



                </main><!-- #main -->
            </div><!-- #primary -->


        </div><!-- #content -->

        @include('layouts.front._partials.footer')
    </div><!-- #page -->





    <!--copyscapeskip-->
    <aside id="moove_gdpr_cookie_info_bar"
        class="moove-gdpr-info-bar-hidden moove-gdpr-align-center moove-gdpr-dark-scheme gdpr_infobar_postion_bottom"
        role="note" aria-label="GDPR Cookie Banner" style="display: none;">
        <div class="moove-gdpr-info-bar-container">
            <div class="moove-gdpr-info-bar-content">

                <div class="moove-gdpr-cookie-notice">
                    <p>We are using cookies to give you the best experience on our website.</p>
                    <p>You can find out more about which cookies we are using or switch them off in <span role="link"
                            tabindex="0" data-href="#moove_gdpr_cookie_modal"
                            class="change-settings-button">settings</span>.</p>
                </div>
                <!--  .moove-gdpr-cookie-notice -->
                <div class="moove-gdpr-button-holder">
                    <button class="mgbutton moove-gdpr-infobar-allow-all gdpr-fbo-0" aria-label="Accept"
                        role="button">Accept</button>
                </div>
                <!--  .button-container -->
            </div>
            <!-- moove-gdpr-info-bar-content -->
        </div>
        <!-- moove-gdpr-info-bar-container -->
    </aside>
    <!-- #moove_gdpr_cookie_info_bar -->
    <!--/copyscapeskip-->

    <div id='fb-pxl-ajax-code'></div>
    <link rel='stylesheet' id='elementor-post-19896-css'
        href='{{ asset('/assets/front') }}/wp-content/uploads/elementor/css/post-19896136b.css?ver=1738492105'
        type='text/css' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='{{ asset('/assets/front') }}/wp-content/plugins/elementor/assets/lib/animations/animations.min5aed.css?ver=3.6.4'
        type='text/css' media='all' />

    @include('layouts.front._partials.scripts-under-body')

    <!--copyscapeskip-->
    <!-- V1 -->
    <div id="moove_gdpr_cookie_modal" class="gdpr_lightbox-hide" role="complementary" aria-label="GDPR Settings Screen">
        <div class="moove-gdpr-modal-content moove-clearfix logo-position-left moove_gdpr_modal_theme_v1">

            <button class="moove-gdpr-modal-close" aria-label="Close GDPR Cookie Settings">
                <span class="gdpr-sr-only">Close GDPR Cookie Settings</span>
                <span class="gdpr-icon moovegdpr-arrow-close"></span>
            </button>
            <div class="moove-gdpr-modal-left-content">

                <div class="moove-gdpr-company-logo-holder">
                    <img alt="Adventus.io" width="350" height="233"
                        data-src="https://adventus.io/wp-content/plugins/gdpr-cookie-compliance/dist/images/gdpr-logo.png"
                        class="img-responsive lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                            src="wp-content/plugins/gdpr-cookie-compliance/dist/images/gdpr-logo.png" alt="Adventus.io"
                            width="350" height="233" class="img-responsive" /></noscript>
                </div>
                <!--  .moove-gdpr-company-logo-holder -->
                <ul id="moove-gdpr-menu">

                    <li class="menu-item-on menu-item-privacy_overview menu-item-selected">
                        <button data-href="#privacy_overview" class="moove-gdpr-tab-nav" aria-label="Privacy Overview">
                            <span class="gdpr-svg-icon">
                                <svg class="icon icon-privacy-overview" viewBox="0 0 26 32">
                                    <path
                                        d="M11.082 27.443l1.536 0.666 1.715-0.717c5.018-2.099 8.294-7.014 8.294-12.442v-5.734l-9.958-5.325-9.702 5.325v5.862c0 5.376 3.2 10.24 8.115 12.365zM4.502 10.138l8.166-4.506 8.397 4.506v4.813c0 4.838-2.893 9.19-7.347 11.034l-1.101 0.461-0.922-0.41c-4.352-1.894-7.194-6.195-7.194-10.957v-4.941zM12.029 14.259h1.536v7.347h-1.536v-7.347zM12.029 10.394h1.536v2.483h-1.536v-2.483z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <span class="gdpr-nav-tab-title">Privacy Overview</span>
                        </button>
                    </li>

                    <li class="menu-item-strict-necessary-cookies menu-item-off">
                        <button data-href="#strict-necessary-cookies" class="moove-gdpr-tab-nav"
                            aria-label="Strictly Necessary Cookies">
                            <span class="gdpr-svg-icon">
                                <svg class="icon icon-strict-necessary" viewBox="0 0 26 32">
                                    <path
                                        d="M22.685 5.478l-9.984 10.752-2.97-4.070c-0.333-0.461-0.973-0.538-1.434-0.205-0.435 0.333-0.538 0.947-0.23 1.408l3.686 5.094c0.179 0.256 0.461 0.41 0.768 0.435h0.051c0.282 0 0.538-0.102 0.742-0.307l10.854-11.699c0.358-0.435 0.333-1.075-0.102-1.434-0.384-0.384-0.998-0.358-1.382 0.026v0zM22.301 12.954c-0.563 0.102-0.922 0.64-0.794 1.203 0.128 0.614 0.179 1.229 0.179 1.843 0 5.094-4.122 9.216-9.216 9.216s-9.216-4.122-9.216-9.216 4.122-9.216 9.216-9.216c1.536 0 3.021 0.384 4.378 1.101 0.512 0.23 1.126 0 1.357-0.538 0.205-0.461 0.051-0.998-0.384-1.254-5.478-2.944-12.314-0.922-15.283 4.557s-0.922 12.314 4.557 15.258 12.314 0.922 15.258-4.557c0.896-1.638 1.357-3.482 1.357-5.35 0-0.768-0.077-1.51-0.23-2.253-0.102-0.538-0.64-0.896-1.178-0.794z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <span class="gdpr-nav-tab-title">Strictly Necessary Cookies</span>
                        </button>
                    </li>




                </ul>

                <div class="moove-gdpr-branding-cnt">

                    <a href="https://wordpress.org/plugins/gdpr-cookie-compliance/" target="_blank"
                        rel="noopener noreferrer nofollow" class='moove-gdpr-branding'>Powered by&nbsp; <span>GDPR
                            Cookie Compliance</span></a>
                </div>
                <!--  .moove-gdpr-branding -->
            </div>
            <!--  .moove-gdpr-modal-left-content -->
            <div class="moove-gdpr-modal-right-content">
                <div class="moove-gdpr-modal-title">

                </div>
                <!-- .moove-gdpr-modal-ritle -->
                <div class="main-modal-content">

                    <div class="moove-gdpr-tab-content">

                        <div id="privacy_overview" class="moove-gdpr-tab-main">
                            <span class="tab-title">Privacy Overview</span>
                            <div class="moove-gdpr-tab-main-content">
                                <p>This website uses cookies so that we can provide you with the best user experience
                                    possible. Cookie information is stored in your browser and performs functions such
                                    as recognising you when you return to our website and helping our team to understand
                                    which sections of the website you find most interesting and useful.</p>
                            </div>
                            <!--  .moove-gdpr-tab-main-content -->

                        </div>
                        <!-- #privacy_overview -->
                        <div id="strict-necessary-cookies" class="moove-gdpr-tab-main" style="display:none">
                            <span class="tab-title">Strictly Necessary Cookies</span>
                            <div class="moove-gdpr-tab-main-content">
                                <p>Strictly Necessary Cookie should be enabled at all times so that we can save your
                                    preferences for cookie settings.</p>
                                <div class="moove-gdpr-status-bar ">
                                    <div class="gdpr-cc-form-wrap">
                                        <div class="gdpr-cc-form-fieldset">
                                            <label class="cookie-switch" for="moove_gdpr_strict_cookies">
                                                <span class="gdpr-sr-only">Enable or Disable Cookies</span>
                                                <input type="checkbox" aria-label="Strictly Necessary Cookies"
                                                    value="check" name="moove_gdpr_strict_cookies"
                                                    id="moove_gdpr_strict_cookies">
                                                <span class="cookie-slider cookie-round" data-text-enable="Enabled"
                                                    data-text-disabled="Disabled"></span>
                                            </label>
                                        </div>
                                        <!-- .gdpr-cc-form-fieldset -->
                                    </div>
                                    <!-- .gdpr-cc-form-wrap -->
                                </div>
                                <!-- .moove-gdpr-status-bar -->
                                <div class="moove-gdpr-strict-warning-message" style="margin-top: 10px;">
                                    <p>If you disable this cookie, we will not be able to save your preferences. This
                                        means that every time you visit this website you will need to enable or disable
                                        cookies again.</p>
                                </div>
                                <!--  .moove-gdpr-tab-main-content -->

                            </div>
                            <!--  .moove-gdpr-tab-main-content -->
                        </div>
                        <!-- #strict-necesarry-cookies -->



                    </div>
                    <!--  .moove-gdpr-tab-content -->
                </div>
                <!--  .main-modal-content -->
                <div class="moove-gdpr-modal-footer-content">
                    <div class="moove-gdpr-button-holder">
                        <button class="mgbutton moove-gdpr-modal-allow-all button-visible" role="button"
                            title="Enable All" aria-label="Enable All">Enable All</button>
                        <button class="mgbutton moove-gdpr-modal-save-settings button-visible" role="button"
                            title="Save Settings" aria-label="Save Settings">Save Settings</button>
                    </div>
                    <!--  .moove-gdpr-button-holder -->
                </div>
                <!--  .moove-gdpr-modal-footer-content -->
            </div>
            <!--  .moove-gdpr-modal-right-content -->

            <div class="moove-clearfix"></div>

        </div>
        <!--  .moove-gdpr-modal-content -->
    </div>
    <!-- #moove_gdpr_cookie_modal -->
    <!--/copyscapeskip-->
    @stack('scripts')
</body>

</html>