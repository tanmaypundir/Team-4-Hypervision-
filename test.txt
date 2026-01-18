<?php
// Retrieve the version of the sysvmsg extension
$id = phpversion('sysvmsg');

if ($id) {
    echo "The extension version of sysvmsg is: " . $id;
} else {
    echo "sysvmsg module is not loaded or version not found.";
}
?>
