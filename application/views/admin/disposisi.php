
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Keluar
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Keluar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                 <a href="<?php echo site_url('admin/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                    <button class="btn btn-sm btn-light btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan2"><i class="fa fa-eye"></i> Lihat Data</button>
                    <button class="btn btn-sm btn-success btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan2"><i class="fa fa-print"></i>Print Data</button>
                     
            
            <!-- bagian print -->
                     <!--  <a href="./admin/print_surat_keluar.php?surat_id=<? ?>" target="_blank"><button class="btn btn-sm btn-warning btn-flat"><i class="fa fa-print"></i> Cetak Data Surat Keluar </button></a> -->
                     


                     </h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                

                  <table id="example1" class="table table-bordered table-hover dataTable" >
                    <thead>
                      <tr>
                        <th>no</th>
                
                        <th>gambar</th>
               
                           <th>aksi</th>
                    
                 
                      
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($gambar as $lihat):
                        ?>
                      <tr>
                      <td><?php echo $no++ ?></td>
                  
                      <td>  <img src="<?php echo base_url('upload/files/'.$lihat->gambar) ?>" width="64" /></td> </div>
                    
                     
                        <td  align="center">
                          <div class="btn-group" role="group" style="width: 200px;">
                          
                          <a onclick="deleteConfirm('<?php echo site_url('admin/delete/'.$lihat->id_gambar) ?>')"
                              href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>                     
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


</div>