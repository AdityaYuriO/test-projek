@extends('layouts.app')

@section('title', 'Beranda - PT Aquatic Nusantara')

@section('content')
    <!-- HERO SECTION -->
    <section id="hero" class="pt-20 pb-20 px-6 text-center relative overflow-hidden flex flex-col items-center justify-center min-h-[50vh]">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
            Eksplorasi Keindahan <span class="text-ocean-accent">Bawah Laut</span>
        </h1>
        <p class="max-w-2xl text-slate-300 text-sm md:text-base mb-8">
            Pusat inovasi akuakultur dan ekosistem akuatik terpadu. Menyediakan solusi produk dan keahlian akuarium terbaik untuk Anda.
        </p>
        <a href="#produk" class="px-6 py-3 bg-ocean-accent text-ocean-dark font-bold rounded-xl shadow-lg shadow-cyan-400/30 hover:scale-105 transition-transform">
            Jelajahi Produk
        </a>
    </section>

    <!-- SECTION 1: PROFIL PERUSAHAAN (REVISI LENGKAP) -->
    <section id="profil" class="py-20 px-6 max-w-7xl mx-auto border-t border-white/10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-ocean-accent">Profil Perusahaan</h2>
            <p class="text-slate-400 text-sm mt-1">Informasi lengkap identitas dan operasional perusahaan</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Kartu Utama Perusahaan -->
            <div class="md:col-span-2 glass-card p-8 rounded-2xl flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fa-solid fa-building text-3xl text-ocean-accent"></i>
                        <div>
                            <h3 class="text-2xl font-bold text-white">PT Aquatic Nusantara</h3>
                            <p class="text-xs text-cyan-300">Bidang: Akuakultur, Desain & Konservasi Akuarium</p>
                        </div>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        Berdiri sejak tahun <strong class="text-white">2020</strong>, PT Aquatic Nusantara berfokus pada penyediaan sarana akuakultur, pembuatan akuarium custom skala industri/rumahan, serta distribusi pakan dan teknologi pemfilteran air.
                    </p>
                </div>

                <!-- Informasi Direktur & Karyawan -->
                <div class="grid grid-cols-2 gap-4 border-t border-white/10 pt-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 flex items-center justify-center text-ocean-accent">
                            <i class="fa-solid fa-user-tie text-lg"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400">Direktur Utama</p>
                            <p class="text-sm font-semibold text-white">Prabu Déwa Niskala</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 flex items-center justify-center text-ocean-accent">
                            <i class="fa-solid fa-users text-lg"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400">Jumlah Karyawan</p>
                            <p class="text-sm font-semibold text-white">45 Orang</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu Kontak & Alamat -->
            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between space-y-4">
                <h4 class="text-lg font-bold text-ocean-accent border-b border-white/10 pb-2">Kontak & Alamat</h4>

                <div class="space-y-4 text-xs">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-ocean-accent text-base mt-0.5"></i>
                        <div>
                            <p class="text-slate-400">Alamat Resmi:</p>
                            <p class="text-slate-200">Jl. Samudra Laut No. 123, Kawasan Industri Bahari, Jakarta Utara 14350</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-ocean-accent text-base"></i>
                        <div>
                            <p class="text-slate-400">Telepon:</p>
                            <p class="text-slate-200">+62 21 555 8901 / +62 812 3456 7890</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-ocean-accent text-base"></i>
                        <div>
                            <p class="text-slate-400">Email Perusahaan:</p>
                            <p class="text-slate-200">contact@aquaticnusantara.co.id</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <span class="inline-block w-full text-center py-2 bg-white/5 border border-white/10 rounded-xl text-[11px] text-cyan-300">
                        <i class="fa-solid fa-circle-check text-green-400 mr-1"></i> Terverifikasi & Resmi
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: PRODUK (+ TOMBOL TAMBAH) -->
    <section id="produk" class="py-20 px-6 max-w-7xl mx-auto border-t border-white/10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-ocean-accent">Produk Unggulan</h2>
                <p class="text-slate-400 text-sm mt-1">Peralatan dan kebutuhan akuatik terbaik</p>
            </div>
            <!-- Tombol Tambah Produk -->
            {{-- <button onclick="openModal('modalProduk')" class="px-4 py-2 bg-ocean-btn hover:bg-cyan-400 text-white font-semibold text-xs rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Produk
            </button> --}}
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="glass-card p-5 rounded-2xl hover:-translate-y-1 transition-all">
                <div class="h-40 bg-white/5 rounded-xl mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-filter text-4xl text-cyan-400"></i>
                </div>
                <h3 class="font-bold text-lg">Filter Biologis OceanPure</h3>
                <p class="text-xs text-slate-400 mt-1">Sistem penyaringan air otomatis dengan teknologi micro-bubble.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-ocean-accent font-bold text-sm">Rp 450.000</span>
                    <button class="px-3 py-1.5 bg-white/10 hover:bg-white/20 text-xs rounded-lg">Detail</button>
                </div>
            </div>

            <div class="glass-card p-5 rounded-2xl hover:-translate-y-1 transition-all">
                <div class="h-40 bg-white/5 rounded-xl mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-lightbulb text-4xl text-cyan-400"></i>
                </div>
                <h3 class="font-bold text-lg">Lampu LED ReefGlow</h3>
                <p class="text-xs text-slate-400 mt-1">Pencahayaan spektrum penuh untuk pertumbuhan terumbu karang.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-ocean-accent font-bold text-sm">Rp 850.000</span>
                    <button class="px-3 py-1.5 bg-white/10 hover:bg-white/20 text-xs rounded-lg">Detail</button>
                </div>
            </div>

            <div class="glass-card p-5 rounded-2xl hover:-translate-y-1 transition-all">
                <div class="h-40 bg-white/5 rounded-xl mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-jar text-4xl text-cyan-400"></i>
                </div>
                <h3 class="font-bold text-lg">Nutrisi Ikan AquaBoost</h3>
                <p class="text-xs text-slate-400 mt-1">Pakan harian tinggi protein untuk imunitas dan warna hias.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-ocean-accent font-bold text-sm">Rp 75.000</span>
                    <button class="px-3 py-1.5 bg-white/10 hover:bg-white/20 text-xs rounded-lg">Detail</button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: ARTIKEL (+ TOMBOL TAMBAH) -->
    <section id="artikel" class="py-20 px-6 max-w-7xl mx-auto border-t border-white/10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-ocean-accent">Artikel & Edukasi</h2>
                <p class="text-slate-400 text-sm mt-1">Informasi terbaru seputar dunia akuatik</p>
            </div>
            <!-- Tombol Tambah Artikel -->
            {{-- <button onclick="openModal('modalArtikel')" class="px-4 py-2 bg-ocean-btn hover:bg-cyan-400 text-white font-semibold text-xs rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Artikel
            </button> --}}
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="glass-card p-6 rounded-2xl">
                <span class="text-[10px] bg-cyan-500/20 text-cyan-300 px-2 py-1 rounded mb-2 inline-block">Edukasi</span>
                <h3 class="font-bold text-lg mb-2">Cara Merawat Ekosistem Air Tawar di Rumah</h3>
                <p class="text-xs text-slate-300 leading-relaxed">Panduan lengkap menjaga pH air, suhu ideal, dan pencegahan alga pada akuarium rumahan...</p>
            </div>
            <div class="glass-card p-6 rounded-2xl">
                <span class="text-[10px] bg-cyan-500/20 text-cyan-300 px-2 py-1 rounded mb-2 inline-block">Tips</span>
                <h3 class="font-bold text-lg mb-2">Mengenal Jenis Terumbu Karang Ramah Pemula</h3>
                <p class="text-xs text-slate-300 leading-relaxed">Rekomendasi koral hias yang tahan terhadap perubahan parameter air untuk pemula...</p>
            </div>
        </div>
    </section>

    <!-- SECTION 4: GALERI (+ TOMBOL TAMBAH) -->
    <section id="galeri" class="py-20 px-6 max-w-7xl mx-auto border-t border-white/10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-ocean-accent">Galeri Proyek</h2>
                <p class="text-slate-400 text-sm mt-1">Dokumentasi hasil pemasangan dan keindahan akuarium</p>
            </div>
            <!-- Tombol Tambah Galeri -->
            {{-- <button onclick="openModal('modalGaleri')" class="px-4 py-2 bg-ocean-btn hover:bg-cyan-400 text-white font-semibold text-xs rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Foto Galeri
            </button> --}}
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="h-48 glass-card rounded-xl flex items-center justify-center text-slate-400">
                <i class="fa-regular fa-image text-3xl"></i>
            </div>
            <div class="h-48 glass-card rounded-xl flex items-center justify-center text-slate-400">
                <i class="fa-regular fa-image text-3xl"></i>
            </div>
            <div class="h-48 glass-card rounded-xl flex items-center justify-center text-slate-400">
                <i class="fa-regular fa-image text-3xl"></i>
            </div>
            <div class="h-48 glass-card rounded-xl flex items-center justify-center text-slate-400">
                <i class="fa-regular fa-image text-3xl"></i>
            </div>
        </div>
    </section>

    <!-- SECTION 5: KONTAK -->
    <section id="kontak" class="py-20 px-6 max-w-7xl mx-auto border-t border-white/10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-ocean-accent">Kirim Pesan</h2>
            <p class="text-slate-400 text-sm mt-1">Ada pertanyaan lebih lanjut? Kirim pesan langsung ke kami</p>
        </div>
        <form class="glass-card p-6 md:p-8 rounded-2xl space-y-4 max-w-2xl mx-auto">
            <input type="text" placeholder="Nama Anda" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-sm placeholder-slate-400 focus:border-ocean-accent">
            <input type="email" placeholder="Email Anda" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-sm placeholder-slate-400 focus:border-ocean-accent">
            <textarea rows="3" placeholder="Pesan Anda..." class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-sm placeholder-slate-400 focus:border-ocean-accent"></textarea>
            <button type="button" class="w-full py-3 bg-ocean-btn hover:bg-cyan-500 font-bold text-sm rounded-xl transition-colors">Kirim Pesan</button>
        </form>
    </section>

    <!-- ================= MODAL-MODAL DUMMY (FRONTEND ONLY) ================= -->

    <!-- Modal Tambah Produk -->
    <div id="modalProduk" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="glass-card bg-ocean-dark/95 border border-white/20 p-6 rounded-2xl w-full max-w-md relative text-left">
            <h3 class="text-lg font-bold text-ocean-accent mb-4">Tambah Produk Baru</h3>
            <form action="#" method="POST" class="space-y-3 text-xs">
                <input type="text" placeholder="Nama Produk" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white">
                <input type="number" placeholder="Harga (Rp)" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white">
                <textarea placeholder="Deskripsi Singkat" rows="2" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white"></textarea>
                <input type="file" class="w-full text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:bg-ocean-btn file:text-white">
                <div class="flex justify-end gap-2 pt-3">
                    <button type="button" onclick="closeModal('modalProduk')" class="px-4 py-2 bg-white/10 rounded-lg">Batal</button>
                    <button type="button" onclick="closeModal('modalProduk')" class="px-4 py-2 bg-ocean-btn rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Tambah Artikel -->
    <div id="modalArtikel" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="glass-card bg-ocean-dark/95 border border-white/20 p-6 rounded-2xl w-full max-w-md relative text-left">
            <h3 class="text-lg font-bold text-ocean-accent mb-4">Tambah Artikel Baru</h3>
            <form action="#" method="POST" class="space-y-3 text-xs">
                <input type="text" placeholder="Judul Artikel" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white">
                <input type="text" placeholder="Kategori (misal: Edukasi/Tips)" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white">
                <textarea placeholder="Isi Artikel..." rows="3" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white"></textarea>
                <div class="flex justify-end gap-2 pt-3">
                    <button type="button" onclick="closeModal('modalArtikel')" class="px-4 py-2 bg-white/10 rounded-lg">Batal</button>
                    <button type="button" onclick="closeModal('modalArtikel')" class="px-4 py-2 bg-ocean-btn rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Tambah Galeri -->
    <div id="modalGaleri" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="glass-card bg-ocean-dark/95 border border-white/20 p-6 rounded-2xl w-full max-w-md relative text-left">
            <h3 class="text-lg font-bold text-ocean-accent mb-4">Unggah Foto Galeri</h3>
            <form action="#" method="POST" class="space-y-3 text-xs">
                <input type="text" placeholder="Judul Foto / Proyek" class="w-full p-3 bg-white/10 border border-white/20 rounded-xl outline-none text-white">
                <input type="file" class="w-full text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:bg-ocean-btn file:text-white">
                <div class="flex justify-end gap-2 pt-3">
                    <button type="button" onclick="closeModal('modalGaleri')" class="px-4 py-2 bg-white/10 rounded-lg">Batal</button>
                    <button type="button" onclick="closeModal('modalGaleri')" class="px-4 py-2 bg-ocean-btn rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Sederhana Buka/Tutup Modal Frontend -->
    <script>
        function openModal(id) {
            const modal = document.getElementById(id);
            if(modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if(modal) {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }
        }
    </script>
@endsection
