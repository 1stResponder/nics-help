<!DOCTYPE html>
<html>
<head>

<title>Types of NICS Users ^ NICS Help</title>

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
<tr>
<td class="sidebar">
<script type="text/javascript">
	writecontents(TableofContents);
</script>
</td>

<td class="content">
<div class="mainarea">
<h1><u>Types of NICS Users </u></h1>

<p>There are currently five separate classes of users in NICS:</p>
<p><i>Super User</i> – This is the role reserved for NICS developers and programmers.</p>
<p><i>Organization Administrator</i> - This is the individual (or group of individuals) in each organization that manages that organization’s membership in NICS, keeps contact information up-to-date, and supervises orientation and training of NICS.  Initially this role might be performed by someone not in the organization as the organization is getting started with NICS.  As the organization’s involvement grows, an Organization Administrator will be identified.</p>
<p><i>GIS Administrator</i> – This is an individual that works with GIS databases and has been assigned the duties of uploading data layers as appropriate for given incidents as well as general use.</p>
<p><i>NICS User:  Read, Copy, & Write </i>– This user can view all open rooms, copy material from those rooms for pasting into other locations (as permitted), and generate content (write) into authorized rooms, such as generating graphics and text.</p>
<p><i>NICS User: Read & Copy Only</i> – This user can view selected open rooms (e.g., the Incident Map) and copy material from these rooms for pasting into My Map.  </p>
<p>Their permissions are listed in the table below:</p>

<div class="figure">
<table width="650px" style="border:solid #003359 3px;margin: 0 auto">
<tr>
<th></th>
<th>View Rooms</th>
<th>Edit Rooms</th>
<th>Upload Layers</th>
<th>Organize Folders</th>
<th>Administer An Organization</th>
<th>Administer NICS</th>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<th>Super User</th><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<th>Organization Administrator</th><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<th>GIS Administrator</th><td>X</td><td>X</td><td>X</td><td>X</td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<th>NICS User: Read, Copy, & Write</th><td>X</td><td>X</td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<th>NICS User: Read & Copy Only</th><td>X</td>
</tr>
</table>
<p>Table of Privileges</p>
</div>

<u>Definitions:</u>
<ul>
<li>View Rooms: View a room through the NICS web interface.</li>
<li>Edit Rooms: Draw and Erase features in the room;  modify content.</li>
<li>Upload Layers: Access to the “Upload Tool.”</li>
<li>Organize Folders: "Right click" functionality to reorganize the data layer directory structure.</li>
<li>Administer An Organization: Access to the administrative interface. </li>
<li>Administer NICS: Access to the NICS administrative/development interface.</li>
</ul>


<div class="figure">
<?php pagevideo('usergroups',false); ?>
<p>VIDEO: Changing User Types</p>
</div>


</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>