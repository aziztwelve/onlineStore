<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
    <![endif]-->
    <!--[if IE 7]>
    <html id="ie7" class="ie" dir="ltr" lang="en-US">
        <![endif]-->
        <!--[if IE 8]>
        <html id="ie8" class="ie" dir="ltr" lang="en-US">
            <![endif]-->
            <!--[if IE 9]>
            <html id="ie9" class="ie" dir="ltr" lang="en-US">
                <![endif]-->
                <!--[if gt IE 9]>
                <html class="ie" dir="ltr" lang="en-US">
                    <![endif]-->
                    <!--[if !IE]>
                    <html dir="ltr" lang="en-US">
                        <![endif]-->
                        
                        <!-- START HEAD -->
                        <head>
                            
                            <meta charset="UTF-8" />
                            <!-- this line will appear only if the website is visited with an iPad -->
                            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
                            
                            <title>Pink Rio | A strong, powerful and multiporpose WordPress Theme</title>
                            
                            <!-- [favicon] begin -->
                            <link rel="shortcut icon" type="pink/image/x-icon" href="pink/images/favicon.ico" />
                            <link rel="icon" type="pink/image/x-icon" href="pink/images/favicon.ico" />
                            <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
                            <!-- For iPad3 with retina display: -->
                            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="pink/apple-touch-icon-144x.png" />
                            <!-- For first- and second-generation iPad: -->
                            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="pink/apple-touch-icon-114x.png" />
                            <!-- For first- and second-generation iPad: -->
                            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="pink/apple-touch-icon-72x.png" />
                            <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
                            <link rel="apple-touch-icon-precomposed" href="pink/apple-touch-icon-57x.png" />
                            <!-- [favicon] end -->
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
                            
                            <!-- CSSs -->
                            <link rel="stylesheet" type="text/css" media="all" href="pink/css/reset.css" /> <!-- RESET STYLESHEET -->
                            <link rel="stylesheet" type="text/css" media="all" href="pink/style.css" /> <!-- MAIN THEME STYLESHEET -->
                            <link rel="stylesheet" id="max-width-1024-css" href="pink/css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
                            <link rel="stylesheet" id="max-width-768-css" href="pink/css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
                            <link rel="stylesheet" id="max-width-480-css" href="pink/css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
                            <link rel="stylesheet" id="max-width-320-css" href="pink/css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />
                            
                            <!-- CSSs Plugin -->
                            <link rel="stylesheet" id="thickbox-css" href="pink/css/thickbox.css" type="text/css" media="all" />
                            <link rel="stylesheet" id="styles-minified-css" href="pink/css/style-minifield.css" type="text/css" media="all" />
                            <link rel="stylesheet" id="buttons" href="pink/css/buttons.css" type="text/css" media="all" />
                            <link rel="stylesheet" id="cache-custom-css" href="pink/css/cache-custom.css" type="text/css" media="all" />
                            <link rel="stylesheet" id="custom-css" href="pink/css/custom.css" type="text/css" media="all" />
                            <link rel="stylesheet" " href="footer/style.css" type="text/css" media="all" />
                            
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
                                    <div id="primary" class="sidebar-right">
                                        <div class="inner group">
                                            @include('layouts.sidebar')
                                            <!-- START CONTENT -->
                                            <div class="card-deck">
                                                <div class="card">
                                                    <img class="card-img-top" src="img/p1.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 style="max-height: 38px; min-height: 38px;" class="card-title">Card title</h6>
                                                        <h4 class="card-text">100 $</h4>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" src="img/p3.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Card title</h4>
                                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" src="img/p2.jpg" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Card title</h4>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END CONTENT -->
                                            <!-- START SIDEBAR -->
                                            {{-- @include('layouts.sidebar') --}}
                                            <!-- END SIDEBAR -->
                                            <!-- START EXTRA CONTENT -->
                                            <!-- END EXTRA CONTENT -->
                                        </div>
                                    </div>
                                    <!-- END PRIMARY -->
                                    
                                    <!-- START COPYRIGHT -->
                                    {{--    @include('layouts.contact')
                                    @include('layouts.footer') --}}
                                    <!-- END COPYRIGHT -->
                                </div>
                                <!-- END WRAPPER -->
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