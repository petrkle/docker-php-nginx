<pre>
<?php

$text = "Žluťoučký kůň pěl ďábelské ódy.";

echo 'Original : ', $text, PHP_EOL;
echo 'TRANSLIT : ', iconv("UTF-8", "ASCII//TRANSLIT", $text), PHP_EOL;
