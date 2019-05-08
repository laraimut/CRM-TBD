<?php 
require "cs.php";
session_start();
    class CSController {
        protected $member;
        public function __construct(){
            $this->cs = new CS();
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
                    //  $_SESSION['jmlhcs'] = $jumlahCS;
                    header('Location: http://localhost/TBD/CSPage.php');
                   
                  
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
   
}
    $csController = new CSController();
  
    $csController->login();
     $csController->logout();
   
?>