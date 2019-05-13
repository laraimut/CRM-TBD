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
     
    
    //harus isi event perbulan
  
    //  $res= $db->executeSelectQuery($sql);
$result=0;
     
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
     
    
     //harus isi total pembayaran customer
   
     //  $res= $db->executeSelectQuery($sql);
 $result=0;
      
      echo  "         <div class='col-sm-6 col-lg-3'>
      <div class='overview-item overview-item--c4'>
        <div class='overview__inner'>
          <div class='overview-box clearfix'>
            <div class='icon'>
              <i class='zmdi zmdi-money'></i>
            </div>
            <div class='text'>
              <h2>$result</h2>
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
                        <i class="zmdi zmdi-account-calendar"></i>24 April, 2019
                      </h3>
                      <button class="au-btn-plus">
                        <i class="zmdi zmdi-plus"></i>
                      </button>
                    </div>
                    <div class="au-task js-list-load">
                      <div class="au-task__title">
                        <p>Jadwal Event Bulan April</p>
                      </div>
                      <div class="au-task-list js-scrollbar3">
                        <div class="au-task__item au-task__item--danger">
                          <div class="au-task__item-inner">
                            <h5 class="task">
                              <a href="#"
                                >Meeting about plan for Admin Template 2018</a
                              >
                            </h5>
                            <span class="time">10:00 AM</span>
                          </div>
                        </div>
                        <div class="au-task__item au-task__item--warning">
                          <div class="au-task__item-inner">
                            <h5 class="task">
                              <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                          </div>
                        </div>
                        <div class="au-task__item au-task__item--primary">
                          <div class="au-task__item-inner">
                            <h5 class="task">
                              <a href="#"
                                >Meeting about plan for Admin Template 2018</a
                              >
                            </h5>
                            <span class="time">02:00 PM</span>
                          </div>
                        </div>
                        <div class="au-task__item au-task__item--success">
                          <div class="au-task__item-inner">
                            <h5 class="task">
                              <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">03:30 PM</span>
                          </div>
                        </div>
                        <div
                          class="au-task__item au-task__item--danger js-load-item"
                        >
                          <div class="au-task__item-inner">
                            <h5 class="task">
                              <a href="#"
                                >Meeting about plan for Admin Template 2018</a
                              >
                            </h5>
                            <span class="time">10:00 AM</span>
                          </div>
                        </div>
                        <div
                          class="au-task__item au-task__item--warning js-load-item"
                        >
                          <div class="au-task__item-inner">
                            <h5 class="task">
                              <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                          </div>
                        </div>
                      </div>
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

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js"></script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
  </body>
</html>
<!-- end document-->