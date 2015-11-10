<?php
    include 'inc/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Jennifer Morris.com</title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Cache-control" content="public">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Jennifer Morris">
<meta name="keywords" content="Jennifer Morris, LAMP Stack, Developer, Birmingham, PHP, MySQL">
<meta name="author" content="Jennifer Morris">

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Retina Images -->
<script>if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
    document.cookie='HTTP_IS_RETINA=1;path=/';</script>
<!-- End Retina Images -->

<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/animations.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/style.min.css" />
<link rel="stylesheet" type="text/css" href="colors/green.css" id="colors" />

</head>

<body>

<!-- Facebook Source -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Loader -->
<div id="page-loader">	</div>
<!-- Loader / End -->

<!-- Header  -->
<header id="nav-content" class="vertical-nav nav-white">

	<!-- Logo -->
	<div class="my-logo">
    	<a href="#profile"><img src="images/my-photo.jpg" alt="" /></a>
    </div>
    
    <!-- Navigation -->
    <ul class="menu nav me-nav">
    	<li class="menu-item active"><a href="#profile"><span>Profile</span><i class="fa fa-user"></i></a></li>
        <li class="menu-item"><a href="#resume"><span>Resume</span><i class="fa fa-pencil"></i></a></li>
        <li class="menu-item"><a href="#portfolio"><span>Portfolio</span><i class="fa fa-desktop"></i></a></li>
        <li class="menu-item"><a href="#blog"><span>Latest Posts</span><i class="fa fa-comment"></i></a></li>
        <li class="menu-item"><a href="#contact"><span>Contact</span><i class="fa fa-phone"></i></a></li>
        
    </ul>
    
    <!-- Copyright -->
    <span class="copyright hidden-md">© 2015 <b>Jennifer Morris</b>.</span>

</header>
<!-- Header / End -->

<!-- Page Content -->
<div id="page-content">

	<!-- Profile -->
	<section id="profile" class="black">
    
    	<!-- Background photo -->
    	<div id="profile-bg" class="editable-alpha" data-alpha="40"><img src="images/backgrounds/background.jpg" alt="" /></div>

        <div class="content padded dark">
        
        	<!-- Top Bar -->
        	<div class="top-bar">
            
            	<!-- Social media -->
            	<div class="pull-left">
                	<span class="hiddend-sm hidden-xs">Check my social media! &nbsp; &nbsp; </span>
                    <ul class="social-icons si-pull-up">
                        <li><a href="https://www.facebook.com/JenniferMorrisSocial"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/j2leigh"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/+JenniferMorris3506"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                
                <!-- URL -->
                <div class="pull-right">
                	<a href="#" class="hidden-xs">www.JenniferMorris.com</a><br/>
                        <a href="blog/" class="hidden-xs">Blog Sign In</a>
                </div>
                
            </div>
        
            <!-- Profile Content -->
            <div class="profile-content">
            	<h1 class="short">Jennifer Morris</h1>
                <h5>I am a <span class="text-primary">Contractor</span> - LAMP Stack Web Developer.</h5>
                 <a href="#contact" class="btn btn-default">Contact me</a>
            </div>
            
            <!-- Bottom Bar -->
            <div class="bottom-bar profile-bottom-bar hidden-xs">
            
            	<!-- Contact List -->
                <ul class="list-inline">
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i> Greater Birmingham Area, Alabama , USA</li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i><a href="#">j2leigh@gmail.com</a></li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i>(205) 578-7027 </li>
                </ul>
             
            </div>
                    
        </div>    	
        
    </section>
    <!-- Profile / End -->
    
    <!-- Resume -->
	<section id="resume">
    
    	<div class="content dimmed-effect padded-short">
        	
            <div class="row">
            
              <div class="col-lg-4">
              
              	<!-- Box - About Me -->
                <div class="resume-box animated slide-in-top">
                  <i class="title-icon text-blue flaticon-speech43"></i>
                  <h3>Who am I?</h3>
                  <p class="lead">A Web Developer/Designer with 15+ years of web development experience for clients of all sizes. </p>
                  <p> Jennifer has extensive experience developing a variety of  data driven websites and applications including: customer relationship management sites (CRM), call center software,  e-commerce sites, e-learning sites, survey applications, and custom content management systems (CMS). Jennifer is equally adept at both Object Oriented Programming and Procedural design.  She is a team player but can also work independently with minimal supervision. Additionally, she has experience in all areas of the software development lifecycle (SDLC).</p>
                  <a href="#portfolio" class="btn btn-black">See my portfolio</a> <a href="#contact" class="btn btn-default">Contact me</a>
                </div>
                
                <!-- Box - Skills & Attributes -->
                <div class="resume-box animated slide-in-left appear-second">
                  <i class="title-icon text-green flaticon-open79"></i>
                  <h3>Skills &amp; Attributes</h3>
                  <!-- Single skill -->
                  <div class="skill">
                  	<span class="skill-name">Linux</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                  <!-- Single skill -->
                  <div class="skill">
                  	<span class="skill-name">Apache</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                  <!-- Single skill -->
                  <div class="skill">
                  	<span class="skill-name">HTML5/CSS3</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                    </div>
                  </div>
                  <!-- Single skill -->
                  <div class="skill">
                  	<span class="skill-name">Javascript/jQuery/jQuery-UI</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                  <div class="skill">
                  	<span class="skill-name">PHP</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                    </div>
                  </div>
                  <div class="skill">
                  	<span class="skill-name">MySQL</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                    </div>
                  </div>
                  <div class="skill">
                  	<span class="skill-name">Symfony 2.5+</span>
                    <div class="skill-bar sb-green">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                </div>
                
              </div>
          	  
              <div class="col-md-6 col-lg-4">
              
              	<!-- Box - Specialities -->
                <div class="resume-box animated slide-in-right">
                  <i class="title-icon text-red flaticon-mouse19"></i>
                  <h3>My Specialities</h3>
                  <!-- Speciality -->
                  <div class="speciality">
                  	<i class="speciality-icon text-red flaticon-bulb11"></i>
                    <div class="speciality-content">
                    	<h5 class="short">Web design</h5>
                        <p class="speciaity-description">Great, modern website designs.</p>
                    </div>
                  </div>
                  <!-- Speciality -->
                  <div class="speciality">
                  	<i class="speciality-icon text-red flaticon-codings1"></i>
                    <div class="speciality-content">
                    	<h5 class="short">Front-End Web Development</h5>
                        <p class="speciaity-description">Great, modern website designs.</p>
                    </div>
                  </div>
                  <!-- Speciality -->
                  <div class="speciality">
                  	<i class="speciality-icon text-red flaticon-tablet42"></i>
                    <div class="speciality-content">
                    	<h5 class="short">App Design</h5>
                        <p class="speciaity-description">Great, modern website designs.</p>
                    </div>
                  </div>
                </div>
                
                <!-- Box - Education & Jobs -->
                <div class="resume-box animated slide-in-left">
                  <i class="title-icon text-yellow flaticon-document56"></i>
                  <h3>Education & Online Courses</h3>
                  <div class="timeline">
                  	<!-- Single event -->
                  	<div class="timeline-event te-yellow">
                      <div class="event-date">Jan 2015 - PRESENT</div>
                      <div class="event-name">Specialization course</div>
                      <div class="event-description">Zend PHP Certification, MCTS Database Fundamentals</div>
                    </div>
                    <!-- Single event -->
                  	<div class="timeline-event te-yellow">
                      <div class="event-date">1998 - 2000</div>
                      <div class="event-name">Colorado Technical University</div>
                      <div class="event-description">Working towards a BS in Information Technology</div>
                    </div>
                    <!-- Single event -->
                  	<div class="timeline-event te-yellow">
                      <div class="event-date">1996 - 1998</div>
                      <div class="event-name">Bevill State Community College</div>
                      <div class="event-description">Working towards a BS in Information Technology</div>
                    </div>
                  </div>
                </div>
                
              </div>
              
              <div class="col-md-6 col-lg-4">
              
              	<!-- Box - Languages -->
                <div class="resume-box animated slide-in-right appear-second">
                  <i class="title-icon text-orange flaticon-chat25"></i>
                  <h3>Languages</h3>
                  <!-- Single skill -->
                  <div class="skill">
                  	<span class="skill-name">PHP</span>
                    <div class="skill-bar sb-orange">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                    </div>
                  </div>
                  <!-- Single skill -->
                  <div class="skill">
                  	<span class="skill-name">JQuery/Javascript</span>
                    <div class="skill-bar sb-orange">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                  <div class="skill">
                  	<span class="skill-name">HTML5/(X)HTML</span>
                    <div class="skill-bar sb-orange">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                    </div>
                  </div>
                  <div class="skill">
                  	<span class="skill-name">CSS</span>
                    <div class="skill-bar sb-orange">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                  <div class="skill">
                  	<span class="skill-name">XML/YML/RAML</span>
                    <div class="skill-bar sb-orange">
                    	<div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-on"></div>
                        <div class="skill-rate-off"></div>
                    </div>
                  </div>
                </div>
                
                <!-- Box - Hobbies -->
                <div class="resume-box animated slide-in-bottom">
                  <i class="title-icon text-violet flaticon-joystick4"></i>
                  <h3>Hobbies &amp; Interests</h3>
                  <!-- List group -->
                  <ul class="list-group">
                    <li class="list-group-item">Beer</li>
                    <li class="list-group-item">Sport</li>
                    <li class="list-group-item">Music</li>
                    <li class="list-group-item">Videogames</li>
                  </ul>
                </div>
                
              </div>
              
            </div>
            
        </div>
    
    </section>
    <!-- Resume / End -->
    
    <!-- Portfolio -->
    <section id="portfolio">
    
    	<!-- Projects Holder -->
    	<div class="projects-holder black dark clearfix">
          <!-- Single Project --> 
          <div class="single-project animated fade-in">
            <div class="project-image">
                <img src="images/portfolio/project_01.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Swimming Pool</div>
                <div class="project-caption text-blue">Webdesgin</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-blue btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-third">
            <div class="project-image">
                <img src="images/portfolio/project_02.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Shopping Mall</div>
                <div class="project-caption text-yellow">Webdesgin / Webdevelopment</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-yellow btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-second">
            <div class="project-image">
                <img src="images/portfolio/project_03.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Animal Charity</div>
                <div class="project-caption text-green">Corporate Identity</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-green btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-fourth">
            <div class="project-image">
                <img src="images/portfolio/project_04.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Be Pregnant</div>
                <div class="project-caption text-red">Webdesgin / Corporate Identity</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-red btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in">
            <div class="project-image">
                <img src="images/portfolio/project_05.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Booking Store</div>
                <div class="project-caption text-green">Webdesgin / Webdevelopment</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-green btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-second">
            <div class="project-image">
                <img src="images/portfolio/project_06.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Social Media App</div>
                <div class="project-caption text-orange">App Design</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-orange btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-fourth">
            <div class="project-image">
                <img src="images/portfolio/project_07.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Medical Business</div>
                <div class="project-caption text-blue">Webdesgin / Corporate Identity</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-blue btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-third">
            <div class="project-image">
                <img src="images/portfolio/project_08.jpg" alt="" />
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Piece of cake!</div>
                <div class="project-caption text-orange">Webdesgin / Webdevelopment</div>
                <div class="project-buttons"><a href="projects/ajax-project-details.html" class="ajax-portfolio-link btn btn-orange btn-sm">View it</a> <a href="#" target="_blank" class="btn btn-default btn-sm">Online version</a></div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Ajax Project Details -->
        <div class="project-content"></div>
        
    </section>
    <!-- Portfjolo / End -->
    
    <!-- Blog -->
    <section id="blog">
    
    	<div class="content padded">
        
          <div  class="row">
          
            <div class="col-lg-12">
                
              <!-- Post Carousel --> 
              <div class="post-carousel animated slide-in-top">
                <!-- Single Post -->
<?php
    $blogPost = "Select * from blog_post" ;
    
    foreach($dbh->query($blogPost) as $bPost)
    {
?>
                <article class="post post-carousel-item">
                    <div class="post-image"><img src="images/blog/post_01.jpg" alt="" /></div>
                    <div class="post-content-holder">
                        <div class="post-content">
                            <div class="post-info clearfix">
                                <span class="post-date">22 May, 2014</span>
                                <div class="post-meta">
                                    <span><i class="fa fa-comment"></i><a href="#">4 comments</a></span>
                                    <span><i class="fa fa-tag"></i><a href="#">Webdesign</a></span>
                                </div>
                            </div>
                            <div class="post-text">
                                <h3><a href="single-post.html">Awesome Seattle Cycle Trip</a></h3>
                                <p class="lead">Per sint eirmod expetenda te. Pro ne essent.</p>
                                <p>Per ea tibique fabellas electram. Ea aliquam corpora vis. Ne quot civibus atomorum quo. </p>
                                <a href="single-post.html" class="btn btn-primary btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </article>
<?php 
    }
?>
                
              </div> 
               
              <!-- End Of Section -->
              <div class="end-of-section">
          
                <!-- Left Caption -->
                <div class="pull-left">
                  <span class="hiddend-sm hidden-xs">Would you like to check all of my posts? &nbsp; &nbsp;</span><a href="blog-page.html" class="btn btn-black btn-sm">Check my Blog Page!</a>
                </div>
                 
                <!-- Post Carousel Navigation -->  
                <div class="post-carousel-control">
                  <a class="post-carousel-prev" href="#">Previous</a>
                  <a class="post-carousel-next" href="#">Next</a>
                </div>
              
              </div>
                
            </div>
          
          </div>
            
        </div>
        
    </section>
    <!-- Blog / End -->
    
    <!-- Contact -->
    <section id="contact" class="black">
    
    	<!-- Google Map -->
    	<div id="google-map" class="animated zoom-out"></div>
        
        <!-- Contact Content -->
        <div class="content contact-content padded dark animated slide-in-left">
        	<i class="title-icon text-primary flaticon-speech43"></i>
        	<h2>Do you want to hire me?</h2>
            <!-- Contact List -->
            <ul class="list-unstyled list-unstyled-icons">
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i>Greater Birmingham Area, Alabama, USA</li>
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i><a href="#">j2leigh@gmail.com</a></li>
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i>(205) 578-7027 </li>
            </ul>
            <br/><br/>
            <p><a href="#" class="btn btn-primary">Download my CV</a></p>
            <!-- Bottom Bar -->
            <div class="bottom-bar contact-bottom-bar">
            	<div class="row">
                	<div class="col-md-12 col-lg-6">
                    	<h5>Check my social media!</h5>
                        <!-- Social Icons -->
                        <ul class="social-icons medium">
                            <li><a href="https://www.facebook.com/JenniferMorrisSocial"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/j2leigh"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/u/0/+JenniferMorris3506"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6">
                    	<h5>Like Me on Facebook!</h5>
                        <!-- Like Button -->
                        <div class="fb-like" data-href="https://www.facebook.com/JenniferMorrisSocial" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
       	<div id="contact-form-holder" class="dark">
          <div class="contact-form-trigger animated slide-in-right appear-second"><i class="flaticon-mail21"></i></div>
          <form role="form" id="contact-form" method="post">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" id="email"  name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label>Message:</label>
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit <i class="icon-after fa fa-chevron-right"></i></button>
          </form>
        </div>
        
    </section>
    <!-- Contact / End -->
	
</div>
<!-- Page Content / End -->

<!-- Scripts -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/page-loader.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/GoogleMap-dark.js"></script>


<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
-->

</body>

</html>
