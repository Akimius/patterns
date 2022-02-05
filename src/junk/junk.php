<?php

$template = 'DELETED';

$name = '[DELETED] [DELETED] AkimProduct [deleted]';

$name = preg_replace('/\\[' . $template . '\]/i', '', $name);

echo trim($name);

echo PHP_EOL;
