<?php
require('inc/db_config.php');

// Set content type for JSON responses
header('Content-Type: application/json');

// Function to send JSON response
function sendResponse($status, $message) {
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse('error', 'Invalid request method');
}

// Check if all required fields are present and not empty
$required_fields = ['name', 'email', 'phone', 'password', 'confirm_password'];
foreach ($required_fields as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        sendResponse('error', 'All fields are required');
    }
}

// Sanitize and validate input
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate name (letters, spaces, basic punctuation only)
if (!preg_match('/^[a-zA-Z\s\-\'\.]{2,50}$/', $name)) {
    sendResponse('error', 'Name must be 2-50 characters and contain only letters, spaces, hyphens, apostrophes, and periods');
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse('error', 'Invalid email format');
}

// Validate phone (basic pattern - adjust as needed)
if (!preg_match('/^[\+]?[0-9\-\s\(\)]{10,20}$/', $phone)) {
    sendResponse('error', 'Invalid phone number format');
}

// Check password match
if ($password !== $confirm_password) {
    sendResponse('error', 'Passwords do not match');
}

// Validate password strength
if (strlen($password) < 8) {
    sendResponse('error', 'Password must be at least 8 characters long');
}

if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/', $password)) {
    sendResponse('error', 'Password must contain at least one lowercase letter, one uppercase letter, and one number');
}

try {
    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    if (!$check) {
        throw new Exception('Database prepare failed: ' . $conn->error);
    }
    
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();
    
    if ($result->num_rows > 0) {
        $check->close();
        sendResponse('error', 'An account with this email already exists');
    }
    $check->close();

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, created_at) VALUES (?, ?, ?, ?, NOW())");
    if (!$stmt) {
        throw new Exception('Database prepare failed: ' . $conn->error);
    }
    
    $stmt->bind_param("ssss", $name, $email, $phone, $hashed_password);

    if ($stmt->execute()) {
        $user_id = $conn->insert_id;
        $stmt->close();
        sendResponse('success', 'Account created successfully');
    } else {
        throw new Exception('Failed to create account: ' . $stmt->error);
    }

} catch (Exception $e) {
    // Log error for debugging (don't expose to user)
    error_log('Registration error: ' . $e->getMessage());
    sendResponse('error', 'An error occurred while creating your account. Please try again.');
}

// Close connection
if (isset($conn)) {
    $conn->close();
}
?>