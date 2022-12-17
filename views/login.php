<?php
$title = 'Đăng Nhập';
$cssAdd = '
<link rel="stylesheet" href="../assets/vendor/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../assets/vendor/css/style.css">
';
require_once '../views/partials/header.php';
?>

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                        <span class="text-logo">X-SHOP</span>
                    </div>
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">Sign in to continue.</h6>
                    <form class="pt-3" action="" method="POST">
                        <div class="form-group">
                            <input type="email" name="login_email" class="form-control form-control-lg"
                                placeholder="Email address" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">
                            <?php if(isset($error['login_email'])): ?>
                            <p class="text-danger">Không được để trống Email</p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="login_password" class="form-control form-control-lg"
                                placeholder="Password">
                            <?php if(isset($error['login_password'])): ?>
                            <p class="text-danger">Không được để trống Password</p>
                            <?php endif; ?>
                        </div>
                        <div class="mt-3">
                            <input type="submit" value="SIGN IN"
                                class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                        </div>
                        <div class="my-4 d-flex justify-content-between align-items-center">
                            <label class="form-check-label text-muted">
                                <input type="checkbox" class="chi"> Keep me signed in </label>
                            <a href="#" class="auth-link text-fashe">Forgot password?</a>
                        </div>

                        <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register"
                                class="text-primary">Create</a>
                        </div>
                        <?php if (isset($_SESSION['successRegister'])) : ?>
                        <div class="alert alert-success mt-4" role="alert">
                            Đăng Ký Thành Công!
                        </div>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['faild'])) : ?>
                        <div class="alert alert-danger mt-4" role="alert">
                            Sai tài khoản hoặc mật khẩu!
                        </div>
                        <?php unset($_SESSION['faild']); endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>

<?php
require_once '../views/partials/footer.php';
?>
