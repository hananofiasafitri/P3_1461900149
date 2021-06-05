<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $pelanggan = DB::table('pelanggan')->get();
        return view ('pelanggan0149',['pelanggan'=> $pelanggan]);
    }
    public function tambah()
    {
        return view('tambah0149');
    }
    public function edit($id)
    {
        $pelanggan = DB::table('pelanggan')->where('id',$id)->get();
        return view('edit0149',['pelanggan'=>$pelanggan]);
    }
    public function update(Request $request)
    {
        DB::table('pelanggan')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'alamat' => $request->alamat
        ]);
            return redirect('/pelanggan');
    }
    public function store (Request $request) 
    {
        DB::table('pelanggan')->insert([
        'id' => $request->id,
        'nama' => $request->nama,
        'alamat' => $request->alamat,]);
        return redirect('/pelanggan');
    }
    public function hapus($id)
    {
        DB::table('pelanggan')->where('id',$id)->delete();
        return redirect('/pelanggan');
    }       
    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $pelanggan=DB::table('pelanggan')->where('nama','like',"%".$cari."%")->paginate();
        return view('pelanggan0149',['pelanggan' => $pelanggan]);

    }
}