<?php 
//a program that checks whether a given string is a valid IPv4 address or not
function isValidIPv4($ipAddress) {
    $ipAddress = trim($ipAddress);
    if (empty($ipAddress)) {
        return false;
    }

    $parts = explode('.', $ipAddress);
    if (count($parts) !== 4) {
        return false;
    }

    foreach ($parts as $part) {
        if (!is_numeric($part) || $part < 0 || $part > 255 || (strlen($part) > 1 && $part[0] == '0')) {
            return false;
        }
    }

    return true;
}

// Example usage
$ipAddress = '192.168.0.1';
if (isValidIPv4($ipAddress)) {
    echo "$ipAddress is a valid IPv4 address.";
} else {
    echo "$ipAddress is not a valid IPv4 address.";
}


?>