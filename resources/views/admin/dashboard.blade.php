@extends('layouts.main')

@section('main')
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
      <a href="{{ route('tambahBarang') }}" class="btn btn-success mb-3">tambah barang</a>
      <div class="header-body">
        <!-- Card stats -->
        <div class="row">
         

          @forelse ($datas as $data)
               
            <div class="col-xl-3  col-lg-6 pt-md-4">
              <div class="card card-stats mb-2 mb-xl-0">
                <div class="card-body mb-2 ">
                  <div class="row mb-4">
                    <div class="col">
                      <span class="h2 text-uppercase font-weight-bold mb-0">{{ $data->nama_barang }} </span>
                      <h5 class="card-title  text-muted mt-2 mb-0">Tersedia {{ $data->stock }}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <a href="{{ route('hapusBarang', $data->id) }}" class="btn btn-danger">Hapus</a>
                    </div>
                    <div class="col-6">
                      <a href="{{ route('ubahBarang', $data->id) }}" class="btn btn-warning">Ubah</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          @empty  
            <h1 class="text-white mt-5">data tidak ditemukan</h1>
          @endforelse
          
          
          

        </div>
      </div>
    </div>
  </div>
@endsection