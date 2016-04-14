<?php $title = "Topic 7: Look Around";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/5/16-->
	<div class="content">
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
		JavaScript. The syntax for look ahead is parentheses (( )), a question mark (?), an 
		equals sign (=), and then the expression that you expect after the match. Look behind 
		syntax is parentheses (( )), a question mark (?), an exclamation mark (!), and then 
		the expression you expect before the match. So, "\d(?= px)" would select the "1" 
		from "1px", but not from "1 pop". For example, "t(?!a)" will match the t in potato 
		that is not followed by the a.
	</p>
	<p>
		There is also a negation of the two look around commands called negative look ahead 
		and negative look behind. These are just like look ahead and look behind, except that 
		they accept only matches that do not have the given expression before/after them. 
		Negative look around syntax is just like normal look around syntax with a less-than 
		sign (<) after the question mark (?). So, "\w(?<! ab)" would select the "c" in "cab", 
		but not the "b" in "abby".
	</p>
	<ul>
		<li>
			<strong>Example(1) look ahead:</strong><br/>
			Regex: .+(?=:)<br/>
			Result: <strong>http</strong>://www.potatopop.com   
			<strong>https</strong>://www.google.com
		</li>
		<li>
			<strong>Example(2) look ahead:</strong><br/>
			Regex: .+(?=dollar)<br/>
			Result: <strong>100</strong>dollar   <strong>200</strong>dollar  
			<strong>pi</strong>dollar
		</li>
		<li>
			<strong>Example(3) look behind:</strong><br/>
			Regex: (?<=\@)[0-9.]+<br/>
			Result: @<strong>123</strong>   @<strong>567</strong>   @<strong>888</strong>
		</li>
	</ul>
<?php
	$matches[] = '"1200" from "1200px"';
	$matches[] = '"87" from "87px"';  
	$but_not = "87";
	$answer = "\d+(?=px)";
	require("practice.php");	 
?>
</div>
<?php require("footer.php");?>