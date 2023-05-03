<?php include 'server/server.php' ?>
<?php 
    $id = $_GET["id"];
	$query = "SELECT * FROM tbl_officials WHERE id='$id'";
    $result = $conn->query($query);

    $medicine = array();
	while($row = $result->fetch_assoc()){
		$medicine[] = $row; 
	}

    // category
	$query = "SELECT * FROM tbl_med_category ORDER BY category ASC";
    $result = $conn->query($query);

    $categories = array();
	while($row = $result->fetch_assoc()){
		$categories[] = $row; 
	}

    // unit
    $query = "SELECT * FROM tbl_med_unit ORDER BY unit ASC";
    $result = $conn->query($query);

    $units = array();
	while($row = $result->fetch_assoc()){
		$units[] = $row; 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Officials - Barangay Guinsangaan Health Service System</title>
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
                                            <a href="officials.php" class="text-primary">OFFICIALS</a> > <strong class="text-default">UPDATE</strong></h1>
										</div>
									</div>
								</div>
								<div class="card-body">
                                    <?php foreach($medicine as $row): ?>
                                        <form method="POST" action="officials_update_record.php">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" value="<?php echo $row['name'] ?>" name="name">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>termstart:</label>
                                                        <input type="date" class="form-control" name="termstart" id="date" value="<?= ucwords($row['termstart']) ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>termend:</label>
                                                        <input type="date" class="form-control" name="termend" id="date" value="<?= ucwords($row['termend']) ?>" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="chairmanship">Chairmanship</label>
                                                        <select class="form-control" id="chairmanship" name="chairmanship" required>
														<option selected="true" disabled="disabled"> <?php echo $row['chairmanship'] ?></option>
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
														<option selected="true" disabled="disabled"> <?php echo $row['position'] ?></option>
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
														<option selected="true" disabled="disabled"> <?php echo $row['status'] ?></option>
														<option>ACTIVE</option>
														<option>INACTIVE</option>
                                                        
                                                    </select>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary mt-2 mb-2">Update</button>
                                                    </div>
                                                    <input type="hidden" value="<?php echo $id ?>" name="id">
                                                </div>
                                                <div class="col-md-6"></div>
                                            </div>
                                        </form>
                                    <?php endforeach ?>
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