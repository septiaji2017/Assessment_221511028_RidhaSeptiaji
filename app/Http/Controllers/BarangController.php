<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        return view('barang.index', ['barangs' => $barangs]);
    }

    public function add()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'KodeBarang'   => 'required|max:25',
            'NamaBarang'   => 'required|max:50',
            'Satuan'       => 'required|max:25',
            'HargaSatuan'  => 'required|integer',
            'Stok'         => 'required|integer',
        ]);

        // Create a new Barang record
        Barang::create($validatedData);

        return redirect()->route('barang.index')->with('success', 'Barang created successfully!');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            abort(404, 'Barang not found');
        }

        return view('barang.edit', ['barang' => $barang]);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            abort(404, 'Barang not found');
        }

        $validatedData = $request->validate([
            // 'KodeBarang'   => 'required|max:25',
            'NamaBarang'   => 'required|max:50',
            'Satuan'       => 'required|max:25',
            'HargaSatuan'  => 'required|integer',
            'Stok'         => 'required|integer',
        ]);

        $barang->update($validatedData);

        return redirect()->route('barang.index')->with('success', 'Barang updated successfully');
    }    

    public function destroy($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            abort(404, 'Barang not found');
        }

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully');
    }    

}
