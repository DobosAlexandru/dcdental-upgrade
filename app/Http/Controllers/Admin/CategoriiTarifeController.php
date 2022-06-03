<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TarifCategory;
use Illuminate\Support\Str;
class CategoriiTarifeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriiTarife = TarifCategory::all();

        return view('admin.dashboard.tarife.categorii-tarife.index', ['categoriiTarife' => $categoriiTarife]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.tarife.categorii-tarife.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $categorie = new TarifCategory;

        $categorie->name = $request->name;
        $categorie->slug = Str::slug($request->name);

        $categorie->save();

        return redirect()->route('categorii-tarife.index')->with('success', 'Categorie tarif creata cu succes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TarifCategory $categorie)
    {
        return view('admin.dashboard.tarife.categorii-tarife.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TarifCategory $categorie)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $categorie->name = $request->name;
        $request->slug = Str::slug($request->name);
        $categorie->save();

        return redirect()->route('categorii-tarife.index')->with('success', 'Categorie modificata cu succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TarifCategory $categorie)
    {
        $categorie->delete();

        return redirect()->route('categorii-tarife.index')->with('success', 'Categorie stearsa');
    }
}
