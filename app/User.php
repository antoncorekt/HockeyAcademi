<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'Users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'password','remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $primaryKey = 'idUser';

    //for insert entry to main page from different url
    public static function insertEntry($ip, $date, $url){
        $insert = DB::table('entry_to_site')->insert([
            ['ip' => $ip, 'date' => $date, 'link' => $url]
        ]);
        return $insert;

    }
}
