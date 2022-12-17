<?php require_once '../views/partials/header.php'; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Sửa thành viên </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên khách</label>
                                <input type="text" name="user_name" class="form-control" id="exampleInputName1"
                                    placeholder="Name" required value="<?= $user['username'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Địa chỉ email</label>
                                <input type="email" name="user_email" class="form-control" id="exampleInputEmail3"
                                    required placeholder="Email" value="<?= $user['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Mật khẩu</label>
                                <input type="password" name="user_password" class="form-control"
                                    id="exampleInputPassword4" placeholder="Password" required  value="<?= $user['password'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Giới tính</label>
                                <select name="gender" class="form-control" id="exampleSelectGender" required>
                                    <option value="" selected>Choose your gender</option>
                                    <option value="nam" <?= ($user['sex'] == 'nam') ? ' selected' : '' ?> >Nam</option>
                                    <option value="nữ" <?= ($user['sex'] == 'nữ') ? ' selected' : '' ?>>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="user_image" id="">
                                <img src="<?= '../' . $user['image'] ?>" alt="" width="100" height="100" style="object-fit: cover">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Số điện thoại</label>
                                <input type="tel" name="user_tel" class="form-control" id="exampleInputPhoneNumber"
                                    placeholder="Số điện thoại" required  value="<?= $user['phone'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDate">Ngày sinh</label>
                                <input type="date" name="user_birth" class="form-control" id="exampleInputDate"
                                    placeholder="dd/mm/yyyy" required  value="<?= $user['birthday'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-gradient-primary me-2" value="Submit">
                                <button type="button" class="btn btn-light">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2 |
                Quản trị website</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<?php require_once '../views/partials/footer.php'; ?>