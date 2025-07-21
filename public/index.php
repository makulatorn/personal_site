<?php
$request = $_SERVER['REQUEST_URI'];
$parsed = parse_url($request);
$path = trim($parsed['path'], '/');

error_log("Original path: " . $path);

$path = preg_replace('#^.*?public/#', '', $path);

error_log("Final path: " . $path);

switch ($path) {
    case '':
    case 'home':
    case 'personal_site_php/public':
        require __DIR__ . '/../pages/home.php';
        break;
    case 'projects':
        require __DIR__ . '/../pages/projects.php';
        break;
    case 'contact':
        require __DIR__ . '/../pages/contact.php';
        break;
    case 'contact/send':
        require __DIR__ . '/../handlers/mail.php';
        break;
    default:
        http_response_code(404);
        echo "404 - Page not found";
        break;
}