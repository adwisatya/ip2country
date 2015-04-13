<?php
require('SOAP/Client.php');

$IPAddres = $_GET['ip'];

$wsdl_url = 'http://www.webservicex.net/geoipservice.asmx?WSDL';
$wsdl = new SOAP_WSDL($wsdl_url); 
$client = $wsdl->getProxy(); 
$countryResponse = $client->GetGeoIP($IPAddres);
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<title>IP2Location by SOAP</title>
</head>

<body>

<h2>Country (<?php echo "IP = ".$IPAddres ?>)</h2>
<?php
echo "Country name = " .$countryResponse->CountryName ."<br />";
?>

</body>
</html>
