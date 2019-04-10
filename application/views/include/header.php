<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Management System</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
    <script src="<?php echo base_url('assets/js/jquery-3.1.0.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-inverse">
	<div class="container-fluid">
  <a class="navbar-brand" href="#">COLLEGE MANAGEMENT SYSTEM</a>
  <div class="col-lg-2" style="margin-top:15px;" id="bs-example-navbar-collapse-2">
			<div class="btn-group">
				<a href="#" class="btn btn-default" style="color: #fff;">Settings</a>
				<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><?php echo anchor("admin/dashboard", "Dashboard");?></li>
					<li><?php echo anchor("welcome/logout", "Logout");?></li>
				</ul>
			</div>
		</div>
	</div>
</nav>

