<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Siêu thị trực tuyến</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/admin.css" />
  <style>
    .tb {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- header -->
    <div class="row mt-4">
      <div class="col-md-4 offset-md-4">
        <h5 class="text-center">CẬP NHẬT TÀI KHOẢN</h5>
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
          extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=edit_taikhoan" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $email ?>" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên tài khoản</label>
            <input type="text" name="user" class="form-control" value="<?= $user ?>" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type="password" name="pass" class="form-control" value="<?= $pass ?>" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="<?= $address ?>" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
            <input type="text" name="tel" class="form-control" value="<?= $tel ?>" />
          </div>
          <input type="hidden" name="id" value="<?= $id ?>">
          <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật"></input>
        </form>
        <br>
        <div class="tb">
          <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>