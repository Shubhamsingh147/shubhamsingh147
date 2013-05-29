<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shubham's Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="resource-type" content="document" />
<meta name="audience" content="all" />
<meta name="distribution" content="global" />
<meta name="google-site-verification" content="" />
<meta name="msvalidate.01" content="" />
<meta name="robots" content="INDEX, FOLLOW" />
<meta name="revisit-after" content="5 days" />
<meta name="keywords" content="shubham singh,JPS,IIT Roorkee,Shubhamsingh,shubhamsingh147," />

<style>
p.lnk{text-align:center;
padding-top:15px;
padding-bottom:15px;
padding-right:30px;
padding-left:30px;
border-radius: 10px 10px;
	background-color: rgba(11,11,11,0.75);
	border:rgb(40, 40, 230);
	box-shadow: 5px 5px 20px rgba(20, 20, 20, 0.8);
font-size:20px;
font-color:WHITE;
}
a:link{color:white;}
a:visited{color:white;}
p.padding{text-align:center;
padding-top:25px;
padding-bottom:25px;
padding-right:50px;
padding-left:50px;
border-radius: 10px 10px;
	background-color: rgba(11,11,11,0.75);
	border:rgb(40, 40, 230);
	box-shadow: 5px 5px 20px rgba(20, 20, 20, 0.8);
font-size:200%;}


p.g{text-align:centre;}
body{background-color:transparent;position:relative;}

img{
max-height:100%;
MARGIN:AUTO;
display:block;
font-color:black;
}

img.p{max-height:40px;
display:block;margin:auto;}


</style>


<body>  



<script>
</script>  



<p class="padding"> 

<a href="Secondpage.php">PAST</a> &nbsp; &nbsp;&nbsp; &nbsp;
<a href="Thirdpage.php">PRESENT</a>  &nbsp; &nbsp;&nbsp; &nbsp;
<a href="Fourthpage.php">FUTURE</a>  </br>
</p> 


<img src="images/my.jpg"  >
<p class="lnk"> Visit me on Facebook!!</p>
<a href="http://www.facebook.com/shubhamsingh147" target="_blank"><img class="p" src="images/fb.jpg"> </a>
<p class="g">You are visitor number</p>



<?php
$handle = fopen ("welcome.txt", 'r');
$count = fread($handle, filesize("welcome.txt"));
echo ($count);
fclose($handle);
$count++;

$handle = fopen ("welcome.txt", 'w');
$count=$count."";
echo fwrite($handle,$count);  
fclose ($handle);
?>


</body>
</head>
</html>
