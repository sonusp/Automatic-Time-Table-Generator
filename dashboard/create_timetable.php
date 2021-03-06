<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../login_portal/images/icon.png">
	<title>Create Time Table</title>

	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.php"><em class=""></em> Time Table</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="add_course.php"><em class="fa fa-list-ul"></em>  Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="add_teacher.php"><em class="fa fa-user-plus"></em> Teachers</a></li>
					<li class="nav-item"><a class="nav-link" href="add_classroom.php"><em class="fa fa-edit"></em> Class Rooms</a></li>
					<li class="nav-item"><a class="nav-link active" href="create_timetable.php"><em class="fa fa-table"></em> Create Time Table <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="profile.php"><em class="fa fa-user-circle"></em> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications.php"><em class="fa fa-bell"></em> Notifications</a></li>
				</ul>
				<a href="logout.php" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Form Elements</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $login_session; ?></h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="profile.php"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
							 <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Signout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Inputs</h3>
										<form class="form" action="#">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Default input field</label>
												<div class="col-md-9">
													<input type="text" name="regular" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Password</label>
												<div class="col-md-9">
													<input class="form-control" type="password" name="pass">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">With placeholder</label>
												<div class="col-md-9">
													<input class="form-control" type="text" name="placeholder" placeholder="placeholder">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Disabled field</label>
												<div class="col-md-9">
													<input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Read only field</label>
												<div class="col-md-9">
													<input class="form-control" type="text" name="readonly" readonly="" value="read only">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Help text</label>
												<div class="col-md-9">
												<input type="text" name="regular" class="form-control"><span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span></div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Predefined value</label>
												<div class="col-md-9">
													<input type="text" name="regular" value="http://" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Custom Select</label>
												<div class="col-md-9">
													<select class="custom-select form-control">
														<option selected>Open this select menu</option>
														<option value="1">One</option>
														<option value="2">Two</option>
														<option value="3">Three</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Valid Input</label>
												<div class="col-md-9">
													<input type="text" class="form-control is-valid" id="inputHorizontalSuccess">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Danger</label>
												<div class="col-md-9">
													<input type="text" class="form-control is-invalid" id="inputHorizontalDnger">
													<div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
													<small class="form-text text-muted">Example help text that remains unchanged.</small></div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>
						<section class="row">
							<div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Input Groups</h3>
										<div class="row">
											<div class="col-lg-4 col-sm-4">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
												    <span class="input-group-text" id="basic-addon1">@</span>
												  </div>
												  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
												</div>
											</div>
											<div class="col-lg-4 col-sm-4">
												<div class="input-group mb-3">
												  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
												  <div class="input-group-append">
												    <span class="input-group-text">.00</span>
												  </div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-4">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
												    <span class="input-group-text">$</span>
												  </div>
												  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
												  <div class="input-group-append">
												    <span class="input-group-text">.00</span>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="row">
							<div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Button Addons</h3>
										<div class="row">
											<div class="col-lg-6 mb-sm-4 mb-lg-0">
												<div class="input-group"><span class="input-group-prepend">
													<button class="btn btn-primary" type="button" title="">Go!</button>
													</span>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="input-group">
													<input type="text" class="form-control"><span class="input-group-append">
														<button class="btn btn-primary" type="button" data-original-title="" title="">Submit!</button>
												</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="row">
							<div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Checkboxes &amp; Radios</h3>
										<div class="row">
											<div class="col-lg-6 mb-sm-4 mb-lg-0">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label custom-control-description" for="customCheck1">Check this custom checkbox</label>
												</div>
												<br />
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label custom-control-description" for="customCheck2">Or check this custom checkbox</label>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="custom-control custom-radio">
												  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
												  <label class="custom-control-label custom-control-description" for="customRadio1">Toggle this custom radio</label>
												</div>
												<br />
												<div class="custom-control custom-radio">
												  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
												  <label class="custom-control-label custom-control-description" for="customRadio2">Or toggle this other custom radio</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="row">
							<div class="col-12 mb-2">
								<h3 class="mt-4 mb-4">Alerts</h3>
								<div class="alert bg-primary" role="alert"><em class="fa fa-comment mr-2"></em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>
								<div class="alert bg-info" role="alert"><em class="fa fa-tag mr-2"></em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>
								<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>
								<div class="alert bg-warning" role="alert"><em class="fa fa-exclamation-triangle mr-2"></em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>
								<div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="float-right"><em class="fa fa-remove"></em></a></div>
							</div>
						</section>
					</div>
				</section>
			</main>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	
	</body>
</html>
