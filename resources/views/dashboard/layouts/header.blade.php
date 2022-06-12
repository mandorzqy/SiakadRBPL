<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
  <header id="header" class="d-flex align-items-center  ">
    <div class="container d-flex align-items-center ">

      <div class="logo me-auto text-white">
        @if (auth()->user()->type == 'admin')
        <h1><a href='/admin'>SIAKAD</a></h1>
        @endif
        @if (auth()->user()->type == 'dosen')
        <h1><a href='/dosen'>SIAKAD</a></h1>
        @endif
        @if (auth()->user()->type == 'mahasiswa')
        <h1><a href='/'>SIAKAD</a></h1>
        @endif
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


      @if (auth()->user()->type == 'admin')

      <nav id="navbar" class="navbar navbar-expand-lg navbar-light nav navbar navbar-fixed-top">

        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/admin/biodata">Biodata</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akademik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/admin/transkrip">Transcript</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Laporan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/admin-kurikulum">Daftar Mata Kuliah</a></li>
                  <li><a class="dropdown-item" href="/admin/schedule">Jadwal Kuliah Mahasiswa</a></li>
                  <li><a class="dropdown-item" href="/admin/kelas">Kelas</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Surat Mahasiswa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/admin/surat/cuti">Surat Cuti</a></li>
                  <li><a class="dropdown-item" href="/admin/schedule">Surat Keterangan Mahasiswa Aktif</a></li>
                  <li><a class="dropdown-item" href="/admin/kelas">Surat Undur Diri</a></li>
                </ul>
              </li>
              <li><form action="/logout" method="post">
          @csrf<button style="
          background:none;
          border:none;
          margin:0;
          padding: 10px 0 10px 30px;;
          cursor: pointer;
          font-family: 'Poppins', sans-serif;"
          class="nav-link scrollto" action="/logout">Sign Out</button></form></li>
        </ul>
            </ul>
          </div>
        </div>
      </nav>
        @endif


        @if (auth()->user()->type == 'dosen')

        <nav id="navbar" class="navbar order-last order-lg-0 navbar-expand-lg navbar-light">

          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Proses
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dosen/frs">FRS</a></li>
                    <li><a class="dropdown-item" href="/dosen/kurikulum">Kurikulum</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Akademik</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dosen/transkrip">Transcript</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Laporan

                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/admin-kurikulum">Daftar Mata Kuliah</a></li>
                    <li><a class="dropdown-item" href="/dosen-kelas">Kelas</a></li>
                  </ul>
                </li>
                <li><a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/dosen/biodata">{{auth()->user()->name}}</a></li>
          <li><form action="/logout" method="post">
            @csrf<button style="
            background:none;
            border:none;
            margin:0;
            padding: 10px 0 10px 30px;;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;"
            class="nav-link scrollto" action="/logout">Sign Out</button></form></li>
          </ul>
              </ul>
            </div>
          </div>
        </nav>

        @endif

        @if (auth()->user()->type == 'mahasiswa')
        <nav id="navbar" class="navbar order-last order-lg-0 navbar-expand-lg navbar-fixed-top">

          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Proses
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/frs">FRS</a></li>
                    {{-- <li><a class="dropdown-item" href="/kuesioner">Kuesioner Dosen dan MK</a></li> --}}
                    <li><a class="dropdown-item" href="/kurikulum">Kurikulum</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Surat Mahasiswa
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/suratketeranganaktif">Surat Keterangan Mahasiswa Aktif</a></li>
                    <li><a class="dropdown-item" href="/suratcuti">Surat Cuti
                    </a></li>
                    <li><a class="dropdown-item" href="/suratundurdiri">Surat Mengundurkan Diri</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Biaya Pendidikan
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/ikoma">Tagihan & Histori pembayaran IKOMA
                    </a></li>
                    <li><a class="dropdown-item" href="/ukt">Tagihan & Histori pembayaran UKT
                    </a></li>
                  </ul>
            </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Akademik

                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/ipsipk">IPS & IPK</a></li>
                    <li><a class="dropdown-item" href="/transkrip/{{auth()->user()->name}}">Transcript</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Laporan

                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/kurikulum">Daftar Mata Kuliah</a></li>
                    <li><a class="dropdown-item" href="/jadwal">Jadwal Kuliah Mahasiswa</a></li>
                    <li><a class="dropdown-item" href="/kelas">Kelas</a></li>
                  </ul>
                </li>
                <li><a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/biodata">{{auth()->user()->name}}</a></li>
          <li><form action="/logout" method="post">
            @csrf<button style="
            background:none;
            border:none;
            margin:0;
            padding: 10px 0 10px 30px;;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;"
            class="nav-link scrollto" action="/logout">Sign Out</button></form></li>
          </ul>
              </ul>
            </div>
          </div>
        </nav>

        @endif
      <!-- .navbar -->





    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
