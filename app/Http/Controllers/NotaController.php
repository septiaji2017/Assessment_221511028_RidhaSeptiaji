<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $nota = Nota::all();

        return view('nota.index', ['nota' => $nota]);
    }
}
