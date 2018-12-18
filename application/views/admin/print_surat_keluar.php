<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
  window.print();
  });
</script>


  <?php  foreach ($data as $lihat): ?>

<div id="lihatlaporan2" class="modal fade" role="dialog">
     <div class="modal-dialog" style="width: 80%">
                 <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div> 
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
                        
<form action="" method="post">
    <table table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
        <tr >
           <th style="background-color: yellow;"> No Agenda  </th>
           <th style="background-color: yellow;"> Tanggal Surat </th>
           <th style="background-color: yellow;"> Kode Arsip </th>
           <th style="background-color: yellow;"> No Surat </th>
           <th style="background-color: yellow;"> Tujuan </th>
           <th style="background-color: yellow;">Perihal  </th>
        </tr>

  <?php 

    $data = mysqli_query($koneksi, "SELECT * from tb_surat_keluar");
    $no=1;
    foreach ($data as $lihat){
        echo "<tr>
           <td> ".$lihat['no_agenda']."</td>
           <td> ".$lihat['tgl_surat']."  </td>
           <td> ".$lihat['kode_arsip']."  </td>
           <td>".$lihat['no_surat']."</td> 
           <td>".$lihat['tujuan']." </td> 
           <td> ".$lihat['perihal']."  </td>
         </tr> " ;
        $no++;
    }
    ?>
    </table>
</form>
       </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>


<?php endforeach; ?>