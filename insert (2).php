<html>
<body bgcolor="yellowgreen">
<form action="main.html" method="post">
<center>
<br>
<br>
<?php
include_once 'conn.php' ;
if(isset($_POST['submit']))
{
  $tname=$_POST['title'];
   $aname=$_POST['author'];
 $pname=$_POST['publisher'];
 $quantity=$_POST['quantity'];
 $price=$_POST['price'];
 
$sql="INSERT INTO book(title,author,publisher,quantity,price)VALUES('$tname','$aname','$pname','$quantity','$price')";
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




