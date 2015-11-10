<!DOCTYPE html>
<html>
<head>

<title>Chat ^ NICS Help</title>

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

<h1><u>Chat</u></h1>

<p>Another way to communicate in NICS is through text-based chat. This works like text messaging 
and other forms of chat most people use daily.  There are two kinds of chat:  Public and Private.  </p>

<p><span class="bu">Both types of chat are permanently recorded. 
Chat needs to be used prudently at all times.</span></p>

<p><span class="bu">Public Chat</span></p>

<p>The Public Chat windows are located at the bottom of the screen when a <u>user is in a room</u>.</p>

<p>Public Chat windows do not appear when a user is in 'My Map' since that is their own private 
room…..no one else is in that room, so Public Chat is not an option.</p>


<div class="figure"> 
<img class="main" src="../images/fullscreen.jpg" alt="The chat interface is at the bottom" />
<p>Public Chat windows are at the bottom of the screen</p>
</div>


<p>Text messages are typed into the bottom window.  When the RETURN key is pressed, the message is 
time stamped and posted in the window above along with the author’s name.  A running history of all 
chat for that particular room is stored in this window, so you can go back in time to look at 
earlier messages.</p>

<p><span class="bu">This text is permanent, and can be seen by anyone who visits the room.  This text 
is PART OF THE HISTORICAL RECORD and official data.  It needs to be used prudently. </span></p>

<p>It is possible to make the Public Chat windows disappear by selecting the down arrow (chevrons) on 
the far right of these windows.  Selecting this again makes the Public Chat windows open.  Unfortunately 
there are no audible or visual alerts that indicate that a new message has been posted at this time.  
This is in development.</p>

<p><span class="bu">Who Is In The Room? </span></p>

<p>The box on the far right shows all the users that are currently logged into this particular room.  The 
dot next to their name indicates “recent activity.”  If the dot is green, then the user has used chat, 
entered graphics, or moved the map recently.  After several minutes of inactivity, the green dot turns yellow.  
This is one way to guess if a user has stepped away from their computer.</p>

<p><span class="bu">Private Chat </span></p>

<p>Users can also engage in Private Chat.  Private Chat is a one-to-one or a one-to-many form of communication 
that can only be seen by those who have been invited to join.</p>

<p><span class="bu">However, like Public Chat, Private Chat is permanent.  This text is PART OF THE HISTORICAL 
RECORD and official data.  It needs to be used prudently.  </span></p>

<p>Private Chat can occur between any two or more users logged into NICS……they do not have to be in the same room as they do for Public Chat.</p>

<p>To start a Private Chat session, open the side panel.</p>



<div class="figure"> 
<img class="main" src="../images/chat1.JPG" alt="The chat interface 1" />
</div>

<p> Open the <a href="users.php" target="_top">“Active Users”</a> tab.  Select the “Chat” icon for the person with whom you would like to start a Private Chat.  
In this example, John Doe is inviting Bob Smith to a Private Chat.</p>


<div class="figure"> 
<img class="main" src="../images/chat2.JPG" alt="The chat interface 2" />
</div>

<p> The following message appears on Bob Smith’s computer screen:</p>

<div class="figure"> 
<img class="main" src="../images/chat3.JPG" alt="The chat interface 3" />
</div>

<p> If Bob Smith accepts, the Private Chat window (below on the left) appears on his computer, and the Private Chat 
window on the right appears on John Doe’s computer.</p>

<div class="figure"> 
<img class="main" src="../images/chat4.JPG" alt="The chat interface 4" />
</div>

<p> To invite more than one person to a Private Chat session, drag additional “Chat” icons from the Active Users 
list into the Private Chat window on your screen.  Each new person will get an invitation as above and you will 
get an acceptance if they elect to join.</p>

<div class="figure">
<?php pagevideo('chat',true); ?>
<p>VIDEO: Chatroom interface</p>
</div>

</div></td>
</tr></table>
<!-- End content area -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/nicshelp/includes/footer.php'; ?>

</body>
</html>