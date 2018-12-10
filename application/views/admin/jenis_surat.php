<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Masuk
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Masuk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_jenis" class="btn btn-sm btn-primary btn-flat" data-target = "#example1"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo base_url(); ?>admin/tambah_jenis" class="btn btn-sm btn-primary btn-flat"  data-target = "#example1"><i class="fa fa-edit"></i> Disposisi</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Agenda</th>
                        <th>Tanggal Diterima</th>
                        <th>Kode Arsip</th>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Lampiran</th>
                        <th>Sifat Surat</th>
                        <th>Penjabat Pendisposisi</th>
                        <th>Disposisi</th>
                        <th>Surat Asli/copy</th>
                        <th>Informasi Disposisi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                    		<td><?php echo $lihat->no_agenda?></td>
                        <td><?php echo ($lihat->tgl_terima) ?></td> 
                        <td><?php echo ucwords($lihat->kode_arsip) ?></td> 
                        <td><?php echo ucwords($lihat->no_surat) ?></td>
                        <td><?php echo ($lihat->tgl_surat) ?></td> 
                        <td><?php echo ucfirst($lihat->pengirim) ?></td> 
                        <td><?php echo ucfirst($lihat->perihal) ?></td>  
                        <td><?php echo ucfirst($lihat->lampiran) ?></td> 
                        <td><?php echo ucfirst($lihat->sifat_surat) ?></td> 
                        <td><?php echo ucfirst($lihat->penjabat_disposisi) ?></td> 
                        <td><?php echo ucfirst($lihat->disposisi) ?></td> 
                        <td><?php echo ucwords($lihat->asli_copy) ?></td>  
                        <td><?php echo ucwords($lihat->informasi_disposisi) ?></td>  
                        <td align="center">
                          <div class="btn-group" role="group" style="width: 350px;">
                            <a href="<?php echo base_url(); ?>admin/edit_jenis/<?php echo $lihat->surat_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_jenis/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>

                              <a href="<?php echo base_url(); ?>admin/hapus_jenis/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn btn-flat"><i class="fa fa-print"></i> print disposisi</a>

                            <a href="<?php echo base_url(); ?>admin/hapus_jenis/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-success btn-flat"><i class="fa fa-print"></i> print disposisi</a>
                          </div>
                        </td>                  		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
