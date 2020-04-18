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
        <li class="breadcrumb-item active">Create</li>
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
                                        <form action="{{ action('PersediaanAkhirController@store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Kode Barang</label>
                                                <input class="form-control" type="text" name="kode_barang" placeholder="Kode Barang"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input class="form-control" type="date" name="tanggal"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Pokok</label>
                                                <input class="form-control" type="number" name="harga_pokok" placeholder="Harga Pokok"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Jual</label>
                                                <input class="form-control" type="number" name="harga_jual" placeholder="Harga Jual"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Awal</label>
                                                <input class="form-control" type="number" name="jumlah_awal" placeholder="Jumlah Awal"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Penjualan</label>
                                                <input class="form-control" type="number" name="jumlah_penjualan" placeholder="Jumlah Penjualan"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Masuk</label>
                                                <input class="form-control" type="number" name="jumlah_masuk" placeholder="Jumlah Masuk"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input class="form-control" type="number" name="total" placeholder="Total"/>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <a href="{{ action('PersediaanAkhirController@index') }}" class="btn btn-default"> Kembali</a>
                                        </form>
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