<?php
$host="localhost";
$user="root";
$pass=" ";
$dbname="database name";

$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	echo "There is connection problem";

}



if(isset($_POST['submit'])){
$a=$_POST['username'];
$b=$_POST['password'];

$sql="select*from register where username='$a'";
$run=mysqli_query($conn,$sql);

if(mysqli_num_rows($run)>0){
    echo "<script>alert('Try For another name this name is already register')</script>";
}

$query="insert into register(username,password)values('$a','$b')";
$query1=mysqli_query($conn,$query);
if($query1){
    header("Location:index.php");
}

}







?>


<html>
<head>
<title>Registration Page</title>
<style type="text/css">

legend{
margin-top:100px;
color:red;

}
h1{
color:blue;
font-size:50px;
margin-left:200px;
margin-right:200px;

}




</style>
</head>
<body>
<form method="post">
<center>
<legend>
<h1 style="text-align:center;border-bottom:3px solid black">Register Your Account!!</h1>
<table border="1" style="height:40px;">
<tr>
<td>Enter username:</td>
<td><input type="text" name="username"/></td>
</tr>
<tr>
<td>Enter Password:</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td><p style="text-align:center"><td><input type="submit" name="submit" value="Register Account"/></td></p></td>
</tr>


</table>
</legend>
</center>
</form>
</body>
</html>
