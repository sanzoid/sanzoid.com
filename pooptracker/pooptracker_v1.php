<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	$base = dirname(getcwd());				// go up one level
	//$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'PoopTracker 1.0'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<!-- farts farts farts -->
<script src="http://code.onion.com/fartscroll.js"></script>
<script>
	$(document).ready(function() {
            fartscroll(800);
    });
</script>

<div id="pooptracker-main">

<p>PoopTracker 1.0 is the first iteration of many iterations of my app, PoopTracker.</p>
<p>This was made during the time of my university hiatus in Winter 2016, where I set aside some time to learn iOS Development to pursue my dream of becoming an iOS Developer.</p>
<p>It was written in Objective-C because that was the standard at the time as Swift was still a baby.</p>
<p>As this was my very first iOS project that was not a simple tutorial, I faced many challenges and made lots of mistakes. But I also learned a lot and had a lot of fun.</p>
<p>The code is absolute garbage, but I'm proud of some of the stuff I accomplished at the time when I was just a wee beginner. I have the code here just so I can look at it for nostalgia.</p>
<p><a style="background-color:#205081; color:#FFFFFF" class="link-block" href="https://bitbucket.org/4sho/pooptracker/">PoopTracker on Bitbucket</a></p>

<p>Below is something I had written at the time, before I got busy with school and before I knew I would make more iterations in the future.</p>
<hr>

<h2>Why?</h2>
<p>People always ask, "Why did you make an app about something so smelly?"</p>
<ul>
	<li><strong>LEARNING</strong>: I thought it would be a great first app to learn iOS. I was right about that. I learned a lot making this app.</li>
	<li><strong>STATISTICS</strong>: Statistical reasons. I LOVE tracking things. Inspired by my favourite app, aTimeLogger 2 (a time/activity tracker), I wanted to make something like it. I love being able to view statistics and trends about myself. I enjoy using trackers such as aTimeLogger 2, trakt.tv, and Fitbit. </li>
	<li><strong>HEALTH</strong>: We need to make sure we're healthy in that aspect, right?</li>
	<li><strong>GATEWAY TO PRODUCTIVITY APPS</strong>: I have a big idea for an app, but I wanted to make all the mistakes with my first one so I could learn from them and make an awesome app next. There are a lot of productivity apps out there, but I find that they could all be better.</li>
</ul>
<p>TL;DR: Main point of the app was to learn iOS, and also have fun with it even if others think it's silly.</p>

<h2>Features</h2>
<p>I didn't want a simple tracking app. I wanted something simple, yet complex at the same time. You can log anything by making a simple list, but I wanted to make it easier for the user to be able to view what they've tracked in a much more meaningful way.</p>
<ul>
	<li>Adding entries with date, end date, duration, toilet paper count, type, colour, details, comments.</li>
	<li>Start, Stop, Cancel an entry to record exact start and end times. Stopping will result in the edit view to pop up to finish adding the entry.</li>
	<li>Edit, delete, (share to be implemented) by swiping.</li>
	<li>Stats page</li>
	<li>Pie charts for type, colour, other details. </li>
	<li>Calendar visualizing the poops.</li>
	<li>Themes</li>
</ul>

<h2>To-do List</h2>
<p>The app is not quite ready yet. It's definitely functional, but I need to make sure that it's both stable and efficient enough to be released to people. </p>
<ul>
	<li><strong>Line graphs</strong> of each attribute. This way you can see correlations between attributes.</li>
	<li>More <strong>themes</strong>! </li>
	<li>A lot of <strong>code refactoring</strong>.</li>
	<li><strong>Save State</strong>. I did this for some view controllers, then redid those view controllers, and haven't implemented it for everything yet. </li>
	<li><strong>Efficiency</strong> improvements. The goal is to prevent iterating over the list of entries every time an entry is added/modified/deleted. Right now, it does do this, but that is because I only wanted something working before making it more efficient. As of now, statistics are not calculated by iterating the entries, rather the statistics itself is being saved and updated as entries are being updated. There is a chance of inconsistency by human error, but it is a trade-off worth making.</li>
	<li><strong>iCloud sync</strong></li>
	<li>Export/import to/from csv, export to email. </li>
	<li><strong>Passcode protect</strong></li>
	<li><strong>Sound effects &am; Animations</strong></li>
	<li>More info with the pie charts </li>
	<li>More <strong>options</strong></li>
	<li>Sharing entries (for laughs)</li>
	<li>Better UI for stats page - it seems weird right now. </li>
	<li>Better icons - more official looking ones.</li>
	<li>Make it look great on iPad.</li>
	<li>Other improvements</li>
</ul>

<h2>External Libraries</h2>
<p>I used some third-party libraries (mostly found via <a href="https://www.cocoacontrols.com/">Cocoa Controls</a>) which made things a lot easier. I tried my best not to use them because I wanted to write my own code, but some things require a lot of code!</p>
<ul>
	<li><a href="https://github.com/Kjuly/KYCircleMenu">KYCircleMenu</a> - although I didn't directly use this, I did use it to make my own. See, this one had exact positions for the buttons and it had to be a circle, which was very limiting. It was also a bit excessive for what I needed. I did some trigonometry and was able to start the circle at any angle and end at any angle, and the buttons would dynamically fit itself within this circular arc. It was a pretty big accomplishment for me. I actually used <em>trigonometry</em> for something. </li>
	<li><a href="https://github.com/xyfeng/XYPieChart">XYPieChart</a> - awesome pie charts</li>
	<li><a href="https://github.com/WenchaoD/FSCalendar">FSCalendar</a> - calendar</li>
	<li><a href="https://github.com/bryceredd/RFQuiltLayout">RFQuiltLayout</a> - for the stats collection view</li>
	<li><a href="https://github.com/MortimerGoro/MGSwipeTableCell">MGSwipeTableCell</a> - for swipe to edit/delete/share</li>
	<li><a href="https://github.com/keighl/KTCenterFlowLayout">KTCenterFlowLayout</a> - for the pie chart legend to be centered</li>
</ul>

<h2>Things I Learned</h2>
<ul>
	<li>I somehow always felt accomplished after 2 hours of coding. Could be that I always planned exactly 2 hours of implementations or ??? </li>
	<li>Plan the UI design of your app because you won't know where to put stuff and what you need to implement. </li>
	<li>Plan, plan, plan! I ended up redoing a lot of things because I implemented things with no concrete plan. I had pictures in my mind, but that was not enough.</li>
	<li>iOS things. Opened my eyes to how apps are built! Most fascinating thing I learned: table cells are reused!</li>
	<li>So much more! It was an eye-opening journey.</li>
</ul>

<h2>The App</h2>
<p>It's not on the appstore <strong>yet</strong>, so here are some images.</p>

<div><img src="/images/pooptracker/pooptracker_addentry.gif" /><p><span class="caption">Adding an entry. I wanted to include as many attributes as possible.</span></p></div>
<div><img src="/images/pooptracker/pooptracker_controls.gif" /><span class="caption">Starting, stopping, cancelling an entry. Sort of like playing/stopping music, except your bowel movements. Holding the button will also just add a manual entry.</span></div>

<div id="pooptracker-pics"> 
	<div><img src="/images/pooptracker/pooptracker_stats.png" /><p><span class="caption">Stats page - An overview of all logged poops.<br>Design needs work. Need to add option to hide sections as not everyone tracks all attributes.</span></p></div>
	<div><img src="/images/pooptracker/pooptracker_pie_type.png" /><p><span class="caption">Pie Chart for Type<br>Need to add more information at the bottom. The attribute selector needs fixing.</span></p></div>
	<div><img src="/images/pooptracker/pooptracker_piecolour.png" /><p><span class="caption">Pie Chart for Colour</span></p></div>
	<div><img src="/images/pooptracker/pooptracker_log.png" /><p><span class="caption">Log</span></p></div>
	<div><img src="/images/pooptracker/pooptracker_log_swipe.png" /><p><span class="caption">Swipe to Edit<br>Share not implemented yet.</span></p></div>
	<div><img src="/images/pooptracker/pooptracker_calendar.png" /><p><span class="caption">Calendar</span></p></div>
	<div><img src="/images/pooptracker/pooptracker_edit.png" /><p><span class="caption">Edit View</span></p></div>
</div>

</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
