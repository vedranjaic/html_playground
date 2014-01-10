<?php
$request = parse_url($_SERVER['REQUEST_URI']);
$path = $request["path"];
$result = rtrim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>HTML Playground</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="/style.css">
</head>
<body>
	<nav class="navbar navbar-default hidden-xs" role="navigation">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#playground-main-menu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
				<img src="/includes/images/ginger.svg" alt="">
			</a>
		</div>
		<!-- .navbar-header -->

		<div class="collapse navbar-collapse" id="playground-main-menu">

			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projekti <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/projects/svg-optimize/">SVG Optimize</a></li>
						<li class="divider"></li>
						<li><a href="/projects/svg-animate/">SVG Animate</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">HTML Elements <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/html/document-flow-filled">Document flow - Filled</a></li>
						<li class="divider"></li>
						<li><a href="/html/document-flow-empty">Document flow - Empty</a></li>
					</ul>
				</li>
			</ul>
			<p class="navbar-text navbar-right">Signed in as <strong>bad motherfucker</strong>.</p>

		</div>
		<!-- /.navbar-collapse -->

	</nav>

	<div class="container">
