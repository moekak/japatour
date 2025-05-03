<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tour->title }} | Premium Tour Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      :root {
    --primary: #2C3E50;
    --primary-light: #34495E;
    --secondary: #3498DB;
    --secondary-light: #5DADE2;
    --accent: #E74C3C;
    --light: #ECF0F1;
    --dark: #1A2530;
    --success: #2ECC71;
    --warning: #F39C12;
    --danger: #E74C3C;
    --gray: #95A5A6;
    --light-gray: #F5F5F5;
    --shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    --border-radius: 12px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
}

body {
    background-color: #F8FAFC;
    color: var(--dark);
    line-height: 1.6;
    overflow-x: hidden;
}

a {
    text-decoration: none;
    color: var(--secondary);
    transition: var(--transition);
}

img {
    max-width: 100%;
    height: auto;
}

.container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header & Navigation */
.header {
    background-color: rgba(255, 255, 255, 0.95);
    position: fixed;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
    backdrop-filter: blur(10px);
}

.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
}

.logo {
    font-weight: 700;
    font-size: 24px;
    color: var(--primary);
}

.logo span {
    color: var(--secondary);
}

.nav-links {
    display: flex;
    gap: 30px;
}

.nav-link {
    color: var(--primary);
    font-weight: 500;
    position: relative;
    padding: 5px 0;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--secondary);
    transition: var(--transition);
}

.nav-link:hover {
    color: var(--secondary);
}

.nav-link:hover::after, .nav-link.active::after {
    width: 100%;
}

/* Hero Section */
.hero {
    height: 80vh;
    position: relative;
    overflow: hidden;
    color: white;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    filter: brightness(0.7);
    transform: scale(1.05);
    animation: zoomOut 8s forwards;
}

@keyframes zoomOut {
    from { transform: scale(1.05); }
    to { transform: scale(1); }
}

.hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 80%;
    max-width: 800px;
    padding: 20px;
    z-index: 2;
}

.hero-title {
    font-size: clamp(2.5rem, 5vw, 4.5rem);
    margin-bottom: 20px;
    line-height: 1.2;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    animation: fadeUp 0.8s ease-out forwards;
}

.hero-subtitle {
    font-size: clamp(1rem, 2vw, 1.5rem);
    margin-bottom: 30px;
    opacity: 0.9;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    animation: fadeUp 0.8s ease-out 0.2s forwards;
    opacity: 0;
    animation-fill-mode: forwards;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.discount-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, var(--accent), #C0392B);
    color: white;
    padding: 12px 20px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 18px;
    box-shadow: 0 8px 15px rgba(231, 76, 60, 0.3);
    z-index: 10;
    animation: pulse 2s infinite;
    transform: rotate(5deg);
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(231, 76, 60, 0.4); }
    70% { box-shadow: 0 0 0 15px rgba(231, 76, 60, 0); }
    100% { box-shadow: 0 0 0 0 rgba(231, 76, 60, 0); }
}

/* Quick Info Section */
.quick-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
    background: white;
    padding: 30px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: -50px;
    position: relative;
    z-index: 10;
}

.info-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 20px;
    transition: var(--transition);
    border-radius: 8px;
}

.info-item:hover {
    transform: translateY(-5px);
    background: linear-gradient(to bottom, rgba(52, 152, 219, 0.05), rgba(52, 152, 219, 0.1));
}

.info-icon {
    font-size: 32px;
    color: var(--secondary);
    margin-bottom: 15px;
}

.info-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
    color: var(--primary);
}

.info-content {
    font-size: 20px;
    font-weight: 700;
    color: var(--dark);
}

/* Main Content Section */
.main-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    margin: 50px 0;
}

/* Tour Preview Gallery */
.tour-preview {
    position: relative;
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--shadow);
    margin-bottom: 40px;
    background: white;
}

.preview-main {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.preview-main:hover {
    transform: scale(1.05);
}

.preview-main.fade-out {
    opacity: 0;
}

.gallery-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.gallery-control {
    width: 50px;
    height: 50px;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.gallery-control:hover {
    background-color: white;
    transform: scale(1.1);
}

.gallery-control i {
    font-size: 20px;
    color: var(--dark);
}

.preview-thumbs {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    padding: 15px;
    background: white;
}

.thumb {
    height: 80px;
    border-radius: 8px;
    object-fit: cover;
    cursor: pointer;
    transition: var(--transition);
    opacity: 0.7;
    filter: grayscale(40%);
}

.thumb:hover, .thumb.active {
    opacity: 1;
    filter: grayscale(0%);
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.preview-dot {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    margin: 0 5px;
    transition: var(--transition);
    cursor: pointer;
}

.preview-dot.active {
    background-color: white;
    transform: scale(1.3);
}

.preview-slider {
    position: absolute;
    bottom: 25px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    z-index: 10;
}

/* Tour Overview Section */
.section {
    background: white;
    padding: 40px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-bottom: 40px;
}

.section-title {
    font-size: 28px;
    color: var(--primary);
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
    text-align: center;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, var(--secondary), var(--primary));
    border-radius: 2px;
}

.tour-overview p {
    font-size: 17px;
    line-height: 1.7;
    margin-bottom: 30px;
}

.highlights {
      background: linear-gradient(to bottom right, #F3F9FE, #E1F0FA);
      padding: 30px;
      border-radius: 10px;
      margin-top: 30px;
}

.highlights-title {
    font-size: 22px;
    color: var(--primary);
    margin-bottom: 20px;
}

.highlights-list {
    list-style: none;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

.highlights-list li {
    position: relative;
    padding-left: 30px;
    font-size: 16px;
    margin-bottom: 10px;
}

.highlights-list li::before {
    content: '\f00c';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: var(--success);
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

/* New Enhanced Itinerary Design */
.itinerary-container {
    position: relative;
}

.itinerary-timeline {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 30px;
    width: 4px;
    background: linear-gradient(to bottom, var(--secondary), var(--primary));
    transform: translateX(-50%);
    z-index: 1;
}

.itinerary-days {
    position: relative;
    z-index: 2;
}

.itinerary-day {
    display: flex;
    flex-direction: column;
    margin-bottom: 40px;
    position: relative;
}

.itinerary-day:last-child {
    margin-bottom: 0;
}

.itinerary-day-left, 
.itinerary-day-right,
.itinerary-day:nth-child(even) .itinerary-day-left,
.itinerary-day:nth-child(even) .itinerary-day-right {
    flex: none;
    width: 100%;
    padding-left: 12%;
    padding-right: 0;
    text-align: left;
}

.itinerary-day-marker {
    position: absolute;
    left: 30px;
    top: 0;
    transform: translateX(-50%);
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 0 4px white, 0 0 0 6px var(--secondary);
    color: var(--primary);
    font-weight: 700;
    font-size: 18px;
    z-index: 3;
}

.itinerary-day-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 15px;
    position: relative;
}

.itinerary-day-left .itinerary-day-title,
.itinerary-day-right .itinerary-day-title,
.itinerary-day:nth-child(even) .itinerary-day-left .itinerary-day-title,
.itinerary-day:nth-child(even) .itinerary-day-right .itinerary-day-title {
    padding-left: 0;
    padding-right: 0;
}

.itinerary-day-description {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 1.7;
    color: var(--dark);
}

.itinerary-day-image {
      width: 100%;
      height: 240px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: var(--shadow);
      margin-bottom: 20px;
      transition: var(--transition);
}

.itinerary-day-image:hover {
    transform: scale(1.02);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.day-schedule {
    background: linear-gradient(135deg, #F8FAFC, #E1F0FA);
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(52, 152, 219, 0.1);
    position: relative;
    overflow: hidden;
}

.day-schedule::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    background: linear-gradient(to bottom, var(--secondary), var(--primary));
    border-radius: 3px 0 0 3px;
}

.schedule-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    padding-bottom: 12px;
    border-bottom: 2px dashed rgba(52, 152, 219, 0.2);
}

.schedule-title i {
    margin-right: 12px;
    color: var(--secondary);
    font-size: 22px;
    background: rgba(52, 152, 219, 0.1);
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.schedule-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 18px;
    position: relative;
    padding-left: 15px;
    transition: var(--transition);
}

.schedule-item:hover {
    transform: translateX(5px);
}

.schedule-item:last-child {
    margin-bottom: 0;
}

.schedule-time {
    flex: 0 0 100px;
    font-weight: 700;
    color: var(--secondary);
    position: relative;
    background: rgba(52, 152, 219, 0.1);
    padding: 5px 10px;
    border-radius: 6px;
    text-align: center;
    font-size: 15px;
    margin-right: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.schedule-description {
    flex: 1;
    position: relative;
    padding: 5px 0;
    font-size: 16px;
    color: var(--dark);
    font-weight: 500;
}

.schedule-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--secondary);
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
}
.itinerary-day-features {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 15px;
    margin-bottom: 20px;
}

.day-feature {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.day-feature i {
    margin-right: 10px;
    color: var(--secondary);
    font-size: 18px;
}

.day-feature-text {
    font-size: 14px;
    font-weight: 500;
}

.day-actions {
    display: flex;
    justify-content: flex-start;
    gap: 15px;
}

.day-action-btn {
    padding: 8px 15px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: var(--transition);
}

.day-action-btn.details {
    background: var(--light);
    color: var(--primary);
}

.day-action-btn.details:hover {
    background: var(--primary-light);
    color: white;
}

.day-action-btn.map {
    background: var(--secondary-light);
    color: white;
}

.day-action-btn.map:hover {
    background: var(--secondary);
}

.day-action-btn i {
    margin-right: 8px;
}

/* Alternating layout removed for consistent mobile-style at all screen sizes */
.day-actions,
.itinerary-day:nth-child(even) .day-actions {
    justify-content: flex-start;
}

/* Tour Details (Right Column) */
.tour-details {
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    position: sticky;
    top: 100px;
    overflow: hidden;
}

.pricing-header {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 30px;
    text-align: center;
}

.price {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 5px;
}

.price-note {
    font-size: 14px;
    opacity: 0.8;
}

.pricing-body {
    padding: 30px;
}

.calendar-container {
    margin-bottom: 25px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
}

.calendar-widget {
    background: white;
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background: var(--primary);
    color: white;
}

.current-month {
    font-weight: 600;
    font-size: 18px;
}

.nav-button {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    transition: var(--transition);
}

.nav-button:hover {
    background: rgba(255, 255, 255, 0.3);
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 5px;
    padding: 15px;
}

.weekday {
    text-align: center;
    font-weight: 600;
    color: var(--primary);
    padding: 10px 0;
}

.date {
    text-align: center;
    padding: 10px 0;
    border-radius: 5px;
    cursor: pointer;
    transition: var(--transition);
}

.date:hover:not(.empty):not(.disabled) {
    background-color: var(--light);
}

.date.disabled {
    color: var(--gray);
    cursor: not-allowed;
}

.date.empty {
    visibility: hidden;
}

.date.today {
    background-color: var(--light);
    font-weight: 700;
}

.date.highlight-blue {
    background-color: rgba(52, 152, 219, 0.15);
    color: var(--secondary);
    font-weight: 600;
    transform-origin: center;
    animation: subtle-pulse 2s infinite;
}

@keyframes subtle-pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

.calendar-legend {
    display: flex;
    padding: 10px 15px;
    border-top: 1px solid #f0f0f0;
}

.legend-item {
    display: flex;
    align-items: center;
    margin-right: 15px;
    font-size: 14px;
}

.legend-color {
    width: 15px;
    height: 15px;
    border-radius: 3px;
    margin-right: 5px;
}

.legend-color.available {
    background-color: rgba(52, 152, 219, 0.15);
}

.limited-spots {
    background: linear-gradient(135deg, #FEF9E7, #FCF3CF);
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 500;
    color: #D35400;
    font-size: 16px;
    border-left: 4px solid var(--warning);
}

.limited-spots.urgent {
    background: linear-gradient(135deg, #FFEBEE, #FFCDD2);
    color: #B71C1C;
    border-left: 4px solid var(--danger);
    animation: pulse-urgent 2s infinite;
}

@keyframes pulse-urgent {
    0% { box-shadow: 0 0 0 0 rgba(198, 40, 40, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(198, 40, 40, 0); }
    100% { box-shadow: 0 0 0 0 rgba(198, 40, 40, 0); }
}

.limited-spots i {
    font-size: 20px;
}

.book-button {
    display: block;
    background: linear-gradient(135deg, var(--secondary), #2980B9);
    color: white;
    text-align: center;
    padding: 16px;
    border-radius: 8px;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 25px;
    box-shadow: 0 8px 15px rgba(52, 152, 219, 0.3);
    transition: all 0.3s;
}

.book-button:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(52, 152, 219, 0.4);
    color: white;
}

.includes-title {
    font-size: 18px;
    color: var(--primary);
    margin: 25px 0 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.includes-list, .not-includes-list {
    list-style: none;
}

.includes-list li, .not-includes-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 10px;
    font-size: 15px;
}

.includes-list li::before {
    content: '\f058';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: var(--success);
    position: absolute;
    left: 0;
}

.not-includes-list li::before {
    content: '\f057';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: var(--danger);
    position: absolute;
    left: 0;
}

.add-to-wishlist {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: var(--gray);
    transition: var(--transition);
}

.add-to-wishlist:hover {
    color: var(--accent);
}

.add-to-wishlist i {
    margin-right: 5px;
}

/* Customer Reviews Section */
.customer-reviews {
    background: white;
    padding: 40px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-bottom: 40px;
}

.reviews-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.reviews-title {
    font-size: 28px;
    color: var(--primary);
    position: relative;
    padding-bottom: 15px;
}

.reviews-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--secondary), var(--primary));
    border-radius: 2px;
}

.avg-rating {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.rating-value {
    font-size: 36px;
    font-weight: 700;
    color: var(--primary);
}

.rating-stars {
    color: var(--warning);
    margin: 5px 0;
    font-size: 20px;
}

.rating-count {
    font-size: 14px;
    color: var(--gray);
}

.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 25px;
}

.review-card {
    background: #F8FAFC;
    border-radius: 12px;
    padding: 25px;
    position: relative;
}

.review-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.reviewer-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 15px;
    object-fit: cover;
}

.reviewer-info {
    flex: 1;
}

.reviewer-name {
    font-weight: 600;
    margin-bottom: 5px;
}

.review-date {
    font-size: 14px;
    color: var(--gray);
}

.reviewer-rating {
    color: var(--warning);
    margin-bottom: 10px;
}

.review-text {
    font-size: 15px;
    line-height: 1.6;
}

.review-card::before {
    content: '\f10d';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    top: -15px;
    right: 25px;
    font-size: 30px;
    color: rgba(52, 152, 219, 0.1);
}

/* FAQ Section */
.faq-section {
    background: white;
    padding: 40px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-bottom: 40px;
}

.faq-grid {
    display: grid;
    gap: 20px;
}

.faq-item {
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
}

.faq-question {
    font-size: 18px;
    font-weight: 600;
    color: var(--primary);
    cursor: pointer;
    padding: 10px 0;
    position: relative;
    padding-right: 30px;
}

.faq-question::after {
    content: '\f078';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    right: 0;
    transition: var(--transition);
}

.faq-question.active::after {
    transform: rotate(180deg);
}

.faq-answer {
    font-size: 16px;
    line-height: 1.7;
    padding: 10px 0;
    display: none;
}

.faq-answer.active {
    display: block;
    animation: fadeDown 0.5s ease forwards;
}

@keyframes fadeDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 80px 0;
    text-align: center;
    border-radius: var(--border-radius);
    margin-bottom: 80px;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
    animation: rotate 20s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.cta-content {
    position: relative;
    z-index: 1;
    max-width: 700px;
    margin: 0 auto;
}

.cta-title {
    font-size: 36px;
    margin-bottom: 20px;
}

.cta-text {
    font-size: 18px;
    margin-bottom: 30px;
    opacity: 0.9;
}

.cta-button {
    display: inline-block;
    background: white;
    color: var(--primary);
    padding: 16px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 18px;
    transition: var(--transition);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.cta-button:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
}

/* Mobile Menu */
.mobile-menu-btn {
    display: none;
    background: none;
    border: none;
    font-size: 24px;
    color: var(--primary);
    cursor: pointer;
}

/* Responsive styles */
@media (max-width: 992px) {
    .main-content {
        grid-template-columns: 1fr;
    }
    
    .tour-details {
        position: relative;
        top: 0;
        order: -1;
        margin-bottom: 40px;
    }
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
    }
    
    .mobile-menu-btn {
        display: block;
    }
    
    .hero {
        height: 70vh;
    }
    
    .hero-title {
        font-size: clamp(2rem, 5vw, 3rem);
    }
    
    .quick-info {
        grid-template-columns: 1fr 1fr;
    }
    
    .preview-main {
        height: 350px;
    }
    
    .preview-thumbs {
        grid-template-columns: repeat(3, 1fr);
    }
    
    .thumb {
        height: 60px;
    }
    
    .section, .tour-details, .customer-reviews, .faq-section {
        padding: 25px;
    }
    
    .highlights-list {
        grid-template-columns: 1fr;
    }
    
    .reviews-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
    
    .reviews-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .quick-info {
        grid-template-columns: 1fr;
    }
    
    .preview-thumbs {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .section {
        padding: 25px 20px;
    }
    
    .itinerary-day-features {
        grid-template-columns: 1fr;
    }
    
    .day-actions {
        flex-wrap: wrap;
    }
}

/* Helper Classes */
.text-center {
    text-align: center;
}

.mb-0 {
    margin-bottom: 0;
}

.mb-4 {
    margin-bottom: 1rem;
}

.mt-4 {
    margin-top: 1rem;
}

.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.itinerary-day-right{
      margin-top: 3%;
}
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav-container">
                <a href="#" class="logo">Travel<span>Genius</span></a>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-links">
                    <li><a href="#" class="nav-link active">Home</a></li>
                    <li><a href="#" class="nav-link">Destinations</a></li>
                    <li><a href="#" class="nav-link">Tours</a></li>
                    <li><a href="#" class="nav-link">Experiences</a></li>
                    <li><a href="#" class="nav-link">About Us</a></li>
                    <li><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

      <!-- Hero Section -->
      <section class="hero">
            <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}" class="hero-image">
            <div class="discount-badge">{{$tour->badge}}</div>
            <div class="hero-content">
                  <h1 class="hero-title">{{$tour->title}}</h1>
                  <p class="hero-subtitle">{{$tour->subtitle}}</p>
            </div>
      </section>
      
      <!-- Quick Info -->
      <div class="container">
            <div class="quick-info">
                  <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                        <div class="info-title">Duration</div>
                        <div class="info-content">{{$tour->hours}} hours</div>
                  </div>
                  <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info-title">Destinations</div>
                        <div class="info-content">{{$tour->destinations}}</div>
                  </div>
                  <div class="info-item">
                        <div class="info-icon"><i class="fas fa-users"></i></div>
                        <div class="info-title">Group Size</div>
                        <div class="info-content">Max {{$tour->max_participants}}</div>
                  </div>
                  <div class="info-item">
                        <div class="info-icon"><i class="fas fa-language"></i></div>
                        <div class="info-title">Languages</div>
                        <div class="info-content">{{$tour->languages}}</div>
                  </div>
            </div>
            
            <!-- Main Content -->
            <div class="main-content">
                  <!-- Left Content -->
                  <div class="content-left">
                        <!-- Tour Preview Images -->
                        <div class="tour-preview">
                              <img src="{{ asset('storage/' . $tour->gallery_images[0]) }}" alt="{{ $tour->title }}" class="preview-main">
                              <div class="gallery-controls">
                                    <div class="gallery-control prev-image"><i class="fas fa-chevron-left"></i></div>
                                    <div class="gallery-control next-image"><i class="fas fa-chevron-right"></i></div>
                              </div>
                              <div class="preview-slider">
                                    <div class="preview-dot active"></div>
                                    <div class="preview-dot"></div>
                                    <div class="preview-dot"></div>
                                    <div class="preview-dot"></div>
                                    <div class="preview-dot"></div>
                              </div>
                              <div class="preview-thumbs">
                                    @foreach ($tour->gallery_images as $image)
                                    <img src="{{ asset('storage/' . $image) }}" class="thumb">
                                    @endforeach
                              </div>
                        </div>
                  
                        <!-- Tour Overview -->
                        <section class="section tour-overview">
                              <h2 class="section-title">Tour Overview</h2>
                              <p>{{$tour->overview}}</p>
                              
                              <div class="highlights">
                              <h3 class="highlights-title">Tour Highlights</h3>
                              <ul class="highlights-list">
                                    @foreach ($tour->highlights as $highlight)
                                          <li>{{$highlight}}</li>
                                    @endforeach
                              </ul>
                              </div>
                        </section>
                        <section class="section tour-itinerary">
                              <h2 class="section-title">Detailed Itinerary</h2>
                              
                              <div class="itinerary-container">
                                    <div class="itinerary-timeline"></div>
                                    <div class="itinerary-days">
                                          @foreach ($tour->itinerary as $index => $itinerary)
                                                <div class="itinerary-day">
                                                      <div class="itinerary-day-marker">{{$index + 1}}</div>
                                                      
                                                      <div class="itinerary-day-left">
                                                            <h3 class="itinerary-day-title">{{$itinerary["title"]}}</h3>
                                                            <p class="itinerary-day-description">{{$itinerary["description"]}}</p>
                                                            
                                                            <div class="day-features itinerary-day-features">
                                                                  <div class="day-feature">
                                                                        <i class="fas fa-utensils"></i>
                                                                        <span class="day-feature-text">Welcome Dinner</span>
                                                                  </div>
                                                                  <div class="day-feature">
                                                                        <i class="fas fa-hotel"></i>
                                                                        <span class="day-feature-text">4-Star Hotel</span>
                                                                  </div>
                                                                  <div class="day-feature">
                                                                        <i class="fas fa-map-marker-alt"></i>
                                                                        <span class="day-feature-text">Shinjuku</span>
                                                                  </div>
                                                            </div>
                                                      
                                                            <div class="day-actions">
                                                                  <div class="day-action-btn details">
                                                                        <i class="fas fa-info-circle"></i>
                                                                        <span>More Details</span>
                                                                  </div>
                                                                  <div class="day-action-btn map">
                                                                        <i class="fas fa-map"></i>
                                                                        <span>View on Map</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      
                                                      <div class="itinerary-day-right">
                                                            <img src="https://picsum.photos/600/300" alt="Tokyo Skyline" class="itinerary-day-image">
                                                            
                                                            <div class="day-schedule">
                                                                  <h4 class="schedule-title">
                                                                        <i class="fas fa-clock"></i>
                                                                        Tour Schedule
                                                                  </h4>
                                                                  @foreach ($itinerary["schedule"] as $schedule)
                                                                        <div class="schedule-item">
                                                                              <div class="schedule-time">{{$schedule["time"]}}</div>
                                                                              <div class="schedule-description">{{$schedule["description"]}}</div>
                                                                        </div>
                                                                  @endforeach
                                                            </div>
                                                      </div>
                                                </div>
                                          @endforeach
                                    </div>
                              </div>
                        </section>

                        <!-- Customer Reviews Section -->
                        <section class="customer-reviews">
                              <div class="reviews-header">
                                    <h2 class="reviews-title">Customer Reviews</h2>
                                    <div class="avg-rating">
                                          <div class="rating-value">4.8</div>
                                          <div class="rating-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                          </div>
                                          <div class="rating-count">based on 127 reviews</div>
                                    </div>
                              </div>
                              
                              <div class="reviews-grid">
                                    <div class="review-card">
                                          <div class="review-header">
                                                <img src="/api/placeholder/100/100" alt="Sarah Johnson" class="reviewer-avatar">
                                                <div class="reviewer-info">
                                                      <div class="reviewer-name">Sarah Johnson</div>
                                                      <div class="review-date">April 15, 2025</div>
                                                </div>
                                          </div>
                                          <div class="reviewer-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                          </div>
                                          <p class="review-text">This tour exceeded all my expectations! Our guide was incredibly knowledgeable and passionate about the history of each location. The itinerary was perfectly balanced between guided exploration and free time.</p>
                                    </div>
                                    
                                    <div class="review-card">
                                          <div class="review-header">
                                                <img src="/api/placeholder/100/101" alt="Michael Torres" class="reviewer-avatar">
                                                <div class="reviewer-info">
                                                      <div class="reviewer-name">Michael Torres</div>
                                                      <div class="review-date">April 8, 2025</div>
                                                </div>
                                          </div>
                                          <div class="reviewer-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                          </div>
                                          <p class="review-text">Absolutely worth every penny! The small group size made the experience feel personal and intimate. The accommodations were comfortable and the food was delicious. Highly recommend!</p>
                                    </div>
                                    
                                    <div class="review-card">
                                          <div class="review-header">
                                                <img src="/api/placeholder/100/102" alt="Emma Wilson" class="reviewer-avatar">
                                                <div class="reviewer-info">
                                                      <div class="reviewer-name">Emma Wilson</div>
                                                      <div class="review-date">March 30, 2025</div>
                                                </div>
                                          </div>
                                          <div class="reviewer-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                          </div>
                                          <p class="review-text">My family and I had an amazing time on this tour. It was well-organized from start to finish. The guide was friendly and accommodating, especially with our young children. Would book again!</p>
                                    </div>
                              </div>
                        </section>

                        <!-- FAQ Section -->
                        <section class="faq-section">
                              <h2 class="section-title">Frequently Asked Questions</h2>
                              <div class="faq-grid">
                                    <div class="faq-item">
                                          <div class="faq-question">What should I pack for this tour?</div>
                                          <div class="faq-answer">We recommend packing comfortable walking shoes, weather-appropriate clothing, sunscreen, a hat, a reusable water bottle, and a camera. For specific tours, you might need additional items like swimwear or hiking gear, which will be specified in your confirmation email.</div>
                                    </div>
                                    <div class="faq-item">
                                          <div class="faq-question">Is this tour suitable for children?</div>
                                          <div class="faq-answer">Yes, this tour is family-friendly and suitable for children of all ages. However, for younger children, please note that some days involve extensive walking. Feel free to contact us if you have specific concerns about your child's comfort during the tour.</div>
                                    </div>
                                    <div class="faq-item">
                                          <div class="faq-question">What is the cancellation policy?</div>
                                          <div class="faq-answer">You can cancel up to 48 hours before the start of your tour for a full refund. Cancellations less than 48 hours before the tour start time are non-refundable. In case of unexpected weather conditions or other circumstances beyond our control, we may offer an alternative date or a full refund.</div>
                                    </div> 
                                    <div class="faq-item">
                                          <div class="faq-question">Are meals included in the tour price?</div>
                                          <div class="faq-answer">Some meals are included as specified in the "What's Included" section. Typically, breakfast is included daily if you're staying at our partner hotels, and some lunches or dinners at select locations. Your guide will recommend local restaurants for meals not included in the package.</div>
                                    </div>
                                    <div class="faq-item">
                                          <div class="faq-question">Is transportation provided during the tour?</div>
                                          <div class="faq-answer">Yes, all transportation between destinations listed in the itinerary is included. This may be a combination of private vehicles, trains, or boats depending on the specific tour. Airport transfers on arrival and departure are also included if you book the complete package.</div>
                                    </div>
                              </div>
                        </section>
                  </div>
            
                  <!-- Right Content (Pricing Information) -->
                  <div class="content-right">
                        <div class="tour-details">
                              <div class="pricing-header">
                                    <div class="price">{{$tour->currency}}{{ number_format($tour->price) }}</div>
                                    <p class="price-note">per person (based on double occupancy)</p>
                              </div>
                              <div class="pricing-body">
                                    <div class="calendar-container">
                                          <div class="calendar-widget">
                                                <div class="calendar-header">
                                                      <button class="nav-button">←</button>
                                                      <div class="current-month">April 2025</div>
                                                      <button class="nav-button">→</button>
                                                </div>
                              
                                                <div class="calendar-grid">
                                                      <!-- Weekday headers -->
                                                      <div class="weekday">Sun</div>
                                                      <div class="weekday">Mon</div>
                                                      <div class="weekday">Tue</div>
                                                      <div class="weekday">Wed</div>
                                                      <div class="weekday">Thu</div>
                                                      <div class="weekday">Fri</div>
                                                      <div class="weekday">Sat</div>
                                                      
                                                      <!-- Dates will be dynamically generated by JavaScript -->
                                                      <div class="date empty"></div>
                                                      <div class="date empty"></div>
                                                      <div class="date">1</div>
                                                      <div class="date">2</div>
                                                      <div class="date">3</div>
                                                      <div class="date">4</div>
                                                      <div class="date">5</div>
                                                      <div class="date">6</div>
                                                      <div class="date">7</div>
                                                      <div class="date">8</div>
                                                      <div class="date">9</div>
                                                      <div class="date">10</div>
                                                      <div class="date">11</div>
                                                      <div class="date">12</div>
                                                      <div class="date">13</div>
                                                      <div class="date">14</div>
                                                      <div class="date">15</div>
                                                      <div class="date">16</div>
                                                      <div class="date">17</div>
                                                      <div class="date">18</div>
                                                      <div class="date">19</div>
                                                      <div class="date">20</div>
                                                      <div class="date">21</div>
                                                      <div class="date">22</div>
                                                      <div class="date">23</div>
                                                      <div class="date">24</div>
                                                      <div class="date today">25</div>
                                                      <div class="date">26</div>
                                                      <div class="date">27</div>
                                                      <div class="date">28</div>
                                                      <div class="date">29</div>
                                                      <div class="date">30</div>
                                                </div>
                                                <div class="calendar-legend">
                                                      <div class="legend-item">
                                                            <span class="legend-color available"></span>
                                                            <span>Available dates</span>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="limited-spots urgent">
                                          <i class="fas fa-exclamation-circle"></i> {{$tour->limited_spots}}
                                    </div>
                                    <a href="#" class="book-button">Book This Tour Now</a>
                                    <div class="includes-section">
                                          <h3 class="includes-title">What's Included</h3>
                                          <ul class="includes-list">
                                                @foreach ($tour->inclusions as $inclusion)
                                                      <li>{{$inclusion}}</li>
                                                @endforeach
                                          </ul>
                                          
                                          <h3 class="includes-title">What's Not Included</h3>
                                          <ul class="not-includes-list">
                                                @foreach ($tour->exclusions as $exclusion)
                                                      <li>{{$exclusion}}</li>
                                                @endforeach
                                          </ul>
                                    </div>
                                    <a href="#" class="add-to-wishlist">
                                          <i class="far fa-heart"></i> Add to Wishlist
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
            
            <!-- Call to Action Section -->
            <section class="cta-section">
                  <div class="cta-content">
                  <h2 class="cta-title">Ready for an Unforgettable Experience?</h2>
                  <p class="cta-text">Book this tour today and create memories that will last a lifetime. Limited spots available for the upcoming season!</p>
                  <a href="#" class="cta-button">Reserve Your Spot Now</a>
                  </div>
            </section>
      </div>

      <script>
            document.addEventListener('DOMContentLoaded', function() {
                  // Configuration for available dates and special pricing
                  const availableDates = {!! json_encode($tour->available_dates) !!};
                  const availableDatesArr = availableDates ? JSON.parse(availableDates) : [];
                  
                  // Current selected date
                  let selectedDate = null;
                  
                  // Current view month and year
                  const today = new Date();
                  let currentMonthIndex = today.getMonth();
                  let currentYear = today.getFullYear();
            
                  // Month names
                  const months = [
                        'January', 'February', 'March', 'April', 'May', 'June', 
                        'July', 'August', 'September', 'October', 'November', 'December'
                  ];
                  
                  // DOM elements
                  const calendarGrid = document.querySelector('.calendar-grid');
                  const currentMonthElement = document.querySelector('.current-month');
                  const prevButton = document.querySelector('.nav-button:first-child');
                  const nextButton = document.querySelector('.nav-button:last-child');
                  
                  // Save the weekday headers HTML
                  const weekdayHeaders = document.querySelectorAll('.weekday');
                  const weekdayHeadersHTML = Array.from(weekdayHeaders).map(day => day.outerHTML).join('');
            
                  // Function to update the calendar
                  function renderCalendar(year, month) {
                        // Clear the calendar grid and reset the weekday headers
                        calendarGrid.innerHTML = weekdayHeadersHTML;
                        
                        // Update the current month display
                        currentMonthElement.textContent = `${months[month]} ${year}`;
                        
                        // Month's first day
                        const firstDay = new Date(year, month, 1);
                        // Month's last day
                        const lastDay = new Date(year, month + 1, 0);
                        
                        // First day of the week (0: Sunday, 1: Monday, ..., 6: Saturday)
                        const firstDayOfWeek = firstDay.getDay();
                        // Number of days in the month
                        const daysInMonth = lastDay.getDate();
                        
                        // Add empty cells before the first day of the month
                        for (let i = 0; i < firstDayOfWeek; i++) {
                              const emptyDay = document.createElement('div');
                              emptyDay.className = 'date empty';
                              calendarGrid.appendChild(emptyDay);
                        }
                        
                        // Current date for comparison
                        const currentDate = new Date();
                        const realToday = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
                        
                        // Helper function to format dates as YYYY-MM-DD
                        function formatDate(date) {
                              const year = date.getFullYear();
                              const month = String(date.getMonth() + 1).padStart(2, '0');
                              const day = String(date.getDate()).padStart(2, '0');
                              return `${year}-${month}-${day}`;
                        }
                        
                        // Add days of the month
                        for (let day = 1; day <= daysInMonth; day++) {
                              const date = new Date(year, month, day);
                              const dateElement = document.createElement('div');
                              dateElement.className = 'date';
                              dateElement.textContent = day;
                              
                              // Check if the date is in the past
                              const isPastDate = date < realToday;
                              
                              // Format current date to YYYY-MM-DD
                              const formattedDate = formatDate(date);
                              
                              // Check if the date is available for booking
                              const isAvailable = availableDatesArr.includes(formattedDate);

                              // Add appropriate classes
                              if (isPastDate) {
                                    dateElement.classList.add('disabled');
                              } else if (isAvailable) {
                                    dateElement.classList.add('highlight-blue');
                                    // Add click event for booking
                                    dateElement.addEventListener('click', () => {
                                          selectDate(formattedDate);
                                    });
                              } else {
                                    dateElement.classList.add('disabled');
                              }
                              
                              // Highlight today
                              if (formatDate(realToday) === formattedDate) {
                        
                              }
                              
                              calendarGrid.appendChild(dateElement);
                        }
                  }
                  
                  // Function to select a date
                  function selectDate(date) {
                        selectedDate = date;
                        // Reset all previously selected dates
                        document.querySelectorAll('.date.selected').forEach(el => {
                              el.classList.remove('selected');
                        });
                        
                        // Find and select the clicked date
                        document.querySelectorAll('.date').forEach(el => {
                              if (!el.classList.contains('empty') && 
                                    new Date(`${currentYear}-${currentMonthIndex+1}-${el.textContent}`).toISOString().split('T')[0] === date) {
                                    el.classList.add('selected');
                              }
                        });
                  }
                  
                  // Initialize the calendar with current month
                  renderCalendar(currentYear, currentMonthIndex);

                  // Add event listeners to navigation buttons
                  prevButton.addEventListener('click', function() {
                        currentMonthIndex--;
                        if (currentMonthIndex < 0) {
                              currentMonthIndex = 11;
                              currentYear--;
                        }
                        renderCalendar(currentYear, currentMonthIndex);
                  });
            
                  nextButton.addEventListener('click', function() {
                        currentMonthIndex++;
                        if (currentMonthIndex > 11) {
                              currentMonthIndex = 0;
                              currentYear++;
                        }
                        renderCalendar(currentYear, currentMonthIndex);
                  });

                  // Enhance gallery functionality
                  enhanceGallery();
                  
                  // Initialize FAQ accordion
                  initFaqAccordion();
            });

            // Function to enhance the gallery
            function enhanceGallery() {
                  const thumbs = document.querySelectorAll('.thumb');
                  const mainImage = document.querySelector('.preview-main');
                  const dots = document.querySelectorAll('.preview-dot');
                  const prevBtn = document.querySelector('.prev-image');
                  const nextBtn = document.querySelector('.next-image');

                              
                  const galleryImages = {!! json_encode($tour->gallery_images) !!};

                  // Image sources for the gallery (use full paths)
                  const imageSources = [];
                  galleryImages.forEach((image)=>{
                        imageSources.push(`/storage/${image}`)
                  })


                  let currentImageIndex = 0;
                  
                  // Function to update active image with smooth transition
                  function updateActiveImage(index) {
                        // Add fade-out class to main image
                        mainImage.classList.add('fade-out');
                        
                        // After a short delay, update the image and remove the fade-out class
                        setTimeout(() => {
                              mainImage.src = imageSources[index];
                              // Update active thumb and dot
                              thumbs.forEach(thumb => thumb.classList.remove('active'));
                              if (thumbs[index]) thumbs[index].classList.add('active');
                              
                              dots.forEach(dot => dot.classList.remove('active'));
                              if (dots[index]) dots[index].classList.add('active');
                              
                              currentImageIndex = index;
                              
                              // Remove fade-out class to fade the image back in
                              mainImage.classList.remove('fade-out');
                        }, 300);
                  }
            
                  // Add click event to thumbnails
                  thumbs.forEach((thumb, index) => {
                        thumb.addEventListener('click', () => {
                              if (index !== currentImageIndex) {
                                    updateActiveImage(index);
                              }
                        });
                  });
            
                  // Add click event to dots
                  dots.forEach((dot, index) => {
                        dot.addEventListener('click', () => {
                              if (index !== currentImageIndex) {
                                    updateActiveImage(index);
                              }
                        });
                  });
            
                  // Previous button click
                  prevBtn.addEventListener('click', () => {
                        let newIndex = currentImageIndex - 1;
                        if (newIndex < 0) newIndex = imageSources.length - 1;
                        updateActiveImage(newIndex);
                  });
            
                  // Next button click
                  nextBtn.addEventListener('click', () => {
                        let newIndex = currentImageIndex + 1;
                        if (newIndex >= imageSources.length) newIndex = 0;
                        updateActiveImage(newIndex);
                  });
                  
                  // Add keyboard navigation
                  document.addEventListener('keydown', (e) => {
                        if (e.key === 'ArrowLeft') {
                              let newIndex = currentImageIndex - 1;
                              if (newIndex < 0) newIndex = imageSources.length - 1;
                              updateActiveImage(newIndex);
                        } else if (e.key === 'ArrowRight') {
                              let newIndex = currentImageIndex + 1;
                              if (newIndex >= imageSources.length) newIndex = 0;
                              updateActiveImage(newIndex);
                        }
                  });
                  
                  // Add swipe functionality for mobile
                  let touchStartX = 0;
                  let touchEndX = 0;
                  
                  const galleryElement = document.querySelector('.tour-preview');
                  
                  galleryElement.addEventListener('touchstart', (e) => {
                        touchStartX = e.changedTouches[0].screenX;
                  });
                  
                  galleryElement.addEventListener('touchend', (e) => {
                        touchEndX = e.changedTouches[0].screenX;
                        handleSwipe();
                  });
                  
                  function handleSwipe() {
                        const minSwipeDistance = 50;
                        if (touchEndX < touchStartX - minSwipeDistance) {
                              // Swiped left, show next image
                              let newIndex = currentImageIndex + 1;
                              if (newIndex >= imageSources.length) newIndex = 0;
                              updateActiveImage(newIndex);
                        }
                        if (touchEndX > touchStartX + minSwipeDistance) {
                              // Swiped right, show previous image
                              let newIndex = currentImageIndex - 1;
                              if (newIndex < 0) newIndex = imageSources.length - 1;
                              updateActiveImage(newIndex);
                        }
                  }
            
                  // Auto-rotate gallery images
                  let autoRotateInterval = setInterval(() => {
                        let newIndex = currentImageIndex + 1;
                        if (newIndex >= imageSources.length) newIndex = 0;
                        updateActiveImage(newIndex);
                  }, 5000);
                  
                  // Stop auto-rotate on user interaction
                  const stopAutoRotate = () => {
                        clearInterval(autoRotateInterval);
                        // Restart after 15 seconds of inactivity
                        setTimeout(() => {
                              autoRotateInterval = setInterval(() => {
                                    let newIndex = currentImageIndex + 1;
                                    if (newIndex >= imageSources.length) newIndex = 0;
                                    updateActiveImage(newIndex);
                              }, 5000);
                        }, 15000);
                  };
                  
                  thumbs.forEach(thumb => thumb.addEventListener('click', stopAutoRotate));
                  dots.forEach(dot => dot.addEventListener('click', stopAutoRotate));
                  prevBtn.addEventListener('click', stopAutoRotate);
                  nextBtn.addEventListener('click', stopAutoRotate);
                  galleryElement.addEventListener('touchstart', stopAutoRotate);
            }

            // Function to initialize FAQ accordion
            function initFaqAccordion() {
                  const faqQuestions = document.querySelectorAll('.faq-question');
                  const faqAnswers = document.querySelectorAll('.faq-answer');
                  
                  faqQuestions.forEach((question, index) => {
                        question.addEventListener('click', () => {
                              const isActive = question.classList.contains('active');
                              
                              // Close all questions
                              faqQuestions.forEach(q => q.classList.remove('active'));
                              faqAnswers.forEach(a => a.classList.remove('active'));
                              
                              // If the clicked question wasn't active, open it
                              if (!isActive) {
                                    question.classList.add('active');
                                    faqAnswers[index].classList.add('active');
                              }
                        });
                  });
            }

            // Mobile menu toggle
            document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
                  const navLinks = document.querySelector('.nav-links');
                  navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
            });
      </script>
      <script>
            // Expand/collapse functionality for day details
            document.querySelectorAll('.day-action-btn.details').forEach(btn => {
                  btn.addEventListener('click', function() {
                        const dayElement = this.closest('.itinerary-day');
                        const scheduleElement = dayElement.querySelector('.day-schedule');
                        
                        if (scheduleElement.style.display === 'none') {
                              scheduleElement.style.display = 'block';
                              this.innerHTML = '<i class="fas fa-minus-circle"></i><span>Less Details</span>';
                        } else {
                              scheduleElement.style.display = 'none';
                              this.innerHTML = '<i class="fas fa-info-circle"></i><span>More Details</span>';
                        }
                  });
            });
      </script>
</body>
</html>