<!DOCTYPE html>
<html>
<head>

<title>Incidents and Rooms ^ NICS Help</title>

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

<h1><u>Incidents and Rooms</u></h1>

<p>Like ICS, NICS is organized by named <span class="bu">Incidents</span>. 
Users are able to select and join an incident and then observe, copy, 
collaborate or share with others also in that incident.</p>

<p>Within each Incident are separate workspaces called  <span class="bu">Rooms 
</span> where users can create context for their own situational awareness 
(<span class="bu">My Map</span>) and collaborate and share information with others.  
This can be achieved using either the <span class="bu">Share My Map</span> 
function using the <span class="bu">WorkingMap</span> room or via access to 
secure or closed rooms when approved and authorized. <span class="bu">My Map</span>, 
<span class="bu">Share My Map</span>, <span class="bu">IncidentMap</span>, 
<span class="bu">WorkingMap</span>, and permissions are described later.

<p><span class="bu">Create/Join An Incident</span></p>

<p>Incidents are created and joined using the <span class="bu">INCIDENT</span> 
drop-down menu on the upper right top toolbar. The incident you are currently 
in is displayed next to that menu.  You may switch between incidents by selecting 
other incidents from the INCIDENTS menu.  A large number of previous incidents are stored in the Archived folder.
</p>

<div class="figure" >
<img class="main" width="400px" src="../images/Select Incident-final-6Sep12.jpg" 
alt="The Inicidents menu located at the top right of the desktop" />
<p>Incidents menu in the top right of the interface</p>
</div>

<p>After joining an incident, you will be able to access the incident's collaboration 
room(s) for which you have permission.  Automatically, every incident has at least two rooms:  
The IncidentMap which can be thought of as a common map for all NICS users, and the WorkingMap which is where 
many different plans are drafted.  </p>

<p>In addition, authorized users involved in the incident can create any number of additional 
rooms for specific needs, some which are visible to everyone and some that are not, especially 
when working on sensitive topics.  </p>

<p>Users generally have two kinds of permissions: <span class="bu">“Read and Copy”</span>, which allows them to look 
at selected rooms and copy what they see (this can be pasted in their own private workspace, 
MyMap), and <span class="bu">“Read-Copy-Write"</span>, which allows them to create graphics on approved maps (draw, 
annotate with text, add symbols, etc.).</p>

<p><span class="bu">Create A New Incident</span></p>
<p>To create a new incident, selected authorized users use the INCIDENT pull-down menu.</p>

<div class="figure" >
<img class="main" width="300px" src="../images/Create Incident-final-6Sep12.jpg" 
alt="The Inicidents menu located at the top right of the desktop" />
<p>Create an incident from the Incidents menu</p>
</div>

<p>Rooms are created and joined using the <span class="bu">ROOMS</span> drop-down 
menu on the upper left top toolbar. You can only create or join a room if you are 
in an incident.</p>

<p>You may "open" more than one room from the <span class="bu">ROOMS</span> 
drop-down menu. Each room that you open is shown in a TAB to the right of the 
<span class="bu">ROOMS</span> menu.  You can only be in one room at a time; 
you can cycle between rooms by TABBING between rooms.</p>

<div class="figure">
<img class="main" width="300px" src="../images/Select Room-final-6Sep12.jpg" alt="Rooms location in interface" />
<p>Rooms menu is in the top left of the interface</p>
</div>

<p>If a room you need is not available in the ROOMS menu, you can use the CREATE 
NEW ROOM feature to select from an assortment of pre-named rooms or create a completely new room.</p>

<!-- 
<div class="figure">
<img class="main" src="../images/Create Room-final-6Sep12.jpg" alt="Rooms location in interface" />
<p>Create room from the Rooms menu</p>
</div>
-->

<h3>Your "My Map" Workspace</h3>

<p>The <span class="bu">My Map</span> room is <i>Your Personal Private Workspace</i> that is independent of 
all incidents; it is always available for your use. Use it to draft up a plan or create your situational awareness before 
<a target="_top" href="sharemap.php">sharing</a> it with others within another room.  </p>

<div class="figure">
<img class="main" src="../images/MyMap-final-6Sep12.jpg" alt="Rooms location in interface" />
<p>My Map</p>
</div>

<p>Note: All information that is created or copied into your "My Map" room is 
<i>saved</i> until deleted, even if you log out of NICS.  Users should use caution when sharing or copying information 
from this room with others.  Please ensure you are only sharing or copying the information intended to be shared or copied.</p>

<p><span class="bu">Share My Map</span> information can be found on the
<a href="sharemap.php" target="_top">Share My Map help page</a></p>


<div class="figure">
<?php pagevideo('incidents',true); ?>
<p>VIDEO: Joining incidents and rooms</p>
</div>


</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>