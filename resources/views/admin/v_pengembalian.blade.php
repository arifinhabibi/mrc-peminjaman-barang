@extends('layouts.main')

@section('main')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">

                        <h2 class="mb-3">Mau baliin ngap</h2>
                    </div>
                    <div class="col-md-3">
                        <form class="form-inline mr-auto w-100 " action="">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control"
                                    placeholder="cari nama guru...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">

                    <table class="table mt-4 mb-5">
                        <thead>
                          <tr>
                            <th scope="col">no</th>
                            <th scope="col">barang</th>
                            <th scope="col">quantity</th>
                            <th scope="col">nama peminjam</th>
                            <th scope="col">keperluan</th>
                            <th scope="col">tanggal peminjaman</th>
                            <th scope="col">durasi pinjaman</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($loans as $loan)
                            @if ($loan->return_goods == 'belum')
                            <tr class="text-center">
                              <th scope="row">{{ $no++ }}</th>
                              <th scope="col">{{ $loan->goods }}</th>
                              <th scope="col">{{ $loan->amount }}</th>
                              <th scope="col">{{ $loan->borrower }}</th>
                              <th scope="col">{{ $loan->necessity }}</th>
                              <th scope="col">{{ $loan->date_loan }}</th>
                              @php
                                 $diff =  date_diff(date_create($loan->date_loan), date_create($loan->duration) );
                                @endphp
                                <th>{{ $diff->format("%r%a") }} hari</th>
                              <th scope="col"><a href="{{ route('returnGoodsProcess', $loan->id) }}" class="btn btn-info">selesai</a></th>
                            </tr>
                            @endif
                            @endforeach
    
                        </tbody>
                      </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection