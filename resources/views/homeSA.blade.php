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
            Super Admin BKK
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
        <a href="{{url ('admin/anggota')}}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>User</a>
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
      <div class="card card-cascade narrower">
            <div class="text-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_add_admin" style="margin : 10px">Buat Baru</button>
            </div>
              <!--/Card image-->
            <div class="px-4">
              <div class="table-wrapper">
                <!--Table-->
                <table class="table mb-0">
                  <!--Table head-->
                  <thead>
                    <tr>
                      <th ><strong>Nama Admin</strong></th>
                      <th class="th-sm"><strong>Email Admin</strong></th>
                      <th class="th-sm"><strong>Aksi</strong></th>
                    </tr>
                  </thead>
                      <!--Table head-->
                      <!--Table body-->
                  <tbody>
                    @foreach($show as $data)
                    <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      {{-- <td>{{$data->perkiraanSelesai}}</td>
                      <td>{{$data->finished}}</td> --}}
                      <td style="padding: 5 !important"><button type="button" class="btn btn-info btn-sm">detail</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                      <!--Table body-->
                </table>
                  <!--Table-->
              </div>
            </div>
          </div>
    </div>
    <!-- modal add admin -->
<!-- Central Modal Small -->
<div class="modal fade" id="m_add_admin" tabindex="-1" role="dialog" >
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Tambah User Baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{ route('register') }}" >
              {{csrf_field()}}
              <div class="modal-body">
                <div class="form-group">
                  <label for="name" class="form-control-label">Nama User:</label>
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="email" class="form-control-label">E-mail :</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                  <label for="password" class="form-control-label">Password</label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                  <label for="password-confirm" class="form-control-label">Password Confirm</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>
              <div>
                  <label for="role" class="form-control-label">Role</label>
                  <input type="text" class="role" name="role">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
              </div>
            </form>
          </div>
        </div>
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
