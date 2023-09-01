@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html>
<head>
    <title>Summoner Info</title>
</head>
<body>
    <h1>Summoner Information</h1>
    <p>Summoner Name: {{ $data['name'] }} Este es mi nombre de invocador</p>
    <p>Summoner Level: {{ $data['summonerLevel'] }} Este es mi nivel de invocador

    </p>
</body>
</html>
