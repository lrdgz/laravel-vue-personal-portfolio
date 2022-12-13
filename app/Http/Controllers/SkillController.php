<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image'],
            'name' => ['required', 'min:3'],
        ]);

        $skill = Skill::create([
            'name'=> $request->name,
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $skill->addMediaFromRequest('image')->toMediaCollection('icon');
            return Redirect::route('skills.index')->with('message', 'Skill created successfully.');;
        }

        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => ['required', 'min:3']
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $skill->clearMediaCollection('icon');
            $skill->addMediaFromRequest('image')->toMediaCollection('icon');
        }

        $skill->update([
            'name' => $request->name
        ]);

        return Redirect::route('skills.index')->with('message', 'Skill updated successfully.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return Redirect::back()->with('message', 'Skill deleted successfully.');;
    }
}
