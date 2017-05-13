<?php
class Loader
{
	public static function loadClass($class)
	{
		$file = $class . '.php';
		if(is_file($file)){
			require_once($file);
		}
	}
}

spl_autoload_register(array("Loader", 'loadClass'));

$a = new A();

function callback($buffer)
{
  // replace all the apples with oranges
  return (str_replace("apples", "oranges", $buffer));
}

ob_start("callback");

?>
<html>
<body>
<p>It's like comparing apples to oranges.</p>
</body>
</html>
<?php

ob_end_flush();

?>
<?php
//这只是个例子，下面的数字取决于你的系统

echo memory_get_usage() . "\n"; // 36640

$a = str_repeat("Hello", 4242);

echo memory_get_usage() . "\n"; // 57960

unset($a);

echo memory_get_usage() . "\n"; // 36744

?>