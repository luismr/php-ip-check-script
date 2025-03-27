<?php
function solve($ip) {
    $isIPv4 = function($ip) {
        if (strpos($ip, '.') === false) {
            return false;
        }

        $octets = explode('.', $ip);
        if (count($octets) !== 4) {
            return false;
        }

        foreach ($octets as $octet) {
            if (strlen($octet) > 1 && $octet[0] === '0') {
                return false;
            }

            if (!is_numeric($octet) || $octet < 0 || $octet > 255) {
                return false;
            }
        }

        return true;
    };

    $isIPv6 = function($ip) {
        if (strpos($ip, ':') === false) {
            return false;
        }

        $parts = explode(':', $ip);
        if (count($parts) !== 8) {
            return false;
        }

        foreach ($parts as $part) {
            $len = strlen($part);
            if ($len < 1 || $len > 4) {
                return false;
            }

            if (!ctype_xdigit($part)) {
                return false;
            }
        }

        return true;
    };

    return ($isIPv4($ip) ? "IPv4" : ($isIPv6($ip) ? "IPv6" : "Neither"));
}

$T = readline();
for ($i = 0; $i < $T; $i++) {
    $ip = readline();
    echo solve($ip) . "\n";
}
?> 