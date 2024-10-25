<?php 

if(isset($_POST['delete_user'])){
    include "./../class/controllers/UserController.php";
   $id = $_POST['id'];
   echo $id;
//    $user = new UserController();
//    $result = $user->deleteUser($id);
//    echo $result;
//    if($result){
//       header("Location:./index.php");
//    }
}