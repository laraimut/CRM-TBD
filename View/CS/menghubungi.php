<?php
   
   include 'NavbarCS.php'?>
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
            <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#myModalHorizontal"
                      >
                        <i class="zmdi zmdi-plus"></i>Add Event Menghubungi
                      </button>
         <div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25">Tabel Menghubungi</h2>
                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Customer</th>
                          <th>No Telp</th>        
                          <th>Email</th>
                          <th>Waktu</th>
                          <th>Keterangan</th>
                         
                        </tr>
                      </thead>
                      <tbody>
          <?php  
     
     $id= $_SESSION['auth'][0]['NIKCustomerService'];
    
     $sql = "select * from menghubungisiapa where NIKCustomerService=$id";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['NamaCustomer']."</th> ";
    echo " <th> ".$row['NomorTelepon']."</th> ";
    echo "<th>".$row['Email']."</th>";
    echo " <th> ".$row['Waktu']."</th>";
    echo " <th> ".$row['Keterangan']."</th>";
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
                <h1>Tambah Keterangan</h1>
                <form class="form-horizontal" role="form" action="../../controller/cscontroller.php" method="post">
    
                  <div class="form-group">
                    <label  class="col-sm-4 control-label"
                              for="inputEmail3">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="ket" placeholder="Keterangan"/>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Customer</label>
                  <select name="FAKU">
                      <?php 
                      $id= $_SESSION['auth'][0]['NIKCustomerService'];
                     $sql = "select * from tanggungjawab where NIKCustomerService = $id";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['NIKCustomer']."'>" . $row['NamaCustomer'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" value="post"  name="nambahmenghubungi" class="btn btn-primary">
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