<!DOCTYPE html>
<html>
<head>
  <title>anonreply</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">logo</a>
      </div>
      
        <ul class="nav navbar-nav navbar-right">
        <li><a href="reg.php">
                       Register 
                    </a></li>

          <li><a href="login.php">
                         Login
                    </a></li>

        </ul>
      </div>
    </div>
  </nav>
<div class="container">
	<div class="row">
	<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-5">
  <input id="Name" name="Name" type="text" placeholder="username" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md" required="">
    <span class="help-block">max 16 characters</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm_password">Confirm Password</label>
  <div class="col-md-5">
    <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-type password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="Female">
      Female
    </label>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailId">Email Id</label>  
  <div class="col-md-6">
  <input id="emailId" name="emailId" type="text" placeholder="user@domain.com" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="emailId">Profile image</label>  
  <div class="col-md-6">
<input type="file" name="pic" accept="image/*">
  
  </div></div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
	</div>
</div>
</body>
</html>