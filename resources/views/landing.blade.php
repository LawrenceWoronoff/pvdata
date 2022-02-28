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
                    <a class="Button--large button mt500-l mt600 w-100p w-auto-l" id="downloadFree" target="_blank">Download For Free </a>
                    <p class="f200-l f300 fw-semibold mt450-ns mt500">No credit card required. </p>
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
                    <div class="company_logo_image_landscape1">
                        <img alt="" aria-hidden="true" class="" src="{{ url('assets/Company/company_logo1.png') }}" style="width:150px">
                    </div>
                    <div class="company_logo_image_landscape2">
                        <img alt="" aria-hidden="true" class="" src="{{ url('assets/Company/company_logo2.png') }}" style="width:150px">
                    </div>
                    <div class="company_logo_image_square">
                        <img alt="" aria-hidden="true" class="" src="{{ url('assets/Company/company_logo3.png') }}" style="width:90px">
                    </div>
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
        <section class="bg--teal-500 py700 py750-ns section" style="padding-bottom: 0px;">
            <div class="flex-column flex-row-l row">
                <div class="col mw-41p-l mw-83p-m mx-auto px350-ns px450 w-100p">
                    <h2 class="f700-m f800-l f900">
                        Trusted by
                        <u class="underline--grow">
                            <span class="relative z1"> 2,000+ </span>
                            <span class="bg--yellow-500 line z0 amp-wp-0ca7be3" data-amp-original-style="height: 16px; bottom:0;"></span>
                        </u>
                        solar analysts, consultants and developers<amp-position-observer intersection-ratios="0 1" layout="nodisplay" on="enter:underlineGrow.start;exit:underlineGrow.start,underlineGrow.reverse" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-position-observer>
                    </h2>
                    <p class="f400-ns f500">
                    PvData customers are industry leaders who embrace due diligence reporting as a vital part of their overall business strategies; and a key to addressing solar energy bankability. </p>
                </div>
                <div style="padding-top:10px" class="col customer-logos flex flex-wrap justify-between mt600-m mw-58p-l mw-83p-m mx-auto pl-8p-offset-l px350-ns px450 relative w-100p">
                    <div class="w-100p mw-33p pr300 px350-ns"><img class="logo-grid" style="width:90%" src="{{ url('assets/ninelogos/adb.png') }}"/></div>
                    <div class="w-100p mw-33p pr300 px350-ns"><img class="px350-ns logo-grid" style="width:110%" src="{{ url('assets/ninelogos/black_rock.png') }}"/></div>
                    <div class="w-100p mw-33p pr300 px350-ns"><img class="px350-ns logo-grid" style="width:130%" src="{{ url('assets/ninelogos/europe_bank.png') }}"/></div>
                    <div class="w-100p mw-33p pr300 px350-ns"><img class="px350-ns logo-grid" style="width:90%;" src="{{ url('assets/ninelogos/kpmg.png') }}"/></div>
                    <div class="w-100p mw-33p pr300 px350-ns"><img class="px350-ns logo-grid" src="{{ url('assets/ninelogos/london.png') }}"/></div>
                    <div class="w-100p mw-33p pr300 px350-ns"><img class="px350-ns logo-grid" style="width:120%; marign-top:-10px;"src="{{ url('assets/ninelogos/world_bank.png') }}"/></div>
                                        
                    
                    
                    
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-4c3fqagkj4j0" class="mw-33p pr300 px350-ns w-100p" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" height="83" id="svg-4c3fqagkj4j0" role="img" viewbox="0 0 144 83" width="144">
                        <title id="alt-4c3fqagkj4j0">Havas</title>
                        <mask height="19" id="a" maskunits="userSpaceOnUse" width="14" x="130" y="38">
                            <path clip-rule="evenodd" d="m130.077 38.8779h13.923v17.2695h-13.923z" fill="#fff" fill-rule="evenodd"></path>
                        </mask>
                        <g clip-rule="evenodd" fill="#000" fill-rule="evenodd">
                            <path d="m.00170898 82.38h16.36929102v-32.9509h-16.36929102z" fill-opacity=".4"></path>
                            <path d="m0 32.9518h16.3685v-32.9518h-16.3685z" fill-opacity=".6"></path>
                            <path d="m.0015564 32.952v16.4746h32.7386436v32.9536h16.3702v-32.9536-16.4746z"></path>
                            <path d="m65.7606 32.9723h2.6956v8.716h.0651c.8879-1.9812 3.2008-2.811 5.1683-2.811 4.3126 0 5.6465 2.4895 5.6465 6.0334v10.8544h-2.6965v-11.1732c0-2.0118-1.2689-3.3203-3.3301-3.3203-3.2668 0-4.8533 2.2022-4.8533 5.1713v9.3222h-2.6956z"></path>
                            <path d="m93.1946 47.2412c-1.0467.766-3.0767.7975-4.8828 1.1172-1.7766.3188-3.2989.9574-3.2989 2.97 0 1.7846 1.5223 2.4231 3.1704 2.4231 3.5541 0 5.0113-2.2336 5.0113-3.7334zm4.3793 8.4609c-.4773.283-1.0805.4446-1.9362.4446-1.3965 0-2.2843-.7678-2.2843-2.5542-1.4911 1.7584-3.4872 2.5542-5.7732 2.5542-2.9804 0-5.4209-1.3408-5.4209-4.6288 0-3.7352 2.7556-4.5327 5.5502-5.0751 2.9812-.5739 5.5172-.3818 5.5172-2.4249 0-2.3638-1.9337-2.7464-3.646-2.7464-2.2861 0-3.9654.7023-4.093 3.1298h-2.6966c.1623-4.088 3.3015-5.5241 6.9466-5.5241 2.9509 0 6.1534.6709 6.1534 4.5327v8.4924c0 1.2762 0 1.8492.8566 1.8492.2196 0 .4739-.0314.8262-.159z"></path>
                            <path d="m106.639 55.7648h-2.885l-6.0896-16.5043h3.0136l4.6 13.7571h.062l4.472-13.7571h2.822z"></path>
                            <path d="m124.434 47.2412c-1.047.766-3.077.7975-4.885 1.1172-1.775.3188-3.296.9574-3.296 2.97 0 1.7846 1.521 2.4231 3.167 2.4231 3.554 0 5.014-2.2336 5.014-3.7334zm4.379 8.4609c-.48.283-1.083.4446-1.937.4446-1.397 0-2.284-.7678-2.284-2.5542-1.492 1.7584-3.489 2.5542-5.774 2.5542-2.98 0-5.422-1.3408-5.422-4.6288 0-3.7352 2.759-4.5327 5.55-5.0751 2.983-.5739 5.519-.3818 5.519-2.4249 0-2.3638-1.933-2.7464-3.647-2.7464-2.283 0-3.962.7023-4.091 3.1298h-2.697c.16-4.088 3.3-5.5241 6.946-5.5241 2.949 0 6.152.6709 6.152 4.5327v8.4924c0 1.2762 0 1.8492.857 1.8492.223 0 .477-.0314.828-.159z"></path>
                        </g>
                        <g mask="url(#a)">
                            <path clip-rule="evenodd" d="m132.772 50.5604c.097 2.4266 2.19 3.191 4.412 3.191 1.679 0 3.961-.3818 3.961-2.4564 0-2.1052-2.663-2.4598-5.359-3.0634-2.662-.6062-5.36-1.5033-5.36-4.6602 0-3.322 3.268-4.6935 6.122-4.6935 3.616 0 6.501 1.1487 6.723 5.1704h-2.696c-.19-2.1061-2.03-2.7778-3.806-2.7778-1.617 0-3.488.4472-3.488 2.1078 0 1.9471 2.853 2.265 5.361 2.8713 2.695.6079 5.358 1.5016 5.358 4.6925 0 3.9282-3.648 5.2053-6.977 5.2053-3.678 0-6.788-1.5007-6.946-5.587z" fill="#000" fill-rule="evenodd"></path>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-6durb25nkbv0" class="mw-33p px200 px350-ns w-100p" height="80" id="svg-6durb25nkbv0" role="img" viewBox="0 0 144 80" width="144">
                        <title id="alt-6durb25nkbv0">Unicef</title>
                        <g fill="#000" fill-rule="nonzero">
                            <path d="M122.145 23.865c-.759.127-1.477.316-2.194.548.148.148.295.296.464.443a11.82 11.82 0 011.73-.991zm12.468 5.21a12.139 12.139 0 00-2.236-2.404c-.422.358-.865.696-1.329.991.632.78 1.181 1.625 1.645 2.532a19.078 19.078 0 001.92-1.118zm-2.722-2.805a12.828 12.828 0 00-2.869-1.646c-.168.19-.358.38-.548.57.78.59 1.519 1.245 2.173 1.983.443-.253.865-.57 1.244-.907zm-3.459-1.857a10.803 10.803 0 00-2.194-.548c.611.295 1.181.633 1.73.991.168-.147.316-.295.464-.443zM124.191 23c7.468 0 13.523 6.118 13.523 13.628 0 7.531-6.055 13.628-13.523 13.628s-13.522-6.118-13.522-13.628S116.723 23 124.191 23zm2.258 2.764a5.767 5.767 0 001.012-.528 12.918 12.918 0 00-2.278-1.181c.464.548.886 1.118 1.266 1.709zm-1.941.443a5.65 5.65 0 001.35-.232 19.011 19.011 0 00-1.35-1.794v2.026zm1.687.295a6.432 6.432 0 01-1.708.295v2.215a12.54 12.54 0 002.848-.4 20.416 20.416 0 00-1.14-2.11zm1.794-.907c-.38.274-.781.506-1.224.696.422.696.802 1.413 1.139 2.173.781-.253 1.519-.57 2.194-.95a12.236 12.236 0 00-2.109-1.92zm-6.055.169c.401-.591.823-1.16 1.266-1.71-.802.317-1.561.718-2.278 1.182.316.211.653.38 1.012.528zm1.962-1.583c-.485.57-.949 1.182-1.35 1.794.422.126.886.19 1.35.232V24.18zm-7.299 22.91c.295.106.717.233 1.245.211.696-.042 1.603-.38 2.468-.717.865-.316 3.143-.865 3.67-.97.549-.106.675-.338.802-.591.127-.232.042-.59-.021-.991s-.169-1.055-.19-1.667c-.021-.612-.042-1.14-.991-1.751-.95-.612-1.562-1.329-1.498-1.856.063-.549.696-.992.696-.992s-.148-.464-.084-.654c.063-.19.654-.126.654-.126s-.085-.654-.043-.823c.043-.169.338-.085.338-.085l.274-.168s-.211-.464-.295-.76c-.085-.295.084-.548.443-.548.337 0 .78-.042 1.814-.274 1.034-.233 1.498-2.237 3.945-2.616 2.447-.38 4.346 1.476 4.346 1.476s3.902 3.65 1.35 7.785c-2.215 3.586-5.042 2.679-5.042 2.679s-.506.232-.253 1.287c.232 1.033 1.73 1.898 1.73 1.898l.126.064a12.992 12.992 0 004.979-10.232c0-2.595-.76-5.02-2.089-7.067-.633.422-1.308.802-2.004 1.16.19.401.338.802.485 1.224-.253-.148-.527-.274-.801-.401l-.253-.57c-.211.106-.422.19-.633.275a5.219 5.219 0 00-1.266-.17c.57-.189 1.118-.421 1.645-.653A12.79 12.79 0 00130.52 28c-.738.422-1.519.78-2.363 1.033.317.76.591 1.54.802 2.32a3.584 3.584 0 00-.57.212 20.849 20.849 0 00-.822-2.363c-.992.274-2.026.422-3.08.443v2.553a20.666 20.666 0 003.459-.359c-.358.232-.611.506-.843.76-.844.126-1.73.19-2.616.21v.866c-.127 0-.275.02-.443.02h-.169v-4.07a15.34 15.34 0 01-1.413-.106 7.298 7.298 0 00-.507-.697c.612.106 1.266.17 1.92.19v-2.215a6.59 6.59 0 01-1.709-.295 17.683 17.683 0 00-.907 1.624 9.709 9.709 0 00-.485-.38c.253-.506.527-.99.823-1.476a6.349 6.349 0 01-1.224-.696c-.548.38-1.055.822-1.519 1.287a4.26 4.26 0 00-.717-.127 14.942 14.942 0 011.751-1.54 4.713 4.713 0 01-.549-.57 12.51 12.51 0 00-2.869 1.646c-2.995 2.278-4.978 5.822-5.126 9.852.084-.064 1.287-1.16 1.856-1.287.591-.127 1.034-1.14 1.034-1.33 0-.168-1.097-2.868.232-4.661 1.16-1.561 2.975-2.363 5.802-.781 2.826 1.582 2.299 3.86 1.751 4.599-.549.738-.781.97-.697 1.329.085.338.338.612.232.78-.105.17-.654.233-.654.233s.127.358.106.506c-.021.126-.317.105-.317.105s.064.211.022.359c-.043.148-.549.063-.549.063s.106.928-1.118.78c-1.224-.147-1.498-.548-1.856-.252-.359.274-.296.654-.043 1.73.254 1.075.359 3.522.359 3.522l.738.528s1.14.063 1.414.084c.274.021.569.106.738.106.169.02.886-.549 1.266-.633.38-.085.506.02.506.126s-.105.36-.105.36.611-.233.822-.17c.211.064.338.274.169 1.055-.169.78-.506 1.287-1.181 1.35-.675.085-1.139-.253-1.625-.232-.485.021-1.919.675-3.08.59-1.16-.105-1.455-.59-1.455-.59s-.401.738-.464 1.034c-.042.19 0 .422.021.548.443.401.886.78 1.329 1.118z"></path>
                            <path d="M117.714 51.395c-.717.127-2.468-.084-3.523-1.35-.886-1.076-1.392-3.67-1.245-3.776.148-.106 1.456.949 2.827 2.194 1.371 1.244 2.658 2.805 1.941 2.932zm-3.186.232c-.105.148-2.004.696-4.05-.506-2.088-1.203-3.08-3.46-3.059-3.565.063-.19 1.456.126 4.072 1.603 2.616 1.456 3.185 2.3 3.037 2.468zm-1.793-2.595c-.147.064-2.004-.844-2.552-3.164-.549-2.32.169-3.924.316-3.987.253-.106 1.076 1.265 1.688 3.354.612 2.11.802 3.734.548 3.797zm-2.32-.97c-.232.084-2.257-.76-3.713-2.532-1.245-1.497-1.835-3.987-1.709-4.071.127-.085 1.814 1.392 3.207 2.974 1.371 1.561 2.426 3.544 2.215 3.629zm-1.308-3.375c-.295-.064-1.181-1.055-1.055-3.545.084-1.582 1.308-3.607 1.54-3.586.295.021.443 1.477.317 3.397-.127 1.94-.486 3.797-.802 3.733zm-4.62-9.283c.232-.168 1.287 1.625 1.941 3.123.569 1.265 1.287 3.987.991 4.092-.19.063-1.687-.886-2.531-3.143-.675-1.836-.507-3.987-.401-4.072zm5.084-1.877c.211.063.127 1.687-.506 3.396-.612 1.709-1.456 3.228-1.646 3.122-.19-.105-.527-2.13.063-3.67.591-1.54 1.878-2.911 2.089-2.848zm-2.173 1.35c-.169-.211-.253-2.046.992-3.607 1.181-1.52 2.236-1.983 2.426-1.899.189.105-.464 1.835-1.266 3.059-.802 1.223-2.025 2.616-2.152 2.447zm-.359-3.059c-.274-.148-.253-1.561.443-2.996.612-1.286 1.941-2.51 2.173-2.426.232.085-.253 1.92-.759 3.08-.443 1.013-1.624 2.469-1.857 2.342zm-1.118-2.088c.211-.043.781 1.56.886 3.712.106 2.173-.105 3.861-.253 3.861-.147 0-1.265-.928-1.329-3.228-.063-2.278.485-4.303.696-4.345zm22.51 27.846c-.317.106-.443-1.308-3.144-3.143a11.624 11.624 0 00-1.202-.738c-.317.19-.654.38-1.013.632-2.7 1.836-2.805 3.25-3.143 3.144-.316-.106-.844-.697-.844-.697s1.857-2.278 4.051-3.544c-1.287-.57-2.026-.59-2.026-.59s-.928 1.56-3.839 1.392c-2.911-.169-4.43-.823-4.915-1.14-.106-.084-.612-.59 3.08-.927 3.459-.317 6.181-.106 8.586.843 2.468-1.054 5.274-1.286 8.86-.949 3.671.338 3.185.844 3.08.928-.485.317-2.004.97-4.915 1.14-2.891.168-3.84-1.393-3.84-1.393s-.823.021-2.257.696c2.32 1.224 4.282 3.671 4.282 3.671s-.464.57-.801.675zm2.236-6.287c-.717-.126.569-1.708 1.941-2.953 1.371-1.244 2.679-2.3 2.826-2.194.148.106-.358 2.7-1.244 3.776-1.034 1.287-2.806 1.498-3.523 1.372zm3.206.212c-.147-.148.401-.992 3.038-2.469 2.616-1.476 4.008-1.793 4.072-1.603.042.106-.971 2.363-3.059 3.565-2.047 1.203-3.945.654-4.051.507zm1.772-2.574c-.232-.064-.063-1.688.549-3.797.612-2.11 1.434-3.46 1.688-3.355.147.064.864 1.667.316 3.987-.549 2.321-2.405 3.228-2.553 3.165zm2.342-.992c-.232-.084.844-2.067 2.215-3.628 1.392-1.561 3.08-3.038 3.207-2.975.126.085-.464 2.574-1.709 4.072-1.456 1.772-3.481 2.616-3.713 2.531zm1.287-3.354c-.295.063-.654-1.814-.781-3.734-.126-1.92.021-3.396.317-3.396.232 0 1.455 2.004 1.54 3.586.105 2.468-.781 3.48-1.076 3.544zm4.62-9.282c.126.084.295 2.236-.38 4.05-.844 2.279-2.341 3.207-2.531 3.144-.296-.106.422-2.827.991-4.093.633-1.477 1.688-3.291 1.92-3.101zM138.81 33.4c.211-.063 1.498 1.308 2.088 2.848.591 1.54.232 3.565.064 3.67-.19.106-1.034-1.413-1.646-3.121-.612-1.71-.696-3.333-.506-3.397zm2.194 1.35c-.127.17-1.35-1.223-2.152-2.447-.802-1.223-1.456-2.953-1.266-3.059.19-.105 1.224.38 2.426 1.899 1.224 1.582 1.139 3.417.992 3.607zm.337-3.037c-.232.126-1.413-1.33-1.856-2.342-.506-1.16-.992-2.996-.76-3.08.232-.084 1.561 1.14 2.173 2.426.718 1.434.739 2.848.443 2.996zm1.118-2.089c.211.042.76 2.046.697 4.346-.064 2.3-1.182 3.227-1.33 3.227-.147 0-.358-1.687-.253-3.86.106-2.152.675-3.755.886-3.713zM13.923 43.442c0 .506-.042 2.932-.78 4.873-.823 2.152-3.017 2.974-4.62 2.974-3.755 0-4.578-2.637-4.578-6.244V32.788H0V46.67c0 4.176 2.49 7.488 6.814 7.488 2.89 0 5.548-1.075 7.11-3.67h.084v3.059h3.84V32.789h-3.925v10.653zM25.335 32.788h-3.839v20.759h3.924V42.26c0-4.05 1.076-4.957 1.645-5.548 1.646-1.645 3.798-1.519 3.798-1.519 3.312 0 4.746 1.857 4.746 5.295v13.059h3.924V39.202c0-6.646-6.413-7.025-7.848-7.025-2.067 0-4.957 1.076-6.286 3.67h-.085v-3.059h.021zM46.748 53.547V32.789h-3.924v20.758h3.924zm-4.304-25.59h4.662v-4.26h-4.662v4.26zM66.747 39.434c-.21-4.515-3.523-7.278-7.89-7.278-6.581 0-9.64 5.084-9.64 11.16 0 6.117 2.637 10.821 9.303 10.821 4.578 0 8.059-2.848 8.396-7.53h-3.924c-.21 2.974-1.814 4.661-4.43 4.661-3.755 0-5.21-3.27-5.21-8.143 0-4.873 1.455-8.143 5.21-8.143 2.806 0 4.05 1.815 4.262 4.43h3.923v.022zM86.957 43.906v-1.94c0-5.739-2.932-9.663-9.135-9.79-6.582 0-9.64 5.085-9.64 11.16 0 6.118 2.637 10.823 9.303 10.823 4.957 0 8.607-2.363 9.219-7.068h-4.135c-.464 3.017-1.983 4.22-5.042 4.22-4.008 0-5.506-3.755-5.21-7.405h14.64zm-14.62-2.721c0-3.397 1.941-6.16 5.211-6.16 3.797 0 5.38 2.679 5.295 6.16H72.338zM94.91 53.547V35.51h4.79v-2.722h-4.79v-3.312c-.126-2.278 1.16-2.848 3.397-2.848.654 0 1.329.085 1.983.127v-3.27c-.95-.169-1.857-.422-2.806-.422-2.932 0-6.37 1.203-6.497 5.738v3.966h-4.072v2.722h4.05v18.015h3.945v.043z"></path>
                        </g>
                    </svg>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-3esadetjudtg" class="mw-33p pl300 px350-ns w-100p" fill="none" height="80" id="svg-3esadetjudtg" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-3esadetjudtg">IHG</title>
                        <path d="m138.541 18.5294c.565 0 .941-.1882.941-.7529s-.376-.753-.941-.753h-.753v1.5059zm-1.882-2.447h1.882c1.318 0 2.071.5647 2.071 1.6941 0 .7529-.565 1.3176-1.13 1.5059l1.506 2.2588h-1.317l-1.318-2.0706h-.565v2.0706h-1.129zm6.4 2.8235c0-2.6353-1.883-4.5177-4.518-4.5177s-4.517 1.8824-4.517 4.7059 2.07 4.5177 4.517 4.5177c2.635-.1883 4.518-2.0706 4.518-4.7059zm-9.977 0c0-3.0118 2.447-5.4588 5.459-5.4588 3.2 0 5.459 2.447 5.459 5.4588 0 3.2-2.447 5.4588-5.459 5.4588s-5.459-2.4471-5.459-5.4588zm-28.8 3.3882c-3.2 0-6.0232.753-8.282 2.2588-2.4471 1.5059-4.3294 3.5765-5.4588 6.0236-1.3177 2.6353-1.8824 5.4588-1.8824 8.847 0 3.5765.753 6.5883 2.0706 9.2236 1.3177 2.6353 3.2 4.5176 5.6471 6.0235 2.447 1.3176 5.0825 2.0706 8.0945 2.0706 3.953 0 7.341-1.1294 10.164-3.2 2.824-2.2588 4.33-4.8941 4.518-8.2824h-16v-11.1059h28.423c.377 2.2589.565 4.3295.565 6.2118 0 5.6471-1.317 10.5412-3.765 14.6824-2.447 4.1411-5.835 7.5294-9.976 9.7882s-8.847 3.3882-14.118 3.3882c-5.4585 0-10.5408-1.3176-14.8702-3.7647-4.3294-2.447-7.7177-5.8353-9.9765-10.1647s-3.5765-9.2235-3.5765-14.6823c0-5.8353 1.3177-10.9177 3.7647-15.0589 2.4471-4.3294 5.8353-7.5294 10.1647-9.9764 4.5177-2.4471 9.2236-3.5765 14.4938-3.5765 4.33 0 8.283.7529 12.047 2.4471 3.765 1.6941 6.777 3.9529 9.224 6.7764l-8.282 7.7177c-3.765-3.7647-8.095-5.6471-12.989-5.6471zm-82.8232-10.1647h12.0471v21.8353h23.7176v-21.8353h12.0471v54.7765h-12.0471v-21.8353h-23.9059v21.8353h-12.047v-54.7765zm-9.4117 54.7765h-12.0471v-54.7765h12.0471z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-7f9b8tl2end0" class="mw-33p my400 pr300 px350-ns w-100p" fill="none" height="80" id="svg-7f9b8tl2end0" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-7f9b8tl2end0">Purdue University</title>
                        <g fill="#000">
                            <path d="m56.1443 28.9639-1.6173-.4621v-1.1552h6.296c4.1011 0 5.6029 1.3285 5.6029 4.3898 0 2.8881-1.6751 4.3899-4.9097 4.3899h-2.5416v4.621l1.6174.4621v1.1552h-6.1228v-1.0975l1.6751-.4621zm2.8303 0v5.8339l3.0037-.231c.7509-.3466 1.5018-.8087 1.5018-2.6571 0-1.444-.0578-2.9458-2.8304-2.9458z"></path>
                            <path d="m89.8773 36.0108h-2.0216v4.852l1.6173.4621v1.0397h-6.1805v-1.0975l1.6751-.4621v-11.8411l-1.6174-.4621v-1.1552h6.5849c3.9278 0 5.3141 1.3862 5.3141 4.0433 0 2.0794-.8087 3.1191-2.6571 3.87l2.7726 5.4296 1.7906.5776v1.0975h-4.1588zm-2.0216-7.0469v5.7184l3.0613-.231c.982-.4621 1.4441-1.2708 1.4441-2.8304 0-1.6751-.5199-2.7148-2.2527-2.7148z"></path>
                            <path d="m98.4263 41.3249 1.6177-.4621v-11.8989l-1.6177-.4621v-1.1552h7.2777c4.101 0 6.527 2.4837 6.527 7.3357 0 5.4874-2.483 7.6823-6.816 7.6823h-6.9887zm4.5057-12.361v11.8989h2.137c1.502 0 4.043-.231 4.043-5.6606 0-4.2744-.751-6.2383-4.043-6.2383z"></path>
                            <path d="m60.823 50.2202c0 1.8484-1.0397 2.4837-2.7725 2.4837-1.7329 0-2.7726-1.0397-2.7726-2.4837v-3.639l-.8087-.2311v-.6931h3.1769v.6931l-.7509.2311v3.639c0 .9242.3466 1.444 1.3863 1.444.5199 0 1.3863-.1733 1.3863-1.5018v-3.639l-.8087-.231v-.6932h2.7726v.6932l-.8087.231z"></path>
                            <path d="m66.3682 48.3141v3.3501l.7509.2311v.6931h-2.7148v-.6931l.8087-.2311v-4.7942l-.3466-.4043-.4621-.1733v-.7509h1.7906l3.4079 4.2744v-3.3502l-.8086-.2311v-.6931h2.7148v.6931l-.8087.2311v6.065h-.9242z"></path>
                            <path d="m77.343 51.722.8087.2311v.6931h-3.2347v-.6931l.8087-.2311v-5.1408l-.8087-.231v-.6932h3.2347v.6932l-.8087.231z"></path>
                            <path d="m120.607 51.722.808.2311v.6931h-3.234v-.6931l.808-.2311v-5.1408l-.808-.231v-.6932h3.234v.6932l-.808.231z"></path>
                            <path d="m85.4873 52.5884h-1.5018l-2.1949-6.065-.8087-.231v-.6932h3.408v.6932l-.8087.231 1.5018 4.3322 1.5018-4.3322-.8086-.231v-.6932h2.7725v.6932l-.8086.231z"></path>
                            <path d="m91.8409 46.5812-.8087-.231v-.6932h5.4874l.0577 2.1372h-.8086l-.4043-1.213h-1.8484v1.9639h1.7906v.982h-1.7906v2.1949h1.8484l.5776-1.213h.8664l-.1155 2.1372h-5.6029v-.6931l.8087-.1733v-5.1986z"></path>
                            <path d="m103.336 49.7581h-.578v1.9639l.809.2311v.6931h-3.235v-.6931l.809-.2311v-5.1408l-.809-.231v-.6932h3.177c1.964 0 2.541.7509 2.541 1.9639 0 .7509-.173 1.5018-1.155 1.8484l1.155 2.2527.982.2888v.6354h-2.368zm-.578-3.1769v2.426l1.097-.1155c.347-.2888.578-.7509.578-1.213 0-.6931-.173-1.1552-.924-1.1552z"></path>
                            <path d="m109.863 50.4513h.982l.231.9819c.462.2888.982.4043 1.502.4043h.231c.288-.1733.404-.5198.462-.8664 0-1.6173-3.35-.9242-3.35-3.2924 0-1.0975.982-2.1372 2.657-2.1372.635 0 1.328.1733 1.906.4621v1.8484h-.924l-.347-1.1553c-.347-.1155-.751-.231-1.155-.231-.058 0-.116 0-.174 0-.288.1733-.462.4621-.462.8087 0 1.3862 3.293.9241 3.293 3.2346 0 1.2708-1.155 2.195-2.657 2.195-.751 0-1.502-.2311-2.137-.6354z"></path>
                            <path d="m126.96 46.5812h-.924l-.404 1.213h-.867v-2.195h6.123v2.195h-.867l-.404-1.213h-.982v5.1408l.809.231v.6932h-3.235v-.6932l.809-.231z"></path>
                            <path d="m136.318 49.9314-1.849-3.3502-.808-.231v-.6932h3.408v.6932l-.809.231 1.155 2.2527 1.155-2.2527-.808-.231v-.6932h2.772v.6932l-.808.231-1.849 3.3502v1.7906l.809.2311v.6931h-3.235v-.6931l.809-.2311z"></path>
                            <path d="m139.321 38.0325-1.097 2.7725h-4.679v-5.3718h2.657l.347 1.5018h1.155v-4.5632h-1.155l-.347 1.5018h-2.657v-4.9097h4.506l.808 2.8881h1.675l-.115-4.5054h-11.379v1.1552l1.617.4621v11.8989l-1.675.4621v1.0397h11.668l.231-4.3321z"></path>
                            <path d="m80.462 37.2238c0 3.8123-1.8484 5.3719-5.5451 5.3719-3.408 0-5.8917-1.3863-5.8917-5.0253v-8.6065l-1.6751-.4621v-1.1552h6.1227v1.1552l-1.6173.4621v8.6065c0 2.1949.982 3.1191 3.408 3.1191 1.675 0 3.1768-.9819 3.1768-3.2924v-8.4332l-1.675-.4621v-1.1552h5.314v1.1552l-1.6173.4621z"></path>
                            <path d="m126.094 37.2238c0 3.8123-1.849 5.3719-5.545 5.3719-3.408 0-5.95-1.3863-5.95-5.0253v-8.6065l-1.617-.4621v-1.1552h6.123v1.1552l-1.618.4621v8.6065c0 2.1949.982 3.1191 3.408 3.1191 1.675 0 3.177-.9819 3.177-3.2924v-8.4332l-1.617-.4621v-1.1552h5.314v1.1552l-1.617.4621z"></path>
                            <path d="m47.2491 29.7726c-1.6751-2.5416-5.1986-2.7726-7.6823-2.7726h-28.5343l-4.04333 9.4152h5.14083l-2.88812 6.7581h-5.19856l-4.04332 9.4729h25.5307l3.2346-7.6245h5.3719c7.7401 0 10.6859-3.1769 12.7653-7.9712.7509-1.7906 2.0217-4.7364.3466-7.2779zm-1.9639 6.527c-1.5596 3.6968-3.5812 6.9314-11.148 6.9314h-11.7834l-.6931 1.6751h5.2563l-2.5415 5.9495h-21.60294l2.54152-5.9495h5.19852l4.3322-10.2238h-5.14083l2.48373-5.9494h27.3213c3.3502 0 5.3141.6353 6.2383 2.0216 1.0975 1.6173.3466 3.639-.4621 5.5451z"></path>
                            <path d="m39.5666 29.657h-26.7436l-1.7329 4.1011h5.1408l-5.1408 12.0722h-5.19856l-1.73285 4.1011h19.63901l1.7328-4.1011h-5.2563l1.5018-3.4657h12.361c7.1047 0 8.8953-3.0036 10.2816-6.3538 1.3863-3.3501 2.2527-6.3538-4.852-6.3538zm-3.1769 6.4116c-.5776 1.3285-1.9639 2.1949-3.5812 2.1949h-9.2419l1.9062-4.4476h9.2419c1.6173 0 2.3104.8664 1.675 2.2527z"></path>
                            <path d="m142.498 52.5884c-.808 0-1.501-.6931-1.501-1.5018 0-.8086.693-1.5018 1.501-1.5018.809 0 1.502.6932 1.502 1.5018 0 .8087-.693 1.5018-1.502 1.5018zm0-2.657c-.635 0-1.213.5199-1.213 1.213 0 .6354.52 1.213 1.213 1.213.636 0 1.213-.5199 1.213-1.213s-.577-1.213-1.213-1.213z"></path>
                            <path d="m142.325 51.2022v.5776h-.289v-1.3863h.636c.288 0 .462.1733.462.4043 0 .1155-.058.2888-.231.3466.057 0 .173.1155.173.3466v.0577.2888h-.289c0-.1155-.058-.231 0-.2888 0-.1733-.058-.231-.289-.231zm0-.2311h.231c.173 0 .231-.0578.231-.1733s-.058-.1733-.231-.1733h-.231z"></path>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-2e5mk2dicmo0" class="mw-33p my400 px200 px350-ns w-100p" fill="none" height="80" id="svg-2e5mk2dicmo0" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-2e5mk2dicmo0">DreamWorks</title>
                        <g fill="#000">
                            <path d="m22.6741 32.6971c0-4.0898-3.2903-7.3834-7.3137-7.3834h-3.6269v14.7015h3.6269c4.0234 0 7.3137-3.2959 7.3137-7.3181zm16.4984 29.3079h-13.3139l-10.5701-14.6687h-3.555v14.637h-11.7335v-43.9733h16.8088c9.6902 0 17.5996 6.5895 17.5996 14.6971 0 4.9446-3.0322 9.3611-7.6468 12.0634z"></path>
                            <path d="m52.4053 35.336c-3.0986 0-5.7343 4.2119-5.7343 9.4256s2.6357 9.4309 5.7343 9.4309c3.1706 0 5.802-4.2173 5.802-9.4309 0-5.2138-2.6314-9.4256-5.802-9.4256zm18.0603 9.4256c0 9.9602-8.0999 17.9361-18.0603 17.9361-9.957 0-17.9971-7.9759-17.9971-17.9361 0-9.9527 8.0401-17.9329 17.9971-17.9329 9.9604 0 18.0603 7.9802 18.0603 17.9329zm27.5348-17.2035-13.5163 13.5142v-13.5589h-11.7312v34.4598h11.7312v-13.9782l14.1111 13.9782h14.7658l-17.932-17.9341 14.853-14.8473v20.4499c0 6.7897 4.083 13.0557 14.366 13.0557 4.881 0 9.361-2.7686 11.538-5.2737l5.275 4.5494h2.504v-34.415h-11.732v22.2819c-1.321 2.3057-3.161 3.7555-6.006 3.7555-2.886 0-4.211-1.7112-4.211-7.1843v-18.8531z"></path>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-42s7pf99mdr0" class="mw-33p my400 pl300 px350-ns w-100p" fill="none" height="80" id="svg-42s7pf99mdr0" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-42s7pf99mdr0">Tumi</title>
                        <path d="m139.66 58.3346h4.306v-29.2064h-4.306zm-64.5775-29.2064v22.1115c0 .2755 0 2.8242-2.7553 2.8242h-25.4178c-2.7554 0-2.7554-2.5487-2.7554-2.8242v-22.1115h-19.9072v29.2064h4.3397v-24.9012h11.2279v18.9084c0 2.342 1.5843 5.9928 6.0961 5.9928h27.3466c4.5463 0 6.1306-3.6508 6.1306-5.9928s0-22.1459 0-23.1792h-4.3052zm53.2125 0-19.081 25.2112-19.0805-25.2112h-6.7506v29.2064h4.3396v-25.3145l19.0465 25.3145h4.925l18.977-25.3145v25.3145h4.34v-29.2064zm-128.295-8.1282v12.4334h15.5676v24.9012h4.3396v-29.2064h-15.56757v-3.8919h139.66037v-4.2363z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-40i07mmeu060" class="mw-33p pr300 px350-ns w-100p" height="80" id="svg-40i07mmeu060" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-40i07mmeu060">Subaru</title>
                        <g fill="#000" fill-rule="evenodd">
                            <path d="M60.337 38.995c-1.128-.096-7.156-.367-8.004-.438-.646-.057-.909-.378-.909-.906 0-.428.274-.764.854-.806 1.932-.127 5.273-.1 6.594-.022.65.04.907.356.942.725v.562h3.27v-.5c-.06-2.413-1.247-3.333-3.504-3.424-2.454-.095-5.117-.122-7.657.024-1.689.095-3.487.972-3.732 3.02a3.978 3.978 0 00-.01 1.063c.264 2.252 1.94 2.797 3.279 2.91 1.381.118 7.022.415 7.711.469.925.076 1.057.433 1.057.919 0 .543-.257.862-1.057.908-1.738.103-5.004.07-6.643.02-.579-.021-.996-.17-1.016-.854l-.007-.587h-3.27s-.005.28-.004.355c.015 2.527.891 3.697 3.343 3.886 2.367.178 5.944.152 8.594-.013 2.316-.146 3.169-1.72 3.254-3.531.007-.097 0-.278 0-.429-.071-2.143-1.34-3.188-3.085-3.351zM90.881 43.732h-6.58v-2.306h6.653c.552.025 1.3.254 1.3 1.137 0 .916-.618 1.14-1.373 1.169zm-6.58-6.839h6.653c.599.042 1.113.288 1.113.943 0 .67-.466 1.017-1.17 1.056H84.3v-1.999zm9.822 3.045c.508-.218 1.094-.95 1.094-2.38 0-2.142-1.383-3.266-3.435-3.345-2.106-.002-10.747 0-10.747 0V46.42H91.87c2.54-.067 3.673-1.381 3.673-3.744 0-1.66-.808-2.557-1.419-2.74zM76.043 42.315c-.021.747-.488 1.052-1.091 1.108a41.56 41.56 0 01-6.053 0c-.55-.048-.986-.564-1.006-1.134v-8.076H64.65v8.807c.09 2.105 1.362 3.276 3.54 3.36 2.484.095 5.028.104 7.733-.005 2.062-.083 3.266-1.344 3.382-3.364v-8.798h-3.261v8.102zM123.4 39.241h-6.746v-2.345l6.746-.004c.769.062 1.175.396 1.175 1.168 0 .732-.397 1.144-1.175 1.181zm3.083 1.4c.541-.294 1.294-1.06 1.294-2.748 0-2.513-1.347-3.581-3.49-3.682h-10.883v12.21l3.25-.004v-4.37h6.746c.771.013 1.167.513 1.213 1.176.082 1.247.05 3.19.05 3.19l3.298.008s-.013-1.766-.054-3.08c-.043-1.403-.77-2.499-1.424-2.7zM101.631 41.665l2.352-4.411 2.311 4.411h-4.663zm3.976-7.455h-3.436l-6.78 12.206h3.707l1.155-2.165h7.396l1.134 2.165h3.813l-6.773-12.206h-.216zM140.737 34.213v8.103c-.017.745-.48 1.052-1.084 1.107a41.647 41.647 0 01-6.057 0c-.548-.047-.98-.563-1.004-1.133v-8.077h-3.242v8.806c.088 2.106 1.359 3.277 3.536 3.36 2.485.097 5.026.105 7.729-.004 2.067-.082 3.274-1.344 3.386-3.364v-8.798h-3.264z"></path>
                            <g>
                                <path d="M21.42 50.37c-11.074 0-19.853-4.518-19.853-10.09 0-5.614 9.147-10.088 19.853-10.088 10.616 0 19.656 4.474 19.656 10.088 0 5.572-8.944 10.09-19.656 10.09zM21.41 29C9.842 29 0 34.047 0 40.28c0 6.23 9.684 11.282 21.41 11.282 11.568 0 21.23-5.052 21.23-11.282 0-6.233-9.662-11.28-21.23-11.28z"></path>
                                <path d="M16.55 40.963c.401-1.297.793-1.75 2.194-1.99 1.41-.247 4.056-.555 5.638-.74.397-.048 1.31-.124 2.155-.224 1.613-.176 1.754-.162 3.343.03.838.099 1.412.178 2.085.29.542.09.746.24.91.701.133.368.236.77.306 1.047.062.242.143.635.162.718.026.101.095.12.136.12a.157.157 0 00.148-.12c.023-.103.097-.476.157-.718.06-.248.204-.748.31-1.047.152-.423.394-.605.799-.686.448-.097 1.224-.198 1.788-.281.43-.059 1.331-.171 1.397-.18.09-.008.14-.063.14-.145 0-.074-.056-.128-.14-.138-.06 0-.94-.117-1.407-.177-.538-.079-1.207-.153-1.808-.281-.243-.048-.567-.174-.735-.513-.118-.237-.185-.482-.327-.947-.043-.133-.143-.51-.168-.6-.028-.106-.088-.128-.142-.128-.054 0-.113.017-.148.128l-.173.59c-.148.492-.23.762-.329.962-.159.316-.416.446-.841.524-.418.068-1.273.186-2.128.295-1.666.204-1.737.198-3.335.022-.479-.05-1.747-.209-2.166-.265-1.532-.178-4.078-.434-5.627-.702-.84-.151-1.592-.329-2.078-1.503-.324-.791-.52-1.5-.7-2.14-.155-.532-.329-1.258-.388-1.5-.029-.116-.077-.156-.154-.156-.07 0-.118.037-.153.156-.064.239-.265.993-.413 1.496-.186.62-.36 1.36-.69 2.144-.421.99-.956 1.296-2.054 1.509-1.568.293-3.48.524-5.253.712-.87.091-3.391.363-3.496.374-.109.01-.144.09-.144.138 0 .053.035.13.144.142.105.014 2.694.28 3.508.367 1.835.195 3.536.404 5.165.683 1.578.267 1.946 1.06 2.249 2.044.236.778.554 2.142.663 2.674.11.468.298 1.446.32 1.53.024.107.073.15.15.15.07 0 .126-.038.155-.15.02-.092.21-1.098.309-1.534.118-.521.442-1.945.666-2.681z"></path>
                                <path d="M37.095 41.328c-.238-.055-.472-.215-.578-.438a4.297 4.297 0 01-.27-.687 34.34 34.34 0 00-.165-.588c-.024-.088-.092-.11-.146-.11-.054 0-.11.027-.137.117-.03.104-.104.369-.17.584a3.242 3.242 0 01-.262.684c-.113.216-.288.377-.64.45-.655.137-1.22.253-1.577.306-.764.115-1.129.168-2.288.008-.518-.077-1.395-.206-2.082-.336-.38-.073-.72-.179-.91-.545-.123-.248-.203-.537-.293-.832-.059-.187-.17-.567-.21-.71-.027-.099-.067-.138-.15-.138-.08 0-.12.04-.148.138-.038.122-.143.49-.208.707-.086.287-.176.59-.297.83-.185.371-.494.46-.893.543-.571.118-1.482.213-2.294.297-.361.046-1.022.12-1.177.145-.087.008-.136.053-.136.136 0 .086.035.13.135.14.142.022.92.107 1.172.137.435.047 1.478.187 2.297.302.562.081.864.295 1.029.943.087.351.164.61.22.88.05.221.131.573.152.642.03.102.08.144.144.144.065 0 .127-.03.154-.148.014-.065.113-.503.138-.623.06-.255.136-.57.225-.898.167-.583.341-.779 1.05-.94.556-.127 1.578-.255 2.073-.324 1.219-.173 1.537-.114 2.296-.012.342.046.923.158 1.577.302.434.098.583.32.68.591.101.266.173.573.257.895.075.274.125.514.131.558.022.083.082.128.142.128.065 0 .128-.04.147-.121.014-.059.064-.299.134-.57.076-.292.162-.616.255-.893.09-.259.239-.473.623-.566.365-.081.966-.18 1.457-.252.426-.063 1.16-.155 1.263-.17.107-.016.15-.08.15-.14 0-.063-.034-.133-.15-.145-.106-.018-.811-.112-1.27-.177a24.285 24.285 0 01-1.45-.244z"></path>
                                <path d="M34.726 45.968a63.02 63.02 0 01-1.345-.142c-.605-.07-1.644-.218-1.992-.294-.367-.081-.543-.183-.708-.516a3.062 3.062 0 01-.225-.597c-.038-.148-.188-.636-.209-.715-.022-.096-.078-.125-.136-.125-.064 0-.116.022-.144.127-.034.103-.154.565-.205.722-.059.178-.108.356-.21.58-.127.263-.305.447-.692.524-.59.116-1.655.282-1.907.32-.958.13-1.183.155-1.84.089-.505-.046-1.633-.219-2.38-.333-.453-.066-.919-.1-1.17-.518-.148-.249-.229-.49-.328-.799a19.635 19.635 0 01-.248-.843c-.03-.091-.069-.142-.15-.142-.081 0-.123.05-.15.149-.035.102-.179.593-.248.827-.107.344-.2.622-.334.808-.256.365-.497.412-1.114.515-.649.106-1.455.196-2.083.258-.552.063-.9.1-1.102.122-.1.012-.16.045-.16.141 0 .099.06.135.16.146.184.026.726.084 1.107.121.637.068 1.212.122 2.078.258.839.127.986.238 1.256.86.136.31.186.538.24.78.06.262.184.788.203.896.008.08.054.146.142.146.09 0 .131-.058.148-.15.021-.122.15-.677.21-.892.06-.242.119-.483.23-.78.27-.672.489-.743 1.307-.867.628-.096 1.795-.27 2.386-.336.657-.06.921-.06 1.844.075.318.048 1.433.208 1.89.29.384.08.574.199.76.646.063.147.155.464.206.648.067.232.154.586.165.617.011.043.054.09.129.09.067 0 .111-.05.126-.093.022-.05.121-.41.185-.625.05-.185.143-.48.21-.637.113-.262.259-.544.717-.632.46-.08 1.513-.211 2.036-.273.394-.043 1.25-.153 1.35-.163.106-.016.148-.076.148-.142 0-.074-.042-.13-.153-.141z"></path>
                            </g>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-7mpv8d1nu0f0" class="mw-33p px200 px350-ns w-100p" fill="none" height="80" id="svg-7mpv8d1nu0f0" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-7mpv8d1nu0f0">Columbia</title>
                        <path d="m7.70171 42.4381c.69281.6928.69281 1.8474 0 2.5402l-.57734.5774c-.69281.6928-1.82439.6928-2.54029 0l-4.064474-4.0414c-.692808-.6928-.692808-1.8475 0-2.5403l.577334-.5773c.69281-.6928 1.84749-.6928 2.5403 0zm-.41569-7.7133c-.6928-.6928-1.82439-.6928-2.54029 0l-.60043.5773c-.69281.6928-.69281 1.8475 0 2.5403l4.06447 4.0645c.6928.6928 1.82443.6928 2.54033 0l.5773-.6004c.6928-.6928.6928-1.8475 0-2.5403zm10.80778 3.5795c-.6928-.6928-1.8475-.6928-2.5403 0l-.5773.6004c-.6928.6928-.6928 1.8244 0 2.5403l4.0645 4.0414c.6928.6928 1.8243.6928 2.5402 0l.5774-.5773c.6928-.6928.6928-1.8475 0-2.5403zm3.6488-3.6488c-.6928-.6928-1.8244-.6928-2.5403 0l-.5773.6005c-.6928.6928-.6928 1.8243 0 2.5402l4.0644 4.0645c.6928.6928 1.8244.6928 2.5403 0l.6005-.6004c.6928-.6928.6928-1.8244 0-2.5403zm-6.7433-4.0183c.6928-.6928.6928-1.8244 0-2.5403l-.5774-.5773c-.6928-.6928-1.8474-.6928-2.5403 0l-4.04133 4.0414c-.69281.6928-.69281 1.8244 0 2.5403l.57734.6004c.69281.6928 1.84749.6928 2.54029 0zm3.6488 3.6488c.6928-.6928.6928-1.8244 0-2.5403l-.6005-.6004c-.6928-.6928-1.8244-.6928-2.5403 0l-4.0182 4.0645c-.6929.6928-.6929 1.8475 0 2.5403l.6004.6004c.6928.6928 1.8244.6928 2.5403 0zm-3.6257 10.6c.6928-.6928.6928-1.8244 0-2.5403l-.6005-.5774c-.6928-.6928-1.8244-.6928-2.5403 0l-4.04133 4.0414c-.69281.6928-.69281 1.8475 0 2.5403l.60043.6004c.69281.6929 1.8475.6929 2.5403 0zm3.6488 3.6488c.6928-.6928.6928-1.8244 0-2.5403l-.6005-.5774c-.6928-.6928-1.8244-.6928-2.5403 0l-4.0413 4.0414c-.6929.6928-.6929 1.8244 0 2.5403l.6004.6004c.6928.6928 1.8244.6928 2.5403 0zm29.4905-3.5795c.1154.1616.6697.993.6697.993-.3002 1.2932-1.0854 2.9329-1.0854 2.9329l-.1155.0462c-3.0022 1.1777-7.6209 2.1707-12.6091.1616-2.9791-1.2009-5.1037-3.5333-5.9581-6.5817-.9007-3.1407-.2772-6.6047 1.6627-9.2374 2.1477-2.9098 5.6117-4.5032 10.2997-4.7573 1.7782-.0923 5.427.3926 7.39 1.5011l.1616.0924s.0693 4.9189.0231 5.1499l-.0462.2309-1.4548.0462-.0693-.4388c-.2541-1.4318-.9007-5.2653-6.2353-4.9882-2.2863.1155-4.1337 1.2701-5.5194 3.0714-1.6858 2.1939-2.1938 5.2654-1.4318 8.6139.7159 3.2562 3.21 5.3577 5.1037 6.0736.8083.3003 3.3255.8776 5.2423 0 1.6165-.7159 3.21-1.9398 3.9721-2.9097zm18.1515 5.2422v-17.02c0-.5542 0-1.4549-.5773-2.0784-.0924-.0924-.8545-.6928-.8545-.6928v-.7621l4.5725-.9237.4157.254s-.0231 18.013 0 18.2439c.0693 1.7551 1.2471 1.8706 1.2471 1.8706v1.0854h-4.8035zm20.2993-1.1316c-.8314-.1847-1.2471-.8775-1.2471-2.0322v-10.7847l-.4157-.2541-4.5956.9238v.7621s.7852.6235.8776.6928c.5773.6235.5773 1.5242.5773 2.0784v6.4431c-1.5011 1.1316-2.8867 1.5473-3.8335 1.1085-.7621-.3695-1.2009-1.2701-1.224-2.5403v-9.1912l-.4157-.2541-4.5956.9238v.7621s.7852.6235.8776.6928c.6004.6235.5773 1.5472.5773 2.1015v5.427c.0462 1.0623.0924 1.4087.2078 1.8706.2772 1.1777.97 2.0091 1.9861 2.3786 1.6165.6004 3.9259.0231 6.3969-1.6165v1.501h5.0344v-.9468zm22.7935 0c-.785-.1847-1.201-.8775-1.224-2.0322v-6.6048c0-1.5242-.785-4.3878-3.787-4.3878-2.217 0-3.742 1.3164-4.4575 2.0323-.485-1.0161-1.4087-2.0323-3.2331-2.0323-1.4087 0-2.7251.5312-3.9721 1.5935v-1.3856l-.4157-.2541-4.5956.9238v.7621s.7851.6235.8775.6928c.5774.6235.5774 1.5242.5774 2.0784v9.6531h4.9882v-.9468l-.2541-.0693c-.7851-.1847-1.1777-.8545-1.2008-2.0322 0 0 0-6.651 0-7.7133.8775-.739 1.7551-.9006 2.7019-.8083.7621.0693 1.5473.6005 1.5473 3.3255v8.2444h4.9886v-.9468l-.254-.0693c-.809-.1847-1.201-.8545-1.224-2.0322v-6.6048c0-.1847-.023-.7159-.093-1.0854.901-.7621 1.778-.9237 2.725-.8545.762.0693 1.548.6005 1.571 3.3255v8.2444h4.988v-.9468zm-44.7324-5.9812c0-2.1246-.6928-3.9259-1.9861-5.2192-1.3394-1.3394-3.2793-2.0553-5.5655-2.0553-4.3185 0-7.5516 3.1407-7.5516 7.2976 0 4.4108 2.979 7.2744 7.5516 7.2744 2.1939 0 4.1106-.7159 5.4962-2.1246 1.3164-1.3394 2.0554-3.1638 2.0554-5.1729zm-7.5516 5.7272c-2.7944 0-3.5795-2.1939-3.5795-5.7503 0-2.6096.7851-5.7503 3.5795-5.7503 2.7943 0 3.5795 3.1407 3.5795 5.7503 0 3.5564-.7852 5.7503-3.5795 5.7503zm69.211-17.2278c0-1.0161.832-1.8475 1.871-1.8475 1.016 0 1.871.8314 1.871 1.8475s-.832 1.8475-1.871 1.8475-1.871-.8314-1.871-1.8475zm.254 18.4748v-9.7455c0-.5773 0-1.4318-.554-2.0322-.092-.0924-.877-.6928-.877-.6928v-.7621l4.595-.9237.416.254s0 10.854 0 10.8309c.023 1.1778.416 1.8475 1.201 2.0322l.254.0693v.9468zm-2.632-10.7154c-.97-1.732-2.24-2.8174-3.811-3.1869-2.147-.5311-4.318.4157-5.658 1.224v-8.3599l-.415-.254-4.573.9237v.7621s.785.6235.878.6928c.577.6004.554 1.4549.554 2.0322v15.7499.1847l.162.0924c2.609 1.3394 6.073 1.5472 8.59.508 2.818-1.1777 4.019-3.1638 4.527-4.6418.808-2.2401.439-4.4801-.254-5.7272zm-3.811 7.5285c-.785 1.3394-2.424 2.1246-3.695 1.7782-1.27-.3464-1.963-1.7089-1.939-3.8104 0 0 0-4.8035 0-5.8427.046-.0231.092-.0462.138-.0693.762-.3926 2.217-1.1316 4.134-.1616 1.039.5311 1.801 1.5011 2.171 2.7712.485 1.7089.184 3.6488-.809 5.3346zm23.856 1.6859-.254-.0462c-.208-.0462-.577-.5312-.577-1.3856v-6.4201c0-1.8474-.601-3.3023-1.686-4.0875-.993-.7159-2.356-.8314-3.926-.3233-1.871.6004-4.711 3.0945-5.173 3.6487l-.092.1155.046.1617c.046.1616.254.4849.392.6235l.093.0693h3.117s0-.739 0-.8776c0-1.2701.832-1.8936 1.548-2.0091.716-.1386 1.2-.0693 1.524.2078.485.3926.716 1.2933.716 2.6558v.8083l-6.582 2.9098-.139.0461-.046.1386c-.6 1.8475-.485 3.2562.393 4.203 1.362 1.5011 4.688 1.709 9.514.6236.37-.0924 1.132-.1848 1.132-.1848zm-4.272-5.2654v4.942c-1.086.7621-2.171.8314-2.933.2079-.832-.6928-1.016-2.0092-.462-3.2331z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-heh2dnk4u840" class="mw-33p pl300 px350-ns w-100p" height="80" id="svg-heh2dnk4u840" role="img" viewbox="0 0 144 80" width="144">
                        <title id="alt-heh2dnk4u840">Shopify</title>
                        <g fill="#000" fill-rule="evenodd">
                            <path d="M49.732 41.786c-1.226-.677-1.87-1.226-1.87-2 0-1.002.87-1.615 2.258-1.615 1.613 0 3.033.68 3.033.68l1.13-3.455s-1.033-.807-4.1-.807c-4.259 0-7.228 2.453-7.228 5.874 0 1.937 1.387 3.421 3.228 4.486 1.484.84 2 1.452 2 2.323 0 .936-.743 1.679-2.13 1.679-2.065 0-4.002-1.065-4.002-1.065l-1.194 3.452s1.808 1.194 4.81 1.194c4.387 0 7.518-2.16 7.518-6.034.065-2.13-1.548-3.615-3.453-4.712zM67.224 34.525c-2.163 0-3.84 1.032-5.165 2.582l-.063-.033 1.872-9.811h-4.906L54.218 52.21h4.873l1.614-8.52c.646-3.227 2.291-5.196 3.84-5.196 1.098 0 1.517.743 1.517 1.807 0 .678-.064 1.485-.227 2.163l-1.839 9.779h4.875l1.903-10.069c.226-1.065.355-2.323.355-3.196.064-2.807-1.355-4.453-3.905-4.453zM79.842 48.79c-1.678 0-2.355-1.42-2.355-3.195 0-2.809 1.452-7.36 4.097-7.36 1.744 0 2.293 1.486 2.293 2.939 0 3.033-1.452 7.615-4.035 7.615zm2.388-14.265c-5.873 0-9.778 5.292-9.778 11.199 0 3.775 2.323 6.84 6.713 6.84 5.777 0 9.65-5.162 9.65-11.197.031-3.518-2.002-6.842-6.585-6.842zM96.689 48.886c-1.26 0-2-.71-2-.71l.806-4.55c.58-3.034 2.162-5.067 3.84-5.067 1.485 0 1.936 1.388 1.936 2.678 0 3.131-1.87 7.65-4.582 7.65zm4.647-14.362c-3.292 0-5.163 2.905-5.163 2.905h-.064l.29-2.614h-4.325c-.227 1.775-.613 4.453-1.001 6.487l-3.388 17.815h4.872l1.357-7.23h.096s1 .646 2.872.646c5.745 0 9.489-5.873 9.489-11.811 0-3.26-1.453-6.197-5.035-6.197zM113.341 27.521c-1.549 0-2.807 1.226-2.807 2.841 0 1.452.903 2.453 2.291 2.453h.065c1.517 0 2.839-1.033 2.872-2.84.032-1.453-.937-2.453-2.421-2.453zM106.5 52.21h4.906l3.323-17.297h-4.938zM127.122 34.88h-3.389l.162-.807c.291-1.678 1.259-3.162 2.904-3.162.871 0 1.548.258 1.548.258l.969-3.809s-.839-.42-2.645-.42c-1.744 0-3.454.485-4.777 1.614-1.679 1.42-2.453 3.453-2.841 5.519l-.129.807h-2.258l-.71 3.678h2.259l-2.582 13.653h4.872l2.582-13.653h3.357l.678-3.678zM138.869 34.912s-3.066 7.68-4.421 11.876h-.064c-.098-1.354-1.194-11.876-1.194-11.876h-5.133l2.938 15.879c.063.354.032.58-.097.807-.581 1.096-1.517 2.16-2.646 2.935-.905.678-1.937 1.099-2.744 1.389l1.356 4.13c1.001-.225 3.033-1.033 4.777-2.646 2.227-2.098 4.292-5.292 6.389-9.682L144 34.912h-5.131zM19.686 25.036c0-.968-.13-2.355-.58-3.517 1.484.29 2.193 1.937 2.517 2.937-.582.162-1.227.354-1.937.58zm-7.68 13.039c.129 2.066 5.582 2.517 5.905 7.39.226 3.84-2.032 6.455-5.292 6.649-3.937.258-6.1-2.067-6.1-2.067l.84-3.55s2.161 1.647 3.905 1.518c1.129-.065 1.548-1.001 1.516-1.646-.16-2.711-4.615-2.55-4.905-7.002-.258-3.744 2.193-7.52 7.616-7.876 2.097-.129 3.163.388 3.163.388l-1.226 4.647s-1.389-.645-3.035-.517c-2.388.162-2.42 1.679-2.388 2.066zm3.743-17.75c.452 0 .838.097 1.162.29-.516.259-1.032.677-1.517 1.162-1.226 1.324-2.162 3.389-2.55 5.358-1.16.355-2.323.71-3.388 1.032.71-3.099 3.324-7.778 6.293-7.842zm2.647 5.1c-1.291.386-2.712.838-4.1 1.258.389-1.517 1.163-3.034 2.067-4.034.354-.356.838-.774 1.387-1.033.548 1.162.678 2.744.646 3.808zm5.647-1.743s-.452.128-1.195.354a9.424 9.424 0 00-.58-1.42c-.84-1.614-2.097-2.485-3.582-2.485-.097 0-.194 0-.322.033-.033-.065-.098-.098-.13-.162-.646-.71-1.484-1.032-2.485-1-1.937.064-3.872 1.452-5.423 3.937-1.096 1.743-1.934 3.938-2.16 5.647-2.227.678-3.776 1.162-3.808 1.194-1.13.356-1.163.388-1.292 1.453C2.969 32.04 0 54.759 0 54.759l24.398 4.229v-35.34c-.193 0-.29.034-.355.034zM25.14 58.923l10.134-2.517s-4.357-29.465-4.389-29.659a.376.376 0 00-.356-.323c-.16 0-3-.064-3-.064s-1.743-1.678-2.388-2.324v34.887z"></path>
                        </g>
                    </svg> -->
                </div>
            </div>
        </section>
        <section class="bg--teal-500 section" id="customer_section" style="padding: 0px; width: 100%; height: 90px;" >
        </section>
        <section class="pt0-l py650-m section" style="margin-top: 30px; padding-bottom:0px; ">
            <div>
                <amp-state id="testimonialSlider" class="i-amphtml-layout-container" i-amphtml-layout="container">
                    <script type="application/json">
                        {
                            "currentSlide": 1
                        }
                    </script>
                </amp-state>
                <div class="relative p-b-40">
                    <h2 class="screenreader">Customer Testimonials </h2>
                    <div class="mt0 mw900 mx-auto relative testimonial-container w-100p">
                        <div class="absolute left0 o-100 pointer-events-all right0 testimonial-slide top0" data-amp-bind-class="'testimonial-slide absolute top0 left0 right0' + (testimonialSlider.currentSlide != 1 ? ' o-0 pointer-events-none z0' : ' o-100 pointer-events-all')" id="slideNum1">
                            <div class="dn-l flex items-center justify-between mb400 mw-83p-m mx-auto w-100p">
                                
                                <div class="flex justify-center px350-ns px450">
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide&gt; 1 ? testimonialSlider.currentSlide - 1 : 3 }})">
                                        <span class="screenreader">Previous Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide &lt; 3 ? testimonialSlider.currentSlide + 1 : 1}})">
                                        <span class="screenreader">Next Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-column-reverse flex-row-ns items-center items-stretch-ns mb500-m mw-83p-m mx-auto relative w-100p">
                                <div class="mb0-ns mb450 mw-30p-m mw-33p-l px350-ns px450 w-100p">
                                    <amp-img alt="Headshot of Katie Bisbee" class="db-l dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="1174" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="784" i-amphtml-layout="responsive" style="min-height: 0% !important; height:80%;">
                                        <i-amphtml-sizer style="display:block;padding-top:149.7449%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Katie Bisbee" class="db-m dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="462" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="324" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:142.5926%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Katie Bisbee" class="db dn-ns h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="656" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="656" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:100.0000%;"></i-amphtml-sizer>
                                    </amp-img> 
                                </div>
                                <div class="flex flex-column justify-between-l justify-start-m mb0-ns mb450 mw-50p-l mw-70p-m mx-auto-l px350-ns px450 w-100p" style="height: 80%;">
                                    <div class="dn flex-column-reverse flex-l h-100p h-auto-l mt700-l" style="margin-top: 20px; margin-bottom: 20px;">
                                        
                                        <div class="flex justify-center self-end">
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader">Previous Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                                <span class="screenreader">Next Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb500-l" style="margin-bottom: 4.77778rem; margin-top: 2rem;">
                                        <blockquote class="f500-m f600-l f700 ff-recoleta fw-semibold">This is an exciting data tool that enables me to structure multiple solar deals within minutes. It gives me the full flexibility to structure deals that matches my clients specifications. PVDATA automates the entire project finance modelling for you which makes my work much easier. </blockquote>
                                        <p class="f300-l f400-m f500 mt400">Taylor S., Associate at CIBC Capital Markets</p>
                                    </div>
                                    <div class="b--neutral-200 bt dn flex-l items-center justify-between pt500" >
                                        <div class="inline-flex">
                                            <button class="bg-transparent bn button-reset c--aqua-1100 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 1 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 1 ? 'Currently on slide ' : 'Go to slide ') + 1 + ' of ' + 3">1 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 2 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 2 ? 'Currently on slide ' : 'Go to slide ') + 2 + ' of ' + 3">2 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center overflow-visible pa0 square400" data-amp-bind-class="' button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 3 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 3 ? 'Currently on slide ' : 'Go to slide ') + 3 + ' of ' + 3">3 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left0 o-0 pointer-events-none right0 testimonial-slide top0 z0" data-amp-bind-class="'testimonial-slide absolute top0 left0 right0' + (testimonialSlider.currentSlide != 2 ? ' o-0 pointer-events-none z0' : ' o-100 pointer-events-all')" id="slideNum2">
                            <div class="dn-l flex items-center justify-between mb400 mw-83p-m mx-auto w-100p">
                                
                                <div class="flex justify-center px350-ns px450">
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide&gt; 1 ? testimonialSlider.currentSlide - 1 : 3 }})">
                                        <span class="screenreader">Previous Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide &lt; 3 ? testimonialSlider.currentSlide + 1 : 1}})">
                                        <span class="screenreader">Next Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-column-reverse flex-row-ns items-center items-stretch-ns mb500-m mw-83p-m mx-auto relative w-100p">
                                <div class="mb0-ns mb450 mw-30p-m mw-33p-l px350-ns px450 w-100p">
                                    <amp-img alt="Headshot of Aaron Bata" class="db-l dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="1174" layout="responsive" src="{{ url('assets/Customer/TT Pic.jpg') }}" width="784" i-amphtml-layout="responsive" style="min-height: 0%; height: 80%;">
                                        <i-amphtml-sizer style="display:block;padding-top:149.7449%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Aaron Bata" class="db-m dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="462" layout="responsive" src="{{ url('assets/Customer/TT Pic.jpg') }}" width="324" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:142.5926%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Aaron Bata" class="db dn-ns h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="657" layout="responsive" src="{{ url('assets/Customer/TT Pic.jpg') }}" width="656" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:100.1524%;"></i-amphtml-sizer>
                                    </amp-img>
                                </div>
                                <div class="flex flex-column justify-between-l justify-start-m mb0-ns mb450 mw-50p-l mw-70p-m mx-auto-l px350-ns px450 w-100p" style="height: 80%;">
                                    <div class="dn flex-column-reverse flex-l h-100p h-auto-l mt700-l" style="margin-top: 20px; margin-bottom: 20px;">
                                        
                                        <div class="flex justify-center self-end">
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader">Previous Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader">Next Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb500-l"  style="margin-bottom: 4.77778rem; margin-top: 2rem;">
                                        <blockquote class="f500-m f600-l f700 ff-recoleta fw-semibold">Looking at PVDATA and the different functionalities I’ve experienced, I still can’t believe how easy it has made my job. To be able to analyse and develop a solar project in such comprehensive manner and get a proper sense of the finance ability in less than 1 minute is just breath-taking. </blockquote> <p class="f300-l f400-m f500 mt400">Tony Tiyou, CEO, Renewables in Africa</p>
                                    </div>
                                    <div class="b--neutral-200 bt dn flex-l items-center justify-between pt500">
                                        <div class="inline-flex">
                                            <button class="bg-transparent bn button-reset c--aqua-1100 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 1 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 1 ? 'Currently on slide ' : 'Go to slide ') + 1 + ' of ' + 3">1 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 2 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 2 ? 'Currently on slide ' : 'Go to slide ') + 2 + ' of ' + 3">2 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center overflow-visible pa0 square400" data-amp-bind-class="' button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 3 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 3 ? 'Currently on slide ' : 'Go to slide ') + 3 + ' of ' + 3">3 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left0 o-0 pointer-events-none right0 testimonial-slide top0 z0" data-amp-bind-class="'testimonial-slide absolute top0 left0 right0' + (testimonialSlider.currentSlide != 3 ? ' o-0 pointer-events-none z0' : ' o-100 pointer-events-all')" id="slideNum3">
                            <div class="dn-l flex items-center justify-between mb400 mw-83p-m mx-auto w-100p">
                                
                                <div class="flex justify-center px350-ns px450">
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide&gt; 1 ? testimonialSlider.currentSlide - 1 : 3 }})">
                                        <span class="screenreader">Previous Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide &lt; 3 ? testimonialSlider.currentSlide + 1 : 1}})">
                                        <span class="screenreader">Next Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-column-reverse flex-row-ns items-center items-stretch-ns mb500-m mw-83p-m mx-auto relative w-100p">
                                <div class="mb0-ns mb450 mw-30p-m mw-33p-l px350-ns px450 w-100p">
                                    <amp-img alt="Headshot of Luka Dukich" class="db-l dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="1174" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="784" i-amphtml-layout="responsive" style="min-height: 0%; height: 80%;">
                                        <i-amphtml-sizer style="display:block;padding-top:149.7449%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Luka Dukich" class="db-m dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="462" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="324" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:142.5926%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Luka Dukich" class="db dn-ns h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="657" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="656" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:100.1524%;"></i-amphtml-sizer>
                                    </amp-img>
                                </div>
                                <div class="flex flex-column justify-between-l justify-start-m mb0-ns mb450 mw-50p-l mw-70p-m mx-auto-l px350-ns px450 w-100p" style="height: 80%;">
                                    <div class="dn flex-column-reverse flex-l h-100p h-auto-l mt700-l"  style="margin-top: 20px; margin-bottom: 20px;">
                                        
                                        <div class="flex justify-center self-end">
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                                <span class="screenreader">Previous Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader">Next Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb500-l"  style="margin-bottom: 4.77778rem; margin-top: 2rem;">
                                        <blockquote class="f500-m f600-l f700 ff-recoleta fw-semibold">3. This is an exciting data tool that enables me to structure multiple solar deals within minutes. It gives me the full flexibility to structure deals that matches my clients specifications. PVDATA automates the entire project finance modelling for you which makes my work much easier. </blockquote>
                                        <p class="f300-l f400-m f500 mt400">Luka Dukich, Senior Digital Content Manager with the Chicago Bulls</p>
                                    </div>
                                    <div class="b--neutral-200 bt dn flex-l items-center justify-between pt500">
                                        <div class="inline-flex">
                                            <button class="bg-transparent bn button-reset c--aqua-1100 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 1 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 1 ? 'Currently on slide ' : 'Go to slide ') + 1 + ' of ' + 3">1 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 2 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 2 ? 'Currently on slide ' : 'Go to slide ') + 2 + ' of ' + 3">2 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center overflow-visible pa0 square400" data-amp-bind-class="' button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 3 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 3 ? 'Currently on slide ' : 'Go to slide ') + 3 + ' of ' + 3">3 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-hidden="true" class="o-0 pointer-events-none testimonial-slide-sizer z-0" id="slideSizer">
                            <div class="dn-l flex items-center justify-between mb400 mw-83p-m mx-auto w-100p">
                                
                                <div class="flex justify-center px350-ns px450">
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide&gt; 1 ? testimonialSlider.currentSlide - 1 : 3 }})">
                                        <span class="screenreader">Previous Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: testimonialSlider.currentSlide &lt; 3 ? testimonialSlider.currentSlide + 1 : 1}})">
                                        <span class="screenreader">Next Testimonial</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                            <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-column-reverse flex-row-ns items-center items-stretch-ns mb500-m mw-83p-m mx-auto relative w-100p">
                                <div class="mb0-ns mb450 mw-30p-m mw-33p-l px350-ns px450 w-100p">
                                    <amp-img alt="Headshot of Katie Bisbee" class="db-l dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="1174" layout="responsive" src="{{ url('assets/Customer/taylor segreti.jpg') }}" width="784" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:149.7449%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Katie Bisbee" class="db-m dn h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="462" layout="responsive" src="" width="324" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:142.5926%;"></i-amphtml-sizer>
                                    </amp-img>
                                    <amp-img alt="Headshot of Katie Bisbee" class="db dn-ns h-auto w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="656" layout="responsive" src="" width="656" i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="display:block;padding-top:100.0000%;"></i-amphtml-sizer>
                                    </amp-img>
                                </div>
                                <div class="flex flex-column justify-between-l justify-start-m mb0-ns mb450 mw-50p-l mw-70p-m mx-auto-l px350-ns px450 w-100p">
                                    <div class="dn flex-column-reverse flex-l h-100p h-auto-l mt700-l">
                                        <div class="flex justify-center self-end">
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader">Previous Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg--neutral-200 br--round button-reset c--neutral-800 flex hover-bg--neutral-300 hover-c--neutral-800 items-center justify-center ml400 overflow-visible pa0 square500" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader">Next Testimonial</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="16" role="img" viewbox="0 0 256 512" width="16">
                                                    <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb500-l">
                                        <blockquote class="f500-m f600-l f700 ff-recoleta fw-semibold">Noneed - 123This is an exciting data tool that enables me to structure multiple solar deals within minutes. It gives me the full flexibility to structure deals that matches my clients specifications. PVDATA automates the entire project finance modelling for you which makes my work much easier. </blockquote>
                                        <p class="f300-l f400-m f500 mt400">Taylor S., Associate at CIBC Capital Markets</p>
                                    </div>
                                    <div class="b--neutral-200 bt dn flex-l items-center justify-between pt500">
                                        <div class="inline-flex">
                                            <button class="bg-transparent bn button-reset c--aqua-1100 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 1 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 1 ? 'Currently on slide ' : 'Go to slide ') + 1 + ' of ' + 3">1 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 2 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 2 ? 'Currently on slide ' : 'Go to slide ') + 2 + ' of ' + 3">2 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <button class="bg-transparent bn button-reset c--neutral-500 flex items-center overflow-visible pa0 square400" data-amp-bind-class="' button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 3 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                                <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 3 ? 'Currently on slide ' : 'Go to slide ') + 3 + ' of ' + 3">3 of 3</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mw-83p-m mx-auto w-100p z3">
                            <div class="b--neutral-200 bt db dn-l flex items-center justify-between mx350-ns mx450 pt500">
                                <div class="inline-flex">
                                    <button class="bg-transparent bn button-reset c--aqua-1100 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 1 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 1 }})">
                                        <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 1 ? 'Currently on slide ' : 'Go to slide ') + 1 + ' of ' + 3">Slide 1 of 3 </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-transparent bn button-reset c--neutral-500 flex items-center mr400 overflow-visible pa0 square400" data-amp-bind-class="'mr400 button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 2 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 2 }})">
                                        <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 2 ? 'Currently on slide ' : 'Go to slide ') + 2 + ' of ' + 3">Slide 2 of 3 </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-transparent bn button-reset c--neutral-500 flex items-center overflow-visible pa0 square400" data-amp-bind-class="' button-reset pa0 overflow-visible bg-transparent bn flex items-center square400 ' + (testimonialSlider.currentSlide == 3 ? 'c--aqua-1100 ' : 'c--neutral-500 ')" on="tap:AMP.setState({ testimonialSlider: {currentSlide: 3 }})">
                                        <span class="screenreader" data-amp-bind-text="(testimonialSlider.currentSlide == 3 ? 'Currently on slide ' : 'Go to slide ') + 3 + ' of ' + 3">Slide 3 of 3 </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="overflow-visible" focusable="false" height="16" role="img" viewbox="0 0 512 512" width="16">
                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py0 section"  id="blog_section">
            <div class="bg--blue-1100 c--text-inverse mw900 mx-auto py650-l py700 relative">
                <div class="mw-83p-ns mx-auto px350-ns px450 py300-l py650-m w-100p">
                    <h2 class="c--text-inverse f700-m f800 f800-l ff-recoleta pr-16p-offset-l" style="padding-right: 0px ; font-size: 33px;">How to build a solar project finance model using PVDATA </h2>
                    <p class="500">Follow these easy steps to having your own bespoke solar finance model</p>
                    <div class="row flex" style="justify-content: space-between; margin-top: 20px;">
                        <button class="bg-transparent bn flex hover-underline-outward items-center justify-start" on="tap:video-modal.open"  onclick="resetVideo()" >
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="mr450 overflow-visible square600" height="81.727" id="svg-3mf54bn18s3g" viewbox="0 0 81.699 81.727" width="81.699">
                                <path d="m0 40.85c0-22.56 18.29-40.85 40.85-40.85s40.85 18.29 40.85 40.85v.027c0 22.56-18.29 40.85-40.85 40.85s-40.85-18.29-40.85-40.85v-.027l31.157-14.994v30.207l26.167-15.04-26.167-15.167z" fill="#fdfffd" fill-rule="evenodd"></path>
                            </svg>
                            <span class="f600-l fw-extrabold">
                                <span class="line relative z1">Watch 60 sec video</span>
                            </span>
                        </button>
                        <a class="Button--large button mb0-ns mb600 mr500-ns m-t-20 w-90" id="blodStartYourFree" on="tap:full-tutorial-modal.open">Watch Full Tutorial</a>
                        <a class="Button--large button _light mb0-ns mb600 mr500-ns w-90" id="downloadFree1" target="_blank">Download for Free </a> 
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="absolute bottom0 c--blue-700 right0" fill="currentColor" height="161" id="svg-4emnu4jra900" role="presentation" viewbox="0 0 160 161" width="160">
                    <path d="m160 0c0 47.0532-20.179 89.4202-52.409 118.494-3.634 3.347-7.555 6.694-11.7631 9.85-8.1292 6.121-17.119 11.477-26.3001 15.972-6.9815 3.347-14.2499 6.407-21.9008 8.703-5.0687 1.434-10.0418 2.773-15.3975 3.921-5.3556 1.147-10.6156 2.008-15.9713 2.486-2.7734.287-8.12909.574-8.12909.574s-5.35565.287-8.12911.287h160" fill="currentColor"></path>
                </svg>
            </div>
        </section>
        <section class="py700 section" id="team_section" style="padding-top:20px;">
        </section>
        <!-- <section class="py700 section" id="team_section" style="padding-top:60px;">
            <div class="mw900 mx-auto relative">
                <div class="mw-66p-l mw-83p-m mx-auto-m pl-8p-offset-l px350-m px450 w-100p">
                    <h2 class="f700-m f800-l f900">Management Team </h2>
                </div>
                <div class="flex flex-wrap mt500-m mt600 mx-auto w-100p">
                    <div class="db-l dn mw-8p-l px350-l px450 w-100p">
                        <div class="flex flex-column">
                            <p class="mt400-l">
                                <span aria-hidden="" class="o-0">.</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-column flex-row-m items-center-m justify-between-m mb600-m mw-25p-l mw-83p-m mx-auto-m px350-l px350-m px450 w-100p">
                        <amp-img alt="Confident social media manager looking at her phone with a calendar on the wall behind her." class="db h-auto mw-100p-l mw-33p-m mw-75p mx-auto mx0-ns w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="292" layout="responsive" src="{{ url('assets/TeamMembers/member1.jpg') }}" srcset="assets/TeamMembers/member1.jpg, assets/TeamMembers/member1.jpg" width="280" i-amphtml-layout="responsive" style="width: 80%;">
                            <i-amphtml-sizer style="display:block;padding-top:104.2857%;"></i-amphtml-sizer>
                        </amp-img>
                        <div class="flex flex-column mt0-ns mt500 mw-60p-m px0-l px350-m w-100p">
                            <h3 class="f600-ns f700 mt600-l">Michael Boxwell </h3>
                            <p class="f400-ns f500 mt400-l">Spend less time on manual tasks and more time connecting with your audience through authentic and personalized experiences. </p>
                            <a class="mt400-l" href="/social-media-management/">
                                <span class="fw-bold items-baseline">
                                    See social management 
                                    <span class="flex-nowrap inline-flex items-baseline">
                                        solutions <i aria-hidden="true" class="fa-arrow-right fa-xs fas pl200"></i>
                                    </span>
                                </span>
                                <span class="_before icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-column flex-row-m items-center-m justify-between-m mb600-m mt0-l mt300-m mt700 mw-25p-l mw-83p-m mx-auto px350-ns px450 w-100p">
                        <amp-img alt="Smiling customer care agent wearing a headset and responding to multiple messages on their laptop." class="db h-auto mw-100p-l mw-33p-m mw-75p mx-auto mx0-ns w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="291" layout="responsive" src="{{ url('assets/TeamMembers/member1.jpg') }}" srcset="assets/TeamMembers/member1.jpg, assets/TeamMembers/member1.jpg" width="280" i-amphtml-layout="responsive" style="width: 80%;">
                            <i-amphtml-sizer style="display:block;padding-top:103.9286%;"></i-amphtml-sizer>
                        </amp-img>
                        <div class="flex flex-column mt0-ns mt500 mw-60p-m px0-l px350-m w-100p-m">
                            <h3 class="f600-ns f700 mt600-l">Michael Boxwell </h3>
                            <p class="f400-ns f500 mt400-l">Deliver the kind of responsive, tailored customer care and support that inspires long-term satisfaction and loyalty. </p>
                            <a class="mt400-l" href="/social-customer-service/">
                                <span class="fw-bold">
                                    See customer care 
                                    <span class="flex-nowrap inline-flex items-baseline">
                                        solutions <i aria-hidden="true" class="fa-arrow-right fa-xs fas pl200"></i>
                                    </span>
                                </span>
                                <span class="_before icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-column flex-row-m items-center-m justify-between-m mt0-l mt300-m mt700 mw-25p-l mw-83p-m mx-auto-m px350-ns px450 w-100p">
                        <amp-img alt="Focused social strategist writing on his tablet with a graph in the background." class="db h-auto mw-100p-l mw-33p-m mw-75p mx-auto mx0-ns w-100p i-amphtml-layout-responsive i-amphtml-layout-size-defined" height="291" layout="responsive" src="{{ url('assets/TeamMembers/member2.jpg') }}" srcset="assets/TeamMembers/member2.jpg, assets/TeamMembers/member2.jpg" width="280" i-amphtml-layout="responsive" style="width: 80%;">
                            <i-amphtml-sizer style="display:block;padding-top:103.9286%;"></i-amphtml-sizer>
                        </amp-img>
                        <div class="flex flex-column mt0-ns mt500 mw-60p-m px0-l px350-m w-100p-m">
                            <h3 class="f600-ns f700 mt600-l">Tete Mbuk </h3>
                            <p class="f400-ns f500 mt400-l">Illuminate business-critical insights by tapping into the world’s largest and most transparent focus group: social media. </p>
                            <a class="mt400-l" href="/analytics-and-social-listening/">
                                <span class="fw-bold">
                                    See data and intelligence 
                                    <span class="flex-nowrap inline-flex items-baseline">
                                        solutions <i aria-hidden="true" class="fa-arrow-right fa-xs fas pl200"></i>
                                    </span>
                                </span>
                                <span class="_before icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="db-l dn mw-8p-l px350-l px450 w-100p">
                        <div class="flex flex-column">
                            <p class="mt400-l">
                                <span aria-hidden="" class="o-0">.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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

<amp-lightbox id="video-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
    <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
        <div class="relative w-100p mw750 mx-auto pa500 pa700-l bg--background-dark c--text-inverse shadow-5" style="padding: 45px 5px 5px 5px; margin-top: 60px;">
            <video controls style="width: 100%; height: auto;"  id="pvdata_video">
                <source src="{{ url('assets/PV data.mp4') }}" type="video/mp4">
                <!-- <source src="movie.ogg" type="video/ogg"> -->
                Your browser does not support the video tag.
            </video>
            <button onclick="resetVideo()" on="tap:video-modal.close" aria-label="Close this dialog window" aria-controls="video-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1">
                <span class="screenreader">"Close this dialog window"</span>
            </button>
        </div>
    </div>
</amp-lightbox>

<amp-lightbox id="full-tutorial-modal" class="AMPLightbox ff-proxima-nova i-amphtml-layout-nodisplay" layout="nodisplay" role="dialog" hidden="hidden" i-amphtml-layout="nodisplay">
    <div class="absolute bg--dark-translucent bottom0 flex items-center justify-center left0 right0 top0">
        <div class="relative w-100p mw750 mx-auto pa500 pa700-l bg--background-dark c--text-inverse shadow-5" style="padding: 45px 5px 5px 5px; margin-top: 60px;">
        <!-- <iframe width="100%" height="450px" src="https://www.youtube-nocookie.com/embed/_qgEt3YhzuE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <iframe id="full_tutorial_video"  width="100%" height="625px" src="https://www.youtube.com/embed/_qgEt3YhzuE" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button onclick="fullTutorialVideo()" on="tap:full-tutorial-modal.close" aria-label="Close this dialog window" aria-controls="video-modal" class="AMPLightbox-x bg-transparent absolute right0 top400 mr300 button-reset bn c--neutral-0 hover-c--neutral-500 db f900 lift pointer z1">
                <span class="screenreader">"Close this dialog window"</span>
            </button>
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
        var video = $("#full_tutorial_video").attr("src");

        $( document ).ready(function() {    

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            

            tap:AMP.setState({ testimonialSlider: {currentSlide: 1}});

            var timer1 = setInterval(tabAnimation, 7000); 
        });
        function resetVideo()
        {
            var video = document.getElementById("pvdata_video");
            video.currentTime = 0;
            video.pause();
        }
        $('#downloadFree1').click(() => { 
            downloadLink('downloadFree1');
        })
        $('#downloadFree').click(() => {
            downloadLink('downloadFree');
        })
        function fullTutorialVideo(event) {
            if (event) {
                $("#full_tutorial_video").attr("src", video);
            }else {
                $("#full_tutorial_video").attr("src", '');
            }
        }
        $('#blodStartYourFree').click(() => {
            fullTutorialVideo('block');
        })

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