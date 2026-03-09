<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saguaro Sync - Brutal Digital Transformation</title>
  <link rel="icon" href="favicon.ico">
  <style>
    :root {
      --primary-color: #6031cd;
      --primary-light-color: #a28bd9;
      --primary-dark-color: #43228f;
      --secondary-color: #9e4bb3;
      --accent-color: #a8d246;
      --hero-bg-color: #1a1a2e;
      --surface-color: #fbfbfb;
      --text-main-color: #111111;
      --text-light-color: #ffffff;
      --border-radius: 16px;
      --section-spacing: 80px;
    }

    /* Base Brutalist Styles */
    body {
      font-family: 'Roboto Mono', monospace;
      color: var(--text-main-color);
      margin: 0;
      background-color: var(--surface-color);
      line-height: 1.6;
      font-weight: 400; /* bodyWeight */
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Crimson Pro', serif;
      font-weight: 700; /* headingWeight */
      color: var(--text-main-color);
      margin-top: 0;
      margin-bottom: 24px;
    }

    h1 { font-size: 3em; }
    h2 { font-size: 2.5em; }
    h3 { font-size: 2em; }
    h4 { font-size: 1.5em; }

    a {
      color: var(--primary-color);
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    section {
      padding: var(--section-spacing) 0;
    }

    /* Header */
    .header-section {
      background-color: var(--surface-color);
      color: var(--text-main-color);
      padding: 20px 0;
      border-bottom: 8px solid var(--primary-dark-color); /* Brutalist thick bottom border */
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }
    .header-section .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .header-logo {
      font-family: 'Crimson Pro', serif;
      font-weight: 700;
      font-size: 1.8em;
      color: var(--text-main-color);
      text-transform: uppercase;
      flex-grow: 1;
      text-align: center;
      order: 2; /* Centered on mobile */
      width: 100%; /* Take full width on mobile */
      margin-bottom: 10px;
    }

    .main-nav {
      list-style: none;
      margin: 0;
      padding: 0;
      display: none; /* Hidden by default on mobile */
      width: 100%;
      order: 3;
      text-align: center;
    }
    .main-nav.active {
      display: block; /* Show when active */
    }
    .main-nav li {
      display: block;
      margin: 10px 0;
    }
    .main-nav a {
      color: var(--text-main-color);
      text-decoration: none;
      padding: 8px 15px;
      border: 1px solid transparent;
      transition: all 0.3s ease;
      display: block;
    }
    .main-nav a:hover, .main-nav a:focus {
      background-color: var(--primary-light-color);
      color: var(--text-light-color);
      border-color: var(--primary-color);
    }

    .cta-button-nav {
      background-color: var(--accent-color);
      color: var(--text-light-color);
      padding: 10px 20px;
      border: 2px solid var(--accent-color);
      cursor: pointer;
      font-size: 1em;
      font-weight: bold;
      text-transform: uppercase;
      transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      display: block;
      width: fit-content;
      margin: 15px auto 0;
      text-align: center;
      order: 4;
    }
    .cta-button-nav:hover {
      background-color: var(--primary-dark-color);
      border-color: var(--primary-dark-color);
      color: var(--text-light-color);
    }

    .hamburger {
      display: block; /* Always visible for mobile */
      cursor: pointer;
      font-size: 2em;
      color: var(--text-main-color);
      order: 1;
      margin-right: 15px;
    }

    @media (min-width: 768px) {
      .header-logo {
        flex-grow: 0;
        width: auto;
        order: 2; /* Centered between nav links */
        margin-bottom: 0;
      }
      .main-nav {
        display: flex; /* Display as flex on larger screens */
        justify-content: center;
        flex-grow: 1;
        width: auto;
        order: 1; /* Left side */
      }
      .main-nav li {
        display: inline-block;
        margin: 0 10px;
      }
      .main-nav li:first-child { margin-left: 0; }
      .main-nav li:last-child { margin-right: 0; }

      .cta-button-nav {
        order: 3; /* Right side */
        margin: 0 0 0 20px;
      }
      .hamburger {
        display: none; /* Hide hamburger on larger screens */
      }
    }

    @media (min-width: 1024px) {
      .main-nav {
         justify-content: flex-end; /* Push links to align with CTA on small headers */
      }
      .main-nav li {
        margin: 0 15px;
      }
      .header-section .container {
        justify-content: space-between;
      }
       .header-logo {
        flex-grow: 0;
        margin: 0;
      }
    }

    /* Hero Section */
    .hero {
      background-color: var(--hero-bg-color);
      color: var(--text-light-color);
      text-align: center;
      padding: var(--section-spacing) 0;
      position: relative;
      overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)); /* Dark overlay for text readability */
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .hero h1 {
      color: var(--text-light-color);
      font-size: 2.8em;
      margin-bottom: 20px;
      line-height: 1.1;
      text-transform: uppercase;
    }
    .hero p {
      font-size: 1.2em;
      margin-bottom: 40px;
      opacity: 0.9;
    }
    .hero-cta {
      background-color: var(--accent-color);
      color: var(--text-main-color);
      padding: 18px 36px;
      border: none;
      cursor: pointer;
      font-size: 1.2em;
      font-weight: bold;
      text-transform: uppercase;
      transition: background-color 0.3s ease, transform 0.3s ease;
      display: inline-block;
      border-radius: var(--border-radius);
    }
    .hero-cta:hover {
      background-color: var(--primary-dark-color);
      transform: translateY(-3px);
      color: var(--text-light-color);
    }
    .hero-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: grayscale(100%) brightness(0.6); /* Brutalist image effect */
      z-index: 0;
      transition: filter 0.5s ease;
    }
    .hero:hover .hero-image {
        filter: grayscale(0%) brightness(0.8);
    }

    /* Services Section */
    .services-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 30px;
      margin-top: 50px;
    }
    @media (min-width: 768px) {
      .services-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (min-width: 1024px) {
      .services-grid {
        grid-template-columns: repeat(4, 1fr); /* 4-column grid for desktop */
      }
    }

    .service-card {
      background-color: var(--surface-color);
      padding: 30px;
      border-radius: var(--border-radius);
      border: 1px solid var(--primary-color); /* Thin border */
      text-align: center;
      transition: transform 0.3s ease; /* hoverEffect: scale(1.02) */
      box-shadow: none; /* No shadow */
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .service-card:hover {
      transform: scale(1.02);
      border-color: var(--secondary-color);
    }
    .service-card-icon {
      width: 128px;
      height: 128px;
      border-radius: 50%; /* iconContainer: 50% border-radius (circle) */
      background-color: var(--primary-light-color);
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 25px;
      overflow: hidden; /* Ensure image is clipped to circle */
      border: 3px solid var(--primary-color);
    }
    .service-card-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%; /* Clip image inside */
      filter: grayscale(100%);
      transition: filter 0.3s ease;
    }
    .service-card:hover .service-card-icon img {
        filter: grayscale(0%);
    }

    .service-card h3 {
      font-size: 1.5em;
      color: var(--primary-dark-color);
      margin-bottom: 15px;
      text-transform: uppercase;
    }
    .service-card p {
      font-size: 0.95em;
      color: var(--text-main-color);
      flex-grow: 1; /* Allow content to push to bottom */
    }

    /* Approach Section (Editorial) */
    .approach-section {
      background-color: var(--primary-dark-color);
      color: var(--text-light-color);
      overflow: hidden; /* Clear floats */
    }
    .approach-section h2 {
      text-align: center;
      color: var(--accent-color);
      margin-bottom: 60px;
    }

    .approach-content {
      display: flex;
      flex-direction: column;
      gap: 40px;
    }
    .approach-text-block {
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.2);
      border-left: 5px solid var(--accent-color);
    }
    .approach-text-block p {
      font-family: 'Roboto Mono', monospace;
      margin-bottom: 15px;
      font-size: 1.1em;
    }
    .approach-image-wrapper {
      position: relative;
      width: 100%;
      height: 300px; /* Fixed height for image area on mobile */
      border: 5px solid var(--secondary-color);
      overflow: hidden;
    }
    .approach-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      filter: grayscale(100%) contrast(1.2);
      transition: filter 0.5s ease-in-out;
    }
    .approach-image-wrapper:hover .approach-image {
        filter: grayscale(0%) contrast(1);
    }

    @media (min-width: 768px) {
      .approach-content {
        flex-direction: row;
        align-items: flex-start;
      }
      .approach-text {
        flex: 1;
        padding-right: 40px;
      }
      .approach-image-wrapper {
        flex: 1;
        min-width: 40%;
        height: auto; /* Auto height on larger screens */
      }
    }

    /* Impact Section (Testimonial) */
    .impact-section {
      background-color: var(--surface-color);
      text-align: center;
    }
    .testimonial-card {
      max-width: 900px;
      margin: 0 auto;
      background-color: var(--text-light-color);
      padding: 40px;
      border-radius: var(--border-radius);
      border: 2px solid var(--primary-color);
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden; /* For pseudo-elements */
      position: relative;
    }
    .testimonial-card:hover {
      transform: translateY(-5px) scale(1.01);
      box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    }
    .testimonial-card::before {
        content: '“';
        font-family: 'Crimson Pro', serif;
        font-size: 8em;
        color: var(--primary-light-color);
        position: absolute;
        top: -30px;
        left: 20px;
        opacity: 0.2;
        z-index: 0;
    }

    .testimonial-quote {
      font-family: 'Crimson Pro', serif;
      font-size: 2em;
      font-style: italic;
      color: var(--primary-dark-color);
      margin-bottom: 30px;
      line-height: 1.3;
      position: relative;
      z-index: 1;
    }
    .testimonial-author-info {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 30px;
    }
    .testimonial-author-image {
      width: 128px;
      height: 128px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 4px solid var(--accent-color);
      filter: grayscale(80%) brightness(0.8);
      transition: filter 0.4s ease;
    }
    .testimonial-card:hover .testimonial-author-image {
        filter: grayscale(0%) brightness(1);
    }
    .testimonial-author-name {
      font-weight: bold;
      font-size: 1.2em;
      color: var(--text-main-color);
      margin-bottom: 5px;
    }
    .testimonial-author-role {
      color: var(--secondary-color);
      font-size: 0.9em;
      text-transform: uppercase;
    }

    /* Contact Footer */
    .contact-footer {
      background-color: var(--hero-bg-color); /* Dark stark background */
      color: var(--text-light-color);
      padding: var(--section-spacing) 0 40px 0;
      text-align: center;
      border-top: 8px solid var(--accent-color); /* Brutalist top border */
    }
    .contact-footer h2 {
      font-family: 'Crimson Pro', serif;
      color: var(--accent-color);
      font-size: 2.2em;
      margin-bottom: 20px;
    }
    .contact-footer p {
      font-family: 'Roboto Mono', monospace;
      margin-bottom: 10px;
      font-size: 1.1em;
      opacity: 0.9;
    }
    .contact-footer .tagline {
      font-style: italic;
      margin-bottom: 30px;
      font-size: 1.3em;
      color: var(--primary-light-color);
    }
    .contact-info {
      margin-bottom: 40px;
    }
    .contact-info a {
      color: var(--primary-light-color);
      text-decoration: none;
      display: block;
      margin-bottom: 8px;
      transition: color 0.3s ease;
    }
    .contact-info a:hover {
      color: var(--accent-color);
      text-decoration: underline;
    }
    .contact-cta-footer {
      background-color: var(--accent-color);
      color: var(--text-main-color);
      padding: 18px 36px;
      border: none;
      cursor: pointer;
      font-size: 1.2em;
      font-weight: bold;
      text-transform: uppercase;
      transition: background-color 0.3s ease, transform 0.3s ease;
      display: inline-block;
      border-radius: var(--border-radius);
      margin-bottom: 50px;
    }
    .contact-cta-footer:hover {
      background-color: var(--primary-dark-color);
      transform: translateY(-3px);
      color: var(--text-light-color);
    }

    .footer-secondary-links {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .footer-secondary-links a {
      color: var(--primary-light-color);
      text-decoration: none;
      font-size: 0.9em;
    }
    .footer-secondary-links a:hover {
      color: var(--accent-color);
      text-decoration: underline;
    }
    .copyright {
      margin-top: 20px;
      font-size: 0.85em;
      color: var(--primary-light-color);
      opacity: 0.7;
    }

    /* Cookie Consent */
    .cookie-consent-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: var(--primary-dark-color);
      color: var(--text-light-color);
      padding: 15px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      font-size: 0.9em;
      z-index: 1000;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
    }
    .cookie-consent-banner p {
      margin: 0 0 10px 0;
      padding-right: 20px;
    }
    .cookie-consent-banner button {
      background-color: var(--accent-color);
      color: var(--text-main-color);
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 8px;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .cookie-consent-banner button:hover {
      background-color: var(--secondary-color);
      transform: translateY(-1px);
    }
    @media (min-width: 768px) {
      .cookie-consent-banner {
        flex-direction: row;
      }
      .cookie-consent-banner p {
        margin: 0;
        text-align: left;
      }
      .cookie-consent-banner button {
        flex-shrink: 0;
      }
    }
  </style>
</head>
<body>
  <header class="header-section">
    <div class="container">
      <button class="hamburger" aria-label="Toggle navigation">&#9776;</button>
      <div class="header-logo">Saguaro Sync</div>
      <nav>
        <ul class="main-nav">
          <li><a href="#services">Services</a></li>
          <li><a href="#approach">Approach</a></li>
          <li><a href="#impact">Impact</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#contact" class="cta-button-nav">Start Project</a></li>
        </ul>
      </nav>
    </div>
  </header>
<main>
    <section id="hero" class="hero">
      <img src="images/hero-server-architecture.jpeg" alt="Wide shot of a modern, sleek data center representing cloud optimization and data analytics" class="hero-image" width="1280" height="768">
      <div class="hero-content">
        <h1>Shatter the Status Quo with Saguaro Sync</h1>
        <p>Raw engineering power. Uncompromising digital transformation. We optimize clouds, mine data, and forge custom software with brutal efficiency.</p>
        <a href="#services" class="hero-cta">Engage Systems</a>
      </div>
    </section>

    <section id="services" class="services-section">
      <div class="container">
        <h2 style="text-align: center; color: var(--primary-dark-color);">Consulting Arsenal</h2>
        <div class="services-grid">
          <div class="service-card">
            <div class="service-card-icon">
              
              <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C8.686 2 6 4.686 6 8C6 11.314 9.314 15 12 22C14.686 15 18 11.314 18 8C18 4.686 15.314 2 12 2Z" fill="var(--hero-bg-color)"/>
                <path d="M17.5 9H13V4.5C13 4.224 12.776 4 12.5 4H11.5C11.224 4 11 4.224 11 4.5V9H6.5C6.224 9 6 9.224 6 9.5V10.5C6 10.776 6.224 11 6.5 11H11V15.5C11 15.776 11.224 16 11.5 16H12.5C12.776 16 13 15.776 13 15.5V11H17.5C17.776 11 18 10.776 18 10.5V9.5C18 9.224 17.776 9 17.5 9Z" fill="var(--text-light-color)" />
              </svg>
            </div>
            <h3>Cloud Optimization</h3>
            <p>Ruthless reduction of overhead. We restructure your cloud architecture for maximum throughput and minimal financial bleed.</p>
          </div>
          <div class="service-card">
            <div class="service-card-icon">
              
              <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 10V18C15 18.552 14.552 19 14 19H10C9.448 19 9 18.552 9 18V10C9 9.448 9.448 9 10 9H14C14.552 9 15 9.448 15 10Z" fill="var(--hero-bg-color)"/>
                <path d="M19 4V12C19 12.552 18.552 13 18 13H16C15.448 13 15 12.552 15 12V4C15 3.448 15.448 3 16 3H18C18.552 3 19 3.448 19 4Z" fill="var(--text-light-color)" />
                <path d="M22 15V20C22 20.552 21.552 21 21 21H17C16.448 21 16 20.552 16 20V15C16 14.448 16.448 14 17 14H21C21.552 14 22 14.448 22 15Z" fill="var(--hero-bg-color)"/>
                <path d="M5 13V20C5 20.552 4.552 21 4 21H3C2.448 21 2 20.552 2 20V13C2 12.448 2.448 12 3 12H4C4.552 12 5 12.448 5 13Z" fill="var(--text-light-color)" />
                <path d="M8 8V18C8 18.552 7.552 19 7 19H6C5.448 19 5 18.552 5 18V8C5 7.448 5.448 7 6 7H7C7.552 7 8 7.448 8 8Z" fill="var(--hero-bg-color)"/>
                <path d="M11 6V10C11 10.552 10.552 11 10 11H9C8.448 11 8 10.552 8 10V6C8 5.448 8.448 5 9 5H10C10.552 5 11 5.448 11 6Z" fill="var(--text-light-color)" />
              </svg>
            </div>
            <h3>Data Analytics</h3>
            <p>Extracting brutal truths from raw data. Predictive modeling and deep analytics to dominate your market sector.</p>
          </div>
          <div class="service-card">
            <div class="service-card-icon">
              
              <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 6C14 4.895 13.105 4 12 4C10.895 4 10 4.895 10 6C10 7.105 10.895 8 12 8C13.105 8 14 7.105 14 6Z" fill="var(--hero-bg-color)"/>
                <path d="M19 14.717V17C19 18.105 18.105 19 17 19H7C5.895 19 5 18.105 5 17V14.717C5 14.153 5.448 13.684 6 13.684H18C18.552 13.684 19 14.153 19 14.717Z" fill="var(--text-light-color)" />
                <path d="M14 10C14 8.895 13.105 8 12 8C10.895 8 10 8.895 10 10C10 11.105 10.895 12 12 12C13.105 12 14 11.105 14 10Z" fill="var(--hero-bg-color)"/>
                <path d="M19 11C19 9.895 18.105 9 17 9C15.895 9 15 9.895 15 11C15 12.105 15.895 13 17 13C18.105 13 19 12.105 19 11Z" fill="var(--text-light-color)"/>
              </svg>
            </div>
            <h3>Custom Software</h3>
            <p>Forged in code. Bespoke software development bypassing bloated frameworks for pure, unadulterated performance.</p>
          </div>
          <div class="service-card">
            <div class="service-card-icon">
              
              <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM11 11V6C11 5.448 11.448 5 12 5C12.552 5 13 5.448 13 6V11H18C18.552 11 19 11.448 19 12C19 12.552 18.552 13 18 13H13V18C13 18.552 12.552 19 12 19C11.448 19 11 18.552 11 18V13H6C5.448 13 5 12.552 5 12C5 11.448 5.448 11 6 11H11Z" fill="var(--hero-bg-color)"/>
                <path d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM11 11V6C11 5.448 11.448 5 12 5C12.552 5 13 5.448 13 6V11H18C18.552 11 19 11.448 19 12C19 12.552 18.552 13 18 13H13V18C13 18.552 12.552 19 12 19C11.448 19 11 18.552 11 18V13H6C5.448 13 5 12.552 5 12C5 11.448 5.448 11 6 11H11Z" fill="var(--text-light-color)"/>
              </svg>
            </div>
            <h3>Digital Strategy</h3>
            <p>Complete infrastructural overhaul. We architect digital transformation blueprints that dismantle legacy constraints.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="approach" class="approach-section">
      <div class="container">
        <h2>Our Execution Protocol</h2>
        <div class="approach-content">
          <div class="approach-text">
            <div class="approach-text-block">
              <p>At Saguaro Sync, we reject incremental change. True digital transformation requires a ground-up reinvention of your technological stack. Our process is designed for precision, speed, and undeniable impact.</p>
            </div>
            <div class="approach-text-block">
              <p>Phase 01: Audit & Expose. We deploy diagnostic scripts and architecture reviews to map your operational bottlenecks. Every inefficiency is meticulously documented, leaving no weakness unexposed. This is the brutal truth-seeking phase.</p>
            </div>
            <div class="approach-text-block">
              <p>Phase 02: Architect & Align. Using raw data analytics, we propose a streamlined, platform-agnostic topology. Our solutions are custom-engineered for your specific challenges, not out-of-the-box compromises. Architectural integrity is paramount.</p>
            </div>
            <div class="approach-text-block">
              <p>Phase 03: Execute & Scale. Rapid deployment of custom software and cloud configurations, transitioning you to the new paradigm with zero downtime. We ensure seamless integration and prepare your systems for limitless, uncompromising growth. This is where innovation becomes operational.</p>
            </div>
          </div>
          <div class="approach-image-wrapper">
            <img src="images/approach-system-mapping.jpeg" alt="Engineers mapping out a complex software architecture on a glass wall" class="approach-image" width="640" height="640">
          </div>
        </div>
      </div>
    </section>

    <section id="impact" class="impact-section">
      <div class="container">
        <div class="testimonial-card">
          <p class="testimonial-quote">"Saguaro Sync stripped our legacy systems down to the studs and rebuilt a cloud infrastructure that cut our latency by 80%. They are absolute machines."</p>
          <div class="testimonial-author-info">
            <img src="images/testimonial-sarah-jenkins.jpeg" alt="Black and white portrait of Sarah Jenkins" class="testimonial-author-image" width="256" height="256">
            <p class="testimonial-author-name">Sarah Jenkins</p>
            <p class="testimonial-author-role">CTO, FinTech Global</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer id="contact" class="contact-footer">
    <div class="container">
      <h2>Saguaro Sync</h2>
      <p class="tagline">Systematize Your Success.</p>
      <div class="contact-info">
        <p>110 Taylor Street, New York, New York, 11249, USA</p>
        <a href="tel:+14724825681">+1 (472) 482-5681</a>
        <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>">info@<?php echo $_SERVER['HTTP_HOST']; ?></a>
      </div>
      <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="contact-cta-footer">Initiate Consultation</a>
      <div class="footer-secondary-links">
        <a href="./privacy.html">Privacy Policy</a>
        <a href="./tos.html">Terms of Service</a>
      </div>
      <p class="copyright">© 2024 Saguaro Sync. All rights reserved.</p>
    </div>
  </footer>

  <div id="cookieConsentBanner" class="cookie-consent-banner" style="display: none;">
    <p>We use essential cookies to make our site work. With your consent, we may also use non-essential cookies to improve user experience and analyze website traffic. Click "Accept" to agree to our use of cookies.</p>
    <button id="acceptCookies">Accept</button>
  </div>

  <script>
    // Hamburger menu functionality
    document.querySelector('.hamburger').addEventListener('click', function() {
      document.querySelector('.main-nav').classList.toggle('active');
    });

    // Cookie Consent Logic
    const cookieBanner = document.getElementById('cookieConsentBanner');
    const acceptButton = document.getElementById('acceptCookies');
    const cookieName = 'consent_Saguaro Sync_cookies'; // Unique cookie name prefix

    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    function getCookie(name) {
      let nameEQ = name + "=";
      let ca = document.cookie.split(';');
      for(let i=0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    if (!getCookie(cookieName)) {
      cookieBanner.style.display = 'flex';
    }

    acceptButton.addEventListener('click', function() {
      setCookie(cookieName, 'accepted', 365); // Store consent for 1 year
      cookieBanner.style.display = 'none';
    });
  </script>
</body>
</html>