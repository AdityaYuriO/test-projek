<nav class="fixed top-0 left-0 right-0 z-50 glass-card bg-ocean-dark/60 backdrop-blur-md border-b border-white/10 px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">

        <!-- Logo -->
        <a href="}#hero" class="flex items-center gap-3 text-ocean-accent font-bold text-xl tracking-wide">
            <i class="fa-solid fa-fish-fins text-2xl drop-shadow-[0_0_8px_rgba(0,229,255,0.6)]"></i>
            <span>AQUATIC</span>
        </a>

        <!-- Menu Desktop -->
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
            <a href="#profil" class="hover:text-ocean-accent transition-colors duration-200">Profil</a>
            <a href="#produk" class="hover:text-ocean-accent transition-colors duration-200">Produk</a>
            <a href="#artikel" class="hover:text-ocean-accent transition-colors duration-200">Artikel</a>
            <a href="#galeri" class="hover:text-ocean-accent transition-colors duration-200">Galeri</a>
            <a href="#kontak" class="hover:text-ocean-accent transition-colors duration-200">Kontak</a>
        </div>

        <!-- Tombol Login / Portal -->
        <div class="hidden md:block">
            <a href="{{ route('login') }}" class="px-5 py-2 bg-gradient-to-r from-cyan-500 to-ocean-btn hover:from-ocean-btn hover:to-cyan-400 text-white font-semibold text-xs rounded-xl shadow-lg shadow-cyan-500/20 transition-all duration-300">
                Masuk Portal <i class="fa-solid fa-right-to-bracket ml-1"></i>
            </a>
        </div>

        <!-- Toggle Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden text-slate-300 hover:text-white text-xl">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Dropdown Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden flex-col gap-4 mt-4 pt-4 border-t border-white/10 text-slate-300 text-sm">
        <a href="#profil" class="hover:text-ocean-accent transition-colors">Profil</a>
        <a href="#produk" class="hover:text-ocean-accent transition-colors">Produk</a>
        <a href="#artikel" class="hover:text-ocean-accent transition-colors">Artikel</a>
        <a href="#galeri" class="hover:text-ocean-accent transition-colors">Galeri</a>
        <a href="#kontak" class="hover:text-ocean-accent transition-colors">Kontak</a>
        <a href="{{ route('login') }}" class="w-full text-center py-2 bg-ocean-btn text-white font-semibold rounded-lg">Masuk Portal</a>
    </div>
</nav>
