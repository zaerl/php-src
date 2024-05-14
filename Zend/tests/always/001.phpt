--TEST--
Basic "always" test.
--FILE--
<?php
var_dump(token_name(token_get_all('<?php always 1;')[1][0]));
?>
--EXPECT--
string(8) "T_ALWAYS"