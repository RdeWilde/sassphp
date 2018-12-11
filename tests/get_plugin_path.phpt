--TEST--
correctly handles getting plugin path
--SKIPIF--
<?php if (!extension_loaded("sass")) print "skip"; ?>
--FILE--
<?php

$sass = new Sass();
// test default from constructor
$sass->setPluginPath('/plugins/','/other/');
echo $sass->getPluginPath();

?>
--EXPECT--
/plugins/:/other/
