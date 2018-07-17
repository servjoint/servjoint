<?php
ob_start();
?>
<html style="margin:-50px;">
<head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114927747-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114927747-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Services">
	
    <title>ServJoint</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />

</head>

<?php
 include("inc/servHeader.php");
?>

	
	
	<div class="main-activity">
		
			<section class="middle-sectionBS">
				
				<br>
				<h3 id="agentHeader"> OPEN Funding Agencies IN SA </h3>
				</br>
				<form method='GET'>
				<?php
					echo "<h4 id='fundAgent' > South African government funding and grants are focused on providing funding for business ventures that can make a difference to the economy.</h4><br>";
					
					echo "<h3 id='agentHeader' > Department of Trade and Industry (DTI) </h3>";
					echo "<text id='agentData' > The"; ?>
					<button id='redir' name='page' value='DTI' onClick="this.form.action='redirect.php' ">Department of Trade and Industry (DTI)</button> 
					<?php  echo "– The DTI provides funding to qualifying businesses from a range of sectors. </text>";
				
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > National Empowerment Fund (NEF)</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='NEF' onClick="this.form.action='redirect.php' ">National Empowerment Fund (NEF)</button> 
					<?php echo "– The aim of this organization is to support B-BEEE and previously disadvantaged individuals and communities. It offers a funding for start ups and expansion as a loan, equity funding. </text>";
				
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > National Youth Development Agency (NYDA)</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='NYDA' onClick="this.form.action='redirect.php' ">National Youth Development Agency (NYDA)</button> 
					<?php echo "- NYDA provides enterprise funds for young entrepreneurs aged between 18 and 35 years old and aims to assist them in starting a business or growing an existing one. </text>";
				
				
				
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > Industrial Development Corporation (IDC)</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='IDC' onClick="this.form.action='redirect.php' ">Industrial Development Corporation (IDC)</button> 
					<?php echo "– Under the IDC, there are multiple funds available offering financial support to start-up businesses needing capital for equipment, working capital and buildings. It also funds business expansion. </text>";
				
				
				
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > KZN Growth Fund</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='KZNGF' onClick="this.form.action='redirect.php' ">KZN Growth Fund</button> 
					<?php echo "– Managers primary mandate is investment in infrastructure to promote economic development with in the Province. The Growth Fund endeavors to ensure an even spatial distribution of investment across the province. </text>";
				
					
					
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > Isivande Women’s Fund</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='ISIVANDE' onClick="this.form.action='redirect.php' ">Isivande Women’s Fund</button> 
					<?php echo "– Is an exclusively women’s fund provided to empower women with existing business. With funding, education and training the Fund aims to accelerate women’s economic empowerment with affordable, usable and reliable finance. </text>";
					
					
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > KFW Development Bank</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='KFWDB' onClick="this.form.action='redirect.php' ">KFW Development Bank</button> 
					<?php echo " as part of the KFW banking group is responsible for Financial Cooperation with developing countries. In terms of volume, this form of cooperation is the most important instrument in German development cooperation. </text>";
					
					
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > Land Bank</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='LANDBANK' onClick="this.form.action='redirect.php' ">Land Bank</button> 
					<?php echo "offers a wide range of loans for all financial needs like buying land, equipment and working capital for agricultural projects. As part of the application you will need a"; ?>
					<button id='redir' name='page' value='LANDBANKBP' onClick="this.form.action='redirect.php' ">business plan</button> <?php echo ". </text>";
					
					
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > Small Enterprise Finance Agency (SEFA)</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='SEFA' onClick="this.form.action='redirect.php' ">Small Enterprise Finance Agency (SEFA)</button> 
					<?php echo "is founded in 2012 and has access to R1.4-billion in funding given by IDC and the Government for South African small businesses over the next three years. </text>";
					
					
					
					echo "<hr id='hRuler'> </hr>";
					
					echo "<h3 id='agentHeader' > Technology Innovation Agency (TIA)</h3>";
					echo "<text id='agentData' > The "; ?> 
					<button id='redir' name='page' value='TIA' onClick="this.form.action='redirect.php' ">Technology Innovation Agency (TIA)</button> 
					<?php echo "was established in 2008. The objectives are stimulating and intensifying technological innovation in order to improve economic growth. The goal is to increase the quality of life of all South Africans by developing and exploiting technological innovations. </text>";
					
					echo "<hr id='hRuler'> </hr>";
					
				
				?>
				</br>
				</form>
			</section>
		
			

	
	</div>
	
</body>

<?php
require("inc/footer.php");
ob_end_flush();
?>