
<?php include_once('head.php'); ?>
<div class="container">
    <div class="form_wrapper">
        <h1 class="title">Login Account</h1>
        <div class="hr"></div>
        <form class="form-signin" method="post" id="login-form"><center>
            <div class="fld_input">
                <label for="email">
                    <input type="text" name="user_username" id="user_username" placeholder="Username" autocomplete="off">
                    <span class="label visually-hidden">Username</span>
                </label>
            </div>
            <div class="fld_input">
                <label for="password">
                    <input type="password" name="user_password" id="user_password" placeholder="Password" autocomplete="off">
                    <span class="label visually-hidden">Password</span>
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
            </div>
        </form>

        <div class="align-center font-14">
            <span>Not a member yet?</span>
            <a href="#" class="link font-14">Sign-up</a>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
