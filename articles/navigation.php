<!DOCTYPE html>
<html>
<head>

<title>Navigating the Map ^ NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="../includes/favicon.ico" rel="shortcut icon" />
<link href="../includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="../includes/articlejs.min.js" type="text/javascript"></script>

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
<tr><td class="sidebar">
<script type="text/javascript">
	writecontents(TableofContents);
</script>
</td>

<td class="content">
<div class="mainarea">

<h1><u>Navigating the Map</u></h1>

<p>Standard map control is achieved through a variety of methods. One way is by 
using the standard controls on the left corner of the map region.</p>

<div class="figure" >
<img class="main" src="../images/navigationcontrols.jpg" alt="The navigation controls" />
<p>Zoom and Pan options</p>
</div>

<p id="zoom">Clicking on the magnifying glass icons will zoom you in and out of the center 
of your view. Double clicking on a location or using your scroll wheel will zoom the map in 
and out centered on your mouse. Alternatively, you can use the zoom box tool to zoom into a selected area.</p>

<div class="figure">
<img class="main" width="400px" src="../images/Main Toolbar-final-6Sep12.jpg" alt="Zoom" />
<p>Zoom box is the 3rd tool from the left, shown as the magnifying glass icon</p>

</div>
<p id="pan">Users can pan across the map by using the navigation arrows for up, down, left, and right on the upper 
left corner of the map. Alternatively you can click and drag the map when using the Drag/Hand tool.</p>

<p>In the <a target="_top" href="sync.php">
Map Sync</a> window, you can allow other users to move your map, or move others to your current location (or view).</p>
<!-- No more overview map?
<div class="figure">
<img class="main" src="../images/overviewmap.jpg" alt="Overview map" />
<p>The Overview Map</p>
</div>

<p>To move over large areas use the overview map. It can be opened 
from the Tools menu under <i>Window Management</i>. It displays a 
mini-map where you can drag your viewing rectangle across larger areas.</p>
-->
<div class="figure">
<?php pagevideo('navigation',true); ?>
<p>VIDEO: Navigating the map</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>