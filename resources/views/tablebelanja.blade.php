<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global mint theme */
        body {
            background-color: #f0f8f7;
        }
        h1 {
            text-align: center;
            color: #57c4ad;
            font-weight: bold;
        }
        .table-container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #b2e1d8;
            color: #333;
        }
        td {
            background-color: #fff;
        }
        tr:nth-child(even) td {
            background-color: #f1f9f8;
        }
        tr:hover td {
            background-color: #e0f7f4;
        }
        .btn-primary {
            background-color: #3d9bac;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-primary:hover {
            background-color: #45a591;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .pagination {
            margin-top: 20px;
        }
        .btn-tambah {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
        }
        .pagination .page-link {
        background-color: #b2e1d8;
        color: #333;
        border: none;
        margin: 0 2px;
    }
    .pagination .page-link:hover {
        background-color: #57c4ad;
        color: white;
    }
    .pagination .page-item.active .page-link {
        background-color: #3d9bac;
        border-color: transparent;
        color: white;
    }
    .pagination .page-item.disabled .page-link {
        background-color: #e0f7f4;
        color: #ccc;
        border: none;
    }
    </style>
</head>
<body>

<div class="container">
    <h1>List Belanja</h1>

    <div class="btn-tambah">
        <a href="{{ url('/input') }}">
            <button type="button" class="btn btn-primary btn-lg">Tambah</button>
        </a>
    </div>

    <div class="table-container">
        <table class="table table-hover table-bordered">
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
                        <div class="action-buttons">
                            <form action="/daftar/{{ $daftaritem->id }}/edit" method="GET">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            <form action="/daftar/{{ $daftaritem->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<nav class="pagination justify-content-center">
    <ul class="pagination">
        {{ $daftar->onEachSide(1)->links() }}
    </ul>
</nav>


<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
