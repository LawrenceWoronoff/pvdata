@extends('layout.struct')

{{-- Page title --}}
@section('title')
Contat us
@parent
@stop


@section('content')

<div>
    <main class="Main" data-amp-auto-lightbox-disable="" id="content">
        <section class="c--text-inverse py700 section" style="background-image: url('assets/Backgrounds/aboutus_back.png'); height:400px;">
            <div class="flex-column flex-row-l items-center-l row h-100p" style="text-align: center;">
                <div class="col mw-41p-l mw-66p-m mx-auto pb600-m w-100p">
                    <h1 class="c--text-inverse f1100 f800-m f900-l pr-8p-offset-l" style="font-size: 2.5667rem; line-height: 1.1328070175439;">CONTACT US</h1>
                </div>
            </div>
        </section>

        <section class="c--text-inverse py700 section" style="padding: 100px 0px; height: 100%; background-color: #f8f8fa;">
            <div class="flex-column flex-row-l row h-100p">
                <div class="col mw-83p-m mx-auto w-100p card-view">

                    <img src="https://mk0vervoeguuetxhuwwf.kinstacdn.com/wp-content/uploads/2020/12/TopCandidate-Icon.svg" class="attachment-full size-full lazyloaded" alt="Contact us 1" height="80" width="80" title="Contact Us 1" data-ll-status="loaded" on="tap:contact-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">

                    <div class="elementor-widget-container" style="padding-bottom: 20px;">
                        <h3 class="elementor-heading-title elementor-size-default">Talk to sales</h3>
                    </div>
                    <p class="elementor-heading-title elementor-size-default" style="color: black; padding-bottom: 40px;">
                        We’ll help you find the right plan and pricing for your business.<br>
                        <br>
                    </p>
                    <button class="button card-button wsnw"  on="tap:contact-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">
                        Contact Sales
                    </button>
                    
                </div>
                <div class="col mw-83p-m mx-auto w-100p card-view">

                    <img src="https://mk0vervoeguuetxhuwwf.kinstacdn.com/wp-content/uploads/2021/03/Icon-Message.svg" class="attachment-full size-full lazyloaded" alt="Contact us 1" height="80" width="80" title="Contact Us 1" data-ll-status="loaded" on="tap:getintouch-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">

                    <div class="elementor-widget-container" style="padding-bottom: 20px;">
                        <h3 class="elementor-heading-title elementor-size-default">General Inquiry</h3>
                    </div>
                    <p class="elementor-heading-title elementor-size-default" style="color: black; padding-bottom: 40px;">
                        For other inquires, get in touch with customer support<br>
                        <br>
                    </p>
                    <button class="button card-button wsnw" on="tap:getintouch-modal.open,AMP.setState({newsletterForm: {details: 'NewsletterSignup-FooterDesktop'}})">
                        Get in Touch
                    </button>
                </div>
            </div>
            <div class="flex-column flex-row-l row h-100p" style="margin-top: 90px;">
                <div class="col mx-auto w-100p" style="width: 35%; padding: 30px; text-align: center;">
                    <div class="elementor-widget-container" style="padding-bottom: 20px;">
                        <h4 class="elementor-heading-title elementor-size-default" style="color:green;">WRITE TO US</h4>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">Registered Office</h3>
                    </div>
                </div>
            </div>
            <div class="flex-column flex-row-l row h-100p" style="margin-top: 40px;">
                <div class="col mx-auto w-100p  card-view">
                    <img src="https://mk0vervoeguuetxhuwwf.kinstacdn.com/wp-content/uploads/2021/06/Icon-Aus-Flag-1.svg" class="attachment-full size-full lazyloaded" alt="Contact us 1" height="80" width="80" title="Contact Us 1" data-ll-status="loaded">

                    <div class="elementor-widget-container" style="padding-bottom: 20px;">
                        <h3 class="elementor-heading-title elementor-size-default">United Kingdom</h3>
                    </div>
                    <p class="elementor-heading-title elementor-size-default" style="color: black; padding-bottom: 40px;">
                        7 Bell Yard Kingdom, WC2A 2JR</br> London, UK
                    </p>
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