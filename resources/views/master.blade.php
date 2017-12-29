<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
    
    
    <!START HEAD -->
    <head>
        <link rel="stylesheet" href="{{ url('path/to/font-awesome/css/font-awesome.min.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/header.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('pink/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('pink/css/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('pink/css/style-minifield.css') }}">
        <!-- <link rel="stylesheet" href="{{ url('card/css/style.css') }} "> -->



        





        <script type="text/javascript" scr="{{ url('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css') }} " integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script
        src="{{ url('https://code.jquery.com/jquery-3.2.1.min.js') }} "
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
        
        <title>Pink Rio | A strong, powerful and multiporpose WordPress Theme</title>
        
        
        
        <!-- CSSs -->
      
        <link rel="stylesheet" id="max-width-1024-css" href="{{ url('pink/css/max-width-1024.css') }} " type="text/css" media="screen and (max-width: 1240px)" />
        <link rel="stylesheet" id="max-width-768-css" href="{{ url('pink/css/max-width-768.css') }} " type="text/css" media="screen and (max-width: 987px)" />
        <link rel="stylesheet" id="max-width-480-css" href="{{ url('pink/css/max-width-480.css') }} " type="text/css" media="screen and (max-width: 480px)" />
        <link rel="stylesheet" id="max-width-320-css" href="{{ url('pink/css/max-width-320.css') }} " type="text/css" media="screen and (max-width: 320px)" />
        
    
        <!-- FONTs -->
        <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
        <link rel='stylesheet' href='{{ url('pink/css/font-awesome.css') }}  ' type='text/css' media='all' />






        
  





        
        <!-- JAVASCRIPTs -->

        <script type="text/javascript" scr="{{ url('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/comment-reply.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.quicksand.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.tipsy.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.prettyPhoto.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.cycle.min.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.anythingslider.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.eislideshow.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.easing.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.flexslider-min.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.aw-showcase.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/layerslider.kreaturamedia.jquery-min.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/shortcodes.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.colorbox-min.js') }} "></script> <!-- nav -->
        <script type="text/javascript" src="{{ url('pink/js/jquery.tweetable.js') }} "></script>
    </head>
    <!-- END HEAD -->
    
    
        @include('layouts.header')
        <hr>
        @yield('content')
        @include('layouts.contact')
        @include('layouts.footer')
        
        <script type="text/javascript" src="{{ url('pink/js/jquery.custom.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/contact.js') }} "></script>
        <script type="text/javascript" src="{{ url('pink/js/jquery.mobilemenu.js') }} "></script>
        
    </body>
    <!-- END BODY -->
</html>