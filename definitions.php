<?php
	require("../db_conn.php");
	$link = new mysqli($db_host, $db_user, $db_pass, $db_name);
	
	if(!$link)
	{
		$error = "Error:" . mysqli.connect_error;
	}
	else 
	{
		$headers = apache_response_headers();
		$topic_num = $_GET["topic"];
		
		$query = "SELECT * FROM dictionary WHERE type = '" . $topic_num . 
			"' OR type = '" . ($topic_num + 1) . "' ORDER BY type, id";	
		$response = mysqli_query($link, $query);
		$rows = mysqli_affected_rows($link);
		
		if($rows > 0 && $response)//there are rows to display
		{
			while($row = mysqli_fetch_assoc($response))
			{
				echo "<div class='def'><p class='term'>" . $row["name"] . 
					"</p><p class='definition'>" . $row["definition"] . "</p></div>";
			}
		}
		
		header("topic", $topic_num);
	}
?>