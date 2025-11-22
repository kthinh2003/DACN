<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\CartDetailModel;
use App\Models\ProductModel;
use App\Models\PhotoModel;

class CCartController extends Controller
{
    public function index()
    {
        if (!Auth::guard('member')->check()) {
            return redirect()->route('user.login');
        }

        $user = Auth::guard('member')->user();
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();
        
        return view('client.cart.index', compact('user', 'banner'));
    }

    public function add_index($id = null, $quantity = 1)
    {
        if (!Auth::guard('member')->check()) {
            return redirect()->route('user.login');
        }

        if ($id) {
            $product = ProductModel::findOrFail($id);
            // Add to cart logic here
        }

        return redirect()->route('user.cart');
    }

    public function changeQuantity($id, $method)
    {
        if (!Auth::guard('member')->check()) {
            return response()->json(['success' => false]);
        }

        // Update quantity logic
        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        if (!Auth::guard('member')->check()) {
            return redirect()->route('user.login');
        }

        // Delete from cart logic
        return redirect()->route('user.cart');
    }

    public function getDistricts(Request $request)
    {
        $provinceId = $request->input('provinceId');
        // Get districts based on province
        return response()->json([]);
    }

    public function getWards(Request $request)
    {
        $districtId = $request->input('districtId');
        // Get wards based on district
        return response()->json([]);
    }
}
