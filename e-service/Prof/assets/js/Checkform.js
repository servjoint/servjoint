<script>
	
	function checkRegform1()
	{
		var name = document.forms["Reg1"]["txtName"].value;
		var surname = document.forms["Reg1"]["txtSurname"].value;
		var gender = document.forms["Reg1"]["radGend"].value;
		var id = document.forms["Reg1"]["txtID_Num"].value;
		
		if(name == "" )
		{
			
			document.forms["Reg1"]["txtName"].style.borderColor = "red";
			document.forms["Reg1"]["txtName"].focus();
			alert("Please Enter Name");
			return false;
		}
		
		if( name.length <3 )
		{
			document.forms["Reg1"]["txtName"].style.borderColor = "red";
			alert("Name too short");
			return false;
		}
		
		if( surname == "" )
		{
			document.forms["Reg1"]["txtSurname"].style.borderColor = "red";
			document.forms["Reg1"]["txtSurname"].focus();
			alert("Please Enter Last Name");
			return false;
		}
		
		if( name.length <3 )
		{
			document.forms["Reg1"]["txtSurname"].style.borderColor = "red";
			alert("Surname too short");
			return false;
		}
		
		if(id.length < 13)
		{
			document.forms["Reg1"]["txtSurname"].style.borderColor = "red";
			alert("Invalid ID Number");
			return false;
		}
		
		if( id.length == 13 )
		{
			
			var dateOfBirth = substr(id,0,5);
			alert(dateofBirth);
			
		}
		
	}


</script>