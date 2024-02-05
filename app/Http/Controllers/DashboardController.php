<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                'kar' => '100 TL',
                'yatirilan_para' => '1000 TL',
                'max_n' => '5',
                'last_n' => '3',
                'max_n_tarih' => '2024-02-04',
                'son_gelen_renk' => 'Kırmızı',
                'son_gelen_sayi' => '18',
                'oynanilan_renk' => 'Siyah',
                'durum' => 'Kazandı',
                'son_log' => 'Oyun kazanıldı.'
            ]
        ];

        return view('dashboard', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
