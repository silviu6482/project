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
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<span class="navbar-brand">Project Y</span>
				<ul class="nav navbar-nav">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">User</a></li>
					<?php if($user_data['type'] == 1){ ?>
					<li><a href="dashboard/users">Admin</a></li>
					<?php } ?>

					<li><a href="<?=site_url('/dashboard/logout')?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- start of wrapper - ends in footer -->
	<div class="wrapper">
