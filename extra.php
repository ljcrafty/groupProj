<?php $title = "Extra Help";
	require("head.php");?> 
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
  	<ul>
  		<li>
  			<strong>Infinite Error:</strong> The Infinite error occurs when the expression 
  			you use can match an empty string, so it matches the text infinitely. Since 
  			every string can be split into an infinite amount of empty strings along with 
  			the splits of the actual string, if an expression can match the empty string, 
  			it would never stop matching the empty string. If you have this error, make sure 
  			that there aren’t any places where your matched string could actually be nothing. 
  			For example, the expression “\d*” would have an infinite error because it can 
  			match no digits as well as any number of digits.
  		</li>
  		<li>
  			<strong>Timeout Error:</strong> The Timeout error occurs when an expression 
  			takes too long to execute. If you have too many nested quantifiers or too complex 
  			of an expression, it will take a while to execute. If it takes long enough, the 
  			machine will cut the process short and return this error. If this happens, you 
  			can split your expression into multiple lines to shorten the process. So, if you 
  			have nested quantifiers, you could get the list returned from the innermost 
  			quantifier and then apply the next search to that list.
  		</li>
  	</ul>
  	
  	<h2>Other Sources</h2>
  	<ul>
  		<li>
  			<a href="http://regexr.com/">Regexr.com</a> has a very good interface for more 
  			practice with regular expressions.
  		</li>
  		<li>
  			<a href="http://regexone.com/lesson/introduction_abcs">Regexone.com</a> gives 
  			great explanations in another way that might make more sense to you.
  		</li>
  		<li>
  			<a href="http://www.zytrax.com/tech/web/regex.htm">Zytrax.com</a> has some more 
  			technical details that might answer your questions if you need more in-depth help.
  		</li>
  	</ul>
  </div>
<?php require("footer.php");?>