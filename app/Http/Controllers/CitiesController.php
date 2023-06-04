<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class CitiesController
{
    /**
     * Возвращает города
     */
    function getCities()
    {
        $cities = DB::table('cities')->get();
        return view('cities')->with('cities', $cities);
    }

    /**
     * Создание города
     * @param Request $request
     */
    public function setCity(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:250', 'regex:/^[-A-Za-z\p{Cyrillic}\s]+$/u']
        ]);
        DB::table('cities')->insert([
            'name' => $validatedData['name']
        ]);
        return redirect()->action(
            [CitiesController::class, 'getCities']
        );
    }
}
