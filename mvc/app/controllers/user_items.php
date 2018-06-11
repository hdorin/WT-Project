<?php

class user_items extends Controller
{
    public function index()
    {

        $link = $this->auctiox_db_connect();
        $sql = "SELECT * FROM products";
        $result = mysqli_query($link, $sql);
        $link->close();
        echo '<pre>';
        $this->view('home/User_items/user_items', ['result' => $result]);
    }


    public function reload($data=''){
        $_SESSION["error"]=$data;
        $newURL="../user_items";
        header('Location: '.$newURL);
        die;
    }


    public function process()
    {
    }


}