<html>
<body bgcolor="#ff14ff">
<form action="main.html" method="post">
<center>
<br>
<br>
<?php
include_once 'conn.php' ;
if(isset($_POST['submit']))
{
  $ename=$_POST['name'];
   $desg=$_POST['designation'];
 $sal=$_POST['salary'];
 $sql="INSERT INTO employee(name,designation,salary)VALUES('$ename','$desg','$sal')";
if(mysqli_query($conn,$sql))
{
  echo "new record created successfully!<br>";
}
else
{
  echo "error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit"value="back to home page"name="submit">
</center>
</form>
</body></html>




