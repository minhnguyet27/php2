<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Khóa Học</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Thêm Khóa Học</h2>
        <form action="index.php?url=addKhoaHoc" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="id_danh_muc" class="form-label">Danh Mục</label>
                <select class="form-select" name="idDanhMuc">
                    <?php foreach ($listDanhMuc as $value) { ?>
                        <option value="<?= $value["idCategory"] ?>">
                            <?= $value["nameCategory"] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="ten_khoa_hoc" class="form-label">Tên Khóa Học</label>
                <input type="text" class="form-control" name="tenKH" placeholder="Nhập Tên Khóa Học">
            </div>

            <div class="mb-3">
                <label for="hinh_anh" class="form-label">Hình Ảnh</label>
                <input type="file" class="form-control" name="anh">
            </div>

            <div class="mb-3">
                <label for="gia" class="form-label">Giá</label>
                <input type="number" class="form-control" name="gia" placeholder="Nhập Giá Khóa Học">
            </div>
            <div>
                <button type="submit" class="btn btn-warning" name="submit">Lưu</button>
                <a href="index.php?url=/" class="btn btn-primary">Danh sách</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>