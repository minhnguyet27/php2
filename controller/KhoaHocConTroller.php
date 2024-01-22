<?php
require_once "model/DanhMuc.php";
require_once "model/KhoaHoc.php";
class KhoaHocController
{
    public function listKhoaHoc()
    {
        $KhoaHoc = new KhoaHoc();
        $listKhoaHoc = $KhoaHoc->getAllKHoaHoc();
        include "view/list.php";
    }
    public function addKhoaHoc()
    {
        $danhmuc = new Danhmuc();
        $listDanhMuc = $danhmuc->getAllDanhMuc();
        include "view/add.php";
    }
    public function addKhoaHocs($tenKH, $anh, $gia, $idDanhMuc)
    {
        $khoaHoc = new Khoahoc();
        // thư mục sẽ được lưu ảnh vào thư mục image

        $targetDir = "public/";
        //Đường dẫn đến file được lưu
        $targetFile = $targetDir . $anh['name'];
        // Tiến hành upload file ảnh
        if (move_uploaded_file($anh['tmp_name'], $targetFile)) {
            $image_url = $targetFile;
        }
        $check = $khoaHoc->createKhoaHoc($tenKH, $image_url, $gia, $idDanhMuc);
        if (!$check) {
            echo '<script>alert("Thêm sản phẩm thành công")</script>';
        }
    }
    public function getOneKhoaHoc($idKH)
    {
        $danhmuc = new Danhmuc();
        $listDanhMuc = $danhmuc->getAllDanhMuc();
        $khoaHoc = new KhoaHoc();
        $oneKH = $khoaHoc->getKhoaHocById($idKH);
        // var_dump($oneKH);
        // die();
        include "view/edit.php";
    }
    public function editKhoaHoc($idKH, $tenKH, $gia, $anh, $idDanhMuc)
    {
        $khoaHoc = new Khoahoc();
        if (!empty($anh)) {
            $targetDir = "public/";
            $targetFile = $targetDir . $anh['name'];
            if (move_uploaded_file($anh['tmp_name'], $targetFile)) {
                $image_url = $targetFile;
            }
        } else {
            // lấy url ảnh hiện tại
            $currentKH = $khoaHoc->getKhoaHocById($idKH);
            $image_url = $currentKH['image_url'];
        }
        $khoaHoc->editKhoaHoc($tenKH, $image_url, $gia, $idDanhMuc);
    }
    public function deleteKhoaHoc($idKH)
    {
        $khoahoc = new KhoaHoc();
        $khoahoc->deleteKhoaHoc($idKH);
        header("Location:index.php");


    }






}