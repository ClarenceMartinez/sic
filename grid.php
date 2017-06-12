<?php include 'inc.aplication_top.php'; ?>
<!DOCTYPE html>
<html lang="en">

	<?php  include_once '/application/includes/inc.head.php'; ?>
	<style>
		.center {
			text-align: center;
		}
		.center [class*="col-"] {
			margin-top: 2px;
			margin-bottom: 2px;

			position: relative;
			text-overflow: ellipsis;
		}
		.center [class*="col-"]  div{
		  position: relative;
		  z-index: 2;
		  
		  	padding-top: 4px;
			padding-bottom: 4px;
			
		  display: block;
		  overflow: hidden;
		  text-overflow: ellipsis;
		  white-space: nowrap;

		  width: 100%;
		}
		.center [class*="col-"]  div span{
		  position: relative;
		  z-index: 2;
		}
		.center [class*="col-"] div:before {
			display: block;
			content: "";
			
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			z-index: 1;
			
			border: 1px solid #DDD;
		}

		.center [class*="col-"] div:hover:before {
			background-color: #FCE6A6;
			border-color: #EFD27A;
		}
	</style>
	<body class="no-skin">
		<?php  include_once '/application/includes/inc.top.php'; ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<?php 
				include_once '/application/includes/inc.control.lateral.php';
				include_once '/application/includes/inc.menu.lateral.php';
				?>
			</div>

			<?php  
			include_once '/application/view/grid.phtml'; 
			include_once '/application/includes/inc.footer.php'; 
			?>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

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

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
