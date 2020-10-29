<script type="text/javascript">
    window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
            [{b:500,d:1000,x:45,e:{x:6}}],
            [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
            [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
            [{b:-1,d:1,rX:20,rY:90},{b:0,d:1400,rX:0,e:{rX:1}}],
            [{b:-1,d:1,rY:-20},{b:0,d:1400,rY:-90,e:{rY:7}}],
            [{b:-1,d:1,sX:2,sY:2},{b:1000,d:1600,sX:1,sY:1,e:{sX:1,sY:1}}],
            [{b:-1,d:1,sX:2,sY:2},{b:1000,d:2220,sX:1,sY:1,e:{sX:3,sY:3}}],
            [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:2140,d:1180,tZ:0,e:{tZ:1}}],
            [{b:1000,d:1000,x:-303,y:372}],
            [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
            [{b:0,d:600,y:64}],
            [{b:340,d:1120,x:26}],
            [{b:0,d:1200,y:37}]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $FillMode: 4,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 640;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
    /*jssor slider loading skin double-tail-spin css*/
    .jssorl-004-double-tail-spin img {
        animation-name: jssorl-004-double-tail-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /*jssor slider arrow skin 052 css*/
    .jssora052 {display:block;position:absolute;cursor:pointer;}
    .jssora052 .a {fill:none;stroke:#000;stroke-width:360;stroke-miterlimit:10;}
    .jssora052:hover {opacity:.8;}
    .jssora052.jssora052dn {opacity:.5;}
    .jssora052.jssora052ds {opacity:.3;pointer-events:none;}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:640px;height:580px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/build/images/slides/double-tail-spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:640px;height:580px;overflow:hidden;">
        <div style="background-color:#000000;">
            <img data-u="image" style="opacity:0.5;" src="/build/images/slides/responsive_slider_2.jpg" />
            <div data-ts="flat" data-p="390" style="left:5px;top:187px;width:609px;height:170px;position:absolute;overflow:hidden;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="0" style="left:595px;top:-112px;width:693px;height:251px;position:absolute;overflow:hidden;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-arr="1" style="left:108px;top:153px;width:392px;height:34px;position:absolute;color:#edf1f2;font-size:22px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">{{__('layouts/slider.page1.title')}}</div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-arr="2" style="left:106px;top:180px;width:600px;height:52px;position:absolute;color:#edf1f2;font-size:32px;line-height:1.2;letter-spacing:0.05em;"><font color="#e04338"><b>EL-TK</b></font><span style="color:#3065b3">Elektroinstalacje</span></div>
                </div>
            </div>
        </div>
        <div style="background-color:#0d0c0c;">
            <img data-u="image" style="opacity:0.4;" src="/build/images/slides/responsive_slider_1.jpg" />
            <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="3" style="left:400px;top:-30px;width:500px;height:400px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="4" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="5" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                            <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:-243px;top:166px;width:500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-t="7" style="left:-141px;top:74px;width:600px;height:55px;position:absolute;opacity:0;color:#ffffff;font-size:48px;font-weight:700;line-height:1.2;text-align:center;text-shadow:1px 0px #e31212;">{{__('layouts/slider.page2.title')}}</div>
                            </div>
                        </div>
                        <div data-to="50% 50%" data-t="8" style="left:0px;top:0px;width:496px;height:116px;position:absolute;color:#ffffff;font-size:32px;font-weight:900;line-height:1.4;text-align:right;text-shadow:1px 0px #3065b3;"><p>{{__('layouts/slider.page2.subtitle')}}</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color:#000000;" data-p="610">
            <img data-u="image" style="opacity:0.6;" src="/build/images/slides/responsive_slider_3.jpg" />
            <div data-ts="flat" data-p="1618" data-po="50% -100%" style="left:120px;top:90px;width:509px;height:300px;position:absolute;">
                <svg viewbox="0 0 380 200" data-to="50% 50%" width="380" height="200" data-t="9" style="left:-74px;top:72px;display:block;position:absolute;opacity:0;overflow:visible;">
                    <g>
                        <text fill="#ffffff" x="-4" y="2" style="position:absolute;mix-blend-mode:darken;font-family:Montserrat,sans-serif!important;font-size:32px;font-weight:500;letter-spacing:0.1em;overflow:visible;">{{__('layouts/slider.page3.title1')}}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                        </text>
                        <text fill="#ffffff" text-anchor="middle" x="198" y="100" style="position:absolute;font-family:Montserrat,sans-serif!important;font-size:32px;font-weight:500;overflow:visible;">{{__('layouts/slider.page3.title2')}}
                        </text>
                        <text fill="#f7f8fa" text-anchor="start" x="-8" y="150" style="position:absolute;font-family:Montserrat,sans-serif!important;font-size:32px;font-weight:500;letter-spacing:0.1em;overflow:visible;">{{__('layouts/slider.page3.title3')}}
                        </text>
                        <text fill="#faf8f7" x="-6" y="198" style="position:absolute;opacity:0.8;font-family:Montserrat,sans-serif!important;font-size:32px;font-weight:500;letter-spacing:0.1em;overflow:visible;">{{__('layouts/slider.page3.title4')}}
                        </text>
                    </g>
                </svg>
            </div>
            <div data-ts="preserve-3d" style="left:338px;top:355px;width:300px;height:150px;position:absolute;">
                <svg viewbox="0 0 200 40" data-to="50% 50%" width="200" height="40" data-t="10" style="left:50px;top:500px;display:block;position:absolute;font-family:Roboto,sans-serif!important;font-size:18px;font-weight:800;overflow:visible;">
                    <text fill="#4028f5" text-anchor="middle" x="100" y="40">Elektroinstalacje
                    </text>
                </svg>
                <svg viewbox="0 0 150 50" data-to="50% 50%" width="150" height="50" data-t="11" style="left:-2001px;top:67px;display:block;position:absolute;overflow:visible;">
                    <path fill="#FFFF03" stroke="#FFFF03" d="M46.42-7.91L25.25,17.84L39.85,17.84L32.9,31.7L29.45,31.61L29.27,43.19L40.54,31.76L37.01,31.77L50.04,13.1L35.84,13.18ZM55.98,17.76L59.71,12.36L59.7,15.81L193.94,15.88L192.59,17.86Z"></path>
                </svg>
                <svg viewbox="0 0 200 40" data-to="50% 50%" width="200" height="40" data-t="12" style="left:49px;top:-500px;display:block;position:absolute;font-size:30px;font-weight:700;overflow:visible;">
                    <text fill="#e31212" text-anchor="middle" x="100" y="40">EL - T.K
                    </text>
                </svg>
            </div>
        </div>
    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora052" style="width:63px;height:63px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora052" style="width:63px;height:63px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
