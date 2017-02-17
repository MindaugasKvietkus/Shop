<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\OrderProducts;
use App\Order;
use App\Products;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function computers()
    {
        $computers = DB::table('products')->where('category_number', '=', 1)->orderBy('name', 'asc')->get();

        return view('computer', ['computers' => $computers]);

    }

    public function mobiles()
    {
        $mobiles = DB::table('products')->where('category_number', '=', 2)->orderBy('name', 'asc')->get();

        return view('mobile', ['mobiles' => $mobiles]);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('home');

    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('cart');
    }

    public function removeItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('cart');

    }

    public function removeAll()
    {
        Session::forget('cart');

        return redirect()->route('cart');
    }

    public function saveOrder(Request $request)
    {
        if (!Session::has('cart')) {
            return view('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->payment_id = md5(uniqid(rand(1, 1000000), true));
        $order->cart = serialize($cart);
        $order->save();
        Session::forget('cart');
        return redirect()->route('home');

    }

    public function getOrders()
    {
        $orders = DB::table('orders')->get();
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('welcome', ['orders' => $orders]);
    }

    public function getOrder($id)
    {
        $orders = DB::table('orders')->where('id', '=', $id)->get();
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('order', ['orders' => $orders]);
    }

    public function cart()
    {

        if (!Session::has('cart')) {
            return view('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}