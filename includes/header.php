<div id="header"><div id="headerbr"><div id="headerbl">
<table>
<tr>
<td><div style="margin:2px;"><a href="/nicshelp">
<img alt="Help Home" src="/nicshelp/images/NICS.png" height="32" />
</a></div></td>
<td><div style="height:30px"><h2>
<a class="main" href="/nicshelp">NICS Help</a>
</h2></div></td>
<td>
<div id="searcharea">
<table><tr>
<td><h6>Search</h6></td>
<td><form name="searchform" onsubmit="return validatesearch()" method="get" action="/nicshelp/search.php">
<input type="text" name="helpquery" style="width:250px;" value="<?php echo @$_GET['helpquery']; ?>" />
<input type="submit" value="Search" />
</form></td>
</tr></table></div></td>
</tr></table></div></div></div>

<?php
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
function pagevideo($videoname,$exists){
    $picture = $exists?"$videoname.jpg":'novideo.png';
	echo "<video controls='controls' poster='../videos/$picture' preload='none'>
		<source src='../videos/$videoname.webm' type='video/webm' />
		<source src='../videos/$videoname.mp4' type='video/mp4' />
		<source src='videos/$videoname.ogg' type='video/ogg' />
		<object type='application/x-shockwave-flash' data='http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf' width='640' height='360'>
			<param name='movie' value='http://releases.flowplayer.org/swf/flowplayer-3.2.7.swf' />
			<param name='flashVars' value=\"config={
			'playlist':['http://$_SERVER[SERVER_ADDR]/nicshelp/videos/$picture',{'url':'http://$_SERVER[SERVER_ADDR]/nicshelp/videos/$videoname.mp4','autoPlay':false}],
			'plugins':{'controls':{'fullscreen':false}}
			}\" />
		</object>
		</video>";
}
?>
