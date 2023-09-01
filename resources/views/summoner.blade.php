@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html>
<head>
    <title>Summoner Info</title>
</head>
<body>
    <h1>Summoner Information</h1>
    <p>Summoner Name: {{ $data['name'] }}</p>
    <p>Summoner Level: {{ $data['summonerLevel'] }}</p>
</body>
</html>
