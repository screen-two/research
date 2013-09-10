<?
// ignore the caching for the moment /////////////////////////////
//$cache = 'tweets-cache.txt';
//$date = 'tweets-date.txt';

//$currentTime = time(); // Current time

// Get cache time
//$datefile = fopen($date, 'r');
//$cacheDate = fgets($datefile);
//fclose($datefile);

//check if cache has expired
//if (floor(abs(($currentTime-$cacheDate) / 3600)) <= $_GET['expiry'] && $cacheDate) {

	//$cachefile = fopen($cache, 'r');
	//$data = fgets($cachefile);
	//fclose($cachefile);

	//echo $data;

//} else { //renew the cache


  //We use already made Twitter OAuth library
  //https://github.com/mynetx/codebird-php 
  require_once ('codebird.php');
// put your own keys here
$CONSUMER_KEY = 'oXRHpijPXqkmpI01vB3XKQ';
$CONSUMER_SECRET = 'EBxsXvSZaDeiN08kHHtWaiiZyiGOdpsIP0UGBwy2g';
$ACCESS_TOKEN = '1615587769-mhzmHR2bWQVlueppiW1mjwkrGMdGdw4qmoC6IMU';
$ACCESS_TOKEN_SECRET = 'AcKfb0CjRi3mun0dpFQAhubh4Br8hLmlwac8G4IDJE';

  //Get authenticated
  Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
  $cb = Codebird::getInstance();
  $cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);


  //retrieve posts
  $q = $_POST['q'];
  $count = $_POST['count'];
  $api = $_POST['api'];

  //https://github.com/mynetx/codebird-php 
  //https://github.com/mynetx/codebird-php 
  $params = array(
  	'screen_name' => $q,
  	'q' => $q,
  	'count' => $count
  );

  //Make the REST call
  $data = (array) $cb->$api($params);

  // update cache file
  $cachefile = fopen($cache, 'wb');
  fwrite($cachefile,utf8_encode(json_encode($data)));
  fclose($cachefile);

  // update date file
  $datefile = fopen($date, 'wb');
  fwrite($datefile, utf8_encode(time()));
  fclose($datefile);

  //Output result in JSON, getting it ready for jQuery to process
  echo json_encode($data);
//}
?>