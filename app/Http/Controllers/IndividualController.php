<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\FamilyCard;
use App\Models\Individual;
use App\Models\Marital;
use App\Models\Profession;
use App\Models\Relation;
use App\Models\Religion;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $individuals = Individual::orderBy('created_at', 'desc')->get();
        $individuals = Individual::orderBy('created_at', 'desc')->get();

        return view('pages.citizen.individual.index', compact('individuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $individuals = Individual::all();
        $professions = Profession::all();
        $educations = Education::all();
        $religions = Religion::all();
        $relations = Relation::all();
        $maritals = Marital::all();
        $family_cards = FamilyCard::findOrFail($id);

        return view('pages.citizen.individual.create', compact(
            'individuals',
            'professions',
            'educations',
            'religions',
            'relations',
            'maritals',
            'family_cards'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $individuals = Individual::create($request->all());

        return redirect()->route('kartukeluarga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $individual = Individual::find($id);
        $professions = Profession::all();
        $educations = Education::all();
        $religions = Religion::all();
        $relations = Relation::all();
        $maritals = Marital::all();
        $family_cards = FamilyCard::all();

        return view('pages.citizen.individual.edit', [
            'individual' => $individual,
            'professions' => $professions,
            'educations' => $educations,
            'religions' => $religions,
            'relations' => $relations,
            'maritals' => $maritals,
            'family_cards' => $family_cards
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $individuals = Individual::find($id);
        $individuals->update($request->all());

        return redirect()->route('perseorangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $individuals = Individual::find($id);
        $individuals->delete();

        return redirect()->route('kartukeluarga.index');
    }

    public function trashed()
    {
        $individuals = Individual::onlyTrashed()->get();

        return view('pages.citizen.individual.trashed', compact('individuals'));
    }

    public function restore($id)
    {
        $individuals = Individual::onlyTrashed()->findOrFail($id);

        return redirect()->route('perseorangan.index');
    }
}
