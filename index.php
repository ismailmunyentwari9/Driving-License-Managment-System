

<?php
 session_start();
if(!isset($_SESSION['name'])) {
	header('location:log2.php');
}

 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>


	<style type="text/css">
		*{}
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
			height:60vh;
		
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
	 	
	<div style="margin-top: 9rem;"> 	
	 	<div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Candidate</span></span>
</p></div>




<a href="viewcanditates.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Candidates</span></span>
</p></div></a>





<a href="viewgrades.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Marks</span></span>
</p></div></a>

<a href="create user.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Admin</span></span>
</p></div></a>
	 </div>

	 </div>

	 <div class="sub-container">


	 	
           <center>
           	
                 <div style="margin-top: 7rem;width: 40%;" class="form">
                 	   <div style="border-bottom:1px solid black;background-color: white">	
                         <br><p style="font-size:30px;background-color: white">	Add Candidate Informations</p>
	 	              </div>
                 	<form method="POST"  >
     <div class="form-group" style="margin-left:-8rem;width:100%"><span style="font-size: 27px;">Candidate Image:</span><input type="file" name="image"placeholder="image" required=""></div>

                 	<div class="form-group"><input type="number" name="canditatesnationalid" class="form-control" placeholder="National ID"></div>

                 	<div class="form-group"><input type="tex" name="fname" class="form-control"placeholder="First Name"></div>

                 	<div class="form-group"><input type="tex" name="lname" class="form-control"placeholder="Last Name"></div>

                 	<div class="form-group"><input type="tex" name="gender" class="form-control"placeholder="Gender"></div>

                 	<div class="form-group"><input type="calendar" name="dob" class="form-control"placeholder="Date Of Birth"></div>

                 		<div class="form-group"><input type="calendar" name="examdate" class="form-control" placeholder="Exam Date"></div>

                 		<div class="form-group"><input type="phone" name="phone" class="form-control"placeholder="Phone number"></div>
                 	<button style="width:40rem;background-color: #467;color:white;font-size:27px"  name="send">Send</button>
                 	</form>

                 </div>

           </center>

	 </div>
</div>

</body>
</html>

<?php 	
$conn= mysqli_connect("localhost","root","","rdl");
if (isset($_POST['send'])) {
	

	$id=$_POST['canditatesnationalid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$examdate=$_POST['examdate'];
	$phone=$_POST['phone'];
	 $image=$_POST['image'];
	$ans=$conn->query("INSERT INTO candidates VALUES('$id','$fname','$lname','$gender','$dob','$examdate','$phone','$image')");

	if ($ans==true) {
		echo "   
           <script> alert('Isma!,..Information recorded successfuly') </script>
		";
	}
	else{
		echo "   
           <script> alert('Isma!,..Information failed to record') </script>
		";
	}
$conn->close();

}

 ?>