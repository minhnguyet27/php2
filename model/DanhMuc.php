<?php
require_once "db.php";
class DanhMuc extends db
{
    public function getAllDanhMuc()
    {
        $sql = "SELECT * FROM danhmuckhoahoc";
        return $this->getData($sql);
    }

}