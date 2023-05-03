<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Barangay Info - Barangay Guinsangaan Health Service System</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'templates/main-header.php' ?>
		<?php include 'templates/sidebar.php' ?>
 
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<?php include 'templates/loading_screen.php' ?>
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title text-primary">
											<h1>BRGY VICINITY MAP</h1>
										</div>
									</div>
								</div>
								<div class="card-body">
                                <iframe
                                    width="100%"
                                    height="790"
                                    style="border:0"
                                    loading="lazy"
                                    allowfullscreen
                                    referrerpolicy="no-referrer-when-downgrade"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2898.1252868190077!2d124.95470455395495!3d10.357678449503616!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3307117c23af8ad1%3A0xd92d5ad3f4d5d090!2sGuinsangaan%2C%20Bontoc%2C%20Southern%20Leyte!5e0!3m2!1sen!2sph!4v1682557686825!5m2!1sen!2sph">
                                </iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
	</div>
	<?php include 'templates/footer.php' ?>
	<style>
		.text-primary, .text-primary a{
			color: #1c9790 !important;
		}

		.btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:disabled{
			background: #1c9790 !important;
			border-color: #1c9790 !important;
		}

        .text-primary:hover, .text-primary a:hover{
			color: #1c9790 !important;
		}
	</style>
</body>
</html>