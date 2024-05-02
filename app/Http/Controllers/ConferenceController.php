<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreConferenceRequest;




class ConferenceController extends Controller
{
    public function show()
    {
        $conference = new Conference();

        return view('conferences.show', ['conferences' => $conference->all()]);
    }

    public function create(): View
    {
        return view('conferences.create');
    }

    public function store(StoreConferenceRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $conference = new Conference();
        $conference->title = $validated['title'];
        $conference->description = $validated['description'];
        $conference->date = $validated['date'];
        $conference->addres = $validated['addres'];
        $conference->save();

        return redirect()->route('conferences.show', ['id' => $conference->id]);
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
    
        return view('conferences.edit', compact('conference'));
    }

    public function update($id, StoreConferenceRequest $request): RedirectResponse
    {
        $conference = Conference::find($id);
        
        $validated = $request->validated();
        $conference->title = $validated['title'];
        $conference->description = $validated['description'];
        $conference->date = $validated['date'];
        $conference->addres = $validated['addres'];
        $conference->save();

        return redirect()->route('conferences.show', ['id' => $conference->id]);
    }

    public function delete($id)
    {

        $conference = Conference::find($id);

        $conference->delete();

        return redirect()->route('conferences.show');
    }
}