<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenan;

class TenanController extends Controller
{
    public function index()
    {
        $tenan = Tenan::all();

        return view('tenan.index', ['tenan' => $tenan]);
    }
}
