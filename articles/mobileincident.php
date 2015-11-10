<!DOCTYPE html>
<html>
<head>

<title>Incident and Room Help ^ NICS Help</title>

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

<table width="100%" border="1">
  <tr>
    <td><div style="width: 325px"><strong>Incident and Room Help</strong></div>
    <p>When you have successfully logged into the server the &quot;Join Incident&quot; drop-down will become available. Selecting this button will display the list of incidents available on the server.</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td><img src="../images/join_incident.png" alt="joinIncident" width="640" height="400" /></td>
  </tr>
  <tr>
    <td>Note: if you do not see the incident you want then it is possible that you have selected the wrong workspace (Training vs. Incident) or the wrong server entirely. In this case the best thing is to log out and select a different workspace or server. Another option is that your incident has been archived. Please log into NICS through the web UI to verify.</td>
    <td><img src="../images/select_incident.png" alt="selectIncident" width="640" height="400" /></td>
  </tr>
  <tr>
    <td><p>Once the incident has been selected the name appears at the top along with the &quot;general message&quot; and &quot;reports&quot; icons.</p>
    <p>General messages and reports are incident-wide. This means that any general message is visible to all users throughout the incident regardless of their collaboration room. The same is true for reports. </p>
    <p>In addition to these buttons the &quot;join room&quot; button also becomes enabled.</p></td>
    <td><img src="../images/join_room.png" alt="joinRoom" width="640" height="400" /></td>
  </tr>
  <tr>
    <td><p>Selecting &quot;join room&quot; will display a drop-down of available rooms. Please note that if you have not been given permission to a room it will not be available in the drop down. Only rooms that you have permission to join are displayed in the list. </p>
    <p>Select a room from the list to join it. You may select other rooms but you may only be in one room at a time. This means that chat or markup that is happening in other collaboration rooms will not be visible until you return to them.</p></td>
    <td><img src="../images/select_room.png" alt="selectRoom" width="640" height="400" /></td>
  </tr>
  <tr>
    <td><p>Once a room is selected the room name is displayed at the top, above the chat and map buttons.This is the main display for the NICS mobile application. </p>
    <p>The chat button will enable you to chat with other users, mobile and web UI, in the selected collaboration room.</p>
    <p>The map button will display the whiteboard markup from the collaboration room that has been selected.</p></td>
    <td><img src="../images/main.png" alt="main" width="640" height="400" /></td>
  </tr>
</table>
<p>&nbsp;</p>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>
