<?php
     $username = "DB USER NAME"; 
    $password = "DB PASSWORD";   
    $host = "DB HOSTNAME";
    $database="DB NAME";
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

	$q="";

	if( isset($_GET) && isset($_GET['q']) ){
		$q=$_GET['q'];
	} else {
		die('no params provided');
	}

 	$myquery = sprintf("SELECT tt.tag, count(t.tweet_id), DATE_FORMAT(t.created_at, '%%j') FROM `tweets` AS t
		INNER JOIN tweet_tags AS tt
		ON tt.tweet_id = t.tweet_id
		WHERE tt.tag='%s' 
		GROUP BY DATE_FORMAT(t.created_at, '%%j')" , mysql_real_escape_string($q));
    $query = mysql_query($myquery);
    
    if ( ! $myquery ) {
        echo mysql_error();
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    
    echo json_encode($data);     
     
    mysql_close($server);
?>