<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use App\Post;

class PhotosController extends Controller
{
    
    public function index()
    {
        $rows = Photos::paginate(10);
        return view('photos.index', compact('rows'));
    }

    public function create()
    {
        $post = Photos::All();
        return view('photos.add', compact('post'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photos_date' => 'required',
            'photos_title' => 'required',
            'photos_text' => 'required',
            'photos_post_id' => 'required'
        ]);

        Category::create([
            'photos_date' => $request->photos_date,
            'photos_title' => $request->photos_title,
            'photos_text' => $request->photos_text,
            'photos_post_id' => $request->photos_post_id
        ]);

        return redirect('photos');
    }

    public function edit($id)
    {
        $post = Post::All();
        $rows = Photos::findOrFail($id);
        return view('photos.edit', compact('rows','post'));
    }

    public function update(Request $request, $id)
    {
            $rows = Photos::find($id);
            $rows->update([
            'photos_date' => $request->photos_date,
            'photos_title' => $request->photos_title,
            'photos_text' => $request->photos_text,
            'photos_post_id' => $request->photos_post_id 
         ]);

        return redirect('post');
    }

    public function destroy($id)
    {
        $rows = Photos::findOrFail($id);
        $rows->delete();

        return redirect('photos');
    }
}
