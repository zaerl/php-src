--TEST--
Basic "echoln" test
--INI--
echoln=1
--FILE--
<?php
echo "Hello World!";
?>
--EXPECT--
Hello World!
