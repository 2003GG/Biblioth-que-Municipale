<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Livres - Bibliothèque Municipale</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            green: '#2c5f2d',
                            light: '#97bc62',
                            sage: '#b4c7a4'
                        }
                    },
                    fontFamily: {
                        display: ['Cormorant Garamond', 'serif'],
                        body: ['Montserrat', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-[#fafbf9]">
    <div class="grid grid-cols-[280px_1fr] min-h-screen">
        <!-- Sidebar -->
        <aside class="bg-white border-r border-gray-200 flex flex-col sticky top-0 h-screen">
            <!-- Logo -->
            <div class="p-8 border-b border-gray-200">
                <div class="flex items-center gap-3">
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
                    <span class="font-display text-2xl font-bold text-primary-green">BiblioGest</span>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 flex flex-col gap-2">
                <a href="dashboard" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary-green font-medium text-[15px] transition-all duration-150">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10L10 3L17 10V17C17 17.55 16.55 18 16 18H4C3.45 18 3 17.55 3 17V10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Tableau de bord</span>
                </a>

                <a href="books" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg bg-gradient-to-r from-primary-green/10 to-primary-light/10 text-primary-green font-medium text-[15px] relative">
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-[70%] bg-gradient-to-b from-primary-green to-primary-light rounded-r"></div>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4 2.5H16C16.55 2.5 17 2.95 17 3.5V16.5C17 17.05 16.55 17.5 16 17.5H4C3.45 17.5 3 17.05 3 16.5V3.5C3 2.95 3.45 2.5 4 2.5Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M7 7H13M7 10H13M7 13H10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Livres</span>
                </a>

                <a href="members" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary-green font-medium text-[15px] transition-all duration-150">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="7" r="3" stroke="currentColor" stroke-width="2"/>
                        <path d="M4 17C4 14.2386 6.23858 12 9 12H11C13.7614 12 16 14.2386 16 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Membres</span>
                </a>

                <a href="loans" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary-green font-medium text-[15px] transition-all duration-150">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17 10L10 17L3 10L10 3L17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 7V13M7 10H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Emprunts</span>
                </a>

                <a href="returns" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary-green font-medium text-[15px] transition-all duration-150">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10H17M17 10L13 6M17 10L13 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Retours</span>
                </a>
            </nav>

            <!-- User Profile -->
            <div class="p-6 border-t border-gray-200 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary-green to-primary-light flex items-center justify-center text-white font-semibold text-sm">
                        AB
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-sm text-gray-800">Ahmed Benali</p>
                        <p class="text-xs text-gray-500">Bibliothécaire</p>
                    </div>
                </div>
                <button class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600 hover:bg-red-500 hover:text-white transition-all duration-150">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 17H4C3.46957 17 2.96086 16.7893 2.58579 16.4142C2.21071 16.0391 2 15.5304 2 15V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H7M13 13L17 9M17 9L13 5M17 9H7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="p-8 max-w-[1600px]">
            <!-- Header -->
            <header class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="font-display text-4xl font-semibold text-gray-900 mb-1">Gestion des Livres</h1>
                    <p class="text-gray-500 text-[15px]">Accueil / Livres</p>
                </div>
                <div class="flex items-center gap-4">
                    <!-- Search Bar -->
                    <div class="flex items-center gap-3 px-5 py-3 bg-white border border-gray-200 rounded-xl min-w-[300px] focus-within:border-primary-green focus-within:ring-4 focus-within:ring-primary-green/10 transition-all duration-150">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="text-gray-400">
                            <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="2"/>
                            <path d="M14 14L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <input type="text" placeholder="Rechercher un livre..." class="flex-1 outline-none bg-transparent text-gray-800 placeholder-gray-400">
                    </div>

                    <!-- Add Button -->
                    <a href="addbook" class="px-5 py-3 bg-gradient-to-r from-primary-green to-primary-light text-white rounded-xl font-semibold text-sm flex items-center gap-2 shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all duration-250">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 4V16M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span>Ajouter un livre</span>
                    </a>
                </div>
            </header>

            <!-- Filters Bar -->
            <div class="flex flex-wrap gap-4 p-6 bg-white border border-gray-200 rounded-xl mb-6">
                <div class="flex flex-col gap-2">
                    <label class="text-[13px] font-semibold text-gray-700">Catégorie</label>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 text-sm cursor-pointer hover:border-primary-green transition-all duration-150">
                        <option>Toutes les catégories</option>
                        <option>Roman</option>
                        <option>Science-Fiction</option>
                        <option>Histoire</option>
                        <option>Philosophie</option>
                        <option>Poésie</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-[13px] font-semibold text-gray-700">Disponibilité</label>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 text-sm cursor-pointer hover:border-primary-green transition-all duration-150">
                        <option>Tous</option>
                        <option>Disponible</option>
                        <option>Emprunté</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-[13px] font-semibold text-gray-700">Trier par</label>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 text-sm cursor-pointer hover:border-primary-green transition-all duration-150">
                        <option>Date d'ajout (récent)</option>
                        <option>Date d'ajout (ancien)</option>
                        <option>Titre (A-Z)</option>
                        <option>Titre (Z-A)</option>
                        <option>Auteur (A-Z)</option>
                    </select>
                </div>

                <button class="self-end px-5 py-2.5 bg-gray-100 text-gray-700 rounded-lg font-medium text-sm flex items-center gap-2 hover:bg-gray-200 transition-all duration-150">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M7 13L2 9M2 9L7 5M2 9H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Réinitialiser
                </button>
            </div>

            <!-- Data Table -->
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden mb-6">
                <table class="w-full border-collapse">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">
                                <input type="checkbox" class="w-[18px] h-[18px] cursor-pointer accent-primary-green">
                            </th>
                            <!-- <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">ISBN</th> -->
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Titre</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Auteur</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Catégorie</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Année</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Exemplaires</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Disponible</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Statut</th>
                            <th class="px-5 py-4 text-left text-[13px] font-semibold text-gray-700 uppercase tracking-wide border-b border-gray-200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Books as $book)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-5 py-4 border-b border-gray-200">
                                <input type="checkbox" class="w-[18px] h-[18px] cursor-pointer accent-primary-green">
                            </td>
                            <!-- <td class="px-5 py-4 border-b border-gray-200">
                                <span class="font-mono text-[13px] px-2 py-1 bg-gray-100 rounded text-gray-700">978-2-07-036</span>
                            </td> -->
                            <td class="px-5 py-4 border-b border-gray-200">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-12 rounded flex-shrink-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                                    <span class="font-medium text-gray-900">{{ $book->Title }}</span>
                                    <!-- <h1>{{ $book->title }}</h1> -->

                                </div>
                            </td>
                            <td class="px-5 py-4 border-b border-gray-200 text-gray-800">{{ $book->Author }}</td>
                            <td class="px-5 py-4 border-b border-gray-200">
                                <span class="inline-block px-3.5 py-1.5 bg-[#667eea]/15 text-[#667eea] rounded-full text-xs font-semibold">Roman</span>
                            </td>
                            <td class="px-5 py-4 border-b border-gray-200 text-gray-800">1943</td>
                            <td class="px-5 py-4 border-b border-gray-200 text-gray-800">5</td>
                            <td class="px-5 py-4 border-b border-gray-200 text-gray-800">3</td>
                            <td class="px-5 py-4 border-b border-gray-200">
                                <span class="inline-block px-3.5 py-1.5 bg-green-500/15 text-green-600 rounded-full text-xs font-semibold">Disponible</span>
                            </td>
                            <td class="px-5 py-4 border-b border-gray-200">
                                <div class="flex gap-2">
                                    <button class="w-8 h-8 rounded flex items-center justify-center bg-gray-50 text-blue-500 hover:bg-blue-500/15 hover:-translate-y-0.5 hover:shadow-md transition-all duration-150" title="Voir">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M1 8C1 8 3.5 3 8 3C12.5 3 15 8 15 8C15 8 12.5 13 8 13C3.5 13 1 8 1 8Z" stroke="currentColor" stroke-width="1.5"/>
                                            <circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                    </button>
                                    <form action="{{route('Books.edit')}}" method="POST">
                                          @csrf
                                         @method('post')
                                         <input type="hidden" value="{{ $book->id }}" name="id">
                                    <button type="submit" class="w-8 h-8 rounded flex items-center justify-center bg-gray-50 text-amber-500 hover:bg-amber-500/15 hover:-translate-y-0.5 hover:shadow-md transition-all duration-150" title="Modifier">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M11.5 2L14 4.5L5 13.5H2.5V11L11.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    </form>
                                    <button class="w-8 h-8 rounded flex items-center justify-center bg-gray-50 text-red-500 hover:bg-red-500/15 hover:-translate-y-0.5 hover:shadow-md transition-all duration-150" title="Supprimer">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M2 4H14M6 2H10M6 11V7M10 11V7M3 4L4 14H12L13 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center gap-2">
                <button disabled class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium flex items-center justify-center opacity-50 cursor-not-allowed">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-gradient-to-r from-primary-green to-primary-light border-transparent text-white font-medium flex items-center justify-center">1</button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium flex items-center justify-center hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all duration-150">2</button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium flex items-center justify-center hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all duration-150">3</button>
                <span class="px-2 text-gray-400">...</span>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium flex items-center justify-center hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all duration-150">10</button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium flex items-center justify-center hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all duration-150">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
        </main>
    </div>
</body>
</html>
