<?php $title = "Topic 6 Quiz: Back References";
	$head = "Quiz: Back References";
	require("head.php"); ?>
<script>var answers = new Array("(Bar)t (wor)ks at \2 \1", "(ants) in my p\1", "(\d{2})th of \1\d{2}", "t(oe) sh\1s", "(1) and (4) is \1\2\?");</script>
		<div id="feedback"></div>
		<form action='quiz6.php' method='post' onsubmit='validate(); return false;'>
		<ol>
			<li>
				How could you select “Bart works at wor Bar”?<br/>
				<input type="text" size="30" name="q1" value="<?= $_POST["q1"] ?>"/>
			</li><!--(Bar)t (wor)ks at \2 \1-->
			<li>
				How could you select “ants in my pants”?<br/>
				<input type="text" size="30" name="q2" value="<?= $_POST["q2"] ?>"/>
			</li><!--(ants) in my p\1-->
			<li>
				How could you select “19th of 1987” and “17th of 1720”?<br/>
				<input type="text" size="30" name="q3" value="<?= $_POST["q3"] ?>"/>
			</li><!--(\d{2})th of \1\d{2}-->
			<li>
				How could you select “toe shoes”?<br/>
				<input type="text" size="30" name="q4" value="<?= $_POST["q4"] ?>"/>
			</li><!--t(oe) sh\1s-->
			<li>
				How could you select “1 and 4 is 14?”?<br/>
				<input type="text" size="30" name="q5" value="<?= $_POST["q5"] ?>"/>
			</li><!--(1) and (4) is \1\2\?-->
		</ol>
		<input type="submit" name="submit" value="Continue &#x21FE;"/>
		</form>
	</div>

<?php require("footer.php"); ?>	