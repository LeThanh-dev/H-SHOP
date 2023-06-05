<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "hoadon";
    var $contens = "MaHD";
    function trangthai($id){
        $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function chitiethoadon($id){
        $query = "SELECT DISTINCT (hoadon.MaHD),sanpham.TenSP,sanpham.HinhAnh1,chitiethoadon.MaSP,chitiethoadon.SoLuong,chitiethoadon.DonGia, hoadon.TongTien, hoadon.TrangThai, hoadon.PhuongThucTT,hoadon.NgayLap, hoadon.NgayGiao,hoadon.DiaChi FROM `hoadon`,`chitiethoadon`,`sanpham` WHERE MaND=$id and hoadon.MaHD = chitiethoadon.MaHD and chitiethoadon.MaSP=sanpham.MaSP ORDER BY  hoadon.NgayLap DESC";

        require("result.php");
        
        return $data;
    }
    function chitietthumua($id){
        $query = "SELECT * FROM `thumua` WHERE MaND=$id";

        require("result.php");
        
        return $data;
    }
    function xoahoadon($id){
        $query1= "SELECT MaSP,SoLuong FROM `chitiethoadon` WHERE MaHD=$id";
        $kq = $this->conn->query($query1);
        foreach($kq as $row)
        {
            $sl=$row['SoLuong'];
            $sp= $row['MaSP'];
            $update= "UPDATE `sanpham` SET SoLuong = SoLuong+$sl WHERE MaSP=$sp";
            $this->conn->query($update);
          
        }

        $query = "DELETE  FROM `hoadon` WHERE MaHD=$id";
       
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Hủy đơn hàng thành công', time() + 2);
        } else {
            setcookie('msg1', 'Hủy đơn hàng không thành công', time() + 2);
        }
        header('Location: ?act=history');
    }

}