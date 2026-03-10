
<?php

error_reporting(0);

session_start();
$userId = isset($_SESSION['n_user_id']) ? $_SESSION['n_user_id'] : 1;

// MySQLi Connection
// -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~
// For some reason, I can't get this to work, so I'm using a direct MySQLi connection instead...
// include '../../php-includes/classes/dbh.php';
// $conn = (new Dbh())->connect();

// MySQLi connection (update credentials as needed)
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'strategicpivotmain';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno) {
    echo json_encode(['success' => false, 'error' => 'DB connection failed: ' . $conn->connect_error]);
    exit;
}

// Upload file
// -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~
$targetDir = dirname(__DIR__, 3) . '/images/user-profile/';  //I think this is a function to step back three directories...

if (isset($_FILES['croppedImage'])) {
    $file = $_FILES['croppedImage'];

    // Get existing filename
    $sql = "SELECT v_user_prof_pic FROM users_core_data WHERE n_user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($existingFileName);
    $stmt->fetch();
    $stmt->close();

    if ($existingFileName) {  // If there is an existing file name, overwrite it... preserve the uid, and re-issue the time
        // Delete the current/existing file...
        unlink($targetDir . $existingFileName);

        // Parse to find 2nd '_', replace the timestamp; Then create a new file-name...
        $parts = explode('_', $existingFileName, 3);
        if (count($parts) === 3) {
            $existingFileNameMod = $parts[0] . '_' . $parts[1] . '_' . time() . '.png';
        }

        $targetFile = $targetDir . $existingFileNameMod;
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            echo json_encode(['success' => true, 'filename' => $existingFileName]);
            // Run query to update the database...
            $sql = "UPDATE users_core_data SET v_user_prof_pic = ? WHERE n_user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $existingFileNameMod, $userId);
            $stmt->execute();
            $stmt->close();
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to move file.']);
        }
    } else { // Create a new file...
        $timestamp = time();
        $newFileName = uniqid('user_') . '_' . $timestamp . '.png';
        $targetFile = $targetDir . $newFileName;
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            // Update DB
            $sql = "UPDATE users_core_data SET v_user_prof_pic = ? WHERE n_user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $newFileName, $userId);
            $stmt->execute();
            $stmt->close();
            echo json_encode(['success' => true, 'filename' => $newFileName]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to move file.']);
        }
    }
} else {
    echo json_encode(['success' => false, 'error' => 'No file uploaded.']);
}
?>
