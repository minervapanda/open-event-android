<?php
if(isset($_POST['timestamp']))
{
    $uid = escapeshellcmd($_POST['timestamp']);
    exec("sudo python /var/www/appgenserver.py $uid");
    echo "http://192.241.232.231/release/".$uid."/releaseapk.apk";
}
?>
