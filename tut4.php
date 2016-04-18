<?php $title = "Topic 4: Quantifiers";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
	<content>
		<div class = "content">
			<!--
			<div class = "second-menu">
				<ul>
					<li><a href = '#'>Topic 1</a></li>
					<li><a href = '#'>Topic 2</a></li>
					<li><a href = '#'>Topic 3</a></li>
					<li><a href = '#'>Topic 4</a></li>
					<li><a href = '#'>Topic 5</a></li>
					<li><a href = '#'>Topic 6</a></li>
					<li><a href = '#'>Topic 7</a></li>
					<li><a href = '#'>Topic 8</a></li>
				</ul>
			</div>
			-->
			
			<p>
				A quantifier changes how many times different parts of expressions are repeated. 
				If you want a few characters with the same specifications in a row, quantifiers 
				help you by making it so you don't have to re-type those specifications multiple 
				times. There are multiple ways to use quantifiers.
			<p>
			<p>
				The first is the basic quantifier using squiggly braces ({ }). If you put a number 
				inside of these braces after a piece of an expression, it will only search for 
				places that that set of specifications is met that specific number of times. For 
				example, "p\d{3}" would only select a p followed by three digits in a row, no more, 
				no less.
			<p>
			<ul>
				<li>
					<strong>Example(1):</strong>
					Regex: [0-9]{4}
					Result: 12  123  <strong>1234</strong>  <strong>1235</strong>6  789  <strong>7890</strong>
				</li>
			</ul>
			<p>
				The next quantifier is a range. This also uses squiggly braces, but inside of the 
				braces is two numbers separated by a comma. This notation allows you to create 
				expressions with more flexibility by allowing a range of repetitions to be selected. 
				For example, "\.{2, 4}" would select 2 periods in a row or up to 4 periods in a row.
			<p>
			<ul>
				<li>
					<strong>Example(2):</strong>
					Regex: \d{2,4}
					Result: 1  <strong>12</strong>  <strong>123</strong>  <strong>1234</strong>  
					<strong>1234</strong>5    <strong>1234|56</strong>
				</li>
			</ul>
			<p>
				Finally, there are two quantifiers that allow the most flexibility. The first is 
				not often used because it can cause an infinite error very easily. It is the star 
				(*), which represents that the previous character can be present zero or more times. 
				The second is the plus sign (+), which is used to signify expressions repeated one 
				or more times. So, "a\d*" would select "a" and "a1", but "a\d+" would only select "a1".
			</p>
<script>var answer = '\w{3,5}';</script>	
<?php
	$matches[] = "art";
	$matches[] = "pizza";  
	$but_not = "illustrate";
	require("practice.php");	 
?>
</div>
</content>
<?php require("footer.php");?>