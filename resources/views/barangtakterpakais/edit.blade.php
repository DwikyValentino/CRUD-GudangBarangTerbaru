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
        <li class="breadcrumb-item active">Barang Tak Terpakai</li>
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
                                        @foreach($barangtakterpakais as $btt)
                                            <form action="{{ action('BarangTakTerpakaisController@update', $btt->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label>Kode Barang</label>
                                                    <input type="text" name="kodebarang" class="form-control" value="{{ $btt->kodebarang }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="namabarang" class="form-control" value="{{ $btt->namabarang }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input type="date" name="tanggal" class="form-control" value="{{ $btt->tanggal }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alasan</label>
                                                    <textarea name="alasan" class="form-control">{{ $btt->alasan }}</textarea>
                                                    {{-- <input type="text" name="nilai" class="form-control" value="{{ $btt->nilai }}"> --}}
                                                </div>
                                                <button type="submit" class="btn btn-warning">Update</button>
                                                <a href="{{ action('BarangTakTerpakaisController@index') }}" class="btn btn-default">Back</a>
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