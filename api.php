<?php
    $SUMMONER_NAME = rawurlencode($_POST['nickname']);
    
	$API_KEY = "RGAPI-6482CD9F-36BF-4871-ABD2-8E90525C7928"; // api key
	$REGION = "kr";
	
	$url = 'https://kr.api.pvp.net/api/lol/kr/v1.4/summoner/by-name/'.$SUMMONER_NAME.'?api_key=RGAPI-6482CD9F-36BF-4871-ABD2-8E90525C7928';
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$summoner = curl_exec($ch);

	$summoner = json_decode($summoner,true);
	
 	foreach($summoner as $key=>$value){
		$nickname = $key;
		break;
	}

	$SUMMONER_ID = $summoner[$nickname]["id"];

	//소환사 정보

	$url = 'https://kr.api.pvp.net/api/lol/kr/v1.3/stats/by-summoner/'.$SUMMONER_ID.'/ranked?api_key=RGAPI-6482CD9F-36BF-4871-ABD2-8E90525C7928';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$rank_most = curl_exec($ch);

	$rank_most = json_decode($rank_most,true);

	foreach($rank_most as $key=>$value){
		$most = $key;
		break;
	}
	echo $rank_most[$most];



?>
<html>
    <head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Riot User Search</h1>
			
        </div>
    </body>
</html>
