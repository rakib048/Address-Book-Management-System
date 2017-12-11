<!-- insert.php -->
<html>
<head>
<title>Users Address Book</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<h1 align="center" class="well">
Add Record </h1>
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<br>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<form action="index.php" method="post" class="form-horizontal">
		
		<div class="form-group">
			<label for="ufname" class="col-sm-2">First Name:  </label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name='ufname' id="ufname" placeholder="Enter your name" size="30">
			</div>
		</div>

		<div class="form-group">
			<label for="ulname"  class="col-sm-2">Last Name:  </label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name='ulname' id="ulname" placeholder="Enter your last name" size="30" >
			</div>
		</div>
		
		<div class="form-group">
			<label for="uaddress"  class="col-sm-2">Address:  </label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name='uaddress' id="uaddress" placeholder="Enter your address" size="30" >
			</div>
		</div>
    
		<div class="form-group">
			<label for="ustate"  class="col-sm-2">State:  </label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name='ustate' id="ustate" placeholder="Enter your state" size="30" >
			</div>
		</div>
      
		<div class="form-group">
			<label for="uzip"  class="col-sm-2">Zip:  </label>
			<div class="col-sm-10">
			<input type="number" class="form-control" name='uzip' id="uzip" placeholder="Enter your zip" size="30" maxlength="4">
			</div>
		</div>
      
		<div class="form-group">
			<label for="uaddress"  class="col-sm-2">Mobile number:  </label>
			<div class="col-sm-10">
			<input type="number" class="form-control" name='umobile' id="umobile" placeholder="Enter your mobile number" size="30" maxlength="14">
			</div>
		</div>
    <input type='submit' name='submit' class="btn btn-success pull-right"value='Save Record' 
	  title="Click here to save the record in the database."/>
</form>
		</div>
</div>
</div>
</body>
</html>