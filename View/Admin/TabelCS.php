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
  </Style>

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <h3 class="title-5 m-b-35">Customer Service Table</h3>
                  <div class="table-data__tool">
                    <div class="table-data__tool-left">
                      <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="property">
                          <option selected="selected">All Properties</option>
                          <option value="">Option 1</option>
                          <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                      </div>
                      <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                          <option selected="selected">Today</option>
                          <option value="">3 Days</option>
                          <option value="">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                      </div>
                      <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filters
                      </button>
                    </div>
                    <div class="table-data__tool-right">
                      <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#myModalHorizontal"
                      >
                        <i class="zmdi zmdi-plus"></i>add item
                      </button>
                      <div
                        class="rs-select2--dark rs-select2--sm rs-select2--dark2"
                      >
                        <select class="js-select2" name="type">
                          <option selected="selected">Export</option>
                          <option value="">Option 1</option>
                          <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                      </div>
                    </div>
                  </div>


                  <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                      <thead>
                        <tr>
                        
                
                          <th>NIK CS</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No Telp</th>
                          <th>Email</th>
                          <th>Region</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id= 0;
    
    $sql = "select * from datacs ";
    $res= $db->executeSelectQuery($sql);
    foreach ($res as $key => $row) {
      echo "  
      
     
                    <tr class='tr-shadow'>
                         ";
                        echo "<td>".$row['NIKCustomerService']."</td>";
                        echo "  <td class='desc'>".$row['NamaCS']."</td>";
                        echo"  <td>
                            <span class='block-email'>".$row['Alamat']."</span>";
                            echo "      <td>".$row['NomorTelepon']."</td> ";
                            echo "      <td>".$row['Email']."</td> ";
                      echo "    </td>
                          <td>" .$row['Nama']."</td> ";
                  

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
                           
                              <button
                                class='item'
                                data-toggle='tooltip'
                                data-placement='top'
                                title='Delete'
                              >
                                <i class='zmdi zmdi-delete'></i>
                              </button>


                              

                              <form method=POST action=../../Controller/adminController.php>
                              <input type=hidden name=idcs value=".$row['NIKCustomerService'].">
                            <input class=w3-button w3-light-blue w3-margin-bottom type=submit  value=undo name=undoo></form>

                            
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
                <h1>Tambah CS Baru</h1>
                <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
    
                  <div class="form-group">
                    <label  class="col-sm-4 control-label"
                              for="inputEmail3">No Nik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="NIK" placeholder="NIK"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-10 control-label"
                          for="inputPassword3" >Nama CS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="Nama" placeholder="Nama CS"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="Notelp" placeholder="No Hp"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="emaill" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="pass" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" 
                        name="tanggal" placeholder="YYYYMMDD" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Alamat"
                        name="alamat" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Region</label>
                  <select name="FAK">
                      <?php 
                     $sql = "select * from region ";
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
                <button type="submit" value="post"  name="nambahcs" class="btn btn-primary">
                    Simpan
                </button>
                </form>
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
                <h1>Edit Data CS</h1>
               
                <div class="form-group ">
                <label  class="col-sm-12 control-label">Pilih Field</label>
              
                  <Button class="btn btn-info col-sm-4 ok" onclick="myFunction()">Nama</Button>
                  <Button  class="btn btn-info col-sm-4 ok" onclick="no()">No Telp</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="email()">Email</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="alamat()">Alamat</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="region()">Region</Button>
                
                          </div>

                          <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
                <div class="form-group" >
                    <label  class="col-sm-10 control-label">Nama Customer</label>
                  <select name="INIID">
                      <?php 
                     $sql = "select NIKCustomerService,Nama from customerservice";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['NIKCustomerService']."'>" . $row['Nama'] . "</option>";
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
                  
          
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" value="post"  name="editcs" class="btn btn-primary">
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
</Script>



  </body>
</html>
<!-- end document-->
