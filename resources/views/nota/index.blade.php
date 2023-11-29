@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')

<div class="container-fluid py-7">
    <div class="row">
        <div class="col-12">
            <a href="{{route('barang.create')}}"
                class="btn btn-sm mb-2 me-1 btn-primary align-left justify-content-end">Add Data</a>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Table Nota</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kode Nota</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kode Tenan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kode Kasir</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Nota</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jam Nota</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jumlah Belanja</th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Diskon</th>
                                        
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total</th>                                             

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nota as $notas)
                                <tr>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->KodeNota}}</p>
                                    </td>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->KodeTenan}}</p>
                                    </td>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->KodeKasir}}</p>
                                    </td>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->TglNota}}</p>
                                    </td>                                                                                                                     
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->JamNota}}</p>
                                    </td>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->JumlahBelanja}}</p>
                                    </td> 
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->Diskon}}</p>
                                    </td>
                                    <td>
                                        <p class="align-middle text-center text-xs font-weight-bold mb-0">
                                            {{$notas->Total}}</p>
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