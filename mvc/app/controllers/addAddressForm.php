<?php
class AddAddressForm extends Controller
{
    public function index()
    {
    	if(isset($_SESSION["response"])==false){
            $resp="";
        }else{
            $resp=$_SESSION["response"];
        }

        $this->view('home/addAddressForm',['resp' => $resp]);

        unset($_SESSION["response"]);
    }


    public function process()
    {
    	if(empty($_POST["name"])==1 || empty($_POST["phoneno"])==1 || empty($_POST["address"])==1
    		|| empty($_POST["city"])==1 || empty($_POST["county"])==1 || empty($_POST["country"])==1)
    	{
            $this->reload("All fields required!");
        }


    	$name = $_POST["name"];
    	$phoneno = $_POST["phoneno"];
    	$address = $_POST["address"];
    	$city = $_POST["city"];
    	$county = $_POST["county"];
        $country = $_POST["country"];

    	if (preg_match('/[^A-Za-z ]/', $name))
    		die("Name must contain english characters only!");

        if (preg_match('/[^0-9]/', $phoneno))
            die("Phone number must contain numbers only!");

        if (preg_match('/[^A-Za-z ]/', $city))
            die("City must contain english characters only!");

        if (preg_match('/[^A-Za-z ]/', $county))
            die("County must contain english characters only!");

        if (preg_match('/[^A-Za-z ]/', $country))
            die("Country must contain english characters only!");


    	$this->add_address($name,$phoneno,$address,$city,$county,$country);
    	
    	$this->reload("Address added successfully...");
    }

 	public function reload($data=''){
        $_SESSION["response"]=$data;
        $newURL="../addAddressForm";
        header('Location: '.$newURL);
        die;
    }

    public function add_address($name,$phoneno,$address,$city,$county,$country){
        $link = $this->auctiox_db_connect();//simplify connection to the database
 
        $sql = $link->prepare('INSERT INTO addresses VALUES (?, ?, ?, ?, ?, ?, ?)');
        $sql->bind_param('sssssss', $_SESSION['userId'], $name,$phoneno,$address,$city,$county,$country); 
        $status = $sql->execute();

        if ($status == false)
        	die("SQL query failed...");

        mysqli_close($link);
    }
}