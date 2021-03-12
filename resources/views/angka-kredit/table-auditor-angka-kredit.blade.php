@extends('layouts.app')
@section('content')


<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="/">Dashboard</a>
    <a class="breadcrumb-item" href="#">Angka Kredit</a>
    <span class="breadcrumb-item active">Perhitungan Angka Kredit</span>
  </nav>
</div>

<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Perhitungan Angka Kredit</h4>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12 widget-2 px-0">
            @if($message = Session::get('successStore'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @elseif($message = Session::get('successUpdate'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @endif
            <div class="card shadow-base">
                <div class="card-header">
                    <h6 class="card-title float-left py-3">Data angka kredit</h6>
                    <span>No. Surat Perintah : {{$get_anggota[0]->no_surat}}</span>
                </div>
                <div class="card-body">
                    <div class="tab-pane fade active show" id="not_approved">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped responsive" id="oTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="190">Nama</th>
                                        <th width="190">Jabatan</th>
                                        <th width="190">Posisi Dalam Tim</th>
                                        <th style='width:150px'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    $no=1; 
                                    $jml_tim = count($kt_dl);
                                ?>
                                <!-- <input type="text" name="no_surat" hidden value="{{$get_anggota[0]->no_surat}}"> -->
                                @php
                                    $no_surat = $get_anggota[0]->no_surat;
                                    $no_surat = explode('/', $no_surat);
                                    $no_surat = implode('-',$no_surat);
                                @endphp

                                @for($i = 0; $i < $jml_tim; $i++)
                                    <tr>
                                        <th colspan="4">Tim {{ $kt_dl[$i]->no_tim }}</th>
                                    </tr>
                                    <tr>
                                    <td>{{ $kt_dl[$i]->pengendali_teknis }}</td>
                                        <td>{{ $kt_dl[$i]->pj_dalnis }}</td>
                                        <td>Pengendali Teknis</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm mr-1" href="{{url('angka-kredit/edit-angka-kredit/'.$id.'/'.$kt_dl[$i]->id_pt.'/'.$no_surat)}}/pengendali-teknis">Angka Kredit</a>
                                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>{{ $kt_dl[$i]->ketua_tim }}</td>
                                        <td>{{ $kt_dl[$i]->pj_ketua }}</td>
                                        <td>Ketua Tim</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm mr-1" href="{{url('angka-kredit/edit-angka-kredit/'.$id.'/'.$kt_dl[$i]->id_kt.'/'.$no_surat)}}/ketua-tim">Angka Kredit</a>
                                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    
                                    @foreach($get_anggota AS $idx => $value)
                                        @if($value->no_tim == $i+1)
                                        <tr>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->jabatan }}</td>
                                            <td>Anggota</td>
                                            <td>
                                            <a class="btn btn-warning btn-sm mr-1" href="{{url('angka-kredit/edit-angka-kredit/'.$id.'/'.$value->id.'/'.$no_surat)}}/anggota">Angka Kredit</a>
                                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(() => {
        setTimeout(function() {
            $('.alert').slideUp()
        }, 2000)
    })
</script>

@endsection