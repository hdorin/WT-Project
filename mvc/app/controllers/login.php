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
    public function process(){
        if(empty($_POST["emailField"])==1){
            echo "You did not enter an email!";
            $this->reload("You did not enter an email!");
        }
        $email=$_POST["emailField"];
        if(empty($_POST["passField"])==1){
            echo "You did not enter a password!";
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
 
        $sql = $link->prepare('SELECT name FROM users WHERE email=? AND password=?');
        $sql->bind_param('ss', $email,$pass); 
        $sql->execute();
        $sql->bind_result($userId);
        $sql->fetch();

        if(empty($userId)){
            $this->reload("Invalid email or password!");
        }else{
            $newURL="../";
            header('Location: '.$newURL);
            $_SESSION["userId"]=$userId;
            if(isset($_POST["rememberMe"])){
                $rand_nr=(string)random_int(0,1000000000);
                $rand_nr=$rand_nr . (string)random_int(0,1000000000);
                $rand_nr=$rand_nr . (string)random_int(0,1000000000);
                setcookie("AuthenticationId", $rand_nr );
            }
        }
        
        mysqli_close($link);
    }
}