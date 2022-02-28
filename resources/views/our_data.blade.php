@extends('layout.struct')

{{-- Page title --}}
@section('title')
Our Data
@parent
@stop


@section('content')

<div>
    <main class="Main" data-amp-auto-lightbox-disable="" id="content">
        <section class="section">
            <div class="row">
                <div class="_span-3 col dn-p">
                    <div>
                        <div class="dn-p">
                            <nav class="Nav Nav--tight Nav--vertical">
                                <ul>
                                    <li>
                                        <a href="{{ route('privacy') }}">Privacy Policy </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('terms') }}">Terms of Service </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cookie') }}">Cookie Policy </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('our_data') }}">Our Data </a>
                                    </li>
                                    <!-- <button class="Button--secondary button mt600" on="tap:AMP.print" tabindex="0">Print Page </button> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="_span-9 col">
                    <h1 class="_small">Our Data</h1>
                    <div>
                        <ol class="outlinelist">
                            
                            <p style="padding: 10px 0px;"></p>
                            <li>
                                <h2>Background</h2>
                                <p style="padding: 10px 0px;"></p>
                                The task of data collection begun after the research problem was identified and the methodological framework was structured. Our researchers collected and analysed all the data used by the PVDATA software platform. Our data is categorised into 3 segments: primary data, secondary data, and tertiary data. Our primary datasets were sourced from credible third parties’ organisations such as the World Bank, Bloomberg, NASA and more. Our secondary datasets were sourced by purchasing live API data such as Geographical Information Systems (GIS) data from Google, financial and currency data from Trading Economics and more. Our tertiary datasets were sourced directly from the end user through stakeholder workshops, customer interviews, academic journals and more. Over the course of the data collection process, we reviewed more than 60 peer reviewed academic journals, conducted over 700 stakeholder workshops, and communicated directly with more than 1,000 solar energy professionals.  
                            </li>
                            <li>
                                <h2>Methodological approach:</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>

                                    <p>Our researchers designed a unique framework that incorporates both quantitative and qualitative metric data to derive a useful practical output. The conceptual model presented below on Fig 1.0, shows a graphical representation of how our existing user input parameters integrate a tried and tested energy modelling simulation concept for building digital tools. From this illustration, the key outputs we intend to derive are: </br>
                                    1). A comprehensive environmental, technical, and financial report assessing the viability of solar PV grid projects anywhere in the world, 
                                    </br>
                                    2). A detailed and well-structured debt finance cash flow model for solar energy investments. </p>
                                    <img src="{{ url('assets/our_data_img_1.jpg') }}" style="width: 100%;" />

                                    <p style="padding: 10px 0px; margin-top:0px; font-weight: bold;">
                                        Fig 1: Conceptual Model
                                    </p>
                                </ol>
                            </li>

                            <!-- Image Tag Here -->

                            <li>
                                <h2>Identifying the indicators:</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>

                                    PVDATA indicator selector was categorised into 3 segments. 1). Financial indicators, 2). Technical indicators, 3). Environmental, Social and Governance indicators (ESG). As incorporating qualitative ESG indicators to our software was important to us, we followed the following sustainable frameworks for identifying ESG: UN Principles for Responsible Investment (PRI) framework and Sustainability Accounting Standards Board (SASB) framework.

                                    <p style="padding: 10px 0px; margin-top:0px;"></p>

                                    Over 50 unique indicators were identified and incorporated to the PVDATA software. Some of the indicators identified and used on PVDATA are Flood data, Internal rate of return (IRR), Energy affordability, biodiversity risk, regulatory policy risks, levelized cost of energy (LCOE) and many more. 

                                </ol>
                            </li>

                            <li>
                                <h2>Primary and secondary data:</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    Our primary and secondary datasets are all opensource and available to the public. It was important to us that we retrieved these datasets from credible organisations with a strong track record of data integrity and data accuracy. As such, we focused on the following organisations for all our opensource datasets: the world bank, NASA, Google, Trading Economics, the European Union, the United Nations, Imperial College London, Bloomberg, Global Forest Watch, Climate Investment Fund (CIF) and others. Below on table 1, is a further breakdown on where our selected datasets are retrieved from:
                                    <p style="padding: 30px 0px; margin-top:0px; font-weight: bold;">
                                        Table 1: Primary dataset
                                    </p>
                                    <div style="overflow: auto;">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <tbody>
                                                <tr style="">
                                                    <th style="width: 25%;">Data Type</th>
                                                    <th style="width: 30%;">Indicator</th>
                                                    <th style="width: 15%;">Regular </br> Updates</th>
                                                    <th style="width: 30%;">Source</th>
                                                </tr>
                                                <tr>
                                                    <th>Geographical</th>
                                                    <td>Location coordinate API</td>
                                                    <td>Daily</td>
                                                    <td>Google </td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Temperature data</td>
                                                    <td>Daily</td>
                                                    <td>NASA</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Irradiance data</td>
                                                    <td>Daily</td>
                                                    <td>NASA</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Rainfall data</td>
                                                    <td>Daily</td>
                                                    <td>NASA</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Flood risk API</td>
                                                    <td>Daily</td>
                                                    <td>NASA, Imperial College London</td>
                                                </tr>
                                                <tr style="height: 30px;">
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>Financial</th>
                                                    <td>Currency Names</td>
                                                    <td>Daily</td>
                                                    <td>The World Bank </td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Currency exchange rates </td>
                                                    <td>Daily</td>
                                                    <td>Currency freaks</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Interest rate API</td>
                                                    <td>Daily</td>
                                                    <td>Trading Economics</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Corporate tax API</td>
                                                    <td>Daily</td>
                                                    <td>Trading Economics</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>GDP/Capita data</td>
                                                    <td>Annually</td>
                                                    <td>The World Bank</td>
                                                </tr>
                                                <tr style="height: 30px;">
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>

                                                <tr>
                                                    <th>Utilities</th>
                                                    <td>Electricity utilities data</td>
                                                    <td>Quarterly</td>
                                                    <td>Bloomberg, European Commission, Statista, Individual country database on electric utility. </td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Power market data </td>
                                                    <td>Quarterly</td>
                                                    <td>European Commission, Individual country database on electric utility (see country list). </td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Electricity consumed per household</td>
                                                    <td>Quarterly</td>
                                                    <td>The World Bank, world data, Individual country database on electric utility.</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Electricity affordability index</td>
                                                    <td>Quarterly</td>
                                                    <td>The World Bank</td>
                                                </tr>
                                                <tr style="height: 30px;">
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>

                                                <tr>
                                                    <th>Environmental/ </br>Social</th>
                                                    <td>Biodiversity risk</td>
                                                    <td>Annually</td>
                                                    <td>The World Bank, Imperial College London</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Grid carbon intensity data </td>
                                                    <td>Annually</td>
                                                    <td>Ecometrica </td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Population data</td>
                                                    <td>Annually</td>
                                                    <td>The World Bank</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Sustainable land use index</td>
                                                    <td>Annually</td>
                                                    <td>Imperial College London</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Natural disaster risk</td>
                                                    <td>Annually</td>
                                                    <td>weltrisikobericht.de </td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Regulatory policies</td>
                                                    <td>Quarterly</td>
                                                    <td>IEA, UNFCCC, Bloomberg, Climate Investment Fund (CIF).</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td>Deforestation</td>
                                                    <td>Annually</td>
                                                    <td>Global forest watch</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </ol>

                                <!-- Table View Here -->
                            </li>

                            <li>
                                <h2>Tertiary data:</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    Our tertiary data category sourced data directly from solar energy stakeholders in the form of interviews, workshops or academic journals or articles. For this process, we conducted and or read over 1,000 interviews, workshops, and journals collectively. The main goal for this category was to know what is going on in the solar energy market from all the different viewpoints across the world. For example, how does a policy framework for solar in the United States affect profitability, or how does an environmental protection policy in Brazil affect market players in the region. This is very key to the PVDATA software, to ensure validity and real time data reporting derived from our software. Some of the journals and stakeholder workshops we covered to retrieved useful datasets are highlighted on table 2. The table is classified into five groups: Journal Paper (JP), Energy Financial Models (EFM), Official Reports (OR), Stakeholder interviews (SI) and other which refers to reviews from solar trade associations. Furthermore, data from official reports (OR), were retrieved predominantly from the International Energy Agency (IEA), the World Economic Forum (WEF) and the United Nations (UN). 

                                    <p style="padding: 30px 0px; margin-top:0px; font-weight: bold;">
                                        Table 2: Tertiary data 
                                    </p>
                                    <div style="overflow: auto;">
                                        <table class="MsoTableMediumShading2Accent5" border="1" cellspacing="0" cellpadding="0" width="97%" style="width:97.38%;background:white;mso-background-themecolor:
                                            background1;border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 2.25pt;
                    mso-border-bottom-alt:solid windowtext 2.25pt;mso-yfti-tbllook:1632;
                    mso-padding-alt:0in 5.4pt 0in 5.4pt">
                    <tbody><tr style="mso-yfti-irow:-1;mso-yfti-firstrow:yes;mso-yfti-lastfirstrow:yes">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border-top:
                    solid windowtext 2.25pt;border-left:none;border-bottom:solid windowtext 2.25pt;
                    border-right:none;padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US">Source<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US">Year</span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US">Country</span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>JP<span style="mso-spacerun:yes">&nbsp; </span></span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US">EFM</span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US">OR</span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US">INT</span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US">OTHER</span></b><b><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>C<sub>1</sub></span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>C<sub>2</sub></span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>C<sub>3</sub></span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border-top:solid windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:windowtext;
                    mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>C<sub>4</sub></span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:0">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2013.08.041&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;, &quot;abstract&quot;
                    : &quot;Renewable energy is a promising alternative to fossil fuel-based
                    energy, but its development can require a complex set of environmental
                    tradeoffs. A recent increase in solar energy systems, especially large,
                    centralized installations, underscores the urgency of understanding their
                    environmental interactions. Synthesizing literature across numerous
                    disciplines, we review direct and indirect environmental impacts - both
                    beneficial and adverse - of utility-scale solar energy (USSE) development, including
                    impacts on biodiversity, land-use and land-cover change, soils, water
                    resources, and human health. Additionally, we review feedbacks between USSE
                    infrastructure and land-atmosphere interactions and the potential for USSE
                    systems to mitigate climate change. Several characteristics and development
                    strategies of USSE systems have low environmental impacts relative to other
                    energy systems, including other renewables. We show opportunities to increase
                    USSE environmental co-benefits, the permitting and regulatory constraints and
                    opportunities of USSE, and highlight future research directions to better
                    understand the nexus between USSE and the environment. Increasing the
                    environmental compatibility of USSE systems will maximize the efficacy of
                    this key renewable energy source in mitigating climatic and global
                    environmental change. \u00a9 2013 Elsevier Ltd.&quot;, &quot;author&quot; : [
                    { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Hernandez&quot;, &quot;given&quot; : &quot;R. R.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Easter&quot;, &quot;given&quot; :
                    &quot;S. B.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot;
                    : &quot;&quot;, &quot;family&quot; : &quot;Murphy-Mariscal&quot;,
                    &quot;given&quot; : &quot;M. L.&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Maestre&quot;, &quot;given&quot; : &quot;F.
                    T.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot;
                    : false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot;
                    : &quot;&quot;, &quot;family&quot; : &quot;Tavassoli&quot;, &quot;given&quot;
                    : &quot;M.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Allen&quot;, &quot;given&quot; : &quot;E. B.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Barrows&quot;, &quot;given&quot; :
                    &quot;C. W.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Belnap&quot;, &quot;given&quot; : &quot;J.&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Ochoa-Hueso&quot;, &quot;given&quot; :
                    &quot;R.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Ravi&quot;, &quot;given&quot; : &quot;S.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Allen&quot;, &quot;given&quot; :
                    &quot;M. F.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2014&quot; ] ] }, &quot;page&quot; :
                    &quot;766-779&quot;, &quot;title&quot; : &quot;Environmental impacts of
                    utility-scale solar energy&quot;, &quot;type&quot; : &quot;article&quot;,
                    &quot;volume&quot; : &quot;29&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=41516803-5510-4016-8b1d-1627120c7be0&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Hernandez et al., 2014)&quot;, &quot;manualFormatting&quot; :
                    &quot;Hernandez et al.&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Hernandez et al., 2014)&quot;, &quot;previouslyFormattedCitation&quot;
                    : &quot;(Hernandez et al., 2014)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Hernandez et al.</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2014</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">USA, Spain</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:1">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.solener.2009.07.009&quot;, &quot;ISBN&quot; :
                    &quot;0038-092X&quot;, &quot;ISSN&quot; : &quot;0038092X&quot;,
                    &quot;abstract&quot; : &quot;Organic solar cells are an emerging photovoltaic
                    technology that is inexpensive and easy to manufacture, despite low
                    efficiency and stability. A model, named TEEOS (Technical and Economic
                    Evaluator for Organic Solar), is presented that evaluates organic solar cells
                    for various solar energy applications in different geographic locations, in
                    terms of two financial indicators, payback period and net present value
                    (NPV). TEEOS uses SMARTS2 software to estimate broadband (280-4000 nm) spectral
                    irradiance data and with the use of a cloud modification factor, predicts
                    hourly irradiation in the absence of actual broadband irradiance data, which
                    is scarce for most urban locations. By using the avoided cost of electricity,
                    annual savings are calculated which produce the financial indicators. It is
                    hoped that these financial indicators can help guide certain technical
                    decisions regarding the direction of research for organic solar cells, for
                    example, increasing efficiency or increasing the absorptive wavelength range.
                    A sample calculation using solar hats is shown to be uneconomical, but a good
                    example of large-scale organic PV production. \u00a9 2009 Elsevier Ltd. All
                    rights reserved.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot;
                    : &quot;&quot;, &quot;family&quot; : &quot;Powell&quot;, &quot;given&quot; :
                    &quot;Colin&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Bender&quot;, &quot;given&quot; : &quot;Timothy&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Lawryshyn&quot;, &quot;given&quot; :
                    &quot;Yuri&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Solar Energy&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2009&quot; ] ] }, &quot;page&quot; : &quot;1977-1984&quot;,
                    &quot;title&quot; : &quot;A model to determine financial indicators for
                    organic solar cells&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;83&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=37a1b4ce-a689-48e1-a434-81864437932a&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Powell, Bender, &amp; Lawryshyn, 2009)&quot;,
                    &quot;manualFormatting&quot; : &quot;Powell &amp; Bender&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Powell, Bender, &amp;
                    Lawryshyn, 2009)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Powell, Bender, &amp; Lawryshyn, 2009)&quot; }, &quot;properties&quot;
                    : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Powell &amp; Bender</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2009</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Canada</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;
                    </span></span></span><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:2">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1111/j.1477-8947.2005.00141.x&quot;,
                    &quot;ISBN&quot; : &quot;01650203&quot;, &quot;ISSN&quot; :
                    &quot;01650203&quot;, &quot;PMID&quot; : &quot;19203555&quot;,
                    &quot;abstract&quot; : &quot;This article summarizes the results of the
                    project on indicators for sustainable energy development (ISED) in Brazil.
                    The project's aim was to present energy related economic, social and
                    environmental data to policy makers in a coherent and consistent form,
                    showing interlinkages, time-series and cross-sectoral analyses and assess
                    energy policy. Two priority areas assessed by these indicators, regarding the
                    country's energy supply and demand, helped in the identification of a number
                    of energy policy options that focused on specific aspects of the country's
                    energy sector. On the supply side, these options include the development and
                    stimulation of renewable energy, such as small-scale hydroelectric, wind,
                    solar photovoltaic power and bagasse cogeneration; stimulation of programmes
                    for ethanol use as automotive fuel and sugarcane bagasse cogeneration; and
                    implementation of natural gas-fired, combined heat and power (CHP) plants. On
                    the demand side, policy options include: the full implementation of the law
                    on efficiency standards for appliances; expansion of utility investment in
                    end-use energy efficiency; adoption of targets and protocols to reduce energy
                    intensity in the industrial sector; improvement of passenger transport
                    efficiency; and the creation of a fund to improve energy affordability for
                    the poor.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Schaeffer&quot;, &quot;given&quot; :
                    &quot;Roberto&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Szklo&quot;, &quot;given&quot; : &quot;Alexandre Salem&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Cima&quot;, &quot;given&quot; : &quot;Fernando
                    Monteiro&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Machado&quot;, &quot;given&quot; : &quot;Giovani&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Natural Resources Forum&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2005&quot; ] ] },
                    &quot;page&quot; : &quot;284-297&quot;, &quot;title&quot; : &quot;Indicators
                    for sustainable energy development: Brazil's case study&quot;,
                    &quot;type&quot; : &quot;article&quot;, &quot;volume&quot; : &quot;29&quot;
                    }, &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=d630c0d7-7512-4ba1-9919-afdea4faafb8&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Schaeffer, Szklo, Cima, &amp; Machado, 2005)&quot;,
                    &quot;manualFormatting&quot; : &quot;Schaeffer &amp; Szklo &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Schaeffer, Szklo, Cima, &amp;
                    Machado, 2005)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Schaeffer, Szklo, Cima, &amp; Machado, 2005)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Schaeffer &amp; Szklo </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2005</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Brazil</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;
                    </span></span></span><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:3">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Solar energy is an
                    important strategy for reducing our carbon footprint, but utility-scale
                    development of solar technologies involves large land areas, potentially
                    affecting many natural and cultural resources. Many issues are involved in
                    siting and approving renewable energy projects on public lands and, at the
                    same time, preserving and protecting important resources. Aside from
                    evaluating standard ground-disturbing impacts on archaeological sites, the
                    U.S. federal government faces cultural resource challenges when determining
                    areas of potential effect for large-scale, highly visible developments;
                    assessing cumulative effects across traditional landscapes; engaging in a
                    meaningful consultation process; and developing effective strategies for
                    resolving adverse effects.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Wescott&quot;, &quot;given&quot; : &quot;Konnie L.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;SolarPaces Conference&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2011&quot; ] ] },
                    &quot;title&quot; : &quot;Challenges in addressing the environmental impacts
                    of utility-scale solar energy development on historic properties in the
                    Southwestern United States&quot;, &quot;type&quot; :
                    &quot;article-journal&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=0cba9398-0210-4cec-bf17-fe1f716652f5&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Wescott, 2011)&quot;, &quot;manualFormatting&quot; :
                    &quot;Wescott&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Wescott,
                    2011)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Wescott,
                    2011)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot;
                    :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Wescott</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2011</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:4">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/S0301-4215(03)00241-6&quot;, &quot;ISBN&quot; :
                    &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;,
                    &quot;abstract&quot; : &quot;Solar energy systems (photovoltaics, solar
                    thermal, solar power) provide significant environmental benefits in
                    comparison to the conventional energy sources, thus contributing, to the
                    sustainable development of human activities. Sometimes however, their wide
                    scale deployment has to face potential negative environmental implications.
                    These potential problems seem to be a strong barrier for a further
                    dissemination of these systems in some consumers. To cope with these problems
                    this paper presents an overview of an Environmental Impact Assessment. We
                    assess the potential environmental intrusions in order to ameliorate them
                    with new technological innovations and good practices in the future power
                    systems. The analysis provides the potential burdens to the environment,
                    which include-during the construction, the installation and the demolition
                    phases, as well as especially in the case of the central solar
                    technologies-noise and visual intrusion, greenhouse gas emissions, water and
                    soil pollution, energy consumption, labour accidents, impact on
                    archaeological sites or on sensitive ecosystems, negative and positive
                    socio-economic effects. ?? 2003 Elsevier Ltd. All rights reserved.&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Tsoutsos&quot;, &quot;given&quot; :
                    &quot;Theocharis&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Frantzeskaki&quot;, &quot;given&quot; : &quot;Niki&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Gekas&quot;, &quot;given&quot; :
                    &quot;Vassilis&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Energy Policy&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2005&quot; ] ] }, &quot;page&quot; : &quot;289-296&quot;,
                    &quot;title&quot; : &quot;Environmental impacts from the solar energy technologies&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;33&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=5e42fab4-e885-490c-b148-3c3e65d18aac&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Tsoutsos et al., 2005)&quot;, &quot;manualFormatting&quot; :
                    &quot;Tsoutsos &amp; Frantzeskaki &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Tsoutsos et al., 2005)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Tsoutsos et al., 2005)&quot;
                    }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot;
                    :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Tsoutsos &amp; Frantzeskaki </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2005</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Greece</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:5">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;World Bank&quot;, &quot;given&quot; : &quot;&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2013&quot; ] ] }, &quot;title&quot; :
                    &quot;Cutting Water Consumption in Concentrated Solar Power Plants&quot;,
                    &quot;type&quot; : &quot;report&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=f7ea4b5d-716f-46f8-bff8-2976b6eeb035&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(World
                    Bank, 2013)&quot;, &quot;manualFormatting&quot; : &quot;World Bank&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(World Bank, 2013)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(World Bank, 2013)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">World Bank</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ { &quot;dropping-particle&quot;
                    : &quot;&quot;, &quot;family&quot; : &quot;World Bank&quot;,
                    &quot;given&quot; : &quot;&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2013&quot; ] ] }, &quot;title&quot; :
                    &quot;Cutting Water Consumption in Concentrated Solar Power Plants&quot;,
                    &quot;type&quot; : &quot;report&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=f7ea4b5d-716f-46f8-bff8-2976b6eeb035&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(World
                    Bank, 2013)&quot;, &quot;manualFormatting&quot; : &quot; &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(World Bank, 2013)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(World Bank, 2013)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes"> </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2013</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:6">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Interview&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;SolarCentury&quot;, &quot;given&quot; :
                    &quot;&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;London, UK&quot;, &quot;title&quot; :
                    &quot;Indicators for Utility scale solar farms&quot;, &quot;type&quot; :
                    &quot;speech&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=09f95789-f89a-41ba-8f93-7fedcfb5b851&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(SolarCentury, 2016)&quot;, &quot;manualFormatting&quot; :
                    &quot;SolarCentury &quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(SolarCentury, 2016)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(SolarCentury, 2016)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">SolarCentury </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:7">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1016/j.energy.2006.08.006&quot;,
                    &quot;ISBN&quot; : &quot;9201162049&quot;, &quot;ISSN&quot; :
                    &quot;03605442&quot;, &quot;abstract&quot; : &quot;Energy is an essential
                    factor in overall efforts to achieve sustainable development. Countries striving
                    to this end are seeking to reassess their energy systems with a view toward
                    planning energy programmes and strategies in line with sustainable
                    development goals and objectives. This paper summarizes the outcome of an
                    international partnership initiative on indicators for sustainable energy
                    development that aims to provide an analytical tool for assessing current
                    energy production and use patterns at a national level. The proposed set of
                    energy indicators represents a first step of a consensus reached on this
                    subject by five international agencies-two from the United Nations system
                    (the Department of Economic and Social Affairs and the International Atomic
                    Energy Agency), two from the European Union (Eurostat and the European
                    Environment Agency) and one from the Organization for Economic Cooperation
                    and Development (the International Energy Agency). Energy and environmental
                    experts including statisticians, analysts, policy makers and academics have
                    started to implement general guidelines and methodologies in the development
                    of national energy indicators for use in their efforts to monitor the effects
                    of energy policies on the social, economic and environmental dimensions of
                    sustainable development.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Vera&quot;, &quot;given&quot; : &quot;I&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Langlois&quot;, &quot;given&quot; :
                    &quot;L&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Energy&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2007&quot; ] ] }, &quot;page&quot; : &quot;875-882&quot;,
                    &quot;title&quot; : &quot;Energy indicators for sustainable
                    development&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;32&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=9c7784e5-3b0c-4534-9a20-0f3ae0738291&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(I Vera
                    &amp; Langlois, 2007)&quot;, &quot;manualFormatting&quot; : &quot;Vera &amp;
                    Langlois&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(I Vera &amp;
                    Langlois, 2007)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(I
                    Vera &amp; Langlois, 2007)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Vera &amp; Langlois</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2007</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Austria</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:8">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1016/j.rser.2008.03.008&quot;,
                    &quot;ISBN&quot; : &quot;1364-0321&quot;, &quot;ISSN&quot; :
                    &quot;13640321&quot;, &quot;abstract&quot; : &quot;The non-combustion based
                    renewable electricity generation technologies were assessed against a range of
                    sustainability indicators and using data obtained from the literature. The
                    indicators used to assess each technology were price of generated
                    electricity, greenhouse gas emissions during full life cycle of the
                    technology, availability of renewable sources, efficiency of energy
                    conversion, land requirements, water consumption and social impacts. The cost
                    of electricity, greenhouse gas emissions and the efficiency of electricity
                    generation were found to have a very wide range for each technology, mainly
                    due to variations in technological options as well as geographical dependence
                    of each renewable energy source. The social impacts were assessed
                    qualitatively based on the major individual impacts discussed in literature.
                    Renewable energy technologies were then ranked against each indicator
                    assuming that indicators have equal importance for sustainable development.
                    It was found that wind power is the most sustainable, followed by hydropower,
                    photovoltaic and then geothermal. Wind power was identified with the lowest
                    relative greenhouse gas emissions, the least water consumption demands and
                    with the most favourable social impacts comparing to other technologies, but
                    requires larger land and has high relative capital costs. \u00a9 2008
                    Elsevier Ltd. All rights reserved.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Evans&quot;, &quot;given&quot; : &quot;Annette&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Strezov&quot;, &quot;given&quot; :
                    &quot;Vladimir&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Evans&quot;, &quot;given&quot; : &quot;Tim J.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; : &quot;Renewable
                    and Sustainable Energy Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2009&quot; ] ] },
                    &quot;page&quot; : &quot;1082-1088&quot;, &quot;title&quot; :
                    &quot;Assessment of sustainability indicators for renewable energy
                    technologies&quot;, &quot;type&quot; : &quot;article&quot;,
                    &quot;volume&quot; : &quot;13&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=a758962f-fbf4-4e4b-a97d-f52287cd9c27&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Evans,
                    Strezov, &amp; Evans, 2009)&quot;, &quot;manualFormatting&quot; : &quot;Evans
                    &amp; Strezov&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Evans,
                    Strezov, &amp; Evans, 2009)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Evans, Strezov, &amp; Evans, 2009)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Evans &amp; Strezov</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2009</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Australia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;
                    </span></span></span><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:9">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Interview&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Quaintglobal&quot;, &quot;given&quot; :
                    &quot;&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;Abuja, Nigeria&quot;, &quot;title&quot; :
                    &quot;Solar Power Indicators&quot;, &quot;type&quot; : &quot;speech&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=96b64acf-94c4-43dd-be15-e931e819fb91&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Quaintglobal, 2016)&quot;, &quot;manualFormatting&quot; :
                    &quot;Quaintglobal&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Quaintglobal, 2016)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Quaintglobal, 2016)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Quaintglobal</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Nigeria</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:10">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Stamford&quot;, &quot;given&quot; : &quot;Laurence&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2012&quot; ] ] }, &quot;number-of-pages&quot; : &quot;203-261&quot;,
                    &quot;publisher&quot; : &quot;University of Manchester&quot;,
                    &quot;title&quot; : &quot;Life cycle sustainability assessment of electricity
                    generation: a methodology and an application in the UK context&quot;,
                    &quot;type&quot; : &quot;thesis&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=955ed1a4-4098-45f4-b93d-d6c5f98d0cdb&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Stamford, 2012)&quot;, &quot;manualFormatting&quot; :
                    &quot;Stamford&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Stamford, 2012)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Stamford, 2012)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Stamford</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2012</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:11">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.5772/53386&quot;,
                    &quot;ISBN&quot; : &quot;978-953-51-0969-3&quot;, &quot;abstract&quot; :
                    &quot;Sustainability in Solar Thermal Power Plants&quot;, &quot;author&quot;
                    : [ { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Marti\u0301nez&quot;, &quot;given&quot; : &quot;Rafael Almanza and
                    Iva\u0301n&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;editor&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Rugescu&quot;, &quot;given&quot; :
                    &quot;Radu&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2013&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;Rijeka, Croatia&quot;, &quot;title&quot;
                    : &quot;Application of Solar Energy&quot;, &quot;type&quot; :
                    &quot;book&quot; }, &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=042412f3-a773-41b4-9166-848e21313a40&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Marti\u0301nez, 2013)&quot;, &quot;manualFormatting&quot; :
                    &quot;Marti\u0301nez &quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Marti\u0301nez, 2013)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Marti\u0301nez, 2013)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Martínez </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2013</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Croatia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:12">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;URL&quot; :
                    &quot;https://www.nrel.gov/docs/fy04osti/35489.pdf&quot;, &quot;author&quot;
                    : [ { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;NREL&quot;, &quot;given&quot; : &quot;&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2004&quot; ] ] }, &quot;title&quot; : &quot;PV FAQs&quot;,
                    &quot;type&quot; : &quot;webpage&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=7227aced-6563-4391-bccc-d72df00f8b16&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(NREL,
                    2004)&quot;, &quot;manualFormatting&quot; : &quot;NREL &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(NREL, 2004)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(NREL, 2004)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">NREL </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2015</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:13">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;IRENA&quot;, &quot;given&quot; : &quot;&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2012&quot; ] ] }, &quot;publisher-place&quot; : &quot;Abu Dhabi&quot;,
                    &quot;title&quot; : &quot;Renewable energy technologies: cost analysis
                    series&quot;, &quot;type&quot; : &quot;report&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=20fa70c8-5af8-45ac-9021-5608b1341829&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(IRENA,
                    2012)&quot;, &quot;manualFormatting&quot; : &quot;IRENA &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(IRENA, 2012)&quot;, &quot;previouslyFormattedCitation&quot;
                    : &quot;(IRENA, 2012)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">IRENA </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2012</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Germany</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:14">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ { &quot;dropping-particle&quot;
                    : &quot;&quot;, &quot;family&quot; : &quot;European Commission&quot;,
                    &quot;given&quot; : &quot;&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2011&quot; ] ] }, &quot;title&quot; :
                    &quot;Key Performance Indicators for the Solar Europe Industrial
                    Initiative&quot;, &quot;type&quot; : &quot;article-journal&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=df354553-dcf9-4b98-987f-dcb57da02c54&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(European Commission, 2011)&quot;, &quot;manualFormatting&quot; :
                    &quot;European Commission&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(European Commission, 2011)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(European Commission,
                    2011)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">European Commission</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2011</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Belgium</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:15">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Interview&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Low Carbon&quot;, &quot;given&quot; :
                    &quot;&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;United Kingdom&quot;, &quot;title&quot; :
                    &quot;Renewable energy Indicators&quot;, &quot;type&quot; :
                    &quot;broadcast&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=22d9bcac-8c09-47ef-a10c-b25d9b07b754&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Low
                    Carbon, 2016)&quot;, &quot;manualFormatting&quot; : &quot;Low Carbon &quot;, &quot;plainTextFormattedCitation&quot;
                    : &quot;(Low Carbon, 2016)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Low Carbon, 2016)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Low Carbon </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;background:yellow;
                    mso-highlight:yellow;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:16">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2013.12.038&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;Renewable energy is considered as a solution for
                    mitigating climate change and environmental pollution; however, an important
                    problem of the application of renewable energy systems (RESs) is that the
                    evaluation of the sustainability of these systems is extremely complex. In
                    order to assess the sustainability of renewable energy systems
                    comprehensively, the use of sustainability indicators (SIs) is often
                    necessary. Since sustainability indicators are necessary to reflect various
                    aspects of sustainability, the development of a general sustainability
                    indicator (GSI) including many basic sustainability indicators (BSIs) becomes
                    critical. In this paper, the methods of selection, quantification, evaluation
                    and weighting of the basic indicators as well as the methods of GSI
                    aggregation are reviewed. The advantages and disadvantages of each method are
                    discussed. Based on these discussion and the analysis of the uncertainties of
                    sustainability assessment, an effective framework and its procedures of the
                    development of GSI for renewable energy systems is presented. This GSI is not
                    only able to evaluate all the sustainability criteria of RESs, but also can
                    provide numerical results of sustainability assessment for different
                    objective systems. The proposed framework in this study can be used as a
                    guidance of the development of sustainability indicator for various renewable
                    energy systems. ?? 2014 Elsevier Ltd.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Liu&quot;, &quot;given&quot; : &quot;Gang&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Renewable and Sustainable Energy Reviews&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2014&quot; ] ] }, &quot;page&quot; : &quot;611-621&quot;,
                    &quot;title&quot; : &quot;Development of a general sustainability indicator
                    for renewable energy systems: A review&quot;, &quot;type&quot; :
                    &quot;article-journal&quot;, &quot;volume&quot; : &quot;31&quot; },
                    &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=d048827c-b597-438d-9395-630e0d26dbcb&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Liu,
                    2014)&quot;, &quot;manualFormatting&quot; : &quot;Liu &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Liu, 2014)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Liu, 2014)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Liu </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2014</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">China</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:17">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1016/j.procs.2014.03.027&quot;,
                    &quot;ISBN&quot; : &quot;18770509&quot;, &quot;ISSN&quot; :
                    &quot;18770509&quot;, &quot;abstract&quot; : &quot;Wind energy, along with
                    other renewable energy sources, has become an alternative to traditional
                    energy sources to meet the growing energy demand. Wind energy is considered
                    to be one of the cleanest sources of energy. Wind energy sustainability
                    focuses on a balance between economic, social and environmental objectives.
                    However, wind energy faces various challenges associated to sustainability.
                    This paper presents a way to analyze wind energy sustainability using a
                    systems thinking approach. \u00a9 2014 The Authors. Published by Elsevier
                    B.V.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Tejeda&quot;, &quot;given&quot; :
                    &quot;Jenny&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Procedia Computer Science&quot;,
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2014&quot; ] ] }, &quot;page&quot; :
                    &quot;213-220&quot;, &quot;title&quot; : &quot;Applying systems thinking to
                    analyze wind energy sustainability&quot;, &quot;type&quot; :
                    &quot;paper-conference&quot;, &quot;volume&quot; : &quot;28&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=67bd1c61-0665-4793-aa71-c04156dd0e4a&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Tejeda, 2014)&quot;, &quot;manualFormatting&quot; : &quot;Tejeda &amp;
                    Ferreira&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Tejeda,
                    2014)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Tejeda,
                    2014)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Tejeda &amp; Ferreira</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2014</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:18">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2013.07.003&quot;, &quot;ISSN&quot; :
                    &quot;13640321&quot;, &quot;abstract&quot; : &quot;This paper highlights an
                    evaluation of the potential level and nature of sustainability for
                    large-scale photovoltaic (PV) solar power plants. This was achieved by
                    applying a mathematical model of sustainability to the results of a
                    qualitative-based environmental impact evaluation of the installation and
                    operation of large-scale solar power plants. The results from the model
                    application indicated that large-scale PV solar power plants were conducive
                    to achieving strong sustainability. This was because of the significant
                    environmental benefits derived from PV solar power plants in respect to its
                    construction and operation, as well as the minimum impacts derived from
                    anthropogenic sources. This paper however notes that PV solar technology
                    requires significant improvements in the conversion of sunlight to electric
                    energy. This paper concludes that PV solar power plants offer a potentially
                    significant and sustainable source of energy. \u00a9 2013 Elsevier Ltd. All
                    rights reserved.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Phillips&quot;, &quot;given&quot; : &quot;Jason&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Renewable and Sustainable Energy Reviews&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2013&quot; ] ] }, &quot;page&quot; : &quot;435-444&quot;,
                    &quot;title&quot; : &quot;Determining the sustainability of large-scale
                    photovoltaic solar power plants&quot;, &quot;type&quot; :
                    &quot;article&quot;, &quot;volume&quot; : &quot;27&quot; }, &quot;uris&quot;
                    : [
                    &quot;http://www.mendeley.com/documents/?uuid=a5c0dfb0-27f7-4772-8db2-c72f31e57c3f&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Phillips, 2013)&quot;, &quot;manualFormatting&quot; :
                    &quot;Phillips&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Phillips,
                    2013)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Phillips,
                    2013)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Phillips</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2013</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:19">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Interview&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Green-Giraffe&quot;, &quot;given&quot; :
                    &quot;&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;London, UK&quot;, &quot;title&quot; :
                    &quot;Renewable Energy Indicators&quot;, &quot;type&quot; :
                    &quot;speech&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=ceb70007-4233-4a33-9fc4-61568fa754eb&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Green-Giraffe, 2016)&quot;, &quot;manualFormatting&quot; :
                    &quot;Green-Giraffe&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Green-Giraffe, 2016)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Green-Giraffe, 2016)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Green-Giraffe</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:20">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Software Model&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Wahid&quot;, &quot;given&quot; : &quot;Faiz&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2016&quot; ] ] }, &quot;publisher&quot; : &quot;Pmanifold&quot;,
                    &quot;title&quot; : &quot;Financial Model for grid connected, Solar
                    Photovoltaic (SPV) Power Plants&quot;, &quot;type&quot; : &quot;article&quot;
                    }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=ccce90e1-3d51-4380-9ee1-c831c93ed98e&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Wahid,
                    2016)&quot;, &quot;manualFormatting&quot; : &quot;Wahid&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Wahid, 2016)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Wahid, 2016)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Wahid</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">India</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:21">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;World Economic Forum&quot;, &quot;given&quot; : &quot;&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;0&quot; ] ] }, &quot;publisher-place&quot; : &quot;Geneva&quot;,
                    &quot;title&quot; : &quot;The Global Energy Architecture Performance Index
                    Report 2014&quot;, &quot;type&quot; : &quot;report&quot; }, &quot;uris&quot;
                    : [ &quot;http://www.mendeley.com/documents/?uuid=4bd61c62-bbdd-4e9b-8efe-571561dfbe92&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(World
                    Economic Forum, n.d.)&quot;, &quot;manualFormatting&quot; : &quot;World
                    Economic Forum, n.d.&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(World Economic Forum, n.d.)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(World Economic Forum,
                    n.d.)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">World Economic Forum, n.d.</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2013</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Switzerland</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:22">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;EPIA&quot;, &quot;given&quot; : &quot;&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2010&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;Brussels&quot;, &quot;title&quot; :
                    &quot;SOLAR EUROPE INDUSTRY INITIATIVE (SEII)&quot;, &quot;type&quot; :
                    &quot;report&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=4e2fda2b-2652-42c7-ac37-ca924e9dcf6b&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(EPIA,
                    2010)&quot;, &quot;manualFormatting&quot; : &quot;EPIA &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(EPIA, 2010)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(EPIA, 2010)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">EPIA </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2010</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Belgium </span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:23">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; : &quot;Interview&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;FirstSolar&quot;, &quot;given&quot; :
                    &quot;&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] }, &quot;publisher-place&quot;
                    : &quot;Brasil&quot;, &quot;title&quot; : &quot;Risk factors that can affect
                    solar development&quot;, &quot;type&quot; : &quot;speech&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=014783f9-94ef-4626-8416-32588ff14b9d&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(FirstSolar, 2016)&quot;, &quot;manualFormatting&quot; :
                    &quot;FirstSolar&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(FirstSolar, 2016)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(FirstSolar, 2016)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">FirstSolar</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Brazil</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:24">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2011.08.028&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;This paper analyzed the potential implementation
                    of hybrid photovoltaic (PV)/wind turbine/diesel system in southern city of
                    Malaysia, Johor Bahru. HOMER (hybrid optimization model for electric
                    renewable) simulation software was used to determine the technical
                    feasibility of the system and to perform the economical analysis of the
                    system. There were seven different system configurations, namely stand-alone
                    diesel system, hybrid PV-diesel system with and without battery storage
                    element, hybrid wind-diesel system with and without battery storage element,
                    PV-wind-diesel system with and without storage element, will be studied and
                    analyzed. The simulations will be focused on the net present costs, cost of
                    energy, excess electricity produced and the reduction of CO2 emission for the
                    given hybrid configurations. At the end of this paper, PV-diesel system with
                    battery storage element, PV-wind-diesel system with battery storage element
                    and the stand-alone diesel system were analyzed based on high price of
                    diesel. ?? 2011 Elsevier Ltd. All rights reserved.&quot;, &quot;author&quot;
                    : [ { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Ngan&quot;, &quot;given&quot; : &quot;Mei Shan&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Tan&quot;, &quot;given&quot; :
                    &quot;Chee Wei&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2012&quot; ] ] }, &quot;page&quot; :
                    &quot;634-647&quot;, &quot;title&quot; : &quot;Assessment of economic
                    viability for PV/wind/diesel hybrid energy system in southern Peninsular
                    Malaysia&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;16&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=db7c55a7-38fa-4196-9b7f-34f65acde49b&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Ngan
                    &amp; Tan, 2012)&quot;, &quot;manualFormatting&quot; : &quot;Ngan &amp; Tan
                    &quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Ngan &amp; Tan,
                    2012)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Ngan &amp; Tan,
                    2012)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Ngan &amp; Tan </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2012</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Malaysia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:25">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2009.05.007&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;The renewable based electricity generation
                    technologies were assessed against a range of sustainability indicators using
                    data obtained from the literature. These indicators are cost of electricity
                    generation, greenhouse gas emissions and energy pay-back time. All the three
                    parameters were found to have a very wide range for each technology. For
                    grading different renewable energy sources anewfigure of merit has been
                    proposed, linking greenhouse gas emissions, energy pay-back time and cost of
                    electricity generated by these renewable energy sources. It has been found
                    out that wind and small hydro are the most sustainable source for the
                    electricity generation. \ue002&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Prakash&quot;, &quot;given&quot; : &quot;Ravi&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Bhat&quot;, &quot;given&quot; :
                    &quot;Inder Krishnan&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2009&quot; ] ] }, &quot;page&quot; :
                    &quot;2716-2721&quot;, &quot;title&quot; : &quot;Energy, economics and
                    environmental impacts of renewable energy systems&quot;, &quot;type&quot; :
                    &quot;article-journal&quot;, &quot;volume&quot; : &quot;13&quot; },
                    &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=ad559c2d-b49f-45f7-bbc0-b14201c0372d&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Prakash &amp; Bhat, 2009)&quot;, &quot;manualFormatting&quot; :
                    &quot;Prakash &amp; Bhat&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Prakash &amp; Bhat, 2009)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Prakash &amp; Bhat,
                    2009)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Prakash &amp; Bhat</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2009</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">India</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;
                    </span></span></span><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:26">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; : &quot;Juwi&quot;,
                    &quot;given&quot; : &quot;&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;Germany&quot;, &quot;title&quot; :
                    &quot;Indicators for utility scale renewable energy projects/Stakeholder
                    review&quot;, &quot;type&quot; : &quot;speech&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=aae25115-85f5-420e-92bc-fdb0143ec459&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Juwi,
                    2016)&quot;, &quot;manualFormatting&quot; : &quot;Juwi &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Juwi, 2016)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Juwi, 2016)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Juwi </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Germany</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:27">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.enpol.2006.09.006&quot;, &quot;ISBN&quot; :
                    &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;, &quot;abstract&quot;
                    : &quot;Due to the fact that human activities and most sustainability issues
                    are closely related to energy use, the energy system is a sound framework for
                    providing lead indicators for sustainable development. Common energy-economic
                    models enable the estimation of future states of the energy system. An energy
                    system-based lead indicator set can be used to develop consistent and
                    coherent future indicator estimates and to track sustainability, a clear
                    advantage over existing sets. In developed countries, the sustainability
                    discussion is focused on environmental topics, while in developing countries
                    the issues of poverty and equity are equally important. Consequently, for
                    measuring sustainable development in a developing country, the inclusion of a
                    poverty indicator in a set of lead indicators is essential. By correlation
                    and descriptive analysis, it is shown that reliable energy-based indicators
                    of poverty can be created. Although no one-dimensional indicator is a
                    comprehensive measure of poverty, the explanatory power of energy poverty
                    indicators is comparable to that of other poverty indicators. Thus, the use
                    of energy indicators is not restricted to environmental and economic issues
                    but is also relevant for social issues. \u00a9 2006 Elsevier Ltd. All rights
                    reserved.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Kemmler&quot;, &quot;given&quot; :
                    &quot;Andreas&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Spreng&quot;, &quot;given&quot; : &quot;Daniel&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;container-title&quot; : &quot;Energy Policy&quot;,
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2007&quot; ] ] }, &quot;page&quot; :
                    &quot;2466-2480&quot;, &quot;title&quot; : &quot;Energy indicators for
                    tracking sustainability in developing countries&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;35&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=b74904b9-b0ed-4e09-aedf-15f3d7040bfe&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Kemmler &amp; Spreng, 2007)&quot;, &quot;manualFormatting&quot; :
                    &quot;Kemmler &amp; Spreng&quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Kemmler &amp; Spreng, 2007)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Kemmler &amp; Spreng,
                    2007)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Kemmler &amp; Spreng</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2007</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Switzerland</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:28">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;abstract&quot; :
                    &quot;PricewaterhouseCoopers&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; : &quot;PWC&quot;,
                    &quot;given&quot; : &quot;&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2015&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;London, UK&quot;, &quot;title&quot; :
                    &quot;Risk indicators: Renewable energy&quot;, &quot;type&quot; :
                    &quot;speech&quot; }, &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=19dda17e-c7cd-4ae4-9b33-f28076472448&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(PWC,
                    2015)&quot;, &quot;manualFormatting&quot; : &quot;PWC &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(PWC, 2015)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(PWC, 2015)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">PWC </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2015</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:29">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2008.03.008&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;The non-combustion based renewable electricity
                    generation technologies were assessed against a range of sustainability
                    indicators and using data obtained from the literature. The indicators used
                    to assess each technology were price of generated electricity, greenhouse gas
                    emissions during full life cycle of the technology, availability of renewable
                    sources, efficiency of energy conversion, land requirements, water
                    consumption and social impacts. The cost of electricity, greenhouse gas
                    emissions and the efficiency of electricity generation were found to have a
                    very wide range for each technology, mainly due to variations in
                    technological options as well as geographical dependence of each renewable
                    energy source. The social impacts were assessed qualitatively based on the
                    major individual impacts discussed in literature. Renewable energy
                    technologies were then ranked against each indicator assuming that indicators
                    have equal importance for sustainable development. It was found that wind
                    power is the most sustainable, followed by hydropower, photovoltaic and then
                    geothermal. Wind power was identified with the lowest relative greenhouse gas
                    emissions, the least water consumption demands and with the most favourable
                    social impacts comparing to other technologies, but requires larger land and
                    has high relative capital costs. \u00a9 2008 Elsevier Ltd. All rights
                    reserved.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Evans&quot;, &quot;given&quot; :
                    &quot;Annette&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Strezov&quot;, &quot;given&quot; : &quot;Vladimir&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Evans&quot;, &quot;given&quot; :
                    &quot;Tim J.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2009&quot; ] ] }, &quot;page&quot; :
                    &quot;1082-1088&quot;, &quot;title&quot; : &quot;Assessment of sustainability
                    indicators for renewable energy technologies&quot;, &quot;type&quot; :
                    &quot;article&quot;, &quot;volume&quot; : &quot;13&quot; }, &quot;uris&quot;
                    : [
                    &quot;http://www.mendeley.com/documents/?uuid=a758962f-fbf4-4e4b-a97d-f52287cd9c27&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Evans
                    et al., 2009)&quot;, &quot;manualFormatting&quot; : &quot;Evans et al.
                    &quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Evans et al.,
                    2009)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Evans et al.,
                    2009)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Evans et al. </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2009</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Australia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:30">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.apenergy.2015.04.124&quot;, &quot;ISSN&quot; :
                    &quot;03062619&quot;, &quot;abstract&quot; : &quot;We propose the computation
                    of different wind energy production indicators and financial profitability of
                    potential wind power sites. The computation is performed by modeling the wind
                    speed process as an indexed semi-Markov chain to predict and simulate the
                    wind speed dynamics. We demonstrate that the indexed semi-Markov chain
                    approach enables reproducing the indicators calculated on real data. Two
                    different time horizons of 15 and 30years are analyzed. In the first case we
                    consider the government incentives on the energy price now present in Italy,
                    while in the second case the incentives have not been taken into
                    account.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;D\u2019Amico&quot;,
                    &quot;given&quot; : &quot;Guglielmo&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Petroni&quot;, &quot;given&quot; :
                    &quot;Filippo&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Prattico&quot;, &quot;given&quot; : &quot;Flavio&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Applied Energy&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2015&quot; ] ] },
                    &quot;page&quot; : &quot;290-297&quot;, &quot;title&quot; : &quot;Economic
                    performance indicators of wind energy based on wind speed stochastic
                    modeling&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;154&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=23abf8c1-0766-4a4b-851e-40bfbf9968ae&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(D\u2019Amico, Petroni, &amp; Prattico, 2015)&quot;,
                    &quot;manualFormatting&quot; : &quot;D\u2019Amico &amp; Petroni &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(D\u2019Amico, Petroni, &amp;
                    Prattico, 2015)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(D\u2019Amico, Petroni, &amp; Prattico, 2015)&quot; }, &quot;properties&quot;
                    : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">D’Amico &amp; Petroni </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2015</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Italy</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:31">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.renene.2013.11.075&quot;, &quot;ISBN&quot; :
                    &quot;0960-1481&quot;, &quot;ISSN&quot; : &quot;09601481&quot;,
                    &quot;abstract&quot; : &quot;This paper presents specific life cycle GHG
                    emissions from wind power generation from six different 5MW offshore wind
                    turbine conceptual designs. In addition, the energy performance, expressed by
                    the energy indicators Energy Payback Ratio (EPR) Energy Payback Time (EPT),
                    is calculated for each of the concepts.There are currently few LCA studies in
                    existence which analyse offshore wind turbines with rated power as great as
                    5MW. The results, therefore, give valuable additional environmental
                    information concerning large offshore wind power. The resulting GHG emissions
                    vary between 18 and 31.4g CO2-equivalents per kWh while the energy
                    performance, assessed as EPR and EPT, varies between 7.5 and 12.9, and 1.6
                    and 2.7 years, respectively. The relatively large ranges in GHG emissions and
                    energy performance are chiefly the result of the differing steel masses
                    required for the analysed platforms. One major conclusion from this study is
                    that specific platform/foundation steel masses are important for the overall
                    GHG emissions relating to offshore wind power. Other parameters of importance
                    when comparing the environmental performance of offshore wind concepts are
                    the lifetime of the turbines, wind conditions, distance to shore, and
                    installation and decommissioning activities.Even though the GHG emissions
                    from wind power vary to a relatively large degree, wind power can fully
                    compete with other low GHG emission electricity technologies, such as
                    nuclear, photovoltaic and hydro power. ?? 2013 Elsevier Ltd.&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Raadal&quot;, &quot;given&quot; : &quot;Hanne
                    Lerche&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Vold&quot;, &quot;given&quot; : &quot;Bj??rn Ivar&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Myhr&quot;, &quot;given&quot; :
                    &quot;Anders&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Nygaard&quot;, &quot;given&quot; : &quot;Tor Anders&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Renewable Energy&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2014&quot; ] ] },
                    &quot;page&quot; : &quot;314-324&quot;, &quot;title&quot; : &quot;GHG
                    emissions and energy performance of offshore wind power&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;66&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=03b080fb-1fd3-43ce-a5b6-67d2c227bee1&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Raadal, Vold, Myhr, &amp; Nygaard, 2014)&quot;, &quot;manualFormatting&quot;
                    : &quot;Raadal &amp; Vold &quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Raadal, Vold, Myhr, &amp; Nygaard, 2014)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Raadal, Vold, Myhr, &amp;
                    Nygaard, 2014)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0
                    }, &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Raadal &amp; Vold </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2014</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Norway</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:32">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2011.08.028&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;This paper analyzed the potential implementation
                    of hybrid photovoltaic (PV)/wind turbine/diesel system in southern city of
                    Malaysia, Johor Bahru. HOMER (hybrid optimization model for electric
                    renewable) simulation software was used to determine the technical
                    feasibility of the system and to perform the economical analysis of the
                    system. There were seven different system configurations, namely stand-alone
                    diesel system, hybrid PV-diesel system with and without battery storage element,
                    hybrid wind-diesel system with and without battery storage element,
                    PV-wind-diesel system with and without storage element, will be studied and
                    analyzed. The simulations will be focused on the net present costs, cost of
                    energy, excess electricity produced and the reduction of CO2 emission for the
                    given hybrid configurations. At the end of this paper, PV-diesel system with
                    battery storage element, PV-wind-diesel system with battery storage element
                    and the stand-alone diesel system were analyzed based on high price of
                    diesel. ?? 2011 Elsevier Ltd. All rights reserved.&quot;, &quot;author&quot;
                    : [ { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Ngan&quot;, &quot;given&quot; : &quot;Mei Shan&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Tan&quot;, &quot;given&quot; :
                    &quot;Chee Wei&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy Reviews&quot;,
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2012&quot; ] ] }, &quot;page&quot; :
                    &quot;634-647&quot;, &quot;title&quot; : &quot;Assessment of economic
                    viability for PV/wind/diesel hybrid energy system in southern Peninsular
                    Malaysia&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;16&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=db7c55a7-38fa-4196-9b7f-34f65acde49b&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Ngan
                    &amp; Tan, 2012)&quot;, &quot;manualFormatting&quot; : &quot;Ngan &amp;
                    Tan&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Ngan &amp; Tan,
                    2012)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Ngan &amp; Tan,
                    2012)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Ngan &amp; Tan</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2012</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Malaysia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:33">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1088/1748-9326/8/3/035001&quot;,
                    &quot;ISBN&quot; : &quot;1748-9326&quot;, &quot;ISSN&quot; :
                    &quot;1748-9326&quot;, &quot;abstract&quot; : &quot;One purpose of wind
                    turbines is to provide pollution-free electric power at a reasonable price in
                    an environmentally sound way. In this focus issue the latest research on the
                    environmental impact of wind farms is presented. Offshore wind farms affect
                    the marine fauna in both positive and negative ways. For example, some farms
                    are safe havens for porpoises while other farms show fewer harbor porpoises
                    even after ten years. Atmospheric computer experiments are carried out to
                    investigate the possible impact and resource of future massive installations
                    of wind turbines. The following questions are treated. What is the global
                    capacity for energy production by the wind?Will the added turbulence and
                    reduced wind speeds generated by massive wind farms cool or heat the surface?
                    Can wind farms affect precipitation? It is also shown through life-cycle
                    analysis how wind energy can reduce the atmospheric emission of eight air
                    pollutants. Finally, noise generation and its impact on humans are studied.
                    Keywords:&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Mann&quot;, &quot;given&quot; :
                    &quot;J&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Teilmann&quot;, &quot;given&quot; : &quot;J&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Environmental Research Letters&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2013&quot; ] ] }, &quot;page&quot; : &quot;035001&quot;,
                    &quot;title&quot; : &quot;Environmental impact of wind energy&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;8&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=e3fdc2b8-cc5a-434d-9b3a-db6efad54279&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Mann
                    &amp; Teilmann, 2013)&quot;, &quot;manualFormatting&quot; : &quot;Mann &amp;
                    Teilmann&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Mann &amp;
                    Teilmann, 2013)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Mann
                    &amp; Teilmann, 2013)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot;
                    : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Mann &amp; Teilmann</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2013</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Denmark</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:34">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2011.09.024&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;Wind energy, commonly recognized to be a clean
                    and environmentally friendly renewable energy resource that can reduce our
                    dependency on fossil fuels, has developed rapidly in recent years. Its mature
                    technology and comparatively low cost make it promising as an important
                    primary energy source in the future. However, there are potential
                    environmental impacts due to the installation and operation of the wind
                    turbines that cannot be ignored. This paper aims to provide an overview of
                    world wind energy scenarios, the current status of wind turbine development,
                    development trends of offshore wind farms, and the environmental and climatic
                    impact of wind farms. The wake effect of wind turbines and modeling studies
                    regarding this effect are also reviewed.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Leung&quot;, &quot;given&quot; : &quot;Dennis Y.C.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Yang&quot;, &quot;given&quot; :
                    &quot;Yuan&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2012&quot; ] ] }, &quot;page&quot; :
                    &quot;1031-1039&quot;, &quot;title&quot; : &quot;Wind energy development and
                    its environmental impact: A review&quot;, &quot;type&quot; :
                    &quot;article-journal&quot;, &quot;volume&quot; : &quot;16&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=ab6e961f-ab82-48e0-8b69-84fd6d3af97d&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Leung
                    &amp; Yang, 2012)&quot;, &quot;manualFormatting&quot; : &quot;Leung &amp;
                    Yang&quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Leung &amp; Yang,
                    2012)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Leung &amp;
                    Yang, 2012)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Leung &amp; Yang</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2012</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">China</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:35">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Augusta&amp;Co&quot;, &quot;given&quot; : &quot;&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2016&quot; ] ] },
                    &quot;publisher-place&quot; : &quot;London, UK&quot;, &quot;title&quot; :
                    &quot;System indicators for wind power&quot;, &quot;type&quot; :
                    &quot;speech&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=db38a36e-5737-4305-8a8f-7b3898d1c6d3&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Augusta&amp;Co, 2016)&quot;, &quot;manualFormatting&quot; :
                    &quot;Augusta&amp;Co &quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Augusta&amp;Co, 2016)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Augusta&amp;Co, 2016)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Augusta&amp;Co </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:36">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Sciences</span><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2007</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                    italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:37">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1016/j.rser.2013.11.019&quot;,
                    &quot;ISBN&quot; : &quot;1364-0321&quot;, &quot;ISSN&quot; :
                    &quot;13640321&quot;, &quot;abstract&quot; : &quot;Of all the renewable
                    energy sources (RESs) - except direct solar heat and light - wind energy is
                    believed to have the least adverse environmental impacts. It is also one of
                    the RES which has become economically affordable much before several other
                    RESs have. As a result, next to biomass (and excluding large hydro), wind
                    energy is the RES being most extensively tapped by the world at present.
                    Despite carrying the drawback of intermittency, wind energy has found favor
                    due to its perceived twin virtues of relatively lesser production cost and
                    environment-friendliness. But with increasing use of turbines for harnessing
                    wind energy, the adverse environmental impacts of this RES are increasingly
                    coming to light. The present paper summarizes the current understanding of
                    these impacts and assesses the challenges they are posing. One among the
                    major hurdles has been the NYMBI (not in my backyard) syndrome due to which
                    there is increasing emphasis on installing windfarms several kilometers
                    offshore. But such moves have serious implications for marine life which is
                    already under great stress due to impacts of overfishing, marine pollution,
                    global warming, ozone hole and ocean acidification. Evidence is also emerging
                    that the adverse impacts of wind power plants on wildlife, especially birds
                    and bats, are likely to be much greater than is reflected in the hitherto
                    reported figures of individuals killed per turbine. Likewise recent findings
                    on the impact of noise and flicker generated by the wind turbines indicate
                    that these can have traumatic impacts on individuals who have certain
                    predispositions. But the greatest of emerging concerns is the likely impact
                    of large wind farms on the weather, and possibly the climate. The prospects
                    of wind energy are discussed in the backdrop of these and other rising
                    environmental concerns. ?? ?? 2013 Elsevier Ltd. All rights reserved.&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Tabassum&quot;, &quot;given&quot; :
                    &quot;A.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Premalatha&quot;, &quot;given&quot; : &quot;M.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Abbasi&quot;, &quot;given&quot; :
                    &quot;Tasneem&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; : &quot;Abbasi&quot;,
                    &quot;given&quot; : &quot;S. A.&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; } ], &quot;container-title&quot; : &quot;Renewable and
                    Sustainable Energy Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2014&quot; ] ] },
                    &quot;page&quot; : &quot;270-288&quot;, &quot;title&quot; : &quot;Wind energy:
                    Increasing deployment, rising environmental concerns&quot;, &quot;type&quot;
                    : &quot;article-journal&quot;, &quot;volume&quot; : &quot;31&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=360a3460-c3cd-4450-8fcb-62f19a0d5175&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Tabassum, Premalatha, Abbasi, &amp; Abbasi, 2014)&quot;, &quot;manualFormatting&quot;
                    : &quot;Tabassum &amp; Premalatha &quot;, &quot;plainTextFormattedCitation&quot;
                    : &quot;(Tabassum, Premalatha, Abbasi, &amp; Abbasi, 2014)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Tabassum, Premalatha,
                    Abbasi, &amp; Abbasi, 2014)&quot; }, &quot;properties&quot; : {
                    &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Tabassum &amp; Premalatha </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2014</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">India</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:38">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2011.02.024&quot;, &quot;ISBN&quot; :
                    &quot;1364-0321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;Since the beginning of industrialization, energy
                    consumption has increased far more rapidly than the number of people on the
                    planet. It is known that the consumption of energy is amazingly high and the
                    fossil based resources may not be able to provide energy for the whole world
                    as these resources will be used up in the near future. Hence, renewable
                    energy expected to play an important role in handling the demand of the
                    energy required along with environmental pollution prevention. The impacts of
                    the wind energy on the environment are important to be studied before any
                    wind firm construction or a decision is made. Although many countries showing
                    great interest towards renewable or green energy generation, negative
                    perception of wind energy is increasingly evident that may prevent the
                    installation of the wind energy in some countries. This paper compiled latest
                    literatures in terms of thesis (MS and PhD), journal articles, conference
                    proceedings, reports, books, and web materials about the environmental impacts
                    of wind energy. This paper also includes the comparative study of wind
                    energy, problems, solutions and suggestion as a result of the implementation
                    of wind turbine. Positive and negative impacts of wind energy have been
                    broadly explained as well. It has been found that this source of energy will
                    reduce environmental pollution and water consumption. However, it has noise
                    pollution, visual interference and negative impacts on wildlife. ?? 2011
                    Elsevier Ltd. All rights reserved.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Saidur&quot;, &quot;given&quot; : &quot;R.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Rahim&quot;, &quot;given&quot; :
                    &quot;N. A.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Islam&quot;, &quot;given&quot; : &quot;M. R.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Solangi&quot;, &quot;given&quot; :
                    &quot;K. H.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2011&quot; ] ] }, &quot;page&quot; :
                    &quot;2423-2430&quot;, &quot;title&quot; : &quot;Environmental impact of wind
                    energy&quot;, &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot;
                    : &quot;15&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=35f9b32d-201d-44f3-ac21-ccf592d8ec3c&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Saidur, Rahim, Islam, &amp; Solangi, 2011)&quot;,
                    &quot;manualFormatting&quot; : &quot;Saidur &amp; Rahim&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Saidur, Rahim, Islam, &amp;
                    Solangi, 2011)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Saidur, Rahim, Islam, &amp; Solangi, 2011)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Saidur &amp; Rahim</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2011</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Malaysia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:39">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.renene.2014.10.074&quot;, &quot;ISBN&quot; :
                    &quot;0960-1481&quot;, &quot;ISSN&quot; : &quot;09601481&quot;,
                    &quot;abstract&quot; : &quot;Recognized as one of the most mature renewable
                    energy technologies, wind energy has been developing rapidly in recent years.
                    Many countries have shown interest in utilizing wind power, but they are
                    concerned about the environmental impacts of the wind farms. The continuous
                    growth of the wind energy industry in many parts of the world, especially in
                    some developing countries and ecologically vulnerable regions, necessitates a
                    comprehensive understanding of wind farm induced environmental impacts. The
                    environmental issues caused by wind farms were reviewed in this paper by
                    summarizing existing studies. Available mitigation measures to minimize these
                    adverse environmental impacts were discussed in this document. The intention
                    of this paper is to provide state-of-the-art knowledge about environmental
                    issues associated with wind energy development as well as strategies to
                    mitigate environmental impacts to wind energy planners and developers.&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Dai&quot;, &quot;given&quot; :
                    &quot;Kaoshan&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Bergot&quot;, &quot;given&quot; : &quot;Anthony&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Liang&quot;, &quot;given&quot; :
                    &quot;Chao&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Xiang&quot;, &quot;given&quot; : &quot;Wei-Ning&quot;, &quot;non-dropping-particle&quot;
                    : &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Huang&quot;, &quot;given&quot; :
                    &quot;Zhenhua&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable Energy&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2015&quot; ] ] }, &quot;page&quot; : &quot;911-921&quot;,
                    &quot;title&quot; : &quot;Environmental issues associated with wind energy
                    \u2013 A review&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;75&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=84d1be15-07c1-4e19-8aee-ff3e8d1ba6b6&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Dai,
                    Bergot, Liang, Xiang, &amp; Huang, 2015)&quot;, &quot;manualFormatting&quot;
                    : &quot;Dai &amp; Bergot &quot;, &quot;plainTextFormattedCitation&quot; :
                    &quot;(Dai, Bergot, Liang, Xiang, &amp; Huang, 2015)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Dai, Bergot, Liang, Xiang, &amp;
                    Huang, 2015)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Dai &amp; Bergot </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2015</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">China/USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:40">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1890/1540-9295(2007)5[315:EIOWED]2.0.CO;2&quot;,
                    &quot;ISBN&quot; : &quot;1937-2817&quot;, &quot;ISSN&quot; :
                    &quot;15409295&quot;, &quot;abstract&quot; : &quot;At a time of growing
                    concern over the rising costs and long-tern environmental impacts of the use
                    of fossil fuels and nuclear energy, wind energy has become an increasingly
                    important sector of the electrical power industry, largely because it has
                    been promoted as being emission-free and is supported by government subsidies
                    and tax credits. However, large numbers of bats are killed at utility-scale
                    wind energy facilities, especially along forested ridgetops in the eastern
                    United States. These fatalities raise important concerns about cumulative
                    impacts of the proposed wind energy development on bat populations. This
                    paper summarizes evidence of bat fatalities at wind energy facilities in the
                    US, makes projections of cumulative fatalities of bats in the Mid-Atlantic
                    Highlands, identifies research needs, and proposes hypotheses to better
                    inform researchers, developers, decision makers, and other stakeholders, and
                    to help minimize adverse effects of wind energy development.&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Kunz&quot;, &quot;given&quot; : &quot;Thomas
                    H.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Arnett&quot;, &quot;given&quot; : &quot;Edward B.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Erickson&quot;, &quot;given&quot; :
                    &quot;Wallace P.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Hoar&quot;, &quot;given&quot; : &quot;Alexander R.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Johnson&quot;, &quot;given&quot; :
                    &quot;Gregory D.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Larkin&quot;, &quot;given&quot; : &quot;Ronald P.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Strickland&quot;, &quot;given&quot;
                    : &quot;M. Dale&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Thresher&quot;, &quot;given&quot; : &quot;Robert W.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Turtle&quot;, &quot;given&quot; :
                    &quot;Merlin D.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Frontiers in Ecology and the
                    Environment&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; :
                    { &quot;date-parts&quot; : [ [ &quot;2007&quot; ] ] }, &quot;page&quot; :
                    &quot;315-324&quot;, &quot;title&quot; : &quot;Ecological impacts of wind
                    energy development on bats: Questions, research needs, and hypotheses&quot;,
                    &quot;type&quot; : &quot;article&quot;, &quot;volume&quot; : &quot;5&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=26d9e85a-5da0-43f0-b596-c220b30fc274&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Kunz
                    et al., 2007)&quot;, &quot;manualFormatting&quot; : &quot;Kunz et al.&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Kunz et al., 2007)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Kunz et al., 2007)&quot; }, &quot;properties&quot;
                    : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Kunz et al.</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2007</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:41">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;ISBN&quot; : &quot;2076-2909&quot;,
                    &quot;abstract&quot; : &quot;This paper presents an overview of economic metrics
                    for wind energy projects. The attractiveness of the proposed wind energy can
                    vary considerably between evaluation of the private and public sector. The
                    financing structure is very important influencing factor for the
                    attractiveness of wind energy project. In many cases, the economic activities
                    practiced by economic agents of financing the project in order to earn
                    sufficient income to meet the investors\u2018 needs and other economic agents
                    involved. They are also characterized the assessment indicators and
                    economic-financial management of projects implemented renewable energy
                    exclusively for onshore wind energy systems. All indicators presented should
                    be used in economic engineering analysis to meet specific information needs
                    for decision making in situations of investment opportunity for renewable
                    energy projects.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Oliveira&quot;, &quot;given&quot; : &quot;W.S.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Fernandes&quot;, &quot;given&quot; :
                    &quot;a.J.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Gouveia&quot;, &quot;given&quot; : &quot;J.J.B.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;International Journal of Energy and Environment&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2011&quot; ] ] }, &quot;page&quot; : &quot;1013-1038&quot;,
                    &quot;title&quot; : &quot;Economic metrics for wind energy projects&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;3&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=21336e83-8ee4-4987-a23c-07802b84832f&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Oliveira, Fernandes, &amp; Gouveia, 2011)&quot;,
                    &quot;manualFormatting&quot; : &quot;Oliveira &amp; Fernandes&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Oliveira, Fernandes, &amp;
                    Gouveia, 2011)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Oliveira, Fernandes, &amp; Gouveia, 2011)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Oliveira &amp; Fernandes</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2011</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Portugal</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:42">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Zhang&quot;, &quot;given&quot; : &quot;Jie; Chowdhury Souma&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2010&quot; ] ] }, &quot;publisher-place&quot; : &quot;Texas&quot;,
                    &quot;title&quot; : &quot;Economic Evaluation of Wind Farms Based on Cost of
                    Energy Optimization&quot;, &quot;type&quot; : &quot;report&quot; },
                    &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=c7db7a28-7bdc-406e-9538-4c1badbc0a10&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(J. C.
                    S. Zhang, 2010)&quot;, &quot;manualFormatting&quot; : &quot;Zhang&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(J. C. S. Zhang, 2010)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(J. C. S. Zhang, 2010)&quot;
                    }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot;
                    :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Zhang</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2010</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:43">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.enpol.2013.03.010&quot;, &quot;ISBN&quot; :
                    &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;,
                    &quot;abstract&quot; : &quot;Mandates for renewable energy lead to siting
                    disputes, because meeting the mandates requires the development of renewable
                    energy production facilities. Proposals for one common form of renewable
                    energy, commercial wind farms, are frequently met with forceful local
                    opposition. Dissatisfied with simplistic explanations for this opposition
                    (i.e., NIMBY), social scientists have urged a more nuanced understanding of
                    public attitudes towards wind energy and other renewables. Based on a survey
                    of residents of coastal Michigan, this article explores the role of general
                    values and beliefs in shaping attitudes towards the potential development of commercial
                    wind energy projects in or near respondents' communities. Structural equation
                    modeling reveals that support of commercial wind energy depends largely on a
                    belief that wind farms will provide economic benefits to the community.
                    Underlying values have substantial and important indirect effects on beliefs
                    regarding the likely economic outcomes of wind farm development. Altruistic
                    values buoy wind energy attitudes, while values of traditionalism diminish
                    wind energy support. The pivotal role of values in attitudes towards
                    renewables lends support for more participatory development processes. ??
                    2013 Elsevier Ltd.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Bidwell&quot;, &quot;given&quot; : &quot;David&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Energy Policy&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2013&quot; ] ] },
                    &quot;page&quot; : &quot;189-199&quot;, &quot;title&quot; : &quot;The role of
                    values in public beliefs and attitudes towards commercial wind energy&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;58&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=601a5f3f-8f08-479e-85b0-ed37a6662133&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Bidwell, 2013)&quot;, &quot;manualFormatting&quot; : &quot;Bidwell
                    &quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Bidwell, 2013)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Bidwell, 2013)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Bidwell </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2013</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">USA</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;</span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:44">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.enpol.2003.09.003&quot;, &quot;ISBN&quot; :
                    &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;, &quot;abstract&quot;
                    : &quot;During the last 3 yr (1999-2002) a significant increase in the
                    utilization of the existing wind power has taken place in Greece, after a
                    long period (1993-1998) of inactivity. Unfortunately, the largest part of new
                    scheduled installations is concentrated in a few geographical regions, in an
                    attempt to take advantage of the existing electrical network capabilities and
                    the acceptable infrastructure situation. This significant concentration of
                    very large size wind turbines, rapidly installed in a few geographical areas,
                    led to serious reactions from the local population, which in some cases even
                    led to the complete cancellation of the wind power projects. In this context,
                    an extensive study is conducted, concerning the public attitude towards wind
                    energy applications, in several island and mainland Greek territories
                    possessing high wind potential and investment interest. The results obtained
                    significantly reveal acceptance of the existing wind parks, being, however,
                    rather against new installations. More specifically, in the Greek islands the
                    public attitude is clearly supportive, while in the Greek mainland the public
                    attitude is either divided or definitely against wind power applications. The
                    most troublesome outcome of this survey is the existence of a specific
                    minority that is strongly against wind energy applications, disregarding any
                    financial benefits. Among the primary conclusions drawn, one may underline
                    the necessity of additional public information regarding the wind energy
                    sector. ?? 2003 Elsevier Ltd. All rights reserved.&quot;, &quot;author&quot;
                    : [ { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Kaldellis&quot;, &quot;given&quot; : &quot;J. K.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Energy Policy&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot;
                    : { &quot;date-parts&quot; : [ [ &quot;2005&quot; ] ] }, &quot;page&quot; :
                    &quot;595-602&quot;, &quot;title&quot; : &quot;Social attitude towards wind
                    energy applications in Greece&quot;, &quot;type&quot; :
                    &quot;article-journal&quot;, &quot;volume&quot; : &quot;33&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=adae354a-e0da-4c36-8590-c5e71b17402e&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Kaldellis, 2005)&quot;, &quot;manualFormatting&quot; : &quot;Kaldellis&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Kaldellis, 2005)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Kaldellis, 2005)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Kaldellis</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2005</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Greece</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:45">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.enpol.2006.12.001&quot;, &quot;ISBN&quot; : &quot;03014215,
                    18736777&quot;, &quot;ISSN&quot; : &quot;03014215&quot;, &quot;PMID&quot; :
                    &quot;17329441&quot;, &quot;abstract&quot; : &quot;This paper introduces the
                    special issue on Social Acceptance of Renewable Energy Innovation. It is a
                    collection of best papers presented at an international research conference
                    held in Tramelan (Switzerland) in February 2006. While there are ambitious
                    government targets to increase the share of renewable energy in many
                    countries, it is increasingly recognized that social acceptance may be a
                    constraining factor in achieving this target. This is particularly apparent
                    in the case of wind energy, which has become a subject of contested debates
                    in several countries largely due to its visual impact on landscapes. This
                    paper introduces three dimensions of social acceptance, namely
                    socio-political, community and market acceptance. Factors influencing
                    socio-political and community acceptance are increasingly recognized as being
                    important for understanding the apparent contradictions between general
                    public support for renewable energy innovation and the difficult realization
                    of specific projects. The third dimension, market acceptance, has received
                    less attention so far and provides opportunities for further research,
                    particularly from management scholars. ?? 2006.&quot;, &quot;author&quot; : [
                    { &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Wustenhagen&quot;, &quot;given&quot; : &quot;Rolf&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Wolsink&quot;, &quot;given&quot; :
                    &quot;Maarten&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot;
                    : false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot;
                    : &quot;&quot;, &quot;family&quot; : &quot;Burer&quot;, &quot;given&quot; :
                    &quot;Mary Jean&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Energy Policy&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2007&quot; ] ] }, &quot;page&quot; : &quot;2683-2691&quot;,
                    &quot;title&quot; : &quot;Social acceptance of renewable energy innovation:
                    An introduction to the concept&quot;, &quot;type&quot; :
                    &quot;article-journal&quot;, &quot;volume&quot; : &quot;35&quot; },
                    &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=7d698176-9d45-4055-9b12-17da222cd6fc&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Wustenhagen, Wolsink, &amp; Burer, 2007)&quot;, &quot;manualFormatting&quot;
                    : &quot;Wustenhagen &amp; Wolsink&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Wustenhagen, Wolsink, &amp;
                    Burer, 2007)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Wustenhagen, Wolsink, &amp; Burer, 2007)&quot; }, &quot;properties&quot;
                    : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Wustenhagen &amp; Wolsink</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2007</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Switzerland</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:46">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; : &quot;10.1016/j.rser.2015.08.041&quot;,
                    &quot;ISSN&quot; : &quot;18790690&quot;, &quot;abstract&quot; : &quot;This
                    study investigates methods for increasing the local social acceptance of
                    onshore wind projects in France. It is based on input from semi-structured
                    research interviews and insight from a French wind energy company. That
                    company had noted that a lack of local social acceptance of wind projects
                    increased the risk of failures, cost escalation, and project delays. In this
                    study, we first summarize recent scholarship concerning local social opposition
                    and acceptance of wind energy through a selected literature review and case
                    studies of wind projects throughout Europe. We then use this data to create
                    guidelines on how to increase the likelihood of social acceptance for onshore
                    wind project development in France, and to inform current debates in the
                    energy studies literature over the acceptance of wind energy and energy
                    transitions.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Enevoldsen&quot;, &quot;given&quot;
                    : &quot;Peter&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Sovacool&quot;, &quot;given&quot; : &quot;Benjamin K.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Renewable and Sustainable Energy Reviews&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2016&quot; ] ] }, &quot;page&quot; : &quot;178-184&quot;,
                    &quot;title&quot; : &quot;Examining the social acceptance of wind energy:
                    Practical guidelines for onshore wind project development in France&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;53&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=7b461165-f3f0-4055-80ef-28c945d6f3c7&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Enevoldsen &amp; Sovacool, 2016)&quot;, &quot;manualFormatting&quot; :
                    &quot;Enevoldsen &amp; Sovacool&quot;, &quot;plainTextFormattedCitation&quot;
                    : &quot;(Enevoldsen &amp; Sovacool, 2016)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Enevoldsen &amp; Sovacool,
                    2016)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Enevoldsen &amp; Sovacool</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2016</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Denmark</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:47">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.enpol.2009.10.055&quot;, &quot;ISBN&quot; :
                    &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;,
                    &quot;abstract&quot; : &quot;Sustainability assessment of energy technologies
                    oftentimes fails to account for social repercussions and long-term negative
                    effects and benefits of energy systems. As part of the NEEDS11The New Energy
                    Externalities Development for Sustainability (NEEDS) Project was supported by
                    the Directorate General for Research of the European Commission in the
                    context of the 6th Framework Program. The objective of the NEEDS Project was
                    to evaluate the full costs and benefits of energy policies and of future
                    energy systems, both at the level of individual countries and for the
                    enlarged EU as a whole. In this context NEEDS refined and developed an
                    externalities methodology already set up in the ExternE project
                    (www.externe.info). The indicator development and assessment, which is
                    described in this article was set up within the limitations and freedom of
                    this externality methodology. Results have to be interpreted by considering
                    this context. For further information see: www.needs-project.org. project, an
                    expert-based set of social indicators was developed and verified by the
                    European stakeholders with the objective of contributing in the development
                    of social indicators for the assessment of societal effects of energy
                    systems. For this purpose, scientific experts from four sample countries
                    France, Germany, Italy and Switzerland were interviewed to assess 16
                    different energy systems on a specific stakeholder reviewed indicator set.
                    The indicator set covers the four main criteria: \&quot;security and
                    reliability of energy provision; \&quot;political stability and legitimacy\&quot;;
                    \&quot;social and individual risks\&quot; and \&quot;quality of life\&quot;.
                    This article will review the process of indicator development and assessment
                    and highlight results for today's most prominent and future energy
                    technologies and some likely to make an impact in the future. Expert
                    judgments varied considerably between countries and energy systems, with the
                    exception of renewable technologies, which were overall positively assessed
                    on almost all evaluation criteria. ?? 2009 Elsevier Ltd. All rights
                    reserved.&quot;, &quot;author&quot; : [ { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Gallego Carrera&quot;,
                    &quot;given&quot; : &quot;Diana&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Mack&quot;, &quot;given&quot; :
                    &quot;Alexander&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Energy Policy&quot;, &quot;id&quot; :
                    &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                    &quot;2010&quot; ] ] }, &quot;page&quot; : &quot;1030-1039&quot;,
                    &quot;title&quot; : &quot;Sustainability assessment of energy technologies
                    via social indicators: Results of a survey among European energy
                    experts&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                    &quot;volume&quot; : &quot;38&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=b1b89836-bc0f-4ff5-a122-cc844b6f43f1&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Gallego Carrera &amp; Mack, 2010)&quot;, &quot;manualFormatting&quot;
                    : &quot;Gallego &amp; Carrera &quot;, &quot;plainTextFormattedCitation&quot;
                    : &quot;(Gallego Carrera &amp; Mack, 2010)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Gallego Carrera &amp; Mack,
                    2010)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                    &quot;schema&quot; : &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Gallego &amp; Carrera </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2010</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Germany</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:48">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.enpol.2014.08.035&quot;, &quot;ISBN&quot; :
                    &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;,
                    &quot;abstract&quot; : &quot;Social acceptance is necessary for widespread
                    adoption of new renewable energy technologies. A lack of social acceptance by
                    local community residents is a barrier to increasing the renewable energy mix
                    and targets in Australia. This study empirically evaluated predictor
                    importance of key constructs of social acceptance, using responses from a
                    sample of 226 survey respondents in Australia. Regression analysis suggest
                    that 'Concerns with wind turbines' was the predictor most strongly correlated
                    with Social Acceptance, followed by'Annoyance with wind turbines', and then
                    'Consultation with stakeholders'. Implications of the study and
                    recommendations for consideration by various interest groups (such as policy
                    makers, and potential entrepreneurs) are discussed. This research contributes
                    to theory building rather than theory testing of social acceptance of wind
                    energy development.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; : &quot;D'Souza&quot;,
                    &quot;given&quot; : &quot;Clare&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Yiridoe&quot;, &quot;given&quot; : &quot;Emmanuel K.&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; } ], &quot;container-title&quot; :
                    &quot;Energy Policy&quot;, &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;issued&quot; : { &quot;date-parts&quot; : [ [ &quot;2014&quot; ] ] },
                    &quot;page&quot; : &quot;262-270&quot;, &quot;title&quot; : &quot;Social
                    acceptance of wind energy development and planning in rural communities of
                    Australia: A consumer analysis&quot;, &quot;type&quot; :
                    &quot;article-journal&quot;, &quot;volume&quot; : &quot;74&quot; },
                    &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=c2c840ac-a08b-4636-a4f3-69d7bc6317fa&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(D\u2019Souza &amp; Yiridoe, 2014)&quot;, &quot;manualFormatting&quot;
                    : &quot;D\u2019Souza &amp; Yiridoe&quot;, &quot;plainTextFormattedCitation&quot;
                    : &quot;(D\u2019Souza &amp; Yiridoe, 2014)&quot;, &quot;previouslyFormattedCitation&quot;
                    : &quot;(D\u2019Souza &amp; Yiridoe, 2014)&quot; }, &quot;properties&quot; :
                    { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">D’Souza &amp; Yiridoe</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2014</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Australia</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:49">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;
                    mso-no-proof:yes">Khorsand &amp; Kormos</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2015</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Canada</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:50">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.biocon.2006.02.011&quot;, &quot;ISBN&quot; :
                    &quot;0006-3207&quot;, &quot;ISSN&quot; : &quot;00063207&quot;,
                    &quot;PMID&quot; : &quot;1928&quot;, &quot;abstract&quot; : &quot;Despite
                    their environmental benefits in generating electricity without emission of
                    'greenhouse' gases, wind farms have attracted controversy with regard to
                    their impacts on birds, especially golden eagles Aquila chrysaetos. Evidence
                    from USA studies suggest eagle fatalities through collision with turbines may
                    be the main potential impact whereas for breeding eagles in Scotland,
                    displacement from wind farm areas (indirect habitat loss) may be the primary
                    impact. In this study, we examined the co-occurrence potential for golden
                    eagles and wind farms in Scotland by documenting the spatial association
                    between wind farm proposals and breeding eagle territories and areas
                    potentially suitable for non-breeding eagles. Although there were records for
                    over 500 wind farm proposals at various stages of development, relatively few
                    coincided with eagle territories (ca. 4% of territories had a proposal within
                    3 km of territory centre). Similarly, only 2% of habitat predicted to be
                    suitable for non-breeding eagles overlapped with proposed or installed wind
                    farm areas. Moreover, estimates of the potential for electricity generation
                    from all wind farm proposals, with respect to government targets for
                    renewable energy supplies, suggested most proposals were unlikely to be
                    constructed. We conclude that in comparison with other constraints on
                    Scotland's golden eagles, notably persecution, wind farms should not
                    represent a serious concern if best practice in planning their location and
                    minimising their impact are maintained. Potential future regional pressures
                    on breeding eagles from wind farms are highlighted, however, and uncertainty
                    of impact with respect to displacement or collision fatalities requires
                    continued scrutiny. \u00a9 2006 Elsevier Ltd. All rights reserved.&quot;,
                    &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Fielding&quot;, &quot;given&quot; : &quot;Alan
                    H.&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; }, {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Whitfield&quot;, &quot;given&quot; : &quot;D. Philip&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;McLeod&quot;, &quot;given&quot; :
                    &quot;David R A&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Biological Conservation&quot;,
                    &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2006&quot; ] ] }, &quot;page&quot; :
                    &quot;359-369&quot;, &quot;title&quot; : &quot;Spatial association as an
                    indicator of the potential for future interactions between wind energy
                    developments and golden eagles Aquila chrysaetos in Scotland&quot;,
                    &quot;type&quot; : &quot;article-journal&quot;, &quot;volume&quot; :
                    &quot;131&quot; }, &quot;uris&quot; : [
                    &quot;http://www.mendeley.com/documents/?uuid=50955f20-4d22-4ed4-afbe-51b2b338d254&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                    &quot;(Fielding, Whitfield, &amp; McLeod, 2006)&quot;, &quot;manualFormatting&quot;
                    : &quot;Fielding &amp; Whitfield&quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Fielding, Whitfield, &amp;
                    McLeod, 2006)&quot;, &quot;previouslyFormattedCitation&quot; :
                    &quot;(Fielding, Whitfield, &amp; McLeod, 2006)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Fielding &amp; Whitfield</span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2006</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US;mso-no-proof:yes">UK</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span></span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:51">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-begin;mso-field-lock:yes'></span>ADDIN CSL_CITATION
                    { &quot;citationItems&quot; : [ { &quot;id&quot; : &quot;ITEM-1&quot;,
                    &quot;itemData&quot; : { &quot;DOI&quot; :
                    &quot;10.1016/j.rser.2007.05.002&quot;, &quot;ISBN&quot; :
                    &quot;13640321&quot;, &quot;ISSN&quot; : &quot;13640321&quot;,
                    &quot;abstract&quot; : &quot;Wind energy represents one of the most important
                    renewable resources. However, despite the fact that wind farms are
                    represented as environmentally friendly projects, they frequently encounter
                    public resistance. One of the main criticisms of wind farm construction
                    projects is directed at their poor aesthetic integration into the landscape.
                    This work develops an indicator to assess the magnitude of the objective
                    aesthetic impact on the landscape caused by the installation of the wind
                    farm. The indicator combines measures of visibility, colour, fractality and
                    continuity which can be taken from photographs. Value functions are
                    constructed for each variable and incorporated into the indicator. This
                    indicator has been used to calculate the objective aesthetic impact of five
                    wind farms. Comparison of the indicator results with a population survey
                    shows that the indicator correctly represents the order of impact as
                    perceived by the population sample, and is thus an appropriate objective
                    measure of aesthetic impact of wind farms. \u00a9 2007 Elsevier Ltd. All
                    rights reserved.&quot;, &quot;author&quot; : [ {
                    &quot;dropping-particle&quot; : &quot;&quot;, &quot;family&quot; :
                    &quot;Torres Sibille&quot;, &quot;given&quot; : &quot;Ana del Carmen&quot;,
                    &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                    false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                    &quot;&quot;, &quot;family&quot; : &quot;Cloquell-Ballester&quot;, &quot;given&quot;
                    : &quot;V\u00edctor Andr\u00e9s&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Cloquell-Ballester&quot;, &quot;given&quot; :
                    &quot;Vicente Agust\u00edn&quot;, &quot;non-dropping-particle&quot; :
                    &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                    &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                    &quot;family&quot; : &quot;Darton&quot;, &quot;given&quot; :
                    &quot;Richard&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                    &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                    &quot;container-title&quot; : &quot;Renewable and Sustainable Energy
                    Reviews&quot;, &quot;id&quot; : &quot;ITEM-1&quot;, &quot;issued&quot; : {
                    &quot;date-parts&quot; : [ [ &quot;2009&quot; ] ] }, &quot;page&quot; :
                    &quot;40-66&quot;, &quot;title&quot; : &quot;Development and validation of a
                    multicriteria indicator for the assessment of objective aesthetic impact of
                    wind farms&quot;, &quot;type&quot; : &quot;article&quot;, &quot;volume&quot;
                    : &quot;13&quot; }, &quot;uris&quot; : [ &quot;http://www.mendeley.com/documents/?uuid=5bccc0d9-e72d-49bf-b951-c4e3c6ae9473&quot;
                    ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; : &quot;(Torres
                    Sibille, Cloquell-Ballester, Cloquell-Ballester, &amp; Darton, 2009)&quot;,
                    &quot;manualFormatting&quot; : &quot;Torres Sibille &quot;,
                    &quot;plainTextFormattedCitation&quot; : &quot;(Torres Sibille,
                    Cloquell-Ballester, Cloquell-Ballester, &amp; Darton, 2009)&quot;,
                    &quot;previouslyFormattedCitation&quot; : &quot;(Torres Sibille,
                    Cloquell-Ballester, Cloquell-Ballester, &amp; Darton, 2009)&quot; },
                    &quot;properties&quot; : { &quot;noteIndex&quot; : 0 }, &quot;schema&quot; :
                    &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                    }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes">Torres Sibille </span></span><!--[if supportFields]><span
                    style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                    style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">2009</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                    windowtext;mso-ansi-language:EN-US">Spain</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-spacerun:yes">&nbsp;&nbsp; </span>×</span><span style="font-size:9.0pt;
                    mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                    mso-ansi-language:EN-US"><o:p></o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:52">
                    <td width="26%" nowrap="" colspan="2" valign="top" style="width:26.24%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.6%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.02%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.16%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.06%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.08%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.1%;border:none;padding:
                    0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.12%;border:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                    minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow:53;mso-yfti-lastrow:yes;mso-row-margin-right:1.02%">
                    <td width="23%" nowrap="" valign="top" style="width:23.88%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="6%" colspan="2" valign="top" style="width:6.96%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="12%" colspan="2" valign="top" style="width:12.18%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.68%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                    &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                    font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.96%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="4%" colspan="2" valign="top" style="width:4.92%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.3%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="8%" colspan="2" valign="top" style="width:8.2%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.26%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.54%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="5%" colspan="2" valign="top" style="width:5.56%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td width="9%" colspan="2" valign="top" style="width:9.52%;border-top:double windowtext 2.25pt;
                    border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                    padding:0in 5.4pt 0in 5.4pt">
                    <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                    2"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                    mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                    </td>
                    <td style="mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in" width="1%"><p class="MsoNormal">&nbsp;</p></td>
                    </tr>
                    <!--[if !supportMisalignedColumns]-->
                    <tr height="0">
                    <td width="140" style="border:none"></td>
                    <td width="14" style="border:none"></td>
                    <td width="27" style="border:none"></td>
                    <td width="12" style="border:none"></td>
                    <td width="59" style="border:none"></td>
                    <td width="12" style="border:none"></td>
                    <td width="16" style="border:none"></td>
                    <td width="10" style="border:none"></td>
                    <td width="21" style="border:none"></td>
                    <td width="15" style="border:none"></td>
                    <td width="14" style="border:none"></td>
                    <td width="15" style="border:none"></td>
                    <td width="16" style="border:none"></td>
                    <td width="15" style="border:none"></td>
                    <td width="34" style="border:none"></td>
                    <td width="15" style="border:none"></td>
                    <td width="11" style="border:none"></td>
                    <td width="14" style="border:none"></td>
                    <td width="9" style="border:none"></td>
                    <td width="17" style="border:none"></td>
                    <td width="7" style="border:none"></td>
                    <td width="19" style="border:none"></td>
                    <td width="24" style="border:none"></td>
                    <td width="4" style="border:none"></td>
                    </tr>
                    <!--[endif]-->
                </tbody></table>
                                    </div>
                                </ol>
                            </li>

                            <li>
                                <h2>Default Values Assumptions:</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    The PVDATA software allows users to select system default values which are fetched from our API directly to the user’s dashboard. Although we do prefer users entering their own unique input parameters to get a more bespoke output of their solar energy investment, we give the user the option of requesting for data they do not have or not too familiar with by clicking on our system default toggle on the PVDAT software. Table 3 below gives the source of the data.
                                    <p style="padding: 30px 0px; margin-top:0px; font-weight: bold;">
                                        Table 3: Default data 
                                    </p>
                                    <div style="overflow: auto;">
                                                                                            <table class="MsoTableMediumShading2Accent5" border="1" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:white;mso-background-themecolor:
                                            background1;border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 2.25pt;
                                            mso-border-bottom-alt:solid windowtext 2.25pt;mso-yfti-tbllook:1632;
                                            mso-padding-alt:0in 5.4pt 0in 5.4pt">
                                            <tbody><tr style="mso-yfti-irow:-1;mso-yfti-firstrow:yes;mso-yfti-lastfirstrow:yes">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border-top:solid windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                                            1"><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                                            mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US">Data<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><o:p></o:p></span></b></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border-top:solid windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:1"><b><span style="font-size:9.0pt;
                                            mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Number of
                                            Sources</span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border-top:solid windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:1"><b><span style="font-size:9.0pt;
                                            mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Main source
                                            Retrieved<span style="mso-spacerun:yes">&nbsp; </span></span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border-top:solid windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:1"><b><span style="font-size:9.0pt;
                                            mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Type of Storage
                                            on PVDATA</span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border-top:solid windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:1"><b><span style="font-size:9.0pt;
                                            mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Number of
                                            countries</span></b><b><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></b></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:0">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Solar
                                            cost per MW ($USD)</span><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">25</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;font-style:normal;
                                            mso-bidi-font-style:italic">B</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">loomberg</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Server</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Global</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:1">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Land
                                            size per MW (Ha)</span><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;font-style:normal;
                                            mso-bidi-font-style:italic">70</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;font-style:normal;
                                            mso-bidi-font-style:italic">NREL</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Server</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Global</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:2">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Photovoltaic
                                            Design</span><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                                            mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;font-style:normal;
                                            mso-bidi-font-style:italic">151</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;font-style:normal;
                                            mso-bidi-font-style:italic">NREL</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Server</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Global</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:3">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Financing
                                            structure</span><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                                            mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">214</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="SpellE"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic">PWc</span></span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Server</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Global</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:4">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Operation</span><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">51</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="SpellE"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic">Juwi</span></span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                                            windowtext;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"> Solar</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Server</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Global</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:5">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Live
                                            API Fetch</span><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;
                                            mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">1</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US;font-style:normal;
                                            mso-bidi-font-style:italic">Trading Economics</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Server</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US">Global</span></span><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:
                                            &quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-ansi-language:EN-US;
                                            font-style:normal;mso-bidi-font-style:italic"><o:p></o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:6">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border:none;padding:
                                            0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US"><o:p>&nbsp;</o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border:none;padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal"><span class="MsoSubtleEmphasis"><span style="font-size:
                                            9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;
                                            mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            </tr>
                                            <tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes">
                                            <td width="28%" nowrap="" valign="top" style="width:28.58%;border-top:double windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" style="margin-bottom:0in;line-height:normal;mso-yfti-cnfc:
                                            2"><!--[if supportFields]><span style='font-size:9.0pt;mso-fareast-font-family:
                                            "Malgun Gothic";mso-fareast-theme-font:minor-fareast;color:black;mso-color-alt:
                                            windowtext;mso-ansi-language:EN-US'><span style='mso-element:field-begin;
                                            mso-field-lock:yes'></span>ADDIN CSL_CITATION { &quot;citationItems&quot; : [
                                            { &quot;id&quot; : &quot;ITEM-1&quot;, &quot;itemData&quot; : {
                                            &quot;DOI&quot; : &quot;10.1016/S0301-4215(03)00241-6&quot;, &quot;ISBN&quot;
                                            : &quot;0301-4215&quot;, &quot;ISSN&quot; : &quot;03014215&quot;,
                                            &quot;abstract&quot; : &quot;Solar energy systems (photovoltaics, solar
                                            thermal, solar power) provide significant environmental benefits in
                                            comparison to the conventional energy sources, thus contributing, to the
                                            sustainable development of human activities. Sometimes however, their wide
                                            scale deployment has to face potential negative environmental implications.
                                            These potential problems seem to be a strong barrier for a further
                                            dissemination of these systems in some consumers. To cope with these problems
                                            this paper presents an overview of an Environmental Impact Assessment. We
                                            assess the potential environmental intrusions in order to ameliorate them
                                            with new technological innovations and good practices in the future power
                                            systems. The analysis provides the potential burdens to the environment,
                                            which include-during the construction, the installation and the demolition
                                            phases, as well as especially in the case of the central solar
                                            technologies-noise and visual intrusion, greenhouse gas emissions, water and
                                            soil pollution, energy consumption, labour accidents, impact on
                                            archaeological sites or on sensitive ecosystems, negative and positive
                                            socio-economic effects. ?? 2003 Elsevier Ltd. All rights reserved.&quot;,
                                            &quot;author&quot; : [ { &quot;dropping-particle&quot; : &quot;&quot;,
                                            &quot;family&quot; : &quot;Tsoutsos&quot;, &quot;given&quot; : &quot;Theocharis&quot;,
                                            &quot;non-dropping-particle&quot; : &quot;&quot;, &quot;parse-names&quot; :
                                            false, &quot;suffix&quot; : &quot;&quot; }, { &quot;dropping-particle&quot; :
                                            &quot;&quot;, &quot;family&quot; : &quot;Frantzeskaki&quot;,
                                            &quot;given&quot; : &quot;Niki&quot;, &quot;non-dropping-particle&quot; :
                                            &quot;&quot;, &quot;parse-names&quot; : false, &quot;suffix&quot; :
                                            &quot;&quot; }, { &quot;dropping-particle&quot; : &quot;&quot;,
                                            &quot;family&quot; : &quot;Gekas&quot;, &quot;given&quot; :
                                            &quot;Vassilis&quot;, &quot;non-dropping-particle&quot; : &quot;&quot;,
                                            &quot;parse-names&quot; : false, &quot;suffix&quot; : &quot;&quot; } ],
                                            &quot;container-title&quot; : &quot;Energy Policy&quot;, &quot;id&quot; :
                                            &quot;ITEM-1&quot;, &quot;issued&quot; : { &quot;date-parts&quot; : [ [
                                            &quot;2005&quot; ] ] }, &quot;page&quot; : &quot;289-296&quot;,
                                            &quot;title&quot; : &quot;Environmental impacts from the solar energy
                                            technologies&quot;, &quot;type&quot; : &quot;article-journal&quot;,
                                            &quot;volume&quot; : &quot;33&quot; }, &quot;uris&quot; : [
                                            &quot;http://www.mendeley.com/documents/?uuid=5e42fab4-e885-490c-b148-3c3e65d18aac&quot;
                                            ] } ], &quot;mendeley&quot; : { &quot;formattedCitation&quot; :
                                            &quot;(Tsoutsos et al., 2005)&quot;, &quot;manualFormatting&quot; : &quot;
                                            &quot;, &quot;plainTextFormattedCitation&quot; : &quot;(Tsoutsos et al.,
                                            2005)&quot;, &quot;previouslyFormattedCitation&quot; : &quot;(Tsoutsos et
                                            al., 2005)&quot; }, &quot;properties&quot; : { &quot;noteIndex&quot; : 0 },
                                            &quot;schema&quot; :
                                            &quot;https://github.com/citation-style-language/schema/raw/master/csl-citation.json&quot;
                                            }<span style='mso-element:field-separator'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US"><span style="mso-no-proof:yes"> </span></span><!--[if supportFields]><span
                                            style='font-size:9.0pt;mso-fareast-font-family:"Malgun Gothic";mso-fareast-theme-font:
                                            minor-fareast;color:black;mso-color-alt:windowtext;mso-ansi-language:EN-US'><span
                                            style='mso-element:field-end'></span></span><![endif]--><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US"><o:p></o:p></span></p>
                                            </td>
                                            <td width="11%" valign="top" style="width:11.08%;border-top:double windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            <td width="35%" valign="top" style="width:35.6%;border-top:double windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            <td width="14%" valign="top" style="width:14.6%;border-top:double windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            <td width="10%" valign="top" style="width:10.14%;border-top:double windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:none;
                                            padding:0in 5.4pt 0in 5.4pt">
                                            <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;
                                            line-height:normal;mso-yfti-cnfc:2"><span class="MsoSubtleEmphasis"><span style="font-size:9.0pt;mso-fareast-font-family:&quot;Malgun Gothic&quot;;mso-fareast-theme-font:
                                            minor-fareast;mso-ansi-language:EN-US;font-style:normal;mso-bidi-font-style:
                                            italic"><o:p>&nbsp;</o:p></span></span></p>
                                            </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </ol>
                            </li>

                            <li>
                                <h2>How we calculate our annual solar energy yield</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    We follow the global formula for estimating the electricity generated from a solar photovoltaic system, where the formula is:
                                    
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    <p style="font-weight: bold; padding-left: 80px;">E = A * r * H * PR</p>

                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    <p><span style="font-weight: bold;">E</span> = Energy (kWh)</p>
                                    <p><span style="font-weight: bold;">A</span> = Total solar panel area (m2)</p>
                                    <p><span style="font-weight: bold;">R</span> = Solar panel efficiency (%)</p>
                                    <p><span style="font-weight: bold;">H</span> = Annual average solar irradiance on tilted panels (shading not included)</p>
                                    <p><span style="font-weight: bold;">PR</span> = Performance ratio, coefficient of losses</p>

                                </ol>
                            </li>

                            <li>
                                <h2>Countries covered by the PVDATA Software:</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    The PVDATA software holds more than 100,000+ unique datasets. Of which, we cover every single geological location in all 96 countries listed. This means that users can structure a solar energy project/investment in any region, town, state, or community within the listed countries below:
                                    

                                    <div class="flex-row-l row h-100p" style="margin-top: 30px;">
                                        <div class="col px350-ns px450" style="width: 30% !important;margin:0px;">
                                            <p>Angola</p>
                                            <p>Argentina</p>
                                            <p>Armenia</p>
                                            <p>Australia</p>
                                            <p>Austria</p>
                                            <p>Azerbaijan</p>
                                            <p>Bangladesh</p>
                                            <p>Belarus</p>
                                            <p>Belgium</p>
                                            <p>Bolivia</p>
                                            <p>Botswana</p>
                                            <p>Brazil</p>
                                            <p>Bulgaria</p>
                                            <p>Cambodia</p>
                                            <p>Cameroon</p>
                                            <p>Canada</p>
                                            <p>Chile</p>
                                            <p>China</p>
                                            <p>Colombia</p>
                                            <p>Costa Rica</p>
                                            <p>Côte d Ivoire</p>
                                            <p>Cyprus</p>
                                            <p>Czech Republic</p>
                                            <p>Denmark</p>
                                            <p>Dominican Republic</p>
                                            <p>Ecuador</p>
                                            <p>Egypt</p>
                                            <p>El Salvador</p>
                                            <p>Ethiopia</p>
                                            <p>Finland</p>
                                            <p>France</p>
                                            <p>Gabon</p>
                                            <p>Germany</p>
                                            <p>Ghana</p>
                                            <p>Greece</p>
                                            <p>Guatemala</p>
                                            <p>Hungary</p>
                                            <p>India</p>
                                        </div>
                                        <div class="col px350-ns px450" style="width: 30% !important;margin:0px;">
                                            <p>Indonesia</p>
                                            <p>Israel</p>
                                            <p>Italy</p>
                                            <p>Japan</p>
                                            <p>Jordan</p>
                                            <p>Kazakhstan</p>
                                            <p>Kenya</p>
                                            <p>Kuwait</p>
                                            <p>Latvia</p>
                                            <p>Lebanon</p>
                                            <p>Lithuania</p>
                                            <p>Luxembourg</p>
                                            <p>Madagascar</p>
                                            <p>Malaysia</p>
                                            <p>Mali</p>
                                            <p>Mexico</p>
                                            <p>Mongolia</p>
                                            <p>Morocco</p>
                                            <p>Mozambique</p>
                                            <p>Namibia</p>
                                            <p>Netherlands</p>
                                            <p>New Zealand</p>
                                            <p>Nigeria</p>
                                            <p>Norway</p>
                                            <p>Oman</p>
                                            <p>Pakistan</p>
                                            <p>Panama</p>
                                            <p>Paraguay</p>
                                            <p>Peru</p>
                                            <p>Philippines</p>
                                            <p>Poland</p>
                                            <p>Portugal</p>
                                            <p>Qatar</p>
                                            <p>Romania</p>
                                            <p>Russia</p>
                                            <p>Rwanda</p>
                                            <p>Saudi Arabia</p>
                                            <p>Senegal</p>

                                        </div>
                                        <div class="col px350-ns px450" style="width: 30% !important; margin:0px;">
                                            <p>Sierra Leone</p>
                                            <p>Singapore</p>
                                            <p>Slovenia</p>
                                            <p>South Africa</p>
                                            <p>Spain</p>
                                            <p>Sri Lanka</p>
                                            <p>Sweden</p>
                                            <p>Switzerland</p>
                                            <p>Thailand</p>
                                            <p>Togo</p>
                                            <p>Turkey</p>
                                            <p>Uganda</p>
                                            <p>Ukraine</p>
                                            <p>United Arab Emirates</p>
                                            <p>United Kingdom</p>
                                            <p>United States</p>
                                            <p>Uruguay</p>
                                            <p>Yemen</p>
                                            <p>Zambia</p>
                                            <p>Zimbabwe</p>
                                        </div>
                                    </div>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
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