
<script>
    var idx_tim = {{ isset($data->id) ? $data->tim->count() : 0 }};
    $(document).ready(function() {
      $('.kop_lampiran').after(`
      <div class="modal-body" style="border-bottom: 15px solid #e9ecef">
        <div class="container-fluid px-5">
      <table style="width: 100%;color: #555;">
          <tr>
              <td width="100px" align="right"><img src="{{ asset('img/kop-warna.jpeg') }}"
                      width="100px" height="120px"></td>
              <td align="center">
                  <div style="margin-left: 0px;">
                      <h4 style="color:#000000; line-height: 1.2; font-family: arial, sans-serif;"><strong>PEMERINTAH DAERAH KOTA BOGOR</strong></h5>
                      <h3 style="color:#000000; line-height: 0.3;"><strong>INSPEKTORAT DAERAH</strong></h3>
                      <p style="font-family: times, sans-serif; font-size:16px; color:#000000; line-height:1.2;">Jalan Raya Pajajaran No. 5 Kota Bogor 16143<br>
                          Telp. (0251) 8313274/Faks. (0251) 8373229<br>
                          Website: inspektorat.kotabogor.go.id
                      </p>
                  </div>
              </td>
              <td width="100px"></td>
          </tr>
          <tr>
              <td colspan="3">
                  <hr style="margin-top: 0; color:#000000; border-top: 3px solid #000000; margin-bottom: 0px;">
                  <hr style="margin-top: 0; color:#000000; border-bottom: 1px solid #000000;">
              </td>
          </tr>
        </table>
        <div class="text-center" style="line-height: 0.5;color: #555;">
          <h6 style="text-decoration: underline;">SURAT PERINTAH TUGAS</h6>
          <p>Nomor: {{ date("d/m/Y") }}</p>
          <p>INSPEKTUR KOTA BOGOR</p>
        </div>
        <div class="row" style="line-height: 0.5;color: #555;">
          <div class="col-2" style="padding-left: 65px;">Dasar</div>
          <div class="col-1 pl-4">:</div>
          <div class="col-8" id="dasar_surat1"></div>
        </div>
        <div class="text-center" style="line-height: 1;color: #555;">
          <br>
          <p>MEMERINTAHKAN</p>
        </div>
        <div class="row">
          <div class="col-2" style="padding-left: 65px;color: #555;">Kepada</div>
          <div class="col-1 pl-4">:</div>
          <div class="col-8" style="color: #555;">
              <div class="row">
                  <div class="col-2">Nama</div>
                  <div class="col-1">:</div>
                  <div class="col-8" id="inspektur_pembantu1"></div>
              </div>
              <div class="row">
                  <div class="col-2">Jabatan</div>
                  <div class="col-1">:</div>
                  <div class="col-8"></div>
              </div>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col-1"></div>
                  <div class="col-8">Selaku Wakil Penanggung Jawab</div>
              </div>
              <br>
              <div class="row">
                  <div class="col-2">Nama</div>
                  <div class="col-1">:</div>
                  <div class="col-8" id="kendali_teknis"></div>
              </div>
              <div class="row">
                  <div class="col-2">Jabatan</div>
                  <div class="col-1">:</div>
                  <div class="col-8"></div>
              </div>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col-1"></div>
                  <div class="col-8">Selaku Pengendali Teknis</div>
              </div>
              <br>
              <div class="row">
                  <div class="col-2">Nama</div>
                  <div class="col-1">:</div>
                  <div class="col-8" id="kt_tim">asd</div>
              </div>
              <div class="row">
                  <div class="col-2">Jabatan</div>
                  <div class="col-1">:</div>
                  <div class="col-8"></div>
              </div>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col-1"></div>
                  <div class="col-8">Selaku Ketua Tim</div>
              </div>
              <br>
          </div>
        </div>
        <div class="row">
            <div class="col-2" style="padding-left: 70px;color: #555;">Untuk</div>
            <div class="col-1 pl-4">:</div>
            <div class="col-8">
                <ol style="padding-left: 15px;color: #555;">
                    <li>Melaporkan hasilnya pada Inspektur daerah Kota Bogor</li>
                    <li>Melaksanakan surat perintah tugas ini dengan penuh tanggung jawab</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6" style="color: #555;">
                Dikeluarkan Di Bogor<br>
                Pada tanggal
                {{ date("d m Y") }}
    
                <div class="col-12 text-center">
                    <p>INSPEKTUR</p>
                    <br><br>
                    <span style="text-decoration:underline">inspektur name</span><br>
                    inspektur pangkat - pangkat golongan<br>
                    NIP. inspektur nip
                </div>
            </div>
        </div>
        <br>
        <div class="tembusan">
            Tembusan : <br>
            <span class="tembusan"></span>
        </div>
      </div>
      </div>
      <div class="page-break-new" style="transform: rotate(90deg);">
        <div class="card-body" style="color: black; font-size: 16px;">
      <div id="print_here" style="width: 800px; margin: 0 auto;color: #555;">
        <p class="judul-lampiran"></p>
        <table style="width: 100%">
          <tr>
            <td style="width: 10%">Nomor</td>
            <td></td>
          </tr>
          <tr>
            <td style="width: 10%">Tanggal</td>
            <td>{{ date("d m Y") }}</td>
          </tr>
        </table>
        <small class="susunan-tim"></small><br><br>
        <div class="inner" style="min-height: 433px; max-height: 433px">
          <table border="1">
            <tr>
              <th>No</th>
              <th>Nama / NIP</th>
              <th>Kedudukan Dalam Tim</th>
              <th>Pangkat Gol/Ruang</th>
              <th>Jabatan</th>
            </tr>

            <tr class="">
              <td>
              <th colspan="4"><b>TIM 1</b></th>
            </tr>

            <tr class="before" hidden></tr>          
          </table>
        </div>

        <div class="row">
          <div class="col-6"></div>
          <div class="col-6">
            <br><br>

            <div class="col-12 text-center">
              <p>INSPEKTUR DAERAH,</p>
              <br><br>
              <span style="text-decoration:underline">Adnan Djoeko Santoeso</span><br>
              Pembina Utama Muda - V/C<br>
              NIP. 197007151990091002
            </div>
          </div>
        </div>                            
      </div>
    </div>
    </div>
      `);
      $('.preview').on('click', function(e){
        e.preventDefault();

        var sasaran = $('#program_kerja').find('option:selected').html();
        $('.judul-lampiran').html('Lampiran Surat Perintah ' + sasaran);
        $('.susunan-tim').html('SUSUNAN TIM ' + sasaran + ' {{ date("Y") }} ');
        
        var dasar_surat = $("textarea[name='dasar_surat']").val();
        var inspektur_pembantu = $(".inspektur_pembantu").find("option:selected").html();
        var pengendali_teknis = $(".pengendali_teknis").find("option:selected").html();
        var ketua_tim = $(".ketua_tim").find("option:selected").html();

        // clear li anggota
        var clear = $('.tr-lampiran').remove();

        // create li anggota
        var jml_anggota = $(".anggota").find("option:selected").length;
        for(let i = 0; i < jml_anggota; i++) {
          var anggota = $(".anggota").find("option:selected")[i].text;
          $(".before").before(`
            <tr class="tr-lampiran">
              <td class="agcenter no">${i+1}</td>
              <td> ${anggota} </td>
              <td></td>
              <td></td>
              <td></td>
            </tr>`);
          }

        var li_anggota = document.querySelectorAll('li#anggota');
        var tembusan = $("textarea[name='tembusan']").val();
    
        $("#dasar_surat1").html(dasar_surat);
        $("#inspektur_pembantu1").html(inspektur_pembantu);
        $("#kendali_teknis").html(pengendali_teknis);
        $("#kt_tim").html(ketua_tim);
        $(".tembusan").html(tembusan);
      });
    });

    $(document).ready(function() {
        $(".kop").after(`
        <table style="width: 100%;">
          <tr>
              <td width="100px" align="right"><img src="{{ asset('img/kop-warna.jpeg') }}"
                      width="100px" height="120px"></td>
              <td align="center">
                  <div style="margin-left: 0px;">
                      <h4 style="color:#000000; line-height: 1.2; font-family: arial, sans-serif;"><strong>PEMERINTAH DAERAH KOTA BOGOR</strong></h5>
                      <h3 style="color:#000000; line-height: 0.3;"><strong>INSPEKTORAT DAERAH</strong></h3>
                      <p style="font-family: times, sans-serif; font-size:16px; color:#000000; line-height:1.2;">Jalan Raya Pajajaran No. 5 Kota Bogor 16143<br>
                          Telp. (0251) 8313274/Faks. (0251) 8373229<br>
                          Website: inspektorat.kotabogor.go.id
                      </p>
                  </div>
              </td>
              <td width="100px"></td>
          </tr>
          <tr>
              <td colspan="3">
                  <hr style="margin-top: 0; color:#000000; border-top: 3px solid #000000; margin-bottom: 0px;">
                  <hr style="margin-top: 0; color:#000000; border-bottom: 1px solid #000000;">
              </td>
          </tr>
        </table>
        <div class="text-center" style="line-height: 0.5; color: #555;">
          <h6 style="text-decoration: underline;">SURAT PERINTAH TUGAS</h6>
          <p>Nomor: {{ date('d/m/Y') }}</p>
          <p>INSPEKTUR KOTA BOGOR</p>
        </div>
        <div class="row" style="line-height: 0.5;color: #555;">
          <div class="col-2" style="padding-left: 65px;">Dasar</div>
          <div class="col-1 pl-4">:</div>
          <div class="col-8" id="dasar_surat"></div>
        </div>
        <div class="text-center" style="line-height: 1;color: #555;">
          <br>
          <p>MEMERINTAHKAN</p>
        </div>
        <div class="row" style="color: #555;">
          <div class="col-2" style="padding-left: 65px;">Kepada</div>
          <div class="col-1 pl-4">:</div>
          <div class="col-8">
              <div class="row">
                  <div class="col-2">Nama</div>
                  <div class="col-1">:</div>
                  <div class="col-8" id="inspektur_pembantu"></div>
              </div>
              <div class="row">
                  <div class="col-2">Jabatan</div>
                  <div class="col-1">:</div>
                  <div class="col-8"></div>
              </div>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col-1"></div>
                  <div class="col-8">Selaku Wakil Penanggung Jawab</div>
              </div>
              <br>
              <div class="row">
                  <div class="col-2">Nama</div>
                  <div class="col-1">:</div>
                  <div class="col-8" id="pengendali_teknis"></div>
              </div>
              <div class="row">
                  <div class="col-2">Jabatan</div>
                  <div class="col-1">:</div>
                  <div class="col-8"></div>
              </div>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col-1"></div>
                  <div class="col-8">Selaku Pengendali Teknis</div>
              </div>
              <br>
              <div class="row">
                  <div class="col-2">Nama</div>
                  <div class="col-1">:</div>
                  <div class="col-8" id="ketua_tim">asd</div>
              </div>
              <div class="row">
                  <div class="col-2">Jabatan</div>
                  <div class="col-1">:</div>
                  <div class="col-8"></div>
              </div>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col-1"></div>
                  <div class="col-8">Selaku Ketua Tim</div>
              </div>
              <br>
              <div class="row">
                  <div class="col-2">Anggota</div>
                  <div class="col-1">:</div>
                  <div class="col-8">
                    <ol style="padding-left: 10px">
                      <div id="anggota"></div>
                    </ol>
                  </div>
              </div>
          </div>
        </div>
        <div class="row" style="color: #555;">
            <div class="col-2" style="padding-left: 70px;">Untuk</div>
            <div class="col-1 pl-4">:</div>
            <div class="col-8">
                <ol style="padding-left: 15px;">
                    <li>Melaporkan hasilnya pada Inspektur daerah Kota Bogor</li>
                    <li>Melaksanakan surat perintah tugas ini dengan penuh tanggung jawab</li>
                </ol>
            </div>
        </div>
        <div class="row" style="color: #555;">
            <div class="col-6"></div>
            <div class="col-6">
                Dikeluarkan Di Bogor<br>
                Pada tanggal
                {{ date('d m Y') }}
    
                <div class="col-12 text-center">
                    <p>INSPEKTUR</p>
                    <br><br>
                    <span style="text-decoration:underline">inspektur name</span><br>
                    inspektur pangkat - pangkat golongan<br>
                    NIP. inspektur nip
                </div>
            </div>
        </div>
        <br>
        <div class="tembusan" style="color: #555;">
            Tembusan : <br>
            <span class="tembusan"></span>
        </div> `);
    
      $('.preview').on('click', function(e){
        e.preventDefault();
        var dasar_surat = $("textarea[name='dasar_surat']").val();
        var inspektur_pembantu = $(".inspektur_pembantu").find("option:selected").html();
        var pengendali_teknis = $(".pengendali_teknis").find("option:selected").html();
        var ketua_tim = $(".ketua_tim").find("option:selected").html();
        var anggota = $(".anggota").find("option:selected").html();
        var li_anggota = document.querySelectorAll('li#anggota');
        var tembusan = $("textarea[name='tembusan']").val();

        // clear li anggota
        var clear = $('li#anggota').remove();

        // create li anggota
        var jml_anggota = $(".anggota").find("option:selected").length;
        if(jml_anggota > 1) {
          for(let i = 0; i < jml_anggota; i++) {
            var anggota = $(".anggota").find("option:selected")[i].text;
            $("#anggota").after('<li id="anggota">'+ anggota +'</li>');
          }
        }else if(jml_anggota <= 1) {
          var anggota = $(".anggota").find("option:selected").html();
          $("#anggota").after('<li id="anggota">'+ anggota +'</li>');
        }
    
        $("#dasar_surat").html(dasar_surat);
        $("#inspektur_pembantu").html(inspektur_pembantu);
        $("#pengendali_teknis").html(pengendali_teknis);
        $("#ketua_tim").html(ketua_tim);
        $(".tembusan").html(tembusan);
      });
    });
    </script>
    
    <script>
      var addMoreAnggota = "<tr>";
      addMoreAnggota += "<td>";
      addMoreAnggota += "<select name='anggota[]' class='form-control select2 anggota'>";
      addMoreAnggota += "</select>";
      addMoreAnggota += "</td>";
      addMoreAnggota += "<td>";
      addMoreAnggota += "<button type='button' class='btn btn-danger btn-xs delete-anggota'><i class='fa fa-close'></i></button>";
      addMoreAnggota += "</td>";
      addMoreAnggota += "</tr>";
    
      
      var addMoreOpd = "<tr>";
      addMoreOpd += "<td>";
      addMoreOpd += "<select name='opd[]' class='form-control select2 opd'>";
      addMoreOpd += "</select>";
      addMoreOpd += "</td>";
      addMoreOpd += "<td>";
      addMoreOpd += "<button type='button' class='btn btn-danger btn-xs delete-opd'><i class='fa fa-close'></i></button>";
      addMoreOpd += "</td>";
      addMoreOpd += "</tr>";
    
    
      var optionOpd = '';
      var optionInspekturPembantu = [];
      var optionPengendaliTeknis = [];
      var optionKetuaTim = [];
      var optionAnggota = [];
      var ketuaTimArr = []
      var pengendaliTeknisArr = []
      var inspekturPembantuArr = []
      var anggotaArr = []
      let excludeTimArr = [];
    
      $(function(){
        @if(!isset($data->id))
          add_tim_section()
        @endif
        $("#program_kerja").on('change', function() {
          changeSasaranPk()
        })
        changeSasaranPk()
    
        function changeSasaranPk(){
          
          $(".sasaran-pk").html($("#program_kerja").find("option:selected").data('sasaran'))
          $(".kegiatan-pk").html($("#program_kerja").find("option:selected").data('kegiatanStr'))
        }
    
        $('.fc-datepicker').datepicker({
          dateFormat: "dd-mm-yy"
        });
    
        $(document).on('click', ".add-anggota", function(){
            const idx = $(this).data('tim')
            $(`#cover-anggota-${idx}`).append(addMoreAnggota);

            // $(`#cover-anggota-${idx} tr:last .select2`).html(optionAnggota);
            setupSelectOptionAnggota($(`#cover-anggota-${idx} tr:last .select2`))
            $(`#cover-anggota-${idx} tr:last .select2`).select2();
        });
    
        
        $(document).on('click', ".add-opd", function(){
            const idx = $(this).data('tim')
            $(`#cover-opd-${idx}`).append(addMoreOpd);
    
            $(`#cover-opd-${idx} tr:last .select2`).html(optionOpd);
            $(`#cover-opd-${idx} tr:last .select2`).select2();
        });
    
        change_program_kerja($(".program_kerja"));
        kegiatan_filled_date();
        check_jadwal_surat_perintah();
    
        $(".program_kerja").on("change", function(){
          change_program_kerja($(this));
          kegiatan_filled_date();
        });
    
        async function change_program_kerja(el) { 
          var val = $(el).find("option:selected").data("wilayah");
    
          $("input[name='wilayah']").val(`[${val}]`);
          $.when(await get_inspektur_pembantu(val)).
          then(await get_pengendali_teknis(val)).
          then(await get_ketua_tim(val)).
          then(await get_anggota(val));
          get_opd($(el).val());
    
          check_jadwal_surat_perintah();
        }
    
        async function get_inspektur_pembantu(val){
          optionInspekturPembantu = []
          await $.post("/mst/pegawai/get_inspektur_pembantu_by_wilayah", {"id_wilayah": val}, function(res){
            if(res.data != null){
              $(".inspektur_pembantu").html('');
    
              var data_edit = {{isset($data->id_inspektur_pembantu) ? $data->id_inspektur_pembantu : 0 }};
    
              $.each(res.data, function(idx, val){
                inspekturPembantuArr.push({id: val.id, name: val.nama })
              });
    
              $(".inspektur_pembantu[data-selected!=0]").map(function(idx, el) {
                $(el).val($(el).data('selected'))
              })
            }
          });
        }
    
        async function get_pengendali_teknis(val){
          optionPengendaliTeknis = [];
          await $.post("/mst/pegawai/get_pengendali_teknis_by_wilayah", {"id_wilayah": val}, function(res){
            if(res.data != null){
              $(".pengendali_teknis").html('');
    
              var data_edit = {{isset($data->id_pengendali_teknis) ? $data->id_pengendali_teknis : 0 }};
              
              $.each(res.data, function(idx, val){
                pengendaliTeknisArr.push({id: val.id, name: val.nama })
              });
              
              $.when($(".pengendali_teknis[data-selected!=0]").map(function(idx, el) {
                $(el).val($(el).data('selected'))
              }))
              
            }
          });
        }
        

        async function setupExcludeUniqueArr(timEl) {
          const timId = timEl.data('id')
          if(excludeTimArr.indexOf(timId) == -1) {  
            let objArr = {}
            timEl.find($(".must-unique")).map(function(idx, mu){
              const nameMu = $(mu).attr('name')
              objArr[nameMu] = $(mu).val()
            })
            excludeTimArr[timId] = objArr
          }

        }
    
        async function get_ketua_tim(val){
          optionKetuaTim = [];
          ketuaTimArr = [];
          await $.post("/mst/pegawai/get_ketua_tim_by_wilayah", {"id_wilayah": val}, function(res){
            if(res.data != null){
              $(".ketua_tim").html('');
    
              var data_edit = {{isset($data->id_ketua_tim) ? $data->id_ketua_tim : 0 }};
    
              $.each(res.data, function(idx, val){
                ketuaTimArr.push({id: val.id, name: val.nama })
              })
            }
          });
        }

        async function get_anggota(val){
          optionAnggota = [];
          anggotaArr = [];
          await $.post("/mst/pegawai/get_anggota_by_wilayah", {"id_wilayah": val}, function(res){
            if(res.data != null){
              $(".anggota").html('');
    
              var option = '';
             
              $.when($.each(res.data, function(idx, val){
                anggotaArr.push({id: val.id, name: val.nama })
              })).then(function() {
                $(".cover-tim").find($(".tim")).map(async function(idx, el) {
                  await renderInspekturPembantu($(el).find($(".inspektur_pembantu")));
                })
              });
            }
          });
        }
    
    
        async function renderInspekturPembantu(el) {
          const coverTim = $(el).parent().closest($(".tim"))
          const timId = coverTim.data('id')
          const nameRender = $(el).attr('name');
          
          if(!excludeTimArr[timId]) {
            await setupExcludeUniqueArr(coverTim)
          }
          const excludeId = [excludeTimArr[timId].inspektur]
          await setupSelectOptionExclude(el, excludeId, coverTim, inspekturPembantuArr)
          
          await setupExcludeUniqueArr(coverTim)

          await renderPengendaliTeknis(coverTim.find($(".pengendali_teknis")))
        }

        async function renderPengendaliTeknis(el) {
          const coverTim = $(el).parent().closest($(".tim"))
          const timId = coverTim.data('id')
          const nameRender = $(el).attr('name');
          
          if(!excludeTimArr[timId]) {
            await setupExcludeUniqueArr(coverTim)
          }
          const excludeId = [excludeTimArr[timId].inspektur, excludeTimArr[timId].inspektur_pembantu]
          await setupSelectOptionExclude(el, excludeId, coverTim, pengendaliTeknisArr)
          
          await setupExcludeUniqueArr(coverTim)

          await renderKetuaTim(coverTim.find($(".ketua_tim")))
        }

        async function renderKetuaTim(el) {
          const coverTim = $(el).parent().closest($(".tim"))
          const timId = coverTim.data('id')
          const nameRender = $(el).attr('name');
          
          if(!excludeTimArr[timId]) {
            await setupExcludeUniqueArr(coverTim)
          }
          const excludeId = [excludeTimArr[timId].inspektur, excludeTimArr[timId].inspektur_pembantu, excludeTimArr[timId].pengendali_teknis]
          console.log(excludeId);
          await setupSelectOptionExclude(el, excludeId, coverTim, ketuaTimArr)

          await setupExcludeUniqueArr(coverTim)

          await coverTim.find($(".anggota")).map(async function(idx, elAnggota) {

            await renderAnggota(elAnggota)
          })
        }

        async function renderAnggota(el) {
          const coverTim = $(el).parent().closest($(".tim"))
          const timId = coverTim.data('id')
          const nameRender = $(el).attr('name');
          await setupSelectOptionAnggota(el)

        }

        async function setupSelectOptionExclude(el, excludeId, coverTim, optionArr) {
          console.log($(el).attr('name'))
          // setting last value
          let current_value = $(el).val() > 0 ? $(el).val() : ($(el).data('selected') ? $(el).data('selected') : 0)
          current_value = excludeId.indexOf(current_value) == -1 ? current_value : 0 // ini kalau misal si current value ada di exclude maka set jadi 0
          $(el).data('selected', current_value)

          const newArrExcluded = optionArr.filter(r => excludeId.indexOf(r.id.toString()) == -1)
          const option = await makeOptionFromArray(newArrExcluded)
          $(el).html(option)
          if($(el).data('selected') != '0' || $(el).data('selected') > 0) {
            $(el).val($(el).data('selected'))
          }

          console.log($(el).val())
          
          await setupExcludeUniqueArr(coverTim)
          
        }

        async function setupSelectOptionAnggota(el) {
          const coverTim = $(el).parent().closest($(".tim"))
          const timId = coverTim.data('id')
          const nameRender = $(el).attr('name');

          let selectedAnggota = anggotaArr
          coverTim.find($(".anggota")).not($(el)).map(async function(idx, elOther) {
            selectedAnggota = selectedAnggota.filter(r => { 
              var val = $(elOther).val()
              val = val > 0 ? val : $(elOther).data('selected')
              return  r.id.toString().indexOf(val) == -1
              // r.id.toString().indexOf($(elOther).val()) == -1
            })
          })
          let excludeId = [excludeTimArr[timId].inspektur, excludeTimArr[timId].inspektur_pembantu, excludeTimArr[timId].pengendali_teknis, excludeTimArr[timId].ketua_tim]
          excludeId.concat(selectedAnggota)
          console.log(excludeId, $(el).val() , ' exclude')
          
          await setupSelectOptionExclude(el, excludeId, coverTim, selectedAnggota)

        }

        $(document).on('change',".pengendali_teknis", async function(){
          console.log()
          await renderPengendaliTeknis($(this))
        })

        $(document).on('change', ".inspektur_pembantu", async function(){
          await renderInspekturPembantu($(this))
        })

        $(document).on('change', ".ketua_tim", async function(){
          await renderKetuaTim($(this))
        })

        $(document).on('change', ".anggota", async function(){
          const coverTim = $(this).parent().closest($(".tim"))
          await coverTim.find($(".anggota")).map(async function(idx, elAnggota) {
            await renderAnggota(elAnggota)
          })
        })

        async function makeOptionFromArray(arr) {
          return await arr.map(function(val, idx) {
            return `<option value='${val.id}'>${val.name}</option>`
          })
        }
    
        
        function get_opd(val){
          $.post("/mst/skpd/get_skpd_by_program_kerja", {"id_program_kerja": val}, function(res){
            if(res.data != null){
              $("select.opd").html('');
    
              var option = '';
              $.when($.each(res.data, function(idx, val){
                $("select.opd").append("<option value='" + val.id +"'>" + val.name + "</option>");
                option += "<option value='" + val.id +"'>" + val.name + "</option>";
              })).then(function(){
                optionOpd = option;
    
                
              $("select.opd[data-selected!=0]").map(function(idx, el) {
                $(el).val($(el).data('selected'))
              })
              });
            }
          });
        }
    
        $("#wilayah, #dari_kalendar, #sampai_kalendar").on("change", function(){
          check_jadwal_surat_perintah();
        });
    
    
        function check_jadwal_surat_perintah(){
          $("#jadwal_warning").hide();
          if($(".wilayah").val() != "" && $("#dari_kalendar").val() != "" && $("#sampai_kalendar").val() != ""){
            $.post("/pkpt/surat_perintah/check_jadwal", {"id_wilayah": $(".kegiatan").find($("option:selected")).data('wilayah'), "dari" : $("#dari_kalendar").val(), "sampai": $("#sampai_kalendar").val(), "sp_id" : "{{ isset($data->id) ? $data->id : 0}}" }, function(res){
                if(res.show_warning == 1){
                  $("#jadwal_warning").html(res.msg).show();
                }
            });
          }
        }
    
        function kegiatan_filled_date() {
          var option_selected = $(".program_kerja").find($("option:selected"));
          $("#dari_kalendar").val(option_selected.data('dari'));
          $("#sampai_kalendar").val(option_selected.data('sampai'));
        }
    
        $(document).on('click', ".delete-anggota", function(){
          $(this).parent().closest("tr").remove();
        });
        
        $(document).on('click', ".delete-opd", function(){
          $(this).parent().closest("tr").remove();
        });
    
        function get_sasaran(){
          var id = $("select[name='program_kerja']").find($('option:selected')).data('program_kerja');
          $(".sasaran").html('');
    
          @php
          $arr = [];
          if(isset($data->id)){
    
            $arr = $data->sasaran->map(function($val) use($arr) {
              return $val->id;
            });
            $arr = $arr->toArray();
          }
    
          @endphp
          var data_edit = [{{ implode(',',$arr) }}];
          $.get("{{url('')}}/mst/sasaran/get_sasaran_by_id_program_kerja?id=" + id, function(data) {
            $(".sasaran").html('');
            // console.log(data);
            $.each(data, function(idx, val){
              var selected = data_edit.indexOf(val.id) != -1 ? 'selected' : '';
              var option = "<option value='"+val.id+"' "+ selected+">"+val.nama+"</option>";
              $(".sasaran").append(option);
            });
          });
        }
    
        $("#unsur").on("change", async function() {
          await get_sub_unsur();
        })
    
        // get_sub_unsur();
        // async function get_sub_unsur() {
        //     const option = [];
        //     await $.get(`{{URL::to('/pkpt/surat_perintah/get-sub-unsur')}}/${$('#unsur').val()}`).success(function (res) {
        //         res.data.map(function(val) {
        //             option.push(`<option value='${val.id}'>${val.nama}</option>`)
        //         })   
        //     })
        //     $("#sub_unsur").html(option.join('')).trigger('change')
        // }
    
        // $("#sub_unsur").on('change', function () {
        //     get_butir_kegiatan();
        // })
        
        async function get_butir_kegiatan() {
            const option = [];
            await $.get(`{{URL::to('/pkpt/surat_perintah/get-butir-kegiatan')}}/${$('#sub_unsur').val()}`).success(function (res) {
                res.data.map(function(val) {
                    option.push(`<option value='${val.id}' data-angka-kredit='${val.angka_kredit}' data-satuan='${val.satuan.nama}'>${val.nama}</option>`)
                })   
            })
            $("#butir_kegiatan").html(option.join('')).trigger('change')
        }
    
    
        // Jika Form Add, maka panggil function get_sasaran()
        // @if (!isset($data))
        //   get_sasaran();
        // @endif
    
        $(".add-tim-btn").on('click', async function() {
          
          add_tim_section();
          
          $(`.cover-tim .tim:last select`).select2()
          await renderInspekturPembantu($(`.cover-tim .tim:last`).find($(".inspektur_pembantu")));
        })
        
        async function add_tim_section() {
          let template_tim = `
          {{ sp_tim($list_inspektur, $multiple_pkpt) }}
          `

          console.log(optionAnggota);
          idx_tim++;
          template_tim = template_tim.replace(/\[idx]/gm, idx_tim)
          template_tim = template_tim.replace('[option_inspektur_pembantu]', optionInspekturPembantu.join(''))
          template_tim = template_tim.replace('[option_pengendali_teknis]', optionPengendaliTeknis.join(''))
          template_tim = template_tim.replace('[option_ketua_tim]', optionKetuaTim.join(''))
          template_tim = template_tim.replace('[option_anggota]', optionAnggota.join(''))
          template_tim = template_tim.replace('[option_opd]', optionOpd)
    
          $(".cover-tim").append(template_tim)
        }

        $('#jadikan_lampiran').on('change', function(e) {
          if(e.target.checked == true) {
            $('.preview').attr('data-target', '#modalLampiran');
            $('.preview').attr('data-toggle', 'modal');
          }else if(e.target.checked == false) {
            $('.preview').attr('data-toggle', 'modal');
            $('.preview').attr('data-target', '#exampleModal');
          }
        });
        
        $('#form-sp').on('submit', function(e) {
          e.preventDefault()
          const fixInput = [
              '_token',
              "dasar_surat",
              "program_kerja",
              "wilayah",
              "dari",
              "sampai",
              "tembusan",
              "jadikan_lampiran",
          ]

          let input = $(this).serializeArray()
          input = input.filter(r => fixInput.indexOf(r.name) !== -1)
          const mappingTim = []
    
          /* mapping langkah pemeriksaan rinci */
          $(".cover-tim").find($(".tim")).map((idx, el) => {
              // Tugas tab
    
              const anggota = []
              $(el).find($("select[name='anggota[]']")).map(function(idx, el_child) {
                  // console.log($(el_child).val())
                  anggota.push($(el_child).val())
              })
    
              const opd = []
              $(el).find($("select[name='opd[]']")).map(function(idx, el_child) {
                  // console.log($(el_child).val())
                  opd.push($(el_child).val())
              })
    
              mappingTim.push({
                  id_tim: $(el).data('id'),
                  no_tim: $(el).data('idx'),
                  inspektur: $(el).find($("[name='inspektur']")).val(),
                  inspektur_pembantu: $(el).find($("[name='inspektur_pembantu']")).val(),
                  pengendali_teknis: $(el).find($("[name='pengendali_teknis']")).val(),
                  ketua_tim: $(el).find($("[name='ketua_tim']")).val(),
                  anggota,
                  opd
              })
          })
    
          $('#mapping-tim').val(JSON.stringify(mappingTim))
    
    
          $(this).unbind('submit').submit();
        })
    
        $(document).on('click', '.delete-tim', function() {
          $(this).parent().closest($(".tim")).remove();
        })
        
        $(document).on('change', '.must-unique', function() {
          
        })
      });
    </script>
    <script type="text/javascript">
          $('#more_info').change(function() {
            if(this.checked != true){
              $("#conditional_part").hide();
            }
            else{
              $("#conditional_part").show();
            }
          });
    </script>
    