<!DOCTYPE html>
<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	 <!-- jQuery for the toggle JS fuctionality-->
	 <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- mobile friendly -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="./font_awesome/css/font-awesome.min.css"> <!-- icons -->

	<!-- link to style cheet -->
	<link rel="stylesheet" type="text/css" href="./style/index_style.css">


	<!-- google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>


	<title>Community</title>
</head>
<body>

	<div id="page">

		<div id="header">

			<div id="language_button"> 
				<button class="button" id="lang_button">En Espa&ntilde;ol</button>
			</div>

			<a href="#" id="menu_button">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
			</a>

			<div id= "menu_list">
				<a id="home_d" href="./portfolio_v1.html">Home</a> &nbsp;  &nbsp;
				<a id="about_d" href="./about.html">About</a> &nbsp; &nbsp;
				<a id="contact_d" href="./contact.html">Contact</a>
			</div>


		</div> <!-- end header -->

		<div id="menu_detail">
			<ul>
				<li><a id="home"  href="./portfolio_v1.html">Home</a></li>
				<li><a id="about" href="./about.html">About</a></li>
				<li><a id="contact" href="./contact.html">Contact</a></li>

			</ul>
		</div>  <!-- end menu_detail -->



		<div id="box1">
			<div id="box1_title">Lapa</div>

			<div id="box1_details">
				Find social services that offer in-person interpreters and translators.
			</div>

			<div id="box1_city">
				
			</div>
		</div> <!-- end box1 -->


		

		<div id="box2"> 

				<a href="./hospital.php"><img class="icon" src="./images/hospital.png"></a>  &nbsp;  &nbsp;  &nbsp; &nbsp;
				<a href="./housing.php"><img class="icon" src="./images/white_house.png"></a> <br>
				<span id ="hospital">Hospital</span>  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; <span id="housing">Housing</span>
		
		</div> <!-- end box2 -->

		<div id="box3">
			<div id="bar">

				<img  src="./images/bar.png" height="6px" width="100px"> 
				<span id= "or">OR</span>  
				<img src="./images/bar.png" >
			</div>
		</div> <!-- end box3 -->

		<div id="box4">
			<form action="#" method="GET">

  				
    				<input type="search" id="search" placeholder="Search..." > 

    			
    				<button class="icon">
    					<i class="fa fa-search"></i>
    				</button> <span id = "search_box_details"> 

    				
 				
			</form>

		</div> <!-- end box4 -->

		<div id= "footer">

			<div id="border_line">

			</div>
			<br>
			<div id="footer_word"> 
				A Miguel Gomez production <br>
				&copy; 2016. All Rights Reserved 
			</div>	

			<div id="links">
				<a id="home_f" href="./home.php">Home</a> &nbsp;
				<a id="about_f" href="./about.php">About</a> &nbsp;
				<a id="contact_f" href="./contact.php">Contact </a>
			</div>					

		</div> <!-- end footer -->




	</div> <!-- end page -->


	<script type="text/javascript">
		
		$(document).ready(function(){

			$(".button").click(function(){
				
				var x = document.getElementById("box1_title").innerHTML;
				
				if( x == "Lapa"){
					

					/* content will be in Spanish */
					document.getElementById("lang_button").innerHTML = "In English";
								

					document.getElementById("box1_title").innerHTML = "Spanish App";


					document.getElementById("box1_details").innerHTML = 'Encontrar los servicios sociales que ofrecen int&eacute;rpretes y traductores en persona';



					document.getElementById("housing").innerHTML = 'Alojamiento';

					document.getElementById("or").innerHTML = "O";



					document.getElementById("home").innerHTML = "Inicio";
					document.getElementById("about").innerHTML = "Sobre";
					document.getElementById("contact").innerHTML = "Contacto";

					document.getElementById("home_d").innerHTML = "Inicio";
					document.getElementById("about_d").innerHTML = "Sobre";
					document.getElementById("contact_d").innerHTML = "Contacto";

					document.getElementById("home_f").innerHTML = "Inicio";
					document.getElementById("about_f").innerHTML = "Sobre";
					document.getElementById("contact_f").innerHTML = "Contacto";

					document.getElementById("footer_word").innerHTML = 'Una producci&oacute;n Miguel Gomez<br>&copy; 2016. Todos los derechos reservados';

					document.getElementById("search").placeholder = "Buscar...";	

				} else{

					/* Content will be in English */
					document.getElementById("lang_button").innerHTML = 'En Espa&ntilde;ol';

					document.getElementById("box1_title").innerHTML = "Lapa";

					document.getElementById("box1_details").innerHTML = "Find social services that offer in-person interpreters and translators";

					document.getElementById("housing").innerHTML = 'Housing';

					document.getElementById("or").innerHTML = "OR";

					document.getElementById("home").innerHTML = "Home";
					document.getElementById("about").innerHTML = "About";
					document.getElementById("contact").innerHTML = "Contact";

					document.getElementById("home_d").innerHTML = "Home";
					document.getElementById("about_d").innerHTML = "About";
					document.getElementById("contact_d").innerHTML = "Contact";

					document.getElementById("home_f").innerHTML = "Home";
					document.getElementById("about_f").innerHTML = "About";
					document.getElementById("contact_f").innerHTML = "Contact";

					document.getElementById("footer_word").innerHTML = "A Miguel Gomez production <br>&copy; 2016. All Rights Reserved";

					document.getElementById("search").placeholder = "Search...";	


				}

				
			});


				

			$("#menu_button").click(function(){
				$("#menu_detail").slideToggle(700);
			});
		});





	</script>



</body>
</html>