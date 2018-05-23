<?php
class Login extends Controller
{
    public function index()
    {
        if(empty($_SESSION["error"])==1){
            $error="";
        }else{
            $error=$_SESSION["error"];
        }
        $this->view('home/login',['error' => $error]);
        $_SESSION["error"]="";
    }
    public function reload($data=''){
        $_SESSION["error"]=$data;
        $newURL="../login";
        header('Location: '.$newURL);

    }
    public function remember_user($userId){
        $link = mysqli_connect("localhost", "root", "", "test");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        $sql = $link->prepare('INSERT INTO cookies (user_id,value) VALUES (?, ?)');
        do{
            $cookie_value=(string)random_int(0,1000000000);
            $cookie_value=$cookie_value . (string)random_int(0,1000000000);
            $cookie_value=$cookie_value . (string)random_int(0,1000000000);
            setcookie("AuthenticationId", $cookie_value, time() + (86400 * 30), "/");
            $sql->bind_param('ss', $userId,$cookie_value); 
        }while($sql->execute() == false);
        mysqli_close($link);
    }
    public function process(){
        if(empty($_POST["emailField"])==1){
            $this->reload("You did not enter an email!");
        }
        $email=$_POST["emailField"];
        if(empty($_POST["passField"])==1){
            $this->reload("You did not enter a password!");
        }
        $pass=$_POST["passField"];
        $pass=md5($pass);
        //echo $email ;
         //echo $pass;
        $this->check_data($email,$pass);
    }
    public function check_data($email,$pass){
        $link = mysqli_connect("localhost", "root", "", "test");
 
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
 
        $sql = $link->prepare('SELECT id FROM users WHERE email=? AND passw=?');
        $sql->bind_param('ss', $email,$pass); 
        $sql->execute();
        $sql->bind_result($userId);
        $sql->fetch();
        mysqli_close($link);

        if(empty($userId)){
            $this->reload("Invalid email or password!");
        }else{
            $newURL="../";
            header('Location: '.$newURL);
            $_SESSION["userId"]=$userId;
            if(isset($_POST["rememberMe"])){
                $this->remember_user($userId);
            }
        }
    }
}