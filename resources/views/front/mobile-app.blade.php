@php
    $assetsUrl = asset('/assets/front/');
    // echo $assetsUrl;
@endphp

@extends('layouts.front.layout')

@push('styles')
    <title>Adventus.io Mobile App | Adventus.io</title>
    <meta name="description"
        content="A companion to our all-in-one platform, the Adventus.io Application Assistant App offers bonus features to help recruiters 
        stay updated, seamlessly scan documents, and connect with students—all from your pocket." />

    <meta property="og:title" content="Adventus.io Mobile App | Adventus.io" />
    <meta property="og:description"
        content="A companion to our all-in-one platform, the Adventus.io Application Assistant App offers bonus features to help recruiters 
        stay updated, seamlessly scan documents, and connect with students—all from your pocket." />






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
        href='{{ $assetsUrl }}/wp-content/plugins/adventus-elementor-widget/stylesa27d.css?ver=1761892969'
        type='text/css' media='all' />
    <link rel='stylesheet' id='open-course-search-css-css'
        href='{{ $assetsUrl }}/wp-content/plugins/open-course-sarch/css/open-course-search87ed.css?ver=5.9.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{ $assetsUrl }}/wp-includes/css/dashicons.min87ed.css?ver=5.9.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventusio-style-min-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-app-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/mobile-app8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventus-reecruiter-success-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/recruiter-success-story8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-institution-success-css-css'
        href='{{ $assetsUrl }}/wp-content/themes/adventusio/css/institution-success-story8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-official-css'
        href='{{ $assetsUrl }}/use.fontawesome.com/releases/v5.13.0/css/all.css' type='text/css' media='all'
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
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
    <link rel='stylesheet' id='elementor-post-15248-css'
        href='{{ $assetsUrl }}/wp-content/uploads/elementor/css/post-1524828da.css?ver=1738404429' type='text/css'
        media='all' />
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



    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='{{ $assetsUrl }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3'
        type='text/css' media='all' />
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
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/lottie.mina27d.js?ver=1761892969'
        id='adventus-lottie-min-js-js'></script>
    <link rel="https://api.w.org/" href="{{ $assetsUrl }}/wp-json/index.html" />
    <link rel="alternate" type="application/json" href="{{ $assetsUrl }}/wp-json/wp/v2/pages/15248.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ $assetsUrl }}/xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ $assetsUrl }}/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.12" />
    <link rel='shortlink' href='{{ $assetsUrl }}/indexbcaf.html?p=15248' />
    <link rel="alternate" type="application/json+oembed"
        href="{{ $assetsUrl }}/wp-json/oembed/1.0/embeda5d6.json?url=https%3A%2F%2Fadventus.io%2Fmobile-app%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{ $assetsUrl }}/wp-json/oembed/1.0/embed9546?url=https%3A%2F%2Fadventus.io%2Fmobile-app%2F&amp;format=xml" />

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


    <script defer src="../../www.googleoptimize.com/optimize1d3d.js?id=OPT-NLXR3J6"></script>


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
    <article id="post-15248" class="post-15248 page type-page status-publish has-post-thumbnail hentry">
        <div class="entry-content">
            <div data-elementor-type="wp-page" data-elementor-id="15248" class="elementor elementor-15248">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-90731b4 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="90731b4" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cfa83c9"
                                        data-id="cfa83c9" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5e15830 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="5e15830" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c208771"
                                                                data-id="c208771" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-39574bb margin-0 rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="39574bb" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>MOBILE APP FOR COUNSELLORS</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d769fbd rm-margin elementor-widget elementor-widget-heading"
                                                                            data-id="d769fbd" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h1
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Seamless student recruitment with
                                                                                    Adventus.io’s mobile app</h1>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-b4cb210 elementor-widget__width-auto elementor-widget elementor-widget-image"
                                                                            data-id="b4cb210" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-srcset="https://adventus.io/wp-content/uploads/2021/10/advio_qr-1024x1024.png 1024w, https://adventus.io/wp-content/uploads/2021/10/advio_qr-300x300.png 300w, https://adventus.io/wp-content/uploads/2021/10/advio_qr-150x150.png 150w, https://adventus.io/wp-content/uploads/2021/10/advio_qr-768x768.png 768w, https://adventus.io/wp-content/uploads/2021/10/advio_qr.png 1155w"
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/10/advio_qr-1024x1024.png"
                                                                                        data-sizes="(max-width: 640px) 100vw, 640px"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../wp-content/uploads/2021/10/advio_qr-1024x1024.png"
                                                                                            class="attachment-large size-large"
                                                                                            alt=""
                                                                                            srcset="https://adventus.io/wp-content/uploads/2021/10/advio_qr-1024x1024.png 1024w, https://adventus.io/wp-content/uploads/2021/10/advio_qr-300x300.png 300w, https://adventus.io/wp-content/uploads/2021/10/advio_qr-150x150.png 150w, https://adventus.io/wp-content/uploads/2021/10/advio_qr-768x768.png 768w, https://adventus.io/wp-content/uploads/2021/10/advio_qr.png 1155w"
                                                                                            sizes="(max-width: 640px) 100vw, 640px" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-fce893a margin-0 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                                            data-id="fce893a" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>The Adventus.io Application Assistant
                                                                                        has special features to make the
                                                                                        counselling process easy and fast.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-b7c85a9 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="b7c85a9" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <a class="elementor-icon elementor-animation-grow"
                                                                                        href="https://apps.apple.com/us/app/adventus-io/id1582009648"
                                                                                        target="_blank">
                                                                                        <i aria-hidden="true"
                                                                                            class="fab fa-apple"></i> </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-7801028 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="7801028" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <a class="elementor-icon elementor-animation-grow"
                                                                                        href="https://play.google.com/store/apps/details?id=io.mobile.adventus"
                                                                                        target="_blank">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            id="Capa_1" x="0px" y="0px"
                                                                                            width="553.048px"
                                                                                            height="553.048px"
                                                                                            viewBox="0 0 553.048 553.048"
                                                                                            style="enable-background:new 0 0 553.048 553.048;"
                                                                                            xml:space="preserve">
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M76.774,179.141c-9.529,0-17.614,3.323-24.26,9.969c-6.646,6.646-9.97,14.621-9.97,23.929v142.914    c0,9.541,3.323,17.619,9.97,24.266c6.646,6.646,14.731,9.97,24.26,9.97c9.522,0,17.558-3.323,24.101-9.97    c6.53-6.646,9.804-14.725,9.804-24.266V213.039c0-9.309-3.323-17.283-9.97-23.929C94.062,182.464,86.082,179.141,76.774,179.141z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M351.972,50.847L375.57,7.315c1.549-2.882,0.998-5.092-1.658-6.646c-2.883-1.34-5.098-0.661-6.646,1.989l-23.928,43.88    c-21.055-9.309-43.324-13.972-66.807-13.972c-23.488,0-45.759,4.664-66.806,13.972l-23.929-43.88    c-1.555-2.65-3.77-3.323-6.646-1.989c-2.662,1.561-3.213,3.764-1.658,6.646l23.599,43.532    c-23.929,12.203-42.987,29.198-57.167,51.022c-14.18,21.836-21.273,45.698-21.273,71.628h307.426    c0-25.924-7.094-49.787-21.273-71.628C394.623,80.045,375.675,63.05,351.972,50.847z M215.539,114.165    c-2.552,2.558-5.6,3.831-9.143,3.831c-3.55,0-6.536-1.273-8.972-3.831c-2.436-2.546-3.654-5.582-3.654-9.137    c0-3.543,1.218-6.585,3.654-9.137c2.436-2.546,5.429-3.819,8.972-3.819s6.591,1.273,9.143,3.819    c2.546,2.558,3.825,5.594,3.825,9.137C219.357,108.577,218.079,111.619,215.539,114.165z M355.625,114.165    c-2.441,2.558-5.434,3.831-8.971,3.831c-3.551,0-6.598-1.273-9.145-3.831c-2.551-2.546-3.824-5.582-3.824-9.137    c0-3.543,1.273-6.585,3.824-9.137c2.547-2.546,5.594-3.819,9.145-3.819c3.543,0,6.529,1.273,8.971,3.819    c2.438,2.558,3.654,5.594,3.654,9.137C359.279,108.577,358.062,111.619,355.625,114.165z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M123.971,406.804c0,10.202,3.543,18.838,10.63,25.925c7.093,7.087,15.729,10.63,25.924,10.63h24.596l0.337,75.454    c0,9.528,3.323,17.619,9.969,24.266s14.627,9.97,23.929,9.97c9.523,0,17.613-3.323,24.26-9.97s9.97-14.737,9.97-24.266v-75.447    h45.864v75.447c0,9.528,3.322,17.619,9.969,24.266s14.73,9.97,24.26,9.97c9.523,0,17.613-3.323,24.26-9.97    s9.969-14.737,9.969-24.266v-75.447h24.928c9.969,0,18.494-3.544,25.594-10.631c7.086-7.087,10.631-15.723,10.631-25.924V185.45    H123.971V406.804z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M476.275,179.141c-9.309,0-17.283,3.274-23.93,9.804c-6.646,6.542-9.969,14.578-9.969,24.094v142.914    c0,9.541,3.322,17.619,9.969,24.266s14.627,9.97,23.93,9.97c9.523,0,17.613-3.323,24.26-9.97s9.969-14.725,9.969-24.266V213.039    c0-9.517-3.322-17.552-9.969-24.094C493.888,182.415,485.798,179.141,476.275,179.141z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                        </svg> </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c4dbf5a hide elementor-widget elementor-widget-html"
                                                                            data-id="c4dbf5a" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="text-me"
                                                                                    style="display: flex;">
                                                                                    <div class="select-wrapper">
                                                                                        <select>
                                                                                            <option value="61">+61
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        placeholder="Mobile Number">
                                                                                    <button>TEXT ME THE LINK</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a647e78"
                                                                data-id="a647e78" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-58274b0 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                                            data-id="58274b0" data-element_type="widget"
                                                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img title="" alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/10/mobile-app.png"
                                                                                        class="lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            src="../wp-content/uploads/2021/10/mobile-app.png"
                                                                                            title=""
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-107e949 lines elementor-widget elementor-widget-html"
                                                    data-id="107e949" data-element_type="widget"
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-fcd8ae9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="fcd8ae9" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-abda455"
                                        data-id="abda455" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-69ef807 lines white elementor-widget elementor-widget-html"
                                                    data-id="69ef807" data-element_type="widget"
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
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-bdd64ef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="bdd64ef" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">


                                                            <div
                                                                class="elementor-column elementor-col-33 elementor-inner-column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap"
                                                                        style="text-align: center; justify-content: center;">
                                                                        <!-- Lottie animation container -->
                                                                        <div class="elementor-widget-container">
                                                                            <div id="convertStudentsLottie"
                                                                                style="width: 200px; height: 245px; margin: auto; margin-top: -42px;"></div>
                                                                        </div>
                                                                        <div class="elementor-widget-container">
                                                                            <h3>Counsel students from anywhere</h3>
                                                                            <p>
                                                                                Recruiters are the only contact point for
                                                                                students, making connecting
                                                                                essential. Now you can keep supporting them
                                                                                no matter where you are.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-column elementor-col-33 elementor-inner-column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap"
                                                                        style="text-align: center; justify-content: center;">
                                                                        <!-- Lottie animation container -->
                                                                        <div class="elementor-widget-container">
                                                                            <div id="notificationLottie"
                                                                                style="width: 200px; height: 200px; margin: auto;"></div>
                                                                        </div>
                                                                        <div class="elementor-widget-container">
                                                                            <h3>Push notifications</h3>
                                                                            <p>
                                                                                Receive real-time notifications directly to your phone. Staying 
                                                                                abreast of news and updates has never been so easy.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-column elementor-col-33 elementor-inner-column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap"
                                                                        style="text-align: center; justify-content: center;">
                                                                        <!-- Lottie animation container -->
                                                                        <div class="elementor-widget-container">
                                                                            <div id="manageAppProcessesLottie"
                                                                                style="width: 200px;height: 200px; margin: auto;"></div>
                                                                        </div>
                                                                        <div class="elementor-widget-container">
                                                                            <h3>Easily manage applications</h3>
                                                                            <p>
                                                                                Scan documents by taking a photo, auto-fill fields, and track the status of an application on the go.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                            {{-- <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a68aad4"
                                                                data-id="a68aad4" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-312840a elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="312840a" data-element_type="widget"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;{{ $assetsUrl }}/wp-content/uploads/lottie-animations/Convert-more-students.json&quot;,&quot;id&quot;:16917},&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementor-element elementor-element-a15946f margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="a15946f" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Counsel students from anywhere</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-3de244e margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="3de244e" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Recruiters are the only contact point
                                                                                        for students, making connecting
                                                                                        essential. Now you can keep
                                                                                        supporting them no matter where you
                                                                                        are.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}




                                                            {{-- <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-13b8bf7"
                                                                data-id="13b8bf7" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-811d21a elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="811d21a" data-element_type="widget"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;{{ $assetsUrl }}/wp-content/uploads/lottie-animations/Notification-a.json&quot;,&quot;id&quot;:18498},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-73f06cd margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="73f06cd" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Push notifications</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-961307d margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="961307d" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Receive real-time notifications
                                                                                        directly to your phone. Staying
                                                                                        abreast of news and updates has
                                                                                        never been so easy.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-133644c"
                                                                data-id="133644c" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-616f4d8 elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="616f4d8" data-element_type="widget"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;{{ $assetsUrl }}/wp-content/uploads/lottie-animations/manage-app-processes.json&quot;,&quot;id&quot;:17849},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2d50575 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="2d50575" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Easily manage applications</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-fc7c94a margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="fc7c94a" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Scan documents by taking a photo,
                                                                                        auto-fill fields, and track the
                                                                                        status of an application on the go.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-89c055d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="89c055d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c148d39"
                                                                data-id="c148d39" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-3f7367c elementor-aspect-ratio-169 elementor-widget elementor-widget-video"
                                                                            data-id="3f7367c" data-element_type="widget"
                                                                            data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}"
                                                                            data-widget_type="video.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="e-hosted-video elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                    <video class="elementor-video"
                                                                                        src="../wp-content/uploads/2022/10/Adventus-Application-Assistant-1.mp4"
                                                                                        controls=""
                                                                                        controlsList="nodownload"></video>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-1a38813 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="1a38813" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5d90e35"
                                                                data-id="5d90e35" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-46205b5 elementor-widget elementor-widget-html"
                                                                            data-id="46205b5" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="app-feature-tab">
                                                                                    <div class="bg"></div>
                                                                                    <a data-tab="app-1"
                                                                                        data-header="header-1"
                                                                                        data-copy="copy-1"
                                                                                        class="selected"
                                                                                        href="#">Add Students</a>
                                                                                    <a data-tab="app-2"
                                                                                        data-header="header-2"
                                                                                        data-copy="copy-2"
                                                                                        href="#">Manage</a>
                                                                                    <a data-tab="app-3"
                                                                                        data-header="header-3"
                                                                                        data-copy="copy-3"
                                                                                        href="#">Engage</a>
                                                                                    <a data-tab="app-4"
                                                                                        data-header="header-4"
                                                                                        data-copy="copy-4"
                                                                                        href="#">Monitor</a>
                                                                                    <a data-tab="app-5"
                                                                                        data-header="header-5"
                                                                                        data-copy="copy-5"
                                                                                        href="#">Connect</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-89c2c6c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="89c2c6c" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6858d7d"
                                                                data-id="6858d7d" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-8eb7e9e elementor-absolute elementor-widget elementor-widget-image"
                                                                            data-id="8eb7e9e" data-element_type="widget"
                                                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/10/app-grey-bg.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../wp-content/uploads/2021/10/app-grey-bg.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-b9316b2 margin-0 rm-margin elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="b9316b2" data-element_type="widget"
                                                                            id="app-1"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/adventus.io\/wp-content\/uploads\/2021\/11\/AddStudents-test.json&quot;,&quot;id&quot;:18022},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2f0200d margin-0 rm-margin hide elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="2f0200d" data-element_type="widget"
                                                                            id="app-2"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/adventus.io\/wp-content\/uploads\/2021\/11\/Manage.json&quot;,&quot;id&quot;:17855},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ed630fd margin-0 rm-margin hide elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="ed630fd" data-element_type="widget"
                                                                            id="app-3"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/adventus.io\/wp-content\/uploads\/2021\/10\/Mobile-App-engage.json&quot;,&quot;id&quot;:16924},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-98c7bd1 margin-0 rm-margin hide elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="98c7bd1" data-element_type="widget"
                                                                            id="app-4"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/adventus.io\/wp-content\/uploads\/2021\/11\/Monitor-1.json&quot;,&quot;id&quot;:18023},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e692fc8 margin-0 rm-margin hide elementor-align-center elementor-widget elementor-widget-lottie"
                                                                            data-id="e692fc8" data-element_type="widget"
                                                                            id="app-5"
                                                                            data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/adventus.io\/wp-content\/uploads\/2021\/11\/Connect-1.json&quot;,&quot;id&quot;:18024},&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                                                            data-widget_type="lottie.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="e-lottie__container">
                                                                                    <div class="e-lottie__animation"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b5610c9"
                                                                data-id="b5610c9" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7ab0f4a margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="7ab0f4a" data-element_type="widget"
                                                                            id="header-1"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Add new students quickly wherever,
                                                                                        whenever</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-616f551 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="616f551" data-element_type="widget"
                                                                            id="copy-1"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Now you can add new students
                                                                                        immediately without having to be at
                                                                                        your desk. Students will then
                                                                                        receive an auto-generated welcome
                                                                                        email containing their login details
                                                                                        and a download link for the app.
                                                                                    </p>
                                                                                    <p> </p>
                                                                                    <p><em>*Student experience is available
                                                                                            for customers in any Premium
                                                                                            Subscription plan.</em></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d0168b3 margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="d0168b3" data-element_type="widget"
                                                                            id="header-5"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Make conversations directly from the
                                                                                        app</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-8278c94 margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="8278c94" data-element_type="widget"
                                                                            id="copy-5"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Since students can’t connect with <a
                                                                                            class="c-link"
                                                                                            href="../index.html"
                                                                                            target="_blank"
                                                                                            rel="noopener noreferrer"
                                                                                            data-stringify-link="http://Adventus.io"
                                                                                            data-sk="tooltip_parent">Adventus.io</a> directly,
                                                                                        you&#8217;re their key contact. Our
                                                                                        built-in directory and WhatsApp
                                                                                        integration make connecting with
                                                                                        students, team members and our
                                                                                        support team, easy.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e57b04f margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="e57b04f" data-element_type="widget"
                                                                            id="header-4"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Access the latest updates and news
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-48eadb4 margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="48eadb4" data-element_type="widget"
                                                                            id="copy-4"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Never miss a notification again. From
                                                                                        student application progress to
                                                                                        border updates, with the app, you’re
                                                                                        always up-to-date with the latest
                                                                                        news. And when offers come through,
                                                                                        you’re the first to know.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c9099ea margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="c9099ea" data-element_type="widget"
                                                                            id="header-3"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Engage students and increase
                                                                                        satisfaction</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-53b4fcd margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="53b4fcd" data-element_type="widget"
                                                                            id="copy-3"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>In the digital age, students expect
                                                                                        to be able to connect with you
                                                                                        quickly. With our mobile app, it’s
                                                                                        convenient and easy to stay in touch
                                                                                        with students–helping them stay
                                                                                        engaged in the process.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c34990b margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="c34990b" data-element_type="widget"
                                                                            id="header-2"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Manage application processes quickly
                                                                                        with smart tools</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-10c3473 margin-0 hide elementor-widget elementor-widget-text-editor"
                                                                            data-id="10c3473" data-element_type="widget"
                                                                            id="copy-2"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>We know it’s important to keep
                                                                                        applications moving quickly. Now
                                                                                        uploading documents is faster with
                                                                                        our in-app OCR technology which
                                                                                        auto-fills details and auto-detects
                                                                                        country of origin. </p>
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-0fbfc4b elementor-section-full_width elementor-section-height-full elementor-section-height-default elementor-section-items-middle"
                            data-id="0fbfc4b" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3c058ff"
                                        data-id="3c058ff" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-481ff0f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="481ff0f" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9118bbc"
                                                                data-id="9118bbc" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-a58c8af rm-margin elementor-widget elementor-widget-heading"
                                                                            data-id="a58c8af" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h1
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Take your counselling experience with
                                                                                    you, wherever you go.
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-8175f98 elementor-widget__width-auto margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="8175f98" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Available to all Adventus.io
                                                                                        customers for free</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f8f4070 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="f8f4070" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <a class="elementor-icon elementor-animation-grow"
                                                                                        href="https://apps.apple.com/us/app/adventus-io/id1582009648"
                                                                                        target="_blank">
                                                                                        <i aria-hidden="true"
                                                                                            class="fab fa-apple"></i> </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6134400 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="6134400" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <a class="elementor-icon elementor-animation-grow"
                                                                                        href="https://play.google.com/store/apps/details?id=io.mobile.adventus"
                                                                                        target="_blank">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            id="Capa_1" x="0px" y="0px"
                                                                                            width="553.048px"
                                                                                            height="553.048px"
                                                                                            viewBox="0 0 553.048 553.048"
                                                                                            style="enable-background:new 0 0 553.048 553.048;"
                                                                                            xml:space="preserve">
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M76.774,179.141c-9.529,0-17.614,3.323-24.26,9.969c-6.646,6.646-9.97,14.621-9.97,23.929v142.914    c0,9.541,3.323,17.619,9.97,24.266c6.646,6.646,14.731,9.97,24.26,9.97c9.522,0,17.558-3.323,24.101-9.97    c6.53-6.646,9.804-14.725,9.804-24.266V213.039c0-9.309-3.323-17.283-9.97-23.929C94.062,182.464,86.082,179.141,76.774,179.141z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M351.972,50.847L375.57,7.315c1.549-2.882,0.998-5.092-1.658-6.646c-2.883-1.34-5.098-0.661-6.646,1.989l-23.928,43.88    c-21.055-9.309-43.324-13.972-66.807-13.972c-23.488,0-45.759,4.664-66.806,13.972l-23.929-43.88    c-1.555-2.65-3.77-3.323-6.646-1.989c-2.662,1.561-3.213,3.764-1.658,6.646l23.599,43.532    c-23.929,12.203-42.987,29.198-57.167,51.022c-14.18,21.836-21.273,45.698-21.273,71.628h307.426    c0-25.924-7.094-49.787-21.273-71.628C394.623,80.045,375.675,63.05,351.972,50.847z M215.539,114.165    c-2.552,2.558-5.6,3.831-9.143,3.831c-3.55,0-6.536-1.273-8.972-3.831c-2.436-2.546-3.654-5.582-3.654-9.137    c0-3.543,1.218-6.585,3.654-9.137c2.436-2.546,5.429-3.819,8.972-3.819s6.591,1.273,9.143,3.819    c2.546,2.558,3.825,5.594,3.825,9.137C219.357,108.577,218.079,111.619,215.539,114.165z M355.625,114.165    c-2.441,2.558-5.434,3.831-8.971,3.831c-3.551,0-6.598-1.273-9.145-3.831c-2.551-2.546-3.824-5.582-3.824-9.137    c0-3.543,1.273-6.585,3.824-9.137c2.547-2.546,5.594-3.819,9.145-3.819c3.543,0,6.529,1.273,8.971,3.819    c2.438,2.558,3.654,5.594,3.654,9.137C359.279,108.577,358.062,111.619,355.625,114.165z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M123.971,406.804c0,10.202,3.543,18.838,10.63,25.925c7.093,7.087,15.729,10.63,25.924,10.63h24.596l0.337,75.454    c0,9.528,3.323,17.619,9.969,24.266s14.627,9.97,23.929,9.97c9.523,0,17.613-3.323,24.26-9.97s9.97-14.737,9.97-24.266v-75.447    h45.864v75.447c0,9.528,3.322,17.619,9.969,24.266s14.73,9.97,24.26,9.97c9.523,0,17.613-3.323,24.26-9.97    s9.969-14.737,9.969-24.266v-75.447h24.928c9.969,0,18.494-3.544,25.594-10.631c7.086-7.087,10.631-15.723,10.631-25.924V185.45    H123.971V406.804z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M476.275,179.141c-9.309,0-17.283,3.274-23.93,9.804c-6.646,6.542-9.969,14.578-9.969,24.094v142.914    c0,9.541,3.322,17.619,9.969,24.266s14.627,9.97,23.93,9.97c9.523,0,17.613-3.323,24.26-9.97s9.969-14.725,9.969-24.266V213.039    c0-9.517-3.322-17.552-9.969-24.094C493.888,182.415,485.798,179.141,476.275,179.141z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                        </svg> </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-148a544"
                                                                data-id="148a544" data-element_type="column">
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-d686ee0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="d686ee0" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6dbf0c3"
                                        data-id="6dbf0c3" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-2406f33 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="2406f33" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9ba5c7a margin-0"
                                                                data-id="9ba5c7a" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-a8f9182 rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="a8f9182" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>FREQUENTLY ASKED</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f026898 elementor-widget elementor-widget-heading"
                                                                            data-id="f026898" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Your questions answered</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2a5a6ee"
                                                                data-id="2a5a6ee" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-b1778ed accordion-yellow hide-first elementor-widget elementor-widget-accordion"
                                                                            data-id="b1778ed" data-element_type="widget"
                                                                            data-widget_type="accordion.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-accordion"
                                                                                    role="tablist">
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1861"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="1" role="tab"
                                                                                            aria-controls="elementor-tab-content-1861"
                                                                                            aria-expanded="false">
                                                                                            <span
                                                                                                class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                aria-hidden="true">
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-closed"><i
                                                                                                        class="fas fa-chevron-down"></i></span>
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-opened"><i
                                                                                                        class="fas fa-chevron-up"></i></span>
                                                                                            </span>
                                                                                            <a class="elementor-accordion-title"
                                                                                                href="#"></a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1861"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="1" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1861">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1862"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="2" role="tab"
                                                                                            aria-controls="elementor-tab-content-1862"
                                                                                            aria-expanded="false">
                                                                                            <span
                                                                                                class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                aria-hidden="true">
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-closed"><i
                                                                                                        class="fas fa-chevron-down"></i></span>
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-opened"><i
                                                                                                        class="fas fa-chevron-up"></i></span>
                                                                                            </span>
                                                                                            <a class="elementor-accordion-title"
                                                                                                href="#">Do I need to
                                                                                                be a customer to use the
                                                                                                app?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1862"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="2" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1862">
                                                                                            <p>Yes, the app is only for
                                                                                                Adventus.io customers
                                                                                                irrespective of what plan
                                                                                                they are on.</p>
                                                                                            <p>Customers on Growth, Power,
                                                                                                or Enterprise plans can also
                                                                                                enable the student version
                                                                                                of the app. This is an
                                                                                                optional extra.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1863"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="3" role="tab"
                                                                                            aria-controls="elementor-tab-content-1863"
                                                                                            aria-expanded="false">
                                                                                            <span
                                                                                                class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                aria-hidden="true">
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-closed"><i
                                                                                                        class="fas fa-chevron-down"></i></span>
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-opened"><i
                                                                                                        class="fas fa-chevron-up"></i></span>
                                                                                            </span>
                                                                                            <a class="elementor-accordion-title"
                                                                                                href="#">Will I lose
                                                                                                students if they can
                                                                                                directly access the
                                                                                                Adventus.io app?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1863"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="3" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1863">
                                                                                            <p>No. As with the Student
                                                                                                Portal, your students are
                                                                                                not able to lodge
                                                                                                applications with
                                                                                                institutions directly. They
                                                                                                must come back to you, their
                                                                                                recruiter, in order to do
                                                                                                this.</p>
                                                                                            <p>There are no contact details
                                                                                                for Adventus.io in the app,
                                                                                                so students cannot contact
                                                                                                us directly.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1864"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="4" role="tab"
                                                                                            aria-controls="elementor-tab-content-1864"
                                                                                            aria-expanded="false">
                                                                                            <span
                                                                                                class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                aria-hidden="true">
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-closed"><i
                                                                                                        class="fas fa-chevron-down"></i></span>
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-opened"><i
                                                                                                        class="fas fa-chevron-up"></i></span>
                                                                                            </span>
                                                                                            <a class="elementor-accordion-title"
                                                                                                href="#">Can I brand
                                                                                                the Adventus.io app?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1864"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="4" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1864">
                                                                                            <p>Yes, your business name, not
                                                                                                Adventus.io, will be
                                                                                                featured on the home page of
                                                                                                the app when students log
                                                                                                in. <br /><br />There is
                                                                                                also a section called
                                                                                                MyAgent that is dedicated to
                                                                                                provide information about
                                                                                                your business and your
                                                                                                contact details, so your
                                                                                                students know they are
                                                                                                dealing with you.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1865"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="5" role="tab"
                                                                                            aria-controls="elementor-tab-content-1865"
                                                                                            aria-expanded="false">
                                                                                            <span
                                                                                                class="elementor-accordion-icon elementor-accordion-icon-right"
                                                                                                aria-hidden="true">
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-closed"><i
                                                                                                        class="fas fa-chevron-down"></i></span>
                                                                                                <span
                                                                                                    class="elementor-accordion-icon-opened"><i
                                                                                                        class="fas fa-chevron-up"></i></span>
                                                                                            </span>
                                                                                            <a class="elementor-accordion-title"
                                                                                                href="#">Will
                                                                                                Adventus.io contact my
                                                                                                students directly?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1865"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="5" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1865">
                                                                                            <p>No. Adventus.io team members
                                                                                                are not able to contact
                                                                                                students directly. If your
                                                                                                students are using the app,
                                                                                                they cannot contact
                                                                                                Adventus.io.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-4f85a9a lines elementor-widget elementor-widget-html"
                                                    data-id="4f85a9a" data-element_type="widget"
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-e81c582 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="e81c582" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b88c38"
                                        data-id="1b88c38" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5ddfb75 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="5ddfb75" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0c6c449 elementor-hidden-phone"
                                                                data-id="0c6c449" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-f0b5114 elementor-absolute elementor-widget elementor-widget-image"
                                                                            data-id="f0b5114" data-element_type="widget"
                                                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img title="" alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/10/mobile-app-2.png"
                                                                                        class="lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            src="../wp-content/uploads/2021/10/mobile-app-2.png"
                                                                                            title=""
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-66e5b13"
                                                                data-id="66e5b13" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-a0965c6 margin-0 rm-margin elementor-widget elementor-widget-heading"
                                                                            data-id="a0965c6" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Available on<br> App Store + Google Play
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a30bc91 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="a30bc91" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <a class="elementor-icon elementor-animation-grow"
                                                                                        href="https://apps.apple.com/us/app/adventus-io/id1582009648"
                                                                                        target="_blank">
                                                                                        <i aria-hidden="true"
                                                                                            class="fab fa-apple"></i> </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-53f2317 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="53f2317" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <a class="elementor-icon elementor-animation-grow"
                                                                                        href="https://play.google.com/store/apps/details?id=io.mobile.adventus"
                                                                                        target="_blank">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            id="Capa_1" x="0px" y="0px"
                                                                                            width="553.048px"
                                                                                            height="553.048px"
                                                                                            viewBox="0 0 553.048 553.048"
                                                                                            style="enable-background:new 0 0 553.048 553.048;"
                                                                                            xml:space="preserve">
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M76.774,179.141c-9.529,0-17.614,3.323-24.26,9.969c-6.646,6.646-9.97,14.621-9.97,23.929v142.914    c0,9.541,3.323,17.619,9.97,24.266c6.646,6.646,14.731,9.97,24.26,9.97c9.522,0,17.558-3.323,24.101-9.97    c6.53-6.646,9.804-14.725,9.804-24.266V213.039c0-9.309-3.323-17.283-9.97-23.929C94.062,182.464,86.082,179.141,76.774,179.141z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M351.972,50.847L375.57,7.315c1.549-2.882,0.998-5.092-1.658-6.646c-2.883-1.34-5.098-0.661-6.646,1.989l-23.928,43.88    c-21.055-9.309-43.324-13.972-66.807-13.972c-23.488,0-45.759,4.664-66.806,13.972l-23.929-43.88    c-1.555-2.65-3.77-3.323-6.646-1.989c-2.662,1.561-3.213,3.764-1.658,6.646l23.599,43.532    c-23.929,12.203-42.987,29.198-57.167,51.022c-14.18,21.836-21.273,45.698-21.273,71.628h307.426    c0-25.924-7.094-49.787-21.273-71.628C394.623,80.045,375.675,63.05,351.972,50.847z M215.539,114.165    c-2.552,2.558-5.6,3.831-9.143,3.831c-3.55,0-6.536-1.273-8.972-3.831c-2.436-2.546-3.654-5.582-3.654-9.137    c0-3.543,1.218-6.585,3.654-9.137c2.436-2.546,5.429-3.819,8.972-3.819s6.591,1.273,9.143,3.819    c2.546,2.558,3.825,5.594,3.825,9.137C219.357,108.577,218.079,111.619,215.539,114.165z M355.625,114.165    c-2.441,2.558-5.434,3.831-8.971,3.831c-3.551,0-6.598-1.273-9.145-3.831c-2.551-2.546-3.824-5.582-3.824-9.137    c0-3.543,1.273-6.585,3.824-9.137c2.547-2.546,5.594-3.819,9.145-3.819c3.543,0,6.529,1.273,8.971,3.819    c2.438,2.558,3.654,5.594,3.654,9.137C359.279,108.577,358.062,111.619,355.625,114.165z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M123.971,406.804c0,10.202,3.543,18.838,10.63,25.925c7.093,7.087,15.729,10.63,25.924,10.63h24.596l0.337,75.454    c0,9.528,3.323,17.619,9.969,24.266s14.627,9.97,23.929,9.97c9.523,0,17.613-3.323,24.26-9.97s9.97-14.737,9.97-24.266v-75.447    h45.864v75.447c0,9.528,3.322,17.619,9.969,24.266s14.73,9.97,24.26,9.97c9.523,0,17.613-3.323,24.26-9.97    s9.969-14.737,9.969-24.266v-75.447h24.928c9.969,0,18.494-3.544,25.594-10.631c7.086-7.087,10.631-15.723,10.631-25.924V185.45    H123.971V406.804z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M476.275,179.141c-9.309,0-17.283,3.274-23.93,9.804c-6.646,6.542-9.969,14.578-9.969,24.094v142.914    c0,9.541,3.322,17.619,9.969,24.266s14.627,9.97,23.93,9.97c9.523,0,17.613-3.323,24.26-9.97s9.969-14.725,9.969-24.266V213.039    c0-9.517-3.322-17.552-9.969-24.094C493.888,182.415,485.798,179.141,476.275,179.141z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                            <g>
                                                                                            </g>
                                                                                        </svg> </a>
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
            </div>
        </div><!-- .entry-content -->
    </article><!-- #post-15248 -->
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.6/lottie.min.js"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const animations = [{
                    id: "convertStudentsLottie",
                    file: "Convert-more-students.json",
                },
                {
                    id: "notificationLottie",
                    file: "Notification-a.json",
                },
                {
                    id: "manageAppProcessesLottie",
                    file: "manage-app-processes.json",
                }
            ];

            animations.forEach(a => {
                const el = document.getElementById(a.id);
                if (el) {
                    lottie.loadAnimation({
                        container: el,
                        renderer: "svg",
                        loop: true,
                        autoplay: true,
                        path: "{{ $assetsUrl }}/wp-content/uploads/lottie-animations/" + a.file
                    });
                }
            });


            // lottie.loadAnimation({
            //     container: document.getElementById("convertStudentsLottie"),
            //     renderer: "svg",
            //     loop: true,
            //     autoplay: true,
            //     path: "{{ $assetsUrl }}/wp-content/uploads/lottie-animations/Convert-more-students.json"
            // });
            // lottie.loadAnimation({
            //     container: document.getElementById("notificationLottie"),
            //     renderer: "svg",
            //     loop: true,
            //     autoplay: true,
            //     path: "{{ $assetsUrl }}/wp-content/uploads/lottie-animations/Notification-a.json"
            // });
            // lottie.loadAnimation({
            //     container: document.getElementById("manageAppProcessesLottie"),
            //     renderer: "svg",
            //     loop: true,
            //     autoplay: true,
            //     path: "{{ $assetsUrl }}/wp-content/uploads/lottie-animations/manage-app-processes.json"
            // });
        });
    </script>



    {{-- <script defer id="leadin-script-loader-js-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbGVhZGluX3dvcmRwcmVzcyA9IHsidXNlclJvbGUiOiJ2aXNpdG9yIiwicGFnZVR5cGUiOiJwYWdlIiwibGVhZGluUGx1Z2luVmVyc2lvbiI6IjguNy4zIn07Ci8qIF1dPiAqLwo="></script> --}}
    <script type='text/javascript' defer src='{{ $assetsUrl }}/js.hs-scripts.com/20616828a466.js?integration=WordPress'
        async defer id='hs-script-loader'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_7a5024b25d32066a41f07aa72f43adde.js'
        id='open-course-search-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/gsap.mina27d.js?ver=1761892969'
        id='gsap-tweenmax-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/gsap/Draggable.mina27d.js?ver=1761892969'
        id='gsap-draggable-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_f47e8e64e5f1a3e934b5fcdfe5d4f7918a54.js?ver=1.0.0'
        id='adventusio-navigation-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_26036e4be38edb295cd25a7c06ba89398a54.js?ver=1.0.0'
        id='adventusio-skip-link-focus-fix-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/themes/adventusio/js/script.mina27d.js?ver=1761892969' id='adventus-min-js-js'>
    </script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_e0f8bcd10939756a4716cfdc9c7c0aeea27d.js?ver=1761892969'
        id='adventus-global-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_a9ad8beaa73149881329b5295f6438f7a27d.js?ver=1761892969'
        id='adventus-app-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_340be438ec1fbb486af7862a98f01d44a27d.js?ver=1761892969'
        id='adventus-reecruiter-success-js-js'></script>
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.minc063.js?ver=3.9.5'
        id='smush-lazy-load-js'></script>
    {{-- <script defer id="moove_gdpr_frontend-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbW9vdmVfZnJvbnRlbmRfZ2Rwcl9zY3JpcHRzID0geyJhamF4dXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJwb3N0X2lkIjoiMTUyNDgiLCJwbHVnaW5fZGlyIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9nZHByLWNvb2tpZS1jb21wbGlhbmNlIiwic2hvd19pY29ucyI6ImFsbCIsImlzX3BhZ2UiOiIxIiwic3RyaWN0X2luaXQiOiIxIiwiZW5hYmxlZF9kZWZhdWx0Ijp7InRoaXJkX3BhcnR5IjowLCJhZHZhbmNlZCI6MH0sImdlb19sb2NhdGlvbiI6ImZhbHNlIiwiZm9yY2VfcmVsb2FkIjoiZmFsc2UiLCJpc19zaW5nbGUiOiIiLCJoaWRlX3NhdmVfYnRuIjoiZmFsc2UiLCJjdXJyZW50X3VzZXIiOiIwIiwiY29va2llX2V4cGlyYXRpb24iOiIzNjUiLCJzY3JpcHRfZGVsYXkiOiIyMDAwIiwiY2xvc2VfYnRuX2FjdGlvbiI6IjEiLCJjbG9zZV9jc19hY3Rpb24iOiIxIiwiZ2Rwcl9zY29yIjoidHJ1ZSIsIndwX2xhbmciOiIifTsKLyogXV0+ICovCg=="></script> --}}
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/cache/autoptimize/js/autoptimize_single_8b26876dca36bf5540648fd67e6717237bcd.js?ver=4.8.3'
        id='moove_gdpr_frontend-js'></script>
    {{-- <script defer id="moove_gdpr_frontend-js-after" src="data:text/javascript;base64,CnZhciBnZHByX2NvbnNlbnRfX3N0cmljdCA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fdGhpcmRwYXJ0eSA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fYWR2YW5jZWQgPSAiZmFsc2UiCnZhciBnZHByX2NvbnNlbnRfX2Nvb2tpZXMgPSAiIgo="></script> --}}
    <script type='text/javascript' defer
        src='{{ $assetsUrl }}/wp-content/plugins/elementor-pro/assets/lib/lottie/lottie.min3f90.js?ver=5.6.6'
        id='lottie-js'></script>
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
    {{-- <script defer id="wp-i18n-js-after" src="data:text/javascript;base64,CndwLmkxOG4uc2V0TG9jYWxlRGF0YSggeyAndGV4dCBkaXJlY3Rpb25cdTAwMDRsdHInOiBbICdsdHInIF0gfSApOwo="></script>
<script defer id="elementor-pro-frontend-js-translations" src="data:text/javascript;base64,CiggZnVuY3Rpb24oIGRvbWFpbiwgdHJhbnNsYXRpb25zICkgewoJdmFyIGxvY2FsZURhdGEgPSB0cmFuc2xhdGlvbnMubG9jYWxlX2RhdGFbIGRvbWFpbiBdIHx8IHRyYW5zbGF0aW9ucy5sb2NhbGVfZGF0YS5tZXNzYWdlczsKCWxvY2FsZURhdGFbIiJdLmRvbWFpbiA9IGRvbWFpbjsKCXdwLmkxOG4uc2V0TG9jYWxlRGF0YSggbG9jYWxlRGF0YSwgZG9tYWluICk7Cn0gKSggImVsZW1lbnRvci1wcm8iLCB7ICJsb2NhbGVfZGF0YSI6IHsgIm1lc3NhZ2VzIjogeyAiIjoge30gfSB9IH0gKTsK"></script>
<script defer id="elementor-pro-frontend-js-before" src="data:text/javascript;base64,CnZhciBFbGVtZW50b3JQcm9Gcm9udGVuZENvbmZpZyA9IHsiYWpheHVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiI0MmM3MDllZjYxIiwidXJscyI6eyJhc3NldHMiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvci1wcm9cL2Fzc2V0c1wvIiwicmVzdCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtanNvblwvIn0sInNoYXJlQnV0dG9uc05ldHdvcmtzIjp7ImZhY2Vib29rIjp7InRpdGxlIjoiRmFjZWJvb2siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR3aXR0ZXIiOnsidGl0bGUiOiJUd2l0dGVyIn0sImxpbmtlZGluIjp7InRpdGxlIjoiTGlua2VkSW4iLCJoYXNfY291bnRlciI6dHJ1ZX0sInBpbnRlcmVzdCI6eyJ0aXRsZSI6IlBpbnRlcmVzdCIsImhhc19jb3VudGVyIjp0cnVlfSwicmVkZGl0Ijp7InRpdGxlIjoiUmVkZGl0IiwiaGFzX2NvdW50ZXIiOnRydWV9LCJ2ayI6eyJ0aXRsZSI6IlZLIiwiaGFzX2NvdW50ZXIiOnRydWV9LCJvZG5va2xhc3NuaWtpIjp7InRpdGxlIjoiT0siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR1bWJsciI6eyJ0aXRsZSI6IlR1bWJsciJ9LCJkaWdnIjp7InRpdGxlIjoiRGlnZyJ9LCJza3lwZSI6eyJ0aXRsZSI6IlNreXBlIn0sInN0dW1ibGV1cG9uIjp7InRpdGxlIjoiU3R1bWJsZVVwb24iLCJoYXNfY291bnRlciI6dHJ1ZX0sIm1peCI6eyJ0aXRsZSI6Ik1peCJ9LCJ0ZWxlZ3JhbSI6eyJ0aXRsZSI6IlRlbGVncmFtIn0sInBvY2tldCI6eyJ0aXRsZSI6IlBvY2tldCIsImhhc19jb3VudGVyIjp0cnVlfSwieGluZyI6eyJ0aXRsZSI6IlhJTkciLCJoYXNfY291bnRlciI6dHJ1ZX0sIndoYXRzYXBwIjp7InRpdGxlIjoiV2hhdHNBcHAifSwiZW1haWwiOnsidGl0bGUiOiJFbWFpbCJ9LCJwcmludCI6eyJ0aXRsZSI6IlByaW50In19LCJmYWNlYm9va19zZGsiOnsibGFuZyI6ImVuX1VTIiwiYXBwX2lkIjoiIn0sImxvdHRpZSI6eyJkZWZhdWx0QW5pbWF0aW9uVXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3ItcHJvXC9tb2R1bGVzXC9sb3R0aWVcL2Fzc2V0c1wvYW5pbWF0aW9uc1wvZGVmYXVsdC5qc29uIn19Owo="></script> --}}
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
    {{-- <script defer id="elementor-frontend-js-before" src="data:text/javascript;base64,CnZhciBlbGVtZW50b3JGcm9udGVuZENvbmZpZyA9IHsiZW52aXJvbm1lbnRNb2RlIjp7ImVkaXQiOmZhbHNlLCJ3cFByZXZpZXciOmZhbHNlLCJpc1NjcmlwdERlYnVnIjpmYWxzZX0sImkxOG4iOnsic2hhcmVPbkZhY2Vib29rIjoiU2hhcmUgb24gRmFjZWJvb2siLCJzaGFyZU9uVHdpdHRlciI6IlNoYXJlIG9uIFR3aXR0ZXIiLCJwaW5JdCI6IlBpbiBpdCIsImRvd25sb2FkIjoiRG93bmxvYWQiLCJkb3dubG9hZEltYWdlIjoiRG93bmxvYWQgaW1hZ2UiLCJmdWxsc2NyZWVuIjoiRnVsbHNjcmVlbiIsInpvb20iOiJab29tIiwic2hhcmUiOiJTaGFyZSIsInBsYXlWaWRlbyI6IlBsYXkgVmlkZW8iLCJwcmV2aW91cyI6IlByZXZpb3VzIiwibmV4dCI6Ik5leHQiLCJjbG9zZSI6IkNsb3NlIn0sImlzX3J0bCI6ZmFsc2UsImJyZWFrcG9pbnRzIjp7InhzIjowLCJzbSI6NDgwLCJtZCI6NzY4LCJsZyI6MTAyNSwieGwiOjE0NDAsInh4bCI6MTYwMH0sInJlc3BvbnNpdmUiOnsiYnJlYWtwb2ludHMiOnsibW9iaWxlIjp7ImxhYmVsIjoiTW9iaWxlIiwidmFsdWUiOjc2NywiZGVmYXVsdF92YWx1ZSI6NzY3LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwibW9iaWxlX2V4dHJhIjp7ImxhYmVsIjoiTW9iaWxlIEV4dHJhIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IEV4dHJhIiwidmFsdWUiOjEyMDAsImRlZmF1bHRfdmFsdWUiOjEyMDAsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwibGFwdG9wIjp7ImxhYmVsIjoiTGFwdG9wIiwidmFsdWUiOjEzNjYsImRlZmF1bHRfdmFsdWUiOjEzNjYsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwid2lkZXNjcmVlbiI6eyJsYWJlbCI6IldpZGVzY3JlZW4iLCJ2YWx1ZSI6MjQwMCwiZGVmYXVsdF92YWx1ZSI6MjQwMCwiZGlyZWN0aW9uIjoibWluIiwiaXNfZW5hYmxlZCI6ZmFsc2V9fX0sInZlcnNpb24iOiIzLjYuNCIsImlzX3N0YXRpYyI6ZmFsc2UsImV4cGVyaW1lbnRhbEZlYXR1cmVzIjp7ImVfaW1wb3J0X2V4cG9ydCI6dHJ1ZSwiZV9oaWRkZW5fd29yZHByZXNzX3dpZGdldHMiOnRydWUsInRoZW1lX2J1aWxkZXJfdjIiOnRydWUsImxhbmRpbmctcGFnZXMiOnRydWUsImVsZW1lbnRzLWNvbG9yLXBpY2tlciI6dHJ1ZSwiZmF2b3JpdGUtd2lkZ2V0cyI6dHJ1ZSwiYWRtaW4tdG9wLWJhciI6dHJ1ZSwicGFnZS10cmFuc2l0aW9ucyI6dHJ1ZSwiZm9ybS1zdWJtaXNzaW9ucyI6dHJ1ZSwiZV9zY3JvbGxfc25hcCI6dHJ1ZX0sInVybHMiOnsiYXNzZXRzIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3JcL2Fzc2V0c1wvIn0sInNldHRpbmdzIjp7InBhZ2UiOltdLCJlZGl0b3JQcmVmZXJlbmNlcyI6W119LCJraXQiOnsiYWN0aXZlX2JyZWFrcG9pbnRzIjpbInZpZXdwb3J0X21vYmlsZSIsInZpZXdwb3J0X3RhYmxldCJdLCJnbG9iYWxfaW1hZ2VfbGlnaHRib3giOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfY291bnRlciI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9mdWxsc2NyZWVuIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX3pvb20iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfc2hhcmUiOiJ5ZXMiLCJsaWdodGJveF90aXRsZV9zcmMiOiJ0aXRsZSIsImxpZ2h0Ym94X2Rlc2NyaXB0aW9uX3NyYyI6ImRlc2NyaXB0aW9uIn0sInBvc3QiOnsiaWQiOjE1MjQ4LCJ0aXRsZSI6IkFkdmVudHVzLmlvJTIwTW9iaWxlJTIwQXBwJTIwJTdDJTIwQWR2ZW50dXMuaW8iLCJleGNlcnB0IjoiIiwiZmVhdHVyZWRJbWFnZSI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMVwvMTBcL0FwcC1MYXVuY2gtXHUyMDEzLU1vY2t1cC1UaWxlLTEwMjR4MTAyNC5wbmcifX07Cg=="></script> --}}
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
