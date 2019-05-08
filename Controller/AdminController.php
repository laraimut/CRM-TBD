<?php 
require "../models/admin.php";
session_start();
    class AdminController {
        protected $member;
        public function __construct(){
            $this->admin = new Admin();
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
   
}
    $adminController = new AdminController();
  
    $adminController->login();
     $adminController->logout();
   
?>