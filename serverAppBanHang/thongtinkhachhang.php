<?php
include "connect.php";
$tenkhachhang = $_POST['customername'];
$sodienthoai = $_POST['phonenumber'];
$email = $_POST['email'];
if (strlen($tenkhachhang)>0 && strlen($sodienthoai)>0 && strlen($email)>0 ) {
    $query = "INSERT INTO donhang(id,tenkhachhang,sodienthoai,email) VALUES (null,'$tenkhachhang','$sodienthoai','$email')";
    if(mysqli_query($conn,$query)){
        $iddonhang = $conn->insert_id;
        echo $iddonhang;
    }else{
        echo "that bai";
    }
}else{
    echo "ban kiem tra lai du lieu";
}
?>