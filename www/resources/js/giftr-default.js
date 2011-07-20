$(document).ready(function() 
{
	// we have errors on the page
	if(typeof giftr.page.messages.errors != "undefined" && giftr.page.messages.errors.length > 0)
	{
		var errors = giftr.page.messages.errors;
		var errorString = "";
		for(var i in errors)
		{
			errorString += errors[i].key + ": " +errors[i].message + "\n";
		}
		
		alert(errorString);
	}
});