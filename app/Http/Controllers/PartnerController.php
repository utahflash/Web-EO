<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Partner::create([
            'name' => $request->name,
            'logo_url' => $request->logo_url
        ]);

        return redirect('/admin/partners')->with('success', 'Partner berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Partner::find($id);
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = Partner::find($id);
        $partner->update([
            'name' => $request->name,
            'logo_url' => $request->logo_url
        ]);

        return redirect('/admin/partners')->with('success', 'Partner berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        
        return redirect('/admin/partners')->with('success', 'Partner berhasil dihapus!');
    }
}
