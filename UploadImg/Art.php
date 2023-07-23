<?php include 'processForm.php';
//if(isset($_POST['design'])){
//$sql = "SELECT * FROM project";
$sql='SELECT * FROM project where Theme="art"';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
//$users=mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>Document</title>
</head>
<body>


  
   <div class="container">
    <div class="row" style="">
    
    <?php foreach($users as $user):?>
      
  <div class="col-sm-3" style="font-family:comic sans ms;text-align:center;border-radius:5px;">   
   <h4 style="font-family:rockwell"> <?php echo $user['Title'];?> </h4>
<p>
   <img src="images/<?php echo $user['Image']?>" 
class="img-thumbnail" style="width:50%;box-shadow:3px 5px 10px grey">
    </p>
    <h5 style="height:30px; -webkit-text-stroke:1px #f9a66c;color:#4a6163"><?php echo $user['Theme'];?></h5>
    <P >
    <?php echo $user['Description'];?>
    </p>
    <button   style="width:30%;
  background-color:#f9a66c;
  
  border-radius:10px;
  border:1px solid #f9a66c;font-family:comic sans ms;">
    <a href="<?php echo $user['Link'];?>" style="color:#4a6163;text-decoration:none"target="_blank">Visit IT</a>
    </button>
  </div>
    
<?php endforeach; ?>
</div> 
    
<br>
<button   style="width:20%;
  background-color:#FFA384;
  
  border-radius:10px;
  border:1px solid #f9a66c;font-family:comic sans ms;">
    <a href="http://localhost/portfolio/" style="color:#4a6163;text-decoration:none;">Back</a>
    </button>
  </div>
    </div>
    





</body>
</html>
    