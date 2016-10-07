<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<title>METEO</title>


		<style>
		
		@media (max-width: 1600px) {
		    .navbar-collapse.collapse {
			display: none !important;
		    }
		    .navbar-collapse.collapse.in {
			display: block !important;
		    }
		    .navbar-header .collapse, .navbar-toggle {
			display:block !important;
			margin-right: 48%; 
			margin-left: auto;
		    }
		    .navbar-header {
			float:none;
		    }
		}
		
		.police 
		{
		font-family: 'Cinzel', serif;
		font-size: 22px;
		}
		@keyframes articlerotatif
		{
		  
		   
		10% 
		    {
			transform: translateX(3px);
		    }

		20% 
		    {
			transform: translateY(3px);
		    }
		40% 
		    {
			transform: translateX(3px);
		    }

		60% 
		    {
			transform: translateY(3px);
		    }
		80% 
		    {
			transform: translateX(3px);
		    }

		100% 
		    {
			transform: translateY(3px);
		    }


		}




		@-webkit-keyframes articlerotatif
		{
		  
		  10% 
		    {
			transform: translateX(3px);
		    }

		20% 
		    {
			transform: translateY(3px);
		    }
		40% 
		    {
			transform: translateX(3px);
		    }

		60% 
		    {
			transform: translateY(3px);
		    }
		80% 
		    {
			transform: translateX(3px);
		    }

		100% 
		    {
			transform: translateY(3px);
		    }

		}



		.bouge:hover
		{
		    animation: articlerotatif 500ms;
		    -webkit-animation: articlerotatif 500ms;
		}
		
		
#video-background {
  position: fixed;
  right: 0; 
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  width: auto; 
  height: auto;
  z-index: -100;
}
		</style>

</head>



<body>




<!--  SLIDER  ------------------------------------------------------------------------->







<article>
</article>
<video autoplay="" loop="" class="fillWidth fadeIn animated" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
    <source src="http://www.leclerc-web.fr/CV/test.mp4" type="video/mp4">
</video>







<!--FIN SLIDER -------------------------------------------------------------------------->




<br />
<br />
<br />

					<center>
					
				<h1 style="color: white; font-size: 48px;">La météo en direct</h1>	
					
					
<!-- --------------------FORMULAIRE------------------------------------------------ -->
			
			
	<form method="POST" action="" style="width: 45%; margin-top: 15%;">
	
		  <div class="form-group">
		    <label style="color: white; font-size: 20px;">Nom de la ville ou pays :</label>
		    <input type="text" class="form-control form-control-no-border" name="ville" placeholder="Bordeaux...">
		  </div>
		  
		  <div class="form-group">
		    <label style="color: white; font-size: 20px;" for="text">Les 2 lettres (diminutif du pays): </label>
		    <input type="text" class="form-control form-control-no-border" name="lettre" placeholder="FR, UK...">
		  </div>
		  	
		  <div style="text-align: center;" class="bouge">
		 <button  style="margin-top: 7px;" type="submit" class="btn btn-default" name="envoyer" onclick="show_alert();">Envoyer</button>
		 </div>	
		 	
	</form>
	
<!-- --------------------------------------------------------------------------- -->
	
	
	
	
	
	
	<div style="margin-top: 100px;">				
		<?php
			if (isset($_POST['envoyer']))
			if (empty($_POST['ville']))
			{
			echo '<script type="text/javascript">alert("Veuillez remplir au minimum le champ ville/pays ");</script>';
			}
			else
			{
			echo "<div class= 'police' style='font-weight: bold; color: white; font-size: 27px;'>Voici le temps sur : " . $_POST['ville'] . "</div><br /><br /><br />";
			include 'donnees.php';
			}
		?>
	</div>				
	
	
	
					</center>
					


</body>


</html>
