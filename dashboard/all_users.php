          
          <?php
                include "./../class/controllers/UserController.php";
                if(isset($_POST['delete_user'])){
                    $id = $_POST['id'];
                    $user = new UserController();
                    $result = $user->deleteUser($id);
                    if($result){
                        header("Location:./index.php");
                    }
                }
          ?>
          <div class="col-md-8">
            <h3>All Users</h3> 
                  <?php 
                        $users= new Userdetails();
                        $show_users = $users->allUsers();
                    ?>
                 <table class="table table-dark table-striped">
                     <thead>
                         <th>Sn</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Created At</th>
                         <th>Action</th>
                         
                     </thead>
                     <tbody>
                         <?php
                            $sn = 1;
                            foreach($show_users as $user){
                               ?>
                                  <tr>
                                    <td><?php echo $sn++ ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="index.php?edit_user&edit_id=<?php echo $user['id']; ?>">Edit</a> |
                                        <form action="" method="post" style="display:inline">
                                              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                              <input type="submit" name="delete_user" class="btn btn-sm btn-danger" value="Delete">
                                        </form>
                                    </td>
                                  </tr>
                               <?php
                            }

                         ?>
                     </tbody>
                 </table>    
             </div>