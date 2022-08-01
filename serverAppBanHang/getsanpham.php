<?php
include "connect.php";
$page = $_GET['page'];
	$idsp = $_POST['productid'];
	$space = 5;
	$limit = ($page - 1) * $space;
	$mangsanpham = array();
$query = "SELECT * FROM sanpham WHERE idsanpham = $idsp";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
    array_push($mangsanpham,new Product(
        $row['id'],
        $row['tensanpham'],
        $row['giasanpham'],
        $row['hinhanhsanpham'],
        $row['motasanpham'],
        $row['idsanpham']
    ));
}
echo json_encode($mangsanpham);
class Product{
    function product($id,$productname,$price,$image,$productdetail,$productid){
        $this->id=$id;
        $this->productname=$productname;
        $this->price=$price;
        $this->image=$image;
        $this->productdetail=$productdetail;
        $this->productid=$productid;
    }
}
?>