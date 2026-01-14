<?php
/**
 * Contact Form Handler
 * Processes form submissions and sends emails
 * 
 * Note: This file is included from contact.php if form validation passes.
 * In a production environment, you would:
 * 1. Send email notifications
 * 2. Save submissions to a database
 * 3. Send auto-reply to the client
 */

// Uncomment and configure for production use:

/*
// Email configuration
$to = "info@lombelegal.com"; // Your email address
$subject = "New Contact Form Submission - " . htmlspecialchars($service);

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . htmlspecialchars($name) . " <" . htmlspecialchars($email) . ">" . "\r\n";
$headers .= "Reply-To: " . htmlspecialchars($email) . "\r\n";

// Email body
$email_body = "
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
    <p><strong>Service Area:</strong> " . htmlspecialchars($service) . "</p>
    <p><strong>Message:</strong></p>
    <p>" . nl2br(htmlspecialchars($message)) . "</p>
</body>
</html>
";

// Send email
if (mail($to, $subject, $email_body, $headers)) {
    // Email sent successfully
    
    // Optional: Send auto-reply to client
    $auto_reply_subject = "Thank you for contacting Lombe Legal Firm";
    $auto_reply_body = "
    <html>
    <head>
        <title>Thank you for contacting us</title>
    </head>
    <body>
        <h2>Thank you for contacting Lombe Legal Firm</h2>
        <p>Dear " . htmlspecialchars($name) . ",</p>
        <p>We have received your inquiry regarding " . htmlspecialchars($service) . " and will get back to you within 24 hours.</p>
        <p>If this is an urgent matter, please call us at (555) 123-4567.</p>
        <p>Best regards,<br>Lombe Legal Firm</p>
    </body>
    </html>
    ";
    
    $auto_reply_headers = "MIME-Version: 1.0" . "\r\n";
    $auto_reply_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $auto_reply_headers .= "From: Lombe Legal Firm <info@lombelegal.com>" . "\r\n";
    
    mail($email, $auto_reply_subject, $auto_reply_body, $auto_reply_headers);
    
    // Optional: Save to database
    // Database connection and insert code would go here
    
} else {
    // Email failed to send
    $errors['general'] = "Sorry, there was an error sending your message. Please try again later or call us directly.";
}
*/

// For demonstration purposes, this file is left as a template.
// The form processing is handled directly in contact.php
