<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit List Belanja</h1>
    <form action="/daftar/{{ $daftar->id }}" method="POST">
        @csrf
        @method('PUT')


        <div>
            <label for="nama_barang">Nama barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" value="{{ $daftar->nama_barang }}" required>
        </div><br>
        <div>
            <label for="harga_barang">harga barang:</label>
            <input type="number" id="harga_barang" name="harga_barang" value="{{ $daftar->harga_barang }}" required>
        </div><br>
        <div>
            <label for="jumlah">jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" value="{{ $daftar->jumlah }}" required>
        </div><br>
        <div>
            <label for="status">status</label>
            <textarea id="status" name="status" required>{{ $daftar->deskripsi }}</textarea>
        </div><br>

        <button type="submit">Update Produk</button>
    </form>

</body>
</html>
