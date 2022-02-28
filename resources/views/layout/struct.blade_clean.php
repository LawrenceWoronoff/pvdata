<!DOCTYPE html>
<html lang="en-US" i-amphtml-layout="" i-amphtml-no-boilerplate="" transformed="self;v=1">
    <head>
        <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="UTF-8">
        <style>
            .play_pause 
            {
                margin-top: 0px;
                margin-left: 20px;
                width: 30px;
                height: 30px;
                background-color: #002138;
            }

            .play_pause:hover
            {
                margin-top: 0px;
                margin-left: 20px;
                width: 30px;
                height: 30px;
                background-color: #2c5f82;
            }

            .play_pause_next 
            {
                margin-top: 0px;
                margin-left: 20px;
                width: 30px;
                height: 30px;
                background-color: #002138;
            }

            .play_pause_next:hover
            {
                margin-top: 0px;
                margin-left: 20px;
                width: 30px;
                height: 30px;
                background-color: #2c5f82;
            }
            @media (min-width: 1024px) {
                .card-view {
                    width: 35% !important;  
                    padding: 50px; 
                    box-shadow: 0 0 14px 0 rgb(41 42 45 / 6%);            
                }                
                .modal-view{
                    padding: 0px !important;
                    height: 90% !important; 
                    width:55% !important;
                    background-color:#f1f1f1;
                }
                .p-d-40 {
                    padding: 0px 40px !important;
                }

                .f-d-20 {
                    font-size: 20px !important;       
                }
                .f-d-24 {
                    font-size: 24px !important;       
                }
                .f-d-28 {
                    font-size: 28px !important;       
                }
                .f-d-36 {
                    font-size: 36px !important;              
                }
                .f-d-48 {
                    font-size: 48px !important;       
                }
                .mt-d-200 {
                    margin-top: 100px !important;
                }
                .mt-d-100 {
                    margin-top: 50px !important;
                }
                .mt-d-90 {
                    margin-top: 90px !important;
                }
            }

            @media (min-width: 300px) {
                .card-view {
                    width: 95%;  
                    padding: 50px; 
                    box-shadow: 0 0 14px 0 rgb(41 42 45 / 6%);            
                }                

                .modal-view{
                    padding: 0px; height: 90%; width:100%;
                    overflow:auto;
                    background-color:#f1f1f1;
                }

                .p-d-40 {
                    padding: 0px 8px;
                }

                .f-d-20 {
                    font-size: 16px;       
                }
                .f-d-24 {
                    font-size: 18px;       
                }
                .f-d-28 {
                    font-size: 20px;       
                }
                .f-d-36 {
                    font-size: 20px;       
                }
                .f-d-48 {
                    font-size: 28px;       
                }
                .mt-d-200 {
                    margin-top: 100px;
                }
                .mt-d-100 {
                    margin-top: 50px;
                }
                .mt-d-90 {
                    margin-top: 40px;
                }
            }
        </style>
        <style amp-runtime="" i-amphtml-version="012106072053000">
            html {
                overflow-x: hidden!important
            }

            html.i-amphtml-fie {
                height: 100%!important;
                width: 100%!important
            }

            html:not([amp4ads]),html:not([amp4ads]) body {
                height: auto!important
            }

            html:not([amp4ads]) body {
                margin: 0!important
            }

            body {
                -webkit-text-size-adjust: 100%;
                -moz-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                text-size-adjust: 100%
            }

            html.i-amphtml-singledoc.i-amphtml-embedded {
                -ms-touch-action: pan-y pinch-zoom;
                touch-action: pan-y pinch-zoom
            }

            html.i-amphtml-fie>body,html.i-amphtml-singledoc>body {
                overflow: visible!important
            }

            html.i-amphtml-fie:not(.i-amphtml-inabox)>body,html.i-amphtml-singledoc:not(.i-amphtml-inabox)>body {
                position: rel00ative!important
            }

            html.i-amphtml-ios-embed-legacy>body {
                overflow-x: hidden!important;
                overflow-y: auto!important;
                position: absolute!important
            }

            html.i-amphtml-ios-embed {
                overflow-y: auto!important;
                position: static
            }

            #i-amphtml-wrapper {
                overflow-x: hidden!important;
                overflow-y: auto!important;
                position: absolute!important;
                top: 0!important;
                left: 0!important;
                right: 0!important;
                bottom: 0!important;
                margin: 0!important;
                display: block!important
            }

            html.i-amphtml-ios-embed.i-amphtml-ios-overscroll,html.i-amphtml-ios-embed.i-amphtml-ios-overscroll>#i-amphtml-wrapper {
                -webkit-overflow-scrolling: touch!important
            }

            #i-amphtml-wrapper>body {
                position: relative!important;
                border-top: 1px solid transparent!important
            }

            #i-amphtml-wrapper+body {
                visibility: visible
            }

            #i-amphtml-wrapper+body .i-amphtml-lightbox-element,#i-amphtml-wrapper+body[i-amphtml-lightbox] {
                visibility: hidden
            }

            #i-amphtml-wrapper+body[i-amphtml-lightbox] .i-amphtml-lightbox-element {
                visibility: visible
            }

            #i-amphtml-wrapper.i-amphtml-scroll-disabled,.i-amphtml-scroll-disabled {
                overflow-x: hidden!important;
                overflow-y: hidden!important
            }

            /* ========  Play Button CSS ========== */


            amp-instagram {
                padding: 54px 0px 0px!important;
                background-color: #fff
            }

            amp-iframe iframe {
                box-sizing: border-box!important
            }

            [amp-access][amp-access-hide] {
                display: none
            }

            [subscriptions-dialog],body:not(.i-amphtml-subs-ready) [subscriptions-action],body:not(.i-amphtml-subs-ready) [subscriptions-section] {
                display: none!important
            }

            amp-experiment,amp-live-list>[update] {
                display: none
            }

            amp-list[resizable-children]>.i-amphtml-loading-container.amp-hidden {
                display: none!important
            }

            amp-list [fetch-error],amp-list[load-more] [load-more-button],amp-list[load-more] [load-more-end],amp-list[load-more] [load-more-failed],amp-list[load-more] [load-more-loading] {
                display: none
            }

            amp-list[diffable] div[role=list] {
                display: block
            }

            amp-story-page,amp-story[standalone] {
                min-height: 1px!important;
                display: block!important;
                height: 100%!important;
                margin: 0!important;
                padding: 0!important;
                overflow: hidden!important;
                width: 100%!important
            }

            amp-story[standalone] {
                background-color: #202125!important;
                position: relative!important
            }

            amp-story-page {
                background-color: #757575
            }

            amp-story .amp-active>div,amp-story .i-amphtml-loader-background {
                display: none!important
            }

            amp-story-page:not(:first-of-type):not([distance]):not([active]) {
                transform: translateY(1000vh)!important
            }

            amp-autocomplete {
                position: relative!important;
                display: inline-block!important
            }

            amp-autocomplete>input,amp-autocomplete>textarea {
                padding: 0.5rem;
                border: 1px solid rgba(0,0,0,0.33)
            }

            .i-amphtml-autocomplete-results,amp-autocomplete>input,amp-autocomplete>textarea {
                font-size: 1rem;
                line-height: 1.5rem
            }

            [amp-fx^=fly-in] {
                visibility: hidden
            }

            amp-script[nodom],amp-script[sandboxed] {
                position: fixed!important;
                top: 0!important;
                width: 1px!important;
                height: 1px!important;
                overflow: hidden!important;
                visibility: hidden
            }

            /*# sourceURL=/css/ampdoc.css*/
            [hidden] {
                display: none!important
            }

            .i-amphtml-element {
                display: inline-block
            }

            .i-amphtml-blurry-placeholder {
                transition: opacity 0.3s cubic-bezier(0.0,0.0,0.2,1)!important;
                pointer-events: none
            }

            [layout=nodisplay]:not(.i-amphtml-element) {
                display: none!important
            }

            .i-amphtml-layout-fixed,[layout=fixed][width][height]:not(.i-amphtml-layout-fixed) {
                display: inline-block;
                position: relative
            }

            .i-amphtml-layout-responsive,[layout=responsive][width][height]:not(.i-amphtml-layout-responsive),[width][height][heights]:not([layout]):not(.i-amphtml-layout-responsive),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-layout-responsive) {
                display: block;
                position: relative
            }

            .i-amphtml-layout-intrinsic,[layout=intrinsic][width][height]:not(.i-amphtml-layout-intrinsic) {
                display: inline-block;
                position: relative;
                max-width: 100%
            }

            .i-amphtml-layout-intrinsic .i-amphtml-sizer {
                max-width: 100%
            }

            .i-amphtml-intrinsic-sizer {
                max-width: 100%;
                display: block!important
            }

            .i-amphtml-layout-container,.i-amphtml-layout-fixed-height,[layout=container],[layout=fixed-height][height]:not(.i-amphtml-layout-fixed-height) {
                display: block;
                position: relative
            }

            .i-amphtml-layout-fill,.i-amphtml-layout-fill.i-amphtml-notbuilt,[layout=fill]:not(.i-amphtml-layout-fill),body noscript>* {
                display: block;
                overflow: hidden!important;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0
            }

            body noscript>* {
                position: absolute!important;
                width: 100%;
                height: 100%;
                z-index: 2
            }

            body noscript {
                display: inline!important
            }

            .i-amphtml-layout-flex-item,[layout=flex-item]:not(.i-amphtml-layout-flex-item) {
                display: block;
                position: relative;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto
            }

            .i-amphtml-layout-fluid {
                position: relative
            }

            .i-amphtml-layout-size-defined {
                overflow: hidden!important
            }

            .i-amphtml-layout-awaiting-size {
                position: absolute!important;
                top: auto!important;
                bottom: auto!important
            }

            i-amphtml-sizer {
                display: block!important
            }

            @supports (aspect-ratio: 1/1) {
                i-amphtml-sizer.i-amphtml-disable-ar {
                    display:none!important
                }
            }

            .i-amphtml-blurry-placeholder,.i-amphtml-fill-content {
                display: block;
                height: 0;
                max-height: 100%;
                max-width: 100%;
                min-height: 100%;
                min-width: 100%;
                width: 0;
                margin: auto
            }

            .i-amphtml-layout-size-defined .i-amphtml-fill-content {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0
            }

            .i-amphtml-replaced-content,.i-amphtml-screen-reader {
                padding: 0!important;
                border: none!important
            }

            .i-amphtml-screen-reader {
                position: fixed!important;
                top: 0px!important;
                left: 0px!important;
                width: 4px!important;
                height: 4px!important;
                opacity: 0!important;
                overflow: hidden!important;
                margin: 0!important;
                display: block!important;
                visibility: visible!important
            }

            .i-amphtml-screen-reader~.i-amphtml-screen-reader {
                left: 8px!important
            }

            .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
                left: 12px!important
            }

            .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
                left: 16px!important
            }

            .i-amphtml-unresolved {
                position: relative;
                overflow: hidden!important
            }

            .i-amphtml-select-disabled {
                -webkit-user-select: none!important;
                -ms-user-select: none!important;
                user-select: none!important
            }

            .i-amphtml-notbuilt,[layout]:not(.i-amphtml-element),[width][height][heights]:not([layout]):not(.i-amphtml-element),[width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
                position: relative;
                overflow: hidden!important;
                color: transparent!important
            }

            .i-amphtml-notbuilt:not(.i-amphtml-layout-container)>*,[layout]:not([layout=container]):not(.i-amphtml-element)>*,[width][height][heights]:not([layout]):not(.i-amphtml-element)>*,[width][height][sizes]:not([layout]):not(.i-amphtml-element)>* {
                display: none
            }

            amp-img:not(.i-amphtml-element)[i-amphtml-ssr]>img.i-amphtml-fill-content {
                display: block
            }

            .i-amphtml-notbuilt:not(.i-amphtml-layout-container),[layout]:not([layout=container]):not(.i-amphtml-element),[width][height][heights]:not([layout]):not(.i-amphtml-element),[width][height][sizes]:not([layout]):not(.i-amphtml-element) {
                color: transparent!important;
                line-height: 0!important
            }

            .i-amphtml-ghost {
                visibility: hidden!important
            }

            .i-amphtml-element>[placeholder],[layout]:not(.i-amphtml-element)>[placeholder],[width][height][heights]:not([layout]):not(.i-amphtml-element)>[placeholder],[width][height][sizes]:not([layout]):not(.i-amphtml-element)>[placeholder] {
                display: block;
                line-height: normal
            }

            .i-amphtml-element>[placeholder].amp-hidden,.i-amphtml-element>[placeholder].hidden {
                visibility: hidden
            }

            .i-amphtml-element:not(.amp-notsupported)>[fallback],.i-amphtml-layout-container>[placeholder].amp-hidden,.i-amphtml-layout-container>[placeholder].hidden {
                display: none
            }

            .i-amphtml-layout-size-defined>[fallback],.i-amphtml-layout-size-defined>[placeholder] {
                position: absolute!important;
                top: 0!important;
                left: 0!important;
                right: 0!important;
                bottom: 0!important;
                z-index: 1
            }

            amp-img.i-amphtml-ssr:not(.i-amphtml-element)>[placeholder] {
                z-index: auto
            }

            .i-amphtml-notbuilt>[placeholder] {
                display: block!important
            }

            .i-amphtml-hidden-by-media-query {
                display: none!important
            }

            .i-amphtml-element-error {
                background: red!important;
                color: #fff!important;
                position: relative!important
            }

            .i-amphtml-element-error:before {
                content: attr(error-message)
            }

            i-amp-scroll-container,i-amphtml-scroll-container {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: block
            }

            i-amp-scroll-container.amp-active,i-amphtml-scroll-container.amp-active {
                overflow: auto;
                -webkit-overflow-scrolling: touch
            }

            .i-amphtml-loading-container {
                display: block!important;
                pointer-events: none;
                z-index: 1
            }

            .i-amphtml-notbuilt>.i-amphtml-loading-container {
                display: block!important
            }

            .i-amphtml-loading-container.amp-hidden {
                visibility: hidden
            }

            .i-amphtml-element>[overflow] {
                cursor: pointer;
                position: relative;
                z-index: 2;
                visibility: hidden;
                display: initial;
                line-height: normal
            }

            .i-amphtml-layout-size-defined>[overflow] {
                position: absolute
            }

            .i-amphtml-element>[overflow].amp-visible {
                visibility: visible
            }

            template {
                display: none!important
            }

            .amp-border-box,.amp-border-box *,.amp-border-box :after,.amp-border-box :before {
                box-sizing: border-box
            }

            amp-pixel {
                display: none!important
            }

            amp-analytics,amp-auto-ads,amp-story-auto-ads {
                position: fixed!important;
                top: 0!important;
                width: 1px!important;
                height: 1px!important;
                overflow: hidden!important;
                visibility: hidden
            }

            html.i-amphtml-fie>amp-analytics {
                position: initial!important
            }

            [visible-when-invalid]:not(.visible),form [submit-error],form [submit-success],form [submitting] {
                display: none
            }

            amp-accordion {
                display: block!important
            }

            @media (min-width: 1px) {
                :where(amp-accordion>section)>:first-child {
                    margin:0;
                    background-color: #efefef;
                    padding-right: 20px;
                    border: 1px solid #dfdfdf
                }

                :where(amp-accordion>section)>:last-child {
                    margin: 0
                }
            }

            amp-accordion>section {
                float: none!important
            }

            amp-accordion>section>* {
                float: none!important;
                display: block!important;
                overflow: hidden!important;
                position: relative!important
            }

            amp-accordion,amp-accordion>section {
                margin: 0
            }

            amp-accordion:not(.i-amphtml-built)>section>:last-child {
                display: none!important
            }

            amp-accordion:not(.i-amphtml-built)>section[expanded]>:last-child {
                display: block!important
            }

            /*# sourceURL=/css/ampshared.css*/
        </style>

        <title>
            @section('title')
            | PVData
            @show
        </title>

        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        
        <meta property="og:site_name" content="PVData">
        <meta property="article:modified_time" content="2021-04-15T22:12:37+00:00">
        
        <meta property="og:image:width" content="2048">
        <meta property="og:image:height" content="1076">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="facebook-domain-verification" content="diri2y0cro799an05ydexogembelg3">
        <meta name="generator" content="AMP Plugin v1.5.5; mode=transitional">
        
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <link rel="preload" href="https:///cdn.optimizely.com/js/18179512350.js" as="script">
        <link rel="preload" as="style" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" onload="this.rel='stylesheet'">

        
        <script type="text/javascript" src="https://cdn.ampproject.org/v0.js" id="amp-runtime-js" async></script>       <!-- This is a script which uses for image sliders and so on.--->
        <script type="text/javascript" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js" id="amp-animation-js" async custom-element="amp-animation"></script>
        <script type="text/javascript" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" id="amp-bind-js" async custom-element="amp-bind"></script>
        <script src="https://cdn.ampproject.org/v0/amp-geo-0.1.js" async="" custom-element="amp-geo"></script>
        <script type="text/javascript" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js" id="amp-iframe-js" async custom-element="amp-iframe"></script> 
        <script type="text/javascript" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js" id="amp-lightbox-js" async custom-element="amp-lightbox"></script> 
        <script type="text/javascript" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js" id="amp-position-observer-js" async custom-element="amp-position-observer"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="shortcut icon" href="{{ url('assets/logo only high resolution.png') }}">
        <link rel="icon" sizes="196x196" href="{{ url('assets/logo only high resolution.png') }}">

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">


        <style amp-custom="">
            *,:after,:before {
                box-sizing: border-box
            }

            * {
                margin: 0
            }

            :focus {
                outline: 2px auto #2079c3
            }

            :target:before {
                content: "";
                display: block;
                height: calc(var(--nav-offset-height) * 1px);
                margin-top: calc(var(--nav-offset-height) * -1 * 1px)
            }

            html {
                font-size: 14px;
                -webkit-font-smoothing: antialiased;
                font-family: Proxima Nova,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
                color: #162020;
                text-rendering: optimizeLegibility;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                text-size-adjust: 100%;
                cursor: default
            }

            @media screen and (min-width: 320px) {
                html {
                    font-size:calc(12.54545px + .45455vw)
                }
            }

            @media screen and (min-width: 1200px) {
                html {
                    font-size:18px
                }
            }

            body {
                font-size: 1rem;
                line-height: 1.4814814814815;
                line-height: 1.5;
                margin: 0;
                background: #fff
            }

            details,footer,header,main,nav,section,summary {
                display: block
            }

            main {
                overflow: hidden
            }

            [hidden] {
                display: none
            }

            a {
                color: #0ca750;
                text-decoration: none;
                background-color: transparent
            }

            a:active,a:hover {
                text-decoration: underline;
                outline: 0
            }

            button,input {
                margin-right: 0;
                margin-bottom: 0;
                margin-left: 0;
                font: inherit;
                color: inherit
            }

            button {
                overflow: visible
            }

            button {
                text-transform: none
            }

            button,html input[type=button],input[type=reset],input[type=submit] {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;
                cursor: pointer
            }

            button[disabled],html input[disabled] {
                cursor: default
            }

            button::-moz-focus-inner,input::-moz-focus-inner {
                padding: 0;
                border: 0
            }

            input {
                line-height: normal
            }

            input[type=checkbox],input[type=radio] {
                box-sizing: border-box;
                padding: 0
            }

            input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
                height: auto
            }

            input[type=search] {
                -webkit-appearance: textfield;
                -moz-appearance: textfield;
                appearance: textfield
            }

            input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration {
                -webkit-appearance: none;
                appearance: none
            }

            fieldset {
                padding: 1.5rem;
                margin-right: 0;
                margin-bottom: 0;
                margin-left: 0;
                border: 1px solid #c8cccc
            }

            legend {
                padding: 0;
                border: 0
            }

            blockquote+*,iframe:not([title="Optimizely Internal Frame"])+*,ul+* {
                margin-top: 1.77778rem
            }

            ul {
                padding-left: 2.22222rem
            }

            li+li {
                margin-top: .44444rem
            }

            blockquote {
                font-size: 1.16667rem;
                line-height: 1.3968253968254;
                position: relative
            }

            @media screen and (min-width: 30rem) {
                blockquote {
                    font-size:1.33333rem;
                    line-height: 1.3333333333333
                }
            }

            blockquote:after,blockquote:before {
                speak: none
            }

            blockquote:before {
                position: absolute;
                left: -.5em;
                content: "“"
            }

            blockquote:after {
                content: "”"
            }

            @media screen and (max-width: 30rem) {
                blockquote:before {
                    position:static
                }
            }

            .button {
                font-weight: 700
            }

            .button {
                min-width: 8.33333rem;
                padding: .88889rem 1.94444rem .77778rem;
                font-size: .88889rem;
                color: #fff;
                background-color: #0ca750;
                display: inline-block;
                margin-right: 0;
                margin-left: 0;
                line-height: 1;
                text-align: center;
                text-shadow: none;
                vertical-align: middle;
                border: .11111rem solid transparent;
                border-radius: 0;
                transition: transform .3s cubic-bezier(.4,0,.2,1)
            }

            .button:hover {
                color: #fff;
                background-color: #008b46;
                border-color: transparent
            }

            .button:active,.button:hover,.button:link,.button:visited {
                text-decoration: none;
                cursor: pointer
            }

            .button:active {
                transform: translateY(.05556rem)
            }

            .Button--large {
                min-width: 10rem;
                padding: 1.11111rem 2.33333rem 1rem;
                font-size: 1rem
            }

            .button._light {
                color: #273333;
                background-color: #f3f4f4;
                border-color: transparent
            }

            .button._light:hover {
                color: #273333;
                background-color: #fff;
                border-color: transparent
            }

            @keyframes spin {
                0% {
                    transform: translate(-50%,-50%) rotate(0deg)
                }

                to {
                    transform: translate(-50%,-50%) rotate(360deg)
                }
            }

            .button:disabled {
                cursor: default
            }

            .button:disabled,.button:disabled:hover {
                color: #fff;
                background-color: #929a9b;
                border-color: transparent
            }

            .Details>.Summary:before,.Details[open]>.Summary:before {
                content: none
            }

            .Details[open]>.Summary svg {
                transform: rotate(180deg)
            }

            fieldset {
                border: none;
                padding: 0;
                margin: .88889rem 0 0
            }

            fieldset label+label,fieldset legend+label {
                margin-top: .22222rem
            }

            label,legend {
                position: relative;
                display: block;
                color: inherit;
                cursor: pointer
            }

            label+label,legend+label {
                margin-top: .88889rem
            }

            label i,legend>span {
                font-size: .72222rem;
                line-height: 1.6410256410256;
                display: inline-block;
                font-style: normal
            }

            label>span,legend>span {
                font-size: .88889rem;
                line-height: 1.5;
                font-weight: 700;
                display: block;
                padding-top: .22222rem;
                padding-bottom: .22222rem;
                text-align: left
            }

            input {
                font-size: .88889rem;
                line-height: 1.5;
                line-height: 1;
                font-weight: 400;
                position: relative;
                width: 100%;
                padding: .44444rem;
                color: #162020;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background: #fff;
                border: 1px solid #c8cccc;
                border-radius: 3px;
                outline: 0
            }

            input:focus,input:hover {
                border-color: #0ca750
            }

            input:focus {
                box-shadow: 0 0 0 1px #0ca750
            }

            .Form-radio {
                display: inline-block;
                width: .88889rem;
                height: .88889rem;
                margin: .22222rem .88889rem .22222rem .22222rem;
                flex: 0 0 auto;
                vertical-align: middle;
                background: #fff;
                border: 1px solid #c8cccc;
                border-radius: 50%
            }

            .Form-radio+span {
                font-weight: 400;
                padding: 0
            }

            input[type=checkbox],input[type=radio] {
                position: absolute;
                width: .88889rem;
                height: .88889rem;
                margin: .22222rem;
                opacity: 0
            }

            input:focus+.Form-radio,label:hover input+.Form-radio,label:hover input:checked+.Form-radio {
                border: 1px solid #008b46;
                box-shadow: 0 0 0 1px #008b46
            }

            @keyframes validshow {
                0% {
                    opacity: 0
                }
            }

            input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
                margin: 0;
                -webkit-appearance: none;
                appearance: none
            }

            input[type=number] {
                -moz-appearance: textfield
            }

            .row {
                display: flex;
                width: 100%;
                max-width: 69.33333rem;
                margin-right: auto;
                margin-left: auto;
                flex-direction: row;
                justify-content: center
            }

            @media screen and (max-width: 30rem) {
                .row {
                    flex-wrap:wrap
                }
            }

            .row._centeritems {
                align-items: center
            }

            ._span-3 {
                max-width: 25%;
                padding-right: .66667rem;
                padding-left: .66667rem;
                flex-basis: 25%
            }

            @media screen and (max-width: 30rem) {
                ._span-3 {
                    max-width:100%;
                    flex-basis: 100%
                }
            }

            ._span-4 {
                max-width: 33.33333%;
                padding-right: .66667rem;
                padding-left: .66667rem;
                flex-basis: 33.33333%
            }

            @media screen and (max-width: 30rem) {
                ._span-4 {
                    max-width:100%;
                    flex-basis: 100%
                }
            }

            ._span-8 {
                max-width: 66.66667%;
                padding-right: .66667rem;
                padding-left: .66667rem;
                flex-basis: 66.66667%
            }

            @media screen and (max-width: 30rem) {
                ._span-8 {
                    max-width:100%;
                    flex-basis: 100%
                }
            }

            ._span-9 {
                max-width: 75%;
                padding-right: .66667rem;
                padding-left: .66667rem;
                flex-basis: 75%
            }

            @media screen and (max-width: 30rem) {
                ._span-9 {
                    max-width:100%;
                    flex-basis: 100%
                }
            }

            ._span-12 {
                max-width: 100%;
                padding-right: .66667rem;
                padding-left: .66667rem;
                flex-basis: 100%
            }

            @media screen and (max-width: 30rem) {
                ._span-12 {
                    max-width:100%;
                    flex-basis: 100%
                }
            }

            .col>.row {
                max-width: calc(100% + 1.33333rem);
                margin-right: -.66667rem;
                margin-left: -.66667rem
            }

            @media screen and (max-width: 30rem) {
                .col>.row {
                    width:calc(100% + 1.33333rem)
                }
            }

            @media screen and (max-width: 30rem) {
                .col+.col {
                    margin-top:1.77778rem
                }
            }

            body.amp-iso-country-gb #uk-phone-number,body.amp-iso-country-gb #uk-phone-number-mobile,body.amp-iso-country-ie #uk-phone-number,body.amp-iso-country-ie #uk-phone-number-mobile {
                display: inline-flex
            }

            body.amp-iso-country-gb #us-phone-number,body.amp-iso-country-gb #us-phone-number-mobile,body.amp-iso-country-ie #us-phone-number,body.amp-iso-country-ie #us-phone-number-mobile {
                display: none
            }

            .pointer-events-all {
                pointer-events: all
            }

            .pointer-events-none {
                pointer-events: none
            }

            .rotate-caret svg {
                transition: transform .3s cubic-bezier(.4,0,.2,1)
            }

            .rotate-caret.active svg {
                transform: rotate(180deg)
            }

            @media screen and (min-width: 60rem) {
                .login-modal {
                    position:absolute;
                    z-index: 5;
                    width: auto;
                    padding: 0;
                    color: #fff;
                    background: inherit;
                    border-radius: 3px;
                    cursor: default;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    filter: drop-shadow(0 0 5px rgba(0,0,0,.5));
                    will-change: filter;
                    top: auto;
                    left: auto
                }

                .login-modal:before {
                    position: absolute;
                    width: 0;
                    height: 0;
                    font-size: 0;
                    line-height: 0;
                    content: "";
                    top: -10px;
                    border-right: 10px solid transparent;
                    border-bottom: 10px solid;
                    border-left: 10px solid transparent;
                    border-bottom-color: inherit;
                    right: 40px
                }
            }

            h1 {
                font-weight: 800;
                color: #162020;
                font-size: 2.38889rem;
                line-height: 1.1782945736434;
                font-family: Proxima Nova,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
            }

            @media screen and (min-width: 30rem) {
                h1 {
                    font-size:3.16667rem;
                    line-height: 1.1228070175439
                }
            }

            h1+* {
                margin-top: 1.77778rem
            }

            h1._small {
                font-size: 1.77778rem;
                line-height: 1.25
            }

            @media screen and (min-width: 30rem) {
                h1._small {
                    font-size:2.38889rem;
                    line-height: 1.1782945736434
                }
            }

            h2 {
                font-weight: 800;
                color: #162020;
                font-size: 1.77778rem;
                font-size: 2.38889rem;
                line-height: 1.25;
                font-family: Proxima Nova,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
            }

            @media screen and (min-width: 30rem) {
                h2 {
                    font-size:2.38889rem;
                    line-height: 1.1782945736434
                }
            }

            h2+* {
                margin-top: 1.77778rem
            }

            h3 {
                font-weight: 800;
                color: #162020;
                font-size: 1.16667rem;
                line-height: 1.3968253968254;
                font-family: Proxima Nova,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
            }

            h3+* {
                margin-top: .44444rem
            }

            h4 {
                font-weight: 800;
                color: #162020;
                font-size: 1rem;
                line-height: 1.4814814814815;
                font-family: Proxima Nova,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
            }

            h4+* {
                margin-top: .44444rem
            }

            @keyframes rotator {
                0% {
                    transform: rotate(0deg)
                }

                to {
                    transform: rotate(270deg)
                }
            }

            @keyframes dash {
                0% {
                    stroke-dashoffset: 180
                }

                50% {
                    transform: rotate(135deg);
                    stroke-dashoffset: 45
                }

                to {
                    transform: rotate(450deg);
                    stroke-dashoffset: 180
                }
            }

            .Main {
                overflow: hidden
            }

            @supports ((position: -webkit-sticky) or (position:sticky)) {
                .Main--hasSticky {
                    overflow:visible
                }
            }

            .Nav ul {
                padding: 0;
                list-style-type: none
            }

            .Nav ul,.Nav ul li {
                margin: 0
            }

            .Nav--vertical>ul>li a,.Nav--vertical>ul>li button,.Nav--vertical>ul ul>li>a,.Nav--vertical>ul ul>li>button {
                text-transform: none;
                letter-spacing: normal;
                font-size: 1rem;
                line-height: 1.4814814814815;
                font-weight: 700;
                display: block;
                width: 100%;
                min-width: 0;
                padding: .44444rem 1.77778rem;
                color: #162020;
                text-align: left;
                border: none;
                outline: none;
                box-shadow: none
            }

            .Nav--vertical>ul>li a:after,.Nav--vertical>ul>li button:after,.Nav--vertical>ul ul>li>a:after,.Nav--vertical>ul ul>li>button:after {
                margin-left: .44444rem;
                transform: translateY(-2px)
            }

            .Nav--vertical>ul>li a:active,.Nav--vertical>ul>li a:focus,.Nav--vertical>ul>li a:hover,.Nav--vertical>ul>li button:active,.Nav--vertical>ul>li button:focus,.Nav--vertical>ul>li button:hover,.Nav--vertical>ul ul>li>a:active,.Nav--vertical>ul ul>li>a:focus,.Nav--vertical>ul ul>li>a:hover,.Nav--vertical>ul ul>li>button:active,.Nav--vertical>ul ul>li>button:focus,.Nav--vertical>ul ul>li>button:hover {
                color: #0ca750;
                text-decoration: none
            }

            .Nav--vertical>ul ul>li>a,.Nav--vertical>ul ul>li>button {
                padding: .44444rem 2.22222rem
            }

            .Nav--vertical>ul ul {
                display: none
            }

            .Nav--vertical>ul ul>li:first-of-type {
                margin-top: .44444rem
            }

            .Nav--vertical>ul ul>li:last-of-type {
                margin-bottom: .44444rem
            }

            .Nav--tight li a,.Nav--tight li button,.Nav--tight ul>li>a,.Nav--tight ul>li>button {
                font-size: .88889rem;
                line-height: 1.5;
                line-height: 1;
                padding-right: 0;
                padding-left: 0
            }

            .Nav--tight li+li {
                margin-top: 0
            }

            @media screen and (min-width: 30rem) {
                .Nav--vertical:not(.Nav--removeTopMargin) ul {
                    margin-top:2.22222rem
                }
            }

            .outlinelist {
                padding-left: 0;
                list-style-type: none;
                counter-reset: outline-level-1
            }

            .outlinelist h2 {
                font-size: 1.16667rem;
                line-height: 1.3968253968254;
                font-weight: 700
            }

            @media screen and (min-width: 30rem) {
                .outlinelist h2 {
                    font-size:1.33333rem;
                    line-height: 1.3333333333333
                }
            }

            .outlinelist h2+*,.outlinelist h3+* {
                margin-top: .88889rem
            }

            .outlinelist h3 {
                font-size: 1.16667rem;
                line-height: 1.3968253968254
            }

            .outlinelist h2,.outlinelist h3 {
                display: inline-block
            }

            .outlinelist li:before {
                font-weight: 700;
                color: #162020
            }

            .outlinelist>li:before {
                font-size: 1.16667rem;
                line-height: 1.3968253968254;
                display: inline-block;
                margin-right: .44444rem;
                color: #162020;
                content: counter(outline-level-1) ". ";
                counter-increment: outline-level-1
            }

            @media screen and (min-width: 30rem) {
                .outlinelist>li:before {
                    font-size:1.33333rem;
                    line-height: 1.3333333333333
                }
            }

            .outlinelist>li>ol {
                margin-bottom: .88889rem;
                list-style-type: upper-alpha
            }

            .outlinelist>li>ul {
                margin-bottom: .88889rem;
                list-style-type: disc
            }

            .outlinelist>li+li {
                margin-top: 2.22222rem
            }

            .outlinelist>li>ol,.outlinelist>li>ol>li,.outlinelist>li>ul>li {
                padding-left: .88889rem
            }

            .outlinelist>li>ol>li+li {
                margin-top: .88889rem
            }

            [type=range] {
                outline: 0;
                width: 100%;
                margin: 15px 0;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: 5px
            }

            [type=range]:focus {
                box-shadow: 0 0 0 .11111rem #fff,0 0 0 .22222rem #0ca750
            }

            [type=range]::-webkit-slider-thumb {
                z-index: 2;
                box-shadow: 0 0 6px rgba(22,32,32,.16),0 3px 6px rgba(22,32,32,.23);
                position: relative;
                width: 30px;
                height: 30px;
                background: #0ca750;
                border-radius: 50%;
                outline: 0;
                cursor: pointer;
                margin-top: -10px;
                -webkit-appearance: none;
                appearance: none
            }

            [type=range]::-moz-range-thumb {
                z-index: 2;
                box-shadow: 0 0 6px rgba(22,32,32,.16),0 3px 6px rgba(22,32,32,.23);
                position: relative;
                width: 30px;
                height: 30px;
                background: #0ca750;
                border-radius: 50%;
                outline: 0;
                cursor: pointer
            }

            [type=range]::-ms-thumb {
                z-index: 2;
                box-shadow: 0 0 6px rgba(22,32,32,.16),0 3px 6px rgba(22,32,32,.23);
                position: relative;
                width: 30px;
                height: 30px;
                background: #0ca750;
                border-radius: 50%;
                outline: 0;
                cursor: pointer;
                margin-top: 0
            }

            [type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 10px;
                border-radius: 5px;
                outline: 0;
                cursor: pointer;
                background: linear-gradient(90deg,#0f6e84,#0b968f,#2bb656,#59cb59)
            }

            [type=range]::-moz-range-track {
                width: 100%;
                height: 10px;
                border-radius: 5px;
                outline: 0;
                cursor: pointer;
                background: #929a9b
            }

            [type=range]::-ms-fill-upper,[type=range]::-ms-track {
                width: 100%;
                height: 10px;
                border-radius: 5px;
                outline: 0;
                cursor: pointer;
                background: #929a9b
            }

            [type=range]::-moz-range-progress {
                width: 100%;
                height: 10px;
                border-radius: 5px;
                outline: 0;
                cursor: pointer;
                background: linear-gradient(90deg,#0f6e84,#0b968f,#2bb656,#59cb59)
            }

            [type=range]::-ms-fill-lower {
                background: linear-gradient(90deg,#0f6e84,#0b968f,#2bb656,#59cb59)
            }

            @keyframes Searchbar-validshow {
                0% {
                    opacity: 0
                }
            }

            .section._multirow>.row+.row {
                margin-top: 1.77778rem
            }

            @media screen and (min-width: 30rem) {
                .section._multirow>.row+.row {
                    margin-top:2.22222rem
                }
            }

            .section {
                padding-top: 4.44444rem;
                padding-bottom: 4.44444rem;
                background: #fff;
                overflow: hidden;
                background-size: cover
            }

            @media screen and (max-width: 30rem) {
                .section {
                    padding-top:2.22222rem;
                    padding-bottom: 2.22222rem
                }
            }

            .SF details[open]>summary {
                color: #0ca750
            }

            .SF .Summary--arrow:after {
                margin-left: .44444rem;
                border-color: currentcolor transparent transparent;
                border-style: solid;
                border-width: .22222rem .22222rem 0;
                content: ""
            }

            .SF .rotate,.SF details[open]>.arrow,.SF details[open]>summary>.Summary--arrow:after {
                transform: rotate(180deg)
            }

            body.amp-iso-country-gb #uk-footer-phone-number,body.amp-iso-country-ie #uk-footer-phone-number {
                display: block
            }

            body.amp-iso-country-gb #us-footer-phone-number,body.amp-iso-country-ie #us-footer-phone-number {
                display: none
            }

            .Summary {
                cursor: pointer;
                position: relative
            }

            .Summary::-webkit-details-marker,.Summary::marker {
                display: none
            }

            .Details[open] .fa-chevron-down {
                transform: rotate(-180deg)
            }

            .hover-c--neutral-500:hover {
                color: #929a9b
            }

            @keyframes fadeOut {
                to {
                    opacity: 0;
                    visibility: hidden
                }
            }

            @keyframes slideFromLeft {
                0% {
                    transform: translate3d(-100%,0,0)
                }
            }

            @keyframes slideFromRight {
                0% {
                    transform: translate3d(100%,0,0)
                }
            }

            @keyframes slideToLeft {
                99% {
                    opacity: 1
                }

                to {
                    opacity: 0;
                    transform: translate3d(-100%,0,0)
                }
            }

            @keyframes slideToRight {
                99% {
                    opacity: 1
                }

                to {
                    opacity: 0;
                    transform: translate3d(100%,0,0)
                }
            }

            .AMPLightbox .AMPLightbox-x {
                line-height: .5
            }

            .AMPLightbox .AMPLightbox-x:after {
                content: "×"
            }

            .Tooltip {
                position: absolute;
                z-index: 5;
                width: 20rem;
                padding: 20px;
                color: inherit;
                background: inherit;
                border-radius: 3px;
                cursor: default;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                filter: drop-shadow(0 0 5px rgba(0,0,0,.5));
                will-change: filter;
                top: calc(100% + 1.2em);
                left: -43px;
                display: none
            }

            .Tooltip:before {
                position: absolute;
                width: 0;
                height: 0;
                font-size: 0;
                line-height: 0;
                content: "";
                top: -10px;
                border-right: 10px solid transparent;
                border-bottom: 10px solid;
                border-left: 10px solid transparent;
                border-bottom-color: inherit;
                left: 40px
            }

            .Tooltip:hover,:focus>.Tooltip,:hover>.Tooltip {
                display: block
            }

            [class*=amphtml-sidebar-mask] {
                z-index: 1
            }

            .button-reset {
                background: none;
                border: 0
            }

            .button-reset {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none
            }

            .button-reset::-moz-focus-inner {
                padding: 0;
                border: 0
            }

            .screenreader {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0 0 0 0);
                border: 0
            }

            .underline--grow {
                position: relative;
                text-decoration: none
            }

            .underline--grow .line {
                will-change: transform;
                position: absolute;
                bottom: -.1em;
                left: 0;
                width: 100%;
                height: .15em;
                transform: scaleX(0);
                transform-origin: 0
            }

            @keyframes bounce {
                0% {
                    transform: translate(0);
                    animation-timing-function: cubic-bezier(0,0,.2,1)
                }

                8% {
                    transform: translateY(-.44444rem);
                    animation-timing-function: cubic-bezier(.4,0,1,1)
                }

                16% {
                    transform: translate(0);
                    animation-timing-function: cubic-bezier(0,0,.2,1)
                }

                32% {
                    transform: translateY(-.44444rem);
                    animation-timing-function: cubic-bezier(.4,0,1,1)
                }

                42% {
                    transform: translate(0);
                    animation-timing-function: cubic-bezier(0,0,.2,1)
                }

                to {
                    transform: translate(0);
                    animation-timing-function: cubic-bezier(0,0,.2,1)
                }
            }

            @keyframes separateUp {
                0% {
                    transform: translate(0)
                }

                to {
                    transform: translate(-.88889rem,-.88889rem)
                }
            }

            @keyframes separateDown {
                0% {
                    transform: translate(0)
                }

                to {
                    transform: translate(.44444rem,.44444rem)
                }
            }

            .bg--lightblue {
                background: lightblue;
            }

            .bg--green {
                background: green;
            }

            .bg--purple {
                background: purple;
            }

            .bg--lightgreen {
                background: lightgreen;
            }

            .bg--teal-500 {
                background-color: #08c4b2
            }

            .bg--teal-900 {
                background-color: #026661
            }

            .bg--aqua-1000 {
                background-color: #083d4f
            }

            .bg--aqua-1100 {
                background-color: #002838
            }

            .bg--blue-700 {
                background-color: #2079c3
            }

            .bg--blue-1000 {
                background-color: #0a3960
            }

            .bg--blue-1100 {
                background-color: #002138
            }

            .bg--purple-900 {
                background-color: #483a9c
            }

            .bg--yellow-500 {
                background-color: #ffcd1c
            }

            .bg--neutral-0 {
                background-color: #fff
            }

            .bg--neutral-100 {
                background-color: #f3f4f4
            }

            .bg--neutral-200 {
                background-color: #dee1e1
            }

            .hover-bg--aqua-1100:hover {
                background-color: #002838
            }

            .hover-bg--blue-1100:hover {
                background-color: #002138
            }

            .hover-bg--neutral-300:hover {
                background-color: #c8cccc
            }

            .bg--background {
                background-color: #fff
            }

            .bg--background-light {
                background-color: #f3f4f4
            }

            .bg--background-dark {
                background-color: #002838
            }

            .bg--primary {
                background-color: #0ca750
            }

            .bg-none {
                background: none
            }

            .bg-transparent {
                background-color: transparent
            }

            .bg--dark-translucent {
                background-color: rgba(22,32,32,.6)
            }

            .bg--light-translucent {
                background-color: hsla(0,0%,100%,.6)
            }

            @media screen and (min-width: 960px) {
                .bg--teal-500-l {
                    background-color:#08c4b2
                }

                .bg--aqua-1100-l {
                    background-color: #002838
                }

                .bg--neutral-0-l {
                    background-color: #fff
                }

                .bg--neutral-100-l {
                    background-color: #f3f4f4
                }

                .hover-bg--aqua-1000-l:hover {
                    background-color: #083d4f
                }

                .hover-bg--neutral-200-l:hover {
                    background-color: #dee1e1
                }

                .top-position {
                    top: 70px;
                }
            }

            .ba {
                border-width: 1px;
                border-style: solid
            }

            .bn {
                border-width: 0;
                border-style: none
            }

            .bt {
                border-top-width: 1px;
                border-top-style: solid
            }

            .bb {
                border-bottom-width: 1px;
                border-bottom-style: solid
            }

            @media screen and (min-width: 960px) {
                .bt-l {
                    border-top-width:1px;
                    border-top-style: solid
                }

                .bb-l {
                    border-bottom-width: 1px;
                    border-bottom-style: solid
                }

                .bl-l {
                    border-left-width: 1px;
                    border-left-style: solid
                }
            }

            .b--aqua-900 {
                border-color: #035e73
            }

            .b--neutral-200 {
                border-color: #dee1e1
            }

            .b--text-inverse {
                border-color: #fff
            }

            @media screen and (min-width: 960px) {
                .b--neutral-200-l {
                    border-color:#dee1e1
                }

                .b--neutral-600-l {
                    border-color: #6e797a
                }
            }

            .br600 {
                border-radius: 8px
            }

            .br--round {
                border-radius: 50%
            }

            .bw500 {
                border-width: 1px
            }

            .bb-0 {
                border-bottom-width: 0
            }

            @media screen and (min-width: 960px) {
                .bt-0-l {
                    border-top-width:0
                }

                .bb-0-l {
                    border-bottom-width: 0
                }
            }

            .hover-c--twitter:hover {
                color: #1da1f2
            }

            .hover-c--facebook:hover {
                color: #217bee
            }

            .hover-c--linkedin:hover {
                color: #0a66c2
            }

            .hover-c--instagram:hover {
                color: #e4405f
            }

            .hover-c--youtube:hover {
                color: red
            }

            .hover-c--pinterest:hover {
                color: #e60023
            }

            .c--green-700 {
                color: #0ca750
            }

            .c--aqua-1100 {
                color: #002838
            }

            .c--blue-700 {
                color: #2079c3
            }

            .c--neutral-0 {
                color: #fff
            }

            .c--neutral-500 {
                color: #929a9b
            }

            .c--neutral-700 {
                color: #515e5f
            }

            .c--neutral-800 {
                color: #364141
            }

            .hover-c--neutral-400:hover {
                color: #b0b6b7
            }

            .hover-c--neutral-500:hover {
                color: #929a9b
            }

            .hover-c--neutral-800:hover {
                color: #364141
            }

            .c--text {
                color: #162020
            }

            .c--text-inverse {
                color: #fff
            }

            .c--link {
                color: #0ca750
            }

            .hover-c--text-inverse:hover {
                color: #fff
            }

            .hover-c--link-dark:hover {
                color: #008b46
            }

            @media screen and (min-width: 480px) {
                .c--neutral-700-ns {
                    color:#515e5f
                }

                .hover-c--neutral-800-ns:hover {
                    color: #364141
                }
                
            }

            @media screen and (min-width: 320px) {
                .mobile-menu {
                    display: none !important;
                }
            }

            @media screen and (min-width: 960px) {
                .c--text-l {
                    color:#162020
                }
                .mobile-menu {
                    display: block !important;
                }
            }

            .top0 {
                top: 0
            }

            .top300 {
                top: .44444rem
            }

            .top400 {
                top: .88889rem
            }

            .right0 {
                right: 0
            }

            .right300 {
                right: .44444rem
            }

            .right600 {
                right: 2.22222rem
            }

            .bottom0 {
                bottom: 0
            }

            .bottom300 {
                bottom: .44444rem
            }

            .bottom400 {
                bottom: .88889rem
            }

            .bottom500 {
                bottom: 1.77778rem
            }

            @media screen and (min-width: 960px) {
                .top800-l {
                    top:6.66667rem
                }

                .right0-l {
                    right: 0
                }
            }
            
            .left0 {
                left: 0
            }

            .left300 {
                left: .44444rem
            }

            .left600 {
                left: 2.22222rem
            }

            @media screen and (min-width: 480px) {
                .top400-ns {
                    top:.88889rem
                }

                .top500-ns {
                    top: 1.77778rem
                }

                .right0-ns {
                    right: 0
                }

                .bottom400-ns {
                    bottom: .88889rem
                }

                .bottom600-ns {
                    bottom: 2.22222rem
                }

                .left500-ns {
                    left: 1.77778rem
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .left600-m {
                    left:2.22222rem
                }

                .top-position {
                    top: 0px;
                }
            }

            @media screen and (min-width: 960px) {
                .top0-l {
                    top:0
                }

                .right0-l {
                    right: 0
                }
            }

            .dn {
                display: none
            }

            .db {
                display: block
            }

            .dib {
                display: inline-block
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            @media screen and (min-width: 480px) {
                .dn-ns {
                    display:none
                }

                .db-ns {
                    display: block
                }

                .di-ns {
                    display: inline
                }

                .flex-ns {
                    display: flex
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .db-m {
                    display:block
                }
            }

            @media screen and (min-width: 960px) {
                .dn-l {
                    display:none
                }

                .db-l {
                    display: block
                }

                .dib-l {
                    display: inline-block
                }

                .flex-l {
                    display: flex
                }

                .inline-flex-l {
                    display: inline-flex
                }
            }

            @media print {
                .dn-p {
                    display: none
                }
            }

            .flex-auto {
                min-width: 0;
                min-height: 0;
                flex: 1 1 auto
            }

            .flex-column {
                flex-direction: column
            }

            .flex-row {
                flex-direction: row
            }

            .flex-wrap {
                flex-wrap: wrap
            }

            .flex-nowrap {
                flex-wrap: nowrap
            }

            .flex-column-reverse {
                flex-direction: column-reverse
            }

            .flex-row-reverse {
                flex-direction: row-reverse
            }

            .items-start {
                align-items: flex-start
            }

            .items-end {
                align-items: flex-end
            }

            .items-center {
                align-items: center
            }

            .items-baseline {
                align-items: baseline
            }

            .self-start {
                align-self: flex-start
            }

            .self-end {
                align-self: flex-end
            }

            .self-stretch {
                align-self: stretch
            }

            .justify-start {
                justify-content: flex-start
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .content-stretch {
                align-content: stretch
            }

            @media screen and (min-width: 480px) {
                .flex-row-ns {
                    flex-direction:row
                }

                .flex-wrap-ns {
                    flex-wrap: wrap
                }

                .items-stretch-ns {
                    align-items: stretch
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .flex-row-m {
                    flex-direction:row
                }

                .items-center-m {
                    align-items: center
                }

                .justify-start-m {
                    justify-content: flex-start
                }

                .justify-between-m {
                    justify-content: space-between
                }
            }

            @media screen and (min-width: 960px) {
                .flex-row-l {
                    flex-direction:row
                }

                .items-start-l {
                    align-items: flex-start
                }

                .items-center-l {
                    align-items: center
                }

                .justify-end-l {
                    justify-content: flex-end
                }

                .justify-between-l {
                    justify-content: space-between
                }
            }

            .ff-proxima-nova {
                font-family: Proxima Nova,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
            }

            .ff-recoleta {
                font-family: Recoleta,recoleta,proxima-nova,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
            }

            .fw-extrabold {
                font-weight: 800
            }

            .fw-bold,.fw-semibold {
                font-weight: 700
            }

            .fw-normal {
                font-weight: 400
            }

            @media screen and (min-width: 480px) {
                .fw-semibold-ns {
                    font-weight:700
                }

                .fw-normal-ns {
                    font-weight: 400
                }
            }

            @media screen and (min-width: 960px) {
                .fw-bold-l {
                    font-weight:700
                }

                .fw-normal-l {
                    font-weight: 400
                }
            }

            .h400 {
                height: .88889rem
            }

            .h450 {
                height: 1.33333rem
            }

            .h500 {
                height: 1.77778rem
            }

            .h600 {
                height: 2.22222rem
            }

            .h700 {
                height: 4.44444rem
            }

            .h-25p {
                height: 25%
            }

            .h-100p {
                height: 100%
            }

            .h-100vh {
                height: 100vh
            }

            .h-auto {
                height: auto
            }

            @media screen and (min-width: 480px) {
                .h450-ns {
                    height:1.33333rem
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .h-33p-m {
                    height:33.33333%
                }
            }

            @media screen and (min-width: 960px) {
                .h350-l {
                    height:.66667rem
                }

                .h400-l {
                    height: .88889rem
                }

                .h500-l {
                    height: 1.77778rem
                }

                .h-auto-l {
                    height: auto
                }
            }

            .lift {
                transition-duration: .3s
            }

            .lift,.lift:focus,.lift:hover {
                transition-timing-function: cubic-bezier(0,0,.2,1)
            }

            .lift:focus,.lift:hover {
                transform: translateY(-8px)
            }

            .pointer:hover {
                cursor: pointer
            }

            .list {
                list-style-type: none
            }

            .mr-300 {
                margin-right: -.44444rem
            }

            .ml-300 {
                margin-left: -.44444rem
            }

            .ml-400 {
                margin-left: -.88889rem
            }

            @media screen and (min-width: 960px) {
                .mt-500-l {
                    margin-top:-1.77778rem
                }

                .mt-800-l {
                    margin-top: -6.66667rem
                }

                .ml-300-l {
                    margin-left:-.44444rem
                }

                .ml-400-l {
                    margin-left: -.88889rem
                }
            }
            
            .ma0 {
                margin: 0
            }

            .pa0 {
                padding: 0
            }

            .pa300 {
                padding: .44444rem
            }

            .pa350 {
                padding: .66667rem
            }

            .pa400 {
                padding: .88889rem
            }

            .pa450 {
                padding: 1.33333rem
            }

            .pa500 {
                padding: 1.77778rem
            }

            .o-100 {
                opacity: 1
            }

            .o-0 {
                opacity: 0
            }

            .overflow-visible {
                overflow: visible
            }

            .overflow-hidden {
                overflow: hidden
            }

            .overflow-y-scroll {
                overflow-y: scroll
            }

            .relative {
                position: relative
            }

            .absolute {
                position: absolute
            }

            .fixed {
                position: fixed
            }

            .sticky {
                position: -webkit-sticky;
                position: sticky
            }

            @media screen and (min-width: 960px) {
                .static-l {
                    position:static
                }

                .relative-l {
                    position: relative
                }

                .absolute-l {
                    position: absolute
                }

                .sticky-l {
                    position: -webkit-sticky;
                    position: sticky
                }
            }

            @media print {
                .break {
                    page-break-before: always
                }
            }

            .shadow200 {
                box-shadow: 0 0 6px rgba(22,32,32,.16),0 3px 6px rgba(22,32,32,.23)
            }

            .shadow300 {
                box-shadow: 0 0 20px rgba(22,32,32,.19),0 6px 6px rgba(22,32,32,.23)
            }

            @media screen and (min-width: 960px) {
                .shadow200-l {
                    box-shadow:0 0 6px rgba(22,32,32,.16),0 3px 6px rgba(22,32,32,.23)
                }
            }

            .shadow400 {
                box-shadow: 0 0 28px rgba(22,32,32,.25),0 10px 10px rgba(22,32,32,.22)
            }

            .ma0 {
                margin: 0
            }

            .pa0 {
                padding: 0
            }

            .pa300 {
                padding: .44444rem
            }

            .pa350 {
                padding: .66667rem
            }

            .pa400 {
                padding: .88889rem
            }

            .pa500 {
                padding: 1.77778rem
            }

            .mx-auto {
                margin-right: auto;
                margin-left: auto
            }

            .mx450 {
                margin-right: 1.33333rem;
                margin-left: 1.33333rem
            }

            .px0 {
                padding-right: 0;
                padding-left: 0
            }

            .px100 {
                padding-right: .11111rem;
                padding-left: .11111rem
            }

            .px200 {
                padding-right: .22222rem;
                padding-left: .22222rem
            }

            .px300 {
                padding-right: .44444rem;
                padding-left: .44444rem
            }

            .px350 {
                padding-right: .66667rem;
                padding-left: .66667rem
            }

            .px400 {
                padding-right: .88889rem;
                padding-left: .88889rem
            }

            .px450 {
                padding-right: 1.33333rem;
                padding-left: 1.33333rem
            }

            .my-auto {
                margin-top: auto;
                margin-bottom: auto
            }

            .my400 {
                margin-top: .88889rem;
                margin-bottom: .88889rem
            }

            .py0 {
                padding-top: 0;
                padding-bottom: 0
            }
            
            .py200 {
                padding-top: .22222rem;
                padding-bottom: .22222rem
            }


            .py300 {
                padding-top: .44444rem;
                padding-bottom: .44444rem
            }

            .py350 {
                padding-top: .66667rem;
                padding-bottom: .66667rem
            }

            .py450 {
                padding-top: 1.33333rem;
                padding-bottom: 1.33333rem
            }

            .py600 {
                padding-top: 2.22222rem;
                padding-bottom: 2.22222rem
            }

            .py650 {
                padding-top: 3.11111rem;
                padding-bottom: 3.11111rem
            }

            .py700 {
                padding-top: 4.44444rem;
                padding-bottom: 4.44444rem
            }

            .mt-auto {
                margin-top: auto
            }

            .mt0 {
                margin-top: 0
            }

            .mt200 {
                margin-top: .22222rem
            }

            .mt300 {
                margin-top: .44444rem
            }

            .mt400 {
                margin-top: .88889rem
            }

            .mt450 {
                margin-top: 1.33333rem
            }

            .mt500 {
                margin-top: 1.77778rem
            }

            .mt600 {
                margin-top: 2.22222rem
            }

            .mt650 {
                margin-top: 3.11111rem
            }

            .mt700 {
                margin-top: 4.44444rem
            }

            .pt200 {
                padding-top: .22222rem
            }

            .pt400 {
                padding-top: .88889rem
            }

            .pt450 {
                padding-top: 1.33333rem
            }

            .pt500 {
                padding-top: 1.77778rem
            }

            .pt700 {
                padding-top: 4.44444rem
            }

            .pt800 {
                padding-top: 6.66667rem
            }

            .mr300 {
                margin-right: .44444rem
            }

            .mr350 {
                margin-right: .66667rem
            }

            .mr400 {
                margin-right: .88889rem
            }

            .mr450 {
                margin-right: 1.33333rem
            }

            .pr300 {
                padding-right: .44444rem
            }

            .pr350 {
                padding-right: .66667rem
            }

            .pr400 {
                padding-right: .88889rem
            }

            .pr450 {
                padding-right: 1.33333rem
            }

            .pr600 {
                padding-right: 2.22222rem
            }

            .mb-auto {
                margin-bottom: auto
            }

            .mb0 {
                margin-bottom: 0
            }

            .mb300 {
                margin-bottom: .44444rem
            }

            .mb400 {
                margin-bottom: .88889rem
            }

            .mb450 {
                margin-bottom: 1.33333rem
            }

            .mb600 {
                margin-bottom: 2.22222rem
            }

            .pb300 {
                padding-bottom: .44444rem
            }

            .pb400 {
                padding-bottom: .88889rem
            }

            .pb450 {
                padding-bottom: 1.33333rem
            }

            .pb500 {
                padding-bottom: 1.77778rem
            }

            .pb600 {
                padding-bottom: 2.22222rem
            }

            .pb700 {
                padding-bottom: 4.44444rem
            }

            .pb950 {
                padding-bottom: 13.33333rem
            }

            .ml-auto {
                margin-left: auto
            }


            .ml300 {
                margin-left: .44444rem
            }

            .ml350 {
                margin-left: .66667rem
            }

            .ml400 {
                margin-left: .88889rem
            }

            .ml450 {
                margin-left: 1.33333rem
            }

            .ml500 {
                margin-left: 1.77778rem
            }

            .pl0 {
                padding-left: 0
            }

            .pl200 {
                padding-left: .22222rem
            }

            .pl300 {
                padding-left: .44444rem
            }

            .pl350 {
                padding-left: .66667rem
            }

            .pl400 {
                padding-left: .88889rem
            }

            .pl450 {
                padding-left: 1.33333rem
            }

            .pl500 {
                padding-left: 1.77778rem
            }

            .pl600 {
                padding-left: 2.22222rem
            }

            @media screen and (min-width: 1400px) {
                .land_back {
                    right: 20px;
                }
                .land_image {
                    width: 75%;
                }
                .responsive_layout {
                    position: absolute;
                }
                .company_flex {
                    flex-direction: row !important;
                }
                .company_logo_image_landscape1 {
                    margin-right: 50px; padding-top: 10px !important;
                }
                .company_logo_image_landscape2 {
                    margin-right: 50px; padding-top: 20px !important;
                }
                .company_logo_image_square {
                    margin-right: 50px; padding-top: 0px !important;
                }
            }

            @media screen and (min-width: 1024px) {
                .land_back {
                    right: 110px;
                }
                .land_image {
                    width: 120%;
                }
                .responsive_layout {
                    position: absolute;
                }
                .company_flex {
                    flex-direction: row !important;
                }
                
                .ipad-res-colorbg{
                    height: 90%;
                }             
                .ipad-parent-res-color-bg {
                    height: 70% !important;
                }   
                .ipad-res-image {
                    padding:0px !important; top:30px !important;left:150px !important;
                }

                .ipad-section-height {
                    height: 900px !important;
                }

                .ipad-image-section {
                    margin-top: 0px !important;
                }

                .ipad-fixed-div {
                    width: 65% !important;
                    height: 90% !important;
                    top: -20px !important;
                    border-radius: 15px !important;
                    background: #002138 !important;
                }
                .left-40 {
                    left:90px !important;
                }

                .w-90 {
                    width: auto !important;
                }
                .m-t-20 {
                    margin-top: 0px !important;
                }

                .p-b-40 {
                    padding-bottom: 0px !important;
                }
                .embed-height{
                    height: 100% !important;
                }
            }

            @media screen and (min-width: 300px) {
                .embed-height{
                    height: 100%;
                }
                .land_back {
                    right: 0px;
                }
                .land_image {
                    width: 100%;
                }
                .responsive_layout {
                    position: relative;
                }
                .company_flex {
                    flex-direction: column;
                }
                .ipad-res-colorbg{
                    height: 100%;
                }
                .ipad-parent-res-color-bg {
                    height: 75%;
                }
                .ipad-res-image {
                    padding:0px; top:-230px;left:30px;
                }
                .ipad-section-height {
                    height: 1200px;
                }
                .ipad-image-section {
                    margin-top: 250px;
                }
                .ipad-fixed-div {
                    width: 65%;
                    height: 85%;
                    top: -20px;
                    border-radius: 15px;
                    background: #002138;
                }
                .left-40 {
                    left:40px;
                }


                .company_logo_image_landscape1 {
                    margin-right: 50px; padding-top: 20px;
                }
                .company_logo_image_landscape2 {
                    margin-right: 50px; padding-top: 20px;
                }
                .company_logo_image_square {
                    margin-right: 50px; padding-top: 20px;
                }

                .w-90 {
                    width: 90%;
                }
                .m-t-20 {
                    margin-top: 20px;
                }
                .p-b-40 {
                    padding-bottom: 40px;
                }
                
                .flex-4-layout {
                    width: 48%;
                    padding: 20px 0px;
                }

                .p-m-20 {
                    padding: 20px;
                }
            }

            @media screen and (min-width: 480px) {
                .mx0-ns {
                    margin-right:0;
                    margin-left: 0
                }

                .mx350-ns {
                    margin-right: .66667rem;
                    margin-left: .66667rem
                }

                .px350-ns {
                    padding-right: .66667rem;
                    padding-left: .66667rem
                }

                .px400-ns {
                    padding-right: .88889rem;
                    padding-left: .88889rem
                }

                .py750-ns {
                    padding-top: 5.33333rem;
                    padding-bottom: 5.33333rem
                }

                .mt0-ns {
                    margin-top: 0
                }

                .mt200-ns {
                    margin-top: .22222rem
                }

                .mt400-ns {
                    margin-top: .88889rem
                }

                .mt450-ns {
                    margin-top: 1.33333rem
                }

                .mt600-ns {
                    margin-top: 2.22222rem
                }

                .pt0-ns {
                    padding-top: 0
                }

                .pt700-ns {
                    padding-top: 4.44444rem
                }

                .mr500-ns {
                    margin-right: 1.77778rem
                }

                .pr0-ns {
                    padding-right: 0
                }

                .mb0-ns {
                    margin-bottom: 0
                }

                .pb700-ns {
                    padding-bottom: 4.44444rem
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .mx-auto-m {
                    margin-right:auto;
                    margin-left: auto
                }

                .px350-m {
                    padding-right: .66667rem;
                    padding-left: .66667rem
                }

                .px700-m {
                    padding-right: 4.44444rem;
                    padding-left: 4.44444rem
                }

                .py650-m {
                    padding-top: 3.11111rem;
                    padding-bottom: 3.11111rem
                }

                .mt300-m {
                    margin-top: .44444rem
                }

                .mt400-m {
                    margin-top: .88889rem
                }

                .mt500-m {
                    margin-top: 1.77778rem
                }

                .mt600-m {
                    margin-top: 2.22222rem
                }

                .mr350-m {
                    margin-right: .66667rem
                }

                .mb400-m {
                    margin-bottom: .88889rem
                }

                .mb450-m {
                    margin-bottom: 1.33333rem
                }

                .mb500-m {
                    margin-bottom: 1.77778rem
                }

                .mb600-m {
                    margin-bottom: 2.22222rem
                }

                .pb600-m {
                    padding-bottom: 2.22222rem
                }

                .pb650-m {
                    padding-bottom: 3.11111rem
                }

                .ml400-m {
                    margin-left: .88889rem
                }

                .px-8p-offset-m {
                    padding-right: calc(.66667rem + 8.33333%)
                }

                .px-8p-offset-m {
                    padding-left: calc(.66667rem + 8.33333%)
                }
            }

            @media screen and (min-width: 960px) {

                .p-m-20{
                    padding: 0px !important;
                }

                .mt-m-20{
                    margin: 0px !important;
                }

                .flex-4-layout {
                    width: 22% !important;
                    padding: 20px 0px !important;
                }
                
                .pa0-l {
                    padding:0
                }

                .pa350-l {
                    padding: .66667rem
                }

                .pa400-l {
                    padding: .88889rem
                }

                .pa450-l {
                    padding: 1.33333rem
                }

                .pa700-l {
                    padding: 4.44444rem
                }

                .mx-auto-l {
                    margin-right: auto;
                    margin-left: auto
                }

                .px0-l {
                    padding-right: 0;
                    padding-left: 0
                }

                .px350-l {
                    padding-right: .66667rem;
                    padding-left: .66667rem
                }

                .py0-l {
                    padding-top: 0;
                    padding-bottom: 0
                }

                .py300-l {
                    padding-top: .44444rem;
                    padding-bottom: .44444rem
                }

                .py650-l {
                    padding-top: 3.11111rem;
                    padding-bottom: 3.11111rem
                }

                .py700-l {
                    padding-top: 4.44444rem;
                    padding-bottom: 4.44444rem
                }

                .mt0-l {
                    margin-top: 0
                }

                .mt100-l {
                    margin-top: .11111rem
                }

                .mt300-l {
                    margin-top: .44444rem
                }

                .mt350-l {
                    margin-top: .66667rem
                }

                .mt400-l {
                    margin-top: .88889rem
                }

                .mt500-l {
                    margin-top: 1.77778rem
                }

                .mt600-l {
                    margin-top: 2.22222rem
                }

                .mt700-l {
                    margin-top: 4.44444rem
                }

                .pt0-l {
                    padding-top: 0
                }

                .pt650-l {
                    padding-top: 3.11111rem
                }

                .pt800-l {
                    padding-top: 6.66667rem
                }

                .mr0-l {
                    margin-right: 0
                }

                .mr400-l {
                    margin-right: .88889rem
                }

                .pr0-l {
                    padding-right: 0
                }

                .pr650-l {
                    padding-right: 3.11111rem
                }

                .pr350-l {
                    padding-right: .66667rem
                }

                .mb0-l {
                    margin-bottom: 0
                }

                .mb200-l {
                    margin-bottom: .22222rem
                }

                .mb500-l {
                    margin-bottom: 1.77778rem
                }

                .mb750-l {
                    margin-bottom: 5.33333rem
                }

                .pb0-l {
                    padding-bottom: 0
                }

                .pb850-l {
                    padding-bottom: 8.88889rem
                }

                .ml-auto-l {
                    margin-left: auto
                }

                .ml-auto-l-reverse {
                    margin-right: auto
                }

                .ml0-l {
                    margin-left: 0
                }

                .ml200-l {
                    margin-left: .22222rem
                }

                .ml400-l {
                    margin-left: .88889rem
                }

                .pl0-l {
                    padding-left: 0
                }

                .pl500-l {
                    padding-left: 1.77778rem
                }

                .pl800-l {
                    padding-left: 6.66667rem
                }

                .pl450-l {
                    padding-left: 1.33333rem
                }

                .pl-8p-offset-l {
                    padding-left: calc(.66667rem + 8.33333%)
                }

                .pr-8p-offset-l {
                    padding-right: calc(.66667rem + 8.33333%)
                }

                .pr-16p-offset-l {
                    padding-right: calc(.66667rem + 16.66667%)
                }
            }

            .square400 {
                height: .88889rem;
                width: .88889rem
            }

            .square500 {
                height: 1.77778rem;
                width: 1.77778rem
            }

            .square600 {
                height: 2.22222rem;
                width: 2.22222rem
            }

            .tl {
                text-align: left
            }

            .tc {
                text-align: center
            }
            
            @media screen and (min-width: 480px) {
                .tc-ns {
                    text-align:center
                }
            }

            @media screen and (min-width: 960px) {
                .tl-l {
                    text-align:left
                }
            }

            .underline {
                text-decoration: underline
            }

            .underline-dotted {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            .no-underline {
                text-decoration: none
            }

            .hover-underline:hover {
                text-decoration: underline
            }

            .hover-no-underline:hover {
                text-decoration: none
            }

            @media screen and (min-width: 480px) {
                .no-underline-ns {
                    text-decoration:none
                }
            }

            @media screen and (min-width: 960px) {
                .no-underline-l {
                    text-decoration:none
                }

                .hover-no-underline-l:hover {
                    text-decoration: none
                }
            }

            .f200 {
                font-size: .72222rem;
                line-height: 1.6410256410256
            }

            .f300 {
                font-size: .88889rem;
                line-height: 1.5
            }

            .f400 {
                font-size: 1rem;
                line-height: 1.4814814814815
            }

            .f500,.f600 {
                font-size: 1.16667rem;
                line-height: 1.3968253968254
            }

            @media screen and (min-width: 480px) {
                .f600 {
                    font-size:1.33333rem;
                    line-height: 1.3333333333333
                }
            }

            .f700 {
                font-size: 1.33333rem;
                line-height: 1.3333333333333
            }

            @media screen and (min-width: 480px) {
                .f700 {
                    font-size:1.77778rem;
                    line-height: 1.25
                }
            }

            .f800 {
                font-size: 1.77778rem;
                line-height: 1.25
            }

            @media screen and (min-width: 480px) {
                .f800 {
                    font-size:2.38889rem;
                    line-height: 1.1782945736434
                }
            }

            .f900 {
                font-size: 2.38889rem;
                line-height: 1.1782945736434
            }

            @media screen and (min-width: 480px) {
                .f900 {
                    font-size:3.16667rem;
                    line-height: 1.1228070175439
                }
            }

            .f1100 {
                font-size: 3.16667rem;
                line-height: 1.1228070175439
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .f1100 {
                    font-size:4.22222rem;
                    line-height: 1.0526315789474
                }
            }

            @media screen and (min-width: 960px) {
                .f1100 {
                    font-size:5.61111rem;
                    line-height: 1.003300330033
                }
            }

            @media screen and (min-width: 480px) {
                .f200-ns {
                    font-size:.72222rem;
                    line-height: 1.6410256410256
                }

                .f300-ns {
                    font-size: .88889rem;
                    line-height: 1.5
                }

                .f400-ns {
                    font-size: 1rem;
                    line-height: 1.4814814814815
                }

                .f600-ns {
                    font-size: 1.33333rem;
                    line-height: 1.3333333333333
                }

                .f800-ns {
                    font-size: 2.38889rem;
                    line-height: 1.1782945736434
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .f400-m {
                    font-size:1rem;
                    line-height: 1.4814814814815
                }

                .f500-m {
                    font-size: 1.16667rem;
                    line-height: 1.3968253968254
                }

                .f700-m {
                    font-size: 1.77778rem;
                    line-height: 1.25
                }

                .f800-m {
                    font-size: 2.38889rem;
                    line-height: 1.1782945736434
                }
            }

            @media screen and (min-width: 960px) {
                .f200-l {
                    font-size:.72222rem;
                    line-height: 1.6410256410256
                }

                .f300-l {
                    font-size: .88889rem;
                    line-height: 1.5
                }

                .f400-l {
                    font-size: 1rem;
                    line-height: 1.4814814814815
                }

                .f600-l {
                    font-size: 1.33333rem;
                    line-height: 1.3333333333333
                }

                .f800-l {
                    font-size: 2.38889rem;
                    line-height: 1.1782945736434
                }

                .f900-l {
                    font-size: 3.16667rem;
                    line-height: 1.1228070175439
                }
            }

            .wsnw {
                white-space: nowrap
            }

            .w-auto {
                width: auto
            }

            .w100 {
                width: 1.11111rem
            }

            .mw200 {
                max-width: 2.22222rem
            }

            .mw450 {
                max-width: 17.33333rem
            }

            .mw600 {
                max-width: 34.66667rem
            }

            .mw700 {
                max-width: 46.22222rem
            }

            .mw800 {
                max-width: 57.77778rem
            }

            .mw900 {
                max-width: 69.33333rem
            }

            .mw1000 {
                max-width: 80.88889rem
            }

            .w-33p {
                width: 33.33333%
            }

            .mw-33p {
                max-width: 33.33333%
            }

            .mw-50p {
                max-width: 50%
            }

            .mw-60p {
                max-width: 60%
            }

            .mw-66p {
                max-width: 66.66667%
            }

            .mw-75p {
                max-width: 75%
            }

            .w-100p {
                width: 100%
            }

            .mw-none {
                max-width: none
            }

            @media screen and (min-width: 480px) {
                .w-auto-ns {
                    width:auto
                }

                .mw650-ns {
                    max-width: 40.44444rem
                }

                .mw-40p-ns {
                    max-width: 40%
                }

                .mw-50p-ns {
                    max-width: 50%
                }

                .mw-70p-ns {
                    max-width: 70%
                }

                .mw-83p-ns {
                    max-width: 83.33333%
                }
            }

            @media screen and (min-width: 480px) and (max-width:959px) {
                .mw-30p-m {
                    max-width:30%
                }

                .mw-33p-m {
                    max-width: 33.33333%
                }

                .mw-60p-m {
                    max-width: 60%
                }

                .mw-66p-m {
                    max-width: 66.66667%
                }

                .mw-70p-m {
                    max-width: 70%
                }

                .mw-75p-m {
                    max-width: 75%
                }

                .mw-83p-m {
                    max-width: 83.33333%
                }

                .w-100p-m {
                    width: 100%
                }
            }

            @media screen and (min-width: 960px) {
                .w-auto-l {
                    width:auto
                }

                .w400-l {
                    width: 11.55556rem
                }

                .mw900-l {
                    max-width: 69.33333rem
                }

                .mw-8p-l {
                    max-width: 8.33333%
                }

                .w-16p-l {
                    width: 16.66667%
                }

                .mw-16p-l {
                    max-width: 16.66667%
                }
                
                .mw-20p-l {
                    max-width: 24.33333%
                }

                .w-25p-l {
                    width: 25%
                }

                .mw-25p-l {
                    max-width: 25%
                }

                .mw-33p-l {
                    max-width: 33.33333%
                }

                .mw-40p-l {
                    max-width: 40%
                }

                .mw-41p-l {
                    max-width: 41.66667%
                }

                .mw-50p-l {
                    max-width: 50%
                }

                .mw-58p-l {
                    max-width: 58.33333%
                }

                .mw-60p-l {
                    max-width: 60%
                }

                .mw-66p-l {
                    max-width: 66.66667%
                }

                .mw-70p-l {
                    max-width: 70%
                }

                .w-75p-l {
                    width: 75%
                }

                .mw-91p-l {
                    max-width: 91.66667%
                }

                .mw-100p-l {
                    max-width: 100%
                }

                .mw-none-l {
                    max-width: none
                }
            }

            .z1 {
                z-index: 1
            }

            .z2 {
                z-index: 2
            }

            .z3 {
                z-index: 3
            }

            .z8 {
                z-index: 8
            }

            .z9 {
                z-index: 9
            }

            .z10 {
                z-index: 10
            }

            .outlinelist a {
                font-weight: 600;
                text-decoration: underline
            }

            .outlinelist h3 {
                font-size: inherit
            }

            .outlinelist>li>ol {
                list-style-type: none
            }

            .outlinelist,.outlinelist ol {
                counter-reset: section;
                list-style-type: none
            }

            .outlinelist li {
                counter-increment: section
            }

            .outlinelist li:before {
                content: counters(section,".") ". "
            }

            .awards-logos amp-img {
                width: 72px;
                height: auto
            }

            .customer-logos svg {
                height: 48.89px
            }

            .hover-underline-outward {
                transition: all .3s cubic-bezier(.4,0,.2,1)
            }

            .hover-underline-outward .line {
                position: relative;
                transition: all .3s cubic-bezier(.4,0,.2,1)
            }

            .hover-underline-outward .line:after,.hover-underline-outward .line:before {
                position: absolute;
                bottom: -.1rem;
                width: 0;
                height: .15em;
                background-color: #ffcd1c;
                content: "";
                transition: all .3s cubic-bezier(.4,0,.2,1)
            }

            .hover-underline-outward .line:before {
                left: 50%
            }

            .hover-underline-outward .line:after {
                right: 50%
            }

            .hover-underline-outward:hover .line:after,.hover-underline-outward:hover .line:before {
                width: 50%
            }

            #pillar-image-bg {
                box-shadow: -17px -15px 0 0 #002838
            }

            @media screen and (min-width: 30rem) and (max-width:60rem) {
                .awards-logos amp-img {
                    width:78pt
                }

                .customer-logos svg {
                    height: 5pc
                }

                #pillar-image-bg {
                    box-shadow: -30px -27px 0 0 #002838
                }
            }

            @media screen and (min-width: 60rem) {
                .awards-logos amp-img {
                    width:90pt
                }

                .customer-logos svg {
                    height: 5pc
                }

                #pillar-image-bg {
                    box-shadow: -36px -2pc 0 0 #002838
                }
            }

            @keyframes pullRight {
                0% {
                    transform: translateX(10%)
                }

                to {
                    transform: translateX(0)
                }
            }

            @keyframes pullLeft {
                0% {
                    transform: translateX(0)
                }

                to {
                    transform: translateX(-15%)
                }
            }

            .ui-floater-publishing {
                animation: pullRight 14s cubic-bezier(.4,0,.2,1) 0s infinite alternate-reverse
            }

            .ui-floater-reporting {
                animation: pullRight 20s cubic-bezier(.4,0,.2,1) 0s infinite alternate-reverse
            }

            .ui-floater-engagement>amp-img {
                animation: pullLeft 18s cubic-bezier(.4,0,.2,1) 0s infinite alternate
            }

            .ui-floater-engagement>amp-img+amp-img {
                animation: pullLeft 16s cubic-bezier(.4,0,.2,1) 0s infinite alternate
            }

            .ui-floater-listening {
                animation: pullLeft 24s cubic-bezier(.4,0,.2,1) 0s infinite alternate
            }

            .testimonial-slide {
                will-change: opacity;
                transition: opacity .8s cubic-bezier(.4,0,.2,1)
            }

            /*@font-face {
                font-family: Recoleta;
                font-style: normal;
                font-weight: 600;
                src: url("./Font/Recoleta-SemiBold.eot");
                src: local("Recoleta SemiBold"),local("Recoleta-SemiBold"),url("./Font/Recoleta-SemiBold.eot#iefix") format("embedded-opentype"),url("./Font/Recoleta-SemiBold.woff2") format("woff2"),url("./Font/Recoleta-SemiBold.woff") format("woff"),url("./Font/Recoleta-SemiBold.ttf") format("truetype");
                font-display: swap
            }*/

            @font-face {
                font-family: "proxima-nova";
                src: url("assets/Font/ProximaNova-Regular.eot");
                src: local("Proxima Nova Regular"),local("ProximaNova-Regular"),url("assets/Font/ProximaNova-Regular.eot?#iefix") format("embedded-opentype"),url("assets/Font/ProximaNova-Regular.woff2") format("woff2"),url("assets/Font/ProximaNova-Regular.woff") format("woff"),url("assets/Font/ProximaNova-Regular.ttf") format("truetype");
                font-weight: normal;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "proxima-nova";
                src: url("assets/Font/ProximaNova-Bold.eot");
                src: local("Proxima Nova Bold"),local("ProximaNova-Bold"),url("assets/Font/ProximaNova-Bold.eot?#iefix") format("embedded-opentype"),url("assets/Font/ProximaNova-Bold.woff2") format("woff2"),url("assets/Font/ProximaNova-Bold.woff") format("woff"),url("assets/Font/ProximaNova-Bold.ttf") format("truetype");
                font-weight: bold;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "proxima-nova";
                src: url("assets/Font/ProximaNova-Extrabld.eot");
                src: local("Proxima Nova Extrabold"),local("ProximaNova-Extrabld"),url("assets/Font/ProximaNova-Extrabld.eot?#iefix") format("embedded-opentype"),url("assets/Font/ProximaNova-Extrabld.woff2") format("woff2"),url("assets/Font/ProximaNova-Extrabld.woff") format("woff"),url("assets/Font/ProximaNova-Extrabld.ttf") format("truetype");
                font-weight: 800;
                font-style: normal;
                font-display: swap
            }

            :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-342336b {
                height: calc(90vw * ( 8.7 / 16 ));
                width: 90vw;
                max-height: 90vh
            }

            :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-2881d18 {
                transition: all .3s ease-in
            }

            :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-9c24674 {
                transition: all .3s ease-out
            }

            :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-4db8320 {
                transition: opacity .3s ease-out
            }

            :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-0ca7be3 {
                height: 16px;
                bottom: 0
            }

            /*# sourceURL=amp-custom.css */
        </style>

        <script type="text/javascript" src="https://cdn.optimizely.com/js/18179512350.js" id="optimizely-js"></script>
        <script>
            !function(n) {
                "use strict";
                n.loadCSS || (n.loadCSS = function() {}
                );
                var o = loadCSS.relpreload = {};
                if (o.support = function() {
                    var e;
                    try {
                        e = n.document.createElement("link").relList.supports("preload")
                    } catch (t) {
                        e = !1
                    }
                    return function() {
                        return e
                    }
                }(),
                o.bindMediaToggle = function(t) {
                    var e = t.media || "all";
                    function a() {
                        t.addEventListener ? t.removeEventListener("load", a) : t.attachEvent && t.detachEvent("onload", a),
                        t.setAttribute("onload", null),
                        t.media = e
                    }
                    t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a),
                    setTimeout(function() {
                        t.rel = "stylesheet",
                        t.media = "only x"
                    }),
                    setTimeout(a, 3e3)
                }
                ,
                o.poly = function() {
                    if (!o.support())
                        for (var t = n.document.getElementsByTagName("link"), e = 0; e < t.length; e++) {
                            var a = t[e];
                            "preload" !== a.rel || "style" !== a.getAttribute("as") || a.getAttribute("data-loadcss") || (a.setAttribute("data-loadcss", !0),
                            o.bindMediaToggle(a))
                        }
                }
                ,
                !o.support()) {
                    o.poly();
                    var t = n.setInterval(o.poly, 500);
                    n.addEventListener ? n.addEventListener("load", function() {
                        o.poly(),
                        n.clearInterval(t)
                    }) : n.attachEvent && n.attachEvent("onload", function() {
                        o.poly(),
                        n.clearInterval(t)
                    })
                }
                "undefined" != typeof exports ? exports.loadCSS = loadCSS : n.loadCSS = loadCSS
            }("undefined" != typeof global ? global : this);
        </script>
        <script type="application/ld+json">
            
        </script>
    </head>
    <body class="home page-template-default page page-id-16299 tailor-ui">
        <amp-lightbox class="bg--light-translucent h-100p items-center justify-center w-100p i-amphtml-layout-nodisplay" id="nav-contact" scrollable layout="nodisplay" role="dialog" on="lightboxOpen:ContactEmailSales.focus;lightboxClose:AMP.setState({ navState: { contact: false } })" data-amp-bind-open="navState.contact" aria-labelledby="contact-modal-label" hidden="hidden" i-amphtml-layout="nodisplay">
            <div class="py600 row">
                <div class="db ba b--neutral-200 bg--neutral-0 br600 flex h-100p mw800 mx-auto shadow200 w-100p">
                    <div class="dn db-ns bg--neutral-100 mw450 pa500 pa700-l w-100p">
                        <amp-img alt="" height="55" width="75" layout="intrinsic" aria-hidden="true" class="i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer">
                                <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzU1JyB3aWR0aD0nNzUnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZycgdmVyc2lvbj0nMS4xJy8+">
                            </i-amphtml-sizer>
                        </amp-img>
                        <h2 id="contact-modal-label" class="f700">Send us an email
                </h2>
                    </div>
                    <div class="mw650-ns pa500 pa700-l relative w-100p">
                        <h3 id="headerFormTitle" class="db dn-ns js-pardot-hide-on-success" data-amp-bind-hidden="otherFormSubmitted||supportFormSubmitted||salesFormSubmitted">Send us an email</h3>
                        <fieldset role="group" id="formSelector" class="mb400 px300 js-pardot-hide-on-success" data-amp-bind-hidden="otherFormSubmitted||supportFormSubmitted||salesFormSubmitted">
                            <legend>
                                <span>Who are you trying to contact?</span>
                            </legend>
                            <div class="flex items-baseline">
                                <label class="flex flex">
                                    <input name="ContactEmail" type="radio" id="ContactEmailSales" value="sales" on="change:AMP.setState({navState: { form: { contactSelected: event.value } } } )" checked>
                                    <span class="Form-radio "></span>
                                    <span>Sales</span>
                                </label>
                                <label class="flex flex mt0 ml400">
                                    <input name="ContactEmail" type="radio" id="ContactEmailSupport" value="support" on="change:AMP.setState({navState: { form: { contactSelected: event.value } } } )">
                                    <span class="Form-radio "></span>
                                    <span>Support</span>
                                </label>
                                <label class="flex flex mt0 ml400">
                                    <input name="ContactEmail" type="radio" id="ContactEmailOther" value="other" on="change:AMP.setState({navState: { form: { contactSelected: event.value } } } )">
                                    <span class="Form-radio "></span>
                                    <span>Other</span>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </amp-lightbox>
        <button id="nav-lightbox" aria-label="Close navigation" class="fixed top0 left0 right0 bottom0 bg--light-translucent button-reset h-100p w-100p z8" tabindex="-1" on="tap:AMP.setState({ navState: { login: false, mobile: false, search: false, secondary: false } })" hidden data-amp-bind-hidden="!navState.secondary &amp;&amp; !navState.login &amp;&amp; !navState.search">
            <span class="screenreader">Close navigation</span>
        </button>
        <amp-state id="navState" class="i-amphtml-layout-container" i-amphtml-layout="container">
            <script type="application/json">
                
            {
                "login": false,
                "mobile": false,
                "secondary": false,
                "contact": false,
                "filter": false,
                "form": {
                    "contactSelected": "sales"
                },
                "search_term": ""
            }
        
            </script>
        </amp-state>
        <amp-geo layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-geo>
        <header class="SH h-auto-l relative sticky top0 z10 dn-p js-main-header" data-amp-bind-class="'SH h-auto-l relative sticky top0 z10 ' + ( navState.mobile ? 'bg--aqua-1100 h-100vh overflow-y-scroll' : '' )">
            <div class="b--neutral-200 bb bb-0-l" data-amp-bind-class="'b--neutral-200 bb bb-0-l ' + ( navState.mobile ? 'bb-0' : '' )">
                <a href="#content" class="screenreader">Skip to main content</a>
                <div class="bg--neutral-0 bg--neutral-100-l relative z9 ">
                    <div class="f300 flex flex-column flex-row-l items-center justify-between mw900 mx-auto pa350-l">
                        <div class="flex justify-between items-center px350 px0-l py350 py0-l w-100p w-auto-l">
                            <a aria-label="PVData" class="flex w-33p w-auto-l" href="{{ route('landing') }}" title="PVData">
                                
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1073.04 313.02" height="35" width="187"><defs><style>.cls-1{fill:#c6752b;}.cls-2{fill:#fff;}.cls-3{fill:#008753;}</style></defs><title>SVG</title><path class="cls-1" d="M705.7,959.57l2.6-3,0,0L589.63,1020l33.92,12L609.7,1048.2l-.8,1,0,.06L571,1093.85l-.06.07.89-.49-2.86,2.86c-.06-.06-.12-.16-.19-.22a101.14,101.14,0,0,1,143-143l.21.18Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M621,913.15a6.3,6.3,0,0,1-7.29-5.11L604,852.88a6.3,6.3,0,0,1,12.4-2.19l9.72,55.17A6.29,6.29,0,0,1,621,913.15Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M687.36,920a6.3,6.3,0,0,1-5.82-8.7l12.67-30.63a6.29,6.29,0,0,1,11.63,4.81l-12.66,30.63A6.3,6.3,0,0,1,687.36,920Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M621,913.15a6.3,6.3,0,0,1-7.29-5.11L604,852.88a6.3,6.3,0,0,1,12.4-2.19l9.72,55.17A6.29,6.29,0,0,1,621,913.15Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M687.36,920a6.3,6.3,0,0,1-5.82-8.7l12.67-30.63a6.29,6.29,0,0,1,11.63,4.81l-12.66,30.63A6.3,6.3,0,0,1,687.36,920Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M531,997.92a6.3,6.3,0,0,1-7.71,4.45l-54.11-14.5a6.29,6.29,0,0,1,3.26-12.16l54.11,14.5A6.3,6.3,0,0,1,531,997.92Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M565.22,940.72a6.3,6.3,0,0,1-10.34,1.59l-22.42-24.42a6.3,6.3,0,1,1,9.28-8.51l22.41,24.42A6.3,6.3,0,0,1,565.22,940.72Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M532.36,1060.16a6.31,6.31,0,0,1-2.93,10l-31.61,10a6.29,6.29,0,1,1-3.79-12l31.6-10A6.32,6.32,0,0,1,532.36,1060.16Z" transform="translate(-464.48 -845.49)"/><polygon class="cls-2" points="200.95 160.13 191.11 171.43 224.63 183.28 107.4 247.94 106.51 248.43 106.57 248.36 144.39 203.75 144.43 203.69 145.23 202.71 159.08 186.45 125.16 174.46 243.79 111.12 243.83 111.1 241.23 114.08 201.88 159.04 200.98 160.1 200.95 160.13"/><path class="cls-3" d="M773.06,1025.17a133.35,133.35,0,0,1-227.65,94.28l23.41-23.38,2.16-2.15.89-.49,117.23-64.66-33.52-11.85,9.84-11.3,0,0,.9-1.06,39.35-45,2.6-3,0,0L734,930.86h0A132.93,132.93,0,0,1,773.06,1025.17Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M820.33,1001.33a4,4,0,0,1,1-2.75,3.41,3.41,0,0,1,2.64-1.12h61.3a30.77,30.77,0,0,1,12.52,2.55,31.77,31.77,0,0,1,10.08,6.92,34,34,0,0,1,6.82,10.18,32,32,0,0,1,0,25.05,32.13,32.13,0,0,1-16.9,16.9,30.77,30.77,0,0,1-12.52,2.55h-34a3.48,3.48,0,0,1-3.66-3.67v-6.31a3.48,3.48,0,0,1,3.66-3.67h31.56a19.88,19.88,0,0,0,7.44-1.42,20.12,20.12,0,0,0,6.21-3.87,18.06,18.06,0,0,0,4.17-5.8,17.24,17.24,0,0,0,1.53-7.23,16.56,16.56,0,0,0-1.53-7.13,18.32,18.32,0,0,0-4.17-5.7,20.12,20.12,0,0,0-6.21-3.87,19.89,19.89,0,0,0-7.44-1.43H836v87.36a3.44,3.44,0,0,1-1.12,2.65,4,4,0,0,1-2.75,1H824a3.5,3.5,0,0,1-3.66-3.67Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M935.79,1000.72a7.82,7.82,0,0,1-.41-1.43q0-1.83,2-1.83h12a2.63,2.63,0,0,1,2.45,1.63l47.85,100.19a3.31,3.31,0,0,1,.41,1.43c0,1.22-.75,1.83-2.24,1.83H987.1a2.6,2.6,0,0,1-2.44-1.63Zm71.47,83.9a1.71,1.71,0,0,1-1.42,1,1.45,1.45,0,0,1-1.43-1l-5.9-12.42a.82.82,0,0,1-.21-.61,1.75,1.75,0,0,1,.21-.82l33.8-71.68a2.62,2.62,0,0,1,2.44-1.63h10.8c1.35,0,2,.61,2,1.83a8.29,8.29,0,0,1-.4,1.43Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1106.23,1092.36a3.71,3.71,0,0,1,1.12-2.75,3.47,3.47,0,0,1,2.54-1.12h54.37a6.28,6.28,0,0,0,6.32-6.32v-64.34a6.27,6.27,0,0,0-6.32-6.32h-69.44v87.36a3.73,3.73,0,0,1-1,2.55,3.42,3.42,0,0,1-2.65,1.12h-8.35a3.51,3.51,0,0,1-2.55-1.12,3.55,3.55,0,0,1-1.12-2.55v-97.54a3.78,3.78,0,0,1,1.12-2.75,3.56,3.56,0,0,1,2.56-1.12h83.65a19.5,19.5,0,0,1,19.79,19.75v65.58a19,19,0,0,1-5.78,14,19.41,19.41,0,0,1-14.18,5.7h-56.41a3.47,3.47,0,0,1-2.54-1.12,3.51,3.51,0,0,1-1.12-2.55Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1324.12,1099.28a8,8,0,0,1,.4,1.43c0,1.22-.68,1.83-2,1.83h-11.41a2.59,2.59,0,0,1-2.44-1.63L1297,1076.68h-48.87a1.26,1.26,0,0,1-1.42-1.43,2.24,2.24,0,0,1,.2-1l4.48-9a3,3,0,0,1,3-2h36l-24.85-53.56-44.39,91.23a2.6,2.6,0,0,1-2.44,1.63h-10.18q-2,0-2-1.83a7.6,7.6,0,0,1,.41-1.43l48.26-97.95a7.61,7.61,0,0,1,2.34-2.75,5.32,5.32,0,0,1,3.16-1.12h9.57a5.32,5.32,0,0,1,3.15,1.12,7.61,7.61,0,0,1,2.34,2.75Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1321.26,1001.13a3.69,3.69,0,0,1,1-2.55,3.44,3.44,0,0,1,2.65-1.12H1420a3.43,3.43,0,0,1,2.64,1.12,3.69,3.69,0,0,1,1,2.55v6.51q0,3.87-3.66,3.87h-95.1a3.4,3.4,0,0,1-2.65-1.12,3.92,3.92,0,0,1-1-2.75Zm43.17,25.25a3.44,3.44,0,0,1,1.12-2.65,4,4,0,0,1,2.75-1h8.15a3.48,3.48,0,0,1,3.66,3.67v72.49a3.48,3.48,0,0,1-3.66,3.67h-8.15a4,4,0,0,1-2.75-1,3.44,3.44,0,0,1-1.12-2.65Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1537.11,1099.28a7.6,7.6,0,0,1,.41,1.43c0,1.22-.68,1.83-2,1.83h-11.41a2.59,2.59,0,0,1-2.44-1.63L1510,1076.68h-48.87a1.27,1.27,0,0,1-1.43-1.43,2.23,2.23,0,0,1,.21-1l4.48-9a3,3,0,0,1,3-2h36l-24.84-53.56-44.39,91.23a2.6,2.6,0,0,1-2.44,1.63h-10.19c-1.35,0-2-.61-2-1.83a8,8,0,0,1,.4-1.43l48.27-97.95a7.61,7.61,0,0,1,2.34-2.75,5.32,5.32,0,0,1,3.15-1.12h9.58a5.32,5.32,0,0,1,3.15,1.12,7.61,7.61,0,0,1,2.34,2.75Z" transform="translate(-464.48 -845.49)"/></svg>
                            </a>
                            <div class="dn-l flex w-33p w-auto-l">
                                <button aria-label="Open Main Menu" data-amp-bind-aria-label="navState.mobile ? 'Close Main Menu' : 'Open Main Menu'" class="button-reset flex ml-auto" on="tap:AMP.setState({ navState: { mobile: navState.mobile ? false : true, secondary: false }})" title="Open Main Menu">
                                    <svg class="h500" height="28" role="img" viewbox="0 0 448 512" width="32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="dn db-l" data-amp-bind-class="navState.mobile ? 'db w-100p' : 'dn db-l'">
                            <div class="bg--aqua-1100 bg--neutral-100-l flex inline-flex-l flex-column flex-row-l h500-l items-center-l w-100p">
                                <div class="db flex-l">
                                    <div class="flex items-center mobile-menu">
                                        <a on="tap:contact-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">
                                        <span class="dn dib-l fw-bold mr400" style="color:black">Contact</span>
                                        <span class="fdn dib-l w-bold fw-normal-l" style="padding-right:20px; color:black">sales</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center mobile-menu">
                                        <a style="color:black " on="tap:getintouch-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})"><svg class="h450 h400-l mr350 mr0-l" height="16" role="img" viewbox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" style="margin-right:10px;">
                                            <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                                        </svg></a>
                                       
                                        <a aria-label="Schedule a demo" class="c--text-inverse c--text-l dn mr400-l inline-flex-l items-center hover-no-underline" href="" title="Schedule a demo">
                                            <svg class="h400-l" height="14" role="img" viewbox="0 0 448 512" width="16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="dn db-l">
                                    <div class="relative-l my-auto w-100p w-auto-l bl-l b--neutral-600-l">
                                        <span class="f500 f300-l fw-bold" style="padding-left: 20px;">Login</span>
                                        <div class="dn" data-amp-bind-class="navState.login ? 'db w-100p w-auto-l' : 'dn'" id="header-nav-login-modal">
                                            <div class="login-modal pointer-events-all absolute-l bg--neutral-0-l mt400-l pl600 pl0-l pb450 pb0-l right0-l w-100p w400-l">
                                                <a aria-label="PVData Login" class="c--text-inverse c--text-l flex fw-bold-l hover-bg--neutral-200-l hover-no-underline items-center justify-between py350 pa400-l w-100p" rel="noopener noreferrer" target="_blank" title="PVData Login">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                            <path d="M9 3a4.8 4.8 0 0 0-4.8 4.8v8.9a.3.3 0 0 0 .5.2l2.6-2.6h3.4a4.8 4.8 0 0 0 4.8-4.8V3z" fill="#5ec85f"></path>
                                                            <path fill="#1da554" d="M7.3 14.3H5l1.5.9 1-1z"></path>
                                                            <path fill="#34b45a" d="M15.5 3H9v6.5L15.5 3z"></path>
                                                            <path d="M9 3a4.8 4.8 0 0 0-4.8 4.8v6.5L9 9.5z" fill="#1da554"></path>
                                                            <path fill="#79da6c" d="M15.5 3L9 9.5h6.5V3z"></path>
                                                        </svg>
                                                        <span class="f500 f300-l ml300">
                                                            PVData<span class="screenreader">Login</span>
                                                        </span>
                                                    </div>
                                                    <svg class="dn dib-l" height="16" role="img" viewbox="0 0 256 512" width="16" xmlns="http://www.w3.org/2000/svg" title="PVData Login" aria-labelledby="fa_angle_right_855320695">
                                                        <title id="fa_angle_right_855320695">PVData Login</title>
                                                        <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                                    </svg>
                                                </a>
                                                <a aria-label="Bambu Login" class="c--text-inverse c--text-l flex fw-bold-l hover-bg--neutral-200-l hover-no-underline items-center justify-between py350 pa400-l w-100p" href="https://app.getbambu.com/login/" rel="noopener noreferrer" target="_blank" title="Bambu Login">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                            <g fill="#21a6a8">
                                                                <path d="M6.4 17h-2a.4.4 0 0 1-.4-.4V8.7h2.8v8a.4.4 0 0 1-.4.3zM11 17H9a.4.4 0 0 1-.4-.4v-4h2.8v4a.4.4 0 0 1-.4.4zM15.6 17h-2a.4.4 0 0 1-.4-.4V8.7H16v8a.4.4 0 0 1-.4.3zM4.4 3h2a.4.4 0 0 1 .3.4v4H4v-4a.4.4 0 0 1 .4-.4zM16 7.4h-2.8v-4a.4.4 0 0 1 .4-.4h2a.4.4 0 0 1 .4.4zM11.4 11.3H8.6v-8A.4.4 0 0 1 9 3h2a.4.4 0 0 1 .4.4z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="f500 f300-l ml300">
                                                            Bambu<span class="screenreader">Login</span>
                                                        </span>
                                                    </div>
                                                    <svg class="dn dib-l" height="16" role="img" viewbox="0 0 256 512" width="16" xmlns="http://www.w3.org/2000/svg" title="Bambu Login" aria-labelledby="fa_angle_right_634331699">
                                                        <title id="fa_angle_right_634331699">Bambu Login</title>
                                                        <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="dn db-l" data-amp-bind-class="navState.mobile ? 'db' : 'dn db-l'">
                    <div class="b--neutral-200-l bb-l bg--aqua-1100 bg--neutral-0-l c--text-inverse c--text-l flex flex-auto flex-column flex-row-l relative z2">
                        <div class="f300 flex flex-column flex-row-l items-center-l justify-between-l mw900 mx-auto pb950 pb0-l px350-l w-100p">
                            <ul class="flex flex-auto flex-column flex-row-l list pl0 w-100p w-auto-l " style="justify-content : center;">
                                <li class="mt0 w-100p w-auto-ns">
                                    <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400" style="text-decoration: none;">
                                        <span style="font-family: 'Dancing Script', cursive; padding: 5px; font-size: 32px;">Coming Soon</span>
                                    </a>
                                </li>
                                <!-- <li class="mt0 w-100p w-auto-ns">
                                    <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400" href="{{ route('landing') . '#product_section' }}" on="tap:AMP.setState({ navState: false})">
                                        <span>Product</span>
                                    </a>
                                </li>
                                <li class="mt0 w-100p w-auto-ns">
                                    <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400" href="{{ route('landing') . '#customer_section' }}" on="tap:AMP.setState({ navState: false})">
                                        <span>Customer Stories</span>
                                    </a>
                                </li>
                                <li class="mt0 w-100p w-auto-ns">
                                    <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400" href="{{ route('pricing') }}">
                                        <span>Pricing</span>
                                    </a>
                                </li>
                                <li class="mt0 w-100p w-auto-ns">
                                    <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400" href="{{ route('landing') . '#team_section' }}" on="tap:AMP.setState({ navState: false})">
                                        <span>Team</span>
                                    </a>
                                </li>
                                <li class="mt0 w-100p w-auto-ns">
                                    <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400" href="{{ route('contact_us') }}" on="tap:AMP.setState({ navState: false})">
                                        <span>Contact</span>
                                    </a>
                                </li> -->
                            </ul>
                            <div class="relative-l my-auto w-100p w-auto-l bl-l b--neutral-600-l     dn-l    ">
                                <a class="c--text-inverse c--text-l db f500 f300-l fw-bold mr400-l pa400"  on="tap:AMP.setState({ navState: false})" href="{{ route('landing')}}">
                                    <span>Login</span>
                                </a>
                                <div class="dn" data-amp-bind-class="navState.login ? 'db w-100p w-auto-l' : 'dn'" id="header-nav-login-mobile-modal">
                                    <div class="login-modal pointer-events-all absolute-l bg--neutral-0-l mt400-l pl600 pl0-l pb450 pb0-l right0-l w-100p w400-l">
                                        <a aria-label="PVData Login" class="c--text-inverse c--text-l flex fw-bold-l hover-bg--neutral-200-l hover-no-underline items-center justify-between py350 pa400-l w-100p" rel="noopener noreferrer" target="_blank" title="PVData Login">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                    <path d="M9 3a4.8 4.8 0 0 0-4.8 4.8v8.9a.3.3 0 0 0 .5.2l2.6-2.6h3.4a4.8 4.8 0 0 0 4.8-4.8V3z" fill="#5ec85f"></path>
                                                    <path fill="#1da554" d="M7.3 14.3H5l1.5.9 1-1z"></path>
                                                    <path fill="#34b45a" d="M15.5 3H9v6.5L15.5 3z"></path>
                                                    <path d="M9 3a4.8 4.8 0 0 0-4.8 4.8v6.5L9 9.5z" fill="#1da554"></path>
                                                    <path fill="#79da6c" d="M15.5 3L9 9.5h6.5V3z"></path>
                                                </svg>
                                                <span class="f500 f300-l ml300">
                                                    PVData<span class="screenreader">Login</span>
                                                </span>
                                            </div>
                                            <svg class="dn dib-l" height="16" role="img" viewbox="0 0 256 512" width="16" xmlns="http://www.w3.org/2000/svg" title="PVData Login" aria-labelledby="fa_angle_right_1704119747">
                                                <title id="fa_angle_right_1704119747">PVData Login</title>
                                                <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                            </svg>
                                        </a>
                                        <a aria-label="Bambu Login" class="c--text-inverse c--text-l flex fw-bold-l hover-bg--neutral-200-l hover-no-underline items-center justify-between py350 pa400-l w-100p" href="https://app.getbambu.com/login/" rel="noopener noreferrer" target="_blank" title="Bambu Login">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                    <g fill="#21a6a8">
                                                        <path d="M6.4 17h-2a.4.4 0 0 1-.4-.4V8.7h2.8v8a.4.4 0 0 1-.4.3zM11 17H9a.4.4 0 0 1-.4-.4v-4h2.8v4a.4.4 0 0 1-.4.4zM15.6 17h-2a.4.4 0 0 1-.4-.4V8.7H16v8a.4.4 0 0 1-.4.3zM4.4 3h2a.4.4 0 0 1 .3.4v4H4v-4a.4.4 0 0 1 .4-.4zM16 7.4h-2.8v-4a.4.4 0 0 1 .4-.4h2a.4.4 0 0 1 .4.4zM11.4 11.3H8.6v-8A.4.4 0 0 1 9 3h2a.4.4 0 0 1 .4.4z"></path>
                                                    </g>
                                                </svg>
                                                <span class="f500 f300-l ml300">
                                                    Bambu<span class="screenreader">Login</span>
                                                </span>
                                            </div>
                                            <svg class="dn dib-l" height="16" role="img" viewbox="0 0 256 512" width="16" xmlns="http://www.w3.org/2000/svg" title="Bambu Login" aria-labelledby="fa_angle_right_1421434460">
                                                <title id="fa_angle_right_1421434460">Bambu Login</title>
                                                <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dn">
                                <div class="flex items-center">
                                    <a   on="tap:contact-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">
                                    <span class="dn dib-l fw-bold mr400" style="color:black;">Contact</span>
                                    <span class="fw-bold fw-normal-l" style="color:black;">sales</span>
                                    </a>
                                    <a id="uk-phone-number-mobile" aria-label="Call PVData Support" class="dn c--text-inverse c--text-l f500 f300-l items-center mr400 pa400 pa0-l" href="tel:08000478185" title="Call PVData Support">
                                        <svg class="dn-l h450 mr350" height="16" role="img" viewbox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                            <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                                        </svg>
                                        <span class="fw-bold fw-normal-l">sales</span>
                                    </a>
                                </div>
                                <div class="flex items-center">
                                    <button aria-label="Email PVData" class="button-reset c--text-inverse c--text-l f500 f300-l hover-no-underline inline-flex items-center mr400-l pa400 pa0-l" on="tap:AMP.setState({ navState: { login: false, mobile: false, secondary: false, contact: true } })" title="Email PVData">
                                        <svg class="h450 h400-l mr350 mr0-l" height="16" role="img" viewbox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                            <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                                        </svg>
                                        <span class="dn-l fw-bold">Email</span>
                                    </button>
                                    <a aria-label="Schedule a demo" class="c--text-inverse c--text-l dn mr400-l inline-flex-l items-center hover-no-underline" href="/demo/" title="Schedule a demo">
                                        <svg class="h400-l" height="14" role="img" viewbox="0 0 448 512" width="16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="">
                                <div class=" f400 f300-l mt-auto mt0-l w-100p w-auto-l fixed static-l bottom0 left0">
                                    <button class="button bg--background-green hover-bg--neutral-300 wsnw" style="color:white;" on="tap:newsletter-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">Subscribe now
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <amp-state id="pillarCarouselState" class="i-amphtml-layout-container" i-amphtml-layout="container">
            <script type="application/json">
                
        0
    
            </script>
        </amp-state>


        <amp-state id="pillarCarouselState_next" class="i-amphtml-layout-container" i-amphtml-layout="container">
            <script type="application/json">
                
        0
    
            </script>
        </amp-state>
        
        <amp-animation id="underlineGrow" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay">
            <script type="application/json">
                
    {
      "duration": "1s",
      "delay": "1s",
      "fill": "both",
      "easing": "ease-in-out",
      "iterations": "1",
      "animations": [{
        "selector": ".line",
        "keyframes": [{
            "transform": "scale(0, 1)"
          },
          {
            "transform": "scale(1, 1)"
          }
        ]
      }]
    }
  
            </script>
        </amp-animation>
        <amp-lightbox hidden="hidden" id="video-lightbox" layout="nodisplay" class="h-100vh w-100p relative flex items-center justify-center i-amphtml-layout-nodisplay" i-amphtml-layout="nodisplay">
            <div class="bg--dark-translucent h-100p w-100p absolute" on="tap:video-lightbox.close" role="button" tabindex="0"></div>
            <div class="flex items-center justify-center h-100p">
                <div class="flex w-100p amp-wp-342336b" data-amp-original-style="height: calc(90vw * (8.7/16)); width: 90vw; max-height: 90vh;">
                    <amp-iframe class="w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" width="16" height="9" sandbox="allow-scripts allow-popups" layout="responsive" frameborder="0" src="https://fast.wistia.net/embed/iframe/3ewo6bybfv" data-amp-bind-src="'https://fast.wistia.net/embed/iframe/' + wistiaEmbed" i-amphtml-layout="responsive">
                        <i-amphtml-sizer style="display:block;padding-top:56.2500%;"></i-amphtml-sizer>
                    </amp-iframe>
                    <button aria-label="Close video" class="bg-transparent bn c--neutral-0 hover-c--neutral-400 db f900 lift pointer z1 mb-auto px0 ml400" on="tap:video-lightbox.close">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="db w100" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 352 512">
                            <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </amp-lightbox>
        <div>
            <!-- Content -->
            @yield('content')
            <!-- Content end -->
        </div>
        <footer class="SF bg--background relative z1 py600 pt0-ns ff-proxima-nova dn-p " role="contentinfo">
            <div id="subscribe-desktop" class="dn db-l bg--blue-1100 py650">
                <div class="mw800 mx-auto px400 flex-l items-start-l">
                    <div class="pl500 pr600" style="padding-right: 10rem;">
                        <h2 class="fw-extrabold f500 ff-proxima-nova" style="color: white;">Subscribe to our newsletter and get social media resources sent to your inbox.
                        </h2>
                    </div>
                    <div class="pt200" style="margin-left: 40px;">
                        <button class="button bg--background-light hover-bg--neutral-300 wsnw" style="color:black;" on="tap:newsletter-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">Sign Me Up
                        </button>
                    </div>
                </div>
            </div>
            <div id="subscribe-mobile" class="dn-l bg--blue-1100 py600">
                <div class="mw900 mx-auto px400">
                    <p class="f600 fw-extrabold" style="color:white;">Subscribe to our newsletter and get social media resources sent to your inbox.
                </p>
                    <button class="button-reset pa0 ma0 f600 c--link hover-c--link-dark fw-extrabold underline" on="tap:newsletter-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterMobile'}})">Sign up now.
                </button>
                </div>
            </div>
            <div class="flex-ns flex-wrap-ns mw900 mx-auto px400 pb600 pt650-l" style="padding: 0px; margin-top: 20px;">
                 <div class="pt200">
                     <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1073.04 313.02" height="35" width="187"><defs><style>.cls-1{fill:#c6752b;}.cls-2{fill:#fff;}.cls-3{fill:#008753;}</style></defs><title>SVG</title><path class="cls-1" d="M705.7,959.57l2.6-3,0,0L589.63,1020l33.92,12L609.7,1048.2l-.8,1,0,.06L571,1093.85l-.06.07.89-.49-2.86,2.86c-.06-.06-.12-.16-.19-.22a101.14,101.14,0,0,1,143-143l.21.18Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M621,913.15a6.3,6.3,0,0,1-7.29-5.11L604,852.88a6.3,6.3,0,0,1,12.4-2.19l9.72,55.17A6.29,6.29,0,0,1,621,913.15Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M687.36,920a6.3,6.3,0,0,1-5.82-8.7l12.67-30.63a6.29,6.29,0,0,1,11.63,4.81l-12.66,30.63A6.3,6.3,0,0,1,687.36,920Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M621,913.15a6.3,6.3,0,0,1-7.29-5.11L604,852.88a6.3,6.3,0,0,1,12.4-2.19l9.72,55.17A6.29,6.29,0,0,1,621,913.15Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M687.36,920a6.3,6.3,0,0,1-5.82-8.7l12.67-30.63a6.29,6.29,0,0,1,11.63,4.81l-12.66,30.63A6.3,6.3,0,0,1,687.36,920Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M531,997.92a6.3,6.3,0,0,1-7.71,4.45l-54.11-14.5a6.29,6.29,0,0,1,3.26-12.16l54.11,14.5A6.3,6.3,0,0,1,531,997.92Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M565.22,940.72a6.3,6.3,0,0,1-10.34,1.59l-22.42-24.42a6.3,6.3,0,1,1,9.28-8.51l22.41,24.42A6.3,6.3,0,0,1,565.22,940.72Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M532.36,1060.16a6.31,6.31,0,0,1-2.93,10l-31.61,10a6.29,6.29,0,1,1-3.79-12l31.6-10A6.32,6.32,0,0,1,532.36,1060.16Z" transform="translate(-464.48 -845.49)"/><polygon class="cls-2" points="200.95 160.13 191.11 171.43 224.63 183.28 107.4 247.94 106.51 248.43 106.57 248.36 144.39 203.75 144.43 203.69 145.23 202.71 159.08 186.45 125.16 174.46 243.79 111.12 243.83 111.1 241.23 114.08 201.88 159.04 200.98 160.1 200.95 160.13"/><path class="cls-3" d="M773.06,1025.17a133.35,133.35,0,0,1-227.65,94.28l23.41-23.38,2.16-2.15.89-.49,117.23-64.66-33.52-11.85,9.84-11.3,0,0,.9-1.06,39.35-45,2.6-3,0,0L734,930.86h0A132.93,132.93,0,0,1,773.06,1025.17Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M820.33,1001.33a4,4,0,0,1,1-2.75,3.41,3.41,0,0,1,2.64-1.12h61.3a30.77,30.77,0,0,1,12.52,2.55,31.77,31.77,0,0,1,10.08,6.92,34,34,0,0,1,6.82,10.18,32,32,0,0,1,0,25.05,32.13,32.13,0,0,1-16.9,16.9,30.77,30.77,0,0,1-12.52,2.55h-34a3.48,3.48,0,0,1-3.66-3.67v-6.31a3.48,3.48,0,0,1,3.66-3.67h31.56a19.88,19.88,0,0,0,7.44-1.42,20.12,20.12,0,0,0,6.21-3.87,18.06,18.06,0,0,0,4.17-5.8,17.24,17.24,0,0,0,1.53-7.23,16.56,16.56,0,0,0-1.53-7.13,18.32,18.32,0,0,0-4.17-5.7,20.12,20.12,0,0,0-6.21-3.87,19.89,19.89,0,0,0-7.44-1.43H836v87.36a3.44,3.44,0,0,1-1.12,2.65,4,4,0,0,1-2.75,1H824a3.5,3.5,0,0,1-3.66-3.67Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M935.79,1000.72a7.82,7.82,0,0,1-.41-1.43q0-1.83,2-1.83h12a2.63,2.63,0,0,1,2.45,1.63l47.85,100.19a3.31,3.31,0,0,1,.41,1.43c0,1.22-.75,1.83-2.24,1.83H987.1a2.6,2.6,0,0,1-2.44-1.63Zm71.47,83.9a1.71,1.71,0,0,1-1.42,1,1.45,1.45,0,0,1-1.43-1l-5.9-12.42a.82.82,0,0,1-.21-.61,1.75,1.75,0,0,1,.21-.82l33.8-71.68a2.62,2.62,0,0,1,2.44-1.63h10.8c1.35,0,2,.61,2,1.83a8.29,8.29,0,0,1-.4,1.43Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1106.23,1092.36a3.71,3.71,0,0,1,1.12-2.75,3.47,3.47,0,0,1,2.54-1.12h54.37a6.28,6.28,0,0,0,6.32-6.32v-64.34a6.27,6.27,0,0,0-6.32-6.32h-69.44v87.36a3.73,3.73,0,0,1-1,2.55,3.42,3.42,0,0,1-2.65,1.12h-8.35a3.51,3.51,0,0,1-2.55-1.12,3.55,3.55,0,0,1-1.12-2.55v-97.54a3.78,3.78,0,0,1,1.12-2.75,3.56,3.56,0,0,1,2.56-1.12h83.65a19.5,19.5,0,0,1,19.79,19.75v65.58a19,19,0,0,1-5.78,14,19.41,19.41,0,0,1-14.18,5.7h-56.41a3.47,3.47,0,0,1-2.54-1.12,3.51,3.51,0,0,1-1.12-2.55Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1324.12,1099.28a8,8,0,0,1,.4,1.43c0,1.22-.68,1.83-2,1.83h-11.41a2.59,2.59,0,0,1-2.44-1.63L1297,1076.68h-48.87a1.26,1.26,0,0,1-1.42-1.43,2.24,2.24,0,0,1,.2-1l4.48-9a3,3,0,0,1,3-2h36l-24.85-53.56-44.39,91.23a2.6,2.6,0,0,1-2.44,1.63h-10.18q-2,0-2-1.83a7.6,7.6,0,0,1,.41-1.43l48.26-97.95a7.61,7.61,0,0,1,2.34-2.75,5.32,5.32,0,0,1,3.16-1.12h9.57a5.32,5.32,0,0,1,3.15,1.12,7.61,7.61,0,0,1,2.34,2.75Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1321.26,1001.13a3.69,3.69,0,0,1,1-2.55,3.44,3.44,0,0,1,2.65-1.12H1420a3.43,3.43,0,0,1,2.64,1.12,3.69,3.69,0,0,1,1,2.55v6.51q0,3.87-3.66,3.87h-95.1a3.4,3.4,0,0,1-2.65-1.12,3.92,3.92,0,0,1-1-2.75Zm43.17,25.25a3.44,3.44,0,0,1,1.12-2.65,4,4,0,0,1,2.75-1h8.15a3.48,3.48,0,0,1,3.66,3.67v72.49a3.48,3.48,0,0,1-3.66,3.67h-8.15a4,4,0,0,1-2.75-1,3.44,3.44,0,0,1-1.12-2.65Z" transform="translate(-464.48 -845.49)"/><path class="cls-1" d="M1537.11,1099.28a7.6,7.6,0,0,1,.41,1.43c0,1.22-.68,1.83-2,1.83h-11.41a2.59,2.59,0,0,1-2.44-1.63L1510,1076.68h-48.87a1.27,1.27,0,0,1-1.43-1.43,2.23,2.23,0,0,1,.21-1l4.48-9a3,3,0,0,1,3-2h36l-24.84-53.56-44.39,91.23a2.6,2.6,0,0,1-2.44,1.63h-10.19c-1.35,0-2-.61-2-1.83a8,8,0,0,1,.4-1.43l48.27-97.95a7.61,7.61,0,0,1,2.34-2.75,5.32,5.32,0,0,1,3.15-1.12h9.58a5.32,5.32,0,0,1,3.15,1.12,7.61,7.61,0,0,1,2.34,2.75Z" transform="translate(-464.48 -845.49)"/></svg>
                </div>
                <p class="f300 f300-ns c--neutral-700" style="padding: 15px;">
                    © Copyright 2021 PVDATA. All rights reserved.
                </p>
            </div>
        </footer>
        <amp-lightbox id="newsletter-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
            <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
                <div class="relative w-100p mw800 mx-auto pa500 pa700-l bg--background-dark c--text-inverse shadow-5">
                    <h2 id="optin-lightbox-heading" class="f700 c--text-inverse mw600 ff-proxima-nova">Subscribe to our newsletter and find out what we are up to
                    </h2>
                    <h4 style="color:white;">
                        Business Email
                    </h4>
                    <input type="email" id="buisness_email">

                    <p style="margin-top: 30px; font-size: 15px;">
                        PVDATA is committed to your privacy. By submitting this form, you acknowledge PVDATA uses your information in accordance with its <a href="{{ route('privacy') }}">Privacy Policy</a>.
                    </p>
                    <button class="button hover-bg--neutral-300 wsnw" style="background-color:#0ca750; color:white;" on="tap:newsletter-modal.close" onclick="subscribe()">Sign Me Up
                    </button>
                    <button onclick="cancelSubscribe()" on="tap:newsletter-modal.close" aria-label="Close this dialog window" aria-controls="newsletter-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1">
                        <span class="screenreader">"Close this dialog window"</span>
                    </button>
                </div>
            </div>
        </amp-lightbox>

        
        <amp-lightbox id="contact-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
            <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
                <div class="relative w-100p mw900 mx-auto pa500 pa700-l c--text-inverse shadow-5" style="padding: 0px; height: 90%; width:55%;">
                    <button on="tap:contact-modal.close" aria-label="Close this dialog window" aria-controls="contact-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1" style="color:black;">
                        <span class="screenreader">"Close this dialog window"</span>
                    </button>
                    <div class="flex-column flex-row-l row h-100p">
                        <div class="col mw-83p-m mx-auto px350-ns px450 w-100p" style="width: 45%;background: rgb(2,0,36);
                                background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(177,242,206,1) 0%, rgba(192,238,237,1) 0%, rgba(167,175,172,1) 52%, rgba(192,238,237,1) 100%, rgba(204,233,126,1) 100%, rgba(9,9,121,1) 100%, rgba(6,81,168,1) 100%, rgba(4,120,194,1) 100%); text-align:center; padding: 0px 40px;">

                            <h1 style="font-size: 48px;color: #1f1e1e;margin-top: 100px;font-weight: 200;">PVDATA
                            </h1>
                            <h2 style="font-size: 28px; color: #1f1e1e; margin-top:20px;font-weight: 200;">Debt Finance Structure</h2>
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:20px;">
                                "more detailed financial & environmental reporting than any other tool"
                            </p>
                            <p style="font-size: 24px; color:#1f1f1e; margin-top:24px;">
                                Tete M. - Temcore
                            </p>
                            <img src="./assets/manonlaptop.png" style="width: 100%; margin-top:50px;">
                        </div>
                        <div class="col mw-83p-m mx-auto px350-ns px450 w-100p" style="width: 55%; padding: 0px 40px 0px 40px;background: #f1f1f1;">
                            <h1 style="font-size: 36px;color: #1f1e1e;margin-top: 50px;font-weight: 200;">Contact Sales
                            </h1>
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:24px;">
                                Full Name
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                Company Name
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                Business Email
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                Telephone
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                No of Users
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">

                            <button class="button card-button wsnw" on="tap:contact-modal.close" style="border-radius: 5px;font-size: 25px;padding: 15px;margin-top: 90px;">
                                Submit
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </amp-lightbox>

         <amp-lightbox id="getintouch-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
            <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
                <div class="relative w-100p mw900 mx-auto pa500 pa700-l c--text-inverse shadow-5" style="padding: 0px; height: 90%; width:55%;">
                    <button on="tap:getintouch-modal.close" aria-label="Close this dialog window" aria-controls="getintouch-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1" style="color:black;">
                        <span class="screenreader">"Close this dialog window"</span>
                    </button>
                    <div class="flex-column flex-row-l row h-100p">
                        <div class="col mw-83p-m mx-auto px350-ns px450 w-100p" style="width: 45%;background: rgb(2,0,36);
                                background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(177,242,206,1) 0%, rgba(192,238,237,1) 0%, rgba(167,175,172,1) 52%, rgba(192,238,237,1) 100%, rgba(204,233,126,1) 100%, rgba(9,9,121,1) 100%, rgba(6,81,168,1) 100%, rgba(4,120,194,1) 100%); text-align:center; padding: 0px 40px;">

                            <h1 style="font-size: 48px;color: #1f1e1e;margin-top: 100px;font-weight: 200;">PVDATA
                            </h1>
                            <h2 style="font-size: 28px; color: #1f1e1e; margin-top:20px;font-weight: 200;">Debt Finance Structure</h2>
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:20px;">
                                "more detailed financial & environmental reporting than any other tool"
                            </p>
                            <p style="font-size: 24px; color:#1f1f1e; margin-top:24px;">
                                Tete M. - Temcore
                            </p>
                            <img src="{{ url('assets/manonlaptop.png') }}" style="width: 100%; margin-top:50px;">
                        </div>
                        <div class="col mw-83p-m mx-auto px350-ns px450 w-100p" style="width: 55%; padding: 0px 40px 0px 40px;background: #f1f1f1;">
                            <h1 style="font-size: 36px;color: #1f1e1e;margin-top: 50px;font-weight: 200;">General Inquiry
                            </h1>
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:24px;">
                                Full Name
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                Topic
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                Email
                            </p>
                            <input id="full_name" style="font-size: 20px; margin-top:0px;">
                            <p style="font-size: 20px; color:#1f1f1e; margin-top:15px;">
                                Description
                            </p>
                            <textarea id="description" style="font-size: 20px;margin-top:0px;color: #403e3e;width:100%;font-family: serif;padding: 10px;" rows="8"></textarea>

                            <button class="button card-button wsnw" on="tap:getintouch-modal.close" style="border-radius: 5px;font-size: 25px;padding: 15px;margin-top: 20px;">
                                Submit
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </amp-lightbox> 
        
        <script>
            function cancelSubscribe()
            {
                $("#buisness_email").val('');
            }

            function subscribe()
            {
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/kofiAPI') }}",
                    headers: {
                    },
                    data: {
                        email : $("#buisness_email").val()
                    },
                    async: false,
                    success: function(result) {
                        console.log(result);
                        
                    }
                });
                $("#buisness_email").val('');
                
            }
        </script>
        @yield('footer_scripts')

    </body>
</html>
