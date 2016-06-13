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





		</div> <!-- end header -->




	</div> <!-- end page -->


	<script type="text/javascript">

	$(document).ready(function(){
		$("#menu_button").click(function(){
			$("#page").toggleClass("#move_to_left");


		});
	});



	</script>



</body>
</html>