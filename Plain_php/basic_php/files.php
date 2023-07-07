<?php 
    echo '
    $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.  <br>' ;

    echo '<br> request method =  '. $_SERVER[ 'REQUEST_METHOD'].'<br> ' ;
    echo 'Returns the filename of the currently executing script '.$_SERVER[ 'PHP_SELF'].'<br>' ;
    echo  'Returns the path of the current script = '.$_SERVER[ 'SCRIPT_NAME'].'<br>' ;
    echo  'Returns the Host header from the current request = '.$_SERVER[ 'HTTP_HOST'].'<br>' ;
    echo  $_SERVER[ 'HTTP_ACCEPT'].'<br>' ;
    echo  $_SERVER[ 'HTTP_USER_AGENT'].'<br>' ;
    echo  $_SERVER[ 'SERVER_ADDR'].'<br>' ;
    echo  $_SERVER[ 'SERVER_SOFTWARE'].'<br>' ;
    echo  $_SERVER[ 'SERVER_PROTOCOL'].'<br>' ;
    echo  $_SERVER[ 'REQUEST_TIME'].'<br>' ;
    echo  $_SERVER[ 'QUERY_STRING'].'<br>' ;
    echo  $_SERVER[ 'REMOTE_ADDR'].'<br>' ;
    echo  $_SERVER[ 'REMOTE_PORT'].'<br>' ;
    echo  $_SERVER[ 'SCRIPT_FILENAME'].'<br>' ;
    // echo  $_SERVER['HTTP_REFERER'].'<br>' ;

?>