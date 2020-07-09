<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;//modelcustom
use App\Artikel; //model eloquent
use Illuminate\Support\Str;
use App\User;

class ArtikelController extends Controller
{
    public function index(){
        //$artikels = ArtikelModel::getAll_artikel();
        $artikels = Artikel::all();
        dd($artikels);


        return view('artikel.index',compact('artikels'));
    }

    public function create(){
        $users = User::all();
        return view('artikel.create', compact('users'));
    }

    public function store(Request $request){
        //dd($request->all());
        //dd($request['slug']);
        // $new_artikel = ArtikelModel::save_artikel($data);
        // $request['slug'] = str::slug(strtolower($request['judul']),'-');
        // $new_artikel = new Artikel;

        // $new_artikel->judul = $request['judul'];
        // $new_artikel->isi = $request['isi'];
        // $new_artikel->slug = $request['slug'];
        // $new_artikel->tag = $request['tag'];
        // //dd($new_artikel);
        // $new_artikel->save();
        $new_artikel = Artikel::store([
            "judul" => $request['judul'],
            "isi" => $request['isi'],
            "slug" => $request['slug'],
            "tag" => $request['tag'],
            "id_user"=> $request['id_user']
        ]);
        return redirect('/artikel');
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit',compact('artikel'));
    }

    public function update($id, Request $request){
        //dd($request->all());
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
