<?php
//require_once '../core/Controller.php';

class Products extends Controller
{
    public function index()
    {

    	if(isset($_SESSION["response"])==false){
            $resp="";
        }else{
            $resp=$_SESSION["response"];
        }

        $link = new DataBase();

        $sth = $link->prepare("SELECT * FROM products WHERE is_active=1");
        $sth->execute();
        $products = $sth->fetchAll();

        foreach ($products as $product) {
        	$date1 = $product['expires_on'];
        	$date2 = date("Y-m-d");

        	$datetime1 = date_create($date1);
    		$datetime2 = date_create($date2);

        	$interval = date_diff($datetime2, $datetime1);

        	if ($interval->format('%R') == '-'){
					$sql = $link->prepare("UPDATE products SET is_active=0 WHERE id=".$product['id']);
					$sql->execute();
        	}
        }

        $sth = $link->prepare("SELECT * FROM products WHERE is_active=1");
        $sth->execute();
        $products = $sth->fetchAll();


        $this->view('home/products', ['products' => $products, 'resp' => $resp]);

        unset($_SESSION["response"]);
    }

    public function reload($data = '')
    {
        $_SESSION["response"]=$data;
        $newURL = "../products";
        header('Location: ' . $newURL);
        die;
    }

    public function bidBtn(){

    	$link = $this->auctiox_db_connect();
        $sql = $link->prepare('SELECT sellerId, curr_price, next_price FROM products WHERE id='.$_POST['id_post']);

        
        $sql->execute();
        $sql->bind_result($sellerId, $cprice, $nprice);
        $sql->fetch();
        $sql->close();

        if ($sellerId == $_SESSION['userId'])
        	$this->reload('You cannot bid on your own post!');

        $step = intval($nprice) - intval($cprice);
        
        $sql = $link->prepare('UPDATE products SET winnerId='.$_SESSION['userId'].', curr_price='.$nprice.', next_price='
        	.($nprice+$step).' WHERE id='.$_POST['id_post']);

        
        $status = $sql->execute();

        $sql->close();

        mysqli_close($link);
        $this->reload('Bid was successfull...');
    }

}