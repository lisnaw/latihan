<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    h1 {
        text-align: center;
        color: #9a70a2;
    }
    table {
        width: 70%;

        border-collapse: collapse;
        margin: 40px auto;
        padding: 60px;
    }
    th, td {
        border: 1px solid rgb(54, 8, 8);
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #e8d8eb;
    }
</style>
<body>

   <div style="text-align: center;">
    <h1>List Belanja</h1>

    <div style="display: flex; justify-content: center;">
        <a href="{{ url('/input') }}">
             <button type="button" class="btn btn-primary">Tambah</button>
        </a>
    </div>
   </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama barang</th>
                <th>Harga barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftar as $index => $daftaritem)
            <tr>
                <td>{{ $index + $daftar->firstItem() }}</td>
                <td>{{ $daftaritem->nama_barang }}</td>
                <td>{{ $daftaritem->harga_barang }}</td>
                <td>{{ $daftaritem->jumlah }}</td>
                <td>{{ $daftaritem->status }}</td>
                <td>
                    <form action="/daftar/{{ $daftaritem->id }}/edit" method="GET">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="/daftar/{{ $daftaritem->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   <nav class="d-flex justify-content-center" aria-label="Page navigation">
        {{ $daftar->links() }}
    </nav>
</body>
</html>
