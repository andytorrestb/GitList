<?php

$id = '';
if (isset($_GET['id'])) {
    $id = trim($_GET['id']);
    $id = preg_replace('/[^a-zA-Z0-9\-]+/', '', $id);
}

if (in_array($id, ['css','php','javascript'])) {
    $filename = __DIR__."/$id-repositories.json";
    $json = file_get_contents($filename);

    http_response_code(200);
    header('Content-Type: application/json');
    header('Content-Length: '.strlen($json));
    echo $json;
} else {
    http_response_code(404);
}