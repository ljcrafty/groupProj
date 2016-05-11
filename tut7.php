<?php $title = "Topic 7: Look Around";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/5/16-->
	<div class = "container">
		<p>
			Now, what if you want to get a specific part of the text, but the only way to 
			identify it is by what's around the text you need? Well, that's what look around 
			is for. Without look around, you would have to get every applicable match and sift 
			through them, possibly by hand, or include what you know is around the text in the 
			expression and remove that from every match.
		</p>
		<p>
			Look around to the rescue! Look around lets you specify what should come immediately 
			before or after the text you're matching, without matching that text. Look ahead, 
			as it sounds, matches based on what is immediately after the matched text in the 
			original document. Look behind does the opposite, though it is not available in 
			JavaScript. The syntax for look ahead is <code>(?= x)</code> where x is the expression 
			that you expect after the match. So, <code>\d(?= px)</code> would select the 1 
			from "1px", but not from "1 pop". Look behind syntax is <code>(?&lt;= x)</code> where x is 
			the expression you expect before the match.
		</p>
		<p>
			There is also a negation of the two look around commands called negative look ahead 
			and negative look behind. These are just like look ahead and look behind, except that 
			they accept only matches that do not have the given expression before/after them. 
			Negative look around syntax is just like normal look around syntax with a less-than 
			sign (&lt;) instead of the equals sign (<code>=</code>). So, <code>\w(?&lt;! ab)</code> would 
			select the "c" in "cab", but not the second "b" in "abby".
		</p>
	</div>
	
	<div class = "container">
		<div class = "inner-container">
			<ul>
				<li>
					<strong>Example(1):</strong><br/>
					Regex: <code>.+(?=:)</code><br/>
					Result: <span class="select">http</span>://www.potatopop.com   
						<span class="select">https</span>://www.google.com
				</li>
				<li>
					<strong>Example(2):</strong><br/>
					Regex: .+(?=dollar)<br/>
					Result: <span class="select">100</span>dollar   <span class="select">200</span>dollar  
						<span class="select">pi</span>dollar
				</li>
				<li>
					<strong>Example(3):</strong><br/>
					Regex: (?&lt;=\@)[0-9.]+<br/>
					Result: @<span class="select">123</span>   @<span class="select">567</span>
						@<span class="select">888</span>
				</li>
			</ul>
		</div>
	</div>
	<p>
  		How about you try it?
  	</p>
<div class = "inner-container-practice">
<?php
	$matches[] = '"1200" from "1200px"';
	$matches[] = '"87" from "87px"';  
	$but_not = "87";
	require("practice.php");	 
?>
</div>
</div>
<?php require("footer.php");?>