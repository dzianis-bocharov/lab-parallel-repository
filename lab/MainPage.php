<?php
	// We need to use sessions, so you should always start sessions using the below.
	session_start();
	// If the user is not logged in redirect to the login page... 
	if (!isset($_SESSION['loggedin'])) {
		header('Location: phplogin/index.html');
		exit;
	}
?>

<?php
	// include 'JS-analyser/php/jsFileToArray.php';
?>

<!DOCTYPE html>
<html>
	<head>
		
	    <meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">

		<title>lab</title>
		
		<!--Bootstrap / подключение-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel='stylesheet' href='css/slide-show.css'>
		<link rel='stylesheet' href='css/style.css'>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src='js/gamepad-vibration.js'></script>


		<!--стили для тогла как для айфона-->
		<style>
			.switch {
				position: relative;
				display: inline-block;
				width: 60px;
				height: 34px;
				margin-top:4px; 
			}
			#test1 {
				opacity: 0;
				width: 0;
				height: 0;
			}
			#slider {
				position: absolute;
				cursor: pointer;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background-color: #ccc;
				transition: .4s;
			}
			#circle {
				position: absolute;
				height: 26px;
				width: 26px;
				left: 4px;
				bottom: 4px;
				background-color: white;
				transition: .4s;
			}
			input:checked + #slider {
				background-color: green;
				
			}
			input:checked + span #circle {
				left: 30px;
			}
			
			#slider {
				border-radius: 34px;
			} 
			#circle {
				border-radius: 50%;
			} 
			div#usernameMain {
				background-color: lime;
				width: 90px;				
				color: black;
				float: left;
				position: relative;
				top: -2px;
				font-weight: bold;
				padding: 5px 3px 5px 7px;
			}
 		</style>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<link rel='shortcut icon' type='image/ico' href='favicon-lab.ico'>
		<script>
			$(document).ready(function() {
				function myFunction1() {
					window.location.href = "http://smolyar.by/WEB/PHP - Forum - Test/PHP_Forum.php"	
				};
				document.getElementById('z').onclick = myFunction1;
			});
		</script>
		<script type='text/javascript' src='js/slide-show.js'></script>
		<style>
			div#lab {
				padding-top: 30px;
				padding-bottom: 15px;
				padding-left: 15px;

			}
			h1 {
				font-size: 45px;
			}
			div#first, div#second {
				border-right: solid white 4px;
				border-radius: 0px;
			}
			div#mySlider1 {
				margin-top: -15px;
				margin-bottom: 0px;
			}
			span#wood {
				/*margin-top: 25px;*/
			}
			button.lab1 {
				margin-bottom: 15px;
				/*margin-left: auto;
				margin-right: auto;*/
				position: relative;
				left: 50%;
				transform: translate(-50%, 0);
				margin-left: 0px;
			}
			button#settings {

			}
			div#myDivSwitch {
				margin-top: 5px;
			}
			body {
				color: white;
			}
			div#MethodSearchTool {
				padding: 5px;
				border: 2px solid white;
				margin-top: 5px;
				background-color: grey;
				height: 345px;
			}
			legend {
				text-decoration: underline;
			}
			label.myForm {
				display: block;
				float: left;
				width: 80px;
				height: 15px;
			}
			div#ipClient {
				height: 50px;
				line-height: 50px;
				width: 200px;
				text-align: center;
				color:black;
				background-color: lime;
				margin-top: -5px;
			}
			div#profile {
				border: 2px solid white;
				width: 215px;
				height: 40px;
				padding: 5px;
				white-space: pre;
			}
			button#btnProfile {
				width: 80px;
			}
			div#myLabPages {
				border: blue solid 2px;
				padding: 10px;
			}
			a:link {
				color: #0000EE;
				text-decoration: underline;
			}
			a:visited {
				color: #0000EE;
			}
			a#a1 {
				margin-left: 25px;
			}
			span.mySpan {
				color: lime;
			}
			div#labPages {
				text-align: center;
				margin-top: 5px;
				width: 150px;
				position: relative;
				left: 50%;
				margin-left: -75px;
			}
			a#shutdown-a {
				margin-left: 25px;
			}
			
		</style>

        <script>
            $(document).ready(function(){


                    $.ajax({
                        type: "GET",
                        url: "IP-client/IP-client.php",
                        dataType: "html",
                        success: function (data) {
                            $('#ipClientSpan').html(data);
                        }
                    });





            });
        </script>

	</head>
	<body>
		<div class='container'>
			<div class='row'>
				<div id='lab'><h1>ЛАБОРАТОРИЯ</h1></div>
				<div class='w-100'></div>
				<div class='col' class='c1' id='first'>
					<style>
						#matrixGIF {
						width: 265px;
						margin-bottom: 25px;
						margin-top: 5px;
					}			
					</style>
					<img id='matrixGIF' src='matrix123.gif'></img>
					<br>
					<div id='profile'><div id='usernameMain'>DZIANIS</div>   /   <button id='btnProfile'>Profile</button></div>
					<br>
					<div id='ipClient'>IP - client / <span id='ipClientSpan'></span></div>
					<br>
					<div id='xyz1'>
						<audio controls id='xyz2'> <source src='faint.mp3' type='audio/mp3'></audio>
					</div>
					<br>
					<div id='mySlider1'>
						Personal Website Switch
						<br>
						<small>On - Active / Off - Maintenance Mode</small>
						<div id='myDivSwitch'>
						<label class='switch'>
							<input id='test1' type='checkbox' checked>
							<span id='slider'>
								<span id='circle'></span>
							</span>
						</label>
				</div>
				</div>
				</div>
				<div class='col' class='c1' id='second'>

				<div id='slideShowContainer'>
					<div id='slideMover'>
						<div id='slidesWrapper'>
							<div class='slideElement'>

								<a tabindex='-1' id='a1' href='JS-analyser/JS-analyser.html'>JS-analyser</a>
								<br>
								<br>
								<a tabindex='-1' id='a1' href='http://localhost/lab/Issue-6898/Issue-6898.html'>Issue#6898</a> 
								<br>
								<br>
								<a tabindex='-1' id='a1' href='chartjs-learn/my-chartjs-index.html'>Gold / price / chart</a>
								<br>
								<br>
								<a tabindex='-1' id='a1' href='aim-star/aim-star-index.html'>Aim / тренировка</a>
								<br>
								<br>
								<a tabindex='-1' id='a1' href='php-file-size/php-file-size.php'>PHP / размер файла</a>								
							</div>
							<div class='slideElement'>
								<a tabindex='-1' id='a1' href='https://www.google.com/'>Content Management System</a>
								<br>
								<br>
								<a tabindex='-1' id='a1' href='https://www.google.com/'>Управляемый квадрат</a>
							</div>
							<div class='slideElement'>
								<a tabindex='-1' id='a1' href='https://www.google.com/'>Тест#1</a>
							</div> 
						</div>
					</div>
					<div id='controls'>
						<button id='btnPrev'>&#60;</button>
						<div id='pagesInfo'>
							<span id='currentPage' class='sliderPages'></span> из <span id='pagesAll' class='sliderPages'></span>
						</div>
						<button id='btnNext'>&#62;</button>
					</div>
				</div>
					
				</div>
				<div class='col' class='c1'>


				<button id='z' class="lab1">PHP&MySQL / форум</button>
					<br>
					<button class="lab1">Canvas / рисование</button>
					<br>
					<button class="lab1" id='btnGamepadVibration'>Вибрация джойстика</button>

			<br>

	
			<a id='shutdown-a' href="phplogin/logout.php"><img style="width: 50px; height: 50px;" src="shutdown.png"></a>

				</div>
			</div>
		</div>
		<div id="mylog" style='display:none;'></div>

	</body>

</html>