@extends('Layouts.main')

@section('main')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-3">Tambah Barang</h2>
                
                <form class="row g-3" action="{{ route('tambahBarangProses') }}" method="post">
                    @csrf
                    <div class="col-md-6 mb-2">
                      <label for="namabarang" class="form-label">Nama Barang</label>
                      <input type="text" class="form-control" name="nama_barang" id="namabarang" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="stock" class="form-label">stock barang</label>
                      <input type="number" class="form-control" name="stock" id="stock" required>
                    </div>
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">sudah</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection