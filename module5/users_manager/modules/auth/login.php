<?php
if (!defined('_INCODE')) die('Access deined...');

$data = [
    'pageTitle' => 'Login'
];
layout('headerLogin', $data);
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class='row'>
    <div class='col-6' style="margin: 20px auto">
        <h3 class="text-center">LOGIN</h3>
        <?php getMsg($msg, $msg_type) ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group" style="margin: 10px 0 0 0;">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="d-grid col-6 mx-auto" style="margin: 20px 0 0 0;">
                <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
            </div>
            <hr>
            <p class="text-center"><a href="?module=auth&action=forgot">Forgot password</a></p>
            <p class="text-center"><a href="?module=auth&action=register">Register</a></p>
        </form>
    </div>
</div>
<?php
layout('footerLogin');
