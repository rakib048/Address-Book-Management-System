<?php
	require_once('user.php');

	//Instantiate user object
	$user = new user();
	
	// Add new user
	if(isset($_POST['submit'])){
		$user->ufname = ucfirst($_POST['ufname']);
		$user->ulname = ucfirst($_POST['ulname']);
		$user->uaddress  = ucfirst($_POST['uaddress']);    
		$user->ustate  = ucfirst($_POST['ustate']);    
		$user->uzip  = ($_POST['uzip']);    
		$user->umobile =  ($_POST['umobile']);    
		
		if($user->ufname == "" || $user->ulname == "" || $user->uaddress == "" || $user->ustate == "" || $user->uzip == "" || $user->umobile == ""){
			echo "please insert all the fields <br>";
		} else {		
			$user->insert();
			echo "<script>";
			echo "alert('Record has been saved in the database.');";
			echo "</script>";
		}
	}
  
	// Edit user
	if(isset($_POST['update'])){
		$user->uid =($_POST['uid']);
		$user->ufname = ucfirst($_POST['ufname']);
		$user->ulname = ucfirst($_POST['ulname']);
		$user->uaddress  = ucfirst($_POST['uaddress']);    
		$user->ustate  = ucfirst($_POST['ustate']);    
		$user->uzip = ($_POST['uzip']);    
		$user->umobile = $_POST['umobile'];    
     
		if($user->ufname =="" || $user->ulname=="" || $user->uaddress=="" || $user->ustate =="" || $user->uzip=="" || $user->umobile==""){
			echo "Please insert all the fields <br>";
		} else {
			$user->update();
			header("Location:index.php");
			exit;
		}
	}
  
	// Delete user
	if (isset($_GET['uid'])){      
		$user->uid = $_GET['uid'];
		echo "<script>";
		echo "alert('Record has been erased in the database.');";
		echo "</script>";
		$user->delete();
		header("Location:index.php");
		//exit;
	}
?>

<!-- insert.php -->
<html>
<head>
<title>Users Address Book</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<h1 align="center" class="well">ADDRESS BOOK</h1>
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<button onclick="myFunction()">Print</button>

	<script>
		function myFunction() 
		{
			window.print();
		}
</script>

<br>
	<center>
		<input type='button' class="btn btn-default" name='add' value='Add Contacts' onclick=javascript:location.href='create.php' title="Click here to add records in the database." />
	</center>
	<br>
	<table border='1' align="center" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>USERS ID</th>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>ADDRESS</th>
			<th>STATE</th>
			<th>ZIP</th>
			<th>MOBILE NUMBER</th>
			<th>ACTIONS</th>
		</tr>
	</thead>
	
	<?php 
		$data = $user->display(); 
		$i = 0; 
		foreach( $data as $eachrecord ) {
			$i++;
	?>
	<tbody>
		<tr>
			<td><?php echo $i; ?> </td>
			<td><?php echo $eachrecord ['fname']; ?></td>
			<td><?php echo $eachrecord ['lname']; ?></td>
			<td><?php echo $eachrecord ['address']; ?></td>
			<td><?php echo $eachrecord ['state']; ?></td>
			<td><?php echo $eachrecord ['zip']; ?></td>
			<td><?php echo $eachrecord ['mobile']; ?></td>
			<td>
				<a href="index.php?uid=<?php echo $eachrecord['id']; ?>" title="Click here to delete record in the database." >DELETE</a> 
				<a href="update.php?uid=<?php echo $eachrecord['id']; ?>" title="Click here to update record in the database.">UPDATE</a> 
			</td>
		</tr>
	</tbody>
	<?php 
		} 
	?>
	</table>
	</div>
</body>
</html>
