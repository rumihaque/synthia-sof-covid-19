<?php 
$json =$string = file_get_contents("https://spreadsheets.google.com/feeds/list/1FwaT9Jjq5zVz6DIGdGa1KtFj3P6Ll4PNT0TZXR5Ro1M/od6/public/values/cokwr?alt=json");;
$data =json_decode($json);
$cases = $data->{'entry'}->{'gsx$cases'}->{'$t'};
$todayCases = $data->{'entry'}->{'gsx$todaycases'}->{'$t'};
$deaths = $data->{'entry'}->{'gsx$deaths'}->{'$t'};
$todayDeaths = $data->{'entry'}->{'gsx$todaydeaths'}->{'$t'};
$recovered = $data->{'entry'}->{'gsx$recovered'}->{'$t'};
$todayRecover = $data->{'entry'}->{'gsx$todayrecover'}->{'$t'};
$tests = $data->{'entry'}->{'gsx$tests'}->{'$t'};
$todayTests = $data->{'entry'}->{'gsx$todaytests'}->{'$t'};

echo '{
  "cases": "'.$cases.'",
  "todayCases": "'.$todayCases.'",
  "deaths": "'.$deaths.'",
  "todayDeaths": "'.$todayDeaths.'",
  "recovered": "'.$recovered.'",
  "todayRecover": "'.$todayRecover.'",
  "tests": "'.$tests.'",
  "todayTests": "'.$todayTests.'"
}';
// Data Fatch From Coronacase.xyz