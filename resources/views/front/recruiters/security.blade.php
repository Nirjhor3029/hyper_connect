@php
    $assetsUrl = asset('/assets/front/');
    // echo $assetsUrl;
@endphp

@extends('layouts.front.layout')

@push('styles')
    
    <title>Security | Adventus.io</title>
    
    <meta property="og:description"
        content="SECURITY Protecting your data is important to us You&#8217;ll never have to worry about the security and privacy of your data. 
        PERMISSION SETTINGS You have the flexibility to control visibility for your team Your students are your students We 
        don’t see any identifiable information about your student leads. It&#8217;s only when you submit an application that [&hellip;]" />
    

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
        href='{{$assetsUrl}}/wp-content/plugins/adventus-elementor-widget/styles4ec7.css?ver=1761912584' type='text/css'
        media='all' />
    <link rel='stylesheet' id='open-course-search-css-css'
        href='{{$assetsUrl}}/wp-content/plugins/open-course-sarch/css/open-course-search87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{$assetsUrl}}/wp-includes/css/dashicons.min87ed.css?ver=5.9.12' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventusio-style-min-css' href='{{$assetsUrl}}/wp-content/themes/adventusio/style8a54.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-security-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/security8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='adventus-reecruiter-success-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/recruiter-success-story8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='adventus-institution-success-css-css'
        href='{{$assetsUrl}}/wp-content/themes/adventusio/css/institution-success-story8a54.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-official-css' href='{{$assetsUrl}}/../use.fontawesome.com/releases/v5.13.0/css/all.css'
        type='text/css' media='all'
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
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
    <link rel='stylesheet' id='elementor-post-4769-css'
        href='{{$assetsUrl}}/wp-content/uploads/elementor/css/post-4769fcba.css?ver=1747916243' type='text/css' media='all' />
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


    <script type='text/javascript' defer
        src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
    <script type='text/javascript' defer
        src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_680f88afde01607aa81979d12c78c451.js'
        id='custom-swiper-script-js'></script>
    <script type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'>
    </script>
    <script type='text/javascript' defer src='{{$assetsUrl}}/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/lottie.min4ec7.js?ver=1761912584'
        id='adventus-lottie-min-js-js'></script>
    <link rel="https://api.w.org/" href="{{$assetsUrl}}/wp-json/index.html" />
    <link rel="alternate" type="application/json" href="{{$assetsUrl}}/wp-json/wp/v2/pages/4769.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{$assetsUrl}}/xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{$assetsUrl}}/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.12" />
    <link rel='shortlink' href='{{$assetsUrl}}/index388a.html?p=4769' />
    <link rel="alternate" type="application/json+oembed"
        href="{{$assetsUrl}}/wp-json/oembed/1.0/embed0198.json?url=https%3A%2F%2Fadventus.io%2Frecruiters%2Fsecurity%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{$assetsUrl}}/wp-json/oembed/1.0/embed22dd?url=https%3A%2F%2Fadventus.io%2Frecruiters%2Fsecurity%2F&amp;format=xml" />
    

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
    <article id="post-4769" class="post-4769 page type-page status-publish hentry">
        <div class="entry-content">
            <div data-elementor-type="wp-page" data-elementor-id="4769" class="elementor elementor-4769">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7863e16 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7863e16" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3accf85"
                                        data-id="3accf85" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0ef7269 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0ef7269" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5f1cd8d"
                                                                data-id="5f1cd8d" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-6d46247 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="6d46247" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <h1 style="font-size: 14px;">SECURITY
                                                                                    </h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f7c6a98 margin-0 elementor-widget elementor-widget-heading"
                                                                            data-id="f7c6a98" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Protecting your data is important to us
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d85bc88 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="d85bc88" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>You&#8217;ll never have to worry
                                                                                        about the security and privacy of
                                                                                        your data.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-1492f67 max-w-1100 elementor-widget elementor-widget-html"
                                                                            data-id="1492f67" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="security-container"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e3b8aa5 lines elementor-widget elementor-widget-html"
                                                                            data-id="e3b8aa5" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-07d313e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="07d313e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-46c00ca"
                                        data-id="46c00ca" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-59e65e3 lines white elementor-widget elementor-widget-html"
                                                    data-id="59e65e3" data-element_type="widget"
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e3ffc7f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="e3ffc7f" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b33bf81"
                                                                data-id="b33bf81" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-6ce8f0f margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="6ce8f0f" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>PERMISSION SETTINGS</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a3bb27e margin-0 max-w-700 elementor-widget elementor-widget-heading"
                                                                            data-id="a3bb27e" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    You have the flexibility to control
                                                                                    visibility for your team</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-dd5b2da elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="dd5b2da" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-52f8f12"
                                                                data-id="52f8f12" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-51a6d16 max-w-320 img-filter elementor-widget elementor-widget-image"
                                                                            data-id="51a6d16" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/security-1.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2021/06/security-1.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-5e832a5 max-w-320 img-filter elementor-widget elementor-widget-image"
                                                                            data-id="5e832a5" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/security-2.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2021/06/security-2.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-0cd1e71 max-w-320 img-filter elementor-widget elementor-widget-image"
                                                                            data-id="0cd1e71" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/security-3.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2021/06/security-3.svg"
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
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e2d4537 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="e2d4537" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2d6bb60"
                                                                data-id="2d6bb60" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-44d9a42 blur elementor-widget elementor-widget-image"
                                                                            data-id="44d9a42" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="640" height="640"
                                                                                        alt=""
                                                                                        data-src="https://adventus.io/wp-content/uploads/2021/06/security-4.svg"
                                                                                        class="attachment-large size-large lazyload"
                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                                            width="640" height="640"
                                                                                            src="../../wp-content/uploads/2021/06/security-4.svg"
                                                                                            class="attachment-large size-large"
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f7139a7 margin-0 elementor-widget elementor-widget-heading"
                                                                            data-id="f7139a7" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Your students are
                                                                                    <br><b>your</b> students
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c86fc65 margin-0 max-w-700 elementor-widget elementor-widget-text-editor"
                                                                            data-id="c86fc65" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>We don’t see any identifiable
                                                                                        information about your student
                                                                                        leads. It&#8217;s only when you
                                                                                        submit an application that we can
                                                                                        view relevant details to lodge their
                                                                                        application to the selected
                                                                                        institution.</p>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-9b383df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="9b383df" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e415294"
                                        data-id="e415294" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-9966515 lines white elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-html"
                                                    data-id="9966515" data-element_type="widget"
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-865529f elementor-section-height-min-height elementor-section-content-top elementor-section-boxed elementor-section-height-default"
                                                    data-id="865529f" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-42cd7c4 grid-padding"
                                                                data-id="42cd7c4" data-element_type="column">
                                                                <div class="elementor-column-wrap">
                                                                    <div class="elementor-widget-wrap">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-93cfeca grid-3-add-gap margin-0"
                                                                data-id="93cfeca" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-216a41e rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="216a41e" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>ADDITIONAL FEATURES</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-488f1bf margin-0 rm-margin elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                            data-id="488f1bf" data-element_type="widget"
                                                                            data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
                                                                                    <span
                                                                                        class="elementor-divider-separator">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-0b9a26c elementor-widget elementor-widget-heading"
                                                                            data-id="0b9a26c" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    All the right protection measures</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-837ad18 grid-3-add-gap-fill"
                                                                data-id="837ad18" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-0a01a90 rm-margin elementor-hidden-phone elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                            data-id="0a01a90" data-element_type="widget"
                                                                            data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
                                                                                    <span
                                                                                        class="elementor-divider-separator">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d0e1d0b margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="d0e1d0b" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>We keep your student data secure and
                                                                                        meet strict global and local
                                                                                        compliance requirements.</p>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-003bc6d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="003bc6d" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ca32b6e"
                                        data-id="ca32b6e" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5fb18d2 elementor-section-height-min-height elementor-section-content-top elementor-section-boxed elementor-section-height-default"
                                                    data-id="5fb18d2" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-8fe5963 grid-padding"
                                                                data-id="8fe5963" data-element_type="column">
                                                                <div class="elementor-column-wrap">
                                                                    <div class="elementor-widget-wrap">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-7115bb4 grid-3-with-gap"
                                                                data-id="7115bb4" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-bf280e8 elementor-widget elementor-widget-heading"
                                                                            data-id="bf280e8" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    GDPR COMPLIANT</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-3eb23be margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="3eb23be" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><span style="font-weight: 400;">Privacy
                                                                                            compliance program aligned with
                                                                                            General Data Protection
                                                                                            Regulation regulations.</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-28ff2f5 grid-padding-2 elementor-hidden-phone"
                                                                data-id="28ff2f5" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-31816e4 elementor-widget elementor-widget-spacer"
                                                                            data-id="31816e4" data-element_type="widget"
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
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-7911e0c grid-3-with-gap"
                                                                data-id="7911e0c" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5df8bc2 elementor-widget elementor-widget-heading"
                                                                            data-id="5df8bc2" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    INFRASTRUCTURE</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-70f5498 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="70f5498" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><span style="font-weight: 400;">Globally
                                                                                            distributed IT security team
                                                                                            monitors and responds to
                                                                                            security alerts and
                                                                                            events.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-a051f95 grid-padding-2 elementor-hidden-phone"
                                                                data-id="a051f95" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-da6b065 elementor-widget elementor-widget-spacer"
                                                                            data-id="da6b065" data-element_type="widget"
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
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-db44ef4 grid-3-with-gap"
                                                                data-id="db44ef4" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9c32d99 elementor-widget elementor-widget-heading"
                                                                            data-id="9c32d99" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    ENCRYPTION</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-7049a1d margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="7049a1d" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><span style="font-weight: 400;">All
                                                                                            communications are encrypted via
                                                                                            industry standard HTTPS/TLS (TLS
                                                                                            1.2 or higher) over public
                                                                                            networks.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-74ffd83 grid-padding"
                                                                data-id="74ffd83" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-73c6f7e elementor-widget elementor-widget-spacer"
                                                                            data-id="73c6f7e" data-element_type="widget"
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
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-edc8d5d elementor-section-height-min-height elementor-section-content-top elementor-section-boxed elementor-section-height-default"
                                                    data-id="edc8d5d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-11b6631 grid-padding"
                                                                data-id="11b6631" data-element_type="column">
                                                                <div class="elementor-column-wrap">
                                                                    <div class="elementor-widget-wrap">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-4bc00f6 grid-3-with-gap"
                                                                data-id="4bc00f6" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-fb3a1f4 elementor-widget elementor-widget-heading"
                                                                            data-id="fb3a1f4" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    NETWORK & CLOUD SECURITY</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-56ca40e margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="56ca40e" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><span style="font-weight: 400;">Multiple
                                                                                            security protocols such as
                                                                                            password hashing, routine
                                                                                            security assessments, least
                                                                                            privilege access, and
                                                                                            security-focused software
                                                                                            development.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-53b3ebb grid-padding-2 elementor-hidden-phone"
                                                                data-id="53b3ebb" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-0254164 elementor-widget elementor-widget-spacer"
                                                                            data-id="0254164" data-element_type="widget"
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
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-272dcae grid-3-with-gap"
                                                                data-id="272dcae" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9b40f33 elementor-widget elementor-widget-heading"
                                                                            data-id="9b40f33" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    OPERATIONAL SECURITY</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f3d3816 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="f3d3816" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><span style="font-weight: 400;">Continuous
                                                                                            implementation of new security
                                                                                            controls against malicious
                                                                                            activity across physical data
                                                                                            centres, networks, and IT
                                                                                            devices.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-6075d8d grid-padding-2 elementor-hidden-phone"
                                                                data-id="6075d8d" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-526d2bf elementor-widget elementor-widget-spacer"
                                                                            data-id="526d2bf" data-element_type="widget"
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
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-06efb06 grid-3-with-gap"
                                                                data-id="06efb06" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-c1ef0bc elementor-widget elementor-widget-heading"
                                                                            data-id="c1ef0bc" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    BUSINESS CONTINUITY</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-cc37945 margin-0 elementor-widget elementor-widget-text-editor"
                                                                            data-id="cc37945" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><span style="font-weight: 400;">Service
                                                                                            clustering and network
                                                                                            redundancies help eliminate
                                                                                            single points of failure.</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-e8528e0 grid-padding"
                                                                data-id="e8528e0" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-52c14d9 elementor-widget elementor-widget-spacer"
                                                                            data-id="52c14d9" data-element_type="widget"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-ca1f748 elementor-section-full_width trial-platform elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                            data-id="ca1f748" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8acdc69"
                                        data-id="8acdc69" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-11fb06a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                    data-id="11fb06a" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-ebf0f0e"
                                                                data-id="ebf0f0e" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-column-wrap">
                                                                    <div class="elementor-widget-wrap">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-12dbeeb"
                                                                data-id="12dbeeb" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-0d2ce3e elementor-widget elementor-widget-heading"
                                                                            data-id="0d2ce3e" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Ready to trial the platform?</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-5145b16 inline demo-email-large elementor-widget elementor-widget-html"
                                                                            data-id="5145b16" data-element_type="widget"
                                                                            data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <input type="text"
                                                                                    style="background-color: #f5f5f5; border: none;"
                                                                                    class="demo-email"
                                                                                    placeholder="Your e-mail" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e78b9b7 inline request-demo request-demo-large elementor-widget elementor-widget-button"
                                                                            data-id="e78b9b7" data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="../../contact-us/index.html#request-a-demo"
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
                                                                        <div class="elementor-element elementor-element-0acfa57 elementor-widget elementor-widget-text-editor"
                                                                            data-id="0acfa57" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Have a question? <a
                                                                                            style="color: #14ad4a; text-decoration: underline;"
                                                                                            href="../../contact-us.html">Contact
                                                                                            Us</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-f36ba43"
                                                                data-id="f36ba43" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-6ea4db2 margin-0 rm-margin elementor-widget elementor-widget-heading"
                                                                            data-id="6ea4db2" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    <a href="../../pricing/index.html">Starter
                                                                                        Plan</a>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-1e299b0 margin-0 rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="1e299b0" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>The best way to trial the platform,
                                                                                        and it’s free</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-dd485d5 margin-0 rm-margin link-yellow elementor-widget elementor-widget-text-editor"
                                                                            data-id="dd485d5" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><a href="../../pricing/index.html">70%
                                                                                            commission</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-6e8fd55"
                                                                data-id="6e8fd55" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-c07502e margin-0 rm-margin elementor-widget elementor-widget-heading"
                                                                            data-id="c07502e" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    <a href="../../pricing/index.html">Growth
                                                                                        Plan</a>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-0b40bd4 margin-0 rm-margin elementor-widget elementor-widget-text-editor"
                                                                            data-id="0b40bd4" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>Grow your earnings quickly for $99
                                                                                        /month USD</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d2fdee3 margin-0 rm-margin link-yellow elementor-widget elementor-widget-text-editor"
                                                                            data-id="d2fdee3" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><a href="../../pricing/index.html">100%
                                                                                            commission</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4aba32a"
                                                                data-id="4aba32a" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
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
            </div>
        </div><!-- .entry-content -->
    </article><!-- #post-4769 -->
@endsection

@push('scripts')

{{-- <script defer id="leadin-script-loader-js-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbGVhZGluX3dvcmRwcmVzcyA9IHsidXNlclJvbGUiOiJ2aXNpdG9yIiwicGFnZVR5cGUiOiJwYWdlIiwibGVhZGluUGx1Z2luVmVyc2lvbiI6IjguNy4zIn07Ci8qIF1dPiAqLwo="></script> --}}
<script   type='text/javascript' defer src='{{$assetsUrl}}/js.hs-scripts.com/20616828a466.js?integration=WordPress' async defer id='hs-script-loader'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_7a5024b25d32066a41f07aa72f43adde.js' id='open-course-search-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/gsap/gsap.min4ec7.js?ver=1761912584' id='gsap-tweenmax-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/gsap/Draggable.min4ec7.js?ver=1761912584' id='gsap-draggable-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_f47e8e64e5f1a3e934b5fcdfe5d4f7918a54.js?ver=1.0.0' id='adventusio-navigation-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_26036e4be38edb295cd25a7c06ba89398a54.js?ver=1.0.0' id='adventusio-skip-link-focus-fix-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/script.min4ec7.js?ver=1761912584' id='adventus-min-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_e0f8bcd10939756a4716cfdc9c7c0aee4ec7.js?ver=1761912584' id='adventus-global-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/themes/adventusio/js/gsap/TextPlugin.min4ec7.js?ver=1761912584' id='gsap-textplugin-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_d69c9c88f7c7d7cbfec2535012fe93234ec7.js?ver=1761912584' id='adventus-security-svg-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_340be438ec1fbb486af7862a98f01d444ec7.js?ver=1761912584' id='adventus-reecruiter-success-js-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.minc063.js?ver=3.9.5' id='smush-lazy-load-js'></script>
{{-- <script defer id="moove_gdpr_frontend-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgbW9vdmVfZnJvbnRlbmRfZ2Rwcl9zY3JpcHRzID0geyJhamF4dXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJwb3N0X2lkIjoiNDc2OSIsInBsdWdpbl9kaXIiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2dkcHItY29va2llLWNvbXBsaWFuY2UiLCJzaG93X2ljb25zIjoiYWxsIiwiaXNfcGFnZSI6IjEiLCJzdHJpY3RfaW5pdCI6IjEiLCJlbmFibGVkX2RlZmF1bHQiOnsidGhpcmRfcGFydHkiOjAsImFkdmFuY2VkIjowfSwiZ2VvX2xvY2F0aW9uIjoiZmFsc2UiLCJmb3JjZV9yZWxvYWQiOiJmYWxzZSIsImlzX3NpbmdsZSI6IiIsImhpZGVfc2F2ZV9idG4iOiJmYWxzZSIsImN1cnJlbnRfdXNlciI6IjAiLCJjb29raWVfZXhwaXJhdGlvbiI6IjM2NSIsInNjcmlwdF9kZWxheSI6IjIwMDAiLCJjbG9zZV9idG5fYWN0aW9uIjoiMSIsImNsb3NlX2NzX2FjdGlvbiI6IjEiLCJnZHByX3Njb3IiOiJ0cnVlIiwid3BfbGFuZyI6IiJ9OwovKiBdXT4gKi8K"></script> --}}
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/cache/autoptimize/js/autoptimize_single_8b26876dca36bf5540648fd67e6717237bcd.js?ver=4.8.3' id='moove_gdpr_frontend-js'></script>
{{-- <script defer id="moove_gdpr_frontend-js-after" src="data:text/javascript;base64,CnZhciBnZHByX2NvbnNlbnRfX3N0cmljdCA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fdGhpcmRwYXJ0eSA9ICJmYWxzZSIKdmFyIGdkcHJfY29uc2VudF9fYWR2YW5jZWQgPSAiZmFsc2UiCnZhciBnZHByX2NvbnNlbnRfX2Nvb2tpZXMgPSAiIgo="></script> --}}
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min3ab2.js?ver=3.6.5' id='elementor-pro-webpack-runtime-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/webpack.runtime.min5aed.js?ver=3.6.4' id='elementor-webpack-runtime-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/frontend-modules.min5aed.js?ver=3.6.4' id='elementor-frontend-modules-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/hooks.min8cbb.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
<script   type='text/javascript' src='{{$assetsUrl}}/wp-includes/js/dist/i18n.mina28b.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
{{-- <script defer id="wp-i18n-js-after" src="data:text/javascript;base64,CndwLmkxOG4uc2V0TG9jYWxlRGF0YSggeyAndGV4dCBkaXJlY3Rpb25cdTAwMDRsdHInOiBbICdsdHInIF0gfSApOwo="></script>
<script defer id="elementor-pro-frontend-js-translations" src="data:text/javascript;base64,CiggZnVuY3Rpb24oIGRvbWFpbiwgdHJhbnNsYXRpb25zICkgewoJdmFyIGxvY2FsZURhdGEgPSB0cmFuc2xhdGlvbnMubG9jYWxlX2RhdGFbIGRvbWFpbiBdIHx8IHRyYW5zbGF0aW9ucy5sb2NhbGVfZGF0YS5tZXNzYWdlczsKCWxvY2FsZURhdGFbIiJdLmRvbWFpbiA9IGRvbWFpbjsKCXdwLmkxOG4uc2V0TG9jYWxlRGF0YSggbG9jYWxlRGF0YSwgZG9tYWluICk7Cn0gKSggImVsZW1lbnRvci1wcm8iLCB7ICJsb2NhbGVfZGF0YSI6IHsgIm1lc3NhZ2VzIjogeyAiIjoge30gfSB9IH0gKTsK"></script>
<script defer id="elementor-pro-frontend-js-before" src="data:text/javascript;base64,CnZhciBFbGVtZW50b3JQcm9Gcm9udGVuZENvbmZpZyA9IHsiYWpheHVybCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiI4NWEyMjhiZTQ0IiwidXJscyI6eyJhc3NldHMiOiJodHRwczpcL1wvYWR2ZW50dXMuaW9cL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvci1wcm9cL2Fzc2V0c1wvIiwicmVzdCI6Imh0dHBzOlwvXC9hZHZlbnR1cy5pb1wvd3AtanNvblwvIn0sInNoYXJlQnV0dG9uc05ldHdvcmtzIjp7ImZhY2Vib29rIjp7InRpdGxlIjoiRmFjZWJvb2siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR3aXR0ZXIiOnsidGl0bGUiOiJUd2l0dGVyIn0sImxpbmtlZGluIjp7InRpdGxlIjoiTGlua2VkSW4iLCJoYXNfY291bnRlciI6dHJ1ZX0sInBpbnRlcmVzdCI6eyJ0aXRsZSI6IlBpbnRlcmVzdCIsImhhc19jb3VudGVyIjp0cnVlfSwicmVkZGl0Ijp7InRpdGxlIjoiUmVkZGl0IiwiaGFzX2NvdW50ZXIiOnRydWV9LCJ2ayI6eyJ0aXRsZSI6IlZLIiwiaGFzX2NvdW50ZXIiOnRydWV9LCJvZG5va2xhc3NuaWtpIjp7InRpdGxlIjoiT0siLCJoYXNfY291bnRlciI6dHJ1ZX0sInR1bWJsciI6eyJ0aXRsZSI6IlR1bWJsciJ9LCJkaWdnIjp7InRpdGxlIjoiRGlnZyJ9LCJza3lwZSI6eyJ0aXRsZSI6IlNreXBlIn0sInN0dW1ibGV1cG9uIjp7InRpdGxlIjoiU3R1bWJsZVVwb24iLCJoYXNfY291bnRlciI6dHJ1ZX0sIm1peCI6eyJ0aXRsZSI6Ik1peCJ9LCJ0ZWxlZ3JhbSI6eyJ0aXRsZSI6IlRlbGVncmFtIn0sInBvY2tldCI6eyJ0aXRsZSI6IlBvY2tldCIsImhhc19jb3VudGVyIjp0cnVlfSwieGluZyI6eyJ0aXRsZSI6IlhJTkciLCJoYXNfY291bnRlciI6dHJ1ZX0sIndoYXRzYXBwIjp7InRpdGxlIjoiV2hhdHNBcHAifSwiZW1haWwiOnsidGl0bGUiOiJFbWFpbCJ9LCJwcmludCI6eyJ0aXRsZSI6IlByaW50In19LCJmYWNlYm9va19zZGsiOnsibGFuZyI6ImVuX1VTIiwiYXBwX2lkIjoiIn0sImxvdHRpZSI6eyJkZWZhdWx0QW5pbWF0aW9uVXJsIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3ItcHJvXC9tb2R1bGVzXC9sb3R0aWVcL2Fzc2V0c1wvYW5pbWF0aW9uc1wvZGVmYXVsdC5qc29uIn19Owo="></script> --}}
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/js/frontend.min3ab2.js?ver=3.6.5' id='elementor-pro-frontend-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/share-link/share-link.min5aed.js?ver=3.6.4' id='share-link-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0' id='elementor-dialog-js'></script>
{{-- <script defer id="elementor-frontend-js-before" src="data:text/javascript;base64,CnZhciBlbGVtZW50b3JGcm9udGVuZENvbmZpZyA9IHsiZW52aXJvbm1lbnRNb2RlIjp7ImVkaXQiOmZhbHNlLCJ3cFByZXZpZXciOmZhbHNlLCJpc1NjcmlwdERlYnVnIjpmYWxzZX0sImkxOG4iOnsic2hhcmVPbkZhY2Vib29rIjoiU2hhcmUgb24gRmFjZWJvb2siLCJzaGFyZU9uVHdpdHRlciI6IlNoYXJlIG9uIFR3aXR0ZXIiLCJwaW5JdCI6IlBpbiBpdCIsImRvd25sb2FkIjoiRG93bmxvYWQiLCJkb3dubG9hZEltYWdlIjoiRG93bmxvYWQgaW1hZ2UiLCJmdWxsc2NyZWVuIjoiRnVsbHNjcmVlbiIsInpvb20iOiJab29tIiwic2hhcmUiOiJTaGFyZSIsInBsYXlWaWRlbyI6IlBsYXkgVmlkZW8iLCJwcmV2aW91cyI6IlByZXZpb3VzIiwibmV4dCI6Ik5leHQiLCJjbG9zZSI6IkNsb3NlIn0sImlzX3J0bCI6ZmFsc2UsImJyZWFrcG9pbnRzIjp7InhzIjowLCJzbSI6NDgwLCJtZCI6NzY4LCJsZyI6MTAyNSwieGwiOjE0NDAsInh4bCI6MTYwMH0sInJlc3BvbnNpdmUiOnsiYnJlYWtwb2ludHMiOnsibW9iaWxlIjp7ImxhYmVsIjoiTW9iaWxlIiwidmFsdWUiOjc2NywiZGVmYXVsdF92YWx1ZSI6NzY3LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwibW9iaWxlX2V4dHJhIjp7ImxhYmVsIjoiTW9iaWxlIEV4dHJhIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IEV4dHJhIiwidmFsdWUiOjEyMDAsImRlZmF1bHRfdmFsdWUiOjEyMDAsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwibGFwdG9wIjp7ImxhYmVsIjoiTGFwdG9wIiwidmFsdWUiOjEzNjYsImRlZmF1bHRfdmFsdWUiOjEzNjYsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOmZhbHNlfSwid2lkZXNjcmVlbiI6eyJsYWJlbCI6IldpZGVzY3JlZW4iLCJ2YWx1ZSI6MjQwMCwiZGVmYXVsdF92YWx1ZSI6MjQwMCwiZGlyZWN0aW9uIjoibWluIiwiaXNfZW5hYmxlZCI6ZmFsc2V9fX0sInZlcnNpb24iOiIzLjYuNCIsImlzX3N0YXRpYyI6ZmFsc2UsImV4cGVyaW1lbnRhbEZlYXR1cmVzIjp7ImVfaW1wb3J0X2V4cG9ydCI6dHJ1ZSwiZV9oaWRkZW5fd29yZHByZXNzX3dpZGdldHMiOnRydWUsInRoZW1lX2J1aWxkZXJfdjIiOnRydWUsImxhbmRpbmctcGFnZXMiOnRydWUsImVsZW1lbnRzLWNvbG9yLXBpY2tlciI6dHJ1ZSwiZmF2b3JpdGUtd2lkZ2V0cyI6dHJ1ZSwiYWRtaW4tdG9wLWJhciI6dHJ1ZSwicGFnZS10cmFuc2l0aW9ucyI6dHJ1ZSwiZm9ybS1zdWJtaXNzaW9ucyI6dHJ1ZSwiZV9zY3JvbGxfc25hcCI6dHJ1ZX0sInVybHMiOnsiYXNzZXRzIjoiaHR0cHM6XC9cL2FkdmVudHVzLmlvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3JcL2Fzc2V0c1wvIn0sInNldHRpbmdzIjp7InBhZ2UiOltdLCJlZGl0b3JQcmVmZXJlbmNlcyI6W119LCJraXQiOnsiYWN0aXZlX2JyZWFrcG9pbnRzIjpbInZpZXdwb3J0X21vYmlsZSIsInZpZXdwb3J0X3RhYmxldCJdLCJnbG9iYWxfaW1hZ2VfbGlnaHRib3giOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfY291bnRlciI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9mdWxsc2NyZWVuIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX3pvb20iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfc2hhcmUiOiJ5ZXMiLCJsaWdodGJveF90aXRsZV9zcmMiOiJ0aXRsZSIsImxpZ2h0Ym94X2Rlc2NyaXB0aW9uX3NyYyI6ImRlc2NyaXB0aW9uIn0sInBvc3QiOnsiaWQiOjQ3NjksInRpdGxlIjoiU2VjdXJpdHklMjAlN0MlMjBBZHZlbnR1cy5pbyIsImV4Y2VycHQiOiIiLCJmZWF0dXJlZEltYWdlIjpmYWxzZX19Owo="></script> --}}
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/frontend.min5aed.js?ver=3.6.4' id='elementor-frontend-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min3ab2.js?ver=3.6.5' id='pro-preloaded-elements-handlers-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor/assets/js/preloaded-modules.min5aed.js?ver=3.6.4' id='preloaded-modules-js'></script>
<script   type='text/javascript' defer src='{{$assetsUrl}}/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min3ab2.js?ver=3.6.5' id='e-sticky-js'></script>


@endpush
