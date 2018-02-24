<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/main.css">
<title>Dashboard@SJ</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark " style="background-color:#E94933">
<div class="container top">
<a class="navbar-brand">Admin Strap</a>
<!--toggle button -->
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#lists">
<span  class="navbar-toggler-icon"></span>
</button>

  <div id="lists" class="navbar-collapse collapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages.html">Pages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="users.php">Users</a>
    </li>
   </ul>

   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
     <a class="nav-link" href="#">Welcome</a>
    </li>
   <li class="nav-item active">
     <a class="nav-link" href="#">Signup</a>
   </li>
   </ul>
  </div>
</div>
</nav>
<header>
<div class="container">
<div style="text-align:center">
<h1 style="display:inline">Admin area</h1>
<span style="font-size:25px;color:rgba(255,255,255,0.5)">account signup</span>
 </div>
</li>
</div>
</div>
</header>
<div>
<form   action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<div class="signup" >
<label>Name</label><br><input type="text"  required name="name" placeholder="Name"><br>
<label>Username</label><br><input type="text"  required name="usrname"placeholder="Username"><br>
<label>Email</label><br><input type="email"  required name="email"placeholder="Email"><br>
<label>Create password</label><br><input type="password" required name="password1"placeholder="Create password"><br>
<label>Confirm password</label><br><input type="password" required name="password2"placeholder="Confirm password"><br>
<input type="checkbox"required name="box"><span style="margin-left:2px">I accept the <a href="#" target="_blank">terms and conditions</a></span><br>
<input type="submit"><br>
</div>
</form>
<?php 
 $name=$passwrd1=$usrname=$passwrd2=$email="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $passwrd1=$_POST["password1"];
    $passwrd2=$_POST["password2"];
    if($passwrd1!=$passwrd2)
    {
       echo  "<script> alert('password not matching');</script>";
    }
    else
    {
          $name=$_POST["name"];
          $email=$_POST["email"];
          $usrname=$_POST["usrname"];
          include 'setup.php';
          $hashedPass=password_hash($passwrd1,PASSWORD_DEFAULT);
          $sql="INSERT INTO dash(name,username,email,password)
                VALUES('$name','$usrname','$email','$hashedPass')";
          if($conn->query($sql)===TRUE)
          {
             echo "<script> alert('Account created');</script>";
          }
    }
    
 }
?>	
</div>
<footer>
<p style="text-align:center">&copy Copyright@ Shreyansh jain feb 2018</p>
</footer>
</body>
</html>
~                                                                                                           
