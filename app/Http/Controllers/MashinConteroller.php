<?php

namespace App\Http\Controllers;

use App\Http\Requests\MashinRequest;
use App\Models\Mashin;
use Illuminate\Http\Request;

class MashinConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(MashinRequest $request)
    {
        dd("123");
        // Requestdən doğrulanan məlumatları al
        $validated = $request->validated();
    
        // Mashin modelini yarat
        $mashin = Mashin::create($validated);
    
        // Başarılı cavab qaytar
        return response()->json([
            'message' => 'Mashin uğurla yaradıldı.',
            'data' => $mashin
        ], 201);  // 201 status kodu yeni resursun yaradılmasını bildirir
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
