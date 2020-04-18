<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanbarang = DB::table('laporanbarang')->paginate(15);
        return view('laporanbarang.index', ['laporanbarang' => $laporanbarang ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $laporanbarang = DB::table('laporanbarang')->where('namabarang', 'like', '%'.$search.'%')->paginate(15);
        return view('laporanbarang.index', ['laporanbarang' => $laporanbarang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporanbarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'stokawal' => 'required',
            'barang_masuk' => 'required',
            'barang_keluar' => 'required',
            'stokakhir' => 'required'
        ]);
        $kodebarang = $request->get('kodebarang');
        $namabarang = $request->get('namabarang');
        $stokawal = $request->get('stokawal');
        $barang_masuk = $request->get('barang_masuk');
        $barang_keluar = $request->get('barang_keluar');
        $stokakhir = $request->get('stokakhir');
        $laporanbarang = DB::insert('insert into laporanbarang(kodebarang, namabarang, stokawal, barang_masuk, barang_keluar, stokakhir) value(?,?,?,?,?,?)', [$kodebarang, $namabarang, $stokawal, $barang_masuk, $barang_keluar, $stokakhir]);
        if($laporanbarang){
            $red = redirect('laporanbarang')->with('succes', 'Data has been added');
        } else{
            $red = redirect('laporanbarang/create')->with('danger', 'Input Data Failed, please try again');
        }
        return $red;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporanbarang = DB::select('select * from laporanbarang where id=?',[$id]);
        return view('laporanbarang.show', ['laporanbarang'=> $laporanbarang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporanbarang = DB::select('select * from laporanbarang where id=?',[$id]);
        return view('laporanbarang.edit', ['laporanbarang' => $laporanbarang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'stokawal' => 'required',
            'barang_masuk' => 'required',
            'barang_keluar' => 'required',
            'stokakhir' => 'required'
        ]);
        
        $kodebarang = $request->get('kodebarang');
        $namabarang = $request->get('namabarang');
        $stokawal = $request->get('stokawal');
        $barang_masuk = $request->get('barang_masuk');
        $barang_keluar = $request->get('barang_keluar');
        $stokakhir = $request->get('stokakhir');
        $laporanbarang = DB::update('update laporanbarang set kodebarang=?, namabarang=?, stokawal=?, barang_masuk=?, barang_keluar=?, stokakhir=? where id=?',[$kodebarang, $namabarang, $stokawal, $barang_masuk, $barang_keluar, $stokakhir, $id]);
        if($laporanbarang){
            $red = redirect('laporanbarang')->with('success','Data has been updated');
        } else{
            $red = redirect('laporanbarang/edit/'.$id)->with('danger','Error Update please try again');
        }
        return $red;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporanbarang = DB::delete('delete from laporanbarang where id=?',[$id]);
        $red = redirect('laporanbarang');
        return $red;
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');
        $dbs = DB::delete('delete from laporanbarang where id in ('.implode(",",$ids).')');
        return redirect('laporanbarang');
    }
}
