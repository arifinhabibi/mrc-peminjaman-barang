@extends('Layouts.main')

@section('main')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-3">Mau Minjem ngap</h2>
                @if ($errors->any())
                      @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                          {{ $error }}
                        </div>
                      @endforeach
                @endif
                
                <form class="row g-3" action="{{ route('loanProcess') }}" method="post">
                    @csrf
                    <div class="col-md-3 mb-2">
                      <label for="nama" class="form-label">Nama Peminjam</label>
                      <select name="borrower" id="nama"class="selectpicker form-control" data-live-search="true">
                        <option>pilih</option>
                          @foreach ($borrowers as $borrower)
                          <option value="{{ $borrower->name }}">{{ $borrower->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="barang" class="form-label">Barang</label>
                        <select name="goods" class="form-control" id="barang">
                            <option>Pilih</option>
                            @foreach ($datas as $data)
                            @if ($data->stock >= 1)
                            <option value="{{ $data->id }}">{{ $data->nama_barang }} Tersedia ({{ $data->stock }})</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 mb-2">
                      <label for="type" class="form-label">tipe barang</label>
                      <input type="text" class="form-control" name="type" id="type" placeholder="tulis disini optional" required>
                    </div>

                     <div class="col-md-2 mb-2">
                      <label for="jumlah" class="form-label">Jumlah</label>
                      <input type="number" class="form-control" name="amount" id="jumlah" placeholder="tulis disini" required>
                    </div>
                    
                    <div class="col-md-2 mb-2">
                      <label for="duration" class="form-label">durasi peminjaman</label>
                      <input type="date" name="duration"class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                      <textarea name="necessity" id="keperluan"  rows="6" class="form-control" placeholder="isi disini..." required></textarea>
                    </div>
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">gasskn</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection