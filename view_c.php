<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title></title>
</head>
<body>

       
    <section>
        
             <div class="links">
                   <center><h1><span class="s2">RWANDA</span> <span class="s3">DRIVING</span> <span class="s4">license</span></h1></center>
                
              <center> <div class="big_icon">
                       <a href="index.php"><div class="icons">ADD CANDIDATES <span class="s1">+</span> </div></a>
                       <a href="view_c.php"><div class="icons">VIEW CANDIDATES <span class="s1">+</span> </div></a>
                       <a href="view_m.php"><div class="icons">VIEW MARKS <span class="s1">+</span> </div></a>
                       <a href="create_a.php"><div class="icons">CREATE ACCOUNT <span class="s1">+</span> </div></a>    
                       
              </div></center>

                  

             </div>
             <div class="contents">
                
<center>
                   <div class="dform">
                    <table border="1">
                        <tr>
                            <th>Candidate _National_Id</th>
                            <th>First_Name</th>
                            <th>Last_Name</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Exam Date</th>
                            <th>Phone Number</th>
                            <th colspan="3">Options</th>
                        </tr>
                        
                   
                    <?php 
$conn=mysqli_connect('localhost','root','','rdl');
$select=mysqli_query($conn,"select * from candidate");
while($var=mysqli_fetch_array($select)) {
 ?>
 <tr><td><?php echo $var['candidatenationalid'] ?></td>
     <td><?php echo $var['fname'] ?></td>
     <td><?php echo $var['lname'] ?></td>
     <td><?php echo $var['gender'] ?></td>
     <td><?php echo $var['dob'] ?></td>
     <td><?php echo $var['examdate']?></td>
     <td><?php echo $var['phonenumber'] ?></td>
     <td><a href="marks.php?candidatenationalid=<?php echo $var['candidatenationalid'] ?>">marks</a></td>
     <td><a href="update.php?candidatenationalid=<?php echo $var['candidatenationalid'] ?>">update</a></td>
     <td><a href="delete.php?candidatenationalid=<?php echo $var['candidatenationalid'] ?>">delete</a></td>
 </tr>
<?php } ?>
</div>
                 
                  </table>
              </center>


             </div>

    </section>

</body>
</html>
