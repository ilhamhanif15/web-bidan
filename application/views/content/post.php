<nav aria-label="breadcrumb">
  <ol class="breadcrumb custom">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="col-md-12 pl-0 custom-head">
			<span class="span-head">
				Tokoh Inspiratif
			</span>
			<p class="card-text sub-custom float-right" style="margin-top: 17px;margin-right: -13px;"><a href="#">Learn More</a></p>
		</div>
	</div>
  	<div class="col-md-12 col-sm-12">
  		<div class="card border-light bg-wb mb-3" style="max-width: 100%;">
		  	<div class="card-body">
			    <div class="row">
			    	<div class="col-md-2">
			    		<img src="<?php echo base_url() ?>assets/photo/Child.JPG" style="width: 150px;height: 120px;" class="rounded float-left" alt="Thumbnails">
			    	</div>
			    	<div class="col-md-10">
			    		<h1 class="post-tittle">Posting Tittle In Here ?</h1>
			    		<p class="sub-custom">
			    			Posted By Admin on 15 October 2018 12:13 AM<br/>
			    			Dilihat sebanyak 34 kali
			    			<!-- Updated on 17 October 2018 12:00 AM -->
			    		</p>
			    		<span class="float-right">
			    			<button onClick="window.open('http://www.facebook.com/sharer.php?u=[URL]','name','width=600,height=400')" class="btn btn-sm pt-0 pb-0 ic-social" style="background: #3B5998;" ><i class="fa fa-facebook"></i></button>
			    			<button onClick="window.open('http://twitter.com/share?text=$[TITLE]&url=[URL_FULL]&hashtags=[HASHTAG]','name','width=600,height=400')" class="btn btn-sm pt-0 pb-0 ic-social" class="btn btn-sm pt-0 pb-0 ic-social" style="background: #55ACEE;"><i class="fa fa-twitter"></i></button>
			    			<button onClick="window.open('https://plus.google.com/share?url=[URL_FULL]','name','width=600,height=400')" class="btn btn-sm pt-0 pb-0 ic-social" class="btn btn-sm pt-0 pb-0 ic-social" style="background: #dd4b39;"><i class="fa fa-google"></i></button>
			    		</span>
			    	</div>
			    	<div class="col-md-12">
			    		<hr/>
			    		<p style="text-align: justify;">
			    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    			<br/>
			    			<br/>
			    			<!-- <img src="<?php echo base_url() ?>assets/photo/Child.JPG"> -->
			    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    			<br/>
			    			<br/>
			    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    		</p>
			    	</div>
			    	<div class="col-md-12">
			    		<hr/>
			    		<span class="float-right">
			    			<button onClick="window.open('http://www.facebook.com/sharer.php?u=[URL]','name','width=600,height=400')" class="btn btn-sm pt-0 pb-0 ic-social" style="background: #3B5998;" ><i class="fa fa-facebook"></i></button>
			    			<button onClick="window.open('http://twitter.com/share?text=$[TITLE]&url=[URL_FULL]&hashtags=[HASHTAG]','name','width=600,height=400')" class="btn btn-sm pt-0 pb-0 ic-social" class="btn btn-sm pt-0 pb-0 ic-social" style="background: #55ACEE;"><i class="fa fa-twitter"></i></button>
			    			<button onClick="window.open('https://plus.google.com/share?url=[URL_FULL]','name','width=600,height=400')" class="btn btn-sm pt-0 pb-0 ic-social" class="btn btn-sm pt-0 pb-0 ic-social" style="background: #dd4b39;"><i class="fa fa-google"></i></button>
			    		</span>
			    	</div>
			    </div>
		  	</div>
		</div>
  	</div>

  	<div class="col-md-12 col-sm-12">
		<div class="col-md-12 pl-0 custom-head">
			<span class="span-head">
				Lihat Post Lainnya
			</span>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card-body row">
		<?php 
		for ($i=0; $i < 4; $i++) {
		?>
			<div class="col-md-3 col-sm-12 mb-3">
				<div class="card card-hover" style="width: 100%;cursor: pointer">
					<div class="item-label">
						<span class="badge badge-pill badge-success">New</span>
					</div>
					  <img class="card-img-top" height="200" src="<?php echo base_url().'assets/photo/img1cap.jpg' ?>" alt="Card image cap">
					  <div class="card-body" style="padding-top: 15px;">
					    <h5 class="card-title mb-0" style="">Card title</h5>
					    <span class="badge badge-info font-tiny pr-2">Infografis Tumbuh Kembang Anak</span>
					    <p class="sub-custom font-tiny">
					    	Posted by Admin
					    	<br>12 October 2018 13:23 AM
					    </p>
					    <p class="card-text sub-custom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua...</p>
					    <p class="sub-custom font-tiny">Dilihat sebanyak 250 Kali</p>
					  </div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>