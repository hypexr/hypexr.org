<!DOCTYPE html>
<html>
 <head>
  <title>Installing phpBB, MySQL 4, PHP4, and Apache 2.x</title>
  <meta name="description" content="phpBB, apache, php and MySQL source installation. Basic usage and security tips for MySQL">
  <meta name="Keywords" content="apache2,2,apache,php4,4,php,mysql4,mysql,phpbb2.0.6,phpbb,2.0.6,apache php mysql setup,linux,qpong,unix,help,c++,open source,chico,computer science, slackware,gentoo,red hat, programming,csu chico,csci 151,quake II, quake 2, quake2, g++,gnu,scott rippee, scott, scott@hypexr.org">
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

			      <h1>Setting up a Linux Server for phpBB :: phpBB tutorial</h1>
			      <h3>Brief Tutorial on Apache, PHP, and MySQL Installation and Configuration</h3>
			      <br>
			      <h3><a class="content_whitebg" HREF="#intro">Introduction</a></h3>
			        <ul>
			        <li><a class="content_whitebg" HREF="#software">Software Used</a>
			        <li><a class="content_whitebg" HREF="#conventions">Document Conventions</a>
				</ul>

			      <h3><a class="content_whitebg" HREF="#apm">Apache, PHP, MySQL Installation and Initial Setup</a></h3>
			        <ul>
			        <li><a class="content_whitebg" HREF="#apm_apache">Apache</a>
				<li><a class="content_whitebg" HREF="#apm_mysql">MySQL</a>
				<li><a class="content_whitebg" HREF="#apm_php">PHP</a>
				<li><a class="content_whitebg" HREF="#config_test">Configuration and Testing</a>
				</ul>


			      <h3><a class="content_whitebg" HREF="#phpbbinstall">Preliminary phpBB Installation Steps</a></h3>
			        <ul>
			        <li><a class="content_whitebg" HREF="#obtain">Obtaining phpBB</a>
				<li><a class="content_whitebg" HREF="#installphp">Installing phpBB</a>
				</ul>

			      <h3><a class="content_whitebg" HREF="#mysqlsetup">MySQL Database Setup</a></h3>
			        <ul>
			        <li><a class="content_whitebg" HREF="#basics">MySQL Basics</a>
			        <li><a class="content_whitebg" HREF="#createdb">Creating the Database</a>
				<li><a class="content_whitebg" HREF="#grantaccess">Granting Access to the Database</a>
				</ul>
			      <h3><a class="content_whitebg" HREF="#phpbbsetup">Setting up phpBB</a></h3>
			        <ul>
			        <li><a class="content_whitebg" HREF="#dbinformer">Using dbinformer.html</a>
				<li><a class="content_whitebg" HREF="#phpbbwebinst">phpBB Installation</a>
				</ul>
			      <h3><a class="content_whitebg" HREF="#change">Changing the Installation Information (Host, User Name, Password)</a></h3>
			      <h3><a class="content_whitebg" HREF="#links">Links</a></h3>
			      <h3><a class="content_whitebg" HREF="#contrib">Contributions</a></h3>

			      <br>
			      <hr noshade>
			      <br>

			      <a name="intro"></a>
			      <h3>Introduction</h3>
			      <p>If you do not already know, phpBB is a php based message board that is open source. <a class="content_whitebg" HREF="http://www.phpbb.com">www.phpbb.com</a><br>
			      This document, in addition to covering phpBB, briefly covers the installation and configuration of Apache, PHP, and MySQL, which are necessary to get up and running with phpBB.  Note that phpBB works with many more system configurations than are mentioned here.  It can be used with MySQL 3 and 4, PostgreSQL 7.x, and MS SQL 7/2000 and a web server that supports PHP.</p>
			      <a name="software"></a>
			      <h4>Software Used</h4>
				 <ul type="disk">
				 <li>Apache 2.0.48
				 <li>PHP 4.3.4
				 <li>MySQL 4.0.16
				 <li>phpBB 2.0.6
				 </ul>
			      <a name="conventions"></a>
			      <h4>Document Conventions</h4>
			      <p>This document will follow the following conventions:</p>
			      <ul type="disk">
			      <li>Grey boxes will contain commands to be entered or lines to be inserted into a file.</li>
			      <li>In examples when a command is entered at a command prompt it will be preceded by a '$'.</li>
			      <li>When "PATH_TO_&lt;file_or_directory_name&gt;" is used it means that I can not know the location where this file or directory resides on your system. "PATH_TO_&lt;file_or_directory_name&gt;" is symbolic of the directory structure leading to that file or directory.</li>
			      <li>Command/Code snippets and all other information that is being used from a source other than me will be appropriately documented as such.</li>
			      </ul>
			      <br>

			      <a name="apm"></a>
			      <h3>Apache, PHP, MySql Installation and Initial Setup</h3>
			        <a name="apm_apache"></a>
				<h4>Apache</h4>
				<p>If you are installing from source see the Apache <a class="content_whitebg" HREF="http://httpd.apache.org/docs-2.0/install.html">Compiling and Installing</a> document.  Their <i>Overview for the impatient</i> is as follows:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
<pre>
Download   $ lynx http://httpd.apache.org/download.cgi
Extract    $ gzip -d httpd-2_0_NN.tar.gz
           $ tar xvf httpd-2_0_NN.tar
Configure  $ ./configure --prefix=PREFIX --enable-so
Compile    $ make
Install    $ make install
Customize  $ vi PREFIX/conf/httpd.conf
Test 	   $ PREFIX/bin/apachectl start
</pre>
NN must be replaced with the current minor version number, and PREFIX must be replaced with the filesystem path under which the server should be installed. If PREFIX is not specified, it defaults to /usr/local/apache2.<br><br>
<b>note:  --enable-so is not part of Apache's documentation</b>
				   </td></tr></table></ul>
				<p><b><i>IMPORTANT:</i></b> you must add the --enable-so to get PHP working as a module later.</p>
				<p><b><i>Security Note:</i></b> If the only services you are going to be providing are http access and phpBB then you can use a firewall to close all ports except for port 80.</p>
				
				<a Name=apm_mysql></a>
				<h4>MySQL</h4>
				<p>If you are installing MySQL from binary, source, or RPM you can obtain a copy from <a class="content_whitebg" HREF="http://www.mysql.com/downloads/">www.mysql.com/downloads/</a>.  See <a class="content_whitebg" HREF="http://www.mysql.com/documentation/mysql/bychapter/manual_Installing.html">www.mysql.com/documentation/mysql/bychapter/manual_Installing.html</a> for all of the installation instructions.  For the extremely daring and trusting, here is a summary for a binary installation (From MySQL's installation page):</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
The basic commands you must execute to install and use a MySQL binary distribution are:
<pre>

shell> groupadd mysql
shell> useradd -g mysql mysql
shell> cd /usr/local
shell> gunzip < /path/to/mysql-VERSION-OS.tar.gz | tar xvf -
shell> ln -s full-path-to-mysql-VERSION-OS mysql
shell> cd mysql
shell> scripts/mysql_install_db
shell> chown -R root  .
shell> chown -R mysql data
shell> chgrp -R mysql .
shell> bin/mysqld_safe --user=mysql &

</pre>
If your version of MySQL is older than 4.0, substitute bin/safe_mysqld for bin/mysqld_safe in the final command. 

                                </td></tr></table></ul>
                                
				<p>If you want to install from source see <a class="content_whitebg" HREF="http://www.mysql.com/documentation/mysql/bychapter/manual_Installing.html#Installing_source">www.mysql.com/documentation/mysql/bychapter/manual_Installing.html#Installing_source</a>.  No pasted summary here, its best to read what the MySQL team's documentation because there are system criteria you must meet and CFLAG settings that should be used.</p>
				<p>Also, get the my-medium.cnf file from the MySQL documentation and replace my.cnf with this new file. (I find that the medium config gives decent performance, the large config eats up too much resources, and the little one is just weak)</p>

				<a Name=apm_php></a>
				<h4>PHP</h4>
				<p>You can download PHP from <a class="content_whitebg" HREF="http://www.html.net/manual/en/install.unix.html">www.html.net/manual/en/install.unix.html</a>.  It is important to click on the "/downloads.html" and select one of the 4.3 source files.  Do not attempt to install the "latest stable development version."  The latest build may have problems during the make.   PHP's source installation instructions are <a class="content_whitebg" HREF="http://www.html.net/manual/en/install.apache2.html">www.html.net/manual/en/install.apache2.html</a>.  You may also want to refer to <a class="content_whitebg" HREF="http://dan.drydog.com/apache2php.html">dan.drydog.com/apache2php.html</a> for information on getting it compiled and installed correctly.  The most important thing is when running <b>./configure</b> that you include the <i>--with-apxs2=/"PATH_TO_apxs"/apxs</i> and the <i>--with-mysql</i> which you may set equal to your MySQL directory.  Do something similar to this:</p>

				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
<pre>
$ cd /"PATH_TO_downloaded_php"/
$ tar zxvf php4-"version".tax.gz
$ cd php4-"numbers"/
$ ./configure \
	--with-apxs2=/"PATH_TO_apxs"/apxs \
	--with-mysql=/"PATH_TO_mysql"
$ make
$ make install
$ cp -p .libs/libphp4.so /"PATH_TO_apache"/modules
$ cp -p php.ini-recommended /"PATH_TO_prefix_to_php"/php.ini

<b>NOTE: if you did not give a --prefix= option to ./configure</b>
      <b>the last line will be:</b>
$ cp -p php.ini-recommended /usr/local/lib/php.ini
</pre>

                                    </td></tr></table></ul>
			      <p><b><i>NOTE:</i></b> to find where apxs resides (or any other file that an explicit path is not given to in this document) run "find / -name 'apxs' -print".</p>

			      <a Name=config_test></a>
			      <h4>Configuration and Testing</h4>
			      <p>Now, Apache needs to be told about PHP.  If httpd is running stop it:</p>
			      <p><b><i>NOTE:</i></b> You can check if the httpd process is running by typing: "ps aux | grep httpd". If a process other than grep is listed you need to stop the httpd daemon.</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				$ /etc/init.d/httpd stop
                                </td></tr></table></ul>
			      <p><b><i>NOTE:</i></b> If you installed from source this will be /"PATH_TO_apache"/bin/apachectl start.<br>
			      <b><i>NOTE:</i></b> If not, it may be in a different location and may be called <b>apache2</b>.</p>

			      <p>Open your <b>.httpd.conf</b> file (location varies depending on installation method). Customize the variables in this file to suit your needs and add:</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
<pre>
#Add where the other LoadModule lines are
#Make sure this line exist only once
LoadModule php4_module /"PATH_TO_apache"/modules/libphp4.so

#Find DirectoryIndex and add index.html
DirectoryIndex index.html index.html
AddType application/x-httpd-php .html .php4
AddType application/x-httpd-php-source .phps
</pre>
                                </td></tr></table></ul>
			      <p>Open up <b>/"PATH_TO_php.ini"/php.ini</b> and add or uncomment:</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				extension=mysql.so 
                                </td></tr></table></ul>
			      <p>Also have "safe_mode = off" in your php.ini file.  The only reason to have it set to on is in a shared hosting environment.</p>
			      <p>Restart Apache:</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				$ /etc/init.d/httpd start
                                </td></tr></table></ul>
			      <p><b>Test Apache and PHP</b></p>
			      <p>If Apache starts without any errors point your browser to "http://localhost" and see if the Apache test page loads.  To test php create a file called <b>test.html</b> in your http root directory containing the following:</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
<pre>
&lt;HTML&gt;
 &lt;HEAD&gt;
  &lt;TITLE&gt;PHP Test Page&lt;/TITLE&gt;
 &lt;/HEAD&gt;
 &lt;BODY&gt;
  &lt;?php phpinfo(); ?&gt;
&lt;/BODY&gt;
&lt;/HTML&gt;
</pre>
                                </td></tr></table></ul>
			      <p><b><i>Security Note:</i></b> Also, delete all of the files that Apache put by default in your html directory (In the past example files have been used as exploits.  This is an easy precaution to take).</p>
			      <p>When pointing your browser to "http://localhost/test.html" you should see information about your php installation.</p>
			      <p><b>Final Configuration of MySQL</b><br>
			      Make sure that the MySQL daemon is running, if not:</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				$ /etc/init.d/mysql start
                                </td></tr></table></ul>
				<p>If you installed MySQL via the binary or source install you will start it by:</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				$ cd /"PATH_TO_mysql"/<br>
				$ ./bin/mysqld_safe --user=mysql &
                                </td></tr></table></ul>
			      <p>If you have not already done so, use <b>mysqladmin</b> to create an account for root so root can access MySQL</p>
			        <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
				$ mysqladmin -u root password 'password_you_want'
                                </td></tr></table></ul>
			      <br>
			      <a name="phpbbinstall"></a>
			      <h3>Preliminary phpBB Installation Steps</h3>
			          <a name="obtain"></a>
			          <h4>Obtaining phpBB</h4>
				  <p>phpBB can be obtained from <a class="content_whitebg" HREF="http://www.phpbb.com/downloads.html">www.phpbb.com/downloads.html</a></p>

				  <a name="installphp"></a>
				  <h4>Installing phpBB</h4>
				  <p>The initial installation of phpBB is as simple as extracting the archive and copying the PHPBB2 directory you HTML directory.</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
				   $ tar zxf phpBB-2.x.x.tar.gz<br>
				   $ mv ./phpBB2 /"PATH_TO_html_files"/
				   </td></tr></table></ul>
			      <br>

			      <a name="mysqlsetup"></a>
			      <h3>MySQL Database Setup</h3>
			      <p>For a less hands on method (not entering the mysql commands by hand) use <a class="content_whitebg" HREF="http://www.phpmyadmin.net/home_page/">phpMyAdmin</a>.  Take a look at the demo on their site for an example.
			      <br>If using phpMyAdmin create a file called <b>.htaccess</b> in the phpMyAdmin install directory and add these lines:</p>
			      <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
			      IndexIgnore *<br> 
			      order deny,allow<br>
			      deny from all<br>
			      allow from 127.0.0.1
			      </td></tr></table></ul>
			      <p>This makes it so that phpMyAdmin can only be accessed from the localhost.
			      <br>If not using phpMyAdmin follow these steps.</p>
			          <a name="basics"></a>
				  <h4>MySQL  Basics</h4>
				  <p>First some very basics tips for using MySQL.
				  <br>To enter into the mysql prompt type:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				   mysql -u root -p
				   </td></tr></table></ul>
				  <p>You will then be prompted for the password that you set earlier using <b>mysqladmin</b>.
				  <br>Now you should see a prompt like "mysql> ".</p>
				  <p>As stated in <a class="content_whitebg" HREF="http://www.analysisandsolutions.com/code/mybasic.htm">MySQL Basics -- A MySQL Tutorial</a>: "MySQL has good security controls, but the default installation is wide open. So, if you're doing a new installation, let's close things up before we go any further. Of course, change NewRootName and NewPassword, below, to something unique."</p>

				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
<pre>
mysql> use mysql;
Database changed
mysql> delete from user where Host='%';
mysql> delete from user where User='';
mysql> delete from db where Host='%';
mysql> update user set User='NewRootName',
    -> Password=password('NewPassword') where User='root';
mysql> flush privileges;

<b>NOTE: The use mysql; command is not part of the cited example.</b>
</pre>
				   </td></tr></table></ul>
				  <p><b><i>NOTE:</i></b> use mysql; is not part of the cited example, but it is the databases that needs to be loaded in order to execute these commands.</p>
				  <p><b><i>NOTE:</i></b> From this point on when starting the MySQL monitor you will need to use the "NewRootName" and "NewPassword" that you entered above.  Example: "mysql -u my_new_root_name -p".</p>
				  <p>To see what databases exist use the <b>SHOW DATABASES</b> command:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
				   <pre>
mysql> show databases;
+----------+
| Database |
+----------+
| mysql    |
| test     |
+----------+
2 rows in set (0.00 sec)
</pre>
				   </td></tr></table></ul>
				  <p>To make changes to a database you will want to use the command <b>USE</b> "database name":</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				   mysql> use mysql;<br>
				   Database changed
				   </td></tr></table></ul>
				  <p>From here you can show the tables in the database, modify stuff, and a whole lot of other stuff.  See <a class="content_whitebg" HREF="http://www.analysisandsolutions.com/code/mybasic.htm">MySQL Basics -- A MySQL Tutorial</a> for more basic information and the <a class="content_whitebg" HREF="http://www.mysql.com/documentation/index.html">MySQL Documentation</a> for detailed information.  Here is an example to view the tables in the database:</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
				   <pre>
mysql> show tables;
+-----------------+
| Tables_in_mysql |
+-----------------+
| columns_priv    |
| db              |
| func            |
| host            |
| tables_priv     |
| user            |
+-----------------+
6 rows in set (0.00 sec)
</pre>
				   </td></tr></table></ul>
			          <a name="createdb"></a>
				  <h4>Creating the Database</h4>
				  <p>Back to the necessary steps to getting rolling with phpBB.  In MySQL we need to create a new database for phpBB to use.  This is done using the <b>CREATE DATABASE</b> command.  http://www.mysql.com/doc/en/CREATE_DATABASE.html</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				   mysql> create database phpbb_db;<br>
				   Query OK, 1 row affected (0.01 sec)<br><br>
				   </td></tr></table></ul>

				  <a name="grantaccess"></a>
				  <h4>Granting Access to the Database</h4>
				  <p>We now have a database called phpbb_db that will hold the information for phpBB.  Next we grant the permissions for the database so that phpBB can access it.  http://www.mysql.com/doc/en/Adding_users.html</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
<pre>
mysql> use phpbb_db;
Database changed
mysql> GRANT ALL PRIVILEGES ON phpbb_db.* to phpbb_account@localhost
    -> IDENTIFIED BY 'this_password';
Query OK, 0 rows affected (0.01 sec)
</pre>
				   </td></tr></table></ul>
				  <p>Now the phpbb_account has full access to our phpbb_db database. You can now type <b>quit</b>.</p>
			      <br>

			      <a name="phpbbsetup"></a>
			      <h3>Setting up phpBB</h3>
			         <a name="dbinformer"></a>
				 <h4>Using dbinformer.html</h4>
				 <p>In the phpBB2 directory there is a folder called <b>contrib</b>.  It "contains a couple extra add-ons for phpBB 2.0.x."  One of these extras is <b>dbinformer</b>.  Point your web browser to "http://localhost/phpBB2/contrib/dbinformer.html".  We can use it to ensure that phpBB will we able to use the database that we have created.</p>
				   <ul><table border="0" cellspacing="0" cellpadding="10"><tr><td>
				   <a class="content" HREF="./gfx/dbinformer_ex.png"><img src="./gfx/dbinformer_ex_thumb.png"></a><br>
				   <font size="1"><center>(click on image for a full sized view)</center></font>
				   </td></tr></table></ul>
				 <p>Because it was able to find and establish a connection to the database we are in the green to proceed.</p>

			         <a name="phpbbwebinst"></a>
				 <h3>phpBB Installation</h3>
				 <p>Point your browser to "http://localhost/phpBB2/" and it should take you to the phpBB 2 installation page, "http://localhost/phpBB2/install/install.html"  Fill in the fields similar to as shown in the screen shot.</p>
				   <ul><table border="0" cellspacing="0" cellpadding="10"><tr><td>
				   <a class="content" HREF="./gfx/phpbbinstall_ex.png"><img src="./gfx/phpbbinstall_ex_thumb.png"></a><br>
				   <font size="1"><center>(click on image for a full sized view)</center></font>
				   </td></tr></table></ul>
				 <p><b>Note:</b> Its better to put your domain name (www.something.com) under "Domain Name:" rather than a local ip address (as is show in the screenshot).  This will be used when it sends out e-mails that contain links back to your message board and can be changed at a later time by going to the "Administration Panel".</p>
				 <p>It may now inform you that the config is un-writable.  Select "Just send the file to me and I'll FTP it manually" and click on "Download Config".  Once downloaded copy it to your <b>phpBB2</b> directory.</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10"><tr><td>
				   mv config.html /"PATH_TO_html_files"/phpBB2/
				   </td></tr></table></ul>
				 <p>For security reasons you must delete "phpBB2/install" and "phpBB2/contrib".  In the <b>phpBB2</b> directory type</p>
				   <ul><table class="examples"  border="0" cellspacing="0" cellpadding="10" width="300px"><tr><td>
				   rm -rf install contrib
				   </td></tr></table></ul>
				 <p>This completes the installation for the most part.  Reload "http://localhost/phpBB2/" and you should be confronted with the message board.  Once you log in there will be an "Go to Administration Panel" link at the bottom of the page.  Click there and configure your new shiny phpBB!</p>

			      <a name="change"></a>
			      <h3>Changing the Installation Information (Host, User Name, Password)</h3>
			      <p>If your database's host name, database name, user name, or user password change after you delete the installation files you are able to modify them by editing <b>config.html</b>, which is found in the root of the install directory.  You can also change the domain name that you had entered, during the install, by going into the "Administration Panel" -> "General Admin" -> "Configuration" and you will see "Domain Name" listed as the first field.</p>

			      <a name="links"></a>
			      <h3>Links</h3>
			      <ol>
			           <li><a class="content_whitebg" HREF="http://httpd.apache.org/">Apache HTTP Server Project</a>
				   <li><a class="content_whitebg" HREF="http://httpd.apache.org/docs-2.0/install.html">Apache: Compiling and Installing</a>
				   <li><a class="content_whitebg" HREF="http://www.mysql.com/documentation/mysql/bychapter/manual_Installing.html">MySQL Manual Installation</a>
				   <li><a class="content_whitebg" HREF="http://www.mysql.com/doc/en/Adding_users.html">MySQL Granting User Permissions</a>
				   <li><a class="content_whitebg" HREF="http://www.analysisandsolutions.com/code/mybasic.htm#tighten">MySQL Basics -- A MySQL Tutorial</a>
				   <li><a class="content_whitebg" HREF="http://www.linuxhelp.net/guides/mysql/">Joey Olson's mySQL Setup Guide</a>
				   <li><a class="content_whitebg" HREF="http://www.html.net/">PHP Project Home</a>
				   <li><a class="content_whitebg" HREF="http://www.html.net/manual/en/install.apache2.html">PHP 4 Apache 2 installation</a>
				   <li><a class="content_whitebg" HREF="http://dan.drydog.com/apache2php.html">Dan Anderson's Apache 2 and PHP (mod_php) on Linux </a>
				   <li><a class="content_whitebg" HREF="http://www.phpbb.com">phpBB Home</a>
				   <li><a class="content_whitebg" HREF="http://www.phpbb.com/kb/index.html">phpBB's Knowledge Base</a>
				   <li><a class="content_whitebg" HREF="http://www.phpbb.com/support.html">phpBB Support</a>
				   <li><a class="content_whitebg" HREF="http://www.phpmyadmin.net/home_page/">phpMyAdmin</a>
			      </ol>

			      <br>
			      <a name="contrib"></a>
			      <h3>Contributions</h3>
			      <p>Thanks to <b>Darth Wong</b>, from the phpbb forums, for his tips on security and phpMyAdmin.</p>

			      <div align="center"><font size="1">Corrections, comments, questions e-mail <a class="content_whitebg" HREF="mailto:scott@hypexr.org">scott@hypexr.org</a><br>Last Modified:

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
</html>
