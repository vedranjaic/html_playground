<?php include '../../header.php';?>

	<div class="page svg-animate">
		
		<h1>SVG</h1>

		<div class="row">

			<div class="col-xs-6 col-sm-3">
				<div class="panel panel-primary text-center">
					<div class="panel-heading">
						<h5>SVG 1.1<br>CSS Presentation</h5>
						<h6 class="img-size"></h6>
						<h6 class="img-kila">
							<?php 
								$putanja = "images/jez-ill-presentation.min.svg";
								$kilobajtaza = round((filesize(dirname(__FILE__). "/" .$putanja)/1024), 2)." kb";
								echo $kilobajtaza;
							?>
						</h6>
					</div>
					<div class="panel-body">
						<img src="<?= $putanja; ?>" alt="">
					</div>
				</div>
				<!-- /.panel panel-primary -->
			</div>
			<!-- /.col-xs-6 col-sm-3 -->

			<div class="col-xs-6 col-sm-3">
				<div class="panel panel-success text-center">
					<div class="panel-heading">
						<h5>SVG 1.1<br>CSS Style Attribute ER</h5>
						<h6 class="img-size"></h6>
					</div>
					<div class="panel-body">
						<img src="images/jez-ill-style-attr-er.svg" alt="">
					</div>
				</div>
				<!-- /.panel panel-success -->
			</div>
			<!-- /.col-xs-6 col-sm-3 -->

			<div class="col-xs-6 col-sm-3">
				<div class="panel panel-info text-center">
					<div class="panel-heading">
						<h5>SVG 1.1<br>CSS Style Attribute</h5>
						<h6 class="img-size"></h6>
					</div>
					<div class="panel-body">
						<img src="images/jez-ill-style-attr.svg" alt="">
					</div>
				</div>
				<!-- /.panel panel-info -->
			</div>
			<!-- /.col-xs-6 col-sm-3 -->

			<div class="col-xs-6 col-sm-3">
				<div class="panel panel-danger text-center">
					<div class="panel-heading">
						<h5>SVG 1.1<br>CSS Style Elements</h5>
						<h6 class="img-size"></h6>
					</div>
					<div class="panel-body">
						<img src="images/jez-ill-style-elem.svg" alt="">
					</div>
				</div>
				<!-- /.panel panel-danger -->
			</div>
			<!-- /.col-xs-6 col-sm-3 -->

		</div>
		<!-- /.row -->

	</div>
	<!-- /.svg-animate -->

<?php include '../../footer.php';?>