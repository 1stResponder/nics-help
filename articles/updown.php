<!DOCTYPE html>
<html>
<head>

<title>Import/Export GIS Files ^ NICS Help</title>

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

<h1><u>Importing and Exporting GIS Files</u></h1>

<p> GIS data is used in many different applications. NICS has a 
function to import and export GIS data.</p>

<p><span class="bu">Importing GIS Data:  </span></p>

<p>Files can be uploaded to the NICS server from other GIS databases, 
but that capability is currently limited to selected administrators.  
However, once uploaded, these data layers can be accessed via the DATA 
pull down menu.  Below is a sample of many of these layers.  Note that 
some incident-specific folders have been automatically created in the 
“Upload” folder.</p>

<div class="figure"> 
<img class="main" src="../images/uploadfolder.jpg" alt="upload folder" />
</div>

<p><span class="bu"> Exporting GIS Data</span>:  To export data from a 
room, go to Tools => Room Management => Export Room and select either 
KML or SHAPE format.  The folder will be downloaded to your computer’s 
download folder.  You can then use it in another application (e.g., 
viewing a KML file in Google Earth) or send it to another user using 
conventional means (e.g., email attachment).</p>

<div class="figure">  
<img class="main" src="../images/exporttools.jpg" alt="room export menu" />
<p>Export the room from the tools menu</p>
</div>


<p>You can access the same KML URL by going to Tools => Room Management => 
Get Room Info and copy the URL from the popup window.</p>

<div class="figure">
<?php pagevideo('kml',false); ?>
<p>VIDEO: Using kml files</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>