<?php
$client=new SoapClient("http://www.webservicex.com/globalweather.asmx?WSDL");
$result = $client->GetCitiesByCountry(array('CountryName'=>'PERU'));
$xmlString = $result->GetCitiesByCountryResult;
$objectResult = new SimpleXMLElement($xmlString);

$country = $objectResult->Table[0]->Country;
$city = $objectResult->Table[0]->City;

$client=new SoapClient("http://www.webservicex.com/globalweather.asmx?WSDL");
$result = $client->GetWeather(array('CountryName'=>$country,'CityName'=>$city));
$xmlString = str_replace('<?xml version="1.0" encoding="utf-16"?>', '', $result->GetWeatherResult) ;
$objectResult = new SimpleXMLElement($xmlString);
print_r($objectResult);

