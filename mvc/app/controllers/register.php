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
    }
    
    public function process(){
        if(empty($_POST["nameField"])==1){
            echo "You did not enter a name!";
            $this->reload("You did not enter a name!");
        }
        $name=$_POST["nameField"];
        if(empty($_POST["emailField"])==1){
            echo "You did not enter an email!";
            $this->reload("You did not enter an email!");
        }
        $email=$_POST["emailField"];
        if(empty($_POST["passField1"])==1){
            echo "You did not enter a password!";
            $this->reload("You did not enter a password!");
        }
        $pass1=$_POST["passField1"];
        if(empty($_POST["passField2"])==1){
            echo "You did not confirm the password!";
            $this->reload("You did not confirm the password!");
        }
        $pass2=$_POST["passField2"];
        if(isset($_POST["acceptEULA"])==0){
            $this->reload("You did not accept the EULA!");
        }
        //$pass1=md5($pass);
        if(strcmp($pass1,$pass2)!=0){
            $this->reload("Passwords do not match!");
        }
        echo $name;
        echo $email ;
        echo $pass1;
        $pass1=md5($pass1);
        $this->create_account($name,$email,$pass1);
    }
    public function create_account($name,$email,$pass){
        $link = mysqli_connect("localhost", "root", "", "test");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
 
        $sql = $link->prepare('INSERT INTO USERS (name, email, passw) VALUES (?, ?, ?)');
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