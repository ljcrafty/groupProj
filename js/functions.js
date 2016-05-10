function byId(ele)
{
	return document.getElementById(ele);
}

function validateQuiz()
{
	var inputs = document.getElementsByTagName("input");
	var error = "";
	var values = [];
	
	for(var i = 0; i < inputs.length - 1; i++)
	{
		if(inputs[i].name == inputs[i + 1].name)//checks for radio buttons
		{
			var radio = document.getElementsByName(inputs[i].name);
			var checked = false;
			
			//checks if any of the radio buttons are checked
			for(var j = 0; j < radio.length; j++)
			{
				if(radio[j].checked)
				{
					checked = true;
					values.push(radio[j].value);
					break;
				}
			}
			if(!checked)
			{
				error += "<li>Question " + inputs[i].name.split("q")[1] + "</li>";
			}
			i += radio.length - 1;
		}
		else
		{
			if(inputs[i].value == "")
			{
				error += "<li>Question " + inputs[i].name.split("q")[1] + "</li>";
			}
			else
			{
				values.push(inputs[i].value);
			}
		}
	}
	
	if(error)//handle error
	{
		error = "Please answer the following questions:<ul>" + error + "</ul>";
		feedback(error, "red");
	}
	else//check if the answers are correct
	{//assume there's an array of answers and there is an answer given for every question
		//identifies every wrong answer
		for(var i = 0; i < answers.length; i++)
		{
			if(values[i] != answers[i])
			{
				error += "<li>Question " + (parseInt(i) + 1) + "</li>";
			}
		}
		
		//make error string
		if(error)
		{
			error = "The following answers are incorrect: <ul>" + error + 
				"</ul>If you are having trouble finding the answer, try to look for " + 
				"answers in the tutorial for this topic and make sure you aren't using " + 
				"information from a later topic!";
			feedback(error, "red");
		}
		else//all answers correct
		{
			var quiz = window.location.pathname.split("/").pop().substr(4, 1);
			var number = parseInt(quiz) + 1;
			if(quiz < 7)
			{
				window.location = "quiz" + number + ".php#success";
			}
			else
			{
				error = "Great Job! You finished the quiz!";
				feedback(error,"green");
			}
		}
	}
}//end validate

function validateSingle()//validation for one practice problem
{
	var input = document.getElementsByTagName("input")[0];
	var error = "";
	
	if(input.value == "")
	{
		error = "Please provide an answer to the Practice Problem.";
	}
	else
	{
		var value = input.value;
	}
	
	if(error)//fails validation
	{
		feedback(error, "red");
	}
	else
	{
		if(checkAnswer(value, matches, butNot, capture))//correct answer; assumes answer is defined in call file because
		{//passing it was a horrible time
			var page = window.location.pathname.split("/").pop().substr(3, 1);
			var number = parseInt(page) + 1;
			
			if(page < 7)//go to next tutorial
			{
				window.location = "tut" + number + ".php#success";
			}
			else
			{
				error = "Great Job! You've completed all of the tutorials!";
				feedback(error, "green");
			}
		}
		else
		{
			error = "Oops! Not quite, try again!<br/><br/>" + 
				" Try using concepts from this lesson and previous lessons in your answer!";
			feedback(error, "red");
		}
	}
	return false;
}//end validateSingle

function validateStory()
{
	var formEle = document.forms[0].children;
	var error = "";
		
	for(var i = 0; i < formEle.length - 1; i++)//skips the submit button
	{
		if((typeof formEle[i] == "input" || typeof formEle[i] == "textarea") && formEle[i].value == "")
		{
			error += "<li>" + formEle[i].name + "</li>";
		}
	}
	
	if(error)
	{
		feedback("<p>Please complete the following items before you add your comment:</p><ul>" +
			error + "</ul>", "red");
		
		return false;
	}
	else
	{
		feedback("Your comment has been added successfully!", "green");
	}
}

function checkAnswer(regex, match, butNot, capture)
{
	var matchSet = new Array();
	
	if(capture)//questions for captures must be handled differently
	{	
		try
		{
			var trueReg = new RegExp(regex, "g");
		}
		catch(e)
		{
			error = "Looks like there's an error with your expression, why don't you read over the lesson again?";
			feedback(error, "red");
		}
		var group;

		while(group = trueReg.exec(match))
		{
			matchSet.push(group);
		}//cuts regex into capture groups

		for(var i = 0; i < matchSet.length; i++)
		{
			if(matchSet[i][0] != match[i])
			{
				return false;
			}
		}
	}
	else//not capture
	{
		if(match.length > 2)//look ahead
		{	
			for(var i = 2; i < match.length; i += 2)//matches what it should
			{
				matchSet = match[i + 1].match(regex);
				
				if(matchSet == null || matchSet.length < 1)//short circuit no match
				{
					return false;
				}
				
				for(var j = 0; j < matchSet.length; j++)
				{
					if(matchSet[j] != match[i])
					{
						return false;
					}
				}
			}
		}
		else//not look ahead
		{	
			for(var i = 0; i < match.length; i++)//check if it matches what it should
			{
				matchSet = match[i].match(regex);
				
				if(matchSet == null || matchSet.length < 1)//short circuit no match
					return false;
				
				if(matchSet.length > 1)//there's more than one match
				{
					var matchFound = false;
					
					for(var i = 0; i < matchSet.length; i++)
					{
						if(matchSet[i] == match[i])
						{
							matchFound = true;
						}
					}
					
					if(!matchFound)
					{
						return false;
					}
				}
				else//only one match
				{
					if(matchSet[0] != match[i])//match is the complete original string
						return false;
				}
			}
		}//end not look ahead
		
		matchSet = butNot.match(regex);

		if(matchSet == null || matchSet.length == 0)//short circuit no matches
			return true;
			
		for(var i = 0; i < matchSet.length; i++)//checks that it doesn't match what it shouldn't
		{
			if(matchSet[i] == butNot)//checks that no matches are exact
			{
					return false;
			}
		}		
	}// end not capture
	return true;
}//end checkAnswer

function showSuccess()
{
	if (window.location.hash === "#success")
		byId("success").style.display = "block";
	else
		byId("success").style.display = "none";
}

function feedback( error, color )
{
	var div = byId("feedback");
	div.innerHTML = error;//happens no matter what
	
	if(color == "green")
	{
		div.style.backgroundColor = "#90db76";
		div.style.border = "2px solid green";
	}
	else
	{
		window.location.hash = "";
		showSuccess();
		div.style.backgroundColor = "pink";
		div.style.border = "2px solid red";
	}
	
	div.style.display = "block";
}

function readReg()
{
	//base text and user input regex
	var input = byId("regex").value; 
	var text = "The quick brown fox jumped over the lazy dog. THE QUICK BROWN FOX " +  
			"JUMPED OVER THE LAZY DOG? The Quick Brown Fox Jumped Over The Lazy " + 
			"Dog! My phone number is (145)234-5678. Email: panda8024@potato.com " + 
			"192.168.000.100 1-800-CALLNOW #$%^&*<>-=+{}[]\|/,;\"";
	
	//resets the error flag
	byId("error").style.display = "none";
		
	//if there is input
	if(input != null && input != "")
	{	
		//array to hold match indicies and lengths
		var repo = byId("repo");

		//find the text that matches this expression
		try
		{
			var reg = new RegExp(input, "g");
		}
		//shows a flag if the expression throws an error
		catch(error)
		{
			byId("error").style.display = "inline-block";
			return;
		}
		
		var matches = new Array();
			
		var collector = new Worker("js/collectMatches.js");
		var working = true;
		
		collector.postMessage([text, reg]);
			
		setTimeout(function()
		{
			if(working)
			{
				collector.terminate();
				byId("error").style.display = "inline-block";
				repo.innerHTML = text;
				return;
			}	
		}, 500);
		
		collector.onmessage = function(data)
		{
			matches = data.data;
			working = false;
			
			//short circuit for no matches
			if(matches == null || matches.length < 1)
			{
				repo.innerHTML = text;
				return;
			}
			//matches has length and index b/c it comes from execute
				
			//overlapping sections should take the earliest starting highlight and the longest one
			matches = sortMatches(matches);
			matches = deleteOverlap(matches);
				
			//necessary to keep track after string lengths
			index = 0;
				
			//cut the text into the matched areas and make spans for highlighted areas
			//takes care of unselected text before the first selection
			var previous = text.substring(index, matches[0][0].index);
			var node = document.createTextNode(previous);
			repo.innerHTML = "";
			repo.appendChild(node);
				
				
			//matches is now an ordered array of pairs of ints for the start and length of selected text
			for(var i = 0; i < matches.length; i++)
			{
				//make a span with special class for selected text
				var selected = text.substr(matches[i][0].index, matches[i][0][0].length);
				var selText = document.createTextNode(selected);
				var span = document.createElement("span");
				span.setAttribute("class", "selected");
				span.appendChild(selText);
				repo.appendChild(span);
				index = matches[i][0].index + matches[i][0][0].length;
				
				//finds non selected text if any and makes a text node of it
				if(i == matches.length - 1)
					var after = text.substring(index, text.length);
				else
					var after = text.substring(index, matches[i + 1][0].index);
				node = document.createTextNode(after);
				repo.appendChild(node);
			}
		};
	}
	else
	{
		byId("repo").innerHTML = text;
	}
}

//assumes array contains objects from exec call
function sortMatches(array)
{
	//short circuit
	if(array.length < 2)
		return array;
		
	var temp = new Array(), small = new Array(), large = new Array();
	var pivot = array[Math.round(array.length / 2)];
		
	//temp array, replace old if start at same place and is longer
	//possibly do this when you're getting matches?
	for(var j = 0; j < array.length; j++)
	{
		//short circuit to get rid of exact duplicates (which shouldn't happen anyway)
		if (pivot == array[j])
			continue;
		else
		{
			//put before pivot
			if(array[j][0].index < pivot[0].index || 
				(array[j][0].index == pivot[0].index && array[j][0][0].length < pivot[0][0].length))
			{
				small.push(array[j]);
			}
			else//put after pivot
			{
				large.push(array[j]);
			}
		}
	}//have two arrays of smaller and larger than pivot
		
	//recursively sort two arrays
	small = sortMatches(small);
	large = sortMatches(large);
		
	//recombine arrays
	for(var i = 0; i < small.length; i++)
		temp.push(small[i]);
	temp.push(pivot);
	for(var i = 0; i < large.length; i++)
		temp.push(large[i]);
		
	return temp;
}
	
//delete matches that start in the same place or the selections overlap
function deleteOverlap(matches)
{
	var temp = new Array();
	var end = 0;
	
	for(var i = 0; i < matches.length; i++)
	{
		//for last item in array
		if(i == matches.length - 1)
		{
			if(end <= matches[i][0].index)
				temp.push(matches[i]);
		}
		else
		{
			//only adds the longest of matches that start at the same index
			if(matches[i + 1][0].index != matches[i][0].index)
			{
				//make sure previous matches didn't end after this one
				if(end <= matches[i][0].index)
				{
					temp.push(matches[i]);
					
					//show where this match would end
					end = matches[i][0].index + matches[i][0][0].length;
				}
			}
		}
	}
	return temp;
}
