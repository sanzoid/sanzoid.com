<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'The Loves of My Life'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<div id="celebs-main">

<p>All of my favourite actors. I have a condition called Celebrity Worship Syndrome.</p>

<ul class="no-list-style no-indent">
	<li><img src="/images/celebs/hughjackman.png" /><span class="name">Hugh Jackman</span><span class="description">I loved him as Wolverine ever since we watched X-Men at daycare when I was 5.</span></li>
	<li><img src="/images/celebs/johnnydepp.jpg" /><span class="name">Johnny Depp</span><span class="description">Captain Jack Sparrow, Willy Wonka, Frank in The Tourist.</span></li>
	<li><img src="/images/celebs/voldemort.png" /><span class="name">Voldemort (Ralph Fiennes)</span><span class="description">His every movement in Goblet of Fire, it was like he was dancing with his wand.</span></li>
	<li><img src="/images/celebs/johnreese.gif" /><span class="name">Jim Caviezel</span><span class="description">His portrayal as John Reese in Person of Interest is so heartbreaking. He has a way of conveying everything his character is feeling. </span></li>
	<li><img src="/images/celebs/mattbomer.jpg" /><span class="name">Matt Bomer</span><span class="description">Neal. Caffrey.</span></li>
	<li><img src="/images/celebs/viggomortensen.jpg" /><span class="name">Viggo Mortensen</span><span class="description">Aragorn. My husband since I was 7.</span></li>
	<li><img src="/images/celebs/booboostewart.jpg" /><span class="name">Booboo Stewart</span><span class="description">He was so pretty.</span></li>
	<li><img src="/images/celebs/geoffstults.jpg" /><span class="name">Geoff Stults</span><span class="description">Hilarious in The Finder.</span></li>
	<li><img src="/images/celebs/danielcraig.jpg" /><span class="name">Daniel Craig</span><span class="description">Ever since Casino Royale... </span></li>
	<li><img src="/images/celebs/richardarmitage.jpg" /><span class="name">Richard Armitage</span><span class="description">Thorin Oakenshield. Really deep voice. Also, he's really funny.</span></li>
	<li><img src="/images/celebs/hughlaurie.jpg" /><span class="name">Hugh Laurie</span><span class="description">GREGORY HOUSE. So broken, so much pain.<br>A genius. See A Bit of Fry and Laurie.</span></li>
	<li><img src="/images/celebs/madsmikkelsen.jpg" /><span class="name">Mads Mikkelsen</span><span class="description">Hannibal Lecter. His cheek bones.</span></li>
	<li><img src="/images/celebs/guillermodiaz.jpg" /><span class="name">Guillermo Diaz</span><span class="description">Huck in Scandal.</span></li>
	<li><img src="/images/celebs/patrickdempsey.jpg" /><span class="name">Patrick Dempsey</span><span class="description">McDreamy.</span></li>
	<li><img src="/images/celebs/katewalsh.jpg" /><span class="name">Kate Walsh</span><span class="description">Addison Montgomery in Grey's Anatomy. At first, I hated her because of her character. But her relationships with the other characters changed. She was so funny, but then she left for Private Practice. A shame because the dynamics between her and the other characters were what worked. Nonetheless, she's a great comedic actress. </span></li>
	<li><img src="/images/celebs/johnnyleemiller.jpg" /><span class="name">Johnny Lee Miller</span><span class="description">SHERLOCK HOLMES. I love him as Sherlock. Brilliant potrayal. Also, did you know that he used to be married to Angelina Jolie?</span></li>
	<li><img src="/images/celebs/thomasgibson.gif" /><span class="name">Thomas Gibson</span><span class="description">I watched a Criminal Minds marathon during some break. It was 24/7 for an entire week. I watched A LOT. Fell in love with Aaron Hotchner. He's not enthusiastic, but you can see in his eyes that he really cares for the team. Also, if you see the pictures he takes on set, they're hilarious. It's a shame, his Twitter days are over (after he got catphished). He's also really funny in Dharma &amp; Greg.</span></li>
	<li><img src="/images/celebs/tealeoni.jpg" /><span class="name">T&eacute;a Leoni</span><span class="description">I love her voice.</span></li>
	<li><img src="/images/celebs/elizabethmitchell.jpg" /><span class="name">Elizabeth Mitchell</span><span class="description">Oh my god, what an amazing actress. I first experienced her in Once Upon a Time, and man, she just blew me away. She was the evil Snow Queen, but her tone of voice, her every facial expression was perfection. One of the best actresses out there. She also cares about her fans and takes the time to meet all of them. </span></li>
	<li><img src="/images/celebs/jamesspader.png" /><span class="name">James Spader</span><span class="description">James Spader is probably one of the greatest actors ever. Just a single twitch in his face can convey so much. He makes The Blacklist. Without him, the show would not exist.</span><!--<iframe width="560" height="315" src="https://www.youtube.com/embed/M1yofW3EVOg" frameborder="0" allowfullscreen></iframe>--></li>
	<li><img src="/images/celebs/frankgrillo.jpg" /><span class="name">Frank Grillo</span><span class="description">Alvey Kulina! Guy in The Purge: Anarchy! Crossbones in the MCU! He also posts these wise quotes on Instagram.</span></li>
	<li><img src="/images/celebs/timroth.jpg" /><span class="name">Tim Roth</span><span class="description">Dr. Cal Lightman. Amazing actor. Love the way he talks, love the way he walks.</span></li>
	<li><img src="/images/celebs/galeharold.jpg" /><span class="name">Gale Harold</span><span class="description">The father on The Secret Circle. Brian Kinney on Queer as Folk.</span></li>
	<li><img src="/images/celebs/peterkrause.jpeg" /><span class="name">Peter Krause</span><span class="description">If you look at his current photos where he's smiling, he has that look like "I'm going to murder your entire family just because I enjoy it." It's also a very charming smile. He has captivated me on The Catch. I love it when he smiles.</span></li>
	<li><img src="/images/celebs/rufussewell.jpg" /><span class="name">Rufus Sewell</span><span class="description">Obergruppenf&#252;hrer John Smith! He portrays a character so evil, but you love him for it. The way he darts his eyes around, it just conveys so much. Brilliant actor. A fan said it perfectly, &quot;That voice made of velvet with just the right amount of dirt thrown in.&quot;</span></li>
	<li><img src="/images/celebs/jackdavenport.png" /><span class="name">Jack Davenport</span><span class="description">The best part of Smash. He's always so angry-looking, but gentle at the same time. His character is so passionate about directing the musical that he will do anything to make it happen, including yelling at people and being brutally honest. He's a justified arse. His voice is very much like Alan Rickman's.</span></li>
	<li><img src="/images/celebs/anthonystewarthead.jpg" /><span class="name">Anthony Stewart Head</span><span class="description">I cannot imagine that anyone could ever play Rupert Giles better than Anthony Stewart Head did. He is absolutely adorable.</span><iframe width="560" height="315" src="https://www.youtube.com/embed/KNoQm9RoZk8?rel=0" frameborder="0" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/5Psb8MTANCU?rel=0" frameborder="0" allowfullscreen></iframe></li>
	<li><img src="/images/celebs/markstrong.jpg" /><span class="name">Mark Strong</span><span class="description">BALD Mark Strong, to be precise. It took me too long to start to appreciate Mark Strong. Every time I see a bald man, I'm like &quot;Mark Strong?!?! NO? WHY ARE YOU NOT MARK STRONG??!&quot; He's just so great. His voice, his bald head, his long legs, his everything.</span></li>
	<li><img src="/images/celebs/ilfeneshhadera.jpg" /><span class="name">Ilefenesh Hadera</span><span class="description">Absolutely stunning. She started her acting career pretty late, but I was captured by her beauty in every episode of Deception. </span></li>
</ul>

</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
