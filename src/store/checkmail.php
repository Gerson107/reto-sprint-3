<?php
if ( function_exists( 'mail' ) )
{
    echo 'mail() funcion is enabled';
}
else
{
    echo 'mail() was disabled, please contact hosting provider to enable';
}
?>