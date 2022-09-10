<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
      $barang = DB::table('barang')->paginate(5);
      return view('barang',['barang' => $barang]);
    }

    public function add(Request $request)
    {
      $kode_barang = DB::table('barang')->where('kode_barang','=',$request->kode_barang)->get()->count();
      if ($kode_barang != NULL) {
        return redirect()->back()->with('message', "2");
      }else {
        DB::table('barang')->insert([
          'kode_barang' => $request->kode_barang,
          'nama_barang' => $request->nama_barang
        ]);
        return redirect()->back()->with('message', "1");
      }
    }

    public function edit($kode)
    {
      $barang = DB::table('barang')->where('kode_barang','=',$kode)->get();
      return view('edit',['barang' => $barang]);
    }

    public function update(Request $request)
    {
      $kode_barang = DB::table('barang')->where('kode_barang','=',$request->kode_barang)->get()->count();
      if ($request->kode != $request->kode_barang) {
        if ($kode_barang != NULL) {
          return redirect('/barang')->with('message', "2");
        }else {
          DB::table('barang')->where('kode_barang','=',$request->kode)->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang
          ]);
          return redirect('/barang')->with('message', "1");
        }
      }else {
        DB::table('barang')->where('kode_barang','=',$request->kode)->update([
          'kode_barang' => $request->kode_barang,
          'nama_barang' => $request->nama_barang
        ]);
        return redirect('/barang')->with('message', "1");
      }
    }

    public function delete($kode)
    {
      DB::table('barang')->where('kode_barang','=',$kode)->delete();
      return redirect()->back()->with('message', "1");
    }
}
