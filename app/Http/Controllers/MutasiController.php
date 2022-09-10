<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
  public function index()
  {
    $mutasi = DB::table('mutasi_barang')->join('barang','mutasi_barang.kode_barang','=','barang.kode_barang')->paginate(5);
    return view('mutasi',['mutasi' => $mutasi]);
  }

  public function form()
  {
    $barang = DB::table('barang')->get();
    return view('input_mutasi',['barang' => $barang]);
  }

  public function add(Request $request)
  {
      DB::table('mutasi_barang')->insert([
        'no_bukti' => $request->no_mutasi,
        'tanggal' => $request->tanggal,
        'status_barang' => $request->status,
        'quantity' => $request->quantity,
        'kode_barang' => $request->kode_barang,
      ]);
      return redirect()->back()->with('message', "1");
  }

  public function edit($kode)
  {
    $mutasi = DB::table('mutasi_barang')->join('barang','mutasi_barang.kode_barang','=','barang.kode_barang')->where('mutasi_barang.id_mutasi','=',$kode)->get();
    $barang = DB::table('barang')->get();
    return view('edit_mutasi')->with('mutasi', $mutasi)->with('barang', $barang);
  }

  public function update(Request $request)
  {
      DB::table('mutasi_barang')->where('id_mutasi','=',$request->id_mutasi)->update([
        'no_bukti' => $request->no_mutasi,
        'tanggal' => $request->tanggal,
        'status_barang' => $request->status,
        'quantity' => $request->quantity,
        'kode_barang' => $request->kode_barang,
      ]);
      return redirect('/mutasi/data')->with('message', "1");
  }

  public function delete($kode)
  {
    DB::table('mutasi_barang')->where('id_mutasi','=',$kode)->delete();
    return redirect()->back()->with('message', "1");
  }

  public function cari_mutasi()
  {
    $barang = DB::table('barang')->get();
    return view('cari_mutasi',['barang' => $barang]);
  }

  public function search(Request $request)
  {
    if ($request->kode_barang == NULL) {
      $mutasi = DB::table('mutasi_barang')->join('barang','mutasi_barang.kode_barang','=','barang.kode_barang')->whereBetween('tanggal', [$request->awal, $request->akhir])->orderBy('mutasi_barang.kode_barang','asc')->get();
    }else {
      $mutasi = DB::table('mutasi_barang')->join('barang','mutasi_barang.kode_barang','=','barang.kode_barang')->whereBetween('tanggal', [$request->awal, $request->akhir])->where('mutasi_barang.kode_barang','=',$request->kode_barang)->orderBy('mutasi_barang.kode_barang','asc')->get();
    }
    return view('report_mutasi', ['mutasi' => $mutasi]);
  }
}
