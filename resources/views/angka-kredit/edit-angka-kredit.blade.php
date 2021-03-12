@extends('layouts.app')
@section('content')


<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="/">Dashboard</a>
    <a class="breadcrumb-item" href="#">Angka Kredit</a>
    <span class="breadcrumb-item active">Edit Angka Kredit</span>
  </nav>
</div>

<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Edit Angka Kredit</h4>
</div>

<div class="br-mainpanel" style="margin: 0px;">
  <div class="br-pagetitle">
   <div style="padding-top: 20px"></div>
  </div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="width: 120%">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      
      <div class="modal-body">
        <table class="table table-  " style="border: 3px solid #dee2e6">
          <tr>
            <td>Data SP</td>
            <td>Unsur</td>
            <td>Sub Unsur</td>
            <td>Butir Kegiatan</td>
            <td>Hasil Perhitungan</td>
            <td>Satuan Hasil</td>
          </tr>
          <tr>
            <td width="20%">Sp : <br> tanggal : <br> Jumlah HP : <br>Jam : <br>Posisi : <br>Atasan :</td>
            <td width="16%"></td>
            <td width="16%"></td>
            <td width="16%"></td>
            <td width="16%"></td>
            <td width="16%"></td>
          </tr>
        </table>
        <div class="row">
          <div class="col-6">
            <button class="btn btn-default w-100 mb-1">Dokumen 1</button>
            <button class="btn btn-default w-100 mb-1">Dokumen 1</button>
            <button class="btn btn-default w-100">Dokumen 1</button>
          </div>
          <div class="col-3">
            <button class="btn btn-info w-50 mb-1">Unduh</button>
            <button class="btn btn-info w-50 mb-1">Unduh</button>
            <button class="btn btn-info w-50">Unduh</button>
          </div>
        </div>
      </div>
      @php

      @endphp
    </div>
  </div>
</div>

<div class="row row-sm mg-t-20">

@if(isset($angka_kredit))
@foreach($akr_pegawai AS $val)
<form method="post"  id="form-kredit" enctype="multipart/form-data" action="{{url('')}}/angka-kredit/edit-angka-kredit/update/{{$val->id}}/{{$id_sp}}">
@endforeach
@else
<form method="POST" id="form-kredit" enctype="multipart/form-data" action="{{url('')}}/angka-kredit/edit-angka-kredit/tambah/{{$id_sp}}">
@endif
  @csrf
  <div class="col-lg-12">
    <div class="card bd-0 shadow-base" style="margin: 20px;margin-top:0px">
      <div class="br-pagebody">
      @if($message = Session::get('errorEXT'))
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @elseif($message = Session::get('errorSize'))
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @endif
        <div class="row">
          <div class="col-6">
            <div class="tab-content">
            <input type="text" name="id_surat_perintah" value="{{$id_sp}}" hidden>
              <table class="table table-borderless">
                @foreach($pegawai AS $idx => $val)
                <tr style="border:0px">
                  <td width="15%">Nama</td>
                  <td width="5%">:</td>
                  <td width="80%">{{$val->nama}}</td>
                </tr>
                <input type="text" value="{{$val->id}}" name="id_pegawai" hidden>
                <tr>
                  <td>NIP</td>
                  <td>:</td>
                  <td>{{$val->nip}}</td>
                </tr>
                <tr>
                  <td>Jabatan</td>
                  <td>:</td>
                  <td>{{$val->jabatan->name}}</td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="btn btn-default w-100">Unsur</div>
            <select class="form-control" name="unsur" id="unsur">
              @if(isset($angka_kredit))
                <option value="{{$akrUnsur->id}}">{{$akrUnsur->nama}}</option>
                @if($val->id != $akrUnsur->id)
                  @foreach($unsur AS $idx => $val)
                  <option value="{{$val->id}}" id="loopUnsur">{{$val->nama}}</option>
                  @endforeach
                @endif
              @else
              <option value="">- Pilih Unsur -</option>
              @foreach($unsur AS $idx => $val)
              <option value="{{$val->id}}">{{$val->nama}}</option>
              @endforeach
              @endif
            </select>
            
            <div style="margin-top: 15px" class="btn btn-default w-100">Sub Unsur</div>
            <select class="form-control" id="sub_unsur">
            @if(isset($angka_kredit))
              @foreach($akrSubUnsur AS $val)
                <option id="is_angkaKredit" value="{{$val->id}}">{{$val->nama}}</option>
              @endforeach
            @else
              <option value="">- Pilih Sub Unsur</option>
            @endif
            </select>
            
            <div style="margin-top: 15px" class="btn btn-default w-100">Butir Kegiatan</div>
            <select class="form-control" id="butir_kegiatan">
              <option value="">- pilih butir kegiatan -</option>
            </select>
            <div class="validasi_butir_kegiatan text-danger"></div>
            
            <div style="margin-top: 15px" dis class="btn btn-default w-100">Angka Kredit</div>
            @if(isset($angka_kredit))
            <input type="text" disabled class="form-control angkaKredit" value="{{$angka_kredit}}">
            @else
            <input type="text" disabled class="form-control angkaKredit">
            @endif
            <input type="text" name="angka_kredit" id="angka_kredit" hidden>
            
            <div style="margin-top: 15px" class="btn btn-default w-100">Satuan Hasil</div>
            @if(isset($angka_kredit))
              @foreach($satuan_hasil AS $val)
              <input rows="3" disabled class="form-control satuanHasil" value="{{$val->nama}}">
              @endforeach
            @else
            <input rows="3" disabled class="form-control satuanHasil">
            @endif
          </div>
          <div class="col-6">
            <div class="btn btn-default w-100">Data SP</div>
             <table class="table table-borderless" style="border: 5px solid #efefef">
                <tr>
                  <td width="20%">No. SP</td>
                  <td width="5%">:</td>
                  <td width="75%">{{$no_surat}}</td>
                </tr>
                @php
                $dari = explode(' ', $data_sp[0]->dari);
                $sampai = explode(' ', $data_sp[0]->sampai);

                $dari = explode('-', $dari[0]);
                $sampai = explode('-', $sampai[0]);
                @endphp
                <tr>
                  <td>Tanggal</td>
                  <td>:</td>
                  <td>{{$dari[2]}}-{{$dari[1]}}-{{$dari[0]}} s/d {{$sampai[2]}}-{{$sampai[1]}}-{{$sampai[0]}}</td>
                </tr>
                <input type="text" name="dari" value="{{$data_sp[0]->dari}}" hidden>
                <input type="text" name="sampai" value="{{$data_sp[0]->sampai}}" hidden>
                @php
                $start = new DateTime($data_sp[0]->dari);
                $end = new DateTime($data_sp[0]->sampai);
                $end->modify('+1 day');

                $interval = $end->diff($start);

                // total hari
                $days = $interval->days;

                $period = new DatePeriod($start, new DateInterval('P1D'), $end);

                foreach($period as $dt) {
                    $curr = $dt->format('D');

                    // kurangi jika Sabtu atau Minggu
                    if ($curr == 'Sat' || $curr == 'Sun') {
                        $days--;
                    }
                }
                @endphp
                <tr>
                  <td>Jumlah Hari</td>
                  <td>:</td>
                  <td>{{$days}}</td>
                </tr>
                <input type="text" name="jumlah_hari" value="{{$days}}" hidden>
                <tr>
                  <td>Jam</td>
                  <td>:</td>
                  <td class="jam">{{$days * 6.5}}</td>
                </tr>
                <input type="text" name="jam" value="{{$days * 6.5}}" hidden>
                @php
                  $peran = explode('-', $peran);
                  $peran = strtoupper(implode(' ', $peran));
                @endphp
                <tr>
                  <td>Posisi</td>
                  <td>:</td>
                  <td>{{$peran}}</td>
                </tr>
                <input type="text" name="peran" value="{{$peran}}" hidden>
              </table>

              <div class="input-group control-group after-add-more" style="display: flex; flex-direction: column;">
                <div class="form-group">
                  <label for="nama">Upload Dokumen</label>
                </div>
                <table class="table table-borderless">
                  <tr>
                    <td width="75%">
                      <input type="file" style="width: 100%" name="document[]" class="form-control" placeholder="Enter Name Here"></td>
                    <td width="25%">
                      <div class="input-group-btn">
                          <button class="btn btn-success add-more" type="button">
                          <i class="fa fa-plus"></i> Tambah File
                          </button>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            <div class="copy-fields hide" style="display: none;">
              <div class="control-group input-group" style="margin-top:-20px;">
                <table class="table table-borderless">
                  <tr>
                    <td width="75%">
                      <input type="file" name="document[]" class="form-control" placeholder="Enter Name Here" style="width: 100%">
                    </td>
                    <td width="25%">
                      <div class="input-group-btn">
                        <button class="btn btn-danger remove" type="button"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 pb-5 justify-content-end">
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
          </div>
          <div class="col-sm-3">
            <a href="#" onclick="return window.history.back()" class="btn btn-secondary btn-block">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

    <br>

    <br>

    <br>

</div><!-- br-pagebody -->
   <script type="text/javascript">
  $(document).ready(function() {

    $('#form-kredit').submit((e) => {
      if($('#butir_kegiatan').val() == '') {
        var message = $('.validasi_butir_kegiatan').append('Butir kegiatan harus diisi!');
        setTimeout(() => message.slideUp(), 2000)
        
        return false
      }
    });

    $(".add-more").click(function() {
      var html = $(".copy-fields").html();
      $(".after-add-more").after(html);
    });
    //here it will remove the current value of the remove button which has been pressed
    $("body").on("click", ".remove", function() {
      $(this)
      .parents(".control-group")
      .remove();
    });


    // template url angka kredit
    var url = '{{url("")}}/angka-kredit/edit-angka-kredit/'; 

    // ajax sub unsur
    // after change()
    $('#unsur').change(() => {
      let id_unsur = $('#unsur').val()
  
      // bersihkan option sebelum ditambahkan
      $('#sub_unsur option[id="option_sub_unsur"]').remove();

      var optionDef = document.querySelectorAll('#is_angkaKredit');
      for(let i=0; i<optionDef.length; i++) {
        $('#is_angkaKredit').remove();
      }

      $.ajax({
        url: url + "get_sub_unsur/" + id_unsur,
        dataType: 'json',
        timeout: 500,
        success: function(res) {
          res.forEach(function(val){
            for(let i=0; i<val.length; i++) {
              $('#sub_unsur').append('<option value="'+ val[i].id +'" id="option_sub_unsur">'+ val[i].nama +'</option>');
            }
          })
        }
      })
    })
    // end sub unsur
    

    // get butir kegiatan
    $('#sub_unsur').change(() => {
      let id_sub_unsur = $('#sub_unsur').val();
  
      // clear option sebelum ditambahkan
      $('#butir_kegiatan option[id="option_butir_kegiatan"]').remove();
      
      $.ajax({
        url: url + 'get_butir_kegiatan/' + id_sub_unsur,
        success: function(res) {
          res.forEach(function(val) {
            $('#butir_kegiatan').append('<option value="'+ val.angka_kredit +'" id_butir_kegiatan="'+ val.id +'" data_id="'+ val.id_butir_kegiatan_satuan +'" id="option_butir_kegiatan">'+ val.nama +'</option>');
          })
        }
      })
    })
    // end butir kegiatan

    // get value butir kegiatan
    $('#butir_kegiatan').change(() => {
      let angkaKredit = $('#butir_kegiatan').val()
      let jam = $('.jam').text()
      
      @foreach($pegawai AS $idx => $val)
      let jabatan_sp = `{{$val->jabatan->name}}`;
      @endforeach

      let peran = `{{$peran}}`
      
      // get hasil angka kredit * jam
      function getAngkaKreditHasil() {
        let hasil = angkaKredit * jam;
        return hasil
      }

      // get hasil angka kredit Auditor Ahli Madya
      function angkaKreditAuditorAhliMadya(val1, val2, val3) {
        if(peran == val1) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }else if(peran == val2) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }else if(peran == val3) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }

        return angkaKreditHasil;
      }

      // get hasil angka kredit Auditor Ahli Pertama
      function angkaKreditAuditorAhliPertama(val1, val2, val3) {
        if(peran == val1) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }else if(peran == val2) {
          var angkaKreditHasil = getAngkaKreditHasil() * 0.8;
        }else if(peran == val3) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }

        return angkaKreditHasil;
      }

      // get hasil angka kredit Auditor Ahli Muda
      function angkaKreditAuditorAhliMuda(val1, val2, val3) {
        if(peran == val1) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }else if(peran == val2) {
          var angkaKreditHasil = getAngkaKreditHasil();
        }else if(peran == val3) {
          var angkaKreditHasil = getAngkaKreditHasil() * 0.8;
        }

        return angkaKreditHasil;
      }

      // const jabatan 
      let anggota = 'ANGGOTA'
      let ketuaTim = 'KETUA TIM'
      let pengendaliTeknis = 'PENGENDALI TEKNIS'
      
      // kondisi angka kredit jabatan
      // Jika Auditor Ahli Madya
      if(jabatan_sp == 'Auditor Ahli Madya') {
        var angka_kredit_hasil = angkaKreditAuditorAhliMadya(anggota, ketuaTim, pengendaliTeknis);
      }else if(jabatan_sp == 'Auditor Ahli Pertama') {
        var angka_kredit_hasil = angkaKreditAuditorAhliPertama(anggota, ketuaTim, pengendaliTeknis);
      }else if(jabatan_sp == 'Auditor Ahli Muda') {
        var angka_kredit_hasil = angkaKreditAuditorAhliMuda(anggota, ketuaTim, pengendaliTeknis);
      }

      $('.angkaKredit').attr('value', angka_kredit_hasil.toFixed(2));
      $('#angka_kredit').attr('value', angka_kredit_hasil.toFixed(2));
      

      // bersihkan input sebelum ditambahkan input baru
      $('input[name=id_butir_kegiatan]').remove();

      // add input butir kegiatan (get id butir kegiatan)
      var id_butir = $('#butir_kegiatan option:selected').attr('id_butir_kegiatan');
      $('#butir_kegiatan').after('<input name="id_butir_kegiatan" value="'+ id_butir +'" hidden>')

      let id_butir_kegiatan = $('#butir_kegiatan option:selected').attr('data_id');
      $.ajax({
        url: url + 'get_satuan/' + id_butir_kegiatan,
        success: function(res) {
          res.forEach(function(val) {
            $('.satuanHasil').attr('value', val.nama);
            
          })
        }
      })
    })


  });


</script>
@endsection