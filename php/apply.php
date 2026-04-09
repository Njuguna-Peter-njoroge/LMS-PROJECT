\<?php
// Show all errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include your config.php (this already connects to DB)
require_once "config.php"; // make sure the path is correct

// Collect POST data safely (use null coalescing to avoid undefined errors)
$full_name = $_POST['full_name'] ?? '';
$gender = $_POST['gender'] ?? '';
$date_of_birth = $_POST['date_of_birth'] ?? '';
$id_number = $_POST['id_number'] ?? '';
$marital_status = $_POST['marital_status'] ?? '';
$email = $_POST['email'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';
$alternative_number = $_POST['alternative_number'] ?? '';
$street = $_POST['street'] ?? '';
$town = $_POST['town'] ?? '';
$state = $_POST['state'] ?? '';
$country = $_POST['country'] ?? '';
$region = $_POST['region'] ?? '';
$landmark = $_POST['landmark'] ?? '';
$education = $_POST['education'] ?? '';
$year = $_POST['year'] ?? '';
$institution_name = $_POST['institution_name'] ?? '';
$course_category = $_POST['course_category'] ?? '';
$course = $_POST['course'] ?? '';
$study_mode = $_POST['study_mode'] ?? '';
$start_date = $_POST['start_date'] ?? '';
$terms_accepted = isset($_POST['terms']) ? 1 : 0;
$privacy_accepted = isset($_POST['privacy']) ? 1 : 0;

// Prepare the SQL statement to prevent SQL injection
$stmt = $con->prepare("INSERT INTO applications (
    full_name, gender, date_of_birth, id_number, marital_status, email, phone_number, alternative_number, street, town, state, country, region, landmark, education, year, institution_name, course_category, course, study_mode, start_date, terms_accepted, privacy_accepted
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters (23 strings and 2 integers)
$stmt->bind_param(
    "sssssssssssssssssssssss",
    $full_name, $gender, $date_of_birth, $id_number, $marital_status, $email, $phone_number, $alternative_number, $street, $town, $state, $country, $region, $landmark, $education, $year, $institution_name, $course_category, $course, $study_mode, $start_date, $terms_accepted, $privacy_accepted
);

// Execute the statement
if($stmt->execute()){
    echo "Application submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$con->close();
?>