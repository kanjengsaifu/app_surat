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
                  </h3>
                 <!--  <div class="box-tools">
                  	
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    
                  </div> -->
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
                     </tr>
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
                            <button class="btn btn-sm btn-primary btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan<?php echo $lihat->surat_id ?>"><i class="fa fa-eye"></i> Lihat</button>
                            <a href="<?php echo base_url(); ?>admin/hapus_jenis/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-success btn-flat"><i class="fa fa-print"></i> print disposisi</a>
                          

                          <!-- modal lihat laporan -->
                    <div id="printThis<?php echo $lihat->surat_id; ?>">
              <div id="lihatlaporan<?php echo $lihat->surat_id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 80%">
                 <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div> 

 <!-- lihat laporan --> 
               
                  <div class="modal-body" > 
                    <div class="row">
                      <div class="col-lg-12" style="padding-left: 10%; padding-right: 10%">
                        <div class="row">
                          <div class="col-sm-2" style="text-align: center;">
                            <img src="http://4.bp.blogspot.com/-LqUyMLMG05w/Ty0S-w100jI/AAAAAAAABC0/2AmjPy4Br1s/s1600/logo_BMKG.png" style="width: 60%; height: auto;">
                          </div>
                          <div class="col-sm-10" style="text-align: center;">
                            BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                            <strong style="font-size: 150%">STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                            Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                            Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                            <br><br>
                          </div>
                        </div>
                        <div class="row" style="background-color: black; height: 4px;"></div> <br> <br>

                         <div>
                          <table style="border: 3px solid; font-family: arial, sans-serif; border-collapse: collapse;" align="right">
                            <tr>
                            <th >KODE ARSIP : </th>
                            <th style="border: 3px solid"><?php echo $lihat->kode_arsip; ?> </th> 
                            <th> <?php echo $lihat->no_agenda; ?>   </th>
                          </tr>
                          </table>
                        </div>
                       
                        <div class="row" style="text-align: center;  "> <br>
                          <br><h3><strong>LEMBAR DISPOSISI </strong> </h3>
                          <br>
                        </div>

                        <div class="row">
                          <br>
                          <style>

                              td{
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 5px;
                              }

                              
                              </style>


                         <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                          <tr >
                            <td> Surat Dari </td>
                            <td><?php echo $lihat->pengirim; ?> </td> 
                            <td> Diterima Tanggal </td>
                            <td> <?php echo $lihat->tgl_terima; ?>   </td>
                          </tr>

                           <tr>
                            <td>No Surat </td>
                            <td><?php echo $lihat->no_surat; ?> </td> 
                            <td> No Agenda  </td>
                            <td> <?php echo $lihat->no_agenda; ?>   </td>
                          </tr>

                           <tr>
                            <td>Tanggal Surat </td>
                            <td><?php echo $lihat->tgl_surat; ?> </td> 
                            <td> Diteruskan Kepada   </td>
                            <td> <?php echo $lihat->penjabat_disposisi ?>   </td>
                          </tr>

                           <tr>
                            <td>Lampiran </td>
                            <td><?php echo $lihat->lampiran; ?> </td> 
                            <td>Sifat Surat </td>
                            <td><?php echo $lihat->sifat_surat; ?> </td> 
                          </tr>

                          </table> <br>

                          Diserahkan Kepada :<br><span class="margin-left: 10 px;"> </span>
                          <textarea style="background-color: white" readonly class="form-control" rows = "5"><?php echo $lihat->disposisi; ?></textarea> <br>

                           Perihal :<br><span class="margin-left: 10 px;"> </span>
                          <textarea style="background-color: white" readonly class="form-control" rows = "5"><?php echo $lihat->perihal; ?></textarea> <br>
                           
                           Disposisi :<br><span class="margin-left: 10 px;"> </span>
                          <textarea style="background-color: white" readonly class="form-control" rows = "5"><?php echo $lihat->informasi_disposisi; ?> </textarea> 

                                 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

                        </td>                  		
                    	</tr>
                    	 <?php endforeach; ?>
                    </tbody>
                  </table>
                  </div>
                </div><!-- /.box-body -->
              </div>
             </div>
          </div>
         </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


