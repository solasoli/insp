@extends('layouts.app')
@section('content')
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="/">Dashboard</a>
    <a class="breadcrumb-item" href="/">Master</a>
    <a class="breadcrumb-item Active" href="#">Surat Perintah Non-PKPT</a>
  </nav>
</div>

<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">{{ isset($data) ? "Edit" : "Tambah" }} Surat Perintah Non-PKPT</h4>
</div>

<form class="form-layout form-layout-5" style="padding-top:0" method="post" id='form-sp' enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type='hidden' name='mapping_tim' value='' id='mapping-tim'>
  <div class="br-pagebody">
    @if(Session::has('error'))
    <div class="row">
      <div class="alert alert-danger col-lg-12">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
          <span>{!! Session::get('error') !!}</span>
        </div>
      </div>
    </div>
    @endif
    @if(Session::has('success'))
    <div class="row">
      <div class="alert alert-success col-lg-12">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
          <span>{!! Session::get('success') !!}</span>
        </div>
      </div>
    </div>
    @endif
    <div class="row">
      <div class="col-lg-12 widget-2 px-0">
        <div class="card shadow-base">

          @include('pkpt.partial.surat_perintah_non_pkpt_base')

          <div class='cover-tim'>
            @if(isset($data->id)) 
            
              @foreach($data->tim as $idTm => $tm)
                {{ sp_tim($list_inspektur, false, $idTm + 1, $tm, $data->anggota_tim->where('id_surat_perintah_tim', $tm->id)) }}
              @endforeach
            @endif
          </div>

          <div class="card-header"></div>
          <div class="card-body">



            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a href='{{url('')}}/pkpt/surat_perintah' class="btn btn-danger" type="button">Cancel</a>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</form>
<script>
  let option_opd = [];
  $(function(){
    $('.fc-datepicker').datepicker({
      dateFormat: "dd-mm-yy"
    });
    
 
});
</script>
@include('pkpt.partial.surat_perintah_non_pkpt_js')
@endsection

