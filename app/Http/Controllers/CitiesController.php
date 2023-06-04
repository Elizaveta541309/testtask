<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitiesController
{
    function getCities() {
        $cities = DB::table('cities')->get();
        return view('cities')->with('cities',$cities);
    }
    public function setCity(Request $request) {
        $name = $request->input('cities');
        DB::table('cities')->insert([
            'name' => $name
        ]);
        return $this->getCities();
    }
}
