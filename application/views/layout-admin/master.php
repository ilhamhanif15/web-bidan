<!doctype html>
<html lang="en">
  <?php $this->load->view('layout-admin/header'); ?>
	<body>
  		<div class="wrapper">
		  	<?php $this->load->view('layout-admin/web_sidebar'); ?>
		    <div class="container" style="margin-top: 30px;">
		    	<?php $this->load->view('layout-admin/web_header') ?>
				<?php $this->load->view('content-admin/'.$page) ?>
				<?php $this->load->view('layout-admin/web_footer') ?>
			</div>
		</div>
		<?php $this->load->view('layout-admin/footer') ?>
	</body>
</html>