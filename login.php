
<?php include_once('head.php'); ?>
<?php if(isset($_SESSION['user_session'])){header("Location: index.php"); exit();}?>
<?php include_once('header.php'); ?>

<div class="container">
    <div class="form_wrapper">
        <h1 class="title">Login Account</h1>
        <div class="hr"></div>
        <form class="form-signin" method="post" id="login-form"><center>
            <div class="fld_input">
                <label for="email">
                    <input type="text" name="user_username" id="user_username" placeholder="Username" autocomplete="off">
                    <label for="error_username" id="error_username"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="password">
                    <input type="password" name="user_password" id="user_password" placeholder="Password" autocomplete="off">
                    <label for="error_password" id="error_password"></label>
                </label>
            </div>
            <div class="fld_grp">
                <div class="fld_chkbox">
                    <label for="remember-me-2">
                    </label>
                </div>
                <a href="#" class="link">Forgot Password?</a>
            </div>
            <div class="fld_btn">
                <button class="btn btn-secondary btn-login" type="button" value="login">Login</button>
                <label for="for_login" id="for_login"></label>
            </div>
        </form>

        <div class="align-center font-14">
            <span>Not a member yet?</span>
            <a href="register.php" class="link font-14">Sign-up</a>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
