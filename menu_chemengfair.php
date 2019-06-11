<?php
require 'admin/function.php';
include 'header.php';
$index = query ("SELECT * FROM chemengfair WHERE id_chemeng>0");
?>

<!DOCTYPE html>
<html>

<body id="page-top">
	<section id="about" class="light-bg">
		<div class="row">
			<!-- about module -->
			<div class="col-md-4 text-center">
				<a href="chem_semnas.php">
					<div class="mz-module">
						<div class="mz-module-about" href="#">
							<i class="fa fa-briefcase color1 ot-circle"></i>
							<h3>SEMINAR NASIONAL</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-4 text-center">
				<a href="chem_iso.php">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-photo color2 ot-circle"></i>
							<h3>ISO</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-4 text-center">
				<a href="chem_cesa.php">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-camera-retro color3 ot-circle"></i>
							<h3>CESA</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-4 text-center">
				<a href="chem_s2c.php">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-cube color4 ot-circle"></i>
							<h3>S2C</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-4 text-center">
				<a href="chem_ception.php">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-cube color4 ot-circle"></i>
							<h3>CEPTION</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-4 text-center">
				<a href="chem_ma.php">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-cube color4 ot-circle"></i>
							<h3>CHEMENG AWARDS</h3>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
</body>
<?php include 'footer.php'?>

</html>