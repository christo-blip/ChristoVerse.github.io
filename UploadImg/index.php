<?php
include 'processForm.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Preview and Upload PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
    
    <div>
     <br>   
    <div class="container" style="border:1px solid green">
        <p class="text-right" style="text-align:right;margin-bottom:auto;">
        <button type="button" class="btn btn-warning" action="index.php">Messages</button>
        </p>
    </div>    
    </div>
    
<div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <form action="index.php" method="post" autocomplete="off"
                enctype="multipart/form-data">
                
 <h3 class="text-center">Upload your Project</h3>

   <?php
   if(!empty($msg)):
   ?>             
                <div class="alert <?php echo $css_class; ?>">
    <?php echo $msg;?>            
   </div>
   <?php endif;?>             

   <div class="form-group">
             
   <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label for="theme">Theme</label>
                    <select size='0' name="theme" id="theme" class="form-control" required>
                        <option>Design</option>
                        <option>Art</option>
                        <option>Webpage</option>
                    </select>
                    
                    </div>

                    <div class="form-group">
                    <label for="title">Link</label>
                    <input type="text" name="link" id="link" class="form-control" required>
                    </div>

   <div class="form-group">
                        <label for="bio">Description</label>
                        <textarea name="desc" id='desc' 
                        class='form-control' required></textarea>
                    </div>


                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    </div>
                        <br>
                    <div class="form-group">
                        <button type="submit" name="save-user" class="btn 
                        btn-primary btn-block">Save User</button>

                        <a  href="http://localhost/portfolio/index.php" name="save-user" class="btn 
                        btn-primary btn-block">Back</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>