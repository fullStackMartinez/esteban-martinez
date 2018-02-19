<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scaled=1, shrink-to-fit=no">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>

		<title>Esteban Martinez</title>
	</head>
	<body>
		<!--Nav bar-->
		<div id="hero">
			<div class="container">

					<nav class="navbar navbar-expand-sm navbar-light bg-faded">
						<a class="navbar-brand" href="#">Esteban Martinez</a>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
								  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								  aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#">Who Is Esteban? </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Works</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contact</a>
								</li>
							</ul>
						</div>
					</nav>

				<div class="row hero-content">
					<div class="col-md-6 col-sm-12">
						<h1 class="text-uppercase text-center text-md-left">Welcome, I'm Esteban Martinez</h1>
						<h4 class="text-uppercase text-center text-md-left">New Mexico Bred Full Stack Web Developer</h4>

					</div>
				</div>
			</div>
		</div>


		<!--HOME SECTION WITH QUICK INTRO TEXT/ USE CSS TO PUT BACKGROUND IMAGE FULL SCREEN-->
		<header>
			<div class="home-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="home-text">
								<h2>Esteban Martinez</h2>
								<h3><strong>Full Stack Web developer</strong></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!--About Me-->
		<section>
			<div class="about-me">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Who is Esteban?</h2>
							<p class="line"></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 con-sm-12">
							<!--IMAGE IS PLACEHOLDER FOR NOW, ANDREW MAKING ME ART PIECE-->
							<img src="image/download.jpg" alt="picture of me placeholder" class="img-fluid d-block mx-auto">
						</div>
						<div class="col-lg-6 col-md-6 con-sm-12 item-text">
							<p>Welcome, I'm Esteban Martinez, a New Mexico bred <strong>Full Stack Web Developer</strong> who
								enjoys building on the web, big or small. If you need a web <strong>presence</strong>, or if you
								are an employer looking to <em>strengthen</em> your team, take a peak at my portfolio and let's
								get to work!</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--PORTFOLIO/WORKS-->
		<section>
			<div class="container">
			<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Main web site I want to show</h4>
						<p class="card-text">Lorem ipsum dolor amet williamsburg tousled bitters, raclette kickstarter food
							truck tumblr vexillologist seitan PBR&B.</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">second website I want to show</h4>
						<p class="card-text">Tumblr butcher street art seitan heirloom cred bespoke roof party XOXO. Semiotics
							twee health goth selfies brunch bushwick.</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Third website I want to show</h4>
						<p class="card-text">Shabby chic hexagon jianbing scenester prism la croix direct trade pok pok
							microdosing chillwave glossier neutra.</p>

					</div>
				</div>
			</div>
			</div>
		</section>
		<!--CONTACT FORM-->
		<section class="form">
			<div class="container">
				<h2>Contact</h2>
				<form>
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" placeholder="First name">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Last name">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" placeholder="Email">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="How Can I Help You?">
						</div>
					</div>
				</form>
			</div>

		</section>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>
	</body>
</html>