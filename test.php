<?php

echo "PHP: ", PHP_VERSION, PHP_EOL;
echo "OS: ", PHP_OS_FAMILY, PHP_EOL;

if (PHP_VERSION !== '8.5.12') {
    fwrite(STDERR, "FAIL: Expected PHP 8.5.12
");
    exit(1);
}

echo "PASS: Running PHP 8.5.12
";
