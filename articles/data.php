<!DOCTYPE html>
<html>
<head>

<title>Data Layers ^ NICS Help</title>

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

<h1><span class="bu">Data Layers</span></h1>

<p>You can customize your view by overlaying different data layers in order
 to give you the combination of information you need.</p>

<p><span class="bu">Maps</span> represent most of the base layers, while 
<span class="bu">Data</span>, <span class="bu">Tracking</span>, and 
<span class="bu">Weather</span> layers place their information on top of the map.</p>

<h3 id="basedata">Maps:</h3>

<p>There are several types of maps, and new map types are added regularly.</p>

<ul>
<li><b>Google Physical Relief Map: </b> Elevation and street information</li>
<li><b>US Topo </b> – 7.5 min. Quadrangle Maps: USGS 7.5/15 mins. seamless topographical maps </li>
<li><b>Google Satellite Imagery Map:</b> Birds eye imagery of the Earth</li>
<li><b>Google Satellite and Streets Map: </b> Combination of Satellite and Streets</li>
<li><b>Google Streets Map: </b> Streets drawn and labeled</li>
<li><b>Open Street Map: </b> Open source mapping resource (street view)</li>
<li><b>FAA -  Sectional Aeronautical Charts</b></li>
</ul>

<div class="figure">
<img class="main" src="../images/baselayers.jpg" alt="base layers" />
<p>The Base Layers Menu</p>
</div>

<h3>Data Layers</h3>

<p>Data layers are the geo-information that can be placed on top of the Map layer. 
Layers are turned on and off by checking and unchecking boxes next to their name. 
You may also shut off all data layers by clicking the "Turn Off All Layers" button 
at the bottom of the drop down menu.</p>

<p>Data layers are organized in a tree file structure. In addition to NICS providing 
some general layers to every incident, NICS also creates an “incident folder” for each 
newly created incident that has any unique data for that incident.  This can be found 
in a folder with the incident’s name in the UPLOAD folder.  Furthermore, it is possible 
for authorized users to upload data from other sources, such as those listed in the Virtual Library. </p>

<h3 id="data">Some Example Data Layers</h3>
<ul>
<li><b>Geographical Boundaries/CA/CA DPA:</b> gives jurisdiction 
boundaries within California.</li>
<li><b>History & Statistics/Fire History/CA:</b> shows regions of 
major fires for the past 50 years in 10 year increments.</li>
<li><b>Utilities:</b> displays underground pipelines.</li>
</ul>

<p>Administrative and GIS Users can  
<a target="_top" href="updown.php">import data 
layers</a> under the “Data” menu. This 
creates new data layers in the "Upload" folder.</p>

<div class="figure">
<p>The Data Layers Tree and Menu</p>
<img class="main" height="400px" src="../images/datalayers.jpg" alt="data layers" />
</div>

<h3><span class="bu">Tracking Layers:</span></h3>

<b>Tracking</b> layers, unlike data layers, are very dynamic and designed specifically 
to allow the mapping/plotting of GPS-enabled devices within NICS.  These are usually based upon near-real 
time data feeds from instrumented vehicles, aircraft, apparatus, and personnel, also called Automated 
Vehicle Location (AVL), Automated Flight Following (AFF) and Personal Location Information (PLI).  Some 
uses for Tracking layers are for managing units in a field, following a moving target, or just marking 
hotspots of activity while in the field.</p>

<h3><span class="bu">Weather Layers:</span></h3>

<p><b>Weather</b> layers are also dynamic layers pertaining to current meteorological 
conditions. They can be turned on and off from the weather menu in the upper right corner of the map.</p>

<div class="figure">
<img class="main" src="../images/weatherlayers.jpg" alt="weather layers" />
<p>The Weather Layers Menu</p>
</div>

<div class="figure">
<?php pagevideo('data',true); ?>
<p>VIDEO: Utilizing data layers</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>