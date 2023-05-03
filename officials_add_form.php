<?php include 'server/server.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Official - Barangay Guinsangaan Health Service System</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'templates/main-header.php' ?>
		<?php include 'templates/sidebar.php' ?>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row mt--2">
						<div class="col-md-12">
							<?php include 'templates/loading_screen.php' ?>
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">
											<h1>
                                            <a href="resident.php" class="text-primary">OFFICIAL</a> > <strong class="text-default">CREATE</strong></h1>
										</div>
									</div>
								</div>
								<div class="card-body">
                                    <form method="POST" action="officials_add_record.php">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control mb-1" id="name" name="name" required>
                                                </div>
                                                    <div class="form-group">
                                                        <label>Term Start:</label>
                                                        <input type="date" class="form-control" name="termstart" id="date" value="<?= ucwords($row['termstart']) ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Term End</label>
                                                        <input type="date" class="form-control" name="termend" id="date" value="<?= ucwords($row['termend']) ?>" required>
                                                    </div>
                                                <div class="form-group">
                                                    <label for="chairmanship">Chairmanship</label>
                                                    <select class="form-control" id="chairmanship" name="chairmanship" required>
														<option selected="true" disabled="disabled">--</option>
														<option>Presiding Officer</option>
														<option>Committee On Appropriation</option>
                                                        <option>Committee On Peace & Order</option>
                                                        <option>Committee On Health</option>
                                                        <option>Committee On Education</option>
                                                        <option>Committee On Sports</option>
                                                        <option>Committee on Rules</option>
                                                        <option>Committee on Infra</option>
                                                        <option>Committee on Solid Waste</option>
                                                        <option>No Chairmanship</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">Position</label>
                                                    <select class="form-control" id="position" name="position" required>
														<option selected="true" disabled="disabled">--</option>
                                                        <option>Captain</option>
														<option>Treasurer</option>
														<option>SK Chairman</option>
                                                        <option>Secretary</option>
                                                        <option>Councilor 1</option>
                                                        <option>Councilor 2</option>
                                                        <option>Councilor 3</option>
                                                        <option>Councilor 4</option>
                                                        <option>Councilor 5</option>
                                                        <option>Councilor 6</option>

                                                    </select>
                                                </div>
                                            <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="status" required>
														<option selected="true" disabled="disabled">--</option>
														<option>Inactive</option>
														<option>Active</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary mt-2 mb-2">Create</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
								</div>
								<!-- end of medicine table -->
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
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
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