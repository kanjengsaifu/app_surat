<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Jenis Surat</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</option></li>
              <li><option href="<?php echo base_url(); ?>admin/jenis_surat">Jenis Surat</option></li>
              <li class="active">Tambah</li>
              <!--
              <li><option >Layout</option></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Jenis Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->

              <?php echo form_open('admin/insert_jenis'); ?>

              <div class="form-group">
                    <label for="exampleInputEmail1">No Agenda</label>
                      <input type="text" class="form-control" name="no_agenda" placeholder="No Agenda"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Diterima</label>
                      <input type="text" class="form-control" name="tgl_terima" id="tgl_terima" data-date-format="yyyy-mm-dd" placeholder="Tanggal Diterima"/>
                  </div>
           <div class="form-group">
             <label for="exampleInputEmail1">kode  arsip</label>
            

<form id="formname" name="formname" method="post" action="submitform.asp" >
<table width="50%" border="0" cellspacing="0" cellpadding="5">
  <tr>
   
    <td >
      <select name="kode_arsip" id="category1" class="form-control">
        <option value="">Kategori</option>
        <option value="PR">PERENCANAAN (PR) </option>
        <option value="KP">KEPEGAWAIAN (KP) </option>
        <option value="KU">KEUANGAN (KU) </option>
        <option value="PL">PERLENGKAPAN (PL) </option>
        <option value="HK">HUKUM (HK) </option>
        <option value="KS">KERJASAMA LUAR NEGERI (KS) </option>
        <option value="UM">UMUM (UM) </option>
        <option value="PS">PENGAWASAN (PS) </option>
        <option value="DL">DIKLAT (DL) </option>
        <option value="GF">GEOFISIKA (GF) </option>
        <option value="KT">KLIMATOLOGI (KT) </option>
        <option value="ME">METEOROLOGI (ME) </option>
        <option value="LJ">INSTRUMENTASI KALIBRASI REKAYASA DAN JARINGAN KOMUNIKASI (LJ) </option>
      </select>
    </td>
  </tr>
  <tr>
  
    <td>
      <select disabled="disabled"  id="category2" name="kode_arsip" class="form-control">
        <option value>Kategori 2</option>
         <option value="PR.00">===============================================</option>
        <!-- PERENCANAAN -->
        <optgroup data-rel="PR">
          <option value="PR.001">PENYUSUNAN RENCANA DAN PROGRAM (PUSAT) </option>
          <option value="PR.002">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 1)</option>
          <option value="PR.003">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 2)</option>
          <option value="PR.004">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 3)</option>
          <option value="PR.005">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 4)</option>
          <option value="PR.006">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 5)</option>
          <option value="PR.00">===============================================</option>
            <option value="PR.101">PENGENDALIAN DAN PELAPORAN PROGRAM (PUSAT) </option>
            <option value="PR.102">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 1)</option>
            <option value="PR.103">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 2)</option>
            <option value="PR.104">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 3)</option>
            <option value="PR.105">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 4)</option>
            <option value="PR.106">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 5)</option>
            <option value="PR.00">===============================================</option>
              <option value="PR.201">ANALISA DAN EVALUASI (PUSAT) </option>
              <option value="PR.202">ANALISA DAN EVALUASI (BB WIL 1)</option>
              <option value="PR.203">ANALISA DAN EVALUASI (BB WIL 2)</option>
              <option value="PR.204">ANALISA DAN EVALUASI (BB WIL 3)</option>
              <option value="PR.205">ANALISA DAN EVALUASI (BB WIL 4)</option>
              <option value="PR.206">ANALISA DAN EVALUASI (BB WIL 5)</option>
              <option value="PR.00">===============================================</option>
                <option value="PR.301">TARIF (PUSAT) </option>
                <option value="PR.302">TARIF (BB WIL 1)</option>
                <option value="PR.303">TARIF (BB WIL 2)</option>
                <option value="PR.304">TARIF (BB WIL 3)</option>
                <option value="PR.305">TARIF (BB WIL 4)</option>
                <option value="PR.306">TARIF (BB WIL 5)</option>
                <option value="PR.00">===============================================</option>
        </optgroup>

        <!-- KEPEGAWAIAN -->
        <optgroup data-rel="KP">
          <option value="KP.001">TATA MUTASI KEPEGAWAIAN (Data Perorangan Pegawai/Data Base)</option>
          <option value="KP.002">TATA MUTASI KEPEGAWAIAN (NIP / Kartu Pegawai)</option>
          <option value="KP.003">TATA MUTASI KEPEGAWAIAN (Penugasan / Surat Perintah Tugas (SPT) / Lakhar)</option>
          <option value="KP.004">TATA MUTASI KEPEGAWAIAN (Serah Terima Jabatan)</option>
          <option value="KP.005">TATA MUTASI KEPEGAWAIAN (Penghargaan)</option>
          <option value="KP.006">TATA MUTASI KEPEGAWAIAN (Sumpah Pegawai)</option>
          <option value="KP.007">TATA MUTASI KEPEGAWAIAN (Specimen Tanda Tangan)</option>
          <option value="KP.008">TATA MUTASI KEPEGAWAIAN (Statistik / Sensus)</option>
          <option value="KP.009">TATA MUTASI KEPEGAWAIAN (Daftar Urut Kepangkatan)</option>
          <option value="KP.010">TATA MUTASI KEPEGAWAIAN (Pasport / Exit Permit)</option>
          <option value="KP.011">TATA MUTASI KEPEGAWAIAN (Sertifikat)</option>
          <option value="KP.012">TATA MUTASI KEPEGAWAIAN (LP2P)</option>
          <option value="KP.013">TATA MUTASI KEPEGAWAIAN (Cuti)</option>
          <option value="KP.014">TATA MUTASI KEPEGAWAIAN (Perceraian/Perkawinan)</option>
          <option value="KP.015">TATA MUTASI KEPEGAWAIAN (Surat Kuasa / Pernyataan / Keterangan)</option>
          <option value="KP.018">TATA MUTASI KEPEGAWAIAN (Absensi / Daftar Hadir)</option>
          <option value="KP.019">TATA MUTASI KEPEGAWAIAN (Pengangkatan)</option>
          <option value="KP.020">TATA MUTASI KEPEGAWAIAN (Kenaikan Pangkat)</option>
          <option value="KP.021">TATA MUTASI KEPEGAWAIAN (Pengangkatan Dalam Jabatan / DUPAK Jabatan Fungsional)</option>
          <option value="KP.022">TATA MUTASI KEPEGAWAIAN (Pemindahan / Pindah Pegawai)</option>
          <option value="KP.023">TATA MUTASI KEPEGAWAIAN (Peninjauan Masa Jabatan / Masa Kerja)</option>
          <option value="KP.024">TATA MUTASI KEPEGAWAIAN (Pembantuan / Kekaryaan)</option>
          <option value="KP.025">TATA MUTASI KEPEGAWAIAN (Impasing / Penyesuaian Ijazah)</option>
          <option value="KP.026">TATA MUTASI KEPEGAWAIAN (SPMT / SPTMJ / SPMMJ)</option>
          <option value="KP.00">==================================================================================</option>
            <option value="KP.101">PERENCANAAN KEPEGAWAIAN (Formasi Pegawai)</option>
            <option value="KP.102">PERENCANAAN KEPEGAWAIAN (Daftar Nominatif Pegawai)</option>
            <option value="KP.103">PERENCANAAN KEPEGAWAIAN (Pengendalian Kepangkatan / Jabatan)</option>
            <option value="KP.104">PERENCANAAN KEPEGAWAIAN (Tenaga Kerja)</option>
            <option value="KP.105">PERENCANAAN KEPEGAWAIAN (Analisis Jabatan)</option>
            <option value="KP.106">PERENCANAAN KEPEGAWAIAN (Ikatan Dinas)</option>
            <option value="KP.00">================================================================================</option>
              <option value="KP.201">PENGGAJIAN PEGAWAI (Lamaran)</option>
              <option value="KP.202">PENGGAJIAN PEGAWAI (Pendaftaran Keluarga / Karis / Karsu)</option>
              <option value="KP.203">PENGGAJIAN PEGAWAI (Praktek Kerja Lapangan)</option>
              <option value="KP.204">PENGGAJIAN PEGAWAI (Seleksi)</option>
              <option value="KP.205">PENGGAJIAN PEGAWAI (Penguji Kesehatan)</option>
              <option value="KP.206">PENGGAJIAN PEGAWAI (Penempatan)</option>
              <option value="KP.207">PENGGAJIAN PEGAWAI (Calon Pegawai Negeri Sipil)</option>
              <option value="KP.208">PENGGAJIAN PEGAWAI (Penggajian / KGB / Tunjangan Jabatan / KP4)</option>
              <option value="KP.209">PENGGAJIAN PEGAWAI (Insentif / Honor)</option>
              <option value="KP.00">================================================================================</option>
                <option value="KP.301">PENILAIAN (Ujian Dinas)</option>
                <option value="KP.302">PENILAIAN (Hukuman Disiplin / Peringatan / Penundaan Gaji / Pangkat)</option> 
                <option value="KP.303">PENILAIAN (Skorsing / Hukuman Jabatan)</option> 
                <option value="KP.304">PENILAIAN (Rehabilitasi)</option> 
                <option value="KP.305">PENILAIAN (Ijazah)</option> 
                <option value="KP.306">PENILAIAN (Jam Kerja)</option> 
                <option value="KP.307">PENILAIAN (DP3)</option>
                <option value="KP.00">================================================================================</option> 
                  <option value="KP.401">KESEJAHTERAAN PEGAWAI (Kesehatan Pegawai)</option>
                  <option value="KP.402">KESEJAHTERAAN PEGAWAI (Koperasi Pegawai)</option> 
                  <option value="KP.403">KESEJAHTERAAN PEGAWAI (Asuransi / Taspen / Taperum)</option> 
                  <option value="KP.404">KESEJAHTERAAN PEGAWAI (Bantuan Pegawai / Dana Pegawai)</option> 
                  <option value="KP.405">KESEJAHTERAAN PEGAWAI (Tabungan Pegawai)</option> 
                  <option value="KP.406">KESEJAHTERAAN PEGAWAI (Olahraga / Kesenian)</option> 
                  <option value="KP.407">KESEJAHTERAAN PEGAWAI (Pembinaan Mental / Rohani)</option>
                  <option value="KP.00">================================================================================</option>
                    <option value="KP.501">PEMBERHENTIAN DAN PENSIUN (Pemberhentian dengan Hormat) </option>
                    <option value="KP.502">PEMBERHENTIAN DAN PENSIUN (Pemberhentian Tidak dengan Hormat)</option>
                    <option value="KP.503">PEMBERHENTIAN DAN PENSIUN (Pemberhentian Sementara)</option> 
                    <option value="KP.504">PEMBERHENTIAN DAN PENSIUN (Penerapan Uang Tunggu)</option> 
                    <option value="KP.505">PEMBERHENTIAN DAN PENSIUN (MPP)</option> 
                    <option value="KP.506">PEMBERHENTIAN DAN PENSIUN (Pensiun)</option> 
                    <option value="KP.507">PEMBERHENTIAN DAN PENSIUN (Pensiun Janda / Duda)</option> 
                    <option value="KP.508">PEMBERHENTIAN DAN PENSIUN (Nominatif Pensiun)</option>
                    <option value="KP.509">PEMBERHENTIAN DAN PENSIUN (Pensiun Meninggal Dunia)</option>
                    <option value="KP.510">PEMBERHENTIAN DAN PENSIUN (Pensiun Dini)</option>
                    <option value="KP.00">================================================================================</option>
                      <option value="KP.601">PERKUMPULAN PEGAWAI / NON PEGAWAI (KORPRI) </option>
                      <option value="KP.602">PERKUMPULAN PEGAWAI / NON PEGAWAI (Dharma Wanita)</option>

  <!-- KEUANGAN -->
        <optgroup data-rel="PR">
          <option value="PR.001">PENYUSUNAN RENCANA DAN PROGRAM (PUSAT) </option>
          <option value="PR.002">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 1)</option>
          <option value="PR.003">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 2)</option>
          <option value="PR.004">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 3)</option>
          <option value="PR.005">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 4)</option>
          <option value="PR.006">PENYUSUNAN RENCANA DAN PROGRAM (BB WIL 5)</option>
          <option value="PR.00">===============================================</option>
            <option value="PR.101">PENGENDALIAN DAN PELAPORAN PROGRAM (PUSAT) </option>
            <option value="PR.102">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 1)</option>
            <option value="PR.103">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 2)</option>
            <option value="PR.104">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 3)</option>
            <option value="PR.105">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 4)</option>
            <option value="PR.106">PENGENDALIAN DAN PELAPORAN PROGRAM (BB WIL 5)</option>
            <option value="PR.00">===============================================</option>
              <option value="PR.201">ANALISA DAN EVALUASI (PUSAT) </option>
              <option value="PR.202">ANALISA DAN EVALUASI (BB WIL 1)</option>
              <option value="PR.203">ANALISA DAN EVALUASI (BB WIL 2)</option>
              <option value="PR.204">ANALISA DAN EVALUASI (BB WIL 3)</option>
              <option value="PR.205">ANALISA DAN EVALUASI (BB WIL 4)</option>
              <option value="PR.206">ANALISA DAN EVALUASI (BB WIL 5)</option>
              <option value="PR.00">===============================================</option>
                <option value="PR.301">TARIF (PUSAT) </option>
                <option value="PR.302">TARIF (BB WIL 1)</option>
                <option value="PR.303">TARIF (BB WIL 2)</option>
                <option value="PR.304">TARIF (BB WIL 3)</option>
                <option value="PR.305">TARIF (BB WIL 4)</option>
                <option value="PR.306">TARIF (BB WIL 5)</option>
                <option value="PR.00">===============================================</option>
        </optgroup>



      </select>
    </td>
  </tr>

</table>

</div>
<script type="text/javascript">
 var $cat = $("#category1"),
    $subcat = $("#category2");

var optgroups = {};

$subcat.each(function(i,v){
  var $e = $(v);
  var _id = $e.attr("id");
  optgroups[_id] = {};
  $e.find("optgroup").each(function(){
    var _r = $(this).data("rel");
    $(this).find("option").addClass("is-dyn");
    optgroups[_id][_r] = $(this).html();
  });
});
$subcat.find("optgroup").remove();

var _lastRel;
$cat.on("change",function(){
    var _rel = $(this).val();
    if(_lastRel === _rel) return true;
    _lastRel = _rel;
    $subcat.find("option").attr("style","");
    $subcat.val("");
    $subcat.find(".is-dyn").remove();
    if(!_rel) return $subcat.prop("disabled",true);
    $subcat.each(function(){
      var $el = $(this);
      var _id = $el.attr("id");
      $el.append(optgroups[_id][_rel]);
    });
    $subcat.prop("disabled",false);
});
</script>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" placeholder="No Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="surat">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengirim</label>
                      <input type="text" class="form-control" name="pengirim" placeholder="Pengirim"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" placeholder="Perihal"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran</label>
                      <input type="text" class="form-control" name="lampiran" placeholder="Lampiran"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sifat Surat</label>
                      <input type="text" class="form-control" name="sifat_surat" placeholder="Sifat Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penjabat Pendisposisi</label>
                      <input type="text" class="form-control" name="penjabat_disposisi" placeholder="Penjabat Pendisposisi"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Disposisi</label> <br> <br>
                
                      <input type="checkbox" value="Tata Usaha" name="disposisi[]" >Tata Usaha
                      <input type="checkbox" value="Kapok Datin" name="disposisi[]" class="checkbox-inline" >Kapok Datin
                      <input type="checkbox" value="Kapok Obs" name="disposisi[]" class="checkbox-inline">Kapok Obs
                      <input type="checkbox" value="Kapok Forcaster" name="disposisi[]" class="checkbox-inline">Kapok Forcaster
                      <input type="checkbox" value="Kapok Teknisi" name="disposisi[]" class="checkbox-inline">Kapok Teknisi
                      <input type="checkbox" value="PPK" name="disposisi[]" class="checkbox-inline">PPK <br> <br>
                      <input type="checkbox" value="Bendahara Penerimaan" name="disposisi[]" class="checkbox-inline">Bendahara Penerimaan
                      <input type="checkbox" value="Bendahara Pengeluaran" name="disposisi[]" class="checkbox-inline">Bendahara Pengeluaran
                      <input type="checkbox" value="Pejabat ULP" name="disposisi[]" class="checkbox-inline">Pejabat ULP
                      <input type="checkbox" value="PPABP" name="disposisi[]" class="checkbox-inline">PPABP
                      <input type="checkbox" value="Petugas SAIBA" name="disposisi[]" class="checkbox-inline">Petugas SAIBA
                      <input type="checkbox" value="Petugas BMN" name="disposisi[]" class="checkbox-inline">Petugas BMN
                      
                 </div>
                     <!--  <select name="disposisi" required="required" class="form-control col-md-8">
                                <option value="Tata Usaha">TU</option>
                                <option value="Kapok Datin">Kapok Datin</option>
                                <option value="Kapok Obs">Kapok Obs</option>
                                <option value="Kapok Forcaster">Kapok Forcaster</option>
                                <option value="Kapok Teknisi">Kapok Teknisi</option>
                                <option value="PPK">PPK</option>
                                <option value="Bendahara Penerimaan">Bendahara Penerimaan</option>
                                <option value="Bendahara Pengeluaran">Bendahara Pengeluaran</option>
                                <option value="Penjabat ULP">Penjabat ULP</option>
                                <option value="PPABP">PPABP</option>
                                <option value="Petugas SAIBA">Petugas SAIBA</option>
                                <option value="Petugas BMN">Petugas BMN</option>
                          </select>
                              -->
                  
                  <div class="form-group"> <br>
                                        <label for="exampleInputEmail1">Surat Asli/Copy</label>
                         <select name="asli_copy" required="required" class="form-control col-md-8">
                                <option value="surat asli">Surat Asli</option>
                                <option value="surat copy">Surat Copy</option>
                          </select>
                             
                  </div> <br> <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Informasi Disposisi</label>
                    <textarea name="informasi_disposisi" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <option href="<?php echo base_url(); ?>admin/jenis_surat" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</option>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
    

     