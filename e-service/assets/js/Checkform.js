<script>
	
	var chkIDVality = "invalid";
	
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

	function checkID()
	{
		var id = document.forms["Reg1"]["txtID_Num"].value;
		
		if( id.length == 13 )
		{
			//alert("ID is 13");
			var yymmdd = id.substring(0,6);
			//alert(yymmdd);
			var g = id.substring(6,7);
			//alert("gender: " + g);
			var sss = id.substring(7,10);
			//alert("sss: "+ sss);
			var citzen = id.substring(10,11);
			//alert("citenship:" + citzen );
			var a = id.substring(11,12);
			//alert("A: " + a);	
			var controlDgt = id.substring(12,13);
			//alert("control Digit: " + controlDgt);
			
			/*
			if(g >= 0 && g <=4 )
			{
				document.forms["Reg1"]["radGend"].value = document.forms.["Reg1"]["radFemale"].value;
			}
				else if(g >= 5 && <= 9 )
			{
				document.forms["Reg1"]["radGend"].value = document.forms.["Reg1"]["radMale"].value;
			}
			
			*/
			
			
			// oddDgts = id.substring(0,1); 
			
			var oddDgts = Math.sum(id.substring(2,3),5);
			alert("sum of: " + oddDgts);
			
			var evenDgts = id.substring(1,2) + id.substring(3,4) + id.substring(5,6) + id.substring(7,8) + id.substring(9,10) + id.substring(11,12);
			
			/*
				multiple evenDgts by 2 eg. evenDgts * 2
				add all oddAdd
			
			*/
		}
		
	}

</script>