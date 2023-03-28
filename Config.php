<?php

$temp_file_name_wp = "/tmp/ErrorAlertSys.txt";
//Oracle Paths

putenv("ORACLE_HOME=/home/orcl10g/product/client_1/"); 
putenv("LD_LIBRARY_PATH=/home/orcl10g/product/client_1/lib");

//$date_time_zone = "Zambia/Lusaka";

//Logger details
$current_cnt_file = "/home/ritika/SPS/SPS_5.1.0.0/php_alert/curr_cnt_file";
$log_file = "/home/ritika/SPS/SPS_5.1.0.0/php_alert/alert.log";
$log_max_file_cnt = 15;
$log_max_file_size = 1024;


//Lock file path to ensure only one instance is running
$lock_file_path = "/home/ritika/SPS/SPS_5.1.0.0/php_alert";


//Actual directory where alert files are created
$alertDir = "/home/ritika/SPS/SPS_5.1.0.0/Trunk/Alert_dir";

//Stop file name
$stop_file_name = "/home/ritika/SPS/SPS_5.1.0.0/php_alert/Alert.Stop";


if(file_exists($stop_file_name))
{
	file_put_contents($temp_file_name_wp, "Application is stopped at the moment\n", FILE_APPEND);
	exit;
}

//if(!date_default_timezone_set($date_time_zone))
//{
//	file_put_contents($temp_file_name_wp, "Invalid time zone set\n", FILE_APPEND);
//	exit;
//}

// Connect to the database server and select database
$connection_SPS = oci_connect('PROV_PROD', 'PROV_PROD', 'NETONEDEV');

// Connect to the SMS database server and select the database
$connection_SMS = oci_connect('PROV_PROD', 'PROV_PROD', 'NETONEDEV');

if(!$connection_SPS)
{
	file_put_contents($temp_file_name_wp, "Unable to open connection to Database : Alert System\n", FILE_APPEND);
	exit;
}

?>

