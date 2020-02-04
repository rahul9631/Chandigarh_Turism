<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ChandigarhTourism';
@mysql_connect($host,$username,$password) or die('plese check username or password');
 @mysql_select_db($dbname)or die('not connected to database');



?>