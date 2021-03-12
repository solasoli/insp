
    <div class="card-header">
    <h6 class="card-title float-left py-2">Penambahan SP</h6>
    </div>
    <div class="card-body">
    <div class="form-group row">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12">
        Dasar Surat
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea name='dasar_surat' class="form-control">{{ !is_null(old('dasar_surat')) ? old('dasar_surat') : (isset($data->dasar_surat) ? $data->dasar_surat : (isset($dasar_surat->dasar_surat) ? $dasar_surat->dasar_surat : '')) }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12"  style="align-items: start">
        Penanggung Jawab:
        </label>

        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                <select class="form-control select-irban" name="wilayah[]" id='wilayah'>
                    @foreach ($wilayah AS $row)
                    @php
                    $selected = !is_null(old('wilayah')) && old('wilayah') == $row->id ? "selected" : (isset($data->id_wilayah) && $row->id == $data->id_wilayah ? 'selected' : '');
                    @endphp
                    <option value="{{$row->id}}" {{$selected}}>{{$row->nama}}</option>
                    @endforeach
                </select>
                <div class="adding-irban" style="margin-top:10px"></div>
                <div class="row justify-content-center mb-2 row-irban">
                    <div class="col-sm-12">
                    <a id="add_irban" href="#" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah Irban</a>
                    </div>
                </div>
                </div>
                <div class="col-md-5 col-xs-12">
                <input style="margin-top: 12px" value="1" id="lintas" name='lintas_irban' type="checkbox" />
                <label for="lintas">&nbsp;&nbsp;&nbsp;Lintas Irban</label>
                </div>
            </div>
            <div class="text-danger error" data-error="wilayah"></div>
            </div>
        </div>
        </div>
    </div>

    <div class="form-group row" style="margin-bottom: 10px">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12">
        Pilih Kegiatan
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select name='kegiatan' class="form-control select2 kegiatan">
            @foreach($kegiatan as $idx => $row)
            @php
            $selected = !is_null(old('kegiatan')) && old('kegiatan') == $row->id ? 'selected' : isset($data->id) && $data->id_kegiatan == $row->id ? 'selected' : '';
            @endphp
            <option value='{{$row->id}}'
                data-kegiatan='{{$row->id_kegiatan}}'
                data-program_kerja='{{$row->id_program_kerja}}'
                {{$selected}}>{{$row->nama}}</option>
            @endforeach
        </select>

        </div>

    </div>
    <div class="form-group row" style="margin-bottom: 10px">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12" style="align-items: start">
        Jenis Pengawasan *
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select name='jenis_pengawasan[]' value='{{ !is_null(old('jenis_pengawasan')) ? old('jenis_pengawasan') : (isset($data->jenis_pengawasan) ? $data->jenis_pengawasan : '') }}' required="required" class="form-control" id='jenis_pengawasan'>
            @if(isset($jenis_pengawasan))
            @foreach($jenis_pengawasan as $jpn) 
                <option value='{{ $jpn->id }}'>{{ $jpn->nama }}</option>
            @endforeach
            @endif
        </select>
        
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 cover-jenis-pengawasan">
            </div>
        </div>
        <button type='button' class="btn btn-info btn-sm btn-tambah-jenis-pengawasan" style="margin-top: 10px"><i class="fa fa-plus"></i> Tambah Jenis Pengawasan</button>

        </div>

    </div>
    <hr>
    <div class="form-group row" style="margin-bottom: 10px">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12" style="align-items: start">
        Perangkat Daerah *
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 cover-opd">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-sm-4">
            <button type='button' class="btn btn-info btn-sm btn-tambah-perangkat-daerah"><i class="fa fa-plus"></i> Tambah Perangkat Daerah</button>
            </div>
            <div class="col-sm-8 mt-2">
            <input id="all_opd" name="all_opd" value="1" type="checkbox" style="margin-left: 5px;">
            <label for="all_opd">&nbsp;&nbsp;&nbsp;Seluruh Perangkat Daerah</label>
            </div>
        </div>
        </div>

    </div>
    <div class="form-group row">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12">
        Sasaran <span class="required"></span> :
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea class="form-control pl-2 pt-2" name="sasaran" id="sasaran" cols="100" rows="3">{{ isset($data->program_kerja) ? $data->program_kerja->sasaran : ''}}</textarea>
        <div class="text-danger error" data-error="sasaran"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12">
        Dari
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="input-group">
            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
            <input type="text" name='dari' id="dari_kalendar" value="{{ !is_null(old('dari')) ? old('dari') : (isset($data->dari) ? date("d-m-Y", strtotime($data->dari)) : date("d-m-Y")) }}" class="form-control fc-datepicker" placeholder="DD-MM-YYYY" autocomplete="off">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12">
        Sampai
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="input-group">
            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
            <input type="text" name='sampai' id="sampai_kalendar" value="{{ !is_null(old('sampai')) ? old('sampai') : (isset($data->sampai) ? date("d-m-Y", strtotime($data->sampai)) : date("d-m-Y")) }}" class="form-control fc-datepicker" placeholder="DD-MM-YYYY" autocomplete="off">
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <div id="jadwal_warning" class="alert alert-warning" style="margin-bottom:10px; display: none;">
        </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="form-control-label col-md-3 col-sm-3 col-xs-12">
        Tembusan
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea name='tembusan' class="form-control">{{ !is_null(old('tembusan')) ? old('tembusan') : (isset($data->tembusan) ? $data->tembusan : '') }}</textarea>
        </div>
    </div>

</div>
