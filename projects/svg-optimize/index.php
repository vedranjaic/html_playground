<?php include '../../header.php';

	// SVG Optimization 
	// Only set these two bad boys and fire away
	$svg_original_file = "jez-ill-presentation.svg";
	$svg_minified_file = "jez-ill-presentation.min.svg";
	
	// Original file
	$svg_original_filepath = "images/" .$svg_original_file;
	$svg_original_filesize = round((filesize(dirname(__FILE__). "/images/" .$svg_original_file)/1024), 2)." kb";
	
	// Minified file
	$svg_minified_filepath = "images/" .$svg_minified_file;
	$svg_minified_filesize = round((filesize(dirname(__FILE__). "/images/" .$svg_minified_file)/1024), 2)." kb";

?>

	<div class="page svg-optimize">
		
		<h3>SVG Optimize</h3>
		<hr>

		<div class="row">

			<div class="svg-original col-sm-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h5 class="clearfix">
							<span class="pull-left">
								ORIGINAL SVG 1.1<br>
								<i class="img-dimensions"></i>
							</span>
							<span class="img-filesize pull-right">
								<?php echo $svg_original_filesize; ?>
							</span>
						</h5>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body text-center">
						<img src="<?= $svg_original_filepath; ?>" alt="">
					</div>
					<!-- /.panel-body -->
					<div class="panel-footer text-muted text-center">
						<i class="fa fa-picture-o"></i> <?= $svg_original_file; ?>
					</div>
					<!-- /.panel-footer -->
				</div>
				<!-- /.panel panel-success -->
			</div>
			<!-- /.svg-original -->

			<div class="svg-minified col-sm-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h5 class="clearfix">
							<span class="pull-left">
								MINIFIED SVG 1.1<br>
								<i class="img-dimensions"></i>
							</span>
							<span class="img-filesize pull-right">
								<?php echo $svg_minified_filesize; ?>
							</span>
						</h5>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body text-center">
						<img src="<?= $svg_minified_filepath; ?>" alt="">
					</div>
					<!-- /.panel-body -->
					<div class="panel-footer text-muted text-center">
						<i class="fa fa-picture-o"></i> <?= $svg_minified_file; ?>
					</div>
					<!-- /.panel-footer -->
				</div>
				<!-- /.panel panel-info -->
			</div>
			<!-- /.svg-minified -->

		</div>
		<!-- /.row -->

	</div>
	<!-- /.svg-optimize -->

<?php include '../../footer.php';?>