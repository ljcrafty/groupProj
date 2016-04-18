<?php 
	echo "<div id='feedback'></div>
	<form action='tut1.php' method='post' onsubmit='return false;'>
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
	<input type=\"submit\" name=\"submit\" value=\"Continue ->\"/ onclick='validateSingle();'>
</form>"
?>