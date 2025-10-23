<!DOCTYPE html>
<html>
 <head>
  <title>Fixing the Backspace/Ruboff key in Linux's Xterm and Emacs</title>
  <meta NAME="How to fix your backspace key in Xterm so it works in programs like Emacs.">
  <meta name="Keywords" content="ruboff,backspace,help,delete,xterm,emacs,tset,terminfo,linux,qpong,unix,help,c++,open source,chico,computer science, slackware,gentoo,red hat, programming,csu chico,csci 151,quake II, quake 2, quake2, g++,gnu,scott rippee, scott, scott@hypexr.org">
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
			      <h1>How to fix the backspace/ruboff key in Emacs/Xterm</h1>
			      <p>There is a good amount of documentation available on the web regarding backspace/ruboff and delete key issues.  Check the <a class="content_whitebg" HREF="#references">References</a> for detailed information.  Go to <a class="content_whitebg" HREF="#bsolution">The Best Solution</a> for a quick fix.</p>
			      <br>
			      <h3><a class="content_whitebg" HREF="#problem">The Problem</a></h3>
			      <h3><a class="content_whitebg" HREF="#intro">Introduction</a></h3>

			      <h3><a class="content_whitebg" HREF="#solutions">Different Solutions to the Problem</a></h3>
			        <ul>
			        <li><a class="content_whitebg" HREF="#solutions_bkarrowkey">Changing Xterm's backarrowKey variable</a>
				<li><a class="content_whitebg" HREF="#stty">Using <b>stty</b> to view and change the erase variable</a>
				<li><a class="content_whitebg" HREF="#map_emacs">Altering mapped keys in Emacs</a>
				</ul>

			      <h3><a class="content_whitebg" HREF="#bsolution">The Best Solution</a></h3>
			      <h3><a class="content_whitebg" HREF="#references">References</a></h3>

			      <br>
			      <hr noshade>
			      <br>
			      <a name="problem"></a>
			      <h3>The Problem</h3>
			      <p>If Emacs recognizes the key normally above the enter/return key (that produces a delete to the left) as sending the help command rather than the delete to the left command, then you are experiencing this problem.  This key is typically called the <i>backspace</i> key, neutrally known as the <i>ruboff</i> key.  Throughout the rest of this document it will be referred to as the <i>backspace</i> key.  The <i>delete</i> key will refer to the key that says "delete" or "del"  on it and is expected to delete the character to the right.</p>
			      <br>
			      <a name="intro"></a>
			      <h3>Introduction</h3>
			      <p>It is helpful to note the ASCII codes that will be discussed.  ASCII char BS is 08 in decimal, 0x08 in hex, and alternatively '^H'.  ASCII char DEL is 127 in decimal, 0x7f in hex, and alternatively '^?'.  In Xterm's emulate of the vt100 terminal it sends '^H' (0x08) when the <i>backspace</i> key is hit, "\e[3~" when the <i>delete</i> key is hit, and '^H' (0x08) when ctrl-h is hit.  Some programs, such as Emacs, want to use '^H' (0x08) for commands other than delete.  To work around this problem the key-map in Emacs either has to be changed to accept '^H' as delete left or Xterm should send '^?' to delete to the left and tty should be told to expect '^?' as meaning delete left.  The solutions shown in the next section address changing Emacs key-map, getting Xterm to send the different key codes, and setting <b>stty</b>'s variables.</p>
			      <p>Note that you can type ctrl-v followed by a key on the keyboard to show what key code is being sent for that key.  When this is done its representation of "\e[3~" is "^[[3~" for the <i>delete</i> key.  The <b>xev</b> command is a X tool to show what keycodes are being sent.</p>
			      <br>

			      <a name="solutions"></a>
			      <h3>Different Solutions to the  Problem</h3>
			      <p>There are several methods of fixing or altering the behavior of the <i>backspace</i> key.  The solutions listed here are either partial solutions or less optimal than preferred. They have been included to provide more insight into altering the keycodes are sent and how they are interpreted by the console and applications.  Please look at the <a class="content_whitebg" HREF="#bsolution">best solution</a> for the preferred fix.</p>
			           <a name="solutions_bkarrowkey"></a>
			           <h4>Changing Xterm's backarrowKey variable</h4>
				   <p>One way to fix the immediate problem of your <i>backspace</i> key sending '^H' (bringing up help in emacs instead of doing a left delete) is to change the backarrowKey variable in Xterm.  By default the backarrowKey variable is set to true and Xterm sends '^H', ASCII value 8.  When set to false it will send '^?', ASCII value 127.
				   <ul type="disk">
				   <li>To set it to false while running Xterm, hold down the <i>ctrl</i> key and left click with the mouse (Note that middle and right clicking also bring up options).  If backarrowKey is set to true there should be a check mark by "Backarrow Key(BS/DEL)".  Remove this and see if <i>backspace</i> performs delete left in emacs.
				   <br><br><li>To set it to false when Xterm starts up add the following lines to <b>.Xdefaults</b>.  It can alternatively be added to <b>.Xresources</b>, but <b>.Xresources</b>  is normally read when the window manager starts up and <b>.Xdefaults</b> is read for each application that starts up and checks for variables, so it is best to add it to <b>.Xdefaults</b>.
				   <br><br><ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				   xterm.*backarrowKey: false
				   </td></tr></table></ul>
				   <br><li>Yet another way of changing the value of backarrowKey is to hold <i>ctrl</i> when hitting <i>backspace</i>.  This tells Xterm to swap the value of backarrowKey, hence changing <i>backspace</i>'s behavior.
				   </ul>
				   <br>These solutions, however, may cause other problems.  For example, other applications may suffer from a similar problem that Emacs was having and output the '^?' character to the screen.  As for holding down <i>ctrl</i> every time you hit <i>backspace</i>, that is an unnecessary annoyance.</p>

				   <a name="stty"></a>				  
				   <h4>Using <b>stty</b> to view and change the erase variable</h4>
				   <p><b>stty</b> is a tool for changing and viewing the terminal settings.  Many programs use <b>stty</b>'s settings so see what keys are mapped to what.  In the previous examples where we changed the value of backarrowKey any programs that output '^?' after setting backarrowKey to false did so because they expected '^H' or another key to be delete left.  The program may have been looking at <b>stty</b>'s erase variable to find out what key is delete left and if so <b>stty</b>'s erase was set to something other than '^?', probably '^H'. To see what erase is set to enter the command:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				   $ stty -a
				   </td></tr></table></ul>
				   <p>The output will look something like this:
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="90%"><tr><td>
				   $ stty -a
				   <br>speed 38400 baud; rows 28; columns 82; line = 0;
				   intr = ^C; quit = ^\; erase = ^?; kill = ^U; eof = ^D; eol = <undef>;
				   eol2 = <undef>; start = ^Q; stop = ^S; susp = ^Z; rprnt = ^R; werase = ^W;
				   lnext = ^V; flush = ^O; min = 1; time = 0;
				   -parenb -parodd cs8 -hupcl -cstopb cread -clocal -crtscts
				   -ignbrk -brkint -ignpar -parmrk -inpck -istrip -inlcr -igncr icrnl ixon -ixoff
				   -iuclc -ixany -imaxbel
				   opost -olcuc -ocrnl onlcr -onocr -onlret -ofill -ofdel nl0 cr0 tab0 bs0 vt0 ff0
				   isig icanon iexten echo echoe echok -echonl -noflsh -xcase -tostop -echoprt
				   echoctl echoke

				   </td></tr></table></ul>
<!--				   <ul><img src="./gfx/stty-a_examp.png"></ul>-->
				   <p>What follows the erase variable is the value that  the terminal is expecting <i>backspace</i> to send.  If that is different than what <i>backspace</i> sends, any program that gets its information from they <b>stty</b> settings  will not recognize <i>backspace</i> as delete left.  That is unless the program is specifically coded to delete left with the value that <i>backspace</i> is sending.  So if your <i>backspace</i> sends '^?' and <b>stty</b> shows "erase = ^H" then a program that reads the erase value is not going to know what to do with '^?'.  Therefore, you will want <b>stty</b>'s erase variable to be set to '^?'. You can do this with the command:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				   $ stty erase ^?
				   </td></tr></table></ul>
				   <p><b>tset</b> (used for setting terminal settings) will also work:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				   $ tset -e ^?
				   </td></tr></table></ul>
				   <a name="map_emacs"></a>
				   <h4>Altering mapped keys in Emacs</h4>
				   <p>It is possible to remap what keys execute what command.  The following examples do the same thing, interchange Delete and Backspace, but only the very bottom one works in all version of Emacs.</p>
				   <ul type="disk">
				       <li><p>This option only works in Emacs version 21 or greater. While in Emacs type:</p>
				       <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				       M-x normal-erase-is-backspace-mode
				       </td></tr></table></ul>
				       <br>Or in your <b>.emacs</b> file, which is located in your home directory add:
				       <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				       (normal-erase-is-backspace-mode 1)
				       </td></tr></table></ul>
				       
				       <br><li><p>In versions <= 20 try adding this to your <b>.emacs</b> file <a class="content_whitebg" HREF="#REF1">(1)</a>:</p>
				       <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				       (keyboard-translate ?\C-h ?\C-?)
				       <br>(keyboard-translate ?\C-? ?\C-h)
				       </td></tr></table></ul>

				       <br><li><p>And in very old versions of Emacs none of the above may work.  Add this into your <b>.emacs</b> file <a class="content_whitebg" HREF="#REF1">(1)</a>:</p>
				       <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
				       (setq keyboard-translate-table (make-string 128 0))
				       <br>(let ((i 0))
				       <br>(while (< i 128)
				       <br>(aset keyboard-translate-table i i)
				       <br>(setq i (1+ i))))
				       <br>(aset keyboard-translate-table ?\b ?\^?)
				       <br>(aset keyboard-translate-table ?\^? ?\b)
				       </td></tr></table></ul>
				   </ul>
			      <br>
			      <a name="bsolution"></a>
			      <h3>The Best Solution</h3>
			      <p>After reading the above it makes sense to set <i>xterm.*backarrowKey: false</i> in your <b>.Xdefaults</b> file and set <b>stty</b>'s erase variable to '^?'.  This will work, however, overriding key translations is usually chosen over changing the backarrowKey variable.  Add these lines to your <b>.Xdefaults</b>:</p>
			      <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
			      <pre>XTerm*ttyModes:         erase ^?
XTerm*VT100.Translations: \
        #override &lt;Key&gt;BackSpace: string(0x7f) \n\
		  &lt;Key&gt;Delete:    string(0x1b) string(&quot;[3~&quot;)</pre>
			      </td></tr></table></ul>
			      <p>If you choose to add the above to your <b>.Xresources</b> instead of <b>.Xdefaults</b> add these lines to <b>.xinitrc</b>:</p>
			      <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="400px"><tr><td>
			      xrdb -merge .Xresources
			      </td></tr></table></ul>
			      <p>This ensures that <b>.Xresources</b> is merged into the keycode database.  This will only happen when X is started so make sure to restart X before expecting it to work.</p>
			      <p>If you want these setting to be applied for all programs, not just XTerm, you can leave off the XTerm in front of the *VT100 and *ttyModes.  If you are having trouble with your <i>Home</i> and <i>End</i> keys you can also add translations for them.  Here is an example of general setting and remapping <i>Home</i> and <i>End</i>:
			      <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
			      <pre>*ttyModes:         erase ^?
*VT100.Translations: \
        #override &lt;Key&gt;BackSpace: string(0x7f) \n\
		  &lt;Key&gt;Delete:    string(0x1b) string(&quot;[3~&quot;) \n\
		  &lt;Key&gt;Home:      string("\033[1~") \n\
		  &lt;Key&gt;End:       string("\033[4~")</pre>
			      </td></tr></table></ul>
			      <br>

			      <a name="references"></a>
			      <h3>References</h3>
			      <ol>
			           <a name="REF1"></a>
			           <li><a class="content_whitebg" HREF="http://www.tldp.org/HOWTO/Keyboard-and-Console-HOWTO.html">The Linux keyboard and console HOWTO</a>
				   <li><a class="content_whitebg" HREF="http://www.ibb.net/~anne/keyboard.html">Consistent BackSpace and Delete Configuration</a>
				   <li><a class="content_whitebg" HREF="http://dickey.his.com/xterm/xterm.faq.html">XTERM - Frequently Asked Questions (FAQ)</a>
				   <li><a class="content_whitebg" HREF="http://www.delorie.com/gnu/docs/emacs/emacs_512.html">GNU Emacs Manual:  AD.9.1 If DEL Fails to Delete</a>
				   <li><a class="content_whitebg" HREF="http://www-2.cs.cmu.edu/cgi-bin/info2www?(emacs)DEL%2520Does%2520Not%2520Delete">(emacs)DEL Does Not Delete</a>
				   <li><a class="content_whitebg" HREF="http://lists.debian.org/debian-i18n/1998/debian-i18n-199804/msg00015.html">Re: fixing backspace and delete</a>
				   <li><a class="content_whitebg" HREF="http://techpubs.sgi.com/library/tpl/cgi-bin/getdoc.cgi?coll=linux&db=man&fname=/usr/share/catman/man1/stty.1.html&srch=stty">man STTY(1)</a>
				   <li><a class="content_whitebg" HREF="http://www.die.net/doc/linux/man/man1/xterm.1.html">man XTERM(1)</a>
				   <li><a class="content_whitebg" HREF="http://techpubs.sgi.com/library/tpl/cgi-bin/getdoc.cgi?coll=linux&db=man&fname=/usr/share/catman/man5/terminfo.5.html&srch=terminfo">man TERMINFO(5)</a>
				   <li><a class="content_whitebg" HREF="http://techpubs.sgi.com/library/tpl/cgi-bin/getdoc.cgi?coll=linux&db=man&fname=/usr/share/catman/man1/tset.1.html&srch=tset">man TSET(1)</a>
			      </ol>

			      <div align="center"><font size="1">Corrections, comments, questions  e-mail <a class="content_whitebg" HREF="mailto:scott@hypexr.org">scott@hypexr.org</a><br>Last Modified:

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
