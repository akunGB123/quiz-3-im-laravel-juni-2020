<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'User';

    protected $guarded = [];


    public function artikel(){
        return $this->hasMany('App\Artikel', 'id_user', 'id_user');
    }
}
