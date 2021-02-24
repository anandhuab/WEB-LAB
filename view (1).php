<html>
<head>
<title>view data</title>
</head>
<body bgcolor="Lightgreen">
<form action="main.html" method="post">
<center>
<?php
	include_once 'conn.php';
	$sql="SELECT * FROM book";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>ID</th>
<th>Name</th>
<th>Author</th>
<th>Publisher</th>
<th>Quantity</th>
<th>Price</th>
</tr>

<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["title"]; ?></td>
<td><?php echo $row["author"]; ?></td>
<td><?php echo $row["publisher"]; ?></td>
<td><?php echo $row["quantity"]; ?></td>
<td><?php echo $row["price"]; ?></td>
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



