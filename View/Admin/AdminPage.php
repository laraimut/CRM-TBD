<?php
   
   include 'NavbarAdmin.php'?>
   <Style>
#tabelnya {


}
.batas{
  margin-top : 50px;
}
</Style>
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
     
     $sql = "select sum(premi ) from tanggungjawab";
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
              <h2>$hasil /Bulan</h2>
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
 <div class="col-lg-12">
          
 <h2 class="title-1 m-b-25"> Jumlah Customer dan Investasi Tiap Region</h2>
 <form method="post" >
 <select name="helpme">

                      <?php 
                     $sql = "select * from region ";
                     $res= $db->executeSelectQuery($sql);
                     foreach ($res as $key => $row) {
                      echo "<option value='".$row['IdRegion']."'>" . $row['Nama'] . "</option>";
                            }
                              ?>
                        </select>
                        <input type="submit" name="submit" value="cari" />
                        <!-- <Button class="btn btn-info col-sm-4 ok" name="tampilkan"onclick="tampilkan()">Tampilkan</Button> -->
                          </form>
                        <div id="tabelnya"class="table-responsive table--no-card m-b-40">
                    <table
                      class="table table-borderless table-striped table-earning"
                    >
                      <thead>
                        <tr>
                          <th>ID Region</th>
                          <th>Nama Region</th>
                          <th>Jumlah Customer</th>
                          <th>Jumlah Investasi</th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
          <?php  
          $nilai = 1;
       if(isset($_POST['submit'])){
   $nilai = $_POST['helpme'];
       }
     $sql = "select * from region where IdRegion = $nilai";
     $res= $db->executeSelectQuery($sql);
     $jmlhcustomer = "CALL `getCountCustomerReg`($nilai)";
     $res1= $db->executeSelectQuery($jmlhcustomer);
     $jmlhPremi = "CALL `getTotalPremiThnReg`($nilai)";
     $res2= $db->executeSelectQuery($jmlhPremi);
     $hasil1 = implode ($res1[0]);
     $hasil2 = implode ($res2[0]);
     
     echo  "<tr>";
     echo " <th>".$res[0]['IdRegion']."</th> ";
    echo " <th>".$res[0]['Nama']."</th> ";
    echo "<th>$hasil1</th>";
    echo "<th>$hasil2</th>";
    echo "</tr>";
     
  

?>

 </tbody> 
                    </table>
                  </div>
                </div>
              
              </div>

</div>
                <div class="row batas">
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

    <Script>
function tampilkan() {
  var x = document.getElementById("tabelnya");
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  
}
      </Script>
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
    <script src="../js/main.js"></script>
  </body>
</html>
<!-- end document-->