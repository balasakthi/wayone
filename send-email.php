<?php
header('Content-Type: application/json; charset=UTF-8\r\n');

$input = json_decode(file_get_contents('php://input'), true);

$fullName = $input['fullName'];
$email = $input['email'];
$message = $input['message'];


$to = 'info@wayonedroptaxi.com';
$subject = $fullName . ' send a mail';
$body = "Name: $fullName\nEmail: $email\nMessage:\n$message";


if (mail($to, $subject, $body)) {
    http_response_code(200);
    echo json_encode(['message' => 'Email sent successfully']);
} else {
    http_response_code(500);
    echo json_encode(['message' => 'Error sending email']);
}