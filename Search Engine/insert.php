<!DOCTYPE html>
<html>
<head>
<title>SEARCHX</title>
<style type="text/css">
    form{
        text-align:center;
    }
    input[type=text]{
        color:orange;
    }
    
</style>
</head>
<body>
<div class="container">
<br>
<center><h2>Insert Website</h2></center>
<br>
<br>
<form action="insert.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="stitle">Site Title</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter site title/X Name" required/>

</div>
</div>
</div>
<br>
<br>
<br>
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="slink">Site link</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter site link" required/>

</div>
</div>
</div>
<br>
<br>
<br>
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="skey">Site Keywords</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter site keywords" required/>

</div>
</div>
</div>
<br>
<br>
<br>
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="sdes">Site description</label>
<div class="col-sm-10">
<textarea class="form-control" id="sdes" name="s_des" placeholder="Enter site Description" required></textarea>

</div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="form-group">
<div class="row">
   <center>
<input type="submit" class="btn btn-outline-success" name="submit" value="Add Website"/>
<br>
<br>
<br>
<a href="http://gameprojects.in/searchx">Back To Search Bar</a>
</center>
</div>
</div>

</form>
</div>
</body>
 </html>

<?php
 $host="localhost";
$user="root";
$pass="";
$dbname="database name";
$conn=mysqli_connect($host,$user,$pass,$dbname);

 if(isset($_POST["submit"])){
 $s_title=$_POST["s_title"];
 	 $s_link=$_POST["s_link"];
 	$s_key=$_POST["s_key"];
 	 $s_des=$_POST["s_des"];
 	 

 	 

 	
 	
 		$sql="insert into engine(site_title,site_link,site_key,site_des)values('$s_title','$s_link','$s_key','$s_des')";
     if(mysqli_query($conn,$sql)){
        echo "Data inserted Succesfully";
}else{
echo "Check the connection";
}


}


 ?>
 <html>
    <p style="text-align:center">&copy;Copyright By Rishabh Sagar and <a href="http://www.gameprojects.in" style="color:red">The Game Project</a></p>
 </html>
 
