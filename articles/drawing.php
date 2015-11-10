<!DOCTYPE html>
<html>
<head>

<title>Drawing ^ NICS Help</title>

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

<h1><u>Drawing</u></h1>

<p>Drawing is a primary method of communication in NICS. When information needs to be transmitted quickly and efficiently, 
a sketch on the map is often the most effective. For example, the following map shows details for: incident perimeter, 
incident organizational operational areas, drop points, safety zones, hazards, spot fires and other incident related 
information for a notional fire in Southern California.</p>

<div class="figure">
<img class="main" src="../images/Incident-basic graphics w draw tools.jpg" alt="Using sketches to aid a mission" />
<p>A fire in Southern California</p>
</div>

<p>To Draw, click on the pen icon labeled <i>"DRAW"</i> in the main 
toolbar. This will open up the drawing palette:</p>

<div class="figure">
<img class="main" src="../images/drawingpalette.png" alt="The drawing palette" />
<img class="main" width="400px" src="../images/Symbols-final-6Sep12.jpg" alt="Stamps" />
<p>The Drawing and ICS Symbol and Marker palettes</p>
</div>

<p><b>There are six main drawing tool sets:</b></p>

<p><b>Symbol/Marker/Icon Tool:</b> Selecting the Symbol/Marker button in the drawing palette (the RED pushpin icon) will bring
 up the Symbol/Marker/Icon panel. Click on a Symbol/Marker to select it and then click anywhere on the map to place 
 it. You can place an additional Symbol/Marker on the map by clicking multiple times.  You can also rotate several of the icons (see below).</p>
 
 <p>To “clear” the pointer, click on the HAND tool.</p>
 
 <p><b>Text Tool:</b> Click on the <i>"T"</i> to bring up the text editor. Type in your text and choose the 
 font size and color. Like a Symbol/Marker, you can place the text anywhere on the map, however you may not 
 rotate it like a Symbol/Marker. You may also place additional copies of the text on the map by clicking multiple times.</p>


<div class="figure">
<img class="main" src="../images/text.png" alt="The text editor" />
<p>The text editor menu</p>
</div>

<p><b>Rotate Tool:</b> Many Symbols/Markers are rotatable after being placed on the map. Select the rotate tool and then click 
on the Symbol/Marker you want to rotate. Use the guide to align your Symbol/Marker accordingly.</p>

<p><b>Shapes Tool:</b> This tool creates a shape with a solid border and translucent center. There are five different shapes available to draw: 
freeform, circles, squares, triangles, and hexagons. To draw any shape, click and drag on the map; the shape automatically adjusts 
to the mouse position. You can change the color of the shape from the drawing palette BEFORE you draw.  [Changing color (and other attributes) 
of an object or text AFTER they are drawn is in development.]</p>

<div class="figure">
<img class="main" height="300" src="../images/polygons.jpg" alt="Example of shapes" />
<p>An example of polygons drawn on the map</p>
</div>

<p>After you draw a shape, you can select it with the HAND tool and double click….acreage will be shown. </p> 

<p><b>Pen Tool:</b> This creates a new line wherever you draw on the map. Options such as thickness and color
 can be reached from the drawing palette (settable BEFORE you draw).</p>

<p>The Pen Tool also has a "fade" option. This will produce a line that will disappear from the map after a 
few seconds. This is useful for pointing out details when you do not want to lay down permanent ink.</p>

<p>There is also a "dash" option for dashed lines. Draw as you normally would, and when you release, 
the line will become dashed.</p>

<div class="figure">
<img class="main" src="../images/dash.jpg" alt="Dashed lines" />
<p>Dashed lines in NICS</p>
</div>
<br />

<p><b>Measurement Tool</b>:  Shown as a ruler, the measurement tool can provide length (use the ruler option and draw a 
line….distance is shown) and area (select the L rulers and construct a polygon….acreage is shown).</p>

<p><b><u>Metadata</b></u>:  Selecting any shape/object, line, or text and clicking on it will result in a comment box that has various 
metadata:  who constructed/drew the object or text, when, some measurement data (if applicable) and other data.</p>

<div class="figure">
<?php pagevideo('drawing',true); ?>
<p>VIDEO: Drawing tools</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>