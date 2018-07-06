<?php 
	//include_once $_SERVER['DOCUMENT_ROOT'] . "/form-process.php"; 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jason Wilson - Web Portfolio</title>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Hello I'm Jason Wilson. I like to design and code things." name="description">
	<meta content="BdgPixel" name="author">
	<!--Fav-->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!--styles-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<!--fonts google-->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	
	<!--recaptcha google-->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!--[if lt IE 9]>
	   <script type="text/javascript" src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
    <!--PRELOADER-->
	<div id="preloader">
		<div id="status">
			<img alt="logo" src="images/logo-loader.png">
		</div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
		<div class="for-sticky">
			<!--LOGO-->
			<div class="col-md-2 col-xs-6 logo">
				<a href="index.php"><img alt="logo" class="logo-nav" src="images/logo.png"></a>
			</div>
			<!--/.LOGO END-->
		</div>
		<div class="menu-wrap">
			<nav class="menu">
				<div class="menu-list">
					<a data-scroll="" href="#home" class="active">
						<span>Home</span>
					</a>
					<a data-scroll="" href="#about">
						<span>About</span>
					</a>
					<a data-scroll="" href="#work">
						<span>Work</span>
					</a>
					<a data-scroll="" href="#skills">
						<span>Skills</span>
					</a>
					<a data-scroll="" href="#employment">
						<span>Employment</span>
					</a>
					<a data-scroll="" href="#proficiency">
						<span>Proficiency</span>
					</a>
					<a data-scroll="" href="#education">
						<span>Education</span>
					</a>
					<a data-scroll="" href="#testimonial">
						<span>Testimonial</span>
					</a>
					<a data-scroll="" href="#contact">
						<span>Contact</span>
					</a>
				</div>
			</nav>
			<button class="close-button" id="close-button">Close Menu</button>
		</div>
		<button class="menu-button" id="open-button">
			<span></span>
			<span></span>
			<span></span>
		</button><!--/.for-sticky-->
	</div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
		<!--CONTENT-->
		<div class="content">
        	<!--HOME-->
			<section id="home">
				<div class="container">
					<div class="row">
						<div class="wrap-hero-content">
							<div class="hero-content">
								<img src="images/logo-hero.png" alt="Jason Wilson designer + coder"/> 
								<!-- <h1>Hello</h1>
								<br>
								<span class="typed"></span> -->
							</div>
						</div>
						<div class="mouse-icon margin-20">
							<div class="scroll"></div>
						</div>
					</div>
				</div>
			</section>
        	<!--/.HOME END-->

			<!--ABOUT-->
			<section id="about">
				<div class="col-md-6 col-xs-12 no-pad">
					<div class="bg-about"></div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 white-col">
					<div class="row">
						<!--OWL CAROUSEL2-->
						<div class="owl-carousel2">
							<div class="col-md-12">
								<div class="wrap-about">
									<div class="w-content">
										<p class="head-about">
                                        Hello! I'm a UI designer and coder. Officially, my job is to design and create websites, but really I create joyful online interactive experiences. During the past 15 years of my career a lot has changed. What hasn't is how much I enjoy doing this. For me, there's nothing better than a hot cup of joe and being immersed in a design or lines of code. My focus is to increase my knowledge, surpass my clients and colleagues expectations, while delivering a final product that creates an exceptional experience for whomever is using it.										</p>
										<h5 class="name">
										Jason Wilson
										</h5>
										<img alt="signature" src="images/signature.png">
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12 white-col">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
										<div class="wrap-about">
											<table class="w-content">
												<tr>
													<td class="title">Name </td>
													<td class="break">:</td>
													<td> Jason Wilson</td>
												</tr>
												<tr>
													<td class="title">Phone </td>
													<td class="break">:</td>
													<td> 712.789.0959</td>
												</tr>
												<tr>
													<td class="title">Email </td>
													<td class="break">:</td>
                                                    <td> <a href="mailto:jason@thejasonwilson.com">jason@thejasonwilson.com</a></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/.OWL CAROUSEL2 END-->
					</div>
				</div>
			</section>
			<!--/.ABOUT END-->

			<!--WORK-->
			<section class="grey-bg mar-tm-10" id="work">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h2 class="title-small">
								<span>Work</span>
							</h2>
							<p class="content-detail">
							Each project I take on is based upon creating a final product that is built on collaboration and purpose. I want to achieve the desired goals, but it's also important to me that the relationships created along the way are just as meaningful. <br><br>At the end of the day I just want to make great things with and for great people.
							</p>
                            
						</div>
						<div class="col-md-9 content-right">
							<!--PORTFOLIO IMAGE-->
							<ul class="portfolio-image">
								<!-- <li class="col-md-12">
									<a href="images/bw-1.jpg" title="Resume"><img alt="image" src="images/bw-1.jpg">
										<div class="decription-wrap">
											<div class="image-bg">
												<p class="desc">My Resume</p>
											</div>
										</div>
									</a>
								</li> -->
								<li class="col-md-12">
									<a href="images/bw-2.jpg" title="Greek Creations"><img alt="image" src="images/bw-2.jpg">
										<div class="decription-wrap">
											<div class="image-bg">
												<p class="desc">Greek Creations</p>
											</div>
										</div>
									</a>
								</li>
								<li class="col-md-12">
									<a href="images/bw-3.jpg" title="Corporate Creations"><img alt="image" src="images/bw-3.jpg">
										<div class="decription-wrap">
											<div class="image-bg">
												<p class="desc">Corporate Creations</p>
											</div>
										</div>
									</a>
								</li>
								<li class="col-md-12">
									<a href="images/bw-4.jpg" title="LovelySkin"><img alt="image" src="images/bw-4.jpg">
										<div class="decription-wrap">
											<div class="image-bg">
												<p class="desc">LovelySkin</p>
											</div>
										</div>
									</a>
								</li>
								<li class="col-md-12">
									<a href="images/bw-5.jpg" title="Steinbeck And Sons"><img alt="image" src="images/bw-5.jpg">
										<div class="decription-wrap">
											<div class="image-bg">
												<p class="desc">Steinbeck & Sons</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
							<!--/.PORTFOLIO IMAGE END-->
						</div>
					</div>
				</div>
			</section>
			<!--/.WORK END-->

			<!--SERVICES-->
			<section class="white-bg" id="skills">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h2 class="title-small">
								<span>Skills</span>
							</h2>
							<p class="content-detail">
							My abilities and interests in the multiple areas of web has been a constant evolution. Design and coding will always have my heart, but I feel in order to offer the best deliverables it's important to also be adept in areas outside traditional design and programming. 
							</p>
						</div>
						<div class="col-md-9 content-right skills-icons-section">
							<div class="row">
								<ul class="listing-item skills-icons-text">
									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											i
											</h4>
											<p class="head-sm">
											CREATIVE
											</p>
											<p class="text-grey">
											My way through any obstacle and to any solution is with creativity. To me, being creative means taking something complex and making it beautiful, simple, intuitive, and fun.
											</p>
										</div>
									</li>

									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											c
											</h4>
											<p class="head-sm">
											CODING
											</p>
											<p class="text-grey">
											Coding feeds my meticulous nature and I love writing it. Creating code that is readable, maintainable, efficient, and clear is something that I strive for with each line I write. 
											</p>
										</div>
									</li>

									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											I
											</h4>
											<p class="head-sm">
											UI
											</p>
											<p class="text-grey">
											Good aesthetics is at the core of who I am and lays the foundation in everything I do. I create designs with the intentions of not only being seen, but also touched.
											</p>
										</div>
									</li>
								</ul>

								<ul class="listing-item skills-icons-text">
									<li>
										<div class="col-md-4 col-sm-4">
											<p class="icon-use">
											t
											</p>
											<p class="head-sm">
											UX
											</p>
											<p class="text-grey">
											Purposeful design is paramount to me. I want to create an environment that answers questions, is fully accessible, and keeps a users attention. If it doesn't, I want to know why. 
											</p>
										</div>
									</li>

									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											m
											</h4>
											<p class="head-sm">
											MARKETING
											</p>
											<p class="text-grey">
											Marketing to me is about three steps. Define the product. Find the market, competition, and niche. Build a focused strategy that creates awareness and credibility while maximizing ROI. 
											</p>
										</div>
									</li>

									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											a
											</h4>
											<p class="head-sm">
											ANALYTICS
											</p>
											<p class="text-grey">
											When looking for answers to questions or issues, this is where I always start first. I also use analytics to ensure a positive user experience and forecast user behavior.
											</p>
										</div>
									</li>
								</ul>

								<ul class="listing-item skills-icons-text">
									<li>
										<div class="col-md-4 col-sm-4">
											<p class="icon-use">
											s
											</p>
											<p class="head-sm">
											SEO
											</p>
											<p class="text-grey">
											Learned very early in my career how essential a solid SEO strategy is. I focus on page rankings through rich content, good coding, search consoles, and search engine algorithm changes.
											</p>
										</div>
									</li>

									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											A
											</h4>
											<p class="head-sm">
											SCRUM/AGILE
											</p>
											<p class="text-grey">
											In my experience, it just flat out works. The accountability and transparency it provides leads to quicker deliverables, closer teamwork, and better project management.  
											</p>
										</div>
									</li>

									<li>
										<div class="col-md-4 col-sm-4">
											<h4 class="icon-use">
											J
											</h4>
											<p class="head-sm">
											DIRECTOR
											</p>
											<p class="text-grey">
											My approach to management is to train, teach, coach, and mentor. I have been fortunate enough to direct large and small teams of local and remote developers and designers.
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/.SERVICES END-->

			<!--EMPLOYMENT-->
			<section class="grey-bg" id="employment">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h2 class="title-small">
							<span>Employment</span>
							</h2>
							<p class="content-detail">
							I have been very fortunate to work with large scale companies as well as smaller local startups. These opportunities have encouraged me to wear many different hats and provided a considerable amount of insight into the different areas of web and design.
							</p>
						</div>
						<div class="col-md-9 content-right">
							<div class="row">
								<ul class="listing-item">
								
									<li>
										<div class="col-md-6 col-sm-6">
											<div class="wrap-card">
												<div class="card">
													<h3 class="year">
													2014 - 2018
													</h3>
													<p class="job">
													Front End Developer / UI Designer
													</p>
													<p class="company">
													Corporate Creations - Omaha, NE
													</p>
													<hr>
													<div class="text-detail">
														<p>
														• Lead creative designer and developer for a nationwide, enterprise level e-commerce website and a brochure site designed for local retail business. 														
														</p>
														<p>
														• Managed a team of local and remote developers and designers to ensure that websites utilized the best usability and coding practices. 														
														</p>
														<p>
														• Increased traffic as well as conversion rates for both sites through redesign, recoding, implementation of new marketing, and SEO strategy.  														
														</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="col-md-6 col-sm-6">
											<div class="wrap-card">
												<div class="card">
													<h3 class="year">
													2012 - 2014
													</h3>
													<p class="job">
													UI Designer / Art Director
													</p>
													<p class="company">
													LovelySkin - Omaha, NE
													</p>
													<hr>
													<div class="text-detail">
														<p>
														• Collaborated with large scale in-house website team using ASP.NET, MVC framework to create a multi-million dollar generating e-commerce website.  														
														</p>
														<p>
														• Developed website graphics, promotional, and specialized content pages with responsive coding in HTML5 and CSS3. 														
														</p>
														<p>
														• Co-authored rebranding of visual identity for website and print materials. 														
														</p>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<ul class="listing-item">
                                    <li>
										<div class="col-md-6 col-sm-6">
											<div class="wrap-card">
												<div class="card">
													<h3 class="year">
													2008 - 2012
													</h3>
													<p class="job">
													Web Designer / Graphic Designer
													</p>
													<p class="company">
													Lewis Enterprises - Omaha, NE
													</p>
													<hr>
													<div class="text-detail">
														<p>
														• Oversight of the creation, development, maintenance, and the visual identity of company websites.   														
														</p>
														<p>
														• Instituted company's social media presence, email marketing, and newsletters.  														
														</p>
														<p>
														• Designed all custom artwork for customer screen printing, embroidery, and promotional products. 														
														</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="col-md-6 col-sm-6">
											<div class="wrap-card">
												<div class="card">
													<h3 class="year">
													2007 - 2008
													</h3>
													<p class="job">
													Web Designer / Graphic Designer
													</p>
													<p class="company">
													Lead Group Design - Omaha, NE
													</p>
													<hr>
													<div class="text-detail">
														<p>
														• Introduced web capabilities to print production only company.  														
														</p>
														<p>
														• Provided conceptual designs for anticipated web and print business. 														
														</p>
														<p>
														• Created identity, direct, outdoor, and collateral design.														
														</p>
													</div>
												</div>
											</div>
										</div>
									</li>
                                </ul>
                                <!-- <ul class="listing-item">
									<li>
										<div class="col-md-6 col-sm-6">
											<div class="wrap-card">
												<div class="card">
													<h3 class="year">
													2005 - 2006
													</h3>
													<p class="job">
													Web Designer / Graphic Designer
													</p>
													<p class="company">
													CHEMISTRY ADVERTISING - OMAHA, NE
													</p>
													<hr>
													<div class="text-detail">
														<p>
														• Designed and developed new websites for primary clientele.   														
														</p>
														<p>
														• Redesigned and relaunched parent company website site. 														
														</p>
														<p>
														• Generated new branding for existing companies and clients.													
														</p>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/.EMPLOYEMENT END-->

			<!--SKILLS-->
			<section class="white-bg" id="proficiency">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h2 class="title-small">
							<span>Proficiency</span>
							</h2>
							<p class="content-detail">
							I am constantly on a mission to learn more. I am extremely proficient with design, HTML, and CSS. My current day focus is more so with the programming side of things. I love JavaScript and am currently writing and learning as much as I can.
							</p>
						</div>
						<div class="col-md-9 content-right">
							<!--SKILLST-->
							<div class="skillst">
								<div class="skillbar" data-percent="95%">
									<div class="title head-sm">
									HTML 5
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="94%">
									<div class="title head-sm">
									CSS 3/SASS
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="93%">
									<div class="title head-sm">
									Responsive
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="37%">
									<div class="title head-sm">
									JavaScript
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="35%">
									<div class="title head-sm">
									jQuery
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="91%">
									<div class="title head-sm">
									Development Tools
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="70%">
									<div class="title head-sm">
									Version/Git
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="45%">
									<div class="title head-sm">
									Command Line
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="97%">
									<div class="title head-sm">
									Photoshop
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
								<div class="skillbar" data-percent="98%">
									<div class="title head-sm">
									Illustrator
									</div>
									<div class="count-bar">
										<div class="count"></div>
									</div>
								</div>
							</div>
							<!--/.SKILLST END-->
						</div>
					</div>
				</div>
			</section>
			<!--/.SKILLS END-->

            <!--EDUCATION-->
            <section class="grey-bg" id="education">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="title-small">
                                <span>Education</span>
                            </h2>
                            <p class="content-detail">
                            My education equipped me with the technical skills necessary to enter the work force with confidence and competence.<br/><br/>During my career I have made it my focus to enhance this knowledge through professional development, training, and staying up-to-date with the latest trends in the fields of graphic design and development.
                            </p>
                        </div>
                        <div class="col-md-9 content-right">
                            <div class="row">
                                <ul class="listing-item">
                                    <li>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="wrap-card">
                                                <div class="card">
                                                    <h2 class="year">
                                                    2002 - 2004
                                                    </h2>
                                                    <p class="job">
                                                    AOS DEGREE in Graphic Design, Illustration, & Computer Graphics
                                                    </p>
                                                    <p class="company">
                                                    The Creative Center Art College
                                                    </p>
                                                    <hr>
                                                    <div class="text-detail">
                                                        <p>
                                                        • Gold and Silver ADDY Award recipient
                                                        </p>
                                                        <p>
                                                        • Instructor's Award recipient
                                                        </p>
                                                        <p>
                                                        • Scholastic Gold Key Award recipient
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="wrap-card">
                                                <div class="card">
                                                    <h3 class="year">
                                                    02/18 - 05/18
                                                    </h3>
                                                    <p class="job">
                                                    Front End Developer Certification
                                                    </p>
                                                    <p class="company">
                                                    Skillcrush Coding Program
                                                    </p>
                                                    <hr>
                                                    <div class="text-detail">
                                                        <p>
                                                        Continuing education course work included:
                                                        </p>
                                                        <p>• Git, GitHub, Command Line, Version Control</p>
                                                        <p>• Fluid Layouts, Responsive Typography, Flexbox, Media Queries</p>
                                                        <p>• Computational Thinking, JavaScript, jQuery</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/.EDUCATION END-->

            <!--TESTIMONIAL-->
            <section id="testimonial">
                <div class="container">
                    <div class="row wrap-testimonial">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="owl-carousel">
                                <div class="list-testimonial">
                                    <div class="content-testimonial">
                                        <h4 class="testi">
                                        " Jason Wilson is an excellent coder and a talented designer with a strong visual acuity. His ability to take designs from conception and translate those onto the screen, with code, proved invaluable when we worked together. "
                                        </h4>
                                        <p class="people">
                                        Heath Carranza<br/>UX/UI Designer - Aviture
                                        </p>
                                    </div>
                                </div>
                                <div class="list-testimonial">
                                    <div class="content-testimonial">
                                        <h4 class="testi">
                                        " Jason's holistic understanding of the user's experience makes him very effective at providing dynamic web-based design and front-end development solutions. He works well with all teams from marketing, development, design, content and management to understand the problem and find the best solution for the business and communicates effectively between teams. "
                                        </h4>
                                        <p class="people">
                                        Logan Chard<br/>Director of Ecommerce - LovelySkin
                                        </p>
                                    </div>
                                </div>
                                <div class="list-testimonial">
                                    <div class="content-testimonial">
                                        <h4 class="testi">
                                        " Jason has a rare ability to create and bring life to a web page. The artistry he provides, is unlike any other web designer I've been associated with in the past. He showed me how a website can jump out at you through the intricate detail he adds. I recommend him to any company that needs website work. "
                                        </h4>
                                        <p class="people">
                                        Jordan Cook<br/>City Administrator - Clarion, IA
                                        </p>
                                    </div>
                                </div>
                                <div class="list-testimonial">
                                    <div class="content-testimonial">
                                        <h4 class="testi">
                                        " During the time I've worked with Jason he has created amazing artwork for our many customers and has built two large websites from scratch. Both sites have become very successful. Not only is he talented, but is an ideal co-worker and is always willing to help. "
                                        </h4>
                                        <p class="people">
                                        Jay Malenica<br/>Production Manager - Corporate Creations
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mask-testimonial"></div> -->
            </section>
            <!--/.TESTMONIAL END-->
            
            <!--RESUME-->
            <section class="grey-bg" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="title-small-center">
                                <span>Resume</span>
                            </h3>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <br/><br/>
                                    <a href="images/resume.pdf" target="_blank">
                                        <p class="icon-use resume-icon">
                                        V
                                        </p>
                                    </a>
                                    <p class="content-details resume-text text-center">
                                    Take one to go!
                                    <br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/.RESUME END-->
            
            <!--CONTACT-->
            <section id="contact" class="white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="title-small">
                                <span>Contact</span>
                            </h2>
                            <p class="content-detail">
                            Thanks for taking the time to see what I'm up to. If you would like to reach out or get in touch, feel free to use the form and I'll get back to you as quickly as possible!
                            </p>
                            <hr>
                            <p class="content-detail no-mar">
                            Phone: 712.789.0959
                            </br>
                            Email: <a href="mailto:jason@thejasonwilson.com">jason@thejasonwilson.com</a>
                            <br/><br/>
                            </p>
                        </div>
                        <div class="col-md-9 content-right">
                            <form method="POST" action="/form-process.php" id="contactForm" onsubmit="return validateForm()">
                                <div class="group">
                                    <input name="contactname" type="text" value="<?php echo $_POST['contactname']; ?>" class="<?php if($errorName == true){ echo 'error';}?>"><span class="highlight"></span><span class="bar"></span><label>Name</label>
                                </div>
                                <div class="group">
                                    <input name="contactemail" type="text" value="<?php echo $_POST['contactemail']; ?>" class="<?php if($errorEmail == true){ echo 'error';}?>"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                                </div>
                                <div class="group">
                                    <input name="contactphone" type="tel" value="<?php echo $_POST['contactphone']; ?>" class="<?php if($errorPhone == true){ echo 'error';}?>"><span class="highlight"></span><span class="bar"></span><label>Phone Number</label>
                                </div>
                                <div class="group">
                                    <textarea name="contactmessage" class="<?php if($errorMessage == true){ echo 'error';}?>"><?php echo $_POST['contactmessage']; ?></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
                                </div>
                                <div class="group">
                                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdesF0UAAAAAPndlQGuxiBxQEPhzoeNDm5dLtPT"></div>
                                </div>
                                <input id="sendMessage" name="sendsessage" type="submit" value="Send Message">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--/.CONTACT END-->
        
            <!--FOOTER-->
            <footer>
                <div class="footer-top">
                    <ul class="socials">
                        <li class="linkedin">
                            <a href="https://www.linkedin.com/in/jason-wilson/" data-hover="LinkedIn" target="_blank">LinkedIn</a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/thejaswilson" data-hover="Twitter" target="_blank">Twitter</a>
                        </li>
                        <li class="github">
                            <a href="https://github.com/thejasonwilson/" data-hover="GitHub" target="_blank">GitHub</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <img src="images/logo-bottom.png" alt="logo bottom" class="center-block" />
                        </div>
                    </div>
                </div>
            </footer>
            <!--/.FOOTER-END-->

        <!--/.CONTENT END-->
        </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
	    var capchaChecked = false;
	    function recaptchaCallback() {
			    capchaChecked = true;
			};
		function validateForm() {
		    //var contactName = document.forms["contactForm"]["contactname"].value;
		    if(capchaChecked == false){
		    	alert("You must check the recapcha.");
		    	return false;
		    }
		    var errorClass = "error";
		    var contactName = $("input[name=contactname]");
		    var contactEmail = $("input[name=contactemail]");
		    var contactPhone = $("input[name=contactphone]");
		    var contactMessage = $("textarea[name=contactmessage]");
		    if (contactName.val() == "" || contactEmail.val() == "" || contactPhone.val() == "" || contactMessage.val() == "") {
		    	alert("All fields are required.");
		        if(contactName.val() == ""){
		        	contactName.addClass(errorClass);
		        }else{
		        	contactName.removeClass(errorClass);
		        }
		        if(contactEmail.val() == ""){
		        	contactEmail.addClass(errorClass);
		        }else{
		        	contactEmail.removeClass(errorClass);
		        }
		        if(contactPhone.val() == ""){
		        	contactPhone.addClass(errorClass);
		        }else{
		        	contactPhone.removeClass(errorClass);
		        }
		        if(contactMessage.text() == ""){
		        	contactMessage.addClass(errorClass);
		        }else{
		        	contactMessage.removeClass(errorClass);
		        }
		        return false;
		    }
		}
    </script>
</body>
</html>