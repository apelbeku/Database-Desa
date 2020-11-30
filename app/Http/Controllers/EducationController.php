<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::orderBy('created_at', 'desc')->get();

        return view('pages.master.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.master.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $educations = new Education();
        $educations->create($request->all());

        return redirect()->route('pendidikan.index');
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
        $educations = Education::find($id);

        return view('pages.master.education.edit', compact('educations'));
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
        $educations = Education::find($id);
        $educations->update($request->all());

        return redirect()->route('pendidikan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educations = Education::find($id);
        $educations->delete();

        return redirect()->route('pendidikan.index');
    }

    public function trashed()
    {
        $educations = Education::onlyTrashed()->get();

        return view('pages.master.education.trashed', compact('educations'));
    }

    public function restore($id)
    {
        $educations = Education::onlyTrashed()->findOrFail($id);
        $educations->restore();

        return redirect()->route('pendidikan.index');
    }
}
