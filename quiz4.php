<?php $title = "Topic 4 Quiz: Quantifier";
	$head = "Quiz: Quantifier";
	require("head.php"); ?>
<script>var answers = new Array("\(\d{3}\)", "[aeiou]{2}", "\d{7,10}", "[\w^0-9]\d{1,2}", "\d+");</script>
		<div id="feedback"></div>
		<form action='quiz4.php' method='post' onsubmit='validateQuiz(); return false;'>
		<ol>
			<li>
				How could you select the area code of a phone number using quantifiers (include the parentheses)?<br/>
				<input type="text" size="30" name="q1" value="<?= $_POST["q1"] ?>"/>
			</li><!--\(\d{3}\)-->
			<li>
				How could you best select any occurrence of two vowels in a row?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--[aeiou]{2}-->
			<li>
				How could you select any phone numbers with or without an area code (only include numbers, not or formatting)?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--\d{7,10}-->
			<li>
				How could you solve the battleship question above in a better way?<br/>
				<input type="text" size="30" name="q4" value="<?= $_POST["q4"] ?>"/>
			</li><!--[\w^0-9]\d{1,2}-->
			<li>
				How could you select one or more consecutive numbers?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--\d+-->
		</ol>
		<input type="submit" name="submit" value="Continue &#x21FE;"/>
		</form>
	</div>

<?php require("footer.php"); ?>	