@extends('layout.struct')

{{-- Page title --}}
@section('title')
Home
@parent
@stop


@section('content')

<div>
    <main class="Main" data-amp-auto-lightbox-disable="" id="content">
        <section class="c--text-inverse py700 section" style="background-image: url('assets/Website-Image-cropped.jpg');">
            <div class="flex-column flex-row-l items-center-l row" style="justify-content: flex-end;">
                <div class="col mw-41p-l mw-66p-m mx-auto pb600-m px350-ns px450 w-100p" style="margin-left:0px;">
                    <h1 class="c--text-inverse f1100 f800-m f900-l pr-8p-offset-l" style="font-size: 2.5667rem; line-height: 1.1328070175439;">Solar project finance and due diligence report in minutes</h1>
                    <p class="f400-ns f500 mt400-ns mt450">Get a comprehensive environmental, technical, and financial report assessing the viability of your solar photovoltaic grid project anywhere in the world. </p>
                    
                </div>
                <div class="col mt500-m mw-58p-l mw-83p-m mx-auto px350-l px450 w-100p land_back responsive_layout">
                        <img alt="" aria-hidden="true" class="land_image" role="presentation" src="{{ url('assets/ipad-laptop-01.png') }}">
                </div>
            </div>
        </section>
        <section class="pb300 pb700-ns pt700 section">
            <div class="flex-column flex-row-l row">
                <div class="col mw-58p-l mw-66p-m mx-auto px350-ns px450 w-100p">
                    <h2 class="f700-m f800-l f900">The leading data and climate software for solar finance </h2>
                    <p class="f400-ns f500 mb600-m mt400-m mt450">
                        PvData is proud to be a <span class="fw-bold">leader</span> in <span class="fw-bold">data integrity</span>, <span class="fw-bold">reliability</span> and <span class="fw-bold">customer satisfaction</span>, 
                    </p>
                    <p style="margin-top:0px !important;">
                        as accredited by our partners.
                    </p>
                </div>
                <div class="awards-logos mw-41p-l mw-66p-m mx-auto pl450-l pr350-l px350-m px450 w-100p flex company_flex">
                    <button class="button bg--blue-1000 hover-bg--blue-1100 wsnw" style="color:white; margin-bottom: auto;" on="tap:newsletter-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">Sign Me Up
                    </button>
                </div>
            </div>
        </section>
        <section id="product_section" class="mb750-l py-auto-l py0 relative section ipad-section-height" style="margin-bottom: 0px;">
            <h2>
                <span class="screenreader">Explore Features</span>
            </h2>
            <div class="absolute bottom0 flex flex-column-reverse flex-row-l h-100p h-auto-l mt0 mx-auto top0-l w-100p ipad-parent-res-color-bg">
                <div aria-hidden="true" class="bg--teal-900 h-25p h-33p-m h-auto-l mw-40p-l w-100p amp-wp-2881d18" data-amp-bind-class="'w-100p mw-40p-l h-33p-m h-25p h-auto-l ' + (pillarCarouselState == 0 ? 'bg--teal-900' : (pillarCarouselState == 1 ? 'bg--purple-900' : (pillarCarouselState == 2 ? 'bg--aqua-1100' : (pillarCarouselState == 3 ? 'bg--blue-700' : (pillarCarouselState == 4 ? 'bg--aqua-1000' : 'bg--teal-500')))))" role="presentation" data-amp-original-style="transition: all 0.3s ease-in;">
                    <span></span>
                </div>
            </div>
            <div class="flex flex-column-reverse flex-row-l items-center mw900 mx-auto pb700 pt700-ns pt800 w-100p ipad-res-colorbg">
                <div class="content-stretch db flex-column flex-l h-100p h-auto-l items-center justify-center mw-58p-l px-8p-offset-m px350-ns px450 relative self-stretch w-100p ipad-image-section">
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 first_tab_image ipad-res-image" data-amp-bind-aria-hidden="(pillarCarouselState != 0)" data-amp-bind-class="(pillarCarouselState == 0 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;">
                        <img src="{{ url('assets/TabImages/Country utility.png') }}" style="width: 70%;" />
                    </div>
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 first_tab_image ipad-res-image" data-amp-bind-aria-hidden="(pillarCarouselState != 1)" data-amp-bind-class="(pillarCarouselState == 1 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;">
                        <img src="{{ url('assets/TabImages/sensitivity.png') }}" style="width: 70%;" />
                    </div>
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 first_tab_image ipad-res-image" data-amp-bind-aria-hidden="(pillarCarouselState != 2)" data-amp-bind-class="(pillarCarouselState == 2 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;">
                        <img src="{{ url('assets/TabImages/Environment.png') }}" style="width: 70%;" />
                    </div>
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 first_tab_image ipad-res-image" data-amp-bind-aria-hidden="(pillarCarouselState != 3)" data-amp-bind-class="(pillarCarouselState == 3 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;">
                        <img src="{{ url('assets/TabImages/Technical.png') }}" style="width: 70%;" />
                    </div>
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 first_tab_image ipad-res-image" data-amp-bind-aria-hidden="(pillarCarouselState != 4)" data-amp-bind-class="(pillarCarouselState == 4 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;">
                        <img src="{{ url('assets/TabImages/Financial Summary.png') }}" style="width: 70%;" />
                    </div>
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 first_tab_image ipad-res-image" data-amp-bind-aria-hidden="(pillarCarouselState != 5)" data-amp-bind-class="(pillarCarouselState == 5 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l first_tab_image ipad-res-image')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;">
                        <img src="{{ url('assets/TabImages/Balance.png') }}" style="width: 70%;" />
                    </div>

                    <div aria-hidden="true" class="absolute ml200-l px350-l px450 px700-m z0 first_tab_back ipad-fixed-div" id="pillarImageContainerBG">
                    </div>
                    <div aria-hidden="true" class="absolute-l db left0 ml200-l px0 px350-l right0 w-100p z0" id="pillarImageSizer">
                        <amp-img alt="" class="br600 ml500 mt500 o-0 overflow-hidden i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" height="487" id="pillarBGSizer" layout="intrinsic" src="" width="800" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer">
                                <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzQ4Nycgd2lkdGg9JzgwMCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2ZXJzaW9uPScxLjEnLz4=">
                            </i-amphtml-sizer>
                        </amp-img>
                    </div>
                </div>
                <div class="mb0-l mb400-m mb600 ml-auto-l mw-33p-l mw-66p-m mx-auto-m pb0-l pb500 pb650-m px350-ns px450 w-100p z1" id="pillarContentContainer">
                    <div class="db o-100 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState == 0 ? 'db o-100' : 'dn o-0')" id="blurbListening" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Country Utility </h2> 
                        </div>
                        
                        <h3 class="f800-ns f900 mt400-m mt450">Understand your utility landscape </h3>
                        <p class="f400-ns f500 mt400-l">Get an insight of the solar power utility market and how regulatory policies may affect your solar project. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState == 1 ? 'db o-100' : 'dn o-0')" id="blurbPublishing" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Sensitivity Analysis </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Account for future uncertainty </h3>
                        <p class="f400-ns f500 mt400-l">Understand the different financial outputs of your project by running a sensitivity analysis on various scenarios. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState == 2 ? 'db o-100' : 'dn o-0')" id="blurbEngagement" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Environmental Report </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Know your ESG risks </h3>
                        <p class="f400-ns f500 mt400-l">Identify and mitigate major environmental, social and governance risks (ESG) that your solar energy project may be exposed. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState == 3 ? 'db o-100' : 'dn o-0')" id="blurbAnalytics" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Technical & Design </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Get your electricity forecast </h3>
                        <p class="f400-ns f500 mt400-l">Uncover your projects electricity yield forecast, and get accurate readings of your project site’s temperature and irradiance values. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState == 4 ? 'db o-100' : 'dn o-0')" id="blurbAnalytics" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Financial Summary </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Know your projects' bankability </h3>
                        <p class="f400-ns f500 mt400-l">Get an overview of the key financial outputs of your solar project to better assess financial viability. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState == 5 ? 'db o-100' : 'dn o-0')" id="blurbAnalytics" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Balance Sheet </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Uncover your returns </h3>
                        <p class="f400-ns f500 mt400-l">Get your projects’ balance sheet, detailing total revenue, expenditure and equity cashflow over the projects lifecycle. </p>
                        
                    </div>
                    <div class="flex flex-wrap items-center justify-between mt600-m mt650 mt700-l" style="margin-top:70px;">
                        <div class="mw-50p pr350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-0 br600 button-reset bw500 fw-bold pl400 py300 shadow200 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold br600 ba bw500 b--neutral-200 ' + (pillarCarouselState == 0 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTab(0)" style="font-size: 16px; text-align:center;height:60px;">Country Utility</button>
                        </div>
                        <div class="mw-50p pl350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold br600 ba bw500 b--neutral-200 ' + (pillarCarouselState == 1 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTab(1)" style="font-size: 16px; text-align:center;height:60px;">Sensitivity Analysis </button>
                        </div>
                        <div class="mw-50p pr350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold mt450 pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold mt450 br600 ba bw500 b--neutral-200 ' + (pillarCarouselState == 2 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTab(2)" style="font-size: 16px; text-align:center;height:60px;">Environmental Report </button>
                        </div>
                        <div class="mw-50p pl350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold mt450 pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold mt450 br600 ba bw500 b--neutral-200 ' + (pillarCarouselState == 3 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTab(3)" style="font-size: 16px; text-align:center;height:60px;">Technical & Design </button>
                        </div>
                        <div class="mw-50p pr350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold mt450 pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold mt450 br600 ba bw500 b--neutral-200 ' + (pillarCarouselState == 4 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTab(4)" style="font-size: 16px; text-align:center;height:60px;">Financial Summary</button>
                        </div>
                        <div class="mw-50p pl350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold mt450 pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold mt450 br600 ba bw500 b--neutral-200 ' + (pillarCarouselState == 5 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTab(5)" style="font-size: 16px; text-align:center;height:60px;">Balance Sheet</button>
                        </div>
                    </div>
                    <span class="db mt400-l fw-bold items-baseline" style="color:#000000cf !important; margin-top:60px; padding-left:10px;font-size:17px;">
                        Preview our
                        <a class="" style="cursor:pointer"  on="tap:pdf-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})" onclick="reloadpdfiframe()">
                        
                            <span class="fw-bold items-baseline">
                                Full Due Diligence 
                                <span class="flex-nowrap inline-flex items-baseline">
                                    Report <i aria-hidden="true" class="fa-arrow-right fa-xs fas pl300"></i>
                                </span>
                            </span>
                        </a>
                    </span>
                </div>
            </div>
        </section>
        <section class="mb750-l py-auto-l py0 relative section">
            <h2>
                <span class="screenreader">Explore Features</span>
            </h2>
            <div class="absolute bottom0 flex flex-column-reverse flex-row-reverse h-100p h-auto-l mt0 mx-auto top0-l w-100p">
                <div aria-hidden="true" class="bg--teal-900 h-25p h-33p-m h-auto-l mw-40p-l w-100p amp-wp-2881d18" data-amp-bind-class="'w-100p mw-40p-l h-33p-m h-25p h-auto-l ' + (pillarCarouselState_next == 0 ? 'bg--lightblue' : (pillarCarouselState_next == 1 ? 'bg--green' : (pillarCarouselState_next == 2 ? 'bg--purple' : 'bg--lightgreen')))" role="presentation" data-amp-original-style="transition: all 0.3s ease-in;">
                    <span></span>
                </div>
            </div>
            <div class="flex flex-column-reverse flex-row-l items-center mw900 mx-auto pb700 pt700-ns pt800 w-100p">
                <div class="mb0-l mb400-m mb600 ml-auto-l-reverse mw-33p-l mw-66p-m mx-auto-m pb0-l pb500 pb650-m px350-ns px450 w-100p z1" id="pillarContentContainer">
                    <div class="db o-100 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState_next == 0 ? 'db o-100' : 'dn o-0')" id="blurbListening" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Revenue Forecast </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Solar PV Project finance </h3>
                        <p class="f400-ns f500 mt400-l"> Customise your project parameters and financial structure to match your requirement. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState_next == 1 ? 'db o-100' : 'dn o-0')" id="blurbPublishing" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Waterfall Payment </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Know your expenditure </h3>
                        <p class="f400-ns f500 mt400-l">Get an insight of your projects expenditure and loan payment forecast. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState_next == 2 ? 'db o-100' : 'dn o-0')" id="blurbEngagement" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Debt Sizing </h2> 
                        </div>                                    
                        <h3 class="f800-ns f900 mt400-m mt450">Structure your repayment </h3>
                        <p class="f400-ns f500 mt400-l">Set your loan repayment plan and let our tool’s algorithm calculate and size your project debt. </p>
                        
                    </div>
                    <div class="dn o-0 amp-wp-4db8320" data-amp-bind-class="(pillarCarouselState_next == 3 ? 'db o-100' : 'dn o-0')" id="blurbAnalytics" data-amp-original-style="transition: opacity 0.3s ease-out;">
                        <div class="row" style="justify-content: flex-start;">
                            <h2 class="f400-ns f500" style="width: 200px;">Expected Cashflow </h2> 
                        </div>
                        <h3 class="f800-ns f900 mt400-m mt450">Get your cash available to equity </h3>
                        <p class="f400-ns f500 mt400-l">Provide your equity partners with a revenue forecast after expenditure. </p>
                        
                    </div>
                    
                    <div class="flex flex-wrap items-center justify-between mt600-m mt650 mt700-l" style="margin-top:70px;">
                        <div class="mw-50p pr350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-0 br600 button-reset bw500 fw-bold pl400 py300 shadow200 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold br600 ba bw500 b--neutral-200 ' + (pillarCarouselState_next == 0 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')"  onclick="clickTabNext(0)" style="font-size: 16px; text-align:center;height:60px;">Revenue Forecast</button>
                        </div>
                        <div class="mw-50p pl350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold br600 ba bw500 b--neutral-200 ' + (pillarCarouselState_next == 1 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTabNext(1)" style="font-size: 16px; text-align:center;height:60px;">Waterfall Payment </button>
                        </div>
                        <div class="mw-50p pr350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold mt450 pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold mt450 br600 ba bw500 b--neutral-200 ' + (pillarCarouselState_next == 2 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTabNext(2)" style="font-size: 16px; text-align:center;height:60px;">Debt Sizing </button>
                        </div>
                        <div class="mw-50p pl350 w-100p">
                            <button class="b--neutral-200 ba bg--neutral-100 br600 button-reset bw500 fw-bold mt450 pl400 py300 tl w-100p" data-amp-bind-class="'w-100p py300 pl400 tl fw-bold mt450 br600 ba bw500 b--neutral-200 ' + (pillarCarouselState_next == 3 ? 'bg--neutral-0 shadow200' : 'bg--neutral-100')" onclick="clickTabNext(3)" style="font-size: 16px; text-align:center;height:60px;">Expected Cashflow </button>
                        </div>
                    </div>

                    <span class="db mt400-l fw-bold items-baseline" style="color:#000000cf !important; margin-top:60px; padding-left:10px;font-size:17px;">
                        Preview our
                        <a class="" style="cursor:pointer"  on="tap:excel-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})" onclick="reloadexceliframe()">
                        
                            <span class="fw-bold items-baseline">
                                Debt Finance 
                                <span class="flex-nowrap inline-flex items-baseline">
                                    Cashflow <i aria-hidden="true" class="fa-arrow-right fa-xs fas pl300"></i>
                                </span>
                            </span>
                        </a>
                    </span>

                </div>
                <div class="content-stretch db flex-column flex-l h-100p h-auto-l items-center justify-center mw-58p-l px-8p-offset-m px350-ns px450 relative self-stretch w-100p">
                    <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 top-position" data-amp-bind-aria-hidden="(pillarCarouselState_next != 0)" data-amp-bind-class="(pillarCarouselState_next == 0 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l top-position' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l top-position')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;"  style="padding:0px; right:30px;">
                        <img src="{{ url('assets/TabImages/latptop_background.png') }}" style="width: 100%;" />
                        
                    </div>
                        <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 top-position" data-amp-bind-aria-hidden="(pillarCarouselState_next != 1)" data-amp-bind-class="(pillarCarouselState_next == 1 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l top-position' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l top-position')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;"  style="padding:0px; right:30px;">
                        <img src="{{ url('assets/TabImages/latptop_background.png') }}" style="width: 100%;" />
                        
                    </div>
                        <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 top-position" data-amp-bind-aria-hidden="(pillarCarouselState_next != 2)" data-amp-bind-class="(pillarCarouselState_next == 2 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l top-position' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l top-position')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;"  style="padding:0px; right:30px;">
                        <img src="{{ url('assets/TabImages/latptop_background.png') }}" style="width: 100%;" />
                        
                    </div>
                        <div class="absolute ml200-l o-100 px350-ns px450 px700-m right0 w-100p z1 amp-wp-9c24674 top-position" data-amp-bind-aria-hidden="(pillarCarouselState_next != 3)" data-amp-bind-class="(pillarCarouselState_next == 3 ? 'o-100 pointer-events-all z1 w-100p px450 px700-m px350-l absolute ml200-l top-position' : 'o-0 pointer-events-none z1 w-100p px450 px700-m px350-l absolute ml200-l top-position')" id="pillarImageContainer" data-amp-original-style="transition: all 0.3s ease-out;"  style="padding:0px; right:30px;">
                        <img src="{{ url('assets/TabImages/latptop_background.png') }}" style="width: 100%;" />
                    </div>
                    <div aria-hidden="true" class="absolute ml200-l px350-l px450 px700-m w-100p z0 left-40" id="pillarImageContainerBG" style="
                            width: 75%;
                            height: 75%;
                            border-radius: 15px;
                            background: #002138;
                            ">
                    </div>
                    
                    <div aria-hidden="true" class="absolute-l db left0 ml200-l px0 px350-l right0 w-100p z0" id="pillarImageSizer">
                        <amp-img alt="" class="br600 ml500 mt500 o-0 overflow-hidden i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" height="487" id="pillarBGSizer" layout="intrinsic" width="800" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer">
                                <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzQ4Nycgd2lkdGg9JzgwMCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2ZXJzaW9uPScxLjEnLz4=">
                            </i-amphtml-sizer>
                        </amp-img>
                    </div>
                </div>
                
            </div>
        </section>
        
    </main>
</div>

<amp-lightbox id="excel-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
            <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
                <div class="relative w-100p mw900 mx-auto pa500 pa700-l bg--background-dark c--text-inverse shadow-5" style="padding: 3rem 1rem; height: 90%;">
                    <button on="tap:excel-modal.close" aria-label="Close this dialog window" aria-controls="excel-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1">
                        <span class="screenreader">"Close this dialog window"</span>
                    </button>
                    <embed id="iframeexcel" src="{{ url('assets/files/Discounted Cash Flow.html#zoom=90') }}" style="width: 100%; height: 100%;" type="application/pdf" width="100%" height="100%" />
                </div>
            </div>
        </amp-lightbox>

        <amp-lightbox id="pdf-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
            <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
                <div class="relative w-100p mw900 mx-auto pa500 pa700-l bg--background-dark c--text-inverse shadow-5" style="padding: 3rem 1rem; height: 90%;">
                    <button on="tap:pdf-modal.close" aria-label="Close this dialog window" aria-controls="pdf-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1">
                        <span class="screenreader">"Close this dialog window"</span>
                    </button>
                    <iframe src="{{ url('assets/pdfjs/web/viewer.html#zoom=90&navpanes=0&toolbar=0?file=Due Diligence Report.pdf') }}" height="100%;" width="100%;"></iframe>                    
                </div>
            </div>
        </amp-lightbox>

@stop


@section('footer_scripts')

    <script type="text/javascript">

        var tab_animate_index = 0;
        var tab_animate_index_next = 0;
        var play_pause = 1;
        var play_pause_next = 1;

        $( document ).ready(function() {    

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var timer1 = setInterval(tabAnimation, 7000); 
            tap:AMP.setState({ testimonialSlider: {currentSlide: 1}});

            
        });

        function reloadexceliframe()
        {
            document.getElementById('iframeexcel').setAttribute('src', '{{ url("assets/files/Discounted Cash Flow.html") }}');
        }

        function reloadpdfiframe()
        {
            // document.getElementById('iframepdf').setAttribute('src', '{{ url("assets/files/Due Diligence Report.pdf") }}');
        }
        
        function tabAnimation()
        {
            if(play_pause == 1)
                tab_animate_index++;

            if(play_pause_next == 1)
                tab_animate_index_next++;

            tap:AMP.setState({ pillarCarouselState: tab_animate_index % 6 });
            tap:AMP.setState({ pillarCarouselState_next: tab_animate_index_next % 4 });

            setButtonIcons(play_pause);
            setButtonIconsNext(play_pause_next);
        }            

        function play_pause_func(obj)
        {
            play_pause = 1 - play_pause;
            setButtonIcons(play_pause);
        }

        function play_pause_func_next(obj)
        {
            play_pause_next = 1 - play_pause_next;
            setButtonIconsNext(play_pause_next);
        }

        function clickTab(index)
        {
            tap:AMP.setState({ pillarCarouselState: index });
            tab_animate_index = index;
            play_pause = 0;
            setButtonIcons(0);

            setTimeout(function(){ 
                play_pause = 1;
            }, 8000);  
        }

        function clickTabNext(index)
        {
            tap:AMP.setState({ pillarCarouselState_next: index });
            tab_animate_index_next = index;
            play_pause_next = 0;
            setButtonIconsNext(0);

            setTimeout(function(){ 
                play_pause_next = 1;
            }, 8000);  
            
        }

        function setButtonIcons(status)
        {
            var btns = document.getElementsByClassName('play_pause');
            for(i = 0; i < btns.length; i++)
            {
                if(status == 0)
                    btns[i].children[0].setAttribute('class', 'fa fa-play');
                else
                    btns[i].children[0].setAttribute('class', 'fa fa-pause');
            }
        }

        function setButtonIconsNext(status)
        {
            var btns = document.getElementsByClassName('play_pause_next');
            for(i = 0; i < btns.length; i++)
            {
                if(status == 0)
                    btns[i].children[0].setAttribute('class', 'fa fa-play');
                else
                    btns[i].children[0].setAttribute('class', 'fa fa-pause');
            }
        }

        
    </script>   
@stop