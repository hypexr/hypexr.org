<!DOCTYPE html>
<html>
 <head>
  <title>BASH Help - A Bash Tutorial</title>
  <meta NAME="Guide to bash configuration files, set -o, pipelining, dealing with spaces, lists,alising, altering the command prompt, and bash completion.">
  <meta name="Keywords" content="bash,guide,tutorial,set -o,pipelining,spaces,list,alias,bash completion">
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
			<br>
			<table class="tips_section" border="0" cellspacing="0" cellpadding=5px width=100%>
			  <tr>
			    <td>

			      <h1>G<small>etting</small> S<small>tarted with</small> BASH
				<br><small>A Bash Tutorial</small></h1>
			      <br>
			      <h3><a class="content_whitebg" HREF="#whatis">What is the Bash Shell?</a></h3>
			      <h3><a class="content_whitebg" HREF="#config">Bash's Configuration Files</a></h3>

			      <h3><a class="content_whitebg" HREF="#set">Modifying the Bash Shell with the <b>set</b> Command</a></h3>
			      <ul><li><a class="content_whitebg" HREF="#emacs">Set Emacs Mode in Bash</a>
				  <ul><li><a class="content_whitebg" HREF="#emacs_cmds">Commands to take advantage of bash's Emacs Mode</a></ul>
			          <li><a class="content_whitebg" HREF="#vi">Set Vi Mode in Bash</a>
				  <ul><li><a class="content_whitebg" HREF="#vi_cmds">Commands to take advantage of bash's Vi Mode</a></ul>
			      </ul>
			      <h3><a class="content_whitebg" HREF="#tips">Useful Commands and Features</a></h3>
			      <ul><li><a class="content_whitebg" HREF="#flip">Flip the Last Two Characters</a>
			          <li><a class="content_whitebg" HREF="#history">Searching Bash History</a>
			          <li><a class="content_whitebg" HREF="#spaces">Dealing with Spaces</a>
			          <ul><li><a class="content_whitebg" HREF="#escape">Using the Backslash Escape Sequence</a>
			              <li><a class="content_whitebg" HREF="#quotes">Using Single/Double Quotes with Spaces and Variables</a>
				      </ul>
			          <li><a class="content_whitebg" HREF="#lists">Lists Using <b>{</b> and <b>}</b></a>
				  <li><a class="content_whitebg" HREF="#multiple">Executing Multiple Commands in Sequence</a>
				  <li><a class="content_whitebg" HREF="#pipelining">Pipelining Output from One Command to Another</a>
			      </ul>
			      <h3><a class="content_whitebg" HREF="#alias">Aliasing Commands</a></h3>
			      <h3><a class="content_whitebg" HREF="#cmd_prompt">Altering the Command Prompt Look and Information</a></h3>
			      <ul><li><a class="content_whitebg" HREF="#special">Backslash-escape special characters</a>
			          <li><a class="content_whitebg" HREF="#colors">Color Codes</a>
				  <li><a class="content_whitebg" HREF="#fun">Fun Stuff</a>
			      </ul>
				<h3><a class="content_whitebg" HREF="#cdargs">CDargs - Shell Bookmarks</a></h3>
			      <h3><a class="content_whitebg" HREF="#completion">Basic and Extended Bash Completion</a></h3>
			      <h3><a class="content_whitebg" HREF="#links">Links</a></h3>
			      <ul><li><a class="content_whitebg" HREF="#script">Links to Bash Scripting Tutorials</a></ul>
			      <h3><a class="content_whitebg" HREF="#contributions">Contributions</a></h3>
			      <h3><a class="content_whitebg" HREF="#translations">Translations</a></h3>

			      <br>
			      <hr noshade>
			      <br>
			   <a name="whatis"></a>
			   <h3>What is the Bash Shell?</h3>
			   <p>The GNU Bourne-Again SHell (BASH) incorporates features from the C Shell (csh) and the Korn Shell (ksh) and conforms to the POSTIX 2 shell specifications.  It provides a Command Line Interface (CLI) for working on *nix systems and is the most common shell used on Linux systems. Useful bash features will be the subject of the rest of this document.</p>

                           <br>
			   <a name="config"></a>
			   <h3>Bash's Configuration Files</h3>
			   <p>Because what I want to say here has already been written I will quote the section entitled "Files used by Bash" from freeunix.dyndns.org's <a class="content_whitebg" HREF="http://freeunix.dyndns.org:8088/site2/howto/Bash.shtml">"Customizing your Bash environment"</a>
				<ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
				In your home directory, 3 files have a special meaning to Bash, allowing you to set up your environment automatically when you log in and when you invoke another Bash shell, and allow you to execute commands when you log out.<br>
				These files may exist in your home directory, but that depends largely on the Linux distro you're using and how your sysadmin (if not you) has set up your account. If they're missing, Bash defaults to <b>/etc/profile</b>.<br>
				You can easily create these files yourself using your favorite texteditor. They are:
				<ul>
				<li> <b>.bash_profile</b> : read and the commands in it executed by Bash every time you log in to the system
				<li> <b>.bashrc</b> : read and executed by Bash every time you start a subshell
				<li> <b>.bash_logout</b> : read and executed by Bash every time a login shell exits
				</ul>
				Bash allows 2 synonyms for <b>.bash_profile</b> : <b>.bash_login</b> and <b>.profile</b>. These are derived from the C shell's file named <b>.login</b> and from the Bourne shell and Korn shell files named <b>.profile</b>. Only one of these files is read when you log in. If <b>.bash_profile</b> isn't there, Bash will look for <b>.bash_login</b>. If that is missing too, it will look for <b>.profile</b>.<br>
				<b>.bash_profile</b> is read and executed only when you start a login shell (that is, when you log in to the system). If you start a subshell (a new shell) by typing bash at the command prompt, it will read commands from <b>.bashrc</b>. This allows you to separate commands needed at login from those needed when invoking a subshell. <br>
				However, most people want to have the same commands run regardless of whether it is a login shell or a subshell. This can be done by using the <b>source</b> command from within <b>.bash_profile</b> to execute <b>.bashrc</b>. You would then simply place all the commands in <b>.bashrc</b>.
				</td></tr></table></ul>

			   <p>These files are useful for automatically executing commands like: set, alias, unalias, and setting the PS(1-4) variables, which can all be used to modify your bash environment.</p>
			   <p>You can use the <b>source</b> command to apply the changes that you have just made in a  configuration file.  For example if you add an alias to <b>/etc/profile</b> to apply the changes to your current session execute:</p>
			   	     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ source /etc/profile
				     </td></tr></table></ul>
                           <p>Active aliases can be viewed by executing the <b>alias</b> command. Some common files that may modify aliases are: ~/.bashrc, ~/.bash_profile, ~/.profile, /etc/bashrc, /etc/profile, files in /etc/profile.d.

			    <br>
			   <a name="set"></a>
			   <h3>Modifying the Bash Shell with the <b>set</b> Command</h3>
			   <p>Two options that can be set using the <b>set</b> command that will be of some interest to the common user are "-o vi" and "-o emacs".  As with all of the environment modifying commands these can be typed at the command prompt or inserted into the appropriate file mentioned above.</p>
			        <a name="emacs"></a>
			        <h4>Set Emacs Mode in Bash</h4>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ set -o emacs
				     </td></tr></table></ul>
				<p>This is usually the default editing mode when in the bash environment and means that you are able to use commands like those in Emacs (defined in the Readline library) to move the cursor, cut and paste text, or undo editing.</p>
				    <a name="emacs_cmds"></a>
				    <ul><p><b>Commands to take advantage of bash's Emacs Mode:</b></p>
                                    <table class="examples" border="0" cellspacing="5" cellpadding="0">
				    <tr><td width=40px>ctrl-a</td><td>
				      Move cursor to beginning of line</td></tr>
				    <tr><td>ctrl-e</td><td>
				      Move cursor to end of line</td></tr>
				    <tr><td>meta-b</td><td>
				      Move cursor back one word</td></tr>
				    <tr><td>meta-f</td><td>
				      Move cursor forward one word</td></tr>
				    <tr><td>ctrl-w</td><td>
				      Cut the last word</td></tr>
				    <tr><td>ctrl-u</td><td>
				      Cut everything before the cursor&nbsp;</td></tr>
				    <tr><td>ctrl-k</td><td>
				      Cut everything after the cursor</td></tr>
				    <tr><td>ctrl-y</td><td>
				      Paste the last thing to be cut</td></tr>
				    <tr><td>ctrl-_</td><td>
				      Undo</td></tr>
				    </table>
				    <p><b><i>NOTE:</i></b> ctrl- = hold control, meta- = hold meta (where meta is usually the <i>alt</i> or <i>escape</i> key).</p>
				    </ul>
				<p>A combination of ctrl-u to cut the line combined with ctrl-y can be very helpful.  If you are in middle of typing a command and need to return to the prompt to retrieve more information you can use ctrl-u to save what you have typed in and after you retrieve the needed information ctrl-y will recover what was cut.</p>
				<a name="vi"></a>
				<h4>Set Vi Mode in Bash</h4>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ set -o vi
				     </td></tr></table></ul>
				<p>Vi mode allows for the use of vi like commands when at the bash prompt.  When set to this mode initially you will be in insert mode (be able to type at the prompt unlike when you enter vi).  Hitting the <i>escape</i> key takes you into command mode.</p>
				    <a name="vi_cmds"></a>
				    <ul><p><b>Commands to take advantage of bash's Vi Mode:</b></p>
                                    <table class="examples" border="0" cellspacing="5" cellpadding="0">
				    <tr><td width=30px>h</td><td>
				      Move cursor left</td></tr>
				    <tr><td>l</td><td>
				      Move cursor right</td></tr>
				    <tr><td>A</td><td>
				      Move cursor to end of line and put in insert mode</td></tr>
				    <tr><td>0</td><td>
				      (zero) Move cursor to beginning of line (doesn't put in insert mode)&nbsp;</td></tr>
				    <tr><td>i</td><td>
				      Put into insert mode at current position</td></tr>
				    <tr><td>a</td><td>
				      Put into insert mode after current position</td></tr>
				    <tr><td>dd</td><td>
				      Delete line (saved for pasting)</td></tr>
				    <tr><td>D</td><td>
				      Delete text after current cursor position (saved for pasting)</td></tr>
				    <tr><td>p</td><td>
				      Paste text that was deleted</td></tr>
				    <tr><td>j</td><td>
				      Move up through history commands</td></tr>
				    <tr><td>k</td><td>
				      Move down through history commands</td></tr>
				    <tr><td>u</td><td>
				      Undo</td></tr>
				    </table>
				    </ul>
			      </ul>

			<br>
			      <a name="tips"></a>
			      <h3>Useful Commands and Features</h3>
			      <p>The commands in this section are non-mode specific, unlike the ones listed above.</p>
			      <a name="flip"></a>
			      <h4>Flip the Last Two Characters</h4>
			      <p>If you type like me your fingers spit characters out in the wrong order on occasion.  <i>ctrl-t</i> swaps the order that the last two character appear in.</p>
			      <a name="history"></a>
			      <h4>Searching Bash History</h4>
			      <p>As you enter commands at the CLI they are saved in a file ~./.bash_history.  From the bash prompt you can browse the most recently used commands through the least recently used commands by pressing the up arrow.  Pressing the down arrow does the opposite.</p>
			      <p>If you have entered a command a long time ago and need to execute it again you can search for it.  Type the command 'ctrl-r' and enter the text you want to search for.</p>

			      <a name="spaces"></a>
			      <h4>Dealing with Spaces</h4>
			      <p>First, I will mention a few ways to deal with spaces in directory names,  file names, and everywhere else.</p>
			      <a name="escape"></a>
			      <h4>Using the Backslash Escape Sequence</h4>
			      <p>One option is to use bash's escape character <b>\</b>.  Any space following the backslash is treated as being part of the same string.  These commands create a directory called "foo bar" and then remove it.</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ mkdir foo\ bar<br>
				     $ rm -r foo\ bar
				     </td></tr></table></ul>
				     <p>The backslash escape sequence can also be used to decode commands embedded in strings which can be very useful for scripting or modifying the command prompt as discussed later.</p>
				     <a name="quotes"></a>
				     <h4>Using Single/Double Quotes with Spaces and Variables</h4>
				     <p>Single and double quotes can also be used for dealing with spaces.</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ touch 'dog poo'<br>
				     $ rm "dog poo"
				     </td></tr></table></ul>
				     <p>The difference between single and double quotes being that in double quotes the <b>$</b>, <b>\</b>, and <b>'</b> characters still preserve their special meanings. Single quotes will take the <b>$</b> and <b>\</b> literally and regard the <b>'</b> as the end of the string.  Here's an example:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ MY_VAR='This is my text'<br>
				     $ echo $MY_VAR<br>
				     This is my text<br>
				     $ echo "$MY_VAR"<br>
				     This is my text<br>
				     $ echo '$MY_VAR'<br>
				     $MY_VAR
				     </td></tr></table></ul>
				     <p>The string following the <b>$</b> character is interpreted as being a variable except when enclosed in single quotes as shown above.</p>

				     <a name="lists"></a>
				     <h4>Lists Using <b>{</b> and <b>}</b></h4>
				     <p>The characters <b>{</b> and <b>}</b> allow for list creation.  In other words you can have a command be executed on each item in the list.  This is perhaps best explained with examples:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ touch {temp1,temp2,temp3,temp4}
				     </td></tr></table></ul>
				     <p>This will create/modify the files temp1, temp2, temp3, and temp4 and as in the example above when the files share common parts of the name you can do:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ mv temp{1,2,3,4} ./foo\ bar/
				     </td></tr></table></ul>
				     <p>This will move all four of the files into a directory 'foo bar'.</p>

				     <a name="multiple"></a>
				     <h4>Executing Multiple Commands in Sequence</h4>
				     <p>This is a hefty title for a simple task.  If you want to run three commands, one right after the other, you can type them on a single line:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     $ ./configure; make; make install<br>
				     <b>OR</b><br>
				     $ ./configure && make && make install
				     </td></tr></table></ul>
				     <p>With the first if the ./configure fails the other two commands will continue to execute.  With the second the commands following the && will only execute if the command previous finishes without error.  Thus, the second would be most useful for this example because there is no reason to run 'make' or 'make install' if the configuration fails.</p>

				     <a name="pipelining"></a>
				     <h4>Piping Output from One Command to Another</h4>
				     <p>Piping allows the user to do several fantastic thing by combining utilities.  I will cover only very basic uses for piping.  I most commonly use the pipe command, <b>|</b>, to pipe text that is output from one command through the <b>grep</b> command to search for text.</p>
				     <p><ul><b>Examples:</b>
				     <table class="examples" border="0" cellspacing="0" cellpadding="10" width="85%"><tr><td>
				     <b>See if a program, centericq, is running:</b>
				     <ul>$ ps ax | grep centericq<br>
				     25824 pts/2    S      0:18 centericq</ul>
				     <b>Count the number of files in a directory (nl counts things):</b>
				     <ul>$ ls | nl<br>
					  1  #.emacs#<br>
					  2  BitchX<br>
					  3  Outcast double cd.lst<br>
					  4  bm.shader<br>
					  5  bmtexturesbase.pk3<br></ul>
			             <b>If my memory serves using RPM to check if a package is installed:</b>
				     <ul>$ rpm -qa | grep package_name</ul>
				     <b>A more advance example:</b>
				     <ul>$ cat /etc/passwd | awk -F: '{print $1 "\t" $6}' | sort > ./users</ul>
				     This sequence takes the information if the file passwd, pipes it to awk, which takes the first and sixth fields (the user name and home directory respectively), pipes these fields separated by a tab ("\t") to sort, which sorts the list alphabetically, and puts it into a file called users.
                                     </td></tr></table></ul></p>

			<br>
			      <a name="alias"></a>
			      <h3>Aliasing Commands</h3>
			      <p>Once again I like how this topic is covered on freeunix.dyndns.org:8088 in <a class="content_whitebg" HREF="http://freeunix.dyndns.org:8088/site2/howto/Bash.shtml">"Customizing your Bash environment"</a> I will quote the section entitled "Aliasses":</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
      If you have used UNIX for a while, you will know that there are many commands available and that some of them have
      very cryptic names and/or can be invoked with a truckload of options and arguments. So, it would be nice to have a feature
      allowing you to rename these commands or type something simple instead of a list of options.
      Bash provides such a feature : the <b><i> alias </i></b>.<br>
      Aliasses can be defined on the command line, in <i>.bash_profile</i>, or in <i>.bashrc</i>,
      using this form :
      <table><tr><td> <b><xmp> alias name=command</xmp></b></td></tr></table>
      This means that <b>name</b> is an alias for <b>command</b>. Whenever name is typed as a command, Bash will substitute
      command in its place. Note that there are no spaces on either side of the equal sign. Quotes around command
      are necessary if the string being aliassed consists of more than one word. A few examples :
       <table align="center"><tr><td><xmp>
alias ls='ls -aF --color=always'
alias ll='ls -l'
alias search=grep
alias mcd='mount /mnt/cdrom'
alias ucd='umount /mnt/cdrom'
alias mc='mc -c'
alias ..='cd ..'
alias ...='cd ../..'  </xmp></td></tr></table>
      The first example ensures that ls always uses color if available, that dotfiles are listed as well,that directories are
      marked with a / and executables with a *. To make ls do the same on FreeBSD, the alias would become :
      <table align="center"><tr><td><xmp>
   alias ls='/bin/ls -aFG' </xmp></td></tr></table>
      To see what aliasses are currently active, simply type <b>alias</b> at the command prompt and all active aliasses will
      be listed. To "disable" an alias type <b>unalias</b> followed by the alias name.
				     </td></tr></table></ul>

			<br>
			      <a name="cmd_prompt"></a>
			      <h3>Altering the Command Prompt Look and Information</h3>
			      <p>Bash has the ability to change how the command prompt is displayed in information as well as colour.  This is done by setting the PS1 variable.  There is also a PS2 variable.  It controls what is displayed after a second line of prompt is added and is usually by default '> '.  The PS1 variable is usually set to show some useful information by the Linux distribution you are running but you may want to earn style points by doing your own modifications.</p>
			      <p>Here are the backslash-escape special characters that have meaning to bash:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="85%"><tr><td>
<pre>
 \a     an ASCII bell character (07)
 \d     the date  in  "Weekday  Month  Date"  format
        (e.g., "Tue May 26")
 \e     an ASCII escape character (033)
 \h     the hostname up to the first `.'
 \H     the hostname
 \j     the  number of jobs currently managed by the shell
 \l     the basename of the shell's terminal device name
 \n     newline
 \r     carriage return
 \s     the  name  of  the shell, the basename of $0
        (the portion following the final slash)
 \t     the current time in 24-hour HH:MM:SS format
 \T     the current time in 12-hour HH:MM:SS format
 \@     the current time in 12-hour am/pm format
 \u     the username of the current user
 \v     the version of bash (e.g., 2.00)
 \V     the release of bash,  version  +  patchlevel
        (e.g., 2.00.0)
 \w     the current working directory
 \W     the  basename  of the current working direcory
 \!     the history number of this command
 \#     the command number of this command
 \$     if the effective UID is 0, a #, otherwise a $
 \nnn   the character corresponding to the octal number nnn
 \\     a backslash
 \[     begin a sequence of non-printing characters,
        which could be used to embed a terminal control
        sequence into the prompt
 \]     end a sequence of non-printing characters
</pre>
				     </td></tr></table></ul>
				     <a name="colors"></a>
                                     <p>Colours In Bash:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="85%"><tr><td>
<pre>
Black       0;30     Dark Gray     1;30
Blue        0;34     Light Blue    1;34
Green       0;32     Light Green   1;32
Cyan        0;36     Light Cyan    1;36
Red         0;31     Light Red     1;31
Purple      0;35     Light Purple  1;35
Brown       0;33     Yellow        1;33
Light Gray  0;37     White         1;37
</pre>
				     </td></tr></table></ul>
			      <p>Here is an example borrowed from the Bash-Prompt-HOWTO:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="85%"><tr><td>
				     PS1="\[\033[1;34m\][\$(date +%H%M)][\u@\h:\w]$\[\033[0m\] "
				     </td></tr></table></ul>
			      <p>This turns the text blue, displays the time in brackets (very useful for not losing track of time while working), and displays the user name, host, and current directory enclosed in brackets.  The "\[\033[0m\]" following the $ returns the colour to the previous foreground colour.</p>
			      <p>How about command prompt modification thats a bit more "pretty":</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="85%"><tr><td>
				     PS1="\[\033[1;30m\][\[\033[1;34m\]\u\[\033[1;30m\]@\[\033[0;35m\]\h\[\033[1;30m\]] \[\033[0;37m\]\W \[\033[1;30m\]\$\[\033[0m\] "
				     </td></tr></table></ul>
			      <p>This one sets up a prompt like this: [user@host] directory $</p>
			      <p>Break down:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
				     <p>\[\033[1;30m\] - Sets the color for the characters that follow it. Here 1;30 will set them to Dark Gray.
					<br>\u \h \W \$ - Look to the table above
					<br>\[\033[0m\] - Sets the colours back to how they were originally.</p>
				     </td></tr></table></ul>
			      <p>Each user on a system can have their own customized prompt by setting the PS1 variable in either the .bashrc or .profile files located in their home directories.</p>
			          <a name="fun"></a>
				  <h4>FUN STUFF!</h4>
				  <p>A quick note about <a class="content_whitebg" HREF="http://bashish.sourceforge.net/">bashish</a>.  It allows for adding themes to a terminal running under a GUI.  Check out the site for some screen-shots of what it can do.</p>
				  <p>Also, the program <b>fortune</b> is a must [At least I have considered it so every since my Slackware days (it is default)].  It doesn't have anything to do with bash and is a program that outputs a quote to the screen.  Several add-ons are available to make it say stuff about programming, the xfiles, futurama, starwars, and more.  Just add a line in your /etc/profile like this to brighten your day when you log into your computer:</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     echo;fortune;echo
				     </td></tr></table></ul>
			<br />
			<br />

				<a name="cdargs"></a>
		      	<h3>CDargs - Shell Bookmarks</h3>

				<p>Impress your friends and colleagues with lightening fast directory switching using the <a class="content_whitebg" href="http://www.skamphausen.de/cgi-bin/ska/CDargs/">CDargs</a> bookmarking tool.  CDargs is not exclusive to BASH, but is a great addition and works on *nix based systems, including OS X.  <a class="content_whitebg" href="http://www.skamphausen.de/downloads/cdargs/">Download CDargs here</a> in source or rpm.</p>
				<p>CDargs allow for setting named marks in directories and moving to them quickly using the <b>cdb</b> command or a ncurses view.</p>
				<h4>Install</h4>
				<ul>
					<li>Compile / install source</li>
					<li>Move cdargs-bash.sh to /etc</li>
					<li>Add this line to your users .bashrc file</li><br>
					<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
				     source /etc/cdargs-bash.sh
				     </td></tr></table></ul><br>
					<li>Relogin or run <b>source ~/.bashrc</b></li>
				</ul>
				<h4>Usage</h4>
				<ul>
					<p><b>mark</b></p>
					<p>Mark a directory that you want to get to quickly in the future. Move to the desired directory and type <b>mark &lt;name&gt;</b> or simply <b>mark</b> to have it take the name of the current directory.  You can also mark a directory using the ncurses tool. Run <b>cdargs</b> or <b>cdb</b> to start the ncurses tool.  Add a new mark by pressing <b>a</b>.</p>

					<p><b>cdb</b></p>
					<p>Now you have a bunch of marked directories.  Simply type <b>cdb &lt;name of a mark&gt;</b> to move to the marked directory.  Alternatively use <b>cdb</b> and navigate with arrows or number to the desired mark.</p>

					<p><b>manage</b></p>
					<p>Start the ncurses tool <b>cdb</b>. Some useful keys to thump:</p>
					<ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
<pre>a                   add new mark
d                   delete mark
e                   edit mark
right left arrows   move in and out of directories
l                   list the files in the highlighted directory
c                   make a copy of a mark
enter               go to selected directory / mark</pre>
				     </td></tr></table></ul>

					<p>You can also edit the <b>~/.cdargs</b> text file directly to manage marks</p>

				</ul>


			<br>
			<br>
			      <a name="completion"></a>
			      <h3>Basic and Extended Bash Completion</h3>
			      <p><b>Basic Bash Completion</b> will work in any bash shell.  It allows for completion of:</p>
<ol><li>File Names
<li>Directory Names
<li>Executable Names
<li>User Names (when they are prefixed with a ~)
<li>Host Names (when they are prefixed with a @)
<li>Variable Names (when they are prefixed with a $)
</ol>
                              <p>This is done simply by pressing the tab key after enough of the word you are trying to complete has been typed in.  If when hitting tab the word is not completed there are probably multiple possibilities for the completion.  Press tab again and it will list the possibilities.</p>
                              <p>Note that when completing a user name using '~' the resulting completion will be the user's home directory.  E.g. "ls ~myus" would complete to "ls ~myuser/" and executing it would show the contents of the myuser's home directory.</p>

			      <p><b>Extended Programmable Bash Completion</b> is a program that you can install to complete much more than the names of the things listed above.  With extended bash completion you can, for example, complete the name of a computer you are trying to connect to with <b>ssh</b> or <b>scp</b>.  It achieves this by looking through the known_hosts file and using the hosts listed there for the completion.  This is greatly customizable and the package and more information can be found <a class="content_whitebg" HREF="http://freshmeat.net/projects/bashcompletion/?topic_id=253%2C884%2C861">here</a>.</p>
			      <p>Configuration of Programmable Bash Completion is done in <b>/etc/bash_completion</b>.  Here is a list of completions that are in my  <b>bash_completion</b> file by default.</p>
				     <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td align="top">
				     <ul><li>completes on signal names<br>
				     <li>completes on network interfaces<br>
				     <li>expands tildes in pathnames<br>
				     <li>completes on process IDs<br>
				     <li>completes on process group IDs<br>
				     <li>completes on user IDs<br>
				     <li>completes on group IDs<br>
				     <li>ifconfig(8) and iwconfig(8) helper function<br>
				     <li>bash alias completion<br>
				     <li>bash export completion<br>
				     <li>bash shell function completion<br>
				     <li>bash complete completion<br>
				     <li>service completion<br>
				     <li>chown(1) completion<br>
				     <li>chgrp(1) completion<br>
				     <li>umount(8) completion<br>
				     <li>mount(8) completion<br>
				     <li>Linux rmmod(8) completion<br>
				     <li>Linux insmod(8), modprobe(8) and modinfo(8) completion<br>
				     <li>man(1) completion<br>
				     <li>renice(8) completion<br>
				     <li>kill(1) completion<br>
				     <li>Linux and FreeBSD killall(1) completion<br>
				     <li>GNU find(1) completion<br>
				     <li>Linux ifconfig(8) completion<br>
				     <li>Linux iwconfig(8) completion<br>
				     <li>RedHat & Debian GNU/Linux if{up,down} completion<br>
				     <li>Linux ipsec(8) completion (for FreeS/WAN)<br>
				     <li>Postfix completion<br>
				     <li>cvs(1) completion<br>
				     <li>rpm completion<br>
				     <li>apt-get(8) completion<br>
				     <li>chsh(1) completion<br>
				     <li>chkconfig(8) completion<br>
				     <li>user@host completion<br>
				     <li>host completion based on ssh's known_hosts<br>
				     <li>ssh(1) completion<br>
				     <li>scp(1) completion<br>
				     <li>rsync(1) completion<br>
				     <li>Linux route(8) completion<br>
				     <li>GNU make(1) completion<br>
				     <li>GNU tar(1) completion<br>
				     <li>jar(1) completion<br>
				     <li>Linux iptables(8) completion<br>
				     <li>tcpdump(8) completion<br>
				     <li>autorpm(8) completion<br>
				     <li>ant(1) completion
				     </ul></td>
				     <td valign="top"><ul>
				     <li>mysqladmin(1) completion<br>
				     <li>gzip(1) completion<br>
				     <li>bzip2(1) completion<br>
				     <li>openssl(1) completion<br>
				     <li>screen(1) completion<br>
				     <li>lftp(1) bookmark completion<br>
				     <li>ncftp(1) bookmark completion<br>
				     <li>gdb(1) completion<br>
				     <li>Postgresql completion<br>
				     <li>psql(1) completion<br>
				     <li>createdb(1) completion<br>
				     <li>dropdb(1) completion<br>
				     <li>gcc(1) completion<br>
				     <li>Linux cardctl(8) completion<br>
				     <li>Debian dpkg(8) completion<br>
				     <li> Debian GNU dpkg-reconfigure(8) completion<br>
				     <li>Debian Linux dselect(8) completion<br>
				     <li>Java completion<br>
				     <li>PINE address-book completion<br>
				     <li>mutt completion<br>
				     <li>Debian reportbug(1) completion<br>
				     <li>Debian querybts(1) completion<br>
				     <li>update-alternatives completion<br>
				     <li>Python completion<br>
				     <li>Perl completion<br>
				     <li>rcs(1) completion<br>
				     <li>lilo(8) completion<br>
				     <li>links completion<br>
				     <li>FreeBSD package management tool completion<br>
				     <li>FreeBSD kernel module commands<br>
				     <li>FreeBSD portupgrade completion<br>
				     <li> FreeBSD portinstall completion<br>
				     <li>Slackware Linux removepkg completion<br>
				     <li>look(1) completion<br>
				     <li>ypcat(1) and ypmatch(1) completion<br>
				     <li>mplayer(1) completion<br>
				     <li>KDE dcop completion<br>
				     <li>wvdial(1) completion<br>
				     <li>gpg(1) completion<br>
				     <li>iconv(1) completion<br>
				     <li>dict(1) completion<br>
				     <li>cdrecord(1) completion<br>
				     <li>mkisofs(8) completion<br>
				     <li>mc(1) completion<br>
				     <li>yum(8) completion<br>
				     <li>yum-arch(8) completion<br>
				     <li>ImageMagick completion</ul>
				     </td></tr></table></ul>
			      <br>

				     <br>
			      <a name="links"></a>
			      <h3>Links</h3>
			      <ol>
			           <li><a class="content_whitebg" HREF="http://en.tldp.org/HOWTO/Bash-Prompt-HOWTO/">Bash Prompt HOWTO</a></li>
			           <li><a class="content_whitebg" HREF="http://www.faqs.org/docs/bashman/bashref_toc.html">Bash Reference Manual</a></li>
			           <li><a class="content_whitebg" HREF="http://freeunix.dyndns.org:8088/site2/howto/Bash.shtml">Customizing your Bash environment</a></li>
			           <li><a class="content_whitebg" HREF="http://www.caliban.org/bash/index.shtml">Working more productively with bash 2.x</a></li>
			           <li><a class="content_whitebg" HREF="http://www.deadman.org/bash.html">Advancing in the Bash Shell</a></li>
			           <li><a class="content_whitebg" HREF="http://www.nyetwork.org/wiki/Bash">Bash - Bourne Again SHell</a></li>
			           <li><a class="content_whitebg" HREF="http://www.linuxjournal.com/article.html?sid=2784">What's GNU: Bash - The GNU Shell</a></li>
			           <li><a class="content_whitebg" HREF="http://forums.gentoo.org/viewtopic.html?t=60071&postdays=0&postorder=asc&highlight=favorite+favourite+linux+tips&start=75">Bash Tips in Gentoo Forums</a></li>
			           <li><a class="content_whitebg" HREF="http://www.die.net/doc/linux/man/man1/bash.1.html">bash(1) - Linux man page</a></li>
			           <li><a class="content_whitebg" HREF="http://bashish.sourceforge.net">BASHISH</a></li>
				   <li><a class="content_whitebg" HREF="http://www.skamphausen.de/cgi-bin/ska/CDargs/">CDargs</a></li>
				   <li><a class="content_whitebg" HREF="http://tiswww.case.edu/html/chet/bash/bashref.html">Bash Reference Manual</a></li>
				   <li><a class="content_whitebg" HREF="http://www.debian-administration.org/articles/316">Extending BASH completion</a></li>
			      </ol>

			      <a name="script"></a>
			      <h4>Learn About Bash Scripting:</h4>
			      <ol>
			           <li><a class="content_whitebg" HREF="https://www.ibm.com/developerworks/library/l-bash/">Bash by example, Parlt 1</a></li>
			           <li><a class="content_whitebg" HREF="http://www.ibm.com/developerworks/library/l-bash2/">Bash by example, Part 2</a></li>
			           <li><a class="content_whitebg" HREF="http://www.ibm.com/developerworks/library/l-bash3/">Bash by example, Part 3</a></li>
			           <li><a class="content_whitebg" HREF="http://www.tldp.org/LDP/abs/html/">Advanced Bash-Scripting Guide</a></li>
			           <li><a class="content_whitebg" HREF="http://pegasus.rutgers.edu/~elflord/unix/bash-tute.html">A quick guide to writing scripts using the bash shell</a></li>
			           <li><a class="content_whitebg" HREF="http://mywiki.wooledge.org/BashGuide">Greg's wiki Bash Guide</a></li>
			           <li><a class="content_whitebg" HREF="http://mywiki.wooledge.org/BashFaq">Greg's wiki Bash FAQ</a></li>
			           <li><a class="content_whitebg" HREF="http://wiki.bash-hackers.org/">Bash Hackers Wiki</a></li>
			           <li><a class="content_whitebg" HREF="http://mywiki.wooledge.org/BashPitfalls">Bash Pitfalls - Shows common bash scripting errors</a></li>

			      </ol>
                              Additionally #bash on irc.freenode.org is a great place to ask questions and learn more about bash.
				  <br />
				  <br />
			      <a name="contributions"></a>
			      <h3>Contributions</h3>
                                	<p>Thanks <b>Michael Klement</b> for notes on using bash completion with user names.</p>
         				<p>Thanks <b>Andrew Hart </b> for letting me know about the non recursive rm mistake when deleting a directory.</p>
					<p>Thanks <b>Paul Carey</b> for pointing out a bash color code error.</p>
					<p>Thanks <b>Matt Spaulding</b> for the scoop on CDargs.</p>
			      	<p>Thanks <b>Thomas</b> for pointing out the difference between ; and && when executing multiple commands on one line.</p>
			      	<p>Thanks <b>Bruce Langston</b> for the correction for the BASHISH URL under Links.</p>
                                <p>Thanks <b>Scott Pedigo</b> for additional 'alias' information.< p>
                                <p>Thanks <b>Steve Long</b> for additional links and references.</p>
                                <p>Thanks <b>Mukhtar Sharif</b> for correction to BASH by example links.</p>

			      <a name="translations"></a>
			      <h3>Translations</h3>
<p>Ttranslated to <a class="content_whitebg" href="http://science.webhostinggeeks.com/pocinjanje-u-bash-u">Serbo-Croatian</a> by <a class="content_whitebg" href="http://webhostinggeeks.com/"> Web Geeks </a>.</p>
<p>Translated to <a class="content_whitebg" href="https://www.bydiscountcodes.co.uk/translations/getting-started-with-bash/">Punjabi</a> by <a class="content_whitebg" href="https://www.bydiscountcodes.co.uk/"> Bydiscountcodes Team </a>.</p>

					<div align="center"><font size="1">Corrections, comments, questions e-mail: <a class="content_whitebg" HREF="mailto:scott@hypexr.org">scott@hypexr.org</a><br>Last Modified: [Date not available in static HTML]
</font></div>
			      <hr noshade>
			      <center><a class="content_whitebg" HREF="#top"><font size="1">Top of Page</font></a></center>

			    </td>
			  </tr>
			</table>
			</center>
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
