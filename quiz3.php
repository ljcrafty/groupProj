<?php $title = "Topic 3 Quiz: Meta Character";
	$head = "Quiz: Meta Character";
	require("head.php"); ?>
<script>var answers = new Array("\d\d", "\w\s", "ing\b", "[\w^0-9]\d\d", "\d\d[\d^9]");</script>
		<div id="feedback"></div>
		<form action='quiz3.php' method='post' onsubmit='validateQuiz(); return false;'>
		<ol>
			<li>
				How could you select just the number in the address “75 Pop Dr.”?<br/>
				<input type="text" size="30" name="q1" value="<?= $_POST["q1"] ?>"/>
			</li><!--\d\d-->
			<li>
				How could you select an alphanumeric character followed by white space?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--\w\s-->
			<li>
				What expression would you use to match any occurrence of a word that ends in “ing”?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--ing\b-->
			<li>
				How could you select any battleship locations in the form of a capital or lowercase letter followed by two numbers?<br/>
				<input type="text" size="30" name="q4" value="<?= $_POST["q4"] ?>"/>
			</li><!--[\w^0-9]\d\d-->
			<li>
				How could you select any three digits where the last character is not “9”?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--\d\d[\d^9]-->
		</ol>
		<input type="submit" name="submit" value="Continue &#x21FE;"/>
		</form>
	</div>

<?php require("footer.php"); ?>	