<?php session_start()?>
<?php include("connection.php");?>
<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];

	$password=$_POST['password'];
	
	$select_query="SELECT * FROM st WHERE name='$username'  && pass='$password'";
	$run_query=mysqli_query($connect,$select_query);
	$count=mysqli_num_rows($run_query);
	if($count>0){
		header('location:http://localhost/eee/st.php');
		$_SESSION['name']=$username;
		$_SESSION['pass']=$password;
	}
	else{
 echo "Username or class or password mistake";
	}
}
?>