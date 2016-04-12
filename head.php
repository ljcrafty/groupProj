<!-- Lauren Johnston: set up basic html 4/4/16-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Regular Expressions | <?=$title?></title>
  	<link rel="stylesheet" href="index.css" type="text/css">
  </head>
  <body>
  	<nav>
  		<ul>
  			<li>
  				<a href="index.php">Introduction</a>
  			</li>
  			<li>
  				<a href="simple.php">Tutorials</a>
  				<ul>
  					<li>
  						<a href="simple.php">Topic 1: Finding Simple Text</a>
  					</li>
  					<li>
  						<a href="sets.php">Topic 2: Character Set</a>
  					</li>
  					<li>
  						<a href="meta.php">Topic 3: Meta Character</a>
  					</li>
  					<li>
  						<a href="quantifiers.php">Topic 4: Quantifier</a>
  					</li>
  					<li>
  						<a href="sub.php">Topic 5: Sub-Expression</a>
  					</li>
  					<li>
  						<a href="back.php">Topic 6: Back References</a>
  					</li>
  					<li>
  						<a href="look.php">Topic 7: Look Around</a>
  					</li>
  				</ul>
  			</li>
  			<li>
  				<a href="#">Quizzes</a>
  				<ul>
  					<li>
  						<a href="#">Topic 1: Finding Simple Text</a>
  					</li>
  					<li>
  						<a href="#">Topic 2: Character Set</a>
  					</li>
  					<li>
  						<a href="#">Topic 3: Meta Character</a>
  					</li>
  					<li>
  						<a href="#">Topic 4: Quantifier</a>
  					</li>
  					<li>
  						<a href="#">Topic 5: Sub-Expression</a>
  					</li>
  					<li>
  						<a href="#">Topic 6: Back References</a>
  					</li>
  					<li>
  						<a href="#">Topic 7: Look Around</a>
  					</li>
  				</ul>
  			</li>
  			<li>
  				<a href="#">Appendix</a>
  			</li>
  			<li>
  				<a href="extra.php">Extra Help</a>
  				<ul>
  					<li>
  						<a href="test.php">Regular Expressions Tester</a>
  					</li>
  					<li>
  						<a href="extra.php">Common Errors and References</a>
  					</li>
  				</ul>
  			</li>
  			<li>
  				<a href="#">About</a>
  			</li>
  		</ul>
  	</nav>
  	<h1><?=($head ? $head : $title )?></h1>