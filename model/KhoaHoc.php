<?php
require_once "db.php";
class KhoaHoc extends db
{
    public function getAllKHoaHoc()
    {
        $sql = "SELECT k.idKH, k.tenKH, k.anh, k.gia, k.idDanhMuc FROM khoahoc AS k 
        INNER JOIN danhmuckhoahoc AS d ON k.idDanhMuc = d.idCategory  ";
        return $this->getData($sql);
    }
    public function createKhoaHoc($tenKH, $anh, $gia, $idDanhMuc)
    {

        $sql = "INSERT INTO khoahoc(tenKH, anh, gia, idDanhMuc) 
        VALUES ('$tenKH','$anh','$gia','$idDanhMuc')";
        return $this->getData($sql, false);
    }
    public function getKhoaHocById($idKH)
    {
        $sql = "SELECT * FROM khoahoc WHERE  idKH= '$idKH'";
        return $this->getData($sql, false);
    }
    public function editKhoaHoc($tenKH, $anh, $gia, $idDanhMuc)
    {
        $sql = "UPDATE khoahoc SET tenKH='$tenKH',anh='$anh',gia='$gia',idDanhMuc='$idDanhMuc' WHERE idKH= ?";
        $this->getData($sql, false);
    }
    public function deleteKhoaHoc($idKH)
    {
        $sql = "DELETE FROM khoahoc WHERE idKH = '$idKH'";
        return $this->getData($sql, false);

    }


}