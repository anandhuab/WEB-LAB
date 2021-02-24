<html>
<head>
<title>Retrive data</title>
</head>
<body bgcolor="Lightgreen">
<form action="main.html" method="post">
<center>
<?php
	include_once 'conn.php';
	$sql="SELECT * FROM formtble";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>ID</th>
<th>Name</th>
<th>Password</th>
<th>Gender</th>
<th>Email</th>
<th>phonenumber</th>
</tr>

<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phonenumber1"]; echo $row["phonenumber2"];?></td>
</tr>

<?php
$i++;
}
?>
</table>
<?php



}
else
{
echo "No result found";
}
mysqli_close($conn);
?>
<input type="submit" value="back to home page" name="submit">
</center>
</body>
</html>



