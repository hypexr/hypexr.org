<!DOCTYPE html>
<html>
<head>
<title>FreeBSD package Management (ports pkg_*) Basics</title>
<meta NAME="description" content="Linux tips, freebsd tip, ports help, ports command, installing freebsd packages">
<meta name="Keywords" content="tips, Linux, freebsd, ports,  help">
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

	<a name="scp"></a>
	<h1>FreeBSD Package Management (<b>ports, pkg_*</b>) Basics</h1>
	<p>After this short guide you will be proficient with installing, deleting, and upgrading software in FreeBSD</p>
	<p>I just started using FreeBSD  (4 shinny new 6.0 cds just arrived in the mail, hot off the press).  The part that I was most interested in is its package management.  I've come from the land of Linux...  Gentoo (portage: based on ports), Arch Linux (pacman: i686 binary package manager), all the rpm based systems, and Debian's package management concoction.  Portage and pacman have won me over and after a day of working with FreeBSD there is room for a little ports in my life.  This is my cheat sheet for getting started with ports and FreeBSD package management.  I obtained most of this information from the FreeBSD documentation on <a class="content_whitebg" href="http://www.freebsd.org/doc/en_US.ISO8859-1/books/handbook/ports.html#PORTS-SYNOPSIS">Installing Applications: Packages and Ports</a>.</p>

	<h3>Upon First Boot</h3>
	<p>When first booting into my system I was dropped into a shell.  I wasn't sure which shell, but I knew it was not BASH and immediately felt slightly crippled.  I had chose to install bash during the installation process so tried to switch to it by typing <b>bash</b>.  This didn't work so I did a search.  It turns out that the bash executable is in <b>/usr/local/bin</b>.  Go figure, there is a bunch of useful stuff in there.  <b>/usr/local/bin</b> and <b>/usr/local/sbin</b> will definitely be appended in my <b>PATH</b> variable. Now I'm ready to roll.

	<h3>Installing Compiled Packages (Quick!)</h3>
	<h4>pkg_add</h4>
	<p>You've searched and the package you want to use is not installed.  Lets say you want the console web browser <b>w3m</b> installed. This will install the package need from pre-compiled FreeBSD <b>.tbz</b> package.</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ pkg_add -r w3m
	</td></tr></table></ul>
	<p>With the -r option it fetches the package from the internet and installs it.  This is very quick and clean and its going to fetch and install all of the dependencies that you need as well.  Without the -r it is going to look for the package as if you had downloaded it manually.  For example:</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ wget ftp://ftp.freebsd.org/pub/FreeBSD/ports/i386/packages-6.0-release/Latest/w3m.tbz<br>
	    $ pkg_add w3m.tbz
	</td></tr></table></ul>
	<h4>pkg_delete</h4>
	<p>Deleting packages is as easy as installing them.  You will need the full package name when using <b>pkg_delete</b> so do something like this:</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ pkg_add -r mutt<br>
	    $ pkg_info | grep mutt
	</td></tr></table></ul>
	<p>This will give a line that shows the package name and its full version (mutt-1.4.2.1_2 <- for me), which you will need for pkg_delete.</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ pkg_delete mutt-1.4.2.1_2
	</td></tr></table></ul>


	<h3>Using <b>ports</b></h3>
	<p>Using <b>ports</b> is pretty easy as well once you know just a few commands.  Ports is going to give you the ability to have the FreeBSD package manager (<b>ports</b>) automatically download, compile, and install packages.  This is beneficial because it give you the power to add additional build flags to a package to make them more specific to your system, wether that be building packages with specific processor flags or passing custom compile options.</p>
	<h4>Updating your ports collection (<a class="content_whitebg" href="http://www.freebsd.org/doc/en_US.ISO8859-1/books/handbook/ports-using.html">Using the Ports Collection</a>)</h4>
	<p>Using the <b>CVSup Method</b> is the best option for keeping your ports collection up to date.  It is similar to Gentoo's <b>emerge sync</b> as it downloads the latest ports collection from the internet. First we need to add cvsup to our system:</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ pkg_add -r cvsup-without-gui
	</td></tr></table></ul>
	<p>And if your like me and don't want to type in the cvsup server every time you plan to update:</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ cp /usr/share/examples/cvsup/ports-supfile /root
	</td></tr></table></ul>
	<p>Edit <b>/root/ports-supfile</b> and change CHANGE_THIS.FreeBSD.org to one of the <a class="content_whitebg" href="http://www.freebsd.org/doc/en_US.ISO8859-1/books/handbook/cvsup.html#CVSUP-MIRRORS">CVSup Mirrors</a>. Now just run:</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ cvsup -L 2 /root/ports-supfile
	</td></tr></table></ul>
	<p>and your whole ports collection is going to be up to date.</p>

	<h4>Installing a package from <b>ports</b></h4>
	<p>The ports collection is held in <b>/usr/ports</b>.  In there you will find directories containing collections of packages that relate to each other.  Lets install <b>dosbox</b> for some old school dos gaming fun.</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ cd /usr/ports/emulators/dosbox<br>
	    $ make install clean
	</td></tr></table></ul>
	<p><b>make</b> instructs it to make the package, <b> install</b> instructs it to move the built files to the correct locations on your system, <b>clean</b> deletes the files that are not necessary anymore.</p>
	<p>It may ask you for some option to customize your install of its SDL dependency and thats it.  Its going to automatically fetch and install dosbox and all of its dependencies. Piece of cake.</p>
	<p>Changing compile/configure options is also easy.  Just open up its Makefile and edit as necessary.</p>

	<h3>Big Boy Toys (<b>portaudit & portupgrade</b>)</h3>
	<h4><b>portaudit</b></h4>
	<p><b>security/portaudit</b> is great.  It will check for any packages that are installed on your system that have know security flaws.  Easy to install, easy to use.  This will install it and give you a report of packages that have security problems:</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ pkg_add -r portaudit<br>
	    $ portaudit -F -a
	</td></tr></table></ul>
	<p>You can now remove the package that has the security problem and install a new version.</p>
	<h4><b>portupgrade</b></h4>
	<p>This tool is going to be used to keep our FreeBSD systems up to date.  First we need to read <b>/usr/ports/UPDATING</b> to check for any issues that may affect us when trying to auto update.</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
	    $ pkg_add -r portupgrade<br>
	    $ /usr/local/sbin/pkgdb -F<br>
	    $ /usr/local/sbin/portupgrade -a
	</td></tr></table></ul>
	<p>These commands will install <b>portupgrade</b>, build the database of the currently installed packages, and upgrade all of the packages on your system that newer versions exist for.  Pretty nice and easy.</p>

	<h3>Conclusion</h3>
	<p>FreeBSD offers powerful and convent package management that stands up to the competition.  I really like having the option of installing a pre-compiled package or using ports to have it build a the package from source to my specifications. FreeBSD's fancy new SMP improvements in 6.0 and authoritative ports = good times.</p>

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
