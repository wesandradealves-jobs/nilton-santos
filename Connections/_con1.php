<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con1 = "mysql12.pepachino.com";
$database_con1 = "pepachino13";
$username_con1 = "pepachino13";
$password_con1 = "clarte502";
$con1 = mysql_pconnect($hostname_con1, $username_con1, $password_con1) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_con1, $con1);
?>