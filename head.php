<!-- Lauren Johnston: set up basic html 4/4/16-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Regular Expressions | <?=$title?></title>
  	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<script src="js/functions.js"></script>
  </head>
  <body>
    <nav>			
		<div class = "inner-section">
			<ul class = "main-menu"> 	
				<li><a href = '#'>Home</a></li>
				<li>
					<a href = '#'>Tools</a>
					<ul>
						<li><a href="test.php">Regular Expression Tester</a></li>
						<li><a href="extra.php">Extra help</a></li>
					</ul>
				</li>
				<li>
					<a href = '#'>Tutorials</a>
					<ul>
						<li><a href="tut1.php">Topic 1: Simple Expressions</a></li>
						<li><a href="tut2.php">Topic 2: Character Sets</a></li>
						<li><a href="tut3.php">Topic 3: Metacharacters</a></li>
						<li><a href="tut4.php">Topic 4: Quantifiers</a></li>
						<li><a href="tut5.php">Topic 5: Sub-Expressions</a></li>
						<li><a href="tut6.php">Topic 6: Back References</a></li>
						<li><a href="tut7.php">Topic 7: Look Around</a></li>
					</ul>
				</li>
				<li>
					<a href = '#'>Quizzes</a>
					<ul>
						<li><a href="quiz1.php">Topic 1: Simple Expressions</a></li>
						<li><a href="quiz2.php">Topic 2: Character Sets</a></li>
						<li><a href="quiz3.php">Topic 3: Metacharacters</a></li>
						<li><a href="quiz4.php">Topic 4: Quantifiers</a></li>
						<li><a href="quiz5.php">Topic 5: Sub-Expressions</a></li>
						<li><a href="quiz6.php">Topic 6: Back References</a></li>
						<li><a href="quiz7.php">Topic 7: Look Around</a></li>
					</ul>
				</li>
				<li><a href = '#'>Appendix</a></li>
				<li><a href = '#'>About</a></li>
			</ul>
		</div>
	</nav>	
	
  	<h1><?=($head ? $head : $title )?></h1>
	