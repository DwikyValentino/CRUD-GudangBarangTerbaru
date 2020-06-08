<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>CRUD Gudang Barang</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/sweeralert2/0.4.5/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetakert2/0.4.5/sweetalert2.css">
</head>
</body>

    <div class="container">
        <p><br/></p>
        @yield('content')
    </div>
</body>
</html>