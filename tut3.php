<?php $title = "Topic 3: Metacharacters";
	require("head.php");?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->
	<div class = "container">
		<p>
			A metacharacter is a character followed by a backslash (<code>\</code>) that holds specific meaning 
			in the expression. Different characters affect the expression in different ways. 
			Some metacharacters can be used to reference the literal string of a symbol that 
			holds meaning in the program, like how two backslashes (<code>\\</code>) represents 
			one backslash as a literal string instead of making the next character a metacharacter. 
			Others are used to represent other specific aspects of a regular expression, like 
			backslash s (<code>\s</code>) which represents any whitespace character or backslash 
			b (<code>\b</code>) which represents a word boundary.
		</p>
  	</div>
	
	<div class = "container">
		<p>
			Here are some examples...
		</p>
			<?php
			$exs = Array(
						Array("\[\d\d\]", "<span class='select'>[01] [15] [39]</span> [2] [p] [o]"),
						Array("\(\W\)", "<span class='select'>(-) ($) (@)</span> [3] (p) {o} (1)")
						);
			require("ex.php");
		?>
  	</div>
	
	<div class = "container">	
		<p>
			Some common metacharacters are:
		</p>
		<table>
			<tr class="oddTable">
				<td class="firstTable"><code>\d</code></td>
				<td>Any digit</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\D</code></td>
				<td>Any non-digit</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\.</code></td>
				<td>Any periods</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\w</code></td>
				<td>Any letter or number</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\W</code></td>
				<td>Any non-alphanumeric character (not a letter or number)</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\?</code>, <code>\.</code>, 
					<code>\\</code>, <code>\+</code>, <code>\*</code>, 
					<code>\^</code>, <code>\$</code>, <code>\(</code>, 
					<code>\)</code>, <code>\[</code>, <code>\]</code>, 
					<code>\|</code>, <code>\ /</code></td>
				<td>Any occurrence of the symbol following the backslash (\) in the text</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\s</code></td>
				<td>Any whitespace character</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\S</code></td>
				<td>Any non-whitespace character</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\b</code></td>
				<td>
					Any character that is the first or last letter in a word (first character is shown 
					by <code>\b</code> before the expression and vice versa)
				</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\B</code></td>
				<td>
					Any character that is not the first or last letter in a word (first character is shown 
					by <code>\B</code> before the expression and vice versa)
				</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\t</code></td>
				<td>Tab characters</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\n</code></td>
				<td>New line characters</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\r</code></td>
				<td>Carriage return characters (return to the beginning of the line)</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\v</code></td>
				<td>Vertical tab characters</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\0</code></td>
				<td>Any null characters</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\000</code></td>
				<td>The character given by the octal number following the backslash (\)</td>
			</tr>
			<tr class="oddTable">
				<td class="firstTable"><code>\xFF</code></td>
				<td>The character given by the hexadecimal number following the backslash (\)</td>
			</tr>
			<tr>
				<td class="firstTable"><code>\uFFFF</code></td>
				<td>The character given by the unicode number following the backslash (\)</td>
			</tr>
		</table>
	</div>
	<p>
  		How about you try it?
  	</p>
<div class = "inner-container-practice">
<?php
	$matches[] = "(123)";
	$matches[] = "(456)";  
	$but_not = "(123456)";
	require("practice.php");	 
?>
</div>
</div>
<?php require("footer.php");?>