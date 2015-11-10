<!DOCTYPE html>
<html>
<head>

<title>About NICS ^ NICS Help</title>

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
    <td><div style="width: 325px"><strong>Settings Help</strong></div>
      <p>The mobile application settings are available by pressing the wrench symbol in the upper right corner of the display. </p>
    <p>There are two settings categories: general and sync.</p></td>
    <td><img src="../images/main.png" alt="main" width="640" height="400" /></td>
  </tr>
  <tr>
    <td><p>General settings provide a variety of options pertaining to the general operation of the mobile application.</p>
    <p>Laser Range Finder: The mobile application provides a setting to enable location data input from a blue-tooth enabled laser range finder. Please see below for additional information.</p>
    <p>Show Debug Tab: Enables an additional tab on the chat display. This should be enabled if you are experiencing errors and would like to capture debug information which can aid developers in diagnosing your problem. </p>
    <p>GPS Mobile Device Tracking: Disabling this option prevents your device from being tracked under AVL settings on the map display. Enable this option (default setting) to show up under Mobile Device Tracking.</p>
    <p>Select NICS Server: Shows the current server which will be used when logging on. Different servers can be selected from this option. Note that selecting a different server will log you out of the current server.</p>
    <p>Coordinate Display Format: Enables the user to select between Decimal Degrees, Degrees and Decimal Minutes, Degrees/Minutes/Seconds, UTM and MGRS for lat/lon displays.</p></td>
    <td><img src="../images/general_menu.png" alt="genSettings" width="640" height="400" /></td>
  </tr>
  <tr>
    <td><p>If the LRF is enabled an additional button will be displayed next to the target-icon button in General Message and Damage Report. This button will trigger a call to the laser range finder. Upon the next reading the location data will be provided in the lat/lon locations. </p>
    <p>Note that you may need to pair or power on your LRF device. If this is the case then the app will ask you to pair your device first before taking the next reading.</p>
    <p>NICS does not endorse any products. At this time only the TruPulse 360b is compatible with the mobile application. </p></td>
    <td><img src="../images/lrf.png" alt="lrf" width="500" height="435" /></td>
  </tr>
  <tr>
    <td><p>The Sync settings affects how often your phone communicates with the NICS server. Please be aware that the NICS application will use the your carrier's data service to communicate. These settings adjust how often your phone will request updates.</p>
    <p>The faster you set your updates the more accurate your picture will be, however it may impact the performance of your device and amount of data you use.</p>
    <p>Default settings are considered reasonable for most operations.</p></td>
    <td><img src="../images/sync_menu.png" alt="syncMenu" width="640" height="400" /></td>
  </tr>
</table>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>
