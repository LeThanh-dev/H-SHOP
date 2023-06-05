<?php
require_once("model.php");
class Thumua extends Model
{
    var $table = "thumua";
    var $contens = "MaThuMua";
    var $contens1 = "TrangThai";
     var $table1 = "sanpham";
    var $contens2 = "MaThuMua";
    function list($id){
        $query = "select * from thumua where TrangThai = $id  ORDER BY MaThuMua DESC";

        require("result.php");

        return $data;
    }

    function xuathoadon($id){
        $query = "select thumua.*,nguoidung.* from thumua, nguoidung where thumua.MaThuMua = $id and thumua.MaND= nguoidung.MaND";
       
        require("result.php");
        
        return $data;
    }
    
}