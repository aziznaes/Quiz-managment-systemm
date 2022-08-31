<?php
    component('header');
    component('admin_navbar');
?>

    <div class="container ">
        <div class="row add_post">
            
            <h3>Update Courses</h3>
            <form class="col-md-8 col-sm-12 form" method="post" action="<?php echo BASEURL;?>admin/update" enctype= multipart/form-data>
            <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>    
            <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo $data->title;?>" required>
                    <input type="hidden" value="<?php echo $data->cour_id;?>" name="cour_id">
                </div>
                <div class="form-group">
                    <label for="contenue">Content</label>
                    <textarea type="password" name="contenue" class="form-control" id="contenue" placeholder="Content" required style="height:200px;">
                    <?php echo $data->contenue; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>
                <div class="form-group">
                <img src="<?php echo BASEURL;?>assets/images/<?php echo $data->image;?>" style="width:200px; height:100px;">
                </div>
                <div class="form-group">
                    <button type="submit" name="edit_post" class="form_btn btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    

    
<?php component('footer'); ?>