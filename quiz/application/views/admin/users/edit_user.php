<?php
    component('header');
    component('admin_navbar');
?>

    <div class="container ">
        <div class="row add_post">
            
            <h3>Update User</h3>
            <form class="col-md-8 col-sm-12 form" method="POST" action="<?php echo BASEURL;?>admin/updateUser_method">
            <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>    
            <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" value="<?php echo $data->firstname;?>" required>
                    <input type="hidden" value="<?php echo $data->id;?>" name="id">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" value="<?php echo $data->lastname; ?>" required  >
                    
                     
                </div>
                <div class="form-group">
                <label for="role">Role</label>
                    <select name="role" id="role" class="form-control form-control-user" value="<?php echo $data->role;?>">
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                    </select> 
                </div>
                <div class="form-group">
                    <button type="submit" name="edit_user" class="form_btn btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    

    
<?php component('footer'); ?>