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
        echo $email ;
        echo $pass;
    }


}