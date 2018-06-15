<?php
class Product_Page extends Controller
{

    private $productId;
    private $product;

    public function index($data='')
    {
        if(isset($_SESSION['userId'])==false){
            echo "You must login!";
            die;
        }
        $this->productId = $data;
        $this->get_products_details();
        $this->view('home/product_page',['id' => $data, 'result' => $this->product[0]]);
    }

    public function get_products_details(){
        $link = new DataBase();

        $sth = $link->prepare("SELECT * FROM products WHERE id=:id");
        $sth->bindParam(':id', $this->productId);
        $sth->execute();
        $this->product = $sth->fetchAll();;

    }

}