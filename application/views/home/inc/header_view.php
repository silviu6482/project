<!doctype html>
<html lang="en">
<head>
	<title>Test header</title>
	<link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
	<script src="<?=base_url()?>public/js/jquery.js"></script>
	<script src="<?=base_url()?>public/js/bootstrap.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<span class="navbar-brand">Project Y</span>
				<ul class="nav navbar-nav">
					<li><a href="<?=site_url('/')?>">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Info</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="<?=site_url('/dashboard/logout')?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	</header>
	<!-- start of wrapper - ends in footer -->
	<div class="wrapper">
