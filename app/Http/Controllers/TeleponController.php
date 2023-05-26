<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    public function index(){
        $dataTelepon = Telepon::get();
        return view('Telepon.index', ['dataTelepon' => $dataTelepon]);
    }

    public function create(){
        return view('Telepon.create');
    }

    public function store(Request $request){
        Telepon::create($request->all());
        return redirect('/');
    }

    public function edit($id){
        $dataTelepon = Telepon::findOrFail($id);
        return view('Telepon.edit',['dataTelepon' => $dataTelepon]);
    }

    public function update(Request $request, $id){
        $dataTelepon = Telepon::findOrFail($id);
        $dataTelepon->update($request->all());
        return redirect('/');
    }

    public function delete($id){
        $dataTelepon = Telepon::findOrFail($id);
        $dataTelepon->delete();
        return redirect('/');
    }
}
