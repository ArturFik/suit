<?php
if (version_compare(phpversion(), '8.1', '<')) {
    $file_suffix = 'encoded-php74';
} elseif (version_compare(phpversion(), '8.2', '<')) {
    $file_suffix = 'encoded-php81';
} else {
    $file_suffix = 'encoded-php82';
}

require_once DIR_SYSTEM . "library/progroman/citymanager/core-$file_suffix.php";