<?php
set_time_limit(120);
$chats = [];
$api_token = "";
$companieId= "";

function Chats($chats_id, $api_token, $companieId){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://huggynew.app/chats/".$chatsId."/chats/".$chats_id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json",
  "Authorization: Bearer ".$api_token
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
}

for($i=0;$i < count($chats); $i++){
  echo $chats[$i];
  echo "<br/>";
  Chats($chats[$i], $api_token,$companieId);
}
 
