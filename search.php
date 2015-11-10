<!DOCTYPE html>
<html>
<head>

<title>Search Results - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="includes/favicon.ico" rel="shortcut icon" />
<link href="includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="includes/search.js" type="text/javascript"></script>
<style type="text/css">
p.samplep {
	margin-top:0;
	margin-left:10px;
	font-size:.8em;
	font-style:italic;
}
</style>

</head>

<?php
/*
 * Copyright (c) 2008-2015, Massachusetts Institute of Technology (MIT)
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this
 * list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 *
 * 3. Neither the name of the copyright holder nor the names of its contributors
 * may be used to endorse or promote products derived from this software without
 * specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
//Define the query variable early
$query = 
stripslashes(
trim(
preg_replace('/\W\s/','',$_GET["helpquery"])));
?>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/header.php'; ?>

<!-- Content area below -->

<table class="body">
<tr>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/contents.php'; ?>

<td class="content">
<div class="mainarea">
<h1>Search Results</h1>

<?php
//Connect to the database
$link = mysql_connect("localhost","search","Query")
or trigger_error("MySQL connection error:".mysql_error($link));  
mysql_select_db("nicshelp", $link)
or trigger_error("Database connection error:".mysql_error($link));

//Combined full text and like query building
$fulltextquery = sprintf("MATCH(Title, Keywords, Sample) AGAINST('%s')",
				 mysql_real_escape_string($query));
$explodequery = explode(" ", $query);
$likequery = "";
foreach ($explodequery as $oneword) {
	$likequery = $likequery.sprintf("Keywords LIKE '%s' OR ",
				 mysql_real_escape_string($oneword));
}

//submit query and time it
$start = microtime();
$fullquery = "SELECT *,$fulltextquery AS score FROM pages WHERE $likequery
		 $fulltextquery ORDER BY score DESC";
$results = mysql_query($fullquery);
$stop = microtime();
$time = round($stop-$start,4);

//query length
$numresults = mysql_num_rows($results);

//display the results
//error message if no results
if ($numresults == 0) {
	echo "<h4>Sorry, No Search Results!</h4>
	<p>Try one of the following things:</p>
	<ol>
	<li>Check your spelling</li>
	<li>Words under 3 letters search poorly. Use longer words.</li>
	<li>Use different words to describe what you are trying to find.
	The more words the better.</li>
	<li>The navigation to the left can lead you to what you are looking for.
	Check each chapter heading.</li>
	</ol>";
}

else {
	$i = 0;
while ($row = mysql_fetch_assoc($results)){
	$resultsarray[$i]['Title'] = $row['Title'];
	$resultsarray[$i]['Url'] = $row['Url'];
	$resultsarray[$i]['Sample'] = substr($row["Sample"],0,250);
	$i++;
}

$i = 0;
foreach ($explodequery as $singlequery) {
	if (strrpos($singlequery,"s")+1 == strlen($singlequery)){
		$pregfind[$i] = "'$singlequery?'i";
		$i++;
	}
	else {
		$pregfind[$i] = "'$singlequery"."s?'i";
		$i++;
	}
}

$i = 0;
foreach ($resultsarray as $argh){
		$resultsdisplay[$i]['Title'] = preg_replace ($pregfind,'<b>$0</b>',$argh['Title']);
		$resultsdisplay[$i]['Url'] = $argh['Url'];
		$resultsdisplay[$i]['Sample'] = preg_replace ($pregfind,'<b>$0</b>',$argh['Sample']);
		$i++;
}
	
	if ($numresults == 1) {
		echo "<h4>Showing 1 Result";
	}
	else {
		echo "<h4>Showing ".$numresults." Results";
	}
	/*echo " - Query took ".$time." seconds</h4>";
	Show timer by uncommenting and removing the next echo line*/
	echo "</h4>";
	foreach ($resultsdisplay as $row) {
		printf('<div class="searchresult">
		<a target="_top" href="/nicshelp/%s">%s</a><br /><p class="samplep">%s</p>
		</div>',$row["Url"],$row["Title"],$row["Sample"]."...");
	}
}
mysql_free_result($results);
mysql_close($link);
?>
</div></td>
</tr></table>

<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>