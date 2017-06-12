<?php include 'inc.aplication_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<?php  include_once '/application/includes/inc.head.php'; ?>
	<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
	<link rel="stylesheet" href="assets/css/select2.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-editable.min.css" />
	<body class="no-skin">
		<?php  include_once '/application/includes/inc.top.php'; ?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<?php 
				include_once '/application/includes/inc.control.lateral.php';
				include_once '/application/includes/inc.menu.lateral.php';
				?>
			</div>
			<?php  
			include_once '/application/view/proyeccion-social.phtml'; 
			include_once '/application/includes/inc.footer.php'; 
			?>
		</div>
		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-editable.min.js"></script>
		<script src="assets/js/ace-editable.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
	</body>
</html>