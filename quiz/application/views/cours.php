<?php
    component('header');
    component('navbar');
    component('hero');
?>
    <div class="container">
        <div class=" blog_section">
            <div class="row">
                <div class="col-md-9">
                
                    <div class="row single_blog">
                    <?php 
                        if(!empty($data)):
                            foreach($data as $row):?>
                            <div class="blog col-md-6">
                                <div class="blog_image">
                                    <img src="<?php echo BASEURL;?>assets/images/<?php echo $row->image;?>" alt="">
                                </div>
                                
                                <div class="blog_title">
                                    <h3><?php echo substr($row->title,0,70).'...'; ?></h3>
                                </div>
                                <div class="blog_btn">
                                    <a href="<?php echo BASEURL;?>cours/cour/<?php echo $row->cour_id;?>"><button class="btn btn-success">Read More</button></a>
                                </div>
                            </div>  

                        <?php endforeach;
                            else:
                        ?>
                        <h3 class="text-center">No Record Avaiable </h3>
                        <?php        
                                endif;
                            ?>
                    </div>

                </div>
                <?php component('sidebar',$data); ?>
            </div>   
        </div>
    </div>
<?php component('footer'); ?>