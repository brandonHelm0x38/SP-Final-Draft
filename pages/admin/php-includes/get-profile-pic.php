<?php

session_start();

if (!isset($_SESSION['n_user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Not logged in']);
    exit;
}

$user_id = $_SESSION['n_user_id'];

// include '../../php-includes/classes/dbh.php';
// $conn = (new Dbh())->connect();

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'strategicpivotmain';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno) {
    echo json_encode(['success' => false, 'error' => 'DB connection failed: ' . $conn->connect_error]);
    exit;
}

$stmt = $conn->prepare('SELECT v_user_prof_pic FROM users_core_data WHERE n_user_id = ?');


$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->bind_result($profile_pic);
$stmt->fetch();
$stmt->close();
echo json_encode(['success' => true, 'filename' => $profile_pic]);
