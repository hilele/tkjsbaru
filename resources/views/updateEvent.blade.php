@extends('layouts.layout')
@section('content')
<!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span>Edit Event</span>
          </h4>

        </div>

      </div>
      <div class="card mb-2">
          <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_update_main">Update</button>
                    </div>
                    <div>
                        <label class="col-md-3">Nama Event  </label>
                        <label>lala</label><br>
                        <label class="col-md-3">Tanggal Mulai  </label>
                        <label>lalal</label><br>
                        <label class=" col-md-3">Perkiraan Selesai  </label><br>
                        <label class="col-md-5">Deskripsi Event  </label><br>
                    </div>
                </div>

                <div class="tab-pane fade text-right" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_update_kegiatan">Update</button>
                </div>
                <div class="tab-pane fade text-right" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_update_peserta">Update</button>
                </div>
            </div>
          </div>
      </div>

<script>
// tab
$('#myTab a').on('click', function (e) {
  e.preventDefault();
  $(this).tab('show');
})

</script>
@endsection
