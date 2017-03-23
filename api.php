<?php
    $SUMMONER_NAME = rawurlencode($_POST['nickname']);
    $SUMMONER_ID = "";
	$API_KEY = "RGAPI-6482CD9F-36BF-4871-ABD2-8E90525C7928"; // api key
	$REGION = "kr";
	
	$url = 'https://kr.api.pvp.net/api/lol/kr/v1.4/summoner/by-name/'.$SUMMONER_NAME.'?api_key=RGAPI-6482CD9F-36BF-4871-ABD2-8E90525C7928';
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
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
			<?php echo $result; ?>
        </div>
    </body>
</html>
