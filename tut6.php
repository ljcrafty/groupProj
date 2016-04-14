<?php $title = "Topic 6: Backferences";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/5/16-->
	<div class="content">
	<p>
		Once you know how to use sub-expressions and make captures, one of the questions 
		you are probably having is why? Well, sub-expressions can be useful if you want to 
		have multiple outputs from the same expression, but other than that, they can be 
		useful so that you don't have to retype parts of the expression. If you want to 
		reuse parts of the expression, you can make a capture of it and then use what is 
		called back references.
	</p>
	<p>
		Back references allow you to reference code that you had written earlier in an 
		expression. This means that if you want to have the same few letters multiple places 
		in the match, you can specify that. The syntax for back referencing is very simple. 
		If you want to back reference the first capture in the expression, you use backslash 
		(\) 1. So, "(she) sold \1lls" would match "she sold shells".
	</p>
	
	<ul>
		<li>
			<strong>Example(1):</strong><br/>
			Regex: \b([a-z]+)\1\b<br/>
			Result: <strong>popo</strong> potato pop
		</li>
		<li>
			<strong>Example(2):</strong><br/>
			Regex: &lt;h([1-4])&gt;.*?&lt;\/h\1&gt;<br/>
			Result: <strong>&lt;h1&gt;Potato&lt;/h1&gt;</strong>   
			<strong>&lt;h2&gt;Potato&lt;/h2&gt;</strong>   &lt;h3&gt;Potato&lt;/h1&gt;
		</li>
	</ul>
	
	<h2>Some Notes when using Backreferences</h2>
	<ul>
		<li>
			The regex engine only temporarily stores backreferences.  New matches saved in the 
			backreference overwrite old matches.  For example, if we used the expressions "([a-z]+)" 
			and "([a-z])+", and we're trying to match "pop", the first expression stores "pop", 
			but the second stores only the last "p", because it repeats three times, storing "p", 
			"o", and "p" in order, overwriting the previous value as it moves forward.
		</li>
		<li>Backreferences can not be used inside character classes.</li>
	</ul>
<?php
	$matches[] = "get set";
	$matches[] = "let jet";  
	$but_not = "get";
	$answer = "\w(et) \w\1";
	require("practice.php");	 
?>
</div>
<?php require("footer.php");