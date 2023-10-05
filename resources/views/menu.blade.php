<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="20220299.141015140632.png">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/all.min.css">
    <link rel="icon" href="logo.jpeg">
    <title>Menu || Monitoring Aktivitas Pejabat</title>
    <style>
    h4{
        margin-top:20px;
        width:400px;
        padding:40px;
    }
    img{
        border-radius:50%;
    }
    </style>
  </head>
  <body>    <!--style="background:url('endek.jpg');"-->
      <nav class="navbar navbar-expand-md navbar-light bg-transparent">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <img src="logo.jpeg" style="height:80px; width:70px;">
                        <h1 style="">SISTEM MONITORING PEJABAT</h1>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
    
      {{-- <form action=""> --}}

        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/datadiri">Data Diri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/setjadwal">Buat Jadwal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pembuktian">Isi Data Kegiatan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/raport">Laporan Kegiatan</a>
                  </li>
              </ul>
            </div>
            <div class="card-body">
                <center>
                    <div class="jumbotron" style="background-image:url('pejabat2.jpeg');height:550px; width:800px; margin-top:50px; border-radius:15%;">
                        {{-- <h1 class="text-center" style=" height:200px; margin-top:-115px;border:1px solid black; background:peachpuff; border-radius:30px; border-color:peachpuff;"><br>MONITORING AKTIVITAS PEJABAT <br> KABUPATEN BADUNG</h1> --}}
                    </div>
                </center>
            </div>
          </div>

      {{-- <a  href="/datadiri"><b>Home</b></a>
      <a  href="/datadiri"><b>Data Diri</b></a>
      <a  href="/setjadwal"><b>Buat Jadwal</b></a>
      <a  href="/pembuktian"><b>Isi Data Kegiatan</b></a>
      <a  href="/raport"><b>Laporan Kegiatan</b></a> --}}
      
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="fontawesome/js/all.min.js"></script>
    <script src="bootstrap/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>