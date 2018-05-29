<?php
class Register extends Controller
{
    public function index()
    {
        if(empty($_SESSION["error"])==1){
            $error="";
        }else{
            $error=$_SESSION["error"];
        }
        $this->view('home/register',['error' => $error]);
        $_SESSION["error"]="";
    }
    public function reload($data=''){
        $_SESSION["error"]=$data;
        $newURL="../register";
        header('Location: '.$newURL);
        die;
    }
    
    public function process(){
        if(empty($_POST["nameField"])==1){
            $this->reload("You did not enter a name!");
        }
        $name=$_POST["nameField"];
        if(empty($_POST["emailField"])==1){
            $this->reload("You did not enter an email!");
        }
        $email=$_POST["emailField"];
        if(empty($_POST["passField1"])==1){
            $this->reload("You did not enter a password!");
        }
        $pass1=$_POST["passField1"];
        if(empty($_POST["passField2"])==1){
            $this->reload("You did not confirm the password!");
        }
        $pass2=$_POST["passField2"];
        if(isset($_POST["acceptEULA"])==0){
            $this->reload("You did not accept the EULA!");
        }
        if(strcmp($pass1,$pass2)!=0){
            $this->reload("Passwords do not match!");
            
        }
        $pass1=md5($pass1);
        $this->create_account($name,$email,$pass1);
    }
    public function create_account($name,$email,$pass){
        $link = $this->auctiox_db_connect();//simplify connection to the database
 
        $sql = $link->prepare('INSERT INTO USERS (name, email, passw,type,date_created) VALUES (?, ?, ?, 1, now())');
        $sql->bind_param('sss', $name,$email,$pass); 
        if($sql->execute() == true){
            $newURL="../login";
            $_SESSION["error"]="Please login!";
            header('Location: '.$newURL);
            $_SESSION["userId"]=$userId;
        }else{
            $this->reload("Email address already in use!");
        }
        
        mysqli_close($link);
    }


}