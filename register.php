<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/header.php' ?>
	<title>Register -  Barangay Guinsangaan Health Service System</title>
	<style>
		.wrapper-login {
			background-image: url("./assets/img/login-bg.jpg");
			background-color: #cccccc;
			height: 500px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.container-fluid {
			padding: 0;
		}

		.card-size {
			height: 680px;
			width: 520px;
			margin-left: 65px;
		}
		
		.login .wrapper.wrapper-login{
			justify-content: left;
			align-items: left;
		}

		.fw-bold{
			font-size: 35px;
		}

		.font-size-big{
			font-size: 18px;
			
		}

		.bg-seagreen {
			background-color: lightseagreen !important;
			border-color: lightseagreen !important;
		}

		.text-seagreen {
			color: lightseagreen !important;
		}
	</style>
<body class="login">
<?php include 'templates/loading_screen.php' ?>
	<div class="wrapper wrapper-login">
        
		<div class="container container-login animated fadeIn">
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert alert-<?= $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                    <?= $_SESSION['message']; ?>
                </div>
            <?php unset($_SESSION['message']); ?>
            <?php endif ?>
			<h3 class="text-center">Register Here</h3>
			<div class="login-form">
                <form method="POST" action="model/register.php">
				<div class="form-group form-floating-label">
					<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Username</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Password</label>
					<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>
			
				<div>
				<select name="user_type">
         		<option value="resident">resident</option>
      			</select>
			</div>
				<div class="form-action mb-3">
                    <button type="submit" class="btn btn-primary btn-rounded btn-register">register</button>
				</div>
				<a href="login.php">already have an account?</a>
                </form>
			</div>
		</div>
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>