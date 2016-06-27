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
				It is an app that allows you to find...
			</div>

			<div id="box1_city">
				Manassas, VA
			</div>


		</div> <!-- end box1 -->

		<div id="box2"> 
			<img src="./images/hospital.png" width="70px" height="70px">
			<img src="./images/white_house.png" width="70px" height="70px">

		</div>







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