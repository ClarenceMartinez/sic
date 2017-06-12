<?php include 'inc.aplication_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<?php  include_once '/application/includes/inc.head.php'; ?>
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
			include_once '/application/view/content-slider.phtml'; 
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
		<script type="text/javascript">
			jQuery(function($) {
				$('.modal.aside').ace_aside();
				
				$('#aside-inside-modal').addClass('aside').ace_aside({container: '#my-modal > .modal-dialog'});
				
				//$('#top-menu').modal('show')
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove before leaving page
					$('.modal.aside').remove();
					$(window).off('.aside')
				});
				
				
				//make content sliders resizable using jQuery UI (you should include jquery ui files)
				//$('#right-menu > .modal-dialog').resizable({handles: "w", grid: [ 20, 0 ], minWidth: 200, maxWidth: 600});
			})
		</script>
	</body>
</html>
