<?php
require_once("connection.php");
include_once('../Mail/sendmail.php');
class Model
{
    var $conn;
    var $table;
    var $contens;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;

    }
    function All()
    {
        $query = "select * from $this->table ORDER BY $this->contens DESC ";

        require("result.php");

        return $data;
        
    }
    function All1()
    {
        $query = "select * from $this->table ORDER BY $this->contens1 ASC ";

        require("result.php");

        return $data;
        
    }
    function find($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from $this->table where $this->contens=$id";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod=' . $this->table);
    }
    function store($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Thêm mới không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=add');
        }
    }
    function store1($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table1($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod=' . $this->table1);
        } else {
            setcookie('msg', 'Thêm mới không thành công', time() + 2);
            header('Location: ?mod=' . $this->table1 . '&act=add');
        }
    }
    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('msg', 'Thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }
     function updateMK($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
           
        }
        $v = trim($v, ",");
         

        $query = "UPDATE $this->table SET  $v   WHERE $this->contens1 = '" . $data[$this->contens1]."'";

        
        $result = $this->conn->query($query);
        
        if ($result == true) {
             
               $email= $data['Email'];
                $mk= $data['MatKhau'];
            sendmail($email,$mk);
            setcookie('msg', 'Thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Không thành công', time() + 2);
           // header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }
}
