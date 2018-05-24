<?php
class Checkout extends Controller
{
    private $itemName="Test";
    private $itemPrice=5;
    private $itemId="ITEM001";
    private $shippingAddress="FII";
    private $buyerId="Me";
    public function index()
    {
        $this->view('home/checkout',['itemName' => $this->itemName,'itemPrice' => $this->itemPrice,'itemId' => $this->itemId,'shippingAddress' => $this->shippingAddress,'buyerId' => $this->buyerId]);
    }


}