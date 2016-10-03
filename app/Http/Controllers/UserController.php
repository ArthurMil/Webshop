<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use App\Order;

class UserController extends Controller
{

    public function getSignup() {
        return view('user.signup');
    }

    public function postSignup(Request $request) {
        $this->validate($request, [
           'name' => 'required|unique:users',
           'password' => 'required|min:4'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        return redirect()->route('product.index');
    }

    public function getSignin() {
        return view('user.signin');
    }

    public function postSignin(Request $request) {

        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')])) {
            return redirect()->route('user.adminPanel');
        }
        return redirect()->back();
    }

    public function getPanel() {
        $orders = Order::orderBy('created_at','desc')->paginate(2);
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('user.adminPanel', ['orders' => $orders]);
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('product.index');
    }
}
