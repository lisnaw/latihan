<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah produk</title>
</head>
<body>

    <h1>Tambah List Belanja</h1>

    @if ($errors->any())
    <p style="color: pink;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </p>
@endif


<form action="/create" method="POST">
    @csrf
    <label for="nama_barang">nama_barang</label>
    <input type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" required><br><br>

    <label for="harga_barang">harga_barang</label>
    <input type="number" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" required><br><br>

    <label for="jumlah">jumlah</label>
    <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" required><br><br>

    <label for="status">status</label>
    <textarea name="status" id="status">{{ old('status') }}</textarea><br><br>

    <button type="submit">Simpan</button>

</form>



</body>
</html>
