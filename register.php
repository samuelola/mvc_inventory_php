<div class="card o-hidden border-0 shadow-lg my-5">
  
          <div class="card-body p-0" >
            <!-- Nested Row within Card Body -->
            <?php 
            include "./class/dbh.php";
            include "./class/model/User.php";
            include "./class/controllers/RegisterController.php";
            include "./helpers/sanitize.php";
              if(isset($_POST['reg_user'])){
                  $name = clean_input($_POST['name']);
                  $email = clean_input($_POST['email']);
                  $password = $_POST['password'];


                  $errors = [];
                  
                  if(empty($name)){
                        $errors['name'] = "<p class='text-danger'>Name field is required!</p>";
                   }
                  if(empty($email)){
                        $errors['email'] = "<p class='text-danger'>Email field is required!</p>";
                   }
                   if(empty($password)){
                        $errors['password'] = "<p class='text-danger'>Password field is required!</p>";
                   }
                   if(empty($errors)){

                       $userObject = new RegisterController();
                       $userObject->regUser($name,$email,$password);
                   }
                 
                   
              }

              
            ?>

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="./images/tok.png" alt=""></div>
              <!-- <div class="col-lg-6"></div> -->
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register Here !</h1>
                  </div>
                  
                  <form method="post" action="<?php echo htmlspecialchars("index.php?register");  ?>">
                    <div class="form-group">
                      <input  type="text" name="name" value="<?php echo isset ($name) ? $name : '' ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your FullName">
                      <p><?php echo isset($errors['name']) ? $errors['name'] : '' ?></p>
                    </div>
                    <div class="form-group">
                      <input  type="email" name="email" value="<?php echo isset ($email) ? $email : '' ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      <p><?php echo isset($errors['email']) ? $errors['email'] : '' ?></p>
                    </div>
                    <div class="form-group">
                      <input type="password" value="<?php echo isset ($password) ? $password : '' ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password ..." name="password">
                      <p><?php echo isset($errors['password']) ? $errors['password'] : '' ?></p>
                    </div>
                   
                    <button class="btn btn-primary btn-user btn-block" type="submit" name="reg_user">Register</button>
                   
                  </form>
                  <hr>
                    <a href="<?php echo htmlspecialchars ('index.php'); ?>">Login here</a>
                </div>
              </div>
            </div>
          </div>
        </div>