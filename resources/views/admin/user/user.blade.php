@extends('layouts.admin')

@section('title', 'Kelola User - PT Aquatic Nusantara')

@section('content')
<div class="space-y-6">
    <!-- Header Title & Action Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Kelola User</h1>
            <p class="text-xs text-slate-400 mt-1">Manajemen akun pengguna dan hak akses sistem</p>
        </div>
        <button onclick="openModal('modalTambahUser')" class="px-4 py-2.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-xs rounded-xl shadow-lg shadow-cyan-500/20 transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-user-plus"></i> Tambah User Baru
        </button>
    </div>

    <!-- Filter & Search Bar -->
    <div class="bg-slate-950 p-4 rounded-2xl border border-slate-800 flex flex-col md:flex-row gap-3 justify-between items-center text-xs">
        <div class="relative w-full md:w-72">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-500"></i>
            <input type="text" placeholder="Cari nama atau email..." class="w-full pl-9 pr-3 py-2 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
        </div>
    </div>

    <!-- Tabel Daftar User -->
    <div class="bg-slate-950 rounded-2xl border border-slate-800 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-300">
                <thead class="bg-slate-900 text-slate-400 uppercase font-semibold border-b border-slate-800">
                    <tr>
                        <th class="p-4">No</th>
                        <th class="p-4">Admin</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Tanggal Dibuat</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/60">
                    <!-- User Item 1 -->
                    @foreach ( $pengguna as $png )
                    <tr class="hover:bg-slate-900/50">
                        <td class="p-4 text-slate-500 font-medium">1</td>
                        <td class="p-4 font-bold text-white flex items-center gap-3">
                            <span>{{ $png->nama_lengkap }}</span>
                        </td>
                        <td class="p-4 text-slate-400">{{ $png->email }}</td>
                        <td class="p-4 text-slate-400">{{ $png->created_at }}</td>
                        <td class="p-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <button onclick="openModal('modalEditUser')" class="p-2 bg-blue-500/10 text-blue-400 hover:bg-blue-500/20 rounded-lg transition-colors" title="Edit User">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <form action="{{ route('hapus.user', $png->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button class="p-2 bg-red-500/10 text-red-400 hover:bg-red-500/20 rounded-lg transition-colors" type="submit" title="Hapus User">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ================= MODAL TAMBAH USER ================= -->
<div id="modalTambahUser" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4">
    <div class="bg-slate-950 border border-slate-800 p-6 rounded-2xl w-full max-w-md space-y-4 text-xs">
        <div class="flex justify-between items-center border-b border-slate-800 pb-3">
            <h3 class="text-sm font-bold text-white">Tambah User Baru</h3>
            <button onclick="closeModal('modalTambahUser')" class="text-slate-400 hover:text-white"><i class="fa-solid fa-xmark text-base"></i></button>
        </div>
        <form action="{{ route('tambah.user') }}" method="POST" class="space-y-3">
            @csrf
            <div>
                <label class="block text-slate-400 mb-1">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Masukkan nama" class="w-full p-3 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
            </div>
            <div>
                <label class="block text-slate-400 mb-1">Email</label>
                <input type="email" name="email" placeholder="contoh@aquatic.co.id" class="w-full p-3 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
            </div>
            <div>
                <label class="block text-slate-400 mb-1">Password</label>
                <input type="password" name="password" placeholder="••••••••" class="w-full p-3 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
            </div>
            <div class="flex justify-end gap-2 pt-2">
                <button type="button" onclick="closeModal('modalTambahUser')" class="px-4 py-2 bg-slate-800 hover:bg-slate-700 rounded-xl text-slate-300 font-semibold">Batal</button>
                <button type="submit" class="px-4 py-2 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl">Simpan User</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= MODAL EDIT USER ================= -->
<div id="modalEditUser" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4">
    <div class="bg-slate-950 border border-slate-800 p-6 rounded-2xl w-full max-w-md space-y-4 text-xs">
        <div class="flex justify-between items-center border-b border-slate-800 pb-3">
            <h3 class="text-sm font-bold text-white">Edit Data User</h3>
            <button onclick="closeModal('modalEditUser')" class="text-slate-400 hover:text-white"><i class="fa-solid fa-xmark text-base"></i></button>
        </div>
        <form action="{{ route('edit.user', $) }}" method="POST" class="space-y-3">
            <div>
                <label class="block text-slate-400 mb-1">Nama Lengkap</label>
                <input type="text" value="Administrator" class="w-full p-3 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
            </div>
            <div>
                <label class="block text-slate-400 mb-1">Email</label>
                <input type="email" value="admin@aquaticnusantara.co.id" class="w-full p-3 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
            </div>
            <div>
                <label class="block text-slate-400 mb-1">Password Baru <span class="text-[10px] text-slate-500">(Kosongkan jika tidak diubah)</span></label>
                <input type="password" placeholder="••••••••" class="w-full p-3 bg-slate-900 border border-slate-800 rounded-xl text-white outline-none focus:border-cyan-500">
            </div>
            <div class="flex justify-end gap-2 pt-2">
                <button type="button" onclick="closeModal('modalEditUser')" class="px-4 py-2 bg-slate-800 hover:bg-slate-700 rounded-xl text-slate-300 font-semibold">Batal</button>
                <button type="button" onclick="closeModal('modalEditUser')" class="px-4 py-2 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl">Update Perubahan</button>
            </div>
        </form>
    </div>
</div>

<!-- Script Modal Toggle -->
<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
    }
</script>
@endsection
