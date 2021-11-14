<?php
if(!isset($_SESSION)){session_start();}
include('includes/header.php'); 
?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
  <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
              <div class="style:padding:20px;">
                  <img src="logo/Logo-Design.png" alt="" width="200px" height="200px"> 
                </div>
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                <?php

                    if(isset($_SESSION['user_status']) && $_SESSION['user_status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['user_status'].' </h2>';
                        unset($_SESSION['user_status']);
                    }
                ?>
              </div>
                <form class="user" action="index.php" method="POST">

                    <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include('includes/scripts.php'); 
?>