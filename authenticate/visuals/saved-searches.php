<?php session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Saved Searches</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/graph-styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://d3js.org/d3.v3.js"></script>

</head>

<body>

<section class="top-ten-searches">
    	<h1>Top-Ten Searches</h1>
        <ul>
            <li><a href="graph-search-with-caching.php?q=picnic">picnic</a></li>
            <li><a href="graph-search-with-caching.php?q=cats">cats</a></li>
        	<li><a href="graph-search-with-caching.php?q=breakingbad">breakingbad</a></li>
            <li><a href="graph-search-with-caching.php?q=school">school</a></li>
            <li><a href="graph-search-with-caching.php?q=syria">syria</a></li>
            <li><a href="graph-search-with-caching.php?q=ballyfermot">ballyfermot</a></li>
            <li><a href="graph-search-with-caching.php?q=dublin">dublin</a></li>
            <li><a href="graph-search-with-caching.php?q=jamieoliver">jamieoliver</a></li>
            <li><a href="graph-search-with-caching.php?q=russia">russia</a></li>
            <li><a href="graph-search-with-caching.php?q=jobbridge">jobbridge</a></li>
        </ul>
    
</section>
    
    
</body>
</html>