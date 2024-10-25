
<?php include "./header.php" ?>      
      <div class="container">
          <div class="row">
            
          <h2>Welcome <?php echo $_SESSION['username']; ?> to Dashboard</h2>
             <div class="col-md-2"></div>
               <?php 
                  if($_SERVER['REQUEST_URI'] == '/mvc_inventory_system/dashboard/index.php'){
                     include "./all_users.php";
                  }
                  if(isset($_GET['edit_user'])){
                     include "./edit_user.php";
                  }
                  
               ?>
             <div class="col-md-2"></div>
          </div>
      </div>
      
<?php include "./footer.php" ?>