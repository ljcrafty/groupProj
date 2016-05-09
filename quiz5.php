<?php $title = "Topic 5 Quiz: Sub-expression";
	$head = "Quiz: Meta Character";
	require("head.php"); ?>
<script>var answers = new Array("(Today is the (12th))", "(\d+)ft", "(?: \d\w+){2}", "(?:\$\d\.\d{2})+", "(November 19, (2000))");</script>
		<div id="feedback"></div>
		<form action='quiz3.php' method='post' onsubmit='validateQuiz(); return false;'>
		<ol>
			<li>
				How could you capture both “Today is the 12th” and “12th”?<br/>
				<input type="text" size="30" name="q1" value="<?= $_POST["q1"] ?>"/>
			</li><!--(Today is the (12th))-->
			<li>
				How could you capture the number in “1200ft”?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--(\d+)ft-->
			<li>
				How could you select “2 dollars 2 dollars” without capture?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--(?: \d\w+){2}-->
			<li>
				How could you select “$2.05 $2.05” without capture?<br/>
				<input type="text" size="30" name="q4" value="<?= $_POST["q4"] ?>"/>
			</li><!--(?:\$\d\.\d{2})+-->
			<li>
				How could you capture both “November 19, 2000” and “2000”?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--(November 19, (2000))-->
		</ol>
		<input type="submit" name="submit" value="Continue &#x21FE;"/>
		</form>
	</div>

<?php require("footer.php"); ?>	