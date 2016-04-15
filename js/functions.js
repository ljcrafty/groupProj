function validate()
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
				error += "Question " + inputs[i].name.split("q")[1] + "<br/>";
			}
			i += radio.length - 1;
		}
		else
		{
			if(inputs[i].value == "")
			{
				error += "Question " + inputs[i].name.split("q")[1] + "<br/>";
			}
			else
			{
				values.push(inputs[i].value);
			}
		}
	}
	
	if(error)//handle error
	{
		error = "Please answer the following questions:<br/>" + error;
		feedback("red", error);
	}
	else//check if the answers are correct
	{//assume there's an array of answers and there is an answer given for every question
		//identifies every wrong answer
		for(var i = 0; i < answers.length; i++)
		{
			if(values[i] != answers[i])
			{
				error += "Question " + (parseInt(i) + 1) + "<br/>";
			}
		}
		
		//make error string
		if(error)
		{
			error = "The following answers are incorrect: <br/>" + error + 
				"<br/>If you are having trouble finding the answer, try to look for " + 
				"answers in the tutorial for this topic and make sure you aren't using " + 
				"information from a later topic!";
			feedback("red", error);
		}
		else//all answers correct
		{
			var quiz = window.location.pathname.split("/").pop().substr(4, 1);
			var number = parseInt(quiz) + 1;
			if(quiz < 7)
			{
				window.location = "quiz" + number + ".php";
			}
			else
			{
				error = "Great Job! You finished the quiz!";
				feedback("green", error);
			}
		}
	}
}

function feedback( color, error )
{
	var div = document.getElementById("feedback");
	div.innerHTML = error;//happens no matter what
	
	if(color == "green")
	{
		div.style.backgroundColor = "";
		div.style.border = "2px solid green";
	}
	else
	{
		div.style.backgroundColor = "pink";
		div.style.border = "2px solid red";
	}
	
	div.style.display = "block";
}