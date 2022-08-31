<nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASEURL;?>">
    <img src="<?php echo BASEURL;?>assets/images/logo.png">  
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav ms-auto">
      <?php
          if(isset($_SESSION['ADMIN_ID'])):
        ?>
        <li class="nav-item active">
          <a class="nav-link " href="<?php echo BASEURL;?>admin/Dashboard">Dashboard
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL;?>admin/user_list">Users List</a>
        </li>

      

        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL;?>admin/addcour">Add Courses</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL;?>admin/logout">Logout</a>
        </li>
        <?php endif;?>
      
      </ul>

     
     
    </div>
  </div>
</nav>