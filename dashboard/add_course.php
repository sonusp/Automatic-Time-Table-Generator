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
	<title>Add Course</title>

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
					<li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-dashboard"></em> Dashboard </a></li>
					<li class="nav-item"><a class="nav-link active" href="add_course.php"><em class="fa fa-list-ul"></em> Courses <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="add_teacher.php"><em class="fa fa-user-plus"></em> Teachers</a></li>
					<li class="nav-item"><a class="nav-link" href="add_classroom.php"><em class="fa fa-edit"></em> Class Rooms</a></li>
					<li class="nav-item"><a class="nav-link" href="create_timetable.php"><em class="fa fa-table"></em> Create Time Table</a></li>
					<li class="nav-item"><a class="nav-link" href="profile.php"><em class="fa fa-user-circle"></em> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications.php"><em class="fa fa-bell"></em> Notifications</a></li>
				</ul>
				<a href="logout.php" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Buttons</h1>
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
								<div class="card mb-4">
									<div class="card-block btn-margins">
										<h3 class="card-title">Standard Buttons</h3>
										<h6 class="mb-3 mt-4 pl-1">Small</h6>
										<button type="button" class="btn btn-sm btn-primary">Primary</button>
										<button type="button" class="btn btn-sm btn-secondary">Secondary</button>
										<button type="button" class="btn btn-sm btn-success">Success</button>
										<button type="button" class="btn btn-sm btn-info">Info</button>
										<button type="button" class="btn btn-sm btn-warning">Warning</button>
										<button type="button" class="btn btn-sm btn-danger">Danger</button>
										<button type="button" class="btn btn-sm btn-link">Link</button>
										<h6 class="mb-3 mt-4 pl-1">Medium</h6>
										<button type="button" class="btn btn-md btn-primary">Primary</button>
										<button type="button" class="btn btn-md btn-secondary">Secondary</button>
										<button type="button" class="btn btn-md btn-success">Success</button>
										<button type="button" class="btn btn-md btn-info">Info</button>
										<button type="button" class="btn btn-md btn-warning">Warning</button>
										<button type="button" class="btn btn-md btn-danger">Danger</button>
										<button type="button" class="btn btn-md btn-link">Link</button>
										<h6 class="mb-3 mt-4 pl-1">Large</h6>
										<button type="button" class="btn btn-lg btn-primary">Primary</button>
										<button type="button" class="btn btn-lg btn-secondary">Secondary</button>
										<button type="button" class="btn btn-lg btn-success">Success</button>
										<button type="button" class="btn btn-lg btn-info">Info</button>
										<button type="button" class="btn btn-lg btn-warning">Warning</button>
										<button type="button" class="btn btn-lg btn-danger">Danger</button>
										<button type="button" class="btn btn-lg btn-link">Link</button>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card mb-4">
									<div class="card-block btn-margins">
										<h3 class="card-title">Dropdown Buttons</h3>
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle margin">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#" class="font-bold">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle margin">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#" class="font-bold">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-success dropdown-toggle margin">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#" class="font-bold">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-info dropdown-toggle margin">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#" class="font-bold">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-warning dropdown-toggle margin">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#" class="font-bold">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-danger dropdown-toggle margin">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#" class="font-bold">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Button Groups</h3>
										<p>Group buttons with <code>.btn-group</code> class</p>
										<p>
										<div class="btn-group">
											<button type="button" class="btn btn-secondary">Left</button>
											<button type="button" class="btn btn-secondary">Middle</button>
											<button type="button" class="btn btn-secondary">Right</button>
										</div>
										<p>
										<p>Useful for pagination and tabbed buttons</p>
										<p>
										<div class="btn-group">
											<button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button>
											<button type="button" class="btn btn-secondary">1</button>
											<button type="button" class="btn btn-secondary">2</button>
											<button type="button" class="btn btn-secondary">3</button>
											<button type="button" class="btn btn-secondary">4</button>
											<button type="button" class="btn btn-secondary">5</button>
											<button type="button" class="btn btn-secondary"><span class="fa fa-arrow-right"></span></button>
										</div>
										<p>
										<p>
										<div class="btn-group">
											<button type="button" class="btn btn-primary"><span class="fa fa-align-left"></span></button>
											<button type="button" class="btn btn-secondary"><span class="fa fa-align-center"></span></button>
											<button type="button" class="btn btn-secondary"><span class="fa fa-align-right"></span></button>
											<button type="button" class="btn btn-secondary"><span class="fa fa-align-justify"></span></button>
										</div>
										<p>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block btn-margins">
										<h3 class="card-title">Circle Buttons</h3>
										<p>Create round buttons with <code>.btn-circle</code> class
										<p>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-check"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-plus"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-search"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-heart"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-user"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-file"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-trash"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-tag"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-edit"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-shopping-cart"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-download"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-comment"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-paperclip"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-clone"></span></button>
											<button class="btn btn-secondary btn-circle margin" type="button"><span class="fa fa-wrench"></span></button>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Button Addons</h3>
										<p>With dropdown</p>
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<input type="text" class="form-control">
										</div>
										<br />
										<p>Without dropdown</p>
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-secondary">Action</button>
											</div>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block btn-margins">
										<h3 class="card-title">Icon Buttons</h3>
										<p>Full list of icons available <a href="icons.html">here</a></p>
										<p>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-check"></span> &nbsp;Submit</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-plus"></span> &nbsp;Add New</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-search"></span> &nbsp;Search</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-heart"></span> &nbsp;Favorite</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-user"></span> &nbsp;User</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-file"></span> &nbsp;Document</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-trash"></span> &nbsp;Delete</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-print"></span> &nbsp;Print</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-tag"></span> &nbsp;Tag</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-edit"></span> &nbsp;Edit</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-shopping-cart"></span> &nbsp;Shopping Cart</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-download"></span> &nbsp;Downloads</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-comment"></span> &nbsp;Comment</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-paperclip"></span> &nbsp;Attachment</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-clone"></span> &nbsp;New Window</button>
											<button class="btn btn-secondary margin" type="button"><span class="fa fa-wrench"></span> &nbsp;Settings</button>
										</p>
									</div>
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
