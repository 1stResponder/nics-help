<!DOCTYPE html>
<html>
<head>

<title>Main Toolbar ^ NICS Help</title>

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

<h1><u>Main Toolbar</u></h1>

<p>The main toolbar is always accessible unless you have 
<a target="_top" href="windows.php#hide">hidden all windows</a> on the screen. 
It contains links to all the most common map manipulation and drawing features of NICS.</p>

<div class="figure">
<img class="main" width="400px" src="../images/Main Toolbar-final-6Sep12.jpg" alt="The main toolbar" />
<p>Tools from left to right: Drag (Hand or Pointer tool), Select, Zoom, Erase, Draw, Applications 
(in development), Undo, Redo, Copy, and Paste</p>
</div>

<p>The <i>Drag/Hand/Pointer</i> Tool allows you to select individual objects on the map and move them. 
It also allows you to pan the map by dragging the landscape. Other pan methods can be found  
<a target="_top" href="navigation.php#pan">here</a>.  Finally, you can click on individual objects to 
bring up all metadata contained in them.  </p>

<p>The <i>Select</i> Tool lassoes multiple objects at once. Any operations you can perform on a single 
object can be performed on a group of selected objects.</p>

<p>The <i>Zoom</i> Tool will zoom into the map screen. Clicking on a location will zoom into wherever 
you clicked. Alternatively, you can use the zoom box tool to zoom into an area selected by the box. 
Other zoom methods can be found <a target="_top" href="navigation.php#zoom">here</a>.</p>

<p>The <i>Erase</i> Tool works similar to the <i>Select</i> Tool, but removes 
any objects that are selected. </p>

<p>The <i>Draw</i> button opens the drawing palette. More information can be 
found <a target="_top" href="drawing.php">here</a>.</p>


<p>The <i>Apps</i> button opens a list of applications available within NICS.  This 
is similar to the highly successful “App Store” model of other platforms like smartphone and tablet vendors.</p>


<p>The <i>Undo</i> and <i>Redo</i> buttons allow you to undo or redo any recent 
actions including but not limited to drawing, erasing, or pasting. Action history goes back 5 actions.</p>

<p>The <i>Copy</i> and <i>Paste</i> functions allow users to copy currently selected objects/text and paste 
them into the current room or other rooms.  Select an object or text with the HAND tool (it becomes highlighted) 
and then select Copy and Paste.
<!--ctrl zyxcv functionality activation?-->
</p>

<div class="figure">
<?php pagevideo('toolbar',true); ?>
<p>VIDEO: The Main Toolbar</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>