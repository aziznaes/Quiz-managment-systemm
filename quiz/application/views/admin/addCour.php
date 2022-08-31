<?php
    component('header');
    component('admin_navbar');
?>

    <div class="container ">
        <div class="row add_post">
            
            <h3>Add Course</h3>
            <form class="col-md-8 col-sm-12 form" method="post" action="<?php echo BASEURL;?>admin/insert" enctype= multipart/form-data>
            <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>    
            <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php if(isset($data['set_input']['title']) && $data['set_input']['title'] != "" ) { echo $data['set_input']['title']; }?>" required>
                    <?php if(isset($data['error_msg']['title']) && $data['error_msg']['title'] != "" ) { echo $data['error_msg']['title']; }?>
                </div>
                <div class="form-group">
                    <label for="contenue">Content</label>
                    <textarea type="password" name="contenue" class="form-control" id="contenue" placeholder="Content" required  style="height:200px;">
                    <?php if(isset($data['set_input']['Content']) && $data['set_input']['Content'] != "" ) { echo $data['set_input']['Content']; }?>
                    </textarea>
                </div>
                <?php if(isset($data['error_msg']['Content']) && $data['error_msg']['Content'] != "" ) { echo $data['error_msg']['Content']; }?>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" required>
                </div>
                <?php if(isset($data['error_msg']['image']) && $data['error_msg']['image'] != "" ) { echo $data['error_msg']['image']; }?>
                <div class="form-group">
                    <button type="submit" name="add_post" class="form_btn btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    

    
<?php component('footer'); ?>