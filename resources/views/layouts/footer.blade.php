<div class="footer-main page-footer" style="position: relative; background-color: rgb(24, 17, 123);">
    <ul>
        <li class="footer-el logo-el"><img src="../images/log.gif" id="logo-footer"></li>
        <li class="footer-el el-main"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/")}}">{{ trans('messages.main') }}</a></li>
        <li class="footer-el"><a class=" men-about" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about")}}">{{ trans('messages.about') }}</a></li>
        <li class="footer-el"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/blog")}}">{{ trans('messages.blog') }}</a></li>
        <li class="footer-el"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/contacts")}}">{{ trans('messages.cont') }}</a></li>
        <li class="footer-el" id="company-el">&copy; East Euro Hockey Lab, 2018</li>
    </ul>
</div>