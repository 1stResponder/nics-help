<!DOCTYPE html>
<html>
<head>

<title>Video Library - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="includes/search.js" type="text/javascript"></script>
<link href="includes/favicon.ico" rel="shortcut icon" />
<script type="text/javascript">
    function changevid(name) {
        var serveraddr = "<?php print$_SERVER['SERVER_ADDR']?>";
        document.getElementById("player").innerHTML =
            "<video controls='controls' poster='videos/" + name +
            ".jpg' preload='none'>\n<source src='videos/" + name +
            ".webm' type='video/webm' /><source src='videos/" + name +
            ".mp4' type='video/mp4' /><source src='videos/" + name +
            ".ogg' type='video/ogg' /><object type='application/x-shockwave-flash' " +
            "data='http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf' width='640' height='360'>" +
			"<param name='movie' value='http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf' />" +
			"<param name='flashVars' value=\"config={\n" +
			"'playlist':['http://" + serveraddr + "/nicshelp/videos/" + name +
			".jpg',{'url':'http://" + serveraddr + "/nicshelp/videos/" + name +
			".mp4','autoPlay':false}], 'plugins':{'controls':{'fullscreen':false}}" +
			"}\" /></object></video>";
    }
</script>
<style type="text/css">
.hidden {
	display:none;
}

div.tabHeading { 
	font-size:1.2em;
	font-weight:bold;
	color: #FFFFFF;
	padding:10px;
	margin:1px;
	border:solid black 1px;
	border-radius:10px;
	background:url(images/banner.png);
	background-position:0px -40px;
}

div.tabHeading:hover {
	background-position:0px -79px;
}

div.tabHeading:active {
	background-position:0px 0px;
}
</style>

</head>



<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/header.php'; ?>
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

<h1><u>Video Library</u></h1>
<p>This page contains all the video tutorials found on the various 
pages of the site, as well as other videos of NICS shown in the field.</p>
<p>Click on the videos to play them</p>
<div class="figure">
<table width="700px">
<tr>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('nicsdemoFeb2014small')">NICS Demo</div>
	</td>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('data')">Data Layers</div>
	</td>
</tr>
<tr>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('incidents')">Incidents and Rooms</div>
	</td>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('toolbar')">Main Toolbar</div>
	</td>
</tr>
<tr>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('windows')">Windows and Panels</div>
	</td>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('drawing')">Drawing</div>
	</td>
</tr>
<tr>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('navigation')">Navigating the Map</div>
	</td>
	<td width="350px">
		<div class="tabHeading" onclick="changevid('chat')">Chatting</div>
	</td>
</tr>
</table>


<div id="player">
</div></div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>
