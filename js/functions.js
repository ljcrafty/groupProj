function validate()
{
	var inputs = document.getElementsByTagName("input");
	var error = "";
	
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
		}
	}
	
	if(error)//handle error
	{
		
		return false;
	}
}