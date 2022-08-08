<!DOCTYPE html>
<html>
<head>
	<title>Printing page</title>
	<style type="text/css">
		.names{
			font-size:25px;
			font-family:fantasy;
			color:black;

		}
		span{
			font-size:25px;
			color:#898;
		}
		.main-box{
			margin-top:5rem;
			border:1px solid black;
			 width:50%;
			 height:74vh;
			background-color:white;
				box-shadow:10px 10px 28px #457;
				border-radius:8px;
		}
		.box{
			margin-top: 4rem;
		}
		.main-box .box div{
			margin-top:1rem;

	

		}
		body{
	       background-color: #97755764;;
		}
		.image{
			height:250px;
			width:250px;
		}
		.loginpage{
        	background:linear-gradient(to left,rgba(123,142,24,0.68),rgba(13,142,144,0.98));
        	border-radius:6px;

        }
	</style>
</head>
<body>



                <?php 
                $id=$_GET['print'];
                  $conn= mysqli_connect("localhost","root","","rdl");

                  
                    $result=$conn->query("SELECT * FROM candidates  WHERE canditatesnationalid='$id' ");
                  while ($row=$result->fetch_assoc()): 

                 ?>


                 <center><div class="main-box">
                 	<center><div class="box">
                 	     
                 <center><div> <span><img src="imgs/<?php echo $row['image'];?>" style="width:150px;height:150px;border-radius:50%"></span></div></center>

                         <div><span class="names" style="margin-left:-3rem">First Name:</span> <span><?php echo$row['fname']?></span></div>
                        <div><span class="names" style="margin-left:-1.4rem">Last Name:</span> <span><?php echo$row['lname']?></span></div>
               <div><span class="names" style="margin-left:-6rem">ID:</span> <span><?php echo$row['canditatesnationalid']?></span></div>
                        <div><span class="names" style="margin-left:-5.7rem">Gender:</span> <span><?php echo$row['gender']?></span></div>
                        <div><span class="names" style="margin-left:2rem">Date Of Birth:</span> <span><?php echo$row['dob']?></span></div>

                    <?php endwhile; ?>

                    <?php 
         
                  $conn= mysqli_connect("localhost","root","","rdl");  
                      $id=$_GET['print'];  
                       $result1=$conn->query("SELECT * FROM  grade WHERE canditatesnationalid='$id' ");

                     while ($row1=$result1->fetch_assoc()):  ?>
                 <div><span class="names" style="margin-left:-1rem">Category:</span> <span><?php echo$row1['licenseexamcategory']?></span></div>
                  <div><span style="margin-left:-8.7rem" class="names">Marks:</span> <span><?php echo$row1['obtainedmarks']?></span></div>

                   <div style="float: right;height:120px;width:120px;border-radius:50%;border:1px solid black;margin-top:-1rem;background-color:orange;margin-right:1rem"><br><br><span style="font-family:cursive;color:black;"><?php echo$row1['decision']?></span></div>
                      </div>
                

                 </div></center>
                        <center><div style="margin-top:3rem;"> <button style="width:20rem;background-color: #467;color:white;font-size:27px;margin-right:2rem"  onclick="window.print()" class="loginpage" ><span style="font-size:50px;color:red;font-weight:bold;">V</span>PRINT</button> <a href="viewgrades.php" ><button style="width:20rem;background-color: #467;color:white;font-size:27px" class="loginpage"><span style="font-size:47px;color:red;font-weight:bold;">X</span>CANCEL </button></a></div></center>
             <?php endwhile; ?>


</body>
</html>