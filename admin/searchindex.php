<!DOCTYPE html>
<html>
<head>

<title>Search Indexer - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="../includes/favicon.ico" rel="shortcut icon" />
<link href="../includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="../includes/search.js" type="text/javascript"></script>

</head>



<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/docheader.php'; ?>
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
<!-- Content area below -->
 
<table class="body">
<tr>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/contents.php'; ?>

<td class="content">
<div class="mainarea">

<?php
if (isset($_POST["rawhtml"])){
$rawhtml = $_POST["rawhtml"];
if (empty($_POST["rawhtml"])){
$ok1 = false;}
else{$ok1 = true;}}
else{$rawhtml = NULL; $ok1 = false;}

if (isset($_POST["keywords"])){
$keywords = $_POST["keywords"];}
else{$keywords = NULL;}

if (isset($_POST["url"])){
$url = $_POST["url"];
if (empty($_POST["url"])){
$ok2 = false;}
else{$ok2 = true;}}
else{$url = NULL; $ok2 = false;}
?>

<h1>Search Indexer</h1>

<ul>
<li>Copy Paste your raw HTML source into the form below</li>
<li>Add some keywords to your page if you want to</li>
<li>Click Submit</li>
</ul>

<form id="indexer" onsubmit="confirm('Submit page to be indexed?')" method="post" action="">
<b>Url (from nicshelp root ex. "articles/page.php"):</b><br />
<input type="text" autocomplete="off" name="url" size="113" value="
<?php echo $url; ?>" /><br />
<b>Raw HTML:</b>
<textarea name="rawhtml" rows="25" cols="85"><?php
echo $rawhtml; ?></textarea>
<b>Keywords (Optional):</b>
<textarea name="keywords" rows="10" cols="85"><?php
echo $keywords; ?></textarea>
<b>MySQL 'Search' Password:</b><input type="password" name ="password" />
<input type="submit" value="Submit" />
</form>
<br />
<?php
if ($ok1 && $ok2){
//Parse html
function striphtml($document){
$search = array('@<script[^>]*?>.*?</script>@si',		   // Strip out javascript
				'@<div class="footer"[^>]*?>.*?</div>@si',  // Strip out footer
				'@<[\/\!]*?[^<>]*?>@si'					 // Strip out HTML tags
);
$text = preg_replace($search, '', $document);
return $text;
}

$h1begin = strpos($rawhtml, '<h1>');
$h1end = strpos($rawhtml, '</h1>');
$h1length = $h1end - $h1begin;

$sample = striphtml(substr($rawhtml, $h1end));
$title = substr($rawhtml, $h1begin+4, $h1length-4);

//Connect to the database
$link = @mysql_connect("localhost","search",$_POST['password'])
or die('Incorrect Password');  
mysql_select_db("nicshelp", $link)
or trigger_error("Database connection error:".mysql_error($link));

//Construct and submit query
$fullquery = sprintf("INSERT INTO pages
			 (Url,Title,Sample,Keywords)VALUES 
			 ('%s','%s','%s','%s')",
			 mysql_real_escape_string($url),
			 mysql_real_escape_string($title),
			 mysql_real_escape_string($sample),
			 mysql_real_escape_string($keywords));
mysql_query($fullquery);

//Show sequence is done
echo "Data Submitted!";
mysql_close($link);
}
else {echo "Please complete the form";}
?>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>