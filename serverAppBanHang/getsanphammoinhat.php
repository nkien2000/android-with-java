<?php
include "connect.php";
$mangsanphammoi = array();
$query = "SELECT * FROM sanpham ORDER BY ID DESC LIMIT 6";
$data = mysqli_query($conn,$query);
while($row= mysqli_fetch_assoc($data)){
    array_push($mangsanphammoi,new NewProduct(
        $row['id'],
        $row['tensanpham'],
        $row['giasanpham'],
        $row['hinhanhsanpham'],
        $row['motasanpham'],
        $row['idsanpham']

    ));
}
echo json_encode($mangsanphammoi);
class NewProduct{
    function newproduct($id,$productname,$price,$image,$productdetail,$productid){
            $this->id=$id;
            $this->productname=$productname;
            $this->price=$price;
            $this->image=$image;
            $this->productdetail=$productdetail;
            $this->productid=$productid;
        }
}
?>