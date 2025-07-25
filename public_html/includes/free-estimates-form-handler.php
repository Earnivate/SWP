<?php
// Set your email address
$to = "your-email@example.com"; // <-- Change this to your actual email

// Check for POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input
    $name    = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email   = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST["phone"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    // Basic validation
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        echo "Please fill out all required fields correctly.";
        exit;
    }

    // Email subject and content
    $subject = "New Free Estimate Request from $name";

    $email_content = <<<EOD
You have received a new free estimate request:

Name: $name
Email: $email
Phone: $phone
Message:
$message
EOD;

    $headers = "From: no-reply@superiorwashpros.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you! Your estimate request has been submitted.";
    } else {
        echo "Sorry, there was an error sending your request. Please try again.";
    }

} else {
    // Invalid access
    header("Location: free-estimates.php");
    exit;
}
?>

