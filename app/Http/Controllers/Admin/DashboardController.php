<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{


    public function index()
    {
        Auth::guard('admin')->check();
        // Ensure user is authenticated before returning the view
        return view('admin.index', ['heading' => 'Dashboard']);


    }
}





