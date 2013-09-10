<?php
/**
* 140dev_config.php
* Constants for the entire 140dev Twitter framework
* You MUST modify these to match your server setup when installing the framework
* 
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.20
*/
// Directory for db_config.php 
define('DB_CONFIG_DIR', '/wwwroot/digitalinc.ie/visual-with-streaming/streaming-api/db/'); 

// Server path for scripts within the framework to reference each other 
define('CODE_DIR', '/wwwroot/digitalinc.ie/visual-with-streaming/streaming-api/'); 

// External URL for Javascript code in browsers to call the framework with Ajax 
define('AJAX_URL', 'http://digitalinc.ie/visual-with-streaming/streaming-api/'); 



// OAuth settings for connecting to the Twitter streaming API
// Fill in the values for a valid Twitter app
define('TWITTER_CONSUMER_KEY','oXRHpijPXqkmpI01vB3XKQ');
define('TWITTER_CONSUMER_SECRET','EBxsXvSZaDeiN08kHHtWaiiZyiGOdpsIP0UGBwy2g');
define('OAUTH_TOKEN','1615587769-mhzmHR2bWQVlueppiW1mjwkrGMdGdw4qmoC6IMU');
define('OAUTH_SECRET','AcKfb0CjRi3mun0dpFQAhubh4Br8hLmlwac8G4IDJE');

// MySQL time zone setting to normalize dates
define('TIME_ZONE','Ireland/Dublin');

// Settings for monitor_tweets.php
define('TWEET_ERROR_INTERVAL',10);
// Fill in the email address for error messages
define('TWEET_ERROR_ADDRESS','siobhan@digitalinc.ie');
?>