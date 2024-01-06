<?php

namespace App\Http\Controllers;

use App\Models\ProjectVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.video.index', [
            'title' => 'Video',
            'projectVideos' => ProjectVideo::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectVideo $projectVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectVideo $projectVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectVideo $projectVideo)
    {
        $projectVideo = ProjectVideo::findOrFail($request->id);
        $validated = $request->validate([
            'video' => 'required|file|mimetypes:video/mp4|max:10241'
        ]);

        if ($projectVideo->video) {
            Storage::delete($projectVideo->video);
        };
        $validated['video'] = $validated['video']->store('project-video');

        $projectVideo->update($validated);

        return redirect('/admin/dashboard/video')->with([
            'success' => 'Mengubah Video'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectVideo $projectVideo)
    {
        //
    }
}
