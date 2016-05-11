<?php $title = "Topic 2: Character Sets";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
	<div class = "container">
		<p>
			Now, our example from the last topic, <code>Hop on Pop</code>, would also 
			select words like "mop" or "top", which we don't want. Luckily, there is 
			something called a character set that would fix this problem for us. A 
			character set allows you to define a specific set of characters that 
			you want to be filled into a space in an expression. Character sets are 
			denoted by square brackets (<code>[ ]</code>). To fit our example, we could use the 
			expression <code>[hp]op</code>. This would select every "hop" and every "pop", 
			but no other words that end in "op". 
		</p>
		<p>
			Another way to use character sets is with a range of values. So, say you are 
			looking for any capital letters in a piece of text. You could use the expression 
			<code>[A-Z]</code> to signify this search.
		</p>
		<p>
			The final use of character sets is to specify which characters to exclude from the 
			search. This is represented with the hat (<code>^</code>) symbol inside of the square brackets. 
			So, if you want any characters other than vowels, you could use the expression 
			<code>[^aeiou]</code>.
		</p>
	</div>
	
  	<?php
			$exs = Array(
						Array("p[oa]", "<span class='select'>po</span>tato, <span class='select'>po</span>p, 
							<span class='select'>pa</span>n, <span class='select'>pa</span>ce, pink, 
							<span class='select'>po</span>land, prepare"
							),
						Array("...[0123456789]", "pop, <span class='select'>pop0</span>, <span class='select'>pop1</span>,
						 	<span class='select'>pop2</span>, popcorn, <span class='select'>pop4</span>"
							),
						Array("...[0-9]", "pop, <span class='select'>pop0</span>, <span class='select'>pop1</span>, 
							<span class='select'>pop2</span>, popcorn, <span class='select'>pop4</span>"
							)
						);
			require("ex.php");
		?>
	<p>
  		How about you try it?
  	</p>
<div class = "inner-container-practice">
<?php
	$matches[] = "handle";
	$matches[] = "sandle";  
	$but_not = "candle";
	require("practice.php");	 
?>
</div>
</div>
<?php require("footer.php");?>