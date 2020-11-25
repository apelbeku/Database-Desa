<?php

namespace App\Http\Controllers;

use App\Models\Marital;
use Illuminate\Http\Request;

class MaritalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maritals = Marital::orderBy('created_at', 'desc')->get();

        return view('pages.master.marital.index', compact('maritals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.master.marital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maritals = new Marital();
        $maritals->create($request->all());

        return redirect()->route('pernikahan.index');
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
        $maritals = Marital::find($id);

        return view('pages.master.marital.edit', compact('maritals'));
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
        $maritals = Marital::find($id);
        $maritals->update($request->all());

        return redirect()->route('pernikahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maritals = Marital::find($id);
        $maritals->delete();

        return redirect()->route('pernikahan.index');
    }
}
