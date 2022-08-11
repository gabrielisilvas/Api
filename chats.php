<?php
set_time_limit(120);
$chats= [];
$api_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjEyZDM2YjQwMTNlMzhhOTNmM2M2OTU1MzFlZWE3Y2RjYmEwN2U3YTBjYWE4MmRjZTIxZjgxYmZhMzgwMGU5MTNjMGU3ZjZiNjk2ZDMwNWNjIn0.eyJhdWQiOiJBUFAtMDAzNjliMTEtZDIzMC00NjY3LWIyYTItNDRjYmU2MzNjNzBjIiwianRpIjoiMTJkMzZiNDAxM2UzOGE5M2YzYzY5NTUzMWVlYTdjZGNiYTA3ZTdhMGNhYTgyZGNlMjFmODFiZmEzODAwZTkxM2MwZTdmNmI2OTZkMzA1Y2MiLCJpYXQiOjE2NjAyMjkzMTgsIm5iZiI6MTY2MDIyOTMxOCwiZXhwIjoxNjc2MTI2OTE4LCJzdWIiOiI4MjY5OCIsInNjb3BlcyI6WyJpbnN0YWxsX2FwcCIsInJlYWRfYWdlbnRfcHJvZmlsZSJdfQ.vc3wIjb1_TqOi8_B2xlrRSnG63GXkd4YzRuKnuFsjgcx_k9D7jPztPHKa3Xy0mWMRCOtg3YQxC5GEi8qhSfi7K8OysZr9xKdMULcqmNVGxGUh9yVlHxFyCv9-Wos3F2dy8wq7Qg9gG8R3Qyb5HLbv5qmv46fWYt-bwUT9ig-J5I";
$companieId= "11732";

function Chats($chats_id, $api_token, $companieId){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.huggy.app/v3/companies/11732/chats".$companieId."/chats/".$chats_id);
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
