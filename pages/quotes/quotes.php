<?php 
	//$base = "/home/a1257259/public_html"; 	// does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels  
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'Quotes'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<p>It is amazing how few words can affect one's life.</p>

<ul id="quotes-menu" class="pages-submenu">
	<li><a href="#quotes-tv">TV</a></li>
	<li><a href="#quotes-movies">Movies</a></li>
	<li><a href="#quotes-literature">Books/Comics/Manga</a></li>
	<li><a href="#quotes-music">Music</a></li>
	<li><a href="#quotes-other">Other</a></li>
	<li><a href="#quotes-rwe">Ralph Waldo Emerson</a></li>
	<li><a href="#quotes-me">Quotes By Me</a></li>
</ul>

<div id="quotes-main">
<!--
<p><span class="quote"></span><span class="author"></span></p>
-->
	
	

	<!-- START: TV -->
	<div id="quotes-tv" class="quotes-section anchored">
	
		<h2>TV</h2>
		<p class="description">I usually tweet the good ones on <a href="https://twitter.com/telesanzoid">@telesanzoid</a>.</p>


		<p><span class="quote">There is, unquestionably, a certain social utility to being polite, to maintaining an awareness of other people's sensitivities, to exhibiting all the traits that might commonly be grouped under the heading 'nice'. I am not a nice man. It is important that you understand that, it is going to save you a great deal of time and effort. There is not a warmer, kinder me waiting to be coaxed out into the light. I am acerbic. I can be cruel. It is who I am, right to the bottom. I'm neither proud of this nor ashamed of it. It simply is. And, in my work, my nature has been an advantage far more often than it's been a hindrance. I'm not gonna change."<br>"You have. You're not the same person I met a year and a half ago."<br>"Good to you? Yeah. For the most part. I consider you to be... exceptional. So I make an exceptional effort to accommodate you. But you must accept that, for as long as you choose to be in my life, there will occasionally be fallout from my behavior. That must be a part of our understanding."<br>"No one can accept something like that forever."<br>"To thine own self, Watson.</span><span class="author">Sherlock and Joan (Elementary)</span></p>

		<p><span class="quote">If you love someone, you tell them. Even if you're scared that it's not the right thing. Even if you're scared that it'll cause problems. Even if you're scared that it will burn your life to the ground, you say it, and you say it loud and you go from there.</span><span class="author">Mark Sloan (Grey's Anatomy)</span></p>
		<p><span class="quote">I'm not saying it's easy to ignore the way people look at you. But I hope you can find some solace in the fact that when I look at you... <br><br>That's Polaris, the north star. That's how sailors used to find their way home. When I look at you, that's what I see. I see my way home</span><span class="author">Raymond Reddington (The Blacklist)</span></p>
		<p><span class="quote">When you find that one person who connects you to the world, you become someone different, someone better. When that person is taken from you, what do you become then?</span><span class="author">John Reese (Person of Interest)</span></p>
		<p><span class="quote">All of humankind has one thing in common: The Sandwich. I believe that all anyone really wants in this life is to sit in peace and eat a sandwich.</span><span class="author">Liz Lemon</span></p>
		<p><span class="quote">Reading's for morons who can't understand pictures!</span><span class="author">Gareth (Galavant)</span></p>
		<p><span class="quote">It doesn't really bother me. I don't need a congressional honor. I don't need Agent Thompson's approval, or the President's. I know my value. Anyone else's opinion doesn't matter.</span><span class="author">Peggy Carter (Agent Carter)</span></p>
		<p><span class="quote">There's only two kinds of straight people in this world: the ones that hate you to your face and the ones that hate you behind your back.</span><span class="author">Brian Kinney (Queer as Folk)</span></p>
		<p><span class="quote">Haha! I don't know what you mean, but it has the cadence of a joke.</span><span class="author">Perd Hapley (Parks and Recreation)</span></p>
		<p><span class="quote">Maybe being normal isn't the most important thing.</span><span class="author">The Real O'Neals</span></p>
		<p><span class="quote">Why do you have a diary?"<br>"To keep secrets from my computer.</span><span class="author">Dwight Schrute (The Office)</span></p>
		<p><span class="quote">Turn off the damn lights! We don't support the electric company!</span><span class="author">Murray Goldberg (The Goldbergs)</span></p>
		<p><span class="quote">My mom always used to say that average people are the most special people in the world and that's why God made so many.</span><span class="author">Michael Scott (The Office)</span></p>
		<p><span class="quote">I do my best work when people don't believe in me.</span><span class="author">Michael Scott (The Office)</span></p>
		<p><span class="quote">The third wheel is what makes it a tricycle.</span><span class="author">Michael Scott's mom (The Office)</span></p>
		<p><span class="quote">Sometimes the smartest people don't think at all.</span><span class="author">Michael Scott (The Office)</span></p>
		<p><span class="quote">Too many words coming at me from too many different sentences.</span><span class="author">Michael Scott (The Office)</span></p>
		<p><span class="quote">Constantly worrying about where you stand based on inscrutable social clues and then inevitably reframing it all in a reassuring way so you can get to sleep at night. No, I do not believe in that at all. If I invited you to lunch, I think you're a winner. If i didn't, I don't. But I just met you all, life is long, opinions change. Winners, prove me right. Losers, prove me wrong.</span><span class="author">Robert California (The Office)</span></p>
		<p><span class="quote">Don't ask 'Are you?' because it's never a question. Just say 'I know.'</span><span class="author">Queer As Folk</span></p>
		<p><span class="quote">Becoming me was the greatest creative project of my life.</span><span class="author">Eliot (The Magicians)</span></p>
		<p><span class="quote">Magic doesn't come from talent, magic comes from pain.</span><span class="author">The Magicians</span></p>
		<p><span class="quote">If I could do better, I'd be God.</span><span class="author">Miranda</span></p>
		<p><span class="quote">I failed the exercise test. They asked me to run, I said <strong>no</strong>. Well, I think running is wrong unless professionally or as a child.</span><span class="author">Miranda</span></p>
		<p><span class="quote">I don't give a bag of dicks what kinky shit you're into, just be into it quietly.</span><span class="author">Jessica Jones</span></p>
		<p><span class="quote">Where you from?"<br>"Seattle Grace."<br>"Like on TV?</span><span class="author">Jessica Jones</span></p>
		<p><span class="quote">Hi. Karen, the case assistant. Please excuse my handshake. I have naturally damp hands. It's a medical condition. I am in some studies.</span><span class="author">Crazy Ex-Girlfriend</span></p>
		<p><span class="quote">I guess with great responsibility comes with great loneliness.</span><span class="author">Scorpion</span></p>
		<p><span class="quote">Oh, no. I don't drink. Alcohol affects my cognitive function.</span><span class="author">Walter O'Brien (Scorpion)</span></p>
		<p><span class="quote">You don't know where you're vulnerable until you fail.</span><span class="author">Scorpion</span></p>
		<p><span class="quote">Am I hallucinating?"<br>"If you were, how would asking me help?</span><span class="author">The Magicians</span></p>
		<p><span class="quote">On more than one occasion, she's called me Gina. That's her own name.</span><span class="author">Rosa (Brooklyn Nine-Nine)</span></p>
		<p><span class="quote">It doesn't take long to realize you met someone special.</span><span class="author">Agent Carter</span></p>
		<p><span class="quote">And you are...?"<br>"Yes, we are.</span><span class="author">Angie Tribeca</span></p>
		<p><span class="quote">The existence of life is a highly overrated phenomenon.</span><span class="author">Dr. Manhattan (Watchmen)</span></p>
		<p><span class="quote">You're a kid and your whole life's ahead of you and you have these notions about what life is, and then... what it could be, but eventually you have to let all that go.</span><span class="author">Quentin Coldwater (The Magicians)</span></p>
		<p><span class="quote">I know people think I'm crazy. It's just more fun believing even when no one else does.</span><span class="author">Jessica Jones</span></p>
		<p><span class="quote">You have no idea how this feels."<br>"That's true, but I can see it in your face.</span><span class="author">Lie To Me</span></p>
		<p><span class="quote">There was a brutal murder there."<br>"So statistically, another murder is unlikely.</span><span class="author">Jessica Huang (Fresh Off The Boat)</span></p>
		<p><span class="quote">You can't do every silly thing you want to in life. You have to make your choices, you have to try to be happy with them.</span><span class="author">The Blacklist</span></p>
		<p><span class="quote">The people you're talking about, the ones who think they know you... they really don't know anything about you at all.</span><span class="author">The Blacklist</span></p>
		<p><span class="quote">Low tech's the best tech.</span><span class="author">The Player</span></p>
		<p><span class="quote">Life's a rollercoaster, but I'm tall enough to ride.</span><span class="author">Dylan (Modern Family)</span></p>
		<p><span class="quote">You're defined up to now, not beyond.</span><span class="author">Hannibal</span></p>
		<p><span class="quote">Would you have told me the truth?"<br>"In my own way. I always have.</span><span class="author">Hannibal</span></p>
		<p><span class="quote">You don't have to be happy. Just be yourself.</span><span class="author">Kingdom</span></p>
		<p><span class="quote">I'm a visual person. I get turned on by what I feel and what I see, not by just some words.</span><span class="author">Younger</span></p>
		<p><span class="quote">Abed, what did I tell you about quitting?"<br>"That it's sometimes the only way to survive.</span><span class="author">Community</span></p>
		<p><span class="quote">It's not a question of how I feel. I feel like flying, I don't jump off buildings.</span><span class="author">Community</span></p>
		<p><span class="quote">It's taking too long."<br>"It takes as long as it takes.</span><span class="author">The 100</span></p>
		<p><span class="quote">Yu gonplei ste odon (Your fight is over).</span><span class="author">The 100</span></p>
		<p><span class="quote">We <strong><em>NEED</em></strong> oxygen."<br>"We have oxygen. We <strong><em>NEED</em></strong> Wi-Fi.</span><span class="author">Community</span></p>
		<p><span class="quote">It's okay if we're not friends anymore. You being alive is enough.</span><span class="author">Root (Person of Interest)</span></p>
		<p><span class="quote">Even when your world stops, the world around you keeps moving forward. And you will too.</span><span class="author">Person of Interest</span></p>
		<p><span class="quote">You don't get to decide what or who I'm willing to die for. I made my choice a long time ago. So stop shutting me out.</span><span class="author">Fusco (Person of Interest)</span></p>
		<p><span class="quote">Titus, age doesn't matter. You can die at any time.</span><span class="author">Unbreakable Kimmy Schmidt</span></p>
		<p><span class="quote">I envy you! I've never been able to meet me.</span><span class="author">Unbreakable Kimmy Schmidt</span></p>
		<p><span class="quote">I'm always amazed at what women will do because they're afraid of being rude.</span><span class="author">Unbreakable Kimmy Schmidt</span></p>
		<p><span class="quote">People think I collect art. What I really collect are lives fixed in paint. A perfect moment capturing an entire existence made immortal.</span><span class="author">Heroes</span></p>
		<p><span class="quote">She's not like the rest of them."<br>"Everyone's like the rest of 'em. That's why they're the rest.</span><span class="author">Heroes</span></p>
	</div>
	<!-- END: TV-->


	<!-- START: Movies-->
	<div id="quotes-movies" class="quotes-section anchored">
		<h2>Movies</h2>
		<!--<p class="description"></p>-->

		<p><span class="quote">I would go mad if I didn't write down the voices.</span><span class="author">William Shakespeare (Anonymous)</span></p>
		<p><span class="quote">Sometimes it's the very people who no one imagines anything of who do the things no one can imagine.</span><span class="author">The Imitation Game</span></p>
		<p><span class="quote">If you need me, I'll be changing the world.</span><span class="author">Steve Jobs (iSteve)</span></p>
		<p><span class="quote">You had a lot of bad ideas that lead to good ideas, and that is value.</span><span class="author">Horrible Bosses 2</span></p>
		<p><span class="quote">I don't have a gun. I am just aroused from looking at you.</span><span class="author">Spy</span></p>
		<p><span class="quote">I'm very non-physically resourceful. I do a lot of reading. I read palms, and maps, and I read all the Hunger Games.</span><span class="author">Spy</span></p>
		<p><span class="quote">MESS WITH THE BEST<br>DIE LIKE THE REST</span><span class="author">Crash Override (Hackers)</span></p>
		<p><span class="quote">In brightest day, in blackest night, no evil shall escape my sight. Let those who worship evil's might, beware my power, Green Lantern's light!</span><span class="author">Green Lantern</span></p>
	</div>
	<!-- END: Movies-->

	<!-- START: Books/Comics/Manga -->
	<div id="quotes-literature" class="quotes-section anchored">
		<h2>Books/Comics/Manga</h2>
		<!--<p class="description"></p>-->

	</div>
	<!-- END: Books/Comics/Manga -->

	<!-- START: Music-->
	<div id="quotes-music" class="quotes-section anchored">
		<h2>Music</h2>
		<!--<p class="description"></p>-->

		<p><span class="quote">There's spit on my face<br>The hot breath of the human race<br>And I know, I know, I'm supposed to integrate<br>But hows about instead I inch away?</span><span class="author">Get Out The Way (Mother Mother)</span></p>
	</div>
	<!-- END: Music-->

	<!-- START: Other-->
	<div id="quotes-other" class="quotes-section anchored">
		<h2>Other</h2>
		<!--<p class="description"></p>-->

		<p><span class="quote">Do the thing we fear, and death of fear is certain.</span><span class="author">Mark Twain</span></p>
		<p><span class="quote">If you're brave enough to say goodbye, life will reward you with a new hello.</span><span class="author">Paul Coelho</span></p>
		<p><span class="quote">You can be comfortable at home for a thousand days, or step out the door and run right into trouble.</span><span class="author">Chinese Proverb</span></p>
		<p><span class="quote">Never lose sight of what you're looking for.</span><span class="author">Mr. Miller (I think pertaining to calculus)</span></p>
	</div>
	<!-- END: Other-->

	<!-- START: RWE-->
	<div id="quotes-rwe" class="quotes-section anchored">
		<h2>Ralph Waldo Emerson</h2>
		<p class="description">I love RWE. <span class="quote">All my best thoughts were stolen by the ancients.</span></p>

		<p><span class="quote">The poet, the painter, the musician, the architect, seek each to concentrate this randiance of the world on one point, and each in his several work to satisfy the love of beauty which stimulates him to produce.</span></p>
		<p><span class="quote">To the attentive eye, each moment of the year has its own beauty, and in the same field, it beholds, every hour, a picture which was never seen before and which shall never be seen again.</span></p>
		<p><span class="quote">Build therefore your own world.</span></p>
		<p><span class="quote">Good thoughts are no better than good dreams, unless they be executed!</span></p>
		<p><span class="quote">Every man in his lifetime needs to thank his faults.</span></p>
		<p><span class="quote">We aim above the mark to hit the mark.</span></p>
		<p><span class="quote">Curiosity is lying in wait for every secret.</span></p>
		<p><span class="quote">The best effort of a fine person is felt after we have left their presence.</span></p>
		<p><span class="quote">We are always getting ready to live but never living.</span></p>
		<p><span class="quote">People only see what they are prepared to see.</span></p>
		<p><span class="quote">Knowledge is knowing that we cannot know.</span></p>
		<p><span class="quote">What you are comes to you.</span></p>
		<p><span class="quote">Little minds have little worries, big minds have no time for worries.</span></p>
		<p><span class="quote">Beauty without expression is boring.</span></p>
		<p><span class="quote">There are other measures of self-respect for a man, than the number of clean shirts he puts on every day.</span></p>
		<p><span class="quote">We gain the strength of the temptation we resist.</span></p>
		<p><span class="quote">The desire of gold is not for gold. It is for the means of freedom and benefit.</span></p>
		<p><span class="quote">As long as a man stands in his own way, everything seems to be in his way.</span></p>
		<p><span class="quote">Happy is the hearing man; unhappy the speaking man.</span></p>
		<p><span class="quote">Every wall is a door.</span></p>
		<p><span class="quote">The end of the human race will be that it will eventually die of civilization.</span></p>
		<p><span class="quote">This time, like all times, is a very good one, if we but know what to do with it.</span></p>	
		<p><span class="quote">Don't be too timid and squeamish about your actions. All life is an experiment.</span></p>
		<p><span class="quote">Society is always taken by surprise at any new example of common sense.</span></p>
		<p><span class="quote">The reason why the world lacks unity, and lies broken and in heaps, is, because man is disunited with himself.</span></p>
		<p><span class="quote">Make the most of yourself, for that is all there is of you.</span></p>
		<p><span class="quote">The reward of a thing well done is having done it.</span></p>
		<p><span class="quote">Win as if you were used to it, lose as if you enjoyed it for a change.</span></p>
		<p><span class="quote">The years teach much which the days never know.</span></p>
		<p><span class="quote">We must be our own before we can be another's.</span></p>
		<p><span class="quote">He who is not everyday conquering some fear has not learned the secret of life.</span></p>
		<p><span class="quote">To be great is to be misunderstood.</span></p>
		<p><span class="quote">For everything you have missed, you have gained something else, and for everything you gain, you lose something else.</span></p>
		<p><span class="quote">Enthusiasm is the mother of effort, and without it nothing great was ever achieved.</span></p>
		<p><span class="quote">Bad times have a scientific value. These are occasions a good learner would not miss.</span></p>
		<p><span class="quote">Trust your instinct to the end, though you can render no reason.</span></p>
		<p><span class="quote">Truth is beautiful, without doubt; but so are lies.</span></p>
		<p><span class="quote">Earth laughs in flowers.</span></p>
		<p><span class="quote">Common sense is genius dressed in its working clothes.</span></p>
		<p><span class="quote">Who you are speaks so loudly I can't hear what you're saying.</span></p>
		<p><span class="quote">It is one of the beautiful compensations in this life that no one can sincerely try to help another without helping himself.</span></p>
		<p><span class="quote">People do not seem to realize that their opinion of the world is also a confession of character.</span></p>
		<p><span class="quote">In art, the hand can never execute anything higher than the heart can imagine.</span></p>
		<p><span class="quote">Always do what you are afraid to do.</span></p>
		<p><span class="quote">Every artist was first an amateur.</span></p>
		<p><span class="quote">Once you make a decision, the universe conspires to make it happen.</span></p>
		<p><span class="quote">Nobody can bring you peace but yourself.</span></p>
		<p><span class="quote">It is not length of life, but depth of life.</span></p>
		<p><span class="quote">Character is higher than intellect. A great soul will be strong to live as well as think.</span></p>
		<p><span class="quote">Our greatest glory is not in never failing, but in rising up every time we fail.</span></p>
		<p><span class="quote">Write it on your heart that every day is the best day in the year.</span></p>
		<p><span class="quote">Do not go where the path may lead, go instead where there is no path and leave a trail.</span></p>
		<p><span class="quote">To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</span></p>
	</div>
	<!-- END: RWE-->

	

	<!-- START: Me-->
	<div id="quotes-me" class="quotes-section anchored">
		<h2>Quotes By Me</h2>
		<p class="description">I try.</p>

		<p><span class="quote">If you don't kill yourself trying, then you're not trying at all.</span></p>
		<p><span class="quote">Don't let statistics shape your path; let your path shape statistics.</span></p>
		<p><span class="quote">Everything I share is one less thought I have to keep to myself. </span></p>
		<p><span class="quote">Let change accept you or change will destroy you.</span></p>
		<p><span class="quote">Just because people seem the way they seem to you, doesn't mean they are.</span></p>
		<p><span class="quote">Why don't we measure life by the moments?</span></p>
		<p><span class="quote">There's no point in being bothered by things you can't change.</span></p>
		<p><span class="quote">Gotta stop thinking that someone else is going to lift me up, because that someone is me.</span></p>
		<p><span class="quote">Our greatest companion is the self that challenges the self. The one that pushes us to do the things we didn't think we could do.</span></p>
		<p><span class="quote">Life is about experiences that help you momentarily forget those that let you go and those you can't let go.</span></p>
		<p><span class="quote">I'll probably tell you more if I don't know you than if I do know you.</span></p>
		<p><span class="quote">Reflect and get better.</span></p>
		<p><span class="quote">We all have futures. It's whether they're what we want them to be or not.</span></p>
		<p><span class="quote">Sometimes it's easier to be the person others want you to be, but you just have to say fuck you and listen to yourself.</span></p>
		<p><span class="quote">Loving yourself doesn't necessarily mean that others will love you too.</span></p>
		<p><span class="quote">Understand yourself or others won't be able to.</span></p>
		<p><span class="quote">Sometimes, doing easy, mundane tasks is the only way to not feel like a failure.</span></p>
		<p><span class="quote">When you see the world differently, the world sees you differently.</span></p>
		<p><span class="quote">We all want to die, but it is when we die that we don't want.</span></p>
		<p><span class="quote">You always have the choice, but sometimes the choice you want takes so much effort that it's not worth choosing.</span></p>
		<p><span class="quote">If you don't hide the truth, you won't even have to think about it.</span></p>
		<p><span class="quote">We can't always get what we want, but we can always want what we get.</span></p>
		<p><span class="quote">Choose to ignore the issue, but listen before you do.</span></p>
		<p><span class="quote">Taking it as a sign, doesn't mean it's a sign.</span></p>
		<p><span class="quote">Sometimes the truth is there, but you choose to ignore it.</span></p>
		<p><span class="quote">The toilet and the shower. Best places to think.</span></p>
		<p><span class="quote">He wakes up smiling, I fall asleep smiling.</span></p>
		<p><span class="quote">Do you smile for the world or for yourself?</span></p>
		<p><span class="quote">Without the bad, there is no good.</span></p>
		<p><span class="quote">Treat others the way they treat you.</span></p>
	</div>
	<!-- END: Me -->

</div>


<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
