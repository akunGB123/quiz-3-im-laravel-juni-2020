<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;


class ArtikelController extends Controller
{
    public function index(){
        $artikels = ArtikelModel::getAll_artikel();
        return view('artikel.index',compact('artikels'));
    }

    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $new_artikel = ArtikelModel::save_artikel($data);
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
