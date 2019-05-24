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
            <button
                        class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#myModalHorizontal"
                      >
                        <i class="zmdi zmdi-plus"></i>add Produk
                      </button>
         <div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25">Tabel Produk</h2>
                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Nama Produk</th>
                          <th>Nilai Produk</th>        
                          <th>Deskripsi</th>
                          <th>Premi</th>
                          <th>Rubah </th>
                        </tr>
                      </thead>
                      <tbody>
          <?php  
     
  
    
     $sql = "select * from produk";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['NamaProduk']."</th> ";
    echo " <th> Rp".$row['NilaiProduk']."</th> ";
    echo "<th>".$row['Deskripsi']."</th>";
    echo " <th> Rp".$row['Premi']."</th>";
    echo"  <td>
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
                <h1>Tambah Produk Baru</h1>
                <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
    
                  <div class="form-group">
                    <label  class="col-sm-4 control-label"
                              for="inputEmail3">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="Nama" placeholder="Nama Produk"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-10 control-label"
                          for="inputPassword3" >Nilai Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="Nilai" placeholder="Nilai Produk"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="des" placeholder="Deskripsi"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Premi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="premi" placeholder="Premi / Bulan"/>
                    </div>
                  </div>
                  
                       
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" value="post"  name="nambahproduk" class="btn btn-primary">
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
                  <Button  class="btn btn-info col-sm-4 ok" onclick="no()">Nilai Produk</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="email()">Deskripsi</Button>
                  <Button class="btn btn-info col-sm-4 ok" onclick="alamat()">Premi</Button>
                 
                
                          </div>

                          <form class="form-horizontal" role="form" action="../../controller/admincontroller.php" method="post">
                <div class="form-group" >
                    <label  class="col-sm-10 control-label">Nama Customer</label>
                  <select name="INIID">
                      <?php 
                     $sql = "select IdProduk,NamaProduk from produk";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdProduk']."'>" . $row['NamaProduk'] . "</option>";
                            }
                              ?>
                        </select>
                        </div>
                  <div class="form-group nama" id="nama" >
                    <label class="col-sm-10 control-label"
                          for="inputPassword3" >Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="Nama" placeholder="Nama Produk"/>
                    </div>
                  </div>
                  <div class="form-group no" id="no">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Nilai Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="Nilai" placeholder="Nilai Produk"/>
                    </div>
                  </div>
                  <div class="form-group email" id="email">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="desc" placeholder="Deskripsi"/>
                    </div>
                  </div>
                
                  <div class="form-group alamat" id="alamat">
                    <label  class="col-sm-10 control-label"
                              for="inputEmail3">Premi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Premi / Bulan"
                        name="premi" />
                    </div>
                  </div>
              
                  
          
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="submit" value="post"  name="editproduk" class="btn btn-primary">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </div>
</div>


  </body>

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
</html>
<!-- end document-->