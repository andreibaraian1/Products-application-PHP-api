<?php
include './Controller/Product/Product.php';
header("Access-Control-Allow-Origin: https://scandiweb-self.vercel.app");
header("Access-Control-Allow-Headers: https://scandiweb-self.vercel.app");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$id = $_GET['id'];
$Product = new Product();
$result = $Product->deleteProduct($id);
echo ($id . ' Deleted');
?>