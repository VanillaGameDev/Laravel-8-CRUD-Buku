<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuContoller extends Controller
{
    public function index()
    {
        $databuku = \App\Models\Buku::all();
        return view('buku.index',['databuku' =>$databuku]);
    }

    public function create(Request $request)
    {
        \App\Models\Buku::create($request->all());
        return redirect('/buku')->with('sukses','Database buku Sukses Di Buat');
    }

    public function edit($id)
    {
        $buku = \App\Models\Buku::find($id);
        return view('buku.edit',['buku' =>$buku]);
    }

    public function update(Request $request, $id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->update($request->all());
        return redirect('/buku')->with('sukses','Database buku Sukses Di Perbarui');


    }

    public function delete($id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->delete($buku);
        return redirect('/buku')->with('sukses','Database buku Sukses Di Dihapus');
    }
}
