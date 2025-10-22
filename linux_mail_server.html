<!DOCTYPE html>
<html>
<head>
<title>Linux Mail Server</title>
<meta NAME="description" content="Tutorial/Howto for creating a mail server on Linux/Unix for a single or multiuser environment">
<meta NAME="keywords" content="postfix,spamassassin,procmail,fetchmail,linux.web server,mail server">
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



<!-- START AXIGEN Text Ad Code 
<div style="float: right; clear: both; margin-left: 20px; margin-right: 5px; border: 1px solid #d9d9d9; width: 200px; padding: 6px; font-family: Arial, sans-serif; font-size: 12px">

<a style="display: block; font-size: 18px; padding-bottom: 5px; color: #333333" target="_blank" href="http://www.axigen.com/">Linux Mail Server</a>

		<a style="display: block; padding-bottom: 5px; line-height: 16px; text-decoration: none; color: #333333" target="_blank" href="http://www.axigen.com/">Secure mail server software for Linux, BSD, Solaris, offering integrated SMTP, POP3, IMAP and WebMail. Easy 15&rdquo; install, FREE 24x7 Support. Try it now for FREE!</a>

<a style="display:block; color: #f68a0b; font-weight: bold; text-decoration: none" target="_blank" href="http://www.axigen.com/">www.axigen.com</a></div>
END AXIGEN Text Ad Code -->


<!-- START BYNARI AD
<div style="float: right; clear: both; margin-top: 100px;">
<a href="http://www.bynari.net/bynari.html?page=opensource"><img src="http://www.bynari.net/images/banner1.gif" width="440" height="95" border="0" alt="Open Source Linux Email Server"></a>

<br />
<br />

<a href="http://www.bynari.net/bynari.html?page=download"><img src="http://www.bynari.net/images/banner2.gif" width="440" height="95" border="0" alt="Linux Email Server"></a>

</div>
END BYNARI AD -->

<!-- SYNOVEL AD
<div style="float: right; clear: both; margin-top: 160px; width: 220px;">
<div style="border: 1px solid black; padding: 4px 15px 12px 15px;">
<h3><a class="content_whitebg" style="font-weight: bold" href="http://www.synovel.com/collab/linux-mail-server">Linux mail server</a> with professional support</h3>
Postfix based email solution with IMAP, POP, Calendar, Ajax web access, data backup/restore, high availability.  
</div>
</div>
END SYNOVEL AD -->


	    <h1>C<small>reating a</small> L<small>inux</small> M<small>ail</small> S<small>erver
	    <br>(Postfix, Procmail, Fetchmail, SpamBayes, Courier-imap, Mutt, SquirrelMail)</small></h1><br>

	    <h3><a class="content_whitebg" HREF="#whatis">What this Document is About</a></h3>
	    <h3><a class="content_whitebg" HREF="#software">Software Used</a></h3>

	    <h3><a class="content_whitebg" HREF="#install">Installing the Software</a></h3>

	    <ul><li><a class="content_whitebg" HREF="#postfix_install">Installing Postfix</a>
	    <li><a class="content_whitebg" HREF="#fetchmail_install">Installing Fetchmail</a>
	    <li><a class="content_whitebg" HREF="#procmail_install">Installing Procmail</a>
	    <li><a class="content_whitebg" HREF="#spambayes_install">Installing SpamBayes</a>
	    <li><a class="content_whitebg" HREF="#mutt_install">Installing Mutt</a>
	    <li><a class="content_whitebg" HREF="#courier_install">Installing courier-imap courier-authlib</a>	    
	    <li><a class="content_whitebg" HREF="#squirrel_install">Installing SquirrelMail</a>
	    <li><a class="content_whitebg" HREF="#popbs_install">Installing pop-before-smtp</a></ul>
	    
	    <h3><a class="content_whitebg" HREF="#postfix">Postfix Configuration</a></h3>
	    <ul><li><a class="content_whitebg" HREF="#main.cf">main.cf</a></ul>
	    <h3><a class="content_whitebg" HREF="#fetchmail">Fetchmail Configuration</a></h3>
	    <h3><a class="content_whitebg" HREF="#procmail">Spambayes and Procmail Configuration</a></h3>
	    <ul><li><a class="content_whitebg" HREF="#sb_setup">Spam System Initial Setup</a>
	    <li><a class="content_whitebg" href="sb_proc">Procmail Configuration for Spambayes<a></ul>
	    <h3><a class="content_whitebg" HREF="#mutt">Mutt Configuration</a></h3>
	    <ul><li><a class="content_whitebg" HREF="#muttrc">.muttrc Configuration</a>
	    <li><a class="content_whitebg" HREF="#mutt_commands">New Mutt Commands</a></ul>
	    <h3><a class="content_whitebg" HREF="#squirrel">SquirrelMail Configuration</a></h3>
	    <h3><a class="content_whitebg" HREF="#courierauth">Courier Authentication</a></h3>
            <h3><a class="content_whitebg" HREF="#pop-before-smtp">Pop-before-smtp Configuration</a></h3>
	    <h3><a class="content_whitebg" HREF="#additionalproc">Additional Simple Procmail Recipes and Mailbox Config</a></h3>
            <h3><a class="content_whitebg" HREF="#conclusion">Conclusion</a></h3>
	    <h3><a class="content_whitebg" HREF="#resources">Resources</a></h3>
	    <ul><li><a class="content_whitebg" HREF="#files">Example Files</a>
	    <li><a class="content_whitebg" HREF="#links">Links</a></ul>
	    <h3><a class="content_whitebg" HREF="#contributions">Contributions</a></h3>

	    <br>
	    <hr noshade>
	    <br>
	    <a name="whatis"></a>
	    <h3>What this Document is About</h3>
	    <p>This document covers how I have set up my Linux box to work as a Mail Server.  The details will be specific to <a class="content_whitebg" HREF="http://www.archlinux.org">Arch Linux</a>, but it will be be general enough for any *nix distribution if you have a knowledge of installing software packages, finding the location of configuration files, and starting/stoping services..</p>
	    <p>My goals in creating this mail system are to have all of my mail, from various email accounts, stored locally on my machine so I can access it anytime via SSH, the web, or imap. I wanted all of my mail delivered to my local user account and I wanted the spam to be sucked out and launched into space.</p>
	    <p>The backbone of the mail system is the Mail Transport Agent (MTA).  It will handle receiving mail addressed directly to your machine, sending it to the correct users mail box, and sending mail out from the machine.  I determined Postfix to be the best choice for my MTA and after some reading found Procmail for sorting mail, SpamBayes for detecting spam, and Fetchmail for grabbing mail from my pop mailboxes.</p>
	    <p>Bellow is a flow diagram for mail moving through the system:</p>
	    <div style="text-align:center"><a class="content_whitebg" HREF="./gfx/mail_system_flow.png"><img border="0" src="./gfx/mail_system_flow_tn.png"></a></div>
	    <p>The SpamAssassin and sa-learn can be ignored.  I will describe how to use it with SpamBayes since I was not happy with Spam Assassin's performance and had made the diagram when I was still using it.</p>
	    <br>
	    <a name="software"></a>
	    <h3>Software Used</h3>
	    <ul type="disk">
	    <li><a class="content_whitebg" href="http://www.archlinux.org">Arch Linux</a>
	    <li><a class="content_whitebg" href="http://www.postfix.org/">Postfix 2.1.5</a>
	    <ul> Secure, fast, easy to administer drop in replacement for Sendmail. (MTA) Provides smtp-server.
	    <br>(Requires sasl installed and support for sasl compiled into Postfix if sending mail through an intermediary as you may need to do if you have a domain name pointing to a dynamic IP address.)</ul>
	    <li><a class="content_whitebg" href="http://asg.web.cmu.edu/sasl/">Cyrus SASL 2.1.21</a>
	    <ul>SASL authentication daemon.</ul>
	    <li><a class="content_whitebg" href="http://www.procmail.org/">Procmail 3.22</a>
	    <ul>Highly configurable auto mail processing.</ul>
	    <li><a class="content_whitebg" href="http://www.catb.org/~esr/fetchmail/">Fetchmail 6.25</a>
	    <ul>A remote-mail retrieval utility.</ul>
	    <li><a class="content_whitebg" href="http://spambayes.sourceforge.net/">SpamBayes 1.1a1</a>
	    <ul>a Bayesian anti-spam filter, initially based on the work of Paul Graham. The major difference between this and other, similar projects is the emphasis on testing newer approaches to scoring messages.</ul>
	    <li><a class="content_whitebg" href="http://www.mutt.org/">Mutt 1.4.2.1</a>
	    <ul>A small but very powerful text-based mail client</ul>
	    <li><a class="content_whitebg" href="http://www.courier-mta.org/imap/">Courier-imap 4.0.4</a>
	    <ul>IMAP / POP3 Server</ul>
	    <li><a class="content_whitebg" href="http://www.courier-mta.org/authlib/">Courier-authlib 0.57</a>
	    <ul>Authentication library for the courier mailserver.</ul>
	    <li><a class="content_whitebg" href="http://www.squirrelmail.org/">SquirrelMail cvs 1.5.1</a>
	    <ul>For checking mail via the web.
	      <br>(requires imap-server, perl, and php)</ul>
	    <li><a class="content_whitebg" href="http://popbsmtp.sourceforge.net/">Pop-before-smtp 1.38</a>
	    <ul>A simple daemon written in Perl, to allow email relay control based on successful POP or IMAP logins.</ul>
	    </ul>

	    <br>
	    <a name="install"></a>
	    <h3>Installing the Software</h3>

	    <a name="postfix_install"></a>
	    <h4>Installing Postfix</h4>
	    <p><b>A note for those with dynamic IP addresses:</b> Before installing Postfix we must first consider if it will need to make use of Simple Authentication and Security Layer (SASL).  If you have a dynamic IP address and are using a service like <a class="content_whitebg" href="http://www.dyndns.org">dyndns.org</a> you will need to have Postfix send your mail through your ISP's mail server (with authentication) making use of SASL for the connection.  This is because many domains that you will send email to will recognize your hostname as pointing to a dynamic IP address and send the mail back.  Check if your distributions Postfix package was built with SASL support or if you are compiling Postfix from scratch add SASL with a ./configure option.</p>
	    <p>If you've determined you do not need SASL support in postfix:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ pacman -Sy postfix
	    </td></tr></table></ul>

	    <p>If you do need SASL support we need to install cyrus-sasl and use the <a class="content_whitebg" href="http://wiki2.archlinux.org/index.html/ABS%20-%20the%20Arch%20Build%20System">Arch Build System (abs)</a> utility for building Postfix.  Follow the instructions bellow or follow these Arch Wiki instructions:  <a class="content_whitebg" href="http://wiki.archlinux.org/index.html/PostFix_Howto_With_SASL">http://wiki.archlinux.org/index.html/PostFix_Howto_With_SASL</a></p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
		$ pacman -Sy cyrus-sasl<br>
		$ abs<br>
		$ cd /var/abs<br>
		$ mkdir -p local/postfix<br>
		$ cp -v extra/daemons/postfix/* local/postfix
	    </td></tr></table></ul>
	    <p>Now edit /var/abs/local/postfix/PKGBUILD.  Under the build() section change:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		make OPT="${CFLAGS}" || return 1
	    </td></tr></table></ul>
	    <p>to:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
<pre>make OPT="${CFLAGS}" \
CCARGS="-DUSE_SASL_AUTH -I/usr/include/sasl/" \
AUXLIBS="-L/usr/lib/sasl2 -lsasl2" || return 1</pre>
	    </td></tr></table></ul>
	    <p>Now run:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ makepkg<br>
		$ pacman -A postfix-*.pkg.tar.gz
	    </td></tr></table></ul>
	    <p><b>Note:</b> Substitute -A with -U on newver versions of pacman/arch</p>
	    <p>Then copy the package into a directory under /var/lib/pacman so there is access to all of the abs built packages later:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		$ mkdir /var/lib/pacman/abs_built<br>
		$ cp postfix-*.pkg.tar.gz /var/lib/pacman/abs_built
	    </td></tr></table></ul>

	    <a name="fetchmail_install"></a>
	    <h4>Installing Fetchmail</h4>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ pacman -S fetchmail
	    </td></tr></table></ul>
	    <a name="procmail_install"></a>
	    <h4>Installing Procmail</h4>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ pacman -S procmail
	    </td></tr></table></ul>
	    <a name="spambayes_install"></a>
	    <h4>Installing SpamBayes</h4>
	    <p>SpamBayes is not yet in the pacman repository.  Download it, extract, and install (substitute version numbers with most current):</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="350"><tr><td>
<pre>$ wget http://dl.sourceforge.net/sourceforge\
/spambayes/spambayes-1.1a1.tar.gz
$ tar zxvf spambayes-1.1a1.tar.gz
$ cd spambayes-1.1a1
$ python setup.py install</pre>
	    </td></tr></table></ul>
	    <a name="mutt_install"></a>
	    <h4>Installing Mutt</h4>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ pacman -S mutt
	    </td></tr></table></ul>
	    <a name="courier_install"></a>
	    <h4>Installing courier-imap and courier-authlib</h4>
	    <p>SquirrelMail as well as other mail clients (evolution, outlook, cell phone, etc.) will use this to connect to the mail box.  Courier-imap also depends on courier-authlib, so this command will install that as well.</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ pacman -S courier-imap
	    </td></tr></table></ul>
	    <a name="squirrelmail_install"></a>
	    <h4>Installing SquirrelMail</h4>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ pacman -S squirrelmail
	    </td></tr></table></ul>
	    <a name="popbs_install"></a>
	    <h4>Installing pop-before-smtp</h4>
	    <p>You are going to want to consider using <a class="content_whitebg" href="http://www.aet.tu-cottbus.de/personen/jaenicke/pfixtls/">Postfix/TLS</a> or <a class="content_whitebg" href="http://popbsmtp.sourceforge.net/">pop-before-smtp</a> if you are interested in users connected via IMAP being able to send mail (using your mail server as a SMTP relay). I recommend using Postfix/TLS but will not cover how to install/configure it in this document.</p>
	    <p>Pop-before-smtp is not in pacman repositories.  Substitute version numbers with the most current.</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		$ wget http://dl.sourceforge.net/sourceforge/popbsmtp/pop-before-smtp-1.38.tar.gz<br>
		$ tar zxvf pop-before-smtp-*.tar.gz<br>
		$ cd pop-before-smtp-*<br>
	    </td></tr></table></ul>
	    <p>Read the README in this directory and then read README.QUICKSTART in the contrib directory for where to copy the necessary files to.</p>

	    <br>
	    <a name="postfix"></a>
	    <h3>Postfix Configuration</h3>
	    <a name=main.cf></a>
	    <h4>main.cf</h4>
	    <p>Now change to the <b>'/etc/postfix'</b> directory and open up main.cf for editing.</p>
	    <p>The domain name for my machine is through dyndns.org. Set your myhostname and my domain to something like this:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		myhostname = example.com
		mydomain = example.com
	    </td></tr></table></ul>
	    <p>Next we are going to want to set Postfix up for using qmail-style delivery with Maildir (where each email is stored in its own file).  This is for courier-imap which SquirrelMail will be using to access the mail and will have other advantages. Don't forget the ending forward slash.</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		home_mailbox = Maildir/
	    </td></tr></table></ul>
	    <p>Set it up so that incoming mail is sent through procmail and so we can alias names/users to mailboxes.</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
		mailbox_command = /usr/bin/procmail -a "$DOMAIN"<br><br>
		alias_maps = hash:/etc/postfix/aliases
	    </td></tr></table></ul>
	    <p>If you have a dynamic IP or have trouble with mail being returned from large ISP's or mail systems you are going to have to take a few extra steps.  We will set it up so that mail will go through a relay host.  In this example I will use my ISP's (SBC) smtp server as an example. Make these additional changes to main.cf</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
		relayhost = [smtp.sbcglobal.yahoo.com]<br><br>
		# authentication for sbc yahoo<br>
		smtp_sasl_auth_enable = yes<br>
		smtp_sasl_security_options = noanonymous<br>
		smtp_sasl_password_maps = hash:/etc/postfix/sasl_passwd
	    </td></tr></table></ul>
	    <p>That wraps up our changes to main.cf.  We just need to create the hash aliases databases that we defined above.  Add these lines to the top of <b>/etc/postfix/aliases</b> (replacing hypexr with your user account of course):</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
<pre>root: hypexr

spam: hypexr
ham:  hypexr</pre>
	    </td></tr></table></ul>
	    <p>Generate the database.  From <b>/etc/postfix</b> dir:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
		$ postalias aliases
	    </td></tr></table></ul>
	    <p>Set up smtp server and authentication for SBC mail relay.  <b>sasl_passwd</b>:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=500px><tr><td>
	    <pre>smtp.sbc.mail.yahoo4.akadns.net    my_username@sbcglobal.net:my_passw</pre>
	    </td></tr></table></ul>
	    <p><b><i>Note:</i> </b>Server name can change from time to time.  There is a CNAME that points to this name but CNAMEs do not work here.</p>
	    <p>Generate the database:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
	    $ ./postmap sasl_passwd
	    </td></tr></table></ul>
	    <p>Start the postfix server and we are done with postfix!!!!</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
	    $ /etc/rc.d/postfix start
	    </td></tr></table></ul>
            <p>Having problems getting it to start?  Check out the Postfix log file usually in <b>/var/log/mail</b> or <b>/var/log/maillog</b>.</p>

	    
	    <br>
	    <a name="fetchmail"></a>
	    <h3>Fetchmail Configuration</h3>
	    <p>We are going to run our fetchmail daemon from user root.  So create the file <b>/root/.fetchmailrc</b>:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		set postmaster "postmaster"<br>
		set bouncemail<br>
		set no spambounce<br>
		set properties ""<br>
		set daemon 60<br>
		poll pop.example.com with proto POP3<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user 'user_name' there with password 'my_password' is 'local_user_to_deliver_to' here options flush<br>
		poll pop.gmail.com with proto POP3 port 995<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user 'my_gmail_un@gmail.com' there with ssl with password 'my_password' is 'hypexr' here options keep
	    </td></tr></table></ul>
	    <p>This tells fetchmail to check every minute for mail at pop.mypop.com and also at my gmail account.  The flush option at the end of the mypop entry tells it to remove the mail after it is downloaded.  I do not want the mail removed from my Gmail account so I use the keep option. Google also uses ssl, hence the "with ssl".  Fetchmail comes with its configuration utility <b>fetchmailconf</b> which makes setting up your .fetchmailrc file easy.</p>
	    <p>I don't believe that Arch Linux has a rc script for fetchmail. The one that I made (/etc/rc.d/fetchmail) looks like this (stat_busy, stat_fail, stat_done are specific to Arch Linux.  You could take these out):</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="75%"><tr><td>
<pre>#!/bin/sh

. /etc/rc.conf
. /etc/rc.d/functions

DAEMON_NAME="fetchmail"
DAEMON_CONF="/root/.fetchmailrc"
DAEMON_PATH="/usr/bin/fetchmail"

PID=`pidof -o %PPID ${DAEMON_NAME}`

case "$1" in
start)
   stat_busy "Starting ${DAEMON_NAME}"
   [ -z "$PID" ] && ${DAEMON_PATH} -f ${DAEMON_CONF} -d 60 &> /dev/null
   if [ $? -gt 0 ]; then
      stat_fail
   else
      add_daemon ${DAEMON_NAME}
      stat_done
   fi
   ;;
stop)
   stat_busy "Stopping ${DAEMON_NAME}"
   [ ! -z "$PID" ]  && kill "$PID" &> /dev/null
   if [ $? -gt 0 ]; then
      stat_fail
   else
      rm_daemon ${DAEMON_NAME}
      stat_done
   fi
   ;;
restart)
   # calling 'stop' and 'start' without the $0 fails...
   $0 stop
   sleep 3
   $0 start
   ;;
*)
   echo "usage: $0 {start|stop|restart}"
esac
exit 0</pre>	
	    </td></tr></table></ul>
	    <p>And start the fetchmail daemon:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		$ /etc/rc.d/fetchmail start
	    </td></tr></table></ul>
	    <p>Or if you don't want to create/modify an rc script you can start the fetchmail daemon like:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		$ /usr/bin/fetchmail -d 60
	    </td></tr></table></ul>

	    <br>
	    <a name="procmail"></a>
	    <h3>Spambayes and Procmail Configuration</h3>
	    <p>We are going to be using Spambayes to train and determine if mail is spam and Procmail to sort the mail into folders when they enter our mail system.  These two go together as far as Procmail is going to use Spambayes to help sort the mail.</p>
	    <p>I had used <a class="content_whitebg" href="http://spamassassin.apache.org/">SpamAssassin</a> for a year and had not been very happy with its performance.  I have only been using Spambayes for a few weeks and have been pleasantly surprised by how well it has worked and how quickly it adapts.  In fairness I had been training SpamAssassin on all of my spam, the spam it had caught and the spam it had missed as well.  It was also an older version and I was not using all of the features.  With that being said if you are curious give it a try.  Many other excellent programs exist.  A quick search on Google will turn them up.</p>
	    <p>When Spambayes is installed it is going to move several files that start with sb_ into your /usr/bin directory.  We are going to be interested in sb_mboxtrain.py and sb_filter.py.  The former trains the spam filter and the later classifies incoming spam.  There are two methods I tried for the initial training:</p>
	    <ol><li>Since I already had thousand of spam and ham (non spam) messages saved up I first tried initially training on this older mail.  The results were okay but it was miss sorting mail.  These problems would have sorted them selves out with the continued training of the misclassified mail but it would have also took a little while because the database had already been trained so much.
	    <li>The second method I used was extremely effective.  I started out with no training on initial messages.  I simply let Spambayes work with no information.  I then sent the spam and ham messages that ended up in the wrong mailbox to a designated folder.  I then run the Spambayes training program on these miss classified messages.</ol>
	    <p>The results from the second method have been amazing.  Without even having to manually classify very many messages Spambayes has been performing at superior levels.  Check out <a class="content_whitebg" href="http://www.entrian.com/sbwiki/TrainingIdeas">Spambayes Wiki</a> for many other training methods.  I will discuss easy methods of sorting miss classifications in the Mutt and Squirrel Mail sections.</p>
	    <a name="sb_setup"></a>
	    <h4>Spam System Initial Setup</h4>
	    <p>We are going to want Maildir folders to hold our regular mail, mail classified as spam, mail classified as unsure, missed spam, and missed ham.</p>
	    <p>If the standard Maildir directory (~/Maildir) doesn't already exist lets create it with the necessary sub directories to make it a mail box.  Run these commands from your user account who will be receiving the mail.</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
	    $ mkdir ~/Maildir<br>
	    $ mkdir ~/Maildir/{new,cur,tmp}
	    </td></tr></table></ul>
	    <p>And now the other 4 directories that we are going to use for dealing with spam (Making the directories hidden is going to be done for integration with Squirrelmail):
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=500px><tr><td>
	    $ mkdir ~/Maildir/{.MissedSpam,.MissedHam,.CaughtSpam,.Unsure}<br>
	    $ mkdir ~/Maildir/.MissedSpam/{new,cur,tmp}<br>
	    $ mkdir ~/Maildir/.MissedHam/{new,cur,tmp}<br>
	    $ mkdir ~/Maildir/.CaughtSpam/{new,cur,tmp}<br>
	    $ mkdir ~/Maildir/.Unsure/{new,cur,tmp}<br>
	    </td></tr></table></ul>
	    <p>The messages that we are going to be training as spam are going to be in ~/Maildir/.MissedSpam and ham will be in ~/Maildir/.MissedHam.  Lets create the script and cron job that will take care of training the Spambayes db.  Create a file ~/Maildir/train_spambayes and add this:
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=450px><tr><td>
<pre>#!/bin/sh
# Script to copy mail missed spam and ham into correct folders
# and run sb_mboxtrain.py to train spambayes
# Training will be done only on missed spam and ham

# Files we saved or bounced may be in the new directory
# We want them in cur for training
mv /home/hypexr/Maildir/.MissedSpam/new/* \
	/home/hypexr/Maildir/.MissedSpam/cur 2>/dev/null
mv /home/hypexr/Maildir/.MissedHam/new/* \
	/home/hypexr/Maildir/.MissedHam/cur 2>/dev/null
/usr/bin/sb_mboxtrain.py -d /home/hypexr/.hammie.db \
	-g /home/hypexr/Maildir/.MissedHam \
	-s /home/hypexr/Maildir/.MissedSpam</pre>
	    </td></tr></table></ul>
	    <p>Make the script executable:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ chmod +x ~/Maildir/train_spambayes
	    </td></tr></table></ul>
	    <p>Set up our database that will be consulted for new email and trained on new spam/ham:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		$ /usr/bin/sb_filter.py -d $HOME/.hammie.db -n
	    </td></tr></table></ul>
	    <p>You will want cron installed so that it can launch the script above, which trains Spambayes, every night at 3:21 am. Edit your cron jobs with the command <b>crontab -e</b> and add:
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		21 3 * * * ~/Maildir/train_spambayes	
	    </td></tr></table></ul>
	    
	    <a name="sb_proc"></a>
	    <h4>Procmail Configuration for Spambayes</h4>
	    <p>These are basic procmail recipes that will sort the spam from ham.  From <a class="content_whitebg" href="http://spambayes.sourceforge.net/unix.html">Spambayes on Unix or Linux</a>. Add these lines to your mail recipient's ~/.procmailrc:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
<pre>SHELL=/bin/sh
MAILDIR=$HOME/Maildir
DEFAULT=$HOME/Maildir/
CAUGHT_SPAM=$MAILDIR/CaughtSpam/
UNSURE=$MAILDIR/Unsure/
		
#Spambayes process
:0fw:hamlock
| /usr/bin/sb_filter.py -d /home/hypexr/.hammie.db

:0
* ^X-Spambayes-Classification: spam
${CAUGHT_SPAM}

:0
* ^X-Spambayes-Classification: unsure
${UNSURE}

# Catches everything else.
# Anything left over goes into the DEFAULT folder
:0:
${DEFAULT}</pre>
	    </td></tr></table></ul>
	    <p>So incoming mail is not filtered through procmail's rules where Spambayes's sb_filter decides whether it is spam or ham. The mail is now sitting in the correct directories and ready to be accessed by whatever reader/front-end you would like.  Next I going to describe setting up Mutt and SquirrelMail for viewing your mail. Mutt will be the most powerful option combining speed and sleekness but SquirrelMail will be able to match functionality.</p>


	    <br>
	    <a name="mutt"></a>
	    <h3>Mutt Configuration</h3>
	    <p>First we need to set the MAIL variable so that Mutt will know where to look for your mail.  In your ~/.bashrc (create if does not exist) add the line:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
	    MAIL='~/Maildir'
	    </td></tr></table></ul>
	    <p>Exit out of your shell and log back in so that the variable will be set or run <b>export MAIL='~/Maildir'</b>.  On some systems mutt will not use <b>$MAIL</b> to determine the location of your mail box.  When trying to start mutt if it reports a message that no mail directory exists you can try setting the <b>MAILDIR</b> variable or just create the directory that it wants to use and make it a valid Maildir: <b>mkdir -p ~/.maildir/{cur,new,tmp}</b> where .maildir is the folder that mutt wants to use.  If you use a directory other than <b>~/Maildir</b> remember to substitute that wherever I reference Maildir in this document.</p>
	    <p>Now for the fun part.  Lets make everything look pretty and integrated in Mutt.  If you start up Mutt right now you will see any mail that your system has received since you have completed the steps above.  If no mail shows up in Mutt and there should be mail you need to first check if Spambayes has filtered it into your <b>.Unsure</b> or <b>.CaughtSpam</b> directories.  Type '<b>c</b>' to change directories and enter <b>~/Maildir/Unsure</b> and check out the mail thats been classified as spam: '<b>c</b>' <b>~/Maildir/CaughtSpam</b>.  If you still have not found the mail that you are expecting to have received make sure that you have configured Postfix, Fetchmail, and Procmail correctly.  Also, try sending mail directly to your_user_accunt@example.com and see if it shows up in one of the directories above.<p>
	    <p>Now mail is flowing into your system and we can check how Spambayes has classified it by checking the different mail folders.  The miss classified mail just needs to be moved into the correct folders for the training.<br> To manually move the misclassified spam mail:</p>
	    <ol>
	      <li>From you Maildir inbox tag each message that has arrived that is spam. Do this by pressing '<b>t</b>' and an asterisk will appear by the messages.  After all of the messages have been tagged, press '<b>; m</b>' and enter <b>~/Maildir/MissedSpam</b> and the spam messages in your inbox will be moved to the MissedSpam mailbox for training by spambayes.</li>
	      <li>When looking at the mail that it has classified as spam in '~/Maildir/CaughtSpam', tag all of the messages it considered spam that were ham and press '<b>; C</b>' and enter <b>~/Maildir/MissedHam</b>. Now tag them again and press '<b>; m</b>' and enter <b>~/Maildir</b> to move them into your inbox, where they should have been placed in the first place.</li>
	    </ol>
	    <p>Of course all of this manual stuff is a huge pain so lets automate all of it in <b><a class="content_whitebg" href="./files/.muttrc">.muttrc</a></b>.</p>
	    <a name="muttrc"></a>
	    <h4>.muttrc Configuration</h4>
	    <p>This <a class="content_whitebg" href="./files/.muttrc">.muttrc</a> file is going to save you a quazillion.. thats right a quiazalliona hours in productivity in dealing with our current setup.  Here it is:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=550px><tr><td>
<pre># Emacs is my editor of choice.  I have mostly read that people like
#  using emacs-client here and using an emacs server so that the
#  editing opens up in an existing emacs session but I prefer
#  loading up a fresh instance. The default editor is some 'vi'
set editor="emacs"

# Setting these macros is going to save us all of that time I was
#  talking about.  Now instead of having to type all of those
#  characters to move the mail around we will can just tag the messages
#  and, for the instance of spam in your inbox, hit 'S'.
		
# Move mail to correct directories
macro   index   S       ";s~/Maildir/.MissedSpam\r\r$\r"
macro   pager   S       ";s~/Maildir/.MissedSpam\r\r$\r"
macro   index   H       ";C~/Maildir/.MissedHam\r\r;s~/Maildir\r\r$\r"
macro   pager   H       ";C~/Maildir/.MissedHam\r\r;s~/Maildir\r\r$\r"
macro   index   M       ";s~/Maildir/\r"
macro   pager   M       ";s~/Maildir/\r"

# This one lets me quickly move job search related emails to the
#  correct directory.  Want to give me a job? :)
macro   index   B       ";s~/Maildir/.Job\r\r$\r"
macro   pager   B       ";s~/Maildir/.Job\r\r$\r
		
# This is how we are going to move around to the different
#  mailboxes.  Hitting 'alt-1' will take us to our inbox
#  'alt-2' and we are looking at the mail Spambayes classified
#  as spam.  etc.
#  The extra mailboxes I have in here are for mailing lists I am on.
#  I will show the procmail recipe that automatically puts
#  the mailing list mail into its correct mailbox further down.
		
# Move to mailboxes quickly
macro   index   &lt;Esc&gt;1  "c~/Maildir\r"
macro   pager   &lt;Esc&gt;1  "c~/Maildir\r"
macro   index   &lt;Esc&gt;2  "c~/Maildir/.CaughtSpam\r"
macro   pager   &lt;Esc&gt;2  "c~/Maildir/.CaughtSpam\r"
macro   index   &lt;Esc&gt;3  "c~/Maildir/.Unsure\r"
macro   pager   &lt;Esc&gt;3  "c~/Maildir/.Unsure\r"
macro   index   &lt;Esc&gt;4  "c~/Maildir/.Tur\r"
macro   pager   &lt;Esc&gt;4  "c~/Maildir/.Tur\r"
macro   index   &lt;Esc&gt;5  "c~/Maildir/.Sbayes\r"
macro   pager   &lt;Esc&gt;5  "c~/Maildir/.Sbayes\r"
macro   index   &lt;Esc&gt;6  "c~/Maildir/.Wikka\r"
macro   pager   &lt;Esc&gt;6  "c~/Maildir/.Wikka\r"
# Training Maildirs for Spam and Ham
macro   index   &lt;Esc&gt;8  "c~/Maildir/.MissedSpam\r"
macro   pager   &lt;Esc&gt;8  "c~/Maildir/.MissedSpam\r"
macro   index   &lt;Esc&gt;9  "c~/Maildir/.MissedHam\r"
macro   pager   &lt;Esc&gt;9  "c~/Maildir/.MissedHam\r"
# Job E-mails
macro   index   &lt;Esc&gt;0  "c~/Maildir/.Job\r"
macro   pager   &lt;Esc&gt;0  "c~/Maildir/.Job\r"

# Setting these colors makes it easy to tell which emails
#  Spambayes has missed.
# Turn spam red and unsure green
color index red default "~h '^X-Spambayes-Classification: spam'"
color index green default "~h '^X-Spambayes-Classification: unsure'"
# Turn gmail mail brightblue
#  (My regular expression is not correct here.  I think that it
#   is looking anywhere in the header for my gmail address
#   instead of what I wanted..  Just in the 'To:'.
#   It still works for the most part)
color index brightblue default "~h '(^)*my_name@gmail.com'

# Lets set more colors to make things look beautiful.  Judging by
#  my title for this section I must have had bad feelings towards
#  colors when I added this.
#Color crap
color index brightwhite default ~N       # color for new messages
color status black yellow
color attachment brightyellow default    # file attachments
color search brightred default           # search matches
color quoted brightyellow default        # quoted text in replies
color quoted1 magenta default            # quoted text in replies
color body cyan default "((ftp|http|https)://|news:)[^ &gt;)\"\t]+"   # URLs
color body cyan default "[-a-z_0-9.+]+@[-a-z_0-9.]+"               # email

# The rest of this stuff is pretty important for functionality and
#  readability.

# Don't ask to move read message
set move=no

# My signature is in this file
set signature="~/.signature"

# Change mail to look like from scott@hypexr.org
#  Stick your email address here.
my_hdr From: Scott Rippee &lt;scott@hypexr.org&gt;

# Header control   h displays header when in pager
# I want to only see the unignored by default
ignore *                                        # weed out all headers
unignored date from: to cc subject organization  # now show me these...

# Thanks to many people whom have written the documents and posts that I
#  have gotten these settings from.</pre>
	    </td></tr></table></ul>
	    <a name="mutt_commands"></a>
	    <h4>New Mutt Commands</h4>
	    <p>Here are the most useful (as far as dealing with spam) commands that we can now use in mutt:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
<pre>t       Tag messages to be manipulated
S       Send message/s to spam training folder
H       Send message/s to ham training folder and to inbox
alt-1   Change mailbox to Maildir/ (inbox)
alt-2   Change mailbox to .CaughtSpam
alt-3   Change mailbox to .Unsure
alt-8   Change mailbox to .MissedSpam
alt-9   Change mailbox to .MissedHam</pre>
	    </td></tr></table></ul>
	    <p>So for example, if a couple of spam messages show up in your inbox you can now tag them and hit '<b>S</b>' (remember its uppercase s) and have them vanished into .MissedSpam for training.


	    <br>
	    <a name="squirrel"></a>
	    <h3>SquirrelMail Configuration</h3>
	    <p>To configure SquirrelMail go into your <b>html_base_directory/squirrelmail/config</b> and run <b>./conf.pl</b>.  Edit the options to fit your needs. If you want to test your config cruise over to <b>http://localhost/squirrelmail/src/configtest.html</b>.
	    <p>Now go to <b>http://localhost/squirrelmail/</b> and login using your user account.  If you have any email in your in box you should see it after you log in.  Now click on the <b>Folders</b> option that is along the top, select all of the mailbox folders that we created earlier (they are listed here because we prefixed them with a period), and click on subscribe.  Hit refresh and the mailboxes should be listed in the side panel.  Now you can use SquirrelMail for almost all of you mail needs including tagging messages and  moving them to the correct folders for Spambayes training and checking on the mail that Spambayes has classified as spam and unsure.  The only functionality from our mutt setup that can't be duplicated in SquirrelMail is copying missed ham into its training folder and then moving it into your inbox.  This is due to the lack of copying ability.  So you will have to go into the ham training folder to see some of the mail that should be in your inbox.</p>
	    <p><b><i>!!! IMPORTANT SECURITY NOTE!!! - </i></b> Using SquirrelMail like this is not secure!  Sending the plain text passwords that you use for your Unix account can be accessed by by a 3rd party, which would them  access to your account.  You should set up a secure server with SSL and have Courier-imap use passwords that differ from the users system password using Courier Authlib, which I will demonstrate in the next session.  Excellent documents exist all over the net for setting up your web server with ssl.</p>
	    <div style="text-align:center;"><a class="content_whitebg" href="./gfx/sqmss.png"><img border="0" src="./gfx/sqmss_tn.png"></a></div>


            <br>
            <a name="courierauth"></a>
            <h3>Courier Authentication</h3>
            <p>Now is a good time to address a bit of essential security.  As of now when a user connects via the SquirrelMail or IMAP interface the passwords are being sent in plain text and if these are sniffed that users system account is compromised.  Without adding secure connections we can minimize the threat by using alternate passwords for imap connections.  The snoop would then have access to your mail, but not be able to  log in to the system.</p>
            <p>Edit your <b>authdaemonrc</b> file.  If your on Arch Linux this will be in <b>/etc/authlib</b>. Under <b>authmodulelist</b> I commented out:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=500px><tr><td>
		authmodulelist="authpam authpwd authuserdb authshadow ..."
	    </td></tr></table></ul>
	    <p>And replaced it with:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=300px><tr><td>
		authmodulelist="authuserdb"
	    </td></tr></table></ul>
	    <p>I believe that adding authuserdb to the front of the list may work, but I am only using this method of authentication so it is all I need in my list.</p>
	    <p>Lets create the user account entry:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="500px"><tr><td>
<pre>$ userdb "some_user_name" set home=/home/user_dir \
  mail=/home/user_dir/Maildir \
  uid=users_userid gid=users_groupid<br>
$ userdbpw | userdb "some_user_name" set systempw</pre>
	    </td></tr></table></ul>
	    <p>You will now be prompted for this pseudo users new password.  Next make sure that <b>/etc/authlib/userdb</b> has read/write/execute access for the owner.  If not <b>chmod 700 /usr/authlib/userdb</b>.  Now create the user database that courier is going to look to for authentication:</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
		$ makeuserdb
	    </td></tr></table></ul>
            <p>Again look to using Postfix/TLS for a tunneling the connection through a secure connection.</p>


	    <br>
            <a name="pop-before-smtp"></a>
            <h3>Pop-before-smtp Configuration</h3>
	    <p>To successfully configure pop-before-smtp follow the straight forward instructions in contrib/README.QUICKINSTALL.  When you are done and everything is working it is important to make sure that you have not some how made your mail server an open relay!  This would cause your mail server to be flooded with traffic and be put on the open relay ban lists.</p>
	    <p><b><i>!!! IMPORTANT SECURITY NOTE!!! - </i></b>I will not use the pop-before-smtp method because it involves sending a password over an insecure connection.  Use Postfix through a SSL connection, <a class="content_whitebg" href="http://www.aet.tu-cottbus.de/personen/jaenicke/pfixtls/">Postfix/TLS</a>, to accomplish this.  Since your local machines are likely already allowed to use your Postfix as a mail relay the only time that you would be using this method is from a non-trusted server where you password can be sniffed.  If you still choose to use this method make sure that you have changed the users courier password as described in <a class="content_whitebg" href="#courierauth">Courier Authentication</a>.</p>

	    
	    <br>
	    <a name="additionalproc"></a>
	    <h3>Additional Simple Procmail Recipes and Mailbox Config</h3>
	    <p>If you are a member of any news letters/mailing lists you can have them automatically sorted to their own mailbox using Procmail. First create the new mail directory in your ~/Maildir directory.  Lets call it .Sbayes and pretend that we are on the Spambayes mailing list. So exactly as before with the spam related mailboxes:
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
		mkdir -p ~/Maildir/.Sbayes/{cur,new,tmp}
	    </td></tr></table></ul>
	    <p>Now add this new rule to your ~/.procmailrc:
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
		# spambayes-dev@python.org mailing list<br>
		:0<br>
		* ^X-BeenThere: spambayes@python.org<br>
		${MAILDIR}/.Sbayes/
	    </td></tr></table></ul>
	    <p>In the <b>.mutrc</b> example above it shows an example of setting <b>alt-5</b> as the macro to see your Spambayes emails.</p>
	    <br>
	    <p>A slightly different method can be used to send spam and ham for training.  Adding the following lines will allow you to bounce spam messages to spam@localhost (localhost or your mail_domain.com) and ham messages to ham@localhost:
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10" width=400px><tr><td>
<pre># Mail has been bounced to spam@localhost
:0
* ^Resent-To:.*spam
${MAILDIR}/.MissedSpam

# Mail has been bounced to ham@localhost
:0
* ^Resent-To:.*ham
${MAILDIR}/.MissedHam</pre>
	    </td></tr></table></ul>
	    <p>If you want to bounce messages to the spam and ham addresses like this, you will need to make sure that the headers stay intact.  Do not try using this or a similar technique for forwarding mails to an address because the email's headers would not be intact and this is a large part of the spam classification.  This method works because above we specified spam and ham as aliases for hypexr in the Postfix aliases file.</p>

	    
	    <br>
	    <a name="conclusion"></a>
	    <h3>Conclusion</h3>
	    <p>For Arch Linux users, Add <b>saslauthd authdaemond courier-imap postfix fetchmail</b> to <b>DAEMONS</b> in your <b>/etc/rc.conf</b> file and they will be started automatically when your machine boots. If you are running a web server have the httpd service listed after the services we are adding.</p>
	    <p>/etc/rc.conf</p>
	    <ul><table class="examples" border="0" cellspacing="0" cellpadding="10"><tr><td>
		DAEMONS=(... saslauthd authdaemond postfix courier-imap fetchmail ...)
	    </td></tr></table></ul>
	    <p>Enjoy your new mail system and centralized mailbox. If you are handling a large number of users for you email system this is just the tip of the iceberg and you are going to mostly be interested in virtual users, security, and a system wide spam classifier.  There are many good documents on various setups to accomplish this, see the links section.</p>

<!-- AXIGEN AD 
<p>For an easier & quicker way than the above multi-step process, you can try an all-in-one <a class="content_whitebg" href="http://www.axigen.com/">Linux mail server</a> solution. A great open source alternative is the Axigen <a class="content_whitebg" href="http://www.axigen.com/mail-server/free/">Free Mail Server</a>, a turnkey messaging solution for 100 email users. Give it a look.
</p>
 AXIGEN AD END -->
            <br />
	    <a name="resources"></a>
	    <h3>Resources</h3>
	    <ul>
	    <a name="files"></a>
	    <h4>Example Files</h4>
	    <ul>
	      <li><a class="content_whitebg" href="./files/.fetchmailrc">.fetchmailrc</a>
	      <li><a class="content_whitebg" href="./files/.procmailrc">.procmailrc</a>
	      <li><a class="content_whitebg" href="./files/.muttrc">.muttrc</a>
	      <li><a class="content_whitebg" href="./files/train_spambayes">train_spambayes</a>	    
	    </ul>
	    
	    <a name="links"></a>
	    <h4>Links</h4>
	    <ul>
	      <li><a class="content_whitebg" href="http://www.archlinux.org">Arch Linux</a>
	      <li><a class="content_whitebg" href="http://www.postfix.org/">Postfix</a>
	      <li><a class="content_whitebg" href="http://www.procmail.org/">Procmail</a>
	      <li><a class="content_whitebg" href="http://www.catb.org/~esr/fetchmail/">Fetchmail</a>
	      <li><a class="content_whitebg" href="http://spambayes.sourceforge.net/">SpamBayes</a>
	      <li><a class="content_whitebg" href="http://www.mutt.org/">Mutt</a>
	      <li><a class="content_whitebg" href="http://www.squirrelmail.org/">SquirrelMail</a>
	      <li><a class="content_whitebg" href="http://www.courier-mta.org/imap/">Courier-imap</a>
	      <li><a class="content_whitebg" href="http://www.courier-mta.org/authlib/">Courier-authlib</a>
	    </ul><p>Virtual users and mailboxes using MySQL and setting up SSL for SquirrelMail</p>
	      <ul>
		<li><a class="content_whitebg" href="http://wiki.archlinux.org/index.html/PostFix_Howto#Step_10._.2Fetc.2Frc.conf">Arch Wiki - Postfix Howto</a>
	      <li><a class="content_whitebg" href="http://www.gentoo.org/doc/en/virt-mail-howto.xml">Gentoo - Virtual Mailhosting System with Postfix Guide</a>
		</ul><p>Other Useful links</p>
		<ul>
		  <li><a class="content_whitebg" href="http://wiki.archlinux.org/index.html/PostFix_Howto">Arch Linux Postfix HowTo</a>
		  <li><a class="content_whitebg" href="http://www.larsen-b.com/Article/100.html">Jkx@Home's Courier Authentication</a>
		  <li><a class="content_whitebg" href="http://yocum.org/faqs/postfix-tls-sasl.html">Postfix with TLS and SASL - geared towards FreeBSD</a>
		  <li><a class="content_whitebg" href="http://www.syntheticzero.com/howto/vmail.html">Setting up Postfix + MySQL + Courier-IMAP + Mailman + vmail + Procmail + SpamAssassin - geared towards Fedora/Red Hat</a>
		  <li><a class="content_whitebg" href="http://www.postfix.org/docs.html">Postfix Howtos and FAQs</a>
		  <li><a class="content_whitebg" href="http://www.mutt.org/doc/manual/">The Mutt E-Mail Client Manual</a>
		  <li><a class="content_whitebg" href="http://www.uwasa.fi/~ts/info/proctips.html">Timo's procmail tips and recipes</a>
		</ul>
	  </ul>

	  <br>
	  <a name="contributions"></a>
	  <h3>Contributions</h3>
          <p>Thanks to <b>Tim Stubbs</b> for the updated pacman command for installing the ABS created packages</p>
          <p>Thanks to <b>Constantinos Laitsas</b> for reworking the fetchmail rc file so that it will start as a daemon correctly</p>
	  <p>Thanks to <b>Robert Schweikert</b> for corrections to the train_spambayes script and the path to sb_filter.py</p>
	  <p>Thanks to <b>Alex Satrapa</b> for tips on example domain naming conventions</p>
	  <p>Thanks to <b>Austin Duncan</b> for tips on postfix configuration and mutts workings on other distros</p>

	  <div align="center"><font size="1">Corrections, comments, questions e-mail <a class="content_whitebg" HREF="mailto:scott@hypexr.org">scott@hypexr.org</a><br>Last Modified:

	  </font></div>
	  <hr noshade>
	  <center><a class="content_whitebg" HREF="#top"><font size="1">Top of Page</font></a></center>
	</td>
      </tr>
</table>
</center>
<!--<div align="center">
<p style="font-size:18px;">axigen 3 month ad space purchase:</font><br />
<a href="http://rightcart.com/cart/add/6106?rightcart_pid=2060#anch" target="rightcart" ><img src="http://rightcart.com/images/add_to_rightcart.gif" alt="Add to RightCart" width="139" height="24" border="0" /></a></p>
<br />
<br />
<br />
<br />
<br />
<br />
<div class='rightcart_div'><script type='text/javascript'>rightcart_pid='2060'; </script>
    <script type='text/javascript' src='http://rightcart.com/static/rightcart_display.js'>
    </script></div>
</div>
-->
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
