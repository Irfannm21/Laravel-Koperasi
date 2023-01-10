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
            <h1>Anggota Koperasi</h1>
            <hr>

            <table class="table table-stripped">
                <thead>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($results as $item)
                    <tr>
                        <td>{{$item->kode ?? ''}}</td>
                        <td>{{$item->nama ?? ''}}</td>
                        <td>{{$item->departemen ?? ''}}</td>
                        <td>{{$item->bagian ?? ''}}</td>
                        <td>
                            <a href="{{route("anggota-koperasi.edit",$item->id)}}">Edit</a> |
                            <a href="route('anggota-koperasi/destroy', $item->id)">Hapus</a>
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ mix('/js/my-app.js') }}"></script>
</body>
</html>
