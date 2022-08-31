<?php
    component('header');
    component('navbar');
?>
    <div class="container post">
        <div class="row">
            <img src="<?php echo BASEURL;?>assets/images/<?php echo $data->image;?>">
        </div>
        <div class="row px-30">
            <h2><?php echo $data->title;?></h2>
        </div>
        <div class="row px-30">
            <p><?php echo $data->contenue;?></p>
        </div>   
    </div>
<style>
    .post{
        margin-top:60px;
        margin-bottom:20px;
        background:#fff;
    }
    .post img{
        padding: 30px;
    width: 100%;
    height: 400px;
    }
    .px-30{
        padding: 0px 30px;
    }
    .post p{
        text-align: justify;
    }
</style>
<?php component('footer'); ?>