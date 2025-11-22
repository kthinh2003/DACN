<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\PhotoModel;

class COrderController extends Controller
{
    public function index()
    {
        if (!Auth::guard('member')->check()) {
            return redirect()->route('user.login');
        }

        $user = Auth::guard('member')->user();
        $orders = OrderModel::where('id_member', $user->id)->latest()->paginate(10);
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();

        return view('client.order.index', compact('orders', 'user', 'banner'));
    }

    public function detail($id)
    {
        if (!Auth::guard('member')->check()) {
            return redirect()->route('user.login');
        }

        $user = Auth::guard('member')->user();
        $hdb = OrderModel::where('id', $id)->where('id_member', $user->id)->get();

        if ($hdb->isEmpty()) {
            return redirect()->route('user.order')->with('fail', 'Đơn hàng không tồn tại');
        }

        $cthdb = OrderDetailModel::where('id_order', $hdb[0]->id)->get();
        $banner = PhotoModel::select('name', 'desc', 'photo_path')->where('type', 'banner')->get();

        return view('client.order.order_detail', compact('hdb', 'cthdb', 'user', 'banner'));
    }

    public function cancelOrder(Request $request)
    {
        if (!Auth::guard('member')->check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized']);
        }

        $user = Auth::guard('member')->user();
        $orderId = $request->input('orderId');

        $order = OrderModel::where('id', $orderId)->where('id_member', $user->id)->first();

        if (!$order) {
            return response()->json(['success' => false, 'message' => 'Đơn hàng không tồn tại']);
        }

        if ($order->status >= 4) {
            return response()->json(['success' => false, 'message' => 'Không thể hủy đơn hàng này']);
        }

        $order->update(['status' => 6]); // 6 = Cancelled

        return response()->json(['success' => true, 'message' => 'Hủy đơn hàng thành công']);
    }
}
