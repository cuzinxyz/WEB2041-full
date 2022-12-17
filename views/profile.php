<?php
$title = 'Settings';
require_once '../views/partials/header.php';
?>

<div class="container rounded bg-white mt-5 mb-5">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <input type="file" name="image" id="upload"
                        oninput="pic.src=window.URL.createObjectURL(this.files[0])" hidden />
                    <label for="upload" style="cursor:pointer">
                        <img id="pic" class="rounded-circle mt-5" width="150px" height="150px" style="object-fit: cover"
                            src="<?php
                                                                                                                                if ($user['image'] != null) {
                                                                                                                                    echo $user['image'];
                                                                                                                                } else {
                                                                                                                                    echo 'https://i.pravatar.cc/150';
                                                                                                                                } ?>" />
                    </label>
                    <span class="font-weight-bold"><?= $_SESSION['username'] ?></span>
                    <span class="text-black-50"><?= $user['email'] ?></span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text"
                                class="form-control" placeholder="user name" readonly
                                value="<?= $_SESSION['username'] ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                class="form-control" placeholder="enter phone number" name="phone"
                                value="<?= $user['phone'] ?>">
                        </div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                class="form-control" placeholder="enter email id" name="email"
                                value="<?= $user['email'] ?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Gender</label>
                            <select id="inputGender" name="gender" class="form-control">
                                <option value="">Choose gender...</option>
                                <option value="nam" <?php if ($user['sex'] == 'nam') {
                                                        echo ' selected';
                                                    } ?>>Nam
                                </option>
                                <option value="nữ" <?php if ($user['sex'] == 'nữ') {
                                                        echo ' selected';
                                                    } ?>>Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Date of birth</label>
                            <input type="date" name="birthday" id="" class="form-control"
                                value="<?= $user['birthday'] ?>">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <!-- <button class="btn btn-primary profile-button" type="button">Save Profile</button> -->
                        <input type="submit" value="Save Profile" class="btn btn-primary profile-button">
                    </div>
                </div>
                <!-- here  -->
                <?php
                if (isset($_GET['success'])) {
                    echo '
                        <div class="alert alert-success" role="alert">
                            Update Success!
                        </div>
                    ';
                }
                ?>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Change
                            Password</span>
                        <span class="border px-3 p-1 add-experience" onclick="window.location.href='/'"><i
                                class="fa fa-plus"></i>&nbsp; Cancel</span>
                    </div><br>
                    <div class="col-md-12"><label class="labels">New Password</label><input type="password"
                            class="form-control" placeholder="enter password" name="newpassword" value="">
                    </div> <br>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="password"
                            class="form-control" placeholder="repeat password" name="newrepassword" value="">
                    </div>
                    <div class="col-md-12">
                        <?php if (isset($error['newpass'])) : ?>
                        <p class="text-danger">Password don't match</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
require_once '../views/partials/footer.php';
?>