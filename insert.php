<?php
$conn =  mysqli_connect('localhost','root','');
if (!$conn){
    die('không thể kết nối'.mysqli_connect_eror());
}
else 'kết nối thành công';
mysqli_select_db($conn,'QLBH');
$sql1 = "insert into loaisanpham values('LSP006','Màng hình','các sản phảm màng hình')";
mysqli_query($conn,"SET MAMES'UTF8'");
$result = mysqli_query($conn,$sql1);
if(mysqli_query($conn, $sql1))
{
    echo"insert thành công";
}else echo"insert không thành công";
mysqli_close($conn);
?>