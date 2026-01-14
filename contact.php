<?php
/**
 * Contact Page
 * Features contact form with PHP validation and processing
 */

// Initialize variables
$name = $email = $phone = $service = $message = '';
$errors = [];
$success = false;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    } elseif (strlen($name) < 2) {
        $errors['name'] = 'Name must be at least 2 characters.';
    }
    
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    
    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required.';
    } elseif (!preg_match('/^[\d\s\-\+\(\)]+$/', $phone)) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }
    
    if (empty($service)) {
        $errors['service'] = 'Please select a service area.';
    }
    
    if (empty($message)) {
        $errors['message'] = 'Message is required.';
    } elseif (strlen($message) < 10) {
        $errors['message'] = 'Message must be at least 10 characters.';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // In a production environment, you would:
        // 1. Send an email notification
        // 2. Save to database
        // 3. Send auto-reply to client
        
        // For demonstration, we'll just set success flag
        $success = true;
        
        // Optionally, you can include a form handler file:
        // include 'includes/process_contact.php';
        
        // Clear form fields after successful submission
        $name = $email = $phone = $service = $message = '';
    }
}

$pageTitle = "Contact";
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="hero" style="padding: var(--spacing-lg) var(--spacing-md);">
    <div class="hero-content">
        <h1>Contact Us</h1>
        <p>Get in touch with our legal team today</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="contact-container">
            <!-- Contact Form -->
            <div>
                <h2>Send Us a Message</h2>
                <p style="margin-bottom: var(--spacing-md);">Fill out the form below and we'll get back to you as soon as possible.</p>
                
                <?php if ($success): ?>
                    <div class="success-message">
                        <strong>Thank you!</strong> Your message has been sent successfully. We'll contact you within 24 hours.
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
                    <div class="form-group">
                        <label for="name">Full Name <span style="color: var(--error-color);">*</span></label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="<?php echo htmlspecialchars($name); ?>"
                            required
                            aria-describedby="<?php echo isset($errors['name']) ? 'name-error' : ''; ?>"
                        >
                        <?php if (isset($errors['name'])): ?>
                            <div class="error-message" id="name-error"><?php echo htmlspecialchars($errors['name']); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address <span style="color: var(--error-color);">*</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="<?php echo htmlspecialchars($email); ?>"
                            required
                            aria-describedby="<?php echo isset($errors['email']) ? 'email-error' : ''; ?>"
                        >
                        <?php if (isset($errors['email'])): ?>
                            <div class="error-message" id="email-error"><?php echo htmlspecialchars($errors['email']); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number <span style="color: var(--error-color);">*</span></label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="<?php echo htmlspecialchars($phone); ?>"
                            required
                            placeholder="(555) 123-4567"
                            aria-describedby="<?php echo isset($errors['phone']) ? 'phone-error' : ''; ?>"
                        >
                        <?php if (isset($errors['phone'])): ?>
                            <div class="error-message" id="phone-error"><?php echo htmlspecialchars($errors['phone']); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Area <span style="color: var(--error-color);">*</span></label>
                        <select 
                            id="service" 
                            name="service" 
                            required
                            aria-describedby="<?php echo isset($errors['service']) ? 'service-error' : ''; ?>"
                        >
                            <option value="">Select a service area...</option>
                            <option value="corporate" <?php echo $service === 'corporate' ? 'selected' : ''; ?>>Corporate Law</option>
                            <option value="family" <?php echo $service === 'family' ? 'selected' : ''; ?>>Family Law</option>
                            <option value="criminal" <?php echo $service === 'criminal' ? 'selected' : ''; ?>>Criminal Defense</option>
                            <option value="real-estate" <?php echo $service === 'real-estate' ? 'selected' : ''; ?>>Real Estate Law</option>
                            <option value="civil" <?php echo $service === 'civil' ? 'selected' : ''; ?>>Civil Litigation</option>
                            <option value="other" <?php echo $service === 'other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                        <?php if (isset($errors['service'])): ?>
                            <div class="error-message" id="service-error"><?php echo htmlspecialchars($errors['service']); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message <span style="color: var(--error-color);">*</span></label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="6"
                            required
                            aria-describedby="<?php echo isset($errors['message']) ? 'message-error' : ''; ?>"
                        ><?php echo htmlspecialchars($message); ?></textarea>
                        <?php if (isset($errors['message'])): ?>
                            <div class="error-message" id="message-error"><?php echo htmlspecialchars($errors['message']); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>We're here to help you with your legal needs. Reach out to us through any of the following methods:</p>
                
                <div style="margin-top: var(--spacing-md);">
                    <h3>Office Location</h3>
                    <p>
                        <strong>Address:</strong><br>
                        123 Legal Avenue, Suite 500<br>
                        City, State 12345
                    </p>
                </div>
                
                <div style="margin-top: var(--spacing-md);">
                    <h3>Contact Details</h3>
                    <p><strong>Phone:</strong> (555) 123-4567</p>
                    <p><strong>Email:</strong> info@lombelegal.com</p>
                    <p><strong>Fax:</strong> (555) 123-4568</p>
                </div>
                
                <div style="margin-top: var(--spacing-md);">
                    <h3>Office Hours</h3>
                    <p>
                        <strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM<br>
                        <strong>Saturday:</strong> By Appointment<br>
                        <strong>Sunday:</strong> Closed
                    </p>
                </div>
                
                <div style="margin-top: var(--spacing-md);">
                    <h3>Emergency Contact</h3>
                    <p>For urgent legal matters outside business hours, please call our emergency line: <strong>(555) 123-4569</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<section class="section" style="background-color: var(--bg-light); padding: var(--spacing-md) 0;">
    <div class="container">
        <div style="background-color: var(--border-color); height: 300px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--text-light);">
            <p>Map Integration Placeholder<br><small>(In production, integrate Google Maps or similar service)</small></p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
