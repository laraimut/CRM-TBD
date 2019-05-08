
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
      
 
 ?>
          
       

              <div class="row">
                <div class="col-lg-9">
                  <h2 class="title-1 m-b-25">Customer Terbaru</h2>
                  <div class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>date</th>
                          <th>nama Customer</th>
                          <th>nama Customer Services</th>
                          <th class="text-right">Nama Asuransi</th>
                          <th class="text-right">Nilai Asuransi</th>
                          <th class="text-right">Tanggal Mulai</th>
                          <th class="text-right">Tanggal Kadaluarsa</th>
                          <th class="text-right">Angsuran Bulanan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2018-09-29 05:57</td>
                          <td>Chris</td>
                          <td>Jaki anjg</td>
                          <td class="text-right">Kesehatan Manual</td>
                          <td class="text-right">Rp 25.000.000</td>
                          <td class="text-right">2018-09-29 05:57</td>
                          <td class="text-right">2018-09-30 00:00</td>
                          <td class="text-right">Rp 500.000</td>
                        </tr>
                        <tr>
                          <td>2018-09-29 05:57</td>
                          <td>Chris</td>
                          <td>Jaki anjg</td>
                          <td class="text-right">Kesehatan Manual</td>
                          <td class="text-right">Rp 25.000.000</td>
                          <td class="text-right">2018-09-29 05:57</td>
                          <td class="text-right">2018-09-30 00:00</td>
                          <td class="text-right">Rp 500.000</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-lg-3">
                  <h2 class="title-1 m-b-25">Top CS</h2>
                  <div
                    class="au-card au-card--bg-blue au-card-top-countries m-b-40"
                  >
                    <div class="au-card-inner">
                      <div class="table-responsive">
                        <table class="table table-top-countries">
                          <tbody>
                            <tr>
                              <td>Vinson</td>
                              <td class="text-right">$119,366.96</td>
                            </tr>
                            <tr>
                              <td>Jojo</td>
                              <td class="text-right">$70,261.65</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
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
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
  </body>
</html>
<!-- end document-->
