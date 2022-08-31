<div class=" center search">
            <div class="form">
                <form action="<?php echo BASEURL;?>admin/search_user" method="post">
                    <div class="form-group">
                        <label class="control-label">Users Search</label>

                        <div class="input-group">
                                <input type="text" name="keyword" autocomplete="off" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Go!</button>
                                </span>
                        </div>
                    </div>
                </form>
            </div>

            <label class="control-label">Find user By Search Keywords</label>
            <ul class="list">
            <?php 
                if(!empty($data)):
                    foreach($data as $row):?>
                        <li><a href="<?php echo BASEURL;?>admin/editUser/<?php echo $row->id;?>"><?php echo $row->firstname; ?></a></li>
                    <?php 
                        endforeach;
                        else:
                    ?>
                <li class="text-center">No Users Avaiable </li>
            <?php        
                endif;
            ?> 
            </ul>
        </div>
        </div> 
 