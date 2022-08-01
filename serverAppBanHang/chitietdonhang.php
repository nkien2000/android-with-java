<?php
include "connect.php";
$json = $_POST['json'];
$data = json_decode($json,true);
    foreach ($data as $value){
             $madonhang = $value['OrderCode'];
             $masanpham = $value['ProductID'];
             $tensanpham = $value['ProductName'];
             $giasanpham = $value['Price'];
             $soluongsanpham = $value['Number'];
             $query = "INSERT INTO chitietdonhang(id,madonhang,masanpham,tensanpham,giasanpham,soluongsanpham) VALUE (null,'$madonhang','$masanpham',
             '$tensanpham','$giasanpham','$soluongsanpham')";
             $Dta = mysqli_query($conn,$query);
             if ($Dta) {
                 echo "1";
             }else{
                 echo "0";
             }
    }
?>