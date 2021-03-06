<?php

require realpath(__DIR__ . '/../vendor/autoload.php');

use Nextform\Config\AutoConfig;

$config = new AutoConfig(realpath(__DIR__ . '/assets/arrays.xml'));
$config->enableCsrfToken(true);

if ($config->checkCsrfToken()) {
    print_r('Token valid');
}

echo '<h1>Sample form Config</h1><pre>';
echo "<div style='background-color: #f1f1f1; padding: 20px;'>";
print_r($config->getFields());
echo '</div>';
