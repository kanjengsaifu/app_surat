
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Disposisi Gambar
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Disposisi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                 <a href="<?php echo site_url('admin/add') ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"> </i>  Tambah Disposisi Gambar </a>

                     </h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                

                  <table id="example1" class="table table-bordered table-hover dataTable" >
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Gambar</th>
               
                           <th>Aksi</th>
                    
                 
                      
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($gambar as $lihat):
                        ?>
                      <tr>
                      <td><?php echo $no++ ?></td>

                      <td> <div style="width: 100px;"><?php echo ucwords($lihat->surat_id) ?></td>                   
                      <td>  <img src="<?php echo base_url('upload/files/'.$lihat->gambar) ?>" width="64" /></td> </div>
                    
                     
                        <td  align="center">
                          <div class="btn-group" role="group" style="width: 200px;">
                          
                              
                      <a href="<?php echo base_url(); ?>admin/delete/<?php echo $lihat->id_gambar ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                     
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