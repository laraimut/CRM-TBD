<?php
    
   include 'NavbarAdmin.php'?>

<Style>
#nama {
display : none;

}
#no{
  display : none;

}
#alamat{
  display : none;
}
#produk{
  display : none;
}
#region{
  display : none;
}
#email{
  display : none;
}
.ok{
  margin-bottom:10px;
}
#cs{
    display :none;
}
  </Style>

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p50">
            <div class="container-fluid">
              <div class="row">
                <div class="col">
                
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <h3 class="title-5 m-b-35">Customer Table</h3>
              


                  <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                      <thead>
                        <tr>
                        
                  <th>Tanggal Terdaftar</th>
                          <th>Nama Customer</th>
                          <th>Alamat</th>
                          <th>Region</th>
                          <th>Nama CS </th>
                          <th>No Telp </th>
                          <th>Email</th>
                          <th>Nama Asuransi</th>
                          <th>Nilai Asuransi</th>
                          <th>Premi</th>
                        
                        
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
    
    $sql = "select * from tanggungjawab where deleted=0 ";
    $res= $db->executeSelectQuery($sql);
    foreach ($res as $key => $row) {
      echo "  
      
     
                    <tr class='tr-shadow'>
                        ";
                        echo "<td>".$row['TanggalTerdaftar']."</td>";
                        echo "  <td class='desc'>".$row['NamaCustomer']."</td>";
                        echo "      <td>".$row['Alamat']."</td> ";
                        echo "      <td>".$row['NamaRegion']."</td> ";
                        echo "  <td class='desc'>".$row['NamaCS']."</td>";
                        echo"  <td>
                            <span class='block-email'>".$row['NomorTelepon']."</span>";
                            echo "      <td>".$row['Email']."</td> ";
                            echo "      <td>".$row['NamaProduk']."</td> ";
                      echo "    </td>
                          <td> Rp" .$row['NilaiProduk']."</td> ";
                    
                    echo "      <td>
                            <span class='status--process'> Rp".$row['Premi']." /Bulan </span>
                          </td> ";

                       echo "   <td></td> ";
                        
                  echo "        <td>
                            <div class='table-data-feature'>
                            
                          
                              </button>
                             
                            
                              <button
                                class='item'
                                data-toggle='modal' data-target='#modaledit'
                                title='Edit'
                                href='my_modal'
                             
                              >
                                <i class='zmdi zmdi-edit'></i>
                              </button>
                           
                            <form method=post action=../../Controller/AdminController.php>
                               <input type=hidden name=idCuss value=".$row['NIKCustomer'].">
                             <input  type=submit  value=Delete name=hapuscus></form>

                              <form method=POST action=../../Controller/AdminController.php>
                              <input type=hidden name=idCus value=".$row['NIKCustomer'].">
                            <input class=w3-button w3-light-blue w3-margin-bottom type=submit  value=undo name=undo></form>

                            
                            </div>
                          </td>
                        </tr>
                        <tr class='spacer'></tr>
                      
   "; } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- END DATA TABLE -->
                </div>
              </div>
              <div class="row m-t-30">
                <div class="col-md-12">
                  <!-- DATA TABLE-->
                 
                  <!-- END DATA TABLE-->
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>



  <!-- Modal -->
  <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" 
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
            <div class="modal-body" >
                <h1>Edit Data Customer</h1>
               
                <div class="form-group ">
                <label  class="col-sm-12 control-label">Pilih Field</label>
              
                  <Button class="btn btn-info col-sm-4 ok" onclick="myFunction()">Nama</Button>
                  <Button  class="btn btn-info col-sm-4 ok" onclick="no()">No Telp</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="email()">Email</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="alamat()">Alamat</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="region()">Region</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="produk()">Produk</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="cs()">Ganti CS</Button>
                          </div>

                          <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
                <div class="form-group" >
                    <label  class="col-sm-10 control-label">Nama Customer</label>
                  <select name="INIIDI">
                      <?php 
                     $sql = "select NIKCustomer,NamaCustomer from Customer";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['NIKCustomer']."'>" . $row['NamaCustomer'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
                  <div class="form-group nama" id="nama" >
                    <label class="col-sm-10 control-label"
                          for="inputPassword3" >Nama Customer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="Namaa" placeholder="Nama Customer"/>
                    </div>
                  </div>
                  <div class="form-group no" id="no">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="Notelpp" placeholder="No Hp"/>
                    </div>
                  </div>
                  <div class="form-group email" id="email">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="emailll" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group region" id="cs">
                    <label  class="col-sm-2 control-label">Customer Services</label>
                  <select name="MANTAPP">
                      <?php 
                     $sql = "select * from Customerservice ";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['NIKCustomerService']."'>" . $row['Nama'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
                  <div class="form-group alamat" id="alamat">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Alamat"
                        name="alamatt" />
                    </div>
                  </div>
                  <div class="form-group region" id="region">
                    <label  class="col-sm-2 control-label">Region</label>
                  <select name="FAKK">
                      <?php 
                     $sql = "select * from region ";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['Nama'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
                        <div class="form-group produk" id="produk">
                    <label  class="col-sm-2 control-label">Produk</label>
                  <select name="FAKUU">
                      <?php 
                     $sql = "select * from produk";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdProduk']."'>" . $row['NamaProduk'] . "</option>";
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
                <button type="submit" value="post"  name="editcustomer" class="btn btn-primary">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </div>
</div>


<Script>

function myFunction() {
  var x = document.getElementById("nama");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function no() {
  var x = document.getElementById("no");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function email() {
  var x = document.getElementById("email");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function alamat() {
  var x = document.getElementById("alamat");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function region() {
  var x = document.getElementById("region");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}

function produk() {
  var x = document.getElementById("produk");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}
function cs() {
  var x = document.getElementById("cs");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}
</Script>



  </body>
</html>
<!-- end document-->
