<?php 
	require "../connection/mysqlDB.php";
    class CS{
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
            $sql = "select * from customerservice where email  = '$email' and passwordCS= '$password' ";
            return $this->db->executeSelectQuery($sql);
        }
        function allcs(){
            $sql = "select count(NIKCustomerService) from customerservice";
            return $this->db->executeSelectQuery($sql);
        }
        
        
    }
       
?>