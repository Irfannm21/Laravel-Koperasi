<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/my-app.css')}}">
    <title>Form Registrasi Anggota</title>
</head>
<body>

<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8 col-xl 6">
            <h1>Form Pendafataran Anggota Koperasi</h1>
            <hr>

            <form action="{{route('anggota-koperasi.store')}}" method="POST">
                @csrf
                @include('koperasi.anggota.form')
                <button type="submit" class="btn btn-primary mb-2">Daftar</button>
            </form>
        </div>
    </div>
</div>
<script src="{{ mix('/js/my-app.js') }}"></script>
</body>
</html>
