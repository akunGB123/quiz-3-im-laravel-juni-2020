<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Artikel extends Model
{
    protected $table = 'Artikel';
    //protected $fillable = ['judul', 'isi', 'slug', 'tag'];

    protected $guarded = [];

    public static function store($request){
        $request['slug'] = str::slug(strtolower($request['judul']),'-');
        $new_artikel = new Artikel;

        $new_artikel->judul = $request['judul'];
        $new_artikel->isi = $request['isi'];
        $new_artikel->slug = $request['slug'];
        $new_artikel->tag = $request['tag'];
        $new_artikel->id_user = $request['id_user'];
        //dd($new_artikel);
        $new_artikel->save();
        return $new_artikel;
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_user', 'id_user');
    }
}
