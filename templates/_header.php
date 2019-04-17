<? //php include('../index.php'); //?>
<!DOCTYPE html>
<html>
	<head>
		<title>Painter</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--STYLESHEET -->
		<link href="https://fonts.googleapis.com/css?family=Leckerli+One|Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    	<!-- Normalize -->
		<link type="text/css" rel="stylesheet" href="CSS/normalize.css"/>
		<!-- Internal styles -->
		<link type="text/css" rel="stylesheet" href="CSS/style.css?uid=<?= date("Y-m-d-h-i-s") ?>"/>
	</head>

	<body>
		
		<div class="container">
			
			<header>
				<h1><span class="pink">P</span><span class="purple">a</span><span class="blue">i</span><span class="greenLight">n</span><span class="yellow">t</span><span class="orange">e</span><span class="greenDark">r</span>
					<i class="fas fa-paint-brush pink"></i>
				</h1>
			</header>
    
			<main>

        		
            
            	<?php 
					include('php/Shape.class.php');
					include('php/Rectangle.class.php');
					include('php/Cercle.class.php');
					include('php/Triangle.class.php');
				?>
	
    
   
		
