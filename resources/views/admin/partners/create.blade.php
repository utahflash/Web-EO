@extends('layouts.admin')

@section('title', 'Tambah Partner Baru - Admin')

@section('page_title', 'Tambah Partner Baru')
@section('page_subtitle', 'Masukkan detail mitra baru yang ingin ditambahkan.')

@section('content')
<div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm max-w-3xl">
    <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
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
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Logo Partner</label>
            <div class="relative border-2 border-dashed border-slate-200 rounded-2xl p-6 text-center hover:border-indigo-400 transition cursor-pointer" onclick="document.getElementById('logo').click()">
                <input type="file" id="logo" name="logo" accept="image/*" class="hidden" required onchange="previewLogo(event)">
                <svg class="mx-auto h-12 w-12 text-slate-400 mb-2" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                    <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20m-6-6l-6-6m6 6v12m0 0l-3-3m3 3l3-3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-sm font-medium text-slate-600">Klik untuk upload atau drag file ke sini</p>
                <p class="text-xs text-slate-400 mt-1">PNG, JPG, GIF, SVG (Max. 2MB)</p>
                <img id="preview" class="mt-4 max-h-32 mx-auto rounded-lg" style="display:none;">
            </div>
            @error('logo') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
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

<script>
function previewLogo(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}
</script>
@endsection
