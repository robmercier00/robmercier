<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/knockout-3.1.0.js"></script>
	<script type="text/javascript">
	  WebFontConfig = {
	    google: { families: [ 'Arvo:400,700:latin', 'PT+Sans:400:latin' ] }
	  };
	  (function() {
	    var wf = document.createElement('script');
	    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
	  })(); 
	</script>
</head>
<body>
<div class="wrapper" id="wrapper">
<div class="container">
<main>
	<nav class="navbar-default">
		<ul class="navbar-nav">
			<li id="about"><a target="about" class="scroll">About Me</a></li>
			<li><a target="expertise" class="scroll">Expertise</a></li>
			<li><a target="experience" class="scroll">Experience</a></li>
			<li><a target="education" class="scroll">Education</a></li>
			<li><a target="contact" class="scroll">Contact</a></li>
		</ul>
	</nav>
	<header>
		<h1>Rob Mercier</h1>
		<h2>Web Developer</h2>
	</header>
	<div class="subhead">
		LAMP stack development, database and business rules integration, front-end development, CMS integration, API programming & integration
	</div>
	<div class="modules" id="about">
		<div class="modules-left">
			About Me
		</div>
		<div class="modules-right">
			<div class="media-object"><img class="img-circle img-responsive" src="images/rob2.jpg" />
				<p>I've been a musician, a teacher, an email marketer, a photographer, a hockey player, and a web app developer.</p>
				<p>I had done some programming as a kid, working in BASIC at the beginning, then as one of the primary site builders and maintainers for the bands I was in, I got into the HTML/CSS advances of the early 2000's.</p>
				<p>I took C++ and Pascal courses in my college days, and I'm now using PHP, HTML5/CSS3, JavaScript/JQuery, and whatever frameworks work for the project.</p>
				<p>I recently switched back to Mac from Ubuntu, which I used from v13.04 through 14.10. Overall, the experience is just a little tighter, especially on the newest version of Mac OS X (Yosemite).</p>
				<a href="/docs/RobMercierCV.pdf" target="_blank">Download my resume <span class="glyphicon glyphicon-cloud-download"></span></a>
				<div class="social media-objects">
				<a href="http://www.linkedin.com/in/robmercier/" target="_blank"><img src="images/basic_social/colored/32/circle/linkedin.png" /></a>
				<a href="http://twitter.com/rmerc00" target="_blank"><img src="images/basic_social/colored/32/circle/twitter.png" /></a>
				<a href="https://github.com/robmercier00" target="_blank"><img src="images/basic_social/colored/32/circle/github_alt.png" /></a>
				<a href="https://www.flickr.com/photos/guitarsongs00/" target="_blank"><img src="images/basic_social/colored/32/circle/flickr.png" /></a>
				<a target="contact" class="scroll"><img src="images/basic_social/colored/32/circle/email.png" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="modules" id="expertise">
		<div class="modules-left">
			Expertise
		</div>
		<div class="modules-right">
			<p class="tech">HTML5/CSS3
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
				    <span>85%</span>
				  </div>
				</div>
			</p>
			<p class="tech">MySQL
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
				    <span>80%</span>
				  </div>
				</div>
			</p>
			<p class="tech">PHP
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
				    <span>80%</span>
				  </div>
				</div>
			</p>
			<p class="tech">Linux/LAMP Stack
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
				    <span>80%</span>
				  </div>
				</div>
			</p>
			<p class="tech">JavaScript/JQuery
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
				    <span>72%</span>
				  </div>
				</div>
			</p>
			<p class="tech">Amazon Web Services
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;">
				    <span>86%</span>
				  </div>
				</div>
			</p>
			<p class="tech">AppFog PaaS
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
				    <span>85%</span>
				  </div>
				</div>
			</p>
			<p class="tech">EngineYard PaaS
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				    <span>60%</span>
				  </div>
				</div>
			</p>
			<p class="tech">GIMP/Photoshop
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
				    <span>80%</span>
				  </div>
				</div>
			</p>
		</div>
	</div>
	<div class="modules" id="experience">
		<div class="modules-left">
			Experience
		</div>
		<div class="modules-right">
			<p>
				<span class="jobtitle">Web Developer</span>
				<span class="company">Pure Incubation</span><br />
				<span class="dates">July 2014 – Present</span> <span class="location">Topsfield, MA</span><br />
				<div class="explist">
				<ul>
					<li>Full LAMP stack development for user-facing public web applications, as well as administration consoles and dashboards, API integration with 3rd-party CMS & ESP (Email Service Provider) systems</li>
					<li>Key technologies include PHP, MySQL, HTML, CSS, JavaScript/JQuery/AJAX, XML, Selenium WebDriver, as well as numerous other free & open source tools</li>
				</ul>
				</div>
			</p>
			<p>
				<span class="jobtitle">Junior Developer</span>
				<span class="company">Pure Incubation</span><br />
				<span class="dates">July 2013 – July 2014</span> <span class="location">Topsfield, MA</span><br />
				<div class="explist">
				<ul>
					<li>Full LAMP stack development for user-facing public web applications, as well as administration consoles and dashboards</li>
					<li>Key technologies include PHP, MySQL, HTML, CSS, JavaScript/JQuery/AJAX, XML, Selenium WebDriver, and various free & open source tools</li>
				</ul>
				</div>
			</p>
			<p>
				<span class="jobtitle">Content & Social Marketing Manager</span>
				<span class="company">Pure Incubation</span><br />
				<span class="dates">June 2011 – July 2013</span> <span class="location">Topsfield, MA</span><br />
				<div class="explist">
				<ul>
					<li>Campaign planning, content selection, and production of daily e-newsletters</li>
					<li>Building brand, membership, network opportunities, and other programs supporting the growth of Pure Incubation online communities in the companies’ vertical markets</li>
					<li>Marketing to online member audiences to grow community, foster ongoing relationships, and create a positive member user experience</li>
				</ul>
				</div>
			</p>
			<p>
				<span class="jobtitle">Community Specialist</span>
				<span class="company">Sermo</span><br />
				<span class="dates">January 2011 – June 2011</span> <span class="location">Cambridge, MA</span><br />
				<div class="explist">
				<ul>
					<li>Coordinate and execute email marketing programs to physician community</li>
					<li>Develop, track, and report performance measurements for community moderation and support</li>
					<li>Take in and resolve incoming day-to-day email and phone support requests from members of the physician community</li>
					<li>Stay connected to member satisfaction levels. Proactively work with the necessary departments to improve overall satisfaction</li>
				</ul>
				</div>
			</p>
			<p>
				<span class="jobtitle">Associate Manager of Lead Generation Programs</span>
				<span class="company">Ziff Davis Enterprise</span><br />
				<span class="dates">April 2008 – December 2010</span> <span class="location">Topsfield, MA</span><br />
				<div class="explist">
				<ul>
					<li class="subspecs">Lead Generation
					<ul>
					<li>Created & edited content for business-to-business marketing newsletters</li>
					<li>Created & edited HTML & text templates for newsletters</li>
					<li>Designed newsletter/Website functionality that immediately increased lead conversions by 50%</li>
					</ul>
					</li>
					<li class="subspecs">E-mail Marketing
					<ul>
					<li>Implemented global redesign of all Web Buyer's Guide newsletters</li>
					<li>Created new design for 4 additional Web Buyer's Guide newsletters</li>
					<li>Improved IP sender reputation for Web Buyer's Guide brand newsletters to an average of 95%</li>
					<li>Maintained exceptionally low spam/abuse complaint levels for Web Buyer's Guide newsletters</li>
					</ul>
					</li>
					<li class="subspecs">Social Media
					<ul>
					<li>Increased Web Buyer's Guide Twitter followers by approximately 32% per month</li>
					<li>Implemented plan to increase Web Buyer's Guide presence across various social media networks</li>
					<li>Implemented social media marketing along with newsletter marketing initiatives</li>
					<li>Utilized various tracking and social marketing tools to further Web Buyer's Guide lead generation and demand generation initiatives</li>
					</ul>
					</li>
					</ul>
				</div>
			</p>
			<p>
				<span class="jobtitle">Owner, Instructor</span>
				<span class="company">All4Strings</span><br />
				<span class="dates">January 2003 – April 2008</span> <span class="location">Woburn, MA</span><br />
				<div class="explist">
				<ul>
					<li>Instruct students in electric and acoustic guitar, music theory, audio recording</li>
					<li>Provide sound reinforcement for a number of bands and/or live music venues</li>
					<li>Provide audio recording for a number of bands</li>
					<li>Responsible for all business activities, including marketing, invoicing, accounting, Website design and maintenance</li>
					<li>Provide a yearly student recital, including booking the recital hall, providing all sound reinforcement equipment and services and setting up post-recital reception</li>
					</ul>
				</div>
			</p>
			<p>
				<span class="jobtitle">Live Sound Engineer</span>
				<span class="company">Skybar</span><br />
				<span class="dates">March 2006 – September 2007</span> <span class="location">Somerville, MA</span><br />
			</p>
			<p>
				<span class="jobtitle">Assistant Manager</span>
				<span class="company">FYE</span><br />
				<span class="dates">November 2005 – April 2006</span> <span class="location">Medford, MA</span><br />
			</p>
			<p>
				<span class="jobtitle">Head Technician</span>
				<span class="company">Alactronics</span><br />
				<span class="dates">September 2000 – December 2002</span> <span class="location">Wellesley, MA</span><br />
			</p>
			<p>
				<span class="jobtitle">Assistant Manager</span>
				<span class="company">Record Town/Tape World</span><br />
				<span class="dates">May 1994 – September 1999</span> <span class="location">Nashua, NH</span><br />
			</p>
		</div>
	</div>
	<div class="modules" id="education">
		<div class="modules-left">
			Education
		</div>
		<div class="modules-right">
			<ul class="education">
				<li>University of Massachuestts-Lowell - 2000</li>
				<li>
					<ul>
						<li>Bachelor of Music - Sound Recording Technology</li>
						<li>Cum Laude</li>
						<li>President - Audio Engineering Society Student Chapter</li>
					</ul>
				</li>
			</ul>
			<span class="uml"><img src="images/uml_logo_stacked.jpg" /></span>
		</div>
	</div>
	<footer class="footer">
		<p>&copy; <strong><?php echo strftime('%Y'); ?></strong> Rob Mercier</p>
	</footer>
</main>
</div>
</div>
<div id="contact" class="contact">
	<header id="contacthead">
		<h2>Contact me</h2>
	</header>
	<form action="" method="POST" id="contactme" onsubmit="return false">
		<div>
			<div class="input-group yourname">
			  <input type="text" class="form-control" placeholder="Your name" name="name" id="name">
			</div>
			<div class="input-group youremail">
			  <input type="text" class="form-control" placeholder="Your Email" name="emailaddr" id="emailaddr">
			</div>
			<div class="input-group yourmessage">
			  <textarea type="text" class="form-control yourmessage" placeholder="Your message" id="message" name="message"></textarea>
			</div>
			<button id="contact_submit" type="submit" class="btn btn-default btn-sm">Send message</button>
			<button id="contact_close" type="button" class="btn btn-default btn-sm">Cancel</button>
		</div>
		<input type="text" class="hdn" id="fullname" name="fullname" />
		<input type="text" name="useragent" value="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>" id="useragent" class="hdn" />
	</form>
</div>
<div id="thankyou" class="contact">
	<header id="contacthead">
		<h2>Thanks!</h2>
	</header>
	<div>I'll get back to you as soon as I can.</div>
</div>
<div id="blackout"></div>
<script type="text/javascript">
	$(document).ready(function() {  
		var stickyNavTop = $('.navbar-default').offset().top;  
		var navName = $('<li><a target="top" class="scroll" id="navbar-name">Rob Mercier</a></li>');

		var stickyNav = function(){  
			var scrollTop = $(window).scrollTop();
			       
			if (scrollTop > stickyNavTop) {
			    $('.navbar-default').addClass('sticky');
			    navName.insertBefore('#about');
			    $('.navbar-nav').css('padding-left', '0');
			    $('a[target="top"]').click(function() {
					$('html, body').stop(true, true).animate({
						scrollTop: 0
					}, 300);
				});
			} else {
			    $('.navbar-default').removeClass('sticky');
				navName.remove();
				$('.navbar-nav').css('padding-left', '20.5%');
			}
		};
		stickyNav();  
		$(window).scroll(function() {  
		    stickyNav();  
		});
	})
	$('a[target="about"]').click(function() {
		$('html, body').stop(true, true).animate({
			scrollTop: 185
		}, 300);
	});
	$('a[target="expertise"]').click(function() {
		$("html, body").stop(true, true).animate({
			scrollTop: 520
		}, 300);
	});
	$('a[target="experience"]').click(function() {
		$("html, body").stop(true, true).animate({
			scrollTop: 1055
		}, 300);
	});
	$('a[target="education"]').click(function() {
		$("html, body").stop(true, true).animate({
			scrollTop: $("#education").position().top
		}, 300);
	});
	$('a[target="contact"]').click(function()
	    {
	        document.getElementById('contact').style.display='block';
	        document.getElementById('blackout').style.display='block';
	    });
	$('#contact_close').click(function()
	    {
	        document.getElementById('contact').style.display='none';
	        document.getElementById('blackout').style.display='none';
	    });
	$('#contactme').submit(function(event) {
		event.preventDefault();
		var name = $('#name').val();
		var emailaddr = $('#emailaddr').val();
		var message = $('#message').val();
		var fullname = $('#fullname').val();
		var useragent = $('#useragent').val();
		
		var x = document.forms['contactme']['emailaddr'].value;
	    var atpos = x.indexOf('@');
	    var dotpos = x.lastIndexOf('.');
	    var errorparams = [];
	    $('.errormsg').remove();
	    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	        errorparams.push('#emailaddr');
	    } else {
	    	$('#emailaddr').removeClass('error');
	    }
	    if (name.length < 2) {
	    	errorparams.push('#name');
	    } else {
	    	$('#name').removeClass('error');
	    }
	    if (message.length < 2) {
	    	errorparams.push('#message');
	    } else {
	    	$('#message').removeClass('error');
	    }
	    if(errorparams.length > 0){
		    $.each(errorparams, function(index,value) {
		    	if($(value).class !== 'error') {
	    			$(value).addClass('error');
	    		}
		    });
	        $('<span class="errormsg">Please fix the following errors</span>').appendTo('#contacthead');
		} else {
			var posting = $.post('contact.php', {name: name, emailaddr: emailaddr, message: message, fullname: fullname, useragent: useragent} );
			posting.done(function() {
				document.getElementById('contact').style.display='none';
				document.getElementById('thankyou').style.display='block';
				$('#blackout').slideUp('slow', function() {
					document.getElementById('blackout').style.display='none';
			    	$('#thankyou').fadeTo('slow', 0);
			    });
			});
		}
	});
</script>
</body>
</html>