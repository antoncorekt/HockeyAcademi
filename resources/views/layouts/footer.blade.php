<div class="footer-main page-footer" style="position: relative; background-color: #0000F0;">
    <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px;">
        <div class="collapse navbar-collapse navbar-default navbar-ex1-collapse">
            <ul class="nav navbar-nav" id="nav-footer">
                <li class="nav-el footer-el"><img src="../../design/first_page/res/logo.gif" id="logo-footer"></li>
                <li class="nav-el footer-el"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/")}}">{{ trans('messages.main') }}</a></li>
                <li class="nav-el footer-el"><a class=" men-about" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about")}}">{{ trans('messages.about') }}</a></li>
                <li class="nav-el footer-el"><a href="#">{{ trans('messages.blog') }}</a></li>
                <li class="nav-el footer-el"><a href="#">{{ trans('messages.cont') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="nav-footer">
                <li class="nav-el footer-el"><a href="#">&copy; НАЗВАНИЕ АКАДЕМИИ, 2018</a></li>
            </ul>
        </div>

    </nav>
</div>