<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Emprunts - Bibliothèque Municipale</title>
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
            <a href="dashboard" class="nav-item">
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

            <a href="loans" class="nav-item active">
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
                <h1>Gestion des Emprunts</h1>
                <p class="breadcrumb">Accueil / Emprunts</p>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="2"/>
                        <path d="M14 14L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <input type="text" placeholder="Rechercher un emprunt...">
                </div>
                <button class="btn-primary" onclick="openModal('addLoanModal')">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10 4V16M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Nouvel emprunt</span>
                </button>
            </div>
        </header>

        <div class="filters-bar">
            <div class="filter-group">
                <label>Statut</label>
                <select class="filter-select">
                    <option>Tous les statuts</option>
                    <option>En cours</option>
                    <option>En retard</option>
                    <option>Retourné</option>
                </select>
            </div>

            <div class="filter-group">
                <label>Période</label>
                <select class="filter-select">
                    <option>Tous</option>
                    <option>Cette semaine</option>
                    <option>Ce mois</option>
                    <option>Cette année</option>
                </select>
            </div>

            <div class="filter-group">
                <label>Trier par</label>
                <select class="filter-select">
                    <option>Date (récent)</option>
                    <option>Date (ancien)</option>
                    <option>Date de retour</option>
                </select>
            </div>

            <button class="btn-secondary">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M7 13L2 9M2 9L7 5M2 9H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                Réinitialiser
            </button>
        </div>

        <div class="data-table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="checkbox"></th>
                        <th>ID</th>
                        <th>Livre</th>
                        <th>Membre</th>
                        <th>Date d'emprunt</th>
                        <th>Date de retour prévue</th>
                        <th>Jours restants</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="checkbox"></td>
                        <td><span class="loan-id">#L1247</span></td>
                        <td>
                            <div class="book-cell">
                                <div class="book-mini-cover" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                                <span class="book-title">Le Petit Prince</span>
                            </div>
                        </td>
                        <td>Sarah El Alami</td>
                        <td>22 Jan 2026</td>
                        <td>05 Fév 2026</td>
                        <td><span class="days-remaining">9 jours</span></td>
                        <td><span class="status-badge active">En cours</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Détails">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M1 8C1 8 3.5 3 8 3C12.5 3 15 8 15 8C15 8 12.5 13 8 13C3.5 13 1 8 1 8Z" stroke="currentColor" stroke-width="1.5"/>
                                        <circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                                <button class="action-btn edit" title="Prolonger">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M8 4V8L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                        <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="row-warning">
                        <td><input type="checkbox" class="checkbox"></td>
                        <td><span class="loan-id">#L1198</span></td>
                        <td>
                            <div class="book-cell">
                                <div class="book-mini-cover" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                                <span class="book-title">1984</span>
                            </div>
                        </td>
                        <td>Mohamed Idrissi</td>
                        <td>10 Jan 2026</td>
                        <td>24 Jan 2026</td>
                        <td><span class="days-overdue">3 jours de retard</span></td>
                        <td><span class="status-badge borrowed">En retard</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Détails">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M1 8C1 8 3.5 3 8 3C12.5 3 15 8 15 8C15 8 12.5 13 8 13C3.5 13 1 8 1 8Z" stroke="currentColor" stroke-width="1.5"/>
                                        <circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                                <button class="action-btn delete" title="Relancer">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M13 3L6 10L3 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkbox"></td>
                        <td><span class="loan-id">#L1235</span></td>
                        <td>
                            <div class="book-cell">
                                <div class="book-mini-cover" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
                                <span class="book-title">L'Étranger</span>
                            </div>
                        </td>
                        <td>Youssef Amrani</td>
                        <td>18 Jan 2026</td>
                        <td>01 Fév 2026</td>
                        <td><span class="days-remaining">5 jours</span></td>
                        <td><span class="status-badge active">En cours</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Détails">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M1 8C1 8 3.5 3 8 3C12.5 3 15 8 15 8C15 8 12.5 13 8 13C3.5 13 1 8 1 8Z" stroke="currentColor" stroke-width="1.5"/>
                                        <circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                                <button class="action-btn edit" title="Prolonger">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M8 4V8L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                        <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkbox"></td>
                        <td><span class="loan-id">#L1221</span></td>
                        <td>
                            <div class="book-cell">
                                <div class="book-mini-cover" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
                                <span class="book-title">Les Misérables</span>
                            </div>
                        </td>
                        <td>Laila El Fassi</td>
                        <td>15 Jan 2026</td>
                        <td>29 Jan 2026</td>
                        <td><span class="days-remaining">2 jours</span></td>
                        <td><span class="status-badge active">En cours</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Détails">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M1 8C1 8 3.5 3 8 3C12.5 3 15 8 15 8C15 8 12.5 13 8 13C3.5 13 1 8 1 8Z" stroke="currentColor" stroke-width="1.5"/>
                                        <circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                                <button class="action-btn edit" title="Prolonger">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M8 4V8L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                        <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkbox"></td>
                        <td><span class="loan-id">#L1189</span></td>
                        <td>
                            <div class="book-cell">
                                <div class="book-mini-cover" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);"></div>
                                <span class="book-title">Madame Bovary</span>
                            </div>
                        </td>
                        <td>Karim Mansouri</td>
                        <td>08 Jan 2026</td>
                        <td>22 Jan 2026</td>
                        <td><span class="days-returned">Retourné</span></td>
                        <td><span class="status-badge returned">Retourné</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Détails">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M1 8C1 8 3.5 3 8 3C12.5 3 15 8 15 8C15 8 12.5 13 8 13C3.5 13 1 8 1 8Z" stroke="currentColor" stroke-width="1.5"/>
                                        <circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
            <button class="pagination-btn">7</button>
            <button class="pagination-btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </main>

    <!-- Modal Nouvel emprunt -->
    <div class="modal" id="addLoanModal">
        <div class="modal-overlay" onclick="closeModal('addLoanModal')"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2>Enregistrer un nouvel emprunt</h2>
                <button class="modal-close" onclick="closeModal('addLoanModal')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <form class="modal-form">
                <div class="form-group">
                    <label for="loanMember">Membre *</label>
                    <select id="loanMember" required>
                        <option value="">Sélectionner un membre</option>
                        <option>Sarah El Alami (#00842)</option>
                        <option>Mohamed Idrissi (#00735)</option>
                        <option>Fatima Bennani (#00891)</option>
                        <option>Youssef Amrani (#00623)</option>
                        <option>Laila El Fassi (#00754)</option>
                        <option>Karim Mansouri (#00867)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="loanBook">Livre *</label>
                    <select id="loanBook" required>
                        <option value="">Sélectionner un livre</option>
                        <option>Le Petit Prince - Antoine de Saint-Exupéry</option>
                        <option>1984 - George Orwell</option>
                        <option>L'Étranger - Albert Camus</option>
                        <option>Les Misérables - Victor Hugo</option>
                        <option>Madame Bovary - Gustave Flaubert</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="loanDate">Date d'emprunt *</label>
                        <input type="date" id="loanDate" required>
                    </div>
                    <div class="form-group">
                        <label for="returnDate">Date de retour prévue *</label>
                        <input type="date" id="returnDate" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="loanNotes">Notes (optionnel)</label>
                    <textarea id="loanNotes" rows="3" placeholder="Observations ou remarques..."></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-secondary" onclick="closeModal('addLoanModal')">Annuler</button>
                    <button type="submit" class="btn-primary">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16 5L7.5 13.5L4 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Enregistrer l'emprunt</span>
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
        .loan-id {
            font-family: 'Courier New', monospace;
            font-size: 0.85rem;
            padding: 0.25rem 0.5rem;
            background: var(--grey-100);
            border-radius: var(--radius-sm);
            color: var(--grey-700);
            font-weight: 600;
        }

        .days-remaining {
            color: var(--success);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .days-overdue {
            color: var(--error);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .days-returned {
            color: var(--grey-500);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status-badge.returned {
            background: rgba(107, 114, 128, 0.15);
            color: var(--grey-600);
        }

        .row-warning {
            background: rgba(239, 68, 68, 0.03);
        }

        .row-warning:hover {
            background: rgba(239, 68, 68, 0.05) !important;
        }
    </style>
</body>
</html>
