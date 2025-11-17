@php
    $assetsUrl = asset('/assets/front/');
    // echo $assetsUrl;
@endphp

@extends('layouts.front.layout')

@push('styles')
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
        href='{{ $assetsUrl }}/wp-content/plugins/adventus-elementor-widget/styles4a01.css?ver=1761889920'
        type='text/css' media='all' />
    <link rel='stylesheet' id='open-course-search-css-css'
        href='{{ $assetsUrl }}/wp-content/plugins/open-course-sarch/css/open-course-search87ed.css?ver=5.9.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{ $assetsUrl }}/wp-includes/css/dashicons.min87ed.css?ver=5.9.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventusio-style-min-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-single-blogs-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/single-blogs8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventus-reecruiter-success-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/recruiter-success-story8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-institution-success-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/institution-success-story8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/css/frontend-legacy.min5aed.css?ver=3.6.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/css/frontend.min5aed.css?ver=3.6.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-8d6b7.css?ver=1738259458' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/css/frontend.min3ab2.css?ver=3.6.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/globald6b7.css?ver=1738259458' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-30518-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-305180706.css?ver=1761889494' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2590-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-259080ec.css?ver=1738307987' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-official-css'
        href='{{ $assetsUrl }}/{{ $assetsUrl }}/use.fontawesome.com/releases/v5.13.0/css/all.css' type='text/css'
        media='all' integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
        crossorigin="anonymous" />
    <link rel='stylesheet' id='moove_gdpr_frontend-css'
        href='{{ $assetsUrl }}/wp-content/plugins/gdpr-cookie-compliance/dist/styles/gdpr-main-nf7bcd.css?ver=4.8.3'
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


    <link rel="https://api.w.org/" href="{{ $assetsUrl }}/wp-json/index.html" />
    <link rel="alternate" type="application/json" href="{{ $assetsUrl }}/wp-json/wp/v2/posts/30518.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ $assetsUrl }}/xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ $assetsUrl }}/wp-includes/wlwmanifest.xml" />

    <link rel='shortlink' href='{{ $assetsUrl }}/index2609.html?p=30518' />
    <link rel="alternate" type="application/json+oembed"
        href="{{ $assetsUrl }}/wp-json/oembed/1.0/embed2abe.json?url=https%3A%2F%2Fadventus.io%2Fsearch-course%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{ $assetsUrl }}/wp-json/oembed/1.0/embedc01e?url=https%3A%2F%2Fadventus.io%2Fsearch-course%2F&amp;format=xml" />

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
@endpush

@section('main-content')
    <article id="post-30518"
        class="post-30518 post type-post status-publish format-standard hentry category-uncategorized">
        <div class="entry-content">
            <div data-elementor-type="wp-post" data-elementor-id="30518" class="elementor elementor-30518">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-49e945a5 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                            data-id="49e945a5" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cf412ee course-page"
                                        data-id="2cf412ee" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-66a6cf8a elementor-widget__width-inherit elementor-widget elementor-widget-text-editor"
                                                    data-id="66a6cf8a" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <script defer
                                                            src="data:text/javascript;base64,CiAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ2F1dGh0b2tlbmEnLCAiZXlKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKU1V6STFOaUo5LmV5SmhkV1FpT2lJeUlpd2lhblJwSWpvaU16Qm1NR0UwT1RFd05XRTFabVkzT0dSaFl6Sm1aREkyT0RjNFptRTNORFU1WWpSaU5USmxNemt4TW1NeE9EZ3hOV1JtWW1Fek16WXpaRGc1TkRCaE1tRTJOR015WW1ZeE0ySmlNekE1TkRraUxDSnBZWFFpT2pFM05qRTRPRGs1TWpBdU16QXdNRGMxTENKdVltWWlPakUzTmpFNE9EazVNakF1TXpBd01EYzNMQ0psZUhBaU9qRTNPVE0wTWpVNU1qQXVNamM1TlRjNUxDSnpkV0lpT2lJM055SXNJbk5qYjNCbGN5STZXeUlxSWwxOS5aNnIzSXVkcnZBS0NwMlhGSmpaTDJic01vNkpnV21QTTBYMkg2dFdweDhsX01BN3Q4RTJyeTlocjV5NDg2VWRUcG5IcUFVOWVsS2E5X2U3Umc1REdRZ1RIMDhuRmpWREIyTEpTSVZGTnJieXZvbVZLYmhSUzYxVUNTUjl3Q2tYV1JXZUpjM243a1R1RnNpX1E1VTV4S2JuLURiU05XR3lSQUpGZUo4dHlqOUFlVkFKaEtXbUpvTU1VOG02QjJqVzQtRUNwM1dnUWdXWmZBOXZ2VGh4SEdrelBuMWpxNWtQWEk2dm1mdlYtYkl6Rl96WkVxQ0xoaHdLMmJRbFIwalNOMENpdG5nRnEzZlppazVZVHA0Z2NoZWRPWC1ONzlaRE9lTzRLMFYwV2IyOUJhUHdKOWhZcDRvTGdWQnNXcFo5SmRjd1RHR29FMVg0WjdibFphTHcxM3d3aU42RFFaX2o4b19KazdJOTlJWXBwVTZFUVFaM3U3ZURDUVdaVzJPSmpDSEctU0JXNEF0UW5JMVdVN2JGUkVLMVJ3dHVMQkVDYk5RMmYtTHB2WVRXNVg1MEpITndLd3JxUTF4LTFyWFJ3dmhFNE9mVXY2ZUhVenFyRlRpSm5jX2w0SDFIbmdTbVd2V2JOd2hmbnJaa3NqWjU1SzJ6Qjh2VGFpLXRVWmg3V0JfS2hxck9xV2JSMWJ6enRRc05GVE0wVWJSWTlfbFhFdU11TU9ZTERWSmtxdlpoZVRlaGFTT0FuSURwb3lxclVZYWZGYVZTcVdpbGpyeEFtS2NnWmxsQ01VaVNoOS14a2EzZFMwV1RFZnRUZDFub1ZMbHh1UHJEN0Z6VktSUU01UENoWllZZ0s1QnJmN0JTTHhTaUN1Q19pTzV5aDBzZlU3TnFCVkp4X1NFcyIpOwogICAg">
                                                        </script>
                                                        <div class="hero-banner-container">
                                                            <div class="col col1">
                                                                <h1 style="">find a suitable course for you with your
                                                                    dream destination</h1>
                                                            </div>
                                                            <div class="col" style="position: relative;">
                                                                <div class="kpi-card">
                                                                    <div
                                                                        style="display: flex; border-bottom: 1px solid white;">
                                                                        <div class="indicator-col">
                                                                            <div class="kpi-icon">
                                                                                <img alt=""
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/scientific_flask.svg"
                                                                                    class="lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        src="../wp-content/plugins/open-course-sarch/img/scientific_flask.svg"
                                                                                        alt=""></noscript>
                                                                            </div>
                                                                            <div>
                                                                                <p
                                                                                    style="font-weight: bold; font-size: 20px;">
                                                                                    178,000+</p>
                                                                                <p>Courses</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="indicator-col">
                                                                            <div class="kpi-icon">
                                                                                <img alt=""
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/institution.svg"
                                                                                    class="lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        src="../wp-content/plugins/open-course-sarch/img/institution.svg"
                                                                                        alt=""></noscript>
                                                                            </div>
                                                                            <div>
                                                                                <p
                                                                                    style="font-weight: bold; font-size: 20px;">
                                                                                    1,500+</p>
                                                                                <p>Institutes</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: flex;">
                                                                        <div class="indicator-col">
                                                                            <div class="kpi-icon" style="">
                                                                                <img alt=""
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/earth.svg"
                                                                                    class="lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        src="../wp-content/plugins/open-course-sarch/img/earth.svg"
                                                                                        alt=""></noscript>
                                                                            </div>
                                                                            <div style="color: white;">
                                                                                <p
                                                                                    style="font-weight: bold; font-size: 20px;">
                                                                                    10+</p>
                                                                                <p>Countries</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="indicator-col">
                                                                            <div class="kpi-icon" style="">
                                                                                <img alt=""
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/documents_with_check.svg"
                                                                                    class="lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        src="../wp-content/plugins/open-course-sarch/img/documents_with_check.svg"
                                                                                        alt=""></noscript>
                                                                            </div>
                                                                            <div style="color: white;">
                                                                                <p
                                                                                    style="font-weight: bold; font-size: 20px;">
                                                                                    140,000+</p>
                                                                                <p>Applications Processed</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <img alt=""
                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/magnifier.svg"
                                                                    class="magnifier-icon lazyload"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                        class="magnifier-icon"
                                                                        src="../wp-content/plugins/open-course-sarch/img/magnifier.svg"
                                                                        alt=""></noscript>
                                                            </div>
                                                        </div>
                                                        <div class="search-section">
                                                            <div class="filter-box">
                                                                <!-- <h3>Your Student</h3>
                    <label for="academic">Academic Requirement</label>
                    <select id="academic">
                        <option>Select requirement</option>
                    </select>
                    <label for="language">Language Requirement</label>
                    <select id="language">
                        <option>Select requirement</option>
                    </select>

                    <span class='spanhr'></span> -->

                                                                <h3>Course Filter</h3>
                                                                <label>Course Level</label>
                                                                <select id="levels" class="search-dropdown">
                                                                    <option value="select">Select level</option>
                                                                    <!-- Add more options as needed -->
                                                                </select>

                                                                <!-- <label>Disciplines</label>
                    <select id="disciplines" class="search-dropdown" multiple>
                        <option>Select discipline</option>
                    </select> -->
                                                                <div class="checkbox-group">
                                                                    <h3>Disciplines</h3>
                                                                    <div id="disciplines-container"></div>
                                                                </div>
                                                                <!-- <label>Duration</label>
                    <select id="duration" class="search-dropdown" multiple>
                        <option>Select duartion</option>
                    </select> -->
                                                                <div class="checkbox-group">
                                                                    <h3>Durations</h3>
                                                                    <div id="durations-container"></div>
                                                                </div>
                                                                <label>Tuition Fees</label>
                                                                <div class="range-container">
                                                                    <input id="tuition_fees"
                                                                        class="search-dropdown tuition_fees"
                                                                        type="number" min="0" max="250000"
                                                                        value="0">
                                                                    <span>0 - 250k</span>
                                                                </div>
                                                                <label>Application Fees</label>
                                                                <div class="range-container">
                                                                    <input id="application_fee"
                                                                        class="search-dropdown application_fee"
                                                                        type="number" min="0" max="500"
                                                                        value="0"> <span>0 - 500+</span>
                                                                </div>

                                                                <hr>
                                                                <h3>Institution Filter</h3>
                                                                <!-- <label>Nearest City</label>
                    <select id="nearest_cities" class="search-dropdown" multiple>
                        <option>India</option>
                    </select> -->
                                                                <div class="checkbox-group">
                                                                    <h3>Nearest City</h3>
                                                                    <!-- <div id="cities-container"></div> -->
                                                                    <input type="text" id="city-search-input"
                                                                        placeholder="Search cities..." />
                                                                    <div id="city-checkbox-container"
                                                                        style="max-height: 200px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                                                                        <!-- City checkboxes will be populated here -->
                                                                    </div>
                                                                </div>
                                                                <!-- <label>Institutions</label>
                    <select id="institutions" class="search-dropdown" multiple>
                        <option>India</option>
                    </select> -->
                                                                <div class="checkbox-group">
                                                                    <h3>Institutions</h3>
                                                                    <!-- <div id="institutions-container"></div> -->
                                                                    <input type="text" id="institution-search-input"
                                                                        placeholder="Search institutions..." />
                                                                    <div id="institution-checkbox-container"
                                                                        style="max-height: 200px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                                                                        <!-- Institution checkboxes will be populated here -->
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="search-results">
                                                                <div class="results-header" id="results-info">

                                                                    <div class="Rectangle1373 search-box">
                                                                        <img data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/search.svg"
                                                                            class="search-icon lazyload"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                src="../wp-content/plugins/open-course-sarch/img/search.svg"
                                                                                class="search-icon" /></noscript>
                                                                        <input type="text" id="random-search"
                                                                            class="search-input" style=""
                                                                            placeholder="SEARCH FOR COURSES, INSTITUTIONS, LOCATIONS, DISCIPLINES...">
                                                                    </div>

                                                                    <div class="filters-top"
                                                                        style="align-items: flex-end">
                                                                        <div class="filter-item">
                                                                            <label for="intakes"
                                                                                style="width: 100%; height: 100%; color: #293B4A; font-size: 16px; font-family: DM Sans; font-weight: 400; line-height: 22.50px; word-wrap: break-word">Intakes</label>
                                                                            <select id="intakes" name="intakes"
                                                                                class="filter-select mandatory">
                                                                                <option value="">SELECT INTAKES
                                                                                </option>
                                                                            </select>
                                                                            <span class="tooltip"></span>
                                                                        </div>
                                                                        <div class="filter-item">
                                                                            <label for="intakes"
                                                                                style="width: 100%; height: 100%; color: #293B4A; font-size: 16px; font-family: DM Sans; font-weight: 400; line-height: 22.50px; word-wrap: break-word">Destination
                                                                                Country</label>
                                                                            <select id="destination_country"
                                                                                name="destination_country"
                                                                                class="filter-select mandatory">
                                                                                <option value="">SELECT DESTINATION
                                                                                    COUNTRY</option>
                                                                            </select>
                                                                            <span class="tooltip"></span>
                                                                        </div>

                                                                        <div class="filter-item" style="display: flex">
                                                                            <input type="button" value="SEARCH"
                                                                                id="search_by_intake_destination"
                                                                                class="search-btn">
                                                                            <input type="button" value="RESET"
                                                                                id="reset_filters" class="search-btn">
                                                                        </div>
                                                                    </div>
                                                                    <div id="selected-filters" class="selected-filters">
                                                                        <span class="search-filter">Search Results</span>
                                                                        <div class="search-params" id="search-params">
                                                                            <span class="filter-txt">Filter applied:</span>
                                                                            <div id="filter-values" class="filter-values">
                                                                            </div>
                                                                            <div class="clear-btn">
                                                                                Clear all filters
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="results-info">
                                                                        <div class="search-result">
                                                                            <img data-src='https://adventus.io/wp-content/plugins/open-course-sarch/img/search-results.svg'
                                                                                class='lazyload'
                                                                                src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' /><noscript><img
                                                                                    src="../wp-content/plugins/open-course-sarch/img/search-results.svg" /></noscript>
                                                                            <span class="results-count"
                                                                                id="results-count"></span>
                                                                        </div>
                                                                        <div class="sort-by">
                                                                            <img data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/drive.png"
                                                                                class="drive-logo lazyload"
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                    class="drive-logo"
                                                                                    src="../wp-content/plugins/open-course-sarch/img/drive.png" /></noscript>
                                                                            <span class="drive-toggle label">
                                                                                course only
                                                                            </span>
                                                                            <div class="toggle-switch">
                                                                                <label class="switch">
                                                                                    <input type="checkbox" />
                                                                                    <span
                                                                                        class="results-count slider round"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sort-by">
                                                                            <span class="sort">Sort by:</span>
                                                                            <select id="sort-options" class="sort-select">
                                                                                <option value="">Clear</option>
                                                                                <option value="relevance">Sort by Relevance
                                                                                </option>
                                                                                <option value="costasc">Sort by Cost Low to
                                                                                    High</option>
                                                                                <option value="costdesc">Sort by Cost High
                                                                                    to Low</option>
                                                                                <option value="ranking">Sort by THE Ranking
                                                                                </option>
                                                                                <option value="qs-ranking">Sort by QS
                                                                                    Ranking</option>
                                                                                <option value="intakes">Sort by Intake
                                                                                    Earliest to Latest</option>
                                                                                <option value="turnaround-time">Sort by
                                                                                    Turnaround Time Low to High</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>








                                                                    <div id="ccards">

                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Bachelor of
                                                                                                Science (Honours) in Physics
                                                                                                (Co-op)</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/127028cf7e19387cced8cdc7678f5626.jpeg"
                                                                                                        alt="Bachelor of Science (Honours) in Physics (Co-op)">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Ontario Tech
                                                                                                    University</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>Canada</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>60
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>32188
                                                                                                    CAD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>CAD 100</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-0"
                                                                                                        data-course-id="0">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>Post-Graduate Work
                                                                                                    Permit</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>

                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-0">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">120</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">83</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">58</span>
                                                                                                <span class="plus-count"> |
                                                                                                    +1</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Foundation
                                                                                                program (3-Term), Leading to
                                                                                                Bachelor of Science / Master
                                                                                                of Teaching - Secondary in
                                                                                                Sport Science</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/36bca485a53bd3537c83a852703a9a17..jpeg"
                                                                                                        alt="Foundation program (3-Term), Leading to Bachelor of Science / Master of Teaching - Secondary in Sport Science">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>INTO Group - UWA
                                                                                                    College</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>Australia</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>60
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>36900
                                                                                                    AUD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>AUD 0</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-1"
                                                                                                        data-course-id="1">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>Post Study Work
                                                                                                    Rights</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-1">
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">68</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">54</span>
                                                                                                |
                                                                                                <span class="eng-lbl">IELTS
                                                                                                    ACADEMIC</span>
                                                                                                <span
                                                                                                    class="eng-score">6</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Bachelor of
                                                                                                Science (Honours) in
                                                                                                Forestry (Co-op)</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/8c45c79ac16ff2ba75bb8b9cf00d2e93.jpeg"
                                                                                                        alt="Bachelor of Science (Honours) in Forestry (Co-op)">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="course-card__uni-img__wrapper course-card__logo__animated">
                                                                                                <div
                                                                                                    class="course-card__uni-img__container">
                                                                                                    <div
                                                                                                        class="img-gradient">
                                                                                                    </div><img
                                                                                                        class="course-card__uni-img__logo"
                                                                                                        src="https://app.adventus.io/publicimages/61309ef644937.jpeg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Lakehead University -
                                                                                                    Thunder Bay
                                                                                                    Campus</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>Canada</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>60
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>31150
                                                                                                    CAD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>CAD 135</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-2"
                                                                                                        data-course-id="2">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>Post-Graduate Work
                                                                                                    Permit</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <span
                                                                                                        class="cip-code">CIP
                                                                                                        Code:null</span>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-2">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">110</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">80</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">58</span>
                                                                                                <span class="plus-count"> |
                                                                                                    +1</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">
                                                                                                International Year One in
                                                                                                Natural Science (2-Semester
                                                                                                Pathway) Leading to Bachelor
                                                                                                of Science in Biology - Cell
                                                                                                and Molecular Biology</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/8d41fba879a8e39ac00f21f2f4556f2b..jpeg"
                                                                                                        alt="International Year One in Natural Science (2-Semester Pathway) Leading to Bachelor of Science in Biology - Cell and Molecular Biology">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>INTO Group - Hofstra
                                                                                                    University</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United States of
                                                                                                    America</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>48
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>56980
                                                                                                    USD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>USD 0</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-3"
                                                                                                        data-course-id="3">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>OPT</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-3">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">90</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">60</span>
                                                                                                |
                                                                                                <span class="eng-lbl">IELTS
                                                                                                    ACADEMIC</span>
                                                                                                <span
                                                                                                    class="eng-score">5.5</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">
                                                                                                International Foundation
                                                                                                Year in Science, Engineering
                                                                                                and Computing (2 Semesters),
                                                                                                Leading to Master of
                                                                                                Engineering (Hons) in
                                                                                                Computer Science (High
                                                                                                Performance Graphics and
                                                                                                Games Engineering)</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/884f9181d87208dff70c059537d82fa0..jpeg"
                                                                                                        alt="International Foundation Year in Science, Engineering and Computing (2 Semesters), Leading to Master of Engineering (Hons) in Computer Science (High Performance Graphics and Games Engineering)">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Study Group -
                                                                                                    University of Leeds
                                                                                                    International Study
                                                                                                    Centre</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United Kingdom (Inc
                                                                                                    Channel Islands and Isle
                                                                                                    of
                                                                                                    Man)</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>54
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>23500
                                                                                                    GBP</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>GBP 0</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-4"
                                                                                                        data-course-id="4">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>Post Study Work
                                                                                                    Visa</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-4">
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">51</span>
                                                                                                |
                                                                                                <span class="eng-lbl">IELTS
                                                                                                    UKVI</span>
                                                                                                <span
                                                                                                    class="eng-score">5</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Bachelor of
                                                                                                Arts in Religion</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/3b17c287eb2e5fc0e79e393d6e444cb7.png"
                                                                                                        alt="Bachelor of Arts in Religion">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>University of
                                                                                                    Indianapolis</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United States of
                                                                                                    America</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>48
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>36504
                                                                                                    USD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>USD 0</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-5"
                                                                                                        data-course-id="5">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>Post Study Work
                                                                                                    Permit</strong></p>
                                                                                            <p class="check-icon">- </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-5">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">95</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">61</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">49</span>
                                                                                                <span class="plus-count"> |
                                                                                                    +1</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">

                                                                                                <div
                                                                                                    class="drive-icon-container">
                                                                                                    <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/drive-bg.png"
                                                                                                        alt="Drive Icon"
                                                                                                        class="drive-icon">
                                                                                                    <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/drive.png"
                                                                                                        alt="Drive Icon"
                                                                                                        class="drive-icon-inner">
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="ctitle">Pre-Master
                                                                                                in Science and Engineering
                                                                                                (One- Semester) Leading to
                                                                                                Master of Science in Cyber
                                                                                                Security and Forensic
                                                                                                Information Technology</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/1d62bfa66b88098c3026fc132a41c6cf..png"
                                                                                                        alt="Pre-Master in Science and Engineering (One- Semester) Leading to Master of Science in Cyber Security and Forensic Information Technology">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Navitas Group -
                                                                                                    International College
                                                                                                    Portsmouth (ICP) at
                                                                                                    University of
                                                                                                    Portsmouth</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United Kingdom (Inc
                                                                                                    Channel Islands and Isle
                                                                                                    of
                                                                                                    Man)</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>15
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>9350
                                                                                                    GBP</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>GBP 0</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-6"
                                                                                                        data-course-id="6">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>Post Study Work
                                                                                                    Visa</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-6">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">105</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">79</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">62</span>
                                                                                                <span class="plus-count"> |
                                                                                                    +1</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Associate
                                                                                                in Science in Horticulture
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/0c1c7ee3995bd4dd52dbda707dc372e5..png"
                                                                                                        alt="Associate in Science in Horticulture">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Orange Coast
                                                                                                    College</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United States of
                                                                                                    America</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>24
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>11916
                                                                                                    USD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>USD 55</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-7"
                                                                                                        data-course-id="7">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>OPT</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-7">
                                                                                                <span
                                                                                                    class="eng-lbl">SAT</span>
                                                                                                <span
                                                                                                    class="eng-score">480</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">95</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">61</span>
                                                                                                <span class="plus-count"> |
                                                                                                    +2</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Bachelor of
                                                                                                Science in Chemistry (STEM)
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/1b21a253e82bd5fcc9807340e8cd0651..jpeg"
                                                                                                        alt="Bachelor of Science in Chemistry (STEM)">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Portland State
                                                                                                    University</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United States of
                                                                                                    America</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>48
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>34599
                                                                                                    USD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>USD 60</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-8"
                                                                                                        data-course-id="8">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>OPT</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-8">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">110</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">71</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">PTE</span>
                                                                                                <span
                                                                                                    class="eng-score">53</span>
                                                                                                <span class="plus-count"> |
                                                                                                    +1</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="result">
                                                                                <div class="course-card">
                                                                                    <div class="course-header">
                                                                                        <div class="search-result">
                                                                                            <div class="course-icon">
                                                                                                <img src="https://adventus.io/wp-content/plugins/open-course-sarch/img/group-4144.png"
                                                                                                    class="adv-icon"
                                                                                                    alt="Course Icon">
                                                                                            </div>
                                                                                            <div class="ctitle">Master of
                                                                                                Arts in Early Childhood and
                                                                                                Elementary Education</div>
                                                                                        </div>
                                                                                        <div class="course-actions">
                                                                                            <button class="apply-btn">
                                                                                                <img src="http://adventus.io/wp-content/plugins/open-course-sarch/img/apply-icon.svg"
                                                                                                    alt="Apply Icon">
                                                                                                Apply
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="course-body">



                                                                                        <div
                                                                                            class="course-card__logo__section">
                                                                                            <div
                                                                                                class="course-card__logo__wrapper">
                                                                                                <div
                                                                                                    class="course-card__logo__container">
                                                                                                    <img class="course-card__logo"
                                                                                                        src="https://app.adventus.io/publicimages/051d0fe120b742bd87f07514aac5b53b..png"
                                                                                                        alt="Master of Arts in Early Childhood and Elementary Education">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="course-details">
                                                                                            <p><strong>Shorelight Group -
                                                                                                    The University of Texas
                                                                                                    at San
                                                                                                    Antonio</strong><br>Institution
                                                                                            </p>
                                                                                            <p><strong>United States of
                                                                                                    America</strong><br>Destination
                                                                                            </p>
                                                                                            <p><strong>24
                                                                                                    months</strong><br>Duration
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>26338
                                                                                                    USD</strong><br>Tuition
                                                                                                Fee</p>
                                                                                            <p>
                                                                                                <strong>USD 0</strong><br>
                                                                                                Application Fee
                                                                                            </p>
                                                                                            <p>
                                                                                                <br>Intakes
                                                                                            </p>
                                                                                            <div class="col-top">
                                                                                                <div
                                                                                                    class="course-card__course-info__row">


                                                                                                    <div class="intakes-section"
                                                                                                        id="intakes-section-9"
                                                                                                        data-course-id="9">
                                                                                                        <span
                                                                                                            class="intake-tag  intake-badge__closed"
                                                                                                            data-id="28274">Jan</span><span
                                                                                                            class="intake-overlay"></span>&nbsp;
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>OPT</strong></p>
                                                                                            <p class="check-icon">Yes
                                                                                                <span class="check-icon">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="16"
                                                                                                        viewBox="0 0 18 16"
                                                                                                        fill="none">
                                                                                                        <path
                                                                                                            d="M5.96008 6.99656L7.96645 8.99625L8.37657 9.40499L8.86035 9.88473L17.0381 1.73669"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M14.3564 4.40696C14.5627 4.73494 14.742 5.08005 14.8893 5.44229C15.2135 6.23286 15.3903 7.09442 15.3903 8.00003C15.3903 11.7399 12.3476 14.7725 8.59518 14.7725C4.84276 14.7725 1.80005 11.7399 1.80005 8.00003C1.80005 4.26011 4.84276 1.22754 8.59518 1.22754C9.95323 1.22754 11.218 1.62405 12.2788 2.30938"
                                                                                                            stroke="#179C43"
                                                                                                            stroke-width="1.8"
                                                                                                            stroke-miterlimit="10">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="course-details">
                                                                                            <p><strong>English Language
                                                                                                    Score</strong><br>
                                                                                            </p>
                                                                                            <div class="col-top"
                                                                                                id="language-scores-container-9">
                                                                                                <span
                                                                                                    class="eng-lbl">DUOLINGO</span>
                                                                                                <span
                                                                                                    class="eng-score">100</span>
                                                                                                |
                                                                                                <span
                                                                                                    class="eng-lbl">TOEFL</span>
                                                                                                <span
                                                                                                    class="eng-score">79</span>
                                                                                                |
                                                                                                <span class="eng-lbl">IELTS
                                                                                                    ACADEMIC</span>
                                                                                                <span
                                                                                                    class="eng-score">6.5</span>
                                                                                            </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>

















                                                                    <div class="pagination">
                                                                        <div class="pagination-arrow prev">←</div>
                                                                        <div class="pagination-number active">1</div>
                                                                        <div class="pagination-number">2</div>
                                                                        <div class="pagination-number">3</div>
                                                                        <div class="pagination-number">4</div>
                                                                        <div class="pagination-dots">...</div>
                                                                        <div class="pagination-number">12</div>
                                                                        <div class="pagination-arrow next">→</div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div id="popupModal" style="display:none;">
                                                                <div class="popup-content">
                                                                    <button class="close-btn"
                                                                        id="closePopupBtn">X</button>

                                                                    <!-- Buttons for Student or Recruiter -->
                                                                    <div id="mainModalContainer">
                                                                        <h2>Are you a student or recruiter?</h2>
                                                                        <div class="option-container">

                                                                            <div class="option-button">
                                                                                <img id="studentBtn" alt="Student"
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/student.png"
                                                                                    class="option-image lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        id="studentBtn" alt="Student"
                                                                                        data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/student.png"
                                                                                        class="option-image lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                            id="studentBtn"
                                                                                            src="../wp-content/plugins/open-course-sarch/img/student.png"
                                                                                            alt="Student"
                                                                                            class="option-image"></noscript></noscript>
                                                                                <span class="option-text">Student</span>
                                                                            </div>
                                                                            <div class="option-button">
                                                                                <img id="recruiterBtn" alt="Recruiter"
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/recuriter.png"
                                                                                    class="option-image lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        id="recruiterBtn"
                                                                                        src="../wp-content/plugins/open-course-sarch/img/recuriter.png"
                                                                                        alt="Recruiter"
                                                                                        class="option-image"></noscript>
                                                                                <span class="option-text">Recruiter</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Student Form (hidden initially) -->
                                                                    <div id="studentForm" style="display:none;">
                                                                        <div class="modal-header">
                                                                            <div class="user-icon"> <img id="studentBtn"
                                                                                    alt="Student"
                                                                                    data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/student.png"
                                                                                    class="option-image lazyload"
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                        id="studentBtn" alt="Student"
                                                                                        data-src="https://adventus.io/wp-content/plugins/open-course-sarch/img/student.png"
                                                                                        class="option-image lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                                            id="studentBtn"
                                                                                            src="../wp-content/plugins/open-course-sarch/img/student.png"
                                                                                            alt="Student"
                                                                                            class="option-image"></noscript></noscript>
                                                                            </div>
                                                                            <p>
                                                                                PLEASE SUBMIT DETAILS BELOW, YOUR NEAREST
                                                                                RECRUITER WILL GET IN TOUCH WITH YOU TO
                                                                                ASSIST FURTHER
                                                                            </p>
                                                                        </div>
                                                                        <h2>Student Registration</h2>
                                                                        <form id="userForm">
                                                                            <div class="form-group">
                                                                                <div class="input-field">
                                                                                    <label for="name">Name*</label>
                                                                                    <input type="text" id="name"
                                                                                        name="name" placeholder="Jane"
                                                                                        required>
                                                                                </div>
                                                                                <div class="input-field">
                                                                                    <label for="city">City*</label>
                                                                                    <input type="text" id="city"
                                                                                        name="city" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="input-field">
                                                                                    <label for="country">Country*</label>
                                                                                    <select id="country" name="country"
                                                                                        required>
                                                                                        <option value="">Select
                                                                                            Country</option>
                                                                                        <option value="India">India
                                                                                        </option>
                                                                                        <option value="USA">USA</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- now can only take numeric input  -->
                                                                                <div class="input-field">
                                                                                    <label for="mobile">Mobile
                                                                                        No.*</label>
                                                                                    <div class="mobile-field">
                                                                                        <select id="countryCode"
                                                                                            name="countryCode" required>
                                                                                            <option value="+91">🇮🇳 +91
                                                                                            </option>
                                                                                            <option value="+1">🇺🇸 +1
                                                                                            </option>
                                                                                        </select>
                                                                                        <input type="tel"
                                                                                            id="mobile" name="mobile"
                                                                                            placeholder="1234567890"
                                                                                            required pattern="[0-9]*"
                                                                                            inputmode="numeric"
                                                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="input-field">
                                                                                    <label for="region">Region*</label>
                                                                                    <input type="text" id="region"
                                                                                        name="region" placeholder=""
                                                                                        required>
                                                                                </div>
                                                                                <div class="input-field">
                                                                                    <label for="email">Email ID*</label>
                                                                                    <input type="email" id="email"
                                                                                        name="email"
                                                                                        placeholder="example@mail.com"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="submit-btn">Submit</button>
                                                                        </form>
                                                                    </div>

                                                                    <!-- Thank You Message (hidden initially) -->
                                                                    <div id="thankYouMessage" style="display:none;">
                                                                        <h3>Thank you for your submission! The nearest
                                                                            recruiter will contact you to provide further
                                                                            assistance.</h2>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                <!-- wp:shortcode -->

                                                                <!-- /wp:shortcode -->
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
        </div><!-- .entry-content -->
    </article><!-- #post-30518 -->
@endsection

@push('scripts')
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
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/lottie.min4a01.js?ver=1761889920'
        id='adventus-lottie-min-js-js'></script>



    <script defer id="leadin-script-loader-js-js-extra"
        src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbGVhZGluX3dvcmRwcmVzcyA9IHsidXNlclJvbGUiOiJ2aXNpdG9yIiwicGFnZVR5cGUiOiJwb3N0IiwibGVhZGluUGx1Z2luVmVyc2lvbiI6IjguNy4zIn07Ci8qIF1dPiAqLwo=">
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}../js.hs-scripts.com/20616828a466.js?integration=WordPress' async defer
        id='hs-script-loader'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_7a5024b25d32066a41f07aa72f43adde.js'
        id='open-course-search-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/gsap.min4a01.js?ver=1761889920'
        id='gsap-tweenmax-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/Draggable.min4a01.js?ver=1761889920'
        id='gsap-draggable-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_f47e8e64e5f1a3e934b5fcdfe5d4f7918a54.js?ver=1.0.0'
        id='adventusio-navigation-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_26036e4be38edb295cd25a7c06ba89398a54.js?ver=1.0.0'
        id='adventusio-skip-link-focus-fix-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/script.min4a01.js?ver=1761889920' id='adventus-min-js-js'>
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_e0f8bcd10939756a4716cfdc9c7c0aee4a01.js?ver=1761889920'
        id='adventus-global-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_340be438ec1fbb486af7862a98f01d444a01.js?ver=1761889920'
        id='adventus-reecruiter-success-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.minc063.js?ver=3.9.5'
        id='smush-lazy-load-js'></script>
    <script defer id="moove_gdpr_frontend-js-extra"
        src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbW9vdmVfZnJvbnRlbmRfZ2Rwcl9zY3JpcHRzID0geyJhamF4dXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJwb3N0X2lkIjoiMzA1MTgiLCJwbHVnaW5fZGlyIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9nZHByLWNvb2tpZS1jb21wbGlhbmNlIiwic2hvd19pY29ucyI6ImFsbCIsImlzX3BhZ2UiOiIiLCJzdHJpY3RfaW5pdCI6IjEiLCJlbmFibGVkX2RlZmF1bHQiOnsidGhpcmRfcGFydHkiOjAsImFkdmFuY2VkIjowfSwiZ2VvX2xvY2F0aW9uIjoiZmFsc2UiLCJmb3JjZV9yZWxvYWQiOiJmYWxzZSIsImlzX3NpbmdsZSI6IjEiLCJoaWRlX3NhdmVfYnRuIjoiZmFsc2UiLCJjdXJyZW50X3VzZXIiOiIwIiwiY29va2llX2V4cGlyYXRpb24iOiIzNjUiLCJzY3JpcHRfZGVsYXkiOiIyMDAwIiwiY2xvc2VfYnRuX2FjdGlvbiI6IjEiLCJjbG9zZV9jc19hY3Rpb24iOiIxIiwiZ2Rwcl9zY29yIjoidHJ1ZSIsIndwX2xhbmciOiIifTsKLyogXV0+ICovCg==">
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_8b26876dca36bf5540648fd67e6717237bcd.js?ver=4.8.3'
        id='moove_gdpr_frontend-js'></script>
    <script defer id="moove_gdpr_frontend-js-after"
        src="data:text/javascript;base64,CnZhciBnZHByX2NvbnNlbnRfX3N0cmljdCA9ICJ0cnVlIgp2YXIgZ2Rwcl9jb25zZW50X190aGlyZHBhcnR5ID0gInRydWUiCnZhciBnZHByX2NvbnNlbnRfX2FkdmFuY2VkID0gInRydWUiCnZhciBnZHByX2NvbnNlbnRfX2Nvb2tpZXMgPSAic3RyaWN0fHRoaXJkcGFydHl8YWR2YW5jZWQiCg==">
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
    <script defer id="wp-i18n-js-after"
        src="data:text/javascript;base64,CndwLmkxOG4uc2V0TG9jYWxlRGF0YSggeyAndGV4dCBkaXJlY3Rpb25cdTAwMDRsdHInOiBbICdsdHInIF0gfSApOwo=">
    </script>
    <script defer id="elementor-pro-frontend-js-translations"
        src="data:text/javascript;base64,CiggZnVuY3Rpb24oIGRvbWFpbiwgdHJhbnNsYXRpb25zICkgewoJdmFyIGxvY2FsZURhdGEgPSB0cmFuc2xhdGlvbnMubG9jYWxlX2RhdGFbIGRvbWFpbiBdIHx8IHRyYW5zbGF0aW9ucy5sb2NhbGVfZGF0YS5tZXNzYWdlczsKCWxvY2FsZURhdGFbIiJdLmRvbWFpbiA9IGRvbWFpbjsKCXdwLmkxOG4uc2V0TG9jYWxlRGF0YSggbG9jYWxlRGF0YSwgZG9tYWluICk7Cn0gKSggImVsZW1lbnRvci1wcm8iLCB7ICJsb2NhbGVfZGF0YSI6IHsgIm1lc3NhZ2VzIjogeyAiIjoge30gfSB9IH0gKTsK">
    </script>
    <script defer id="elementor-pro-frontend-js-before"
        src="data:text/javascript;base64,CnZhciBFbGVtZW50b3JQcm9Gcm9udGVuZENvbmZpZyA9IHsiYWpheHVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiI0MmM3MDllZjYxIiwidXJscyI6eyJhc3NldHMiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvci1wcm9cL2Fzc2V0c1wvIiwicmVzdCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtanNvblwvIn0sInNoYXJlQnV0dG9uc05ldHdvcmtzIjp7ImZhY2Vib29rIjp7InRpdGxlIjoiRmFjZWJvb2siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR3aXR0ZXIiOnsidGl0bGUiOiJUd2l0dGVyIn0sImxpbmtlZGluIjp7InRpdGxlIjoiTGlua2VkSW4iLCJoYXNfY291bnRlciI6dHJ1ZX0sInBpbnRlcmVzdCI6eyJ0aXRsZSI6IlBpbnRlcmVzdCIsImhhc19jb3VudGVyIjp0cnVlfSwicmVkZGl0Ijp7InRpdGxlIjoiUmVkZGl0IiwiaGFzX2NvdW50ZXIiOnRydWV9LCJ2ayI6eyJ0aXRsZSI6IlZLIiwiaGFzX2NvdW50ZXIiOnRydWV9LCJvZG5va2xhc3NuaWtpIjp7InRpdGxlIjoiT0siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR1bWJsciI6eyJ0aXRsZSI6IlR1bWJsciJ9LCJkaWdnIjp7InRpdGxlIjoiRGlnZyJ9LCJza3lwZSI6eyJ0aXRsZSI6IlNreXBlIn0sInN0dW1ibGV1cG9uIjp7InRpdGxlIjoiU3R1bWJsZVVwb24iLCJoYXNfY291bnRlciI6dHJ1ZX0sIm1peCI6eyJ0aXRsZSI6Ik1peCJ9LCJ0ZWxlZ3JhbSI6eyJ0aXRsZSI6IlRlbGVncmFtIn0sInBvY2tldCI6eyJ0aXRsZSI6IlBvY2tldCIsImhhc19jb3VudGVyIjp0cnVlfSwieGluZyI6eyJ0aXRsZSI6IlhJTkciLCJoYXNfY291bnRlciI6dHJ1ZX0sIndoYXRzYXBwIjp7InRpdGxlIjoiV2hhdHNBcHAifSwiZW1haWwiOnsidGl0bGUiOiJFbWFpbCJ9LCJwcmludCI6eyJ0aXRsZSI6IlByaW50In19LCJmYWNlYm9va19zZGsiOnsibGFuZyI6ImVuX1VTIiwiYXBwX2lkIjoiIn0sImxvdHRpZSI6eyJkZWZhdWx0QW5pbWF0aW9uVXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3ItcHJvXC9tb2R1bGVzXC9sb3R0aWVcL2Fzc2V0c1wvYW5pbWF0aW9uc1wvZGVmYXVsdC5qc29uIn19Owo=">
    </script>
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
    <script defer id="elementor-frontend-js-before"
        src="data:text/javascript;base64,CnZhciBlbGVtZW50b3JGcm9udGVuZENvbmZpZyA9IHsiZW52aXJvbm1lbnRNb2RlIjp7ImVkaXQiOmZhbHNlLCJ3cFByZXZpZXciOmZhbHNlLCJpc1NjcmlwdERlYnVnIjpmYWxzZX0sImkxOG4iOnsic2hhcmVPbkZhY2Vib29rIjoiU2hhcmUgb24gRmFjZWJvb2siLCJzaGFyZU9uVHdpdHRlciI6IlNoYXJlIG9uIFR3aXR0ZXIiLCJwaW5JdCI6IlBpbiBpdCIsImRvd25sb2FkIjoiRG93bmxvYWQiLCJkb3dubG9hZEltYWdlIjoiRG93bmxvYWQgaW1hZ2UiLCJmdWxsc2NyZWVuIjoiRnVsbHNjcmVlbiIsInpvb20iOiJab29tIiwic2hhcmUiOiJTaGFyZSIsInBsYXlWaWRlbyI6IlBsYXkgVmlkZW8iLCJwcmV2aW91cyI6IlByZXZpb3VzIiwibmV4dCI6Ik5leHQiLCJjbG9zZSI6IkNsb3NlIn0sImlzX3J0bCI6ZmFsc2UsImJyZWFrcG9pbnRzIjp7InhzIjowLCJzbSI6NDgwLCJtZCI6NzY4LCJsZyI6MTAyNSwieGwiOjE0NDAsInh4bCI6MTYwMH0sInJlc3BvbnNpdmUiOnsiYnJlYWtwb2ludHMiOnsibW9iaWxlIjp7ImxhYmVsIjoiTW9iaWxlIiwidmFsdWUiOjc2NywiZGVmYXVsdF92YWx1ZSI6NzY3LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwibW9iaWxlX2V4dHJhIjp7ImxhYmVsIjoiTW9iaWxlIEV4dHJhIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IEV4dHJhIiwidmFsdWUiOjEyMDAsImRlZmF1bHRfdmFsdWUiOjEyMDAsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwibGFwdG9wIjp7ImxhYmVsIjoiTGFwdG9wIiwidmFsdWUiOjEzNjYsImRlZmF1bHRfdmFsdWUiOjEzNjYsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwid2lkZXNjcmVlbiI6eyJsYWJlbCI6IldpZGVzY3JlZW4iLCJ2YWx1ZSI6MjQwMCwiZGVmYXVsdF92YWx1ZSI6MjQwMCwiZGlyZWN0aW9uIjoibWluIiwiaXNfZW5hYmxlZCI6ZmFsc2V9fX0sInZlcnNpb24iOiIzLjYuNCIsImlzX3N0YXRpYyI6ZmFsc2UsImV4cGVyaW1lbnRhbEZlYXR1cmVzIjp7ImVfaW1wb3J0X2V4cG9ydCI6dHJ1ZSwiZV9oaWRkZW5fd29yZHByZXNzX3dpZGdldHMiOnRydWUsInRoZW1lX2J1aWxkZXJfdjIiOnRydWUsImxhbmRpbmctcGFnZXMiOnRydWUsImVsZW1lbnRzLWNvbG9yLXBpY2tlciI6dHJ1ZSwiZmF2b3JpdGUtd2lkZ2V0cyI6dHJ1ZSwiYWRtaW4tdG9wLWJhciI6dHJ1ZSwicGFnZS10cmFuc2l0aW9ucyI6dHJ1ZSwiZm9ybS1zdWJtaXNzaW9ucyI6dHJ1ZSwiZV9zY3JvbGxfc25hcCI6dHJ1ZX0sInVybHMiOnsiYXNzZXRzIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3JcL2Fzc2V0c1wvIn0sInNldHRpbmdzIjp7InBhZ2UiOltdLCJlZGl0b3JQcmVmZXJlbmNlcyI6W119LCJraXQiOnsiYWN0aXZlX2JyZWFrcG9pbnRzIjpbInZpZXdwb3J0X21vYmlsZSIsInZpZXdwb3J0X3RhYmxldCJdLCJnbG9iYWxfaW1hZ2VfbGlnaHRib3giOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfY291bnRlciI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9mdWxsc2NyZWVuIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX3pvb20iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfc2hhcmUiOiJ5ZXMiLCJsaWdodGJveF90aXRsZV9zcmMiOiJ0aXRsZSIsImxpZ2h0Ym94X2Rlc2NyaXB0aW9uX3NyYyI6ImRlc2NyaXB0aW9uIn0sInBvc3QiOnsiaWQiOjMwNTE4LCJ0aXRsZSI6IlNlYXJjaCUyMFByb2dyYW1zJTIwJTdDJTIwRm9yJTIwU3R1ZGVudCUyMCU3QyUyMEFkdmVudHVzLmlvIiwiZXhjZXJwdCI6IiIsImZlYXR1cmVkSW1hZ2UiOmZhbHNlfX07Cg==">
    </script>
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
