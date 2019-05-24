<?php
   
   include 'NavbarAdmin.php'?>
 
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
            <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#myModalHorizontal"
                      >
                        <i class="zmdi zmdi-plus"></i>Tambah Wilayah
                      </button>
                      <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#myModalHorizontall"
                      >
                        <i class="zmdi zmdi-plus"></i>Tambah Wilayah Bagian
                      </button>

                      <div class="row">
 <div class="col-lg-6">
          
 <h2 class="title-1 m-b-25">All Parent Region </h2>

                    


                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Wilayah</th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
    
    
     $sql = "Select * from Parent";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['ok']."</th> ";
    echo "</tr>";
     
  }

     
?>

 </tbody> 
                    </table>
                  </div>
                </div>
                <div class="col-lg-6">
          
 <h2 class="title-1 m-b-25">All Leaf Region</h2>

                    


                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Region</th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
    
    
     $sql = "Select * from anak";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['Nama']."</th> ";
    echo "</tr>";
     
  }

     
?>

 </tbody> 
                    </table>
                  </div>
                </div>
              
              </div>

         <div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25">Wilayah Bagian</h2>

                    <label  class="col-sm-10 control-label">Pilih Wilayah</label>
                    <form method="post" >
                  <select name="INIID">
                      <?php 

                     $sql = "select IdRegion,ok from parent";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['ok'] . "</option>";
                            }
                              ?>
                        </select>
                        <input type="submit" name="submit" value="cari" />

                        </form>


                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Region Bagian</th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
      if (isset($_POST['submit'])){
  $isreg = $_POST['INIID'];
    
     $sql = "CALL `getAnakRegion`($isreg)";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['Nama']."</th> ";
    echo "</tr>";
     
  }
}
     
?>

 </tbody> 
                    </table>
                  </div>
                </div>
              
              </div>
              
<div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25"> Customer di Tiap Region</h2>

                    <label  class="col-sm-10 control-label">Pilih Wilayah</label>
                    <form method="post" >
                  <select name="INI">
                      <?php 

                     $sql = "select * from region";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['Nama'] . "</option>";
                            }
                              ?>
                        </select>
                        <input type="submit" name="submitt" value="cari" />

                        </form>
<?php    if (isset($_POST['submitt'])){
  $isreg = $_POST['INI'];
  $sql = "select Nama from region Where IdRegion=$isreg ";
  $res= $db->executeSelectQuery($sql);
  $hasil = implode($res[0]);
  echo "<h1>Wilayah $hasil </h1>";
  
    }    ?>

                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Customer </th>
                          <th>Alamat </th>
                          <th>Tanggal Lahir </th>
                          <th>Nomor Telepon </th>
                          <th>Email </th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
      if (isset($_POST['submitt'])){
  $isreg = $_POST['INI'];
    
     $sql = "CALL `getCustomerReg`($isreg) ";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['NamaCustomer']."</th> ";
     echo " <th>".$row['Alamat']."</th> ";
     echo " <th>".$row['TanggalLahir']."</th> ";
     echo " <th>".$row['NomorTelepon']."</th> ";
     echo " <th>".$row['Email']."</th> ";



    echo "</tr>";
     
  }
}
     
?>

 </tbody> 
                    </table>
                  </div>
                </div>
              
              </div>

              <div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25">Produk Tiap Region</h2>

                    <label  class="col-sm-10 control-label">Pilih Wilayah</label>
                    <form method="post" >
                  <select name="INIIDO">
                      <?php 

                     $sql = "select IdRegion,ok from parent";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['ok'] . "</option>";
                            }
                              ?>
                        </select>
                        <input type="submit" name="submity" value="cari" />

                        </form>


                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Produk</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
      if (isset($_POST['submity'])){
  $isreg = $_POST['INIIDO'];
    
     $sql = "CALL `getCountCusProduk`($isreg)";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['NamaProduk']."</th> ";
     echo " <th>".$row['Jumlah']."</th> ";
    echo "</tr>";
     
  }
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
                <h1>Tambah Wilayah</h1>
                <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
    
                 
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="Nama" placeholder="Nama Wilayah"/>
                    </div>
                  </div>
              
                       
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" value="post"  name="nambahwilayah" class="btn btn-primary">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="myModalHorizontall" tabindex="-1" role="dialog" 
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
                <h1>Tambah Wilayah Bagian</h1>
                <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
    
                <div class="form-group" >
                    <label  class="col-sm-10 control-label">Wilayah 1</label>
                  <select name="REG">
                      <?php 
                     $sql = "select * from region";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['Nama'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
                        <div class="form-group" >
                    <label  class="col-sm-10 control-label">Bagian Dari</label>
                  <select name="REGG">
                      <?php 
                     $sql = "select * from region";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['Nama'] . "</option>";
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
                <button type="submit" value="post"  name="nambahsub" class="btn btn-primary">
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