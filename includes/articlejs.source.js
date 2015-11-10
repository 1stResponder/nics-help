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
﻿//Search validation
function validatesearch() {
	if (document.forms["searchform"]["helpquery"].value == "" ||
		!(document.forms["searchform"]["helpquery"].value.match(/\w/g))) {
		alert("Please enter a valid Search Query");
		return false;
	}
	else {
		var stepone = document.forms["searchform"]["helpquery"].value.replace(/[^\w\s]/g,'');
		document.forms["searchform"]["helpquery"].value = stepone.replace(/\s\s+/g,' ');
	}
}

////Table of Contents
var TableofContents = [
	["Getting Started",
	    ["The NICS Help Site", "abouthelp"],
		["About NICS", "about"],
		["NICS Home Page", "frontpage"],
		["First Steps in NICS", "firststeps"],
		["Incidents and Rooms", "incidents"],
		["Windows and Panels", "windows"],
		["Main Toolbar", "toolbar"]
	],
	["Desktop",
		["Desktop Overview", "aboutdesktop"],
		["Navigating the Map", "navigation"],
		["Drawing", "drawing"],
		["Data Layers", "data"]//, commented because lock feature
		//["Locking the Room", "lock.php"] was removed from NICS?
	],
	["Collaboration and Sharing",
		["Chat", "chat"],
		["Active Users", "users"],
		["Share My Map", "sharemap"],
		["Map Sync", "sync"]
	],
	["Advanced Topics",
	    ["Multi-Incident View", "miview"],
		["Import/Export GIS", "updown"],
		["Forms and Reports", "forms"],
		["Drawing Tips", "drawing2"], 
		["Apps", "aboutapps"]
	],
	["NICS Administration",
	    ["Admin Overview", "aboutadmin"],
	    ["Types of NICS Users", "usergroups"],
        ["Managing Organizations", "orgadmin"]//, 
	    //["Misc Tasks, "adminmisc"]
	],
	["NICS Mobile",
		["Download and Login Help", "mobilelogin"],
		["Settings", "mobilesettings"],
		["Incidents and Rooms", "mobileincident"],
		["Chat", "mobilechat"],
		["Map", "mobilemap"],
		["Report", "mobilereport"],
		["General Message", "mobilemessage"],
		["Troubleshooting and FAQ", "mobilefaq"]
	]];
//gets the title of page and stores as variable page
var name = document.getElementsByTagName("title")[0].innerHTML;
var page = name.substr(0,name.indexOf("-")-1);
//function cascades, at the top is the combination of the chapters
function writecontents(array) {
	var j = 0;
	while (j < array.length) {
		buildchapter(array[j]);
		j++;
	}
	document.write("<br />\
		<h3 class=\"marginless\"><a href=\"../videolibrary.php\" target=\"_top\">Video Library</a></h3>\
		<h3 class=\"marginless\"><a href=\"../links.php\" target=\"_top\">Links</a></h3>\
		<h3 class=\"marginless\"><a href=\"../documents.php\" target=\"_top\">Documents</a></h3>\
		</td>");
}
//Each chapter is built from individual links
function buildchapter(chapter) {
	document.write("<h3>" + chapter[0] + "</h3>")
	var i = 1;
	while (i < chapter.length) {
		writelink(chapter[i][0], chapter[i][1]);
		i++;
	}
}
//Individual links are checked for matches to var page
function writelink(title, link) {
	if (page.match(title) == page) {
		document.write("<span class=\"current\">" + title + "</span><br />");
	} else {
		document.write("<a target=\"_top\" href=\"/nicshelp/articles/" + link +
		".php\" >" + title + "</a><br />");
	}
}
//// END Table of Contents
