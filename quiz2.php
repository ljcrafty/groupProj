<?php $title = "Topic 2 Quiz: Character Set";
	$head = "Quiz: Character Set";
	require("head.php"); ?>
<script>var answers = new Array("Chapter [1-9]", "[ph]oppy", "[^dk]", "[A-Z]", ".[aeiou]");</script>
		<div id="feedback"></div>
		<form action='quiz2.php' method='post' onsubmit='validate(); return false;'>
		<ol>
			<li>
				How would you select every chapter heading in a book if the book had 9 chapters and the headings were all “Chapter 1”, “Chapter 2”, etc?<br/>
				<input type="text" size="30" name="q1" value="<?= $_POST["q1"] ?>"/>
			</li><!--Chapter [1-9]-->
			<li>
				What expression would select “poppy” and “hoppy”, but not “soppy”?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--[ph]oppy-->
			<li>
				What would you use to select any characters except “d” and “k”?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--[^dk]-->
			<li>
				How would you select any capital letters in a piece of text?<br/>
				<input type="text" size="30" name="q4" value="<?= $_POST["q4"] ?>"/>
			</li><!--[A-Z]-->
			<li>
				How would you select any occurrence of a character followed by any vowel in a piece of text?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--.[aeiou]-->
		</ol>
		<input type="submit" name="submit" value="Continue &#x21FE;"/>
		</form>
	</div>

<?php require("footer.php"); ?>	