<?php include('head.php'); ?>
<?php include_once('header.php'); ?>
<?php if(isset($_SESSION['user_session'])){
        header("Location: index.php"); 
        exit();
      }?>

<div class="container">
    <div class="form_wrapper">
        <h1 class="title">Create Account</h1>
        <div class="hr"></div>
        <form class="form-signin" method="post" id="register-form"><center>
            <div class="fld_input">
                <label for="username">
                    <input type="text" name="user_username" id="user_username" placeholder="Username">
                    <label for="user_username" id="error_username"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="email">
                    <input type="text" name="user_email" id="user_email" placeholder="Email Address" >
                    <label for="user_email" id="error_email"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="password1">
                    <input type="password" name="user_password" id="user_password" placeholder="Password" >
                </label>
            </div>
            <div class="fld_input">
                <label for="password1">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" >
                </label>
            </div>
            <div class="fld_btn">
                <button class="btn btn-secondary btn-login" type="button" value="register">Create account</button>
                <label for="for_register" id="for_register"></label>
            </div>
        </form>
    </div>
</div>

<?php include_once('footer.php'); ?>
