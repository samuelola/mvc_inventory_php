<?php include './includes/auth_page/header.php' ?>
         <!--form-->

         <?php 
            if($_SERVER['REQUEST_URI'] == '/mvc_inventory_system/index.php' || $_SERVER['REQUEST_URI'] == '/mvc_inventory_system/') {
                 include './login.php';
             }
             if(isset($_GET['register'])){
                 include './register.php';
             }

            
         ?>

        <!--end form-->
<?php include './includes/auth_page/footer.php' ?>   