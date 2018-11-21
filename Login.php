<html>
<head>
<title>Login</title>
</head>
<body>
<form name="frmLogin" method="post" action="#">
User Name:- <input type="text" name="txtuserName" /><br /><br />
Password:- <input type="text" name="txtpassword" /><br /><br />
<br /><br />
<input type="submit" name="btnLog" value="Login" />
<input type="reset" name="btnCls" value="Clear" />
	
</form>
</body>
</html>

<?php
if(isset($_POST["txtName"]))
{
	$username=$_POST["txtuserName"];
	$password=$_POST["txtpassword"];
	
}
	$connection=mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"users");
	$sqlQuery="select user_name,password from user";
	$result=mysqli_query($connection,$sqlQuery);
	$flag=0;
	while ($row=mysqli_fetch_array($result))
	{
		if($username==$row[1] && $password==[2])
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		session_start();
		$_SESSION["userName"]=$username;
		$_SESSION["lat"]=time();
		header("Location:welcome.php");
	}
	else
	{
		echo "the user name or password that you entered is incorrect";
	}
	mysqli_close();
?>