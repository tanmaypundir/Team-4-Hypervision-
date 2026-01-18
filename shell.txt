<?php
// We use output buffering to capture the phpinfo() data
ob_start();
phpinfo(INFO_MODULES);
$pinfo = ob_get_contents();
ob_end_clean();

// Use regex to find the version line specifically in the 'filter' section
if (preg_match('/filter.*?Extension Version.*?([\d\.]+)/s', $pinfo, $matches)) {
    echo "Filter Extension Version: " . $matches[1];
} else {
    // Fallback if regex fails: try the direct phpversion function
    echo "Filter Extension Version: " . phpversion('filter');
}
?>
