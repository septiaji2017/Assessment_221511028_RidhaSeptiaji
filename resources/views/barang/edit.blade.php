@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')

<div class="container-fluid py-7">

    <form method="POST" action="{{ route('barang.update', ['id' => $barang->KodeBarang]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="KodeBarang">Kode Barang:</label>
            <input type="text" class="form-control" name="KodeBarang" value="{{ $barang->KodeBarang }}" disabled>
        </div>


        <div class="form-group">
            <label for="NamaBarang">Nama Barang:</label>
            <input type="text" class="form-control" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>
        </div>



        <div class="form-group">
            <label for="Satuan">Satuan:</label>
            <input type="text" class="form-control" name="Satuan" value="{{ $barang->Satuan }}" required>
        </div>



        <div class="form-group">
            <label for="HargaSatuan">Harga Satuan:</label>
            <input type="number" class="form-control" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required>
        </div>



        <div class="form-group">
            <label for="Stok">Stok:</label>
            <input type="number" class="form-control" name="Stok" value="{{ $barang->Stok }}" required>
        </div>


        <button type="submit" class="btn btn-sm mb-2 me-1 btn-primary align-left justify-content-end"">Create Barang</button>
    </form>

    @include('layouts.footers.auth.footer')
</div>
@endsection