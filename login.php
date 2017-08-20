

<!DOCTYPE html>
<html><head>
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

  
<div class="row">
<div class="col-sm-12">
</br>
</br>
<center>
            <div class="well" style="height: 350px; width: 350px;">

            
                    <h3>Log In</h3>
                   
                    <form class="form-horizontal" role="form" method="post" action="connect.php"  enctype="multipart/form-data">
                       
                        <div class="form-group">
                            
                            
                                <input id="email" maxlength="30" name="email" type="text" placeholder="email" class="form-control">
                            </div>
                        
                        <div class="form-group">
                            
                            
                                <input id="password" maxlength="30" name="password" type="password" placeholder="Password" class="form-control">
                            </div>

                        
                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-lg btn-block btn-primary">Login</button>
                                <input type="hidden" name="next" value="" />
                                </form>
                    
                    </div>
                    </center>

    
    
    </div>
</div>

  <form></form>




</body>
</html>