<?php
/**
 * Services Page
 * Detailed information about all practice areas
 */
$pageTitle = "Services";
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="hero" style="padding: var(--spacing-lg) var(--spacing-md);">
    <div class="hero-content">
        <h1>Our Legal Services</h1>
        <p>Comprehensive legal solutions across multiple practice areas</p>
    </div>
</section>

<!-- Services Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Practice Areas</h2>
            <p>Expert representation tailored to your specific legal needs</p>
        </div>

        <!-- Corporate Law -->
        <div class="service-card" id="corporate" style="margin-bottom: var(--spacing-lg);">
            <h2>Corporate Law</h2>
            <p>We provide comprehensive corporate legal services to businesses of all sizes, from startups to established enterprises.</p>
            <h3>Our Corporate Law Services Include:</h3>
            <ul>
                <li>Business formation and entity selection (LLC, Corporation, Partnership)</li>
                <li>Corporate governance and compliance</li>
                <li>Mergers and acquisitions</li>
                <li>Contract drafting and negotiation</li>
                <li>Intellectual property protection</li>
                <li>Employment law and HR compliance</li>
                <li>Commercial transactions</li>
                <li>Business dispute resolution</li>
            </ul>
            <p style="margin-top: var(--spacing-sm);"><strong>Why Choose Us:</strong> Our corporate law team understands the complexities of business operations and provides strategic legal counsel to help your business thrive.</p>
        </div>

        <!-- Family Law -->
        <div class="service-card" id="family" style="margin-bottom: var(--spacing-lg);">
            <h2>Family Law</h2>
            <p>We handle sensitive family legal matters with compassion, discretion, and expertise, helping you navigate difficult transitions.</p>
            <h3>Our Family Law Services Include:</h3>
            <ul>
                <li>Divorce and legal separation</li>
                <li>Child custody and visitation rights</li>
                <li>Child support and spousal support</li>
                <li>Prenuptial and postnuptial agreements</li>
                <li>Adoption and guardianship</li>
                <li>Domestic violence protection</li>
                <li>Mediation and collaborative law</li>
                <li>Modification of court orders</li>
            </ul>
            <p style="margin-top: var(--spacing-sm);"><strong>Why Choose Us:</strong> We approach family law matters with empathy and understanding, working to achieve outcomes that protect your interests and those of your loved ones.</p>
        </div>

        <!-- Criminal Defense -->
        <div class="service-card" id="criminal" style="margin-bottom: var(--spacing-lg);">
            <h2>Criminal Defense</h2>
            <p>If you're facing criminal charges, you need experienced defense attorneys who will fight vigorously for your rights and freedom.</p>
            <h3>Our Criminal Defense Services Include:</h3>
            <ul>
                <li>DUI/DWI defense</li>
                <li>Drug crimes defense</li>
                <li>White-collar crimes</li>
                <li>Assault and battery charges</li>
                <li>Theft and property crimes</li>
                <li>Criminal appeals</li>
                <li>Expungement and record sealing</li>
                <li>Traffic violations</li>
            </ul>
            <p style="margin-top: var(--spacing-sm);"><strong>Why Choose Us:</strong> Our criminal defense attorneys have a proven track record of achieving favorable outcomes, from case dismissals to reduced charges and sentences.</p>
        </div>

        <!-- Real Estate Law -->
        <div class="service-card" id="real-estate" style="margin-bottom: var(--spacing-lg);">
            <h2>Real Estate Law</h2>
            <p>Whether you're buying, selling, or dealing with property disputes, our real estate attorneys ensure your transactions are smooth and legally sound.</p>
            <h3>Our Real Estate Law Services Include:</h3>
            <ul>
                <li>Residential and commercial property transactions</li>
                <li>Real estate contract review and negotiation</li>
                <li>Title examination and insurance</li>
                <li>Zoning and land use issues</li>
                <li>Landlord-tenant disputes</li>
                <li>Property tax appeals</li>
                <li>Real estate litigation</li>
                <li>Foreclosure defense</li>
            </ul>
            <p style="margin-top: var(--spacing-sm);"><strong>Why Choose Us:</strong> Real estate transactions are significant investments. We ensure all legal aspects are properly handled to protect your interests.</p>
        </div>

        <!-- Civil Litigation -->
        <div class="service-card" id="civil" style="margin-bottom: var(--spacing-lg);">
            <h2>Civil Litigation</h2>
            <p>When disputes arise, our litigation team provides aggressive representation to protect your rights and achieve favorable resolutions.</p>
            <h3>Our Civil Litigation Services Include:</h3>
            <ul>
                <li>Contract disputes and breach of contract</li>
                <li>Personal injury claims</li>
                <li>Employment law disputes</li>
                <li>Commercial litigation</li>
                <li>Construction disputes</li>
                <li>Debt collection and creditor rights</li>
                <li>Appeals and post-trial motions</li>
                <li>Alternative dispute resolution (ADR)</li>
            </ul>
            <p style="margin-top: var(--spacing-sm);"><strong>Why Choose Us:</strong> Our litigators are skilled negotiators and trial attorneys who work to resolve disputes efficiently, whether through settlement or trial.</p>
        </div>

        <!-- Additional Services -->
        <div class="service-card">
            <h2>Additional Services</h2>
            <p>We also provide expertise in:</p>
            <ul>
                <li>Estate planning and probate</li>
                <li>Immigration law</li>
                <li>Tax law and planning</li>
                <li>Bankruptcy law</li>
                <li>Employment law</li>
            </ul>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background-color: var(--primary-color); color: var(--bg-white);">
    <div class="container text-center">
        <h2 style="color: var(--bg-white);">Need Legal Assistance?</h2>
        <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: var(--spacing-md);">Contact us today to discuss your legal needs and learn how we can help.</p>
        <a href="contact.php" class="btn btn-primary">Get in Touch</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
