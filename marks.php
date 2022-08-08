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
                <div class="marks">
                    
                </div>
                 <form method="post">
                     <center>
                        <?php 
$conn=mysqli_connect('localhost',
'root','','rdl');
$a=$_GET['candidatenationalid'];
$select=mysqli_query($conn,"select* from candidate where candidatenationalid='$a'");
while ($var=mysqli_fetch_array($select)) {

                         ?>
                                <input type="text"  name="candidatenationalid" placeholder="Enter National ID" readonly='' value="<?php echo $var['candidatenationalid'] ?>"><br>
                            <?php } ?>
                                <input type="text" name="examlicensecategory" placeholder="Enter Category"><br>
                                <input type="text" name="obtainedmarks" placeholder="Marks"><br>
                                <button name="send"><span class="s_button">v</span><span style="font-size:35px;">Submit</span></button>
                     </center>
                 </form>

             </div>

	</section>

</body>
</html>
<?php 
$conn=mysqli_connect('sendlocalhost','root','','rdl');
if (isset($_POST['send'])) {

$a=$_POST['candidatenationalid'];
$b=$_POST['examlicensecategory'];
$c=$_POST['obtainedmarks'];


if ($c>=12)
 {
    $d="Pass";
}
else{
    $d="fail";
}

$query=mysqli_query($conn,"insert into grade values('$a','$b','$c','$d')");  
}
?>