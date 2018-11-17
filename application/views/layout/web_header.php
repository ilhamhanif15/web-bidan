<!-- <div class="jumbotron text-center bg-custom headWeb" style="margin-bottom:0;background-position: 0px -100px;">
	  <h1>Selamat Datang Di Website GO Bidan!</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p> 
	</div> -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" height="350" src="<?php echo base_url().'assets/photo/bg1.jpg' ?>" alt="First slide">
		      <div class="carousel-caption d-none d-md-block">
			    <h5>Selamat Datang di Website GO BIDAN!</h5>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" height="350" src="<?php echo base_url().'assets/photo/bg1.jpg' ?>" alt="Second slide">
		      <div class="carousel-caption d-none d-md-block">
			    <h5>...</h5>
			    <p>...</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" height="350" src="<?php echo base_url().'assets/photo/bg1.jpg' ?>" alt="Third slide">
		      <div class="carousel-caption d-none d-md-block">
			    <h5>...</h5>
			    <p>...</p>
			  </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #4d986c">
			<span class="container">
			  <a class="navbar-brand" href="#">
			  	<img width="60" height="50" class="d-inline-block align-top" src="<?php echo base_url().'assets/photo/logo.png' ?>" alt="">
			  </a>
			  <button class="navbar-toggler" id="btnToggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav" style="width: 100%">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Konten
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Infografis Tumbuh Kembang Anak</a>
			          <a class="dropdown-item" href="#">Infografis Parenting</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Tokoh Inspiratif</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Aksi Nyata bidan</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url().'post-page' ?>">Book Recommendation</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Jadwal</a>
			      </li>
			    </ul>
			    <form class="form-inline mx-2 my-auto d-inline" style="width: 100%" >
			        <div class="input-group">
				      <input type="text" class="form-control" placeholder="Search..." style="margin-left: 60%;" id="search">
				       <span class="input-group-append">
				       	<button class="btn btn-outline-light my-2 my-sm-0" id="btnSearch" style="border-radius: 0px;" type="submit" type="button"><i class="fa fa-search" ></i></button>
				       </span>
				    </div>
			    </form>
			  	<!-- <ul class="navbar-nav" style="margin-left: 10px;">
			  		<li class="nav-item" style="text-align: center">
			    	<a href="#" class="nav-link"><i class="fa fa-lg fa-user"></i><br/>Profil</a>
			    </li>
			  	</ul> -->
			  </div>
			</span>
		</nav>
	<!-- END OF NAVBAR -->