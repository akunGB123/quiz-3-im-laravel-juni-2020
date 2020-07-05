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
        $data['slug'] = preg_replace("/[^A-Za-z0-9]/", '-', strtolower($data['judul']));
        $new_artikel = ArtikelModel::save_artikel($data);
        return redirect('/artikel');
    }
}
