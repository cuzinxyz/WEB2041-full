<?php
$title = 'Đăng Ký';
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
                    <h4>New here?</h4>
                    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                    <form class="pt-3" action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="register_username"
                                placeholder="Username">
                            <?php if(isset($error['register_username'])): ?>
                            <p class="text-danger">Không được để trống Username</p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" name="register_email"
                                placeholder="Email">
                                <?php if(isset($error['register_email'])): ?>
                                <p class="text-danger">Không được để trống Email</p>
                                <?php endif; ?>

                                <?php
                                if (isset($available)) {
                                    echo '
                                        <p class="text-danger">'.$available.'</p>
                                    ';
                                }
                                ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="register_password"
                                  placeholder="Password">
                            <?php if(isset($error['register_password'])): ?>
                            <p class="text-danger">Không được để trống Password</p>
                            <?php endif; ?>
                            <?php if (isset($notMatch)) {
                                echo '<small class="pt-2"><span class="pl-3 text-danger">Password do not match</span></small>';
                            } ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="register_repassword"
                                  placeholder="Re-Password">
                            <?php if(isset($error['register_repassword'])): ?>
                            <p class="text-danger">Không được để trống Password</p>
                            <?php endif; ?>
                            <?php if (isset($notMatch)) {
                                echo '<small class="pt-2"><span class="pl-3 text-danger">Password do not match</span></small>';
                            } ?>
                        </div>
                        <div class="mb-4">
                            <div class="">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="chi"> I agree to all Terms & Conditions </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <input type="submit" value="SIGN UP"
                                class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                        </div>
                        <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login"
                                class="text-primary">Login</a>
                        </div>
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
