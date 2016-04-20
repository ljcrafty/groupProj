<?php $title = "Regular Expressions Tester";
	require("head.php");
?>
<script src="js/functions.js"></script>
	<div>
		/<input oninput="readReg()" id="regex" type="text" size="30" />/g
		<span id="error">Error</span>
	</div>
	
	<p id="repo">
		The quick brown fox jumped over the lazy dog. THE QUICK BROWN FOX 
		JUMPED OVER THE LAZY DOG? The Quick Brown Fox Jumped Over The Lazy 
		Dog! My phone number is (145)234-5678. Email: panda8024@potato.com 
		192.168.000.100 1-800-CALLNOW #$%^&amp;*&lt;&gt;-=+{}[]\|/,;
	</p>
</div>
<?php require("footer.php"); ?>
