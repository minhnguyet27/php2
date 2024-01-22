<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sửa Khóa Học</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Sửa Khóa Học</h2>
        <form action="index.php?url=editKH&idKH=<?= $idKH; ?>" method="POST" enctype="multipart/form-data">


            <input type="hidden" name="idKH" value="<?= $oneKH['idKH'] ?>">

            <div class="mb-3">
                <label for="idCategory" class="form-label">Danh Mục</label>
                <select class="form-select" name="idCategory">
                    <?php foreach ($listDanhMuc as $valueDM) { ?>
                        <option <?php if ($valueDM["nameCategory"] == $valueDM['nameCategory'])
                        ?> $valueDM="<?php echo $valueDM["idCategory"] ?>" selected>
                            <?php echo $valueDM["nameCategory"] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tenKH" class="form-label">Tên Khóa Học</label>
                <input type="text" class="form-control" name="tenKH" placeholder="Nhập Tên Khóa Học"
                    value="<?= $oneKH['tenKH'] ?>">
            </div>

            <div class="mb-3">

                <label for="anh" class="form-label">Hình Ảnh</label><br>
                <center><img src="<?= $oneKH["anh"] ?>" alt="Hình ảnh sản phẩm 1" style="width: 260px; height:160px;">
                </center><br>
                <input type="file" class="form-control" name="anh">
            </div>

            <div class="mb-3">
                <label for="gia" class="form-label">Giá</label>
                <input type="number" class="form-control" name="gia" placeholder="Nhập Giá Khóa Học"
                    value="<?= $oneKH['gia'] ?>">
            </div>


            <div>
                <a href=""> <button type="submit" class="btn btn-primary" name="update">Lưu</button></a>
                <a href="index.php?url=/" class="btn btn-warning">Danh sách</a>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>