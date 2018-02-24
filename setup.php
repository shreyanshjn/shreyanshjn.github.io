<?php
$username="root";
$pwd="mylaptop62$$";
$servername="localhost";
$database="dashboard";
$conn=new mysqli($servername,$username,$pwd,$database);
if($conn->connect_error)
{
  die("connection error".$conn->connect_error);
}

