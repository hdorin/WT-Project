<?php

class user_items extends Controller
{
    public function index()
    {

        $link = $this->auctiox_db_connect();
        $sql = "SELECT * FROM products";
        $result = mysqli_query($link, $sql, MYSQLI_ASSOC);
//        $link->close();
        $this->view('home/User_items/user_items', ['result' => $result]);
    }


}