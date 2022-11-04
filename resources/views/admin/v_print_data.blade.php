<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document {{ date('d F Y') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('/assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('/assets/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
  <style>
    body {
        margin: 50px
    }
    .image {
        width: 200px;
        height: 100px;
    }
    .logo {
        width: 100px;
        height: 100px;
    }
    .header {
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
    }
    .date {
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }
    hr {
        border: 2px solid #000;
    }
  </style>
</head>
<body>
    @php
    $no = 1;
    @endphp

    <div class="container-fluid">
        <div class="row justify-content-between">
            <img src="{{ asset('assets/img/brand/mrc.png') }}" alt="" class="image">
            <div class="header">
                data peminjaman <br> maintenance and repair calibration <br> smk negeri 1 subang
            </div>
            <img src="{{ asset('assets/img/brand/logo.png') }}" alt="" class="logo">
        </div>
        <hr>
        <div class="date">
            bulan : {{ date('F Y') }}
        </div>

                
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
                        <th>status</th>
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
    <script>
        window.print();
    </script>
</body>
</html>