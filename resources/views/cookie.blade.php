@extends('layout.struct')

{{-- Page title --}}
@section('title')
Cookie Policy
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
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="_span-9 col">
                    <h1 class="_small">Cookie Policy</h1>
                    <div>
                        <ol class="outlinelist">
                            <div id="preheader">
                                This Cookie Notice explains how PV Intelligence Limited. (collectively <span style="font-weight:bold;">“PVDATA”</span>, <span style="font-weight:bold;">“we”</span>, <span style="font-weight:bold;">“us”</span>, and <span style="font-weight:bold;">“ours”</span>), use cookies and similar technologies to recognise you when you visit our websites and its sub-domains at https://pvdata.io/,  (<span style="font-weight:bold;">“Website”</span>) or use the PVDATA offerings (<span style="font-weight:bold;">“Platform”</span>). It explains what these cookies and similar technologies are and why we use them, as well as your rights to control our use of them.
                            </div>
                            <p style="padding: 10px 0px;"></p>
                            <li>
                                <h2>What are cookies?</h2>
                                <p style="padding: 10px 0px;"></p>
                                Cookies are small data files that are placed on your computer or mobile device when you visit a website or use a platform. Cookies are widely used by website / platform owners in order to make their websites / platforms work, or to work more efficiently, as well as to provide reporting information.

                                <p style="padding: 10px 0px; margin-top:0px;"></p>

                                Cookies set by the website / platform owner (in this case, PVDATA) are called “first party cookies”. Cookies set by parties other than the website / platform owner are called “third party cookies”. Third party cookies enable third party features or functionality to be provided on or through the website / platform (e.g. like interactive content and analytics). The parties that set these third party cookies can recognise your computer both when it visits the website / platform in question and also when it visits certain other websites / platforms.

                            </li>
                            <li>
                                <h2>Why do we use cookies?</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>

                                    We use first party and third party cookies for several reasons. Some cookies are required for technical reasons in order for our Website / Platform to operate, and we refer to these as “essential” or “strictly necessary” cookies. Third parties serve cookies through our Website / Platform for analytics and other purposes. 
                                </ol>
                            </li>

                            <li>
                                <h2>What about other tracking technologies, like web beacons?</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>

                                    Cookies are not the only way to recognise or track visitors to a website or platform. We may use other, similar technologies from time to time, like web beacons (sometimes called “tracking pixels” or “clear gifs”). These are tiny graphics files that contain a unique identifier that enable us to recognise when someone has visited our Website or Platform. This allows us, for example, to monitor the traffic patterns of users from one page within our Website or Platform to another and to improve site performance. In many instances, these technologies are reliant on cookies to function properly, and so declining cookies will impair their functioning.
                                </ol>
                            </li>

                            <li>
                                <h2>How can I control cookies?</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    You have the right to decide whether to accept or reject cookies. 

                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    You can set or amend your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our Website though your access to some functionality and areas of our Website may be restricted. As the means by which you can refuse cookies through your web browser controls vary from browser to browser, you should visit your browser’s help menu for more information.
                                </ol>
                            </li>

                            <li>
                                <h2>How often will you update this Cookie Notice?</h2>
                                <ol>
                                    <p style="padding: 10px 0px; margin-top:0px;"></p>
                                    We may update this Cookie Notice from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal or regulatory reasons. Please therefore re-visit this Cookie Notice regularly to stay informed about our use of cookies and related technologies.
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