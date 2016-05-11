<?php $title = "Topic 4: Quantifiers";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
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
			<div class = "container">
				<p>
					A quantifier changes how many times different parts of expressions are repeated. 
					If you want a few characters with the same specifications in a row, quantifiers 
					help you by making it so you don't have to re-type those specifications multiple 
					times. There are multiple ways to use quantifiers.
				<p>
				<p>
					The first is the basic quantifier using squiggly braces (<code>{ }</code>). If you put 
					a number inside of these braces after a piece of an expression, it will only search for 
					places that that set of specifications is met that specific number of times. For 
					example, <code>p\d{3}</code> would only select a p followed by three digits in a 
					row, no more, no less.
				<p>
			</div>
			
			<div class = "container">
				<div class = "inner-container">
					<ul>
						<li>
							<strong>Example(1):</strong><br/>
							Regex: [0-9]{4}<br/>
							Result: 12  123  <span class="select">1234</span>  <span class="select">1235</span>
								6  789  <span class="select">7890</span>
						</li>
					</ul>
				</div>
			</div>
			
			<div class = "container">
				<p>
					The next quantifier is a range. This also uses squiggly braces, but inside of the 
					braces is two numbers separated by a comma. This notation allows you to create 
					expressions with more flexibility by allowing a range of repetitions to be selected. 
					For example, <code>\.{2, 4}</code> would select between 2 and 4 periods in a row.
				<p>
			</div>
			
			<div class = "container">
				<div class = "inner-container">
					<ul>
						<li>
							<strong>Example(2):</strong><br/>
							Regex: \d{2,4}<br/>
							Result: 1  <span class="select">12</span>  <span class="select">123</span>  
								<span class="select">1234</span>  <span class="select">1234</span>5    
								<span class="select">1234|56</span>
						</li>
					</ul>
				</div>
			</div>
			
			<div class = "container">
				<p>
					Finally, there are two quantifiers that allow the most flexibility. The first is 
					not often used because it can cause an infinite error very easily. It is the star 
					(<code>*</code>), which represents that the previous character can be present zero or more times. 
					The second is the plus sign (<code>+</code>), which is used to signify expressions repeated one 
					or more times. So, <code>a\d*</code> would select "a" and "a1", but <code>a\d+</code> 
					would only select "a1".
				</p>
			</div>
	<p>
  		How about you try it?
  	</p>
<div class = "inner-container-practice">
<?php
	$matches[] = "art";
	$matches[] = "pizza";  
	$but_not = "illustrate";
	require("practice.php");	 
?>
</div>
</div>
<?php require("footer.php");?>