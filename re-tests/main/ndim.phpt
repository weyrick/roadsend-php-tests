--TEST--
/home/weyrick/pcc/tests/ndim.php (converted from Roadsend suite)
--FILE--
<?php

$foo['asdf'] = "foo";
$foo['fdsa'][] = "bar";
echo "$foo[asdf] $foo[fdsa][0]\n";

$bar[0][0][0] = "foo";
echo $bar[0][0][0] . "\n";
echo "$bar[0][0][0]\n";

$fruits = array ( "fruits"  => array ( "a" => "orange"
                                     , "b" => "banana"
                                     , "c" => "apple"
                                     )
                , "numbers" => array ( 1
                                     , 2
                                     , 3
                                     , 4
                                     , 5
                                     , 6
                                     )
                , "holes"   => array (      "first"
                                     , 5 => "second"
                                     ,      "third"
                                     )
                );

echo "$fruits[holes][5]\n";    



$firstquarter  = array(1 => 'January', 'February', 'March');
print_r($firstquarter);

/* output:
Array 
(
    [1] => 'January'
    [2] => 'February'
    [3] => 'March'
)
*/


// fill an array with all items from a directory
$handle = opendir('/etc');
while ($file = readdir($handle)) 
{
    $files[] = $file;
}
closedir($handle);

//sort($files);
print_r($files);


?>
--EXPECT--
foo Array[0]
foo
Array[0][0]
Array[5]
Array
(
    [1] => January
    [2] => February
    [3] => March
)
Array
(
    [0] => .
    [1] => ..
    [2] => profile
    [3] => pwdb.conf
    [4] => nsswitch.conf
    [5] => portage
    [6] => modprobe.conf
    [7] => opera6rc
    [8] => pam.d
    [9] => ssh
    [10] => make.conf.example
    [11] => DIR_COLORS
    [12] => rsyncd.conf
    [13] => networks
    [14] => rc.conf
    [15] => modules.conf.old
    [16] => distcc
    [17] => shadow
    [18] => dispatch-conf.conf
    [19] => opt
    [20] => hosts
    [21] => login.access
    [22] => sysctl.conf
    [23] => security
    [24] => gpm
    [25] => inittab
    [26] => cron.monthly
    [27] => etc-update.conf
    [28] => modules.conf
    [29] => fstab
    [30] => issue.logo
    [31] => ld.so.cache
    [32] => limits
    [33] => ssl
    [34] => cron.weekly
    [35] => dmtab
    [36] => host.conf
    [37] => make.profile
    [38] => bash
    [39] => runlevels
    [40] => group
    [41] => inputrc
    [42] => gentoo-release
    [43] => rmt
    [44] => modprobe.devfs.old
    [45] => man.conf
    [46] => cron.hourly
    [47] => scsi_id.config
    [48] => issue
    [49] => profile.env
    [50] => localtime
    [51] => ld.so.conf
    [52] => terminfo
    [53] => shells
    [54] => securetty
    [55] => csh.env
    [56] => rpc
    [57] => modules.autoload.d
    [58] => services
    [59] => modprobe.devfs
    [60] => hotplug.d
    [61] => nanorc
    [62] => wget
    [63] => skel
    [64] => init.d
    [65] => gre.d
    [66] => conf.d
    [67] => default
    [68] => udev
    [69] => passwd
    [70] => nscd.conf
    [71] => make.conf
    [72] => make.globals
    [73] => modules.d
    [74] => cron.daily
    [75] => env.d
    [76] => protocols
    [77] => filesystems
    [78] => login.defs
    [79] => resolv.conf
    [80] => joe
    [81] => fstab~
    [82] => mrtg._l
    [83] => .pwd.lock
    [84] => rc.conf~
    [85] => syslog.conf
    [86] => mail
    [87] => mailcap
    [88] => ssmtp
    [89] => crontab
    [90] => cron.deny
    [91] => cron.d
    [92] => updatedb.conf
    [93] => hosts~
    [94] => group-
    [95] => passwd-
    [96] => dhcp
    [97] => mtab
    [98] => adjtime
    [99] => shadow-
    [100] => modprobe.conf.old
    [101] => sudoers
    [102] => ndiswrapper
    [103] => ntp.conf
    [104] => X11
    [105] => xml
    [106] => group~
    [107] => gtk
    [108] => sudoers.tmp~
    [109] => spamassassin
    [110] => cpufreqd.conf
    [111] => fonts
    [112] => mime.types
    [113] => pango
    [114] => gtk-2.0
    [115] => gconf
    [116] => bonobo-activation
    [117] => gnome-vfs-mime-magic
    [118] => fam.conf
    [119] => cups
    [120] => xinetd.d
    [121] => mysql
    [122] => logrotate.d
    [123] => samba
    [124] => gnome-vfs-2.0
    [125] => sound
    [126] => sgml
    [127] => lynx
    [128] => scrollkeeper.conf
    [129] => make.conf~
    [130] => xdg
    [131] => esd
    [132] => inittab~
    [133] => acpi
    [134] => login.defs~
    [135] => bash_completion.d
    [136] => apache2
    [137] => gshadow-
    [138] => openoffice
    [139] => gimp
    [140] => profile~
    [141] => eselect
    [142] => resolv.conf~
    [143] => asound.state
    [144] => php
    [145] => profile.csh
    [146] => vmware
    [147] => dbus-1
    [148] => blkid.tab
    [149] => gshadow
    [150] => htdig
    [151] => openldap
    [152] => pear.conf
    [153] => whois.conf
    [154] => snmp
    [155] => postfix
    [156] => blkid.tab.old
    [157] => resolv.conf.sv
    [158] => mplayer
    [159] => mrtg.ok
    [160] => printcap
    [161] => foomatic
    [162] => t1lib
    [163] => ntp.conf.sv
    [164] => ca-certificates.conf
    [165] => xpdfrc
    [166] => fglrxprofiles.csv
    [167] => fglrxrc
    [168] => eclean
    [169] => revdep-rebuild
    [170] => hotplug
    [171] => mysql-500
    [172] => synergy.conf
    [173] => pdnsd
    [174] => locale.gen
    [175] => sasl2
    [176] => ati
    [177] => environment
    [178] => qt4
    [179] => libgda
    [180] => pcc.conf
    [181] => hosts.allow
    [182] => hosts.deny
    [183] => unixODBC
    [184] => imlib
    [185] => hal
    [186] => ppp
    [187] => minicom
    [188] => wpa_supplicant
    [189] => mke2fs.conf
    [190] => pmount.allow
    [191] => texmf
    [192] => papersize
    [193] => resolvconf
    [194] => lisp-config.lisp
    [195] => gai.conf
    [196] => lighttpd
    [197] => mrtg.conf.old
    [198] => mrtg.conf
    [199] => gtags.conf
    [200] => mDNSResponderPosix.conf
    [201] => xinetd.conf
    [202] => modprobe.d
    [203] => mrtg.conf.zyxel
    [204] => opera6rc.fixed
)
