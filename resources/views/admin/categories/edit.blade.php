@extends('layouts.admin')

@section('title', 'Edit Kategori - Admin')

@section('page_title', 'Edit Kategori')
@section('page_subtitle', 'Ubah informasi kategori event.')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            <!-- Nama Kategori -->
            <div>
                <label for="name" class="block text-sm font-bold text-slate-700 mb-3">
                    Nama Kategori <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name"
                    placeholder="Contoh: Musik, Olahraga, Seminar"
                    value="{{ old('name', $category->name) }}"
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 font-medium @error('name') border-red-500 @enderror"
                    required
                >
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div>
                <label for="slug" class="block text-sm font-bold text-slate-700 mb-3">
                    Slug <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="slug" 
                    name="slug"
                    placeholder="Contoh: musik, olahraga, seminar"
                    value="{{ old('slug', $category->slug) }}"
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 font-medium @error('slug') border-red-500 @enderror"
                    required
                >
                <p class="text-slate-500 text-sm mt-2">Format: huruf kecil, tanpa spasi (gunakan hyphen)</p>
                @error('slug')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Info Event -->
            <div class="p-4 bg-indigo-50 border border-indigo-200 rounded-xl">
                <p class="text-sm font-bold text-indigo-700">
                    📊 Kategori ini memiliki <strong>{{ $category->events->count() }} event</strong> yang terkait
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 pt-6 border-t">
                <a href="{{ route('admin.categories.index') }}" class="px-6 py-3 bg-slate-100 text-slate-700 rounded-xl font-bold hover:bg-slate-200 transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Auto-generate slug dari nama
document.getElementById('name').addEventListener('change', function() {
    const name = this.value;
    const slug = name
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
    
    document.getElementById('slug').value = slug;
});
</script>
@endsection
