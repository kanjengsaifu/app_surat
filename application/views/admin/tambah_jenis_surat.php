<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Jenis Surat</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Jenis Surat</a></li>
              <li class="active">Tambah</li>
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
                    <label for="exampleInputEmail1">Kode Arsip</label>
                      <input type="text" class="form-control" name="kode_arsip" placeholder="Kode Arsip"/>
                  </div>
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
                    <label for="exampleInputEmail1">Disposisi</label>
                      <select name="disposisi" required="required" class="form-control col-md-8">
                                <option value="tu">TU</option>
                                <option value="kapokdatin">Kapok Datin</option>
                                <option value="kapokobs">Kapok Obs</option>
                                <option value="kapokforcaster">Kapok Forcaster</option>
                                <option value="kapokteknisi">Kapok Teknisi</option>
                                <option value="ppk">PPK</option>
                                <option value="bendaharaterima">Bendahara Penerimaan</option>
                                <option value="bendaharakeluar">Bendahara Pengeluaran</option>
                                <option value="ppabp">PPABP</option>
                                <option value="saiba">SAIBA</option>
                                <option value="suratcopy">Surat Copy</option>
                          </select>
                             
                  </div>
                  <div class="form-group">
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
                  <a href="<?php echo base_url(); ?>admin/jenis_surat" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>