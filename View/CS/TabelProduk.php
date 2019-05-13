<?php
   
   include 'NavbarCS.php'?>
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
             
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
                         
                        </tr>
                      </thead>
                      <tbody>
          <?php  
     
     $id= $_SESSION['auth'][0]['NIKCustomerService'];
    
     $sql = "select * from produk";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['NamaProduk']."</th> ";
    echo " <th> Rp".$row['NilaiProduk']."</th> ";
    echo "<th>".$row['Deskripsi']."</th>";
    echo " <th> Rp".$row['Premi']."</th>";
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

  </body>
</html>
<!-- end document-->