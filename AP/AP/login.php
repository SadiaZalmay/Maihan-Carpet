<?php
  session_start();
	include 'includes/header.php';
?>
	<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-10 col-md-10">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php
      				      if (isset($_SESSION['loginFail']) && $_SESSION['loginFail'] !='') {
      				        echo "<b class='text-danger'>".$_SESSION['loginFail']."</b>";
      				        unset($_SESSION['loginFail']);
      				      }
                    if (isset($_SESSION['changesucces']) && $_SESSION['changesucces'] !='') {
                      echo "<b class='text-success'>".$_SESSION['changesucces']."</b>";
                      unset($_SESSION['changesucces']);
                    }
                    if (isset($_SESSION['changefail']) && $_SESSION['changefail'] !='') {
                      echo "<b class='text-danger'>".$_SESSION['changefail']."</b>";
                      unset($_SESSION['changefail']);
                    }
      				    ?>
                  <form class="user" method="POST" action="logincontrol.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="Email" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="Password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="Login">Login</button>
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
	include 'includes/scripts.php';
?>