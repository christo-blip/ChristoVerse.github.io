<?php
$msg = "";
$css_class="";
$conn = mysqli_connect('localhost','root','','portfolio');
 if(isset($_POST['save-user'])){
    //echo "<pre>",print_r($_POST['theme']),"</pre>";
    $title = $_POST['title'];
    $theme= $_POST['theme'];
    $link= $_POST['link'];    
        $desc = $_POST['desc'];
    $projectImage = time() .'-'.$_FILES['image']['name'];

    $target = 'images/' . $projectImage;
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $sql="INSERT INTO project (Title, Theme, Link, Description, Image) 
        VALUES('$title','$theme','$link','$desc','$projectImage')";
        if(mysqli_query($conn,$sql)){
            $msg = "Image uploaded and Saved to database".$theme;
            $css_class="alert-success";
        }else{
            $msg = "Database Error: Failed to Save Data";
            $css_class="alert-danger";
        }
        $msg = $theme." saved to the Database";
        $css_class="alert-success";
    }else
    {
$msg = "Failed to upload to upload";
$css_class="alert-danger";
    }
}
?>