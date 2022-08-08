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
                         <br><p style="font-size:30px;background-color: white"> Update Canditate Grades</p>
                      </div>


                     <?php 

$conn=mysqli_connect("localhost","root","","rdl");
$id=$_GET['update'];
$results=mysqli_query($conn,"SELECT * FROM grade WHERE canditatesnationalid='$id'");
while ($row=mysqli_fetch_array($results)) {
 ?>

                      


                       <form method="POST"  >
           
             

   
                        
                    <div class="form-group"><input type="number" name="canditatesnationalid" class="form-control" readonly="" placeholder="National ID"  value="<?php echo$row['canditatesnationalid'] ?>" ></div>

                    <div class="form-group"><input type="text" name="licenseexamcategory" class="form-control" value="<?php echo$row['licenseexamcategory'] ?>"></div>

                    <div class="form-group"><input type="number" name="obtainedmarks" class="form-control"placeholder="Obtained Marks/20Marks" value="<?php echo$row['obtainedmarks'] ?>"></div>

                    <button style="width:40rem;background-color: #467;color:white;font-size:27px"  name="send">Send</button>
                    
                       
                     <?php } ?></form>
                   
                    
                 </div>

                 <?php 
if (isset($_POST['send'])) {
    
                        $id=$_POST['canditatesnationalid'];
                        $category=$_POST['licenseexamcategory'];
                        $obtainedmarks=$_POST['obtainedmarks'];
                
                            if ($obtainedmarks<12) {
                                $decision="FAILED";
                            }
                            else{
                                $decision="PASSED";
                            }


$conn->query("UPDATE grade SET canditatesnationalid='$id',licenseexamcategory='$category',obtainedmarks='$obtainedmarks',decision='$decision' WHERE canditatesnationalid='$id'");
    header('location:viewgrades.php');
}
                  ?>

           </center>
           </body>
</html>