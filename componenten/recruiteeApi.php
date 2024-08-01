<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.recruitee.com/c/1674/offers?view_mode=default&kind=job&scope=active');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();

$variableToken = BEARER_TOKEN;
$token = 'Bearer ' . $variableToken;
$headers[] = 'Authorization:' . $token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close ($ch);
$offers = json_decode($result, true);

$jobs['jobs']=array();
$taglist=array();
$landlist=array();

$i=0;
foreach($offers['offers'] as $offer){
   if($offer['status'] == "published"){
       // location contains city and land seperated by comma, we have to split to get individual values
       $location = explode(",", $offer['location']);
       //build location array for countries
       $landlist[]=$location[2];
       //build tags array
         foreach ($offer['offer_tags'] as $tag) {
            if (!in_array($tag, ["Upsell", "Replacement", "New Business", "Tech"])) {
                $taglist[] = $tag;
            }
        }
   }
}
//ontdubbelen
$taglistUnique = array_unique($taglist);
$landlistUnique = array_unique($landlist);
//end API call

?>