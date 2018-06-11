<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 6/3/2018
 * Time: 2:45 PM
 */


class upload_product extends Controller
{

    public function index()
    {
        $this->view('home/User_items/user_items', []);
    }


    public function process()
    {
        if (empty($title = $_POST["titleField"]) == 1 ||
            empty($description = $_POST["descriptionField"]) == 1 ||
            empty($keywords = $_POST["keywordsField"]) == 1 ||
            empty($condition = $_POST["conditionField"]) == 1 ||
            empty($brand = $_POST["brandField"]) == 1 ||
            empty($country = $_POST["countryField"]) == 1 ||
            empty($curr_price = intval($_POST["curr_priceField"])) == 1 ||
            empty($next_price = intval($_POST["next_priceField"])) == 1 ||
            empty($expires_on = $_POST["expires_onField"]) == 1 ||
            empty($status = intval($_POST["statusField"])) == 1 )
        {
            $this->reload("All fields required!");
        }

        $link = $this->auctiox_db_connect();


        $sql = $link->prepare("INSERT INTO products
(title, description, keywords, `condition`, brand, country, curr_price, next_price, expires_on, is_active) 
VALUES (?,?,?,?,?,?,?,?,now(),1)");
        $sql->bind_param('s', $title);
        $sql->bind_param('s', $description);
        $sql->bind_param('s', $keywords);
        $sql->bind_param('s', $condition);
        $sql->bind_param('s', $brand);
        $sql->bind_param('s', $country);
        $sql->bind_param('i', $curr_price);
        $sql->bind_param('i', $next_price);
        $sql->bind_param('s', $expires_on);
        $sql->bind_param('i', $status);

        if($sql->execute() == true){
            $newURL="../myitems";
            header('Location: '.$newURL);
        }else{
            $this->reload("something went wrong");
        }
    }

    public function reload($data = '')
    {
        $newURL = "../myitems";
        header('Location: ' . $newURL);
        die;
    }
}
