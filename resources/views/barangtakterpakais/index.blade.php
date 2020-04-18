@extends('layouts.admin')

@section('content')
@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Barang Tak Terpakai</li>
        <li class="breadcrumb-item active">Index</li>
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
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-succes">
                                    <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>CRUD Gudang Barang</h1>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="/search" method="GET">
                                            <div class="input-group">
                                            <input type="search" name="search" class="form-control">
                                            <span class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <a href="{{ action('BarangTakTerpakaisController@create') }}" class="btn btn-primary"> + Tambah Data</a>
                                    </div>
                                </div>
                                    <form method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button formaction="/deleteall" type="submit" class="btn btn-danger">Delete All Selected</button>
                                    <p></p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" class="selectall"></th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>tanggal</th>
                                                <th>alasan</th>
                                                <th width="230">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($barangtakterpakais as $btt)
                                                <tr>
                                                    <td><input type="checkbox" name="ids[]" class="selectbox" value="{{ $btt -> id }}"></td>
                                                    <td>{{ $btt -> kodebarang}}</td>
                                                    <td>{{ $btt -> namabarang}}</td>
                                                    <td>{{ $btt -> tanggal}}</td>
                                                    <td>{{ $btt -> alasan}}</td>
                                                    <td>
                                                        <a href="{{ action('BarangTakTerpakaisController@show', $btt->id) }}" class="btn btn-show">Show</a>
                                                        <a href="{{ action('BarangTakTerpakaisController@edit', $btt->id) }}" class="btn btn-warning">Ubah</a>
                                                        <button formaction="{{ action('BarangTakTerpakaisController@destroy', $btt->id) }}" type="submit" class="btn btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><input type="checkbox" class="selectall2"></th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>tanggal</th>
                                                <th>alasan</th>
                                                <th width="230">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    Halaman : {{ $barangtakterpakais->currentPage() }} <br/>
                                    Jumlah Data : {{ $barangtakterpakais->total() }} <br/>
                                    Data Per Halaman : {{ $barangtakterpakais->perPage() }} <br/>
                                    <p><br/></p>
                                    {{ $barangtakterpakais->links() }}
                                </form>
                                

                                <script type="text/javascript">
                                    $('.selectall').click(function(){
                                    $('.selectbox').prop('checked', $(this).prop('checked'));
                                    $('.selectall2').prop('checked', $(this).prop('checked'));
                                })
                                    $('.selectall2').click(function(){
                                    $('.selectbox').prop('checked', $(this).prop('checked'));
                                    $('.selectall').prop('checked', $(this).prop('checked'));
                                })
                                    $('.selectbox').change(function(){
                                    var total = $('.selectbox').length;
                                    var number = $('.selectbox:checked').length;
                                if(total == number){
                                    $('.selectall').prop('checked', true);
                                    $('.selectall2').prop('checked', true);
                                }else{
                                    $('.selectall').prop('checked', false);
                                    $('.selectall2').prop('checked', false);
                                }
                                })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@endsection








