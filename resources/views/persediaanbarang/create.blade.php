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
        <li class="breadcrumb-item active">Persediaan Barang</li>
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
                                        <form action="{{ action('PersediaanBarangController@store') }}" method="POST">
                                            @csrf
                                            <div class="form-group" class="col-md-6">
                                                <label>Kode Barang</label>
                                                <input class="form-control" type="text" name="kodebarang" placeholder="Kode Barang"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input class="form-control" type="text" name="namabarang" placeholder="Nama Barang"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Pokok</label>
                                                <input class="form-control" type="number" name="hargapokok" placeholder="Harga Pokok"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Jual</label>
                                                <input class="form-control" type="number" name="hargajual" placeholder="Harga Jual"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input class="form-control" type="number" name="jumlah" placeholder="Jumlah"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Nilai</label>
                                                <input class="form-control" type="number" name="nilai" placeholder="Nilai"/>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <a href="{{ action('PersediaanBarangController@index') }}" class="btn btn-default"> Kembali</a>
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