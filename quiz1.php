<?php $title = "Topic 1 Quiz: Finding Simple Text";
	$head = "Quiz: Finding Simple Text / Numbers";
	require("head.php"); ?>
<script>var answers = new Array("pop", ". pops", "125", "a3", ".arrot");</script>
		<div id="feedback"></div>
		<form action='quiz1.php' method='post' onsubmit='validate(); return false;'>
		<ol>
			<li>
				What would select "pop" from "poppy potatoes"?<br/>
				<input type="text" size="30" name="q1" value="<?= $_POST["q1"] ?>"/>
			</li><!--pop-->
			<li>
				How could you select both "2 pops" and "5 pops"?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--. pops-->
			<li>
				How could you select the house number in "125 Potato Ln."?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--125-->
			<li>
				What is a wildcard?<br/>
				<input type="radio" name="q4" id="a1" value="a1" <?= $_POST["q4"] == "a1" ? "checked" : "" ?> />
					<label for="a1">A character that randomizes the order of all of the components of an expression</label><br/>
				<input type="radio" name="q4" id="a2" value="a2" <?= $_POST["q4"] == "a2" ? "checked" : "" ?> />
					<label for="a2">A period (.) that can represent any possible digit in the text</label><br/>
				<input type="radio" name="q4" id="a3" value="a3" <?= $_POST["q4"] == "a3" ? "checked" : "" ?> />
					<label for="a3">A period (.) that can be used as any possible character in the text</label><br/>
				<input type="radio" name="q4" id="a4" value="a4" <?= $_POST["q4"] == "a4" ? "checked" : "" ?> />
					<label for="a4">An expression that can select repetitive text</label>
			</li>
			<li>
				If you want to select any word that ends in "arrot", what expression would you use?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--.arrot-->
		</ol>
		<input type="submit" name="submit" value="Continue &#8594;"/>
		</form>
	</div>

<?php require("footer.php"); ?>	