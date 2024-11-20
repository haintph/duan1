<?php
class ShopController{
    public function index(){
        return view('client.shop.shop');
    }
    public function single(){
        return view('client.shop.single-product');
    }
}