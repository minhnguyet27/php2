<!DOCTYPE html>
<html lang="en">

<head>
    <title>LIST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <iv dclass="text-center">
        <a href="index.php?url=addKhoaHoc"><button type="button" class="my-5 btn btn-primary">
                Tạo mới khóa học
            </button></a>

    </iv>

    <div class="container">
        <h2>Danh sách khóa học</h2>
        <!-- /<p></p> -->
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>Tên Khóa học</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th></th>
                </tr>
            </thead>
            <?php foreach ($listKhoaHoc as $key => $values) { ?>
                <tbody>
                    <tr>
                        <td>
                            <?= $values['tenKH'] ?>
                        </td>
                        <td> <img style="width:100px;height:100px;" src="<?= $values['anh'] ?>" alt="hình ảnh khóa học">
                        </td>
                        <td>
                            <?php echo $values['gia'] ?>
                        </td>
                        <td>
                            <a href="index.php?url=updateKhoaHoc&idKH=<?php echo $values['idKH'] ?>"><button
                                    class="btn btn-warning">Sửa</button></a>
                            <a href="index.php?url=deleteKhoaHoc&idKH=<?php echo $values['idKH'] ?>"
                                onclick="return confirm('Bạn có muốn xóa không?')"><button
                                    class="btn btn-danger">Xóa</button></a>
                        </td>
                    </tr>

                </tbody>
            <?php } ?>
        </table>
    </div>

</body>

</html>