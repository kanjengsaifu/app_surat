<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
$(document).ready(function(){
  window.print();
  });
</script>

  
  <?php  foreach ($data as $lihat): ?>
 

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

                              th, tr, td{
                                border: 3px solid;
                                text-align: left;
                                padding: 5px;
                              }

                              
                              </style>


                         <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                          <tr >
                            <th> Surat Dari </th>
                            <td><?php echo $lihat->pengirim; ?> </td> 
                            <th> Diterima Tanggal </th>
                            <td> <?php echo $lihat->tgl_terima; ?>   </td>
                          </tr>

                           <tr>
                            <th>No Surat </th>
                            <td><?php echo $lihat->no_surat; ?> </td> 
                            <th> No Agenda  </th>
                            <td> <?php echo $lihat->no_agenda; ?>   </td>
                          </tr>

                           <tr>
                            <th>Tanggal Surat </th>
                            <td><?php echo $lihat->tgl_surat; ?> </td> 
                            <th> Diteruskan Kepada   </th>
                            <td> <?php echo $lihat->penjabat_disposisi ?>   </td>
                          </tr>

                           <tr>
                            <th>Lampiran </th>
                            <td><?php echo $lihat->lampiran; ?> </td> 
                            <th>Sifat Surat </th>
                            <td><?php echo $lihat->sifat_surat; ?> </td> 
                          </tr>

                          <tr>
                              <th >Perihal : </th> 
                              <td colspan="3" ><?php echo $lihat->perihal; ?></td> 
                          </tr>  

                          <tr>
                              <th colspan="4">Diserahkan Kepada : </th> 
                          </tr>
                          <tr>
                              <td height="50" colspan="4"  align=left valign=top><?php echo $lihat->disposisi; ?></td> 
                          </tr>  

                         
                           <tr>
                              <th colspan="4">Disposisi: </th> 
                          </tr>
                          <tr>
                              <td height="300" colspan="4" align=left valign=top><?php echo $lihat->informasi_disposisi; ?></td> 

                          </tr>  
                          

                          </table> <br>

                      <!--     Diserahkan Kepada :<br><span class="margin-left: 10 px; width: 100%;"> </span>
                          <textarea style="background-color: white" readonly class="form-control" rows = "5"><?php echo $lihat->disposisi; ?></textarea> <br>

                           Perihal :<br><span class="margin-left: 10 px; width: 100%;"> </span>
                          <textarea style="background-color: white" readonly class="form-control" rows = "5"><?php echo $lihat->perihal; ?></textarea> <br>
                           
                           Disposisi :<br><span class="margin-left: 10 px; width: 100%; heigth: 100%"> </span>
                          <textarea style="background-color: white" readonly class="form-control" rows = "5"><?php echo $lihat->informasi_disposisi; ?> </textarea> 

                                  -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


<?php endforeach; ?>