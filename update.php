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
                         <br><p style="font-size:30px;background-color: white"> Update Canditate Informations</p>
                      </div>
                      <?php
$conn=mysqli_connect("localhost","root","","rdl");
$id=$_GET['update'];
$results=mysqli_query($conn,"SELECT * FROM candidates WHERE canditatesnationalid='$id'");
while ($row=mysqli_fetch_array($results)) {
 ?>
<form method="POST"  >


                        
            <div class="form-group"><input type="number" name="canditatesnationalid" class="form-control" placeholder="National ID"  value="<?php echo$row['canditatesnationalid'] ?>"></div>

                    <div class="form-group"><input type="tex" name="fname" class="form-control"placeholder="First Name"  value=" <?php echo $row['fname'] ?> "></div>

                    <div class="form-group"><input type="tex" name="lname" class="form-control"placeholder="Last Name"  value=" <?php echo $row['lname'] ?> "></div>

                    <div class="form-group"><input type="tex" name="gender" class="form-control"placeholder="Gender"  value=" <?php echo $row['gender'] ?> "></div>

                    <div class="form-group"><input type="calendar" name="dob" class="form-control"placeholder="Date Of Birth"  value=" <?php echo $row['dob'] ?> "></div>

                        <div class="form-group"><input type="calendar" name="examdate" class="form-control" placeholder="Exam Date"  value=" <?php echo $row['examdate'] ?> "></div>

                        <div class="form-group"><input type="phone" name="phone" class="form-control"placeholder="Phone number"  value=" <?php echo $row['phone'] ?> "></div>
                    <button style="width:40rem;background-color: #467;color:white;font-size:27px"  name="send">Send</button>
                <?php } ?>
                    </form>
                    
                 </div>
                 <?php 
if (isset($_POST['send'])) {
    
    $id=$_POST['canditatesnationalid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $examdate=$_POST['examdate'];
    $phone=$_POST['phone'];

$conn->query("UPDATE candidates SET fname='$fname',lname='$lname',gender='$gender',dob='$dob',examdate='$examdate',phone='$phone' WHERE canditatesnationalid='$id'");
    header('location:viewcanditates.php');
}
                  ?>

           </center>
           </body>
</html>