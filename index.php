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

<p>My Referral Links: </p>
<ul>
	<li><a href="http://looted.by/et6FM">Loot Crate</a> (both get $5 off)</li>
	<li><a href="http://www.ebates.ca/referrer?referrerid=9%2BvjUF6pO%2FE%3D%0D%0A&src=Link">Ebates</a> (both get $5)</li>
	<li><a href="http://www.popinabox.ca/referrals.list?applyCode=SANDY-R8&li">PopInABox</a> (I get $3?)</li>
	<li><a href="https://www.just-eat.ca/join/sandyh1">JUST EAT</a> (We both get $7 with credit card purchase > $15)</li>
	<li><a href="https://www.groupon.com/visitor_referral/h/bfda28dd-e4ba-411b-8b3a-e5d7ece6d391">Groupon</a> (I get $10)</li>
	<li><a href="http://www.swagbucks.com/refer/ahshan">Swagbucks</a> (I get 10% of your points)</li>
	<li><a href="http://fbuy.me/egWcb">Nerdblock</a> (I get $5) </li>
</ul>

<hr>

<p>Welcome to my website. I have re-designed and re-implemented this many times, but I think I'm going to settle on this current design and implementation. I coded it from scratch using HTML, CSS, Javascript/jQuery, and PHP.</p>

<p>The reasons for this website are:</p>
<ol>
	<li>I love websites</li>
	<li>I love building websites</li>
	<li>I love having a space where I can show the world who I am and what I can do</li>
</ol>
<p>Hopefully this site can give you some insight as to who I am.</p>

<hr>

<p>Check out my <a href="/pages/things/Fall2016Schedule/Fall2016Schedule.html">Fall 2016 TV Schedule</a>! I'll be home with a TV to watch 2-3 hours of TV every night! :D</p>

<hr>

<p>FEB 04: <a href="/pooptracker/redesign">POOPTRACKER REDESIGN</a> page. A promise to complete the app.</p>
<p>DEC 28: Updated some typos and content. UPCOMING: Full list of tv shows with reviews, rendered from a google spreadsheet.</p>
<p>SEP 24: Added new section to stickers page - <a href="/pages/art/stickers.php#cards-main">DIY ID CARDS</a></p>
<p>AUG 24: Added new page - <a href="/pages/art/stickers.php">STICKERS!!!</a></p>

<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>