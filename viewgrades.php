<?php session_start();
if(!isset($_SESSION['name'])) {
	header("location:log2.php");
}
?>
<?php 	
$conn= mysqli_connect("localhost","root","","rdl");

if (isset($_GET['delete'])) {
	$id=$_GET['delete'];
	$conn->query("DELETE FROM grade WHERE canditatesnationalid='$id' ");
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
			height:150vh;
		}

		.sub-container{
			width: 90%;
	
			height:150vh;
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
		
			width: 100%;
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
        color:#456;
        font-size:25px;
	}
	button{
		background-color:transparent;
		border:none;
	}
	a{
		text-decoration: none;
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


<a href="viewgrades.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">View Marks</span></span>
</p></div></a>

<a href="create user.php"><div class="sub-menu"><p><span ><span style="font-size:50px;color: white;font-weight: bold;">+</span><span style="font-size:35px;color: white">Add Admin</span></span>
</p></div></a>





	 </div>

	 </div>

	 <div class="sub-container">
	 	
           <center style="margin-top: 10rem">
           	
                 <table>
                 	<tr >
                  <th>
                  	National Id
                  </th>
                    <th>
                  	First Name
                  </th>
                  <th>
                  	Second Name
                  </th>
                  <th>
                  	Exam Date
                  </th>
                  <th>
                  	Phone
                  </th>
                  <th>
                  	Category
                  </th>
                  <th>
                  Marks
                  </th>
                  <th>
                  	Decision
                  </th>
                  <th colspan="3">
                  	Action
                  </th>
                    </tr>


                <?php 
                  $conn= mysqli_connect("localhost","root","","rdl");

                  $result=$conn->query("SELECT * FROM candidates INNER JOIN grade ON candidates.canditatesnationalid=grade.canditatesnationalid");
                  while ($row=$result->fetch_assoc()): 


                 ?>

                  <tr>
                  	
                     <td> <?php echo $row['canditatesnationalid'];?></td>
                     <td> <?php echo $row['fname']; ?></td>
                     <td> <?php echo $row['lname']; ?></td>
                     <td> <?php echo $row['examdate']; ?></td>
                     <td> <?php echo $row['phone']; ?></td>
                      <td> <?php echo $row['licenseexamcategory']; ?></td>
                      <td> <?php echo $row['obtainedmarks']; ?></td>
                      <td> <?php echo $row['decision']; ?></td>
                         
                     <td><button><a href="viewgrades.php? delete=<?php echo $row['canditatesnationalid']; ?>">DELETE</a></button></td>
                     <td><button><a href="updates.php?update=<?php echo $row['canditatesnationalid'];?>">UPDATE</a></button></td>
                  <td><button><a href="print.php?print=<?php echo $row['canditatesnationalid'];?>">PRINT</a></button></td>

                 

                  </tr>

                    <?php endwhile; ?>





                 </table>
                 <button onclick="window.print()">PRINT</button>

           </center>

	 </div>
</div>

</body>
</html>