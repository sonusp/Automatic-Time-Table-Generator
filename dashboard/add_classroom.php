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
	<title>Add Classroom</title>

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
					<li class="nav-item"><a class="nav-link" href="add_course.php"><em class="fa fa-list-ul"></em> Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="add_teacher.php"><em class="fa fa-user-plus"></em> Teachers</a></li>
					<li class="nav-item"><a class="nav-link active" href="add_classroom.php"><em class="fa fa-edit"></em> Class Rooms <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="create_timetable.php"><em class="fa fa-table"></em> Create Time Table</a></li>
					<li class="nav-item"><a class="nav-link" href="profile.php"><em class="fa fa-user-circle"></em> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications.php"><em class="fa fa-bell"></em> Notifications</a></li>
				</ul>
				<a href="logout.php" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Cards</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $login_session; ?></h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="profile.php"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="logout.php"><em class="fa fa-power-off mr-1"></em> Signout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-12">
								<h3 class="mb-4">Basic Cards</h3>
							</div>
							<div class="col-lg-4 mb-4 bg-default">
								<div class="card">
									<div class="card-header">Default Card</div>
									<div class="card-block">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
						                    ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus
						                    nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui
						                    pharetra molestie. Fusce et dui urna.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4">
								<div class="card text-white bg-primary">
									<div class="card-header">Primary Card</div>
									<div class="card-block">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
						                    ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus
						                    nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui
						                    pharetra molestie. Fusce et dui urna.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4">
								<div class="card text-white bg-success">
									<div class="card-header">Success Card</div>
									<div class="card-block">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
						                    ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus
						                    nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui
						                    pharetra molestie. Fusce et dui urna.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4">
								<div class="card text-white bg-info">
									<div class="card-header">Info Card</div>
									<div class="card-block">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					                        ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus
					                        nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui
					                        pharetra molestie. Fusce et dui urna.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4">
								<div class="card text-white bg-warning">
									<div class="card-header">Warning Card</div>
									<div class="card-block">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					                        ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus
					                        nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui
					                        pharetra molestie. Fusce et dui urna.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4">
								<div class="card text-white bg-danger">
									<div class="card-header">Danger Card</div>
									<div class="card-block">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					                        ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus
					                        nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui
					                        pharetra molestie. Fusce et dui urna.</p>
									</div>
								</div>
							</div>
						</section>
						<section class="row">
							<div class="col-12">
								<h3 class="mt-4 mb-4">Cards with Navigation</h3>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-center bg-default">
									<div class="card-header">
										<ul class="nav nav-tabs card-header-tabs">
											<li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
											<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
										</ul>
									</div>
									<div class="card-block">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							            <a href="#" class="btn btn-md btn-primary">Go somewhere</a></div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-center bg-default">
									<div class="card-header">
										<ul class="nav nav-pills card-header-pills">
											<li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
											<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
										</ul>
									</div>
									<div class="card-block">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							            <a href="#" class="btn btn-primary">Go somewhere</a></div>
								</div>
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
