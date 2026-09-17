@extends('layouts.admin')

@section('title', 'Dashboard - PT Aquatic Nusantara')

@section('content')
<div class="space-y-6">
    <!-- Header Title -->
    <div>
        <h1 class="text-2xl font-bold text-white">Ikhtisar Dashboard</h1>
        <p class="text-xs text-slate-400 mt-1">Ringkasan statistik data aktivitas sistem PT Aquatic Nusantara</p>
    </div>

    <!-- 1. CARDS METRICS / KARTU STATISTIK -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Card 1: User -->
        <div class="bg-slate-950 p-5 rounded-2xl border border-slate-800 flex items-center justify-between">
            <div>
                <p class="text-xs text-slate-400">Total User</p>
                <h3 class="text-2xl font-bold text-white mt-1">12</h3>
                <span class="text-[10px] text-emerald-400 font-semibold flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-arrow-trend-up"></i> +2 User baru
                </span>
            </div>
            <div class="w-12 h-12 bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 rounded-xl flex items-center justify-center text-xl">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>

        <!-- Card 2: Produk -->
        <div class="bg-slate-950 p-5 rounded-2xl border border-slate-800 flex items-center justify-between">
            <div>
                <p class="text-xs text-slate-400">Total Produk</p>
                <h3 class="text-2xl font-bold text-white mt-1">24</h3>
                <span class="text-[10px] text-slate-400 font-semibold flex items-center gap-1 mt-1">
                    3 Kategori Aktif
                </span>
            </div>
            <div class="w-12 h-12 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-xl flex items-center justify-center text-xl">
                <i class="fa-solid fa-box"></i>
            </div>
        </div>

        <!-- Card 3: Artikel -->
        <div class="bg-slate-950 p-5 rounded-2xl border border-slate-800 flex items-center justify-between">
            <div>
                <p class="text-xs text-slate-400">Artikel Terbit</p>
                <h3 class="text-2xl font-bold text-white mt-1">8</h3>
                <span class="text-[10px] text-emerald-400 font-semibold flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-check"></i> Terpublikasi
                </span>
            </div>
            <div class="w-12 h-12 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center text-xl">
                <i class="fa-regular fa-newspaper"></i>
            </div>
        </div>

        <!-- Card 4: Pesan -->
        <div class="bg-slate-950 p-5 rounded-2xl border border-slate-800 flex items-center justify-between">
            <div>
                <p class="text-xs text-slate-400">Pesan Masuk</p>
                <h3 class="text-2xl font-bold text-white mt-1">15</h3>
                <span class="text-[10px] text-amber-400 font-semibold flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-clock"></i> 3 Belum Dibaca
                </span>
            </div>
            <div class="w-12 h-12 bg-amber-500/10 border border-amber-500/20 text-amber-400 rounded-xl flex items-center justify-center text-xl">
                <i class="fa-solid fa-envelope"></i>
            </div>
        </div>
    </div>

    <!-- 2. TABEL RINGKASAN AKTIVITAS TERBARU -->
    <div class="bg-slate-950 rounded-2xl border border-slate-800 p-6 space-y-4">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-base font-bold text-white">Aktivitas Terkini</h3>
                <p class="text-xs text-slate-400">Pesan kontak masuk dari pengunjung landing page</p>
            </div>
            <span class="text-xs text-cyan-400 hover:underline cursor-pointer">Lihat Semua Pesan &rarr;</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-300">
                <thead class="bg-slate-900 text-slate-400 uppercase font-semibold border-b border-slate-800">
                    <tr>
                        <th class="p-3">Pengirim</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Subjek / Pesan</th>
                        <th class="p-3">Tanggal</th>
                        <th class="p-3 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/60">
                    <tr class="hover:bg-slate-900/50">
                        <td class="p-3 font-bold text-white">Budi Santoso</td>
                        <td class="p-3 text-slate-400">budi@gmail.com</td>
                        <td class="p-3 text-slate-300">Tanya seputar instalasi aquascape...</td>
                        <td class="p-3 text-slate-400">10 Agu 2026</td>
                        <td class="p-3 text-center">
                            <span class="px-2 py-0.5 bg-amber-500/10 text-amber-400 border border-amber-500/20 rounded-md font-semibold text-[10px]">Baru</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-900/50">
                        <td class="p-3 font-bold text-white">Siti Rahma</td>
                        <td class="p-3 text-slate-400">siti.rahma@yahoo.com</td>
                        <td class="p-3 text-slate-300">Pemesanan filter biologis skala besar...</td>
                        <td class="p-3 text-slate-400">09 Agu 2026</td>
                        <td class="p-3 text-center">
                            <span class="px-2 py-0.5 bg-slate-800 text-slate-400 rounded-md font-semibold text-[10px]">Dibaca</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
