<?php 
	//$base = "/home/a1257259/public_html"; 
	$base = getcwd();	// index-specific 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Hello World!'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->

<!--<p>My Referral Links: </p>
<ul>
	<li><a href="http://looted.by/et6FM">Loot Crate</a> (both get $5 off)</li>
	<li><a href="http://www.ebates.ca/referrer?referrerid=9%2BvjUF6pO%2FE%3D%0D%0A&src=Link">Ebates</a> (both get $5)</li>
	<li><a href="http://www.popinabox.ca/referrals.list?applyCode=SANDY-R8&li">PopInABox</a> (I get $3?)</li>
	<li><a href="https://www.just-eat.ca/join/sandyh1">JUST EAT</a> (We both get $7 with credit card purchase > $15)</li>
	<li><a href="https://www.groupon.com/visitor_referral/h/bfda28dd-e4ba-411b-8b3a-e5d7ece6d391">Groupon</a> (I get $10)</li>
	<li><a href="http://www.swagbucks.com/refer/ahshan">Swagbucks</a> (I get 10% of your points)</li>
	<li><a href="http://fbuy.me/egWcb">Nerdblock</a> (I get $5) </li>
</ul>

<hr>-->

<p style="border:#664d46 dashed 1px; border-radius: 5px; padding:10px; background-color: #f4e9e6; font-size: 16px;">If you are interested in my design/thought process for iOS Development, please check out my <a href="/pooptracker/redesign">PoopTracker Redesign</a> page.</p>

<hr> 

<p>Welcome to my website. I have re-designed and re-implemented this many times, but I've finally settled on this current design and implementation. I coded it from scratch using HTML, CSS, Javascript/jQuery, and PHP. </p>

<p>The reasons for this website:</p>
<ol>
	<li>I love websites</li>
	<li>I love building websites</li>
	<li>I love having a space where I can show the world who I am and what I can do</li>
</ol>
<p>Hopefully this site can give you some insight as to who I am.</p>

<hr>

<p>Check out my <a href="/pages/things/Fall2017Schedule/Fall2017Schedule.php">Fall 2017 TV Schedule</a>!</p>

<hr>

<p>SEP 02 2017: My <a href="/pages/things/Fall2017Schedule/Fall2017Schedule.php">Fall 2017 TV Schedule</a>. PHP this time since I was getting tired of adding each show and also editing each HTML line when I wanted to change something. </p>
<p>JUN 15 2017: Added a counter for the number of days that I have restrained myself from using the elevator. I walk up 6 flights of stairs multiple times every day! It is a struggle, but one day it won't be.</p>
<p>MAY 23 2017: Updated projects page. New quotes!</p>
<p>MAY 05 2017: Site was down for 3 days because 000webhost shut it down since I didn't migrate to their new control panel. Site is back up, but it reset all of my last updated dates. Also upgraded to PHP 7.0, fixed some bugs.</p>
<p>FEB 04 2017: <a href="/pooptracker/redesign">POOPTRACKER REDESIGN</a> page. A promise to complete the app.</p>
<p>DEC 28 2016: Updated some typos and content. UPCOMING: Full list of tv shows with reviews, rendered from a google spreadsheet.</p>
<p>SEP 24 2016: Added new section to stickers page - <a href="/pages/art/stickers.php#cards-main">DIY ID CARDS</a></p>
<p>AUG 24 2016: Added new page - <a href="/pages/art/stickers.php">STICKERS!!!</a></p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>