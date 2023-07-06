<?php class LinuxTools
{
  public static function ping
  (
    $host	= '127.0.0.1',  //  IP/Host.Domain
    $w		= 1				//	Wait 1 sec. / def.by.linux=10sec.
  )
  {
    exec ( "ping -c {$w} {$host}" , $output , $errorlevel );
    return $errorlevel ? false : true;
  }
}?>
