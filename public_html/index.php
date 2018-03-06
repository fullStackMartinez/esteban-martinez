<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="css/style.css" rel="stylesheet">
		<script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>Esteban Martinez</title>
	</head>
	<body>
		<!--Nav bar-->
		<nav class="navbar navbar-expand-md navbar fixed-top navbar-trans navbar-dark bg-dark">
			<a class="navbar-brand pl-2" href="#">Esteban Martinez</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#skill">Skills</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact Me</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--HERO SECTION-->

		<div id="hero">
			<div class="container-fluid">
				<div class="landing-text">
						<h1 class="d-flex justify-content-end">  Welcome!<br> I'm Esteban</h1>
					<h3 class="d-flex justify-content-end">Junior Full Stack<br>Web Developer</h3>
					<ul class="d-flex justify-content-end">
						<li><i class="fab fa-github-square fa-2x"></i></li>
						<li><i class="fab fa-linkedin fa-2x"></i></li>
						<li><i class="fab fa-facebook fa-2x"></i></li>
						<li><i class="fas fa-envelope fa-2x"></i></li>
					</ul>
				</div>
			</div>
		</div>

		<!--About Me-->
		<section>
			<div class="about-me mt-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center pb-4">
							<h2>Esteban Martinez</h2>
							<p class="line"></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<!--IMAGE IS PLACEHOLDER FOR NOW, ANDREW MAKING ME ART PIECE-->
							<img src="image/download.jpg" alt="picture of me placeholder" class="img-fluid d-block mx-auto">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 item-text pt-4">
							<p>Welcome, I'm Esteban Martinez, a New Mexico bred <strong>Full Stack Web Developer</strong>
								who
								enjoys building on the web, big or small. If you need a web <strong>presence</strong>, or if
								you
								are an employer looking to <em>strengthen</em> your team, take a peak at my portfolio and
								let's
								get to work!</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--HOME SECTION WITH THE 3 COLUMNS OF MY EXPERTISE-->
		<section id="skill">
			<div class="home pt-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center pb-4">
							<h1>Skills</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="d-flex justify-content-center">
								<i class="fas fa-futbol fa-2x mb-2 pb-2"></i>
							</div>
							<h4 class="text-center ">Team Player</h4>
							<p class="text-center">My history with competitive team sports has
								taught me how to work with different personalities, teams and game plans. I know how to push
								myself, and have the belief that winning teams begin with strong individuals. </p>
						</div>
						<div class="col-sm-12 col-md-4 pb-3">
							<div class="d-flex justify-content-center">
								<i class="fas fa-lightbulb fa-2x mb-2 pr-2"></i>
								<i class="fas fa-comments fa-2x mb-2 pl-2"></i>
							</div>
							<h4 class="text-center">UX/UI Ideas</h4>
							<p class="text-center">I collaborate with clients and employers to brainstorm ideas into well
								thought out designs. Being able to clearly communicate and quickly adapt is something I pride
								myself in.</p>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="d-flex justify-content-center">
								<i class="fas fa-code fa-2x mb-2 pr-2"></i>
								<i class="fas fa-database fa-2x mb-2 pl-2"></i>
							</div>
							<h4 class="text-center">Coding Skills</h4>
							<dl class="text-center">
								<dt>Front-End</dt>
								<dd>HTML 5 | CSS3 <br> JavaScript | Bootstrap 4</dd>
								<dt>Back-End</dt>
								<dd>PHP</dd>
								<dd>MySQL</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--PORTFOLIO/WORKS-->
		<section id="portfolio" class="pt-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center pb-4">
						<h1>Portfolio</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<h4>Feeding Our Past</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. </p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="image/donation.jpg" class="img-fluid">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<h4>Reading With Angie</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. </p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="image/book.jpg" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<!--CONTACT FORM-->
		<section id="contact">
			<div id="join-container" class="pt-lg-6 pb-lg-6 pt-5">
				<div class="container">
					<h2 class="text-uppercase text-center">Interested in working together?</h2>
					<h4 class="text-uppercase text-center">Contact Me</h4>
					<form id="contact-form" action="php/mailer.php" method="post">
						<div class="form-group row pt-lg-5 pb-lg-5 pt-5">
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactName">Name</label>
								<input type="text" class="form-control mb-4" id="contactName" name="contactName" aria-describedby="emailHelp"
										 placeholder="Name">
							</div>
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactEmail">Email Address</label>
								<input type="email" class="form-control mb-4" id="contactEmail" name="contactEmail" aria-describedby="emailHelp"
										 placeholder="Enter email address">
							</div>
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactSubject">Subject</label>
								<input type="text" class="form-control mb-4" id="contactSubject" name="contactSubject" aria-describedby="emailHelp"
										 placeholder="Email subject">
							</div>
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactMessage">A quick message</label>
								<textarea class="form-control" id="contactMessage" name="contactMessage" rows="4"
											 placeholder="What are you interested in?"></textarea>
							</div>
						</div>
						<div class="g-recaptcha" data-sitekey="6Ld-yEoUAAAAAPStd7wJSm6jzHc-jnqBSSTV9fid"></div>


						<button type="button" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
					</form>
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--FOOTER-->
		<section>
			<footer class="container-fluid text-center">
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<h3>Find Me</h3>
						<br>
						<p>LInks</p>
					</div>
			</footer>
		</section>
	</body>
</html>
