<!DOCTYPE html>
<html>
<head>

<title>Site Help - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="includes/favicon.ico" rel="shortcut icon" />
<link href="includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="includes/search.js" type="text/javascript"></script>

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
<h1>Site Help</h1>

<h3>I can't see any video players</h3>

<p>This site uses the new html5 &lt;video&gt; tags to display video
content. If the videos are not showing, please upgrade to the newest
browser version.
<ul>
<li><a href="http://www.mozilla.com/en-US/firefox/new/" target="_blank">
Firefox 5</a></li>
<li><a href="http://www.google.com/chrome/" target="_blank">
Chrome 12</a></li>
<li><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home" target="_blank">
Internet Explorer 9</a></li>
<li><a href="http://www.apple.com/safari/" target="_blank">
Safari 4</a></li>
<li><a href="http://www.opera.com/" target="_blank">
Opera 11</a></li>
</ul>
</p>

<h3>The videos aren't playing</h3>

<p>Videos on this site use the new open format 
<a target="_top" href="http://www.webmproject.org">WebM</a> to keep 
costs low and avoid licensing issues.</p>
<p>If you are using IE9 to view 
this site, please download the <a href="http://tools.google.com/dlpage/webmmf" target="_blank">
Webm for IE</a> plugin.</p>
<p>If you are using Safari, download the <a href="http://code.google.com/p/webm/downloads/detail?name=WebM%20Component%20Installer.pkg&can=2&q=" target="_blank">
Webm for Quicktime</a> plugin.</p>

<h3>The videos are low quality</h3>
<p>Chances are you are using Firefox 3.5-4.0<br />
These versions of Firefox use the Ogg format, which does not compress 
as well. Videos are encoded to a low bitrate in order to allow use of 
the site in low bandwith (<300kbps) conditions. Upgrade to the latest 
browser.</p>

<h3>Search shows up errors or blank</h3>
<p>Try one of the following things:</p>
<ol><li>Words under 3 letters are not helpful to search. Use longer 
words.</li>
<li>Use different words to describe what you are trying to find.The 
more words the better.</li>
<li>The navigation to the left can lead you to what you are looking 
for. Check each chapter heading.</li></ol>

<h3>NICS isn't updating</h3>
<p>Occasionally, your browser may lose connection with the NICS 
server. This is shown via a notification under the navigation 
controls.</p>
<div class="figure">
<img class="main" src="images/disconnected.jpg" alt="Disconnection notification" />
<p>The disconnect notification</p>
</div>
<p>NICS will try to regain connection to the servers, after which it 
will refresh all the rooms you are subscribed to</p>

</div></td>
</tr></table>

<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>