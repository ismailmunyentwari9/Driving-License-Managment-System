
<?php 
session_start();
$conn=mysqli_connect("localhost","root","","rdl");
if (isset($_POST['login'])) {
	$name=$_POST['name'];
	$password=$_POST['password'];

	$sql="SELECT * FROM admin where name='$name'AND password='$password' ";
	$qry=mysqli_query($conn,$sql);

	if ($row=mysqli_num_rows($qry)) {
		$_SESSION['name']=$name;
		header('location:index.php');
	}
	else{
	echo " <script> alert('please Sign up first')</script>";
}
	
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			background:linear-gradient(to left,rgba(123,142,24,0.68),rgba(13,142,144,0.98));
			height: 80vh;
		}
		.form{
			margin-top: 15rem;

		}
		form{

			width: 50%;
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
        	text-decoration: none;
        }
	</style>

</head>
<body>


<center><div class="form"  >
	
	<form method="POST" >
			<span>  <span style="font-size:50px;color:red;font-weight:bold;">X</span>  <span style="font-size:35px;color:black;font-family:sans-serif;">LOGIN INTO ACCOUNT</span></span>
   <div class="inputs">	
<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required=""></div><br>
<div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password" required=""></div><br>
<button type="submit" name="login" class="loginpage">Login</button><br>


</div>
	</form>


</div></center>

</body>
</html>