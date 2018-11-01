<?php
include('header1.php');
session_start();
if(!isset($_SESSION['name']))
{
	header('location:ourdata_login.php');
}
$f=$_FILES['myfile'];
move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
?>
<!DOCTYPE html>
<html>
<!-- ======= HEADER START FROM HERE  ======== -->
<title> Ourdata|home</title>
<style>
.image
{
	border-radius:50% 50%;
	height:130px;
	width:100px;
	margin-left:2%;
	 -webkit-animation: mymove 10s 2s; 
    animation: mymove 3s infinite;
	box-shadow:3px 0px 100px 20px #ff751a;
	outline:none;
	border:none;
	
}
.image:hover{
	border-radius:50% 50%;
	border:none;
	height:350px;
	width:300px;
	padding-right:0%;
	 -webkit-animation: mymove 10s infinite; 
    animation: mymove 3s infinite;
	box-shadow:5px 0px 100px 20px #ff751a;
	}
	@keyframes mymove {
    50% {box-shadow: 5px 7px 100px 5px black;}
}
body{
	font-family: 'K2D', sans-serif;
	margin-top:40px;
	padding:0;
	background:url("image/look43.jpg");
	background-size:100% 100%;
	background-attachment: fixed;
	height:100%;
	width:100%;
}
form{
	font-family: 'Istok Web', sans-serif;
	text-align:center;
	height:100px;
	width:250px;
	margin-top:1%;
    margin-left:45%;
	color:white;
	background-color:black;
	position:center;
	transform:translate(-50%,-50%);
	box-sizing:radius-box;	
	opacity:.8;
	background-attachment: fixed;
}
</style>
</head>
<!-- ======= BODY START FROM HERE  =======  -->
<body>
<h1 style="color:white;"> Hello <?php echo $_SESSION['name']; ?> </h1>
<img src="<?php echo 'photos/'.$f['name'];?>" type="image/JPEG" class="image"> </img></br></br></br>
<a href="<?php echo 'photos/'.$f['name'];?>" target="_blank" style="background:lightgray;"> Open in new window</a>	
<form action="" method="post" enctype="multipart/form-data" > 
<label>Update Your Profile Picture:</label>
<input type="file" name="myfile" /></br>
<input type="submit" value="submit" />
</form>

</body>
</html>