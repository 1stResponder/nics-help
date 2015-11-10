<!DOCTYPE html>
<html>
<head>

<title>Documentation - NICS Help</title>

<meta name="description" content="Help page for quick reference and learning of NICS" />
<link href="../includes/favicon.ico" rel="shortcut icon" />
<link href="../includes/stylesheet.min.css" rel="stylesheet" type="text/css" />
<script src="../includes/search.js" type="text/javascript"></script>

</head>



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
 
<table>
<tr>

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/contents.php'; ?>

<td class="content">
<div class="mainarea">

<h1 id="top">Documentation</h1>

<ul>
<li><a href="#1">Creating a New Page</a></li>
<li><a href="#2">Video Encoding</a>
<ul>
<li><a href="#2.1">Tools</a></li>
<li><a href="#2.2">Using the Encoders</a></li>
<li><a href="#2.3">Vorbis</a></li>
<li><a href="#2.4">Vp8</a></li>
<li><a href="#2.5">Webm</a></li>
<li><a href="#2.6">Mp4</a></li>
</ul>
<li><a href="#3">Video Recording</a></li>
<ul>
<li><a href="#3.1">Tools</a></li>
<li><a href="#3.2">Screencast-o-Matic</a></li>
<li><a href="#3.3">VLC Screen Capture</a></li>
<li><a href="#3.4">Camstudio</a></li>
</ul></li>
<li><a href="#4">Image Content Creation</a></li>
<ul>
<li><a href="#4.1">Tools</a></li>
<li><a href="#4.2">pngcrush</a></li>
<li><a href="#4.3">jpegtran</a></li>
<li><a href="#4.4">Pixlr</a></li>
<li><a href="#4.5">ffmpeg</a></li>
</ul>
<li><a href="#5">Search</a></li>
<ul>
<li><a href="#5.1">Search Indexing</a></li>
</ul>
<li><a href="#6">Video Share Site</a></li>
<li><a href="#7">Installing on Server</a></li>
<li><a href="#8">TODO</a></li>
</ul>

<p><b>NOTE:</b>Everything has been tested on Windows FF4/Chrome12.</p>

<p>This website utilizes a standard 960px width with standard 
margins of 10px. The left bar region is 10|220|10 and the central 
content area is 10|700|10. There are gutters of 10px on both sides. 
The header spans the full 960px.</p>
<p>Thus across the center of the page the divs have widths of 
10|220|20|700|10</p>
<p>I used tables to style because (no good reason). Ideally I should
move everything to divs</p>
<p>Javascript is used to create the active sidebar on articles; we are 
working under the assumption that as users of NICS, javascript is 
enabled on the client browser.</p>
<p>PHP is used to include most headers and footers, as well as static 
sidebars. It also runs the search function. PHP must be installed on 
the server.</p>
<p>Navigation is propogated mainly through the side bar. You can 
return to the home page at any time by clicking on the text "NICS 
Help" or the LLLogo in the header. You may also navigate home in the 
footer, along with to the actual NICS application and the video 
library site. Search is provided on all pages.</p>
<p>All resources that aren't explicitly noted for location are in the 
"admin" folder.</p>

<hr />

<h2 id="1">Creating a New Page</h2>
<p>Copy "articletemplate" from admin folder. The only part of the 
page you need to write is the area marked as the commented content 
area. All css and js is included for you.</p>
<p>If you are buidling a page in the root directory, use 
"roottemplate".</p>
<p>Change the TITLE in the header to the appropriate name.</p>

<h3>Table of Contents</h3>
<p>Update the table of contents in the jscript.js file. Make sure the 
table entry is the same as what you are going to use as the titlepage 
on the header script.</p>
<code>
[[CHAPTER,[SECTION NAME,LINK],[SECTION NAME,LINK]]]
</code>
<p>The writecontents() function displays the table of contents and 
un-anchors the current page if it is in the table.</p>
<p>Also update the contents.php file. Finally, keep in mind that the 
pages all call to the search.js file, so either manually update 
it there or recompress the source file using a comperssor such as the 
<a href="http://www.refresh-sf.com/yui/">YUI compresor</a>.</p>

<h3>Figures</h3>
<p>Figures such as images or videos can be centered and sized by 
using the div class figure. They have a max width of 680px, giving 
a layout of 10|auto|≤680|auto|10 in the 700px body area.<br /><br />
<code>
&lt;div class="figure"&gt;<br />
&lt;img class="main" src="SOURCE" alt="ALTTEXT" /&gt;<br />
&lt;p&gt;CAPTION&lt;/p&gt;<br />
&lt;/div&gt;
</code><br /><br />
The img tag can be replaced by the video tag for a similar effect. 
Captions are also optional for figures.<br /><br />
<code>
&lt;div class="figure"&gt;<br />
&lt;video controls="controls" poster="IMAGE" preload="none"&gt;<br />
&lt;source src="WEBM" type="video/webm" /&gt;<br />
&lt;source src="MP4" type="video/mp4" /&gt;<br />
&lt;object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.6.swf" width="640" height="360"&gt;<br />
		&lt;param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.6.swf" /&gt;<br />
		&lt;param name="allowFullScreen" value="true" /&gt;<br />
		&lt;param name="wmode" value="transparent" /&gt;<br />
		&lt;param name="flashVars" value="config={'playlist':<br />
		['http%3A%2F%2F<b>IMAGE</b>',<br />
		{'url':'http%3A%2F%2F<b>MP4</b>',<br />
		'autoPlay':false}]}" /&gt;<br />
&lt;/object&gt;<br />
&lt;/video&gt;<br />
&lt;p&gt;CAPTION&lt;/p&gt;<br />
&lt;/div&gt;<br />
</code><br />
Video with flash fallback
</p>

<h3>Indexing Into Search</h3>
<p>New pages must be indexed into the search page. You can learn how 
to do this <a href="#5.1">here</a>.</p>

<h3>For php include();</h3>
<p>Check the encoding you save in. If php include is giving you extra 
whitespace, save the included file in UTF-8 no BOM signature. This 
should get rid of the white space.</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="2">Video Encoding</h2>

<h3 id="2.1">Tools</h3>
<a target="_blank" href="http://www.ffmpeg.org">ffmpeg</a> - a video 
encoding command line tool<br />
<a target="_blank" href="http://www.ffmpeg.org">ffplay</a> - a video 
decoding command line player (packaged with ffmpeg)<br />
<a target="_blank" href="http://www.webmproject.org">vpxenc</a> - 
Command line <a href="#2.5">Webm</a> encoder from Google.<br />
<a target="_blank" href="http://www.bunkus.org/videotools/mkvtoolnix">mkvtoolnix</a> - 
A tool to efficiently create mkv/webm files. We use mkvmerge<br />

<h3 id="2.2">Using encoders ffmpeg, vpxenc, and mkvmerge</h3>
<p>In general with all video encoding, The more user-set constraints 
and options, the better the output will be. Refer to official 
documentation from each ffmpeg, vpxenc, and mkvmerge at their 
respective websites for a full listing of options</p>
<p>Basic Usage can be summarized as:
<ol>
<li>Use ffmpeg to edit videos and do non-vp8 transcoding</li>
<li>Use vpxenc to do vp8 encoding</li>
<li>Use mkvmerge to combine ffmpeg audio and vpxenc video into webm 
container</li>
</ol>
Also, there are generally 2 ways to reduce size. First and most 
obvious is to reduce target bitrate. Second and less obvious is to 
increase keyframe intervals. This is set in ffmpeg by <code>-g</code>
and vpxenc by <code>--kf-max|min-distance</code></p>

<h4 id="2.3">Using the Vorbis format</h4>
<p>In using ffmpeg to encode vorbis, there are 2 options: vorbis 
and libvorbis. It is 
<a target="_blank" href="http://xiphmont.livejournal.com/tag/ffmpeg">generally acccepted</a> 
that voribs is broken, so use <code>-acodec libvorbis</code> for 
oggvorbis encodes. Use <code>-aq</code> not <code>-ab</code> with 
libvorbis using the following table to set bitrate control:</p>
<div class="figure">
<table class="padtable" style="border:solid #003359 3px;margin: 0 auto">
<tr><th>Quality</th><td>-aq -1</td><td>-aq 0</td><td>-aq 1</td>
<td>-aq 2</td><td>-aq 3</td><td>-aq 4</td></tr><tr>
<th>Bitrate</th><td>45 kbps</td><td>64 kbps</td><td>80 kbps</td>
<td>96 kbps</td><td>112 kbps</td><td>128 kbps</td></tr></table>
<p>Data from <a target="_blank" href="http://en.wikipedia.org/wiki/Vorbis">Wikipedia</a></p>
</div>

<h4 id="2.4">Using the Vp8 format</h4>
<p>On2 Technologies were acquired by Google in May of 2010 and their 
video encoders were released to open source. Their most recent codec, 
Vp8, is a direct challenge to propietary mp4 video.</p>
<p>As of right now, there is only one implementation of a vp8 
encoder: libvpx. Both ffmpeg and vpxenc use libvpx to encode vp8 
video, but <b>you should use vpxenc to encode vp8</b> because ffmpeg 
seems to have a problem with bitrate control, while vpxenc is very 
strict in its <code>--target-bitrate=&lt;arg&gt;</code> option.</p>

<h4 id="2.5">Using the Webm container</h4>
<p><a target="_blank" href="http://www.webmproject.org">Webm</a> is a 
container that holds the open source vorbis audio and On2 Vp8 video 
codecs. Webm seeks to provide a general and open standard for all 
internet video.</p>
<p>We have encoded the video and audio in two different programs to 
reduce the filesizes and bitrates as much as possible. To put them 
together with no loss of compactness, we forego using ffmpeg because 
that would induce a reencoding of the video and loss of quality or 
an increase in filesize. Instead we use mkvmerge which losslessly 
combines the audio and video tracks.</p>

<h4 id="2.6">Using the mp4 container</h4>
<p>mp4 is a patent-encumbered format, usually containg video encoded 
using MPEG part 10 H.264/AVC codec and audio encoded using AAC codec. 
Both these encoder algorithms are copyright laden, so it is not 
suggested to include it in our open project. However, webm does not 
play in IE or Safari natively, nor on any mobile platforms. Thus, we 
include it for compatibility.</p>
<p>Use libx264 to encode the video, and aac to encode the audio. When 
using aac, you must give the option <code>-strict experimental</code> 
in the command line. Use <code>-ab</code> for audio bitrate control. 
Finally, note that H.264 encoding can be compressed at a higher 
quality/bitrate ratio than webm, so adjust accordingly.</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="3">Video Recording</h2>
<p>I suggest using <a href="#3.4">Camstudio</a> for screencasting.</p>

<h3 id="3.1">Tools</h3>
<a target="_blank" href="http://www.screencast-o-matic.com">Screencast-o-matic</a> - 
An online java-based screen capturing tool.<br />
<a target="_blank" href="http://www.videolan.org/vlc/">VLC Media Player</a> - 
Wrapper of ffmpeg that can record full screen casts.<br />
<a target="_blank" href="http://www.camstudio.org">Camstudio</a> - 
Open source streaming video software. Pretty good.<br />

<h3 id="3.2">Screencast-O-Matic (SoM) Tips</h3>
<p>It is a good idea to resize a larger video, ie use 1024x576 Med HD 
to record. Then you want to use libavfilter to shrink the video, not 
the resizing option given in SoM's download menu options. This will 
give the viewer the correct proportions for the mouse.</p>
<p>adding effects such as click detection and mouse halo in the 
downloaded SoM video dramatically increases the encode time for you 
later. Remember to turn those options off in the download menu.</p>

<b>IN: SoM 1024x576 (HD Med) mp4</b><br />
<b>OUT: 640x360 400kbps webm</b>
<p><code>ffmpeg -i INPUT.mp4 -s 640x360 -sameq -r 10 -y -an 
INTER.y4m</code><br />
^Use for Resizing SoM videos for use in vpxenc<br />
<code>vpxenc --end-usage=0 --passes=2 --threads=3 --best 
--cpu-used=0 --target-bitrate=300 --output=OUTPUT.webm INTER.y4m</code><br />
^encodes final video<br />
<code>ffmpeg -i INPUT.mp4 -vn -acodec libvorbis -aq -1 -y OUTPUT.ogg</code><br />
^Strips audio from original video<br />
<code>mkvmerge -o FINAL.webm OUTPUT.webm OUTPUT.ogg</code><br />
^Mixes audio and video tracks into one webm file.</p>

<p>You many have to run this conversion a few times in order to get 
the smallest filesize (run ~5 encodes of vpxenc)</p>

<h3 id="3.3">VLC Media Player Screen Capture</h3>
<p><b style="color:Red">NOT RECOMMENDED</b> due to full screen only
The resize kills the quality and there are better options out there.</p>
<p>VLC comes built in with a screen capturing ability and live 
streaming to any source. We will capture from the screen:\\ source 
and stream it to a file. Because VLC utilizes ffmpeg, we may encode 
the raw video into a variety of file types.</p>
<p>When recording, I used <a target="_blank" href="../images/vlcref.png">
firefox 4[PIC]</a> running NICS on one tab. Dimensions required for 
cropping may need to be changed depending on the way the browser 
displays the appplication, and the screen resolution of the 
computer. The code given below crops for the region in red given 
by the picture above.</p>
<p>My stream settings were set up to create as lossless video as 
needed, so I used mp4 1600kbps to get a high quality output.</p>
<p>Recording a stream of screen:\\ on VLC produces only 1 I-frame at
the beginning of the stream. When encoding in vpxenc, make sure to 
give the keyframe parameter an arguement to allow for seeking.</p>
<p>Crop filter: <code>-vf crop=w_out:h_out:x:y</code> where (x,y) are
the coordinates of the top left corner of cropped area.</p>

<b>IN: VLC 1920x1200 (Full Screen) mp4</b><br />
<b>IN: VLC ogg</b><br />
<b>OUT: 1024x576 400kbps webm</b>
<p><code>ffmpeg -i INPUT.mp4 -sameq -vf crop=1902:1050:0:90 -an -y 
sizeme.mp4</code><br />
^Crop out the fullscreen NICS interface<br />
<code>ffmpeg -i sizeme.mp4 -sameq -s 1024x576 -y INTER.y4m</code><br />
^resize and output to raw for vpxenc<br />
<code>vpxenc --passes=2 --cpu-used=1 --threads=4 --best --kf-max-dist=24
--target-bitrate=400 --end-usage=0 --output=OUTPUT.webm INTER.y4m</code><br />
^encodes final video<br />
<code>mkvmerge -o FINAL.webm OUTPUT.webm INPUT.ogg</code><br />
^Mixes audio and video to final webm output file</p>

<h4>Things to not do:</h4>
<ol>
<li>Attempt to record audio and video at the same time. 
<a target="_blank" href="http://trac.videolan.org/vlc/ticket/3107">Reference</a></li>
<li>Crop using Settings-&gt;Input/Codecs-&gt;Screen. Just use ffmpeg 
because you can, and I'm not sure why it doesn't work.</li>
<li>Forget to include the mouse cursor file 
<img height="13px" src="../images/cursor.png" alt="Mouse Cursor" /></li>
<li></li>
</ol>

<h3 id="3.4">Camstudio</h3>
<p><b style="color:Green">RECOMMENDED</b> All around best platform.</p>
<p>Camstudio is an opensource screen capture program. It comes bundled
with its own set of codecs to compress into an avi file. It also has 
the capability of capturing both audio and video at the same time.</p>
<p>Settings need to be checked before each recording session. 
Recording region to be used is a fixed rectangle of 1024x576, from the 
top left corner there is an offest of 12x114, assuming you dock the 
window using windows aero and resize from there. Use the default 
windows codec, as it doesn't seem to have any performance problems.</p>
<p>Set the video and audio parameters as high as possible. Record at 
the highest framerate (it won't actually record at 200fps), and best
quality audio (44.1khz 16bit mono). Other parameters include showing 
the cursor and recording audio from the correct source. All these 
setting are important as we have no easy to use audio filters. We 
want to minimize the losses in our initial compression so that we may 
get the highest quality output in our own compressions.</p>
<p>Other options you may elect to use are to "hide flashing rectangle 
during recording" or "do not play avi when recording stops"</p>
<p>Title screen is acheived by using the screen annotations feature in 
the program. Use a plain square with no borders and use 72 bold arial 
centered font to label the video. Using the transparency option, you 
can fade it out as you begin recording while speaking.</p>
<p>I have included screen annotations for each of the videos, use the
right click, transparency slider to fade in/out</p>
<p>Press f8 to start/pause recording, and f9 to stop. f10 cancels
the current recording session.</p>

<b>IN: Camstudio 1024x576 (Fixed region) avi</b><br />
<b>OUT: 1024x576 500kbps webm</b>
<p><code>ffmpeg -i %input% -an -vf format=yuv420p -pix_fmt yuv420p 
-r 24 -sameq -s 640x360 -y INTER.y4m</code><br />
^resize and output to raw (rgb->yuv) for vpxenc<br />
<code>vpxenc --passes=2 --cpu-used=1 --threads=4 --best --kf-max-dist=24
--target-bitrate=500 --end-usage=0 --output=OUTPUT.webm INTER.y4m</code><br />
^encodes final video<br />
<code>ffmpeg -i INPUT.avi -sameq -vn -acodec libvorbis -aq 0 
OUTPUT.ogg</code><br />
<code>mkvmerge -o FINAL.webm OUTPUT.webm OUTPUT.ogg</code><br />
^Mixes audio and video to final webm output file</p>

<p>Use <b>this <a href="video.bat">batch script</a></b> as 
<code>video [video name, no extension]</code><br />;
It generates webm, ogg, and mp4 videos with one jpg splash image.</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="4">Image Content Creation</h2>

<p>Please remember to use the right format for the type of picture you 
are using. PNG for graphics with hard lines or small images, JPG for 
photographic imagery, or larger files.<br />
Also keep in mind that video encodes thing to photographic quality, 
this is why we use jpg for the splash loading image.</p>

<h3 id="4.1">Tools</h3>
<a target="_blank" href="http://pmt.sourceforge.net/pngcrush/">pngcrush</a> - 
A command line image compressor for png files.<br />
<a target="_blank" href="http://jpegclub.org/">jpegtran</a> - A 
command line jpg image compressor
<a target="_blank" href="http://pixlr.com/editor/">pixlr</a> - Online 
photoshopesque image editing tool. alpha channel capability.<br />
<a target="_blank" href="http://www.smushit.com/ysmush.it/">Smush.it</a> - 
Yahoo image compression tool.<br />
<a target="_blank" href="http://www.ffmpeg.org">ffmpeg</a> - A video 
encoding command line tool<br />

<h3 id="4.2">pngcrush</h3>
<p><code>pngcrush -brute -rem alla -rem text -reduce IN.png OUT.png</code><br />
^Use brute for comprehensive test of all compresion methods.</p>
<p>Use pngcrush before recompressing into a jpg format to achieve 
maximum compression. IN.png and OUT.png must have different filenames,
or else an overwrite/deletion error occurs and you end up with no 
file :(</p>
<p><b>A <a href="allpng.bat">batch script</a> is provided,
</b>just place into directory with images and run. Make sure pngcrush is 
included in your path variable. Compressed files will be placed into 
a folder in the same directory named "new".</p>

<h3 id="4.3">jpegtran</h3>
<p><code>jpegtran -copy none -optimize INPUT.</code><br />
^The most efficient use of lossless jpg compression.</p>
<p>Use jpegtran to compress jpgs further. Usual image size reductions 
are minimal, so you may skip this step of the image creation process.</p>
<p><b>A <a href="alljpg.bat">batch script</a> is provided,
</b>just place into directory with images and run. Make sure jpegtran is 
included in your path variable. Compressed files will be placed into 
a folder in the same directory named "new".</p>


<h3 id="4.4">pixlr</h3>
<p>Quite simply, use this tool to get transparencies into your image.
Create new images with canvas and introduce transparency by erasing 
or deletion of parts of the picture.</p>
<p>For non-transparency editing just use paint.</p>

<h3 id="4.5">ffmpeg</h3>
<p>ffmpeg also has the ability to code single frames of a video into 
still frame images. This is especially useful to get splash screens
when using the video element. To do so, use:<br /><code>
ffmpeg -i INPUTMOVIE -vcodec mjpeg -vframes 1 OUTPUT.jpg</code><br />
This gives the first frame of a movie in jpg. Use <code>
-vcodec png</code> for png encoding.</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="5">Search Bar</h2>
<p>Search is a key component of any help page. However it may not be 
necessary for NICS due to its simplistic nature (tired-dirty-hungry). 
as long as the amount of help remains down to a minimum and is 
displayable in a small sidebar as in to the left right now, then 
search is not an urgent feature.</p>
<p>That being said, a simple SQL query search is implemented and 
expandable. The search utilizes SQL commands of <code>MATCH()AGAINST()</code> 
and <code>LIKE()</code> in combination to generate the most search results, 
ranked using mySQL's rating engine for MATCHAGAINST.</p>

<h3 id="5.1">Indexing the Search</h3>
<p>When adding a new page, just perform an insert into the sql table
"pages" in the "nicshelp" database detailing the title, url, a small 
sample, and keywords. The database will automatically index the data.
This is simplified for you in a form located <a href="searchindex.php" target="_top">
here</a>.</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="6">Video Share Site</h2>
<p>Where all videos will be hosted, and where users may add their 
own videos to either data layers with geolocation, or their own 
tutorial videos of neat tricks they have found in NICS.</p>
<p>Probably run in php.</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="7">Installing the Site on a Server</h2>
<p>All files are found in the folder "nicshelp" 2 directories down 
from where you are probably reading this. I tested the site using an
all-in-one bundle for apache/sql/php called xampp, and so this site 
needs to have all three installed. Changes in configuration are 
listed below:</p>

<h3>Apache httpd Server</h3>
<p>The site utilizes webm videos heavily. To allow transfer of webm 
data, add the directive <code>AddType video/webm .webm</code> to the 
mime_module section of httpd.conf or mods-enabled/mime.conf files. If 
needed, also add one for video/mp4 and video/ogg.</p>

<h3>MySQL</h3>
<p>For querying the database, the current search architecture uses 
the <code>MATCH() AGAINST()</code> and <code>LIKE</code> commands. 
The former requires that the database be using the MyISAM engine for 
the database, and that a fulltext index be created of the Title, 
Sample, and Keyword columns. All this should be taken care of in the 
.sql file</p>
<p>The <b><a href="pages.sql">pages</a> table</b> can be 
found here. Please insert it into a database named 'nicshelp'.</p>
<p>You must also create a new user on MySQL that can select/insert on 
'pages,' the user's data can also be found in <a href="pages.sql">
pages.sql</a></p>

<h3>PHP</h3>
<p>My testing used PHP 5.3.5, not sure if anything needs to be 
changed in php.ini file. Make sure the php you are using is compiled
to work with MySQL.</p>

<h3>Additional Page-specific Changes</h3>
<p>Change the login information for the mySQL server if not the same 
as the data in the pages.sql file. This needs to be done on 
/search.php and /admin/searchindex.php</p>
<p>Header, footer, and contents need to be updated on a case by case 
basis, but all can be accessed from the <a href="../includes">
includes folder</a>.</p>

<h3>FLASH TROUBLES</h3>
<p>You can either call for flash on the server itself, or make a call 
to flowplayer servers which hosts the latest version for free. For 
some reason, things start acting weirdly. The table shows compatibility
across different delivery and browsers.</p>
<div class="figure">
<table class="padtable" style="border:solid #003359;margin:0 auto">
<tr><td></td><th>Internet Explorer</th><th>Firefox</th><th>Chrome</th></tr>
<tr><th>From Local Server</th><td>OK</td><td>OK</td><td>OK</td></tr>
<tr><th>From Flowplayer</th><td>OK</td><td>OK</td><td>OK</td></tr>
<tr><th>From Own Servers</th><td>NOT WORKING</td><td>OK</td><td>NOT WORKING</td></tr>
</table>
<p>Summary of flash compatibility</p>
</div>
<p>Specifically, flowplayer isn't loaded properly at all from our 
servers, but there is nothing horribly wrong in the coding according 
to firefox being able to parse it. What is happening? Not sure, but for
now flowplayer is being called from flowplayer.org</p>

<a href="#top">^Back to Top</a><hr />

<h2 id="8">TODO</h2>
<ul>
<li>Create video share system</li>
<li>Integrate search with video system</li>
<li>Record screencasts</li>
<li>Version # on videos and images</li>
<li>Improve video ffmpeg script to encode multiple times (5?), then 
discard all but the smallest file size of the results</li>
<li>Host flash serverside</li>
<li></li>
</ul>

</div></td>
</tr></table>

<!-- end content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>