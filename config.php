<?php
/*--------------------------------------------------------------------------------------------
|	@desc:		simple php pagination
|	@author:	Aravind Buddha
|	@url:		http://www.techumber.com
|	@date:		12 August 2012
|   @email       aravind@techumber.com
|	@license:	Free!, to Share,copy, distribute and transmit , 
|               but i'll be glad if i my name listed in the credits'
---------------------------------------------------------------------------------------------*/
$mysql_hostname = "localhost";  //your mysql host name
$mysql_user = "root";			//your mysql user name
$mysql_password = "";			//your mysql password
$mysql_database = "trademobile";	//your mysql database

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Error on database connection");











