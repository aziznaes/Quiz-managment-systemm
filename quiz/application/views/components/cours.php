<div class="blog col-md-6">
    <div class="blog_image">
        <img src="https://demo.phpjabbers.com/free-web-templates/blog-website-template-176/images/product-1-720x480.jpg" alt="">
    </div>
    <div class="detail">
        <span title="Author"><i class="fa fa-user"></i> John Doe</span><span title="Date"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y h:i',strtotime($row->dttm));?></span>
        <span title="Views"><i class="fa fa-eye"></i> 114</span>
    </div>
    <div class="blog_title">
        <h3><?php echo $row->title; ?></h3>
    </div>
    <div class="blog_btn">
        <button class="btn btn-success">Read More</button>
    </div>
</div>