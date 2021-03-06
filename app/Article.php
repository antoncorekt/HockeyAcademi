<?php

namespace App;

use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    protected $primaryKey = 'idPText';
    protected $table = 'post_text';
    protected $fillable = array('idPText', 'fkPost', 'fkLang', 'title', 'tags', 'text');

    private $idPost;
    private $_article;

    public function __construct($id, array $attributes = array()) {
        $this->idPost = $id;
        $this->_article = self::getPostById($id);
        parent::__construct($attributes);
    }

    public static function getPostById($id){
        $post = DB::table('post_text')
            ->join('lang', 'post_text.fkLang', '=', 'lang.idLang')
            ->join('post', 'post_text.fkPost', '=', 'post.idPost')
            ->where([['lang.name', '=', LocaleMiddleware::getLocale()], ['post_text.idPText', '=', $id]])
            ->first();
        return $post;
    }

    public static function getParentIdPost($idPost){
        $post = DB::table('post_text')
            ->where('post_text.idPText', '=', $idPost)
            ->first();
        return $post->fkPost;
    }

    public static function getPostIdByParentIdAndLang($idParent, $lang){
        $post = DB::table('post_text')
            ->join('lang', 'post_text.fkLang', '=', 'lang.idLang')
            ->where([['lang.name', '=', $lang], ['post_text.fkPost', '=', $idParent]])
            ->first();
        return $post->idPText;
    }

}
