<?php

	$redi = $_GET["page"];
	
	if($redi == "DTI" )
	{
		header('Location:https://www.fundingconnection.co.za/funding-agencies-in-south-africa/dti-department-trade-industry');
	}else if($redi == "NEF"){
		header('Location:https://www.fundingconnection.co.za/funding-agencies-in-south-africa/nef-national-empowerment-fund');
	}else if($redi == "NYDA"){
		header('Location:http://www.fundingconnection.co.za/funding-agencies-in-south-africa/nyda-national-youth-development-agency');
	}else if($redi == "IDC"){
		header('Location:https://www.fundingconnection.co.za/funding-agencies-in-south-africa/idc-industrial-development-corporation');
	}else if($redi == "KZNGF"){
		header('Location:http://www.fundingconnection.co.za/?p=51');
	}else if($redi == "ISIVANDE"){
		header('Location:https://www.fundingconnection.co.za/funding-agencies-in-south-africa/isivande-womens-fund');
	}else if($redi == "KFWDB"){
		header('Location:http://www.fundingconnection.co.za/?p=42');
	}else if($redi == "LANDBANK"){
		header('Location:http://www.fundingconnection.co.za/?p=46');
	}else if($redi == "SEFA"){
		header('Location:http://www.fundingconnection.co.za/funding-agencies-in-south-africa/sefa-small-enterprise-finance-agency');
	}else if($redi == "TIA"){
		header('Location:http://www.fundingconnection.co.za/funding-agencies-in-south-africa/tia-technology-innovation-agency');
	}else if($redi == "LANDBANKBP"){
		header('Location:https://www.fundingconnection.co.za/business-plans');
	}
	
	
?>