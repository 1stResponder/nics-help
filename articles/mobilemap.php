<!DOCTYPE html>
<html>
<head>

<title>Map Help ^ NICS Help</title>

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
    <td><div style="width: 325px"><strong>Map Help</strong></div>&nbsp;
    <p>Selecting the map button will connect the mobile user to a display of markup in the collaboration room listed above. </p>
    <p>Users may only be in one collaboration room at a time so multiple maps cannot be opened at once.</p></td>
    <td><img src="../images/main.png" alt="main" width="640" height="400" /></td>
  </tr>
  <tr>
    <td>
     
      When entering displaying the map the user is taken to the most recent area of markup. The map is displayed on the left and a list of markup is displayed on the right along with who created the markup, its type and what time it was created.
      <p>Touching an item in the list will bring center the view on that item.</p>
      <p>The map uses traditional swipe and pinch motions to control the view and its location as well as the &quot;+/-&quot; buttons in the lower right.</p>
      <p>In the upper right corner of the map are additional map control buttons. The &quot;INC&quot; button will take the user to the location of the incident. The target button will move the user's view to their current location as provided by their mobile device GPS. </p>
    </td>
    <td><img src="../images/map.png" alt="map" width="640" height="400" /></td>
  </tr>
  <tr>
    <td><p>The NICS mobile application supports a subset of map types including satellite, hybrid (satellite and normal street view), terrain, traffic and indoor (if available). Please note that some map types will load faster than others and may impact your overall performance and data usage.</p>
    <p>To choose a different map select map type from the upper right drop down and choose the desired display. </p></td>
    <td><img src="../images/map_types.png" alt="mapTypes" width="640" height="400" /></td>
  </tr>
  <tr>
    <td>Symbols on the map support a pop-up display with the name of the user that created it and the time it was created.</td>
    <td><img src="../images/map_markup_popup.png" alt="mapMarkup" width="640" height="400" /></td>
  </tr>
  <tr>
    <td>The mobile application supports Automatic Vehicle Location (AVL) display. Select &quot;tracking&quot; from the upper right corner and enable the tracking feeds you would like to see and press 'ok'.</td>
    <td><img src="../images/map_choose_avl.png" alt="chooseAvl" width="640" height="400" /></td>
  </tr>
  <tr>
    <td>AVL markers show up as red dots on the map. A blue dot indicates your location as provided by your device's GPS. A blue ring around the blue dot indicates the margin of error in that location.</td>
    <td><img src="../images/map_avl_dots.png" alt="avlDots" width="640" height="400" /></td>
  </tr>
  <tr>
    <td>Similar to markup and symbols, the AVL markers also provide a popup with related information.</td>
    <td><img src="../images/map_avl_popup.png" alt="avlPopup" width="640" height="400" /></td>
  </tr>
</table>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>
