<?php

namespace App\Http\Controllers;

use App\Models\Relation;
use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religions = Religion::orderBy('created_at', 'desc')->get();

        return view('pages.master.religion.index', compact('religions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.master.religion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $religions = new Religion();
        $religions->create($request->all());

        return redirect()->route('agama.index');
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
        $religions = Religion::find($id);

        return view('pages.master.religion.edit', compact('religions'));
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
        $religions = Religion::find($id);
        $religions->update($request->all());

        return redirect()->route('agama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $religions = Religion::find($id);
        $religions->delete();

        return redirect()->route('agama.index');
    }

    public function trashed()
    {
        $religions = Religion::onlyTrashed()->get();
        // dd($religions);

        return view('pages.master.religion.trashed', [
            'religions' => $religions
        ]);
    }

    public function restore($id)
    {
        $religions = Religion::onlyTrashed()->findOrFail($id);
        $religions->restore();

        return redirect()->route('agama.index');
    }
}
