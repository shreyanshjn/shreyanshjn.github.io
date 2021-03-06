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
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages.php">Pages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="users.php">Users</a>
    </li>
   </ul>

   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
     <a class="nav-link" href="#">Welcome</a>
    </li>
   <li class="nav-item">
     <a class="nav-link" href="signup.php">Signup</a>
   </li>
   </ul>
  </div>
</div>
</nav>
<header>
<div class="container">
<div >
<h1 style="display:inline"><i class="fas fa-cog"></i>Dashboard</h1>
<span style="font-size:25px;color:rgba(255,255,255,0.5)">Manage your site</span>
<li style="display:inline;" class="nav-link dropdown">
 <a class="nav-item dropdown-toggle create" data-toggle="dropdown" href="#">Create content</a>
 <div class="dropdown-menu">
 <a class="dropdown-item">list1</a>
 <a class="dropdown-item">list2</a>
 <a class="dropdown-item">list3</a>
 </div>
</li>
</div>
</div>
</header>
<div class="container dashboard">
<p style="padding:5px">Dashboard</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header"><i class="fas fa-cog" style="font-size:20px;"></i>Dashboard</div>
        <a  class="pages" href="pages.php"><div class="card-body ppu">
           <i class="fas fa-file-alt" style="margin-right:4px;"></i>Pages<span class="badge dash2" >33</span></div>
           <hr style="margin:0px;"></a>
        <a class="pages" href="#"> <div class="card-body ppu">
         <i class="fas fa-pencil-alt" style="margin-right:4px;"></i>Posts
           <span class="badge dash2" >126</span></div><hr style="margin:0px;"></a>
        <a href="users.php" class="pages"><div class="card-body ppu">
        <i class="fas fa-user" style="margin-right:4px;"></i> Users
        <span class="badge dash2">
         <?php include 'setup.php';
              $sql="Select *  from dash ORDER BY id DESC limit 1";
              $result=$conn->query($sql);
              if($result->num_rows>0)
              {
                 while($rows=$result->fetch_assoc())
                 { 
                   echo $rows["id"];
                 }
              }
         ?>
       </span></div><hr style="margin:0px;"></a>
       </div>
      <div class="card disk">
      <div class="card-body">Disk space used</div>
      <div class="class-body">
          <div class="container">
            <div class="progress">
                 <div class="progress-bar" style="width:60%;background-color:rgba(0,0,0,0.7)">60%</div>
            </div>
          </div>
      </div>
      <div class="card-body">Bandwidth-used</div>
      <div class="class-body">
          <div class="container" style="margin-bottom:10px">
            <div class="progress">
                 <div class="progress-bar" style="width:40%;background-color:rgba(0,0,0,0.7)">40%</div>
            </div>
          </div>
      </div>
      </div>
    </div>
    <div class=col-md-9>
    <div class="card">
    <div class="card-header">Users</div>
     <div class="card-body"><input type"text" id="textbox" placeholder="&nbsp &nbsp Filter pages.."></div>
       <div class="UserData">
            <table class="table table-striped table-hover">
              <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
            </tr>
            <?php include 'setup.php';
             $sql="Select name,username,email from dash";
             $result=$conn->query($sql);
             if($result->num_rows>0)
             { 
                 while($rows=$result->fetch_assoc())
                 {?>
                    <tr><td><?php echo $rows["name"]?></td>
                        <td><?php echo $rows["username"]?></td>
                        <td><?php echo $rows["email"]?></td>
                    </tr> 
                <?php }}?>
            </table>
       </div>
    </div>
    </div>
</div>
</div>
<footer style="margin-top:8px">
<p style="text-align:center">&copy&nbspCopyright@ Shreyansh jain feb 2018</p>
</footer>
</body>
</html>
