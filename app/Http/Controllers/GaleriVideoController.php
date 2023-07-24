<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGaleriVideoRequest;
use App\Http\Requests\UpdateGaleriVideoRequest;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.galeri-video.index', [
            'galeriVideo' => GaleriVideo::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri-video.create', [
            'galeriVideo' => new GaleriVideo()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleriVideoRequest $request)
    {
        $attr = $request->all();

        $embedLink = $this->changeToEmbed($attr['video']);

        $attr['video'] =  $embedLink;

        GaleriVideo::create($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriVideo $galeriVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriVideo $galeriVideo)
    {
        return view('admin.galeri-video.edit', compact('galeriVideo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriVideoRequest $request, GaleriVideo $galeriVideo)
    {
        $attr = $request->all();

        $embedLink = $this->changeToEmbed($attr['video']);

        $attr['video'] =  $embedLink;

        $galeriVideo->update($attr);

        return redirect()->back()->with('success', __('Data berhasil tersimpan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriVideo $galeriVideo)
    {
        $galeriVideo->delete();

        return redirect()->back()->with('deleted', __('Data berhasil dihapus'));
    }

    private function changeToEmbed($video_link)
    {
        if (Str::contains($video_link, 'https://www.youtube.com/watch?v=')) {
            return Str::replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_link);
        }

        if (Str::contains($video_link, 'https://youtu.be/')) {
            return Str::replace('https://youtu.be/', 'https://www.youtube.com/embed/', $video_link);
        }

        return $video_link;
    }
}
