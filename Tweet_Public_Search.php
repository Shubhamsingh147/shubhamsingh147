<html>
<head>
<title>SearchForNoise</title>
</head>
<body onload="form.q.focus()" style="background-image:url('images/background.jpg'); background-attachment: fixed;">
<form action="Tweet_Public_Search.php" method="GET" onsubmit="encode()" name="form" style="font-size: 1.5em;"> 
Search for any Tweet: <br>
<input rows="5" cols="20" type="text" name= "q"  style="border-color: cornsilk;
border-radius: 6px;
font-size: 1.7em;
font-family: cursive;" />
<br>
(To search for users- type "from:<user-name>" without "".)
</form>
</body>
<html>
<script>
function encode()
{
var str=document.form.elements['q'].value;
//document.form.elements['q'].value=str.split(' ').join('+');
document.form.elements['q'].value=encodeURIComponent(str);
}
</script>
<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "143350346-RhVdSwbsmh85ypkXYhBCaeIbtEW7f1OzI0BcV3I4",
'oauth_access_token_secret' => "vQ5t9ZRDqzQnonjaYii6VnEoJAMoL11ldgVwox5u1LwZd",
'consumer_key' => "dhrlIwmqW11JPbSw1K338Q",
'consumer_secret' => "DSOawjudhigl2iT3PaDBJnXeKwHDLOh58nmrI2jA"
);
$url= "https://api.twitter.com/1.1/search/tweets.json";
$requestMethod = "GET";
if (isset($_GET['count'])) {$user = $_GET['count'];} else {$count = 25;}
if (isset($_GET['q']))  {$q = $_GET['q']; $getfield = "?q=$q&count=$count&lang=en";} 
else 
$getfield = "?q=&count=$count&lang=en";
$twitter = new TwitterAPIExchange($settings);
$items = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),TRUE);
 echo "<hr /> ";echo "<hr /> ";
foreach($items['statuses'] as $string)
    {
        //echo "Time and Date of Tweet: ".$string['created_at']."<br>";
        echo "Tweet: ".$string['text']."<br />";
        echo "Tweeted by: ". $string['user']['name']."<br />";
        echo "Screen name: ". $string['user']['screen_name']."<br />";
        //echo "Followers: ". $string['user']['followers_count']."<br />";
        //echo "Friends: ". $string['user']['friends_count']."<br />";
        //echo "Listed: ". $string['user']['listed_count']."<br />";
echo "<hr />";
    }
?>	
