<?php

namespace App\Http\Controllers;

use App\Models\FamilyCard;
use Illuminate\Http\Request;

class FamilyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FamilyCard::orderBy('created_at', 'desc')->get();
        // dd($data);

        return view('pages.citizen.famly.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.citizen.famly.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new FamilyCard();
        $data->create($request->all());

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
        $data = FamilyCard::find($id);
        // dd($data);

        return view('pages.citizen.famly.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FamilyCard::find($id);
        $data->delete();

        return redirect()->route('kartukeluarga.index');
    }

    public function trashed()
    {
        $data = FamilyCard::onlyTrashed()->get();

        return view('pages.citizen.famly.trashed', compact('data'));
    }

    public function restore($id)
    {
        $data = FamilyCard::onlyTrashed()->findOrFail($id);
        $data->restore();

        return redirect()->route('kartukeluarga.index');
    }
}
