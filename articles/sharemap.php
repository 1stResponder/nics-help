<!DOCTYPE html>
<html>
<head>

<title>“My Map” and “Share My Map” ^ NICS Help</title>

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

<h1><u>“My Map” and “Share My Map”</u></h1>

<p>The 'My Map' space is your own private workspace.  
No one else can see it unless you choose to share what you 
have drawn, as explained below.</p>

<p>You can use My Map to copy & paste graphics and text you have seen in another room 
(e.g., a fire perimeter) or create completely new graphics and annotations. 
You may do whatever you like in this space.</p>

<p>Information in My Map is persistent:  it is saved if you quit NICS, 
and it will be there when you next log in, even if you log into a different Incident.</p>

<p>There are three ways to share the contents of My Map with others.  </p>

<p><span class="bu">(1) Share My Map:</span>  You can open another room and, if you have 
the right permissions, temporarily overlay your My Map contents onto that room.  You do 
this by first selecting the other room, then selecting the “Share My Map” button.  
Anyone in that other room will now see your contents overlaid on that room.</p>

<p>If you unselect the “Share My Map” button, or if you tab to another room, your 
content will disappear from the room (no one else will see it either) but remains 
in your My Map workspace.</p>

<p>In the example below, a user created a red shape in his My Map workspace, then 
selected the tab for the room “WorkingMap,” which is darkened to show it is selected, 
and then selected the tab for “Share My Map,” which is also darkened.</p>

<div class="figure">   
<img class="main" src="../images/sharemymapTabs.png" alt="Share my map" />
</div>

<p><span class="bu">(2)  “Copy Drawings From…..” </span>:  You can also 
permanently paste all the contents of your My Map to an open room by 
using the command in the Tools => Room Management menu called “Copy 
Drawings From ‘My Map’ to current collaboration room.”  This permanently 
places that content into the open room, so it is important that you 
have the permission of the owner of that room to execute that paste function.
</p>

<div class="figure">
<img class="main" src="../images/sharemymap.jpg" alt="Share my map in dropdown" />
</div>

<p><span class="bu">(3)  Copy & Paste</span>:  You can also permanently 
paste (although the features can be changed or deleted) some or all of the content in My Map using the Copy and Paste commands 
as discussed earlier.  Select what you wish to copy in My Map by highlighting 
it, then open the room you want to paste to, and select the Paste command.  
As above, this is a permanent paste, so be sure to be in sync with the owner of that room.
</p>

<p>As with most actions, you, or anyone else in the room with sufficient privileges, 
can reverse a Paste function with the UNDO button.</i></p>


<div class="figure">
<?php pagevideo('sharemap',false); ?>
<p>VIDEO: two screens after sharing maps</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>