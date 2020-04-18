<!-- FUNGSI EXTENDS DIGUNAKAN UNTUK ME-LOAD MASTER LAYOUTS YANG ADA, KARENA INI ADALAH HALAMAN HOME MAKA KITA ME-LOAD LAYOUTS ADMIN.BLADE.PHP -->
<!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
@extends('layouts.admin')

<!-- TAG YANG DIAPIT OLEH SECTION('TITLE') AKAN ME-REPLACE @YIELD('TITLE') PADA MASTER LAYOUTS -->
@section('title')
    <title>Dashboard</title>
@endsection

<!-- TAG YANG DIAPIT OLEH SECTION('CONTENT') AKAN ME-REPLACE @YIELD('CONTENT') PADA MASTER LAYOUTS -->
@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Laporan Barang</li>
        <li class="breadcrumb-item active">Show</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aktivitas Gudang Barang</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="card" style="width : 350px">
                                    @foreach($laporanbarang as $lb)
                                        <img class="card-img-top" src="https://via.placeholder.com/350x150?text={{$lb->kodebarang}}" />
                                        <div class="card-body">
                                            <div class="card-title">Nama Barang : {{$lb->namabarang}}</div>
                                            <p class="card-text">Stok Awal : {{$lb->stokawal}}</p>
                                            <p class="card-text">Barang Masuk : {{$lb->barang_masuk}}</p>
                                            <p class="card-text">Barang Keluar : {{$lb->barang_keluar}}</p>
                                            <p class="card-text">Stok Akhir : {{$lb->stokakhir}}</p>
                                            <a href="{{action('LaporanBarangController@index')}}" class="btn btn-primary">Back</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection