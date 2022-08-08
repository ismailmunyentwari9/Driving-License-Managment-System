




<?php session_start();
if(!isset($_SESSION['name'])) {
	header("location:log2.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style type="text/css">
		body{
		background:linear-gradient(to left,rgba(123,142,24,0.68),rgba(13,142,144,0.98));
			height: 80vh;
		}
		.form{
			margin-top: 15rem;

		}
		form{

			width: 30%;
			height: 30rem;
			background-color:white;
			box-shadow:12px 13px 12px ;
			border-radius:7px;
		}
		.form-group{
			width: 80%;
		
		}
		button{
			padding:7px 30px 7px;
			font-size: 25px;
			margin-right:1rem;
		}
		.form-control{
			width:100%;
			height:2rem;
			font-size: 25px;
		}
        .inputs{
        	padding-top: 8rem;

        }
        .loginpage{
        	background:linear-gradient(to left,rgba(123,142,24,0.68),rgba(13,142,144,0.98));
        	border-radius:6px;

        }
        a{
        	text-decoration:none;
        }
	</style>

</head>
<body>


<center><div class="form"  >

	<form method="POST" >
			<span>  <span style="font-size:50px;color:red;font-weight:bold;">v</span>  <span style="font-size:35px;color:black;font-family:sans-serif;">CREATE ACCOUNT</span></span>
   <div class="inputs">	
<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required=""></div><br>
<div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password" required=""></div><br>
<button type="submit" name="sign">Sign_Up</button><br>
<button  style="width:80%;margin-top:2rem;height:2.5rem" class="loginpage"><a href="log2.php">Login page</a></button>
</div>
	</form>
	
<?php 
$conn=mysqli_connect("localhost","root","","rdl");


if (isset($_POST['sign'])) {
$identity=$_POST['name'];
$pin=$_POST['password'];
$ans=$conn->query("INSERT INTO admin VALUES(NULL,'$identity','$pin')");
if ($ans==true) {
	echo " <script> alert('You Signed Up')</script>";
}
else{
	echo " <script> alert('Try again please')</script>";
}

}


 ?>




</div></center>

</body>
</html>