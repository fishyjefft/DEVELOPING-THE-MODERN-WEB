<?php
session_start();

?>

<!DOCTYPE html>


  <head>
	<style>
	.red {
		color: red;
	}
	</style>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>

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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DotA 2</a>
        
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
			<a class="nav-link" href="index.php">Hey come on Come on</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

	
    <!-- Sign up -->
    <section id="signup">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">  
			<?php
					if (isset($_SESSION['id'])){
						
						echo 'Welcome, ' . $_SESSION['uid'];
         
												}
						
				?>
				</h2>
            <h3 class="section-subheading text-muted">Fishy - 0161234567  Choon - 0163216547  Bread - 0164563217</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/LV1ZV_DG3kI" frameborder="0" allowfullscreen></iframe>
			<p><h1 class ="red"> CONGRATULATION , YOU'VE GOT A DISCOUNT VOUCHER <h1></p>
              <img width="1024" height="622" src="img/discount1.jpg" alt="">
			  
            </a>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="signup.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  
            </form>
          </div>
        </div>
      </div>
    </section>
	  
	      <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; GuanYingMaDotA2 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
	
	
    </nav>
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

	<!-- Background Music -->
	<!-- <embed name="BGM" src="jiufeng.mp3" width="0" height="0"> -->	

	
  </body>

</html>

			  