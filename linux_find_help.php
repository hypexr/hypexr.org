<!DOCTYPE html>
<html>
<head>
<title>Linux find command</title>
<meta NAME="description" content="Linux tips, linux documents, linux find help, find tip, search directories for text">
<meta name="Keywords" content="tips, linux, find, grep, search, directorys">
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

	<a name="find"></a>
	<h1>Locating files using the find command</h1>
	<p>The <b>find</b> command is a powerful *nix utility that allows the user to find files located in the file system via criteria such as the file name, when file was last accessed, when the file status was last changed, the file's permissions, owner, group, size, or even number of inodes.</p>
	<h3>Examples</h3>
	<h4>Find a file "foo.bar" that exists somewhere in the filesystem</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find / -name foo.bar -print
	</td></tr></table>
	<p>If the file is found the path to the file will be printed as output.  On most platforms the -print is optional, however, on some Unix systems nothing will be output without it.  Without specifications <b>find</b> searches recursively through all directories.</p></ul>
	<h4>Find a file without searching network or mounted filesystems</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find / -name foo.bar -print -xdev
	</td></tr></table>
	<p>This is useful if you have mounted network drives or filesystems that you do not want searched.  This can increase search speed greatly if the mounted filesystem is large or over a slow network.  "-mount" does the same thing as "-xdev" for compatibility with other versions of find.</p></ul>
	<h4>Find a file without showing "Permission Denied" messages</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find / -name foo.bar -print 2>/dev/null
	</td></tr></table>
	<p>When <b>find</b> tries to search a directory or file that you do not have permission to read the message "Permission Denied" will be output to the screen.  The 2>/dev/null option sends these messages to /dev/null so that the found files are easily viewed.</p></ul> 
	<h4>Find a file, who's name ends with .bar, within the current directory and only search 2 directories deep</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find . -name *.bar -maxdepth 2 -print
	</td></tr></table></ul>
	<h4>Search directories "./dir1" and "./dir2" for a file "foo.bar"</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find ./dir1 ./dir2 -name foo.bar -print
	</td></tr></table></ul>
	<h4>Search for files that are owned by the user "joebob"</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find /some/directory -user joebob -print
	</td></tr></table>
	<p>The files output will belong to the user "joebob".  Similar criteria are -uid to search for a user by their numerical id, -group to search by a group name, and -gid to search by a group id number.</p></ul>
	<h4>Find a file that is a certain type.  "-type l" searches for symbolic links</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find /some/directory -type l -print
	</td></tr></table>
	<p>Several types of files can be searched for:
	<ul>b&nbsp;&nbsp;&nbsp;&nbsp;block (buffered) special
	<br>c&nbsp;&nbsp;&nbsp;&nbsp;character (unbuffered) special
	<br>d&nbsp;&nbsp;&nbsp;&nbsp;directory
	<br>p&nbsp;&nbsp;&nbsp;&nbsp;named pipe (FIFO)
	<br>f&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;regular file
	<br>l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;symbolic link
	<br>s&nbsp;&nbsp;&nbsp;&nbsp;socket
	<br>D&nbsp;&nbsp;&nbsp;door (Solaris)</ul></p></ul>
	<h4>Search for directories that contain the phrase "foo" but do not end in ".bar"</h4>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find . -name '*foo*' ! -name '*.bar' -type d -print
	</td></tr></table>
	<p>The "!" allows you to exclude results that contain the phrases following it.</p></ul>

	<h3>The power of <b>find</b></h3>
	<p><b>find</b> becomes extremely useful when combined with other commands.  One such combination would be using <b>find</b> and <b>grep</b> together.</p>
	<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
	    $ find ~/documents -type f -name '*.txt' \
	    <br>-exec grep -s DOGS {} \; -print</td></tr></table>
	    <p>This sequence uses <b>find</b> to look in /users/home/directory/documents for a file (<i>-type f</i>) with a name ending in .txt.  It sends the files it finds to the <b>grep</b> command via the <i>-exec</i> option and <b>grep</b> searches the file found for any occurrences of the word "DOG".  If the file is found it will be output to the screen and if the word "DOG" is found, within one of the found files, the line that "DOG" occurs in will also be output to the screen.</p></ul>
	    <p>The ordering of <b>find</b>'s options are important for getting the expected results as well as for performance reason.
	    <br>Visit <a class="content_whitebg" HREF="http://www.linux-mag.com/2002-09/power_01.html">POWER TOOLS:A Very Valuable Find</a>, by Jerry Peek, for creative ways to use <b>find</b> and important tips about constructing the command's options.</p>

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
