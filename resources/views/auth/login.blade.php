<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Aquatic Portal</title>

    <!-- Load CSS & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-b from-ocean-dark via-ocean-mid to-ocean-light overflow-hidden relative font-sans">

    <!-- Background Animated Bubbles -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute bottom-[-100px] left-[10%] w-10 h-10 bg-white/15 rounded-full shadow-[inset_0_0_10px_rgba(255,255,255,0.5)] animate-bubble"></div>
        <div class="absolute bottom-[-100px] left-[25%] w-5 h-5 bg-white/15 rounded-full shadow-[inset_0_0_10px_rgba(255,255,255,0.5)] animate-bubble-fast delay-1000"></div>
        <div class="absolute bottom-[-100px] left-[40%] w-12 h-12 bg-white/15 rounded-full shadow-[inset_0_0_10px_rgba(255,255,255,0.5)] animate-bubble-slow delay-500"></div>
        <div class="absolute bottom-[-100px] left-[60%] w-16 h-16 bg-white/15 rounded-full shadow-[inset_0_0_10px_rgba(255,255,255,0.5)] animate-bubble-slow"></div>
        <div class="absolute bottom-[-100px] left-[75%] w-8 h-8 bg-white/15 rounded-full shadow-[inset_0_0_10px_rgba(255,255,255,0.5)] animate-bubble delay-2000"></div>
        <div class="absolute bottom-[-100px] left-[90%] w-14 h-14 bg-white/15 rounded-full shadow-[inset_0_0_10px_rgba(255,255,255,0.5)] animate-bubble-fast delay-700"></div>
    </div>

    <!-- Login Glassmorphism Card -->
    <div class="relative z-10 w-full max-w-md p-8 m-4 rounded-2xl glass-card shadow-2xl text-white text-center">

        <!-- Icon & Header -->
        <div class="mb-8">
            <i class="fa-solid fa-fish-fins text-5xl text-ocean-accent drop-shadow-[0_0_10px_rgba(0,229,255,0.6)] mb-3"></i>
            <h2 class="text-2xl font-bold tracking-wide">Aquatic Portal</h2>
            <p class="text-xs text-slate-300 mt-1">Masuk ke ekosistem bawah laut</p>
        </div>

        <!-- Form Input -->
        <form action="{{ route('login.masuk') }}" method="POST" id="loginForm" class="space-y-5 text-left">
            @csrf

            <div>
                <label for="email" class="block text-xs text-slate-300 mb-1 ml-1">Email Akuarium</label>
                <div class="relative">
                    <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-cyan-300"></i>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        placeholder="nama@ocean.com"
                        required
                        class="w-full pl-11 pr-4 py-3 bg-white/10 border border-white/20 rounded-xl outline-none text-sm text-white placeholder-slate-400 focus:border-ocean-accent focus:ring-2 focus:ring-ocean-accent/40 transition-all duration-300"
                    >
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs text-slate-300 mb-1 ml-1">Kata Sandi</label>
                <div class="relative">
                    <i class="fa-solid fa-key absolute left-4 top-1/2 -translate-y-1/2 text-cyan-300"></i>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="••••••••"
                        required
                        class="w-full pl-11 pr-4 py-3 bg-white/10 border border-white/20 rounded-xl outline-none text-sm text-white placeholder-slate-400 focus:border-ocean-accent focus:ring-2 focus:ring-ocean-accent/40 transition-all duration-300"
                    >
                </div>
            </div>

            <button
                type="submit"
                class="w-full py-3 mt-2 bg-gradient-to-r from-cyan-500 to-ocean-btn hover:from-ocean-btn hover:to-cyan-400 text-white font-semibold rounded-xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-400/50 hover:-translate-y-0.5 transition-all duration-300 active:translate-y-0"
            >
                Masuk Selam <i class="fa-solid fa-water ml-1"></i>
            </button>
        </form>
    </div>

    <!-- Script SweetAlert2 Menangkap Response Backend -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Trigger SweetAlert2 jika ada kiriman error dari controller/session
            @if ($errors->any() || session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Akses Terhalang Terumbu!',
                    text: '{{ session("error") ?? $errors->first() }}',
                    background: '#0f2027',
                    color: '#fff',
                    confirmButtonColor: '#ef4444',
                    iconColor: '#f87171'
                });
            @endif

            // Trigger jika login berhasil / ada notifikasi sukses
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session("success") }}',
                    background: '#0f2027',
                    color: '#fff',
                    confirmButtonColor: '#00b4db',
                    iconColor: '#00e5ff'
                });
            @endif
        });
    </script>
</body>
</html>
