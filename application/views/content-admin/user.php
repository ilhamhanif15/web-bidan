<div id="content">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	    <div class="container-fluid">

	        <button type="button" id="sidebarCollapse" class="btn btn-info">
	            <i class="fas fa-align-left"></i>
	            <span>Toggle Sidebar</span>
	        </button>
	        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <i class="fas fa-align-justify"></i>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="nav navbar-nav ml-auto">
	                <li class="nav-item active">
	                    <a class="nav-link" href="#">Tambah</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>
	<div class="row">
		<div class="col-md-12">
			<div class="card pad12">
				<!-- <div class="table-responsive">
				  	<table class="table table-striped">
		  				<caption>
		  					Showing 1 to 3 of 3
		  					<nav aria-label="..." class="float-right">
							  <ul class="pagination">
							    <li class="page-item disabled">
							      <a class="page-link" href="#" tabindex="-1">Previous</a>
							    </li>
							    <li class="page-item active"><a class="page-link" href="#">1</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#">2</a>
							    </li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#">Next</a>
							    </li>
							  </ul>
							</nav>
		  				</caption>
						<thead>
							<tr>
							  <th scope="col">ID</th>
							  <th scope="col">Username</th>
							  <th scope="col">Name</th>
							  <th scope="col">Role</th>
							  <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark</td>
							  <td>Otto</td>
							  <td>@mdo</td>
							  <td>
							  	<button class="btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></button>
							  	<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
							  </td>
							</tr>
						</tbody>
						<div class="table-tittle float-left">
							Tabel User
						</div>
						<div class="input-group search-table float-right">
						  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-outline-primary" type="button"><i class="fa fa-search"></i></button>
						  </div>
						</div>
					</table>
				</div> -->
				<table id="table-data" class="table table-striped table-bordered" style="width:100%">
				    <thead>
				        <tr>
				            <th>ID</th>
				            <th>Username</th>
				            <th>Name</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>

				    	<?php
				    		foreach ($list->result() as $r){
				    	?>
				        <tr>
				            <td><?php echo $r->id ?></td>
				            <td><?php echo $r->username ?></td>
				            <td><?php echo $r->name ?></td>
				            <td>
							  	<button class="btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></button>
							  	<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  	</td>
				        </tr>
				        <?php } ?>

				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>