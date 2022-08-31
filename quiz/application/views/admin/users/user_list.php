<?php
    component('header');
    component('admin_navbar');
?>

    <div class="container ">
         
        <div class="row add_post">
        <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>
            <h3>All users</h3>
            <div class="row">
            <div class="col-sm-3">
            <a class="btn btn-xs btn-success" href="<?php echo BASEURL;?>admin/addUser">Add User</a>
            </div>
            </div>
            <table class="table table-responsiv">
                <thead >
                    <tr>
                        <th scope="col" style="width:10%">#</th>
                        <th scope="col" style="width:10%">FirstName</th>
                        <th scope="col" style="width:20%">LastName</th>
                      
                        <th scope="col" style="width:40%">Role</th>
                        <th scope="col" style="width:20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    if(!empty($data)):
                        foreach($data as $row):
                ?>
                        <tr>
                            <th scope="row"><?php echo $row->id;?></th>
                                    <td><?php echo $row->firstname;?></td>
                                    <td><?php echo $row->lastname;?></td>
                                    <td><?php echo $row->role;?></td>
                                    <td>
                                    
                                        <a href="<?php echo BASEURL;?>admin/editUser/<?php echo $row->id;?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo BASEURL;?>admin/delete_user/<?php echo $row->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                        </tr>
                    <?php 
                        endforeach;

                        else:
                    ?>
                    <tr>
                        <td colspan="5" style="text-align:center;"><h3>
                        No Record Avaiable
                        </h3></td>
                    </tr>
                    <?php        
                        endif;
                    ?>
                </tbody>
            </table>
        </div>

 
    
<?php component('sidebarAdmin',$data); ?>
    
<?php component('footer'); ?>