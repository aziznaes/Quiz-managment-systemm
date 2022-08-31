<?php
    component('header');
    component('navbar');
?>
<div class="container ">
    <div class="row add_post">
        <h3>Contact  Us</h3>
            <form class="col-md-8 col-sm-12 form" method="post" action="<?php echo BASEURL;?>Contact/send" enctype= multipart/form-data>
            <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>  
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="email" class="form-control" id="title" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="title">Subject</label>
                <input type="subject" class="form-control" id="title" name="subject" placeholder="Enter Subject" required>
            </div>
            <div class="form-group">
                    <label for="description">Message</label>
                    <textarea  name="message" class="form-control" id="message" placeholder="Type Your Message..." required></textarea>
                </div>
               <div class="form-group">
                    <button type="submit" name="add_post" class="form_btn btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    

    
<?php component('footer'); ?>