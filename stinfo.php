<div class="container text-center ab pa">
	
	<div class="conx"><p>Student Admition Form</p></div>
	<div class="con1 clear">
	  <table class="table table-striped i">
	<form action="" method="post">
	 
	
	<tr>
		<td><h4>Student Name</h4></td>
		<td><input type="text" name="name" required />
	</td>
	</tr>

</tr>
<tr>
		<td><h4>Password</h4></td>
		<td><input type="password" name="password" required />
	</td>
	</tr>

</tr>

	<tr>
		<td></td>
		<td><input type="submit" name="submit" /></td>
	</tr>
	</form>
	</table>
	</div>	</div>

		

<?php
if (isset($_POST['submit'])){
	
	$st_roll=$_POST['name'];
	$st_class=$_POST['password'];

$connect=mysqli_connect("localhost","root","","st");
if(!$connect){
	echo "Connnection Faill";
	}
		$insert_query="INSERT INTO st (name,pass) values('$st_roll','$st_class')";
	
	$run_query=mysqli_query($connect,$insert_query);

	If($run_query){

		header('location:http://localhost/eee/index.php');
		
	}
	else{
		echo "Data INSERT Fail";
	}
}
	?>