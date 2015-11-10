<?php
/*este servicio me devuelve los distritos de peru*/
/*Pagina para probar servicios http://www.service-repository.com*/
$client = new SoapClient("http://www.webservicex.com/globalweather.asmx?WSDL");
$result = $client->GetCitiesByCountry(array('CountryName'=>'PERU'));
$xmlString = $result->GetCitiesByCountryResult;
$objectResult = new SimpleXMLElement($xmlString);
echo '<ul>';
foreach($objectResult as $index){
	echo '<li><a href="detalleCity.php?city='.$index->City.'&country='.$index->Country.'">'; 
	echo $index->City; 
	echo '</a></li>'; 
}
echo '</ul>';
