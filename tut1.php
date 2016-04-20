<?php $title = "Topic 1: Finding Simple Text";
	$head = "Finding Simple Text / Numbers";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
  	<p>
  		Regular expressions can look pretty complicated if you're just starting out, but 
		don't let yourself be scared off! In this tutorial we'll start with the most basic
  		regular expressions and raise the bar a little with every page. This way, you'll be
		able to ease into it rather than get overwhelmed.
  	</p>
  	<p>
  		First thing's first. What do regular expressions do? A regular expression helps
		you to find specific text in a whole body of text, like a glorified Ctrl+F or search
		bar. So, that is the first thing we will learn to make regular expressions, or
		regexes do: find average text.
  	</p>
  	<p>
  		Say you are looking through a book you plan on giving to a child. You want to 
		see if the book has any information about the child's favorite animal: the 
		kangaroo. If you were using regular expressions, you could just type "kangaroo" 
		and it would match every instance of the word in the whole book. Or, say you 
		want to teach the child to count up to ten. By searching "10", it would match 
		every time "1" and "0" were next to each other in the text. White space characters 
		matter when you are making regular expressions. So, if you have spaces in your 
		expression, it will only match text with those same spaces.
  	</p>
  	<p>
  		Here are a few examples...
  	</p>
  	<ul>
  		<li>
  			<strong>Example(1):</strong><br/>
	  		Regex: Pop<br/>
  			Result: Potato<strong>Pop Pop</strong> abc<strong>Pop</strong>def <strong>Pop
  			</strong>tart potato
  		</li>
		<li>
			<strong>Example(2):</strong><br/>
			Regex: Potato&nbsp;Pop<br/>
			Result: PotatoPop Potatopop
		</li>
		<li>
			<strong>Example(3):</strong><br/>
			Regex: 123<br/>
			Result: abcd<strong>123</strong>4
		</li>
  	</ul>
  	
  	<p>
  		Now, what if you are looking for the Dr. Seuss book, "Hop on Pop"? You wouldn't 
		want to just look for "hop", or just for "pop". So, what you could do is use what's 
		called a wildcard. A wildcard lets you use any character in the space it occupies. 
		So, if you had the regex, ".op", it would select both "hop" and "pop" because the 
		period (.) is a wildcard character.
  	</p>
  	<p>
  		Here are some more examples...
  	</p>
  	<ul>
  		<li>
  			<strong>Example(4):</strong><br/>
			Regex: h.s<br/>
			Result: He <strong>has</strong> a potato and <strong>his</strong> potato is big.
		</li>
		<li>
			<strong>Example(5):</strong><br/>
			Regex: h..<br/>
			Result: <strong>He has</strong> a potato and <strong>his</strong> potato was big. 
			Because my potato was small, I cut <strong>his</strong> potato in <strong>hal</strong>f. 
			<strong>He</strong> told <strong>his</strong> mother that I cut <strong>his</strong> 
			potato and I got in trouble.
		</li>
  	</ul>
  	
  	<p>
  		How about you try it?
  	</p>
<?php
	$matches[] = "pot";
	$matches[] = "pop";  
	$but_not = "pan";
	require("practice.php");	 
?>
	</div>
<?php require("footer.php"); ?>