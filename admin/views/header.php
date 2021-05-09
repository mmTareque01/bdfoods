<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>The food of </span>BD Foods</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php @print($_SESSION["login"]); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						
					
							<li><a href="index.php?logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Exit</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
			<div class="form-group">
				
			</div>
	
		<ul class="nav menu">
		<br><br><br><br><br>
			<li class=""><a href="index.php"> begining <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>
 </a></li>
				<li><a href="index.php?page=menus"> Menu
					 <svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg>

 </a></li>
					<li><a href="index.php?page=foods"> Food <svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
 </a></li>
 					<li><a href="index.php?page=orders"> Orders  <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>

 </a></li>
 <li><a href="index.php?page=reservations"> Reservations <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>

 </a></li>

			
	
		
		
					
				<li><a href="index.php?page=admins"> Admins <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> </a></li>

				<li><a href="index.php?page=stats"> Report <svg class="glyph stroked clipboard with paperr"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> </a></li>
				
		
		
	
			
			
		</ul>

	</div><!--/.sidebar-->
