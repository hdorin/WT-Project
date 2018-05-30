<?php
class Checkout extends Controller
{
    private $productTitle;
    private $productDesc;
    private $productPrice=5;
    private $productId;
    private $orderId;
    private $shippingAddress;
    private $buyerId;
    private $imagePath;
    public function index($data='')
    {
        if(isset($_SESSION['userId'])==false){
            echo "You must login!";
            die;
        }
        $this->orderId=$data;
        $this->get_order_details();
        $this->get_product_details();
        $this->get_image_path();
        $this->view('/home/checkout',['productTitle' => $this->productTitle,'productDesc' => $this->productDesc,'productPrice' => $this->productPrice,'productId' => $this->productId,'shippingAddress' => $this->shippingAddress,'buyerId' => $this->buyerId, 'imagePath' => $this->imagePath]);
    }
    public function get_image_path(){
        $link = $this->auctiox_db_connect();
 
        $sql = $link->prepare('SELECT image_path FROM images WHERE prod_id=?');
        $sql->bind_param('s', $this->productId); 
        $sql->execute();
        $sql->bind_result($aux);
        $sql->fetch();
        mysqli_close($link);
        $this->imagePath="../resources/images/" . $aux;
    }
    public function get_product_details(){
        $link = $this->auctiox_db_connect();
 
        $sql = $link->prepare('SELECT title,description FROM products WHERE id=?');
        $sql->bind_param('s', $this->productId); 
        $sql->execute();
        $sql->bind_result($this->productTitle,$this->productDesc);
        $sql->fetch();
        mysqli_close($link);
        
    }
    public function get_order_details(){
        $link = $this->auctiox_db_connect();
 
        $sql = $link->prepare('SELECT user_id,adress,total,prod_id FROM orders t1 JOIN order_prod t2 ON t1.id=t2.order_id WHERE t1.id=?');
        $sql->bind_param('s', $this->orderId); 
        $sql->execute();
        $sql->bind_result($this->buyerId,$this->shippingAddress,$this->productPrice,$this->productId);
        $sql->fetch();
        if($this->buyerId!=$_SESSION['userId']){
            echo "You can't access this!";
            die;
        }
        mysqli_close($link);
        
    }


}