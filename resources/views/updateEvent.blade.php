@extends('layouts.layout')
@section('content')
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
<!--Card content-->
  <div class="card-body d-sm-flex justify-content-between">
    <h4 class="mb-2 mb-sm-0 pt-1">
      <span>Perbarui Event</span>
    </h4>
  </div>
</div>
<!-- modal update main-->
<!-- Central Modal Small -->
<div class="modal fade" id="m_update_main" tabindex="-1" role="dialog" >
<!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm " role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title w-100" id="myModalLabel">Update Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{url('/admin/event/update')}}" >
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label for="event-name" class="form-control-label">Nama Event:</label>
            <input type="text" class="form-control" name="namaEvent" placeholder="Tulis nama event" value="{{$detailEvent[0]->namaEvent}}">
          </div>
          <div class="form-group">
            <label for="daterange" class="form-control-label">Tanggal:</label>
            <br>
          <input class="form-control" type="text" name="daterange" value="{{$detailEvent[0]->newStart}} - {{$detailEvent[0]->newEnd}}" placeholder="Select Date"/>
            <input type="text" name="startDate" value="{{$detailEvent[0]->tanggalMulai}}"  hidden/>
            <input type="text" name="endDate" value="{{$detailEvent[0]->perkiraanSelesai}}" hidden/>
          </div>
          <div class="form-group">
            <label for="deskripsi-event" class="form-control-label">Deskripsi Singkat Event</label>
            <textarea class="form-control" name="deskripsiEvent" placeholder="Tulis deskripsi singkat event" value="{{$detailEvent[0]->deskripsiEvent}}"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
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
          <label class="col-md-3">Nama Events  </label>
          <label>{{$detailEvent[0]->namaEvent}}</label><br>
          <label class="col-md-3">Tanggal Mulai  </label>
          <label>{{$detailEvent[0]->tanggalMulai}}</label><br>
          <label class=" col-md-3">Perkiraan Selesai  </label>
          <label>{{$detailEvent[0]->perkiraanSelesai}} </label><br>
          <label class="col-md-3">Deskripsi Event  </label>
          <label>{{$detailEvent[0]->deskripsiEvent}}</label><br>
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
var startYes = '';
var endYes = '';
//daterangepicker
$('input[name="daterange"]').daterangepicker({
  opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    $('input[name="startDate"]').val(start);
    $('input[name="endDate"]').val(end);
  }
);

// tab
$('#myTab a').on('click', function (e) {
  e.preventDefault();
  $(this).tab('show');
})

</script>
@endsection
