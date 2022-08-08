<?php session_start();
if(!isset($_SESSION['name'])) {
	header("location:log2.php");
}
?>
<?php 	
$conn= mysqli_connect("localhost","root","","rdl");

if (isset($_GET['delete'])) {
	$id=$_GET['delete'];
	$conn->query("DELETE FROM candidates WHERE canditatesnationalid='$id'");
}


 ?>









<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>


	<style type="text/css">
		.loginpage{
        	background:linear-gradient(to left,rgba(123,142,24,0.68),rgba(13,142,144,0.98));
        	border-radius:6px;
        	padding: 10px 50px 10px;
        	font-size:25px;

        }
		.container{
			display: inline-flex;
			width: 100%;
		}
		.menu{
			width:15%;
			background-color: #367;
			height: 100vh;
		}

		.sub-container{
			width: 90%;
	
			height:100vh;
				background-color: #97755764;
		}
		.nav{
			width: 100%;
			background-color: black;
			opacity: 0.5;
			height: 10vh;
			margin-bottom: -5rem;
		
		}
		.sub-menu{
			border-top:1px solid black;
			background-color:#2442;

		}
		.sub-menu:hover{
			background-color:#245;
		}
		.form-group{
			margin-bottom:1rem;
		}
		.form-control{
                width:35rem;
                height:2.5rem;
                border-radius:4px;
                border-color:silver;
		}
		form{
			background-color:white;
			height:50vh;
		     margin-top:3rem;
			width: 50%;
		    padding-top:4rem;
		}
		.form{
			box-shadow:10px 10px 28px   #457;

		}
		table{
			border:none;
			width: 90%;
			text-align: center;

		}
		tr td{
			padding-bottom: 1rem;
			padding-right:1rem;
		}
		th{
			padding-bottom:1rem;
			font-weight: bold;
			font-size:25px;
			padding-right:1rem;
		}
		tr:nth-child(even){
			background-color:grey;
		}
		
	button a{
        background-color:#457;

        font-size:25px;
	}
	button{
		background-color:transparent;
		border:none;
	}
	a{
		text-decoration: none;
	}
	.inputs{
		margin-top:3rem;
	}

	</style>
</head>
<body>
<div class="nav" ">
		  <br><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Admin Panel</span></span>

	 <a href="logout.php"><span style="margin-left:90rem"> <button style="background-color:#4545">	<span style="font-size:50px;color:red;font-weight: bold;">v</span> <span style="font-size:35px;color: white">sign_Out</span></button></span></a>


		 
	</div>
<div class="container">
	
	 <div class="menu">
	 	
	<a href="index.php"><div style="margin-top: 9rem;"> 	
	 	<div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Canditate</span></span>
</p></div></a>




<a href="viewcanditates.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Candidates</span></span>
</p></div></a>


<a href="viewgrades.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Marks</span></span>
</p></div></a>

<a href="create user.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Admin</span></span>
</p></div></a>


	 </div>

	 </div>

	 <div class="sub-container">
	 	
          
           	
        <center style="margin-top: 10rem">

	<form method="POST" >
			<span>  <span style="font-size:50px;color:red;font-weight:bold;">v</span>  <span style="font-size:35px;color:black;font-family:sans-serif;">CREATE ACCOUNT</span></span>
   <div class="inputs">	
<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required=""></div><br>
<div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password" required=""></div><br>
<button type="submit" name="sign" class="loginpage">Sign_Up</button><br>

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



	 </div>
</div>

</body>
</html>