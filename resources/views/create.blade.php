<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // ...

    public function update(Request $request, Project $project): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:projects,name,' . $project->id . '|string|max:100',
            'description' => 'required|string|max:1000',
        ]);
        $project->update([
            'name' => $request->string('name'),
            'description' => $request->string('description'),
        ]);
        
        return redirect()->route('projects.index');
    }}