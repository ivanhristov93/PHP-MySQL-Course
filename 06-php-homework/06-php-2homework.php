<!DOCTYPE>
<html>
<body>
<table border="1">
<?php
    $array = array();

	$array[] = array('Facebook'=> 'http://facebook.com/');
    $array[] = array('AБВ'=>'http://www.abv.bg/');
    $array[] = array('Github'=>'http://www.github.bg/');
    $array[] = array('Google' =>'https://www.google.bg/');
    $array[] = array('YouTube'=>'http://www.youtube.com/');

	
    
foreach($array as $var) 
{
    foreach($var as $key=>$value)
    {
    	echo"<tr>";
    	echo "<td> $key </td>";
        echo "<td><strong><a href='$value'> $value </a></strong></td>";
        echo "</tr>";
    }
}
  
?>
</table>
</body>
</html>