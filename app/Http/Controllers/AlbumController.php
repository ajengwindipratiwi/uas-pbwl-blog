<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use App\Album;

class AlbumController extends Controller
{
    public function index()
    {
        $rows = Album::paginate(10);
        return view('album.index', compact('rows'));
    }

    public function create()
    {
        $photos = Photos::All();
        return view('album.add', compact('photos'));
    }

    public function store(Request $request)
    {
         $request->validate([
            'album_name' => 'required',
            'album_text' => 'required',
            'album_photos_id' => 'required'
        ]);

        Category::create([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_photos_id' => $request->album_photos_id
        ]);

        return redirect('album');
    }

    public function edit($id)
    {
        $photos = Photos::All();
        $rows = Album::findOrFail($id);
        return view('album.edit', compact('rows','photos'));
    }

    public function update(Request $request, $id)
    {
        $rows = Album::find($id);
            $rows->update([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_photos_id' => $request->album_photos_id
         ]);

        return redirect('album');
    }

    public function destroy($id)
    {
        $rows = Album::findOrFail($id);
        $rows->delete();

        return redirect('album');
    }
}
