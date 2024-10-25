<div class="card o-hidden border-0 shadow-lg my-5">

          <div class="card-body p-0" >
            <!-- Nested Row within Card Body -->
            <?php  
               include "./class/dbh.php";
               include "./class/model/User.php";
               include "./class/controllers/LoginController.php";
               include "./helpers/sanitize.php";
               if(isset($_POST['login_user'])){
                  $email = clean_input($_POST['email']);
                  $password = $_POST['password'];
                  $errors = [];
                  if(empty($email)){
                        $errors['email'] = "<p class='text-danger'>Email field is required!</p>";
                   }
                   if(empty($password)){
                        $errors['password'] = "<p class='text-danger'>Password field is required!</p>";
                   }
                   if(empty($errors)){

                       $userObject = new LoginController();
                       $userObject->logUser($email,$password);
                   }
                 
                   
              }
            ?>

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="./images/tok.png" alt=""></div>
              <!-- <div class="col-lg-6"></div> -->
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Here !</h1>
                  </div>
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
                  
                    <div class="form-group">
                      <input  type="email" name="email" value="<?php echo isset ($email) ? $email : '' ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      <p><?php echo isset($errors['email']) ? $errors['email'] : '' ?></p>
                    </div>
                    <div class="form-group">
                      <input type="password" value="<?php echo isset ($password) ? $password : '' ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password ..." name="password">
                      <p><?php echo isset($errors['password']) ? $errors['password'] : '' ?></p>
                    </div>
                   
                    <button class="btn btn-primary btn-user btn-block" type="submit" name="login_user">Login</button>
                   
                  </form>
                  <hr>
                    <a href="<?php echo htmlspecialchars ('index.php?register'); ?>">Register here</a>
                </div>
              </div>
            </div>
          </div>
        </div>