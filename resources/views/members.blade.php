<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Membres - Bibliothèque Municipale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            green: '#2c5f2d',
                            light: '#97bc62',
                            sage: '#b4c7a4',
                        }
                    },
                    fontFamily: {
                        display: ['Cormorant Garamond', 'serif'],
                        body: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cormorant Garamond', serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-72 bg-white border-r border-gray-200 flex flex-col sticky top-0 h-screen">
            <!-- Sidebar Header -->
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
                    <span class="text-2xl font-bold text-primary-green">BiblioGest</span>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 flex flex-col gap-2">
                <a href="dashboard" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 font-medium hover:bg-gray-50 hover:text-primary-green transition-all">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10L10 3L17 10V17C17 17.55 16.55 18 16 18H4C3.45 18 3 17.55 3 17V10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Tableau de bord</span>
                </a>

                <a href="books" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 font-medium hover:bg-gray-50 hover:text-primary-green transition-all">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4 2.5H16C16.55 2.5 17 2.95 17 3.5V16.5C17 17.05 16.55 17.5 16 17.5H4C3.45 17.5 3 17.05 3 16.5V3.5C3 2.95 3.45 2.5 4 2.5Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M7 7H13M7 10H13M7 13H10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Livres</span>
                </a>

                <a href="members" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-primary-green font-medium bg-gradient-to-br from-primary-green/10 to-primary-light/10 relative transition-all">
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-3/4 bg-gradient-to-b from-primary-green to-primary-light rounded-r"></div>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="7" r="3" stroke="currentColor" stroke-width="2"/>
                        <path d="M4 17C4 14.2386 6.23858 12 9 12H11C13.7614 12 16 14.2386 16 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Membres</span>
                </a>

                <a href="loans" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 font-medium hover:bg-gray-50 hover:text-primary-green transition-all">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17 10L10 17L3 10L10 3L17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 7V13M7 10H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Emprunts</span>
                </a>

                <a href="returns" class="flex items-center gap-3.5 px-4 py-3.5 rounded-lg text-gray-600 font-medium hover:bg-gray-50 hover:text-primary-green transition-all">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3 10H17M17 10L13 6M17 10L13 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Retours</span>
                </a>
            </nav>

            <!-- Sidebar Footer -->
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
                <button class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600 hover:bg-red-500 hover:text-white transition-all">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 17H4C3.46957 17 2.96086 16.7893 2.58579 16.4142C2.21071 16.0391 2 15.5304 2 15V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H7M13 13L17 9M17 9L13 5M17 9H7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 max-w-[1600px]">
            <!-- Header -->
            <header class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="text-4xl font-semibold text-gray-900 mb-1">Gestion des Membres</h1>
                    <p class="text-gray-500 text-sm">Accueil / Membres</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-3 px-5 py-3 bg-white border border-gray-200 rounded-xl min-w-[300px] focus-within:border-primary-green focus-within:ring-2 focus-within:ring-primary-green/10 transition-all">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="text-gray-400">
                            <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="2"/>
                            <path d="M14 14L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <input type="text" placeholder="Rechercher un membre..." class="border-0 outline-none bg-transparent w-full text-gray-800">
                    </div>
                    <button onclick="openModal('addMemberModal')" class="flex items-center gap-2 px-4 py-3 bg-gradient-to-br from-primary-green to-primary-light text-white rounded-lg font-semibold shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 4V16M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span>Ajouter un membre</span>
                    </button>
                </div>
            </header>

            <!-- Filters Bar -->
            <div class="flex gap-4 p-6 bg-white border border-gray-200 rounded-xl mb-6 flex-wrap">
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-semibold text-gray-700 uppercase tracking-wider">Statut</label>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 text-sm cursor-pointer hover:border-primary-green focus:outline-none focus:border-primary-green transition-all">
                        <option>Tous les statuts</option>
                        <option>Actif</option>
                        <option>Inactif</option>
                        <option>Suspendu</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-xs font-semibold text-gray-700 uppercase tracking-wider">Trier par</label>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 text-sm cursor-pointer hover:border-primary-green focus:outline-none focus:border-primary-green transition-all">
                        <option>Date d'inscription (récent)</option>
                        <option>Date d'inscription (ancien)</option>
                        <option>Nom (A-Z)</option>
                        <option>Nom (Z-A)</option>
                    </select>
                </div>

                <button class="flex items-center gap-2 px-5 py-2.5 bg-gray-100 text-gray-700 rounded-lg font-medium text-sm hover:bg-gray-200 transition-all self-end">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M7 13L2 9M2 9L7 5M2 9H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Réinitialiser
                </button>
            </div>

            <!-- Members Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Member Card 1 -->
                 @foreach ($users as $user)

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-green transition-all">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-xl shadow-md">
                            12
                        </div>
                        <div class="flex gap-2">
                            <form action="{{ route('member.store',['name'=>$user->name,'email'=>$user->email]) }}" method="post">
                                 @csrf
                                 @method('post')
                            <button class="w-8 h-8 rounded-md bg-gray-50 flex items-center justify-center text-amber-500 hover:bg-amber-50 transition-all">

                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M10.5 2L12 3.5L4.5 11H3V9.5L10.5 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </form>
                            <form action="{{ route('member.destroy',$user) }}" method="post">
                                 @csrf
                                 @method('delete')
                            <button class="w-8 h-8 rounded-md bg-gray-50 flex items-center justify-center text-red-500 hover:bg-red-50 transition-all">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 3H12M5 2H9M5 9V6M9 9V6M3 3L4 12H10L11 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </button>
                            </form>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-600 mb-1">{{$user->email}}</p>
                        <p class="text-xs text-gray-500 font-semibold">{{$user->id}}</p>
                    </div>
                    <div class="flex gap-8 py-4 border-t border-b border-gray-100 mb-4">
                        <div class="flex flex-col gap-1">
                            <!-- <span class="text-2xl font-bold text-primary-green">12</span>
                            <span class="text-xs text-gray-600">Emprunts</span> -->
                        </div>
                        <div class="flex flex-col gap-1">
                            <!-- <span class="text-2xl font-bold text-primary-green">2</span>
                            <span class="text-xs text-gray-600">En cours</span> -->
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3.5 py-1.5 bg-green-100 text-green-600 rounded-full text-xs font-semibold">Actif</span>
                        <span class="text-xs text-gray-500">Depuis Jan 2024</span>
                    </div>
                </div>
                @endforeach



            <!-- Pagination -->
            <div class="flex justify-center items-center gap-2">
                <button disabled class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-gradient-to-br from-primary-green to-primary-light text-white font-medium flex items-center justify-center">1</button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all flex items-center justify-center">2</button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all flex items-center justify-center">3</button>
                <span class="text-gray-400 px-2">...</span>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all flex items-center justify-center">8</button>
                <button class="min-w-[40px] h-10 px-3 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium hover:bg-gray-50 hover:border-primary-green hover:text-primary-green transition-all flex items-center justify-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
        </main>
    </div>

    <!-- Modal Ajouter un membre -->
    <div id="addMemberModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closeModal('addMemberModal')"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl max-w-2xl w-11/12 max-h-[90vh] overflow-y-auto shadow-2xl">
            <!-- Modal Header -->
            <div class="flex justify-between items-center p-8 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-900">Ajouter un nouveau membre</h2>
                <button onclick="closeModal('addMemberModal')" class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 transition-all">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>

            <!-- Modal Form -->
            <form class="p-8">
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="firstName" class="block mb-2 font-semibold text-gray-700 text-sm">Prénom *</label>
                        <input type="text" id="firstName" placeholder="Prénom" required class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                    </div>
                    <div>
                        <label for="lastName" class="block mb-2 font-semibold text-gray-700 text-sm">Nom *</label>
                        <input type="text" id="lastName" placeholder="Nom" required class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="memberEmail" class="block mb-2 font-semibold text-gray-700 text-sm">Adresse email *</label>
                        <input type="email" id="memberEmail" placeholder="exemple@email.ma" required class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 font-semibold text-gray-700 text-sm">Téléphone *</label>
                        <input type="tel" id="phone" placeholder="+212 6XX XXX XXX" required class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="address" class="block mb-2 font-semibold text-gray-700 text-sm">Adresse complète *</label>
                    <input type="text" id="address" placeholder="Adresse, Ville" required class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                </div>

                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="dateOfBirth" class="block mb-2 font-semibold text-gray-700 text-sm">Date de naissance</label>
                        <input type="date" id="dateOfBirth" class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                    </div>
                    <div>
                        <label for="cin" class="block mb-2 font-semibold text-gray-700 text-sm">CIN</label>
                        <input type="text" id="cin" placeholder="AB123456" class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-lg bg-white text-gray-800 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/10 transition-all">
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                    <button type="button" onclick="closeModal('addMemberModal')" class="px-5 py-2.5 bg-gray-100 text-gray-700 rounded-lg font-medium text-sm hover:bg-gray-200 transition-all">
                        Annuler
                    </button>
                    <button type="submit" class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-br from-primary-green to-primary-light text-white rounded-lg font-semibold text-sm hover:-translate-y-0.5 transition-all">
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
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = '';
        }
    </script>
</body>
</html>
