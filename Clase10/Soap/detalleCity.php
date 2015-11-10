<?php
/*Este servicio esta leyendo el detalle del distrito*/
$country = $_GET['country'];
$city = $_GET['city'];
$client=new SoapClient("http://www.webservicex.com/globalweather.asmx?WSDL");
$result = $client->GetWeather(array('CountryName'=>$country,'CityName'=>$city));
$xmlString = str_replace('<?xml version="1.0" encoding="utf-16"?>', '', $result->GetWeatherResult) ;
$objectResult = new SimpleXMLElement($xmlString);
echo '<li>';
echo $objectResult->Location;
echo '</li>';
echo '<li>';
echo $objectResult->Time;
echo '</li>';
echo '<li>';
echo $objectResult->Wind;
echo '</li>';
echo '<li>';
echo $objectResult->Visibility;
echo '</li>';
echo '<li>';
echo $objectResult->SkyConditions;
echo '</li>';
