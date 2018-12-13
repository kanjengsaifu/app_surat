<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Jenis Surat</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Jenis Surat</a></li>
              <li class="active">Edit</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit Jenis Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_jenis'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">No Agenda</label>
                      <input type="text" class="form-control" name="no_agenda" value="<?php echo $data->no_agenda ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Diterima</label>
                      <input type="text" class="form-control" name="tgl_terima" id="tgl_terima" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_terima ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Arsip</label>
                     
<form id="formname" name="formname" method="post" action="submitform.asp" >

<!-- <table width="50%" border="0" cellspacing="0" cellpadding="5"> -->
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
         </optgroup>

  <!-- KEUANGAN -->
        <optgroup data-rel="KU">
          <option value="KU.001">ANGGARAN (RAPBN / APBN) </option>
          <option value="KU.002">ANGGARAN (DUK / DIK (Konsep, Persetujuan, ABT, Pergeseran / Perubahan DIK, dll))</option>
          <option value="KU.003">ANGGARAN (Tender (Berita Acara, Kontrak SPK, Penunjukan Langsung, Pekerjaan Langsung, dll))</option>
          <option value="KU.004">ANGGARAN (Permintaan, Pencairan (Dana, Gaji, dll))</option>
          <option value="KU.005">ANGGARAN (SPP / SPPR, Belanja Pegawai (Beban Tetap, Sementara, Gaji))</option>
          <option value="KU.006">ANGGARAN (SPMU (Beban Tetap, Sementara, Gaji, Realisasi Anggaran Belanja Rutin, dll))</option>
          <option value="KU.007">ANGGARAN (Uang Lembur)</option>
          <option value="KU.008">ANGGARAN (SPJR, LKKA / LKKR, UYHD, Laporan Keuangan)</option>
          <option value="KU.00">===============================================</option>
            <option value="KU.101">ANGGARAN PEMBANGUNAN (RAPBN / APBN)</option>
            <option value="KU.102">ANGGARAN PEMBANGUNAN (DUP / DIPA (Plafon Anggaran, Revisi DIP / PO, dll))</option>
            <option value="KU.103">ANGGARAN PEMBANGUNAN (Tender (Berita Acara, Kontrak SPK, Penunjukan Langsung, Pekerjaan Lanjutan, dll))</option>
            <option value="KU.104">ANGGARAN PEMBANGUNAN (SPP (Beban Tetap, Sementara, Siap, dll))</option>
            <option value="KU.105">ANGGARAN PEMBANGUNAN (SPMU (Beban Tetap, Sementara, Siap, dll))</option>
            <option value="KU.106">ANGGARAN PEMBANGUNAN (SPJ)</option>
            <option value="KU.107">ANGGARAN PEMBANGUNAN (Laporan (Mingguan, Berkala, Bulanan Proyek, Fisik, dll), LAKIP)</option>
            <option value="KU.00">===============================================</option>
              <option value="KU.201">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (Naskah Perjanjian Luar Negeri)</option>
              <option value="KU.202">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (Kontrak Jual Beli)</option>
              <option value="KU.203">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (SPP)</option>
              <option value="KU.204">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (SPM)</option>
              <option value="KU.205">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (Pembukuan LC)</option>
              <option value="KU.206">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (Badan Pembari Bantuan)</option>
              <option value="KU.00">===============================================</option>
                <option value="KU.301">PENDAPATAN / PENERIMAAN (Pajak-pajak) </option>
                <option value="KU.302">PENDAPATAN / PENERIMAAN (Pendapatan Negara Bukan Pajak (PNPB), dll) </option>
                <option value="KU.303">PENDAPATAN / PENERIMAAN (Sewa Rumah Dinas) </option>
                <option value="KU.304">PENDAPATAN / PENERIMAAN (Royalti) </option>
                <option value="KU.305">PENDAPATAN / PENERIMAAN (Ipeda) </option>
                <option value="KU.00">===============================================</option>
                  <option value="KU.401">PERBENDAHARAAN / PEMBUKUAN / VERIFIKASI (Perhitungan Anggaran) </option>
                  <option value="KU.402">PERBENDAHARAAN / PEMBUKUAN / VERIFIKASI (Perbendaharaan (Tuntutan Ganti Rugi)) </option>
                  <option value="KU.403">PERBENDAHARAAN / PEMBUKUAN / VERIFIKASI (Bendaharawan / Kuasa Pengguna Anggaran / PPK / Pimpro, dll) </option>
                  <option value="KU.00">===============================================</option>
                    <option value="KU.501">UMUM (Tagihan Dinas (Listrik, Telepon)) </option>
                    <option value="KU.502">UMUM (Tagihan) </option>
        </optgroup>




<!-- PERLENGKAPAN -->
        <optgroup data-rel="PL">
          <option value="PL.001">ANALISA KEBUTUHAN (Analisa Data) </option>
          <option value="PL.002">ANALISA KEBUTUHAN (Klasifikasi Data)</option>
          <option value="PL.003">ANALISA KEBUTUHAN (Rencana Kebutuhan)</option>
          <option value="PL.004">ANALISA KEBUTUHAN (Perijinan)</option>
          <option value="PL.00">===============================================</option>
            <option value="PL.101">PENGADAAN (Tender dan Kontrak / Pra Kualifikasi) </option>
            <option value="PL.102">PENGADAAN (Rekanan / Penawaran) </option>
            <option value="PL.103">PENGADAAN (Harga dan Mutu) </option>
            <option value="PL.104">PENGADAAN (Pengadaan / Pembelian Kendaraan Dinas, dll) </option>
            <option value="PL.105">PENGADAAN (Pembinaan) </option>
            <option value="PL.106">PENGADAAN (Penggunaan) </option>
            <option value="PL.107">PENGADAAN (Berita Acara Prestasi Pekerjaan) </option>
            <option value="PL.108">PENGADAAN (Tanah / Bangunan) </option>
            <option value="PL.00">===============================================</option>
              <option value="PL.201">PEMBINAAN / PEMELIHARAAN (Distribusi) </option>
              <option value="PL.202">PEMBINAAN / PEMELIHARAAN (Pemeliharaan) </option>
              <option value="PL.203">PEMBINAAN / PEMELIHARAAN (Rehabilitasi) </option>
              <option value="PL.204">PEMBINAAN / PEMELIHARAAN (Pergudangan) </option>
              <option value="PL.00">===============================================</option>
                <option value="PL.301">INVENTARISASI (Inventarisasi BMN / Umum) </option>
                <option value="PL.302">INVENTARISASI (Barang-barang Bergerak) </option>
                <option value="PL.303">INVENTARISASI (Barang-barang Tidak Bergerak) </option>
                <option value="PL.00">===============================================</option>
                  <option value="PL.401">PENGHAPUSAN (Persiapan / Panitia Penghapusan) </option>
                  <option value="PL.402">PENGHAPUSAN (Usul Penghapusan) </option>
                  <option value="PL.403">PENGHAPUSAN (Penilaian) </option>
                  <option value="PL.404">PENGHAPUSAN (Izin Penghapusan) </option>
                  <option value="PL.405">PENGHAPUSAN (Penetapan Penghapusan) </option>
                  <option value="PL.406">PENGHAPUSAN (Pelelangan) </option>
                  <option value="PL.407">PENGHAPUSAN (Penjualan) </option>
                  <option value="PL.408">PENGHAPUSAN (Penghibahan) </option>
                  <option value="PL.409">PENGHAPUSAN (Tukar Menukar / Ruislag) </option>
             </optgroup>

<!-- HUKUM -->
        <optgroup data-rel="HK">
          <option value="HK.001">PRODUK PERUNDANG-UNDANGAN (Undang-Undang Pemerintah) </option>
          <option value="HK.002">PRODUK PERUNDANG-UNDANGAN (Ketetapan MPR)</option>
          <option value="HK.003">PRODUK PERUNDANG-UNDANGAN (Undang-Undang)</option>
          <option value="HK.004">PRODUK PERUNDANG-UNDANGAN (Peraturan Pemerintah)</option>
          <option value="HK.005">PRODUK PERUNDANG-UNDANGAN (Keputusan Presiden)</option>
          <option value="HK.006">PRODUK PERUNDANG-UNDANGAN (Peraturan Presiden)</option>
          <option value="HK.007">PRODUK PERUNDANG-UNDANGAN (Instruksi Presiden)</option>
          <option value="HK.00">===============================================</option>
            <option value="HK.101">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Keputusan Bersama Menteri) </option>
            <option value="HK.102">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Peraturan Menteri) </option>
            <option value="HK.103">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Keputusan Menteri)</option>
            <option value="HK.104">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Instruksi Menteri)</option>
            <option value="HK.00">===============================================</option>
              <option value="HK.201">PRODUK BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Undang-Undang) </option>
              <option value="HK.202">PRODUK BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Peraturan / Keputusan Kepala BMKG) </option>
              <option value="HK.203">PRODUK BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (Surat Edaran Kepala BMKG) </option>
              <option value="HK.00">===============================================</option>
                <option value="HK.301">BANTUAN HUKUM (Perdata) </option>
                <option value="HK.302">BANTUAN HUKUM (Pidana) </option>
                <option value="HK.303">BANTUAN HUKUM (TUN) </option>
                <option value="HK.00">===============================================</option>
                  <option value="HK.401">PERIZINAN (Izin Belajar / Tugas Belajar) </option>
                  <option value="HK.402">PERIZINAN (Rekomendasi) </option>
                  <option value="HK.403">PERIZINAN (Izin / Persetujuan / Registrasi Meteorologi, Klimatologi, dan Geofisika) </option>
                  <option value="HK.00">===============================================</option>
                    <option value="HK.401">ORGANISASI DAN TATA LAKSANA (Organisasi dan Tata Kerja) </option>
                    <option value="HK.402">ORGANISASI DAN TATA LAKSANA Tata Laksana (Evaluasi, Rencana, Penetapan)() </option>
                    <option value="HK.403">ORGANISASI DAN TATA LAKSANA (Standard Operating Procesures (SOP)) </option>
                 </optgroup>


<!-- KERJASAMA LUAR NEGERI -->
        <optgroup data-rel="KS">
          <option value="KS.001">BILATERAL (Asia) </option>
          <option value="KS.002">BILATERAL (Australia) </option>
          <option value="KS.003">BILATERAL (Afrika)</option>
          <option value="KS.004">BILATERAL (Amerika)</option>
          <option value="KS.005">BILATERAL (Eropa)</option>
          <option value="KS.00">===============================================</option>
            <option value="KS.101">MULTILATERAL (Asia) </option>
            <option value="KS.102">MULTILATERAL (Australia) </option>
            <option value="KS.103">MULTILATERAL (Afrika) </option>
            <option value="KS.104">MULTILATERAL (Amerika) </option>
            <option value="KS.104">MULTILATERAL (Eropa) </option>
            <option value="KS.104">MULTILATERAL (Lintas Benua) </option>
            <option value="KS.00">===============================================</option>
              <option value="KS.201">ORGANISASI INTERNASIONAL (ACOSOC (Accoustical Society of America)) </option>
              <option value="KS.202">ORGANISASI INTERNASIONAL (UNCTAD (United Nations Conference on Trade And Development)) </option>
              <option value="KS.203">ORGANISASI INTERNASIONAL (IMO (International Maritime Organization)) </option>
              <option value="KS.204">ORGANISASI INTERNASIONAL (UNDP (United Nations Development Programme)) </option>
              <option value="KS.205">ORGANISASI INTERNASIONAL (ICAO (International Civil Aviation Organization)) </option>
              <option value="KS.206">ORGANISASI INTERNASIONAL (WHO (World Health Organization)) </option>
              <option value="KS.207">ORGANISASI INTERNASIONAL (WMO (World Meteorological Organization)) </option>
              <option value="KS.208">ORGANISASI INTERNASIONAL (UNESCO (United Nations Educational, Scientific, and Cultural Organization)) </option>
              <option value="KS.209">ORGANISASI INTERNASIONAL (JICA (Japan International Cooperation Agency)) </option>
              <option value="KS.210">ORGANISASI INTERNASIONAL (FAO (Food and Agriculture Organization)) </option>
              <option value="KS.211">ORGANISASI INTERNASIONAL (IAEA (International Atomic Energy Agency)) </option>
              <option value="KS.212">ORGANISASI INTERNASIONAL (CTBTO (Comprehension Nuclear-Test-Ban Treaty Organization)) </option>
              <option value="KS.213">ORGANISASI INTERNASIONAL (ASEAN (Association of Southeast Asian Nations)) </option>
              <option value="KS.214">ORGANISASI INTERNASIONAL (COLOMBO PLAN) </option>
              <option value="KS.215">ORGANISASI INTERNASIONAL (IBRD (International Bank of Reconstruction and Development)) </option>
              <option value="KS.216">ORGANISASI INTERNASIONAL (UN-ESCAP (United Nations and Social Commision for Asia and the Pacific)) </option>
              <option value="KS.217">ORGANISASI INTERNASIONAL (OPEC (Organization of the Petroleum Exporting Countries)) </option>
              <option value="KS.218">ORGANISASI INTERNASIONAL (OKI (Organisasi Konferensi Islam) )</option>
              <option value="KS.219">ORGANISASI INTERNASIONAL (GIZ (Deutsche Gesellschaft für Internationale Zusammernarbeit)) </option>
              <option value="KS.220">ORGANISASI INTERNASIONAL (RTSP (Regional Tsunami Service Providers)) </option>
              <option value="KS.221">ORGANISASI INTERNASIONAL (AEIC (Alaska Earthquake Information Center)) </option>
              <option value="KS.00">===============================================</option>
                <option value="KS.301">KERJASAMA DALAM NEGERI (Kementrian/Lembaga) </option>
                <option value="KS.302">KERJASAMA DALAM NEGERI (Pemerintah Daerah) </option>
                <option value="KS.303">KERJASAMA DALAM NEGERI (BUMN/BUMD) </option>
                <option value="KS.304">KERJASAMA DALAM NEGERI (Perguruan Tinggi) </option>
                <option value="KS.305">KERJASAMA DALAM NEGERI (Organisasi Kemasyarakatan) </option>
                <option value="KS.306">KERJASAMA DALAM NEGERI (Swasta) </option>
                <option value="KS.307">KERJASAMA DALAM NEGERI (Media Massa) </option>
        </optgroup>
                

<!-- UMUM -->
        <optgroup data-rel="UM">
          <option value="UM.001">UMUM (Surat Menyurat)</option>
          <option value="UM.002">UMUM (Kearsipan)</option>
          <option value="UM.003">UMUM (Pengetikan dan Penggandaan)</option>
          <option value="UM.004">UMUM (Sistem Tata Naskah)</option>
          <option value="UM.005">UMUM Pengiriman/Alamat/Stempel()</option>
          <option value="UM.006">UMUM (Risalah dan Reproduksi repim)</option>
          <option value="UM.007">UMUM (Laporan bulanan umum)</option>
          <option value="UM.008">UMUM (Laporan Dewan Stabilitas Ekonomi)</option>
          <option value="UM.009">UMUM (Laporan EKUIN)</option>
          <option value="UM.010">UMUM (Laporan Sub Distribusi)</option>
          <option value="UM.011">UMUM (Laporan Raker)</option>
          <option value="UM.012">UMUM (Laporan Tahunan)</option>
          <option value="UM.00">==================================================================================</option>
            <option value="UM.101">KERUMAHTANGGAAN (Ketertiban dan Keamanan)</option>
            <option value="UM.102">KERUMAHTANGGAAN (Ijin Peminjaman (Alat-alat, Ruangan, Lapangan, dll))</option>
            <option value="UM.103">KERUMAHTANGGAAN (Perjalanan Dinas)</option>
            <option value="UM.104">KERUMAHTANGGAAN (Perumahan Dinas)</option>
            <option value="UM.105">KERUMAHTANGGAAN (Cleaning Services)</option>
            <option value="UM.106">KERUMAHTANGGAAN (Pembangunan Gedung/Perkantoran)</option>
            <option value="UM.107">KERUMAHTANGGAAN (Jatah Beras)</option>
            <option value="UM.108">KERUMAHTANGGAAN (Pakaian Dinas)</option>
            <option value="UM.00">================================================================================</option>
              <option value="UM.201">KEPROTOKOLAN (Narasumber/penyuluh)</option>
              <option value="UM.202">KEPROTOKOLAN (Kunjungan/Undangan)</option>
              <option value="UM.203">KEPROTOKOLAN (Pelantikan)</option>
              <option value="UM.204">KEPROTOKOLAN (Upacara Kenegaraan)</option>
              <option value="UM.205">KEPROTOKOLAN (Upacara Kedinasan)</option>
              <option value="UM.206">KEPROTOKOLAN (Rapat Kerja/Rapat Koordinasi/Dinas)</option>
              <option value="UM.207">KEPROTOKOLAN (Ucapan Terima Kasih/Duka Cita)</option>
              <option value="UM.208">KEPROTOKOLAN (Seminar, Lokakarya, dll)</option>
              <option value="UM.00">================================================================================</option>
                <option value="UM.301">BANTUAN DINAS (Bencana Alam/Musibah) </option>
                <option value="UM.302">BANTUAN DINAS (Angkutan) </option> 
                <option value="UM.303">BANTUAN DINAS (Sumbangan/Donatur) </option> 
                <option value="UM.00">================================================================================</option> 
                  <option value="UM.401">PERPUSTAKAAN DAN DOKUMENTASI (Bibiolotik/Bahan Pustaka)</option>
                  <option value="UM.402">PERPUSTAKAAN DAN DOKUMENTASI (Pelayanan Keanggotaan)</option> 
                  <option value="UM.403">PERPUSTAKAAN DAN DOKUMENTASI (Laporan Perpustakaan)</option> 
                  <option value="UM.00">================================================================================</option>
                    <option value="UM.501">HUBUNGAN MASYARAKAT (Bahan Informasi Sektor BMKG) </option>
                    <option value="UM.502">HUBUNGAN MASYARAKAT (Bahan Informasi Non BMKG) </option>
                    <option value="UM.503">HUBUNGAN MASYARAKAT (Surat Kabar/Guntingan Berita) </option> 
                    <option value="UM.504">HUBUNGAN MASYARAKAT (Kehumasan/Bakohumas) </option> 
                    <option value="UM.505">HUBUNGAN MASYARAKAT (Siaran Berita/Siaran Pers/Jumpa Pers) </option> 
                    <option value="UM.506">HUBUNGAN MASYARAKAT (Kewartawanan/Kunjungan ke Daerah/Peliputan) </option>
                    <option value="UM.507">HUBUNGAN MASYARAKAT (Radio dan Televisi) </option>
                    <option value="UM.508">HUBUNGAN MASYARAKAT (Penerbitan/Iklan Display) </option> 
                    <option value="UM.509">HUBUNGAN MASYARAKAT (Film, Slide, Foto) </option> 
                    <option value="UM.510">HUBUNGAN MASYARAKAT (Pameran dan Sayembara Penulisan) </option> 
                 </optgroup>


<!-- PENGAWASAN-->
        <optgroup data-rel="PS">
          <option value="PS.001">PENGAWASAN (Audit)</option>
          <option value="PS.002">PENGAWASAN (Review)</option>
          <option value="PS.003">PENGAWASAN (Evaluasi)</option>
          <option value="PS.004">PENGAWASAN (Pemantauan Tindak Lanjut)</option>
          <option value="PS.005">PENGAWASAN (Pengawasan Lainnya)</option>
      </optgroup>


<!-- DIKLAT-->
        <optgroup data-rel="DL">
          <option value="DL.001">BINA PROGRAM (Diklat BMKG)</option>
          <option value="DL.002">BINA PROGRAM (Diklat Umum)</option>
          <option value="UM.00">================================================================================</option>
            <option value="DL.101">DIKLAT DALAM NEGERI (Lemhanas)</option>
            <option value="DL.102">DIKLAT DALAM NEGERI (Diklat Pimpinan I)</option>
            <option value="DL.103">DIKLAT DALAM NEGERI (Diklat Pimpinan II)</option>
            <option value="DL.104">DIKLAT DALAM NEGERI (Diklat Pimpinan III)</option>
            <option value="DL.105">DIKLAT DALAM NEGERI (Diklat Pimpinan IV)</option>
            <option value="DL.106">DIKLAT DALAM NEGERI (Penataran/Training)</option>
            <option value="DL.107">DIKLAT DALAM NEGERI (Kursus)</option>
            <option value="DL.108">DIKLAT DALAM NEGERI (Orientasi/Prajabatan)</option>
            <option value="DL.109">DIKLAT DALAM NEGERI (Seminar, Lokakarya)</option>
            <option value="DL.110">DIKLAT DALAM NEGERI (Beasiswa)</option>
            <option value="DL.00">================================================================================</option>
              <option value="DL.201">DIKLAT LUAR NEGERI (Seminar, Lokakarya, Kongres)</option>
              <option value="DL.202">DIKLAT LUAR NEGERI (Beasiswa)</option>
              <option value="DL.203">DIKLAT LUAR NEGERI (Diklat dengan substansi M/K/G)</option>
              <option value="DL.204">DIKLAT LUAR NEGERI (Diklat dengan substansi kesekretariatan)</option>
              <option value="DL.00">================================================================================</option>
                <option value="DL.301">UMUM (Laporan dan Evaluasi)</option>
                <option value="DL.302">UMUM (Wisuda)</option>
      </optgroup>



<!-- GEOFISISKA -->
        <optgroup data-rel="GF">
          <option value="GF.001">KEBUTUHAN FASILITAS (Pembangunan Fasilitas) </option>
          <option value="GF.002">KEBUTUHAN FASILITAS (Rehabilitasi/Perawatan) </option>
          <option value="GF.003">KEBUTUHAN FASILITAS (Pengembangan Fasilitas) </option>
          <option value="GF.004">KEBUTUHAN FASILITAS (Seismic vault/Peer) </option>
          <option value="GF.005">KEBUTUHAN FASILITAS (Peralatan Gempa bumi dan Tsunami) </option>
          <option value="GF.006">KEBUTUHAN FASILITAS (Peralatan Seismologi Teknik) </option>
          <option value="GF.007">KEBUTUHAN FASILITAS (Peralatan Geofisika Potensial dan Tanda Waktu) </option>
          <option value="GF.008">KEBUTUHAN FASILITAS (Operasional Pendukung (UPS, Genset, dsb)) </option>
          <option value="GF.00">================================================================================</option>
            <option value="GF.101">PENGAMATAN (Survey) </option>
            <option value="GF.102">PENGAMATAN (Pengamatan Gempa bumi) </option>
            <option value="GF.103">PENGAMATAN (Pengamatan Tsunami) </option>
            <option value="GF.104">PENGAMATAN (Pengamatan Seismologi Teknik) </option>
            <option value="GF.105">PENGAMATAN (Pengamatan Geopotensial dan Tanda Waktu) </option>
            <option value="GF.106">PENGAMATAN (Pengamatan Unsur Geofisika lainnya (termasuk Prekursor) </option>
            <option value="GF.00">================================================================================</option>
              <option value="GF.201">PENGELOLAAN (Pengumpulan, Penyimpanan, dan Pengaksesan Data Gempa bumi) </option>
              <option value="GF.202">PENGELOLAAN (Pengolahan, dan Analisis Data Gempa bumi) </option>
              <option value="GF.203">PENGELOLAAN (Pengumpulan, Penyimpanan, dan Pengaksesan Data Tsunami) </option>
              <option value="GF.204">PENGELOLAAN (Pengumpulan, dan Analisis Data Tsunami) </option>
              <option value="GF.205">PENGELOLAAN (Pengumpulan, Penyimpanan, dan Pengaksesan Data Seismologi Teknik) </option>
              <option value="GF.206">PENGELOLAAN (Pengolahan, dan Analisis Data Seismologi Teknik) </option>
              <option value="GF.207">PENGELOLAAN (Pengumpulan, Timpaan, dan Pengaksesan Data Geofisika Potensial dan Tanda WaktuPengolahan dan Analisis) </option>
              <option value="GF.208">PENGELOLAAN (Pengolahan dan Analisis) </option>
              <option value="GF.209">PENGELOLAAN (Pengelolaan Unsur Geofisika lainnya (termasuk Prekursor)) </option>
              <option value="GF.210">PENGELOLAAN (Pengelolaan Terbatas Meteorologi/Klimatologi/Kualitas Udara) </option>
              <option value="GF.00">================================================================================</option>
                <option value="GF.301">PELAYANAN (Publik) </option>
                <option value="GF.302">PELAYANAN (Khusus) </option>
                <option value="GF.00">================================================================================</option>
                  <option value="GF.401">KOMUNIKASI (Gempa bumi dan Tsunami) </option>
                  <option value="GF.402">KOMUNIKASI (Seismologi Teknik) </option>
                  <option value="GF.403">KOMUNIKASI (Geofisika Potensial) </option>
                  <option value="GF.00">================================================================================</option>
                    <option value="GF.501">MONITORING DAN EVALUASI (Tes Komunikasi Desiminasi (Sirine, DVB, WRS, dsb)) </option>
                    <option value="GF.502">MONITORING DAN EVALUASI (Laporan Rutin (Harian, Dekade, Bulanan, Tahunan)) </option>
      </optgroup>

<!-- KLIMATOLOGI -->
        <optgroup data-rel="KT">
          <option value="KT.001">KLIMATOLOGI DAN KUALITAS UDARA (001. Pembangunan Fasilitas)</option>
          <option value="KT.002">KLIMATOLOGI DAN KUALITAS UDARA (002. Rehabilitasi/Perawatan)</option>
          <option value="KT.003">KLIMATOLOGI DAN KUALITAS UDARA (003. Pengembangan Fasilitas)</option>
          <option value="KT.004">KLIMATOLOGI DAN KUALITAS UDARA (004. Operasional)</option>
          <option value="KT.00">================================================================================</option>
            <option value="KT.101">PENGAMATAN (101. Survey) </option>
            <option value="KT.102">PENGAMATAN (102. Permukaan Darat) </option>
            <option value="KT.103">PENGAMATAN (103. Permukaan Laut) </option>
            <option value="KT.104">PENGAMATAN (104. Permukaan Udara) </option>
            <option value="KT.105">PENGAMATAN (105. Operasional) </option>
            <option value="KT.00">================================================================================</option>
              <option value="KT.201">ANALISA (201. Data permukaan) </option>
              <option value="KT.202">ANALISA (202. Udara Atas) </option>
              <option value="KT.203">ANALISA (203. Khusus) </option>
              <option value="KT.00">================================================================================</option>
                <option value="KT.301">PRAKIRAAN (301. Iklim Jangka Pendek) </option>
                <option value="KT.302">PRAKIRAAN (302. Iklim Jangka Sedang) </option>
                <option value="KT.303">PRAKIRAAN (303. Iklim Jangka Panjang) </option>
                <option value="KT.304">PRAKIRAAN (304. Musim (hujan dan kemarau)) </option>
                <option value="KT.305">PRAKIRAAN (305. Khusus (Pertanian, Industri, dll)) </option>
                <option value="KT.306">PRAKIRAAN (306. Verifikasi/Evaluasi/Buletin) </option>
                <option value="KT.00">================================================================================</option>
                  <option value="KT.401">PELAYANAN JASA DAN INFORMASI (401. Iklim/Data Klimatologi) </option>
                  <option value="KT.402">PELAYANAN JASA DAN INFORMASI (402. Konsultasi) </option>
                  <option value="KT.403">PELAYANAN JASA DAN INFORMASI (403. Khusus) </option>
      </optgroup>

<!-- METEOROLOGI -->
        <optgroup data-rel="ME">
          <option value="ME.001">KEBUTUHAN FASILITAS (001. Pembangunan Fasilitas)</option>
          <option value="ME.002">KEBUTUHAN FASILITAS (002. Rehabilitasi/Perawatan)</option>
          <option value="ME.003">KEBUTUHAN FASILITAS (003. Pengembangan Fasilitas)</option>
          <option value="ME.004">KEBUTUHAN FASILITAS (004. Operasional)</option>
          <option value="ME.00">===============================================</option>
            <option value="ME.101">PENGAMATAN (101. Survey) </option>
            <option value="ME.102">PENGAMATAN (102. Permukaan Darat) </option>
            <option value="ME.103">PENGAMATAN (103. Permukaan Laut) </option>
            <option value="ME.104">PENGAMATAN (104. Permukaan Udara) </option>
            <option value="ME.00">===============================================</option>
              <option value="ME.201">ANALISA (201. Data Permukaan) </option>
              <option value="ME.202">ANALISA (202. Udara Atas) </option>
              <option value="ME.203">ANALISA (203. Pragnosa) </option>
              <option value="ME.204">ANALISA (204. Khusus) </option>
              <option value="ME.00">===============================================</option>
                <option value="ME.301">PRAKIRAAN (301. Cuaca) </option>
                <option value="ME.302">PRAKIRAAN (302. Iklim Jangka Sedang ) </option>
                <option value="ME.303">PRAKIRAAN (303. Iklim Jangka Panjang) </option>
                <option value="ME.304">PRAKIRAAN (304. Khusus) </option>
                <option value="ME.305">PRAKIRAAN (305. Verifikasi/Evaluasi/Buletin) </option>
                <option value="ME.00">===============================================</option>
                  <option value="ME.401">PELAYANAN JASA DAN INFORMASI (401. Cuaca) </option>
                  <option value="ME.402">PELAYANAN JASA DAN INFORMASI (402. Konsultasi) </option>
                  <option value="ME.403">PELAYANAN JASA DAN INFORMASI (403. Khusus) </option>
                 </optgroup>

<!-- INSTRUMENTASI KALIBRASI REKAYASA DAN JARINGAN KOMUNIKASI -->
        <optgroup data-rel="IJ">
          <option value="IJ.001">KEBUTUHAN FASILITAS (001. Instrumentasi, Rekayasa dan Kalibrasi Peralatan Meteorologi)</option>
          <option value="IJ.002">KEBUTUHAN FASILITAS (002. Instrumentasi, Rekayasa dan Kalibrasi Peralatan Klimatologi dan Kualitas Udara)</option>
          <option value="IJ.003">KEBUTUHAN FASILITAS (003. Instrumentasi, Rekayasa dan Kalibrasi Peralatan Geofisika)</option>
          <option value="IJ.004">KEBUTUHAN FASILITAS (004. Sistem Operasi Jaringan Komunikasi dan Internet)</option>
          <option value="IJ.005">KEBUTUHAN FASILITAS (005. Database)</option>
          <option value="IJ.00">===============================================</option>
            <option value="IJ.101">PENGELOLAAN (101. Manajemen Jaringan)</option>
            <option value="IJ.102">PENGELOLAAN (102. Manajemen Database)</option>
            <option value="IJ.103">PENGELOLAAN (103. Pengembangan Database)</option>
            <option value="IJ.104">PENGELOLAAN (104. Pemeliharaan Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Meteorologi, Klimatologi, Kualitas Udara, dan Geofisika)</option>
            <option value="IJ.105">PENGELOLAAN (105. Pemeliharaan Jaringan Komunikasi dan Internet)</option>
            <option value="IJ.106">PENGELOLAAN (106. Pemeliharaan Database)</option>
            <option value="IJ.00">===============================================</option>
              <option value="IJ.201">PELAYANAN (201. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Meteorologi)</option>
              <option value="IJ.202">PELAYANAN (202. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Klimatologi, dan Kualitas Udara)</option>
              <option value="IJ.203">PELAYANAN (203. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Geofisika)</option>
              <option value="IJ.204">PELAYANAN (204. Sistem Operasi Jaringan Komunikasi dan Internet)</option>
              <option value="IJ.205">PELAYANAN (205. Database)</option>
              <option value="IJ.00">===============================================</option>
                <option value="IJ.301">MONITORING DAN EVALUASI (301. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Meteorologi)</option>
                <option value="IJ.302">MONITORING DAN EVALUASI (302. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Klimatologi, dan Kualitas Udara)</option>
                <option value="IJ.303">MONITORING DAN EVALUASI (303. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Geofisika)</option>
                <option value="IJ.304">MONITORING DAN EVALUASI (304. Sistem Operasi Jaringan Komunikasi dan Internet)</option>
                <option value="IJ.305">MONITORING DAN EVALUASI (305. Database)</option>
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
                      <input type="text" class="form-control" name="no_surat" value="<?php echo $data->no_surat ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_surat ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengirim</label>
                      <input type="text" class="form-control" name="pengirim" value="<?php echo $data->pengirim ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran</label>
                      <input type="text" class="form-control" name="lampiran" value="<?php echo $data->lampiran ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Sifat Surat</label>
                      <input type="text" class="form-control" name="sifat_surat" value="<?php echo $data->sifat_surat ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Penjabar Pendisposisi</label>
                      <input type="text" class="form-control" name="penjabat_disposisi" value="<?php echo $data->penjabat_disposisi ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" name="disposisi[]">Disposisi</label> <br>
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
                  <div class="form-group">
                    <label for="exampleInputEmail1">Surat Asli/Copy</label>
                      <select name="asli_copy" required="required" class="form-control">
                          
                          <?php if($data->asli_copy == 'surat copy'): ?>
                             <option value="surat copy">Surat Copy</option>
                             <option value="surat asli">Surat Asli</option>
                          <?php endif ?>
                          <?php if($data->asli_copy == 'surat asli'): ?>
                             <option value="surat asli">Surat Asli</option>
                             <option value="surat copy">Surat Copy</option>
                          <?php endif ?>

                          </select>
                             
                                                       
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Informasi Disposisi</label>
                    <textarea name="informasi_disposisi" class="form-control" cols="30" rows="10"> <?php echo $data->informasi_disposisi ?> </textarea>
                  </div>


                  <input type="hidden" name="id" value="<?php echo $data->surat_id ?>">
                  <a href="<?php echo base_url(); ?>admin/jenis_surat" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>