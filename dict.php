<?php $title = "Appendix";
	$head = "Appendix";
	require("head.php"); 
?>
		<ul id="dictionaryList">
			<li><a onclick="getDefs(1)">Topic 1: Finding Simple Text</a></li>
			<li><a onclick="getDefs(2)">Topic 2: Character Sets</a></li>
			<li><a onclick="getDefs(3)">Topic 3: Metacharacters</a></li>
			<li><a onclick="getDefs(4)">Topic 4: Quantifiers</a></li>
			<li><a onclick="getDefs(5)">Topic 5: Sub-Expressions</a></li>
			<li><a onclick="getDefs(6)">Topic 6: Back References</a></li>
			<li><a onclick="getDefs(7)">Topic 7: Look Around</a></li>
		</ul>
	</div>
	<script>
		var list = document.getElementById("dictionaryList").getElementsByTagName("li");
		var http = new XMLHttpRequest();
		var url = "http://kelvin.ist.rit.edu/~potatopop/definitions.php";
		var working = false;
		
		function getDefs(topicNum)
		{
			//clear page of previous definitions
			var defs = document.getElementsByClassName("def");
			var topicDiv = document.getElementById("topic" + topicNum);
			
			for(var i = 0; i < defs.length; i++)
			{
				defs[i].parentNode.removeChild(defs[i]);
			}
			
			//get rid of div holding definitions too
			var divs = document.getElementsByClassName("topic");
			
			for(var i = 0; i < divs.length; i++)
			{
				divs[i].parentNode.removeChild(divs[i]);
			}
			
			//doesn't repopulate if user clicked on selected topic
			if(topicDiv == null)
			{	
				//get new definitions from database w/ AJAX
				if(http && !working)
				{
					//make new div for definitions and get rid of old one
					var old = document.getElementsByTagName("topic");
					for(var i = 0; i < old.length; i++)
					{
						old[i].parentNode.removeChild(old[i]);
					}	
					
					
					topicDiv = document.createElement("div");
					topicDiv.setAttribute("id", "topic" + topicNum);
					topicDiv.setAttribute("class", "topic");
					var parent = document.getElementById("dictionaryList");
					
					if(topicNum < 7)
						parent.insertBefore(topicDiv, parent.children[topicNum]);
					else
						parent.appendChild(topicDiv);
					
					//send request
					topicNum *= 10;
					http.open("GET", url + "?topic=" + topicNum, true);
					http.onreadystatechange = printDefs;
					
					isWorking = true;
					http.setRequestHeader("topic", topicNum.toString());
					http.send();
				}
			}
		}
		
		function printDefs()
		{
			//print new definitions in correct place
			if(http.readyState == 4)
			{
				if(http.status == 200)
				{
					var response = http.responseText;
					var children = document.getElementById("dictionaryList").children;
					
					for(var i = 0; i < children.length; i++)
					{
						if(children[i].tagName == "DIV")
						{
							var topicDiv = children[i];
							break;
						}
					}
					
					if(topicDiv)
					{
						topicDiv.innerHTML = response;
					}
				}
			}
		}
	</script>
<?php require("footer.php");?>