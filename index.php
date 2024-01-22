<?php
require_once "controller/KhoaHocConTroller.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $KH = new KhoaHocController();
        $KH->listKhoaHoc();
        break;
    case 'addKhoaHoc':
        $KH = new KhoaHocController();
        $DM = new KhoaHocController();
        $DM->addKhoaHoc();
        if (isset($_POST['submit'])) {
            $KH->addKhoaHocs($_POST['tenKH'], $_FILES['anh'], $_POST['gia'], $_POST['idDanhMuc']);
        }
        break;
    case 'updateKhoaHoc':
        $KH = new KhoaHocController();
        if (isset($_GET['idKH']) && $_GET['idKH'] > 0) {
            $KH->getOneKhoaHoc($_GET['idKH']);
            if (isset($_POST['update'])) {
                $idKH = $_GET['idKH'];
                $tenKH = $_POST['tenKH'];
                $anh = $_FILES['anh'];
                $gia = $_POST['gia'];
                $idDanhMuc = $_POST['idDanhMuc'];
                // echo "đã cập nhật";
                // $KH->getOneKhoaHoc($_GET['idKH']);
                $KH->editKhoaHoc($idKH, $tenKH, $gia, $anh, $idDanhMuc);

            }
        }
        // $KH->editKhoaHoc(null, $_POST['tenKH'], $_POST['gia'], $_FILES['anh'], $_POST['idDanhMuc']);
        break;
    case 'deleteKhoaHoc':
        $KH = new KhoaHocController();
        if (isset($_GET['idKH']) && $_GET['idKH'] > 0) {
            $KH->deleteKhoaHoc($_GET['idKH']);
        }




        break;
    default:
        echo "404";
        break;
}