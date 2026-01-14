# Lombe Legal Firm Website

A professional, responsive website for a legal firm built with HTML, CSS, and PHP.

## Project Structure

```
lombe project/
├── css/
│   └── style.css          # Main stylesheet with responsive design
├── includes/
│   ├── header.php         # Header and navigation
│   ├── footer.php         # Footer section
│   └── process_contact.php # Contact form handler (template)
├── index.php              # Home page
├── about.php              # About Us page
├── services.php           # Services page
├── contact.php            # Contact page with form
└── README.md              # This file
```

## Features

- **Responsive Design**: Mobile-first approach with breakpoints for tablets and desktops
- **Modern UI**: Clean, professional design with trust-oriented color palette
- **Semantic HTML5**: Proper use of semantic elements for accessibility and SEO
- **CSS Flexbox/Grid**: Modern layout techniques for responsive design
- **PHP Form Handling**: Contact form with server-side validation
- **No Frameworks**: Pure HTML, CSS, and PHP implementation

## Pages

1. **Home (index.php)**
   - Hero section with call-to-action
   - Firm overview with key benefits
   - Services summary grid
   - Call-to-action section

2. **About Us (about.php)**
   - Firm history and story
   - Mission and values
   - Team overview

3. **Services (services.php)**
   - Detailed practice areas:
     - Corporate Law
     - Family Law
     - Criminal Defense
     - Real Estate Law
     - Civil Litigation
   - Additional services

4. **Contact (contact.php)**
   - Contact form with validation
   - Contact information
   - Office hours
   - Map placeholder

## Color Palette

- **Primary**: Deep Navy Blue (#1a3a5f) - Trust, professionalism
- **Secondary**: Medium Blue (#2c5f8d) - Stability
- **Accent**: Gold (#d4af37) - Prestige, excellence
- **Text**: Dark Gray (#2c3e50) for headings, Medium Gray (#5a6c7d) for body

## Typography

- **Headings**: Georgia, Times New Roman (serif) - Traditional, trustworthy
- **Body**: Arial, Helvetica (sans-serif) - Modern, readable

## Setup Instructions

1. **XAMPP Setup**:
   - Place the project folder in `C:\xampp\htdocs\`
   - Ensure Apache is running in XAMPP Control Panel

2. **Access the Website**:
   - Open your browser and navigate to: `http://localhost/lombe project/`
   - Or: `http://localhost/lombe%20project/`

3. **Contact Form**:
   - The contact form includes validation
   - For production use, configure email settings in `includes/process_contact.php`
   - Uncomment and configure the mail() function or use a library like PHPMailer

## Browser Compatibility

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Responsive design tested on mobile, tablet, and desktop viewports

## Customization

### Updating Contact Information
Edit the contact details in:
- `includes/footer.php` (footer section)
- `contact.php` (contact page)

### Adding New Services
Edit `services.php` to add or modify service areas.

### Styling Changes
All styles are in `css/style.css`. CSS variables are defined at the top for easy customization.

## Notes

- The contact form handler (`includes/process_contact.php`) is provided as a template
- For production, implement proper email sending (PHPMailer recommended)
- Consider adding a database to store form submissions
- Map integration placeholder is included in contact.php

## License

This project is provided as-is for educational and commercial use.
