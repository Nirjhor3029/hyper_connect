@php
    $assetsUrl = asset('/assets/front/');
    // echo $assetsUrl;
@endphp

@extends('layouts.front.layout')

@push('styles')
    <title>Recruiter Success Stories Archive | Adventus.io</title>

    <meta property="og:title" content="Recruiter Success Stories Archive | Adventus.io" />




    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>



    <link rel='stylesheet' id='swiper-css-css'
        href='{{ $assetsUrl }}/cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='custom-swiper-style-css'
        href='{{ $assetsUrl }}/wp-content/plugins/adventus-elementor-widget/styles1ace.css?ver=1761898779'
        type='text/css' media='all' />
    <link rel='stylesheet' id='open-course-search-css-css'
        href='{{ $assetsUrl }}/wp-content/plugins/open-course-sarch/css/open-course-search87ed.css?ver=5.9.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{ $assetsUrl }}/wp-includes/css/dashicons.min87ed.css?ver=5.9.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventusio-style-min-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-reecruiter-success-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/recruiter-success-story8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-institution-success-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/institution-success-story8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-min-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/slick.min8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='slick-theme-min-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/slick-theme.min8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='premium-partners-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/premium-partners8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='destination-countries-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/destination-countries8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-official-css'
        href='{{ $assetsUrl }}/use.fontawesome.com/releases/v5.13.0/css/all.css' type='text/css' media='all'
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel='stylesheet' id='moove_gdpr_frontend-css'
        href='{{ $assetsUrl }}/wp-content/plugins/gdpr-cookie-compliance/dist/styles/gdpr-main-nf7bcd.css?ver=4.8.3'
        type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/css/frontend.min5aed.css?ver=3.6.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-24366-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-2436645e2.css?ver=1738415764' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-19896-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-19896136b.css?ver=1738492105' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-20347-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-20347bde8.css?ver=1738404382' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-8d6b7.css?ver=1738259458' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/css/frontend.min3ab2.css?ver=3.6.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/globald6b7.css?ver=1738259458' type='text/css'
        media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/animations/animations.min5aed.css?ver=3.6.4'
        type='text/css' media='all' />




    <style id='moove_gdpr_frontend-inline-css' type='text/css'>
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main h3.tab-title,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main span.tab-title,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content .moove-gdpr-branding-cnt a,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton,
        #moove_gdpr_cookie_modal .cookie-switch .cookie-slider:after,
        #moove_gdpr_cookie_modal .cookie-switch .slider:after,
        #moove_gdpr_cookie_modal .switch .cookie-slider:after,
        #moove_gdpr_cookie_modal .switch .slider:after,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content p,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content p a,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content h1,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content h2,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content h3,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content h4,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content h5,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content h6,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content.moove_gdpr_modal_theme_v2 .moove-gdpr-modal-title .tab-title,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content.moove_gdpr_modal_theme_v2 .moove-gdpr-tab-main h3.tab-title,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content.moove_gdpr_modal_theme_v2 .moove-gdpr-tab-main span.tab-title,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content.moove_gdpr_modal_theme_v2 .moove-gdpr-branding-cnt a {
            font-weight: inherit
        }

        #moove_gdpr_cookie_modal,
        #moove_gdpr_cookie_info_bar,
        .gdpr_cookie_settings_shortcode_content {
            font-family: 'DM Sans', sans-serif
        }

        #moove_gdpr_save_popup_settings_button {
            background-color: #373737;
            color: #fff
        }

        #moove_gdpr_save_popup_settings_button:hover {
            background-color: #000
        }

        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton {
            background-color: #19ad4a
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton,
        .gdpr_cookie_settings_shortcode_content .gdpr-shr-button.button-green {
            background-color: #19ad4a;
            border-color: #19ad4a
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton:hover,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton:hover,
        .gdpr_cookie_settings_shortcode_content .gdpr-shr-button.button-green:hover {
            background-color: #fff;
            color: #19ad4a
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close span.gdpr-icon {
            background-color: #19ad4a;
            border: 1px solid #19ad4a
        }

        #moove_gdpr_cookie_info_bar span.change-settings-button.focus-g {
            -webkit-box-shadow: 0 0 1px 3px #19ad4a;
            -moz-box-shadow: 0 0 1px 3px #19ad4a;
            box-shadow: 0 0 1px 3px #19ad4a
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close i:hover,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close span.gdpr-icon:hover,
        #moove_gdpr_cookie_info_bar span[data-href]>u.change-settings-button {
            color: #19ad4a
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected a span.gdpr-icon,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected button span.gdpr-icon {
            color: inherit
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a span.gdpr-icon,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button span.gdpr-icon {
            color: inherit
        }

        #moove_gdpr_cookie_modal .gdpr-acc-link {
            line-height: 0;
            font-size: 0;
            color: transparent;
            position: absolute
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close:hover i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content a:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content span.change-settings-button:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content u.change-settings-button:hover,
        #moove_gdpr_cookie_info_bar span[data-href]>u.change-settings-button,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content span.change-settings-button.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content u.change-settings-button.focus-g {
            color: #19ad4a
        }

        #moove_gdpr_cookie_modal.gdpr_lightbox-hide {
            display: none
        }

        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton,
        .gdpr-shr-button,
        #moove_gdpr_cookie_info_bar .moove-gdpr-infobar-close-btn {
            border-radius: 0
        }
    </style>



    <link rel='stylesheet' id='font-awesome-official-v4shim-css'
        href='{{ $assetsUrl }}/use.fontawesome.com/releases/v5.13.0/css/v4-shims.css' type='text/css' media='all'
        integrity="sha384-/7iOrVBege33/9vHFYEtviVcxjUsNCqyeMnlW/Ms+PH8uRdFkKFmqf9CbVAN0Qef" crossorigin="anonymous" />





    <style id='font-awesome-official-v4shim-inline-css' type='text/css'>
        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-brands-400.eot"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-brands-400.woff2") format("woff2"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-brands-400.woff") format("woff"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-brands-400.ttf") format("truetype"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-brands-400.svg#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-solid-900.eot"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-solid-900.woff2") format("woff2"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-solid-900.woff") format("woff"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-solid-900.ttf") format("truetype"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-solid-900.svg#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-regular-400.eot"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-regular-400.woff2") format("woff2"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-regular-400.woff") format("woff"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-regular-400.ttf") format("truetype"),
                url("https://use.fontawesome.com/releases/v5.13.0/webfonts/fa-regular-400.svg#fontawesome") format("svg");
            unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
        }
    </style>



    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'
        id='swiper-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_680f88afde01607aa81979d12c78c451.js'
        id='custom-swiper-script-js'></script>
    <script type='text/javascript' src='{{ $assetsUrl }}/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0'
        id='jquery-core-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'>
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/lottie.min1ace.js?ver=1761898779'
        id='adventus-lottie-min-js-js'></script>
    <link rel="https://api.w.org/" href="{{ $assetsUrl }}/wp-json/index.html" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ $assetsUrl }}/xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ $assetsUrl }}/wp-includes/wlwmanifest.xml" />




    <style>
        .no-js img.lazyload {
            display: none;
        }

        figure.wp-block-image img.lazyloading {
            min-width: 150px;
        }

        .lazyload,
        .lazyloading {
            opacity: 0;
        }

        .lazyloaded {
            opacity: 1;
            transition: opacity 400ms;
            transition-delay: 0ms;
        }
    </style>



    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>



    <script defer src="{{ $assetsUrl }}/www.googleoptimize.com/optimize1d3d.js?id=OPT-NLXR3J6"></script>


    <style>
        :root {
            --bg: #19AD4A;
        }

        /* #preloader {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100vw;
                    height: 100vh;
                    z-index: 9999;
                    background-color: var(--bg);
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                    align-content: center;
                    font-size: calc(40px + (24 - 16) * (100vw - 320px) / (1280 - 320))
                } */

        #preloader svg {
            width: 28vw !important;
        }

        .backToTopBtn {
            position: fixed;
            bottom: 50px;
            right: 50%;
            z-index: 5000;
            height: 50px;
            width: 50px;
            font-size: 20px;
            border: none;
            border-radius: 100%;
            transition: 0.5s;
            cursor: pointer;
            transform: translateX(50%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }

        .backToTopBtn:not(:hover) {
            background: #19AD4A
        }

        .backToTopBtn:hover {
            background: #293B4A
        }

        .backToTopBtn.active {
            visibility: visible;
            opacity: 1;
            pointer-events: auto
        }

        .backToTopBtn:not(.active) {
            visibility: hidden;
            opacity: 0;
            pointer-events: none
        }
    </style>
@endpush

@section('main-content')
    <main id="main" class="site-main">

        <div data-elementor-type="section" data-elementor-id="24366" class="elementor elementor-24366">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-7e318c78 elementor-section-full_width elementor-section-height-min-height elementor-section-content-middle elementor-section-height-default elementor-section-items-middle"
                    data-id="7e318c78" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/adventus.io\/wp-content\/uploads\/2022\/06\/Collegedunia-preview-2_1-1.mp4&quot;}">
                    <div class="elementor-background-video-container elementor-hidden-phone">
                        <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline
                            loop></video>
                    </div>
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a396f67"
                                data-id="3a396f67" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-3b17741c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="3b17741c" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-79653145"
                                                        data-id="79653145" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-3866ed20 rm-margin elementor-widget elementor-widget-heading"
                                                                    data-id="3866ed20" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h1
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Success stories</h1>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-742299f1 margin-0 rm-margin elementor-widget elementor-widget-text-editor"
                                                                    data-id="742299f1" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            <p>Learn how recruitment agents around the world
                                                                                partner with Adventus.io to achieve success.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-a95a5aa elementor-widget elementor-widget-html"
                                                                    data-id="a95a5aa" data-element_type="widget"
                                                                    data-widget_type="html.default">
                                                                    <div class="elementor-widget-container">
                                                                        <!--HubSpot Call-to-Action Code --><span
                                                                            class="hs-cta-wrapper"
                                                                            id="hs-cta-wrapper-3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee"><span
                                                                                class="hs-cta-node hs-cta-3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee"
                                                                                id="hs-cta-3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee"><!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]--><a
                                                                                    href="https://cta-redirect.hubspot.com/cta/redirect/20616828/3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee"
                                                                                    target="_blank" rel="noopener"><img
                                                                                        id="hs-cta-img-3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee"
                                                                                        style="border-width:0px;"
                                                                                        alt="Talk to Us"
                                                                                        data-src="https://no-cache.hubspot.com/cta/default/20616828/3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee.png"
                                                                                        class="hs-cta-img lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            class="hs-cta-img"
                                                                                            id="hs-cta-img-3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee"
                                                                                            style="border-width:0px;"
                                                                                            src="../../no-cache.hubspot.com/cta/default/20616828/3ffd82e0-da3b-436a-be1b-0e61c3b8e1ee.png"
                                                                                            alt="Talk to Us" /></noscript></a></span>
                                                                            <script defer charset="utf-8" src="../../js.hscta.net/cta/current.js"></script>
                                                                            <script defer
                                                                                src="data:text/javascript;base64,IGhic3B0LmN0YS5sb2FkKDIwNjE2ODI4LCAnM2ZmZDgyZTAtZGEzYi00MzZhLWJlMWItMGU2MWMzYjhlMWVlJywgeyJ1c2VOZXdMb2FkZXIiOiJ0cnVlIiwicmVnaW9uIjoibmExIn0pOyA=">
                                                                            </script>
                                                                        </span><!-- end HubSpot Call-to-Action Code -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1732eeb4"
                                                        data-id="1732eeb4" data-element_type="column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <section class="recruiter-success-stories-wrapper">
            <div class="elementor-element elementor-element-856da10 lines white elementor-widget elementor-widget-html"
                data-id="856da10" data-element_type="widget" data-widget_type="html.default">
                <div class="elementor-widget-container">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="video-success-stories">

                <div class="success-story-video-card">
                    <div class="success-story-video-wrapper">
                        <video class="success-story-video"
                            poster="{{$assetsUrl}}/wp-content/uploads/2022/08/Studyshed-grows-with-Adventus.jpg"
                            onclick="this.paused?this.play():this.pause();">
                            <source
                                src="https://20616828.fs1.hubspotusercontent-na1.net/hubfs/20616828/Studyshed Testimonial Graded Final 22_8_with Captions.mp4"
                                type="video/mp4">
                        </video>
                        <div class="elementor-custom-embed-play" role="button" aria-label="Play Video">
                            <i aria-hidden="true" class="eicon-play"></i>
                            <span class="elementor-screen-only">Play Video</span>
                        </div>
                    </div>
                    <div class="success-story-video-card-details">
                        <p class="success-story-customer-name">
                            Studyshed, Pakistan </p>
                        <p class="success-story-short-description">
                            Find out how Studyshed is giving students greater access to top institutions while experiencing
                            year-on-year revenue growth. </p>
                        <a href="studyshed-pakistan/index.html" class="success-story-readmore">Read More</a>
                    </div>
                </div>


                <div class="success-story-video-card">
                    <div class="success-story-video-wrapper">
                        <video class="success-story-video"
                            poster="{{$assetsUrl}}/wp-content/uploads/2022/06/Collegedunia-thumbnail.jpg"
                            onclick="this.paused?this.play():this.pause();">
                            <source
                                src="https://20616828.fs1.hubspotusercontent-na1.net/hubfs/20616828/CollegeDunia Testimonial FINAL with Captions (1).mp4"
                                type="video/mp4">
                        </video>
                        <div class="elementor-custom-embed-play" role="button" aria-label="Play Video">
                            <i aria-hidden="true" class="eicon-play"></i>
                            <span class="elementor-screen-only">Play Video</span>
                        </div>
                    </div>
                    <div class="success-story-video-card-details">
                        <p class="success-story-customer-name">
                            Collegedunia, India </p>
                        <p class="success-story-short-description">
                            See how Adventus.io helped Collegedunia access more study destinations and institutions while
                            maintaining the perfect balance of offering the best outcome for their students and growing
                            business revenue. </p>
                        <a href="collegedunia-india/index.html" class="success-story-readmore">Read More</a>
                    </div>
                </div>


                <div class="success-story-video-card">
                    <div class="success-story-video-wrapper">
                        <video class="success-story-video"
                            poster="{{$assetsUrl}}/wp-content/uploads/2022/11/Eduvisors-1-e1670303885676.png"
                            onclick="this.paused?this.play():this.pause();">
                            <source
                                src="https://20616828.fs1.hubspotusercontent-na1.net/hubfs/20616828/Eduvisor Testimonial 21_9_22_graded final.mp4"
                                type="video/mp4">
                        </video>
                        <div class="elementor-custom-embed-play" role="button" aria-label="Play Video">
                            <i aria-hidden="true" class="eicon-play"></i>
                            <span class="elementor-screen-only">Play Video</span>
                        </div>
                    </div>
                    <div class="success-story-video-card-details">
                        <p class="success-story-customer-name">
                            Eduvisors, Bangladesh </p>
                        <p class="success-story-short-description">
                            See how Adventus.io helped Ali Zabed break Bangladesh’s market monopolies, helping him grow
                            Eduvisors to support his students through greater access to institutions, and personalised
                            support. </p>
                        <a href="eduvisors-bangladesh/index.html" class="success-story-readmore">Read More</a>
                    </div>
                </div>


                <div class="success-story-video-card">
                    <div class="success-story-video-wrapper">
                        <video class="success-story-video"
                            poster="{{$assetsUrl}}/wp-content/uploads/2022/11/Ability-TestimonialAbility-Education.png"
                            onclick="this.paused?this.play():this.pause();">
                            <source
                                src="https://20616828.fs1.hubspotusercontent-na1.net/hubfs/20616828/Ability testimonial with captions.mp4"
                                type="video/mp4">
                        </video>
                        <div class="elementor-custom-embed-play" role="button" aria-label="Play Video">
                            <i aria-hidden="true" class="eicon-play"></i>
                            <span class="elementor-screen-only">Play Video</span>
                        </div>
                    </div>
                    <div class="success-story-video-card-details">
                        <p class="success-story-customer-name">
                            Ability Education, Pakistan </p>
                        <p class="success-story-short-description">
                            See how Adventus.io has supported Haris Mahmood Mughal and Saadia Zia Haris launch their
                            business to succeed through instant access to top institutions across the globe. </p>
                        <a href="ability-education-pakistan/index.html" class="success-story-readmore">Read More</a>
                    </div>
                </div>


                <div class="success-story-video-card">
                    <div class="success-story-video-wrapper">
                        <video class="success-story-video"
                            poster="{{$assetsUrl}}/wp-content/uploads/2022/12/Destiny-TestimonialPic-only-3.jpg"
                            onclick="this.paused?this.play():this.pause();">
                            <source
                                src="https://20616828.fs1.hubspotusercontent-na1.net/hubfs/20616828/Destiny Customer Profile with captions.mp4"
                                type="video/mp4">
                        </video>
                        <div class="elementor-custom-embed-play" role="button" aria-label="Play Video">
                            <i aria-hidden="true" class="eicon-play"></i>
                            <span class="elementor-screen-only">Play Video</span>
                        </div>
                    </div>
                    <div class="success-story-video-card-details">
                        <p class="success-story-customer-name">
                            Destiny&nbsp;Education Solution, Sri&nbsp;Lanka </p>
                        <p class="success-story-short-description">
                            See how Adventus.io helped Destiny Education Solutions break through Sri Lanka’s market after
                            the pandemic and giving their students greater access to diversified institutions and
                            personalised support. </p>
                        <a href="destiny-education-solution-sri-lanka/index.html" class="success-story-readmore">Read
                            More</a>
                    </div>
                </div>

            </div>
            <div class="success-story-cards">
                <a href="study-guide-overseas-india/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/01/study-guide-suneetha-feature.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="Study Guide Overseas Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/01/sg_logo.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/01/sg_logo.png" class="recruiter-logo"
                                        alt="Study Guide Overseas Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            Study Guide Overseas, India </p>
                        <p class="success-story-card-short-description">
                            How Adventus.io is partnering with Study Guide Overseas to help students achieve success. </p>
                    </div>
                </a>
                <a href="lyceum-placements-sri-lanka/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/01/lyceum-recruiter-adventus-io.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="Lyceum Placements Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/01/lyceum_logow.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/01/lyceum_logow.png" class="recruiter-logo"
                                        alt="Lyceum Placements Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            Lyceum Placements, Sri&nbsp;Lanka </p>
                        <p class="success-story-card-short-description">
                            How Adventus.io is partnering with Lyceum Placements to help scale the business. </p>
                    </div>
                </a>
                <a href="life-course-india/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/01/blog-life-course-feature.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="Life Course Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/01/lc_logo_w.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/01/lc_logo_w.png" class="recruiter-logo"
                                        alt="Life Course Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            Life Course, India </p>
                        <p class="success-story-card-short-description">
                            How Adventus.io is helping to rebuild business for Life Course. </p>
                    </div>
                </a>
                <a href="travellers-consultancy-solutions-sri-lanka/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/07/TCS-group.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="Travellers Consultancy Solutions Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/07/TCS-2.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/07/TCS-2.png" class="recruiter-logo"
                                        alt="Travellers Consultancy Solutions Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            Travellers Consultancy Solutions, Sri&nbsp;Lanka </p>
                        <p class="success-story-card-short-description">
                            How Adventus.io is partnering with Travellers Consultancy Solutions to help scale the business.
                        </p>
                    </div>
                </a>
                <a href="edugo-international-bangladesh/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/06/edugo-picture.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="EduGo International Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/06/edugo.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/06/edugo.png" class="recruiter-logo"
                                        alt="EduGo International Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            EduGo International, Bangladesh </p>
                        <p class="success-story-card-short-description">
                            How Adventus.io is partnering with Edugo International to help scale the business. </p>
                    </div>
                </a>
                <a href="golden-bridge-consultancy-nepal/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/09/golden-bridge-consultancy.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="Golden Bridge Consultancy Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/09/Golden-bridge.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/09/Golden-bridge.png" class="recruiter-logo"
                                        alt="Golden Bridge Consultancy Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            Golden Bridge Consultancy, Nepal </p>
                        <p class="success-story-card-short-description">
                            How Adventus.io is partnering with Golden Bridge Consultancy to help students achieve success.
                        </p>
                    </div>
                </a>
                <a href="kingstudy-vietnam/index.html">
                    <div class="success-story-card">
                        <div class="recruiter-banner-image"
                            style="background-image: url({{$assetsUrl}}/wp-content/uploads/2022/11/KS-PIC.jpg);">
                            <div class="recruiter-banner-overlay">
                                <img alt="Kingstudy Logo"
                                    data-src="https://adventus.io/wp-content/uploads/2022/11/KS-LOGO-white.png"
                                    class="recruiter-logo lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        src="{{$assetsUrl}}/wp-content/uploads/2022/11/KS-LOGO-white.png" class="recruiter-logo"
                                        alt="Kingstudy Logo"></noscript>
                            </div>
                        </div>
                        <p class="success-story-card-recruiter-name">
                            Kingstudy, Vietnam </p>
                        <p class="success-story-card-short-description">
                            See how Adventus.io partnership helped Tu Vuong (Alex), build his success through one of the
                            most difficult times of the pandemic for small businesses. KingStudy supported their students
                            through enhanced access to institutions while staying competitive. </p>
                    </div>
                </a>
            </div>
        </section>

        <div data-elementor-type="section" data-elementor-id="19896" class="elementor elementor-19896">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-1d80e8d elementor-section-full_width uni-carousel institutions-count elementor-section-height-default elementor-section-height-default"
                    data-id="1d80e8d" data-element_type="section">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e087dc"
                                data-id="1e087dc" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-fd5021f animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                            data-id="fd5021f" data-element_type="section"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-829b68c"
                                                        data-id="829b68c" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-cc52956 margin-0 elementor-widget elementor-widget-text-editor"
                                                                    data-id="cc52956" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            Trusted by <span
                                                                                class="animate-number">0</span>+
                                                                            institutions globally </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-20e51b3 elementor-widget elementor-widget-adventus-elementor-widget"
                                                                    data-id="20e51b3" data-element_type="widget"
                                                                    data-widget_type="adventus-elementor-widget.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="swiper swiper-mod">
                                                                            <div class="swiper-wrapper swiper-wrapper-mod">
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2020/04/University-of-Cincinnati.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2020/04/University-of-Cincinnati.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2020/04/manitoba.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2020/04/manitoba.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2021/10/c1043c4591a036410876257df3e135a3.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2021/10/c1043c4591a036410876257df3e135a3.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/01/Logo_of_the_University_of_Queensland.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/01/Logo_of_the_University_of_Queensland.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/01/Logotype_of_the_University_of_New_South_Wales.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/01/Logotype_of_the_University_of_New_South_Wales.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/03/The_University_of_Western_Australia_logo.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/03/The_University_of_Western_Australia_logo.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/Universitycollegedublinlogo.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/Universitycollegedublinlogo.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Western_Ontario_Logo.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Western_Ontario_Logo.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Kansas_wordmark.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Kansas_wordmark.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Exeter_new_logo.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Exeter_new_logo.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Dundee_shield.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Dundee_shield.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Delaware_wordmark.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Delaware_wordmark.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/The_University_of_California_UCLA.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/The_University_of_California_UCLA.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/logo.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/logo.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/Johns_Hopkins_University_logo.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/Johns_Hopkins_University_logo.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2022/04/Algonquin_College_logo.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2022/04/Algonquin_College_logo.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/04/suffolk-logo-colour.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/04/suffolk-logo-colour.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/07/UC.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/07/UC.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/12/LBU.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/12/LBU.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/09/Westcliff.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/09/Westcliff.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2020/05/york-uni-logo.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2020/05/york-uni-logo.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2020/04/rmit.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2020/04/rmit.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/12/GCU-Scotland.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/12/GCU-Scotland.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/09/2560px-UWE_Bristol_logo-1-1.svg"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/09/2560px-UWE_Bristol_logo-1-1.svg"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2020/04/Coventry-Uni.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2020/04/Coventry-Uni.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/07/WAIKATO.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/07/WAIKATO.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2020/04/auckland.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2020/04/auckland.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/07/Canberra.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/07/Canberra.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="swiper-slide swiper-slide-mod">
                                                                                    <a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2023/04/University_of_Suffolk.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2023/04/University_of_Suffolk.png"
                                                                                                alt="" /></noscript>
                                                                                    </a><a target="_blank"
                                                                                        href="../institution-directory/index.html">
                                                                                        <img alt=""
                                                                                            data-src="https://adventus.io/wp-content/uploads/2024/04/University-Y-2-line-Serif-vert-logo_0-1-1.png"
                                                                                            class="lazyload"
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                src="{{$assetsUrl}}/wp-content/uploads/2024/04/University-Y-2-line-Serif-vert-logo_0-1-1.png"
                                                                                                alt="" /></noscript>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-bbe8239 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image-carousel"
                                                                    data-id="bbe8239" data-element_type="widget"
                                                                    data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;pause_on_hover&quot;:&quot;no&quot;,&quot;pause_on_interaction&quot;:&quot;no&quot;,&quot;autoplay_speed&quot;:-1,&quot;speed&quot;:2000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;}"
                                                                    data-widget_type="image-carousel.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-carousel-wrapper swiper-container"
                                                                            dir="ltr">
                                                                            <div
                                                                                class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University of Cincinnati"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTQ0NiwidXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDIwXC8wNFwvVW5pdmVyc2l0eS1vZi1DaW5jaW5uYXRpLnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="University of Cincinnati"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2020/04/University-of-Cincinnati.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2020/04/University-of-Cincinnati.png"
                                                                                                    alt="University of Cincinnati" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="manitoba"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTQ0NywidXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDIwXC8wNFwvbWFuaXRvYmEucG5nIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="manitoba"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2020/04/manitoba.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2020/04/manitoba.png"
                                                                                                    alt="manitoba" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="c1043c4591a036410876257df3e135a3"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTUxNzMsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMVwvMTBcL2MxMDQzYzQ1OTFhMDM2NDEwODc2MjU3ZGYzZTEzNWEzLnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="c1043c4591a036410876257df3e135a3"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2021/10/c1043c4591a036410876257df3e135a3.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2021/10/c1043c4591a036410876257df3e135a3.png"
                                                                                                    alt="c1043c4591a036410876257df3e135a3" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Logo_of_the_University_of_Queensland"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk4OTksInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDFcL0xvZ29fb2ZfdGhlX1VuaXZlcnNpdHlfb2ZfUXVlZW5zbGFuZC5zdmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="Logo_of_the_University_of_Queensland"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/01/Logo_of_the_University_of_Queensland.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/01/Logo_of_the_University_of_Queensland.svg"
                                                                                                    alt="Logo_of_the_University_of_Queensland" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Logotype_of_the_University_of_New_South_Wales"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk5MDAsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDFcL0xvZ290eXBlX29mX3RoZV9Vbml2ZXJzaXR5X29mX05ld19Tb3V0aF9XYWxlcy5zdmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="Logotype_of_the_University_of_New_South_Wales"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/01/Logotype_of_the_University_of_New_South_Wales.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/01/Logotype_of_the_University_of_New_South_Wales.svg"
                                                                                                    alt="Logotype_of_the_University_of_New_South_Wales" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="The_University_of_Western_Australia_logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjA5MzIsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDNcL1RoZV9Vbml2ZXJzaXR5X29mX1dlc3Rlcm5fQXVzdHJhbGlhX2xvZ28uc3ZnIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="The_University_of_Western_Australia_logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/03/The_University_of_Western_Australia_logo.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/03/The_University_of_Western_Australia_logo.svg"
                                                                                                    alt="The_University_of_Western_Australia_logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Universitycollegedublinlogo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MzMsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1VuaXZlcnNpdHljb2xsZWdlZHVibGlubG9nby5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="Universitycollegedublinlogo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/Universitycollegedublinlogo.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/Universitycollegedublinlogo.png"
                                                                                                    alt="Universitycollegedublinlogo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University_of_Western_Ontario_Logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MzIsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1VuaXZlcnNpdHlfb2ZfV2VzdGVybl9PbnRhcmlvX0xvZ28uc3ZnIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="University_of_Western_Ontario_Logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Western_Ontario_Logo.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Western_Ontario_Logo.svg"
                                                                                                    alt="University_of_Western_Ontario_Logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University_of_Kansas_wordmark"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MzEsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1VuaXZlcnNpdHlfb2ZfS2Fuc2FzX3dvcmRtYXJrLnN2ZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="University_of_Kansas_wordmark"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Kansas_wordmark.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Kansas_wordmark.svg"
                                                                                                    alt="University_of_Kansas_wordmark" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University_of_Exeter_new_logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MzQsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1VuaXZlcnNpdHlfb2ZfRXhldGVyX25ld19sb2dvLnN2ZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="University_of_Exeter_new_logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Exeter_new_logo.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Exeter_new_logo.svg"
                                                                                                    alt="University_of_Exeter_new_logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University_of_Dundee_shield"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MjksInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1VuaXZlcnNpdHlfb2ZfRHVuZGVlX3NoaWVsZC5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="University_of_Dundee_shield"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Dundee_shield.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Dundee_shield.png"
                                                                                                    alt="University_of_Dundee_shield" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University_of_Delaware_wordmark"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MjgsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1VuaXZlcnNpdHlfb2ZfRGVsYXdhcmVfd29yZG1hcmsuc3ZnIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="University_of_Delaware_wordmark"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/University_of_Delaware_wordmark.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Delaware_wordmark.svg"
                                                                                                    alt="University_of_Delaware_wordmark" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="The_University_of_California_UCLA"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MjYsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL1RoZV9Vbml2ZXJzaXR5X29mX0NhbGlmb3JuaWFfVUNMQS5zdmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="The_University_of_California_UCLA"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/The_University_of_California_UCLA.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/The_University_of_California_UCLA.svg"
                                                                                                    alt="The_University_of_California_UCLA" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MjUsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL2xvZ28uc3ZnIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/logo.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/logo.svg"
                                                                                                    alt="logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Johns_Hopkins_University_logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MjMsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL0pvaG5zX0hvcGtpbnNfVW5pdmVyc2l0eV9sb2dvLnN2ZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="Johns_Hopkins_University_logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/Johns_Hopkins_University_logo.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/Johns_Hopkins_University_logo.svg"
                                                                                                    alt="Johns_Hopkins_University_logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Algonquin_College_logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjE0MjEsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMlwvMDRcL0FsZ29ucXVpbl9Db2xsZWdlX2xvZ28uc3ZnIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="Algonquin_College_logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2022/04/Algonquin_College_logo.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2022/04/Algonquin_College_logo.svg"
                                                                                                    alt="Algonquin_College_logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="suffolk logo colour"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjU2NTQsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDRcL3N1ZmZvbGstbG9nby1jb2xvdXIucG5nIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="suffolk logo colour"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/04/suffolk-logo-colour.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/04/suffolk-logo-colour.png"
                                                                                                    alt="suffolk logo colour" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="UC"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjYzOTUsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDdcL1VDLnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="UC"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/07/UC.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/07/UC.png"
                                                                                                    alt="UC" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="LBU"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjgwNTgsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMTJcL0xCVS5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure class="swiper-slide-inner">
                                                                                            <img alt="LBU"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/12/LBU.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/12/LBU.png"
                                                                                                    alt="LBU" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Westcliff"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6Mjc1MDQsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDlcL1dlc3RjbGlmZi5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="Westcliff"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/09/Westcliff.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/09/Westcliff.png"
                                                                                                    alt="Westcliff" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="york uni logo"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTYzMSwidXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDIwXC8wNVwveW9yay11bmktbG9nby5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="york uni logo"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2020/05/york-uni-logo.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2020/05/york-uni-logo.png"
                                                                                                    alt="york uni logo" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="rmit"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2LCJ1cmwiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA0XC9ybWl0LnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="rmit"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2020/04/rmit.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2020/04/rmit.png"
                                                                                                    alt="rmit" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="GCU-Scotland"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjgwNjIsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMTJcL0dDVS1TY290bGFuZC5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="GCU-Scotland"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/12/GCU-Scotland.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/12/GCU-Scotland.png"
                                                                                                    alt="GCU-Scotland" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="2560px-UWE_Bristol_logo 1 (1)"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjcyNjYsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDlcLzI1NjBweC1VV0VfQnJpc3RvbF9sb2dvLTEtMS5zdmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="2560px-UWE_Bristol_logo 1 (1)"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/09/2560px-UWE_Bristol_logo-1-1.svg"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/09/2560px-UWE_Bristol_logo-1-1.svg"
                                                                                                    alt="2560px-UWE_Bristol_logo 1 (1)" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Coventry Uni"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTQ1MSwidXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDIwXC8wNFwvQ292ZW50cnktVW5pLnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="Coventry Uni"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2020/04/Coventry-Uni.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2020/04/Coventry-Uni.png"
                                                                                                    alt="Coventry Uni" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="WAIKATO"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjYzODksInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDdcL1dBSUtBVE8ucG5nIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="WAIKATO"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/07/WAIKATO.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/07/WAIKATO.png"
                                                                                                    alt="WAIKATO" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="auckland"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTA5MCwidXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDIwXC8wNFwvYXVja2xhbmQucG5nIiwic2xpZGVzaG93IjoiYmJlODIzOSJ9"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="auckland"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2020/04/auckland.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2020/04/auckland.png"
                                                                                                    alt="auckland" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="Canberra"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjYzMjcsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDdcL0NhbmJlcnJhLnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="Canberra"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/07/Canberra.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/07/Canberra.png"
                                                                                                    alt="Canberra" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University_of_Suffolk"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjYxMjIsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDRcL1VuaXZlcnNpdHlfb2ZfU3VmZm9say5wbmciLCJzbGlkZXNob3ciOiJiYmU4MjM5In0%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="University_of_Suffolk"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2023/04/University_of_Suffolk.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2023/04/University_of_Suffolk.png"
                                                                                                    alt="University_of_Suffolk" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                                <div class="swiper-slide"><a
                                                                                        data-elementor-open-lightbox="yes"
                                                                                        data-elementor-lightbox-slideshow="bbe8239"
                                                                                        data-elementor-lightbox-title="University Y 2 line Serif vert logo_0 (1)"
                                                                                        e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6Mjg1OTYsInVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNFwvMDRcL1VuaXZlcnNpdHktWS0yLWxpbmUtU2VyaWYtdmVydC1sb2dvXzAtMS0xLnBuZyIsInNsaWRlc2hvdyI6ImJiZTgyMzkifQ%3D%3D"
                                                                                        href="../institution-directory/index.html"
                                                                                        target="_blank">
                                                                                        <figure
                                                                                            class="swiper-slide-inner">
                                                                                            <img alt="University Y 2 line Serif vert logo_0 (1)"
                                                                                                data-src="https://adventus.io/wp-content/uploads/2024/04/University-Y-2-line-Serif-vert-logo_0-1-1.png"
                                                                                                class="swiper-slide-image lazyload"
                                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                                    class="swiper-slide-image"
                                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2024/04/University-Y-2-line-Serif-vert-logo_0-1-1.png"
                                                                                                    alt="University Y 2 line Serif vert logo_0 (1)" /></noscript>
                                                                                        </figure>
                                                                                    </a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-709ed27 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-html"
                                                                    data-id="709ed27" data-element_type="widget"
                                                                    data-widget_type="html.default">
                                                                    <div class="elementor-widget-container">
                                                                        <a href="../institution-directory/index.html">
                                                                            <div class="logo-marquee">
                                                                                <div>
                                                                                    <!--<img  data-src='https://adventus.io/wp-content/uploads/2020/05/ANU-logo.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src="https://adventus.io/wp-content/uploads/2020/05/ANU-logo.png"></noscript>-->
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2020/04/University-of-Cincinnati.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2020/04/University-of-Cincinnati.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2020/04/manitoba.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2020/04/manitoba.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2020/04/auckland.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2020/04/auckland.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2021/10/c1043c4591a036410876257df3e135a3.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2021/10/c1043c4591a036410876257df3e135a3.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2020/05/york-uni-logo.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2020/05/york-uni-logo.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/01/Logo_of_the_University_of_Queensland.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/01/Logo_of_the_University_of_Queensland.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/01/Logotype_of_the_University_of_New_South_Wales.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/01/Logotype_of_the_University_of_New_South_Wales.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/01/2560px-RMIT_University_Logo.svg.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/01/2560px-RMIT_University_Logo.svg.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/03/The_University_of_Western_Australia_logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/03/The_University_of_Western_Australia_logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/01/torrens_lgo.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/01/torrens_lgo.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/01/CoA-transparent.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/01/CoA-transparent.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/01/uc_logo_inline.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/01/uc_logo_inline.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/Universitycollegedublinlogo.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/Universitycollegedublinlogo.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/University_of_Western_Ontario_Logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Western_Ontario_Logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/University_of_Kansas_wordmark.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Kansas_wordmark.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/University_of_Exeter_new_logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Exeter_new_logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/University_of_Dundee_shield.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Dundee_shield.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/University_of_Delaware_wordmark.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/University_of_Delaware_wordmark.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/UC_Riverside_logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/UC_Riverside_logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/The_University_of_California_UCLA.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/The_University_of_California_UCLA.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/Lancaster_University_logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/Lancaster_University_logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/Johns_Hopkins_University_logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/Johns_Hopkins_University_logo.svg"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/Coventry_University_coat_of_arms.png'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/Coventry_University_coat_of_arms.png"></noscript>
                                                                                    <img data-src='https://adventus.io/wp-content/uploads/2022/04/Algonquin_College_logo.svg'
                                                                                        class='lazyload'
                                                                                        src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
                                                                                            src="{{$assetsUrl}}/wp-content/uploads/2022/04/Algonquin_College_logo.svg"></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-94fa705 lines white elementor-widget elementor-widget-html"
                                            data-id="94fa705" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div data-elementor-type="section" data-elementor-id="20347" class="elementor elementor-20347">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c378003 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="c378003" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-89f2b0f"
                                data-id="89f2b0f" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-0e7ca28 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="0e7ca28" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-af2a025 elementor-hidden-phone"
                                                        data-id="af2a025" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-c9b342d elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                                    data-id="c9b342d" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="564" height="418"
                                                                                alt=""
                                                                                data-srcset="https://adventus.io/wp-content/uploads/2021/10/hand.png 564w, https://adventus.io/wp-content/uploads/2021/10/hand-300x222.png 300w"
                                                                                data-src="https://adventus.io/wp-content/uploads/2021/10/hand.png"
                                                                                data-sizes="(max-width: 564px) 100vw, 564px"
                                                                                class="attachment-large size-large lazyload"
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                    width="564" height="418"
                                                                                    src="{{$assetsUrl}}/wp-content/uploads/2021/10/hand.png"
                                                                                    class="attachment-large size-large"
                                                                                    alt=""
                                                                                    srcset="https://adventus.io/wp-content/uploads/2021/10/hand.png 564w, https://adventus.io/wp-content/uploads/2021/10/hand-300x222.png 300w"
                                                                                    sizes="(max-width: 564px) 100vw, 564px" /></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cf97855 animated-fast elementor-invisible"
                                                        data-id="cf97855" data-element_type="column"
                                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5ac198b margin-0 rm-margin elementor-widget elementor-widget-heading"
                                                                    data-id="5ac198b" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Try Adventus.io for free</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2797db6 margin-0 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                                    data-id="2797db6" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            <p>Sign up to the marketplace and start getting
                                                                                noticed today.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b230099 elementor-align-center elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                                    data-id="b230099" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://info.adventus.io/request-a-demo"
                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">REQUEST
                                                                                        DEMO</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-e67a60e elementor-align-center elementor-widget__width-auto hide elementor-widget elementor-widget-button"
                                                                    data-id="e67a60e" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://signup.adventus.io/"
                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">SIGN
                                                                                        UP</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </main><!-- #main -->
@endsection

@push('scripts')
    {{-- <script defer id="leadin-script-loader-js-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbGVhZGluX3dvcmRwcmVzcyA9IHsidXNlclJvbGUiOiJ2aXNpdG9yIiwicGFnZVR5cGUiOiJhcmNoaXZlIiwibGVhZGluUGx1Z2luVmVyc2lvbiI6IjguNy4zIn07Ci8qIF1dPiAqLwo="></script> --}}
    <script type='text/javascript' defer src='{{ $assetsUrl }}/js.hs-scripts.com/20616828a466.js?integration=WordPress'
        async defer id='hs-script-loader'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_7a5024b25d32066a41f07aa72f43adde.js'
        id='open-course-search-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/gsap.min1ace.js?ver=1761898779'
        id='gsap-tweenmax-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/Draggable.min1ace.js?ver=1761898779'
        id='gsap-draggable-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_f47e8e64e5f1a3e934b5fcdfe5d4f7918a54.js?ver=1.0.0'
        id='adventusio-navigation-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_26036e4be38edb295cd25a7c06ba89398a54.js?ver=1.0.0'
        id='adventusio-skip-link-focus-fix-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/script.min1ace.js?ver=1761898779' id='adventus-min-js-js'>
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_e0f8bcd10939756a4716cfdc9c7c0aee1ace.js?ver=1761898779'
        id='adventus-global-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_340be438ec1fbb486af7862a98f01d441ace.js?ver=1761898779'
        id='adventus-reecruiter-success-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min1ace.js?ver=1761898779'
        id='slick-min-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_eeb2a606a7af726af929980275671d701ace.js?ver=1761898779'
        id='archive-premium-partner-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/gsaplegacy/TweenMax.min1ace.js?ver=1761898779'
        id='gsap-tween-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/gsaplegacy/AttrPlugin.min1ace.js?ver=1761898779'
        id='gsap-attrplugin-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/gsaplegacy/DrawSVGPlugin.min1ace.js?ver=1761898779'
        id='gsap-drawsvg-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_46bbb1bf78bf7612a2ed33fea09718431ace.js?ver=1761898779'
        id='destinations-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.minc063.js?ver=3.9.5'
        id='smush-lazy-load-js'></script>
    <script defer id="moove_gdpr_frontend-js-extra"
        src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbW9vdmVfZnJvbnRlbmRfZ2Rwcl9zY3JpcHRzID0geyJhamF4dXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJwb3N0X2lkIjoiMjQ1NTEiLCJwbHVnaW5fZGlyIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9nZHByLWNvb2tpZS1jb21wbGlhbmNlIiwic2hvd19pY29ucyI6ImFsbCIsImlzX3BhZ2UiOiIiLCJzdHJpY3RfaW5pdCI6IjEiLCJlbmFibGVkX2RlZmF1bHQiOnsidGhpcmRfcGFydHkiOjAsImFkdmFuY2VkIjowfSwiZ2VvX2xvY2F0aW9uIjoiZmFsc2UiLCJmb3JjZV9yZWxvYWQiOiJmYWxzZSIsImlzX3NpbmdsZSI6IiIsImhpZGVfc2F2ZV9idG4iOiJmYWxzZSIsImN1cnJlbnRfdXNlciI6IjAiLCJjb29raWVfZXhwaXJhdGlvbiI6IjM2NSIsInNjcmlwdF9kZWxheSI6IjIwMDAiLCJjbG9zZV9idG5fYWN0aW9uIjoiMSIsImNsb3NlX2NzX2FjdGlvbiI6IjEiLCJnZHByX3Njb3IiOiJ0cnVlIiwid3BfbGFuZyI6IiJ9OwovKiBdXT4gKi8K">
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_8b26876dca36bf5540648fd67e6717237bcd.js?ver=4.8.3'
        id='moove_gdpr_frontend-js'></script>
    <script defer id="moove_gdpr_frontend-js-after"
        src="data:text/javascript;base64,CnZhciBnZHByX2NvbnNlbnRfX3N0cmljdCA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fdGhpcmRwYXJ0eSA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fYWR2YW5jZWQgPSAiZmFsc2UiCnZhciBnZHByX2NvbnNlbnRfX2Nvb2tpZXMgPSAiIgo=">
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min3ab2.js?ver=3.6.5'
        id='elementor-pro-webpack-runtime-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/js/webpack.runtime.min5aed.js?ver=3.6.4'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/js/frontend-modules.min5aed.js?ver=3.6.4'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript'
        src='{{ $assetsUrl }}/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9'
        id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='{{ $assetsUrl }}/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
    <script type='text/javascript'
        src='{{ $assetsUrl }}/wp-includes/js/dist/hooks.min8cbb.js?ver=1e58c8c5a32b2e97491080c5b10dc71c'
        id='wp-hooks-js'></script>
    <script type='text/javascript'
        src='{{ $assetsUrl }}/wp-includes/js/dist/i18n.mina28b.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'>
    </script>
    {{-- <script defer id="wp-i18n-js-after" src="data:text/javascript;base64,CndwLmkxOG4uc2V0TG9jYWxlRGF0YSggeyAndGV4dCBkaXJlY3Rpb25cdTAwMDRsdHInOiBbICdsdHInIF0gfSApOwo="></script> --}}
    {{-- <script defer id="elementor-pro-frontend-js-translations" src="data:text/javascript;base64,CiggZnVuY3Rpb24oIGRvbWFpbiwgdHJhbnNsYXRpb25zICkgewoJdmFyIGxvY2FsZURhdGEgPSB0cmFuc2xhdGlvbnMubG9jYWxlX2RhdGFbIGRvbWFpbiBdIHx8IHRyYW5zbGF0aW9ucy5sb2NhbGVfZGF0YS5tZXNzYWdlczsKCWxvY2FsZURhdGFbIiJdLmRvbWFpbiA9IGRvbWFpbjsKCXdwLmkxOG4uc2V0TG9jYWxlRGF0YSggbG9jYWxlRGF0YSwgZG9tYWluICk7Cn0gKSggImVsZW1lbnRvci1wcm8iLCB7ICJsb2NhbGVfZGF0YSI6IHsgIm1lc3NhZ2VzIjogeyAiIjoge30gfSB9IH0gKTsK"></script> --}}
    {{-- <script defer id="elementor-pro-frontend-js-before" src="data:text/javascript;base64,CnZhciBFbGVtZW50b3JQcm9Gcm9udGVuZENvbmZpZyA9IHsiYWpheHVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiI0MmM3MDllZjYxIiwidXJscyI6eyJhc3NldHMiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvci1wcm9cL2Fzc2V0c1wvIiwicmVzdCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtanNvblwvIn0sInNoYXJlQnV0dG9uc05ldHdvcmtzIjp7ImZhY2Vib29rIjp7InRpdGxlIjoiRmFjZWJvb2siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR3aXR0ZXIiOnsidGl0bGUiOiJUd2l0dGVyIn0sImxpbmtlZGluIjp7InRpdGxlIjoiTGlua2VkSW4iLCJoYXNfY291bnRlciI6dHJ1ZX0sInBpbnRlcmVzdCI6eyJ0aXRsZSI6IlBpbnRlcmVzdCIsImhhc19jb3VudGVyIjp0cnVlfSwicmVkZGl0Ijp7InRpdGxlIjoiUmVkZGl0IiwiaGFzX2NvdW50ZXIiOnRydWV9LCJ2ayI6eyJ0aXRsZSI6IlZLIiwiaGFzX2NvdW50ZXIiOnRydWV9LCJvZG5va2xhc3NuaWtpIjp7InRpdGxlIjoiT0siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR1bWJsciI6eyJ0aXRsZSI6IlR1bWJsciJ9LCJkaWdnIjp7InRpdGxlIjoiRGlnZyJ9LCJza3lwZSI6eyJ0aXRsZSI6IlNreXBlIn0sInN0dW1ibGV1cG9uIjp7InRpdGxlIjoiU3R1bWJsZVVwb24iLCJoYXNfY291bnRlciI6dHJ1ZX0sIm1peCI6eyJ0aXRsZSI6Ik1peCJ9LCJ0ZWxlZ3JhbSI6eyJ0aXRsZSI6IlRlbGVncmFtIn0sInBvY2tldCI6eyJ0aXRsZSI6IlBvY2tldCIsImhhc19jb3VudGVyIjp0cnVlfSwieGluZyI6eyJ0aXRsZSI6IlhJTkciLCJoYXNfY291bnRlciI6dHJ1ZX0sIndoYXRzYXBwIjp7InRpdGxlIjoiV2hhdHNBcHAifSwiZW1haWwiOnsidGl0bGUiOiJFbWFpbCJ9LCJwcmludCI6eyJ0aXRsZSI6IlByaW50In19LCJmYWNlYm9va19zZGsiOnsibGFuZyI6ImVuX1VTIiwiYXBwX2lkIjoiIn0sImxvdHRpZSI6eyJkZWZhdWx0QW5pbWF0aW9uVXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3ItcHJvXC9tb2R1bGVzXC9sb3R0aWVcL2Fzc2V0c1wvYW5pbWF0aW9uc1wvZGVmYXVsdC5qc29uIn19Owo="></script> --}}
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/js/frontend.min3ab2.js?ver=3.6.5'
        id='elementor-pro-frontend-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script type='text/javascript' defer src='{{ $assetsUrl }}/wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1'
        id='jquery-ui-core-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/share-link/share-link.min5aed.js?ver=3.6.4'
        id='share-link-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0'
        id='elementor-dialog-js'></script>
    {{-- <script defer id="elementor-frontend-js-before" src="data:text/javascript;base64,CnZhciBlbGVtZW50b3JGcm9udGVuZENvbmZpZyA9IHsiZW52aXJvbm1lbnRNb2RlIjp7ImVkaXQiOmZhbHNlLCJ3cFByZXZpZXciOmZhbHNlLCJpc1NjcmlwdERlYnVnIjpmYWxzZX0sImkxOG4iOnsic2hhcmVPbkZhY2Vib29rIjoiU2hhcmUgb24gRmFjZWJvb2siLCJzaGFyZU9uVHdpdHRlciI6IlNoYXJlIG9uIFR3aXR0ZXIiLCJwaW5JdCI6IlBpbiBpdCIsImRvd25sb2FkIjoiRG93bmxvYWQiLCJkb3dubG9hZEltYWdlIjoiRG93bmxvYWQgaW1hZ2UiLCJmdWxsc2NyZWVuIjoiRnVsbHNjcmVlbiIsInpvb20iOiJab29tIiwic2hhcmUiOiJTaGFyZSIsInBsYXlWaWRlbyI6IlBsYXkgVmlkZW8iLCJwcmV2aW91cyI6IlByZXZpb3VzIiwibmV4dCI6Ik5leHQiLCJjbG9zZSI6IkNsb3NlIn0sImlzX3J0bCI6ZmFsc2UsImJyZWFrcG9pbnRzIjp7InhzIjowLCJzbSI6NDgwLCJtZCI6NzY4LCJsZyI6MTAyNSwieGwiOjE0NDAsInh4bCI6MTYwMH0sInJlc3BvbnNpdmUiOnsiYnJlYWtwb2ludHMiOnsibW9iaWxlIjp7ImxhYmVsIjoiTW9iaWxlIiwidmFsdWUiOjc2NywiZGVmYXVsdF92YWx1ZSI6NzY3LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwibW9iaWxlX2V4dHJhIjp7ImxhYmVsIjoiTW9iaWxlIEV4dHJhIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IEV4dHJhIiwidmFsdWUiOjEyMDAsImRlZmF1bHRfdmFsdWUiOjEyMDAsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwibGFwdG9wIjp7ImxhYmVsIjoiTGFwdG9wIiwidmFsdWUiOjEzNjYsImRlZmF1bHRfdmFsdWUiOjEzNjYsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwid2lkZXNjcmVlbiI6eyJsYWJlbCI6IldpZGVzY3JlZW4iLCJ2YWx1ZSI6MjQwMCwiZGVmYXVsdF92YWx1ZSI6MjQwMCwiZGlyZWN0aW9uIjoibWluIiwiaXNfZW5hYmxlZCI6ZmFsc2V9fX0sInZlcnNpb24iOiIzLjYuNCIsImlzX3N0YXRpYyI6ZmFsc2UsImV4cGVyaW1lbnRhbEZlYXR1cmVzIjp7ImVfaW1wb3J0X2V4cG9ydCI6dHJ1ZSwiZV9oaWRkZW5fd29yZHByZXNzX3dpZGdldHMiOnRydWUsInRoZW1lX2J1aWxkZXJfdjIiOnRydWUsImxhbmRpbmctcGFnZXMiOnRydWUsImVsZW1lbnRzLWNvbG9yLXBpY2tlciI6dHJ1ZSwiZmF2b3JpdGUtd2lkZ2V0cyI6dHJ1ZSwiYWRtaW4tdG9wLWJhciI6dHJ1ZSwicGFnZS10cmFuc2l0aW9ucyI6dHJ1ZSwiZm9ybS1zdWJtaXNzaW9ucyI6dHJ1ZSwiZV9zY3JvbGxfc25hcCI6dHJ1ZX0sInVybHMiOnsiYXNzZXRzIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3JcL2Fzc2V0c1wvIn0sInNldHRpbmdzIjp7ImVkaXRvclByZWZlcmVuY2VzIjpbXX0sImtpdCI6eyJhY3RpdmVfYnJlYWtwb2ludHMiOlsidmlld3BvcnRfbW9iaWxlIiwidmlld3BvcnRfdGFibGV0Il0sImdsb2JhbF9pbWFnZV9saWdodGJveCI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9jb3VudGVyIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX2Z1bGxzY3JlZW4iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfem9vbSI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9zaGFyZSI6InllcyIsImxpZ2h0Ym94X3RpdGxlX3NyYyI6InRpdGxlIiwibGlnaHRib3hfZGVzY3JpcHRpb25fc3JjIjoiZGVzY3JpcHRpb24ifSwicG9zdCI6eyJpZCI6MCwidGl0bGUiOiJSZWNydWl0ZXIgU3VjY2VzcyBTdG9yaWVzIEFyY2hpdmUgfCBBZHZlbnR1cy5pbyIsImV4Y2VycHQiOiI8cD5Ib2xkcyBvdXIgcmVjcnVpdGVyIHN1Y2Nlc3Mgc3RvcmllcyBhbmQgcmVjcnVpdGVyIHN1Y2Nlc3Mgc3Rvcnkgc3BlY2lmaWMgZGF0YTxcL3A+XG4ifX07Cg=="></script> --}}
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/js/frontend.min5aed.js?ver=3.6.4'
        id='elementor-frontend-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min3ab2.js?ver=3.6.5'
        id='pro-preloaded-elements-handlers-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/js/preloaded-modules.min5aed.js?ver=3.6.4'
        id='preloaded-modules-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min3ab2.js?ver=3.6.5'
        id='e-sticky-js'></script>
@endpush
