<!DOCTYPE html>
<html>
<head>
	<title>INTELLiSPEC Pty Ltd | Welcome</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=BenchNine&display=swap" rel="stylesheet">

	<!-- Fonts -->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<!-- CSS -->

	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- Icons -->


</head>
<body>
	<header class="">
		<nav id="navbar" class="navbar ">
			<div style="margin: 0 40px;background: ;">
				<img src="imgs/header.png" height="50px">
			</div>
		</nav>
	</header>

	<section id="first-screen">


		<section>
			<div  id="name">
				Welcome To
				<span>
					<span id="f" style="color: black;">
					IIIT</span>
					<span id="s" style="color: #003366;">G</span>
				</span>
				Online Resgistration Portal
			</div>		
		</section>
		<section>
			
			<div id="button">
				<a href="#">
					<i class="fas fa-angle-double-down"></i>&ensp;
					Start&ensp;
					<i class="fas fa-angle-double-down"></i>
				</a>
			</div>
			
		</section>
	</section>

	<section class="screen" id="second">

		<div class="container" id="box">
			<section id="service-img">
				<h1>Choose One</h1>
				<div class="container over" id="admin">
					<img src="imgs/admin.png" height="100%">
					<div class="overlay">
					    <div class="text">Admin</div>
					</div>
				</div>
				<div class="container over" id="student">
					<img src="imgs/student.png" height="100%">	
					<div class="overlay">
					    <div class="text">Student</div>
					</div>
				</div>
				
			</section>
			<div class="vertical"></div>
			<section id="service-about">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

				<div class="overlay" id="back-div">
					<div id="back">
						<i class="fas fa-angle-double-left"></i>
						&nbsp;
						Back
					</div>
				</div>
				
				<form class="overlay" id="admin-form">
					<h1>Admin Login</h1>
					<div class="form-box">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						<div class="flex">
							<div id="" class="new-button">
								Continue
							</div>
						</div>
						
					</div>
				</form>

				<div class="overlay" id="student-form">
					<section>
						<h1 id="token">Generate Token</h1>
						<form class="overlay" id="token-form">
							<h1>Generate Token</h1>
							<div class="form-box">
								<input type="text" name="roll" placeholder="Roll No." required>
								<div class="flex">
									<div id="" class="new-button">
										Continue
									</div>
								</div>
								
							</div>
						</form>
					</section>
					<div class="vertical"></div>
					<section>
						<h1 id="application">Fill Application</h1>
						<form class="overlay" id="application-form">
							<h1>Fill Application</h1>
							<div class="form-box">
								<input type="text" name="roll" placeholder="Roll No." required>
								<div class="flex">
									<div id="" class="new-button">
										Continue
									</div>
								</div>
								
							</div>
						</form>
					</section>
					<div class="vertical"></div>
					<section>
						<h1 id="case">Raise A Case</h1>
						<form class="overlay" id="case-form">
							<h1>Raise A Case</h1>
							<div class="form-box">
								<input type="text" name="roll" placeholder="Roll No." required>
								<div class="flex">
									<div id="" class="new-button">
										Continue
									</div>
								</div>
								
							</div>
						</form>
					</section>
				</div>
			</section>
		</div>
		
	</section>

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/style.js"></script>

</body>
</html>