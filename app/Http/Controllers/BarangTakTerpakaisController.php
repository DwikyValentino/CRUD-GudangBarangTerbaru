<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangTakTerpakaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangtakterpakais = DB::table('barangtakterpakais')->paginate(15);
        return view('barangtakterpakais.index', ['barangtakterpakais' => $barangtakterpakais ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $barangtakterpakais = DB::table('barangtakterpakais')->where('namabarang', 'like', '%'.$search.'%')->paginate(15);
        return view('barangtakterpakais.index', ['barangtakterpakais' => $barangtakterpakais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangtakterpakais.create');
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
            'tanggal' => 'required',
            'alasan' => 'required'
        ]);
        $kodebarang = $request->get('kodebarang');
        $namabarang = $request->get('namabarang');
        $tanggal = $request->get('tanggal');
        $alasan = $request->get('alasan');
        $barangtakterpakais = DB::insert('insert into barangtakterpakais(kodebarang, namabarang, tanggal, alasan) value(?,?,?,?)', [$kodebarang, $namabarang, $tanggal, $alasan]);
        if($barangtakterpakais){
            $red = redirect('barangtakterpakais')->with('succes', 'Data has been added');
        } else{
            $red = redirect('barangtakterpakais/create')->with('danger', 'Input Data Failed, please try again');
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
        $barangtakterpakais = DB::select('select * from barangtakterpakais where id=?',[$id]);
        return view('.barangtakterpakais.show', ['barangtakterpakais'=> $barangtakterpakais]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangtakterpakais = DB::select('select * from barangtakterpakais where id=?',[$id]);
        return view('barangtakterpakais.edit', ['barangtakterpakais' => $barangtakterpakais]);
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
            'tanggal' => 'required',
            'alasan' => 'required'
        ]);
        
        $kodebarang = $request->get('kodebarang');
        $namabarang = $request->get('namabarang');
        $tanggal = $request->get('tanggal');
        $alasan = $request->get('alasan');
        $barangtakterpakais = DB::update('update barangtakterpakais set kodebarang=?, namabarang=?, tanggal=?, alasan=? where id=?',[$kodebarang, $namabarang, $tanggal, $alasan, $id]);
        if($barangtakterpakais){
            $red = redirect('barangtakterpakais')->with('success','Data has been updated');
        } else{
            $red = redirect('barangtakterpakais/edit/'.$id)->with('danger','Error Update please try again');
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
        $barangtakterpakais = DB::delete('delete from barangtakterpakais where id=?',[$id]);
        $red = redirect('barangtakterpakais');
        return $red;
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');
        $dbs = DB::delete('delete from barangtakterpakais where id in ('.implode(",",$ids).')');
        return redirect('barangtakterpakais');
    }
}
