<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 09.01.2018
 * Time: 18:05
 */
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

if (! function_exists('getLangURI')) {
    function getLangURI($lang)
    {
     //   echo url()->current();
        $referer = url()->current(); //URL предыдущей страницы

        $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

        //разбиваем на массив по разделителю
        $segments = explode('/', $parse_url);


        //Если URL (где нажали на переключение языка) содержал корректную метку языка
        if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {
            unset($segments[1]); //удаляем метку
        }


        //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
       // if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
            array_splice($segments, 1, 0, $lang);
//        }
        //this adds 30 days to the current time
        if(in_array('post', $segments)){

            $newPostId = \App\Article::getPostIdByParentIdAndLang(\App\Article::getParentIdPost($segments[3]),$lang);
            $segments[3] =  $newPostId;

        }
        //формируем полный URL
        $url = Request::root().implode("/", $segments);


        //если были еще GET-параметры - добавляем их
        if(parse_url($referer, PHP_URL_QUERY)){
            $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
        }
        return $url;
    }
}
?>