<?php
 $uname=$_POST["uid"];
 $upassword=$_POST["pwd"];
 
 $conn=mysqli_connect("localhost","root","","login1");
 $conn->query("insert into stable(id,pass) values('".$uname."','".$upassword."')");
 header("Location:login.html");
 $conn->close();
?>