<!DOCTYPE html>
<html style="
    background-color: beige;">
 <body style="
    text-align: center;">
 <head>
 <title>
Learnin Stuff
 </title>
 </head>
 <?php
 if (isset($_POST['name'])){
 $name=$_POST['name'];
 if(!empty($name)){

 $handle=fopen('x.txt','w');
 fwrite($handle,$name."\n");
 fclose($handle);
 echo('written  ');

 $readin=file('x.txt');
 foreach($readin as $fname)
 echo $fname;


 }
 else
 {
 echo('Enter Name');
 } 

 }
 ?>
 <form action="Thirdpage.php" method="POST">
 Username: <input type="text" name="name" style="
    border-bottom-color: rosybrown;
    border-radius: 7px;
">
 <input type="submit" value="Submit" style="
    border-radius: 7px;
    background-color: blanchedalmond;
">
 </form>


 <?php
 $reading=file('y.txt');
 foreach($reading as $vnum)
 $vnewnum=$vnum-'0';

 echo 'visitor number '.(++$vnewnum);
 $handle1=fopen('y.txt','w');
 fwrite($handle1,$vnewnum);
 fclose($handle1);

 ?>
 </body>
</html>
