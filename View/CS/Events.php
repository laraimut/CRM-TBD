<?php
   
   include 'NavbarCS.php'?>

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
                  <h3 class="title-5 m-b-35">Event Table</h3>
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
                        class="au-btn au-btn-icon au-btn--green au-btn--small"
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
                          <th>
                            <label class="au-checkbox">
                              <input type="checkbox" />
                              <span class="au-checkmark"></span>
                            </label>
                          </th>
                  <th>Tanggal Terdaftar</th>
                          <th>Nama Customer</th>
                          <th>No Telp </th>
                          <th>Email</th>
                          <th>Nama Asuransi</th>
                          <th>Nilai Asuransi</th>
                          <th>Premi</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php $id= $_SESSION['auth'][0]['NIKCustomerService'];
    
    $sql = "select * from acara ";
    $res= $db->executeSelectQuery($sql);
    foreach ($res as $key => $row) {
      echo "  
                  
                    <tr class='tr-shadow'>
                          <td>
                            <label class='au-checkbox'>
                              <input type='checkbox' />
                              <span class='au-checkmark'></span>
                            </label>
                          </td>";
                        echo "<td>".$row['TanggalTerdaftar']."</td>";
                        echo "  <td class='desc'>".$row['NamaCustomer']."</td>";
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
                                data-toggle='tooltip'
                                data-placement='top'
                                title='Edit'
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
                              <button
                                class='item'
                                data-toggle='tooltip'
                                data-placement='top'
                                title='More'
                              >
                                <i class='zmdi zmdi-more'></i>
                              </button>
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
                
                  <!-- END DATA TABLE-->
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
<!-- end document-->
