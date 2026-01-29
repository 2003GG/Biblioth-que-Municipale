<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Livre - Bibliothèque Municipale</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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

                <a href="#" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-primary-green font-medium text-[15px] transition-all duration-150">
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
        <main class="p-8">
            <!-- Header -->
            <header class="mb-8">
                <h1 class="font-display text-4xl font-semibold text-gray-900 mb-1">Ajouter un nouveau livre</h1>
                <p class="text-gray-500 text-[15px]">
                    <a href="books" class="text-primary-green hover:text-primary-light transition-colors">Livres</a> / Ajouter un livre
                </p>
            </header>

            <!-- Form Container -->
            <div class="max-w-[900px] mx-auto">
                <form action="{{route('Books.store')}}" method="POST">
                    @csrf
                    @method('post')

                    <!-- Form Card -->
                    <div class="bg-white border border-gray-200 rounded-xl mb-8 shadow-sm">
                        <!-- Card Header -->
                        <div class="p-8 border-b border-gray-200">
                            <h2 class="font-display text-2xl font-semibold text-gray-900 mb-2">Informations du livre</h2>
                            <p class="text-gray-600 text-[15px]">Remplissez les détails du nouveau livre</p>
                        </div>

                        <!-- Card Body -->
                        <div class="p-8 space-y-6">
                            <!-- Title Field -->
                            <div>
                                <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Titre *</label>
                                <input type="text" id="title" name="title" placeholder="Le titre du livre" required
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg transition-all duration-250 bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-4 focus:ring-primary-green/10">
                            </div>

                            <!-- Author Field -->
                            <div>
                                <label for="author" class="block text-sm font-semibold text-gray-700 mb-2">Auteur *</label>
                                <input type="text" id="author" name="author" placeholder="Nom de l'auteur" required
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg transition-all duration-250 bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-4 focus:ring-primary-green/10">
                            </div>

                            <!-- Description Field -->
                            <div>
                                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                                <textarea id="description" name="description" rows="5" placeholder="Brève description du livre, résumé, synopsis..."
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg transition-all duration-250 bg-white text-gray-800 resize-y leading-relaxed focus:outline-none focus:border-primary-green focus:ring-4 focus:ring-primary-green/10"></textarea>
                                <small class="block mt-2 text-[13px] text-gray-500">Optionnel - Maximum 500 caractères</small>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm flex justify-end gap-4">
                        <a href="books"
                            class="px-5 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium text-sm flex items-center gap-2 hover:bg-gray-200 transition-all duration-150">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15 10H5M5 10L10 15M5 10L10 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Annuler</span>
                        </a>
                        <button type="submit"
                            class="px-5 py-3 bg-gradient-to-r from-primary-green to-primary-light text-white rounded-lg font-semibold text-sm flex items-center gap-2 shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all duration-250">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16 5L7.5 13.5L4 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Enregistrer le livre</span>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
