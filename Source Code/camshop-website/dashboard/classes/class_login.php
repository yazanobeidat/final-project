<?php
session_start();

class login extends db{
   public $emailErr;
   public $passErr;
   public $emailErr2;
    
    public function log($umail,$pass){
    if (isset($umail) && isset($pass)) {
       
    
       
      
        
    
        if (empty($umail)) {
            $this->emailErr= "Please enter your email";
    
        }if(empty($pass)){
            $this->passwordErr= "Please enter your passwored";
    
        }
        if(!empty($pass) && !empty($umail)){
            $sql = "SELECT * FROM users WHERE user_email ='$umail' AND user_pass='$pass'";
                $result = mysqli_query($this->connect(), $sql);
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) === 1) {
                    $_SESSION['user_email']=$row['user_email'];
                    $_SESSION['user_name']=$row['user_name'];
                    $_SESSION['user_id']=$row['user_id'];
        
                    header("location:../Electro_store/../index.php");
                    
               }
    
            }else{$this->emailErr2= "wrong pass or email";}
        }
    }
    
}








?>