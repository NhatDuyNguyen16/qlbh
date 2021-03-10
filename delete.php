<?php
$conn =  mysqli_connect('localhost','root','');
if (!$conn){
    die('không thể kết nối'.mysqli_connect_eror());
}
else 'kết nối thành công';
mysqli_select_db($conn,'QLBH');
$sql1 = "delete from loaisanpham where MaSP='LSP006'";
mysqli_query($conn,"SET MAMES'UTF8'");
$result = mysqli_query($conn,$sql1);
if(mysqli_query($conn, $sql1))
{
    echo"delete thành công";
}else echo"delete không thành công";
mysqli_close($conn);
?>