@extends('layouts.layout')
@section('content')
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <!--Card content-->
  <div class="card-body d-sm-flex justify-content-between">
    <h4 class="mb-2 mb-sm-0 pt-1">
      <span>Event</span>
    </h4>
  </div>
</div>
<!-- Heading -->
<!-- Table with panel -->
<div class="card card-cascade narrower">
  <div class="text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_add_event" style="margin : 10px">Buat Baru</button>
  </div>
    <!--/Card image-->
  <div class="px-4">
    <div class="table-wrapper">
      <!--Table-->
      <table class="table mb-0">
        <!--Table head-->
        <thead>
          <tr>
            <th ><strong>Nama Acara</strong></th>
            <th class="th-sm"><strong>Tanggal Mulai</strong></th>
            <th class="th-sm"><strong>Perkiraan Selesai</strong></th>
            <th class="th-sm"><strong>Keterangan</strong></th>
            <th class="th-sm"><strong>Aksi</strong></th>
          </tr>
        </thead>
            <!--Table head-->
            <!--Table body-->
        <tbody>
          @foreach($event as $data)
          <tr>
            <td>{{$data->namaEvent}}</td>
            <td>{{$data->tanggalMulai}}</td>
            <td>{{$data->perkiraanSelesai}}</td>
            <td>{{$data->finished}}</td>
            <td style="padding: 5 !important"><a href={{ url('admin/event/detail', [$data->idEvent])}}><button type="button" class="btn btn-info btn-sm">detail</button></a></td>
          </tr>
          @endforeach
        </tbody>
            <!--Table body-->
      </table>
        <!--Table-->
    </div>
  </div>
</div>
<!-- Table with panel -->


<!-- modal add event -->
<!-- Central Modal Small -->
<div class="modal fade" id="m_add_event" tabindex="-1" role="dialog" >
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Tambah Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{url('/admin/event/store')}}" >
        {{csrf_field()}}
        <div class="modal-body">
          <div class="form-group">
            <label for="event-name" class="form-control-label">Nama Event:</label>
            <input type="text" class="form-control" name="namaEvent" placeholder="Tulis nama event">
          </div>
          <div class="form-group">
            <label for="daterange" class="form-control-label">Tanggal:</label>
            <br>
            <input class="form-control" type="text" name="daterange" value="" placeholder="Select Date"/>
            <input type="text" name="startDate" hidden />
            <input type="text" name="endDate" hidden />
          </div>
          <div class="form-group">
            <label for="deskripsi-event" class="form-control-label">Deskripsi Singkat Event</label>
            <textarea class="form-control" name="deskripsiEvent" placeholder="Tulis deskripsi singkat event"></textarea>
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
<script type="text/javascript">
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
    }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    $('input[name="startDate"]').val(start.format('YYYY-MM-DD'));
    $('input[name="endDate"]').val(end.format('YYYY-MM-DD'));
    });
</script>
@endsection

