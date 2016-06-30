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


	<title>Home</title>
</head>
<body>

	<div id="page">

		<div id="header">

			<div id="language_button"> 
				<button class="button">En Espa&ntilde;ol</button>
			</div>

			<a href="#" id="menu_button">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
			</a>

			<div id= "menu_list">
				<a href="./portfolio_v1.html">Home</a> &nbsp;  &nbsp;
				<a href="./about.html">About</a> &nbsp; &nbsp;
				<a href="./contact.html">Contact</a>
			</div>


		</div> <!-- end header -->

		<div id="menu_detail">
			<ul>
				<li><a href="./portfolio_v1.html">Home</a></li>
				<li><a href="./about.html">About</a></li>
				<li><a href="./contact.html">Contact</a></li>

			</ul>
		</div>  <!-- end menu_detail -->



		<div id="box1">
			<div id="box1_title">
				Community app
			</div>

			<div id="box1_details">
				Find social services that offer in-person interpreters and translators.
			</div>

			<div id="box1_city">
				
			</div>


		</div> <!-- end box1 -->

		<div id="box2"> 

				<img class="icon" src="./images/hospital.png">  &nbsp;  &nbsp;  &nbsp; &nbsp;
				<img class="icon" src="./images/white_house.png"> <br>
				Hospital  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; Housing
		
		</div> <!-- end box2 -->

		<div id="box3">
			<div id="bar">

				<img  src="./images/bar.png" height="6px" width="100px"> 
				OR  
				<img src="./images/bar.png" >
			</div>
		</div> <!-- end box3 -->

		<div id="box4">
			<form action="#" method="GET">

  				
    				<input type="search" id="search" placeholder=" Search..." > 

    			
    				<button class="icon">
    					<i class="fa fa-search"></i>
    				</button> 

    				
 				
			</form>

		</div> <!-- end box4 -->

		<div id= "footer">

			<div id="border_line">

			</div>

			<div id="footer_word"><br>
				A Miguel Gomez production <br>
				&copy; 2016. All Rights Reserved <br>
			</div>	

			<div id="links">
				<a href="./home.php">Home</a> &nbsp;
				<a href="./about.php">About</a> &nbsp;
				<a href="./contact.php">Contact </a>
			</div>					

		</div> <!-- end footer -->




	</div> <!-- end page -->


	<script type="text/javascript">
		
		$(document).ready(function(){
			$("#menu_button").click(function(){
				$("#menu_detail").slideToggle(700);
			});
		});




	</script>



</body>
</html>