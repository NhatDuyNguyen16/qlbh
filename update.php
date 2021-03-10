<?php
$conn =  mysqli_connect('localhost','root','');
if (!$conn){
    die('không thể kết nối'.mysqli_connect_eror());
}
else 'kết nối thành công';
mysqli_select_db($conn,'QLBH');
$sql1 = "update loaisanpham set DienGiaii = 'các sản phẩm laptop' where MaSP ='LSP001'";
mysqli_query($conn,"SET MAMES'UTF8'");
$result = mysqli_query($conn,$sql1);
if(mysqli_query($conn, $sql1))
{
    echo"update thành công";
}else echo"update không thành công";
mysqli_close($conn);
?>