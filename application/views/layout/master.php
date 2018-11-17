<!doctype html>
<html lang="en">
  <?php $this->load->view('layout/header'); ?>

  <body>
  	<?php $this->load->view('layout/web_header'); ?>

    <div class="container" style="margin-top: 30px;">
		<?php $this->load->view('content/'.$page) ?>
	</div>
	<?php $this->load->view('layout/web_footer') ?>
    <?php $this->load->view('layout/footer') ?>
  </body>
</html>