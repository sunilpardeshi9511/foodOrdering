<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("links.php");
	include("footer.php");?>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<h2><b>LogIn</b></h2>
		</div>
			<?php if($error = $this->session->flashdata('msg')){ ?>
				<p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
				<?php } if($error = $this->session->flashdata('error')){ ?>
				<p style="color: green;"><strong>Error!</strong> <?php echo  $error; ?><p>
			<?php } ?>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>

					<form  method="POST" action="<?php echo base_url().'index.php/registration_controller/loginProcess';?>">
						<div class="input-group mb-3">
							<input type="text" name="login" class="form-control" placeholder="Email" value="<?php echo set_value('login');?>" required>
							
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" name="password" class="form-control" placeholder="Password" required>
							<?php echo form_error('password');?>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>
						</div>
					
					</form>

					<p class="mb-1">
						<a href="<?php echo base_url().'index.php/registration_controller/forgotpassword';?>">I forgot my password</a>
					</p>
					<p class="mb-0">
						<a href="<?php echo base_url().'index.php/registration_controller/index';?>" class="text-center">Register a new membership</a>
					</p>
			</div>
    <!-- /.login-card-body -->
		</div>
	</div>
<!-- /.login-box -->


</body>
</html>
