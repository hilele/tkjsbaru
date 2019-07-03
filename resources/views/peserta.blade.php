@extends('layouts.layout')
@section('content')
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <!--Card content-->
  <div class="card-body d-sm-flex justify-content-between">
    <h4 class="mb-2 mb-sm-0 pt-1">
      <span>Peserta</span>
    </h4>
  </div>
</div>
<!-- Heading -->
<!-- Table with panel -->
<div class="card card-cascade narrower">
  <div class="text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_add_peserta" style="margin : 10px">Tambah Baru</button>
  </div>
    <!--/Card image-->
  <div class="px-4">
    <div class="table-wrapper">
      <!--Table-->
      <table class="table mb-0">
        <!--Table head-->
        <thead>
          <tr>
            <th ><strong>Nama Peserta</strong></th>
            <th class="th-sm"><strong>Departemen</strong></th>
            <th class="th-sm"><strong>Status Anggota</strong></th>
            <th class="th-sm"><strong>Aksi</strong></th>
          </tr>
        </thead>
            <!--Table head-->
            <!--Table body-->
        <tbody>
          @foreach($peserta as $data)
          <tr>
            <td>{{$data->namaPeserta}}</td>
            <td>{{$data->departemen}}</td>
            @if($data->statusAnggota == 0)
                <td>Anggota Muda</td>
            @elseif($data->statusAnggota == 1)
                <td>Anggota 1</td>
            @elseif($data->statusAnggota == 2)
                <td>Anggota 2</td>
            @else
                <td>Anggota 3</td>
            @endif
            <td style="padding: 5 !important"><button type="button" class="btn btn-info btn-sm">Perbarui</button></td>
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
<div class="modal fade" id="m_add_peserta" tabindex="-1" role="dialog" >
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Tambah Peserta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <form method="post" action="{{url('/admin/event/store')}}" >
        {{csrf_field()}}
        <div class="modal-body">
          <div class="form-group">
            <label for="peserta-name" class="form-control-label">Nama Peserta:</label>
            <input type="text" class="form-control" name="namaPeserta" placeholder="Tulis nama peserta">
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
      </form> --}}
    </div>
  </div>
</div>
<!-- Central Modal Small -->
<script type="text/javascript">

</script>
@endsection

