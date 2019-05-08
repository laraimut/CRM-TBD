<?php 
	require "../connection/mysqlDB.php";
    class Admin{
        protected $db;
        public function __construct(){
          $this->db = new MySQLDB("localhost","root","","crm");
        }
    
        // function register ( $name , $email , $password , $username ){
        //     $sql = "insert into member (name , email ,  password , username) values ( '$name' , '$email' , '$password' , '$username' ) ";
        //    $res =  $this->db->executeNonSelectQuery($sql);
        //    if($res){
        //      return true;
        //    }
        //    else{
        //      return false;
        //    }    
        // }
        
        function login($email, $password){
            $sql = "select * from administrator where email  = '$email' and passwordAdmin= '$password' ";
            return $this->db->executeSelectQuery($sql);
        }
     
        
        
    }
       
?>