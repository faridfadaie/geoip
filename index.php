<?php
if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"])  ){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else if ( isset($_SERVER["REMOTE_ADDR"]) )    {
    $ip = $_SERVER["REMOTE_ADDR"];
} else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    {
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    {
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}

$gi = geoip_record_by_name($ip);
echo json_encode($gi);
geoip_close($gi);

?>
