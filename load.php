<?php

if( "::1" == $_SERVER["REMOTE_ADDR"] ){
    $local = true;
}else{
    $local = false;
}

if ( $local ) {
    define ( 'SITE_URL', 'http://localhost/note' );
} else {
    define ('SITE_URL', 'http://tridnguyen.com/quickdoc' );
}

?>
