<?php
function geocode($city1,$city2,$mode){
   //echo $city;	
   $cityclean1 = str_replace (" ", "+", $city1);
   $cityclean2 = str_replace (" ", "+", $city2);
   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $cityclean1 . "&sensor=false";
   $details_url2 = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $cityclean2 . "&sensor=false";

	$str .=file_get_contents($details_url);
	$json_res=json_decode($str, true);
	
	$str2 .=file_get_contents($details_url2);
        $json_res2=json_decode($str2, true);
	
     $lat1= $json_res['results'][0]['geometry']['location']['lat'];
     $lng1= $json_res['results'][0]['geometry']['location']['lng'];
     $lat2= $json_res2['results'][0]['geometry']['location']['lat'];	
     $lng2= $json_res2['results'][0]['geometry']['location']['lng'];

   //  print "\n$lat1,$lng1 \n $lat2,$lng2";


     $url="http://maps.googleapis.com/maps/api/directions/json?origin=" . $lat1 ."," . $lng1 . "&destination=" . $lat2 . "," . $lng2 . "&mode=" . $mode;
   //  echo $url;
     $dist .= file_get_contents($url);
  //  echo $dist; 
    $result=json_decode($dist, true);
      print ("\n Distance:".$result['routes'][0]['legs'][0]['distance']['text']);
      print ("\n Duration : ". $result['routes'][0]['legs'][0]['duration']['text']);
}

?>
