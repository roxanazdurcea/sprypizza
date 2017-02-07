<header class="page-header page-header-normal">
    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <em>Call now: +40 31 438 2368 - <span class="text-uppercase">for Pizza delivery</span></em>
                </div>
                <div class="col-xs-6 text-right">
                    Welcome Guest, <a href="#" class="text-uppercase">Sign in</a> | <a href="#" class="text-uppercase">Create
                        new account</a>
                </div>
            </div>
        </div>
    </div><!-- .page-top -->
    <div id="main-navigation-container">
        <div id="main-navigation-inner">
            <div class="container">
                <div class="relative-container clearfix">
                    <div id="main-navigation-button"><i class="fa fa-reorder"></i></div>
                    <div class="pull-left">
                        <div class="centered-columns">
                            <div class="centered-column">
                                <a href="{{ URL::to("/")}}"><img class="page-logo" id="pageLogo" alt="logo"
                                                                 src="assets/images/logo.png"></a>
                            </div>
                            {{--<div class="centered-column hidden-xs">--}}
                                {{--<a href="{{ URL::to("/")}}"><h1 class="site-name">FOOD & PIZZERIA</h1>--}}
                                    {{--<h4 class="site-name-info">Ultimate Delivery HTML Template</h4></a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <nav id="main-navigation">
                        <ul>
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ URL::to("/")}}">Home</a>
                            </li>
                            <li class="{{ Request::is('about') ? 'active' : '' }}">
                                <a href="{{ URL::to("/about")}}">About Us</a>
                            </li>
                            <li class="{{ Request::is('menu') ? 'active' : '' }}">
                                <a href="{{ URL::to("/menu")}}">Menu</a>
                            </li>
                            <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                                <a href="{{ URL::to("/gallery")}}">Gallery</a>
                            </li>
                            <li class="{{ Request::is('specials') ? 'active' : '' }}">
                                <a href="{{ URL::to("/specials")}}">Specials</a>
                            </li>
                            <li class="{{ Request::is('blog') ? 'active' : '' }}">
                                <a href="{{ URL::to("/blog")}}">Blog</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                <a href="{{ URL::to("/contact")}}">Contact</a>
                            </li>
                            <li>
                                <div class="menu-item has-small-label cart-trigger"><i
                                            class="fa fa-shopping-cart"></i><span
                                            class="small-label"><span>2</span></span></div>
                            </li>
                        </ul>
                    </nav>
                </div><!-- .relative-container -->
            </div><!-- .container -->
        </div><!-- #main-navigation-inner -->
    </div><!-- #main-navigation-container -->
    <div id="main-navigation-placeholder"></div>
</header>
