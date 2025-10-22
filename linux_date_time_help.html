<!DOCTYPE html>
<html>
<head>
<title>Changing the timezone, date, and time in Linux</title>
<meta NAME="description" content="Linux tips, linux documents, ntp help, ntp help, ntp tip, ntpdate help">
<meta name="Keywords" content="tips, linux, ntp, ntpd, ntpdate, rdate">
<link rel="stylesheet" href="./css/ss.css" type="text/css">

  <script language="javascript" type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div id="top_nav"></div>
<a name="top"></a>

<table border="0" cellspacing="0" cellpadding="0" width=100%>
  <tr>
    <td class="content_body" width=100% valign=top>
    <div style="padding: 0 4em;">
    <br>

<table class="tips_section" border="0" cellspacing="0" cellpadding=5px width=100%
  <tr>
    <td>


	    <a name="date"></a>
	    <h1>Changing the timezone, date, and time</h1>
	    <h3>Setting your time zone</h3>
	    In <b>/etc</b> the file, <b>localtime</b>, is a link to or copy of a file containing information about your time zone.  Zone information files are usually in <b>/usr/share/zoneinfo</b> but this depends on your distribution.  So if your <b>localtime</b> file points to a zone info file that is not your time zone you can change it by browsing the directories in <b>/usr/share/zoneinfo</b> to find your country, then find your city or a city in the same time zone and link <b>localtime</b> to it.
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		$ ln -sf /usr/share/zoneinfo/America/Los_Angeles /etc/localtime
	    </td></tr></table></ul>
            Some applications may use the configuration file <b>/etc/sysconfig/clock</b> to determine the current time zone so it's a good idea to set the ZONE entry (e.g. "America/Los_Angeles").

	    <h3>Changing the date and time</h3>
	    Changing the date and time requires two steps.  First, Linux's date and time must be changed and then the new time has to be written to the hardware clock.
	    <br>The <b>date</b> command can be used for both viewing and changing the date and time.
	    <ul><img src="./gfx/date_show_ex.png"></ul>
	    To change the time use <b>date</b> followed by the month, day, hour, minute, and year all numeric and no spaces.  So, to set the date and time to November 2nd, 2003 12:57
	    <ul><img src="./gfx/date_change_ex.png"></ul>
	    The hardware clock can be updated in UTC (coordinated universal time) or your local time.  It is standard practice to update it in UTC.
	    <ul><img src="./gfx/hw_utc_ex.png"></ul>
	    To update it to your local time leave off the <i>--utc</i> or add <i>--localtime</i> and leave off the <i>--utc</i>.
	    <ul><img src="./gfx/hw_local_ex.png"></ul>
	    <h4>Alternatively</h4>
	    The date and time can be changed directly to the hardware clock and then used to update the system clock.
	    <ul><img src="./gfx/hw_change_ex.png"></ul>
	    <h3>Using NTP (Network Time Protocol)</h3>
	    <a class="content_whitebg" HREF="http://www.ntp.org">NTP</a> will connect to a server to get the atomic time.  It can be downloaded from <a class="content_whitebg" HREF="http://www.ntp.org/downloads.html">www.ntp.org/downloads.html</a>
	    To get started with NTP simply download it, install it, use the <b>ntpdate</b> command followed by a public time server, and update your hardware clock.
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		$ ntpdate "server DNS name or IP address"<br>
		4 Nov 22:31:28 ntpdate[26157]: step time server 209.81.9.7 offset 22317290.440932 sec<br>
		$ hwclock --systohc
	    </td></tr></table></ul>
	    A public time server can be found at <a class="content_whitebg" HREF="http://support.ntp.org/bin/view/Servers/WebHome">http://support.ntp.org/bin/view/Servers/WebHome</a>
	    <br><br>To keep your time accurate you can create a cron job that executes:<br>(the -w option is the same as --systohc)
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		ntpdate "server name" && hwclock -w
	    </td></tr></table></ul>
	    <p>To stay independent of a particiluar server you can use <b>0.pool.ntp.org</b> (0, 1, or 2) for the server name.  This domain uses DNS round robin to choose different time servers every so often.  This keeps certain nameservers from having high loads.  The only disadvantage is the increased potential of updating time from a nameserver who is in the pool but has an incorrect time settings.</p>

	    These are volunteer public servers so be <b>polite</b>, do not constantly access the public servers, use only public servers (not private), and if you have multiple machines, set up a ntp server and have your other machines retrieve the time from your local server. Check <a class="content_whitebg" HREF="http://www.eecis.udel.edu/~mills/ntp/servers.html">http://www.eecis.udel.edu/~mills/ntp/servers.html</a> for detailed rules.
	    <h3>Using rdate</h3>
	    <b>rdate</b> is a different package that is used in the same way that ntpdate is.  It doesn't support running your own time server like NTP does, but can access the same time servers.
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		rdate "server name" && hwclock -w
	    </td></tr></table></ul>
	    <h3>Links</h3>
	    <a class="content_whitebg" HREF="http://www.time.gov/">NIST/Department of Commerce Official US Time</a> - What time is it?
	    <br><a class="content_whitebg" HREF="http://physics.nist.gov/GenInt/Time/time.html">A Walk Through Time</a> - Interesting information about the history of keeping track of time.
	    <h3>Contributions</h3>
	    <p>Thanks <b>Michael Barnes</b> for updated link for time servers.
            <br />
	    Thanks <b>Austin Duncan</b> for the information about pool.ntp.org.
	    <br>
	    Thanks <b>Evan Davey</b> for the information about the ZONE entry.</p>

	    <center><font size="1">Corrections, comments, questions e-mail <a class="content_whitebg" HREF="mailto:scott@hypexr.org">scott@hypexr.org</a></font></center>
	    <hr noshade>
	    <center><a class="content_whitebg" HREF="#top"><font size="1">Top of Page</font></a></center>

</td>
</tr>
</table>

</div>
</td>
</tr>
</table>

</td>
</tr>
</table>
<br>
<br>
</body>
</html>
