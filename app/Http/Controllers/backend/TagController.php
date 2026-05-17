<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Str;


class TagController extends Controller implements HasMiddleware
{
    //

    public static function Middleware(): array
    {
        return [
            new Middleware('permission:Tags Management'),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tags = Tag::paginate(20);

        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:tags,name'],
        ]);

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        $tag->is_active = $request->has('status') ? 1 : 0;
        $tag->save();

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data created successfully!',
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:tags,name,'.$tag->id],
        ]);

        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        $tag->is_active = $request->has('status') ? 1 : 0;
        $tag->save();

        return redirect()->route('admin.tags.index')->with('toast', [
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Data updated successfully!',
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return response()->json([
            'toast' => [
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Data deleted successfully!',
            ],
        ]);

    }
}
