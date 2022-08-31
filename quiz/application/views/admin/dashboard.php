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
            <h3>All Courses</h3>
            <table class="table table-responsiv">
                <thead >
                    <tr>
                        <th scope="col" style="width:10%">#</th>
                        <th scope="col" style="width:10%">Image</th>
                        <th scope="col" style="width:20%">Title</th>
                        <th scope="col" style="width:40%">Content</th>
                        <th scope="col" style="width:20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    if(!empty($data)):
                        foreach($data as $row):
                ?>
                        <tr>
                            <th scope="row"><?php echo $row->cour_id;?></th>
                            <td>
                            <img src="<?php echo BASEURL;?>assets/images/<?php echo $row->image;?>" style="width:100px; height:100px;"></td>
                            <td><?php echo $row->title;?></td>
                            <td><?php echo substr($row->contenue,0,150).'...';?></td>
                            <td>
                            <a target="blank" href="<?php echo BASEURL;?>cours/cour/<?php echo $row->cour_id;?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo BASEURL;?>admin/edit/<?php echo $row->cour_id;?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo BASEURL;?>admin/delete/<?php echo $row->cour_id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
    </div>
    

    
<?php component('footer'); ?>