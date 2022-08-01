<?php
include "connect.php";
$query = "SELECT * FROM loaisanpham";
$data = mysqli_query($conn,$query);
$mangloaisp = array();
while($row = mysqli_fetch_assoc($data)){
    array_push($mangloaisp,new DeviceType(
        $row['id'],
        $row['tenloaisanpham'],
        $row['hinhanhloaisanpham']
    ));

}
echo json_encode($mangloaisp);
class DeviceType{
    function devicetype($id,$devicetypename,$image){
        $this->id=$id;
        $this->devicetypename=$devicetypename;
        $this->image=$image;
    }
}

?>