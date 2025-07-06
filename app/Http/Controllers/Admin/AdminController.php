<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\AuthAdminRequest;

class AdminController extends Controller
{
    /**
    * Display the customers orders & reviews
    */
    public function index() : View
    { 
        $userCount = User::count();
        $orderCount = Order::count();
        $reviewCount = Review::count();

        return view('admin.dashboard', compact('userCount', 'orderCount', 'reviewCount'));
    }

    /**
    * Display the login form for the admin
    */
    public function login() : View
    {
        return view('admin.login');
    }

    /**
    * Log in the admin
    */
    public function auth(AuthAdminRequest $request) : RedirectResponse
    {       
        if(auth()->guard('admin')->attempt ($request->validated())) {
            $request->session()->regenerate();
            return to_route('admin.index');
        } else {
            return back()->withErrors([
            'email' => 'These credentials do not match our records.'
            ])->onlyInput('email');
        }
    }

    /**
    * Log out the admin
    */
    public function logout(Request $request) : RedirectResponse
    {
        auth()->guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('admin.logiņ');
    }

}