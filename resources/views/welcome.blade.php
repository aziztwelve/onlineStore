<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
    
    
    <!START HEAD -->
    <head>
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
        <script type="text/javascript" scr="{{ url('js/app.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
        
        <title>Pink Rio | A strong, powerful and multiporpose WordPress Theme</title>
        
        
        
        <!-- CSSs -->
        <link rel="stylesheet" type="text/css" media="all" href="pink/css/reset.css" /> <!-- RESET STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="pink/style.css" /> <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" id="max-width-1024-css" href="pink/css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
        <link rel="stylesheet" id="max-width-768-css" href="pink/css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
        <link rel="stylesheet" id="max-width-480-css" href="pink/css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
        <link rel="stylesheet" id="max-width-320-css" href="pink/css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />
        
        <!-- CSSs Plugin -->
        {{-- <link rel="stylesheet" id="thickbox-css" href="pink/css/thickbox.css" type="text/css" media="all" /> --}}
        <link rel="stylesheet" id="styles-minified-css" href="pink/css/style-minifield.css" type="text/css" media="all" />
        {{-- <link rel="stylesheet" id="buttons" href="pink/css/buttons.css" type="text/css" media="all" /> --}}
        {{-- <link rel="stylesheet" id="cache-custom-css" href="pink/css/cache-custom.css" type="text/css" media="all" /> --}}
        {{-- <link rel="stylesheet" id="custom-css" href="pink/css/custom.css" type="text/css" media="all" /> --}}
        {{-- <link rel="stylesheet" " href="footer/style.css" type="text/css" media="all" /> --}}
        
        <!-- FONTs -->
        <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
        <link rel='stylesheet' href='pink/css/font-awesome.css' type='text/css' media='all' />
        
        <!-- JAVASCRIPTs -->
        <script type="text/javascript" src="pink/js/jquery.js"></script>
        <script type="text/javascript" src="pink/js/comment-reply.js"></script>
        <script type="text/javascript" src="pink/js/jquery.quicksand.js"></script>
        <script type="text/javascript" src="pink/js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="pink/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="pink/js/jquery.cycle.min.js"></script>
        <script type="text/javascript" src="pink/js/jquery.anythingslider.js"></script>
        <script type="text/javascript" src="pink/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="pink/js/jquery.easing.js"></script>
        <script type="text/javascript" src="pink/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="pink/js/jquery.aw-showcase.js"></script>
        <script type="text/javascript" src="pink/js/layerslider.kreaturamedia.jquery-min.js"></script>
        <script type="text/javascript" src="pink/js/shortcodes.js"></script>
        <script type="text/javascript" src="pink/js/jquery.colorbox-min.js"></script> <!-- nav -->
        <script type="text/javascript" src="pink/js/jquery.tweetable.js"></script>
    </head>
    <!-- END HEAD -->
    <style>
    .classcard{
    background: #fff;
    width: 265px;
    margin-right: 3.5%;
    margin-bottom: 3.5%;
    /*border-radius: 10px;*/
    float: left;
    text-align: center;
    position: relative;
    /*padding: 0 0 27px;*/
    transition: all 0.3s;
    /*height: 450px;*/
    }
    /*.classcard:hover{
        background-color: #EAF0F0;
        border-radius: 15px;
    }*/
    .main-text{
    color: #333333;
    font-size: 16px;
    line-height: 20px;
    }
    .buy-block{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    transition: color 0.2s, background-color .2s, transform .2s;
    text-align: center;
    color: #242424;
    }
    .card-sale{
    width: 160px;
    margin: 10px auto 22px;
    }
    .btn-buy{
    display: inline-block;
    background: #11d6d4;
    border-radius: 100px;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    text-align: center;
    height: 42px;
    line-height: 42px;
    padding: 0 26px;
    border: none;
    border: 0;
    cursor: pointer;
    position: relative;
    transition: background-color 0s;
    transition: all 0.3s;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    }
    .index-tabs{
            position: relative;
    z-index: 2;
    margin: 0 0 30px;
    background: #fff;
    border-bottom: 2px solid #f4f4f4;
    /*border-radius: 500px;*/
    /*width: 38%;*/
    }

    .index-tabs a:first-child {
    margin-left: 0;
}
    .index-tabs a{
            display: inline-block;
    text-decoration: none;
    font-size: 16px;
    color: #000;
    padding: 15px 0;
    margin: 0 20px;
    position: relative;
    }
    .index-tabs a:before{
        transition: all 0.3s;
    background: none;
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    right: 0;
    border-radius: 3px;
    height: 4px;
    background: #ff5eaf;
    }
    /*.card classcard, card-img-top, card-body, card-title main-text, buy-block,card-sale, btn-buy {
        border: none;
    box-shadow: none;
    }*/
    /*.card{
        border:0;
    }
*/    /*.card > .card-img-top + .card-body > .card-title:first-child,
    .card > .list-group + .card-footer {
      border-top: 0;
    }*/
    </style>
    
    <!-- START BODY -->
    <body class="no_js responsive stretched">
        
        <!-- START BG SHADOW -->
        <div class="bg-shadow">
            
            <!-- START WRAPPER -->
            <div id="wrapper" class="group">
                
                <!-- START HEADER -->
                @include('layouts.header')
                <!-- END HEADER -->
                
                <!-- BEGIN #slider -->
                @include('layouts.slider')
                
                <!-- START PRIMARY -->
                <div id="primary" class="sidebar-right" style="margin-top: 30px;">

                    <div style="margin-left: 20%;">
                        
                        @include('layouts.sidebar')
                    </div>
                    <div class="inner group" style="float:left; width: 72%; margin-left: 30px;">
                        <div class="index-tabs">
                            <a href="">Хит</a>
                            <a href="">Новинки</a>
                            <a href="">Распродажи</a>
                            <a href="">Все</a>

                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="card classcard">
                            <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 style="max-height: 38px; min-height: 38px;" class="card-title main-text">Краситель сухой Food Colours 045 Фиолетовый 8...</h6>
                                <div class="buy-block">
                                    <h4 class="card-sale">100 $</h4>
                                    <a href="#" class="btn-buy">в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            @include('layouts.contact')
        </div>
        <div>
            @include('layouts.footer')
        </div>
        <!-- END BG SHADOW -->
        
        <script type="text/javascript" src="pink/js/jquery.custom.js"></script>
        <script type="text/javascript" src="pink/js/contact.js"></script>
        <script type="text/javascript" src="pink/js/jquery.mobilemenu.js"></script>
        
    </body>
    <!-- END BODY -->
</html>