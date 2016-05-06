<?php $title = "Introduction";
	$head = "Frequently Asked Questions";
	require("head.php"); 

	require("../db_conn.php");
	$link = new mysqli($db_host, $db_user, $db_pass, $db_name);
	
	//check for connection errors
	if(!$link)
	{
		echo "Connection error:" . mysqli_connection_error();
		die();
	}
	
	//if new info to add to db
	if(!empty($_POST))
	{
		//sanitize data
		$name = mysqli_escape_characters($link, trim(htmlentities($_POST["name"])));
		$comment = mysqli_escape_characters($link, trim(htmlentities($_POST["comment"])));
		
		//validate data
		if($name && $comment)
		{
			//create query
			$query = "INSERT INTO stories
				SET name = '$name',
					comment = '$comment'";
			
			//send query		
			$response = mysqli_query($link, $query);
			$rows = mysqli_affected_rows($link);
			
			//give feedback
			if($rows > 0 && $response)
			{
				$feedback = $name . "'s comment was added successfully!";
			}
			else 
			{
				$error = "There was an error adding your comment.";
			}
		}
		else 
		{
			$error = "Please enter values for all of the fields.";
		}
	}
?>
	<!-- Lauren Johnston: set up basic html and php includes 4/4/16-->		

			<div class = "container">
				<h2>What are Regular Expressions?</h2>
				<p>
					A regular expression is a sequence of characters that outlines the way a program 
					will search through a body of text for a specific pattern of characters.
				</p>
			</div>
			<div class = "container">
				<h2>What languages use Regular Expressions?</h2>
				<p>
					Languages that utilize regular expressions include JavaScript, Java, Ruby, C#, 
					PHP, Perl, Python, C++, and others.
				</p>
			</div>
			<div class = "container">
				<h2>Why should I use Regular Expressions?</h2>
				<p>
					Regular expressions, while complicated to learn at first, are very helpful in the 
					long run. One regular expression can replace ten lines of code if done correctly. 
					There are many different situations in which they can be used and the syntax is 
					nearly identical in every language they are used in. So, once you learn them 
					once, you know them in every situation.
				</p>
			</div>
			<div class = "container">
				<h2>What are some examples of times I would need Regular Expressions?</h2>
				<p>
					Regular expressions can be used in a variety of situations. If you are scraping 
					data from a webpage, regular expressions can help you extract only the right 
					data. If you are evaluating data a user input for things like a phone number or 
					email, regular expressions will allow you to automate that process. If you want to 
					transfer data from a text document to a database, regular expressions will divide 
					up the data easily. These are just a few scenarios in which regular expressions 
					are not only useful, but the superior way to complete a task.
				</p>
			</div>
				
			<div class="container"  id="form">
				<h1>Share Your Regex!</h1>
				<p>
					Have you been using Regular Expressions for any cool new projects? We'd love to hear 
					your story! Give some tips to first time regular expression users, share that expression 
					you've just perfected, or even just share your experience learning with our site.
				</p>
				
				<div id="response">
					<?php
						if($feedback)
						{
							echo "<p class='success'" . $feedback . "</p>";
						}
						if($error)
						{
							echo "<p class='error'" . error . "</p>";
						}
					?>
				</div>
				
				<form action="index.php" method="POST" onsubmit="return validate();" id="inner-form" >
					<span>Name:</span><input type="text" name="name" size="30"/>
					<div>Comment:</div><textarea name="comment"></textarea><br/>
					<input type="submit" name="submit"/>	
				</form>
			</div>	
		</div>

<?php require("footer.php");?>