<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoModel;
use App\Models\AuthorModel;
use App\Models\PoemModel;

class CAuthorController extends Controller
{
    public function index()
    {
        $query = request('search');
        
        if ($query) {
            $authors = AuthorModel::where('status', 1)
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
        } else {
            $authors = AuthorModel::where('status', 1)->get();
        }
        
        return view('client.authors', compact('authors'));
    }

    public function detail($id)
    {
        $author = AuthorModel::findOrFail($id);
        $author->poems = $author->poems()->get();
        
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();
        
        return view('client.author-detail', compact('author', 'banner'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        
        $authors = AuthorModel::where('status', 1)
            ->where('name', 'LIKE', "%{$query}%")
            ->get(['id', 'name', 'subtitle', 'color']);
        
        return response()->json($authors);
    }
}

