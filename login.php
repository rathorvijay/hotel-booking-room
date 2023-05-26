
<?php
include 'db_connection.php';

if(isset($_POST['submit']))
{
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$secure=md5($password);
$query="select *from adminlogin where username='$username' && password='$password' ";
$data=mysqli_query($conn,$query);
$count=mysqli_num_rows($data);
if($data)
{
  if($count>0)
  {
    echo <<<alert
     <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Holy guacamole!</strong> You should check in on some of those fields below.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
    alert;
    $_SESSION['username']=$username;
  }
  else
  {   
    echo <<<alert
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
   alert;
  }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <?php 
      require('links.php');
    ?> 
    <style>
        html,body{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
       
        .main{
            width: 320px;
            height:270px;
          
           }
    </style>
</head>
<body>
    <div class="main shadow around">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            <h4 class="text-center bg-dark py-2 text-white text-uppercase">admin login panel</h4>
            <div class="mb-3 mt-4 mx-3">
              <input type="text" name="username" class="form-control text-center shadow-none py-2" placeholder="user name" required>
            </div>
            <div class="mb-3 mx-3">
              <input type="password" name="password" class="form-control text-center shadow-none py-2" placeholder="password" required>
            </div>
            <div class=" mt-4 mx-3">
            <button type="submit" name="submit" class="btn btn-primary bg-success w-100">Submit</button>
            </div>
          </form>
    </div>
</div> 
</body>
</html>

