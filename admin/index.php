<!DOCTYPE html>
<html>
<head>

<title>Documents - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="../includes/favicon.ico" rel="shortcut icon" />
<link href="../includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="../includes/search.js" type="text/javascript"></script>

</head>

<!--
The credentials to access this area over a browser:
U: nicshelp
P: nicshelppassword
alterable in the .htpasswd file
-->

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/docheader.php'; ?>
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

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/contents.php'; ?>

<td class="content">
<div class="mainarea">
<h1>Doc Access</h1>
<p>Hello User, here you can access the various things that will help
build this website.</p>

<ul>
<li><a href="documentation.php" target="_top">Website Documentation</a></li>
<li><a href="outlines.php" target="_top">Video Outlines</a></li>
<li><a href="searchindex.php" target="_top">Page Indexer</a></li>
<li><a href="roottemplate.php" target="_top">Root Template</a> (for use in root directory)</li>
<li><a href="articletemplate.php" target="_top">Article Template</a></li>
<li><a href="test.php" target="_top">Test Area</a> (don't break the rest of the site)</li>
<li><a href="phpinfo.php" target="_top">phpinfo</a></li>
</ul>
<p>And the resource folders.</p>
<ul>
<li><a href="../images" target="_top">Images</a></li>
<li><a href="../videos" target="_top">Videos</a></li>
<li><a href="../includes" target="_top">Includes</a></li>
<li><a href="../docuements" target="_top">Documents</a></li>
</ul>
<p>Alternatively, you may <a href="/nicshelp" target="_top">return home</a></p>
</div></td>
</tr></table>

<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>