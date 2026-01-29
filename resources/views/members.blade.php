<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Membres - Bibliothèque Municipale</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/views/css/styles.css">
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
            <a href="dashboard.html" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M3 10L10 3L17 10V17C17 17.55 16.55 18 16 18H4C3.45 18 3 17.55 3 17V10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Tableau de bord</span>
            </a>

            <a href="books.html" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M4 2.5H16C16.55 2.5 17 2.95 17 3.5V16.5C17 17.05 16.55 17.5 16 17.5H4C3.45 17.5 3 17.05 3 16.5V3.5C3 2.95 3.45 2.5 4 2.5Z" stroke="currentColor" stroke-width="2"/>
                    <path d="M7 7H13M7 10H13M7 13H10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Livres</span>
            </a>

            <a href="members.html" class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <circle cx="10" cy="7" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M4 17C4 14.2386 6.23858 12 9 12H11C13.7614 12 16 14.2386 16 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Membres</span>
            </a>

            <a href="loans.html" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M17 10L10 17L3 10L10 3L17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 7V13M7 10H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Emprunts</span>
            </a>

            <a href="returns.html" class="nav-item">
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
                <h1>Gestion des Membres</h1>
                <p class="breadcrumb">Accueil / Membres</p>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="2"/>
                        <path d="M14 14L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <input type="text" placeholder="Rechercher un membre...">
                </div>
                <button class="btn-primary" onclick="openModal('addMemberModal')">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10 4V16M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Ajouter un membre</span>
                </button>
            </div>
        </header>

        <div class="filters-bar">
            <div class="filter-group">
                <label>Statut</label>
                <select class="filter-select">
                    <option>Tous les statuts</option>
                    <option>Actif</option>
                    <option>Inactif</option>
                    <option>Suspendu</option>
                </select>
            </div>

            <div class="filter-group">
                <label>Trier par</label>
                <select class="filter-select">
                    <option>Date d'inscription (récent)</option>
                    <option>Date d'inscription (ancien)</option>
                    <option>Nom (A-Z)</option>
                    <option>Nom (Z-A)</option>
                </select>
            </div>

            <button class="btn-secondary">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M7 13L2 9M2 9L7 5M2 9H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                Réinitialiser
            </button>
        </div>

        <div class="members-grid">
            <div class="member-card">
                <div class="member-header">
                    <div class="member-avatar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">SE</div>
                    <div class="member-actions">
                        <button class="action-btn-small edit" title="Modifier">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="action-btn-small delete" title="Supprimer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Sarah El Alami</h3>
                    <p class="member-email">sarah.elalami@email.ma</p>
                    <p class="member-id">ID: #00842</p>
                </div>
                <div class="member-stats">
                    <div class="stat-item">
                        <span class="stat-value">12</span>
                        <span class="stat-label">Emprunts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">2</span>
                        <span class="stat-label">En cours</span>
                    </div>
                </div>
                <div class="member-footer">
                    <span class="status-badge active">Actif</span>
                    <span class="member-date">Depuis Jan 2024</span>
                </div>
            </div>

            <div class="member-card">
                <div class="member-header">
                    <div class="member-avatar" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">MI</div>
                    <div class="member-actions">
                        <button class="action-btn-small edit" title="Modifier">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="action-btn-small delete" title="Supprimer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Mohamed Idrissi</h3>
                    <p class="member-email">mohamed.idrissi@email.ma</p>
                    <p class="member-id">ID: #00735</p>
                </div>
                <div class="member-stats">
                    <div class="stat-item">
                        <span class="stat-value">8</span>
                        <span class="stat-label">Emprunts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">1</span>
                        <span class="stat-label">En cours</span>
                    </div>
                </div>
                <div class="member-footer">
                    <span class="status-badge active">Actif</span>
                    <span class="member-date">Depuis Mar 2023</span>
                </div>
            </div>

            <div class="member-card">
                <div class="member-header">
                    <div class="member-avatar" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">FB</div>
                    <div class="member-actions">
                        <button class="action-btn-small edit" title="Modifier">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="action-btn-small delete" title="Supprimer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Fatima Bennani</h3>
                    <p class="member-email">fatima.bennani@email.ma</p>
                    <p class="member-id">ID: #00891</p>
                </div>
                <div class="member-stats">
                    <div class="stat-item">
                        <span class="stat-value">5</span>
                        <span class="stat-label">Emprunts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">0</span>
                        <span class="stat-label">En cours</span>
                    </div>
                </div>
                <div class="member-footer">
                    <span class="status-badge active">Actif</span>
                    <span class="member-date">Depuis Nov 2024</span>
                </div>
            </div>

            <div class="member-card">
                <div class="member-header">
                    <div class="member-avatar" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">YA</div>
                    <div class="member-actions">
                        <button class="action-btn-small edit" title="Modifier">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="action-btn-small delete" title="Supprimer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Youssef Amrani</h3>
                    <p class="member-email">youssef.amrani@email.ma</p>
                    <p class="member-id">ID: #00623</p>
                </div>
                <div class="member-stats">
                    <div class="stat-item">
                        <span class="stat-value">18</span>
                        <span class="stat-label">Emprunts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">3</span>
                        <span class="stat-label">En cours</span>
                    </div>
                </div>
                <div class="member-footer">
                    <span class="status-badge active">Actif</span>
                    <span class="member-date">Depuis Fév 2022</span>
                </div>
            </div>

            <div class="member-card">
                <div class="member-header">
                    <div class="member-avatar" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">LE</div>
                    <div class="member-actions">
                        <button class="action-btn-small edit" title="Modifier">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="action-btn-small delete" title="Supprimer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Laila El Fassi</h3>
                    <p class="member-email">laila.elfassi@email.ma</p>
                    <p class="member-id">ID: #00754</p>
                </div>
                <div class="member-stats">
                    <div class="stat-item">
                        <span class="stat-value">6</span>
                        <span class="stat-label">Emprunts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">1</span>
                        <span class="stat-label">En cours</span>
                    </div>
                </div>
                <div class="member-footer">
                    <span class="status-badge inactive">Inactif</span>
                    <span class="member-date">Depuis Jui 2023</span>
                </div>
            </div>

            <div class="member-card">
                <div class="member-header">
                    <div class="member-avatar" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">KM</div>
                    <div class="member-actions">
                        <button class="action-btn-small edit" title="Modifier">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="action-btn-small delete" title="Supprimer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Karim Mansouri</h3>
                    <p class="member-email">karim.mansouri@email.ma</p>
                    <p class="member-id">ID: #00867</p>
                </div>
                <div class="member-stats">
                    <div class="stat-item">
                        <span class="stat-value">10</span>
                        <span class="stat-label">Emprunts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">2</span>
                        <span class="stat-label">En cours</span>
                    </div>
                </div>
                <div class="member-footer">
                    <span class="status-badge active">Actif</span>
                    <span class="member-date">Depuis Sep 2024</span>
                </div>
            </div>
        </div>

        <div class="pagination">
            <button class="pagination-btn" disabled>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <span class="pagination-dots">...</span>
            <button class="pagination-btn">8</button>
            <button class="pagination-btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </main>

    <!-- Modal Ajouter un membre -->
    <div class="modal" id="addMemberModal">
        <div class="modal-overlay" onclick="closeModal('addMemberModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2>Ajouter un nouveau membre</h2>
                <button class="modal-close" onclick="closeModal('addMemberModal')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <form class="modal-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">Prénom *</label>
                        <input type="text" id="firstName" placeholder="Prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Nom *</label>
                        <input type="text" id="lastName" placeholder="Nom" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="memberEmail">Adresse email *</label>
                        <input type="email" id="memberEmail" placeholder="exemple@email.ma" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone *</label>
                        <input type="tel" id="phone" placeholder="+212 6XX XXX XXX" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Adresse complète *</label>
                    <input type="text" id="address" placeholder="Adresse, Ville" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="dateOfBirth">Date de naissance</label>
                        <input type="date" id="dateOfBirth">
                    </div>
                    <div class="form-group">
                        <label for="cin">CIN</label>
                        <input type="text" id="cin" placeholder="AB123456">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-secondary" onclick="closeModal('addMemberModal')">Annuler</button>
                    <button type="submit" class="btn-primary">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16 5L7.5 13.5L4 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Enregistrer</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
            document.body.style.overflow = '';
        }
    </script>

    <style>
        .members-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .member-card {
            background: var(--white);
            border: 1px solid var(--grey-200);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            transition: all var(--transition-base);
        }

        .member-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-green);
        }

        .member-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .member-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 1.25rem;
            box-shadow: var(--shadow-md);
        }

        .member-actions {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn-small {
            width: 32px;
            height: 32px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--grey-50);
            transition: all var(--transition-fast);
        }

        .action-btn-small.edit {
            color: var(--warning);
        }

        .action-btn-small.edit:hover {
            background: rgba(245, 158, 11, 0.15);
        }

        .action-btn-small.delete {
            color: var(--error);
        }

        .action-btn-small.delete:hover {
            background: rgba(239, 68, 68, 0.15);
        }

        .member-info {
            margin-bottom: 1.25rem;
        }

        .member-info h3 {
            font-size: 1.25rem;
            color: var(--grey-900);
            margin-bottom: 0.5rem;
        }

        .member-email {
            color: var(--grey-600);
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }

        .member-id {
            color: var(--grey-500);
            font-size: 0.85rem;
            font-weight: 600;
        }

        .member-stats {
            display: flex;
            gap: 2rem;
            padding: 1rem 0;
            border-top: 1px solid var(--grey-100);
            border-bottom: 1px solid var(--grey-100);
            margin-bottom: 1rem;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-green);
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--grey-600);
        }

        .member-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-badge.active {
            background: rgba(16, 185, 129, 0.15);
            color: var(--success);
        }

        .status-badge.inactive {
            background: rgba(107, 114, 128, 0.15);
            color: var(--grey-600);
        }

        .member-date {
            font-size: 0.85rem;
            color: var(--grey-500);
        }

        @media (max-width: 768px) {
            .members-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</body>
</html>
