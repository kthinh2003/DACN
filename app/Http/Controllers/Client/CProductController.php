<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\PhotoModel;

class CProductController extends Controller
{
    public function index()
    {
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();
        $products = ProductModel::where('status', 1)->whereNull('deleted_at')->paginate(12);
        
        return view('client.product.index', compact('products', 'banner'));
    }

    public function detail($id)
    {
        $product = ProductModel::findOrFail($id);
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();
        
        return view('client.product.detail', compact('product', 'banner'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = ProductModel::where('name', 'like', '%' . $query . '%')
            ->where('status', 1)
            ->whereNull('deleted_at')
            ->paginate(12);
        
        return view('client.product.search', compact('products', 'query'));
    }

    public function add($id)
    {
        $product = ProductModel::findOrFail($id);
        return redirect()->route('user.cart');
    }

    public function searchAuthor(Request $request)
    {
        $query = $request->input('q');
        $authors = [
            ['id' => 1, 'name' => 'Tường An', 'subtitle' => 'Nhà thơ trẽ tài năng', 'color' => '#667eea', 'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)', 'tag1' => 'Lãng mạn', 'tag2' => 'Tình yêu'],
            ['id' => 2, 'name' => 'Tuấn Minh', 'subtitle' => 'Nhà thơ của tình yêu và ký ức', 'color' => '#f5576c', 'gradient' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)', 'tag1' => 'Sâu sắc', 'tag2' => 'Ký ức'],
            ['id' => 3, 'name' => 'Hương Lan', 'subtitle' => 'Nhà thơ của giấc mơ', 'color' => '#764ba2', 'gradient' => 'linear-gradient(135deg, #764ba2 0%, #667eea 100%)', 'tag1' => 'Mơ mộng', 'tag2' => 'Niềm tin'],
            ['id' => 4, 'name' => 'Thanh Tùng', 'subtitle' => 'Nhà thơ về cuộc sống', 'color' => '#764ba2', 'gradient' => 'linear-gradient(135deg, #f093fb 0%, #764ba2 100%)', 'tag1' => 'Triết lý', 'tag2' => 'Ý nghĩa'],
        ];

        // Lọc tác giả theo query
        $results = array_filter($authors, function($author) use ($query) {
            return stripos($author['name'], $query) !== false;
        });

        return view('client.authors-search', compact('results', 'query'));
    }
}
