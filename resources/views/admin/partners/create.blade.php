@extends('layouts.admin')

@section('title', 'Tambah Partner Baru - Admin')

@section('page_title', 'Tambah Partner Baru')
@section('page_subtitle', 'Masukkan detail mitra baru yang ingin ditambahkan.')

@section('content')
<div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm max-w-3xl">
    <form action="{{ route('admin.partners.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Partner</label>
            <input type="text" name="name" value="{{ old('name') }}" 
                   class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" 
                   placeholder="Masukkan nama partner"
                   required>
            @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">URL Logo</label>
            <input type="text" name="logo_url" value="{{ old('logo_url') }}" 
                   class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" 
                   placeholder="https://placeholder.co/200x200"
                   required>
            <p class="text-xs text-slate-400 mt-2">Contoh: https://placeholder.co/200x200</p>
            @error('logo_url') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="flex gap-3 pt-4">
            <button type="submit" 
                    class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
                Simpan Partner
            </button>
            <a href="{{ route('admin.partners.index') }}" 
               class="px-6 py-3 bg-slate-100 text-slate-600 rounded-2xl font-bold hover:bg-slate-200 active:scale-95 transition">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
