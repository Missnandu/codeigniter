<div class="container-fluid">
        <div class='floating-btns right'>
        <a href='<?php echo base_url('admin/team');?>' class='pull-right'>View Team</a>
        </div>
<h1 class="h3 mb-2 text-gray-800"><?php echo $action;?> Team</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php 
                if ($message){
                    echo "<div class='alert alert-info'>".$message."</div>";
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $team_data[0]['id'];?>" name="id" />
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
            <div class="form-group">
                    <label>Profile Photo</label>
                    <input type="file" name="profile_photo" id="profile_photo" class="form-control" />
                    <?php
                    if ($team_data[0]['profile_photo']){
                        echo "<img src='".base_url($team_data[0]['profile_photo'])."'/>";
                    }
                    ?>
            </div>  
            <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" value="<?php echo $team_data[0]['full_name'];?>" id="full_name" class="form-control" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="designation" value="<?php echo $team_data[0]['designation'];?>" id="designation" class="form-control" placeholder="Designation">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="fb_link" value="<?php echo $team_data[0]['fb_link'];?>" id="fb_link" class="form-control" placeholder="Enter Facebook Profile link">
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Linked In</label>
                        <input type="text" name="ln_link" value="<?php echo $team_data[0]['ln_link'];?>" id="ln_link" class="form-control" placeholder="Enter LinkedIn Profile Link ">
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="tw_link" value="<?php echo $team_data[0]['tw_link'];?>" id="tw_link" class="form-control" placeholder="Enter Twtter Profile Link">
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label>About Me</label>
                    <textarea class="form-control" name="about_me" id="about_me" placeholder="Enter About Me"><?php echo $team_data[0]['about_me'];?></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
            </form>
        </div>
    </div>
</div>