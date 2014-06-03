<?php
	/***
	* X-Headerama <antizeph at gmail.com>
	* 09/13/2011
	* Thanks, Reddit!
	*/

	function futurama()
	{
		$bender = array(
			"Bite my shiny metal ass!",
			"This is the worst kind of discrimination. The kind against me!",
			"Oh. Your. God.",
			"My life, and by extension everyone else's is meaningless.",
			"I'm Bender, baby, please insert liquor!",
			"They're not very heavy, but you don't hear me not complaining.",
			"Everybody's a jerk. You, me, this jerk.",
			"I hate the people that love me and they hate me.",
			"Do I preach to you while you're lying stoned in the gutter? No.",
			"Tempers are wearing thin. Let's hope some robot doesn't kill everybody.",
			"Bite my shiny metal ass!",
			"I'm gonna go build my own theme park! With blackjack and hookers! In fact, forget the park!",
			"That's no alien spaceship-that's my ass!",
			"Bribe is such an ugly word. I prefer extortion. The X makes it sound cool.",
			"Life can be hilariously cruel.",
			"Leela cracked corn, and i dont care. Fry cracked corn, i still dont care. Bender cracked corn, and he is great! Take that you stupid corn!",
			"Fry, as you know, there are lots of things I'm willing to kill for: jewels, vengeance, Father O'Mallee's weed-whacker. But at long last I've found something I'm willing to die for... This mindless turtle.",
			"Let's face it, comedy's a dead art form. Tragedy, now that's funny.",
			"Great is OK, but amazing would be GREAT.",
			"Congratulations Fry, you've snagged the perfect girlfriend. Amy's rich, she's probably got other characteristics...",
			"Who are you, and why should I care?",
			"What kind of party is this? There's no booze and only one hooker.",
			"I was thinking Benderbrau if it's an ale, Botweiser if it's a lager.",
			"Ahhh, what an awful dream. Ones and zeroes everywhere... and I thought I saw a two.",
			"What do you mean 'we,' flesh-tube?",
			"I guess a robot would have to be crazy to wanna' be a folk-singer..."
		);

		$fry = array(
			"It's just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. But then the winter came, and the grasshopper died, and the octopus ate all his acorns and also he got a racecar. Is any of this getting through to you?",
			"Good 'ol Coney Island College. Go Whitefish!",
			"Now that's what I call a thousand years of progress: a Bavarian Cream dog that's self-microwaving!",
			"I'm doing my job - there's Amy. I spend a few hours selecting a candy from the machine - there's Amy. I wake up the morning after sleeping with Amy - there's Amy!",
			"I always thought it was real like pro wrestling but it's fixed like boxing.",
			"I'm experienced with foraging. I used to find edible mushrooms on my bath mat!",
			"Poor Bender, you're seeing things. You've been drinking too much. Or too little. I forget how it works with you. Anyway, you haven't drunk exactly the right amount.",
			"Words. Nothing but sweet, sweet words that turn into bitter orange wax in my ears.",
			"All right, all right, if it will make you happy, I will overthrow society.",
			"Goodbye, friends. I never thought I'd die like this. But I always really, really hoped.",
			"Professor, I've never seen you so cheerful. What the hell's wrong with you?",
			"Space, it seems to go on and on forever. But then you get to the end and a gorilla starts throwing barrels at you.",
			"It's the future! My parents, my coworkers, my girlfriend. I'll never see any of them again! Yahooo!"    
		);

		$ZOIDBERG = array(
			"You don't want to end up old and lonely like ZOIDBERG (cries).",
			"It's toe-tappingly tragic.",
			"I finally learned what it's like to be a grandmother; subjugated, yet honored.",
			"I'll just turn the wheel to maximum fastness.",
			"Your music is bad, and you should feel bad!",
			"Yippe ki yay! You'll never guess where I have been!",
			"What you guys up to tonight. Im up for whatever.",
			"I have mail order degrees in murder-ology and murder-ometry.",
			"Friends, a guinea pig tricked me!",
			"A buffet.... oh if only i'd brought my wallet with me.",
			"You still have your old pal Zoidberg. YOU ALL HAVE ZOIDBERG.",
			"Ain't Got no cash, ain't got no style, ladies vomit when I smile, but does Zoidberg worry?",
			"I am Zoidberg, home owner!",
			"These night crawlers though juicy, mmm very very juicy, would not be good.",
			"You have no nose on your face. Where it is I can't say, but in your face it is not.",
			"And why did I have to take a cab?",
			"My house! It burned down! How did this happen?!",
			"Your student loans have been repayed? Then how about lending your old pal Zoidberg a few bucks, Mr Millionaire.",
			"Stop! Stop! I admit it! My people ate them all! We kept saying \"One more can't hurt\" and then they were gone, we're sorry!"
		);

		$goodnewseveryone = array(
			'X-Bender' => $bender,
			'X-Fry' => $fry,
			'X-Zoidberg' => $ZOIDBERG
		);

		$ohmy = array_rand($goodnewseveryone);    
		$badnews = $goodnewseveryone[$ohmy][rand(0,count($goodnewseveryone[$ohmy])-1)];    
		return header($ohmy . ': ' . $badnews);
	}

	futurama();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Brandon Sachs - software engineer in South Florida</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Brandon Sachs is a pretty cool guy.">
		<meta name="author" content="Brandon Sachs">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/brandon.css" rel="stylesheet">

		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAD8AP/79wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACIiIiIAAAACIiIiIiAAAAIiAiAiIAAAACICICIAAAEQAAAAAAEQARERIiIRERACIRIiIiESIAIiEiIiISIgAiISIiIhIiAAIhEREREiAAAhERERERIAAAEiIRIiEAAAACIhEiIAAAAAACESAAAAAAAAAAAAAADgBwAAwAMAAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAACAAQAAwAMAAOAHAAD4HwAA" rel="icon" type="image/x-icon" />
	</head>

	<body data-spy="scroll">

		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="active"><a href="#me"><i class="icon-home icon-white"></i>Me</a></li>
							<li><a href="#about"><i class="icon-user"></i>About</a></li>
							<li><a href="#contact"><i class="icon-comment"></i>Contact</a></li>
							<li class="nav-header">Projects</li>
							<li><a href="#pandoraenhancer"><i class="icon-music"></i>RadioEnhancer</a></li>
							<li><a href="#albumsnapper"><i class="icon-picture"></i>AlbumSnapper</a></li>
							<li><a href="#cnu"><i class="icon-download"></i>CNU+</a></li>
							<li><a href="#mobileAlert"><i class="icon-exclamation-sign"></i>mobileAlert</a></li>
							<li><a href="#t3"><i class="icon-th"></i>t3</a></li>
							<li><a href="#comiCal"><i class="icon-calendar"></i>comiCal</a></li>
							<li><a href="#inAminute"><i class="icon-time"></i>In A Minute</a></li>
							<li><a href="#matchinmusic"><i class="icon-music"></i>MatchInMusic</a></li>
							<li><a href="#stickyBar"><i class="icon-bookmark"></i>stickyBar</a></li>
						</ul>
					</div>

					<div id="copyright">
						<p>&copy; brandon sachs</p>
					</div>

				</div><!--/left-->


				<div class="span9">
					<div class="hero-unit well" id="me">
						<h1>Hi, I'm Brandon.</h1>
						<p>I'm a software engineer in South Florida.</p>
					</div>


					<div class="row-fluid" id="about">
						<div class="span4">
							<h2>About</h2>
							<!--<p><img src="http://graph.facebook.com/brandonsachs/picture"></p>-->
						</div>

						<div class="span8">
							<!-- <h2>&nbsp;</h2> -->
							<p>My name is Brandon Sachs, and I'm a software engineer living in Broward County, Florida.</p>
							<p>I work mainly in PHP and Javascript/HTML5/CSS3 (Less is great), but can be found using C# and Python occasionally.</p>
						</div>
					</div>

					<div class="row-fluid" id="contact">
						<div class="span4">
							<h2>Contact</h2>
							<p>&nbsp;</p>
						</div>

						<div class="span8">
							<!-- <h2>&nbsp;</h2> -->
							<table id="contact" class="table table-striped">
								<tr>
									<td><a href="mailto:bransachs@gmail.com"><img width="64" height="64" title="bransachs@gmail.com" data-source="img/email.png"></a></td>
									<!--<td><a href="http://facebook.com/brandonsachs"><img width="64" height="64" title="facebook.com/brandonsachs" data-source="img/facebook.png"></a></td>-->
									<td><a href="http://gplus.to/brandonsachs"><img width="64" height="64" title="gplus.to/brandonsachs" data-source="img/gp.png"></a></td>
									<td><a href="http://linkedin.com/in/brandonsachs"><img width="64" height="64" title="linkedin.com/in/brandonsachs" data-source="img/li.png"></a></td>
								</tr>
								<tr>
									<td><a href="aim:goIM?screenname=brandonsachs" alt="yup"><img width="64" height="64" title="brandonsachs" data-source="img/aim.png"></a></td>
									<td><a href="http://github.com/zephster"><img width="64" height="64" title="github.com/zephster" data-source="img/github.png"></a></td>
									<td><!-- <a href="http://bitbucket.org/zephster"><img width="64" height="64" title="bitbucket.org/zephster" data-source="img/bitbucket.png"></a> --></td>
								</tr>
							</table>
						</div>
					</div>

					<div class="row-fluid" id="projects">
						<div class="span4">
							<h2>Projects</h2>
							(the non-boring ones, at least)
						</div>

						<div class="span8">
							<!-- <h2>&nbsp;</h2> -->
							<table id="infotable" class="table table-striped">
								<tr id="pandoraenhancer">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="RadioEnhancer for Chrome" data-source="img/radioenhancer.png">
												<h4><a href="https://chrome.google.com/webstore/detail/radioenhancer/lfijnebfkjdclmcedinoknekamigckii" class="no-shadow">Radio Enhancer</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												RadioEnhancer (formerly known as PandoraEnhancer) is a Google Chrome extension that removes ads, scrobbles to Last.fm, displays song change notifications, and improves Pandora's awesome HTML5 interface.
												<br><br>
												It's been featured on sites such as <a href="http://lifehacker.com/5854169/pandoraenhancer-for-chrome-removes-ads-adds-desktop-notifications-for-song-changes">Lifehacker</a> and <a href="https://www.google.com/search?q=pandoraenhancer#q=pandora+enhancer&safe=off"> a whole lot of others.</a>
												<br><br>
												As of November 2013, RadioEnhancer has over <b>63,000</b> active users.
												<br><br>
												<span class="written-in">Written in JavaScript/CSS3 using Chrome/Last.fm API's.</span>
												<br><br>
												<a class="btn" id="pe-cws" href="http://cbcoding.com"><i class="icon-download-alt"></i>CBCoding</a>
												&nbsp;
												<a class="btn" id="pe-cws" href="https://chrome.google.com/webstore/detail/radioenhancer/lfijnebfkjdclmcedinoknekamigckii"><i class="icon-download-alt"></i>Chrome Web Store</a>
												&nbsp;
												<a class="btn" href="https://github.com/cbcoding/RadioEnhancer"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="albumsnapper">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="In A Minute" data-source="img/cydia.png">
												<h4><a href="http://moreinfo.thebigboss.org/moreinfo/depiction.php?file=albumsnapperDp" class="no-shadow">AlbumSnapper</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												AlbumSnapper is a tweak for jailbroken iOS devices that adds an album selection feature to the stock Apple camera app, allowing you to quickly organize your pictures and create new albums on the fly.
												<br><br>
												AlbumSnapper was blogged about on sites such as <a href="http://www.idownloadblog.com/2014/05/17/albumsnapper/">iDownloadBlog</a>, <a href="http://modmyi.com/content/14979-albumsnapper-lets-you-easily-organize-your-photos-you-take-them.html">ModMyI</a>, <a href="https://www.google.com/search?q=albumsnapper">and more</a>.
												It can be found in the default repositories used by <a href="http://en.wikipedia.org/wiki/Cydia">Cydia</a> for $0.99. Reading this and want a free copy? Drop me a line!
												<br><br>
												<span class="written-in">Written in Objective-C.</span>
												<br><br>
												
												<a class="btn" href="cydia://package/org.thebigboss.albumsnapper"><i class="icon-download-alt"></i> Cydia Direct</a>
												&nbsp;
												<a class="btn" href="http://moreinfo.thebigboss.org/moreinfo/depiction.php?file=albumsnapperDp"><i class="icon-list-alt"></i> Depiction</a>
												<!-- &nbsp;
												<a class="btn" href="https://github.com/zephster/InAMinute"><i class="icon-list-alt"></i> Github</a> -->
											</div>
										</div>
									</td>
								</tr>

								<tr id="cnu">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="Chrome Nightly Updater+" data-source="img/cnu.png">
												<h4><a href="http://github.com/zephster/cnu-2.0" class="no-shadow">Chrome Nightly Updater+</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												Chrome Nightly Updater+ 2 is a multithreaded Windows application that automatically downloads the latest Google Chrome developer nightly builds. Features include auto check/download, changelog viewer, and backup management.
												<br><br>
												<span class="written-in">Written in C#.</span>
												<br><br>
												<a class="btn" href="https://github.com/zephster/cnu-2.0/blob/master/CNU-CS/bin/Release/CNU2.exe"><i class="icon-download-alt"></i>Latest (Github)</a>
												&nbsp;
												<a class="btn" href="http://github.com/zephster/cnu-2.0"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="mobileAlert">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="jQuery.stickyBar" data-source="img/jquery.png">
												<h4><a href="https://github.com/zephster/jquery.mobile.alert" class="no-shadow">mobileAlert</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												mobileAlert is a jQuery plugin for use with the jQuery Mobile framework. It is an "alert" dialog plugin, and to my knowledge, was the first plugin of it's type made specifically for jQuery Mobile.
												<br><br>
												<span class="written-in">Written in Javascript/jQuery, using CSS3 keyframes for </span>animation.
												<br><br>
												<a class="btn" href="https://github.com/zephster/jquery.mobile.alert"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="t3">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="t3 - Tic Tac Toe" data-source="img/javascript.png">
												<h4><a href="https://github.com/zephster/t3" class="no-shadow">T<sup>3</sup></a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												Simple Tic Tac Toe game. Consists of 2 parts: the game logic, and the graphics. Uses HTML5 canvas to draw the game board. There's also a fully playable console version. In fact, if you check your console log, you can play right now!
												<br><br>
												<span class="written-in">Written in Javascript, HTML5 Canvas</span>
												<br><br>
												<a class="btn" href="https://github.com/zephster/t3"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="comiCal">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="comiCal" data-source="img/python.png">
												<h4><a href="https://github.com/zephster/comiCal" class="no-shadow">comiCal</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												Looks up comic release dates from supported publishers websites (DC, Marvel, Image) and puts them on your Google Calendar. Uses OAuth for login. See Github page for usage instructions.
												<br><br>
												<span class="written-in">Written in Python</span>
												<br><br>
												<a class="btn" href="https://github.com/zephster/comiCal"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="inAminute">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="In A Minute" data-source="img/cydia.png">
												<h4><a href="https://github.com/zephster/InAMinute" class="no-shadow">In A Minute</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												In A Minute is a tweak for iOS devices that enables fine-grained selection of minutes in time selectors system-wide, and in any application that uses UIDatePicker. The default is 5-minute intervals, this small tweak changes it to 1-minute intervals.
												<br><br>
												In a Minute was blogged about on sites such as <a href="http://modmyi.com/content/10297-minute-lets-you-very-precise-reminder-times.html">ModMyI</a>, <a href="http://www.idownloadblog.com/2013/03/09/in-a-minute-lets-you-be-very-particular-about-when-youre-reminded-about-things/">iDownloadBlog</a>, <a href="https://www.google.com/search?q=in+a+minute+cydia">and more</a>.
												It can be found in the default repositories used by <a href="http://en.wikipedia.org/wiki/Cydia">Cydia</a>.
												<br><br>
												<span class="written-in">Written in Logos/Objective-C.</span>
												<br><br>
												
												<a class="btn" href="cydia://package/com.cbcoding.inaminute"><i class="icon-download-alt"></i> Cydia Direct</a>
												&nbsp;
												<a class="btn" href="http://moreinfo.thebigboss.org/moreinfo/depiction.php?file=inaminuteDp"><i class="icon-list-alt"></i> Depiction</a>
												&nbsp;
												<a class="btn" href="https://github.com/zephster/InAMinute"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="matchinmusic">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="In A Minute" data-source="img/cydia.png">
												<h4><a href="https://github.com/zephster/MatchInMusic" class="no-shadow">Match In Music</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												Match In Music is a plugin for two popular iOS tweaks - SBSettings and NCSettings. It provides a convenient toggle for the system setting "Show All Music", without having to launch the Settings.app and navigate to that section.
												<br>
												It can be found in the default repositories used by <a href="http://en.wikipedia.org/wiki/Cydia">Cydia</a>.
												<br><br>
												Match In Music has since been updated to support the new switch API called Flipswitch, and its functionality has been improved.
												<br><br>
												<span class="written-in">Written in Logos/Objective-C.</span>
												<br><br>
												
												<a class="btn" href="cydia://package/com.cbcoding.matchinmusic-flipswitch"><i class="icon-download-alt"></i> Cydia Direct</a>
												&nbsp;
												<a class="btn" href="http://apt.thebigboss.org/onepackage.php?bundleid=com.cbcoding.matchinmusic-flipswitch&db="><i class="icon-list-alt"></i> Depiction</a>
												&nbsp;
												<a class="btn" href="https://github.com/zephster/MatchInMusic-Flipswitch"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>

								<tr id="stickyBar">
									<td>
										<div class="row-fluid">
											<div class="span4">
												<img width="64" height="64" title="jQuery.stickyBar" data-source="img/jquery.png">
												<h4><a href="https://github.com/zephster/stickyBar" class="no-shadow">stickyBar</a></h4>
											</div>

											<div class="span8" style="text-align: left;">
												stickyBar is a jQuery plugin that adds a fixed-position element to a page when you scroll past a certain, definable area. Most commonly used for navigation elements, usually horizontal.
												<br><br>
												<span class="written-in">Written in Javascript/jQuery.</span>
												<br><br>
												<a class="btn" href="http://plugins.jquery.com/project/stickyBar"><i class="icon-download-alt"></i> jQuery Plugins</a>
												&nbsp;
												<a class="btn" href="http://github.com/zephster/stickyBar"><i class="icon-list-alt"></i> Github</a>
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										And plenty more.
									</td>
								</tr>

							</table>
						</div>
					</div>
					
					
					<div id="copyright-right">
						<p>&copy; brandon sachs</p>
					</div>

				</div> <!-- right-side -->
			</div> <!-- main -->

		</div><!-- /.fluid-container -->

		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/t3-logic.js"></script>

		<script type="text/javascript">
			var game = new TicTacToe();
			
			function detectRetina()
			{
				$("img").each(function(){
					var source = $(this).data("source");
					if (typeof source === 'undefined') return;
					if(window.devicePixelRatio >= 1.5)
					{
						ext = source.substr(source.lastIndexOf("."));
						file = source.substr(0, source.lastIndexOf(".")) + "@2x" + ext;
						$(this).attr("src", file).removeAttr('source');
					} else {
						$(this).attr("src", source).removeAttr('data-source');
					}
				});
			}

			$(function()
			{
				detectRetina();
				$('.sidebar-nav').scrollspy();

				$("a.btn, #contact a, #infotable a").each(function(){
					$(this).attr("target", "_blank");
				});

				$(".nav-list > li").click(function(){
					$(".nav-list > li").each(function(){
						$(this).removeClass("active").find("i").removeClass("icon-white");
					});
					$(this).addClass("active").find("i").addClass("icon-white");
				});

				$("#contact img").tooltip({delay:100});
				//$("#contact img").popover({delay:100, placement:'top'});
			});

			/* A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto. MIT License.*/
			(function(m){if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1)){return}var l=m.document;if(!l.querySelector){return}var n=l.querySelector("meta[name=viewport]"),a=n&&n.getAttribute("content"),k=a+",maximum-scale=1",d=a+",maximum-scale=10",g=true,j,i,h,c;if(!n){return}function f(){n.setAttribute("content",d);g=true}function b(){n.setAttribute("content",k);g=false}function e(o){c=o.accelerationIncludingGravity;j=Math.abs(c.x);i=Math.abs(c.y);h=Math.abs(c.z);if(!m.orientation&&(j>7||((h>6&&i<8||h<8&&i>6)&&j>5))){if(g){b()}}else{if(!g){f()}}}m.addEventListener("orientationchange",f,false);m.addEventListener("devicemotion",e,false)})(this);
			
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-26601623-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
