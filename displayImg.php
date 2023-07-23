<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    $connection = mysqli_connect("localhost","root",'');
    $db=mysqli_select_db($connection,'portfolio');
    
    $query=' SELECT * FROM `project`';
    $query_run = mysqli_query($connection,$query);
    
    
    while($row = mysqli_fetch_array($query_run)){
    $title=$row['Title'];
    $theme=$row['Theme'];
    $link=$row['Link'];
    $des=$row['Description'];
    $image=$row['Image'];
    echo "<p>'.$title.'</p>";
    echo "<p>'.$theme.'</p>";
    echo "<p>'.$link.'</p>";
    echo "<p>.$des.</p>";
    echo "<p><img src='.$image.png,jpg,jpeg'></p>";
    echo "<hr>";
}
    ?>
    </div>
</body>
</html>