<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="css/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
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
		<nav class="navbar navbar-expand-md navbar navbar-dark fixed-top">
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
		<section id="hero">
			<div class="welcome">
				<h2 class="display-4"><span>Welcome!</span></h2>
				<h3 class="display-3"><span class="name">I'm Esteban</span></h3>
				<p class="des">Web Developer | Web Designer</p>
				<a href="#" class="button">Contact Me</a>
				<div class="icons">
					<a href="https://github.com/fullStackMartinez" target="_blank"><i
							class="fab fa-github-square fa-2x"></i></a>
					<a href="https://www.linkedin.com/in/esteban-martinezABQ/" target="_blank"><i
							class="fab fa-linkedin fa-2x"></i></a>
				</div>

			</div>
		</section>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-4 headline">Design. Build. Repeat</h1>
				<p class="lead text-center">My name is Esteban Martinez, a New Mexico bred Full Stack Web Developer. I've
					taken my experiences as a hard working athlete and paired them with modern web development skills to
					become an asset to the tech world. Whether working solo or on a development team, I love solving problems
					through critical thinking, making websites responsive for any device and collaborating with clients to
					achieve goals.</p>
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
							<i class="fas fa-futbol fa-3x mb-2 pb-2" style="color: #212529"></i>
						</div>
						<h4 class="display-6 text-center ">Team Player</h4>
						<p class="text-center lead">My history with competitive team sports has
							taught me how to work with different personalities, teams and game plans. I know how to push
							myself, and have the belief that winning teams begin with strong individuals. </p>
					</div>
					<div class="col-sm-12 col-md-4 pb-3">
						<div class="d-flex justify-content-center">
							<i class="fas fa-lightbulb fa-3x mb-2 pr-2" style="color: #212529"></i>
							<i class="fas fa-comments fa-3x mb-2 pl-2" style="color: #212529"></i>
						</div>
						<h4 class="text-center">UX/UI Ideas</h4>
						<p class="text-center lead">I collaborate with clients and employers to brainstorm ideas into well
							thought out designs. Being able to clearly communicate and quickly adapt is something I pride
							myself in.</p>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="d-flex justify-content-center">
							<i class="fas fa-code fa-3x mb-2 pr-2" style="color: #212529"></i>
							<i class="fas fa-database fa-3x mb-2 pl-2" style="color: #212529"></i>
						</div>
						<h4 class="display-6 text-center">Coding Skills</h4>
						<dl class="text-center lead">
							<dt>Front-End</dt>
							<dd>HTML 5 | CSS3 | Sass <br> JavaScript (ES6) | Vue.js | Bootstrap 4 <br> Wordpress</dd>
							<dt>Back-End</dt>
							<dd>PHP</dd>
							<dd>MySQL</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>
		<!--  Experience  -->
		<section class="experience-container">
			<div class="display">
				<h1>Experience</h1>
				<h5>A quick overview of my development history</h5>
			</div>
			<div class="job-container">
				<div class="image">
					<h2>Meridian Six</h2>
					<p>Websites, Advertising & Graphic Design</p>
				</div>
				<div class="info">
					<h3>Front-end contract developer</h3>
					<p>Front end developer working with HTML, CSS/Sass, JavaScript, PHP and MySQL to build custom Wordpress
						themes from the ground up.</p>
					<ul>
						<li>Writing custom PHP to build Wordpress backend functionality using Advanced Custom Fields and
							Custom Post Types
						</li>
						<li>Custom styling using CSS/Sass and adding dynamic features using JavaScript</li>
						<li>Experience with the WooCommerce Plug-in for e-commerce sites</li>
						<li>Converting PSD to Wordpress site.</li>
						<li>Making older websites responsive using modern techniques such as Bootstrap 4, Flexbox and CSS
							Grid
						</li>
					</ul>
				</div>
			</div>
			<div class="job-container">
				<div class="image">
					<img src="image/ingenuity.png">
				</div>
				<div class="info">
					<h3>Junior Web Developer</h3>
					<p>Internship out of boot camp where I worked with a development team to design and build custom websites
						and applications. Worked with PHP, MySQL, HTML, CSS and Wordpress on a daily basis.</p>
					<ul>
						<li>Contributed to two major projects where I wrote custom PHP and CSS to style and test.</li>
						<li>Utilized GIT and Github to contribute and share work with teammates</li>
						<li>Used custom post types and custom fields to add functionality to Wordpress projects</li>
						<li>Focused on Responsive Design using Flexbox</li>
					</ul>
				</div>
			</div>
			<div class="job-container">
				<div class="image">
					<img src="image/deep-dive-logo-w-ingenuity.png">
				</div>
				<div class="info">
					<h3>Full Stack Web Development Boot Camp Grad</h3>
					<p>12 week full time intensive Full Stack Web Development training, learning OOP with PHP, database
						management with SQL, and Front End engineering with HTML5, CSS3, JavaScript (ES6), Bootstrap 4,
						Angular 4. </p>
					<ul>
						<li>Built a full stack application on a small team using PHP, MySQL and Angular</li>
						<li>Utilized GIT and Github to contribute and share work with teammates</li>
						<li>Learned and applied the fundamentals of web development, including how to write clean DRY code,
							development processes such as wireframing and data design, and live deployment
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of experience section -->

		<!-- start of PORTFOLIO WORKS -->
		<section id="portfolio">
			<div class="display">
				<h1>Portfolio</h1>
				<h5>I've had the priviledge of working with other developers, contributing both back and front end code, as
					well as building projects myself, for example this website! Here are a few pieces of my work.</h5>
			</div>
			<div class="works-container">
				<div class="works-flex">
					<div class="cards">
						<div>
							<img src="image/cnmi-logo.png">
							<h6>CNM Ingenuity, Inc.</h6>
							<p>Custom built Wordpress theme during my internship as part of a development team. Used PHP, CSS,
								custom fields, custom post types and JavaScript.</p>
							<a href="http://cnmingenuity.org" target="_blank">Visit Site</a>
						</div>
					</div>
					<div class="cards monte">
						<div>
							<div class="contain">
								<img src="image/masonic-logo.png">
								<h6><span class="montezuma">Montezuma Lodge Santa Fe</span></h6>
							</div>
							<p>Converted PSD to Wordpress site. Wrote back end in PHP with ACF and CPTs, styled front end with
								CSS. Focused on site responsiveness by using Flexbox.</p>
							<a href="https://www.montezumalodge.org/" target="_blank">Visit Site</a>
						</div>
					</div>
					<div class="cards ellis">
						<div>
							<img src="image/ellis.png">
							<h6>Laura Ellis Art</h6>
							<p>Converted a PDF into a fully responsive Wordpress website using PHP, ACF and CPTS for the backend, and styled the front end using SCSS, Flexbox and jQuery.</p>
							<a href="http://ellis.pairserver.com/" target="_blank">Visit Site</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of PORTFOLIO WORKS -->
		<!-- begin of playground -->
		<section id="portfolio">
			<div class="display">
				<h1>Playground</h1>
				<h5>To help me reach my goals of continued learning, I like to use my free time to build little things which push me out of my comfort zone. This forces me to study and learn new things, broaden my skill set and practice my skill.</h5>
			</div>
			<div class="works-container2">
				<div class="works-flex">
					<div class="cards">
						<div>
							<h4>Vue.js Coach Helper</h4>
							<p>A simple Vue.js app that helped me learn the fundamentals of the framework. It does two things: allows coaches to record a roster and it allows coaches to build a practice schedule and scratch off drills when completed.</p>
							<a href="https://fullstackmartinez.github.io/vue-soccer-coach-helper/" target="_blank">Check it out</a>
							<a href="https://github.com/fullStackMartinez/vue-soccer-coach-helper" target="_blank">GitHub Repo</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of playground-->
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
							<button class="btn btn-lg mt-3 mb-3 text-center" type="submit">Submit</button>
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
