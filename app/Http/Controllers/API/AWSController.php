<?php

namespace App\Http\Controllers\API;

use App\ArahAngin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AWSController extends Controller
{
    public function welcome()
    {
        $arah_angin = ArahAngin::orderBy('id','desc')->take(5)->get();
        $arah_angin_latest = ArahAngin::orderBy('id', 'desc')->first()->kecepatan;
//        dd($arah_angin_latest);

//        return view('welcome', [
//            'arah_angin' => $arah_angin, 'arah_angin_latest' => $arah_angin_latest
//        ]);
        return response()->json([
            'arah_angin' => $arah_angin,
            'arah_angin_latest' => $arah_angin_latest
        ]);
    }
}
