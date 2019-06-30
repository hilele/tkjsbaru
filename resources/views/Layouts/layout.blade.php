<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Jamaah Salahuddin</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href={{ url('css/bootstrap.min.css') }} rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href={{ url('css/mdb.min.css') }} rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <link href={{ url('css/style.min.css') }} rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  {{-- timepicker --}}
  <link href={{ url('css/mdtimepicker.min.css')}} rel="stylesheet">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script src={{ url('js/bootstrap.min.js')}}></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  {{-- timepicker --}}
  <script type="text/javascript" src={{url ('js/mdtimepicker.min.js')}}></script>

</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" >
          <strong class="blue-text">BKK Jamaah Salahuddin UGM | TKJS</strong>
        </a>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            Raditya Dika
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="http://js.ugm.ac.id/wp-content/uploads/sites/23/2018/06/logo-js-web.png" class="img-fluid" alt="">
      </a>
      <div class="list-group list-group-flush">
        <a href="{{url ('admin/event')}}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-calendar-alt mr-3"></i>Event</a>
        <a href="{{url ('admin/anggota')}}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Peserta</a>
        <a href="{{url ('admin/suratKeputusan')}}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-scroll mr-3"></i>Surat Keputusan</a>
        <a href="{{url ('admin/pengaturan')}}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-cog mr-3"></i>Pengaturan</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
      <!-- Heading -->


      @yield('content')

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="#" target="_blank"> nawamlih </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <script type="text/javascript" src={{ url('js/popper.min.js')}}></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src={{ url('js/mdb.min.js')}}></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

</body>

</html>
