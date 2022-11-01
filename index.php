<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign-in.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
	<head>	
    	<link href="css/custom.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">		
	</head>
	<body class="home">
		<div class="container-fluid display-table">
			<div class="row display-table-row">
				<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
					<div class="logo">
						<a hef="index.php"><img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fthewellministry.org%2Fjobs%2Fwp-content%2Fuploads%2F2020%2F06%2FSanlam.png&imgrefurl=https%3A%2F%2Fwww.scholarshipair.com%2Fcompany-logos%2F300%2F39831sanlam.html&tbnid=7kP-6tQv3qIbJM&vet=12ahUKEwjLr-aw3Iz7AhUFgycCHXubCHoQMygAegUIARC6AQ..i&docid=YhkpK6t47XoMMM&w=680&h=680&q=sanlam%20nigeria%20logo&ved=2ahUKEwjLr-aw3Iz7AhUFgycCHXubCHoQMygAegUIARC6AQ" alt="logo" class="hidden-xs hidden-sm">
							<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fthewellministry.org%2Fjobs%2Fwp-content%2Fuploads%2F2020%2F06%2FSanlam.png&imgrefurl=https%3A%2F%2Fwww.scholarshipair.com%2Fcompany-logos%2F300%2F39831sanlam.html&tbnid=7kP-6tQv3qIbJM&vet=12ahUKEwjLr-aw3Iz7AhUFgycCHXubCHoQMygAegUIARC6AQ..i&docid=YhkpK6t47XoMMM&w=680&h=680&q=sanlam%20nigeria%20logo&ved=2ahUKEwjLr-aw3Iz7AhUFgycCHXubCHoQMygAegUIARC6AQ" alt="logo" class="visible-xs visible-sm circle-logo">
						</a>
					</div>
					<div class="navi">
						<ul>
							<li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
							<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Assets</span></a></li>
							<li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Investments</span></a></li>
							<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Transactions</span></a></li>
							<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
							<li><a href="sign-out.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-10 col-sm-11 display-table-cell v-align">
					<!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
					<div class="row">
						<header>
							<div class="col-md-7">
								<nav class="navbar-default pull-left">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
								</nav>
							</div>
							<div class="col-md-5">
								<div class="header-rightside">
									<ul class="list-inline header-top pull-right">
										<li>
											<a href="#" class="icon-info">
												<i class="fa fa-bell" aria-hidden="true"></i>
												<span class="label label-danger">3</span>
											</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
												<b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li>
													<div class="navbar-content">
														<span>Laolu Olagbemi</span>
														<p class="text-muted small">
															me@sanlam.com
														</p>
														<div class="divider">
														</div>
														<a href="#" class="view btn-sm active">View Profile</a>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</header>
					</div>
					<div class="user-dashboard">
						<h1>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12 gutter">

								<div class="sales">
									<h2>Investments</h2>

									<div class="btn-group">
										<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span>Period:</span> Last Year
										</button>
										<div class="dropdown-menu">
											<a href="#">2012</a>
											<a href="#">2014</a>
											<a href="#">2015</a>
											<a href="#">2016</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 gutter">

								<div class="sales report">
									<h2>Transactions</h2>
									<div class="btn-group">
										<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span>Period:</span> Last Year
										</button>
										<div class="dropdown-menu">
											<a href="#">2012</a>
											<a href="#">2014</a>
											<a href="#">2015</a>
											<a href="#">2016</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>



		<!-- Modal -->
		<div id="add_project" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header login-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Add Project</h4>
					</div>
					<div class="modal-body">
								<input type="text" placeholder="Project Title" name="name">
								<input type="text" placeholder="Post of Post" name="mail">
								<input type="text" placeholder="Author" name="passsword">
								<textarea placeholder="Desicrption"></textarea>
						</div>
					<div class="modal-footer">
						<button type="button" class="cancel" data-dismiss="modal">Close</button>
						<button type="button" class="add-project" data-dismiss="modal">Save</button>
					</div>
				</div>

			</div>
		</div>

	</body>
	<script>
		$(document).ready(function(){
			$('[data-toggle="offcanvas"]').click(function(){
				$("#navigation").toggleClass("hidden-xs");
			});
				});
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</html>