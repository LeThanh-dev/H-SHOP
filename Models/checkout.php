<?php
require_once("model.php");
class Checkout extends Model
{
  function save($data){

    $_SESSION['login']['DiaChi']=$_POST['DiaChi'];
    $_SESSION['login']['SDT']=$_POST['SDT'];
    $_SESSION['login']['Ten']=$_POST['NguoiNhan'];
    $_SESSION['login']['Email']=$_POST['Email'];
    $f = "";
    $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO hoadon($f) VALUES ($v);";

   
    
    $status = $this->conn->query($query);

    $query_mahd = "select MaHD from hoadon ORDER BY NgayLap DESC LIMIT 1";
    $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();

    foreach ($_SESSION['sanpham'] as $value) {
        $MaSP =$value['MaSP'];
        $SoLuong = $value['SoLuong'];
        $DonGia = $value['DonGia'];
        $MaHD = $data_mahd['MaHD'];
        $query_ct = "INSERT INTO chitiethoadon(MaHD,MaSP,SoLuong,DonGia) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia)";

        $status_ct = $this->conn->query($query_ct);

        // Giảm số lượng sản phẩm trong bảng sanpham
    $query_sp = "UPDATE sanpham SET SoLuong = SoLuong - $SoLuong WHERE MaSP = $MaSP";
    $status_sp = $this->conn->query($query_sp);
    }

    
    if ($status == true and $status_ct = true) {
        setcookie('msg', 'Đăng ký thành công', time() + 2);
     //   unset($_SESSION['sanpham']);
     
     $giamgia= $_SESSION['giamgia'];
     $query_giamgia = "UPDATE giamgia1 SET TrangThai = 0 WHERE MaGiamGia = '$giamgia'";
     
     
     $status_sp = $this->conn->query($query_giamgia);
        header('location: ?act=checkout&xuli=order_complete');

    } else {
        setcookie('msg', 'Đăng ký không thành công', time() + 2);
        header('location: ?act=checkout');
    }
  }

  function giamgia($id)
  {
      $query =  "SELECT MaGiamGia,GiaTriGiamGia, MoTa from giamgia1 where MaGiamGia = '$id' and TrangThai=1 ";
     
      $result = $this->conn->query($query);
     
      return $result->fetch_assoc();
      
      
 
  }
}