<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo "Sarah Driban - " . $title; ?></title>
    <link rel="stylesheet" type="text/css" href="global.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.lite.1.1.min.js"></script>
    <script type="text/javascript" src="js/cycle.controls.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>

   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.cycle2.js"></script>
	<script type="text/javascript" src="cycle2.js"></script>
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,800,400' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="outer_container">



	<div class="header">
	
	<div class="container">
	
			
			<div class="nav one">
				<ul>
					
					<li <?php if($title=='Home') { echo 'class="current"'; } ?>> 
						<a href="index.php">Home</a>
					</li> 
					<li <?php if($title=='About') { echo 'class="current"'; } ?>>
						<a href="about.php">About</a>
					</li>
				</ul>
			</div>
						
			<div class="name">
				<h1>Sarah Driban</h1>
			</div>	
						
			<div class="nav one">
				<ul>
					<li <?php if($title=='Portfolio') { echo 'class="current"'; } ?>>
						<a href="portfolio.php">Portfolio</a>
					</li>
					<li <?php if($title=='Blog') { echo 'class="current"'; } ?>>
						<a href="blog.php">Blog</a>
					</li>
				</ul>
			</div>
			
				
		<div class="media">
				<a href="http://www.behance.net/sarahdriban"><img src="images/behance_blue.png" class="social right blue"><img src="images/behance.png" class="social original"></a>
				<a href="https://www.linkedin.com/pub/sarah-driban/"><img src="images/linkedin.png" class="social original"><img src="images/linkedin_blue.png" class="social blue"></a>	
		</div><!--END media-->
		
	</div><!--END container-->
	
	</div><!--END header-->
	
	