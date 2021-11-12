<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handbag;
use App\Models\Review;
use App\Models\User;
use App\Models\WishList;
use App\Models\Order;

use function PHPUnit\Framework\isNull;

class OrderController extends Controller
{

    public function index()
    {
        $orders =  auth()->user()->orders()->get();
        $data["orders"] = $orders;
        return view('order.list')->with('data', $data);
    }

    public function showById($id)
    {
        $order = Order::with('items')->find($id);
        $data["order"] = $order;
        return view('order.id')->with('data', $data);
    }
}
