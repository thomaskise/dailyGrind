<?php
//switch.php</p>

/*
Monday is ...

*/


$day    = date('l');
//$day	= "Sunday"; //set day for testing
$coffee = "";
$color  = "";

switch($day){

	case 'Sunday':	
		$coffee = "Macchiato";
		$color = "#A36F4A";
		$colorName = "Strong Orange";
		$dailySnackSpecial = "orange scone";
		$pic = "macchiato.jpg";
		$alt = "Refreshing Macchiato";
		$shortDescription = "Relax on Sunday with a strong, yet very smooth espresso with a touch of steamed milk.";	
	break;
	
	case 'Monday':	
		$coffee = "Ristretto shot";
		$color = "#531903";
		$colorName = "slice of beet and cranberry bread";
		$dailySnackSpecial = "slice of beet and cranberry bread";
		$pic = "ristretto.jpg";
		$alt = "Fabulous crema on this Ristretto shot";
		$shortDescription = "Each shot pulled to perfection for the discriminating palate. Fabulous Crema. You'll find the espresso almost sweet.";	
	break;
	
	case 'Tuesday':	
		$coffee = "Americano";
		$color = "#8A7D72";
		$colorName = "Americano";
		$dailySnackSpecial = "chocolate brownie";
		$pic = "americano.jpg";
		$alt = "Deep rich americano";
		$shortDescription = "Almost an espresso, with a bit of tepid water to draw out the enjoyment!";	
	break;	
	
	case 'Wednesday':	
		$coffee = "Cafe au Lait";
		$color = "#A67B5B";
		$colorName = "French Beige";
		$dailySnackSpecial = "slice of banana creme pie";
		$pic = "cafeAuLait.jpg";
		$alt = "Cafe au lait in ceramic cup!";
		$shortDescription = "Smooth, yet powerful. Perfect for your mid week pick-up!";	
	break;


	case 'Thursday':
		$coffee = "French Press";
		$color = "#715041";
		$colorName = "Bismarck";
		$dailySnackSpecial = "slice of coffee cake";
		$pic = "frenchPress.jpg";
		$alt = "Glass french press full of coffee";
		$shortDescription = "Strong and pungent. You're passed hump day and one day to go. Kick it!";
	break;
	
	case 'Friday':	
		$coffee = "Affogato";
		$color = "#430F04";
		$colorName = "Rustic Red";
		$dailySnackSpecial = "rasberry crumble bar";
		$pic = "macchiato.jpg";
		$alt = "Affogato in a ceramic cup";	
		$shortDescription = "Vanilla gelato doused with a doppio espresso and spiced with a shot of amaretto.";
	break;
	
	case 'Saturday':	
		$coffee = "Chemex Pour Over";
		$color = "#0C0B10";
		$colorName = "Black Russian";
		$dailySnackSpecial = "a slice of dark chocolate molten cake";
		$pic = "chemex.jpg";
		$alt = "Chemex coffee maker on counter";
		$shortDescription = "Simple elegance. The shape of Chemex carafe and the special bonded filters achieve the highest standard for brewed coffee. Yes, it takes a little longer, and yes, it’s worth every second. Enjoy!!";	
	break;

}

//echo "$day coffee is $coffee, and the color is $color, and the short description is $shortDescription.";

//die

?>

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
        <p>
			<img src="images/<?=$pic?>" alt="<?=$alt?>" id="coffee" />
            <strong class="feature"><?=$day?>'s Coffee Special is <span class="largeText"><u><em><?=$coffee?></em></u></span></strong>. <?=$shortDescription?>
		</p>
        <p>
			<span class="feature"><?=$coffee?> is </span> Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. 
		<p>
			<b>Today only!! Mention when you order that it is <span class="feature"><?=$colorName?> <?=$day?></span> and you'll receive a free <span class="largeText"><em><?=$dailySnackSpecial?>!</em></span></b>
		</p>
        <p>
			<span class="feature">Enjoy <?=$coffee?> with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.
		</p>
		<p>
			<b>At Wild Duck we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.
		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse.
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
</html>