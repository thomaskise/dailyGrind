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