<?php
/**
 * About Us Page
 * Provides information about the firm, its history, and team
 */
$pageTitle = "About Us";
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="hero" style="padding: var(--spacing-lg) var(--spacing-md);">
    <div class="hero-content">
        <h1>About Lombe Legal Firm</h1>
        <p>Excellence in Legal Representation Since 1995</p>
    </div>
</section>

<!-- About Content Section -->
<section class="section">
    <div class="container">
        <div class="about-content">
            <div>
                <h2>Our Story</h2>
                <p>Founded in 1995, Lombe Legal Firm has been a trusted name in legal services for over 25 years. What started as a small practice has grown into a full-service law firm serving clients across the region.</p>
                <p>Our commitment to excellence, integrity, and client satisfaction has been the cornerstone of our practice. We believe in building long-term relationships with our clients, understanding their unique needs, and providing tailored legal solutions.</p>
                <p>Throughout our history, we have successfully represented thousands of clients in various legal matters, from complex corporate transactions to sensitive family law cases. Our track record speaks to our dedication and expertise.</p>
            </div>
            <div class="about-image">
                <div style="text-align: center; padding: var(--spacing-md);">
                    <p style="font-size: 4rem; margin-bottom: var(--spacing-sm);">⚖️</p>
                    <p>Professional Legal Excellence</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values Section -->
<section class="section" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="section-title">
            <h2>Our Mission & Values</h2>
        </div>
        <div class="grid grid-2">
            <div class="card">
                <h3>Our Mission</h3>
                <p>To provide exceptional legal representation that empowers our clients to achieve their goals while maintaining the highest standards of professionalism, ethics, and service excellence.</p>
            </div>
            <div class="card">
                <h3>Our Values</h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li style="padding: var(--spacing-xs) 0; padding-left: 1.5rem; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--accent-color);">✓</span>
                        <strong>Integrity:</strong> Honest, ethical, and transparent in all our dealings
                    </li>
                    <li style="padding: var(--spacing-xs) 0; padding-left: 1.5rem; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--accent-color);">✓</span>
                        <strong>Excellence:</strong> Commitment to the highest quality legal services
                    </li>
                    <li style="padding: var(--spacing-xs) 0; padding-left: 1.5rem; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--accent-color);">✓</span>
                        <strong>Client Focus:</strong> Your success is our priority
                    </li>
                    <li style="padding: var(--spacing-xs) 0; padding-left: 1.5rem; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--accent-color);">✓</span>
                        <strong>Innovation:</strong> Adapting to changing legal landscapes
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Our Team</h2>
            <p>Experienced professionals dedicated to your success</p>
        </div>
        <div class="grid grid-3">
            <div class="card">
                <h3>Senior Partners</h3>
                <p>Our senior partners bring decades of combined experience and have been instrumental in building the firm's reputation for excellence.</p>
            </div>
            <div class="card">
                <h3>Associate Attorneys</h3>
                <p>Our team of associate attorneys works diligently on every case, bringing fresh perspectives and dedicated advocacy to our clients.</p>
            </div>
            <div class="card">
                <h3>Support Staff</h3>
                <p>Our paralegals and administrative staff ensure smooth operations and provide exceptional support throughout your legal journey.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background-color: var(--primary-color); color: var(--bg-white);">
    <div class="container text-center">
        <h2 style="color: var(--bg-white);">Let's Work Together</h2>
        <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: var(--spacing-md);">Experience the difference that dedicated legal representation can make.</p>
        <a href="contact.php" class="btn btn-primary">Schedule a Consultation</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
