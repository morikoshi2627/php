<?php
function searchCityTime($city_name)
{
  require('config1/cities.php1.php');
  
  foreach($cities as $city){
  if($city['name'] === $city_name){
    $date_time = new DateTime('',new DatetimeZone($city["time_zone"]));
    $time = $date_time->format('H:i');
    $city['time'] = $time;
    
    return $city;
    }
  }
}