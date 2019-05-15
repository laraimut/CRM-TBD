<?php
   
   include 'NavbarCS.php'?>
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="overview-wrap">
                    <h2 class="title-1">overview</h2>
                    <button class="au-btn au-btn-icon au-btn--blue">
                      <i class="zmdi zmdi-plus"></i>add item
                    </button>
                  </div>
                </div>
              </div>
              <div class="row m-t-25">
              <?php  
     
    
    
       $sql = "select * from customerservice";
       $res= $db->executeSelectQuery($sql);
 $result=sizeof($res);
       
       echo  "         <div class='col-sm-6 col-lg-3'>
       <div class='overview-item overview-item--c1'>
         <div class='overview__inner'>
           <div class='overview-box clearfix'>
             <div class='icon'>
               <i class='zmdi zmdi-account-o'></i>
             </div>
             <div class='text'>
               <h2>$result</h2>
               <span>Jumlah Customer Services</span>
             </div>
           </div>
           <div class='overview-chart'>
             <canvas id='widgetChart1'></canvas>
           </div>
         </div>
       </div>
     </div> ";
       
 ?>
           
             <!-- -->
             <?php  
     
    
    
     $sql = "select * from customer";
     $res= $db->executeSelectQuery($sql);
$result=sizeof($res);
     
     echo  "         <div class='col-sm-6 col-lg-3'>
     <div class='overview-item overview-item--c2'>
       <div class='overview__inner'>
         <div class='overview-box clearfix'>
           <div class='icon'>
             <i class='zmdi zmdi-account-o'></i>
           </div>
           <div class='text'>
             <h2>$result</h2>
             <span>Jumlah Customer</span>
           </div>
         </div>
         <div class='overview-chart'>
         <canvas id='widgetChart2'></canvas>
       </div>
       </div>
     </div>
   </div> ";
     
?>
         
       
                <!-- -->
                <?php  
     
    
     $sql = "CALL `getAcaraBulanan`()";
     $res= $db->executeSelectQuery($sql);
     $result=sizeof($res);

     
     echo  "         <div class='col-sm-6 col-lg-3'>
     <div class='overview-item overview-item--c3'>
       <div class='overview__inner'>
         <div class='overview-box clearfix'>
           <div class='icon'>
             <i class='zmdi zmdi-calendar-note'></i>
           </div>
           <div class='text'>
             <h2>$result</h2>
             <span>Jumlah Event Bulan ini</span>
           </div>
         </div>
         <div class='overview-chart'>
         <canvas id='widgetChart3'></canvas>
       </div>
       </div>
     </div>
   </div> ";
     
?>

<?php  
     
    
     $name = $_SESSION['auth'][0]['NIKCustomerService'];
     $sql = "CALL `totalInvesCS`($name)";
       $res= $db->executeSelectQuery($sql);
       $hasil = implode ($res[0]);
      
      echo  "         <div class='col-sm-6 col-lg-3'>
      <div class='overview-item overview-item--c4'>
        <div class='overview__inner'>
          <div class='overview-box clearfix'>
            <div class='icon'>
              <i class='zmdi zmdi-money'></i>
            </div>
            <div class='text'>
              <h2>$hasil</h2>
              <span>total Investasi Customer</span>
            </div>
          </div>
          <div class='overview-chart'>
          <canvas id='widgetChart4'></canvas>
        </div>
        </div>
      </div>
    </div> ";
      
 
 ?>  <div class="row">
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25">Customer Terbaru</h2>
                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>Tanggal Terdaftar</th>
                          <th>Nama Customer</th>
                          <th>Email</th>
                          <th>Nama Asuransi</th>
                          <th>Nilai Asuransi</th>
                          <th>Premi</th>
                         
                        </tr>
                      </thead>
                      <tbody>
          <?php  
     
     $id= $_SESSION['auth'][0]['NIKCustomerService'];
    
     $sql = "select * from tanggungjawab where NIKCustomerService = $id order by TanggalTerdaftar Desc";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     
     echo  "<tr>";
     echo " <th>".$row['TanggalTerdaftar']."</th> ";
    echo " <th>".$row['NamaCustomer']."</th> ";
    echo "<th>".$row['Email']."</th>";
    echo "<th>".$row['NamaProduk']."</th>";
    echo "<th>".$row['NilaiProduk']."</th>";
    echo " <th>".$row['Premi']."</th>";
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
                  <div
                    class="au-card au-card--no-shadow au-card--no-pad m-b-40"
                  >
                    <div
                      class="au-card-title"
                      style="background-image:url('images/bg-title-01.jpg');"
                    >
                      <div class="bg-overlay bg-overlay--blue"></div>
                      <h3>
                        <i class="zmdi zmdi-account-calendar"></i><?php echo date('D,d/M/Y'); ?>
                      </h3>
                      <button class="au-btn-plus">
                        <i class="zmdi zmdi-plus"></i>
                      </button>
                    </div>
                    <div class="au-task js-list-load">
                      <div class="au-task__title">
                        <p>Jadwal Event Bulan <?php echo date('M')?></p>
                      </div>
                      <div class="au-task-list js-scrollbar3">

                      <?php  
     
    
    
     $sql = "CALL `getAcaraBulanan`()";
     $res= $db->executeSelectQuery($sql);
     foreach ($res as $key => $row) {
     echo"
      <div class='au-task__item au-task__item--danger'>
      <div class='au-task__item-inner'>
        <h5 class='task'> 
      <a href='#'>".$row['NamaAcara']."</a>
      <a>".$row['Jenis']."</a>
      </h5>
        <span class='time'>".$row['Waktu']."</span>
      </div>
    </div>
";}
?>



                       
                        
                        
                      
                      <div class="au-task__footer">
                        <button class="au-btn au-btn-load js-load-btn">
                          load more
                        </button>
                      </div>
                    </div>
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