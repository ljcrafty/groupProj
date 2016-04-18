<?php $title = "Topic 3: Metacharacters";
	require("head.php");?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
	<div class="content">
  	<p>
  		A metacharacter is a character followed by a backslash (\) that holds specific meaning 
		in the expression. Different characters affect the expression in different ways. 
		Some metacharacters can be used to reference the literal string of a symbol that 
		holds meaning in the program, like how two backslashes (\\) represents one backslash 
		as a literal string instead of making the next character a metacharacter. Others are 
		used to represent other specific aspects of a regular expression, like backslash s 
		(\s) which represents any whitespace character or backslash b (\b) which represents 
		a word boundary.
  	</p>
  	
  	<p>
  		Here are some examples...
  	</p>
  	<ul>
  		<li>
  			<strong>Example(1):</strong><br/>
			Regex: \[\d\]<br/>
			Result: <strong>[0] [1] [2] [3]</strong> [p] [o]
		</li>
		<li>
			<strong>Example(2):</strong><br/>
			Regex: \[\W\]<br/>
			Result: <strong>[-] [$] [@]</strong> [3] [p] [o] [1]
		</li>
  	</ul>
  	
  	<p>
  		Some common metacharacters are:
  	</p>
  	<table>
  		<tr>
  			<td>\.</td>
  			<td>Any periods</td>
  		</tr>
  		<tr>
  			<td>\w</td>
  			<td>Any letter or number</td>
  		</tr>
  		<tr>
  			<td>\W</td>
  			<td>Any non-alphanumeric character (not a letter or number)</td>
  		</tr>
  		<tr>
  			<td>\?, \., \\, \+, \*, \^, \$, \{, \}, \(, \), \[, \], \|, \/</td>
  			<td>Any occurrence of the symbol following the backslash (\) in the text</td>
  		</tr>
  		<tr>
  			<td>\s</td>
  			<td>Any whitespace character</td>
  		</tr>
  		<tr>
  			<td>\S</td>
  			<td>Any non-whitespace character</td>
  		</tr>
  		<tr>
  			<td>s\b or \bs</td>
  			<td>
  				Any s that is the last letter before a word ends; any s that is the first 
  				letter in a word
  			</td>
  		</tr>
  		<tr>
  			<td>s\B or \Bs</td>
  			<td>
  				Any s that is not the last letter in a word; any s that is not the first 
  				letter in a word
  			</td>
  		</tr>
  		<tr>
  			<td>\t</td>
  			<td>Tab characters</td>
  		</tr>
  		<tr>
  			<td>\n</td>
  			<td>New line characters</td>
  		</tr>
  		<tr>
  			<td>\r</td>
  			<td>Carriage return characters (return to the beginning of the line)</td>
  		</tr>
  		<tr>
  			<td>\v</td>
  			<td>Vertical tab characters</td>
  		</tr>
  		<tr>
  			<td>\0</td>
  			<td>Any null characters</td>
  		</tr>
  		<tr>
  			<td>\000</td>
  			<td>The character given by the octal number following the backslash (\)</td>
  		</tr>
  		<tr>
  			<td>\xFF</td>
  			<td>The character given by the hexadecimal number following the backslash (\)</td>
  		</tr>
  		<tr>
  			<td>\uFFFF</td>
  			<td>The character given by the unicode number following the backslash (\)</td>
  		</tr>
  	</table>
<script>var answer = '\(\d\d\d\)';</script>
<?php
	$matches[] = "(123)";
	$matches[] = "(456)";  
	$but_not = "(123456)";
	require("practice.php");	 
?>
</div>
<?php require("footer.php");?>