function valForm()
	  {
	  	
		
		
		if(!valid_required(document.myform.firstname.value))
		{
		alert ("Please type first name!")
		return false
		}
		
		if(!valid_required(document.myform.lastname.value))
		{
		alert ("Please type last name!")
		return false
		}
		
		if(!EmailValid(document.myform.email.value))
				{
				alert ("Please type email!")
				return false
		}
		
		if(!valid_required(document.myform.username.value))
		{
		alert ("Please enter username name!")
		return false
		}
		
		if(!valid_required(document.myform.password1.value))
		{
		alert ("Please enter password!")
		return false
		}


		if(!valid_required(document.myform.password2.value))
		{
		alert ("Please confirm password!")
		return false
		}

		
				
		return true
}