<?php

class UserController extends User{
   
      public function editUser($id){
        $user = User::getUser($id);
        return $user;
      }

      public function updateUser($name,$email,$id){
        $user_update = User::update($name,$email,$id);
        return $user_update;
      }

      public function deleteUser($id){
        $user_delete = User::delete($id);
        return $user_delete;
      }
}