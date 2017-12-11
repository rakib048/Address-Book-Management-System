<?php
require_once('user.php');

//Instantiate user object
$user = new user();
?>

<html>
<title>Users Address Book</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<head>


</head>

<body>
 <div class="container"> 
 <hr style="height:5px;border:none;color:#333;background-color:#333;" />
<h1 align="center">
Update Record </h1>
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<br>
  <?php
    $uid = $_GET['uid'];
    $row = $user->getUserById($uid);
  ?>
  
 <div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form action="index.php" method="post" class="form-horizontal">
		   <input type="hidden" name="uid" value="<?php echo $uid;?>"  />

		
	<div class="form-group">
		<label for="ufname" class="col-sm-2">First Name:  </label>
		<div class="col-sm-10">
		<input type='text' class="form-control" name='ufname' id="ufname" value="<?php echo $row['fname']?>"  size="30" />
		</div>
	</div>
	
    <div class="form-group">
		<label for="ulname"  class="col-sm-2">Last Name:  </label>
		<div class="col-sm-10">
		<input type='text' class="form-control" name='ulname' id="ulname" value="<?php echo $row['lname']?>"  size="30"/>
		</div>
	</div>
	
    <div class="form-group">
		<label for="uaddress"  class="col-sm-2">Address:  </label>
		<div class="col-sm-10">
		<input type='text' class="form-control" name='uaddress' id="uaddress" value="<?php echo $row['address']?>"  size="30" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="ustate"  class="col-sm-2">State:  </label>
		<div class="col-sm-10">
		<input type='text' class="form-control" name='ustate' id="ustate" value="<?php echo $row['state']?>"  size="30" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="uzip"  class="col-sm-2">Zip:  </label>
		<div class="col-sm-10">
		<input type='number' class="form-control" name='uzip' id="uzip" value="<?php echo $row['zip']?>"   size="30" maxlength="4"/>
		</div>
	</div>
	
    <div class="form-group">
		<label for="uaddress"  class="col-sm-2">Mobile number:  </label>
		<div class="col-sm-10">
		<input type='text' class="form-control" name='umobile' id="umobile" value="<?php echo $row['mobile']?>" size="30" maxlength="14" />
		</div>
	</div> 
	<input type='submit' name='update' class="btn btn-success pull-right" value='Update Record' 
	  title="Click here to save the record in the database."/>
	</div> 
</div> 
   
  </form>        
  </div>
</body>
</html>