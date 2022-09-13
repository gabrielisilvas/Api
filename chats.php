<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        set_time_limit(1800);
        $chats = [1500];
        $api_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjEyZDM2YjQwMTNlMzhhOTNmM2M2OTU1MzFlZWE3Y2RjYmEwN2U3YTBjYWE4MmRjZTIxZjgxYmZhMzgwMGU5MTNjMGU3ZjZiNjk2ZDMwNWNjIn0.eyJhdWQiOiJBUFAtMDAzNjliMTEtZDIzMC00NjY3LWIyYTItNDRjYmU2MzNjNzBjIiwianRpIjoiMTJkMzZiNDAxM2UzOGE5M2YzYzY5NTUzMWVlYTdjZGNiYTA3ZTdhMGNhYTgyZGNlMjFmODFiZmEzODAwZTkxM2MwZTdmNmI2OTZkMzA1Y2MiLCJpYXQiOjE2NjAyMjkzMTgsIm5iZiI6MTY2MDIyOTMxOCwiZXhwIjoxNjc2MTI2OTE4LCJzdWIiOiI4MjY5OCIsInNjb3BlcyI6WyJpbnN0YWxsX2FwcCIsInJlYWRfYWdlbnRfcHJvZmlsZSJdfQ.vc3wIjb1_TqOi8_B2xlrRSnG63GXkd4YzRuKnuFsjgcx_k9D7jPztPHKa3Xy0mWMRCOtg3YQxC5GEi8qhSfi7K8OysZr9xKdMULcqmNVGxGUh9yVlHxFyCv9-Wos3F2dy8wq7Qg9gG8R3Qyb5HLbv5qmv46fWYt-bwUT9ig-J5I";
        $companieId= "11732";
        function Chats($api_token, $companieId){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.huggy.app/v3/companies/".$companieId."/chats/");
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
        //https://api.huggy.app/v3/companies/11732/chats/?page=1000
        //acess token: eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjEyZDM2YjQwMTNlMzhhOTNmM2M2OTU1MzFlZWE3Y2RjYmEwN2U3YTBjYWE4MmRjZTIxZjgxYmZhMzgwMGU5MTNjMGU3ZjZiNjk2ZDMwNWNjIn0.eyJhdWQiOiJBUFAtMDAzNjliMTEtZDIzMC00NjY3LWIyYTItNDRjYmU2MzNjNzBjIiwianRpIjoiMTJkMzZiNDAxM2UzOGE5M2YzYzY5NTUzMWVlYTdjZGNiYTA3ZTdhMGNhYTgyZGNlMjFmODFiZmEzODAwZTkxM2MwZTdmNmI2OTZkMzA1Y2MiLCJpYXQiOjE2NjAyMjkzMTgsIm5iZiI6MTY2MDIyOTMxOCwiZXhwIjoxNjc2MTI2OTE4LCJzdWIiOiI4MjY5OCIsInNjb3BlcyI6WyJpbnN0YWxsX2FwcCIsInJlYWRfYWdlbnRfcHJvZmlsZSJdfQ.vc3wIjb1_TqOi8_B2xlrRSnG63GXkd4YzRuKnuFsjgcx_k9D7jPztPHKa3Xy0mWMRCOtg3YQxC5GEi8qhSfi7K8OysZr9xKdMULcqmNVGxGUh9yVlHxFyCv9-Wos3F2dy8wq7Qg9gG8R3Qyb5HLbv5qmv46fWYt-bwUT9ig-J5I"

        //refresh token: def50200db5773edd228b6ccc84b259cacb7f26b8aac291a489ce8d8f73b30ef34edf687d8b998594aa7d2f99a99653395fc84b21ca90afe6c2fde436c0da1c9fbf0dd99d5137df5963196ad615bd01963fb1b17af2f394bbd092cca74121c662ec36039922fe4b191646f1c429ba5f18f53b388308f884f2a976671a518f93c3fc7aea405e4e5059d34d32be2aeadb58d8d1d4ef7a3585841d292e24b0c6d459d24f720616c45341b09334340cdbd5583a3482ab855a99790087620de8d91271d89e6b911190a454b65cf307751b3bdbf905aab14f113ad1cc98fed745c25f5a728ee134fe5a4880e922688ddc686a9b53144071382c30a1cbffa8c91fe9990f3b1c888f4ec87a31af84b34313a6f89890e5b99938760c3e7a87c00bd3ac53174b0f7e44fc507596a8d50813fb6b0268ead9d17d5d0c568e4b5058ef9e70825c5091ae3e690e90ebddb2485b18aee37d1c30bccae57fe3d8f0e6bacc325e6ae16f2b52b12902a48204b6afaf4e7c54838e7aadf3232ad49aa67dec15209c443e5fc0bfc95bc54b185140098d09e8c4f132163145f1329e3cf757a4d99e68fe5fd046d61726a0eab1864100e2719"

        //url: https://auth.huggy.app/oauth/authorize?scope=install_app%20read_agent_profile&response_type=code&redirect_uri=https://huggynew.app/&client_id=APP-00369b11-d230-4667-b2a2-44cbe633c70c    

        //code: https://huggynew.app/?code=def502005bb2df1ce0324702a679a3ea55afbfead51e55684d60d5fb07843a1dfb1dadf56399b74e5d7a1e16cf2a6018db23068bef64529b0e5c095cfabbef8938fce9cb5f53c05277d1072e0ec41390684d38313124ea81242da34751dca41d4428bbdee1ec7b49a82abdf98567512b5496be93093cae38848a57fab285e4a4bf50e3553f3390f1cc93e73117000dd4b37883be6dd7dc02b15e4d073a9b8ee658c12cf4dbea0ad5e9d906f230533aa2d0814ddc33227f72c89dc56b6b729765449cf54b543d3f9764baebfe87d456f12cd56c339a82fde8eab51f5d7a407af01ea60394c349104203f4ad035159941dcbaedab3739961140f43bc8c2f39f344d2c739f2431fdf629d19317af03604f7faeb0a51e2c2cd34448ab980afe4b96f2bf22eb19f353f8edecba637e204cfeca099ca02c2c151702f5ae62480a6c1d070a24484ecf81fbac3acb46edcc8436838364d0647503594e70ae2054af6c7d6d2300f449f98e4cc99cfb698367aea115a40997a8e433fd8b08ed3e51e77e4e800033edf3db25daefe1e242595afb202a70ed7fc96c5984f5c00414a2f848f48330d398f
                ?>
    </body>
</html>
