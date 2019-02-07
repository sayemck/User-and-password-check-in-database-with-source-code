<?PHP
if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$con= new mysqli('localhost','root','','company');
	$sql="select * from user where username='$uname' and password='$pass'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
		print "Valid User"; 	
	}
	else {
		print "Invalid User";
	}
	//$row=mysqli_fetch_row($result);
	}
?>
<form action="" method="post">
<table>
<tr>
<td><label >Username:</label>  </td>
<td> <input type="text" name="uname" placeholder="Username Input Here" > </td>
</tr>
<tr>
<td> <label >Password:</label> </td>
<td> <input type="password" name="pass" placeholder="Password Input Here" > </td>
</tr>
<tr>
<td><label>&nbsp;</label>  </td>
<td><input type="submit"  name="submit" value="Insert Data" </td>
</tr>
</table>
</form>
