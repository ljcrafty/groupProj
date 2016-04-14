<?php $title = "Topic 5: Sub-Expressions";
	require("head.php"); ?>
	<!-- Lauren Johnston: set up basic html and php includes 4/5/16-->
	<div class="content">
	<p>
		A sub-expression is a fairly simple concept. Pretty much, sub-expressions group 
		expressions into smaller sections and also "mark" or "capture" sections for later 
		use. Marking a sub-expression allows you to output multiple things with the same 
		expression. So, if you wanted to output the full date and just the day of the 
		month, you would be able to in one expression instead of two. Marked sub-expressions 
		are also called captures because they capture the part of the expression in between 
		the parentheses (( )) that mark them.      
	</p>
	<ul>
		<li>
			<strong>Example(1):</strong><br/>
			Regex: (pop)py<br/>
			Would capture: <strong>pop</strong> 
		</li>
	</ul>
	<p>
		If you want to group an expression without capturing it, you can use un-marked 
		sub-expressions. These are useful to repeat parts of expressions that are complex 
		or multi-character. So, in this case, you can use unmarked sub-expressions, denoted 
		by parentheses (( )), a question mark (?), a colon (:), and then the expression 
		you want to group without marking.
	</p>
	<ul>
		<li>
			<strong>Example(2):</strong><br/>
			Regex: (?:pop)py<br/>
			Would capture: nothing  
		</li>
	</ul>
<?php
	$captures = true;
	$matches[] = "1987";
	$matches[] = "2005";
	$answer = "(\d{4})";
	require("practice.php");	 
?>
</div>
<?php require("footer.php");?>