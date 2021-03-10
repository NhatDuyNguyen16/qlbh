<?php
$conn =  mysqli_connect('localhost','root','');
if (!$conn){
    die('không thể kết nối'.mysqli_connect_eror());
}
else 'kết nối thành công';
mysqli_select_db($conn,'QLBH');
$sql1 = "select *from loaisanpham";
mysqli_query($conn,"SET MAMES'UTF8'");
$result = mysqli_query($conn,$sql1);
echo "Mã Loại Sản Phẩm- Tên Loại Sản Phẩm- Diển giải</br>";
echo"<table border =1 >";
while($row2 = mysqli_fetch_assoc($result))
{
    echo"<tr>";
    {
    echo"<td>";
    print_r($row2["MaSP"]);
    echo"</td>";
    echo"<td>";
    print_r( $row2["TenSP"]);
    echo"</td>";
    echo"<td>";
    print_r( $row2["DienGiaii"]);
    echo"</td>";
    }
    echo"</tr>";
}
echo"</table>";
mysqli_close($conn);
?>