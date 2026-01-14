<?php
/**
 * Home Page
 * Features: Hero section, firm overview, services summary, and CTA
 */
$pageTitle = "Home";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Expert Legal Representation You Can Trust</h1>
        <p>With decades of combined experience, Lombe Legal Firm provides comprehensive legal services tailored to your unique needs. We are committed to achieving the best possible outcomes for our clients.</p>
        <div>
            <a href="contact.php" class="btn btn-primary">Schedule a Consultation</a>
            <a href="services.php" class="btn btn-secondary">Our Services</a>
        </div>
    </div>
</section>

<!-- Firm Overview Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Lombe Legal Firm</h2>
        </div>
        <div class="grid grid-3">
            <div class="card">
                <div class="card-icon">⚖️</div>
                <h3>Experienced Attorneys</h3>
                <p>Our team of seasoned lawyers brings years of expertise across multiple practice areas, ensuring you receive knowledgeable representation.</p>
            </div>
            <div class="card">
                <div class="card-icon">🤝</div>
                <h3>Client-Focused Approach</h3>
                <p>We prioritize your needs and goals, providing personalized attention and clear communication throughout your legal journey.</p>
            </div>
            <div class="card">
                <div class="card-icon">🏆</div>
                <h3>Proven Track Record</h3>
                <p>With a history of successful cases and satisfied clients, we have built a reputation for excellence and results.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Summary Section -->
<section class="section" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="section-title">
            <h2>Our Practice Areas</h2>
            <p>Comprehensive legal services across multiple specialties</p>
        </div>
        <div class="grid grid-3">
            <div class="card">
                <h3>Corporate Law</h3>
                <p>Business formation, contracts, mergers & acquisitions, and corporate governance.</p>
                <a href="services.php#corporate">Learn More →</a>
            </div>
            <div class="card">
                <h3>Family Law</h3>
                <p>Divorce, child custody, adoption, prenuptial agreements, and family mediation.</p>
                <a href="services.php#family">Learn More →</a>
            </div>
            <div class="card">
                <h3>Criminal Defense</h3>
                <p>DUI defense, white-collar crimes, drug offenses, and criminal appeals.</p>
                <a href="services.php#criminal">Learn More →</a>
            </div>
            <div class="card">
                <h3>Real Estate Law</h3>
                <p>Property transactions, zoning issues, landlord-tenant disputes, and real estate litigation.</p>
                <a href="services.php#real-estate">Learn More →</a>
            </div>
            <div class="card">
                <h3>Civil Litigation</h3>
                <p>Contract disputes, personal injury, employment law, and commercial litigation.</p>
                <a href="services.php#civil">Learn More →</a>
            </div>
            <div class="card">
                <h3>Estate Planning</h3>
                <p>Wills, trusts, probate administration, and estate tax planning.</p>
                <a href="services.php">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today for a confidential consultation. We're here to help you navigate your legal challenges with confidence.</p>
        </div>
        <div class="text-center">
            <a href="contact.php" class="btn btn-primary">Contact Us Today</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
