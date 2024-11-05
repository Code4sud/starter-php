<?php
// src/template.php
function renderPage($title, $content) {
    return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/header.css">
    <title>{$title}</title>
</head>
<body>
   
    <h1>{$title}</h1>
    <div>{$content}</div>
    <script src="public/js/header.js"></script>
</body>
</html>
HTML;
}
?>
