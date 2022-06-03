<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TarifCategory;
use App\Models\Treatment;
class TarifeController extends Controller
{

    public function index()
    {
        $treatmentsGroup = Treatment::query()
            ->addSelect(['category_name' => TarifCategory::select('name')->whereColumn('id', 'treatments.tarifCategory_id')->limit(1)])
            ->get('id','name','category_name')
            ->sortBy('name')
            ->groupBy('category_name');

        // $categoriiTarife = TarifCategory::('treatments')->get();

        return view('front.tarife',[
            'page' => [
                'title' => 'Tarife',
                'description' => 'Gama de preturi stomatologie, implantologie, chirurgie, protetica, estetica dentara, ortodontie, stomatologie copii.',
            ],
            'treatmentsGroup' => $treatmentsGroup
        ]);
    }

}
