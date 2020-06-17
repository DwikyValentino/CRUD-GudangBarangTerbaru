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

                                        <form enctype="multipart/form-data" action="{{ action('GambarController@store') }}" method="POST">
                                            @csrf

                                            <label for="gambar">Avatar</label>
                                            <input id="gambar" name="gambar" type="file" class="form-control">
                                            <br>

                                            <label for="namabarang">Nama Barang</label>
                                            <input id="namabarang" name="namabarang" type="text" class="form-control">
                                            <br>

                                            <label for="keterangan">Keterangan Barang</label>
                                            <input id="keterangan" name="keterangan" type="text" class="form-control">
                                            <br>

                                            <input class="btn btn-primary" type="submit" value="Save" />
                                        </form>
                                    </div>
                                    @endsection



                                    