<?php
class Login extends Controller
{
    public function index()
    {
        $this->view('home/login',[]);
    }
    public function process(){
        $email=$_POST["emailField"];
        $pass=$_POST["passField"];
        $pass=md5($pass);
        echo $email ;
        echo $pass;
    }


}