<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("FarmersMarket_db", $con) or die(mysql_error());
/*$result=mysql_query("SELECT * from mix_data where FMID=1000023",$con);
if(!$result)
{
	die(mysql_error());
}
else
{
 while($row=mysql_fetch_array($result))
 {
 echo $row['MarketName'] ;
 }
}*/
?>