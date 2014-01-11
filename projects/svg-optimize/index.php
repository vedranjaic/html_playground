<?php include '../../header.php';

	// SVG Optimization 
	// Only set these four bad boys and fire away
	$svg_original_file = "jez.svg";
	$svg_minified_l_file = "jez-3.min.svg";
	$svg_minified_m_file = "jez-2.min.svg";
	$svg_minified_s_file = "jez-1.min.svg";
	
	// Original file
	$svg_original_filepath = "images/" .$svg_original_file;
	$svg_original_filesize = round((filesize(dirname(__FILE__). "/images/" .$svg_original_file)/1024), 2)." kb";
	
	// Minified L file
	$svg_minified_l_filepath = "images/" .$svg_minified_l_file;
	$svg_minified_l_filesize = round((filesize(dirname(__FILE__). "/images/" .$svg_minified_l_file)/1024), 2)." kb";

	// Minified M file
	$svg_minified_m_filepath = "images/" .$svg_minified_m_file;
	$svg_minified_m_filesize = round((filesize(dirname(__FILE__). "/images/" .$svg_minified_m_file)/1024), 2)." kb";

	// Minified S file
	$svg_minified_s_filepath = "images/" .$svg_minified_s_file;
	$svg_minified_s_filesize = round((filesize(dirname(__FILE__). "/images/" .$svg_minified_s_file)/1024), 2)." kb";

?>

	<div class="page svg-optimize">
		
		<h3>SVG Optimize</h3>
		<hr>

		<div class="row">

			<div class="svg-original svg-sample col-sm-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h5 class="clearfix">
							<span class="pull-left">
								ORIGINAL SVG 1.1<br>
								Untouched
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
						<i class="fa fa-picture-o"></i> <?= $svg_original_file; ?> - <i class="img-dimensions"></i>
					</div>
					<!-- /.panel-footer -->
				</div>
				<!-- /.panel panel-success -->
			</div>
			<!-- /.svg-original -->

			<div class="svg-minified svg-sample col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h5 class="clearfix">
							<span class="pull-left">
								MINIFIED SVG 1.1<br>
								Precision: 3
							</span>
							<span class="img-filesize pull-right">
								<?php echo $svg_minified_l_filesize; ?>
							</span>
						</h5>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body img-outer-min-3 text-center">
						<img src="<?= $svg_minified_l_filepath; ?>" alt="">
					</div>
					<!-- /.panel-body -->
					<div class="panel-footer text-muted text-center">
						<i class="fa fa-picture-o"></i> <?= $svg_minified_l_file; ?><br>
						Dimensions: <i class="img-dimensions"></i><br>
						Resized: <i class="img-outer-dimensions img-min-3"></i>
					</div>
					<!-- /.panel-footer -->
				</div>
				<!-- /.panel panel-default -->
			</div>
			<!-- /.svg-minified -->

			<div class="svg-minified svg-sample col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h5 class="clearfix">
							<span class="pull-left">
								MINIFIED SVG 1.1<br>
								Precision: 2
							</span>
							<span class="img-filesize pull-right">
								<?php echo $svg_minified_m_filesize; ?>
							</span>
						</h5>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body img-outer-min-2 text-center">
						<img src="<?= $svg_minified_m_filepath; ?>" alt="">
					</div>
					<!-- /.panel-body -->
					<div class="panel-footer text-muted text-center">
						<i class="fa fa-picture-o"></i> <?= $svg_minified_m_file; ?><br>
						Dimensions: <i class="img-dimensions"></i><br>
						Resized: <i class="img-outer-dimensions img-min-2"></i>
					</div>
					<!-- /.panel-footer -->
				</div>
				<!-- /.panel panel-default -->
			</div>
			<!-- /.svg-minified -->

			<div class="svg-minified svg-sample col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h5 class="clearfix">
							<span class="pull-left">
								MINIFIED SVG 1.1<br>
								Precision: 1
							</span>
							<span class="img-filesize pull-right">
								<?php echo $svg_minified_s_filesize; ?>
							</span>
						</h5>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body img-outer-min-1 text-center">
						<img src="<?= $svg_minified_s_filepath; ?>" alt="">
					</div>
					<!-- /.panel-body -->
					<div class="panel-footer text-muted text-center">
						<i class="fa fa-picture-o"></i> <?= $svg_minified_s_file; ?><br>
						Dimensions: <i class="img-dimensions"></i><br>
						Resized: <i class="img-outer-dimensions img-min-1"></i>
					</div>
					<!-- /.panel-footer -->
				</div>
				<!-- /.panel panel-default -->
			</div>
			<!-- /.svg-minified -->

		</div>
		<!-- /.row -->

	</div>
	<!-- /.svg-optimize -->

<?php include '../../footer.php';?>