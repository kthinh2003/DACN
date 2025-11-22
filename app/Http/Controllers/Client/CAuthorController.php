<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AuthorModel;
use App\Models\ProductModel;
use App\Models\PhotoModel;
use Illuminate\Http\Request;

class CAuthorController extends Controller
{
    public function detail($id)
    {
        $author = AuthorModel::findOrFail($id);
        $pageName = $author->name;
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();
        
        // Get products by this author
        $products = ProductModel::where('id_author', $id)
            ->where('status', 1)
            ->whereNull('deleted_at')
            ->latest()
            ->paginate(12);
        
        return view('client.author.detail', compact('author', 'pageName', 'banner', 'products'));
    }
}

