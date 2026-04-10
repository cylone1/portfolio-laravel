<?php

$secret = "Bintang12";

$payload = file_get_contents("php://input");

$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

$hash = 'sha256=' . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($hash, $signature)) {
    http_response_code(403);
    echo "Invalid signature!";
    exit;
}

echo "Deploy triggered!\n";

$output = shell_exec("cd /var/www/portfolio-laravel && ./deploy.sh 2>&1");


file_put_contents(
    "/var/www/portfolio-laravel/deploy.log",
    date("Y-m-d H:i:s") . "\n" . $output . "\n\n",
    FILE_APPEND
);

echo "<pre>$output</pre>";
