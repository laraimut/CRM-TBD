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
                $sql = "select * from customerservice where email  = '$email' and passwordCS= '$password' ";
                $cekCS= $this->db->executeSelectQuery($sql);
                 $sqll = "select * from administrator where email  = '$email' and passwordAdmin= '$password' ";
               $cekAdmin=  $this->db->executeSelectQuery($sqll);
               
                if(empty($cekCS)){
                    $_SESSION['auth'] = $cekAdmin;
                    //  $_SESSION['jmlhcs'] = $jumlahCS;
                    header('Location: http://localhost/TBD/View/CS/Berhasil.php');
                }
                else if(empty($cekAdmin)){
                     $_SESSION['auth'] = $cekCS;
                    //  $_SESSION['jmlhcs'] = $jumlahCS;
                    header('Location: http://localhost/TBD/View/CS/CSPage.php');
                   
                  
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
   
}
    $csController = new CSController();
  
    $csController->login();
     $csController->logout();
   
?>