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
		<form>
		  	<div class="form-row align-items-center mb-3 mt-3">
			    <div class="col-md-2 my-1">
			      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
			        <option selected>Newest</option>
			        <option value="1">Oldest</option>
			      </select>
			    </div>
			    <div class="col-md-4 my-1">
			      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
			        <option selected>Semua Kategori</option>
			        <option>Infografis Tumbuh Kembang Anak</option>
			        <option>Infografis Parenting</option>
			        <option>Tokoh Inspiratif</option>
			        <option>Aksi Nyata Bidan</option>
			        <option>Book Recommendation</option>
			        <option>Jadwal</option>
			      </select>
			    </div>
			    <div class="col-md-6 my-1">
			      	<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
					  <div class="input-group-append">
					    <button class="btn btn-outline-primary" type="button"><i class="fa fa-search"></i></button>
					  </div>
					</div>
			    </div>
  			</div>
  		</form>
	</div>
  	<div class="col-md-12 col-sm-12">
  		<div class="card border-light bg-wb mb-3" style="max-width: 100%;">
		  	<div class="card-body">
			    <div class="row">
			    	<?php 
			    	for ($i=0; $i < 10; $i++) { 
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
			    	<div class="col-md-12 mt-1">
			    		<div class="mx-auto" style="width: 270px;">
			    		<nav aria-label="...">
						  <ul class="pagination">
						    <li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1">Previous</a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item active">
						      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#">Next</a>
						    </li>
						  </ul>
						</nav>
						</div>
			    	</div>
			    </div>
		  	</div>
		</div>
  	</div>
</div>