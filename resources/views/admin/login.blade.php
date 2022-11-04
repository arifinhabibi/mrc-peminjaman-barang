<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Masuk - MRc Aplikasi Gudangn
  </title>
  <!-- Favicon -->
  <link href=" {{ '/assets/img/brand/favicon.png'  }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ '/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet' }}" />
  <link href=" {{' /assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css' }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href=" {{ '/assets/css/argon-dashboard.css?v=1.1.2 '}}" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="#">
          <img src="{{ '/assets/img/brand/mrc.png'}} " />
        </a>

        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="{{ '/assets/img/brand/blue.png' }}">
                </a>

              </div>
            </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-5">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Selamat datang!</h1>
              <p class="text-lead text-light">Silahkan masuk terlebih dahulu untuk masuk ke halaman dashboard.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          @if ($error = Session::get('error'))
          <div class="alert alert-danger text-center" role="alert">
              {{ $error }}
            </div>
          @endif
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
             
              
              
              <form action="{{ route('loginProcess') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" name="username" type="name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Login </button>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
      <footer class="py-5">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                © 2022 <a href="" class="font-weight-bold ml-1" target="_blank">PKL - MRc Tim</a>
              </div>
            </div>

          </div>
        </div>
      </footer>
    </div>
    <!--   Core   -->
    <script src="'{{ '/assets/js/plugins/jquery/dist/jquery.min.js' }}"></script>
    <script src="{{ '/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js' }}"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="{{ '/assets/js/argon-dashboard.min.js?v=1.1.2'}} "></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
        TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "argon-dashboard-free"
        });
    </script>
</body>

</html>
