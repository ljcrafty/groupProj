<?php $title = "Topic 2: Character Sets";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
	<div class="content">
  	<p>
  		Now, our example from the last topic, "Hop on Pop", would also select words like 
		"mop" or "top", which we don't want. Luckily, there is something called a 
		character set that would fix this problem for us. A character set allows you to 
		define a specific set of characters that you want to be filled into a space in an 
		expression. Character sets are denoted by square brackets ([ ]). To fit our 
		example, we could use the expression "[hp]op". This would select every "hop" 
		and every "pop", but no other words that end in "op". 
  	</p>
  	<p>
  		Another way to use character sets is with a range of values. So, say you are 
		looking for any capital letters in a piece of text. You could use the expression 
		"[A-Z]" to signify this search.
  	</p>
  	<p>
  		The final use of character sets is to specify which characters to exclude from the 
		search. This is represented with the hat (^) symbol inside of the square brackets. 
		So, if you want any characters other than vowels, you could use the expression 
		"[^aeiou]".
  	</p>
  	
  	<ul>
  		<li>
  			<strong>Example(1):</strong><br/>
			Regex: p[oa]<br/>
			Result: <strong>po</strong>tato, <strong>po</strong>p, <strong>pa</strong>n, 
			<strong>pa</strong>ce, pink, <strong>po</strong>land, prepare
		</li>
		<li>
			<strong>Example(2):</strong><br/>
			Regex: ...[0123456789]<br/>
			Result: pop, <strong>pop0</strong>, <strong>pop1</strong>, <strong>pop2</strong>, 
			popcorn, <strong>pop4</strong>
		</li>
		<li>
			<strong>Example(3):</strong>
			Regex: ...[0-9]
			Result: pop, <strong>pop0</strong>, <strong>pop1</strong>, <strong>pop2</strong>, 
			popcorn, <strong>pop4</strong>
		</li>
	</ul>
<script>var answer = '[hs]andle';</script>
<?php
	$matches[] = "handle";
	$matches[] = "sandle";  
	$but_not = "candle";
	require("practice.php");	 
?>
</div>
<?php require("footer.php");?>