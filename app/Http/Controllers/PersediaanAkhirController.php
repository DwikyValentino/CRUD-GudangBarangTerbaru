<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersediaanAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persediaanakhir = DB::table('persediaanakhir')->paginate(15);
        return view('persediaanakhir.index', ['persediaanakhir' => $persediaanakhir ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $persediaanakhir = DB::table('persediaanakhir')->where('nama_barang', 'like', '%'.$search.'%')->paginate(15);
        return view('persediaanakhir.index', ['persediaanakhir' => $persediaanakhir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persediaanakhir.create');
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'tanggal' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'jumlah_awal' => 'required',
            'jumlah_penjualan' => 'required',
            'jumlah_masuk' => 'required',
            'total' => 'required'
        ]);
        $kode_barang = $request->get('kode_barang');
        $nama_barang = $request->get('nama_barang');
        $tanggal = $request->get('tanggal');
        $harga_pokok = $request->get('harga_pokok');
        $harga_jual = $request->get('harga_jual');
        $jumlah_awal = $request->get('jumlah_awal');
        $jumlah_penjualan = $request->get('jumlah_penjualan');
        $jumlah_masuk= $request->get('jumlah_masuk');
        $total = $request->get('total');
        $persediaanakhir = DB::insert('insert into persediaanakhir(kode_barang, nama_barang, tanggal, harga_pokok, harga_jual, jumlah_awal, jumlah_penjualan, jumlah_masuk, total) value(?,?,?,?,?,?,?,?,?)', [$kode_barang, $nama_barang, $tanggal, $harga_pokok, $harga_jual, $jumlah_awal, $jumlah_penjualan, $jumlah_masuk, $total]);
        if($persediaanakhir){
            $red = redirect('persediaanakhir')->with('succes', 'Data has been added');
        } else{
            $red = redirect('persediaanakhir/create')->with('danger', 'Input Data Failed, please try again');
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
        $persediaanakhir = DB::select('select * from persediaanakhir where id=?',[$id]);
        return view('.persediaanakhir.show', ['persediaanakhir'=> $persediaanakhir]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persediaanakhir = DB::select('select * from persediaanakhir where id=?',[$id]);
        return view('persediaanakhir.edit', ['persediaanakhir' => $persediaanakhir]);
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'tanggal' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'jumlah_awal' => 'required',
            'jumlah_penjualan' => 'required',
            'jumlah_masuk' => 'required',
            'total' => 'required'
        ]);
        
        $kode_barang = $request->get('kode_barang');
        $nama_barang = $request->get('nama_barang');
        $tanggal = $request->get('tanggal');
        $harga_pokok = $request->get('harga_pokok');
        $harga_jual = $request->get('harga_jual');
        $jumlah_awal = $request->get('jumlah_awal');
        $jumlah_penjualan = $request->get('jumlah_penjualan');
        $jumlah_masuk= $request->get('jumlah_masuk');
        $total = $request->get('total');
        $persediaanakhir = DB::update('update persediaanakhir set kode_barang=?, nama_barang=?, tanggal=? ,harga_pokok=?, harga_jual=?, jumlah_awal=?, jumlah_penjualan=?, jumlah_masuk=?, total=? where id=?',[$kode_barang, $nama_barang, $tanggal, $harga_pokok, $harga_jual, $jumlah_awal, $jumlah_penjualan, $jumlah_masuk, $total, $id]);
        if($persediaanakhir){
            $red = redirect('persediaanakhir')->with('success','Data has been updated');
        } else{
            $red = redirect('persediaanakhir/edit/'.$id)->with('danger','Error Update please try again');
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
        $persediaanakhir = DB::delete('delete from persediaanakhir where id=?',[$id]);
        $red = redirect('persediaanakhir');
        return $red;
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');
        $dbs = DB::delete('delete from persediaanakhir where id in ('.implode(",",$ids).')');
        return redirect('persediaanakhir');
    }
}

