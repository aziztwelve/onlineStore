<div id="header" class="group">
    
    <div class="group inner">
        
        <!-- START LOGO -->
        <div id="logo" class="group">
            {{-- <a href="index.html" title="Pink Rio"><img src="pink/images/logo.png" title="Pink Rio" alt="Pink Rio" /></a> --}}
        </div>
        <!-- END LOGO -->
        
        <div id="sidebar-header" class="group">
            <div class="widget-first widget yit_text_quote">
            {{--  <blockquote class="text-quote-quote">&#8220;The caterpillar does all the work but the butterfly gets all the publicity.&#8221;</blockquote>
            <cite class="text-quote-author">George Carlin</cite> --}}
        </div>
    </div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href=" {{ route('shoppingCart') }} ">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Корзина
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : '' }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i> Пользователь</a>
        </li>
        
    </ul>
    {{-- <div class="container">
        <div id="block-block-1" class="block block-block">
            
            <div class="content">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="    float: left;">
                    <span class="">Северо-западная компания «Аврора»</span>
                </div><!- end columns ->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="float: right; ">
                    <div class="callus" style="float: right;">
                        <span class=""><i class="fa fa-phone"></i> +7 (812) 333-00-20</span>
                        <span class=""><i class="fa fa-envelope"></i> <a href="mailto:info@td-aurora.ru">info@td-aurora.ru</a></span>
                        <span class=""><i class="fa fa-user"></i>
                            <a href="http://td-aurora.ru/user">Войти</a> / <a href="http://td-aurora.ru/user/register">Регистрация</a>
                        </span>
                        <span class=""><i class="fa fa-shopping-cart"></i> <a href="/cart"> Корзина</a></span>
                        
                    </div><!- end callus >
                </div><!- end columns >  </div>
                
            </div>
        </div> --}}
        <div class="clearer"></div>
        
        <hr />
        
        <!-- START MAIN NAVIGATION -->
        <div class="menu classic" style="margin-left: 170px;">
            <ul id="nav" class="menu">
                
                <li>
                    <a href="/">Главная</a>
                    
                </li>
                
                <li>
                    <a href="#">Каталог</a>
                    <ul class="sub-menu">
                        <li><a href="slider-layerslider.html">LayerSlider</a></li>
                        <li><a href="slider-flexslider.html">FlexSlider</a></li>
                        <li><a href="slider-elastic-slider.html">Elastic</a></li>
                        <li><a href="slider-thumbnails.html">Thumbnails</a></li>
                        <li><a href="slider-cycle.html">Cycle</a></li>
                        <li><a href="slider-static-header.html">Static header</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">Сезонное предложение</a>
                    <ul class="sub-menu">
                        <li><a href="corporate-about.html">About</a></li>
                        <li><a href="landing-page.html">Landing page</a></li>
                        <li><a href="corporate-videogallery.html">Videogallery</a></li>
                        <li><a href="corporate-testimonials.html">Testimonials</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">Инфо</a>
                    
                </li>
                
                <li>
                    <a href="#">Контакты</a>
                    
                </li>
                
            </ul>
        </div>
        <!-- END MAIN NAVIGATION -->
        <div id="header-shadow"></div>
        <div id="menu-shadow"></div>
    </div>
    
</div>