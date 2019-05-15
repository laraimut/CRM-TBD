<?php 
require "../models/admin.php";
session_start();
    class AdminController {
        protected $member;
        protected $db;
        public function __construct(){
            $this->admin = new Admin();
            $this->db = new MySQLDB("localhost","root","","crm");
        }
    
       
        function login(){
            if( isset($_POST['email']) ) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $checkLogin = $this->cs->login("$email", "$password");
                $jumlahCS = $this->cs->allcs();
                if(empty($checkLogin)){
                    return  "Wrong Email or Password!";
                }
                else{
                     $_SESSION['auth'] = $checkLogin;
              
                    header('Location: http://localhost/TBD/Admin/AdminPage.php');
                   
                  
                }
            }
            return null;
        }
        function logout(){
            if(isset($_POST['keluar'])){
                session_destroy();
                $_SESSION['sukses'] = "Anda berhasil logout";
                 header('Location: http://localhost/tbd/index.php'); 
            }
               
        
    }
    function edit(){

        if (isset($_POST['editcustomer'])){
            $NIKCS = $_SESSION['auth'][0]['NIKAdmin'];
            $NIK = $_POST['INIIDI'];
            $Nama = $_POST['Namaa'];
            $no = $_POST['Notelpp'];
            $emaill = $_POST['emailll'];
            $alamat = $_POST['alamatt'];
            $region= $_POST['FAKK'];
            $produk = $_POST['FAKUU'];
            $cs=$_POST['MANTAPP'];
            
    
    
        if(!empty($Nama)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[1];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','NamaCustomer','Customer','$string','$Nama','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set NamaCustomer ='$Nama' where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
     
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
        else if (!empty($no)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[5];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','NomorTelepon','Customer','$string','$no','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set NomorTelepon='$no' where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
    
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
        else if (!empty($emaill)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[6];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','Email','Customer','$string','$emaill','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set Email='$emaill' where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
        else if (!empty($alamat)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[2];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','Alamat','Customer','$string','$alamat','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set Alamat ='$alamat' where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
        else if (!empty($cs)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[9];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','NIKCustomerService','Customer','$string','$cs','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set NIKCustomerService=$cs  where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
        else if (!empty($produk)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[8];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','IdProduk','Customer','$string','$produk','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set IdProduk=$produk where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
        else if (!empty($region)){
            $datasebelum = "Select * from Customer Where NIKCustomer='$NIK'";
            $hasil = $this->db->executeNonSelectQuery($datasebelum);
            $row=mysqli_fetch_row($hasil);
            $string= $row[3];
            $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
            VALUES ('$NIKCS','IdRegion','Customer','$string','$region','$NIK')";
            $this->db->executeNonSelectQuery($queryy);
            $query = "update customer set idRegion=$region  where NIKCustomer = '$NIK' ";
            $this->db->executeNonSelectQuery($query);
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
        }
      
    
    }
    }
    function undo () {

   
		if (isset($_POST['undo'])) {
            $idcus = $_POST['idCus'];
            $queryy = "CALL `undoCustomer`($idcus)";
            $result = $this->db->executeNonSelectQuery($queryy);
            header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php');  
		}
   
}
function undocs () {

   
    if (isset($_POST['undoo'])) {
        $idcus = $_POST['idcs'];
        $queryy = "CALL `undoCS` ($idcus)";
        $result = $this->db->executeNonSelectQuery($queryy);
        header('Location: http://localhost/tbd/View/Admin/TabelCS.php');  
    }
}  

function deleteevent(){
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['hapusevent'])) {
            $idevent = $_POST['idEvent'];
            $queryy = "UPDATE `acara` SET `Deleted` = '1' WHERE `acara`.`IdAcara` = 5";
            $result = $this->db->executeNonSelectQuery($queryy);
             
		
        header('Location: http://localhost/tbd/View/Admin/EventAdmin.php'); 
        
    }
}
}


function deletecus(){
    
		if (isset($_POST['hapuscus'])) {
            $idcus = $_POST['idCuss'];
            $queryy = "UPDATE customer SET Deleted = '1' WHERE `customer`.`NIKCustomer` = $idcus";
            $result = $this->db->executeNonSelectQuery($queryy);
             
		
        header('Location: http://localhost/tbd/View/Admin/TabelCustomerAdmin.php'); 
        
    
}
}

function nambahproduk(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if (isset($_POST['nambahproduk'])) {
            $nama=$_POST['Nama'];
            $nilai=$_POST['Nilai'];
            $des=$_POST['des'];
            $premi=$_POST['premi'];
            
			if (isset($nama) && $nama != "") {
				$query = "INSERT INTO Produk (NamaProduk,NilaiProduk,Deskripsi,Premi) 
                VALUES ('$nama','$nilai','$des','$premi')";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/Admin/produkadmin.php');  
            
		}
}
}

function nambahsub(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if (isset($_POST['nambahsub'])) {
            $wilayaha=$_POST['REG'];
            $wilayahb=$_POST['REGG'];
            
			if (isset($wilayaha) && $wilayahb != "") {
				$query = "INSERT INTO bagian (IdRegion,IdParent) 
                VALUES ('$wilayaha','$wilayahb')";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/Admin/WilayahAdmin.php');  
            
		}
}
}



function nambahwilayah(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if (isset($_POST['nambahwilayah'])) {
            $nama=$_POST['Nama'];
          
            
			if (isset($nama) && $nama != "") {
				$query = "INSERT INTO region(Nama) 
                VALUES ('$nama')";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/Admin/WilayahAdmin.php');  
            
		}
}
}

function nambahevent(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if (isset($_POST['nambahevent'])) {
            $NIKCS = $_SESSION['auth'][0]['NIKAdmin'];
            $nama=$_POST['Nama'];
            $customer=$_POST['FAKU'];
            $waktu=$_POST['waktu'];
            $jenis=$_POST['jenis'];
            
			if (isset($nama) && $nama != "") {
				$query = "INSERT INTO acara (NIKAdmin,NamaAcara,NIKCustomer,Waktu,Jenis) 
                VALUES ('$NIKCS','$nama','$customer','$waktu','$jenis')";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/Admin/EventAdmin.php');  
            
		}
}
}

function tambahcs(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['nambahcs'])) {
            $NIK = $_POST['NIK'];
            $Nama = $_POST['Nama'];
            $no = $_POST['Notelp'];
            $emaill = $_POST['emaill'];
            $ttl=$_POST['tanggal'];
            $alamat = $_POST['alamat'];
            $region= $_POST['FAK'];
            $pass=$_POST['pass'];
            $NIKCS = $_SESSION['auth'][0]['NIKAdmin'];
			if (isset($NIK) && $NIK != "") {
				$query = "INSERT INTO CustomerService (NIKCustomerService,Nama,Alamat,Foto,IdRegion,TanggalLahir,NomorTelepon,Email,Password,Deleted) 
                VALUES ('$NIK','$Nama','$alamat', 'foto1',$region,'$ttl','$no','$emaill','$pass',0)";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/Admin/TabelCS.php');  
            
		}
	}
   
}
function editproduk(){

    if (isset($_POST['editproduk'])){
    $NIKCS = $_SESSION['auth'][0]['NIKAdmin'];
        $NIK = $_POST['INIID'];
        $Nama = $_POST['Nama'];
        $nilai = $_POST['Nilai'];
        $desc = $_POST['desc'];
        $premi = $_POST['premi'];
        


    if(!empty($Nama)){
        $datasebelum = "Select * from produk Where IdProduk='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[1];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','NamaProduk','Produk','$string','$Nama','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update produk set NamaProduk ='$Nama' where IdProduk='$NIK' ";
        $this->db->executeNonSelectQuery($query);
 
        header('Location: http://localhost/tbd/View/admin/produkadmin.php');  
    }
    else if (!empty($nilai)){
        $datasebelum = "Select * from produk Where IdProduk='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[2];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','NilaiProduk','Produk','$string','$Nama','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update produk set NilaiProduk ='$nilai' where IdProduk='$NIK' ";
        $this->db->executeNonSelectQuery($query);
 
        header('Location: http://localhost/tbd/View/admin/produkadmin.php');  
    }
    else if (!empty($desc)){
        $datasebelum = "Select * from produk Where IdProduk='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[3];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','Deskripsi','Produk','$string','$Nama','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update produk set Deskripsi ='$desc' where IdProduk='$NIK' ";
        $this->db->executeNonSelectQuery($query);
 
        header('Location: http://localhost/tbd/View/admin/produkadmin.php'); 
    }
    else if (!empty($premi)){
        $datasebelum = "Select * from produk Where IdProduk='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[4];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','Premi','Produk','$string','$Nama','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update produk set Premi ='$premi' where IdProduk='$NIK' ";
        $this->db->executeNonSelectQuery($query);
 
        header('Location: http://localhost/tbd/View/admin/produkadmin.php'); 
    }

   

}
}

function editcs(){

    if (isset($_POST['editcs'])){
    $NIKCS = $_SESSION['auth'][0]['NIKAdmin'];
        $NIK = $_POST['INIID'];
        $Nama = $_POST['Namaa'];
        $no = $_POST['Notelpp'];
        $emaill = $_POST['emailll'];
        $alamat = $_POST['alamatt'];
        $region= $_POST['FAKK'];
        $produk = $_POST['FAKUU'];
        


    if(!empty($Nama)){
        $datasebelum = "Select * from customerservice Where NIKCustomerService='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[1];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','Nama','Customerservice','$string','$Nama','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update customerservice set Nama ='$Nama' where NIKCustomerService = '$NIK' ";
        $this->db->executeNonSelectQuery($query);
 
        header('Location: http://localhost/tbd/View/admin/TabelCS.php');  
    }
    else if (!empty($no)){
        $datasebelum = "Select * from customerservice Where NIKCustomerService='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[6];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','NomorTelepon','Customerservice','$string','$no','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update customerservice set NomorTelepon='$no' where NIKCustomerService = '$NIK' ";
        $this->db->executeNonSelectQuery($query);

        header('Location: http://localhost/tbd/View/admin/TabelCS.php');  
    }
    else if (!empty($emaill)){
        $datasebelum = "Select * from customerservice Where NIKCustomerService='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[7];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','Email','Customerservice','$string','$emaill','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update customerservice set Email='$emaill' where NIKCustomerService = '$NIK' ";
        $this->db->executeNonSelectQuery($query);
        header('Location: http://localhost/tbd/View/admin/TabelCS.php');  
    }
    else if (!empty($alamat)){
        $datasebelum = "Select * from customerservice Where NIKCustomerService='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[2];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','Alamat','Customerservice','$string','$alamat','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update customerservice set Alamat ='$alamat' where NIKCustomerService = '$NIK' ";
        $this->db->executeNonSelectQuery($query);
        header('Location: http://localhost/tbd/View/admin/TabelCS.php');  
    }
    else if (!empty($region)){
        $datasebelum = "Select * from customerservice Where NIKCustomerService='$NIK'";
        $hasil = $this->db->executeNonSelectQuery($datasebelum);
        $row=mysqli_fetch_row($hasil);
        $string= $row[4];
        $queryy ="INSERT INTO riwayat (NIKPengubah,NamaField,NamaTabel,DataSebelum,DataSesudah,IdRecord)
        VALUES ('$NIKCS','IdRegion','Customerservice','$string','$region','$NIK')";
        $this->db->executeNonSelectQuery($queryy);
        $query = "update customerservice set idRegion=$region  where NIKCustomerService = '$NIK' ";
        $this->db->executeNonSelectQuery($query);
        header('Location: http://localhost/tbd/View/admin/TabelCS.php');  
    }
   

}
}
}
    $adminController = new AdminController();
  
    $adminController->login();
     $adminController->logout();
    $adminController->edit();
    $adminController->undo();
    $adminController->tambahcs();
    $adminController->editcs();
    $adminController->undocs();
    $adminController->nambahproduk();
    $adminController->editproduk();
    $adminController->nambahevent();
    $adminController->nambahsub();
    $adminController->nambahwilayah();
    $adminController-> deleteevent();
    $adminController->deletecus();
    
?>