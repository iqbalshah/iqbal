function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function getRealIP($fakeip=false) {

$ip = (!empty($_SERVER['HTTP_CLIENT_IP'])) ? (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) ? $_SERVER['HTTP_CLIENT_IP'] : preg_replace(‘/(?:,.*)/’, ”, $_SERVER['HTTP_X_FORWARDED_FOR']):$_SERVER['REMOTE_ADDR'];
$ip = (!$fakeip) ? $ip:$fakeip;

// local check class b and c
$patterns = array(“/(192).(168).(\d+).(\d+)/i”,”/(10).(\d+).(\d+).(\d+)/i”);
foreach($patterns as $pattern) {
if(preg_match($pattern,$ip)) {
return “VPN”;
}
}
// local check class a
$parts = explode(“.”,$ip);
if($parts[0]==172 && ($parts[1]>15 || $parts[1]<32)) {
return "VPN";
}
return trim($ip);
}