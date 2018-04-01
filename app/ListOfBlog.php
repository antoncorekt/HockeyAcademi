<?php

namespace App;

use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Database\Eloquent\Model;

use DB;

class ListOfBlog extends Model
{
    protected $primaryKey = 'idPost';
    protected $table = 'post';
    protected $fillable = array('author', 'create_date','update_date');

    public static function getAllPosts(){
        $posts = DB::table('post_text')
            ->join('lang', 'post_text.fkLang', '=', 'lang.idLang')
            ->join('post', 'post_text.fkPost', '=', 'post.idPost')
            ->where('lang.name', '=', LocaleMiddleware::getLocale())
            ->orderBy('post.create_date', 'ASC')
           ;
        return $posts;
    }

    public static function getShortText($post){
        $string = file_get_contents($post->text);
        return "<p>" . strstr($string, '</p>', true) . "</p>";
    }

    public static function getLastTwoPosts(){
        $posts = DB::table('post_text')
            ->join('lang', 'post_text.fkLang', '=', 'lang.idLang')
            ->join('post', 'post_text.fkPost', '=', 'post.idPost')
            ->where('lang.name', '=', LocaleMiddleware::getLocale())
            ->orderBy('post.create_date', 'DESC')
            ->take(2)
            ->get();
        return $posts;
    }

}
