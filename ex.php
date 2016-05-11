<?php
	echo"<div class='inner-container'>
		<ul>";
	
	for($i = 0; $i < count($exs); $i++)
	{
		echo "<li><strong>Example(" . ($i + 1) . "):</strong><br/>
			<strong>Regex:</strong> <code>" . $exs[$i][0] . 
			"</code><br/>
			<strong>Result:</strong> " . $exs[$i][1] .
			"</li>";
	}
	
	echo"<ul>
	</div>";
?>