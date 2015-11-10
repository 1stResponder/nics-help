<!DOCTYPE html>
<html>
<head>

<title>Drawing Tips ^ NICS Help</title>

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

<h1><u>Drawing Tips</u></h1>

<p><u>Accessing Metadata</u></p>

<p>Metadata refers to information about objects and text, such as the 
author, when the object or text was created, area, length, etc.  To 
access the metadata, select the object or text (it becomes highlighted 
when you roll over it with the Hand tool) and click.  An comment 
box appears with the metadata in it.</p>

<p><u>Polygon Tool</u></p>

<p>The polygon tool automatically links the two endpoints of any shape you draw, 
and has interesting behavior when you start crossing lines. In general, the tool 
tries to highlight the inside of the shape, but is not always accurate. As a rule 
of thumb, avoid crossing lines if possible.</p>

<p><u>Fade</u></p>

<p>When you need to point to a location or show a route, but don't want to do this 
with permanent ink, use the fade pen….it fades away after a few seconds.</p>

<p><u>Measuring Tools</u></p>

<p>Along with finding <u>lengths and areas (acres)</u> in the object metadata, 
there are also 2 tools to make 1-time measurements. They work exactly like the 
pen and polygon tools, but leave a dotted trail rather than a solid line; they 
also do not leave any residual marks on the map.</p>

<div class="figure">
<?php pagevideo('drawing2',false); ?>
<p>VIDEO: Drawing tips</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>