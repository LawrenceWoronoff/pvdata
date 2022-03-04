@extends('layout.struct')

{{-- Page title --}}
@section('title')
Pricing
@parent
@stop


@section('content')

<div>
    <main class="Main Main--hasSticky" data-amp-auto-lightbox-disable="" id="content">
        <section class="bg--background-light pb800 pb850-l section">
            <div class="row">
                <div class="col mw-100p-l mw-66p-ns px350 tc-ns tl-l w-100p">                    
                    <h1 class="f800 mb0">Subscribe to PVDATA, 
                        <u class="underline--grow">
                            <span class="relative z1"> cancel anytime  </span>
                            <span class="bg--yellow-500 line z0 amp-wp-0ca7be3" data-amp-original-style="height: 16px; bottom:0;"></span>
                        </u>
                        <amp-position-observer intersection-ratios="1 0" layout="nodisplay" on="enter:underlineGrow.start;exit:underlineGrow.start,underlineGrow.reverse" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-position-observer>
                    </h1>
                    <p class="mt0 mt350-l">Enjoy our software and all of its features.  </p>
                </div>
            </div>
        </section>
        <section class="bg-transparent overflow-visible py0 section" id="pricing-boxes">
            <div class="flex-wrap mt-700 mt-800-l row">
                <div class="col mw-100p mw-20p-l mw-83p-ns pt650-l px350 w-100p">
                    <div class="PricingBox b--neutral-200 ba bg--neutral-0 br600 flex flex-column h-100p">
                        <div class="b--neutral-200 bb bw600 pa450">
                            <h2 class="f500 mt200">Trial Plan </h2>
                            <p class="f300 mt300">$0 per user/month </p>
                            <div class="Card-body mt350 pa0 sl_swap" id="pricing-box-cta-standard">
                                <a class="button db w-100p" style="font-size: 14px;" id="Free_plan_start_download" target="_blank">Start Your Free Analysis</a>
                            </div>
                            <p class="f200 fw-semibold mt300">No credit card required </p>
                        </div>
                        <div class="grow-1 pb450 tl">
                            <div class="h-100p">
                                <div class="flex h-100p">
                                    <div>
                                        <ul class="f300-l f400 flex flex-column h-100p list pl0">
                                            <li class="mt0-ns pt450 px450">
                                                <span>Limited access to features </span>
                                            </li>
                                            <li class="fw-bold mt0-ns pt400 px450">
                                                <span>Free package: </span>
                                            </li>
                                            
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        1 user access
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Limited access to platform features
                                                    </span>
                                                </div>
                                            </li>
                                            
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Unlimited solar structure
                                                    </span>
                                                </div>
                                            </li>
                                            
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to more than 12,000+ locations
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to live environmental and GIS data.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Customisable project finance cashflow
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span class="flex">
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to due diligence reporting.
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt0-l mt500 mw-100p mw-20p-l mw-83p-ns px350 w-100p">
                    <div class="PricingBox b--neutral-200 ba bg--neutral-0 br600 flex flex-column h-100p shadow200-l">
                        <div class="b--neutral-200 bb bw600 pa450 pt600-l">
                            <span class="bg--purple-700 br--x c--text-inverse f200 fw-bold px400 py200 z0" style="background-color: #6f5ed3; border-radius: 2000vw;"> Most Popular </span>
                            <h2 class="f500 mt400">Subscription</h2>
                            <p class="f300 mt300">$200 per user/month </p>
                            <div class="Card-body mt350 pa0 sl_swap" id="pricing-box-cta-professional">
                                <a class="button db w-100p" style="font-size: 14px;" id="Subscription_plan_start_download" target="_blank">Start Your Free Analysis </a>
                            </div>
                            <p class="f200 fw-semibold mt300">
                                No credit card required
                            </p>
                        </div>
                        <div class="grow-1 pb450 tl">
                            <div class="h-100p">
                                <div class="flex h-100p">
                                    <div>
                                        <ul class="f300-l f400 flex flex-column h-100p list pl0">
                                            <li class="mt0-ns pt450 px450">
                                                <span>Essential package for teams </span>
                                            </li>
                                            <li class="fw-bold mt0-ns pt400 px450">
                                                <span>Subscription package: </span>
                                            </li>
                                            
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Up to 25 users
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Unlimited annual access to platform.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Unlimited solar structure
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to more than 12,000+ locations
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to live environmental and GIS data.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Customisable project finance cashflow
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to due diligence reporting.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Email, save and download reports.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Collaborate with teams.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Cancel anytime 
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt0-l mt500 mw-100p mw-20p-l mw-83p-ns pt650-l px350 w-100p">
                    <div class="PricingBox b--neutral-200 ba bg--neutral-0 br600 flex flex-column h-100p">
                        <div class="b--neutral-200 bb bw600 pa450">
                            <h2 class="f500 mt200">Pay as you Go </h2>
                            <p class="f300 mt300">$450 per report </p>
                            <div class="Card-body mt350 pa0 sl_swap" id="pricing-box-cta-advanced">
                                <a class="button db w-100p" style="font-size: 14px;" id="payAsYouGoPlan_start_download" target="_blank">Start Your Free Analysis </a>
                            </div>
                            <p class="f200 fw-semibold mt300">
                                No credit card required
                            </p>
                        </div>
                        <div class="grow-1 pb450 tl">
                            <div class="h-100p">
                                <div class="flex h-100p">
                                    <div>
                                        <ul class="f300-l f400 flex flex-column h-100p list pl0">
                                            <li class="mt0-ns pt450 px450">
                                                <span>For businesses doing less than 4 solar deals per year</span>
                                            </li>
                                            <li class="fw-bold mt0-ns pt400 px450">
                                                <span>Pay as You Go : </span>
                                            </li>
                                            
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Up to 25 users
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Unlimited solar structure
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to more than 12,000+ locations
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to live environmental and GIS data.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Customisable project finance cashflow
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to due diligence reporting
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Email, save and download reports
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Collaborate with teams
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Pay for every new debt cashflow and due diligence report generation
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Cancel anytime
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt0-l mt500 mw-100p mw-20p-l mw-83p-ns pt650-l px350 w-100p">
                    <div class="PricingBox b--neutral-200 ba bg--neutral-0 br600 flex flex-column h-100p">
                        <div class="b--neutral-200 bb bw600 pa450">
                            <h2 class="f500 mt200">Corporate License </h2>
                            <p class="f300 mt300">Contact us </p>
                            <div class="Card-body mt350 pa0 sl_swap" id="pricing-box-cta-advanced">
                                <a class="button db w-100p" on="tap:contact-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})" style="font-size: 14px;">Contact us </a>
                            </div>
                            <p class="f200 fw-semibold mt300">
                                No credit card required
                            </p>
                        </div>
                        <div class="grow-1 pb450 tl">
                            <div class="h-100p">
                                <div class="flex h-100p">
                                    <div>
                                        <ul class="f300-l f400 flex flex-column h-100p list pl0">
                                            <li class="mt0-ns pt450 px450">
                                                <span>Essential package for large teams </span>
                                            </li>
                                            <li class="fw-bold mt0-ns pt400 px450">
                                                <span>Corporate package: </span>
                                            </li>
                                            
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        More than 50+ users
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Unlimited annual access to platform
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Unlimited solar structure
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to more than 12,000+ locations
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to live environmental and GIS data
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Customisable project finance cashflow
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Access to due diligence reporting
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Email, save and download reports
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mt400 px450 relative">
                                                <div class="relative">
                                                    <span>
                                                        <i class="fa-check-circle fas mr300 mt200"></i>
                                                        Collaborate with teams
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dn section" id="add-ons">
            <div class="row">
                <div class="col flex mb500 mw-100p-l mw-100p-m mw-66p-ns mx350 px350 relative w-100p">
                    <span class="bg--neutral-0 c--neutral-400 dib f300 fw-bold mx-auto px350 px500-l relative z1">ADDITIONAL PREMIUM SOLUTIONS </span>
                    <span class="absolute bg--neutral-200 left0 top-50p w-100p amp-wp-aa008d8" data-amp-original-style="height: 2px; margin-top: -2px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="col mw-100p-l mw-66p-ns px350 w-100p">
                    <div class="b--neutral-200 ba br600 f300 h-100p pa450">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32" id="svg-1f3eis7ki4po" viewbox="0 0 32 32" width="32">
                            <defs>
                                <path d="M25.333 18.667v-5.334a1.333 1.333 0 10-2.666 0v5.334a1.333 1.333 0 102.666 0m-4 2.666V10.667a1.333 1.333 0 10-2.666 0v10.666a1.333 1.333 0 102.666 0m-4 4V6.667a1.333 1.333 0 10-2.666 0v18.666a1.333 1.333 0 102.666 0m-4-6.666v-5.334a1.333 1.333 0 10-2.666 0v5.334a1.333 1.333 0 102.666 0m-5.333 4a1.334 1.334 0 01-1.333-1.334V10.667a1.334 1.334 0 012.666 0v10.666c0 .736-.596 1.334-1.333 1.334" id="8db37674-37c9-11ea-978f-2e728ce88125"></path>
                            </defs>
                            <use fill="#0B8599" fill-rule="evenodd" xlink:href="#8db37674-37c9-11ea-978f-2e728ce88125"></use>
                        </svg>
                        <span class="db fw-extrabold">Listening </span>
                        <p class="mt300">Unlock the immense value of social data. Get access to trends and actionable insights to inform your marketing, brand and competitive strategy. </p>
                    </div>
                </div>
                <div class="col mw-100p-l mw-66p-ns px350 w-100p">
                    <div class="b--neutral-200 ba br600 f300 h-100p pa450">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="32" id="svg-6dil87rc3f60" viewbox="0 0 32 32" width="32">
                            <path clip-rule="evenodd" d="M25.3333 9.33337H22.6667C21.9293 9.33337 21.3333 9.92937 21.3333 10.6667V21.3334C21.3333 22.0707 21.9293 22.6667 22.6667 22.6667H25.3333C26.0707 22.6667 26.6667 22.0707 26.6667 21.3334V10.6667C26.6667 9.92937 26.0707 9.33337 25.3333 9.33337ZM17.3333 12H14.6667C13.9293 12 13.3333 12.596 13.3333 13.3334V21.3334C13.3333 22.0707 13.9293 22.6667 14.6667 22.6667H17.3333C18.0707 22.6667 18.6667 22.0707 18.6667 21.3334V13.3334C18.6667 12.596 18.0707 12 17.3333 12ZM9.33334 22.6667H6.66668C5.92934 22.6667 5.33334 22.0707 5.33334 21.3334V16C5.33334 15.2627 5.92934 14.6667 6.66668 14.6667H9.33334C10.0707 14.6667 10.6667 15.2627 10.6667 16V21.3334C10.6667 22.0707 10.0707 22.6667 9.33334 22.6667Z" fill="#2079C3" fill-rule="evenodd"></path>
                            <mask height="14" id="mask0" maskunits="userSpaceOnUse" width="22" x="5" y="9">
                                <path clip-rule="evenodd" d="M25.3333 9.33337H22.6667C21.9293 9.33337 21.3333 9.92937 21.3333 10.6667V21.3334C21.3333 22.0707 21.9293 22.6667 22.6667 22.6667H25.3333C26.0707 22.6667 26.6667 22.0707 26.6667 21.3334V10.6667C26.6667 9.92937 26.0707 9.33337 25.3333 9.33337ZM17.3333 12H14.6667C13.9293 12 13.3333 12.596 13.3333 13.3334V21.3334C13.3333 22.0707 13.9293 22.6667 14.6667 22.6667H17.3333C18.0707 22.6667 18.6667 22.0707 18.6667 21.3334V13.3334C18.6667 12.596 18.0707 12 17.3333 12ZM9.33334 22.6667H6.66668C5.92934 22.6667 5.33334 22.0707 5.33334 21.3334V16C5.33334 15.2627 5.92934 14.6667 6.66668 14.6667H9.33334C10.0707 14.6667 10.6667 15.2627 10.6667 16V21.3334C10.6667 22.0707 10.0707 22.6667 9.33334 22.6667Z" fill="white" fill-rule="evenodd"></path>
                            </mask>
                            <g mask="url(#mask0)"></g>
                        </svg>
                        <span class="db fw-extrabold">Premium Analytics </span>
                        <p class="mt300">Go deeper with your data by leveraging 150+ additional reports while accessing custom report builders and interactive dashboards. </p>
                    </div>
                </div>
                <div class="col mw-100p-l mw-66p-ns px350 w-100p">
                    <div class="b--neutral-200 ba br600 f300 h-100p pa450">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32" id="svg-54nvnpl2e380" viewbox="0 0 32 32" width="32">
                            <defs>
                                <path d="M13.333 6.667v12h5.334v-12c0-.736-.596-1.334-1.334-1.334h-2.666c-.738 0-1.334.598-1.334 1.334zm0 18.666c0 .736.596 1.334 1.334 1.334h2.666c.738 0 1.334-.598 1.334-1.334V20h-5.334v5.333zm13.334 0v-12h-5.334v12c0 .736.596 1.334 1.334 1.334h2.666c.738 0 1.334-.598 1.334-1.334zm0-18.666c0-.736-.596-1.334-1.334-1.334h-2.666c-.738 0-1.334.598-1.334 1.334V12h5.334V6.667zm-16 18.666v-12H5.333v12c0 .736.598 1.334 1.334 1.334h2.666c.738 0 1.334-.598 1.334-1.334zm0-13.333H5.333V6.667c0-.736.598-1.334 1.334-1.334h2.666c.738 0 1.334.598 1.334 1.334V12z" id="8db37480-37c9-11ea-978f-2e728ce88125"></path>
                            </defs>
                            <use fill="#11A7AA" fill-rule="evenodd" xlink:href="#8db37480-37c9-11ea-978f-2e728ce88125"></use>
                        </svg>
                        <span class="db fw-extrabold">Advocacy </span>
                        <p class="mt300">Give your employees and partners a simple way to share curated content across their social networks and amplify the brand’s reach. </p>
                    </div>
                </div>
            </div>
            <div class="mt450 row tc">
                <div class="col mw-100p-l mw-66p-ns px350 w-100p">
                    <p>
                        Premium solutions can be added to any plan. Start a free trial or <a class="fw-bold" href="/demo/">request a demo</a>
                        to learn more. 
                    </p>
                </div>
            </div>
        </section>
        <section class="section tc">
        </section>
        <section class="py0 section" id="pricing-questions">
            <div class="bg--aqua-1100 c--text-inverse items-center-l mw900-l px500-m py700 row">
                <div class="_span-4 col flex justify-center justify-end-ns mw400-m pr650-l">
                    <div>
                        <amp-img alt="" class="w-80p-m i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" height="102" layout="intrinsic" src="{{ url('assets/FAQ/LP-getting-to-know-publishing.png') }}" srcset="assets/FAQ/LP-getting-to-know-publishing.png" width="141" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer">
                                <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzEwMicgd2lkdGg9JzE0MScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2ZXJzaW9uPScxLjEnLz4=">
                            </i-amphtml-sizer>
                        </amp-img>
                    </div>
                </div>
                <div class="_span-8 col pr900-l">
                    <h2 class="c--text-inverse f600-m f700">Questions regarding any of our plans? </h2>
                    <p>
                        Send us a note at <a class="fw-bold no-underline-l underline wsnw" href="mailto:demo@pvdata.io">demo@pvdata.io</a>
                    </p>
                    <a class="dib fw-bold no-underline-l underline" href="#faq">
                        <div>
                            <p>
                                You can also read through our FAQs <i class="fa-chevron-right fa-xs fas"></i>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        
        <section class="_multirow break db-p dn f300 section" id="print-faq">
            <div class="row">
                <div class="col px350 w-100p">
                    <h2>Frequently asked questions </h2>
                    <p class="f400 mt0">Still have questions about how PVDATA's software can help your business </p>
                </div>
            </div>
            <div class="row">
                <div class="col px350 w-100p">
                    <div>
                        <amp-state id="pricingFAQ" class="i-amphtml-layout-container" i-amphtml-layout="container">
                            <script type="application/json">
                                {
                                        "faq_1_1": true,
                                "faq_1_2": true,
                                "faq_1_3": true,
                                "faq_1_4": true,
                                                    "faq_2_1": true,
                                "faq_2_2": true,
                                "faq_2_3": true,
                                "faq_2_4": true,
                                                    "faq_3_1": true,
                                "faq_3_2": true,
                                "faq_3_3": true,
                                                    "faq_4_1": true,
                                "faq_4_2": true
            }
                            </script>
                        </amp-state>
                        <section class="f300-l f400">
                            <h4 class="f500 fw-normal mt450">Getting started</h4>
                            <div class="b--neutral-200 bb">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_1': !pricingFAQ['faq_1_1'] }})">
                                    <header class="fw-bold pr400 tl">How does the free trial work? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_1_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_1'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>You’ll have 30 days to try PVData, risk free. No credit card is required to start a trial. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="b--neutral-200 bb pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_2': !pricingFAQ['faq_1_2'] }})">
                                    <header class="fw-bold pr400 tl">What happens when my free trial ends? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_1_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_2'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>After your 30-day free trial, you’ll be asked to pick a plan and enter your payment info. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="b--neutral-200 bb pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_3': !pricingFAQ['faq_1_3'] }})">
                                    <header class="fw-bold pr400 tl">Do I have to start a trial or is there another way for me to experience the platform? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_3'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_1_3'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_3'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>
                                            <a class="fw-semibold no-underline-l underline" href="/demo/">Request a free, customized demo</a>
                                            and have a PVData expert show you our suite of social management, customer care, social data and intelligence, and advocacy solutions. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_4': !pricingFAQ['faq_1_4'] }})">
                                    <header class="fw-bold pr400 tl">What should I do if I have questions during my free 30-day trial period? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_4'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_1_4'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_4'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>
                                            We’re here to help! Please reach out to your Account Representative or contact Sales at <a class="fw-bold no-underline-l underline wsnw" href="tel:1.866.878.3231">1.866.878.3231</a>
                                            . 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="f500 fw-normal mt450">Plans</h4>
                            <div class="b--neutral-200 bb">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_1': !pricingFAQ['faq_2_1'] }})">
                                    <header class="fw-bold pr400 tl">What if I pick the wrong plan? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_2_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_1'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>No problem. You can switch plans at any time (even during your trial). Pick the plan that seems like the best fit and try it on. You can always change your mind. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="b--neutral-200 bb pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_2': !pricingFAQ['faq_2_2'] }})">
                                    <header class="fw-bold pr400 tl">Are there contracts or commitments? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_2_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_2'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>Nope. After your 30-day free trial you’ll be asked to pick a plan and enter your payment info. This is billed monthly and you can cancel at any time. If you cancel before the end of a billing period, you’ll retain access until that billing period is over. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="b--neutral-200 bb pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_3': !pricingFAQ['faq_2_3'] }})">
                                    <header class="fw-bold pr400 tl">Can I purchase more profiles but stay in the same plan? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_3'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_2_3'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_3'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>
                                            You sure can. Additional profiles can be purchased for a nominal fee without the need to upgrade to a higher plan. Access to additional profiles based on your company’s exact needs can be discussed with one of our team members during your evaluation. <a class="fw-bold no-underline-l underline">Contact us</a>
                                            for more information. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_4': !pricingFAQ['faq_2_4'] }})">
                                    <header class="fw-bold pr400 tl">How do I know which plan is best for my business? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_4'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_2_4'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_4'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>
                                            Unsure which plan is right for your business? Contact <a class="fw-bold no-underline-l underline">demo@pvdata.io</a>
                                            and we’ll help you choose the best path forward based on your business goals. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="f500 fw-normal mt450">Payments and pricing</h4>
                            <div class="b--neutral-200 bb">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_3_1': !pricingFAQ['faq_3_1'] }})">
                                    <header class="fw-bold pr400 tl">What are my payment options? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_3_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_3_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_3_1'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>
                                            Online payment methods include major credit cards and Paypal. Prepayment options are available and allow your account to be debited monthly according to your plan and number of users. Contact <a class="fw-bold no-underline-l underline" href="mailto:demo@pvdata.io">demo@pvdata.io</a>
                                            to discuss these options. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="b--neutral-200 bb pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_3_2': !pricingFAQ['faq_3_2'] }})">
                                    <header class="fw-bold pr400 tl">If I have a question about my invoice, who should I contact? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_3_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_3_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_3_2'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>
                                            You can reach our billing department at <a class="fw-bold no-underline-l underline" href="mailto:support@pvdata.io">support@pvdata.io</a>
                                            . 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_3_3': !pricingFAQ['faq_3_3'] }})">
                                    <header class="fw-bold pr400 tl">How much does PVData cost? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_3_3'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_3_3'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_3_3'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>PVData’s pricing starts at $99 per user per month for the Standard plan. The Professional plan offers additional features for business at $149 per user per month, and the Advanced plan offers solutions for businesses at scale at $249 per user per month. Annually, the Standard plan costs $1,188 per user, the Professional plan is $1,788 per user annually, and the Advanced plan is $2,988 per user per year. </p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="f500 fw-normal mt450">Platform</h4>
                            <div class="b--neutral-200 bb">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_4_1': !pricingFAQ['faq_4_1'] }})">
                                    <header class="fw-bold pr400 tl">Can Premium Add-Ons be purchased as standalone products? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_4_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_4_1'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_4_1'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p>No. The features and tools within the Premium Add-On packages do not work independently; instead, they unlock additional functionality on top of our base plans. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt400">
                                <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_4_2': !pricingFAQ['faq_4_2'] }})">
                                    <header class="fw-bold pr400 tl">How secure is PVData’s platform? </header>
                                    <div class="c--primary dn-l">
                                        <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_4_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-up fas"></i>
                                        </span>
                                        <span data-amp-bind-class="pricingFAQ['faq_4_2'] ? 'db' : 'dn db-p'">
                                            <i class="dn-p fa-chevron-down fas"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_4_2'] ? 'dn db-p db-l' : 'db'">
                                    <div class="pb400">
                                        <p class="pb400">At PVData, we take your account’s security very seriously: </p>
                                        <ul class="mt0">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <div class="dn-p" id="faq">
            <div>
                <div>
                    <section class="mt-500-l mw650 mw900-l mx-auto overflow-visible pt800-l section" id="faq_section">
                        <div class="db flex-l row">
                            <div class="_span-4 col flex flex-row mw-none self-start sticky-l top800-l">
                                <div class="db-m dn mw500 pr450">
                                    <amp-img alt="" height="728" layout="intrinsic" width="776" class="i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" i-amphtml-layout="intrinsic">
                                        <i-amphtml-sizer class="i-amphtml-sizer">
                                            <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzcyOCcgd2lkdGg9Jzc3NicgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2ZXJzaW9uPScxLjEnLz4=">
                                        </i-amphtml-sizer>
                                    </amp-img>
                                </div>
                                <div>
                                    <h2 class="fw-extrabold">Frequently asked questions </h2>
                                    <p>Still have questions about how PVDATA’s software can help your business? </p>
                                        <amp-img alt="" class="db-l dn i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" height="728" layout="intrinsic" src="assets/FAQ/engagement-laptop-reverse@2x.png" srcset="assets/FAQ/engagement-laptop-reverse@2x.png" width="776" i-amphtml-layout="intrinsic">
                                        <i-amphtml-sizer class="i-amphtml-sizer">
                                            <img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzcyOCcgd2lkdGg9Jzc3NicgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2ZXJzaW9uPScxLjEnLz4=">
                                        </i-amphtml-sizer>
                                    </amp-img>
                                    <a class="button mt450 w-100p" on="tap:contact-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})" >Contact us </a>
                                    <p class="mt450">
                                        Or send us an email: <a class="fw-bold no-underline-l underline" href="mailto:demo@pvdata.io">demo@pvdata.io</a>
                                    </p>
                                </div>
                            </div>
                            <div class="_span-8 col f300 mw-none pl800-l">
                                <div>
                                    <amp-state id="pricingFAQ" class="i-amphtml-layout-container" i-amphtml-layout="container">
                                        <script type="application/json">
                                            {
                                        "faq_1_1": true,
                                "faq_1_2": true,
                                "faq_1_3": true,
                                "faq_1_4": true,
                                                    "faq_2_1": true,
                                "faq_2_2": true,
                                "faq_2_3": true,
                                "faq_2_4": true,
                                                    "faq_3_1": true,
                                "faq_3_2": true,
                                "faq_3_3": true,
                                                    "faq_4_1": true,
                                "faq_4_2": true
            }
                                        </script>
                                    </amp-state>
                                    <section class="f300-l f400">
                                        <h4 class="f500 fw-normal mt450">Getting started</h4>
                                        <div class="b--neutral-200 bb">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_1': !pricingFAQ['faq_1_1'] }})">
                                                <header class="fw-bold pr400 tl">Is there a free trial? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_1'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_1_1'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_1'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>There is no need for a trial. We have granted free access to everyone. No credit card is required to start. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b--neutral-200 bb pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_2': !pricingFAQ['faq_1_2'] }})">
                                                <header class="fw-bold pr400 tl">What happens when I am using the free package? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_2'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_1_2'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_2'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>You will be limited to 3 simulations, which will generate you 3 structured due diligence reports and project finance cashflows. Thereafter, your access will be limited, and you will need to select another plan to enjoy our features again.  </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b--neutral-200 bb pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_3': !pricingFAQ['faq_1_3'] }})">
                                                <header class="fw-bold pr400 tl">Can I cancel anytime?</header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_3'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_1_3'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_3'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>
                                                        When you are on a paid plan, you can cancel anytime for free 3months after signing up for your selected plan. See our <a href="{{ route('terms') }}" target="_blank">Terms of Service</a> for more information. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_1_4': !pricingFAQ['faq_1_4'] }})">
                                                <header class="fw-bold pr400 tl">What should I do if I have questions while using the free package? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_1_4'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_1_4'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_1_4'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>
                                                        We are here to help. Please reach out to our sales team at <a href="http://demo@pvdata.io" target="_blank">demo@pvdata.io.</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="f500 fw-normal mt450">Plans</h4>
                                        <div class="b--neutral-200 bb">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_1': !pricingFAQ['faq_2_1'] }})">
                                                <header class="fw-bold pr400 tl">What if I pick the wrong plan?</header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_1'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_2_1'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_1'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>No problem. You can switch plans at any time. Pick the plan that seems like the best fit and try it on. You can always change your mind.  </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b--neutral-200 bb pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_2': !pricingFAQ['faq_2_2'] }})">
                                                <header class="fw-bold pr400 tl">Are there contracts or commitments? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_2'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_2_2'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_2'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>Users on paid plans have a one-time 3months initial commitment which starts after you begin a paid plan. Thereafter, your contract with us will be on a monthly rolling basis, and users have the option to cancel during the rolling period without charge. See our  <a  href="{{ route('terms') }}" target="_blank">Terms of Service</a> for more information.  </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b--neutral-200 bb pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_3': !pricingFAQ['faq_2_3'] }})">
                                                <header class="fw-bold pr400 tl">Can I add more users under my plan? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_3'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_2_3'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_3'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>
                                                        You sure can. You can add as many users as your plan permits. This option is ideal for businesses who want to give staff members access to the PVDATA software. The principal user can add staff members under he/she’s account and payment will be charged from the principal user’s account.  
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_2_4': !pricingFAQ['faq_2_4'] }})">
                                                <header class="fw-bold pr400 tl">How do I know which plan is best for my business? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_2_4'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_2_4'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_2_4'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>Unsure which plan is right for your business? Contact <a href = "http://demo@pvdata.io" target="_blank">demo@pvdata.io</a> and we will help you choose the best plan based on your business goals.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="f500 fw-normal mt450">Payments and pricing</h4>
                                        <div class="b--neutral-200 bb">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_3_1': !pricingFAQ['faq_3_1'] }})">
                                                <header class="fw-bold pr400 tl">What are my payment options? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_3_1'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_3_1'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_3_1'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>
                                                        Online payment options include major credit cards. Your account will be debited on a monthly or Annual basis for the <a>Subscription Plan and Corporate License Plan</a>. For the <a>Pay as you Go Plan</a>, you are only charged for every time you use and generate reports from the PVDATA software. 

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b--neutral-200 bb pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_3_2': !pricingFAQ['faq_3_2'] }})">
                                                <header class="fw-bold pr400 tl">If I have a question about billing, who should I contact? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_3_2'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_3_2'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_3_2'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p>
                                                        You can reach our sales team at <a href="http://demo@pvdata.io" target="_blank">demo@pvdata.io.</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt400">
                                            <button class="button-reset flex justify-between mb300 pa0 w-100p" on="tap:AMP.setState({ pricingFAQ: {'faq_3_3': !pricingFAQ['faq_3_3'] }})">
                                                <header class="fw-bold pr400 tl">How secure in the PVDATA Platform? </header>
                                                <div class="c--primary dn-l">
                                                    <span class="db-p dn" data-amp-bind-class="!pricingFAQ['faq_3_3'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-up fas"></i>
                                                    </span>
                                                    <span data-amp-bind-class="pricingFAQ['faq_3_3'] ? 'db' : 'dn db-p'">
                                                        <i class="dn-p fa-chevron-down fas"></i>
                                                    </span>
                                                </div>
                                            </button>
                                            <div class="db-l db-p dn" data-amp-bind-class="pricingFAQ['faq_3_3'] ? 'dn db-p db-l' : 'db'">
                                                <div class="pb400">
                                                    <p class="pb400">At PVDATA, we take your account’s security very seriously. </p>
                                                    <ul class="mt0">
                                                        <li>All interactions with PVDATA are encrypted with SSL over the Internet. </li>
                                                        <li>PVDATA’s database are kept in a private network, completely inaccessible from the public internet.</li>
                                                        <li>PVDATA does not store user passwords, so even if our database is compromised, it will be impossible for the attacker to gain access to your account.</li>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
</div>

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
            

            tap:AMP.setState({ testimonialSlider: {currentSlide: 1}});

            var timer1 = setInterval(tabAnimation, 7000); 
        });

        function reloadexceliframe()
        {
            document.getElementById('iframeexcel').setAttribute('src', '{{ url("assets/files/Discounted Cash Flow.html") }}');
        }

        function reloadpdfiframe()
        {
            // document.getElementById('iframepdf').setAttribute('src', '{{ url("assets/files/Due Diligence Report.pdf") }}');
        }
        
        $('#Free_plan_start_download').click(() => {
            downloadLink('Free_plan_start_download');
        })
        $('#Subscription_plan_start_download').click(() => {
            downloadLink('Subscription_plan_start_download');
        })
        $('#payAsYouGoPlan_start_download').click(() => {
            downloadLink('payAsYouGoPlan_start_download');
        })
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