onmessage = function(data)
{
	var matches = new Array();
	while(single = data.data[1].exec(data.data[0]))
	{
		matches.push([single]);//MAKE MATCHES A 2D ARRAY LIKE BEFORE
	}
	postMessage(matches);
};