

<!DOCTYPE html>
<html lang="en">


 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
	
	<style>
	.textred{
		color:red;
	}
	</style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">DotA 2</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="textred" href="index.php">Continue as a Guest</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="login" class="content-section text-center">
             <div class="container">
               <br><h1 align="center"><b><br /><br />Welcome to DotA 2</b> 
			  </h1>
			  <br> <h3> <?php 
				
				if (isset($_GET['error'])) {
					if($_GET['error'] == 'uidpwd'){
						echo "Your username or password is incorrect!";
					}
				}
				
			   else if(!isset($_SESSION['uid'])  || empty($_SESSION['uid'])) {
					echo 'Welcome Guest.';
						} else {
					echo 'Welcome ' . $_SESSION['uid'];
								}; 
			 ?></h3>
       
<br><br><br><br>
      
<form class="form-horizontal" action="login.php" method="POST">
    <div class="form-group">
    <label class="col-xs-2 control-label" for="inputSuccess" >Username</label>
                <div class="col-xs-10">
                    <input type="text"  class="form-control" name="username" placeholder="Username" />
                    
                    
                </div>
</div>
    
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
         <div class="col-xs-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" >
       
         </div>
    </div>
	
    
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
         <div class="checkbox">
             <label><input type="checkbox"> Remember Me </label>
         </div>
    </div>
    </div>
     <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Login</button>
			
        </div>
         </div>
		 
</form>   

      
	  </div>
	
        
</section>

    

     <!-- Footer -->
    <footer>
        <div class="container text-center">
           <span class="copyright">Copyright &copy; GuanYingMaDotA2 2017</span>
        </div>
    </footer>

  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>


</body>

</html>
