<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Bibliothèque Municipale</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
   

    <style>

/* ===========================
   Variables CSS
   =========================== */
:root {
    /* Couleurs principales */
    --primary-green: #2c5f2d;
    --primary-light: #97bc62;
    --accent-sage: #b4c7a4;

    /* Couleurs neutres */
    --white: #ffffff;
    --off-white: #fafbf9;
    --cream: #f5f7f3;
    --grey-50: #f9fafb;
    --grey-100: #f3f4f6;
    --grey-200: #e5e7eb;
    --grey-300: #d1d5db;
    --grey-400: #9ca3af;
    --grey-500: #6b7280;
    --grey-600: #4b5563;
    --grey-700: #374151;
    --grey-800: #1f2937;
    --grey-900: #111827;

    /* Couleurs sémantiques */
    --success: #10b981;
    --warning: #f59e0b;
    --error: #ef4444;
    --info: #3b82f6;

    /* Typographie */
    --font-display: 'Cormorant Garamond', serif;
    --font-body: 'Montserrat', sans-serif;

    /* Espacements */
    --spacing-xs: 0.25rem;
    --spacing-sm: 0.5rem;
    --spacing-md: 1rem;
    --spacing-lg: 1.5rem;
    --spacing-xl: 2rem;
    --spacing-2xl: 3rem;

    /* Ombres */
    --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07);
    --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15);

    /* Bordures */
    --radius-sm: 0.375rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
    --radius-xl: 1rem;

    /* Transitions */
    --transition-fast: 150ms ease;
    --transition-base: 250ms ease;
    --transition-slow: 350ms ease;
}

/* ===========================
   Reset & Base
   =========================== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--font-body);
    font-size: 15px;
    line-height: 1.6;
    color: var(--grey-800);
    background: var(--off-white);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-display);
    font-weight: 600;
    line-height: 1.3;
    color: var(--grey-900);
}

h1 { font-size: 2.5rem; }
h2 { font-size: 2rem; }
h3 { font-size: 1.5rem; }

a {
    text-decoration: none;
    color: inherit;
}

button {
    font-family: var(--font-body);
    cursor: pointer;
    border: none;
    outline: none;
}

input, select, textarea {
    font-family: var(--font-body);
    font-size: 14px;
}

/* ===========================
   PAGE LOGIN
   =========================== */
.login-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #f5f7f3 0%, #e8ede3 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.login-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1200px;
    width: 100%;
    background: var(--white);
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow-xl);
    overflow: hidden;
    animation: slideUp 0.6s ease;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.login-left {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-light) 100%);
    padding: 4rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative;
    overflow: hidden;
}

.library-illustration {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.15;
}

.book-stack {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.book {
    width: 200px;
    height: 40px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 4px;
    animation: float 3s ease-in-out infinite;
}

.book-1 { animation-delay: 0s; }
.book-2 { animation-delay: 0.2s; width: 180px; }
.book-3 { animation-delay: 0.4s; width: 220px; }
.book-4 { animation-delay: 0.6s; width: 190px; }

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.floating-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.particle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: rgba(255, 255, 255, 0.4);
    border-radius: 50%;
    animation: rise 8s ease-in-out infinite;
}

.particle:nth-child(1) { left: 10%; animation-delay: 0s; }
.particle:nth-child(2) { left: 30%; animation-delay: 2s; }
.particle:nth-child(3) { left: 50%; animation-delay: 4s; }
.particle:nth-child(4) { left: 70%; animation-delay: 1s; }
.particle:nth-child(5) { left: 90%; animation-delay: 3s; }

@keyframes rise {
    0% { bottom: 0; opacity: 0; }
    50% { opacity: 0.6; }
    100% { bottom: 100%; opacity: 0; }
}

.welcome-text {
    position: relative;
    z-index: 1;
}

.welcome-text h1 {
    color: var(--white);
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.1;
}

.welcome-text p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.1rem;
    font-weight: 300;
    max-width: 400px;
}

.login-right {
    padding: 4rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-form-wrapper {
    width: 100%;
    max-width: 420px;
}

.login-header {
    margin-bottom: 2.5rem;
}

.login-header h2 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
    color: var(--grey-900);
}

.login-header p {
    color: var(--grey-600);
    font-size: 0.95rem;
}

.login-form .form-group {
    margin-bottom: 1.5rem;
}

.login-form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: var(--grey-700);
    font-size: 0.9rem;
}

.login-form input {
    width: 100%;
    padding: 0.875rem 1rem;
    border: 2px solid var(--grey-200);
    border-radius: var(--radius-md);
    transition: all var(--transition-base);
    background: var(--white);
}

.login-form input:focus {
    outline: none;
    border-color: var(--primary-green);
    box-shadow: 0 0 0 3px rgba(44, 95, 45, 0.1);
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.checkbox-wrapper {
    display: flex;
    align-items: center;
    cursor: pointer;
}

.checkbox-wrapper input[type="checkbox"] {
    width: auto;
    margin-right: 0.5rem;
}

.checkbox-label {
    font-size: 0.9rem;
    color: var(--grey-700);
}

.forgot-password {
    color: var(--primary-green);
    font-size: 0.9rem;
    font-weight: 500;
    transition: color var(--transition-fast);
}

.forgot-password:hover {
    color: var(--primary-light);
}

.btn-primary {
    width: 100%;
    padding: 1rem;
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-light) 100%);
    color: var(--white);
    border-radius: var(--radius-md);
    font-weight: 600;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: all var(--transition-base);
    box-shadow: var(--shadow-md);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.btn-primary:active {
    transform: translateY(0);
}

.login-footer {
    margin-top: 2rem;
    text-align: center;
}

.login-footer p {
    color: var(--grey-500);
    font-size: 0.85rem;
}

/* ===========================
   DASHBOARD LAYOUT
   =========================== */
.dashboard-page {
    display: grid;
    grid-template-columns: 280px 1fr;
    min-height: 100vh;
    background: var(--off-white);
}

/* ===========================
   SIDEBAR
   =========================== */
.sidebar {
    background: var(--white);
    border-right: 1px solid var(--grey-200);
    display: flex;
    flex-direction: column;
    position: sticky;
    top: 0;
    height: 100vh;
}

.sidebar-header {
    padding: 2rem 1.5rem;
    border-bottom: 1px solid var(--grey-200);
}

.logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.logo span {
    font-family: var(--font-display);
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-green);
}

.sidebar-nav {
    flex: 1;
    padding: 1.5rem 1rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.nav-item {
    display: flex;
    align-items: center;
    gap: 0.875rem;
    padding: 0.875rem 1rem;
    border-radius: var(--radius-md);
    color: var(--grey-600);
    font-weight: 500;
    font-size: 0.95rem;
    transition: all var(--transition-fast);
    position: relative;
}

.nav-item svg {
    flex-shrink: 0;
}

.nav-item:hover {
    background: var(--grey-50);
    color: var(--primary-green);
}

.nav-item.active {
    background: linear-gradient(135deg, rgba(44, 95, 45, 0.1) 0%, rgba(151, 188, 98, 0.1) 100%);
    color: var(--primary-green);
}

.nav-item.active::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 70%;
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-light) 100%);
    border-radius: 0 4px 4px 0;
}

.sidebar-footer {
    padding: 1.5rem;
    border-top: 1px solid var(--grey-200);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.user-profile {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-light) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-weight: 600;
    font-size: 0.9rem;
}

.user-info {
    flex: 1;
}

.user-name {
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--grey-800);
}

.user-role {
    font-size: 0.8rem;
    color: var(--grey-500);
}

.logout-btn {
    width: 40px;
    height: 40px;
    border-radius: var(--radius-md);
    background: var(--grey-50);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--grey-600);
    transition: all var(--transition-fast);
}

.logout-btn:hover {
    background: var(--error);
    color: var(--white);
}

/* ===========================
   MAIN CONTENT
   =========================== */
.main-content {
    padding: 2rem;
    max-width: 1600px;
}

.content-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 2rem;
}

.header-left h1 {
    font-size: 2rem;
    margin-bottom: 0.25rem;
}

.breadcrumb {
    color: var(--grey-500);
    font-size: 0.9rem;
}

.header-right {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.search-bar {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.25rem;
    background: var(--white);
    border: 1px solid var(--grey-200);
    border-radius: var(--radius-lg);
    min-width: 300px;
    transition: all var(--transition-fast);
}

.search-bar:focus-within {
    border-color: var(--primary-green);
    box-shadow: 0 0 0 3px rgba(44, 95, 45, 0.1);
}

.search-bar svg {
    color: var(--grey-400);
}

.search-bar input {
    border: none;
    outline: none;
    background: transparent;
    width: 100%;
    color: var(--grey-800);
}

.search-bar input::placeholder {
    color: var(--grey-400);
}

.notification-btn {
    position: relative;
    width: 44px;
    height: 44px;
    border-radius: var(--radius-md);
    background: var(--white);
    border: 1px solid var(--grey-200);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--grey-600);
    transition: all var(--transition-fast);
}

.notification-btn:hover {
    background: var(--grey-50);
    border-color: var(--primary-green);
    color: var(--primary-green);
}

.notification-badge {
    position: absolute;
    top: -4px;
    right: -4px;
    width: 20px;
    height: 20px;
    background: var(--error);
    color: var(--white);
    border-radius: 50%;
    font-size: 0.7rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid var(--white);
}

/* ===========================
   STATS GRID
   =========================== */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: var(--white);
    padding: 1.75rem;
    border-radius: var(--radius-lg);
    border: 1px solid var(--grey-200);
    display: flex;
    gap: 1.25rem;
    transition: all var(--transition-base);
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-green);
}

.stat-icon {
    width: 64px;
    height: 64px;
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon.books {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: var(--white);
}

.stat-icon.members {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: var(--white);
}

.stat-icon.loans {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    color: var(--white);
}

.stat-icon.returns {
    background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    color: var(--white);
}

.stat-content {
    flex: 1;
}

.stat-content h3 {
    font-size: 2rem;
    font-weight: 700;
    color: var(--grey-900);
    margin-bottom: 0.25rem;
}

.stat-content p {
    color: var(--grey-600);
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
}

.stat-change {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.85rem;
    font-weight: 600;
    padding: 0.25rem 0.75rem;
    border-radius: 999px;
}

.stat-change.positive {
    background: rgba(16, 185, 129, 0.1);
    color: var(--success);
}

.stat-change.negative {
    background: rgba(239, 68, 68, 0.1);
    color: var(--error);
}

.change-label {
    font-weight: 400;
    color: var(--grey-500);
}

/* ===========================
   CONTENT GRID
   =========================== */
.content-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.card {
    background: var(--white);
    border: 1px solid var(--grey-200);
    border-radius: var(--radius-lg);
    overflow: hidden;
}

.card-header {
    padding: 1.5rem;
    border-bottom: 1px solid var(--grey-200);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h2 {
    font-size: 1.25rem;
    color: var(--grey-900);
}

.view-all {
    color: var(--primary-green);
    font-size: 0.9rem;
    font-weight: 500;
    transition: color var(--transition-fast);
}

.view-all:hover {
    color: var(--primary-light);
}

/* ===========================
   ACTIVITY LIST
   =========================== */
.activity-list {
    padding: 1rem;
}

.activity-item {
    display: flex;
    gap: 1rem;
    padding: 1rem;
    border-radius: var(--radius-md);
    transition: background var(--transition-fast);
}

.activity-item:hover {
    background: var(--grey-50);
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.activity-icon.loan {
    background: rgba(79, 172, 254, 0.15);
    color: #4facfe;
}

.activity-icon.return {
    background: rgba(67, 233, 123, 0.15);
    color: #43e97b;
}

.activity-icon.book {
    background: rgba(102, 126, 234, 0.15);
    color: #667eea;
}

.activity-icon.member {
    background: rgba(240, 147, 251, 0.15);
    color: #f093fb;
}

.activity-content {
    flex: 1;
}

.activity-title {
    font-size: 0.95rem;
    color: var(--grey-800);
    margin-bottom: 0.25rem;
}

.activity-desc {
    font-size: 0.9rem;
    color: var(--grey-600);
    margin-bottom: 0.5rem;
}

.activity-time {
    font-size: 0.8rem;
    color: var(--grey-400);
}

/* ===========================
   POPULAR BOOKS
   =========================== */
.filter-select {
    padding: 0.5rem 1rem;
    border: 1px solid var(--grey-200);
    border-radius: var(--radius-md);
    background: var(--white);
    color: var(--grey-700);
    font-size: 0.9rem;
    cursor: pointer;
    transition: all var(--transition-fast);
}

.filter-select:hover {
    border-color: var(--primary-green);
}

.popular-list {
    padding: 1rem;
}

.popular-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border-radius: var(--radius-md);
    transition: background var(--transition-fast);
}

.popular-item:hover {
    background: var(--grey-50);
}

.book-rank {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-light) 100%);
    color: var(--white);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.9rem;
    flex-shrink: 0;
}

.book-cover {
    width: 48px;
    height: 64px;
    border-radius: var(--radius-sm);
    flex-shrink: 0;
    box-shadow: var(--shadow-md);
}

.book-info {
    flex: 1;
}

.book-info h4 {
    font-size: 1rem;
    color: var(--grey-900);
    margin-bottom: 0.25rem;
}

.book-info p {
    font-size: 0.85rem;
    color: var(--grey-600);
    margin-bottom: 0.5rem;
}

.stat-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: rgba(44, 95, 45, 0.1);
    color: var(--primary-green);
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* ===========================
   ALERTS
   =========================== */
.alerts-section {
    margin-bottom: 2rem;
}

.alert {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.25rem;
    background: var(--white);
    border: 1px solid var(--grey-200);
    border-left: 4px solid;
    border-radius: var(--radius-lg);
}

.alert.alert-warning {
    border-left-color: var(--warning);
    background: rgba(245, 158, 11, 0.05);
}

.alert svg {
    color: var(--warning);
    flex-shrink: 0;
}

.alert-content {
    flex: 1;
}

.alert-content strong {
    display: block;
    color: var(--grey-900);
    margin-bottom: 0.25rem;
}

.alert-content p {
    color: var(--grey-600);
    font-size: 0.9rem;
}

.alert-action {
    padding: 0.625rem 1.25rem;
    background: var(--warning);
    color: var(--white);
    border-radius: var(--radius-md);
    font-weight: 500;
    font-size: 0.9rem;
    transition: all var(--transition-fast);
}

.alert-action:hover {
    background: #d97706;
    transform: translateY(-1px);
}

/* ===========================
   FILTERS BAR
   =========================== */
.filters-bar {
    display: flex;
    gap: 1rem;
    padding: 1.5rem;
    background: var(--white);
    border: 1px solid var(--grey-200);
    border-radius: var(--radius-lg);
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.filter-group label {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--grey-700);
}

.btn-secondary {
    padding: 0.625rem 1.25rem;
    background: var(--grey-100);
    color: var(--grey-700);
    border-radius: var(--radius-md);
    font-weight: 500;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all var(--transition-fast);
    align-self: flex-end;
}

.btn-secondary:hover {
    background: var(--grey-200);
}

/* ===========================
   DATA TABLE
   =========================== */
.data-table-wrapper {
    background: var(--white);
    border: 1px solid var(--grey-200);
    border-radius: var(--radius-lg);
    overflow: hidden;
    margin-bottom: 1.5rem;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table thead {
    background: var(--grey-50);
}

.data-table th {
    padding: 1rem 1.25rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.85rem;
    color: var(--grey-700);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-bottom: 1px solid var(--grey-200);
}

.data-table td {
    padding: 1rem 1.25rem;
    border-bottom: 1px solid var(--grey-200);
    color: var(--grey-800);
}

.data-table tbody tr {
    transition: background var(--transition-fast);
}

.data-table tbody tr:hover {
    background: var(--grey-50);
}

.checkbox {
    width: 18px;
    height: 18px;
    cursor: pointer;
    accent-color: var(--primary-green);
}

.isbn-code {
    font-family: 'Courier New', monospace;
    font-size: 0.85rem;
    padding: 0.25rem 0.5rem;
    background: var(--grey-100);
    border-radius: var(--radius-sm);
    color: var(--grey-700);
}

.book-cell {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.book-mini-cover {
    width: 36px;
    height: 48px;
    border-radius: var(--radius-sm);
    box-shadow: var(--shadow-sm);
    flex-shrink: 0;
}

.book-title {
    font-weight: 500;
    color: var(--grey-900);
}

.category-badge {
    display: inline-block;
    padding: 0.375rem 0.875rem;
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 600;
}

.category-badge.roman {
    background: rgba(102, 126, 234, 0.15);
    color: #667eea;
}

.category-badge.fiction {
    background: rgba(240, 147, 251, 0.15);
    color: #f093fb;
}

.category-badge.philosophy {
    background: rgba(79, 172, 254, 0.15);
    color: #4facfe;
}

.status-badge {
    display: inline-block;
    padding: 0.375rem 0.875rem;
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 600;
}

.status-badge.available {
    background: rgba(16, 185, 129, 0.15);
    color: var(--success);
}

.status-badge.borrowed {
    background: rgba(239, 68, 68, 0.15);
    color: var(--error);
}

.action-buttons {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    width: 32px;
    height: 32px;
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--grey-50);
    transition: all var(--transition-fast);
}

.action-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.action-btn.view {
    color: var(--info);
}

.action-btn.view:hover {
    background: rgba(59, 130, 246, 0.15);
}

.action-btn.edit {
    color: var(--warning);
}

.action-btn.edit:hover {
    background: rgba(245, 158, 11, 0.15);
}

.action-btn.delete {
    color: var(--error);
}

.action-btn.delete:hover {
    background: rgba(239, 68, 68, 0.15);
}

/* ===========================
   PAGINATION
   =========================== */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
}

.pagination-btn {
    min-width: 40px;
    height: 40px;
    padding: 0 0.75rem;
    border-radius: var(--radius-md);
    background: var(--white);
    border: 1px solid var(--grey-200);
    color: var(--grey-700);
    font-weight: 500;
    transition: all var(--transition-fast);
    display: flex;
    align-items: center;
    justify-content: center;
}

.pagination-btn:hover:not(:disabled) {
    background: var(--grey-50);
    border-color: var(--primary-green);
    color: var(--primary-green);
}

.pagination-btn.active {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-light) 100%);
    border-color: transparent;
    color: var(--white);
}

.pagination-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.pagination-dots {
    color: var(--grey-400);
    padding: 0 0.5rem;
}

/* ===========================
   MODAL
   =========================== */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    display: none;
}

.modal.active {
    display: block;
}

.modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: var(--white);
    border-radius: var(--radius-xl);
    max-width: 700px;
    width: 90%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: var(--shadow-xl);
    animation: slideIn 0.3s ease;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translate(-50%, -48%);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}

.modal-header {
    padding: 2rem;
    border-bottom: 1px solid var(--grey-200);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.modal-header h2 {
    font-size: 1.5rem;
    color: var(--grey-900);
}

.modal-close {
    width: 40px;
    height: 40px;
    border-radius: var(--radius-md);
    background: var(--grey-50);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--grey-600);
    transition: all var(--transition-fast);
}

.modal-close:hover {
    background: var(--grey-200);
    color: var(--grey-900);
}

.modal-form {
    padding: 2rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.modal-form .form-group {
    margin-bottom: 1.5rem;
}

.modal-form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--grey-700);
    font-size: 0.9rem;
}

.modal-form input,
.modal-form select,
.modal-form textarea {
    width: 100%;
    padding: 0.875rem 1rem;
    border: 2px solid var(--grey-200);
    border-radius: var(--radius-md);
    transition: all var(--transition-base);
    background: var(--white);
    color: var(--grey-800);
}

.modal-form input:focus,
.modal-form select:focus,
.modal-form textarea:focus {
    outline: none;
    border-color: var(--primary-green);
    box-shadow: 0 0 0 3px rgba(44, 95, 45, 0.1);
}

.modal-form textarea {
    resize: vertical;
    font-family: var(--font-body);
}

.modal-footer {
    padding: 1.5rem 2rem;
    border-top: 1px solid var(--grey-200);
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
}

/* ===========================
   RESPONSIVE
   =========================== */
@media (max-width: 1024px) {
    .login-container {
        grid-template-columns: 1fr;
    }

    .login-left {
        display: none;
    }

    .dashboard-page {
        grid-template-columns: 1fr;
    }

    .sidebar {
        display: none;
    }

    .content-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .content-header {
        flex-direction: column;
        gap: 1rem;
    }

    .header-right {
        width: 100%;
        flex-direction: column;
    }

    .search-bar {
        width: 100%;
    }

    .filters-bar {
        flex-direction: column;
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .stats-grid {
        grid-template-columns: 1fr;
    }
}


    </style>
</head>
<body class="dashboard-page">
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <rect width="40" height="40" rx="8" fill="url(#gradient1)"/>
                    <path d="M12 28V12L20 15L28 12V28L20 25L12 28Z" fill="white"/>
                    <defs>
                        <linearGradient id="gradient1" x1="0" y1="0" x2="40" y2="40">
                            <stop offset="0%" stop-color="#2c5f2d"/>
                            <stop offset="100%" stop-color="#97bc62"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span>BiblioGest</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <a href="dashboard" class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M3 10L10 3L17 10V17C17 17.55 16.55 18 16 18H4C3.45 18 3 17.55 3 17V10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Tableau de bord</span>
            </a>

            <a href="books" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4 2.5H16C16.55 2.5 17 2.95 17 3.5V16.5C17 17.05 16.55 17.5 16 17.5H4C3.45 17.5 3 17.05 3 16.5V3.5C3 2.95 3.45 2.5 4 2.5Z" stroke="currentColor" stroke-width="2"/>
                    <path d="M7 7H13M7 10H13M7 13H10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Livres</span>
            </a>

            <a href="members" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <circle cx="10" cy="7" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M4 17C4 14.2386 6.23858 12 9 12H11C13.7614 12 16 14.2386 16 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Membres</span>
            </a>

            <a href="loans" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M17 10L10 17L3 10L10 3L17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 7V13M7 10H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Emprunts</span>
            </a>

            <a href="returns" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M3 10H17M17 10L13 6M17 10L13 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Retours</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="avatar">AB</div>
                <div class="user-info">
                    <p class="user-name">Ahmed Benali</p>
                    <p class="user-role">Bibliothécaire</p>
                </div>
            </div>
            <button class="logout-btn">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M7 17H4C3.46957 17 2.96086 16.7893 2.58579 16.4142C2.21071 16.0391 2 15.5304 2 15V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H7M13 13L17 9M17 9L13 5M17 9H7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </aside>

    <main class="main-content">
        <header class="content-header">
            <div class="header-left">
                <h1>Tableau de bord</h1>
                <p class="breadcrumb">Accueil / Dashboard</p>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="2"/>
                        <path d="M14 14L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <input type="text" placeholder="Rechercher...">
                </div>
                <button class="notification-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="notification-badge">3</span>
                </button>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon books">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M6 4H26C26.55 4 27 4.45 27 5V27C27 27.55 26.55 28 26 28H6C5.45 28 5 27.55 5 27V5C5 4.45 5.45 4 6 4Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>2,547</h3>
                    <p>Livres au total</p>
                    <div class="stat-change positive">
                        <span>+12%</span>
                        <span class="change-label">ce mois</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon members">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <circle cx="16" cy="11" r="5" stroke="currentColor" stroke-width="2"/>
                        <path d="M6 27C6 22.5817 9.58172 19 14 19H18C22.4183 19 26 22.5817 26 27" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>842</h3>
                    <p>Membres actifs</p>
                    <div class="stat-change positive">
                        <span>+8%</span>
                        <span class="change-label">ce mois</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon loans">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M27 16L16 27L5 16L16 5L27 16Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>156</h3>
                    <p>Emprunts en cours</p>
                    <div class="stat-change negative">
                        <span>-3%</span>
                        <span class="change-label">ce mois</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon returns">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M6 16H26M26 16L20 10M26 16L20 22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>89</h3>
                    <p>Retours cette semaine</p>
                    <div class="stat-change positive">
                        <span>+15%</span>
                        <span class="change-label">ce mois</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-grid">
            <div class="card recent-activity">
                <div class="card-header">
                    <h2>Activité récente</h2>
                    <a href="#" class="view-all">Voir tout</a>
                </div>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon loan">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M13 8L8 13L3 8L8 3L13 8Z" stroke="currentColor" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title"><strong>Nouveau emprunt</strong></p>
                            <p class="activity-desc">Sarah El Alami a emprunté "Le Petit Prince"</p>
                            <span class="activity-time">Il y a 5 minutes</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon return">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title"><strong>Retour effectué</strong></p>
                            <p class="activity-desc">Mohamed Idrissi a retourné "1984" de George Orwell</p>
                            <span class="activity-time">Il y a 23 minutes</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon book">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 2H13C13.55 2 14 2.45 14 3V13C14 13.55 13.55 14 13 14H3C2.45 14 2 13.55 2 13V3C2 2.45 2.45 2 3 2Z" stroke="currentColor" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title"><strong>Nouveau livre ajouté</strong></p>
                            <p class="activity-desc">"L'Étranger" d'Albert Camus - 3 exemplaires</p>
                            <span class="activity-time">Il y a 1 heure</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon member">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <circle cx="8" cy="6" r="2.5" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M3 14C3 11.7909 4.79086 10 7 10H9C11.2091 10 13 11.7909 13 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title"><strong>Nouveau membre</strong></p>
                            <p class="activity-desc">Inscription de Fatima Zahra Bennani</p>
                            <span class="activity-time">Il y a 2 heures</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon loan">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M13 8L8 13L3 8L8 3L13 8Z" stroke="currentColor" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title"><strong>Emprunt prolongé</strong></p>
                            <p class="activity-desc">Youssef Amrani a prolongé "Les Misérables"</p>
                            <span class="activity-time">Il y a 3 heures</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card popular-books">
                <div class="card-header">
                    <h2>Livres populaires</h2>
                    <select class="filter-select">
                        <option>Cette semaine</option>
                        <option>Ce mois</option>
                        <option>Cette année</option>
                    </select>
                </div>
                <div class="popular-list">
                    <div class="popular-item">
                        <div class="book-rank">1</div>
                        <div class="book-cover" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                        <div class="book-info">
                            <h4>Le Petit Prince</h4>
                            <p>Antoine de Saint-Exupéry</p>
                            <div class="book-stats">
                                <span class="stat-badge">47 emprunts</span>
                            </div>
                        </div>
                    </div>

                    <div class="popular-item">
                        <div class="book-rank">2</div>
                        <div class="book-cover" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                        <div class="book-info">
                            <h4>1984</h4>
                            <p>George Orwell</p>
                            <div class="book-stats">
                                <span class="stat-badge">42 emprunts</span>
                            </div>
                        </div>
                    </div>

                    <div class="popular-item">
                        <div class="book-rank">3</div>
                        <div class="book-cover" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
                        <div class="book-info">
                            <h4>L'Étranger</h4>
                            <p>Albert Camus</p>
                            <div class="book-stats">
                                <span class="stat-badge">38 emprunts</span>
                            </div>
                        </div>
                    </div>

                    <div class="popular-item">
                        <div class="book-rank">4</div>
                        <div class="book-cover" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
                        <div class="book-info">
                            <h4>Les Misérables</h4>
                            <p>Victor Hugo</p>
                            <div class="book-stats">
                                <span class="stat-badge">35 emprunts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alerts-section">
            <div class="alert alert-warning">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M10 6V10M10 14H10.01M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <div class="alert-content">
                    <strong>12 emprunts arrivent à échéance</strong>
                    <p>dans les prochaines 48 heures</p>
                </div>
                <button class="alert-action">Voir les détails</button>
            </div>
        </div>
    </main>
</body>
</html>
