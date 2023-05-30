


<?php
//simple allocate and see refcount
$a = "new string";
xdebug_debug_zval( 'a' );
//deallocate
unset($a);
?>



