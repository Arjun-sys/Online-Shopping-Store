<?php
include ("header.php");
include("../db.php");
$flag=0;
if(isset($_POST['btn_save']))
{

$Name=$_POST['Name'];
$Email=$_POST['Email'];


$result=mysqli_query($con,"insert into add_user(Name,Email) values ('$Name','$Email')") 
			or die ("Query 1 is inncorrect........");
      if($result)
      {
        $flag=1;
      }

mysqli_close($con);
}


?>
<?php if($flag){?>
  <div class="alert alert-success">User Successfully Inserted</div>
<?php }?>
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
             
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                  
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="Name" id="Name"  class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="Email" id="Email" class="form-control" required>
                        </div>
                      </div>
                   
                
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right"> Save User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>