--TEST--
--SKIPIF--
<?php if(!extension_loaded('obcast')) echo 'skip'; ?>
--FILE--
<?php

class TrueClass implements Boolable {
	public function __toBoolean() {
		return true;
	}
}

$b = new TrueClass();

var_dump($b instanceof Boolable);

var_dump($b->__toBoolean());
var_dump((bool) $b);
var_dump(boolval($b));
if ($b) {
	var_dump(true);
} else {
	var_dump(false);
}
var_dump($b ? true : false);

--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)