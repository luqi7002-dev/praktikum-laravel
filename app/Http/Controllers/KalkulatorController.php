<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga()
    {
        return view('segitiga');
    }

    public function hitungSegitiga(Request $request)
    {
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', compact('alas', 'tinggi', 'luas'));
    }
}
