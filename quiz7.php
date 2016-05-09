<?php $title = "Topic 7 Quiz: Look Around";
	$head = "Quiz: Look Around";
	require("head.php"); ?>
<script>var answers = new Array("", "cat(?=s)", "cake(?! pan)", "cake(?<! pan)", "number(?<=\d)");</script>
		<div id="feedback"></div>
		<form action='quiz7.php' method='post' onsubmit='validateQuiz(); return false;'>
		<ol>
			<li>
				What is look ahead syntax?<br/>
				<input type="radio" name="q4" id="a1" value="a1" <?= $_POST["q1"] == "a1" ? "checked" : "" ?> />
					<label for="a1">(?! <desired exprssion>)</label><br/>
				<input type="radio" name="q4" id="a2" value="a2" <?= $_POST["q1"] == "a2" ? "checked" : "" ?> />
					<label for="a2">(?= <desired expression>)</label><br/>
				<input type="radio" name="q4" id="a3" value="a3" <?= $_POST["q1"] == "a3" ? "checked" : "" ?> />
					<label for="a3">(?/ <desired expression>)</label><br/>
				<input type="radio" name="q4" id="a4" value="a4" <?= $_POST["q1"] == "a4" ? "checked" : "" ?> />
					<label for="a4">(!= <desired expression>)</label>
			</li><!--a2-->
			<li>
				How could you select “cats” but not “cat”?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--cat(?=s)-->
			<li>
				How could you select “pancake”, but not “cake”?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--cake(?! pan)-->
			<li>
				How could you select “cake” but not “pancake”?<br/>
				<input type="text" size="30" name="q4" value="<?= $_POST["q4"] ?>"/>
			</li><!--cake(?<! pan)-->
			<li>
				How could you select “numberOne” and “numberTwo”, but not “number1”?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--number(?<=\d)-->
		</ol>
		<input type="submit" name="submit" value="Continue ->"/>
		</form>
	</div>

<?php require("footer.php"); ?>	