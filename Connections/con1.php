<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"


/*$hostname_con1 = "botafogo.mysql.globoi.com";
$database_con1 = "botafogo";
$username_con1 = "usr_botafogo";
$password_con1 = "FcxOmXkf";*/


date_default_timezone_set("UTC");

$hostname_con1 = "186.202.152.100";
$database_con1 = "pepachino13";
$username_con1 = "pepachino13";
$password_con1 = "clarte502";

$con1 = mysql_pconnect($hostname_con1, $username_con1, $password_con1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>