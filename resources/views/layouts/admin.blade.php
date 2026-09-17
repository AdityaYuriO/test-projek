<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel - PT Aquatic Nusantara')</title>

    <!-- Vite Assets (Tailwind v4) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans min-h-screen flex">

    <!-- SIDEBAR NAVIGATION -->
    <aside class="w-64 bg-slate-950 border-r border-slate-800 flex flex-col justify-between hidden md:flex h-screen sticky top-0">
        <div>
            <!-- Logo Header -->
            <div class="h-16 flex items-center px-6 border-b border-slate-800">
                <a href="/" class="flex items-center gap-3 text-cyan-400 font-bold text-lg tracking-wide">
                    <i class="fa-solid fa-fish-fins text-xl"></i>
                    <span>AQUATIC ADMIN</span>
                </a>
            </div>

            <!-- Menu Links -->
            <nav class="p-4 space-y-1 text-sm font-medium">
                <a href="{{ route('dashboard.admin') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-solid fa-chart-pie w-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('user.admin') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-solid fa-users w-5"></i>
                    <span>Kelola User</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-solid fa-box-archive w-5"></i>
                    <span>Kelola Produk</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-regular fa-images w-5"></i>
                    <span>Kelola Galeri</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-regular fa-newspaper w-5"></i>
                    <span>Kelola Artikel</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-solid fa-building w-5"></i>
                    <span>Profil Perusahaan</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <i class="fa-solid fa-envelope-open-text w-5"></i>
                    <span>Pesan & Kontak</span>
                </a>
            </nav>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-slate-800 space-y-2">
            <form action="{{ route('logout') }}" method="post">
            <button class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-semibold text-red-400 hover:bg-red-500/10 transition-colors">
                <i class="fa-solid fa-right-from-bracket w-4"></i>
                <span>Keluar</span>
            </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

        <!-- TOP NAVBAR -->
        <header class="h-16 bg-slate-950/80 backdrop-blur-md border-b border-slate-800 px-6 flex items-center justify-between sticky top-0 z-30">
            <div class="flex items-center gap-3">
                <span class="text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 px-3 py-1 rounded-full">
                    <i class="fa-solid fa-shield-halved mr-1"></i> Dashboard Admin
                </span>
            </div>

            <!-- Profile Info Header -->
            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-white">Administrator</p>
                    <p class="text-[10px] text-slate-400">admin@aquaticnusantara.co.id</p>
                </div>
                <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-400/30 flex items-center justify-center text-cyan-300 font-bold text-sm">
                    A
                </div>
            </div>
        </header>

        <!-- MAIN SECTION VIEW -->
        <main class="flex-1 overflow-y-auto p-6 bg-slate-900">
            @yield('content')
        </main>
    </div>

</body>
</html>
