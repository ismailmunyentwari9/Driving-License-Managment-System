










<!DOCTYPE html>
<html>
<head>
    <title></title>


    <style type="text/css">
        


        <style type="text/css">
        body{
        background:linear-gradient(to left,rgba(123,142,124,0.68),rgba(13,142,144,0.98));
            
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
            height:56vh;
        
            width: 100%;
            padding-top:4rem;
        }
        .form{
            box-shadow:10px 10px 28px   #457;
           

        }
        a{
            text-decoration:none;
        }
          body{
                background-color: #97755764;
          }
    </style>
    </style>
</head>
<body>
     <center>                
                      
                 <div style="margin-top: 7rem;width: 40%" class="form">
                       <div style="border-bottom:1px solid black;background-color: white">  
                         <br><p style="font-size:30px;background-color: white"> Add Canditate Grades</p>
                      </div>

                    
              <form method="POST"  >
              	<?php 
 $conn=mysqli_connect("localhost","root","","rdl");
$id=$_GET['grades'];
$results=$conn->query("SELECT * FROM candidates WHERE canditatesnationalid='$id'");
while ($row=$results->fetch_assoc()) {
 ?>
                 		
                 	<div class="form-group"><input type="number" name="canditatesnationalid" class="form-control" placeholder="National ID"  value="<?php echo$row['canditatesnationalid']?>"></div>

                 	<div class="form-group"><input type="text" name="licenseexamcategory" class="form-control"placeholder="License Exam Category"></div>

                 	<div class="form-group"><input type="number" name="obtainedmarks" class="form-control"placeholder="Obtained Marks/20Marks"></div>

                 	<button style="width:40rem;background-color: #467;color:white;font-size:27px"  name="send">Send</button>
                 	 <?php } ?>
                 	   
                 	</form>
                 	


                 	<?php 
            $conn=mysqli_connect("localhost","root","","rdl");

                     if (isset($_POST['send'])) {
                     	$id=$_POST['canditatesnationalid'];
                     	$category=$_POST['licenseexamcategory'];
                     	$obtainedmarks=$_POST['obtainedmarks'];



                            if ($obtainedmarks>=12) {
                            	$decision="PASSED";
                            }
                            else{
                            	$decision="FAILED";
                            }


                            
                     	$answer=$conn->query("INSERT INTO grade VALUES('$id','$category','$obtainedmarks','	$decision') ");
                     	if ($answer==true) {
						
						header('location:viewgrades.php');
					}
					else{
						echo "   
				           <script> alert('Isma!,..Information failed to record') </script>
						";
	                 }
                     }
                 	 ?>
                    
                 </div>
                

           </center>
           </body>

</html>