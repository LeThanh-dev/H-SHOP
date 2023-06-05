<?php
require_once("model.php");
class Cart extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from SanPham where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    function giamgia($id)
    {
        $query =  "SELECT MaGiamGia,GiaTriGiamGia, MoTa from giamgia1 where MaGiamGia = '$id' and TrangThai=1 ";
       
        $result = $this->conn->query($query);
       
        return $result->fetch_assoc();
        
        
   
    }

    function SoluongSP($id)
    {
        $query =  "SELECT SoLuong, TenSP from sanpham where MaSP = '$id' and TrangThai=1 ";
       
        $result = $this->conn->query($query);
       
        return $result->fetch_assoc();
        
        
   
    }
}