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
        <li class="breadcrumb-item active">Persediaan Akhir</li>
        <li class="breadcrumb-item active">Edit</li>
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
                                <div class="row">
                                    <div class="col-md-12 offset-md-3">
                                        
                                        @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error  }}</li>
                                            @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @foreach($persediaanakhir as $pb)
                                            <form action="{{ action('PersediaanAkhirController@update', $pb->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label>Kode Barang</label>
                                                    <input type="text" name="kode_barang" class="form-control" value="{{ $pb->kode_barang }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="nama_barang" class="form-control" value="{{ $pb->nama_barang }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input type="date" name="tanggal" class="form-control" value="{{ $pb->tanggal }}" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Pokok</label>
                                                    <input type="text" name="harga_pokok" class="form-control" value="{{ $pb->harga_pokok }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Jual</label>
                                                    <input type="text" name="harga_jual" class="form-control" value="{{ $pb->harga_jual }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Awal</label>
                                                    <input type="number" name="jumlah_awal" class="form-control" value="{{ $pb->jumlah_awal }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Penjualan</label>
                                                    <input type="number" name="jumlah_penjualan" class="form-control" placeholder="{{ $pb->jumlah_penjualan }}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Masuk</label>
                                                    <input type="number" name="jumlah_masuk" class="form-control" placeholder="{{ $pb->jumlah_masuk }}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <input type="text" name="total" class="form-control" value="{{ $pb->total }}">
                                                </div>
                                                <button type="submit" class="btn btn-warning">Update</button>
                                                <a href="{{ action('PersediaanAkhirController@index') }}" class="btn btn-default">Back</a>
                                            </form>
                                        @endforeach
                                    </div>
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