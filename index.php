<!DOCTYPE html>
<html>
<head>

<title>NICS Help Home</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="includes/favicon.ico" rel="shortcut icon" />
<link href="includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#Annoucements {
    margin:0 auto;
    width:600px;
}

#searchmain {
	margin:30px auto;
	width:462px;
	height:30px;
}

#FAQs {
	margin:0 auto;
	width:650px;
}

#mainheader {
	margin:0;
	height:120px;
	background:url(images/banner.png);
	color:White;
}

#mainheaderbr {
	background:url(images/mainbannerbr.png) 100% 100% no-repeat;
	width:100%;
	height:120px;
}

#mainheaderbl {
	background:url(images/mainbannerbl.png) 0 100% no-repeat;
	width:100%;
	height:120px;
}

#mainsearch {
	vertical-align:top;
	padding:0;
	padding-top:50px;
}
</style>

</head>



<body>
<div id="mainheader"><div id="mainheaderbr"><div id="mainheaderbl">
<table style="padding-top:5px"><tr>
<td><a href="/nicshelp">
<img style="height:100px" alt="Help Home" src="images/NICS.png" /><!-- lllogo.png -->
</a></td>
<td><div>
<h1 style="font-size:28pt;margin:0">Next Generation Incident<br />Command System Help
</h1></div></td>
</tr></table>
</div></div></div>

<!-- Content area below -->
 
<table>
<tr>
<td id="sidebar">
<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/contents.php'; ?>
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
</td>

<td id="mainsearch">
<div class="mainarea">
<!-- Main body, contains search bar at focus -->

<!-- Getting rid of 5.2 changes banner
<div id="Announce" style="background-color:#CCCCFF">
<h1 style="text-align:center;margin:10px;color:#CC0000">NEW: 
<a href="documents/NICS 5-2 Announcement Doc v3.pdf" style="color:Blue">
NICS 5.2 Update Changes!</a></h1>
</div>
-->

<div id="FAQs">
<h3 style="text-align:center;margin:10px">Recommended Topics</h3>
<table class="padtable" style="width:650px;">
<tr>
<td><a target="_top" href="articles/frontpage.php#register">
Where can I request an account?</a></td>
<td><a target="_top" href="articles/incidents.php">
How do I join incidents?</a></td>
</tr>
<tr>
<td><a target="_top" href="articles/users.php">
How do I start a private chat?</a></td>
<td><!--<a target="_top" href="articleslock.php">
What does the lock icon on the left do?</a>-->
<a target="_top" href="articles/incidents.php">
How do I join rooms?</a></td>
</tr>
<tr>
<td><a target="_top" href="articles/data.php#data">
What are some useful data layers I can use?</a></td>
<td><a target="_top" href="articles/navigation.php">
How to navigate the map</a></td>
</tr>
<tr>
<td><a target="_top" href="articles/updown.php">
How to upload a .kml file</a></td>
<td><a target="_top" href="articles/sync.php">
How do I move others to my map location?</a></td>
</tr>
</table></div>


<br />
<h3 style="text-align:center;color:#CC3333">Check out the 
<a target="_top" href="videolibrary.php">Video Library</a> 
for quick tutorial and reference video clips!</h3>


</div>
</td></tr>
</table>

<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>
