<?php

namespace App\Http\Controllers;

use App\Models\GuideAprendices;
use Illuminate\Http\Request;

class GuideAprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GuideAprendices=GuideAprendices::all();
        return view('asignar.index', compact('GuideAprendices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $GuideAprendice = GuideAprendices::create([

            'guide_id' => $request->input('guide_id'),
            'apprentices_id' => $request->input('apprentices_id'),
        ]);
        return redirect('GuiasAprendices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $GuideAprendice =GuideAprendices::find($id);
        return view('asignar.show',compact('GuideAprendice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $GuideAprendice =GuideAprendices::find($id);
        return view('asignar.edit',compact('GuideAprendice'));
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
        $GuideAprendice =GuideAprendices::find($id)->update([
            'guide_id' => $request->input('guide_id'),
            'apprentices_id' => $request->input('apprentices_id'),
        ]);
        return redirect('GuiasAprendices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guideaprendice =GuideAprendices::find($id)->delete();
        return redirect('GuiasAprendices');
    }
}
