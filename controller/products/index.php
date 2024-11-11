<?php
require_once(__DIR__ . '/../../model/pdo.php');


class ProductsController
{
    function listProduct($limit = 10, $offset = 0)
    {
        $sql = "SELECT * FROM products ";

        $products = pdo_query($sql);

        if ($products) {
            return $products;
        } else {
            return [];
        }
    }
}
