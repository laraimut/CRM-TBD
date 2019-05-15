<?php 
require "../models/cs.php";

session_start();
    class CSController {
        protected $member;
        protected $db;
        public function __construct(){
            $this->cs = new CS();
            $this->db = new MySQLDB("localhost","root","","crm");
        }
        
        function login(){
            if( isset($_POST['email']) ) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "select * from customerservice where Email  = '$email' and Password= '$password' ";
                $cekCS= $this->db->executeSelectQuery($sql);
                 $sqll = "select * from administrator where email  = '$email' and passwordAdmin= '$password' ";
               $cekAdmin=  $this->db->executeSelectQuery($sqll);
               
                if(empty($cekCS)){
                    $_SESSION['auth'] = $cekAdmin;
                    //  $_SESSION['jmlhcs'] = $jumlahCS;
                    header('Location: http://localhost/TBD/View/Admin/AdminPage.php');
                }
                if(empty($cekAdmin)){
                     $_SESSION['auth'] = $cekCS;
                    //  $_SESSION['jmlhcs'] = $jumlahCS;
                    header('Location: http://localhost/TBD/View/CS/CSPage.php');
                   
                  
                }
                else if(empty($cekAdmin) && empty($cekCS)){
                    return  "Wrong Email or Password!";
                }
            }
            return null;
        }
        function logout(){
            if(isset($_POST['keluar'])){
                session_destroy();
                $_SESSION['sukses'] = "Anda berhasil logout";
                 header('Location: http://localhost/TBD/index.php'); 
            }
               
        
    }
    function nambahmenghubungi(){
 

        if (isset($_POST['nambahmenghubungi'])) {
            $NIKCS = $_SESSION['auth'][0]['NIKAdmin'];
            $ket=$_POST['ket'];
            $cus=$_POST['FAKU'];
            $daftar= date('Ymdhis');
            
			if (isset($ket) && $ket != "") {
				$query = "INSERT INTO Menghubungi(NIKCustomer,NIKCustomerService,Waktu,Keterangan) 
                VALUES ('$cus','$NIKCS','$daftar
','$ket')";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/CS/menghubungi.php');  
            
		}

}
    function tambahcustomer(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['nambahcustomer'])) {
            $NIK = $_POST['NIK'];
            $Nama = $_POST['Nama'];
            $no = $_POST['Notelp'];
            $emaill = $_POST['emaill'];
            $ttl=$_POST['tanggal'];
            $alamat = $_POST['alamat'];
            $region= $_POST['FAK'];
            $produk = $_POST['FAKU'];
            $daftar= date('Ymd');
            $NIKCS = $_SESSION['auth'][0]['NIKCustomerService'];
			if (isset($NIK) && $NIK != "") {
				$query = "INSERT INTO Customer (NIKCustomer,NamaCustomer,Alamat,idRegion,TanggalLahir,NomorTelepon,Email,TanggalTerdaftar,IdProduk,NIKCustomerService,Deleted) 
                VALUES ('$NIK','$Nama','$alamat',$region,'$ttl','$no','$emaill','$daftar',$produk,'$NIKCS',0)";
                $this->db->executeNonSelectQuery($query);
            
            }
            
            header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
            
		}
	}
   
}

function edit(){

    if (isset($_POST['editcustomer'])){
    $NIKCS = $_SESSION['auth'][0]['NIKCustomerService'];
        $NIK = $_POST['INIID'];
        $Nama = $_POST['Namaa'];
        $no = $_POST['Notelpp'];
        $emaill = $_POST['emailll'];
        $alamat = $_POST['alamatt'];
        $region= $_POST['FAKK'];
        $produk = $_POST['FAKUU'];
        


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
 
        header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
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

        header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
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
        header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
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
        header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
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
        header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
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
        header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
    }
   

}
}

function undo () {

   
		if (isset($_POST['undo'])) {
            $idcus = $_POST['idCus'];
            $queryy = "CALL `undoCustomer`($idcus)";
            $result = $this->db->executeNonSelectQuery($queryy);
            header('Location: http://localhost/tbd/View/CS/TabelCustomerCS.php');  
		}
   
}

    }
    $csController = new CSController();
  
    $csController->login(); 
     $csController->logout();
    $csController->tambahcustomer();
    $csController->edit();
    $csController->undo();
    $csController->nambahmenghubungi();
?>