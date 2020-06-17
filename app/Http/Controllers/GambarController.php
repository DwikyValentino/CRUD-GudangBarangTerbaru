<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gambar = DB::table('gambars')->paginate(15);
        return view('gambar.index', ['gambar' => $gambar ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("gambar.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_gambar  = new \App\Gambar;
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambars', 'public');
            $new_gambar->gambar = $file;
            # code...
        }
        $new_gambar->namabarang = $request->get('namabarang');
        $new_gambar->keterangan = $request->get('keterangan');
        
        $new_gambar->save();
        return redirect()->route('gambar.index')->with('status', "gambar disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gambar = \App\Gambar::findOrFail($id);
        return view('gambar.show', ['gambar' => $gambar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = DB::delete('delete from gambars where id=?',[$id]);
        $red = redirect('gambar');
        return $red;
    }
}
