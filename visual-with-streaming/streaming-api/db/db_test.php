<?php 
/**
* db_test.php
* Use this script to test your database installation 
* 
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.20
*/
ini_set('display_errors', 'On');
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "/wwwroot/digitalinc.ie/visual-with-streaming/streaming-api/db/error.log");

require_once('./140dev_config.php');

require_once('./db_lib.php');

$oDB = new db;

print '<strong>Twitter Database Tables</strong><br />';
$result = $oDB->select('SHOW TABLES');
while ($row = mysqli_fetch_row($result)) {
  print $row[0] . '<br />';
}

?>