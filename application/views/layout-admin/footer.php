<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo parse_url(base_url().'assets/bootstrap4/js/bootstrap.min.js', PHP_URL_PATH) ?>"></script>
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
    <script type="text/javascript">

		$('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    </script>