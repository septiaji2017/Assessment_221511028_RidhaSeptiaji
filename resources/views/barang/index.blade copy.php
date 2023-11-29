<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/argon.css') }}">
    <script src="{{ asset('js/argon.js') }}"></script>
</head>

<body>
<div class="container-fluid mt--7">
        <!-- Page content -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Barang List</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td>{{ $barang->KodeBarang }}</td>
                                        <td>{{ $barang->NamaBarang }}</td>
                                        <td>{{ $barang->Satuan }}</td>
                                        <td>{{ $barang->HargaSatuan }}</td>
                                        <td>{{ $barang->Stok }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- @foreach ($barangs as $barang)
    <li>{{ $barang->KodeBarang }}, {{ $barang->NamaBarang }}, {{ $barang->Satuan }}, {{ $barang->HargaSatuan }}, {{ $barang->Stok }}</li>
    @endforeach -->
</body>

</html>