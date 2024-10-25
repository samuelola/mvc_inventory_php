<?php

class Userdetails extends User{

    public function allUsers(){
         $get_all = User::getAllUsers();
         return $get_all;
    }
}