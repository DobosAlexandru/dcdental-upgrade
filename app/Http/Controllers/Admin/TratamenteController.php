<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\TarifCategory;
use Illuminate\Http\Request;
use App\Models\Treatment;
use Illuminate\Support\Str;


class TratamenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.tarife.tratamente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.tarife.tratamente.create',[
            'categoriiTarife' => TarifCategory::all()
        ]);
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
            'name' => 'required',
            'price' => 'required',
            'tarifCategory_id' => 'required',
            'price_unit' => 'sometimes',
            'info' => 'sometimes'
        ]);

        $tratament = new Treatment;
        $tratament->name = $request->name;
        $tratament->slug = Str::slug($request->name);
        $tratament->tarifCategory_id = $request->tarifCategory_id;
        $tratament->price = $request->price;
        $tratament->price_unit = $request->price_unit;
        $tratament->info = $request->info;


        $tratament->save();

        return redirect()->route('tratamente.index')->with('success', 'Tratament creat cu success');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $tratament)
    {
        $categoriiTarife = TarifCategory::all();
        return view('admin.dashboard.tarife.tratamente.edit', compact('tratament', 'categoriiTarife'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $tratament)
    {
        $validated = $request->validate([
            'name' => 'required',
            'tarifCategory_id' => 'required',
            'price' => 'required',
            'price_unit' => 'required',
            'info' => 'sometimes'
        ]);

        $tratament->name = $request->name;
        $tratament->slug = Str::slug($request->name);
        $tratament->tarifCategory_id = $request->tarifCategory_id;
        $tratament->price = $request->price;
        $tratament->price_unit = $request->price_unit;
        $tratament->info = $request->info;

        $tratament->save();
        return redirect()->route('tratamente.index')->with('success', 'Tratament modificat cu success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $tratament)
    {
        $tratament->delete();

        return redirect()->route('tratamente.index')->with('success', 'Tratament sters cu succes');
    }
}
