<?php 
	echo "<form action= 'practic.php' method='post'>
  	<p>Find an expression that ".($captures ? "captures:" : "matches:")."</p>
	<ul>
		<li>$matches[0]</li>
		<li>$matches[1]</li>
	</ul>".
	($but_not ? "<p>But not:</p>
	<ul>
		<li>$but_not</li>
	</ul>": '')."
	<input type='text' size='30' />
	<input type='submit'/>
</form>"
?>