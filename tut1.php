<?php $title = "Topic 1: Finding Simple Text";
	$head = "Finding Simple Text / Numbers";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
	<div class = "container">
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
			kangaroo. If you were using regular expressions, you could just type <code>kangaroo</code>
			and it would match every instance of the word in the whole book. Or, say you 
			want to teach the child to count up to ten. By searching <code>10</code>, it would match 
			every time "1" and "0" were next to each other in the text. White space characters 
			matter when you are making regular expressions. So, if you have spaces in your 
			expression, it will only match text with those same spaces.
		</p>
	</div>
	
	<div class = "container">
		<p>
			Here are a few examples...
		</p>
		
		<div class = "inner-container">
			<ul>
				<li>
					<strong>Example(1):</strong><br/>
					<strong>Regex:</strong> <code>Pop</code><br/>
					<strong>Result:</strong> Potato<span class="select">Pop Pop</span> abc<span class="select">Pop</span>
						def <span class="select">Pop</span>tart potato
				</li>
				<li>
					<strong>Example(2):</strong><br/>
					Regex: Potato&nbsp;Pop<br/>
					Result: PotatoPop Potatopop
				</li>
				<li>
					<strong>Example(3):</strong><br/>
					Regex: 123<br/>
					Result: abcd<span class="select">123</span>4
				</li>
			</ul>
		</div>
	</div>
	
	<div class = "container">
		<p>
			Now, what if you are looking for the Dr. Seuss book, "Hop on Pop"? You wouldn't 
			want to just look for "hop", or just for "pop". So, what you could do is use what's 
			called a wildcard. A wildcard lets you use any character in the space it occupies. 
			So, if you had the regex, <code>.op</code>, it would select both "hop" and "pop" 
			because the period (<code>.</code>) is a wildcard character.
		</p>
	</div>
	
	<div class = "container">
		<p>
			Here are some more examples...
		</p>
		
		<div class = "inner-container">
			<ul>
				<li>
					<strong>Example(4):</strong><br/>
					Regex: h.s<br/>
					Result: He <span class="select">has</span> a potato and <span class="select">his</span> potato is big.
				</li>
				<li>
					<strong>Example(5):</strong><br/>
					Regex: h..<br/>
					Result: <span class="select">He has</span> a potato and <span class="select">his</span> potato was big. 
					Because my potato was small, I cut <span class="select">his</span> potato in <span class="select">hal</span>f. 
					<span class="select">He</span> told <span class="select">his</span> mother that I cut 
					<span class="select">his</span> potato and I got in trouble.
				</li>
			</ul>
		</div>
	</div>
  	<p>
  		How about you try it?
  	</p>
<div class = "inner-container-practice">	
<?php
	$matches[] = "pot";
	$matches[] = "pop";  
	$but_not = "pan";
	require("practice.php");	 
?>
</div>
	</div>
<?php require("footer.php"); ?>