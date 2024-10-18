<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar;
use Illuminate\Support\Facades\Validator;

class DaftarController extends Controller
{


   public function daftar(Request $request) {
    $validator = validator::make($request->all(), [
            'nama_barang' => 'required|string|max:225',
            'harga_barang' => 'required|integer|min:2',
            'jumlah' => 'required|numeric|min:50',
            'status' => 'nullable|string',

    ]);

    if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
    }

    $daftar = new Daftar();
    $daftar->nama_barang = $request->nama_barang;
    $daftar->harga_barang = $request->harga_barang;
    $daftar->jumlah = $request->jumlah;
    $daftar->status = $request->status;
    $daftar->save();

    return redirect('/show');}

public function show() {
    $daftar = Daftar::paginate(3);
    return view("tablebelanja", compact("daftar"));
}

public function edit($id) {
    $daftar = Daftar::findOrFail($id);
    // @dd($daftar);
    return view("editdaftar", compact("daftar"));
}

public function update(Request $request, $id){
    $daftar = daftar::findOrFail($id);

    $daftar->nama_barang = $request->nama_barang;
    $daftar->harga_barang = $request->harga_barang;
    $daftar->jumlah = $request->jumlah;
    $daftar->status = $request->status;
    $daftar->save();

    return redirect('/show');

}

public function destroy($id){
    $daftar = daftar::findOrFail($id);
    $daftar->delete();

    return redirect('/show');
}

public function input(){
    return view("inputdaftar");
}

}
