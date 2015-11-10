<!DOCTYPE html>
<html>
<head>

<title>TITLE - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="../includes/favicon.ico" rel="shortcut icon" />
<link href="../includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="../includes/articlejs.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function changevid(name) {
        document.getElementById("player").innerHTML =
            "<video controls='controls' poster='../videos/" + name +
            ".jpg' preload='none'>\n<source src='../videos/" + name +
            ".webm' type='video/webm' /><source src='../videos/" + name +
            ".mp4' type='video/mp4' /><source src='videos/" + name +
            ".ogg' type='video/ogg' /><object type='application/x-shockwave-flash' " +
            "data='http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf' width='640' height='360'>" +
			"<param name='movie' value='http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf' />" +
			"<param name='flashVars' value=\"config={\name" +
			"'playlist':['http://127.0.0.1/nicshelp/videos/" + name +
			".jpg',{'url':'http://127.0.0.1/nicshelp/videos/" + name +
			".mp4','autoPlay':false}], 'plugins':{'controls':{'fullscreen':false}}" +
			"}\" /></object></video>";
    }
</script>
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
<td class="sidebar">
<script type="text/javascript">
    writecontents(TableofContents);
</script>
</td>

<td class="content">
<div class="mainarea">
<h1>TEST AREA</h1>

<ul>
<li><a href="#" onclick="changevid('incidents');">Incidents</a></li>
<li><a href="#" onclick="changevid('windows');">Windows</a></li>
<li><a href="#" onclick="changevid('toolbar');">Toolbar</a></li>
<li>Drawing</li>
</ul>
<div id="player">
<video controls='controls' poster='../videos/novideo.png' preload='none'>
</video>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>