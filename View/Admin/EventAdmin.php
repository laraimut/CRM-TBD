<?php
   
   include 'NavbarAdmin.php'?>
 
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
            <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#myModalHorizontal"
                      >
                        <i class="zmdi zmdi-plus"></i>add Event
                      </button>
         <div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25">Event</h2>
                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Penanggung Jawab</th>
                          <th>Nama Acara</th>
                          <th>Nama Customer</th>        
                          <th>Waktu</th>
                          <th>Jenis</th>
                          <th>More</th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
     
  
    
     $sql = "select * from tabelevent where Deleted=0";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['Nama']."</th> ";
    echo " <th> ".$row['NamaAcara']."</th> ";
    echo "<th>".$row['NamaCustomer']."</th>";
    echo " <th> ".$row['Waktu']."</th>";
    echo " <th> ".$row['Jenis']."</th>";
    echo"  <td>
    <div class='table-data-feature'>";
    
  
   
     
   
   
 echo "   <form method=post action=../../Controller/AdminController.php>";
 echo"  <input type=hidden name=idEvent value=".$row['IdAcara'].">";
  echo " <input  type=submit  value=Delete name=hapusevent></form>";

      

    echo"
    </div>
  </td>";
    echo "</tr>";
     
  }
     
?>

 </tbody> 
                    </table>
                  </div>
                </div>
              
              </div>
              
            </div>
          </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <h1>Tambah Event</h1>
                <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
    
                  <div class="form-group">
                    <label  class="col-sm-4 control-label"
                              for="inputEmail3">Nama Acara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="Nama" placeholder="Nama Produk"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label">Customer</label>
                  <select name="FAKU">
                      <?php 
                     $sql = "select * from customer";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['NIKCustomer']."'>" . $row['NamaCustomer'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="waktu" placeholder="YYMMDD"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Jenis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="jenis" placeholder="Jenis Event"/>
                    </div>
                  </div>
                  
                       
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" value="post"  name="nambahevent" class="btn btn-primary">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </div>
</div>




  </body>

</html>
<!-- end document-->