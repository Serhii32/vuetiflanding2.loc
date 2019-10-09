<?php

// Begin of CORS things
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With,Origin,Content-Type,Cookie,Accept');
 
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('HTTP/1.1 204 No Content');
    die;
}
// End of CORS things


$requestBody = file_get_contents('php://input');
$requestBody = json_decode($requestBody, true);
if ($requestBody === null) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode([
        'errorMessage' => 'Please provide valid JSON',
    ]);
    die;
}
 
header('Content-Type: application/json');
if($requestBody['name']!==null && $requestBody['phone']!==null){ 
    $to = 'simbionvn@ukr.net';
    $subject = 'Callback';
    $message = '
        <html>
            <head>
                <title>Call me back</title>
            </head>
            <body>
                <p><b>Name:</b> '.htmlspecialchars($requestBody['name']).'</p>
                <p><b>Phonenum:</b> '.htmlspecialchars($requestBody['phone']).'</p>
            </body>
        </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: Site <info@mail.com>\r\n"; 
    mail($to, $subject, $message, $headers);
    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}
