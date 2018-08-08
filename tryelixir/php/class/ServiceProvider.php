<?php
class Person
{
	
	protected $name;
	protected $surname;
	protected $idnumber;
	protected $email;
	protected $phone;
	protected $password;
	protected $confirm;
	
	// Constructors
	
	function __construct(){
		/*
		this->$name = "";
		this->$surname = "";
		this->$idnumber = "";
		this->$email = "";
		this->$phone = "";
		*/
	}
	
	/*
	function __construct( $cname, $csurname, $cid, $cemail, $phone)
	{
		__set($name,$cname);
		this->$surname = "";
		this->$idnumber = "";
		this->$email = "";
		this->$phone = "";
	}
	*/
	
	// Setters
	
	function __set( $name, $value )
	{
		switch($name)
		{
			case "name" :
				if( $value == "" )
				{
					throw new Exception("Please provide a name");
				}
				else if( strlen($value) < 3 )
				{
					throw new Exception("Please provide a longer name");
				}
				
				$this->name = $value;
				break;
				
			case "surname" :
				if( $value == "" )
				{
					throw new Exception("Please provide a surname");
				}
				else if( strlen($value) < 3 )
				{
					throw new Exception("Please provide a longer surname");
				}
				$this->surname = $value;
				break;
			
			case "idnumber" :
			
				if ($value == "")
				{
					throw new Exception("Please provide an ID Number");
				}
				else if( strlen($value) != 13 )
				{
					throw new Exception("ID Number is invalid, ID Number must Contain 13 digits");
				}
				else if ( substr($value,2,2) < 01 | substr($value,2,2) > 12 ) 
				{	
					throw new Exception("ID Format Incorrect : Calendar Months are [01-12]");
				}
				else if ( substr($value,0,2) < 01 | substr($value,0,2) > 31 ) 
				{
					throw new Exception("ID Format Incorrect : Day of birth [01-31]");
				}else{
					$this->idnumber = $value;
				}
				
				break;
			
			
			case "phone" :
				// start with 0 and string length is 10
				trim($value,"");
				if( strlen($value) < 10 | strlen($value) > 10 )
				{
					throw new Exception("Please provide a 10 digit phone number.");
				}
				else if( substr($value,0,1) != 0 )
				{
					throw new Exception("Please start with 0 e.g 084 123 1234");
				}
				$this->phone = $value;
				break;
			
			
			case "email" :
				// check if email is valid contains "@" sign
				$this->surname = $value;
				break;
			
			case "password" :
				if( strlen($value) < 6 | strlen($value) > 16 )
				{
					throw new Exception("Password must be at least match 6-16 characters");
				}
				$this->password = $value;
				break;
				
			case "confirm" :
				if( $value != $this->$password )
				{
					throw new Exception("Please Make sure password matches");
				}
				$this->confirm = $value;
				break;
			default :
				throw new Exception("Unexpected error, Please report this and try again later");
				break;
		}
	}
	
	
	// Getters
	function __get($getname)
	{
		return $this->$getname;
	}
	
	function register()
	{
		$insert = "INSERT INTO service_provider(IDNUMBER,First_Name,Surname,DOB,Password)"
		." VALUES('$this->idnumber','$this->name','$this->surname','$this->idnumber','$this->password')";
		
		echo $insert;
		
		echo '<div class="loading" id="preloader">
				<div class="loader h-100 d-flex align-items-center justify-content-center">
					<div class="line-scale">
					<font color="aliceblue">
						Account Created<br/>Welcome to ServJoint
					</font>
					</div>
				</div>
			</div>';
			
	}
}



?>