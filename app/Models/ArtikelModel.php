<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArtikelModel 
{
    public static function get_artikel(){
        $artikel = DB::table('artikel')->where('id', $id)->get();
        return $artikel;
    }

    public static function getAll_artikel(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save_artikel($data){
        unset($data["_token"]);
        $data['slug'] = str::slug(strtolower($data['judul']),'-');
        $new_artikel = DB::table('artikel')->insert($data);
        return $new_artikel;
    }

    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id_artikel',$id)->first();
       // dd($artikel);
        return $artikel;
    }

    public static function update($id, $request){
        unset($request['_token']);
        $request['slug'] = str::slug(strtolower($request['judul']),'-');
        //dd($request);
        $artikel = DB::table('artikel')
                    ->where('id_artikel',$id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi'],
                        'slug' => $request['slug'],
                        'tag' => $request['tag'],
                    ]);
        return $artikel;
    }
    
    public static function destroy($id){
        
        $deleted = DB::table('artikel')
                        ->where('id_artikel',$id)
                        ->delete();
        return $deleted;
    }

}
