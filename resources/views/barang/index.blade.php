@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')

<div class="container-fluid py-7">
    <div class="row">
        <div class="col-12">
            <a href="{{route('barang.create')}}"
                class="btn btn-sm mb-2 me-1 btn-primary align-left justify-content-end">Add Data</a>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Table Barang</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kode Barang</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Barang</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Satuan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Harga Satuan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Stok</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                <tr>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$barang->KodeBarang}}</p>
                                    </td>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$barang->NamaBarang}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{ $barang->Satuan }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $barang->HargaSatuan
                                            }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $barang->Stok }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('barang.edit', ['id' => $barang->KodeBarang]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('barang.destroy', ['id' => $barang->KodeBarang]) }}"
                                            method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection