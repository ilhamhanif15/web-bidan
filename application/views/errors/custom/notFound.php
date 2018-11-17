<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->	
    <link rel="stylesheet" href="<?php echo parse_url(base_url().'assets/bootstrap4/css/bootstrap.min.css', PHP_URL_PATH) ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo parse_url(base_url().'assets/additional/custom.css', PHP_URL_PATH) ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <title>Not Found :(</title>
  </head>

  <body style="background-color: #d7e3db">
  	<div class="row" style="margin-top: 70px; ">
  		<div class="col-md-6">
  			<center style="margin-left: 80px">
	  			<h1 style="margin-top: 110px;font-style: italic;font-family: initial;">404 Not Found :(</h1>
	  			<p style="font-family: initial;text-align: center;font-style: italic;font-size: 18px;">
	  				It seems our monkey worker confuse with the address you put<br>Let our monkey help you to guide back to the home page.
	  			</p>
	  			<a href="<?php echo base_url() ?>">
	  				<button class="btn btn-lg btn-primary" style="width: 75%;margin-top: 3%;">HOME</button>
	  			</a>
  			</center>
  		</div>
  		<div class="col-md-6">
  			<center>
  				<img src="<?php echo base_url().'assets/photo/Monkey404.png' ?>" height=400 width=500>
  			</center>
  		</div>
  	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo parse_url(base_url().'assets/bootstrap4/js/bootstrap.min.js', PHP_URL_PATH) ?>"></script>
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
    <script type="text/javascript">
    	$( "#search" ).focusin(function() {
		  $(this).animate({
		  	marginLeft: '0%'
		  });
		}).focusout(function(){
			$(this).animate({
				marginLeft: '60%'
			});
		});

		//Sticky Navbar
		window.onscroll = function() {stickyNav()};
		// Get the navbar
		var navbar = document.getElementById("navbar");
		// Get the offset position of the navbar
		var sticky = navbar.offsetTop;
		function stickyNav(){
			 if (window.pageYOffset >= sticky) {
			    navbar.classList.add("fixed-top")
			  } else {
			    navbar.classList.remove("fixed-top");
			  }
		}
    </script>
  </body>
</html>