@extends('layouts.layout')
@section('content')
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
<!--Card content-->
  <div class="card-body d-sm-flex justify-content-between">
    <h4 class="mb-2 mb-sm-0 pt-1">
      <span>Detail Event</span>
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
      <h4 class="modal-title w-100" id="myModalLabel">Perbarui Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{url('/admin/event/update')}}" >
        <div class="modal-body">
          {{csrf_field()}}
        <input type="text" name="idEvent" value="{{$detailEvent[0]->idEvent}}" hidden>
          <div class="form-group">
            <label for="event-name" class="form-control-label">Nama Event:</label>
            <input type="text" class="form-control" name="namaEvent" placeholder="Tulis nama event" value="{{$detailEvent[0]->namaEvent}}">
          </div>
          <div class="form-group">
            <label class="form-control-label">Tanggal:</label>
            <br>
          <input class="form-control" type="text" name="daterangeUpdate" value="{{$detailEvent[0]->newStart}} - {{$detailEvent[0]->newEnd}}"/>
            <input type="text" name="startDate" value="{{$detailEvent[0]->tanggalMulai}}" hidden/>
            <input type="text" name="endDate" value="{{$detailEvent[0]->perkiraanSelesai}}" hidden/>
          </div>
          <div class="form-group">
            <label for="deskripsi-event" class="form-control-label">Deskripsi Singkat Event</label>
            <textarea class="form-control" name="deskripsiEvent" placeholder="Tulis deskripsi singkat event">{{$detailEvent[0]->deskripsiEvent}}</textarea>
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

<!-- modal tambah kegiatan-->
<!-- Central Modal Small -->
<div class="modal fade" id="m_tambah_kegiatan" tabindex="-1" role="dialog" >
  <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm " role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Tambah Kegatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{url('/admin/kegiatan/store')}}" >
          <div class="modal-body">
          {{csrf_field()}}
          <input type="text" name="idEvent" value="{{$detailEvent[0]->idEvent}}" hidden>
          <div class="form-group">
            <label for="namaKegiatan" class="form-control-label">Nama Kegiatan:</label>
            <input type="text" class="form-control" name="namaKegiatan" placeholder="Tulis nama Kegiatan" value="">
          </div>
          <div class="form-group">
            <label class="form-control-label">Tanggal Kegiatan:</label><br>
            <input class="form-control" type="text" name="tanggalKegiatan" value="" placeholder="Tanggal Kegiatan"/>
          </div>
          <div class="form-group">
            <label for="datetimepicker" class="form-control-label">Waktu Kegiatan:</label><br>
            <input class="form-control" type="time" name="waktuKegiatan" value="" placeholder="Waktu Kegiatan"/>
          </div>
          {{-- <div class="form-group">
            <label for="kelengkapanKegiatan" class="form-control-label">Kelengkapan Kegiatan:</label><br>
            <input class="" type="checkbox" name="materi" value="materi"/>Materi Training<br>
            <input class="" type="checkbox" name="diskusiPresentasi" value="diskusiPresentasi"/>Diskusi dan Presentasi <br>
            <input class="" type="checkbox" name="kumpulTugas" value="tugas"/>Mengumpulkan Tugas<br>
          </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- modal update kegiatan-->
<!-- Central Modal Small -->
<div class="modal fade" id="m_update_kegiatan" tabindex="-1" role="dialog" >
    <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm " role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Perbaharui Kegatan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{url('/admin/kegiatan/store')}}" >
            <div class="modal-body">
            <input type="text" name="idEvent" value="{{$detailEvent[0]->idEvent}}" hidden>
            <div class="form-group">
              <label for="namaKegiatan" class="form-control-label">Nama Kegiatan:</label>
              <input type="text" class="form-control" name="namaKegiatan" value="{{$kegiatan[0]->namaKegiatan}}">
            </div>
            <div class="form-group">
              <label class="form-control-label">Tanggal Kegiatan:</label><br>
              <input class="form-control" type="text" name="tanggalKegiatan" value="{{$kegiatan[0]->tanggalKegiatan}}"/>
            </div>
            <div class="form-group">
              <label for="datetimepicker" class="form-control-label">Waktu Kegiatan:</label><br>
              <input class="form-control" type="time" name="waktuKegiatan" value="{{$kegiatan[0]->waktuKegiatan}}"/>
            </div>
            {{-- <div class="form-group">
              <label for="kelengkapanKegiatan" class="form-control-label">Kelengkapan Kegiatan:</label><br>
              <input class="" type="checkbox" name="materi" value="materi"/>Materi Training<br>
              <input class="" type="checkbox" name="diskusiPresentasi" value="diskusiPresentasi"/>Diskusi dan Presentasi <br>
              <input class="" type="checkbox" name="kumpulTugas" value="tugas"/>Mengumpulkan Tugas<br>
            </div> --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
          </div>
          </form>
      </div>
    </div>
  </div>


<!-- /Central Modal Tambah event -->
<div class="card mb-2">
  <div class="card-body">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Umum</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="kegiatan-tab" data-toggle="tab" href="#kegiatan" role="tab" aria-controls="kegiatan" aria-selected="false">Kegiatan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="peserta-tab" data-toggle="tab" href="#peserta" role="tab" aria-controls="peserta" aria-selected="false">Peserta</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_update_main">Perbarui</button>
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
        {{-- modal confirm --}}
        <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Hapus Kegiatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin akan menghapus kegiatan ini?
                        <input name="idKegiatan" hidden>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                    <button type="button" onclick="deleteKegiatan()" class="btn btn-primary btn-sm">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- //modal confirm --}}
      <div class="tab-pane fade text-right" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
        <div class="text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_tambah_kegiatan">Tambah Kegiatan</button>
        </div>
        <div class="px-4">
            <div class="table-wrapper">
              <!--Table-->
              <table class="table mb-0">
                <!--Table head-->
                <thead>
                  <tr>
                    <th ><strong>Nama Kegiatan</strong></th>
                    <th class="th-sm"><strong>Tanggal Kegiatan</strong></th>
                    <th class="th-sm"><strong>Waktu Mulai</strong></th>
                    <th class="th-sm"><strong>Aksi</strong></th>
                  </tr>
                </thead>
                    <!--Table head-->
                    <!--Table body-->
                <tbody>
                  @foreach($kegiatan as $data)
                  <tr>
                    <td>{{$data->namaKegiatan}}</td>
                    <td>{{$data->tanggalKegiatan}}</td>
                    <td>{{$data->waktuKegiatan}}</td>
                    <td style="padding: 1 !important">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#m_update_kegiatan">update</button>
                    </td>
                    <td style="padding: 1 !important"><a><button type="button" class="btn btn-outline-danger waves-effect btn-sm" data-toggle="modal" onclick="confirmModal({{$data->idKegiatan}})" data-target="#modalConfirm">X</button></a></td>
                    </tr>
                  @endforeach
                </tbody>
                    <!--Table body-->
              </table>
                <!--Table-->
            </div>
          </div>
    </div>
      <div class="tab-pane fade text-right" id="peserta" role="tabpanel" aria-labelledby="peserta-tab">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_tambah_peserta">Tambah Peserta</button>
      </div>
    </div>
  </div>
</div>

<script>
//daterangepicker
$('input[name="daterangeUpdate"]').daterangepicker({
    opens: 'left'
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        $('input[name="startDate"]').val(start.format('YYYY-MM-DD'));
        $('input[name="endDate"]').val(end.format('YYYY-MM-DD'));
    }
);

</script>

<script>
//timepicker
// $('input[name="waktuKegiatan"]').mdtimepicker().on('timechanged', function(e){
//   console.log(e.value);
//   console.log(e.time);

// });
</script>
<script>
  $(function() {
    $('input[name="tanggalKegiatan"]').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format('YYYY'),10),
      locale: {
        format: 'YYYY-MM-DD'
      }
    }, function(start, end, label) {
      console.log(moment(start).format("YYYY-MM-DD"));
    });

    $('input[name="tanggalKegiatan"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('YYYY-MM-DD') );
    });
  });
  function confirmModal(e) {
      $('input[name="idKegiatan"').val(e);
  };
  function deleteKegiatan() {
    window.location = '/admin/deleteKegiatan/' + $('input[name="idKegiatan"').val();
  };
</script>
@endsection
