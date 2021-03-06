<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Projects'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p><em>"Becoming me was the greatest creative project of my life."</em> - Eliot from <em>The Magicians</em></p>

<h2>Projects</h2>
<ul>
	<li>sanzoid.com</li>
	<li><a href="/favlist">FAVLIST</a></li>
	<li><a href="/pooptracker">PoopTracker</a></li>
	<li><a href="https://github.com/sanzoid/PotatoSteps">PotatoSteps</a></li>
	<!--<li>Protect the Dot (iOS)</li>-->
	<!-- <li>How Toilets Work (Javascript) - just an idea for now</li> -->
	<li>Top secret app - Ideas for now. </li>
	<li>So many app ideas... </li>
</ul>

<h2>School</h2>
<ul>
	<li>Communication Technology from Grade 10 to Grade 12. Each semester was a portfolio website.</li>
	<li>CS246: Tetris (C++). Programming Tetris with a partner. Received 104%.</li>
	<li>CS241: Compiler (C++). Implementing a compiler. I got addicted to doing this. The last 3 assignments, I spent ~30 hours for each coding. I couldn't sleep without thinking about it, I woke up thinking about it. It's all I did. This course reassured me that I do, in fact, love programming. </li>
	<li>CS350: OS161 (C). Implementing features to an operating system such as locks, fork, execv, etc. I look at operating systems so differently now. </li>
	<li>CS349: Snake! (Java). Implemented Snake, the game. Received 100%. Prof chose to demo my game and code! TA said <em>"Reminds me of something you’d see on Neopets.com"</em> which wasn't even what I was going for, but I'm glad to see those many hours on Neopets influencing my art.
		<img src="/images/projects/2016_java_snake1.png" />
		<img src="/images/projects/2016_java_snake2.png" />
	</li>
	<li>CS349: JSketch (Java). A vector-drawing application. Sort of like paint. You can draw, fill, drag shapes. Received 100%. Saving, loading capabilities. 
		<img src="/images/projects/2016_java_jsketch.png" />
	</li>
	<li>CS349: JSketch (Android). Android implementation of the java application JSketch. Received 96% (because I couldn't get the toolbar to lay out properly in landscape mode). Icons drawn by moi! 
		<img src="/images/projects/2016_android_jsketch.png" />
	</li>
	<li>CS349: Curio (Android). Simple Android application that would grab data from a web server and render it nicely. Simple JSON parsing. Received 100%.</li>
	<li>CS454 (Distributed Systems): Implementing a simple client/server using TCP. </li>
	<li>CS456 (Networks): Implementing a simple client/server using UDP. </li>
	<li>CS458 (Security &amp; Privacy): Exploiting programs!</li>
</ul>

<!-- <h2>Work</h2>
<h3>Web</h3>
<ul>
	<li>Public Accounts of Canada 2014 - converting PDF to HTML, writing regular expressions. </li>
	<li>Visually appealing internal HTML/CSS guide with tutorials, hints, and tips. </li>
	<li>Fixing webpages (SQL, ColdFusion, JavaScript).</li>
	<li>Developing and updating webpages based on mockups (PHP, Javascript, HTML, Drupal, tiny bit of AngularJS).
</li>
	<li>Converting webpages to PDFs dynamically, from research to prototype to final product. </li>
</ul>
<h3>Mobile</h3>
<ul>
	<li>XE Currency iOS App compatible with all iDevices and iOS 8+. Apple WatchOS, iMessage Extension, Today Widget. Localization. Mainting and implementing various features. Involved in versions 4.5.2 to 4.6.0. </li>
	<li>Conforming XE Currency iOS App to Accessibility for the visually impaired. It was designed to replace boring old text documents.</li>
	<li>Implementing chart viewing on the XE Currency WatchOS app.</li>
	<li>XE Swift cocoapods project - writing libraries/modules for future apps. </li>
	<li>Blackberry Native - getting the XE Currency Blackberry Native app to run and fixing some errors/warnings.</li>
	<li>Windows Phone/Desktop - updating the apps. Deprecating currency data service from Protocol Buffers to JSON.</li>
	<li>Documentation! Added documentation when necessary because details were easy to forget, especially after a long weekend. Also added an iOS Fun Facts page for everyone to share their knowledge.</li>
</ul> -->

<?php 
/*
<h2>Work experience</h2>
<h3>Public Works and Government Services Canada (PWGSC)</h3>
<p>Tags: HTML | CSS | Detail-focused | English/French text | Internal document | SQL | ColdFusion</p>
<p>The main project was converting the Public Accounts of Canada 2014 from giant volumes (PDF) to webpages. We were a team of five co-op students and our job was to run Perl scripts on text files generated by the client from the PDFs which would output an HTML version. The scripts weren't perfect so we had to visually check both the French and English versions to make sure they matched the original. Since the scripts could not convert everything properly (due to the format of PDFs), there were common errors that could be found and replaced using regular expressions. I compiled a list of RegExs to rectify these common errors.<br> 
Our team completed the project faster than any of the previous teams who had done the annual project. <br>
After early completion of the project, we re-wrote the guide for the project. I suggested that instead of a boring, old Word document, we make a website with visual appeal and interactive components. I created the template and wrote all of the CSS for the internal document. As a team, we co-wrote each section of the guide and included tutorials that would make getting started on the project more fun. <br>
Near the end of the term, I made some fixes to one of the websites using SQL and ColdFusion. 
</p>

<h3>Ontario Institute for Cancer Research (OICR)</h3>
<p>Tags: Drupal | PHP | JavaScript | HTML | CSS | CasperJS | JIRA/Confluence | Drupal Modules | Agile</p>
<p>My main job was developing and updating webpages based on mockups. OICR is in charge of many, many websites, all of which are set up using Drupal (Content Management System). The stack was LAMP (linux, apache2, MySQL, PHP). VirtualBox and Vagrant were used for the sandbox environment. For the term, I was the front-end developer as the team did not have one. Most of the time, I was modifying PHP Drupal templates. Other times, I was doing some JavaScript. When not working on a website, there was a side project of fixing and improving a website crawler that also took screenshots (CasperJS). It would output a csv with reports of broken links on a website and take screenshots of every single page. Sometimes it had to take over 18,000 screenshots, so it had to be scalable. Aside from developing, there were other tasks such as administration, testing a JIRA/Confluence upgrade, writing documents for the clients to understand how to manage content, and helping my fellow co-op coworkers understand the technical side of things.<br> 
From time to time, I was able to sit in on meetings to transcribe and observe how business meetings happened. It was very interesting. <br>
One major solo project I worked on: converting the dynamic Drupal webpages to PDFs. It started out as research and then it turned into a prototype and then a final product. It was done using a Drupal module with modifications. The main challenge was to make it look exactly like the existing PDFs that were manually produced. <br>

</p>


<h3>XE.com</h3>
<p>Tags: iOS | Objective-C | Swift | cocoapods | WatchOS | iMessage | Today Widget | Localization | Free/Pro | Jira/Confluence | Blackberry Native | Windows Desktop/Phone | JSON</p>
<p>XE Currency iOS app (Objective-C): I worked with all parts of the app: free and pro version, watchOS, iMessage extension, and Today extension/widget. Compatibility was tested on iOS 8+ and all of the different iDevices. Localization was supported so testing was also done on multiple languages. <br>
Whenever there were user reports of bugs, I would investigate, find the problem, and then fix it. Sometimes I would find more bugs while fixing others so I would add that to the queue and fix them later. <br>
When not fixing stuff, there were features to be implemented. Some things I implemented: </p>
<ul>
	<li>Grouping separators in mathematical expression input. Example: while inputting <em>1,234+45,678</em> into the custom calculator, the grouping separator (comma) was not present. Instead, it was <em>1234+45678</em>. The goal was to get these grouping separators in the appropriate places while inputting the expression. So if the user input a '9', it would become <em>1,234+456,789</em>. This is where I learned that different countries/currencies have different grouping separators and grouping sizes. For example, India separates it like 60,00,000. The rightmost group is of size 3 and the rest are of size 2. This added more complexity. Also, not every country uses the same decimal. For example, Germany uses '.' for grouping separators and ',' for decimal separator which is the complete opposite of what Canada uses. Many things to account for. Very fun. </li>
	<li>Watch Charts</li>
	<li>Accessibility</li>
</ul>
<p>I was involved from v4.5.2 to v4.6.0. v4.6.0 was my baby. </p>
<p>XEPods (Swift): Around the fourth month, we started app redesign, a complete redesign of the application. The old project had a lot of legacy code and the new project was to get rid of all of that. The goals were modularity and future-proofing. This was the birth of a beautiful baby that would live forever. <br> 
It used cocoapods and was completely modularized for any apps to just plug and play. Every feature lived in its own module. We were basically writing libraries for other developers to use. I implemented some of the core classes. We faced issues with what data structures to use and what we would allow the user(developer) to do.
</p>
<p>XE Currency on Blackberry Native: No one could get it to run on simulator or device because no one had worked on it in a long time. I got it running and fixed some things.</p>
<p>XE Currency on Windows Desktop/Windows Phone: Downloading Windows 10 SDK seemed impossible. Then we had a breakthrough, got it installed. From there on, I took on the task of fixing and updating the applications. First came upgrading from 8.0 to 8.1. Then, testing that everything was working okay. Later, I took on the task of upgrading from one currency data service to another for the application. It was deprecating Protocol Buffers and then implementing POSTing/GETting JSON from the server.</p>
<p>Docs: There was a lack of documentation, so I added a bunch. Started a lot of Confluence pages so we would never forget anything. <br>
When we got new additions to the team, I realized that they had a lot of knowledge to share, so I started an <em>iOS Fun Facts</em> page for everyone to share their knowledge. I also thought it would have been a nice treat to any new co-op student joining as a rookie iOS developer. </p>*/
?>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
