<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Wild Duck Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <style>
	
        html {background-color:<?=$color?>;/* day of the week color - overwrites default */}
        
        .feature {color:<?=$color?>; /* daily feature color! */}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:200px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
		span.largeText{
			font-size:large; /* make some works larger for  emphasis */
		}
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/wildDuckLogo.jpg" alt="Coffee!! Go wild! Go Wild Duck!" class="flexible" id="logo" />
		<h1 class="masthead">WILD DUCK COFFEE</h1>
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
		<header><h3 class="slogan"><b>Coffee, YES!! Go wild! Go Wild Duck!</b></h3></header>