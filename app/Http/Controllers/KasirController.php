<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasir;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = Kasir::all();

        return view('kasir.index', ['kasir' => $kasir]);
    }
}
