<!DOCTYPE html>
<html lang="en">
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
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>Esteban Martinez</title>
	</head>
	<body>
		<!--Nav bar-->
		<nav class="navbar navbar-expand-md navbar fixed-top navbar-dark bg-dark">
			<a class="navbar-brand pl-4" href="#">Esteban Martinez</a>
			<button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
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
					<h1 class="display-4 d-flex justify-content-end"> Welcome!<br>I'm Esteban</h1>
					<h3 class="display-6 d-flex justify-content-end">Junior Full Stack<br>Web Developer</h3>
					<ul class="d-md-flex justify-content-end pl-0 text-right pr-5">
						<li><a href="https://github.com/fullStackMartinez" target="_blank"><i
									class="fab fa-github-square fa-2x" style="color: #1C242C"></i></a></li>
						<li><a href="https://www.linkedin.com/in/esteban-martinezABQ/" target="_blank"><i
									class="fab fa-linkedin fa-2x" style="color: #1C242C;"></i></a></li>
						<!--<li><i class="fab fa-facebook fa-2x" style="color: #1C242C"></i></li>-->
						<li><a href="mailto:fullstackmartinez@gmail.com"> <i class="fas fa-envelope fa-2x"
																							  style="color: #1C242C"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-4">Design. Code. Data. Repeat</h1>
				<p class="lead text-center">My name is Esteban Martinez, a New Mexico bred Full Stack Web Developer. I've taken my experiences as a hard working athlete and paired them with modern web development skills to become an asset to the tech world. Whether working solo or on a development team, I love solving problems through critical thinking. </p>
			</div>
		</div>
		<section id="skill">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center pb-4">
							<h1>Skills</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="d-flex justify-content-center">
								<i class="fas fa-futbol fa-3x mb-2 pb-2" style="color: #0080FF"></i>
							</div>
							<h4 class="display-6 text-center ">Team Player</h4>
							<p class="text-center lead">My history with competitive team sports has
								taught me how to work with different personalities, teams and game plans. I know how to push
								myself, and have the belief that winning teams begin with strong individuals. </p>
						</div>
						<div class="col-sm-12 col-md-4 pb-3">
							<div class="d-flex justify-content-center">
								<i class="fas fa-lightbulb fa-3x mb-2 pr-2" style="color: #0080FF"></i>
								<i class="fas fa-comments fa-3x mb-2 pl-2" style="color: #0080FF"></i>
							</div>
							<h4 class="text-center">UX/UI Ideas</h4>
							<p class="text-center lead">I collaborate with clients and employers to brainstorm ideas into well
								thought out designs. Being able to clearly communicate and quickly adapt is something I pride
								myself in.</p>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="d-flex justify-content-center">
								<i class="fas fa-code fa-3x mb-2 pr-2" style="color: #0080FF"></i>
								<i class="fas fa-database fa-3x mb-2 pl-2" style="color: #0080FF"></i>
							</div>
							<h4 class="display-6 text-center">Coding Skills</h4>
							<dl class="text-center lead">
								<dt>Front-End</dt>
								<dd>HTML 5 | CSS3 <br> JavaScript | Bootstrap 4</dd>
								<dt>Back-End</dt>
								<dd>PHP</dd>
								<dd>MySQL</dd>
							</dl>
						</div>
					</div>
				</div>
		</section>
		<!--Section for parallax quote-->
	<section>

	</section>
		<!--Accomplishments-->
		<div id="accomplishments">
			<div class="container mb-5">
				<div class="row">
					<div class="col-12 d-flex justify-content-center pt-5">
						<h1>Accomplishments</h1>
					</div>
				</div>
				<div class="row pt-5">
					<div class="col-sm-12 col-md-6">
						<h3 class="display-6 text-center">Deep Dive Boot Camp</h3>
						<h4 class="display-6 text-center">Full Stack Web Development</h4>
						<div class="card mx-auto" style="width: 18rem;">
							<img class="card-img-top" src="./image/certificate.jpg" alt="Card image cap">
							<div class="card-body pb-0">
								<p class="lead font-weight-bold">Graduated from a 10-week intensive web development boot camp where we learned and worked with OOP PHP, MySQL, JavaScript, HTML5, CSS3, Angular and Bootstrap 4. Also learned Agile work concepts and Git/GitHub.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<h3 class="display-6 text-center">DDC Code-A-Thon</h3>
						<h4 class="display-6 text-center">2nd Place!</h4>
						<div class="card mx-auto" style="width: 18rem;">
							<img class="card-img-top" src="./image/code.jpg" alt="Card image cap">
							<div class="card-body pb-0">
								<p class="lead font-weight-bold">Competed and placed 2nd against 13 development teams building a React.js based application with Redux, Firestore for our backend and Symantic UI styling.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--PORTFOLIO/WORKS-->
		<!--<div id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center pb-2">
						<h1>Portfolio</h1>
					</div>
				</div>
				<section class="portfolio-work pb-4">
					<div class="row">
						<div class="col-md-6 u-pull-right">
							<img src="./image/food.jpg" alt="Picture of fresh food" style="border-radius: 10px;" class="portfolio-image">
						</div>
						<div class="col-md-6 u-pull-left">
							<div class="portfolio-content text-left">
								<h3 class="project-title">Feeding Our Past</h3>
								<p class="portfolio-description">Worked on a development team that built a site aimed at
									connecting community food banks and committed volunteers to aid hungry seniors in ABQ. Built
									database with PHP/MySQL. Used HTML5, CSS3, Bootstrap 4 and Angular 5 for Front end.</p>
							</div>
						</div>
					</div>
				</section>
				<section class="portfolio-work pb-2">
					<div class="row">
						<div class="col-md-6 u-pull-right">
							<img src="./image/angie.jpeg" alt="Picture of books" style="border-radius: 10px;" class="portfolio-image">
						</div>
						<div class="col-md-6 u-pull-left">
							<div class="portfolio-content text-left">
								<h3 class="project-title">Reading With Angie</h3>
								<p class="portfolio-description">Took the opportunity to build a blog for a local book club.
									Readers can write reviews on recommended books. Designed and implemented code in HTML5, CSS3
									and Bootstrap 4.</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>-->
		<section id="new-portfolio">
			<div class="row">
				<div class="column">
					<img src="./image/food.jpg" alt="Picture of fresh food" style="border-radius: 10px;" class="portfolio-image">
					<h3 class="project-title">Feeding Our Past</h3>
					<p class="portfolio-description">Worked on a development team that built a site aimed at
						connecting community food banks and committed volunteers to aid hungry seniors in ABQ. Built
						database with PHP/MySQL. Used HTML5, CSS3, Bootstrap 4 and Angular 5 for Front end.</p>
				</div>
					<div class="column">
						<img src="./image/angie.jpeg" alt="Picture of books" style="border-radius: 10px;" class="portfolio-image">
						<h3 class="project-title">Reading With Angie</h3>
						<p class="portfolio-description">Took the opportunity to build a blog for a local book club.
							Readers can write reviews on recommended books. Designed and implemented code in HTML5, CSS3
							and Bootstrap 4.</p>
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
						<div class="form-group row pt-lg-5 pb-lg-3 pt-5">
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactName">Name</label>
								<input type="text" class="form-control mb-4" id="contactName" name="contactName"
										 aria-describedby="contactName"
										 placeholder="Name">
							</div>
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactEmail">Email Address</label>
								<input type="email" class="form-control mb-4" id="contactEmail" name="contactEmail"
										 aria-describedby="contactEmail"
										 placeholder="Enter email address">
							</div>
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactSubject">Subject</label>
								<input type="text" class="form-control mb-4" id="contactSubject" name="contactSubject"
										 aria-describedby="contactSubject"
										 placeholder="Email subject">
							</div>
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactMessage">A quick message</label>
								<textarea class="form-control" id="contactMessage" name="contactMessage" rows="4"
											 placeholder="What are you interested in?"></textarea>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<div class="g-recaptcha" data-sitekey="6Ld-yEoUAAAAAPStd7wJSm6jzHc-jnqBSSTV9fid"></div>
						</div>
						<div class="text-center">
							<button class="btn btn-primary btn-lg mt-3 mb-3 text-center" type="submit">Submit</button>
						</div>
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
		<section id="foot" class="pt-4">
			<footer class="container-fluid text-center bg-dark">
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<h2>Find Me</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<ul class="d-flex display-inline justify-content-center pl-0">
							<li><a href="https://github.com/fullStackMartinez" target="_blank"><i
										class="fab fa-github-square fa-2x" style="color: lightgray"></i></a></li>
							<li><a href="https://www.linkedin.com/in/esteban-martinezABQ/" target="_blank"><i
										class="fab fa-linkedin fa-2x" style="color: lightgray"></i></a></li>
							<!--<li><i class="fab fa-facebook fa-2x" style="color: lightgray"></i></li>-->
							<li><a href="mailto:fullstackmartinez@gmail.com"> <i class="fas fa-envelope fa-2x" style="color: lightgray"></i></a></li>
						</ul>
					</div>
				</div>
			</footer>
		</section>
	</body>
</html>
