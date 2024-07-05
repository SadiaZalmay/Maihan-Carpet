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
                    <h1 class="h4 text-gray-900 mb-4"> Change Password</h1>
                  </div>
                 
                  <form class="user" method="POST" action="changepasswordcontrol.php">
                     <div class="form-group">                   
                      <input type="password" class="form-control form-control-user"  name="OldPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">                   
                      <input type="password" class="form-control form-control-user"  name="NewPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">                   
                      <input type="password" class="form-control form-control-user"  name="ConfirmPassword" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="change">Change</button>
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