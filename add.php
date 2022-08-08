<?php 
session_start();
if(!isset($_SESSION['name'])) {
	header("location:log2.php");
}
?>


<?php 
$conn=mysqli_connect("localhost","root","","rdl");
if (isset($_POST['send'])) {
	
}


 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>


	<style type="text/css">
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
			background-color: #97755764;
			height:100vh;
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
		
			width: 100%;
		    padding-top:4rem;
		}
		.form{
			box-shadow:10px 10px 28px   #457;

		}
		a{
			text-decoration:none;
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
	 	<div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Candidate</span></span>
</p></div></a>
<a href="viewcanditates.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Candidates</span></span>
</p></div></a>



<div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Marks</span></span>
</p></div>

<div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Marks</span></span>
</p></div>
	 </div>

	 </div>

	 <div class="sub-container">


	 	
           <center>
           	
                 <center>
           	
                 <div style="margin-top: 7rem;width: 40%" class="form">
                 	   <div style="border-bottom:1px solid black;background-color: white">	
                         <br><p style="font-size:30px;background-color: white">	Add Candidate Informations</p>
	 	              </div>
                 	<form method="POST"  >
               
                 		
                 	<div class="form-group"><input type="number" name="canditatesnationalid" class="form-control" placeholder="National ID" ></div>

                 	<div class="form-group"><input type="text" name="licenseexamcategory" class="form-control"placeholder="License Exam Category"></div>

                 	<div class="form-group"><input type="tex" name="obtainedmarks" class="form-control"placeholder="Last Name"></div>

                 	
                 	<button style="width:40rem;background-color: #467;color:white;font-size:27px"  name="send">Send</button>
                 	</form>

                 </div>

           </center>

           </center>

	 </div>
</div>

</body>
</html>

