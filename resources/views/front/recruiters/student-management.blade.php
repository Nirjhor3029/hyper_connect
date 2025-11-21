@php
    $assetsUrl = asset('/assets/front/');
    // echo $assetsUrl;
@endphp

@extends('layouts.front.layout')

@push('styles')
    {{-- <title>Student Management | Adventus.io</title> --}}

    <meta property="og:title" content="Student Management | Adventus.io" />
    <meta property="og:description"
        content="STUDENT CRM Single view of your student Connect your student data 
        across all stages of the application process, and access it instantly. 
        Mobile app for counsellors on the go LEARN MORE Start actioning your leads faster Easily bring together leads from multiple sources 
        into one place. One platform, better teamwork Set status for each student [&hellip;]" />





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
        href='{{$assetsUrl}}/cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='custom-swiper-style-css'
        href='{{$assetsUrl}}/wp-content/plugins/adventus-elementor-widget/stylesa244.css?ver=1761897619' type='text/css'
        media='all' />
    <link rel='stylesheet' id='open-course-search-css-css'
        href='{{$assetsUrl}}/wp-content/plugins/open-course-sarch/css/open-course-search87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{$assetsUrl}}/wp-includes/css/dashicons.min87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventusio-style-min-css' href='{{$assetsUrl}}/wp-content/themes/adventusio/style8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-student-management-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/student-management8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-reecruiter-success-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/recruiter-success-story8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventus-institution-success-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/institution-success-story8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-official-css' href='{{$assetsUrl}}/../use.fontawesome.com/releases/v5.13.0/css/all.css'
        type='text/css' media='all' integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
        crossorigin="anonymous" />
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href='{{$assetsUrl}}/wp-content/plugins/elementor/assets/css/frontend-legacy.min5aed.css?ver=3.6.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{$assetsUrl}}/wp-content/plugins/elementor/assets/css/frontend.min5aed.css?ver=3.6.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='{{$assetsUrl}}/wp-content/uploads/elementor/css/post-8d6b7.css?ver=1738259458' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/css/frontend.min3ab2.css?ver=3.6.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{$assetsUrl}}/wp-content/uploads/elementor/css/globald6b7.css?ver=1738259458' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-4231-css'
        href='{{$assetsUrl}}/wp-content/uploads/elementor/css/post-4231a3fe.css?ver=1738419805' type='text/css' media='all' />
    <link rel='stylesheet' id='moove_gdpr_frontend-css'
        href='{{$assetsUrl}}/wp-content/plugins/gdpr-cookie-compliance/dist/styles/gdpr-main-nf7bcd.css?ver=4.8.3' type='text/css'
        media='all' />
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
        href='../../../use.fontawesome.com/releases/v5.13.0/css/v4-shims.css' type='text/css' media='all'
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
        href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css'
        media='all' />
    <script type='text/javascript' defer
        src='../../wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
    <script type='text/javascript' defer
        src='../../wp-content/cache/autoptimize/js/autoptimize_single_680f88afde01607aa81979d12c78c451.js'
        id='custom-swiper-script-js'></script>
    <script type='text/javascript' src='../../wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'>
    </script>
    <script type='text/javascript' defer src='../../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript' defer src='../../wp-content/themes/adventusio/js/lottie.mina244.js?ver=1761897619'
        id='adventus-lottie-min-js-js'></script>
    <link rel="https://api.w.org/" href="../../wp-json/index.html" />
    <link rel="alternate" type="application/json" href="../../wp-json/wp/v2/pages/4231.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.12" />
    <link rel='shortlink' href='../../indexdeb6.html?p=4231' />
    <link rel="alternate" type="application/json+oembed"
        href="../../wp-json/oembed/1.0/embedf490.json?url=https%3A%2F%2Fadventus.io%2Frecruiters%2Fstudent-management%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="../../wp-json/oembed/1.0/embed972f?url=https%3A%2F%2Fadventus.io%2Frecruiters%2Fstudent-management%2F&amp;format=xml" />
    <!-- DO NOT COPY THIS SNIPPET! Start of Page Analytics Tracking for HubSpot WordPress plugin v8.7.3-->
    <script defer
        src="data:text/javascript;base64,CgkJCQl2YXIgX2hzcSA9IF9oc3EgfHwgW107CgkJCQlfaHNxLnB1c2goWyJzZXRDb250ZW50VHlwZSIsICJzdGFuZGFyZC1wYWdlIl0pOwoJCQk=">
    </script>
    <!-- DO NOT COPY THIS SNIPPET! End of Page Analytics Tracking for HubSpot WordPress plugin -->
    <script defer
        src="data:text/javascript;base64,CgkJCQkoZnVuY3Rpb24oKSB7CgkJCQkJdmFyIGhic3B0ID0gd2luZG93Lmhic3B0ID0gd2luZG93Lmhic3B0IHx8IHt9OwoJCQkJCWhic3B0LmZvcm1zID0gaGJzcHQuZm9ybXMgfHwge307CgkJCQkJaGJzcHQuX3dwRm9ybXNRdWV1ZSA9IFtdOwoJCQkJCWhic3B0LmVucXVldWVGb3JtID0gZnVuY3Rpb24oZm9ybURlZikgewoJCQkJCQlpZiAoaGJzcHQuZm9ybXMgJiYgaGJzcHQuZm9ybXMuY3JlYXRlKSB7CgkJCQkJCQloYnNwdC5mb3Jtcy5jcmVhdGUoZm9ybURlZik7CgkJCQkJCX0gZWxzZSB7CgkJCQkJCQloYnNwdC5fd3BGb3Jtc1F1ZXVlLnB1c2goZm9ybURlZik7CgkJCQkJCX0KCQkJCQl9OwoJCQkJCWlmICghd2luZG93Lmhic3B0LmZvcm1zLmNyZWF0ZSkgewoJCQkJCQlPYmplY3QuZGVmaW5lUHJvcGVydHkod2luZG93Lmhic3B0LmZvcm1zLCAnY3JlYXRlJywgewoJCQkJCQkJY29uZmlndXJhYmxlOiB0cnVlLAoJCQkJCQkJZ2V0OiBmdW5jdGlvbigpIHsKCQkJCQkJCQlyZXR1cm4gaGJzcHQuX3dwQ3JlYXRlRm9ybTsKCQkJCQkJCX0sCgkJCQkJCQlzZXQ6IGZ1bmN0aW9uKHZhbHVlKSB7CgkJCQkJCQkJaGJzcHQuX3dwQ3JlYXRlRm9ybSA9IHZhbHVlOwoJCQkJCQkJCXdoaWxlIChoYnNwdC5fd3BGb3Jtc1F1ZXVlLmxlbmd0aCkgewoJCQkJCQkJCQl2YXIgZm9ybURlZiA9IGhic3B0Ll93cEZvcm1zUXVldWUuc2hpZnQoKTsKCQkJCQkJCQkJaWYgKCFkb2N1bWVudC5jdXJyZW50U2NyaXB0KSB7CgkJCQkJCQkJCQl2YXIgZm9ybVNjcmlwdElkID0gJ2xlYWRpbi1mb3Jtcy12Mi1qcyc7CgkJCQkJCQkJCQlodWJzcG90LnV0aWxzLmN1cnJlbnRTY3JpcHQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChmb3JtU2NyaXB0SWQpOwoJCQkJCQkJCQl9CgkJCQkJCQkJCWhic3B0Ll93cENyZWF0ZUZvcm0uY2FsbChoYnNwdC5mb3JtcywgZm9ybURlZik7CgkJCQkJCQkJfQoJCQkJCQkJfSwKCQkJCQkJfSk7CgkJCQkJfQoJCQkJfSkoKTsKCQkJ">
    </script>
    <script defer
        src="data:text/javascript;base64,CgkJCWRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5jbGFzc05hbWUgPSBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xhc3NOYW1lLnJlcGxhY2UoICduby1qcycsICdqcycgKTsKCQk=">
    </script>
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

    <!-- Meta Pixel Code -->
    <script defer
        src="data:text/javascript;base64,CiFmdW5jdGlvbihmLGIsZSx2LG4sdCxzKXtpZihmLmZicSlyZXR1cm47bj1mLmZicT1mdW5jdGlvbigpe24uY2FsbE1ldGhvZD8Kbi5jYWxsTWV0aG9kLmFwcGx5KG4sYXJndW1lbnRzKTpuLnF1ZXVlLnB1c2goYXJndW1lbnRzKX07aWYoIWYuX2ZicSlmLl9mYnE9bjsKbi5wdXNoPW47bi5sb2FkZWQ9ITA7bi52ZXJzaW9uPScyLjAnO24ucXVldWU9W107dD1iLmNyZWF0ZUVsZW1lbnQoZSk7dC5hc3luYz0hMDsKdC5zcmM9djtzPWIuZ2V0RWxlbWVudHNCeVRhZ05hbWUoZSlbMF07cy5wYXJlbnROb2RlLmluc2VydEJlZm9yZSh0LHMpfSh3aW5kb3csCmRvY3VtZW50LCdzY3JpcHQnLCdodHRwczovL2Nvbm5lY3QuZmFjZWJvb2submV0L2VuX1VTL2ZiZXZlbnRzLmpzJyk7Cg==">
    </script>
    <!-- End Meta Pixel Code -->
    <script defer
        src="data:text/javascript;base64,CiAgZmJxKCdpbml0JywgJzk0MzgzNjgzNjQ1MTAzOScsIHt9LCB7CiAgICAiYWdlbnQiOiAid29yZHByZXNzLTUuOS4xMi0zLjAuNyIKfSk7CiAg">
    </script>
    <script defer src="data:text/javascript;base64,CiAgZmJxKCd0cmFjaycsICdQYWdlVmlldycsIFtdKTsKICA="></script>
    <!-- Meta Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" alt="fbpx"
            src="https://www.facebook.com/tr?id=943836836451039&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <!-- Hotjar Tracking Code for adventus.io -->
    <script defer
        src="data:text/javascript;base64,CgkgICAgKGZ1bmN0aW9uKGgsbyx0LGosYSxyKXsKCSAgICAgICAgaC5oaj1oLmhqfHxmdW5jdGlvbigpeyhoLmhqLnE9aC5oai5xfHxbXSkucHVzaChhcmd1bWVudHMpfTsKCSAgICAgICAgaC5faGpTZXR0aW5ncz17aGppZDoyMjM5ODM2LGhqc3Y6Nn07CgkgICAgICAgIGE9by5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaGVhZCcpWzBdOwoJICAgICAgICByPW8uY3JlYXRlRWxlbWVudCgnc2NyaXB0Jyk7ci5hc3luYz0xOwoJICAgICAgICByLnNyYz10K2guX2hqU2V0dGluZ3MuaGppZCtqK2guX2hqU2V0dGluZ3MuaGpzdjsKCSAgICAgICAgYS5hcHBlbmRDaGlsZChyKTsKCSAgICB9KSh3aW5kb3csZG9jdW1lbnQsJ2h0dHBzOi8vc3RhdGljLmhvdGphci5jb20vYy9ob3RqYXItJywnLmpzP3N2PScpOwoJ">
    </script>

    <script defer src="../../../www.googleoptimize.com/optimize1d3d.js?id=OPT-NLXR3J6"></script>


    <meta name="facebook-domain-verification" content="6ouo0r7jj5qe286iomv7w7l3c8i5z2" />
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
    <article id="post-4231" class="post-4231 page type-page status-publish hentry">
        <div class="entry-content">
            <div data-elementor-type="wp-page" data-elementor-id="4231" class="elementor elementor-4231">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6fb90be elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="6fb90be" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c0a66ca"
                                        data-id="c0a66ca" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-baaf282 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="baaf282" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-091252e"
                                                                data-id="091252e" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-efe51eb margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="efe51eb" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <h1 style="font-size:14px;">STUDENT CRM
                                                                                    </h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-28f98d9 margin-0 elementor-widget elementor-widget-heading"
                                                                            data-id="28f98d9" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Single view of your student</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c62a660 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="c62a660" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Connect your student data across all
                                                                                        stages of the application process,
                                                                                        and access it instantly.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-92702bb max-w-800 elementor-widget elementor-widget-html"
                                                                            data-id="92702bb" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="student-mgmt-container"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d3ea865 lines elementor-widget elementor-widget-html"
                                                                            data-id="d3ea865" data-element_type="widget"
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
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-342653a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="342653a" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c6422f8"
                                        data-id="c6422f8" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-bb4bee9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="bb4bee9" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c4e48b7 elementor-hidden-phone"
                                                                data-id="c4e48b7" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-959a55d elementor-absolute elementor-widget elementor-widget-image"
                                                                            data-id="959a55d" data-element_type="widget"
                                                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img title="" alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/10/mobile-app-2.png"
                                                                                        class="lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            src="../../wp-content/uploads/2021/10/mobile-app-2.png"
                                                                                            title=""
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2e9148f"
                                                                data-id="2e9148f" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5886f1c margin-0 rm-margin elementor-widget elementor-widget-heading"
                                                                            data-id="5886f1c" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Mobile app for <br>counsellors on the go
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-0c0e5af elementor-align-center elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                                            data-id="0c0e5af" data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="../../adventus-io-mobile-app/index.html"
                                                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                                                        role="button">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">LEARN
                                                                                                MORE</span>
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-edff285 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="edff285" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-191c2ba"
                                        data-id="191c2ba" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3e29af9 lines white elementor-widget elementor-widget-html"
                                                    data-id="3e29af9" data-element_type="widget"
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ca81c78 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ca81c78" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-19148e0"
                                                                data-id="19148e0" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5135410 margin-0 max-w-500 elementor-widget elementor-widget-heading"
                                                                            data-id="5135410" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Start actioning your leads faster</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-af6f139 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="af6f139" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2fbe236"
                                                                data-id="2fbe236" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-8515ce0 margin-0 max-w-300 elementor-widget elementor-widget-text-editor"
                                                                            data-id="8515ce0" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Easily bring together leads from
                                                                                        multiple sources into one place.</p>
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0b51459 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0b51459" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8caea4"
                                                                data-id="f8caea4" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-190bcc4 elementor-widget elementor-widget-html"
                                                                            data-id="190bcc4" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="ss-importer"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5f7cf15"
                                                                data-id="5f7cf15" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-a8eb5f0 elementor-widget elementor-widget-html"
                                                                            data-id="a8eb5f0" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="fb-integration"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-4214ae5 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="4214ae5" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c24c2d5"
                                                                data-id="c24c2d5" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-6021a1c margin-0 max-w-500 elementor-widget elementor-widget-heading"
                                                                            data-id="6021a1c" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    One platform, better teamwork</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-86db525 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="86db525" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f92a5f9"
                                                                data-id="f92a5f9" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-723135f margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="723135f" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Set status for each student</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7b0c1ef"
                                                                data-id="7b0c1ef" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-280c7b8 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="280c7b8" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Pause students to eliminate confusion
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d1c9b3a"
                                                                data-id="d1c9b3a" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7d3f99a margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="7d3f99a" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Separate workspaces for each
                                                                                        counsellor</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d03785f"
                                                                data-id="d03785f" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-f6f7872 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="f6f7872" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Full picture view for managers</p>
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-b5ab788 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="b5ab788" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-19eea42"
                                                                data-id="19eea42" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-f3a46ab margin-0 max-w-500 elementor-widget elementor-widget-heading"
                                                                            data-id="f3a46ab" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Teams change, but your records shouldn’t
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-735387f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="735387f" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cdd7af2"
                                                                data-id="cdd7af2" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-d671a4d margin-0 max-w-400 elementor-widget elementor-widget-text-editor"
                                                                            data-id="d671a4d" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>When your counsellors leave, it’s
                                                                                        easy to lose track and get slowed
                                                                                        down. Stay organised by keeping your
                                                                                        student data in one secure place.
                                                                                    </p>
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-9796640 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                    data-id="9796640" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e826927"
                                                                data-id="e826927" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-ad19267 elementor-widget elementor-widget-image"
                                                                            data-id="ad19267" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="1" height="1"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/records.svg"
                                                                                        class="attachment-full size-full lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="1" height="1"
                                                                                            src="../../wp-content/uploads/2020/11/records.svg"
                                                                                            class="attachment-full size-full"
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6c684c6 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="6c684c6" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3daffde"
                                        data-id="3daffde" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-830e758 lines elementor-widget elementor-widget-html"
                                                    data-id="830e758" data-element_type="widget"
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-8e3f1bb elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="8e3f1bb" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4092e3e"
                                                                data-id="4092e3e" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7e306ad accent elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                            data-id="7e306ad" data-element_type="widget"
                                                                            data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
                                                                                    <span
                                                                                        class="elementor-divider-separator">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-519db5e margin-0 elementor-widget elementor-widget-heading"
                                                                            data-id="519db5e" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Protecting your data is important to us
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-9314d25 elementor-widget elementor-widget-button"
                                                                            data-id="9314d25" data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="../security/index.html"
                                                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                                                        role="button">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">LEARN
                                                                                                HOW</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-56e87bb"
                                                                data-id="56e87bb" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-ce29b94 elementor-widget elementor-widget-image"
                                                                            data-id="ce29b94" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/protect.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/protect.svg"
                                                                                            class="attachment-large size-large"
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-77b1e9a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="77b1e9a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b8d0813"
                                        data-id="b8d0813" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0b3bf18 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0b3bf18" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0e3a037"
                                                                data-id="0e3a037" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-581638b elementor-widget elementor-widget-heading"
                                                                            data-id="581638b" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Trusted by <span
                                                                                        class="agent-count">7,000</span>+
                                                                                    recruiters worldwide</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f148c54 max-width-650 elementor-widget elementor-widget-text-editor"
                                                                            data-id="f148c54" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>“<span
                                                                                            style="font-weight: 400;">This
                                                                                            [marketplace] gives us the
                                                                                            opportunity to keep students
                                                                                            motivated with the latest
                                                                                            information from universities
                                                                                            around the world. It will be
                                                                                            extremely useful to guide
                                                                                            students in the easiest
                                                                                            way.&#8221;</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-10d6f57 elementor-widget elementor-widget-text-editor"
                                                                            data-id="10d6f57" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>FRIENDS FIRST CAMPUS – INDIA</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-d98f6a7 lines elementor-widget elementor-widget-html"
                                                    data-id="d98f6a7" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-a476b8e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="a476b8e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6e9982f"
                                        data-id="6e9982f" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7e30ed6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="7e30ed6" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-08efd83 margin-0"
                                                                data-id="08efd83" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-85deb5e rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="85deb5e" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>FREQUENTLY ASKED</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-955fe23 elementor-widget elementor-widget-heading"
                                                                            data-id="955fe23" data-element_type="widget"
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
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c8597db"
                                                                data-id="c8597db" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-b4fdb9d accordion-yellow hide-first elementor-widget elementor-widget-accordion"
                                                                            data-id="b4fdb9d" data-element_type="widget"
                                                                            data-widget_type="accordion.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-accordion"
                                                                                    role="tablist">
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1891"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="1" role="tab"
                                                                                            aria-controls="elementor-tab-content-1891"
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
                                                                                        <div id="elementor-tab-content-1891"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="1" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1891">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1892"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="2" role="tab"
                                                                                            aria-controls="elementor-tab-content-1892"
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
                                                                                                href="#">How many
                                                                                                students can I add to the
                                                                                                platform?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1892"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="2" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1892">
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">Unlimited.
                                                                                                    The platform works great
                                                                                                    as a student CRM to keep
                                                                                                    track of all your leads
                                                                                                    and confirmed students.
                                                                                                    So we encourage you to
                                                                                                    add as many students as
                                                                                                    you like.</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1893"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="3" role="tab"
                                                                                            aria-controls="elementor-tab-content-1893"
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
                                                                                                href="#">Can my
                                                                                                student go directly to you
                                                                                                for counselling?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1893"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="3" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1893">
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">No.
                                                                                                    We don’t work with
                                                                                                    students directly. We
                                                                                                    are simply a platform
                                                                                                    for other recruiters to
                                                                                                    use and counsel
                                                                                                    student. </span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1894"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="4" role="tab"
                                                                                            aria-controls="elementor-tab-content-1894"
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
                                                                                                href="#">Will the
                                                                                                Student Portal allow my
                                                                                                students to apply
                                                                                                directly?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1894"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="4" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1894">
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">No.
                                                                                                    The Student Portal is
                                                                                                    only a communication
                                                                                                    tool to help you counsel
                                                                                                    your students with ease.
                                                                                                    Particularly during
                                                                                                    these COVID times when
                                                                                                    many students are
                                                                                                    reluctant to have
                                                                                                    in-person meetings.
                                                                                                </span></p>
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">Students
                                                                                                    cannot use the portal to
                                                                                                    directly submit
                                                                                                    applications. They still
                                                                                                    need you.</span></p>
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
                                                <div class="elementor-element elementor-element-3f3ee08 lines elementor-widget elementor-widget-html"
                                                    data-id="3f3ee08" data-element_type="widget"
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
            </div>
        </div><!-- .entry-content -->
    </article><!-- #post-4231 -->
@endsection

@push('scripts')


<script defer src="data:text/javascript;base64,CiAgICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lciggJ3dwY2Y3bWFpbHNlbnQnLCBmdW5jdGlvbiggZXZlbnQgKSB7CiAgICAgICAgaWYoICJmYl9weGxfY29kZSIgaW4gZXZlbnQuZGV0YWlsLmFwaVJlc3BvbnNlKXsKICAgICAgICAgIGV2YWwoZXZlbnQuZGV0YWlsLmFwaVJlc3BvbnNlLmZiX3B4bF9jb2RlKTsKICAgICAgICB9CiAgICAgIH0sIGZhbHNlICk7CiAgICA="></script>
    <!-- End Meta Pixel Event Code -->
    <div id='fb-pxl-ajax-code'></div><link rel='stylesheet' id='e-animations-css'  href='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/animations/animations.min5aed.css?ver=3.6.4' type='text/css' media='all' />
<script defer id="leadin-script-loader-js-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbGVhZGluX3dvcmRwcmVzcyA9IHsidXNlclJvbGUiOiJ2aXNpdG9yIiwicGFnZVR5cGUiOiJwYWdlIiwibGVhZGluUGx1Z2luVmVyc2lvbiI6IjguNy4zIn07Ci8qIF1dPiAqLwo="></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/js.hs-scripts.com/20616828a466.js?integration=WordPress' async defer id='hs-script-loader'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_7a5024b25d32066a41f07aa72f43adde.js' id='open-course-search-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/gsap/gsap.mina244.js?ver=1761897619' id='gsap-tweenmax-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/gsap/Draggable.mina244.js?ver=1761897619' id='gsap-draggable-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_f47e8e64e5f1a3e934b5fcdfe5d4f7918a54.js?ver=1.0.0' id='adventusio-navigation-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_26036e4be38edb295cd25a7c06ba89398a54.js?ver=1.0.0' id='adventusio-skip-link-focus-fix-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/script.mina244.js?ver=1761897619' id='adventus-min-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_e0f8bcd10939756a4716cfdc9c7c0aeea244.js?ver=1761897619' id='adventus-global-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/gsap/TextPlugin.mina244.js?ver=1761897619' id='gsap-textplugin-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_543e8912e2e503b3bbf09298e646d5d7a244.js?ver=1761897619' id='adventus-student-mgmt-svg-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_18caf46237dbacda9a4d983f8e043856a244.js?ver=1761897619' id='adventus-ssimporter-svg-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_340be438ec1fbb486af7862a98f01d44a244.js?ver=1761897619' id='adventus-reecruiter-success-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.minc063.js?ver=3.9.5' id='smush-lazy-load-js'></script>
<script defer id="moove_gdpr_frontend-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbW9vdmVfZnJvbnRlbmRfZ2Rwcl9zY3JpcHRzID0geyJhamF4dXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJwb3N0X2lkIjoiNDIzMSIsInBsdWdpbl9kaXIiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2dkcHItY29va2llLWNvbXBsaWFuY2UiLCJzaG93X2ljb25zIjoiYWxsIiwiaXNfcGFnZSI6IjEiLCJzdHJpY3RfaW5pdCI6IjEiLCJlbmFibGVkX2RlZmF1bHQiOnsidGhpcmRfcGFydHkiOjAsImFkdmFuY2VkIjowfSwiZ2VvX2xvY2F0aW9uIjoiZmFsc2UiLCJmb3JjZV9yZWxvYWQiOiJmYWxzZSIsImlzX3NpbmdsZSI6IiIsImhpZGVfc2F2ZV9idG4iOiJmYWxzZSIsImN1cnJlbnRfdXNlciI6IjAiLCJjb29raWVfZXhwaXJhdGlvbiI6IjM2NSIsInNjcmlwdF9kZWxheSI6IjIwMDAiLCJjbG9zZV9idG5fYWN0aW9uIjoiMSIsImNsb3NlX2NzX2FjdGlvbiI6IjEiLCJnZHByX3Njb3IiOiJ0cnVlIiwid3BfbGFuZyI6IiJ9OwovKiBdXT4gKi8K"></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_8b26876dca36bf5540648fd67e6717237bcd.js?ver=4.8.3' id='moove_gdpr_frontend-js'></script>
<script defer id="moove_gdpr_frontend-js-after" src="data:text/javascript;base64,CnZhciBnZHByX2NvbnNlbnRfX3N0cmljdCA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fdGhpcmRwYXJ0eSA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fYWR2YW5jZWQgPSAiZmFsc2UiCnZhciBnZHByX2NvbnNlbnRfX2Nvb2tpZXMgPSAiIgo="></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min3ab2.js?ver=3.6.5' id='elementor-pro-webpack-runtime-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/webpack.runtime.min5aed.js?ver=3.6.4' id='elementor-webpack-runtime-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/frontend-modules.min5aed.js?ver=3.6.4' id='elementor-frontend-modules-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/hooks.min8cbb.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/i18n.mina28b.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
<script defer id="wp-i18n-js-after" src="data:text/javascript;base64,CndwLmkxOG4uc2V0TG9jYWxlRGF0YSggeyAndGV4dCBkaXJlY3Rpb25cdTAwMDRsdHInOiBbICdsdHInIF0gfSApOwo="></script>
<script defer id="elementor-pro-frontend-js-translations" src="data:text/javascript;base64,CiggZnVuY3Rpb24oIGRvbWFpbiwgdHJhbnNsYXRpb25zICkgewoJdmFyIGxvY2FsZURhdGEgPSB0cmFuc2xhdGlvbnMubG9jYWxlX2RhdGFbIGRvbWFpbiBdIHx8IHRyYW5zbGF0aW9ucy5sb2NhbGVfZGF0YS5tZXNzYWdlczsKCWxvY2FsZURhdGFbIiJdLmRvbWFpbiA9IGRvbWFpbjsKCXdwLmkxOG4uc2V0TG9jYWxlRGF0YSggbG9jYWxlRGF0YSwgZG9tYWluICk7Cn0gKSggImVsZW1lbnRvci1wcm8iLCB7ICJsb2NhbGVfZGF0YSI6IHsgIm1lc3NhZ2VzIjogeyAiIjoge30gfSB9IH0gKTsK"></script>
<script defer id="elementor-pro-frontend-js-before" src="data:text/javascript;base64,CnZhciBFbGVtZW50b3JQcm9Gcm9udGVuZENvbmZpZyA9IHsiYWpheHVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiI0MmM3MDllZjYxIiwidXJscyI6eyJhc3NldHMiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvci1wcm9cL2Fzc2V0c1wvIiwicmVzdCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtanNvblwvIn0sInNoYXJlQnV0dG9uc05ldHdvcmtzIjp7ImZhY2Vib29rIjp7InRpdGxlIjoiRmFjZWJvb2siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR3aXR0ZXIiOnsidGl0bGUiOiJUd2l0dGVyIn0sImxpbmtlZGluIjp7InRpdGxlIjoiTGlua2VkSW4iLCJoYXNfY291bnRlciI6dHJ1ZX0sInBpbnRlcmVzdCI6eyJ0aXRsZSI6IlBpbnRlcmVzdCIsImhhc19jb3VudGVyIjp0cnVlfSwicmVkZGl0Ijp7InRpdGxlIjoiUmVkZGl0IiwiaGFzX2NvdW50ZXIiOnRydWV9LCJ2ayI6eyJ0aXRsZSI6IlZLIiwiaGFzX2NvdW50ZXIiOnRydWV9LCJvZG5va2xhc3NuaWtpIjp7InRpdGxlIjoiT0siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR1bWJsciI6eyJ0aXRsZSI6IlR1bWJsciJ9LCJkaWdnIjp7InRpdGxlIjoiRGlnZyJ9LCJza3lwZSI6eyJ0aXRsZSI6IlNreXBlIn0sInN0dW1ibGV1cG9uIjp7InRpdGxlIjoiU3R1bWJsZVVwb24iLCJoYXNfY291bnRlciI6dHJ1ZX0sIm1peCI6eyJ0aXRsZSI6Ik1peCJ9LCJ0ZWxlZ3JhbSI6eyJ0aXRsZSI6IlRlbGVncmFtIn0sInBvY2tldCI6eyJ0aXRsZSI6IlBvY2tldCIsImhhc19jb3VudGVyIjp0cnVlfSwieGluZyI6eyJ0aXRsZSI6IlhJTkciLCJoYXNfY291bnRlciI6dHJ1ZX0sIndoYXRzYXBwIjp7InRpdGxlIjoiV2hhdHNBcHAifSwiZW1haWwiOnsidGl0bGUiOiJFbWFpbCJ9LCJwcmludCI6eyJ0aXRsZSI6IlByaW50In19LCJmYWNlYm9va19zZGsiOnsibGFuZyI6ImVuX1VTIiwiYXBwX2lkIjoiIn0sImxvdHRpZSI6eyJkZWZhdWx0QW5pbWF0aW9uVXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3ItcHJvXC9tb2R1bGVzXC9sb3R0aWVcL2Fzc2V0c1wvYW5pbWF0aW9uc1wvZGVmYXVsdC5qc29uIn19Owo="></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/js/frontend.min3ab2.js?ver=3.6.5' id='elementor-pro-frontend-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/share-link/share-link.min5aed.js?ver=3.6.4' id='share-link-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0' id='elementor-dialog-js'></script>
<script defer id="elementor-frontend-js-before" src="data:text/javascript;base64,CnZhciBlbGVtZW50b3JGcm9udGVuZENvbmZpZyA9IHsiZW52aXJvbm1lbnRNb2RlIjp7ImVkaXQiOmZhbHNlLCJ3cFByZXZpZXciOmZhbHNlLCJpc1NjcmlwdERlYnVnIjpmYWxzZX0sImkxOG4iOnsic2hhcmVPbkZhY2Vib29rIjoiU2hhcmUgb24gRmFjZWJvb2siLCJzaGFyZU9uVHdpdHRlciI6IlNoYXJlIG9uIFR3aXR0ZXIiLCJwaW5JdCI6IlBpbiBpdCIsImRvd25sb2FkIjoiRG93bmxvYWQiLCJkb3dubG9hZEltYWdlIjoiRG93bmxvYWQgaW1hZ2UiLCJmdWxsc2NyZWVuIjoiRnVsbHNjcmVlbiIsInpvb20iOiJab29tIiwic2hhcmUiOiJTaGFyZSIsInBsYXlWaWRlbyI6IlBsYXkgVmlkZW8iLCJwcmV2aW91cyI6IlByZXZpb3VzIiwibmV4dCI6Ik5leHQiLCJjbG9zZSI6IkNsb3NlIn0sImlzX3J0bCI6ZmFsc2UsImJyZWFrcG9pbnRzIjp7InhzIjowLCJzbSI6NDgwLCJtZCI6NzY4LCJsZyI6MTAyNSwieGwiOjE0NDAsInh4bCI6MTYwMH0sInJlc3BvbnNpdmUiOnsiYnJlYWtwb2ludHMiOnsibW9iaWxlIjp7ImxhYmVsIjoiTW9iaWxlIiwidmFsdWUiOjc2NywiZGVmYXVsdF92YWx1ZSI6NzY3LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwibW9iaWxlX2V4dHJhIjp7ImxhYmVsIjoiTW9iaWxlIEV4dHJhIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IEV4dHJhIiwidmFsdWUiOjEyMDAsImRlZmF1bHRfdmFsdWUiOjEyMDAsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwibGFwdG9wIjp7ImxhYmVsIjoiTGFwdG9wIiwidmFsdWUiOjEzNjYsImRlZmF1bHRfdmFsdWUiOjEzNjYsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwid2lkZXNjcmVlbiI6eyJsYWJlbCI6IldpZGVzY3JlZW4iLCJ2YWx1ZSI6MjQwMCwiZGVmYXVsdF92YWx1ZSI6MjQwMCwiZGlyZWN0aW9uIjoibWluIiwiaXNfZW5hYmxlZCI6ZmFsc2V9fX0sInZlcnNpb24iOiIzLjYuNCIsImlzX3N0YXRpYyI6ZmFsc2UsImV4cGVyaW1lbnRhbEZlYXR1cmVzIjp7ImVfaW1wb3J0X2V4cG9ydCI6dHJ1ZSwiZV9oaWRkZW5fd29yZHByZXNzX3dpZGdldHMiOnRydWUsInRoZW1lX2J1aWxkZXJfdjIiOnRydWUsImxhbmRpbmctcGFnZXMiOnRydWUsImVsZW1lbnRzLWNvbG9yLXBpY2tlciI6dHJ1ZSwiZmF2b3JpdGUtd2lkZ2V0cyI6dHJ1ZSwiYWRtaW4tdG9wLWJhciI6dHJ1ZSwicGFnZS10cmFuc2l0aW9ucyI6dHJ1ZSwiZm9ybS1zdWJtaXNzaW9ucyI6dHJ1ZSwiZV9zY3JvbGxfc25hcCI6dHJ1ZX0sInVybHMiOnsiYXNzZXRzIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3JcL2Fzc2V0c1wvIn0sInNldHRpbmdzIjp7InBhZ2UiOltdLCJlZGl0b3JQcmVmZXJlbmNlcyI6W119LCJraXQiOnsiYWN0aXZlX2JyZWFrcG9pbnRzIjpbInZpZXdwb3J0X21vYmlsZSIsInZpZXdwb3J0X3RhYmxldCJdLCJnbG9iYWxfaW1hZ2VfbGlnaHRib3giOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfY291bnRlciI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9mdWxsc2NyZWVuIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX3pvb20iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfc2hhcmUiOiJ5ZXMiLCJsaWdodGJveF90aXRsZV9zcmMiOiJ0aXRsZSIsImxpZ2h0Ym94X2Rlc2NyaXB0aW9uX3NyYyI6ImRlc2NyaXB0aW9uIn0sInBvc3QiOnsiaWQiOjQyMzEsInRpdGxlIjoiU3R1ZGVudCUyME1hbmFnZW1lbnQlMjAlN0MlMjBBZHZlbnR1cy5pbyIsImV4Y2VycHQiOiIiLCJmZWF0dXJlZEltYWdlIjpmYWxzZX19Owo="></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/frontend.min5aed.js?ver=3.6.4' id='elementor-frontend-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min3ab2.js?ver=3.6.5' id='pro-preloaded-elements-handlers-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/preloaded-modules.min5aed.js?ver=3.6.4' id='preloaded-modules-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min3ab2.js?ver=3.6.5' id='e-sticky-js'></script>


@endpush
