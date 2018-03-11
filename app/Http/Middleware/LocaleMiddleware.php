<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;


class LocaleMiddleware
{
  //  public static $mainLanguage = 'en'; //main lang. not show at URl

    public static $languages = ['en', 'ru', 'pl'];



    /*
 * Проверяет наличие корректной метки языка в текущем URL
 * Возвращает метку или значеие null, если нет метки
 */
    public static function getLocale()
    {
        $uri = Request::path(); //получаем URI


        if(isset($_COOKIE["userLang"]))
        {var_dump($_COOKIE['userLang']);echo $_COOKIE["userLang"];}


        $segmentsURI = explode('/',$uri); //делим на части по разделителю "/"

        //Проверяем метку языка  - есть ли она среди доступных языков
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            return $segmentsURI[0];

        } else {
            return self::getLocaleUserLang();
            //return  self::$mainLanguage;
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if($locale) App::setLocale($locale);

        return $next($request);
    }

    /**
     * Get Locale User Language
     * @return string
     */
    public static function getLocaleUserLang(){
        $userLang =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $mainLanguage = 'en';

        $langs = explode(',',$userLang);

        foreach($langs as $lang)
        {
            $s = explode("-", $lang);

            //if it is Ukraine or Belarus
            if($s[0] === 'be' || $s[0] === 'uk')
            {
                $mainLanguage = 'ru';
                break;
            }
            if(in_array($s[0], self::$languages))
            {
                // Set the page locale to the first supported language found
                $mainLanguage = $s[0];
                break;
            }
        }
        return $mainLanguage;
    }

}
