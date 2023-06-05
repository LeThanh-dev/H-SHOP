<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function tk_sanpham($id){
        $query = "SELECT count(MaSP) as Count FROM sanpham WHERE MaDM = $id and  TrangThai=1";

        return $this->conn->query($query)->fetch_assoc();
    }

    function tk_sanphamtg($id,$tg1,$tg2){
        $query = "SELECT count(MaSP) as Count FROM sanpham WHERE MaDM = $id  and TrangThai=1 and ThoiGian BETWEEN '$tg1' AND '$tg2'";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tongsanpham(){
        $query = "SELECT count(MaSP) as Count FROM sanpham  WHERE TrangThai=1";

        return $this->conn->query($query)->fetch_assoc();
    }
    

    function tk_sanpham2($id){
        $query = "SELECT SUM(SoLuong) as Count FROM sanpham WHERE MaDM = $id  ";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_sanpham2tg($id, $tg1,$tg2){
        $query = "SELECT SUM(SoLuong) as Count FROM sanpham WHERE MaDM = $id and TrangThai=1 and ThoiGian BETWEEN '$tg1' AND '$tg2' ";

        return $this->conn->query($query)->fetch_assoc();
    }

    function tk_thongbao(){
        $query = "SELECT count(MaHD) as Count FROM HoaDon WHERE TrangThai = 0";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_dtthang($m,$y){
        $query = "SELECT SUM(TongTien) as Count FROM HoaDon WHERE MONTH(NgayGiao) = $m And YEAR(NgayGiao) = $y  And TrangThai = 2";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_dtnam($y){
        $query = "SELECT SUM(TongTien) as Count FROM HoaDon WHERE YEAR(NgayGiao) = $y And TrangThai = 2";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_nguoidung($id){
        $query = "SELECT count(MaND) as Count FROM NguoiDung WHERE MaQuyen = $id";
        
        return $this->conn->query($query)->fetch_assoc();
    }
    function tonkho($tg1,$tg2){
        $query = "SELECT SUM(SoLuong) FROM `sanpham` WHERE TrangThai=1 and ThoiGian BETWEEN '$tg1' AND '$tg2'";
        
        return $this->conn->query($query)->fetch_assoc();
    }
    function tongsanphamtg($tg1,$tg2){
        $query = "SELECT count(MaSP) as Count FROM sanpham  WHERE TrangThai=1 and ThoiGian BETWEEN '$tg1' AND '$tg2' ";

        return $this->conn->query($query)->fetch_assoc();
    }
    function Tongdoanhthu($tg1,$tg2){
        $query = "SELECT SUM(TongTien) as Tong FROM hoadon where TrangThai = 2 and NgayGiao BETWEEN '$tg1' AND '$tg2' ";
        
        return $this->conn->query($query)->fetch_assoc();
    }

    function TongHoaDon($tg1,$tg2){
        $query = "SELECT count(MaHD) as Count FROM hoadon WHERE TrangThai = 2 and NgayGiao BETWEEN '$tg1' AND '$tg2'";

        return $this->conn->query($query)->fetch_assoc();
    }

    function TongThuMua($tg1,$tg2){
        $query = "SELECT count(MaThuMua) as Count FROM thumua  WHERE TrangThai = 2 and ThoiGian BETWEEN '$tg1' AND '$tg2'";

        return $this->conn->query($query)->fetch_assoc();
    }
    function ListThuMua1($tg1,$tg2){
        $query = "select * from thumua where TrangThai = 2 and ThoiGian BETWEEN '$tg1' AND '$tg2'  ORDER BY MaThuMua DESC";

        require("result.php");

        return $data;
    }

    function ListHoaDon1($tg1,$tg2){
        $query = "SELECT  DENSE_RANK() OVER (ORDER BY hoadon.MaHD DESC) AS STT, hoadon.MaHD,sanpham.TenSP,sanpham.HinhAnh1,chitiethoadon.MaSP,chitiethoadon.SoLuong,chitiethoadon.DonGia, hoadon.TongTien, hoadon.TrangThai, hoadon.NgayLap, hoadon.NgayGiao,hoadon.DiaChi FROM `hoadon`,`chitiethoadon`,`sanpham` WHERE hoadon.TrangThai=2 and hoadon.MaHD = chitiethoadon.MaHD and chitiethoadon.MaSP=sanpham.MaSP and hoadon.NgayGiao BETWEEN '$tg1' AND '$tg2' ORDER BY  hoadon.NgayLap DESC";

        require("result.php");
        
        return $data;
    }
    function Tongchi($tg1,$tg2){
        $query = "SELECT SUM(SoLuong*DonGia) as Tong FROM thumua where TrangThai = 2 and ThoiGian BETWEEN '$tg1' AND '$tg2' ";
        
        return $this->conn->query($query)->fetch_assoc();
    }


    function tonkhoAll(){
        $query = "SELECT SUM(SoLuong) FROM `sanpham`";
        
        return $this->conn->query($query)->fetch_assoc();
    }
    function Listtonkho($id,$tg1,$tg2){
        $query = "SELECT * FROM `sanpham` WHERE TrangThai=1 and MaDM=$id and ThoiGian BETWEEN '$tg1' AND '$tg2' ";
        
        require("result.php");
        
        return $data;
    }
    function ListtonkhoAll($id){
        $query = "SELECT * FROM `sanpham` WHERE TrangThai=1 and MaDM=$id ";
        
        require("result.php");
        
        return $data;
    }
    function TongdoanhthuAll(){
        $query = "SELECT SUM(TongTien) as Tong FROM hoadon where TrangThai = 2 ";
        
        return $this->conn->query($query)->fetch_assoc();
    }

    function TongchiAll(){
        $query = "SELECT SUM(SoLuong*DonGia) as Tong FROM thumua where TrangThai = 2 ";
        
        return $this->conn->query($query)->fetch_assoc();
    }

    function TongHoaDonAll(){
        $query = "SELECT count(MaHD) as Count FROM hoadon WHERE TrangThai = 2";

        return $this->conn->query($query)->fetch_assoc();
    }

    function TongThuMuaAll(){
        $query = "SELECT count(MaThuMua) as Count FROM thumua  WHERE TrangThai = 2";

        return $this->conn->query($query)->fetch_assoc();
    }
    function ListThuMua(){
        $query = "select * from thumua where TrangThai = 2  ORDER BY MaThuMua DESC";

        require("result.php");

        return $data;
    }

    function ListHoaDon(){
        $query = "SELECT  DENSE_RANK() OVER (ORDER BY hoadon.MaHD DESC) AS STT, hoadon.MaHD,sanpham.TenSP,sanpham.HinhAnh1,chitiethoadon.MaSP,chitiethoadon.SoLuong,chitiethoadon.DonGia, hoadon.TongTien, hoadon.TrangThai, hoadon.NgayLap, hoadon.NgayGiao,hoadon.DiaChi FROM `hoadon`,`chitiethoadon`,`sanpham` WHERE hoadon.TrangThai=2 and hoadon.MaHD = chitiethoadon.MaHD and chitiethoadon.MaSP=sanpham.MaSP ORDER BY  hoadon.NgayLap DESC";

        require("result.php");
        
        return $data;
    }
}
