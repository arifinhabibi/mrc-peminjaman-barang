@extends('Layouts.main')


@section('main')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">

                        <h2 class="mb-3">Riwayat Peminjaman</h2>
                    </div>
                    <div class="col-md-2">
                         <a href="{{ route('print') }}" class="btn btn-primary">print</a>
                    </div>
                </div>
            
            <div class="table-responsive">
                
                <table class="table mt-4 mb-5">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>barang</th>
                        <th>Quantity</th>
                        <th>nama peminjam</th>
                        <th>keperluan</th>
                        <th>tanggal peminjaman</th>
                        <th>durasi pinjaman</th>
                        <th>status pengembalian</th>
                        <th>tanggal pengembalian</th>
                        <th>diterima oleh</th>
                    </tr>
                </thead>
                    @php
                        $no = 1;
                        @endphp
                    <tbody>
                        @foreach ($loans as $loan)
                        <tr class="text-center  ">
                            <th>{{ $no++ }}</th>
                            <th>{{ $loan->goods }}  {{ $loan->type }}</th>
                            <th>{{ $loan->amount }}</th>
                            <th>{{ $loan->borrower }}</th>
                            <th>{{ $loan->necessity }}</th>
                            <th>{{ $loan->date_loan }}</th>
                            @php
                             $diff =  date_diff(date_create($loan->date_loan), date_create($loan->duration) );
                            @endphp
                            <th>{{ $diff->format("%r%a") }} hari</th>
                            <th><span class="badge {{ $loan->return_goods == 'belum' ? 'badge-danger' : 'badge-success' }} text-uppercase">{{ $loan->return_goods }}</span> </th>
                            <th>{{ $loan->date_return }}</th>
                            <th>{{ $loan->receiver }}</th>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
            </div>
        </div>
    </div>
 </div>
@endsection