<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f6f3;
        }
        .card {
            border-radius: 12px;
            overflow: hidden;
        }
        .card-header {
            background-color: #a9d8ce;
            color: #fff;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            font-weight: 600;
        }
        .btn-primary {
            background-color: #57c4ad;
            border: none;
        }
        .btn-primary:hover {
            background-color: #45a591;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(87, 196, 173, 0.5);
        }
        .alert-danger {
            background-color: #ffe6e6;
            color: #a94442;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h1 class="h4">Tambah List Belanja</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/create" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control shadow-sm" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan nama barang" required>
                        </div>

                        <div class="mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input type="number" class="form-control shadow-sm" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="Masukkan harga barang" required>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control shadow-sm" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" placeholder="Masukkan jumlah barang" required>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <textarea class="form-control shadow-sm" name="status" id="status" placeholder="Catatan status barang (opsional)">{{ old('status') }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
