@php
    $assetsUrl = asset('/assets/front/');
    // echo $assetsUrl;
@endphp

@extends('layouts.front.layout')

@push('styles')
    <title>Support &amp; Training | Adventus.io</title>

    <meta property="og:description"
        content="SUPPORT &amp; TRAINING Our team is your team We’re here to support you with the heavy lifting, 
    so you can focus on your students. Customer support Our Client Relationship Officers and Regional Managers are your local points of contact 
    to help you with anything you need. Counsellor training Our destination and institution specialists conduct regular [&hellip;]" />



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
        href='{{$assetsUrl}}/cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min87ed.css?ver=5.9.12' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-swiper-style-css'
        href='{{$assetsUrl}}/wp-content/plugins/adventus-elementor-widget/stylesad8c.css?ver=1761890394' type='text/css'
        media='all' />
    <link rel='stylesheet' id='open-course-search-css-css'
        href='{{$assetsUrl}}/wp-content/plugins/open-course-sarch/css/open-course-search87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{$assetsUrl}}/wp-includes/css/dashicons.min87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventusio-style-min-css' href='{{$assetsUrl}}/wp-content/themes/adventusio/style8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-support-training-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/support-training8a54.css?ver=1.0.0' type='text/css' media='all' />
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
    <link rel='stylesheet' id='elementor-post-4703-css'
        href='{{$assetsUrl}}/wp-content/uploads/elementor/css/post-4703ef71.css?ver=1738391994' type='text/css' media='all' />
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
        href='{{$assetsUrl}}/use.fontawesome.com/releases/v5.13.0/css/v4-shims.css' type='text/css' media='all'
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
        href='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css'
        media='all' />
    <script type='text/javascript' defer
        src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
    <script type='text/javascript' defer
        src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_680f88afde01607aa81979d12c78c451.js'
        id='custom-swiper-script-js'></script>
    <script type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'>
    </script>
    <script type='text/javascript' defer src='{{$assetsUrl}}/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/lottie.minad8c.js?ver=1761890394'
        id='adventus-lottie-min-js-js'></script>
    <link rel="https://api.w.org/" href="{{$assetsUrl}}/wp-json/index.html" />
    <link rel="alternate" type="application/json" href="{{$assetsUrl}}/wp-json/wp/v2/pages/4703.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{$assetsUrl}}/xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{$assetsUrl}}/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.12" />
    <link rel='shortlink' href='{{$assetsUrl}}/indexebc9.html?p=4703' />
    <link rel="alternate" type="application/json+oembed"
        href="{{$assetsUrl}}/wp-json/oembed/1.0/embed404d.json?url=https%3A%2F%2Fadventus.io%2Frecruiters%2Fsupport-training%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{$assetsUrl}}/wp-json/oembed/1.0/embed153b?url=https%3A%2F%2Fadventus.io%2Frecruiters%2Fsupport-training%2F&amp;format=xml" />
    


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
    

    <script defer src="{{$assetsUrl}}/www.googleoptimize.com/optimize1d3d.js?id=OPT-NLXR3J6"></script>


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
    <article id="post-4703" class="post-4703 page type-page status-publish hentry">
        <div class="entry-content">
            <div data-elementor-type="wp-page" data-elementor-id="4703" class="elementor elementor-4703">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-e99a19b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="e99a19b" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92b9a1e"
                                        data-id="92b9a1e" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-520b745 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="520b745" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bae6fcf"
                                                                data-id="bae6fcf" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-d707e47 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="d707e47" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <h1 style="font-size:14px;">SUPPORT
                                                                                        &amp; TRAINING</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-0f1a50c margin-0 elementor-widget elementor-widget-heading"
                                                                            data-id="0f1a50c" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Our team is your team</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6b9dd96 margin-0 max-w-525 elementor-widget elementor-widget-text-editor"
                                                                            data-id="6b9dd96" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>We’re here to support you with the
                                                                                        heavy lifting, so you can focus on
                                                                                        your students.</p>
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ef451de elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ef451de" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e4f0012"
                                                                data-id="e4f0012" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-0d7c851 accordion-green elementor-widget elementor-widget-accordion"
                                                                            data-id="0d7c851" data-element_type="widget"
                                                                            id="team-accordion"
                                                                            data-widget_type="accordion.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-accordion"
                                                                                    role="tablist">
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1411"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="1" role="tab"
                                                                                            aria-controls="elementor-tab-content-1411"
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
                                                                                                href="#">Customer
                                                                                                support</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1411"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="1" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1411">
                                                                                            <p>Our Client Relationship
                                                                                                Officers and Regional
                                                                                                Managers are your local
                                                                                                points of contact to help
                                                                                                you with anything you need.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1412"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="2" role="tab"
                                                                                            aria-controls="elementor-tab-content-1412"
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
                                                                                                href="#">Counsellor
                                                                                                training</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1412"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="2" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1412">
                                                                                            <p>Our destination and
                                                                                                institution specialists
                                                                                                conduct regular training to
                                                                                                keep you informed.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1413"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="3" role="tab"
                                                                                            aria-controls="elementor-tab-content-1413"
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
                                                                                                href="#">Admissions
                                                                                                support</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1413"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="3" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1413">
                                                                                            <p>From entry requirements to
                                                                                                institution guidance, our
                                                                                                Admissions team guide your
                                                                                                through your options.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1414"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="4" role="tab"
                                                                                            aria-controls="elementor-tab-content-1414"
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
                                                                                                href="#">Quality,
                                                                                                compliance & visa</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1414"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="4" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1414">
                                                                                            <p>Our dedicated QCV team will
                                                                                                help you achieve application
                                                                                                and visa success.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-1415"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="5" role="tab"
                                                                                            aria-controls="elementor-tab-content-1415"
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
                                                                                                href="#">Account &
                                                                                                finance support</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-1415"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="5" role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-1415">
                                                                                            <p>We help you easily manage
                                                                                                your account and commission
                                                                                                payments.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-397def4 elementor-widget elementor-widget-html"
                                                                            data-id="397def4" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <script defer
                                                                                    src="data:text/javascript;base64,CmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oJCkgewogICAgLy9mb3IgKHZhciBpID0gMTsgaSA8IDY7IGkrKykgewogICAgICAgICQoIiN0ZWFtLWFjY29yZGlvbiAuZWxlbWVudG9yLWFjY29yZGlvbi1pdGVtOm50aC1jaGlsZCgxKSIpLmNsaWNrKGZ1bmN0aW9uKCkgewogICAgICAgICAgICAkKCIudGVhbS1pbWciKS5hZGRDbGFzcygiaGlkZSIpOwogICAgICAgICAgICAkKCIjdGVhbS0wMSIpLnJlbW92ZUNsYXNzKCJoaWRlIik7CiAgICAgICAgfSk7CiAgICAgICAgJCgiI3RlYW0tYWNjb3JkaW9uIC5lbGVtZW50b3ItYWNjb3JkaW9uLWl0ZW06bnRoLWNoaWxkKDIpIikuY2xpY2soZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICQoIi50ZWFtLWltZyIpLmFkZENsYXNzKCJoaWRlIik7CiAgICAgICAgICAgICQoIiN0ZWFtLTAyIikucmVtb3ZlQ2xhc3MoImhpZGUiKTsKICAgICAgICB9KTsKICAgICAgICAkKCIjdGVhbS1hY2NvcmRpb24gLmVsZW1lbnRvci1hY2NvcmRpb24taXRlbTpudGgtY2hpbGQoMykiKS5jbGljayhmdW5jdGlvbigpIHsKICAgICAgICAgICAgJCgiLnRlYW0taW1nIikuYWRkQ2xhc3MoImhpZGUiKTsKICAgICAgICAgICAgJCgiI3RlYW0tMDMiKS5yZW1vdmVDbGFzcygiaGlkZSIpOwogICAgICAgIH0pOwogICAgICAgICQoIiN0ZWFtLWFjY29yZGlvbiAuZWxlbWVudG9yLWFjY29yZGlvbi1pdGVtOm50aC1jaGlsZCg0KSIpLmNsaWNrKGZ1bmN0aW9uKCkgewogICAgICAgICAgICAkKCIudGVhbS1pbWciKS5hZGRDbGFzcygiaGlkZSIpOwogICAgICAgICAgICAkKCIjdGVhbS0wNCIpLnJlbW92ZUNsYXNzKCJoaWRlIik7CiAgICAgICAgfSk7CiAgICAgICAgJCgiI3RlYW0tYWNjb3JkaW9uIC5lbGVtZW50b3ItYWNjb3JkaW9uLWl0ZW06bnRoLWNoaWxkKDUpIikuY2xpY2soZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICQoIi50ZWFtLWltZyIpLmFkZENsYXNzKCJoaWRlIik7CiAgICAgICAgICAgICQoIiN0ZWFtLTA1IikucmVtb3ZlQ2xhc3MoImhpZGUiKTsKICAgICAgICB9KTsKICAgLy8gfQp9KTsK">
                                                                                </script>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1806ac2"
                                                                data-id="1806ac2" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-4348316 team-img elementor-widget elementor-widget-image"
                                                                            data-id="4348316" data-element_type="widget"
                                                                            id="team-01"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/support1.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2021/06/support1.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-40f15c6 team-img hide elementor-widget elementor-widget-image"
                                                                            data-id="40f15c6" data-element_type="widget"
                                                                            id="team-02"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/counsellor-training.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/counsellor-training.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-fc1b4f7 team-img hide elementor-widget elementor-widget-image"
                                                                            data-id="fc1b4f7" data-element_type="widget"
                                                                            id="team-03"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/qcv.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/qcv.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-79f93fa team-img hide elementor-widget elementor-widget-image"
                                                                            data-id="79f93fa" data-element_type="widget"
                                                                            id="team-04"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/admissions-support.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/admissions-support.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-5da699b team-img hide elementor-widget elementor-widget-image"
                                                                            data-id="5da699b" data-element_type="widget"
                                                                            id="team-05"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/support5.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2021/06/support5.svg"
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
                                                <div class="elementor-element elementor-element-db75417 lines elementor-widget elementor-widget-html"
                                                    data-id="db75417" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-6e2338a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="6e2338a" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9b5dfb"
                                        data-id="f9b5dfb" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-8979c43 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="8979c43" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3965ee9"
                                                                data-id="3965ee9" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-15b1014 elementor-widget elementor-widget-heading"
                                                                            data-id="15b1014" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Get answers in real time</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5d718ae elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="5d718ae" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-b2fa29f grid-padding"
                                                                data-id="b2fa29f" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-06f5ff5 elementor-widget elementor-widget-spacer"
                                                                            data-id="06f5ff5" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-7d041b2 grid-3-with-gap"
                                                                data-id="7d041b2" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-95fc8b7 elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="95fc8b7" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <div class="elementor-icon">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            id="Layer_1"
                                                                                            data-name="Layer 1"
                                                                                            viewBox="0 0 90.95 109.84">
                                                                                            <path
                                                                                                d="M48.15,68.59a3.35,3.35,0,1,0-4.42-1.68A3.35,3.35,0,0,0,48.15,68.59Z"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path d="M46.79,41V62"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M46.79,100.64A35.09,35.09,0,1,0,11.7,65.55,35.09,35.09,0,0,0,46.79,100.64Z"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M46.79,110A44.48,44.48,0,1,0,2.31,65.55,44.47,44.47,0,0,0,46.79,110Z"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M41.39,16.87V9.21H52.08v7.66"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M17.75,26.91l-5.18-5.72-8,7.23,5.61,6"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M83.27,34.47l5.62-6-8-7.23-5.18,5.72"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                            <path d="M33,2.19H60.5"
                                                                                                transform="translate(-1.31 -1.19)"
                                                                                                style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-7faac19 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="7faac19" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>24/7 </p>
                                                                                    <p>Helpdesk</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-c78e81d grid-padding-2"
                                                                data-id="c78e81d" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-91cde08 elementor-widget elementor-widget-spacer"
                                                                            data-id="91cde08" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-f546ef4 grid-3-with-gap"
                                                                data-id="f546ef4" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-b943c8e max-w-200 elementor-widget elementor-widget-image"
                                                                            data-id="b943c8e" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/messaging.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/messaging.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d619435 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="d619435" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Platform</p>
                                                                                    <p>Messaging</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-0747a0b grid-padding-2"
                                                                data-id="0747a0b" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-08b873b elementor-widget elementor-widget-spacer"
                                                                            data-id="08b873b" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-22a7d25 grid-3-with-gap"
                                                                data-id="22a7d25" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-3d0393e elementor-view-default elementor-widget elementor-widget-icon"
                                                                            data-id="3d0393e" data-element_type="widget"
                                                                            data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-wrapper">
                                                                                    <div class="elementor-icon">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            id="Layer_1"
                                                                                            data-name="Layer 1"
                                                                                            viewBox="0 0 107.3 107.29">
                                                                                            <defs>
                                                                                                <clipPath id="clip-path"
                                                                                                    transform="translate(0.16 -0.42)">
                                                                                                    <rect x="-0.12" y="0.43"
                                                                                                        width="107.3"
                                                                                                        height="107.3"
                                                                                                        style="fill:none">
                                                                                                    </rect>
                                                                                                </clipPath>
                                                                                            </defs>
                                                                                            <g
                                                                                                style="clip-path:url(#clip-path)">
                                                                                                <path
                                                                                                    d="M55.45,58a4.3,4.3,0,1,0-5.74-2A4.29,4.29,0,0,0,55.45,58Z"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path d="M54,14.23v7.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path d="M54,87.43v7"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M33.88,19.53l2.1,3.6"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path d="M72,85.53l2.1,3.6"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M19.18,34.23l3.6,2.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M85.18,72.33l3.6,2.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path d="M13.88,54.33H21"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path d="M87,54.33h7.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M19.18,74.43l3.6-2.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M85.18,36.33l3.6-2.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M33.88,89.13l2.1-3.6"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path d="M72,23.13l2.1-3.6"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M60.08,58.93,70.88,67"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M78.88,28.73l-19.8,19.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M14.08,19.13a52.64,52.64,0,0,1,87.5,56.3"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M19.28,18.43l-4.7.3-.4-4.8-1.9,2.2.3,4.8,4.8-.3Z"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:#19ad4a">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M93.88,87.83a52.65,52.65,0,0,1-88.5-55.1"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:none;stroke:#19ad4a;stroke-miterlimit:10;stroke-width:2px">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M88.68,88.73l4.8-.5.4,4.8,1.9-2.2-.5-4.8-4.7.5Z"
                                                                                                    transform="translate(0.16 -0.42)"
                                                                                                    style="fill:#19ad4a">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-11b560a margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="11b560a" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Real</p>
                                                                                    <p>Support</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-12e52df grid-padding"
                                                                data-id="12e52df" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-226ede9 elementor-widget elementor-widget-spacer"
                                                                            data-id="226ede9" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-02131ce elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="02131ce" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a2bba5"
                                        data-id="3a2bba5" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-026d1a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="026d1a7" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9140775"
                                                                data-id="9140775" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-e76d24e margin-0 inline elementor-widget elementor-widget-text-editor"
                                                                            data-id="e76d24e" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>01</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-5a7e225 lines white elementor-widget elementor-widget-html"
                                                    data-id="5a7e225" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-49dca64 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="49dca64" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e347e6"
                                        data-id="4e347e6" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-1164722 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="1164722" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4cbd862"
                                                                data-id="4cbd862" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-f5dd9b5 elementor-widget elementor-widget-heading"
                                                                            data-id="f5dd9b5" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Local support, real knowledge</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-92e3e85 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="92e3e85" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Every country is different. Our
                                                                                        in-country teams are here to give
                                                                                        you personalised guidance.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2aaefa9"
                                                                data-id="2aaefa9" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-828b3e7 max-w-500 elementor-widget elementor-widget-image"
                                                                            data-id="828b3e7" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img title="s01" alt="s01"
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/s01.svg"
                                                                                        class="lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            src="../../wp-content/uploads/2021/06/s01.svg"
                                                                                            title="s01"
                                                                                            alt="s01" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-971ce5c lines white elementor-widget elementor-widget-html"
                                                    data-id="971ce5c" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-2269d6e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="2269d6e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7755f92"
                                        data-id="7755f92" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3cceecd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="3cceecd" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9e4d27a"
                                                                data-id="9e4d27a" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-15d1876 margin-0 inline elementor-widget elementor-widget-text-editor"
                                                                            data-id="15d1876" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>02</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-cbb25c8 lines white elementor-widget elementor-widget-html"
                                                    data-id="cbb25c8" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-a4ced39 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="a4ced39" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6cab6ed"
                                        data-id="6cab6ed" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-99e768a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="99e768a" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6ba0433"
                                                                data-id="6ba0433" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-628bfd2 elementor-widget elementor-widget-heading"
                                                                            data-id="628bfd2" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Smarter counsellors mean happier
                                                                                    students</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-9651713 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="9651713" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Our destination and institution
                                                                                        specialists share their knowledge so
                                                                                        your counsellors can wow students.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2864a9b"
                                                                data-id="2864a9b" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-24e8a33 max-w-500 elementor-widget elementor-widget-image"
                                                                            data-id="24e8a33" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img title="s02" alt="s02"
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/s02.svg"
                                                                                        class="lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            src="../../wp-content/uploads/2021/06/s02.svg"
                                                                                            title="s02"
                                                                                            alt="s02" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-8776531 lines white elementor-widget elementor-widget-html"
                                                    data-id="8776531" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-4e394d3 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="4e394d3" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64921af"
                                        data-id="64921af" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0f200e4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0f200e4" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-599c4e6"
                                                                data-id="599c4e6" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-07a5d8a margin-0 inline elementor-widget elementor-widget-text-editor"
                                                                            data-id="07a5d8a" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>03</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-378768d lines white elementor-widget elementor-widget-html"
                                                    data-id="378768d" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-b0974a0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="b0974a0" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e7522eb"
                                        data-id="e7522eb" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ac800df elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ac800df" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-859afb9"
                                                                data-id="859afb9" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-f29273b elementor-widget elementor-widget-heading"
                                                                            data-id="f29273b" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Fewer mistakes, better offers</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-dce6755 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="dce6755" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>We work with you behind-the-scenes to
                                                                                        ensure every application is an A+.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e891738"
                                                                data-id="e891738" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-1a3cfc3 max-w-450 elementor-widget elementor-widget-image"
                                                                            data-id="1a3cfc3" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img title="s03" alt="s03"
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/s03.svg"
                                                                                        class="lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            src="../../wp-content/uploads/2021/06/s03.svg"
                                                                                            title="s03"
                                                                                            alt="s03" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-9da2306 lines white elementor-widget elementor-widget-html"
                                                    data-id="9da2306" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-7497467 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="7497467" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bb5fee3"
                                        data-id="bb5fee3" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0263ef9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0263ef9" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c5ac2af"
                                                                data-id="c5ac2af" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7392846 margin-0 rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="7392846" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>ON DEMAND</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-41d0590 elementor-widget elementor-widget-heading"
                                                                            data-id="41d0590" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Learn in your own time</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ad25045 elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ad25045" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-dcc4826 grid-padding"
                                                                data-id="dcc4826" data-element_type="column">
                                                                <div class="elementor-column-wrap">
                                                                    <div class="elementor-widget-wrap">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-f9ed8f1 grid-3-with-gap"
                                                                data-id="f9ed8f1" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-3318bad max-h-150 elementor-widget elementor-widget-image"
                                                                            data-id="3318bad" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/videos.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/videos.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e7f3066 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="e7f3066" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Destination &amp; institution
                                                                                        training</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-bb5d60e grid-padding-2"
                                                                data-id="bb5d60e" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-d941fb0 elementor-widget elementor-widget-spacer"
                                                                            data-id="d941fb0" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-bb3511b grid-3-with-gap"
                                                                data-id="bb3511b" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-0dc20f0 max-h-150 elementor-widget elementor-widget-image"
                                                                            data-id="0dc20f0" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/guides.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2020/11/guides.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-3c1d618 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="3c1d618" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Easy to understand guides</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-773e4c1 grid-padding-2"
                                                                data-id="773e4c1" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-1c515aa elementor-widget elementor-widget-spacer"
                                                                            data-id="1c515aa" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-f28fd13 grid-3-with-gap"
                                                                data-id="f28fd13" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7bbf934 max-h-150 elementor-widget elementor-widget-image"
                                                                            data-id="7bbf934" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2020/11/email.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640"
                                                                                            height="640"
                                                                                            src="../../wp-content/uploads/2020/11/email.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-df9e3a5 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="df9e3a5" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Weekly destination email briefings
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-f6f6925 grid-padding"
                                                                data-id="f6f6925" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-84c2db5 elementor-widget elementor-widget-spacer"
                                                                            data-id="84c2db5" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-4e00477 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="4e00477" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90f9df5"
                                        data-id="90f9df5" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-35aa31d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="35aa31d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9f19227"
                                                                data-id="9f19227" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-08f6928 elementor-widget elementor-widget-heading"
                                                                            data-id="08f6928" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Trusted by <span
                                                                                        class="agent-count">7,000</span>+
                                                                                    recruiters worldwide</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-45d47f0 max-width-650 elementor-widget elementor-widget-text-editor"
                                                                            data-id="45d47f0" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>“<span
                                                                                            style="font-weight: 400;">Adventus.io
                                                                                            has dedicated staff who have
                                                                                            expertise in admissions and
                                                                                            guide us through the
                                                                                            visa&#8230;From application to
                                                                                            commission it’s available to
                                                                                            channel partners under one
                                                                                            platform. In short it is like a
                                                                                            virtual office as it caters to
                                                                                            every need of a student and
                                                                                            channel partner. A unique
                                                                                            platform like no other.</span>”
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-68622a4 elementor-widget elementor-widget-text-editor"
                                                                            data-id="68622a4" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>PATHWAY INTERNATIONAL – SRI LANKA</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-8aebcb4 lines elementor-widget elementor-widget-html"
                                                    data-id="8aebcb4" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-6e37001 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="6e37001" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9e51ef"
                                        data-id="f9e51ef" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-365f5d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="365f5d4" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a44194 margin-0"
                                                                data-id="6a44194" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-95a55b9 rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="95a55b9" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>FREQUENTLY ASKED</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-3b4dd98 elementor-widget elementor-widget-heading"
                                                                            data-id="3b4dd98" data-element_type="widget"
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
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-11f6e37"
                                                                data-id="11f6e37" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-56a14af accordion-yellow hide-first elementor-widget elementor-widget-accordion"
                                                                            data-id="56a14af" data-element_type="widget"
                                                                            data-widget_type="accordion.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-accordion"
                                                                                    role="tablist">
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-9081"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="1"
                                                                                            role="tab"
                                                                                            aria-controls="elementor-tab-content-9081"
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
                                                                                        <div id="elementor-tab-content-9081"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="1"
                                                                                            role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-9081">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-9082"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="2"
                                                                                            role="tab"
                                                                                            aria-controls="elementor-tab-content-9082"
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
                                                                                                href="#">I’ve just
                                                                                                hired new counsellors, can
                                                                                                you help guide them?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-9082"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="2"
                                                                                            role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-9082">
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">Yes.
                                                                                                    Our team will be there
                                                                                                    to support your
                                                                                                    counsellors. Everything
                                                                                                    from platform
                                                                                                    on-boarding to
                                                                                                    admissions and
                                                                                                    application support to
                                                                                                    destination knowledge.
                                                                                                    We have an extensive
                                                                                                    service team to support
                                                                                                    you and your
                                                                                                    counsellors.</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-9083"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="3"
                                                                                            role="tab"
                                                                                            aria-controls="elementor-tab-content-9083"
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
                                                                                                href="#">I want to
                                                                                                expand to new study
                                                                                                destinations. Will you
                                                                                                provide training?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-9083"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="3"
                                                                                            role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-9083">
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">Yes.
                                                                                                    We have a dedicated
                                                                                                    training team that
                                                                                                    organises a variety of
                                                                                                    training to keep your
                                                                                                    counsellors up-to-date
                                                                                                    &#8211; destinations,
                                                                                                    institutions,
                                                                                                    admissions,
                                                                                                    visa/immigration.</span>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-accordion-item">
                                                                                        <div id="elementor-tab-title-9084"
                                                                                            class="elementor-tab-title"
                                                                                            data-tab="4"
                                                                                            role="tab"
                                                                                            aria-controls="elementor-tab-content-9084"
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
                                                                                                href="#">Some
                                                                                                students have very
                                                                                                complicated applications.
                                                                                                Can you support me?</a>
                                                                                        </div>
                                                                                        <div id="elementor-tab-content-9084"
                                                                                            class="elementor-tab-content elementor-clearfix"
                                                                                            data-tab="4"
                                                                                            role="tabpanel"
                                                                                            aria-labelledby="elementor-tab-title-9084">
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">Yes.
                                                                                                    We are here to support
                                                                                                    you at every step of the
                                                                                                    application process. Our
                                                                                                    Admissions and Quality,
                                                                                                    Compliance, Visa teams
                                                                                                    work closely with every
                                                                                                    application. </span></p>
                                                                                            <p><span
                                                                                                    style="font-weight: 400;">We
                                                                                                    do whatever we can so
                                                                                                    you can deliver a great
                                                                                                    experience to your
                                                                                                    students and help them
                                                                                                    put their best foot
                                                                                                    forward.</span></p>
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
                                                <div class="elementor-element elementor-element-5c56be3 lines elementor-widget elementor-widget-html"
                                                    data-id="5c56be3" data-element_type="widget"
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
    </article><!-- #post-4703 -->
@endsection

@push('scripts')
@endpush
