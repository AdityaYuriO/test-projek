<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Aquatic Enterprise')</title>
    @include('sweetalert2::index')
    <!-- Vite Assets (Tailwind v4) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome Icon & SweetAlert2 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gradient-to-b from-ocean-dark via-ocean-mid to-ocean-light text-white min-h-screen font-sans">

    <!-- Include Navbar Layout -->
    @include('layouts.navbar')

    <!-- Main Content Dynamic Section -->
    <main class="pt-16">
        @yield('content')
    </main>

    {{-- sweetalert --}}
    @include('sweetalert2::index')

    <!-- Footer -->
    <footer class="py-6 border-t border-white/10 text-center text-xs text-slate-400">
        <p>&copy; {{ date('Y') }} Aquatic Enterprise. All rights reserved.</p>
    </footer>

    <!-- Script Toggle Mobile Menu -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if(menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
            });
        }
    </script>
</body>
</html>
