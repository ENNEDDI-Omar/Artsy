<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners=Partner::all();
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
    public function store(PartnerStoreRequest $request)
    {
        $PartnerData=$request->validated();
        $partners=Partner::create($PartnerData);
        $partners->addMediaFromRequest('logo')->toMediaCollection('partners');
        return redirect()->route('partners.index')->with('success', 'Partner créé avec Succés!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return view('admin.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerUpdateRequest $request, Partner $partner)
    {
        $partnerData=$request->validated();
        $partner->update($partnerData);
        if ($request->hasFile('logo')) {
            $partner->clearMediaCollection('partners');
            $partner->addMediaFromRequest('logo')->toMediaCollection('partners');
        }
        return redirect()->route('partners.index')->with('succes', 'Partner mis à jour avec succés!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index')->with('succes', 'Partner supprimé avec succés!');
    }
}
