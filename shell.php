<?php
ob_start();
phpinfo(8); // INFO_MODULES
$content = ob_get_clean();

// Use regex to extract the Phar version and the CVS/ID string
if (preg_match('/Phar EXT version.*?([0-9.]+)/', $content, $v)) {
    echo "Phar_Version: " . $v[1] . " | ";
}
if (preg_match('/\$Id: (.*?) \$/', $content, $i)) {
    echo "Phar_ID: " . $i[1];
}
?>
