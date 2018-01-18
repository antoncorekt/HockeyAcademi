<div class="footer-main page-footer" style="position: relative; background-color: #0000F0;">
    <ul>
        <li class="footer-el logo-el"><img src="../../design/first_page/res/logo.gif" id="logo-footer"></li>
        <li class="footer-el"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/")}}">{{ trans('messages.main') }}</a></li>
        <li class="footer-el"><a class=" men-about" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about")}}">{{ trans('messages.about') }}</a></li>
        <li class="footer-el"><a href="#">{{ trans('messages.blog') }}</a></li>
        <li class="footer-el"><a href="#">{{ trans('messages.cont') }}</a></li>
        <li class="footer-el" id="company-el">&copy; НАЗВАНИЕ АКАДЕМИИ, 2018</li>
    </ul>


</div>