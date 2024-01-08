<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Inventaris;

use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventaris = Inventaris::with('produk')->orderBy('inv_id')->get();
        return view('inventaris.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('inventaris.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inventaris::create($request->all());
        return redirect()->route('inventaris.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventaris = Inventaris::with('produk')->find($id);
        $produk = Produk::all();
        return view('inventaris.edit', compact('inventaris', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Inventaris::find($id)->update($request->all());
        return redirect()->route('inventaris.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Inventaris::destroy($id);
        return redirect()->route('inventaris.index');
    }
}
