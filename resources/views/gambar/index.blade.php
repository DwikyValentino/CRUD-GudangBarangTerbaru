@extends('layouts.admin')

@section('content')
@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Gambar Barang</li>
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
                                        <h1>Gambar Gudang Barang</h1>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <form action="/searchlaporanbarang" method="GET">
                                            <div class="input-group">
                                            <input type="search" name="searchlaporanbarang" class="form-control">
                                            <span class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </span>
                                            </div>
                                        </form>
                                    </div> --}}
                                    <div class="col-md-2 text-right">
                                        <a href="{{ action('GambarController@create') }}" class="btn btn-primary"> + Tambah Gambar</a>
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
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>Keterangan</th>
                                                <th width="230">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($gambar as $g)
                                                <tr>
                                                    <td><input type="checkbox" name="ids[]" class="selectbox" value="{{ $g -> id }}"></td>
                                                    <td>
                                                        @if ($g->gambar)
                                                        <img src="{{ asset('storage/'.$g->gambar) }}" width="70"/>
                                                        @else
                                                        N/A
                                                        @endif
                                                    </td>
                                                    <td>{{ $g->namabarang }}</td>
                                                    <td>{{ $g->keterangan }}</td>
                                                    
                                                    <td>
                                                        <a href="{{ action('GambarController@show', $g->id) }}" class="btn btn-show">Show</a>
                                                        {{-- <a href="{{ action('GambarController@edit', $g->id) }}" class="btn btn-warning">Ubah</a> --}}
                                                        <button formaction="{{ action('GambarController@destroy', $g->id) }}" type="submit" class="btn btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    Halaman : {{ $gambar->currentPage() }} <br/>
                                    Jumlah Data : {{ $gambar->total() }} <br/>
                                    Data Per Halaman : {{ $gambar->perPage() }} <br/>
                                    <p><br/></p>
                                    {{ $gambar->links() }}
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








