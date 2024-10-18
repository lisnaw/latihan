<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit List Belanja</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
   
        body {
            background-color: #a0c9f15d;
        }
        .container {
            margin-top: 40px;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            background-color: #7aa9df;
            color: #fff;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #7bb2ec;
            border: none;
        }
        .btn-primary:hover {
            background-color: #227ee0;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Edit List Belanja
        </div>
        <div class="card-body">
            <form action="/daftar/{{ $daftar->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $daftar->nama_barang }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="{{ $daftar->harga_barang }}" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $daftar->jumlah }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <textarea class="form-control" id="status" name="status" required>{{ $daftar->deskripsi }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
