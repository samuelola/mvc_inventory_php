 
 <?php 
 include './../class/controllers/UserController.php';
 include './../helpers/sanitize.php';
 
 if(isset($_GET['edit_id'])){
     $edit_user = $_GET['edit_id'];
     $user = new UserController();
     $get_user_details = $user->editUser($edit_user);

     if(isset($_POST['update_user'])){
        $name = clean_input($_POST['name']);
        $email = clean_input($_POST['email']);
        $id = $get_user_details['id'];
        $update  = $user->updateUser($name,$email,$id);
        if($update){
           header("Location:./index.php");
        }

     }
     
 }
//    echo 'You are Invited to the team "'.dirname($_SERVER['REQUEST_URI'],2).'"' ;
  

 ?>
 <div class="col-md-8">
       <h3>Edit User</h3>  
       <form method="post" action="">
            <label for="">Fullname</label>
            <div class="form-group">
                  <input  type="text" name="name" value="<?php echo isset ($get_user_details['name']) ? $get_user_details['name'] : '' ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" >
            </div>
            <p><?php echo isset($errors['email']) ? $errors['email'] : '' ?></p>
            <label for="">Email</label>
            <div class="form-group mb-4">
                  <input  type="email" name="email" value="<?php echo isset ($get_user_details['email']) ? $get_user_details['email'] : '' ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
            </div>
            <button class="btn btn-primary btn-user btn-block" type="submit" name="update_user">Update User</button> 
      </form>         
</div>