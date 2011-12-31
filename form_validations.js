
function PhoneValid(passedVal)
{
	var valid = "0123456789";



		if(passedVal=="")
		{
		return false
		}
		
	
		if(passedVal.length != 4)
		{
		alert("Invalid phone number! Please try again.")
		return false
		}
		
		
		for (var i=0; i < passedVal.length; i++)
		{
		temp = "" + passedVal.substring(i, i+1);
		
		
			if (valid.indexOf(temp) == "-1") 
			{
			alert("Invalid characters in your phone.  Please try again.")
			return false;
			}
		}
		
		
		
		
		
		
		
		
		return true
}






function valid_date(field)
{
	if(field=="")
	{
	
	return false;
	}
	
	

	var valid = "0123456789/";
	var slashcount = 0;

	if (field.length!=10) 
	{
	alert("Invalid date! The correct date format is like '01/01/2004'.   Please try again.")
	return false;
	}
		for (var i=0; i < field.length; i++)
		 {
		temp = "" + field.substring(i, i+1);
		if (temp == "/") 
		slashcount++;
			if (valid.indexOf(temp) == "-1") 
			{
			alert("Invalid characters in your date.  Please try again.")
			return false;
			}
		if (slashcount > 2) 
		{
		alert("Invalid Date!  The slash character should be used with a properly formatted 8 digits like  '01/01/2004'.   Please try again.")
		return false;
  		 }
		if((field.charAt(2)!= '/')||(field.charAt(5) != '/'))
		{
		alert("Invalid date! The slash character should be used with a properly formatted 8 digits like  '01/01/2004'.   Please try again.")
		return false;
		}
	}
	return true;


}

function valid_required(field)
{
	if(field=="") 
	{
	return false;
	}

	return true;
}


function EmailValid(passedVal)
	{
		if(passedVal=="")
		{
		return false
		}
		len = passedVal.length
		
		if((passedVal.charAt(1)=='@')||(passedVal.charAt(1)=='.'))
		return false
		if((passedVal.charAt(len-2)=='@')||(passedVal.charAt(len-2)=='.'))
		return false
		
				

		count=0
		dotcount=0
	for (i=0; i< passedVal.length; i++)
		{
			if(passedVal.charAt(i)=='@')
			count++
			if(passedVal.charAt(i)=='.')
			dotcount++
		 }
		
			 if((count !=1)||(dotcount !=1))
			 	{
			 	return false
			 	}
		
		
	return true
	}