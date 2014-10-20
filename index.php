<?php

require 'Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->get(
    '/',
    function () {
        $template = <<<EOT
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>DoshBank</title>
        </head>
        <body>
            <h1>Welcome to your Bank!</h1>
        </body>
    </html>
EOT;
        echo $template;
    }
);
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);
$app->run();
