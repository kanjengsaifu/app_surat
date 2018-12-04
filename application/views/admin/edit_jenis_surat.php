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
                      <input type="text" class="form-control" name="kode_arsip" value="<?php echo $data->kode_arsip ?>"/>
                  </div>
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
                    <label for="exampleInputEmail1">Disposisi</label>
                      <select name="disposisi" required="required" class="form-control col-md-8">
                          <?php if($data->asli_copy == 'tu'): ?>
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