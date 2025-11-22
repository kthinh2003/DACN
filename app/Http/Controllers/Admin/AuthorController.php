<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthorModel;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = AuthorModel::withTrashed()->paginate(10);
        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:table_authors',
            'birth_year' => 'nullable|integer',
            'bio' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'color' => 'nullable|string',
            'gradient' => 'nullable|string',
            'tag1' => 'nullable|string',
            'tag2' => 'nullable|string',
            'status' => 'required|in:0,1'
        ]);

        AuthorModel::create($validated);

        return redirect()->route('author.index')->with('success', 'Tác giả đã được thêm thành công');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author = AuthorModel::findOrFail($id);
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $author = AuthorModel::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:table_authors,name,' . $id,
            'birth_year' => 'nullable|integer',
            'bio' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'color' => 'nullable|string',
            'gradient' => 'nullable|string',
            'tag1' => 'nullable|string',
            'tag2' => 'nullable|string',
            'status' => 'required|in:0,1'
        ]);

        $author->update($validated);

        return redirect()->route('author.index')->with('success', 'Tác giả đã được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $author = AuthorModel::findOrFail($id);
        $author->delete();

        return redirect()->route('author.index')->with('success', 'Tác giả đã được xóa thành công');
    }

    /**
     * Restore soft deleted resource.
     */
    public function restore($id)
    {
        $author = AuthorModel::withTrashed()->findOrFail($id);
        $author->restore();

        return redirect()->route('author.index')->with('success', 'Tác giả đã được khôi phục');
    }
}
