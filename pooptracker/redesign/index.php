<?php 
	//$base = "/home/a1257259/public_html"; // does not work locally 
	//$base = $_SERVER['DOCUMENT_ROOT']; 	// does not work with 000webhost 
	//$base = dirname(getcwd());				// go up one level
	$base = dirname(dirname(getcwd()));		// go up two levels 
	$path_top = $base."/template/template-top.php";
	$path_bottom = $base."/template/template-bottom.php";

	/////////////////////////////////////////
	$title = 'PoopTracker Redesign'; 
	/////////////////////////////////////////
?>

<?php include($path_top); ?>
<!-- Template: Top -->

<!-- START: BODY-->
<?php /***************************** CUSTOM PAGE HTML BEGINS HERE ***************************************/ ?>

<div id="pooptracker-redesign-main">
<p>I am redesigning and rewriting PoopTracker. It is February 4, 2017 and my goal is to release it to the public before May 2017. I will update my progress on this page to document the design and development process, and also to motivate me. I was supposed to begin during the holidays in December 2016, but I was too lazy. This time I cannot be lazy. The fate of my future and everyone's pooping depends on it. WE'VE GOT 3 MONTHS TO SAVE THE WORLD. </p>

<h2>The Day-to-Day</h2>
<ul>
	<li>2017-04-21: ViewController for editing the startDate, endDate, and duration. Learning how to send data between ViewControllers. Also, did not know you could basically scrap any changes you made to a Core Data object by refreshing the it with mergeChanges set to false. I thought I was going to have to declare 10 variables to hold temporary changes and then save them when final. Neat stuff.</li>
	<li>2017-04-19: UITableViewAutomaticDimension!!! Discovered this beautiful thing. Autolayout for table cells. So easy, so dynamic. Put a textview in a table cell. It looks ugly, but I can always change it later. </li>
	<li>2017-04-18: Trying to make a custom slider. Will have icons and ticks and whatnot. I know I can do it, just need to do all that math calculating where to draw things.</li>
	<li>2017-04-16: It's the final stretch, 2 weeks to finish this. Most likely will not be able to finish by projected date. It took time to really get into programming as a hobby. But now I'm in it for the long haul. I can code all day. It's become easier than writing English. Way easier than writing essays. Anything is easier than writing essays. Started off with the Date cell in the EditViewController. Programmatic constraints are SO MUCH easier than using the Interface Builder. It's like how writing HTML/CSS is easier than formatting rich text. You write the skeleton of exactly what you want. I also settled on a cell design fairly quickly. Also managed to get a table cell you could tap to open up a picker. </li>
	<li>2017-04-11: Foods, Tags model. Really easy to implement these as I just need to copy the Colour model.</li>
	<li>2017-04-10: Can request current location, can add new locations, manage locations, etc. Not entirely complete.</li>
	<li>2017-04-04-07: Implementing location. Almost done. </li>
	<li>2017-04-03: Having fun with CLLocation. Planning on adding some cool features with location. The ultimate goal is to be like "hey, you pooping?" when they enter the bathroom. Not sure how accurate it will be. I'm coining the term "Poostop." If we're thinking as big as social media, imagine when you go take a dump in a public bathroom, open the app, it shows you who has pooped at this Poostop, who is the champion at this Poostop, how many poops have been made at this Poostop, etc.. Thinking smaller, you would be able to share Poostops and be like "I've had 10 poops here and I give it 5 stars." Ratings and reviews!</li>
	<li>2017-04-02: Finishing up some view controllers for editing/selecting. Lists of things will have an index (user's preference for its list position) and, if necessary, an id (for stuff like dictionary keys). </li>
	<li>2017-04-01: So it turns out that you can't just use an NSManagedObject subclass as a Dictionary key! Was stuck on that for a while because I was debugging on the bus without Wi-Fi.</li>
	<li>2017-03-27: Getting those managers down. Gotta think about all of the use cases. Will start UI implementation soon so I can get a clearer idea of use cases.</li>
	<li>2017-03-26: A bit behind schedule because I'm a lazy potato. Having doubts about my core data model... scared that everything is just gonna crash and burn. </li>
	<li><a href="#PTR-2017-03-18">2017-03-18</a>: It is really easy to not do something. Partially have Characteristic Manager working. Some features just haven't been implemented yet.</li>
	<li><a href="#PTR-2017-03-12">2017-03-12</a>: App Icon</li>
	<li><a href="#PTR-2017-03-11">2017-03-10,11</a>: Adding colours and assigning them to poop entries is now possible. I've made basic controllers to test functionality. </li>
	<li>2017-03-09: Looks like I'll need base view controllers to subclass as I will have multiple view controllers that are about the same (selection lists, etc.).</li>
	<li>2017-03-08: Started the colour manager. Looked into colour pickers. Might want to write my own so I'll leave that for later. For now will just work with setting rgb values. Thinking about getting the colour from an image, but it doesn't seem practical. Even if you manage to not drop your device in the toilet, the lighting will always be different so it won't capture different shades correctly. Maybe if poop colours had greater range it would be feasible. </li>
	<li>2017-03-07: Able to add and edit entries using EditViewController. PoopType is selectable.</li>
	<li>2017-03-06: EditViewController is coming along. Coding on the bus is mighty fun!</li>
	<li><a href="#PTR-2017-03-05">2017-03-05</a>: Productive 2 hours. Created a basic ViewController with a table for testing view controllers. Got the entry list working with minimal functionality. Basic LogViewController just to get things rolling.</li>
	<li><a href="#PTR-2017-03-04">2017-03-04</a>: Initial Core Data context management setup. Found out that AppDelegate now sets up everything now! Looks like March will be all about getting the model to work as planned. All UI will probably be done in April once the foundation is set. Also, I made a plan.</li>
	<li>2017-02-19: Core Data model version 1 complete. Started implementing the poop entry list. More complicated than I thought as I need to account for accessing entries by years, months, days, etc. There is a lot to account for. Need to take each part step by step so I don't overwhelm myself and procrastinate.</li>
	<li>2017-02-11: Paper programming. Wrote up the basic classes I'll need and their properties.</li>
	<li><a href="#PTR-2017-02-05">2017-02-05</a>: Did some brainstorming and writing down of ideas that have been in my head. Summarizing everything I want this app to be.</li>
	<li>2017-02-04: <em>The promise to complete this app.</em> <br>Previously I had some of the data architecture mapped out. Will have to rethink some things and develop each component as isolated as possible in case some of it needs to be reworked.</li>
</ul>

<h2>The PoopTracker Method</h2>
<p>I'll be documenting the a detailed account of creating PoopTracker here. One day I'll look back at this and either go "man, I was a genius" or "man, I was so bad at this."</p>

<h3 id="PTR-2017-02-05">2017-02-05: Jotting</h3>
<p>Did some big picture brainstorming. Wrote down the goals of the app, what it should do, how it should do it, etc. <br>(Says 2016 on the pages because I am clearly living in the past.)</p>
<?php 
	linked_image("/images/pooptracker/redesign/pooptracker_20170205_brainstorm_01.JPG"); 
	linked_image("/images/pooptracker/redesign/pooptracker_20170205_brainstorm_02.JPG"); 
	linked_image("/images/pooptracker/redesign/pooptracker_20170205_brainstorm_03.JPG"); 
?>

<h3 id="PTR-2017-03-04">2017-03-04: Scheduling</h3>
<p>It's been a month and I haven't really done much. It's hard to bring myself to do something when I don't even know what I'm going to do next. I guess living in the moment has its drawbacks. I made a to-do list <strong>with due dates</strong> that I will update as I go. Making goals and <strong><em>writing them down</em></strong> is the only way I can get things done on my own. This is more than a promise, it's a plan! Self-motivation is hard. The only thing that motivates me is checking things off. Life is so difficult, but to-do lists breaking things up can make it <em>seem</em> easier :). We can do this <a href="https://www.youtube.com/watch?v=rIkYgTRnrO8">Step by Step~</a></p>
<?php 
	linked_image("/images/pooptracker/redesign/pooptracker_20170304_plan.png"); 
?>

<h3 id="PTR-2017-03-05">2017-03-05: Core Data</h3>
<p>So I realized that Core Data has gotten easier since I last used it. AppDelegate seems to set up all the contexts and coordinators for you and you just have to get the context from it to fetch/save data. I also had no idea that relationships were so easy. For example, if you have a one-to-many relationship from A to B, you just have to set B for A and A will automatically be added into B. And if you removed A from B, then A's value for B will become nil! Pretty neat that Core Data handles everything for you.</p>
<p>I was able to get the basic gist of how things will be implemented in just 2 hours. What I have right now is pretty ugly. To fully implement everything, I'll need a way to test things as I implement them, so I can't entirely hold off on the UI!</p>
<p>It's always surprising how easy things are once you actually do it. It's not that I can't do this, it's that I fear I might fail. The only way to overcome the fear of failing is to succeed. It's kind of a paradox. Fear of failure prevents me from attempting to succeed, success is the only way to overcome fear of failure. </p>
<p>I was able to fully check off everything of my to-do list for the day! Hopefully I will keep this up.</p>
<?php 
	linked_image("/images/pooptracker/redesign/pooptracker_20170305_log.png");
?>

<h3 id="PTR-2017-03-11">2017-03-11: Colours</h3>
<p>Finished the colour manager late. Was supposed to finish during the weekday (March 6-10), but I finished on the 11th! Still an improvement to finish only 1 day late.</p>
<p>It's still only the basic implementation. I encountered issues with saving UIColor to Core Data because it has to either be binary data or transformable. I chose to make it transformable and implement the NSCoding protocol.</p>
<p>I decided to make the name of the colour non-optional to lessen the amount of optional-checking needed. It would default to &quot;Colour X&quot; or something.</p>
<p>I made some controllers just to test functionality and visualize the data being manipulated. I'm leaving UI for later so that's why it looks hideous. You can't even cancel or delete. For now, I don't need to because I'm really coding the skeleton of this. I know that adding works, so I will assume that deleting works as well. Since I don't have a clear vision of how everything will be implemented, I'm just getting a fraction of each part done just so I have a clearer idea of how things will play out. It's like I have to build 100 different things, so I'm building the most difficult 50% of each one of the 100 and then going back to each one and finishing off the rest. Once you learn how to get part of something done, it gets easier for the rest. That's my approach to completing this app. Also, I find that the hardest part of accomplishing something is starting it. If I start everything, the hard part is done! On the other hand, I also find finishing things hard because I'm like, "Oh, it's so easy, I don't need to do it." That won't happen here because publishing an app is no easy feat.</p>
<p>I've realized that my initializer knowledge is not great. Will need to read up on them.</p> 
<p>Next up: Characteristics! I think this will be a lot more difficult. Colour Manager took about 4 hours over the span of 4 days (wow, didn't realize how little time I spent). I've reserved the weekend (now) and the rest of next week for it.</p>

<?php 
	linked_image("/images/pooptracker/redesign/pooptracker_20170311_01_ViewController.png");
	linked_image("/images/pooptracker/redesign/pooptracker_20170311_02_Log.png");
	linked_image("/images/pooptracker/redesign/pooptracker_20170311_03_Edit.png");
	linked_image("/images/pooptracker/redesign/pooptracker_20170311_04_SelectColour.png");
	linked_image("/images/pooptracker/redesign/pooptracker_20170311_05_AddColour.png");
?>

<h3 id="PTR-2017-03-12">2017-03-12: App Icon</h3>
<p>Temporary(?) app icon because I was sick of seeing that weird skeleton of an app icon.</p>

<?php 
	linked_image("/images/pooptracker/redesign/pooptracker_20170312_appicon.png");
?>

<h3 id="PTR-2017-03-18">2017-03-18: Characteristics</h3>
<p>I had a lot of free time this week, but I wasted it all doing nothing. I had planned on getting characteristics done during the week, but ended up doing it today instead. I encountered an issue where I didn't know how I should set up my model earlier in the week, causing me to think about it for days.</p>
<p>So there is a dynamic list of characteristics. Each entry would give a rating of 0-100 for each characteristic (0 signifying N/A). To make it more complicated, but more user-friendly, I introduce characteristic levels. Each level is basically a grouping of a range of rating values. Example: for an &quot;Amount&quot; characteristic, you may have the levels: &quot;None&quot;, &quot;Little&quot(1-33);, &quot;Regular&quot;(34-66), &quot;Lots&quot;(67-100). <br>Now, the question is: should each level keep track of entries belonging to its range? Entries have no direct link to characteristic levels, they already have the characteristic rating. Since the characteristics are dynamic, I can't set up a relationship there. Or can I? In the entry entity, I would have characteristics, which is a dictionary of CharacteristicRating structs (containing rating and level). How would I get it so that setting the level will add it to the level's entries? Even so, that's just making the reference without manually doing so. <br>The real issue is when you edit the level ranges. Say you change it to be &quot;Little&quot;(1-40), &quot;Regular&quot;(41,78), &quot;Big&quot;(79-100) for whatever reason. The levels' references to the entries become invalid and if the entries had references to the levels, they too would become invalid. If an entry had a characteristic rating of 35, it now moves from &quot;Regular&quot; to &quot;Little&quot;. What would need to happen every time the levels change is that the entries would need to be sorted into the correct level again. If the entry had a reference to the level, then the entries would need to be looped through and modified as needed (so there answers my questioning of whether I should reference it in the entry or not).<br>If we don't keep track of the entries in each level, then getting entries based on levels would take more work. <br>So the verdict is: yes, we keep track of entries in each level. Why? Because editing the level ranges is unlikely, but accessing entries by level isn't.<br> Coming to this verdict involved me going through every case. I had the same verdict before I went through all of this thinking, but I really wanted to see if I could come up with a better solution that involved no references. But it turns out, nope, I was right all along.</p>
<p>After my lazy thinking days, I was able to implement most of the Characteristic Manager! Went smoother than expected because I got all of that thinking out of the way. Still have to do some stuff, but I know the setup now and can add that stuff later. (I only have the ability to add/delete characteristics, and set the level ranges without keeping entry references and without attempting to keep current levels.)</p>
<p>Next comes refactoring and fully completing everything I've started with the models and managers. After that, I'll implement the food, tags, and location components.</p>

<?php 
	linked_image("/images/pooptracker/redesign/pooptracker_20170318_characteristics.png");
?>


</div>

<?php /***************************** CUSTOM PAGE HTML ENDS HERE *****************************************/ ?>
<!-- END: BODY -->

<!-- Template: Bottom -->
<?php include($path_bottom); ?>
