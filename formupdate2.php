<html>
<head>
<title>Update data</title>
</head>
<body bgcolor="cyan">
<form method="post" action="formupdate3.php">
<center>

<?php
include_once 'conn.php';
$rid=$_POST['id'];
$sql="SELECT * FROM formtble where id='$rid'";
$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	?>
<br><br>

<?php
if($row=mysqli_fetch_assoc($result))
{
?>
Form id:&nbsp&nbsp<input type="text" value="<?php echo $row["id"];?>" name="id"><br><br>

User Name:&nbsp&nbsp<input type="text" value="<?php echo $row["Name"];?>" name="upduname"><br><br>


Password:&nbsp&nbsp<input type="password" value="<?php echo $row["password"];?>" name="password2"><br><br>

Gender:&nbsp&nbsp<input type="radio" name="gender" value="male" <?php if($row["gender"]=="male"){echo "checked";}?>/>Male
<input type="radio" name="gender" value="female" <?php if($row["gender"]=="female"){echo "checked";}?>/>Female<br><br>

Email:&nbsp&nbsp<input type="text" value="<?php echo $row["email"];?>" name="email"><br><br>
phone number &nbsp&nbsp
<select name="code">
<option<?php if($row["phonenumber1"]=="977"){echo "selected";}?>>977</option>
<option<?php if($row["phonenumber1"]=="978"){echo "selected";}?>>978</option>
<option<?php if($row["phonenumber1"]=="979"){echo "selected";}?>>979</option>
<option<?php if($row["phonenumber1"]=="973"){echo "selected";}?>>973</option>
<option<?php if($row["phonenumber1"]=="972"){echo "selected";}?>>972</option>
<option<?php if($row["phonenumber1"]=="974"){echo "selected";}?>>974</option>
</select>
<input type="text" value="<?php echo $row["phonenumber2"];?>"name="phonenumber2"><br><br>
<input type="submit" value="Update" name="submit">
<?php
}
?>
<?php
}
else
{
echo "no result found";
}
?>
</center>
</form>
</body>
</html>


