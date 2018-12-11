--TEST--
correctly handles includePath
--SKIPIF--
<?php if (!extension_loaded("sass")) print "skip"; ?>
--FILE--
<?php

$sass = new Sass();
$sass->setIncludePath(__DIR__.'/support', __DIR__.'/bar');
$css = $sass->compile('
@import "foo";
');

echo $css;
echo $sass->getIncludePath();

?>
--EXPECT--
h2 {
  color: green; }
